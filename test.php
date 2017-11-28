<h2>Formulaire d'inscription</h2>

    <form action="test.php"  method="post">

      <div>
        <label for="pseudo">Pseudo : </label>
        <input type = "text" name="pseudo" id="pseudo" />
      </div>

      <div>
        <label for="password">Password :</label>
        <input type = "password" name="password" id="password" />
      </div>

      <div class="button">
        <input type="submit" value="S'inscrire"/>
      </div>
</form>

<?php
echo '<p>Hello test</p>';
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
$query = 'INSERT INTO utilisateurs (name, password) VALUES (?, ?, ?);';
$prep = $pdo->prepare($query);

$prep->bindValue(1, 'test', PDO::PARAM_STR);
$prep->bindValue(2, 'testpassword', PDO::PARAM_STR);
$prep->bindValue(3, 'test@gmail.com', PDO::PARAM_STR);
$prep->execute();
$resultat = $pdo->query('SELECT * FROM utilisateurs');
while ($donnees = $resultat->fetch())
{
  echo 'name :';
  echo $donnees['name'];
  echo '<br/>';

  echo 'password ';
  echo $donnees['password'];
  echo '<br/>';

}
?>
