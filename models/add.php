<?php
	// On se connecte à MySQL
	$bd = new PDO('mysql:host=localhost;dbname=pinterest;charset=utf8', 'root', 'user');

  // Si le bouton upload est actif
  if (isset($_POST[''])) {
  // On insert l'image utilisateur dans la base de donnée
    $query = "INSERT INTO images ('titre', 'image', 'description', 'date', 'uploader') VALUES ('$titre', '$image', '$description', '$date', '$uploader')";
    $bd-> query($query);
    header('location:index.php');
  }
 ?>
