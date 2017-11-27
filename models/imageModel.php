<?php

class ImageModel
{

    private $db;

    public function __construct()
    {

        try {
            $this->db = new PDO("mysql:host=locahlost;dbname=pinterest", "root", "root");
            $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        } catch (Exception $exception) {
            die($exception);
        }
    }

    public function upload($titre, $lienImage, $description, $moment)
    {
        $req = $this->db->prepare("INSERT INTO images (titre, lienImage, description, moment) VALUES (?,?,?,?)");
        $req->execute([$titre, $lienImage, $description, $moment]);
    }
}
