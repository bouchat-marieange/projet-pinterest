<!doctype html>
<html lang="en">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Link vers bootstrap à placer avant tout autres feuille de CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">

    <!-- Link vers notre feuille css -->
    <link rel="stylesheet" href="../../projet-pinterest/views/assets/css/header1.css">

    <!-- Link vers favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/manifest.json">
    <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="theme-color" content="#ffffff">

    <title>Header</title>

  </head>
  <body>
    <header>

      <div id="header" class="container">  <!-- align-items-end -->

        <div class="row">

          <div class="col-sm-6 col-lg-4">
          </div>

          <div class="col-sm-6 col-lg-4">
            <div id="logo"><br><a class="logo" href="https://pinterestvikenima.herokuapp.com/index.php"><img src="assets/logo/logo _vikenima_texte.png" alt="Logo VIKENIMA"></a></div>
            <!-- <div class="input-group">
              <span class="input-group-btn">
                <button class="btn btn-secondary" type="button">Go!</button><br>
              </span>
              <input type="text" class="form-control" placeholder="Search for..." aria-label="Search for...">
            </div> -->
            <div class="entete">
              <form class="form_search" action="" method="post">
              <input type="search" name="" value="" placeholder="Tapez votre recherche ici ..." style="width: 200px;" >
              <input type="submit" name="" value="Go">
              </form>
            </div>
          </div>

          <div class="col6 col-sm-6 col-lg-4">

              <div class="epaisseur1">
              </div>


            <!-- <div id="button">
              <a href="https://pinterestvikenima.herokuapp.com/views/login.php">Login</a>
              <a href="https://pinterestvikenima.herokuapp.com/views/signup.php">Inscription</a>
            </div> -->
              <div class="epaisseur2">
              <div>
                <button type="button" class="btn btn-primary" href="https://pinterestvikenima.herokuapp.com/views/login.php">LOGIN</button>
                <button type="button" class="btn btn-primary" href="https://pinterestvikenima.herokuapp.com/views/signup.php">INSCRIPTION</button>
              </div>
            </div>
          </div>

        </div>

      </div>

    </header>
  </body>
</html>
