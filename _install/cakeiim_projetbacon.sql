-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 01, 2013 at 11:26 AM
-- Server version: 5.1.53
-- PHP Version: 5.3.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `cakeiim_projetbacon`
--

-- --------------------------------------------------------

--
-- Table structure for table `badges`
--

CREATE TABLE IF NOT EXISTS `badges` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` char(100) NOT NULL,
  `label` varchar(255) DEFAULT NULL,
  `description` text,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `badges`
--

INSERT INTO `badges` (`id`, `name`, `label`, `description`, `created`, `modified`) VALUES
(1, 'rookie', 'Rookie', 'Premiers pas', NULL, NULL),
(2, 'first_blood', 'First Blood', 'Première Journey qui a été annulée', NULL, NULL),
(3, 'natural_born_leader', 'Natural Born Leader', 'A organisé plus de 10 journeys', NULL, NULL),
(4, 'walker', 'Walker', 'A participé à au moins 5 journeys', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `badges_objects`
--

CREATE TABLE IF NOT EXISTS `badges_objects` (
  `id` bigint(11) unsigned NOT NULL AUTO_INCREMENT,
  `badge_id` int(11) unsigned DEFAULT NULL,
  `object_id` int(11) unsigned DEFAULT NULL,
  `object` char(30) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=20 ;

--
-- Dumping data for table `badges_objects`
--

INSERT INTO `badges_objects` (`id`, `badge_id`, `object_id`, `object`, `created`) VALUES
(19, 2, 2, 'Tourist', '2013-01-27 18:57:55'),
(18, 4, 1, 'Tourist', '2013-01-27 18:57:50'),
(17, 3, 1, 'Tourist', '2013-01-27 18:57:50');

-- --------------------------------------------------------

--
-- Table structure for table `badges_users`
--

CREATE TABLE IF NOT EXISTS `badges_users` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `badge_id` int(10) unsigned DEFAULT NULL,
  `user_id` int(11) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `badges_users`
--

INSERT INTO `badges_users` (`id`, `badge_id`, `user_id`) VALUES
(1, 1, 1),
(2, 3, 1),
(3, 3, 2),
(4, 1, 4),
(5, 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `guides`
--

CREATE TABLE IF NOT EXISTS `guides` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `slogan` varchar(200) DEFAULT NULL,
  `description` text,
  `tourist_id` int(11) DEFAULT NULL,
  `validated` tinyint(3) unsigned DEFAULT '0',
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `guides`
--

INSERT INTO `guides` (`id`, `slogan`, `description`, `tourist_id`, `validated`, `created`, `modified`) VALUES
(1, 'il aime la montagne', '', 2, 1, '2013-01-27 16:31:08', '2013-01-27 16:31:26');

-- --------------------------------------------------------

--
-- Table structure for table `journeys`
--

CREATE TABLE IF NOT EXISTS `journeys` (
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
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `journeys`
--


-- --------------------------------------------------------

--
-- Table structure for table `medias`
--

CREATE TABLE IF NOT EXISTS `medias` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `ref` varchar(60) DEFAULT NULL,
  `ref_id` int(11) DEFAULT NULL,
  `file` varchar(255) DEFAULT NULL,
  `position` int(11) DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `ref` (`ref`),
  KEY `ref_id` (`ref_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `medias`
--

INSERT INTO `medias` (`id`, `ref`, `ref_id`, `file`, `position`) VALUES
(1, 'Tourist', 1, '/uploads/2013/01/llv01.jpg', 0),
(2, 'Tourist', 2, '/uploads/2013/01/llv02.JPG', 0),
(3, 'Tourist', 1, '/profile/2013/1/1/1.jpg', 0),
(4, 'Tourist', 1, '/uploads/profiles/2013/1/1/1.jpg', 0),
(5, 'Tourist', 1, '/uploads/profiles/2013/1/1/1-1.jpg', 0);

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE IF NOT EXISTS `messages` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) unsigned DEFAULT NULL,
  `user_receiver_id` int(11) unsigned DEFAULT NULL,
  `message` text,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=24 ;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `user_id`, `user_receiver_id`, `message`, `created`, `modified`) VALUES
(1, 2, 3, 'salut', NULL, NULL),
(2, 2, 5, 'Salut ca marche enfin! Vive Cake Bake!', '2013-01-29 08:12:11', '2013-01-29 08:12:11'),
(3, 1, 4, 'salut, ca va bien?', '2013-01-29 11:40:14', '2013-01-29 11:40:14'),
(15, 1, 2, 'koman sa va?', '2013-02-01 08:59:27', '2013-02-01 08:59:27'),
(5, 5, 1, 'sad asldjasld asldkajs dlsakjdas', '2013-01-30 12:28:08', '2013-01-30 12:28:12'),
(6, 2, 1, 'test de message', '2013-01-30 12:27:37', '2013-01-30 12:27:45'),
(13, 1, 2, 'salut john', '2013-02-01 08:59:07', '2013-02-01 08:59:07'),
(14, 2, 1, 'salut gasp', '2013-02-01 08:59:15', '2013-02-01 08:59:15'),
(12, 1, 2, 'asdsad asd sadsa d', '2013-01-30 12:58:27', '2013-01-30 12:58:30'),
(10, 1, 6, 'le message que jenvoi a 6', '2013-01-30 12:28:49', '2013-01-30 12:28:52'),
(11, 1, 4, 'le message que envoi a 4', '2013-01-30 12:29:07', '2013-01-30 12:29:10'),
(16, 6, 1, 'salut cest patrick! ca va gasp?', '2013-02-01 10:37:07', '2013-02-01 10:37:07'),
(17, 1, 6, 'salut pat! ouai ca va et toi?', '2013-02-01 10:37:23', '2013-02-01 10:37:23'),
(18, 6, 1, 'ca ne peut pas aller mieux!', '2013-02-01 10:37:36', '2013-02-01 10:37:36'),
(19, 4, 1, 'euuh gasp jai une petite chose a te dir', '2013-02-01 10:38:11', '2013-02-01 10:38:11'),
(20, 4, 1, 'enfait jte dirai demain', '2013-02-01 10:38:23', '2013-02-01 10:38:23'),
(21, 1, 5, 'veteran je ne comprend pas', '2013-02-01 10:39:06', '2013-02-01 10:39:06'),
(22, 5, 1, 'tu ne comprend pas quoi?', '2013-02-01 10:39:19', '2013-02-01 10:39:19'),
(23, 1, 5, 'ce que tu ma dis', '2013-02-01 10:39:29', '2013-02-01 10:39:29');

-- --------------------------------------------------------

--
-- Table structure for table `tourists`
--

CREATE TABLE IF NOT EXISTS `tourists` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(100) DEFAULT NULL,
  `bio` text,
  `media_id` int(11) unsigned DEFAULT NULL,
  `user_id` int(11) unsigned DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `tourists`
--

INSERT INTO `tourists` (`id`, `first_name`, `last_name`, `bio`, `media_id`, `user_id`, `created`, `modified`) VALUES
(1, 'Gaspard', 'Beernaert', 'Il aime les grandes plaines de neige, il veut un yak', 5, 1, NULL, '2013-01-27 18:57:50'),
(2, 'Jo', 'Bo', 'Depuis tout petit, il aimait la glace à la chantilly', 2, 2, NULL, '2013-01-27 18:57:55');

-- --------------------------------------------------------

--
-- Table structure for table `tourists_friends`
--

CREATE TABLE IF NOT EXISTS `tourists_friends` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `tourist_id` int(11) unsigned DEFAULT NULL,
  `friend_id` int(11) DEFAULT NULL,
  `status` char(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `tourists_friends`
--


-- --------------------------------------------------------

--
-- Table structure for table `tracks`
--

CREATE TABLE IF NOT EXISTS `tracks` (
  `id` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tracks`
--


-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `password` varchar(150) NOT NULL,
  `email` varchar(200) NOT NULL,
  `created` datetime DEFAULT NULL,
  `updated` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=25 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`, `created`, `updated`) VALUES
(1, 'gasp', 'pass', 'gaspard@gmail.com', '2013-01-24 13:29:28', '2013-01-25 10:59:58'),
(2, 'john', 'pass', 'jo@lamo.uk', '2013-01-24 13:29:55', '2013-01-24 16:30:15'),
(3, 'martha', 'pass', 'martha@yahoo.com', '2013-01-24 18:18:16', '2013-01-24 18:18:16'),
(4, 'joseph', 'pass', 'joseh@yahoo.com', '2013-01-24 18:19:05', '2013-01-24 18:19:05'),
(5, 'veteran', 'pass', 'veteranmartha@yahoo.com', '2013-01-24 18:19:34', '2013-01-24 18:19:34'),
(6, 'patrick', 'pass', 'patrick@yahoo.com', '2013-01-24 18:20:25', '2013-01-24 18:20:25'),
(7, 'emile', 'pass', 'emile@yahoo.com', '2013-01-24 18:57:35', NULL),
(8, 'ernesto', 'pass', 'ernesto@yahoo.com', '2013-01-24 18:57:49', NULL),
(9, 'peter', 'pass', 'peter@yahoo.com', '2013-01-24 18:57:53', NULL),
(10, 'beber', 'pass', 'beber@yahoo.com', '2013-01-24 18:57:57', NULL),
(11, 'jack', 'pass', 'jack@yahoo.com', '2013-01-24 18:58:00', NULL),
(12, 'greg', 'pass', 'greg@yahoo.com', '2013-01-24 18:58:15', NULL),
(13, 'emilio', 'pass', 'emilio@yahoo.com', '2013-01-24 18:58:29', NULL),
(14, 'michael', 'pass', 'michael@yahoo.com', '2013-01-24 18:58:45', NULL),
(15, 'juan', 'pass', 'juan@yahoo.com', '2013-01-24 18:59:07', NULL),
(16, 'wolfgang', 'pass', 'wolfgang@yahoo.com', '2013-01-24 18:59:21', NULL),
(17, 'dieter', 'pass', 'dieter@yahoo.com', '2013-01-24 18:59:41', NULL),
(18, 'sam', 'pass', 'sam@yahoo.com', '2013-01-24 18:59:51', NULL),
(19, 'micah', 'pass', 'micah@yahoo.com', '2013-01-24 19:00:06', NULL),
(20, 'ferdinand', 'pass', 'ferdinand@yahoo.com', '2013-01-24 19:00:33', NULL),
(21, 'jekyll', 'pass', 'jekyll@yahoo.com', '2013-01-24 19:00:49', NULL),
(22, 'hide', 'pass', 'hide@yahoo.com', '2013-01-24 19:01:32', NULL),
(23, 'sergey', 'pass', 'sergey@yahoo.com', '2013-01-24 19:33:30', '2013-01-24 19:33:30'),
(24, 'maria', 'pass', 'maria@yahoo.com', '2013-01-24 19:36:44', '2013-01-24 19:36:44');

-- --------------------------------------------------------

--
-- Table structure for table `zones`
--

CREATE TABLE IF NOT EXISTS `zones` (
  `id` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `zones`
--

