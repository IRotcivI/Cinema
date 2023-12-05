-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mar. 05 déc. 2023 à 18:05
-- Version du serveur : 8.0.31
-- Version de PHP : 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `vsa_cinema`
--

-- --------------------------------------------------------

--
-- Structure de la table `film`
--

DROP TABLE IF EXISTS `film`;
CREATE TABLE IF NOT EXISTS `film` (
  `id_film` int NOT NULL AUTO_INCREMENT,
  `nom` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `affiche` text NOT NULL,
  `realisateur` varchar(50) NOT NULL,
  `ref_film_salle_projection` int NOT NULL,
  PRIMARY KEY (`id_film`,`ref_film_salle_projection`),
  KEY `fk_film_salle_projection` (`ref_film_salle_projection`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `reduction`
--

DROP TABLE IF EXISTS `reduction`;
CREATE TABLE IF NOT EXISTS `reduction` (
  `id_reduction` int NOT NULL AUTO_INCREMENT,
  `code` varchar(10) NOT NULL,
  `date_exp` date NOT NULL,
  `pourcentage` int NOT NULL,
  `ref_reservation` int NOT NULL,
  PRIMARY KEY (`id_reduction`,`ref_reservation`),
  KEY `fk_reduction_reservation` (`ref_reservation`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `reduction`
--

INSERT INTO `reduction` (`id_reduction`, `code`, `date_exp`, `pourcentage`, `ref_reservation`) VALUES
(1, '123', '0000-00-00', 0, 2);

-- --------------------------------------------------------

--
-- Structure de la table `reservation`
--

DROP TABLE IF EXISTS `reservation`;
CREATE TABLE IF NOT EXISTS `reservation` (
  `id_reservation` int NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `heure` time NOT NULL,
  `paiement` tinyint(1) NOT NULL,
  `nbr_place` int NOT NULL,
  `ref_utilisateur` int NOT NULL,
  PRIMARY KEY (`id_reservation`,`ref_utilisateur`),
  KEY `fk_reservation_utilisateur` (`ref_utilisateur`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `reservation`
--

INSERT INTO `reservation` (`id_reservation`, `nom`, `date`, `heure`, `paiement`, `nbr_place`, `ref_utilisateur`) VALUES
(2, 'TEST', '0000-00-00', '00:00:00', 0, 0, 3);

-- --------------------------------------------------------

--
-- Structure de la table `salle_projection`
--

DROP TABLE IF EXISTS `salle_projection`;
CREATE TABLE IF NOT EXISTS `salle_projection` (
  `id_salle` int NOT NULL AUTO_INCREMENT,
  `nom_salle` varchar(50) NOT NULL,
  `nbr_place` int NOT NULL,
  `dimension` varchar(50) NOT NULL,
  `ref_reservation` int NOT NULL,
  PRIMARY KEY (`id_salle`,`ref_reservation`),
  KEY `fk_salle_projection_reservation` (`ref_reservation`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

DROP TABLE IF EXISTS `utilisateur`;
CREATE TABLE IF NOT EXISTS `utilisateur` (
  `id_utilisateur` int NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `age` int NOT NULL,
  `email` varchar(120) NOT NULL,
  `mdp` text NOT NULL,
  `tel` varchar(15) NOT NULL,
  `rue` varchar(200) NOT NULL,
  `ville` varchar(100) NOT NULL,
  `cp` int NOT NULL,
  `administrateur` int DEFAULT NULL,
  PRIMARY KEY (`id_utilisateur`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`id_utilisateur`, `nom`, `prenom`, `age`, `email`, `mdp`, `tel`, `rue`, `ville`, `cp`, `administrateur`) VALUES
(3, 'FAYE', 'Victor', 18, 'fayedaour@outlook.fr', 'test', '+337859742', '40 Allee de la croix du sud', 'Le Blanc Mesnil', 93150, NULL);

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `film`
--
ALTER TABLE `film`
  ADD CONSTRAINT `fk_film_salle_projection` FOREIGN KEY (`ref_film_salle_projection`) REFERENCES `salle_projection` (`id_salle`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Contraintes pour la table `reduction`
--
ALTER TABLE `reduction`
  ADD CONSTRAINT `fk_reduction_reservation` FOREIGN KEY (`ref_reservation`) REFERENCES `reservation` (`id_reservation`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Contraintes pour la table `reservation`
--
ALTER TABLE `reservation`
  ADD CONSTRAINT `fk_reservation_utilisateur` FOREIGN KEY (`ref_utilisateur`) REFERENCES `utilisateur` (`id_utilisateur`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Contraintes pour la table `salle_projection`
--
ALTER TABLE `salle_projection`
  ADD CONSTRAINT `fk_salle_projection_reservation` FOREIGN KEY (`ref_reservation`) REFERENCES `reservation` (`id_reservation`) ON DELETE RESTRICT ON UPDATE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
