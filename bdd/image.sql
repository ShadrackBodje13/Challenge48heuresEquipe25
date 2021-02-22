-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : lun. 22 fév. 2021 à 11:20
-- Version du serveur :  10.4.11-MariaDB
-- Version de PHP : 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `challenge48equipe25`
--

-- --------------------------------------------------------

--
-- Structure de la table `image`
--

CREATE TABLE `image` (
  `id_image` int(5) NOT NULL,
  `nom_image` varchar(300) DEFAULT NULL,
  `type_image` varchar(300) DEFAULT NULL,
  `photo_avec_produit` varchar(300) DEFAULT NULL,
  `photo_avec_humain` varchar(300) DEFAULT NULL,
  `photo_instiutionnelle` varchar(300) DEFAULT NULL,
  `format` varchar(300) DEFAULT NULL,
  `credit_photo` varchar(300) DEFAULT NULL,
  `droit_utilisation_limitee` varchar(300) DEFAULT NULL,
  `copyright` varchar(300) DEFAULT NULL,
  `date_fin_droit` date DEFAULT NULL,
  `tags` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `image`
--
ALTER TABLE `image`
  ADD PRIMARY KEY (`id_image`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
