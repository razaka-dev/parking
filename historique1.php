<?php
//connexon a la base
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

 FROM historique WHERE numero_imatriculation="'.$_GET['plaque'].'"') ;
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

//condition de montant
if (decalageHeur($heur1,$heur2,$minute1,$minute2,$seconde1,$seconde2,$jour1,$jour2) == 0) {
    //si le decalage est en minute seulement
    $montant = (500 * decalageMinute($heur1,$heur2,$minute1,$minute2,$seconde1,$seconde2,$jour1,$jour2)) / 60 ;

}
else {
  $montant1 = (500 * decalageMinute($heur1,$heur2,$minute1,$minute2,$seconde1,$seconde2,$jour1,$jour2)) / 60 ;
  $montant = decalageHeur($heur1,$heur2,$minute1,$minute2,$seconde1,$seconde2,$jour1,$jour2) * 500 + $montant1 ;

}

//requette d'enregistrement
$reg = $bdd->prepare('INSERT INTO historique1(numero_imatriculation,heur_stationnement,montant) VALUES(?,?,?)') ;
$reg->execute(array(
  $plaque = $data['numero_imatriculation'] ,
  decalage($heur1,$heur2,$minute1,$minute2,$seconde1,$seconde2,$jour1,$jour2) ,
  $montant

)) ;

//redierction
header('location:index.php?msg=ok') ;
 ?>
