<?php
include 'connexion.php' ;

//requette de recuperation
$resultats = $bdd->query('SELECT * FROM base ORDER BY id') ;
$data = $resultats->fetch() ;

 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>PARCKING</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  </head>
  <body>
        <div class="container">
                    <br>
                    <h1 class="text-center">PARKING</h1>
                    <h2 class="text-center">
                          <span id="hours">12</span>
                          <span>:</span>
                          <span id="minutes">60</span>
                          <span>:</span>
                          <span id="seconds">60</span>
                          <span id="am_or_pm">AM</span>
                          <span></span>
                    </h2>
                    <h5 class="text-center">
                        <?php echo date('d M Y'); ?>
                    </h5>
                    <div class="row">
                          <div class="col-lg-2">

                          </div>
                          <div class="col-lg-8">
                            <form class="form-group" action="reg.php" method="post">
                              <label>Nom et prenom du chauffeur</label>
                              <input type="text" name="nom" value="" class="form-control">
                              <label>Numero d'Imatriculation</label>
                              <input type="text" name="imatriculation" value="" class="form-control">
                              <label>Marque</label>
                              <input type="text" name="marque" value="" class="form-control">
                              <label>Parcking numero :</label>
                              <input type="number" name="numero" value="" class="form-control"><br>
                              <input type="submit" name="" value="Enregistrer" class="btn btn-success btn-block">
                            </form>
                          </div>
                          <div class="col-lg-2">
                              <?php
                                  /*
                                  function button() {

                                      if (!empty($_SESSION['un'])) {
                                            if ($_SESSION['un'] == 1) {

                                              echo ' <button style="
                                                           border: none;
                                                           background: Tomato ;
                                                           color: white ;
                                                           width:50px ;
                                                           height: 50px ;
                                                           margin-top: 5px;
                                                       ">1</button>' ;
                                            }
                                            else {
                                              echo ' <button style="
                                                           border: none;
                                                           background: MediumSeaGreen ;
                                                           color: white ;
                                                           width:50px ;
                                                           height: 50px ;
                                                           margin-top: 5px;
                                                       ">1</button>' ;
                                            }
                                      }
                                      else {
                                          echo ' <button style="
                                                       border: none;
                                                       background: MediumSeaGreen ;
                                                       color: white ;
                                                       width:50px ;
                                                       height: 50px ;
                                                       margin-top: 5px;
                                                   ">1</button>' ;
                                        }

                                  }

                                    */



                               ?>

                          </div>
                    </div>

                    <div class="text-center">
                          <a href="parcking_occupe.php" class="btn btn-danger ">Parcking occupé</a>
                          <a href="historique.php" class="btn btn-danger ">Historique</a>
                    </div>
        </div>


  </body>

  <script src="jquery-1.9.1.min.js"></script>
  <script>
      function autoTimeUpdate() {
          var dateTime=new Date();
      var hours=dateTime.getHours();
      var minutes=dateTime.getMinutes();
      var seconds=dateTime.getSeconds();
      var am_or_pm=document.getElementById('am_or_pm');

      if (hours>=12) {
          am_or_pm.innerHTML="PM";
      } else {
          am_or_pm.innerHTML="AM";
      }

      if (hours>12) {
          hours=hours-12;
      }

      document.getElementById('hours').innerHTML=hours;
      document.getElementById('minutes').innerHTML=minutes;
      document.getElementById('seconds').innerHTML=seconds;
      }

        setInterval('autoTimeUpdate()',1000);

  </script>

</html>
