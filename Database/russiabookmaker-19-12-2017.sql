-- phpMyAdmin SQL Dump
-- version 4.6.6deb1+deb.cihar.com~xenial.2
-- https://www.phpmyadmin.net/
--
-- Client :  localhost
-- Généré le :  Mar 19 Décembre 2017 à 12:13
-- Version du serveur :  5.7.20-0ubuntu0.16.04.1
-- Version de PHP :  7.0.22-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `russiabookmaker`
--

-- --------------------------------------------------------

--
-- Structure de la table `russia_bet`
--

CREATE TABLE `russia_bet` (
  `id` int(11) NOT NULL,
  `username` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `match_id` int(11) NOT NULL,
  `win` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `russia_bet`
--

INSERT INTO `russia_bet` (`id`, `username`, `match_id`, `win`) VALUES
(1, 'Martine', 1, 1);

-- --------------------------------------------------------

--
-- Structure de la table `russia_namematch`
--

CREATE TABLE `russia_namematch` (
  `id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `id_match` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `russia_namematch`
--

INSERT INTO `russia_namematch` (`id`, `name`, `id_match`) VALUES
(1, '8è 1', 49),
(2, '8è 2', 50),
(3, '8è 3', 51),
(4, '8è 4', 52),
(5, '8è 5', 53),
(6, '8è 6', 54),
(7, '8è 7', 55),
(8, '8è 8', 56),
(9, 'quart 1', 57),
(10, 'quart 2', 58),
(11, 'quart 3', 59),
(12, 'quart 4', 60),
(13, 'demie 1', 61),
(14, 'demie 2', 62),
(15, 'Petite finale', 63),
(16, 'Finale', 64);

-- --------------------------------------------------------

--
-- Structure de la table `russia_previouswinners`
--

CREATE TABLE `russia_previouswinners` (
  `id` int(11) NOT NULL,
  `year` int(11) NOT NULL,
  `winner` varchar(500) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `russia_schedule`
--

CREATE TABLE `russia_schedule` (
  `id` int(11) NOT NULL,
  `team1` int(11) NOT NULL,
  `team2` int(11) NOT NULL,
  `group` varchar(1) COLLATE utf8_unicode_ci DEFAULT NULL,
  `team1result` int(11) DEFAULT NULL,
  `team2result` int(11) DEFAULT NULL,
  `overtime` tinyint(11) NOT NULL DEFAULT '0',
  `team1penalty` int(11) DEFAULT NULL,
  `team2penalty` int(11) DEFAULT NULL,
  `available` tinyint(1) NOT NULL DEFAULT '1',
  `date` datetime NOT NULL,
  `tempname1` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tempname2` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `russia_schedule`
--

INSERT INTO `russia_schedule` (`id`, `team1`, `team2`, `group`, `team1result`, `team2result`, `overtime`, `team1penalty`, `team2penalty`, `available`, `date`, `tempname1`, `tempname2`) VALUES
(1, 1, 2, 'A', NULL, NULL, 0, NULL, NULL, 1, '2018-06-14 17:00:00', NULL, NULL),
(2, 3, 4, 'A', NULL, NULL, 0, NULL, NULL, 1, '2018-06-15 14:00:00', NULL, NULL),
(3, 5, 6, 'B', NULL, NULL, 0, NULL, NULL, 1, '2018-06-15 20:00:00', NULL, NULL),
(4, 7, 8, 'B', NULL, NULL, 0, NULL, NULL, 1, '2018-06-15 17:00:00', NULL, NULL),
(5, 9, 10, 'C', NULL, NULL, 0, NULL, NULL, 1, '2018-06-16 12:00:00', NULL, NULL),
(6, 11, 12, 'C', NULL, NULL, 0, NULL, NULL, 1, '2018-06-16 18:00:00', NULL, NULL),
(7, 13, 14, 'D', NULL, NULL, 0, NULL, NULL, 1, '2018-06-16 15:00:00', NULL, NULL),
(8, 15, 16, 'D', NULL, NULL, 0, NULL, NULL, 1, '2018-06-16 21:00:00', NULL, NULL),
(9, 17, 18, 'E', NULL, NULL, 0, NULL, NULL, 1, '2018-06-17 20:00:00', NULL, NULL),
(10, 19, 20, 'E', NULL, NULL, 0, NULL, NULL, 1, '2018-06-17 14:00:00', NULL, NULL),
(11, 21, 22, 'F', NULL, NULL, 0, NULL, NULL, 1, '2018-06-17 17:00:00', NULL, NULL),
(12, 23, 24, 'F', NULL, NULL, 0, NULL, NULL, 1, '2018-06-18 14:00:00', NULL, NULL),
(13, 25, 26, 'G', NULL, NULL, 0, NULL, NULL, 1, '2018-06-18 17:00:00', NULL, NULL),
(14, 27, 28, 'G', NULL, NULL, 0, NULL, NULL, 1, '2018-06-18 20:00:00', NULL, NULL),
(15, 29, 30, 'H', NULL, NULL, 0, NULL, NULL, 1, '2018-06-19 17:00:00', NULL, NULL),
(16, 31, 32, 'H', NULL, NULL, 0, NULL, NULL, 1, '2018-06-19 14:00:00', NULL, NULL),
(17, 1, 3, 'A', NULL, NULL, 0, NULL, NULL, 1, '2018-06-19 20:00:00', NULL, NULL),
(18, 8, 6, 'B', NULL, NULL, 0, NULL, NULL, 1, '2018-06-20 20:00:00', NULL, NULL),
(19, 5, 7, 'B', NULL, NULL, 0, NULL, NULL, 1, '2018-06-20 14:00:00', NULL, NULL),
(20, 4, 2, 'A', NULL, NULL, 0, NULL, NULL, 1, '2018-06-20 17:00:00', NULL, NULL),
(21, 9, 11, 'C', NULL, NULL, 0, NULL, NULL, 1, '2018-06-21 17:00:00', NULL, NULL),
(22, 12, 10, 'C', NULL, NULL, 0, NULL, NULL, 1, '2018-06-21 14:00:00', NULL, NULL),
(23, 13, 15, 'D', NULL, NULL, 0, NULL, NULL, 1, '2018-06-21 20:00:00', NULL, NULL),
(24, 16, 14, 'D', NULL, NULL, 0, NULL, NULL, 1, '2018-06-22 17:00:00', NULL, NULL),
(25, 17, 19, 'E', NULL, NULL, 0, NULL, NULL, 1, '2018-06-22 14:00:00', NULL, NULL),
(26, 20, 18, 'E', NULL, NULL, 0, NULL, NULL, 1, '2018-06-22 20:00:00', NULL, NULL),
(27, 21, 23, 'F', NULL, NULL, 0, NULL, NULL, 1, '2018-06-23 20:00:00', NULL, NULL),
(28, 24, 22, 'F', NULL, NULL, 0, NULL, NULL, 1, '2018-06-23 17:00:00', NULL, NULL),
(29, 25, 27, 'G', NULL, NULL, 0, NULL, NULL, 1, '2018-06-23 14:00:00', NULL, NULL),
(30, 28, 26, 'G', NULL, NULL, 0, NULL, NULL, 1, '2018-06-24 14:00:00', NULL, NULL),
(31, 29, 31, 'H', NULL, NULL, 0, NULL, NULL, 1, '2018-06-24 20:00:00', NULL, NULL),
(32, 32, 30, 'H', NULL, NULL, 0, NULL, NULL, 1, '2018-06-24 17:00:00', NULL, NULL),
(33, 4, 1, 'A', NULL, NULL, 0, NULL, NULL, 1, '2018-06-25 16:00:00', NULL, NULL),
(34, 2, 3, 'A', NULL, NULL, 0, NULL, NULL, 1, '2018-06-25 16:00:00', NULL, NULL),
(35, 8, 5, 'B', NULL, NULL, 0, NULL, NULL, 1, '2018-06-25 20:00:00', NULL, NULL),
(36, 6, 7, 'B', NULL, NULL, 0, NULL, NULL, 1, '2018-06-25 20:00:00', NULL, NULL),
(37, 12, 9, 'C', NULL, NULL, 0, NULL, NULL, 1, '2018-06-26 16:00:00', NULL, NULL),
(38, 10, 11, 'C', NULL, NULL, 0, NULL, NULL, 1, '2018-06-26 16:00:00', NULL, NULL),
(39, 16, 13, 'D', NULL, NULL, 0, NULL, NULL, 1, '2018-06-26 20:00:00', NULL, NULL),
(40, 14, 15, 'D', NULL, NULL, 0, NULL, NULL, 1, '2018-06-26 20:00:00', NULL, NULL),
(41, 20, 17, 'E', NULL, NULL, 0, NULL, NULL, 1, '2018-06-27 20:00:00', NULL, NULL),
(42, 18, 19, 'E', NULL, NULL, 0, NULL, NULL, 1, '2018-06-27 20:00:00', NULL, NULL),
(43, 24, 21, 'F', NULL, NULL, 0, NULL, NULL, 1, '2018-06-27 16:00:00', NULL, NULL),
(44, 22, 23, 'F', NULL, NULL, 0, NULL, NULL, 1, '2018-06-27 14:00:00', NULL, NULL),
(45, 28, 25, 'G', NULL, NULL, 0, NULL, NULL, 1, '2018-06-28 20:00:00', NULL, NULL),
(46, 26, 27, 'G', NULL, NULL, 0, NULL, NULL, 1, '2018-06-28 19:00:00', NULL, NULL),
(47, 32, 29, 'H', NULL, NULL, 0, NULL, NULL, 1, '2018-06-28 16:00:00', NULL, NULL),
(48, 30, 31, 'H', NULL, NULL, 0, NULL, NULL, 1, '2018-06-28 16:00:00', NULL, NULL),
(49, 0, 0, NULL, NULL, NULL, 0, NULL, NULL, 0, '2018-06-30 20:00:00', '1er Gr A', '2e Gr B'),
(50, 0, 0, NULL, NULL, NULL, 0, NULL, NULL, 0, '2018-06-30 16:00:00', '1er Gr C', '2e Gr D'),
(51, 0, 0, NULL, NULL, NULL, 0, NULL, NULL, 0, '2018-07-01 16:00:00', '1er Gr B', '2e Gr A'),
(52, 0, 0, NULL, NULL, NULL, 0, NULL, NULL, 0, '2018-07-01 20:00:00', '1er Gr D', '2e Gr C'),
(53, 0, 0, NULL, NULL, NULL, 0, NULL, NULL, 0, '2018-07-02 16:00:00', '1er Gr E', '2e Gr F'),
(54, 0, 0, NULL, NULL, NULL, 0, NULL, NULL, 0, '2018-07-02 20:00:00', '1er Gr G', '2e Gr H'),
(55, 0, 0, NULL, NULL, NULL, 0, NULL, NULL, 0, '2018-07-03 16:00:00', '1er Gr F', '2e Gr E'),
(56, 0, 0, NULL, NULL, NULL, 0, NULL, NULL, 0, '2018-07-03 20:00:00', '1er Gr H', '2e Gr G'),
(57, 0, 0, NULL, NULL, NULL, 0, NULL, NULL, 0, '2018-07-06 16:00:00', 'W49', 'W50'),
(58, 0, 0, NULL, NULL, NULL, 0, NULL, NULL, 0, '2018-07-06 20:00:00', 'W53', 'W54'),
(59, 0, 0, NULL, NULL, NULL, 0, NULL, NULL, 0, '2018-07-07 20:00:00', 'W51', 'W52'),
(60, 0, 0, NULL, NULL, NULL, 0, NULL, NULL, 0, '2018-07-07 16:00:00', 'W55', 'W56'),
(61, 0, 0, NULL, NULL, NULL, 0, NULL, NULL, 0, '2018-07-10 20:00:00', 'W57', 'W58'),
(62, 0, 0, NULL, NULL, NULL, 0, NULL, NULL, 0, '2018-07-11 20:00:00', 'W59', 'W60'),
(63, 0, 0, NULL, NULL, NULL, 0, NULL, NULL, 0, '2018-07-14 16:00:00', 'L61', 'L62'),
(64, 0, 0, NULL, NULL, NULL, 0, NULL, NULL, 0, '2018-07-15 17:00:00', 'W61', 'W62');

-- --------------------------------------------------------

--
-- Structure de la table `russia_team`
--

CREATE TABLE `russia_team` (
  `id` int(11) NOT NULL,
  `name` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `smallname` varchar(3) COLLATE utf8_unicode_ci NOT NULL,
  `flag` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `starplayer` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `group` varchar(1) COLLATE utf8_unicode_ci NOT NULL,
  `previous` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `coach` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `points` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `russia_team`
--

INSERT INTO `russia_team` (`id`, `name`, `smallname`, `flag`, `starplayer`, `group`, `previous`, `coach`, `points`) VALUES
(1, 'Russie', 'RUS', 'images/flags/RUS.png', 'joueur star', 'A', 'lorem', 'coach', 0),
(2, 'Arabie Saoudite', 'ASA', 'images/flags/ASA.png', 'joueur star', 'A', 'lorem', 'coach', 0),
(3, 'Egypte', 'EGY', 'images/flags/EGY.png', 'joueur star', 'A', 'lorem', 'coach', 0),
(4, 'Uruguay', 'URU', 'images/flags/URU.png', 'joueur star', 'A', 'lorem', 'coach', 0),
(5, 'Portugal', 'POR', 'images/flags/POR.png', 'joueur star', 'B', 'lorem', 'coach', 0),
(6, 'Espagne', 'ESP', 'images/flags/ESP.png', 'joueur star', 'B', 'lorem', 'coach', 0),
(7, 'Maroc', 'MAR', 'images/flags/MAR.png', 'joueur star', 'B', 'lorem', 'coach', 0),
(8, 'Iran', 'IRA', 'images/flags/IRA.png', 'joueur star', 'B', 'lorem', 'coach', 0),
(9, 'France', 'FRA', 'images/flags/FRA.png', 'joueur star', 'C', 'lorem', 'coach', 0),
(10, 'Australie', 'AUS', 'images/flags/AUS.png', 'joueur star', 'C', 'lorem', 'coach', 0),
(11, 'Pérou', 'PER', 'images/flags/PER.png', 'joueur star', 'C', 'lorem', 'coach', 0),
(12, 'Danemark', 'DAN', 'images/flags/DAN.png', 'joueur star', 'C', 'lorem', 'coach', 0),
(13, 'Argentine', 'ARG', 'images/flags/ARG.png', 'joueur star', 'D', 'lorem', 'coach', 0),
(14, 'Islande', 'ISL', 'images/flags/ISL.png', 'joueur star', 'D', 'lorem', 'coach', 0),
(15, 'Croatie', 'CRO', 'images/flags/CRO.png', 'joueur star', 'D', 'lorem', 'coach', 0),
(16, 'Nigéria', 'NIG', 'images/flags/NIG.png', 'joueur star', 'D', 'lorem', 'coach', 0),
(17, 'Brésil', 'BRE', 'images/flags/BRE.png', 'joueur star', 'E', 'lorem', 'coach', 0),
(18, 'Suisse', 'SUI', 'images/flags/SUI.png', 'joueur star', 'E', 'lorem', 'coach', 0),
(19, 'Costa Rica', 'CRC', 'images/flags/CRC.png', 'joueur star', 'E', 'lorem', 'coach', 0),
(20, 'Serbie', 'SRB', 'images/flags/SRB.png', 'joueur star', 'E', 'lorem', 'coach', 0),
(21, 'Allemagne', 'ALL', 'images/flags/ALL.png', 'joueur star', 'F', 'lorem', 'coach', 0),
(22, 'Mexique', 'MEX', 'images/flags/MEX.png', 'joueur star', 'F', 'lorem', 'coach', 0),
(23, 'Suède', 'SUE', 'images/flags/SUE.png', 'joueur star', 'F', 'lorem', 'coach', 0),
(24, 'Corée', 'COR', 'images/flags/COR.png', 'joueur star', 'F', 'lorem', 'coach', 0),
(25, 'Belgique', 'BEL', 'images/flags/BEL.png', 'joueur star', 'G', 'lorem', 'coach', 0),
(26, 'Panama', 'PAN', 'images/flags/PAN.png', 'joueur star', 'G', 'lorem', 'coach', 0),
(27, 'Tunisie', 'TUN', 'images/flags/TUN.png', 'joueur star', 'G', 'lorem', 'coach', 0),
(28, 'Angleterre', 'ANG', 'images/flags/ANG.png', 'joueur star', 'G', 'lorem', 'coach', 0),
(29, 'Pologne', 'POL', 'images/flags/POL.png', 'joueur star', 'H', 'lorem', 'coach', 0),
(30, 'Sénégal', 'SEN', 'images/flags/SEN.png', 'joueur star', 'H', 'lorem', 'coach', 0),
(31, 'Colombie', 'COL', 'images/flags/COL.png', 'joueur star', 'H', 'lorem', 'coach', 0),
(32, 'Japon', 'JAP', 'images/flags/JAP.png', 'joueur star', 'H', 'lorem', 'coach', 0);

-- --------------------------------------------------------

--
-- Structure de la table `russia_top`
--

CREATE TABLE `russia_top` (
  `id` int(11) NOT NULL,
  `username` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `team1` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `team2` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `team3` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `team4` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `russia_user`
--

CREATE TABLE `russia_user` (
  `username` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `isadmin` tinyint(1) NOT NULL,
  `points` int(11) NOT NULL DEFAULT '0',
  `team` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `russia_user`
--

INSERT INTO `russia_user` (`username`, `password`, `isadmin`, `points`, `team`) VALUES
('Grissouris', '21752033819b7b98bb69d8f582585655', 1, 0, 1),
('Martine', '2be067b0de372807dc5e88c44897279e', 0, 0, 1);

--
-- Index pour les tables exportées
--

--
-- Index pour la table `russia_bet`
--
ALTER TABLE `russia_bet`
  ADD PRIMARY KEY (`id`),
  ADD KEY `match_id` (`match_id`),
  ADD KEY `win` (`win`);

--
-- Index pour la table `russia_namematch`
--
ALTER TABLE `russia_namematch`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `russia_previouswinners`
--
ALTER TABLE `russia_previouswinners`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `russia_schedule`
--
ALTER TABLE `russia_schedule`
  ADD PRIMARY KEY (`id`),
  ADD KEY `team1` (`team1`),
  ADD KEY `team2` (`team2`);

--
-- Index pour la table `russia_team`
--
ALTER TABLE `russia_team`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `russia_top`
--
ALTER TABLE `russia_top`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `russia_user`
--
ALTER TABLE `russia_user`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `russia_bet`
--
ALTER TABLE `russia_bet`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT pour la table `russia_namematch`
--
ALTER TABLE `russia_namematch`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT pour la table `russia_previouswinners`
--
ALTER TABLE `russia_previouswinners`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `russia_schedule`
--
ALTER TABLE `russia_schedule`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;
--
-- AUTO_INCREMENT pour la table `russia_top`
--
ALTER TABLE `russia_top`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
