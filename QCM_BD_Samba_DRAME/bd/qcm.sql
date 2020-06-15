-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Lun 15 Juin 2020 à 11:08
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `qcm`
--

-- --------------------------------------------------------

--
-- Structure de la table `avoir`
--

CREATE TABLE IF NOT EXISTS `avoir` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  PRIMARY KEY (`id`,`id_user`),
  KEY `avoir_user0_FK` (`id_user`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `avoir`
--

INSERT INTO `avoir` (`id`, `id_user`) VALUES
(1, 1),
(2, 2),
(3, 3),
(4, 4);

-- --------------------------------------------------------

--
-- Structure de la table `nombre`
--

CREATE TABLE IF NOT EXISTS `nombre` (
  `nombre` int(11) NOT NULL,
  PRIMARY KEY (`nombre`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `nombre`
--

INSERT INTO `nombre` (`nombre`) VALUES
(10);

-- --------------------------------------------------------

--
-- Structure de la table `question`
--

CREATE TABLE IF NOT EXISTS `question` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `question` varchar(250) NOT NULL,
  `typeQuestion` varchar(20) NOT NULL,
  `reponse` varchar(250) NOT NULL,
  `nbpoint` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `question_user_FK` (`id_user`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Contenu de la table `question`
--

INSERT INTO `question` (`id`, `question`, `typeQuestion`, `reponse`, `nbpoint`, `id_user`) VALUES
(1, 'Qui est l''actuel président du Sénégal ?', 'simple', 'Macky Sall ', 2, 1),
(7, 'Quelle est la devise du Sénégal ?', 'texte', 'Un peuple, un but, une foie', 1, 1),
(8, 'Quel animal symbolise le pays ?', 'texte', 'Le lion', 1, 2),
(9, 'Quel est ce lieu, symbole de la mémoire de la traite négrière ?', 'simple', 'île de Gorée', 1, 1),
(11, 'En quelle année a eu lieu ce naufrage ?', 'simple', '2002', 1, 1),
(12, 'Les navigateurs Internet sont:', 'simple', 'Mozilla Firefox, Opéra Safari, Google Chrome', 1, 2),
(13, 'Quelle est la part de marché du navigateur Internet Explorer en Europe en 2010 ?', 'texte', '36%', 1, 1),
(14, 'Quelle est la part de marché du moteur de recherche Google en Europe en 2010', 'texte', '90%', 1, 2),
(15, 'Les pages Web sont reliées entre elles par des...', 'texte', 'hyperliens', 1, 2),
(16, 'Un moteur de recherche permet de...', 'texte', 'rechercher des informations', 1, 1),
(17, 'Cette adresse internet est-elle valide : www. météofrance.com ?', 'texte', 'Non', 1, 2);

-- --------------------------------------------------------

--
-- Structure de la table `score`
--

CREATE TABLE IF NOT EXISTS `score` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `score` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Contenu de la table `score`
--

INSERT INTO `score` (`id`, `score`) VALUES
(1, 14),
(2, 0),
(3, 0),
(4, 10);

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `password` varchar(50) NOT NULL,
  `role` varchar(50) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `login` varchar(50) NOT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Contenu de la table `user`
--

INSERT INTO `user` (`id_user`, `password`, `role`, `prenom`, `nom`, `login`) VALUES
(1, 'joueurjoueur', 'joueur', 'Joueur', 'Joueur', 'joueur'),
(2, 'adminadmin', 'admin', 'Admin', 'ADMIN', 'Admin'),
(3, 'sambadrame', 'admin', 'Samba', 'DRAME', 'samba'),
(4, 'sambadrame', 'joueur', 'Samba', 'DRAME', 'drame');

--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `avoir`
--
ALTER TABLE `avoir`
  ADD CONSTRAINT `avoir_score_FK` FOREIGN KEY (`id`) REFERENCES `score` (`id`),
  ADD CONSTRAINT `avoir_user0_FK` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`);

--
-- Contraintes pour la table `question`
--
ALTER TABLE `question`
  ADD CONSTRAINT `question_user_FK` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
