<?php
//connexion a la base
include 'connexion.php' ;

//requette de recuperation
$resultats = $bdd->query('SELECT * FROM base ORDER BY numero_parking='.$_GET['id']) ;
$data = $resultats->fetch() ;



 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
      <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  </head>
  <body>
      <div class="container">
          <div class="row">
              <div class="col-lg-4">

              </div>
              <div class="col-lg-4">
                  <div class="jumbotron" style="margin-top: 200px;">
                      <div class="text-center">
                        <p>Vous vouler vraiments terminer?</p>
                        <?php echo '<a href="termine.php?id='.$data['numero_parking'].'" class="btn btn-danger ">OUI</a>' ; ?>
                        <a href="parcking_occupe.php" class="btn btn-success ">NON</a>
                      </div>

                  </div>
              </div>
              <div class="col-lg-4">

              </div>
          </div>
      </div>
  </body>
</html>
