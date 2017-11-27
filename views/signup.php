<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="./assets/css/form.css">
    <title>Signin</title>
</head>
<body>

<form action="index.php?action=UserController@signup" method="post">
    <div class="form-style-8">
        <h2>Inscrivez-vous.</h2>
        <p><input type="text" name="pseudo" placeholder="Créer un pseudo."></p>
        <p><input type="password" name="password" placeholder="Créer un mot de passe."></p>
        <p><input type="email" name="email" placeholder="Entrer votre email." </p>
        <input type="submit" value="sign up">
    </div>
</form>
</body>
</html>
