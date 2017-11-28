<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../views/assets/css/form.css">
    <title>login</title>
  </head>
  <body>
  <?php
  include 'header.php';
  ?>
    <div id="globallogin">
      <div class="form-style-8">
        <h2>Connectez-vous</h2>
          <form class="login" action="index.php?action=UserController@login" method="post">     <!--la fonction post s'impose car mot de passe utilisé-->
            <input type="text" name="pseudo" value="" placeholder="Pseudo">  <!-- fenêtre de remplissage texte, nommée "utilisateur" -->
            <input type="password" name="password" value="" placeholder="Mot de passe"> <!-- fenêtre de remplissage texte, nommée "mot de passe" -->
            <input type="submit" value="login" name="login">  <!-- bouton de confirmation pour retourner les textes -->
          </form>
      </div>
    </div>
  <?php
    include 'footer.php';
  ?>
  </body>

</html>
