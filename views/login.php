<!DOCTYPE html>
<html>
<<<<<<< HEAD
<head>
    <meta charset="utf-8">
    <title>
    </title>
</head>
<body>
<style>
    form {

        background: #9d9eff;
        width: 400px;
        margin: 200px auto 0;
        -webkit-border-radius: 5px;
        -moz-border-radius: 5px;
        border-radius: 5px;
        padding: 20px 0 40px;
        text-align: center;
    }

    .content {
        margin: 0 auto;
        width: 50%;
    }

    input {
        width: 100%;
        border: none;
        height: 30px;
        border-radius: 5px;
        padding-left: 5px;
        color: rgba(0, 0, 0, 0.48);
    }

    input[type='submit'] {
        height: 35px;
        color: white;
        font-weight: bold;
        text-transform: uppercase;
    }

    h1 {
        color: #ffffff;
        font-family: sans-serif;
    }

</style>
<body>

<form action="index.php?action=UserController@login" method="post">
    <div class="content">
        <h1> Login</h1>
        <p><input type="text" name="pseudo" placeholder="pseudo"></p>
        <p><input type="password" name="password" placeholder="password"></p>
        <input type="submit" value="se connecter">
    </div>
</form>
</body>
=======
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="./assets/css/form.css">
    <title>login</title>
  </head>
  <body>

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
  </body>
>>>>>>> c097038e03788e707eb1afdbeef4aa75884e10f8
</html>
