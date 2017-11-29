<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../../projet-pinterest/views/assets/css/form.css">
    <title>Signin</title>
</head>
<body>
<?php
require 'header.php';
?>
<form action="index.php?action=UserController@upload" method="post">
    <div class="form-style-8">
        <h2>Ajouter votre Pint.</h2>
        <p><input type="text" name="titre" placeholder="Choisie un titre."></p>
        <p><input type="text" name="description" placeholder="Entrer une rapide description."></p>
        <p><input type="file" name="image" placeholder="Lien image." </p>
        <p><input type="submit" value="Upload"></p>
    </div>
</form>
<?php
require 'footer.php';
?>
</body>
</html>
