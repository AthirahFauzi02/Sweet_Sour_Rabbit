-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 17, 2019 at 05:35 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `e-donation application`
--

-- --------------------------------------------------------

--
-- Table structure for table `applicantinformation`
--

CREATE TABLE `applicantinformation` (
  `Name` text NOT NULL,
  `ApplicantIDNo` varchar(20) NOT NULL,
  `Password` varchar(12) NOT NULL,
  `ICNo` int(12) NOT NULL,
  `PhoneNo` int(12) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `UserType` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `applicantinformation`
--

INSERT INTO `applicantinformation` (`Name`, `ApplicantIDNo`, `Password`, `ICNo`, `PhoneNo`, `Email`, `UserType`) VALUES
('Mawarwiduri', '22142', '123', 1234567, 97654478, 'mawarwiduri@gmail.com', 'Applicant'),
('Alis khairani', 'BHD1607-010', '12345', 7854125, 195585491, 'aliskhairani@gmail.com', 'Applicant'),
('Athirah binti Ahmad Fauzi', 'BHD1607-032', '123', 8554521, 1132450248, 'athirah@gmail.com', 'CoopMember'),
('Farah izzati', 'BHD1607-038', '123', 2147483647, 133190181, 'farah@gmail.com', 'Applicant');

-- --------------------------------------------------------

--
-- Table structure for table `donationinformation`
--

CREATE TABLE `donationinformation` (
  `ApplicantIDNo` varchar(20) NOT NULL,
  `ProgramID` int(10) NOT NULL,
  `ApprovalStatus` text NOT NULL,
  `AmountOfDonation` int(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `donationinformation`
--

INSERT INTO `donationinformation` (`ApplicantIDNo`, `ProgramID`, `ApprovalStatus`, `AmountOfDonation`) VALUES
('22142', 15420, 'Approved', 1000),
('BHD1607-032', 14001, 'Pending', 1800),
('BHD1607-032', 30833, 'Pending', 1800),
('BHD1607-032', 31291, 'Pending', 1500);

-- --------------------------------------------------------

--
-- Table structure for table `programinformation`
--

CREATE TABLE `programinformation` (
  `ProgramID` int(10) NOT NULL,
  `ProgramTitle` text NOT NULL,
  `AmountOfStudent` int(3) NOT NULL,
  `DateOfProgram` date NOT NULL,
  `Organization` text NOT NULL,
  `letter` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `programinformation`
--

INSERT INTO `programinformation` (`ProgramID`, `ProgramTitle`, `AmountOfStudent`, `DateOfProgram`, `Organization`, `letter`) VALUES
(14001, 'lawatan sambil belajar', 60, '2019-09-19', 'AgroBusinessDept', 0x5441534b2031202832292e706466),
(15420, 'csr', 30, '2019-09-18', 'ScienceQuantitative', 0x446f63756d656e74332e706466),
(30833, 'Sambutan kemerdekaan', 1000, '2019-09-12', 'MPP', 0x446f63756d656e74332e706466),
(31291, 'Wataniah', 100, '2019-08-31', 'Wataniah', 0x7064702e646f6378);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `applicantinformation`
--
ALTER TABLE `applicantinformation`
  ADD PRIMARY KEY (`ApplicantIDNo`);

--
-- Indexes for table `donationinformation`
--
ALTER TABLE `donationinformation`
  ADD UNIQUE KEY `ApplicantIDNo` (`ApplicantIDNo`,`ProgramID`),
  ADD KEY `donationinformation_ibfk_1` (`ProgramID`);

--
-- Indexes for table `programinformation`
--
ALTER TABLE `programinformation`
  ADD PRIMARY KEY (`ProgramID`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `donationinformation`
--
ALTER TABLE `donationinformation`
  ADD CONSTRAINT `donationinformation_ibfk_1` FOREIGN KEY (`ProgramID`) REFERENCES `programinformation` (`ProgramID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `donationinformation_ibfk_2` FOREIGN KEY (`ApplicantIDNo`) REFERENCES `applicantinformation` (`ApplicantIDNo`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
