-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  mer. 04 mars 2020 à 07:39
-- Version du serveur :  5.7.24
-- Version de PHP :  7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `phpevaluation`
--
CREATE DATABASE IF NOT EXISTS `phpevaluation` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `phpevaluation`;

-- --------------------------------------------------------

--
-- Structure de la table `2526u_groupeusers`
--

DROP TABLE IF EXISTS `2526u_groupeusers`;
CREATE TABLE IF NOT EXISTS `2526u_groupeusers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `groupeType` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=255556 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `2526u_groupeusers`
--

INSERT INTO `2526u_groupeusers` (`id`, `groupeType`) VALUES
(255555, 'Administrateur'),
(2, 'utilisateur'),
(2565, 'Formateur');

-- --------------------------------------------------------

--
-- Structure de la table `2526u_user`
--

DROP TABLE IF EXISTS `2526u_user`;
CREATE TABLE IF NOT EXISTS `2526u_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `surname` varchar(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `email` varchar(60) NOT NULL,
  `groupeusers_id` int(11) NOT NULL DEFAULT '2',
  `password` blob NOT NULL,
  `cle` varchar(60) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `artist`
--

DROP TABLE IF EXISTS `artist`;
CREATE TABLE IF NOT EXISTS `artist` (
  `artist_id` int(11) NOT NULL AUTO_INCREMENT,
  `artist_name` varchar(255) DEFAULT NULL,
  `artist_url` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`artist_id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `artist`
--

INSERT INTO `artist` (`artist_id`, `artist_name`, `artist_url`) VALUES
(1, 'Neil Young', NULL),
(2, 'YES', NULL),
(3, 'Rolling Stones', NULL),
(4, 'Queens of the Stone Age', NULL),
(5, 'Serge Gainsbourg', NULL),
(6, 'AC/DC', NULL),
(7, 'Marillion', NULL),
(8, 'Bob Dylan', NULL),
(9, 'Fleshtones', NULL),
(10, 'The Clash', NULL),
(11, 'essaye', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `disc`
--

DROP TABLE IF EXISTS `disc`;
CREATE TABLE IF NOT EXISTS `disc` (
  `disc_id` int(11) NOT NULL AUTO_INCREMENT,
  `disc_title` varchar(255) DEFAULT NULL,
  `disc_year` int(11) DEFAULT NULL,
  `disc_picture` varchar(255) DEFAULT NULL,
  `disc_label` varchar(255) DEFAULT NULL,
  `disc_genre` varchar(255) DEFAULT NULL,
  `disc_price` decimal(6,2) DEFAULT NULL,
  `artist_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`disc_id`),
  KEY `artist_id` (`artist_id`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `disc`
--

INSERT INTO `disc` (`disc_id`, `disc_title`, `disc_year`, `disc_picture`, `disc_label`, `disc_genre`, `disc_price`, `artist_id`) VALUES
(1, 'Fugazi', 1984, 'Fugazi.jpeg', 'EMI', 'Prog', '14.99', 7),
(2, 'Songs for the Deaf', 2002, 'Songs for the Deaf.jpeg', 'Interscope Records', 'Rock/Stoner', '12.99', 4),
(3, 'Harvest Moon', 1992, 'Harvest Moon.jpeg', 'Reprise Records', 'Rock', '4.20', 1),
(4, 'Initials BB', 1968, 'Initials BB.jpeg', 'Philips', ' Chanson, Pop Rock', '12.99', 5),
(5, 'After the Gold Rush', 1970, 'After the Gold Rush.jpeg', ' Reprise Records', 'Country Rock', '20.00', 1),
(6, 'Broken Arrow', 1996, 'Broken Arrow.jpeg', 'Reprise Records', ' Country Rock, Classic Rock', '15.00', 1),
(7, 'Highway To Hell', 1979, 'Highway To Hell.jpeg', 'Atlantic', 'Hard Rock', '15.00', 6),
(8, 'Drama', 1980, 'Drama.jpeg', 'Atlantic', 'Prog', '15.00', 2),
(9, 'Year of the Horse', 1997, 'Year of the Horse.jpeg', 'Reprise Records', 'Country Rock, Classic Rock', '7.50', 1),
(10, 'Ragged Glory', 1990, 'Ragged Glory.jpeg', 'Reprise Records', 'Country Rock, Grunge', '11.00', 1),
(11, 'Rust Never Sleeps', 1979, 'Rust Never Sleeps.jpeg', 'Reprise Records', 'Classic Rock, Arena Rock', '15.00', 1),
(12, 'Exile on main street', 1972, 'Exile on main street.jpeg', 'Rolling Stones Records', 'Blues Rock, Classic Rock', '33.00', 1),
(13, 'London Calling', 1971, 'London Calling.jpeg', 'CBS', 'Punk, New Wave', '33.00', 10),
(14, 'Beggars Banquet', 1968, 'Beggars Banquet.jpeg', 'Rolling Stones Records', 'Blues Rock, Classic Rock', '33.00', 1),
(15, 'Laboratory of sound', 1995, 'Laboratory of sound.jpeg', 'Rebel Rec.', 'Rock', '33.00', 9);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
