-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 05, 2020 at 10:55 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.0.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `classattzdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `classattz`
--

CREATE TABLE `classattz` (
  `idz` bigint(20) NOT NULL,
  `studidz` varchar(233) NOT NULL,
  `studz` varchar(233) NOT NULL,
  `catz` varchar(233) NOT NULL,
  `levelz` varchar(233) NOT NULL,
  `periodz` varchar(233) NOT NULL,
  `coursez` varchar(233) NOT NULL,
  `dateofatz` varchar(233) NOT NULL,
  `statz` varchar(233) NOT NULL,
  `biometric` varchar(555) NOT NULL,
  `qrcode` varchar(555) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `classattz`
--

INSERT INTO `classattz` (`idz`, `studidz`, `studz`, `catz`, `levelz`, `periodz`, `coursez`, `dateofatz`, `statz`, `biometric`, `qrcode`) VALUES
(1, '1004567', 'kojo kwaku', 'color party', '100', 'First Semester', 'intoduction to compiller', '06/02/2020', 'Present', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `coursez`
--

CREATE TABLE `coursez` (
  `idz` mediumint(9) NOT NULL,
  `coursez` varchar(233) NOT NULL,
  `catz` varchar(233) NOT NULL,
  `studlev` varchar(233) NOT NULL,
  `studper` varchar(233) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `coursez`
--

INSERT INTO `coursez` (`idz`, `coursez`, `catz`, `studlev`, `studper`) VALUES
(1, 'intoduction to compiller', 'color party', '100', 'First Semester');

-- --------------------------------------------------------

--
-- Table structure for table `progz`
--

CREATE TABLE `progz` (
  `idz` mediumint(9) NOT NULL,
  `catz` varchar(233) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `progz`
--

INSERT INTO `progz` (`idz`, `catz`) VALUES
(3, 'color party');

-- --------------------------------------------------------

--
-- Table structure for table `studz`
--

CREATE TABLE `studz` (
  `idz` mediumint(9) NOT NULL,
  `studidz` varchar(233) NOT NULL,
  `studz` varchar(233) NOT NULL,
  `phonz` varchar(233) NOT NULL,
  `catz` varchar(233) NOT NULL,
  `ygrup` varchar(233) NOT NULL,
  `studlev` varchar(233) NOT NULL,
  `studper` varchar(233) NOT NULL,
  `emailz` varchar(255) NOT NULL,
  `statz` varchar(55) NOT NULL DEFAULT 'Student',
  `pwdz` varchar(233) NOT NULL DEFAULT '1234'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `studz`
--

INSERT INTO `studz` (`idz`, `studidz`, `studz`, `phonz`, `catz`, `ygrup`, `studlev`, `studper`, `emailz`, `statz`, `pwdz`) VALUES
(1, '1003691', 'Benjamin Sam', '0543681334', 'color party', '2018', '300', 'First Semester', '', 'Student', '1234'),
(2, '1004567', 'kojo kwaku', '054681235', 'color party', '2018-2019', '100', 'First Semester', '', 'Student', '1234'),
(3, '1086756', 'kyler', '054689452', 'color party', '2018-2019', '100', 'First Semester', 'px@stu.csuc.edu.gh', 'Student', '1234'),
(4, '44964', 'gdgdh', '445454154', 'color party', '2020', '100', 'First Semester', 'puhb@gmail.com', 'Student', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `tableteachers`
--

CREATE TABLE `tableteachers` (
  `idz` mediumint(9) NOT NULL,
  `stafidz` varchar(233) NOT NULL,
  `nomz` varchar(233) NOT NULL,
  `contactz` varchar(233) NOT NULL,
  `statz` varchar(233) NOT NULL,
  `emailz` varchar(233) NOT NULL,
  `pwdz` varchar(233) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tableteachers`
--

INSERT INTO `tableteachers` (`idz`, `stafidz`, `nomz`, `contactz`, `statz`, `emailz`, `pwdz`) VALUES
(1, 'Admin1', 'Administrator', '0543681334', 'Administrator', 'admin@admin.com', 'admin'),
(3, '500000000', 'Okyere Benjamin', '0543681334', 'Lecturer', 'pkumah@gmail.com', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `teachcourse`
--

CREATE TABLE `teachcourse` (
  `idz` mediumint(9) NOT NULL,
  `emz` varchar(233) NOT NULL,
  `catz` varchar(233) NOT NULL,
  `coursez` varchar(233) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teachcourse`
--

INSERT INTO `teachcourse` (`idz`, `emz`, `catz`, `coursez`) VALUES
(1, 'okyere@gmail.com', 'color party', 'intoduction to compiller');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `classattz`
--
ALTER TABLE `classattz`
  ADD PRIMARY KEY (`idz`);

--
-- Indexes for table `coursez`
--
ALTER TABLE `coursez`
  ADD PRIMARY KEY (`idz`);

--
-- Indexes for table `progz`
--
ALTER TABLE `progz`
  ADD PRIMARY KEY (`idz`);

--
-- Indexes for table `studz`
--
ALTER TABLE `studz`
  ADD PRIMARY KEY (`idz`);

--
-- Indexes for table `tableteachers`
--
ALTER TABLE `tableteachers`
  ADD PRIMARY KEY (`idz`);

--
-- Indexes for table `teachcourse`
--
ALTER TABLE `teachcourse`
  ADD PRIMARY KEY (`idz`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `classattz`
--
ALTER TABLE `classattz`
  MODIFY `idz` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `coursez`
--
ALTER TABLE `coursez`
  MODIFY `idz` mediumint(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `progz`
--
ALTER TABLE `progz`
  MODIFY `idz` mediumint(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `studz`
--
ALTER TABLE `studz`
  MODIFY `idz` mediumint(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tableteachers`
--
ALTER TABLE `tableteachers`
  MODIFY `idz` mediumint(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `teachcourse`
--
ALTER TABLE `teachcourse`
  MODIFY `idz` mediumint(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
