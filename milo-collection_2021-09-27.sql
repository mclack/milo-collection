# ************************************************************
# Sequel Pro SQL dump
# Version 4541
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: 127.0.0.1 (MySQL 5.7.35)
# Database: milo-collection
# Generation Time: 2021-09-27 11:02:05 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table idols
# ------------------------------------------------------------

DROP TABLE IF EXISTS `idols`;

CREATE TABLE `idols` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL DEFAULT '',
  `age` int(2) unsigned NOT NULL,
  `instrument` varchar(20) NOT NULL DEFAULT '',
  `band` varchar(20) NOT NULL DEFAULT '',
  `technical prowess` int(2) unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `idols` WRITE;
/*!40000 ALTER TABLE `idols` DISABLE KEYS */;

INSERT INTO `idols` (`id`, `name`, `age`, `instrument`, `band`, `technical prowess`)
VALUES
	(1,'Mario Duplantier',40,'Drums','Gojira',10),
	(2,'Troy Sanders',48,'Bass + Vocals','Mastodon',6),
	(3,'Javier Reyes',40,'8-String Guitar','Animals As Leaders',10),
	(4,'Mike Scheidt',51,'Guitar + Vocals','YOB',7),
	(5,'Matt Ryan',32,'Vocals','Desert Storm',7),
	(6,'Devin Townsend',49,'Guitar + Vocals','Devin Townsend',9);

/*!40000 ALTER TABLE `idols` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
