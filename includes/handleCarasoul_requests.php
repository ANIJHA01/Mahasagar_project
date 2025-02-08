<?php

        require 'config.php';
        require_once "FrontImage.php";
        require_once "constants.php";


        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['form-name'])) {
            switch ($_POST['form-name']) {
                case 'frontaddimg':
                    $FrontController = new FrontImageController($db);
                    $response = $FrontController->addfrontImg();
                    echo $response;
                    break;

                case 'fronteditimg':
                    $FrontController = new FrontImageController($db);
                    $response = $FrontController->editfrontImg($_POST);
                    echo $response;
                break;

                default:
                    echo json_encode(['status' => false, 'message' => 'Invalid form name.']);
                    break;
            }
        } else {
            echo json_encode(['status' => false, 'message' => 'Invalid request.']);
        }