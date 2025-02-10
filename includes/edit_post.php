<?php

// Update category
    error_reporting(E_ALL); 
    ini_set('display_errors', 1); 

    header('Content-Type: application/json');
    include 'config.php';

    if(isset($_POST['category_id']) && isset($_POST['news_id'])) {
        $category_id = intval($_POST['category_id']);
        $news_id = intval($_POST['news_id']);

        if ($news_id == 0 || $category_id == 0) {
            echo json_encode(["status" => "error", "message" => "Invalid data!"]);
            exit;
        }

        $stmt = $db->prepare("UPDATE news_posts SET category = ? WHERE id = ?");
        $stmt->bind_param("ii", $category_id, $news_id);

        if ($stmt->execute()) {
            echo json_encode(["status" => "success", "message" => "Category updated successfully!"]);
        } else {
            echo json_encode(["status" => "error", "message" => "Error updating category: {$stmt->error}"]);
        }

        $stmt->close();
    } else {
        echo json_encode(["status" => "error", "message" => "Invalid request!"]);
    }

?>