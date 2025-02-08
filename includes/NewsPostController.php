<?php
class NewsPostController {
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
            // list($width, $height) = getimagesize($file_tmp);
            // $min_width = 1600;
            // $min_height = 250;
            // if ($width > $min_width || $height > $min_height) {
            //     $errors[] = "Image dimensions are too small. Minimum size is 1600x250 pixels.";
            // }
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

    public function user_login() {
        $username = $this->sanitize($_POST['username']);
        $password = md5($this->sanitize($_POST['password']));

        $query = "SELECT user_id, username, `role` FROM user WHERE username = '{$username}' AND password = '{$password}'";
        $response = json_decode($this->execute_db_query($query), true);

        if (!empty($response["result"])) {
            $_SESSION['user_id'] = $response["result"][0]['user_id'];
            $_SESSION['username'] = $response["result"][0]['username'];
            $_SESSION['role'] = $response["result"][0]['role'];
            $_SESSION['status'] = "You are log in..";
            $_SESSION['status_code'] = "success";
            header("Location: /mahasagar-prj3/home?login_status=1");
            exit;
        } else {
            $_SESSION['status'] = "No such user found";
            $_SESSION['status_code'] = "error";
            header("Location: /mahasagar-prj3/home?login_status=0");
            exit;
        }
    }

    public function add_news_post() {
        $file_name = $this->handle_file_upload(NEWS_UPLOAD_PATH, 'fileToUpload');
        if (!$file_name && empty($file_data['fileToUpload']['name'])) {
            return json_encode([
                "status" => false,
                "result" => null,
                "message" => "File upload failed."
            ]);
        }

        $title = isset($_POST['post_title']) ? $this->sanitize($_POST['post_title']) : '';
        $content = isset($_POST['postdesc']) ? $this->sanitize($_POST['postdesc']) : '';
        $status = 1;
        $page_author = isset($_POST['post_author']) ? $this->sanitize($_POST['post_author']) : '';
        $category = isset($_POST['category']) ? $this->sanitize($_POST['category']) : 0;

        $query = "INSERT INTO news_posts (news_title, news_description, news_banner, category, page_author, status)
            VALUES ('$title', '$content', '$file_name','$category', '$page_author', '$status');";

        $response = json_decode($this->execute_db_query($query), true);

        if ($response["status"] == true) {
            $_SESSION['status'] = "News Post Added Successfully!";
            $_SESSION['status_code'] = "success";
            header("Location: /mahasagar-prj3/home?status=1");
            exit();
        } else {
            $_SESSION['status'] = "No such user found";
            $_SESSION['status_code'] = "error";
            header("Location: /mahasagar-prj3/home?status=0");
        }
    }

    public function edit_news_post($post_data, $file_data) {
        // Handle file upload only if a new file is provided
        $file_name = null;
        if (!empty($file_data['new-image']['name'])) {
            $file_name = $this->handle_file_upload(NEWS_UPLOAD_PATH, 'new-image');
            if (!$file_name) {
                return json_encode([
                    "status" => false,
                    "result" => null,
                    "message" => "File upload failed."
                ]);
            }
        }
    
        // Sanitize input data
        $news_title = $this->sanitize($post_data["post_title"]);
        $news_desc = $this->sanitize($post_data["postcontent"]);
        $category = $this->sanitize($post_data["category"]);
        $news_status = 1; // Assuming active status
        $modified_by = isset($_SESSION['user_id']) ? $_SESSION['user_id'] : 0;
        $news_id = (int)$post_data["news_id"];
    
        // Construct query
        $query = "UPDATE news_posts SET 
                    news_title = '$news_title',
                    news_description = '$news_desc',
                    category = '$category',
                    modified_by = '$modified_by',
                    `status` = '$news_status'";
    
        // Include file name in the query if a new file was uploaded
        if (!empty($file_name)) {
            $query .= ", news_banner = '$file_name'";
        }
    
        // Complete query
        $query .= " WHERE id = $news_id";
    
        // Execute the query
        $response = json_decode($this->execute_db_query($query), true);
    
        // Handle response
        if ($response["status"] === true) {
            $_SESSION['status'] = "News updated successfully!";
            $_SESSION['status_code'] = "success";
            header("Location: /mahasagar-prj3/home?status=1");
            exit();
        } else {
            $_SESSION['status'] = "Failed to update news.";
            $_SESSION['status_code'] = "error";
            header("Location: /mahasagar-prj3/home?status=0");
            exit();
        }
    }
    
}

?>