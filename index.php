<?php
require_once('controller/UserController.php');
require_once('models/UserModel.php');
require_once('controller/imageController.php');
require_once('models/imageModel.php');
$Usercontroller = new UserController();
$Imagecontroller = new imageController();
$action = "";
extract($_GET);
extract($_POST);
extract($_POST);


switch ($action) {
    case 'UserController@login':

        $Usercontroller->login($pseudo, $password);
        break;
    case 'UserController@signup':

        $Usercontroller->signup($pseudo, $password);
        break;
    case 'imageController@upload':

        $Imagecontroller->upload($titre, $lienImage, $description, $moment);
        break;
    case 'UserController@getHome':
        require 'views/home.php';
        break;
    case 'imageController@getHomePage':
        echo "imageController@HomePage";
        //require 'views/home.php';
        break;
    case 'upload':
        require 'upload.php';
        break;
    default:
        include "views/login.php";
        break;
    }
