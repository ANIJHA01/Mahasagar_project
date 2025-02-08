<?php
    include 'config.php'; 

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $id = $_POST['newsId'];
        $title = $_POST['newsTitle'];
        $author = $_POST['authorName'];
        $content = $_POST['newsContent'];
        $modified_by = "Admin";

        $sql = "UPDATE news_posts SET 
                    news_title = ?, 
                    news_description = ?, 
                    page_author = ?, 
                    modified_by = ?, 
                    modified_dt = NOW()
                WHERE id = ?";
        
        $stmt = $db->prepare($sql);
        $stmt->bind_param("ssssi", $title, $content, $author, $modified_by, $id);

        if ($stmt->execute()) {
            echo json_encode(["success" => true, "message" => "News updated successfully"]);
        } else {
            echo json_encode(["success" => false, "message" => "Update failed"]);
        }

        $stmt->close();
        $db->close();
    }
?>
