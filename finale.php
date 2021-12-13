<?php
  //connexion
  include 'connexion.php' ;
  include 'fonction.php' ;

  //recuperation dans le base
  $resultats = $bdd->query('SELECT nom_chauffeur,
                                   numero_imatriculation,
                                   marque,
                                   numero_parking,
                                   date_entre,
                                   heur_entre,
                                   date_sortie,
                                   heur_sortie,
                                   DAY(date_entre) AS d_e,
                                   DAY(date_sortie) AS d_s,
                                   HOUR(heur_entre) AS h_e,
                                   HOUR(heur_sortie) AS h_s,
                                   MINUTE(heur_entre) AS h_e1,
                                   MINUTE(heur_sortie) AS h_s1,
                                   SECOND(heur_entre) AS h_e2,
                                   SECOND(heur_sortie) AS h_s2

   FROM historique WHERE numero_parking='.$_GET['id']) ;
  $data = $resultats->fetch() ;

  //extraction jour
  $jour1 = $data['d_e'] ;
  $jour2 = $data['d_s'] ;
  //extraction heur S/E
  $heur1 = $data['h_e'] ;
  $heur2 =$data['h_s'] ;
  //extraction minute E/S
  $minute1 = $data['h_e1'] ;
  $minute2 =$data['h_s1'] ;
  //extraction seconde
  $seconde1 = $data['h_e2'] ;
  $seconde2 =$data['h_s2'] ;

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
            <h1 class="text-center"><?php echo $data['nom_chauffeur']; ?></h1> <hr>

            <div class="row">
                  <div class="col-lg-6">
                      <div class="jumbotron" style="height:425px;">
                          <div class="" style="margin-top: -50px;">
                            <h2 class="text-center">Profils</h2>
                            <h5>Numero d'imatriculation:</h5>
                            <h6><?php echo $data['numero_imatriculation']; ?></h6><br><br>
                            <h5>Marque:</h5>
                            <h6><?php echo $data['marque']; ?></h6><br><br>
                            <h5>PARCKING numero:</h5>
                            <h6><?php echo $data['numero_parking']; ?></h6><hr>
                            <h4>MONTANT: <?php

                                if (decalageHeur($heur1,$heur2,$minute1,$minute2,$seconde1,$seconde2,$jour1,$jour2) == 0) {
                                    //si le decalage est en minute seulement
                                    $montant = (500 * decalageMinute($heur1,$heur2,$minute1,$minute2,$seconde1,$seconde2,$jour1,$jour2)) / 60 ;
                                    echo number_format($montant,0). "  ARIARY";
                                }
                                else {
                                  $montant1 = (500 * decalageMinute($heur1,$heur2,$minute1,$minute2,$seconde1,$seconde2,$jour1,$jour2)) / 60 ;
                                  $montant = decalageHeur($heur1,$heur2,$minute1,$minute2,$seconde1,$seconde2,$jour1,$jour2) * 500 + $montant1 ;
                                  echo number_format($montant,0). "  ARIARY";
                                }


                             ?></h4>
                          </div>
                      </div>
                  </div>
                  <div class="col-lg-6">
                      <div class="jumbotron" style="height:425px;">
                          <div class="" style="margin-top: -50px;">
                            <h2 class="text-center">Horaire</h2>

                            <h5>Date d'entre:</h5>
                            <h6><?php echo $data['date_entre']; ?></h6>
                            <h5>heur d'entre:</h5>
                            <h6><?php echo $data['heur_entre']; ?></h6><hr>
                            <h5>Date de sortie:</h5>
                            <h6><?php echo $data['date_sortie']; ?></h6>
                            <h5>Heur de sortie:</h5>
                            <h6><?php echo $data['heur_sortie']; ?></h6><hr>
                            <h5>Heur de stationnement:</h5>
                            <h6><?php

                                    echo decalage($heur1,$heur2,$minute1,$minute2,$seconde1,$seconde2,$jour1,$jour2) ;

                                ?></h6>
                          </div>
                      </div>

                  </div>
            </div><br>

            <div class="text-center" style="margin-top: -45px;">
              <?php echo '<a href="historique1.php?plaque='.$data['numero_imatriculation'].'" class="btn btn-success">Enregistrer à nouveau</a>' ; ?>
            </div>
      </div>
  </body>
</html>
