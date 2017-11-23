<?php
try
{
    // On se connecte à MySQL
    $pdo = new PDO('pgsql:host=ec2-46-137-174-67.eu-west-1.compute.amazonaws.com;dbname=d583l7ucmi14j1;', 'whcxkhxgfgjals', '142f864119a26f291318da08efdf2af4f656849227e3d679118eaf99f22681bb');
}
catch(Exception $e)
{
    // En cas d'erreur, on affiche un message et on arrête tout
        die('Erreur : '.$e->getMessage());
}
$query = 'INSERT INTO users (name, password, mail) VALUES (?, ?, ?);';
$prep = $pdo->prepare($query);
 
$prep->bindValue(1, 'test', PDO::PARAM_STR);
$prep->bindValue(2, 'testpassword', PDO::PARAM_STR);
$prep->bindValue(3, 'test@gmail.com', PDO::PARAM_STR);
$prep->execute();
$resultat = $pdo->query('SELECT * FROM users');
while ($donnees = $resultat->fetch())
{
  echo '<br/>';
  echo $donnees['name'];
  echo ' : ';
  echo $donnees['mail'];
}
?>
