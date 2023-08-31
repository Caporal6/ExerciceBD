-- phpMyAdmin SQL Dump
-- version 4.5.4.1
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Jeu 31 Août 2023 à 21:18
-- Version du serveur :  5.7.11
-- Version de PHP :  7.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `jeux`
--

-- --------------------------------------------------------

--
-- Structure de la table `steam`
--

CREATE TABLE `steam` (
  `id` int(11) NOT NULL,
  `nom` varchar(25) NOT NULL,
  `note` varchar(500) NOT NULL,
  `img` text NOT NULL,
  `commentaire` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='yup';

--
-- Contenu de la table `steam`
--

INSERT INTO `steam` (`id`, `nom`, `note`, `img`, `commentaire`) VALUES
(1, 'yuo', '30', 'rtyrytrthfgh', 'fghfghfhsfgh'),
(11, 'Xavier', '80', 'https://steamuserimages-a.akamaihd.net/ugc/261588921316337154/81F03EFADEB9E8CA0404C8A0425C93174EFF0647/', 'Trop cool ce jeux'),
(13, 'poptropica', '200', 'https://th.bing.com/th/id/OIP.L0uLz2nAv4SWJjsW0MP1BQHaEK?pid=ImgDet&rs=1', 'jeu enfance lol');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `steam`
--
ALTER TABLE `steam`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `steam`
--
ALTER TABLE `steam`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
