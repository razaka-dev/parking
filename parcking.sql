/*
SQLyog Enterprise - MySQL GUI v8.1 
MySQL - 5.7.23 : Database - parcking
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

CREATE DATABASE /*!32312 IF NOT EXISTS*/`parcking` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `parcking`;

/*Table structure for table `base` */

DROP TABLE IF EXISTS `base`;

CREATE TABLE `base` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom_chauffeur` varchar(255) DEFAULT NULL,
  `numero_imatriculation` varchar(255) DEFAULT NULL,
  `marque` varchar(255) DEFAULT NULL,
  `numero_parking` int(11) DEFAULT NULL,
  `date_entre` date DEFAULT NULL,
  `heur_entre` time DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `base` */

insert  into `base`(id,nom_chauffeur,numero_imatriculation,marque,numero_parking,date_entre,heur_entre) values (3,'tftttz','1253TGB','vam',1,'2021-11-19','05:14:32');

/*Table structure for table `base1` */

DROP TABLE IF EXISTS `base1`;

CREATE TABLE `base1` (
  `date_sortie` date DEFAULT NULL,
  `heur_sortie` time DEFAULT NULL,
  `numero_parking` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

/*Data for the table `base1` */

/*Table structure for table `historique` */

DROP TABLE IF EXISTS `historique`;

CREATE TABLE `historique` (
  `nom_chauffeur` varchar(255) DEFAULT NULL,
  `numero_imatriculation` varchar(255) DEFAULT NULL,
  `marque` varchar(255) DEFAULT NULL,
  `numero_parking` int(11) DEFAULT NULL,
  `date_entre` date DEFAULT NULL,
  `heur_entre` time DEFAULT NULL,
  `date_sortie` date DEFAULT NULL,
  `heur_sortie` time DEFAULT NULL,
  `heur_stationnement` varchar(255) DEFAULT NULL,
  `montant` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

/*Data for the table `historique` */

insert  into `historique`(nom_chauffeur,numero_imatriculation,marque,numero_parking,date_entre,heur_entre,date_sortie,heur_sortie,heur_stationnement,montant) values ('RAZAKARIMANANA Fenosoa Hantenaina','1238TGB','Rexton',3,'2021-08-31','18:42:56','2021-08-31','21:11:24',NULL,NULL),('safidy adelin','8644TGJ','4X4',23,'2021-09-06','08:16:59','2021-10-29','18:28:44',NULL,NULL),('safidy adelin','8644TGJ','teste',3,'2021-10-29','18:33:52','2021-10-29','18:34:17',NULL,NULL),('razaka','5765TFG','Rexton',44,'2021-09-06','08:17:12','2021-09-06','08:34:58',NULL,NULL),('slipo','6553TYR','Rexton',8,'2021-10-29','18:35:38','2021-11-19','08:13:00',NULL,NULL),('zandrikelu','1253TGB','vam',2,'2021-11-19','07:12:24','2021-11-19','08:14:59',NULL,NULL);

/*Table structure for table `historique1` */

DROP TABLE IF EXISTS `historique1`;

CREATE TABLE `historique1` (
  `numero_imatriculation` varchar(255) DEFAULT NULL,
  `heur_stationnement` varchar(255) DEFAULT NULL,
  `montant` int(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

/*Data for the table `historique1` */

insert  into `historique1`(numero_imatriculation,heur_stationnement,montant) values ('6553TYR','14:38:38',7317),('1253TGB','1:2:35',517);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
