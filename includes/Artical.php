<?php

class ArticalCommentController{
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

    public function sanitize($data) {
        return $this->db->real_escape_string($data);
    }

    public function articalcomment() {

        if (!isset($_SESSION['user_id'])) {
            $_SESSION['status'] = "You must be logged in to post a comment.";
            $_SESSION['status_code'] = "error";
            header("Location: /mahasagar-prj3/home?status=0");
            exit();
        }
    
        $news_post_id = isset($_GET['id']) ? (int) $_GET['id'] : 0; 
    
        if ($news_post_id == 0) {
            die("Error: Invalid news_post_id.");
        }
    
        $name = isset($_POST['artical_name']) ? $this->sanitize($_POST['artical_name']) : '';
        $email = isset($_POST['artical_email']) ? $this->sanitize($_POST['artical_email']) : '';
        $comment = isset($_POST['artical_comment']) ? $this->sanitize($_POST['artical_comment']) : '';
    
        $category_query = "SELECT category FROM news_posts WHERE id = $news_post_id";
        $category_result = json_decode($this->execute_db_query($category_query), true);
    
        if (!$category_result || empty($category_result["result"])) {
            die("Error: No matching news post found for ID: $news_post_id");
        }
    
        $categorie_id = (int) $category_result["result"][0]["category"]; 
    
        $query = "INSERT INTO article_comments (news_post_id, article_name, article_email, article_comment, categorie_id)
                  VALUES ($news_post_id, '$name', '$email', '$comment', $categorie_id);";
    
        $response = json_decode($this->execute_db_query($query), true);
    
        if ($response["status"] == true) {
            $_SESSION['status'] = "Comment Added Successfully!";
            $_SESSION['status_code'] = "success";
            header("Location: /mahasagar-prj3/news?id=$news_post_id&status=1");
            exit();
        } else {
            $_SESSION['status'] = "No Comment Added";
            $_SESSION['status_code'] = "error";
            header("Location: /mahasagar-prj3/news?id=$news_post_id&status=0");
            exit();
        }
    }
    
    
}


?>