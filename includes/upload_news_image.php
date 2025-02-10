<?php
    header('Content-Type: application/json');
    include "config.php"; 
    include "constants.php";

    if (isset($_FILES['image']) && isset($_POST['news_id'])) {
        $news_id = intval($_POST['news_id']);
        $upload_path = NEWS_UPLOAD_PATH; 

        if (!is_dir($upload_path)) {
            mkdir($upload_path, 0777, true);
        }

        $allowedTypes = ['jpg', 'jpeg', 'png', 'gif'];
        $fileName = basename($_FILES["image"]["name"]);
        $fileExt = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));

        if (!in_array($fileExt, $allowedTypes)) {
            echo json_encode(["status" => "error", "message" => "Invalid file type. Only JPG, JPEG, PNG, and GIF are allowed."]);
            exit;
        }

        $newFileName = "news_" . time() . "." . $fileExt;
        $targetFilePath = $upload_path . $newFileName;

        if (move_uploaded_file($_FILES["image"]["tmp_name"], $targetFilePath)) {
            $stmt = $db->prepare("UPDATE news_posts SET news_banner = ? WHERE id = ?");
            $stmt->bind_param("si", $newFileName, $news_id);

            if ($stmt->execute()) {
                echo json_encode(["status" => "success", "message" => "Image updated successfully!", "image_url" => $targetFilePath]);
            } else {
                echo json_encode(["status" => "error", "message" => "Database update failed."]);
            }

            $stmt->close();
        } else {
            echo json_encode(["status" => "error", "message" => "Image upload failed."]);
        }
    } else {
        echo json_encode(["status" => "error", "message" => "Invalid request."]);
    }
?>
