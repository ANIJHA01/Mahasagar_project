<?php

    include_once 'config.php'; 

    if (isset($_POST['ms_id']) && is_numeric($_POST['ms_id'])) {
        $ms_id = intval($_POST['ms_id']);

        $query = "DELETE FROM `font_ms` WHERE `ms_id` = ?";
        $stmt = $db->prepare($query);

        if ($stmt) {
            $stmt->bind_param('i', $ms_id);

            if ($stmt->execute()) {
                echo json_encode(['status' => 'success']);
            } else {
                error_log("Database Execution Error: " . $stmt->error);
                echo json_encode(['status' => 'failure', 'message' => 'Failed to delete image']);
            }

            $stmt->close();
        } else {
            error_log("Prepare Statement Error: " . $db->error);
            echo json_encode(['status' => 'failure', 'message' => 'Failed to prepare query']);
        }

        $db->close();
    } else {
        echo json_encode(['status' => 'error', 'message' => 'Invalid or missing ms_id']);
    }
