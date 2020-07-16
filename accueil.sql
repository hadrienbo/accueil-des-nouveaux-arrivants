-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Mar 14 Mai 2019 à 20:18
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `accueil`
--

-- --------------------------------------------------------

--
-- Structure de la table `achievements`
--

CREATE TABLE IF NOT EXISTS `achievements` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Achievement` varchar(65) NOT NULL,
  `date` date NOT NULL,
  `CompetenceRequise` varchar(65) DEFAULT NULL,
  `Tuteur` varchar(15) DEFAULT NULL,
  `Appel` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=29 ;

--
-- Contenu de la table `achievements`
--

INSERT INTO `achievements` (`id`, `Achievement`, `date`, `CompetenceRequise`, `Tuteur`, `Appel`) VALUES
(1, 'Presentation Arise', '2019-05-12', 'Membre Arise', 'Tuteur', 1),
(6, 'Visite du bar', '2019-05-13', 'Membre bar', 'elevebar', 1),
(27, 'Visite de l''ecole', '2019-09-01', NULL, 'Tuteur', 0),
(28, 'fÃªte pub', '2019-05-14', 'Membre bar', 'elevebar', 0);

-- --------------------------------------------------------

--
-- Structure de la table `achievementsdonebyeleves`
--

CREATE TABLE IF NOT EXISTS `achievementsdonebyeleves` (
  `Achievement` varchar(65) NOT NULL,
  `Eleve` varchar(15) NOT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=47 ;

--
-- Contenu de la table `achievementsdonebyeleves`
--

INSERT INTO `achievementsdonebyeleves` (`Achievement`, `Eleve`, `id`) VALUES
('Presentation Arise', 'LeNouveau', 6),
('Presentation Arise', 'LeNouveau', 37),
('Presentation Arise', '', 38),
('Presentation Arise', '', 39),
('Presentation Arise', '', 40),
('Presentation Arise', '', 41),
('Presentation Arise', '', 42),
('Presentation Arise', '', 43),
('Presentation Arise', '', 44),
('Presentation Arise', '', 45),
('Presentation Arise', '', 46);

-- --------------------------------------------------------

--
-- Structure de la table `eleves`
--

CREATE TABLE IF NOT EXISTS `eleves` (
  `Pseudo` varchar(15) NOT NULL,
  `Mail` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `Tuteur` tinyint(1) NOT NULL DEFAULT '0',
  `Admin` tinyint(1) NOT NULL DEFAULT '0',
  `Competences` varchar(65) DEFAULT NULL,
  `id` int(15) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`),
  UNIQUE KEY `Mail` (`Mail`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=27 ;

--
-- Contenu de la table `eleves`
--

INSERT INTO `eleves` (`Pseudo`, `Mail`, `Password`, `Tuteur`, `Admin`, `Competences`, `id`) VALUES
('admin', 'admin@ensiie.fr', 'admin', 0, 1, NULL, 1),
('Tuteur', 'tuteur@ensiie.fr', 'tuteur', 1, 0, 'Membre Arise', 2),
('LeNouveau', 'lenouveau@ensiie.fr', 'lenouveau', 0, 0, NULL, 3),
('autrenouveau', 'autrenouveau@ensiie.fr', 'autrenouveau', 0, 0, NULL, 5),
('elevebar', 'elevebar@ensiie.fr', 'elevebar', 1, 0, 'Membre bar', 14),
('nouveau', 'nv@ensiie.fr', '0000', 0, 0, '', 26);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
