<?php
//connexion
include 'connexion.php' ;
session_start() ;

if (!empty($_POST['nom']) &&
    !empty($_POST['imatriculation']) &&
    !empty($_POST['marque']) &&
    !empty($_POST['numero'])

  ) {
       //requette dínsertion dans la base
       $bdd->query('INSERT INTO base(nom_chauffeur,numero_imatriculation,marque,numero_parking,date_entre,heur_entre) VALUES("'.$_POST['nom'].'","'.$_POST['imatriculation'].'","'.$_POST['marque'].'","'.$_POST['numero'].'",CURDATE(),CURTIME())') ;


       //header (miodina sur place eo)
       header('location:index.php?msg= enregistré avec succées') ;

 }
 else {
   header('location:index.php?msg=Une erreur e\'est produite') ;
 }




 ?>
