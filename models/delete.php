<?php
  // On se connecte à MySQL
  $bd = new PDO('mysql:host=localhost;dbname=pinterest;charset=utf8', 'root', 'user');

  // Si le bouton Supprimer est actif
  if(isset($_POST["Delete"])){

  // On DELETE l'image du compte utilisateur
  $checkbox = $_POST[''];
  while(list($key,$id) = @each($checkbox))
    $bd->query("DELETE FROM images WHERE id ='$id'");
    header('location:index.php');
}
 ?>
