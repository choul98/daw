-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  jeu. 03 jan. 2019 à 12:45
-- Version du serveur :  10.1.31-MariaDB
-- Version de PHP :  7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `siteweb`
--

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

CREATE TABLE `admin` (
  `numAdmin` int(11) NOT NULL,
  `nomAdmin` varchar(255) NOT NULL,
  `prenomAdmin` varchar(255) NOT NULL,
  `passAdmin` varchar(255) NOT NULL,
  `emai` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `admin`
--

INSERT INTO `admin` (`numAdmin`, `nomAdmin`, `prenomAdmin`, `passAdmin`, `emai`) VALUES
(1, 'chouaib', 'cheriet', 'chouaib1998', 'choul98@gmail.com'),
(2, 'jh', ';,n', ',n', 'ch98@gmail.com');

-- --------------------------------------------------------

--
-- Structure de la table `doctorant`
--

CREATE TABLE `doctorant` (
  `numDoc` int(11) NOT NULL,
  `nomDoc` varchar(255) NOT NULL,
  `prenomDoc` varchar(255) NOT NULL,
  `class` int(11) NOT NULL,
  `spec` varchar(10) NOT NULL,
  `lab` varchar(10) NOT NULL,
  `dep` varchar(10) NOT NULL,
  `passDoc` varchar(255) NOT NULL,
  `emailDoc` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `doctorant`
--

INSERT INTO `doctorant` (`numDoc`, `nomDoc`, `prenomDoc`, `class`, `spec`, `lab`, `dep`, `passDoc`, `emailDoc`) VALUES
(2, 'chocho', 'chereit', 12, 'stic', 'misc', 'ifa', 'x ', 'chou@gmail.com'),
(4, 'test', 'test', 2, 'stic', 'misc', 'ifa', 'hhhh', 'test@gmail.com');

-- --------------------------------------------------------

--
-- Structure de la table `enseignant`
--

CREATE TABLE `enseignant` (
  `numEns` int(11) NOT NULL,
  `nomEns` varchar(255) NOT NULL,
  `prenomEns` varchar(255) NOT NULL,
  `grade` varchar(10) NOT NULL,
  `spec` varchar(10) NOT NULL,
  `lab` varchar(10) NOT NULL,
  `dep` varchar(10) NOT NULL,
  `passEns` varchar(255) NOT NULL,
  `emailEns` varchar(50) NOT NULL,
  `nbrDoc` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `enseignant`
--

INSERT INTO `enseignant` (`numEns`, `nomEns`, `prenomEns`, `grade`, `spec`, `lab`, `dep`, `passEns`, `emailEns`, `nbrDoc`) VALUES
(3, 'Said', 'botabna', '', '', '', '', '', '', 0);

-- --------------------------------------------------------

--
-- Structure de la table `sujet`
--

CREATE TABLE `sujet` (
  `id_s` int(11) NOT NULL,
  `type` varchar(10) NOT NULL,
  `motcle` varchar(10) NOT NULL,
  `id_e` int(11) NOT NULL,
  `id_d` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`numAdmin`);

--
-- Index pour la table `doctorant`
--
ALTER TABLE `doctorant`
  ADD PRIMARY KEY (`numDoc`);

--
-- Index pour la table `enseignant`
--
ALTER TABLE `enseignant`
  ADD PRIMARY KEY (`numEns`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `admin`
--
ALTER TABLE `admin`
  MODIFY `numAdmin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `doctorant`
--
ALTER TABLE `doctorant`
  MODIFY `numDoc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `enseignant`
--
ALTER TABLE `enseignant`
  MODIFY `numEns` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
