<?php

require 'config.php';
require_once "NewsPostController.php";
// require_once "AdvertisementController.php";
require_once "BannerImg.php";

if (isset($_POST["form-name"])) {

    switch ($_POST["form-name"]) {

        case 'user_login':
            $newsController = new NewsPostController($db);
            $newsController->user_login();
        break;

        case 'add_news_post':
            $newsController = new NewsPostController($db);
            $newsController->add_news_post();
        break;
            
        case 'edit_news_post':
            $newsController = new NewsPostController($db);
            $newsController->edit_news_post($_POST, $_FILES);
        break;

        // case 'add_advertisement':
        //     $adsController = new AdvertisementController($db);
        //     $adsController->add_advertisement();
        // break;
            
        // case 'edit_advertisement':
        //     $adsController = new AdvertisementController($db);
        //     $adsController->edit_advertisement($_POST, $_FILES);
        // break;
        
        case 'bannerimg':
            $BannerController = new BannerImageController($db);
            $BannerController->addbannerImg();
        break;

        case 'bannereditimg':
            $BannerController = new BannerImageController($db);
            $BannerController->editbannerImg($_POST, $_FILES);
        break;

        default:
            echo "<div class='alert alert-danger'>No matched case found.</div>";
        break;
    }
}


?>
