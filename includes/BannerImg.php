<?php 

class BannerImageController{
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
            $file_ext_array = explode('.', $file_name);
            $file_ext = strtolower(end($file_ext_array));
            $extensions = array("jpeg", "jpg", "png");
            $errors = [];

            if (!in_array($file_ext, $extensions)) {
                $errors[] = "This extension file is not allowed; please choose a JPG or PNG file.";
            }
            
            if (empty($errors)) {
                if (!is_dir($upload_path)) { mkdir($upload_path, 0777, true); }
                move_uploaded_file($file_tmp, $upload_path . $file_name);
                return $file_name;
            } else {
                return false;
            }
        }
        return '';
    }

    public function sanitize($data) {
        return $this->db->real_escape_string($data);
    }

    public function addbannerImg(){

        $file_name = $this->handle_file_upload(NEWS_UPLOAD_PATH, 'adImage');
        if (!$file_name && !empty($_FILES['adImage']['name'])) {
            echo "<div class='alert alert-danger'>File upload failed.</div>";
            return;
        }

        $query = "INSERT INTO mhs_meta (meta_key, meta_value) VALUES ('banner_ad_img', '$file_name')";
        $response = json_decode($this->execute_db_query($query), true);

        if ($response["status"] == true) {
            $_SESSION['status'] = "Banner Images Add Successfully!";
            $_SESSION['status_code'] = "success";
            header("Location: /mahasagar-prj3/home?status=1");
            exit();
        } else {
            $_SESSION['status'] = "No such user found";
            $_SESSION['status_code'] = "error";
            header("Location: /mahasagar-prj3/home?status=0");
        }

    }

    public function editbannerImg($file_data) {
        $file_name = $this->handle_file_upload(NEWS_UPLOAD_PATH, 'bannerEditImg');
        if (!$file_name && !empty($file_data['bannerEditImg']['name'])) {
            return json_encode([
                "status" => false,
                "result" => null,
                "message" => "File upload failed."
            ]);
        }
        $query = "UPDATE mhs_meta SET meta_value = '$file_name' WHERE meta_key = 'banner_ad_img'";
        $response = json_decode($this->execute_db_query($query), true);
        if ($response["status"] == true) {
            $_SESSION['status'] = "Banner image is uploaded...";
            $_SESSION['status_code'] = "success";
            header("Location: /mahasagar-prj3/home?status=1");
            exit();
        } else {
            $_SESSION['status'] = "No Banner image found...";
            $_SESSION['status_code'] = "error";
            header("Location: /mahasagar-prj3/home?status=0");
            exit();
        }
    }


    }
?>