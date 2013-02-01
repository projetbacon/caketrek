# ************************************************************
# Sequel Pro SQL dump
# Version 4004
#
# http://www.sequelpro.com/
# http://code.google.com/p/sequel-pro/
#
# Hôte: localhost (MySQL 5.5.9)
# Base de données: caketrek_default
# Temps de génération: 2013-02-01 11:23:51 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Affichage de la table badges
# ------------------------------------------------------------

DROP TABLE IF EXISTS `badges`;

CREATE TABLE `badges` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` char(100) NOT NULL,
  `label` varchar(255) DEFAULT NULL,
  `description` text,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

LOCK TABLES `badges` WRITE;
/*!40000 ALTER TABLE `badges` DISABLE KEYS */;

INSERT INTO `badges` (`id`, `name`, `label`, `description`, `created`, `modified`)
VALUES
	(1,'rookie','Rookie','Premiers pas',NULL,NULL),
	(2,'first_blood','First Blood','Premi',NULL,NULL),
	(3,'natural_born_leader','Natural Born Leader','A organis',NULL,NULL),
	(4,'walker','Walker','A particip',NULL,NULL);

/*!40000 ALTER TABLE `badges` ENABLE KEYS */;
UNLOCK TABLES;


# Affichage de la table badges_objects
# ------------------------------------------------------------

DROP TABLE IF EXISTS `badges_objects`;

CREATE TABLE `badges_objects` (
  `id` bigint(11) unsigned NOT NULL AUTO_INCREMENT,
  `badge_id` int(11) unsigned DEFAULT NULL,
  `object_id` int(11) unsigned DEFAULT NULL,
  `object` char(30) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

LOCK TABLES `badges_objects` WRITE;
/*!40000 ALTER TABLE `badges_objects` DISABLE KEYS */;

INSERT INTO `badges_objects` (`id`, `badge_id`, `object_id`, `object`, `created`)
VALUES
	(19,2,2,'Tourist','2013-01-27 18:57:55'),
	(18,4,1,'Tourist','2013-01-27 18:57:50'),
	(17,3,1,'Tourist','2013-01-27 18:57:50');

/*!40000 ALTER TABLE `badges_objects` ENABLE KEYS */;
UNLOCK TABLES;


# Affichage de la table badges_users
# ------------------------------------------------------------

DROP TABLE IF EXISTS `badges_users`;

CREATE TABLE `badges_users` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `badge_id` int(10) unsigned DEFAULT NULL,
  `user_id` int(11) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

LOCK TABLES `badges_users` WRITE;
/*!40000 ALTER TABLE `badges_users` DISABLE KEYS */;

INSERT INTO `badges_users` (`id`, `badge_id`, `user_id`)
VALUES
	(1,1,1),
	(2,3,1),
	(3,3,2),
	(4,1,4),
	(5,2,1);

/*!40000 ALTER TABLE `badges_users` ENABLE KEYS */;
UNLOCK TABLES;


# Affichage de la table guides
# ------------------------------------------------------------

DROP TABLE IF EXISTS `guides`;

CREATE TABLE `guides` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `slogan` varchar(200) DEFAULT NULL,
  `description` text,
  `tourist_id` int(11) DEFAULT NULL,
  `validated` tinyint(3) unsigned DEFAULT '0',
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

LOCK TABLES `guides` WRITE;
/*!40000 ALTER TABLE `guides` DISABLE KEYS */;

INSERT INTO `guides` (`id`, `slogan`, `description`, `tourist_id`, `validated`, `created`, `modified`)
VALUES
	(1,'il aime la montagne','',2,1,'2013-01-27 16:31:08','2013-01-27 16:31:26');

/*!40000 ALTER TABLE `guides` ENABLE KEYS */;
UNLOCK TABLES;


# Affichage de la table journeys
# ------------------------------------------------------------

DROP TABLE IF EXISTS `journeys`;

CREATE TABLE `journeys` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `tourist_id` int(11) unsigned DEFAULT NULL,
  `guide_id` int(11) unsigned DEFAULT NULL,
  `track_id` int(11) unsigned DEFAULT NULL,
  `zone_id` int(11) unsigned DEFAULT NULL,
  `name` varchar(200) DEFAULT NULL,
  `about` text,
  `body` text,
  `public` tinyint(3) unsigned DEFAULT '0',
  `crew` tinyint(4) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

LOCK TABLES `journeys` WRITE;
/*!40000 ALTER TABLE `journeys` DISABLE KEYS */;

INSERT INTO `journeys` (`id`, `tourist_id`, `guide_id`, `track_id`, `zone_id`, `name`, `about`, `body`, `public`, `crew`, `created`, `modified`)
VALUES
	(1,1,1,NULL,1,'Petite balade en Normandie','Visite des monuments de Normandie, sur la route des touristes perdus depuis plusieurs années.','Très très très cool visite, dégustation de super cidre pas très très bon, mais qui viennent de la Normandie, donc des cidres normands.\r\n10 personnes maximum, sinon, y aura plus de cidre.',10,1,'2013-01-29 11:22:50','2013-01-29 11:23:42'),
	(2,1,1,NULL,2,'Séjour dans le sud','Visite des montagnes des Pyrénées','Au programme, de la marche, des cailloux et encore des cailloux',10,2,'2013-01-29 11:31:42','2013-01-29 11:31:42');

/*!40000 ALTER TABLE `journeys` ENABLE KEYS */;
UNLOCK TABLES;


# Affichage de la table journeys_tourists
# ------------------------------------------------------------

DROP TABLE IF EXISTS `journeys_tourists`;

CREATE TABLE `journeys_tourists` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `tourist_id` int(11) unsigned DEFAULT NULL,
  `journey_id` int(11) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;



# Affichage de la table medias
# ------------------------------------------------------------

DROP TABLE IF EXISTS `medias`;

CREATE TABLE `medias` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `ref` varchar(60) DEFAULT NULL,
  `ref_id` int(11) DEFAULT NULL,
  `file` varchar(255) DEFAULT NULL,
  `position` int(11) DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `ref` (`ref`),
  KEY `ref_id` (`ref_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `medias` WRITE;
/*!40000 ALTER TABLE `medias` DISABLE KEYS */;

INSERT INTO `medias` (`id`, `ref`, `ref_id`, `file`, `position`)
VALUES
	(1,'Tourist',1,'/uploads/2013/01/llv01.jpg',0),
	(2,'Tourist',2,'/uploads/2013/01/llv02.JPG',0),
	(3,'Tourist',1,'/profile/2013/1/1/1.jpg',0),
	(4,'Tourist',1,'/uploads/profiles/2013/1/1/1.jpg',0),
	(5,'Tourist',1,'/uploads/profiles/2013/1/1/1-1.jpg',0);

/*!40000 ALTER TABLE `medias` ENABLE KEYS */;
UNLOCK TABLES;


# Affichage de la table tourists
# ------------------------------------------------------------

DROP TABLE IF EXISTS `tourists`;

CREATE TABLE `tourists` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(100) DEFAULT NULL,
  `bio` text,
  `media_id` int(11) unsigned DEFAULT NULL,
  `user_id` int(11) unsigned DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `is_guide` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Contenu de la table `tourists`
--

INSERT INTO `tourists` (`id`, `first_name`, `last_name`, `bio`, `media_id`, `user_id`, `created`, `modified`, `is_guide`) VALUES
(1, 'Gaspard', 'Beernaert', 'Il aime les grandes plaines de neige, il veut un yak', 5, 1, NULL, '2013-01-27 18:57:50', 0),
(2, 'Jo', 'Bo', 'Depuis tout petit, il aimait la glace à la chantilly', 2, 2, NULL, '2013-01-27 18:57:55', 1),
(3, 'Goal', 'Dubois', 'il adore découvrir d''autres cultures', 3, 3, NULL, NULL, 0);

/*!40000 ALTER TABLE `tourists` ENABLE KEYS */;
UNLOCK TABLES;


# Affichage de la table tourists_friends
# ------------------------------------------------------------

DROP TABLE IF EXISTS `tourists_friends`;

CREATE TABLE `tourists_friends` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `tourist_id` int(11) DEFAULT NULL,
  `tourist_receive_id` int(11) DEFAULT NULL,
  `status` varchar(11) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

LOCK TABLES `tourists_friends` WRITE;
/*!40000 ALTER TABLE `tourists_friends` DISABLE KEYS */;

INSERT INTO `tourists_friends` (`id`, `tourist_id`, `tourist_receive_id`, `status`, `created`, `modified`)
VALUES
	(2,2,3,'waiting','0000-00-00 00:00:00',NULL),
	(3,3,4,'friend','0000-00-00 00:00:00',NULL),
	(4,3,2,'friend','0000-00-00 00:00:00',NULL),
	(5,2,3,'waiting','0000-00-00 00:00:00',NULL),
	(6,5,4,'friend',NULL,NULL),
	(7,6,3,'waiting',NULL,NULL),
	(8,6,1,'friend',NULL,NULL),
	(9,4,6,'friend',NULL,NULL),
	(10,5,6,'waiting',NULL,NULL);

/*!40000 ALTER TABLE `tourists_friends` ENABLE KEYS */;
UNLOCK TABLES;


# Affichage de la table tracks
# ------------------------------------------------------------

DROP TABLE IF EXISTS `tracks`;

CREATE TABLE `tracks` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) DEFAULT NULL,
  `size` varchar(11) DEFAULT NULL,
  `level` int(11) DEFAULT NULL,
  `journey_id` int(11) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

LOCK TABLES `tracks` WRITE;
/*!40000 ALTER TABLE `tracks` DISABLE KEYS */;

INSERT INTO `tracks` (`id`, `name`, `size`, `level`, `journey_id`)
VALUES
	(1,'Dégustation cidre brut','10',1,NULL),
	(2,'Comptage des petits cailloux sur la route','5',2,NULL),
	(3,'Comptage des petits cailloux sur la route','10',2,1),
	(4,'Route des fromages','5',1,1),
	(5,'Parcours de la mort','200',5,2);

/*!40000 ALTER TABLE `tracks` ENABLE KEYS */;
UNLOCK TABLES;


# Affichage de la table users
# ------------------------------------------------------------

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `password` varchar(150) NOT NULL,
  `email` varchar(200) NOT NULL,
  `created` datetime DEFAULT NULL,
  `updated` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;

INSERT INTO `users` (`id`, `username`, `password`, `email`, `created`, `updated`)
VALUES
	(1,'gasp','pass','gaspard@gmail.com','2013-01-24 13:29:28','2013-01-25 10:59:58'),
	(2,'john','pass','jo@lamo.uk','2013-01-24 13:29:55','2013-01-24 16:30:15'),
	(3,'martha','pass','martha@yahoo.com','2013-01-24 18:18:16','2013-01-24 18:18:16'),
	(4,'joseph','pass','joseh@yahoo.com','2013-01-24 18:19:05','2013-01-24 18:19:05'),
	(5,'veteran','pass','veteranmartha@yahoo.com','2013-01-24 18:19:34','2013-01-24 18:19:34'),
	(6,'patrick','pass','patrick@yahoo.com','2013-01-24 18:20:25','2013-01-24 18:20:25'),
	(7,'emile','pass','emile@yahoo.com','2013-01-24 18:57:35',NULL),
	(8,'ernesto','pass','ernesto@yahoo.com','2013-01-24 18:57:49',NULL),
	(9,'peter','pass','peter@yahoo.com','2013-01-24 18:57:53',NULL),
	(10,'beber','pass','beber@yahoo.com','2013-01-24 18:57:57',NULL),
	(11,'jack','pass','jack@yahoo.com','2013-01-24 18:58:00',NULL),
	(12,'greg','pass','greg@yahoo.com','2013-01-24 18:58:15',NULL),
	(13,'emilio','pass','emilio@yahoo.com','2013-01-24 18:58:29',NULL),
	(14,'michael','pass','michael@yahoo.com','2013-01-24 18:58:45',NULL),
	(15,'juan','pass','juan@yahoo.com','2013-01-24 18:59:07',NULL),
	(16,'wolfgang','pass','wolfgang@yahoo.com','2013-01-24 18:59:21',NULL),
	(17,'dieter','pass','dieter@yahoo.com','2013-01-24 18:59:41',NULL),
	(18,'sam','pass','sam@yahoo.com','2013-01-24 18:59:51',NULL),
	(19,'micah','pass','micah@yahoo.com','2013-01-24 19:00:06',NULL),
	(20,'ferdinand','pass','ferdinand@yahoo.com','2013-01-24 19:00:33',NULL),
	(21,'jekyll','pass','jekyll@yahoo.com','2013-01-24 19:00:49',NULL),
	(22,'hide','pass','hide@yahoo.com','2013-01-24 19:01:32',NULL),
	(23,'sergey','pass','sergey@yahoo.com','2013-01-24 19:33:30','2013-01-24 19:33:30'),
	(24,'maria','pass','maria@yahoo.com','2013-01-24 19:36:44','2013-01-24 19:36:44');

/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;


# Affichage de la table zones
# ------------------------------------------------------------

DROP TABLE IF EXISTS `zones`;

CREATE TABLE `zones` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  `journey_id` int(11) DEFAULT NULL,
  `track_id` int(11) DEFAULT NULL,
  `country` varchar(40) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

LOCK TABLES `zones` WRITE;
/*!40000 ALTER TABLE `zones` DISABLE KEYS */;

INSERT INTO `zones` (`id`, `name`, `journey_id`, `track_id`, `country`)
VALUES
	(1,'Nord-Ouest',NULL,NULL,'France'),
	(2,'Sud-Ouest',NULL,NULL,'France'),
	(3,'Nors-Est',NULL,NULL,'France');

/*!40000 ALTER TABLE `zones` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
