<?php
    include 'config.php';

    if (isset($_GET['id'])) {
        $news_id = intval($_GET['id']);

        // Increment view count
        $update_query = "UPDATE news_posts SET news_views = news_views + 1 WHERE id = $news_id";
        mysqli_query($db, $update_query) or die("Query Failed: " . mysqli_error($db));
    }
?>
