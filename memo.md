# Run this from your terminal.
# The following will add our apt repository and install the CLI:
sudo add-apt-repository "deb https://cli-assets.heroku.com/branches/stable/apt ./"
curl -L https://cli-assets.heroku.com/apt/release.key | sudo apt-key add -
sudo apt-get update
sudo apt-get install heroku

pinterestvikenima



psql -h ec2-46-137-174-67.eu-west-1.compute.amazonaws.com -U whcxkhxgfgjals d583l7ucmi14j1

142f864119a26f291318da08efdf2af4f656849227e3d679118eaf99f22681bb



d583l7ucmi14j1=> 

CREATE TABLE images (
id SERIAL,
titre VARCHAR(255),
image TEXT,
description TEXT,
date DATE,
uploader VARCHAR(255)
)

puis taper ; pour valider et créer la table


d583l7ucmi14j1=> 

CREATE TABLE users (
id SERIAL,
name VARCHAR(255),
password VARCHAR(255),
mail varchar(255)
)

puis taper ; pour valider et créer la table




Créer un fichier test.php à la racine du repo github contenant le code suivant:

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
$query = 'INSERT INTO categories (nom, description) VALUES (?, ?);';
$prep = $pdo->prepare($query);
 
$prep->bindValue(1, 'bertand', PDO::PARAM_STR);
$prep->bindValue(2, 'ceci est un test pour desc', PDO::PARAM_STR);
$prep->execute();
$resultat = $pdo->query('SELECT * FROM categories');
while ($donnees = $resultat->fetch())
{
  echo '<br/>';
  echo $donnees['nom'];
  echo ' : ';
  echo $donnees['description'];
}
?>


Se placer dans le dossier et exécuter la commande suivante sur la console
./sqlectron (lancer le programme pour visualiser la db postgrsql)
