<?php
//connexion a la base
include 'connexion.php' ;

//requette de recuperation
$resultats = $bdd->query('SELECT * FROM base ORDER BY numero_parking') ;


 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  </head>
  <body><br>
        <div class="container">
          <h1 class="text-center">Parking Occupé</h1><br>
          <form class="" action="recherche1.php" method="post">
            <input type="submit" name="" value="RECHERCHE" class="btn btn-success btn-sm">
            <input type="text" name="recherche" value="" class="form-control-sm"  placeholder="Numero d'imatriculation">
          </form>
          <hr>
     <table border="1" class="table table-bordered">
          <thead>
            <tr>
                <th>Nom du chauffeur</th>
                <th>Numero d'Imatriculation</th>
                <th>Marque</th>
                <th>Numero du Parcking</th>
                <th>Date d'entre</th>
                <th>Heur d'entre</th>
                <th>ACTION</th>

           </tr>
          </thead>

          <tbody>
              <?php
                    //boucle de recuperation
                    while ($data = $resultats->fetch()) {
                       echo '
                       <tr>

                           <td>'.$data['nom_chauffeur'].'</td>
                           <td>'.$data['numero_imatriculation'].'</td>
                           <td>'.$data['marque'].'</td>
                           <td>'.$data['numero_parking'].'</td>
                           <td>'.$data['date_entre'].'</td>
                           <td>'.$data['heur_entre'].'</td>
                            <td>
                                <a href="confirmation_termine.php?id='.$data['numero_parking'].'"><button type="button" name="button" class="btn btn-danger">Terminer</button></a>
                            </td>

                       </tr>

                       ';
                    }


               ?>
            </tbody>
            </table>

            <div class="text-center">
                  <a href="index.php" class="btn btn-success">Page d'acceuil</a>
            </div>
        </div>
  </body>
</html>
