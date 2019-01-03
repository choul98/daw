-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 03, 2019 at 10:57 PM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `siteweb`
--

-- --------------------------------------------------------

--
-- Table structure for table `doctorant`
--

CREATE TABLE `doctorant` (
  `ID` varchar(255) NOT NULL,
  `CLASS` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctorant`
--

INSERT INTO `doctorant` (`ID`, `CLASS`) VALUES
('doc_2033345155c2e7b5681fed', 3);

-- --------------------------------------------------------

--
-- Table structure for table `enseignant`
--

CREATE TABLE `enseignant` (
  `ID` varchar(255) NOT NULL,
  `GRADE` int(11) DEFAULT NULL,
  `NBR_DOC` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `ID` varchar(255) NOT NULL,
  `SPEC` enum('STIC','RSD','GLAA','SIA') DEFAULT NULL,
  `LAB` enum('MISC','LIRE') DEFAULT NULL,
  `DEP` enum('IFA','TLSI') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`ID`, `SPEC`, `LAB`, `DEP`) VALUES
('doc_2033345155c2e7b5681fed', 'RSD', 'MISC', 'IFA');

-- --------------------------------------------------------

--
-- Table structure for table `user`
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
-- Dumping data for table `user`
--

INSERT INTO `user` (`ID`, `NOM`, `PRENOM`, `EMAIL`, `PASSWORD`, `ROLE`) VALUES
('admin', 'admin', 'admin', 'admin@admin.admin', 'admin', 'A'),
('doc_2033345155c2e7b5681fed', 'fake name', 'fake lastname', 'fakemail@domain.com', 'fake', 'D');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `doctorant`
--
ALTER TABLE `doctorant`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `enseignant`
--
ALTER TABLE `enseignant`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`ID`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `doctorant`
--
ALTER TABLE `doctorant`
  ADD CONSTRAINT `doctorant_ibfk_1` FOREIGN KEY (`ID`) REFERENCES `member` (`ID`);

--
-- Constraints for table `enseignant`
--
ALTER TABLE `enseignant`
  ADD CONSTRAINT `enseignant_ibfk_1` FOREIGN KEY (`ID`) REFERENCES `member` (`ID`);

--
-- Constraints for table `member`
--
ALTER TABLE `member`
  ADD CONSTRAINT `member_ibfk_1` FOREIGN KEY (`ID`) REFERENCES `user` (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
