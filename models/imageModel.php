<<<<<<< HEAD
 <?php
// class ImageModel {
//
//
// private $db
//
// public function __construct(){
//
// ////*****************INITIALISATION DE LA BASE DE DONNEES*************//////
//
//
//   try {
//           $pdo = new PDO('pgsql:host=ec2-46-137-174-67.eu-west-1.compute.amazonaws.com;dbname=d583l7ucmi14j1;', 'whcxkhxgfgjals', '142f864119a26f291318da08efdf2af4f656849227e3d679118eaf99f22681bb');
//           $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//
//       } catch (Exception $exception) {
//           die($exception);
//       }
//
// ////*****************INITIALISATION DE LA REQUETE MYSQL*************//////
//
// public function ajout ($titre, $lien, $description, $date){
//
// $req = $this->db->prepare("INSERT INTO images (titre,lien Image, description,moment) VALUES (?,?)");
// $req->execute([$titre, $lien, $description, $date]);
//
// }
// public function afficher ($titre, $lien, $description, $date){
//
// }
//
//
//   }
// }




 ?>
=======
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
>>>>>>> 1efea282122d456d91c4c7eb2443cbc7469a914d
