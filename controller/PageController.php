<?php
class PageController
{

public $action;


    public function get404Page()
    {
        require "views/404.php";
    }
    public function getAdminPage()
    {
        require 'views/admin.php';
    }
    public function getHomePage()
    {
        require 'views/home.php';
    }
    public function getHeader()
    {
        require 'header.php';
    }
    public function getFooter()
    {
        require 'footer.php';
    }

}