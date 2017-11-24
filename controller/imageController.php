
<?php
class ImageController
{
    public $imageModel;
    public function __construct()
    {
        $this->imageModel = new imageModel();
    }
    public function getHomePage()
    {
        require "views/home.php";
    }
    public function upload($titre, $lienImage, $description, $moment)
    {
        $this->imageModel->upload($titre, $lienImage, $description, $moment);
        header("location:index.php?action=imageController@getHomePage");
    }
}
