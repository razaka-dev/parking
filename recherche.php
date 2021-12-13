<?php
//connexion
include 'connexion.php' ;

if (!empty($_POST['recherche'])) {

  $resultats = $bdd->query('SELECT * FROM historique JOIN historique1 ON historique.numero_imatriculation=historique1.numero_imatriculation WHERE historique.numero_imatriculation="'.$_POST['recherche'].'"') ;

}
else {
  header('location:historique.php?msg=Une erreur e\'est produite') ;
}


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
           <h1 class="text-center">Resultat</h1><br>

           <table border="1" class="table table-bordered">
                <thead>
                  <tr>
                      <th>Nom du chauffeur</th>
                      <th>Numero d'Imatriculation</th>
                      <th>Marque</th>
                      <th>Numero du Parcking</th>
                      <th>Date d'Entre</th>
                      <th>Heur d'Entre</th>
                      <th>Date de Sortie</th>
                      <th>Heur de Sortie</th>
                      <th>Heur de Stationnement</th>
                      <th>Montant</th>

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
                                 <td>'.$data['date_sortie'].'</td>
                                 <td>'.$data['heur_sortie'].'</td>
                                 <td>'.$data['heur_stationnement'].'</td>
                                 <td>'.$data['montant'].'</td>

                             </tr>

                             ';
                          }


                     ?>
                  </tbody>
                  </table>

                  <div class="text-center">
                        <a href="historique.php" class="btn btn-danger">Retour</a>
                        <a href="index.php" class="btn btn-success">Page d'acceuil</a>

                  </div>
         </div>
   </body>
 </html>
