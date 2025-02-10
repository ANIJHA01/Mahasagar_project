<?php
    session_start();

    include_once("includes/constants.php");
    include_once('includes/config.php');
    include_once('includes/handle_requests.php');
    include_once("includes/functions/news.php");

    $currentURL = $_SERVER['REQUEST_URI'];
    $urlPath = parse_url($currentURL, PHP_URL_PATH);
    $trimmedPath = rtrim($urlPath ?? '', '/');
    $pathSegments = explode('/', $trimmedPath);
    $lastSlug = end($pathSegments);

    if (!in_array($lastSlug, array('logout', 'delete', 'bannerAdDelete'))) {
        include_once("layouts/header.php");
    }

    switch ($lastSlug) {
        case 'home':
            include_once("pages/home_page.php");
        break;
        case 'category':
            if ($categoryID) {
                include_once("pages/news-list-page-2.php"); 
            } else {
                echo "<div class='alert alert-danger'>Invalid or missing category ID.</div>";
            }
        break;
        case 'admin-login':
            include_once("pages/admin-login.php");
        break;
        case 'add':
            if (isset($_SESSION['role']) && $_SESSION['role'] == 1) {
                include_once("pages/add_news_post.php");
            }
            else {
                echo "<div class='alert alert-danger'>You do not have permission to access this page.</div>";
            }
        break;
        case 'edit':
            if (isset($_SESSION['role']) && $_SESSION['role'] == 1) {
                include_once("pages/edit_news_post.php");
            } else {
                echo "<div class='alert alert-danger'>You do not have permission to access this page.</div>";
            }
        break;
        case 'delete':
            if (isset($_SESSION['role']) && $_SESSION['role'] == 1) {
                $post_id = $_GET['id'];
                $sql = "DELETE FROM news_posts WHERE id = {$post_id};";
                if (mysqli_query($db, $sql)) {
                    header("location: /mahasagar-prj3/home");
                }
            } else {
                echo "<div class='alert alert-danger'>You do not have permission to access this page.</div>";
            }
        break;
        case 'adsAdd':
            if (isset($_SESSION['role']) && $_SESSION['role'] == 2) {
                include_once("pages/add_advertisement.php");
            } else {
                echo "<div class='alert alert-danger'>You do not have permission to access this Advertisment page.</div>";
            }
        break;
        case 'adsEdit':
            if (isset($_SESSION['role']) && $_SESSION['role'] == 2) {
                include_once("pages/edit_advertisement.php");
            } else {
                echo "<div class='alert alert-danger'>You do not have permission to access this Advertisment page.</div>";
            }
        break;
        case 'adsDelete':
            if (isset($_SESSION['role']) && $_SESSION['role'] == 1) {
                $ads_id = $_GET['id'];
                $sql = "DELETE FROM news_ads WHERE id = {$ads_id};";
                if (mysqli_query($db, $sql)) {
                    header("location: /mahasagar-prj3/home");
                }
            } else {
                echo "<div class='alert alert-danger'>You do not have permission to access this page.</div>";
            }
        break;

        case 'logout':
            if (strpos($_SERVER['REQUEST_URI'], 'logout') !== false) {
                session_unset();
                session_destroy();
                header("location: /mahasagar-prj3/home");
            }
        break;
        case 'news':
            if (isset($_GET['id']) && is_numeric($_GET['id'])) {
                $news_id = $_GET['id'];
                loadNewsPage($news_id);
            } else {
                echo "<div class='alert alert-danger'>Invalid or missing news ID.</div>";
            }
        break;
        case 'banneraddelete':
            $bannerdeletesql = "UPDATE mhs_meta SET meta_value = '' WHERE meta_key = 'banner_ad_img'";
                if (mysqli_query($db, $bannerdeletesql)) {
                    header("location: /mahasagar-prj3/home");
                }
        break;

        default:
            include_once("pages/home_page.php");
        break;
    }
?>

<?php
    include_once("layouts/footer.php");
?>