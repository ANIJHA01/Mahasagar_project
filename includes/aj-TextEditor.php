<?php

    include "config.php";
    if ($db->connect_error) {
        die(json_encode(["status" => "error", "message" => "Database Connection Failed"]));
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $news_id = isset($_POST['news_id']) ? intval($_POST['news_id']) : 0;
        $content = isset($_POST['Cname']) ? $db->real_escape_string($_POST['Cname']) : '';

        if ($news_id > 0 && !empty($content)) {
            $sql = "UPDATE news_posts SET news_content='$content' WHERE id=$news_id";
            if ($db->query($sql) === TRUE) {
                echo json_encode(["status" => "success", "message" => "Post Updated Successfully"]);
            } else {
                echo json_encode(["status" => "error", "message" => "Error: " . $db->error]);
            }
        } else {
            echo json_encode(["status" => "error", "message" => "Invalid News ID or Content"]);
        }
        $db->close();
    }
?>
