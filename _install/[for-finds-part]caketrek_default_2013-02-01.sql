-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Client: localhost
-- Généré le: Ven 01 Février 2013 à 12:33
-- Version du serveur: 5.5.25
-- Version de PHP: 5.4.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Base de données: `caketrek_default`
--

-- --------------------------------------------------------

--
-- Structure de la table `tourists`
--

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
