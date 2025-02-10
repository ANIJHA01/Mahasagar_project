<?php 

    class FrontImageController{
        private $db;

        function __construct($db) {
            $this->db = $db;
        }
        public function sanitize($data) {
            return $this->db->real_escape_string($data);
        }
        private function execute_db_query($query) {
            try {
                $db_result = mysqli_query($this->db, $query);
            
                if (!empty(mysqli_error($this->db))) {
                    return json_encode([
                        "status" => false,
                        "result" => null,
                        "message" => "DB operation failed. " . mysqli_error($this->db)
                    ]);
                }
        
                if ($db_result === true) {
                    return json_encode([
                        "status" => true,
                        "result" => mysqli_affected_rows($this->db),
                        "message" => "DB operation successful"
                    ]);
                } elseif ($db_result instanceof mysqli_result) {
                    $result = mysqli_fetch_all($db_result, MYSQLI_ASSOC);
                    mysqli_free_result($db_result);
                    
                    return json_encode([
                        "status" => true,
                        "result" => $result,
                        "message" => "DB operation successful"
                    ]);
                } else {
                    return json_encode([
                        "status" => false,
                        "result" => null,
                        "message" => "Unexpected result type from DB operation."
                    ]);
                }
        
            } catch (mysqli_sql_exception $e) {
                return json_encode([
                    "status" => false,
                    "result" => null,
                    "message" => "DB operation failed: " . $e->getMessage() . ". Query: " . $query
                ]);
            } catch (Exception $e) {
                return json_encode([
                    "status" => false,
                    "result" => null,
                    "message" => "An unexpected error occurred: " . $e->getMessage()
                ]);
            }
        } 
        private function handle_file_upload($upload_path, $input_name) {
            if (!empty($_FILES[$input_name]['name'])) {
                $file_name = $_FILES[$input_name]['name'];
                $file_tmp = $_FILES[$input_name]['tmp_name'];
                $file_size = $_FILES[$input_name]['size'];
                $file_ext = strtolower(pathinfo($file_name, PATHINFO_EXTENSION));
                $allowed_extensions = ["jpeg", "jpg", "png"];
                $errors = [];
        
                if (!in_array($file_ext, $allowed_extensions)) {
                    $errors[] = "This extension file is not allowed. Please choose a JPG or PNG file.";
                }
        
                $max_size = 1 * 1024 * 1024; // 1 MB
                if ($file_size > $max_size) {
                    $errors[] = "File size exceeds the 1MB limit.";
                }
        
                if (!empty($errors)) {
                    $_SESSION['status'] = implode(" ", $errors);
                    $_SESSION['status_code'] = "error";
                    return false;
                }
        
                // Generate unique file name
                $unique_name = uniqid("img_", true) . '.' . $file_ext;
        
                if (!is_dir($upload_path)) {
                    mkdir($upload_path, 0777, true);
                }
                if (move_uploaded_file($file_tmp, $upload_path . $unique_name)) {
                    return $unique_name;
                } else {
                    $_SESSION['status'] = "Failed to upload file.";
                    $_SESSION['status_code'] = "error";
                    return false;
                }
            }
            return '';
        }
        public function addfrontImg() {
            $file_name = $this->handle_file_upload(NEWS_UPLOAD_PATH, 'frontAddImg');
            if (!$file_name && !empty($_FILES['frontAddImg']['name'])) {
                return json_encode([
                    "status" => false,
                    "message" => "File upload failed."
                ]);
            }
            $query = "INSERT INTO font_ms (ms_images) VALUES ('$file_name')";
            $response = json_decode($this->execute_db_query($query), true);
        
            if ($response["status"] == true) {
                return json_encode([
                    "status" => true,
                    "message" => "Image added successfully!"
                ]);
            } else {
                return json_encode([
                    "status" => false,
                    "message" => "Failed to insert image into the database."
                ]);
            }
        }
        public function editfrontImg($file_data) {
            $image_id = intval($file_data['ms_id']); 
        
            $file_name = $this->handle_file_upload(NEWS_UPLOAD_PATH, 'frontEditImg');
            
            if (!$file_name && empty($_FILES['frontEditImg']['name'])) {
                $query = "SELECT ms_images FROM font_ms WHERE ms_id = ?";
                $stmt = $this->db->prepare($query);
                $stmt->bind_param("i", $image_id);
                $stmt->execute();
                $result = $stmt->get_result();
                
                if ($result->num_rows > 0) {
                    $row = $result->fetch_assoc();
                    $file_name = $row['ms_images'];
                } else {
                    return json_encode([
                        "status" => false,
                        "message" => "File upload failed, and no existing image found."
                    ]);
                }
            }
        
            $query = "UPDATE font_ms SET ms_images = ? WHERE ms_id = ?";
            $stmt = $this->db->prepare($query);
            $stmt->bind_param("si", $file_name, $image_id);
        
            if ($stmt->execute()) {
                return json_encode([
                    "status" => true,
                    "message" => "Image updated successfully!"
                ]);
            } else {
                return json_encode([
                    "status" => false,
                    "message" => "Failed to update image in the database."
                ]);
            }
        }
        
    }
?>