<<<<<<< HEAD
<?php
require_once('controller/UserController.php');
require_once('models/UserModel.php');
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
        include "views/login.php";
        break;
    }
=======
<?php
echo "Hello Test !";
?>
>>>>>>> c097038e03788e707eb1afdbeef4aa75884e10f8
