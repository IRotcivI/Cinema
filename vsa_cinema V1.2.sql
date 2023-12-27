-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mer. 27 déc. 2023 à 14:19
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
  PRIMARY KEY (`id_film`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `film`
--

INSERT INTO `film` (`id_film`, `nom`, `description`, `affiche`, `realisateur`) VALUES
(1, 'Payday', 'Braquage , Action', 'https://imgs.search.brave.com/vKiSy3jyKK8rmPLSFewG3bs-YeVGpbke8vnSVv1CyMM/rs:fit:860:0:0/g:ce/aHR0cHM6Ly90NC5m/dGNkbi5uZXQvanBn/LzAwLzgyLzEzLzg5/LzM2MF9GXzgyMTM4/OTI3X1cxOGFNMEVm/ZXlkMjFsdmFYRlJY/eTQ5Vk14YVpRUnZt/LmpwZw', 'Overkill'),
(16, 'Interstellar', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi sed vehicula augue. Nam massa nibh, hendrerit a nibh et, volutpat scelerisque nisi. Fusce convallis ultrices massa, efficitur faucibus lorem hendrerit non. Phasellus ut feugiat mi. Praesent venenatis imperdiet purus quis luctus. Vivamus nec lectus quis enim luctus pellentesque in vitae nibh. Integer convallis viverra justo, ut molestie elit malesuada vitae. Etiam accumsan dui ac velit rutrum ultricies. Integer justo mauris, ultricies ut faucibus elementum, fermentum et augue. Nulla facilisi. In scelerisque suscipit ligula, eu lacinia elit hendrerit id. Nullam ut erat at nunc porttitor semper. Donec maximus, ex eu semper tincidunt, nunc quam finibus erat, sit amet pharetra est ligula vitae quam.\r\n\r\nCras rutrum ligula ut turpis efficitur maximus. Integer id elementum quam. Integer et est quis diam malesuada interdum at in velit. In tempus, ipsum sed facilisis tincidunt, metus lorem viverra erat, quis porta dui est sit amet erat. Quisque quis sollicitudin purus, non ultricies tortor. In auctor, risus sed sodales facilisis, sapien mauris luctus felis, nec cursus dolor est non justo. Maecenas rutrum nec justo ac efficitur. Fusce nec tempor ipsum.\r\n\r\nDonec egestas accumsan sapien ut scelerisque. Vivamus feugiat tellus neque, id porta diam eleifend ac. Donec semper iaculis libero et facilisis. Aliquam molestie arcu eu est dignissim laoreet nec ut erat. Sed quis elit quam. Vivamus hendrerit condimentum bibendum. Nam est nunc, viverra in orci in, condimentum luctus lectus. Nulla non elit tincidunt, aliquam est quis, auctor mauris. Duis auctor ipsum facilisis ex elementum, in molestie eros molestie. Duis vitae maximus felis, eu viverra justo. Maecenas tincidunt placerat dui, et mattis purus vehicula nec. Etiam tincidunt sagittis nisl, vel egestas nisi porta ac. Morbi scelerisque nunc quis pellentesque venenatis. Interdum et malesuada fames ac ante ipsum primis in faucibus. Nunc ornare erat vitae lorem tincidunt, id dapibus leo gravida. Quisque a odio arcu.\r\n\r\nNullam erat orci, placerat at semper et, auctor vitae urna. Donec tincidunt nisi eget dui consequat, sed faucibus dolor mattis. Sed et ligula magna. Integer nisi ante, aliquet vel feugiat eu, ultrices vitae purus. Morbi scelerisque imperdiet augue, nec pharetra mauris rutrum vitae. Nunc nec erat facilisis ligula pharetra luctus at sit amet quam. Curabitur vitae nisl velit. Quisque at ante accumsan, tincidunt felis nec, volutpat erat. Curabitur aliquet turpis nec odio suscipit pulvinar. Nulla quis rutrum urna. Sed maximus ut libero in rutrum. Mauris viverra consectetur semper. In hendrerit id leo vel iaculis. Nullam rutrum sed felis eu dictum. Nam tellus felis, volutpat in commodo vel, commodo quis dui.\r\n\r\nPellentesque eu nisi vestibulum, elementum mi porttitor, vulputate massa. Vivamus vitae commodo dui, eget interdum lacus. Sed ultrices tellus eget erat fringilla ornare. In viverra tincidunt facilisis. Donec congue leo augue, ut sollicitudin erat tristique nec. Duis fringilla quam efficitur sem sodales, vel sagittis libero ornare. Integer eu urna eget nisl faucibus pulvinar. Integer purus ipsum, ultrices vitae ante et, lacinia consectetur ipsum. Vivamus nec nisl id lectus rutrum dictum. Nunc scelerisque arcu in metus feugiat lobortis. Aenean id iaculis magna, non luctus mi. Quisque lacinia ac libero id tincidunt. Ut vulputate placerat tellus, ac blandit lacus elementum ac. Donec tempus tristique risus ac volutpat.', 'https://imgs.search.brave.com/JDCnp7-TzWZtfvVZp0YUd6zJnun9sj46JV-XHSVd3cY/rs:fit:500:0:0/g:ce/aHR0cHM6Ly9tLm1l/ZGlhLWFtYXpvbi5j/b20vaW1hZ2VzL00v/TVY1QlpqZGtPVFUz/TURrdE4ySXhPUzAw/T0dFeUxXRm1Namt0/WTJGaU1tWmtOV0l5/T0RaaVhrRXlYa0Zx/Y0dkZVFYVnlNVE14/T0RrMk9UVUAuanBn', 'Christopher Nolan');

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
  `ref_salle` int NOT NULL,
  PRIMARY KEY (`id_reservation`),
  KEY `fk_reservation_utilisateur` (`ref_utilisateur`),
  KEY `fk_reservation_salle` (`ref_salle`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

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
  PRIMARY KEY (`id_salle`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `salle_projection`
--

INSERT INTO `salle_projection` (`id_salle`, `nom_salle`, `nbr_place`, `dimension`) VALUES
(2, 'Salle n°1', 150, '2D'),
(3, 'Salle n°2', 220, '3D');

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
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`id_utilisateur`, `nom`, `prenom`, `age`, `email`, `mdp`, `tel`, `rue`, `ville`, `cp`, `administrateur`) VALUES
(3, 'FAYE', 'Victor', 18, 'fayedaour@outlook.fr', 'test', '+337859742', '40 Allee de la croix du sud', 'Le Blanc Mesnil', 93150, NULL);

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `reduction`
--
ALTER TABLE `reduction`
  ADD CONSTRAINT `fk_reduction_reservation` FOREIGN KEY (`ref_reservation`) REFERENCES `reservation` (`id_reservation`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Contraintes pour la table `reservation`
--
ALTER TABLE `reservation`
  ADD CONSTRAINT `fk_reservation_salle` FOREIGN KEY (`ref_salle`) REFERENCES `salle_projection` (`id_salle`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `fk_reservation_utilisateur` FOREIGN KEY (`ref_utilisateur`) REFERENCES `utilisateur` (`id_utilisateur`) ON DELETE RESTRICT ON UPDATE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
