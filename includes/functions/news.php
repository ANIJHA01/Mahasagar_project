<?php
function loadNewsPage($news_id) {
    if (!empty($news_id) && is_numeric($news_id)) {
        // Valid ID hai toh pages/news.php load karein...
        include_once("pages/news.php");
    } else {
        echo "Invalid or missing news ID.";
    }
}
?>
