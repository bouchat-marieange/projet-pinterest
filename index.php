<?php
require_once('controller/UserController.php');
require_once('models/UserModel.php');
$action = "";
extract($_GET);
extract($_POST);
extract($_POST);


switch ($action) {
    case 'UserController@login':
        $Usercontroller = new UserController();
        $Usercontroller->login($pseudo, $password);
        break;
    case 'UserController@signup':
        $Usercontroller = new UserController();
        $Usercontroller->signup($pseudo, $password);
        break;
    case 'UserController@logout':
        $Usercontroller = new UserController();
        $Usercontroller->remove($pseudo, $password);
        break;
    default:
        include "views/login.php";
        break;
    }
