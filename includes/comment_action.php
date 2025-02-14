<?php 

    include 'config.php';

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        session_start();
        if ($_SESSION['role'] != 1) {
            die("Unauthorized access");
        }

        $action = $_POST['action'];
        $comment_id = intval($_POST['id']);

        if ($action == "approve") {
            $sql = "UPDATE article_comments SET status = 'approved' WHERE id = ?";
        } elseif ($action == "delete") {
            $sql = "DELETE FROM article_comments WHERE id = ?";
        }

        $stmt = $db->prepare($sql);
        $stmt->bind_param("i", $comment_id);
        $stmt->execute();

        $response = array();

        if ($stmt->execute()) {
            $response["status"] = true;
        } else {
            $response["status"] = false;
        }

        if ($response["status"] == true) {
            $_SESSION['status'] = "Comment has been successfully " . ($action == "approve" ? "approved" : "deleted") . ".";
            $_SESSION['status_code'] = "success";
            header("Location: /mahasagar-prj3/news?id=$comment_id&status=1");
            exit();
        } else {
            $_SESSION['status'] = "Failed to " . ($action == "approve" ? "approve" : "delete") . " the comment.";
            $_SESSION['status_code'] = "error";
            header("Location: /mahasagar-prj3/news?id=$comment_id&status=0");
            exit();
        }
    }


?>