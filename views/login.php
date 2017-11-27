<!DOCTYPE html>
<html>

  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="./assets/css/form.css">
    <title>login</title>
  </head>
  <body>
  <?php
  require 'header.php';
  ?>
    <div id="globallogin">
      <div class="form-style-8">
        <h2>Connectez-vous</h2>
          <form class="login" action="" method="post">     <!--la fonction post s'impose car mot de passe utilisé-->
            <input type="text" name="recherche" value="" placeholder="Pseudo">  <!-- fenêtre de remplissage texte, nommée "utilisateur" -->
            <input type="password" name="recherche" value="" placeholder="Mot de passe"> <!-- fenêtre de remplissage texte, nommée "mot de passe" -->
            <input type="submit" value="Se Connecter">  <!-- bouton de confirmation pour retourner les textes -->
          </form>
      </div>
    </div>
  <?php
    require 'footer.php';
  ?>
  </body>

</html>
