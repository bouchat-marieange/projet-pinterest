<?php

class UserController
{

    public $userModel;

    public function __construct()
    {
        $this->userModel = new UserModel();
    }

    public function getSignupPage()
    {
        require "views/signup.php";
    }

    public function getHomePage()
    {
        require "views/main.php";
    }

    public function getLoginPage()
    {
        require "views/login.php";
    }

    public function login($pseudo, $password)
    {
        if ($this->userModel->check($pseudo, $password)) {
            header("location:index.php?action=UserController@getHome");
        } else {
            header("location:index.php?action=UserController@getsignup");
        }
    }

    public function signup($pseudo, $password)
    {
        $this->userModel->add($pseudo, $password);

        header("location:index.php?action=UserController@getLogin");
    }

}
