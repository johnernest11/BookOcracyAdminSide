/*
SQLyog Community v13.1.9 (64 bit)
MySQL - 10.4.24-MariaDB : Database - bookocracy
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`bookocracy` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;

USE `bookocracy`;

/*Table structure for table `accounts` */

DROP TABLE IF EXISTS `accounts`;

CREATE TABLE `accounts` (
  `AID` int(11) NOT NULL AUTO_INCREMENT,
  `Profile_Photo` varchar(100) NOT NULL DEFAULT 'no_file',
  `Cover_Photo` varchar(100) DEFAULT 'reader-bg.jpg',
  `Full_Name` varchar(50) NOT NULL,
  `Username` varchar(25) NOT NULL,
  `Phone_Number` varchar(25) DEFAULT NULL,
  `Birth_Date` date NOT NULL,
  `Credits` int(11) NOT NULL DEFAULT 0,
  `Votes_Credit` int(11) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Password` varchar(300) DEFAULT NULL,
  PRIMARY KEY (`AID`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

/*Data for the table `accounts` */

insert  into `accounts`(`AID`,`Profile_Photo`,`Cover_Photo`,`Full_Name`,`Username`,`Phone_Number`,`Birth_Date`,`Credits`,`Votes_Credit`,`Email`,`Password`) values 
(1,'no_file','reader-bg.jpg','Jose Mari Chan','Chan','123','2009-01-01',2054,0,'justine@johnnytsunami.com','759730a97e4373f3a0ee12805db065e3a4a649a5'),
(3,'no_file','reader-bg.jpg','Justine Jusi','Justine','112233','2009-01-01',475,15,'justinejusi98@gmail.com','759730a97e4373f3a0ee12805db065e3a4a649a5');

/*Table structure for table `tbl_user` */

DROP TABLE IF EXISTS `tbl_user`;

CREATE TABLE `tbl_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(200) NOT NULL,
  `last_name` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=95 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_user` */

insert  into `tbl_user`(`id`,`first_name`,`last_name`) values 
(91,'Harold','Jones'),
(89,'Christine','Smith'),
(88,'Marker','Angela'),
(87,'Romeo','Mary'),
(86,'Smith','John');

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL,
  `fname` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `users` */

insert  into `users`(`id`,`email`,`password`,`fname`) values 
(1,'ndevierte@gmail.com','nurhodelta','Neovic Devierte'),
(2,'gemalyn@gmail.com','cepe','Gemalyn Cepe');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
