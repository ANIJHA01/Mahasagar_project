<?php

class AdvertisementController {
    private $db;
    function __construct($db) {
        $this->db = $db;
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
                mysqli_free_result($db_result); // Free the result set memory
                
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
            $file_ext_array = explode('.', $file_name);
            $file_ext = strtolower(end($file_ext_array));
            $extensions = array("jpeg", "jpg", "png");
            $errors = [];
    
            if (!in_array($file_ext, $extensions)) {
                $errors[] = "This extension file is not allowed. Please choose a JPG or PNG file.";
            }
            $max_size = 1 * 1024 * 1024;
            if ($file_size > $max_size) {
                $errors[] = "File size exceeds the 1MB limit.";
            }
            list($width, $height) = getimagesize($file_tmp);
            $min_width = 1600;
            $min_height = 250;
            if ($width < $min_width || $height < $min_height) {
                $errors[] = "Image dimensions are too small. Minimum size is 1600x250 pixels.";
            }
            if (!empty($errors)) {
                $_SESSION['status'] = implode(" ", $errors);
                $_SESSION['status_code'] = "error";
                return false;
            }
            if (!is_dir($upload_path)) {
                mkdir($upload_path, 0777, true);
            }
            if (move_uploaded_file($file_tmp, $upload_path . $file_name)) {
                return $file_name;
            } else {
                $_SESSION['status'] = "Failed to upload file.";
                $_SESSION['status_code'] = "error";
                return false;
            }
        }
        return '';
    }

    public function sanitize($data) {
        return $this->db->real_escape_string($data);
    }

    public function add_advertisement() {
        $file_name = $this->handle_file_upload("news_ads", 'fileToUpload');
        if (!$file_name && !empty($_FILES['fileToUpload']['name'])) {
            echo "<div class='alert alert-danger'>File upload failed.</div>";
            return;
        }
        $title = isset($_POST['ads_title']) ? $this->sanitize($_POST['ads_title']) : '';
        $content = isset($_POST['ads_content']) ? $this->sanitize($_POST['ads_content']) : '';
        $page-author = isset($_POST['page-author']) ? $this->sanitize($_POST['page-author']) : '';
        $status = 1;

        $query = "INSERT INTO news_ads(ads_title, ads_content, ads_image, page-author, ads_status)
        VALUES('{$title}', '{$content}', '{$file_name}', '{$page-author}', '{$status}');";
        $response = json_decode($this->execute_db_query($query), true);

        if ($response["status"] == true) {
            $_SESSION['status'] = "Advertisement added successfully.";
            $_SESSION['status_code'] = "success";
            header("Location: /mahasagar-prj3/home?status=1");
            exit();
        } else {
            $_SESSION['status'] = "Failed to add advertisement.";
            $_SESSION['status_code'] = "error";
            header("Location: /mahasagar-prj3/home?status=0");
        }
    }

    public function edit_news_post($post_data, $file_data) {
        $file_name = $this->handle_file_upload(NEWS_UPLOAD_PATH, 'new-image');
        if (!$file_name && !empty($file_data['fileToUpload']['name'])) {
            return json_encode([
                "status" => false,
                "result" => null,
                "message" => "File upload failed."
            ]);
        }
        $ads_title = $this->sanitize($post_data["ads_title"]);
        $ads_content = $this->sanitize($post_data["ads_content"]);
        $ads_status = 1;
        $ads_id = $post_data["ads_id"];
        $query = "UPDATE news_ads SET 
            ads_title='$ads_title'
            , ads_content='$ads_content'
            , ads_image='{$file_name}'
            , `ads_status` = '$ads_status'
            WHERE ads_id=$ads_id";
        $response = json_decode($this->execute_db_query($query), true);

        if ($response["status"] == true) {
            $_SESSION['status'] = "Now you edit new things";
            $_SESSION['status_code'] = "success";
            header("Location: /mahasagar-prj3/home?status=1");
            exit();
        } else {
            $_SESSION['status'] = "No such user found";
            $_SESSION['status_code'] = "error";
            header("Location: /mahasagar-prj3/home?status=0");
            exit();
        }
    }
}

?>
