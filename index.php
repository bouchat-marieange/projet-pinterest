<?php
require ('controller/UserController.php');
require ('models/UserModel.php');
$Usercontroller = new UserController();
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
    case 'UserController@getHome':
        require 'views/home.php';
        break;
    default:
        require "views/home.php";
        break;
    }
?>
