-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  sam. 05 jan. 2019 à 11:22
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
-- Structure de la table `doctorant`
--

CREATE TABLE `doctorant` (
  `ID` varchar(255) NOT NULL,
  `CLASS` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `doctorant`
--

INSERT INTO `doctorant` (`ID`, `CLASS`) VALUES
('doc_2033345155c2e7b5681fed', 3);

-- --------------------------------------------------------

--
-- Structure de la table `enseignant`
--

CREATE TABLE `enseignant` (
  `ID` varchar(255) NOT NULL,
  `GRADE` enum('MAB','MAA','MCB','MCA','PROFESSEUR') DEFAULT NULL,
  `NBR_DOC` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `enseignant`
--

INSERT INTO `enseignant` (`ID`, `GRADE`, `NBR_DOC`) VALUES
('ens', 'MCA', 5);

-- --------------------------------------------------------

--
-- Structure de la table `member`
--

CREATE TABLE `member` (
  `ID` varchar(255) NOT NULL,
  `SPEC` enum('STIC','RSD','GLAA','SIA') DEFAULT NULL,
  `LAB` enum('MISC','LIRE') DEFAULT NULL,
  `DEP` enum('IFA','TLSI') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `member`
--

INSERT INTO `member` (`ID`, `SPEC`, `LAB`, `DEP`) VALUES
('doc_2033345155c2e7b5681fed', 'RSD', 'MISC', 'IFA'),
('ens', 'STIC', 'MISC', 'IFA');

-- --------------------------------------------------------

--
-- Structure de la table `sujet`
--

CREATE TABLE `sujet` (
  `ID` int(11) NOT NULL,
  `DESCRIPTION` text,
  `MOTCLE` varchar(255) DEFAULT NULL,
  `ID_E` varchar(255) DEFAULT NULL,
  `ID_D` varchar(255) DEFAULT NULL,
  `STATUS` enum('ACCEPTED','PENDING') DEFAULT 'PENDING',
  `titre` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `sujet`
--

INSERT INTO `sujet` (`ID`, `DESCRIPTION`, `MOTCLE`, `ID_E`, `ID_D`, `STATUS`, `titre`) VALUES
(8, 'sujet 1', 'motcle', 'ens', NULL, 'ACCEPTED', ''),
(10, 'des de tittre 1', 'teste de titre 1', '', NULL, 'PENDING', 'titre 1'),
(11, 'des de tittre 1', 'teste de titre 1', 'ens', NULL, 'PENDING', 'titre 1');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `ID` varchar(255) NOT NULL,
  `NOM` varchar(255) DEFAULT NULL,
  `PRENOM` varchar(255) DEFAULT NULL,
  `EMAIL` varchar(255) DEFAULT NULL,
  `PASSWORD` varchar(255) DEFAULT NULL,
  `ROLE` enum('A','S','E','D') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`ID`, `NOM`, `PRENOM`, `EMAIL`, `PASSWORD`, `ROLE`) VALUES
('admin', 'admin', 'admin', 'admin@admin.admin', 'admin', 'A'),
('doc_2033345155c2e7b5681fed', 'fake name', 'fake lastname', 'fakemail@domain.com', 'fake', 'D'),
('ens', 'chouaib', 'cheriet', 'chou98@gmail.com', 'chou98', 'E');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `doctorant`
--
ALTER TABLE `doctorant`
  ADD PRIMARY KEY (`ID`);

--
-- Index pour la table `enseignant`
--
ALTER TABLE `enseignant`
  ADD PRIMARY KEY (`ID`);

--
-- Index pour la table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`ID`);

--
-- Index pour la table `sujet`
--
ALTER TABLE `sujet`
  ADD PRIMARY KEY (`ID`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `sujet`
--
ALTER TABLE `sujet`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `doctorant`
--
ALTER TABLE `doctorant`
  ADD CONSTRAINT `doctorant_ibfk_1` FOREIGN KEY (`ID`) REFERENCES `member` (`ID`);

--
-- Contraintes pour la table `enseignant`
--
ALTER TABLE `enseignant`
  ADD CONSTRAINT `enseignant_ibfk_1` FOREIGN KEY (`ID`) REFERENCES `member` (`ID`);

--
-- Contraintes pour la table `member`
--
ALTER TABLE `member`
  ADD CONSTRAINT `member_ibfk_1` FOREIGN KEY (`ID`) REFERENCES `user` (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
