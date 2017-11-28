

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

$query = 'INSERT INTO ustilisateurs (pseudo, password) VALUES (?, ?);';
$prep = $pdo->prepare($query);

$prep->bindValue(1, 'nico', PDO::PARAM_STR);
$prep->bindValue(2, 'testpassword', PDO::PARAM_STR);
$prep->execute();
$resultat = $pdo->query('SELECT * FROM utilisateurs');
while ($donnees = $resultat->fetch())
{
  echo 'pseudo :';
  echo $donnees['pseudo'];
  echo '<br/>';

  echo 'password ';
  echo $donnees['password'];
  echo '<br/>';

}


// // SELECT - READ
// // Selectionner des utilisateurs de la DB Heroku "utilisateurs"
// $req = $bdd->prepare('SELECT (pseudo,password) FROM utilisateurs WHERE pseudo = :pseudo AND password = :password');
// $req->execute(array('pseudo'=> $_POST['pseudo'], 'password'= $_POST['password']));
//
// //Afficher la liste des utilisateurs
// echo '<h4>Afficher la liste des utilisateurs DB Heroku "Utilisateurs"</h4>';
// echo '<ul>';
// while ($donnees = $req->fetch())
// {
//   echo '<li>' . $donnees['pseudo'] . ' - ' . $donnees['password']. '</li>';
// }
// echo '<ul>';
//
//
// // INSERT TO - CREATE
// // Ajouter un nouvel utilisateurs dans la DB Heroku "utilisateurs"
// $req = $bdd->prepare('INSERT INTO utilisateurs (pseudo, password) FROM utilisateurs WHERE pseudo = :pseudo AND password =:password');
// $req->execute(array('pseudo'=> $_POST['pseudo'], 'password'= $_POST['password']));
//
// // Afficher le nouvel utilisateur (pseudo / password) dans la DB Heroku "utilisateurs"
// echo '<h4>Afficher la liste nouvel utilisateur DB Heroku "Utilisateurs"</h4>';
// while ($donnees = $req->fetch())
// {
//     echo 'pseudo :';
//     echo $donnees['pseudo'];
//     echo '<br/>';
//
//     echo 'password ';
//     echo $donnees['password'];
//     echo '<br/>';
// }
//
// // function add_membres ($pseudo, $password)
// // {
// //   $db = new PDO('pgsql:host=ec2-46-137-174-67.eu-west-1.compute.amazonaws.com;dbname=d583l7ucmi14j1;', 'whcxkhxgfgjals', '142f864119a26f291318da08efdf2af4f656849227e3d679118eaf99f22681bb');
// //
// //   $req =$db->prepare("INSERT INTO utilisateurs (pseudo, password) VALUES(:pseudo, :password)");
// //   $req->execute ($_POST['pseudo'], $_POST['password']));
// //   ([
// // 	  "pseudo"=>$pseudo,
// //     "password"=>sha1($password)
// // 	]);
// // }
//
//
//
//
//
// // UPDATE - UPDATE
// // Modifier nom utilisateur dans la DB Heroku "utilisateurs"
// $req = $bdd->prepare('UPDATE utilisateurs SET :pseudo WHERE id = :id');
// $req->execute(array('pseudo'=> $element, 'id'= $id ));
//
// // Modifier mot de passe utilisateur dans la DB Heroku "utilisateurs"
// $req = $bdd->prepare('UPDATE utilisateurs SET :password WHERE id = :id');
// $req->execute(array('password'=> $element, 'id'= $id ));
//
// // Afficher la modification pseudo et mot de passe utilisateur dans la DB Heroku "utilisateurs"
// echo '<h4>Afficher la liste nouvel utilisateur DB Heroku "Utilisateurs"</h4>';
// while ($donnees = $req->fetch())
// {
//     echo 'pseudo :';
//     echo $donnees['pseudo'];
//     echo '<br/>';
//
//     echo 'password ';
//     echo $donnees['password'];
//     echo '<br/>';
// }
//
//
// // DELETE - DELETE FROM
// $req = $bdd->prepare('DELETE FROM * FROM utilisateurs WHERE id = :id');
// $req->execute(array($_POST['id']));
// ?>
