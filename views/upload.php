<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form class="login" action="index.php?action=imageController@login" method="post">     <!--la fonction post s'impose car mot de passe utilisé-->
      <input type="text" name="pseudo" value="" > <p>titre</p> <!-- fenêtre de remplissage texte, nommée "utilisateur" -->
      <input type="file" name="lienimage" value="" ><p>image</p>
      <input type="text" name="description" value=""><p>description</p>
      <input type="datetime" name="moment" value=""><p>moments</p><!-- fenêtre de remplissage texte, nommée "mot de passe" -->
      <input type="submit" value="login" name="login">  <!-- bouton de confirmation pour retourner les textes -->
    </form>

    </form>
  </body>
</html>
