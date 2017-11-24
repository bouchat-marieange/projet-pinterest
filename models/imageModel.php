<?php

class ImageModel
{

    private $db;

    public function __construct()
    {

        try {
            $this->db = new PDO("mysql:host=localhost;dbname=pinterest", "root", "root");
            $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        } catch (Exception $exception) {
            die($exception);
        }
    }
    public function add($titre, $image, $description, $date)
    {
        $req = $this->db->prepare("INSERT INTO images (titre, image, description, d) VALUES (?,?)");
        $req->execute([$pseudo, $password]);
    }
    
    ?>
