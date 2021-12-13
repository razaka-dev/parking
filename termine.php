<?php
//connexion
include 'connexion.php' ;

//recuperation dans le base
$resultats = $bdd->query('SELECT * FROM base WHERE numero_parking='.$_GET['id']) ;
$data = $resultats->fetch() ;


//requette d'insertion sur le base1
 $bdd->query('INSERT INTO historique(nom_chauffeur,numero_imatriculation,marque,numero_parking,date_entre,heur_entre,date_sortie,heur_sortie)

VALUES("'.$data['nom_chauffeur'].'",
       "'.$data['numero_imatriculation'].'",
       "'.$data['marque'].'",
       "'.$data['numero_parking'].'",
       "'.$data['date_entre'].'",
       "'.$data['heur_entre'].'",CURDATE(),CURTIME())
') ;

//apres suppression
$supp = $bdd->prepare('DELETE FROM base WHERE numero_parking= ? ') ;
$supp->execute(array(
  $_GET['id']
)) ;


header('location:finale.php?id='.$data['numero_parking'].'') ;

 ?>
