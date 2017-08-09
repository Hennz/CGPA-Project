-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 02, 2017 at 11:01 AM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `project work`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `adminID` int(3) NOT NULL,
  `adminName` varchar(30) NOT NULL,
  `Email` varchar(155) NOT NULL,
  `Password` varchar(128) NOT NULL,
  `AdminType` varchar(100) NOT NULL,
  PRIMARY KEY (`adminID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`adminID`, `adminName`, `Email`, `Password`, `AdminType`) VALUES
(1, 'admin', 'davis@gmail.com', '123', 'Administrator');

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE IF NOT EXISTS `course` (
  `CourseUnit` varchar(100) NOT NULL,
  `CreditUnit` int(3) NOT NULL,
  `LecturerName` varchar(50) NOT NULL,
  `RegNo` varchar(20) NOT NULL,
  PRIMARY KEY (`RegNo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course`
--


-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE IF NOT EXISTS `student` (
  `Name` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `studentNo` varchar(20) NOT NULL,
  `RegNo` varchar(20) NOT NULL,
  `Password` varchar(128) NOT NULL,
  PRIMARY KEY (`studentNo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--


-- --------------------------------------------------------

--
-- Table structure for table `y1semester1`
--

CREATE TABLE IF NOT EXISTS `y1semester1` (
  `studentNO` varchar(20) NOT NULL,
  `RegNo` varchar(15) NOT NULL,
  `FirstName` varchar(50) NOT NULL,
  `LastName` varchar(50) NOT NULL,
  `BIS1104` int(3) NOT NULL,
  `CSC1104` int(3) NOT NULL,
  `CSC1108` int(3) NOT NULL,
  `CSC1107` int(3) NOT NULL,
  `CSC1100` int(3) NOT NULL,
  `GPA` decimal(4,2) NOT NULL,
  PRIMARY KEY (`studentNO`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `y1semester1`
--

INSERT INTO `y1semester1` (`studentNO`, `RegNo`, `FirstName`, `LastName`, `BIS1104`, `CSC1104`, `CSC1108`, `CSC1107`, `CSC1100`, `GPA`) VALUES
('21600934', '16/2812/ps', 'abila', 'raphael', 64, 89, 73, 73, 78, '4.11'),
('216009915', '16/u/498', 'Kongoro', 'Dickens', 74, 60, 81, 78, 66, '3.97'),
('21690988', '16/u/498', 'agaba', 'davis', 89, 90, 89, 99, 89, '5.00'),
('465632', '16/u/498', 'Ankunda', 'Dorothy', 55, 78, 73, 74, 82, '4.00');

-- --------------------------------------------------------

--
-- Table structure for table `y1semester2`
--

CREATE TABLE IF NOT EXISTS `y1semester2` (
  `studentNO` int(9) NOT NULL,
  `RegNo` varchar(15) NOT NULL,
  `First Name` varchar(50) NOT NULL,
  `Last Name` varchar(50) NOT NULL,
  `BIS1206` int(3) NOT NULL,
  `MTH1203` int(3) NOT NULL,
  `CSC1214` int(3) NOT NULL,
  `MTH2203` int(3) NOT NULL,
  `BIS1204` int(3) NOT NULL,
  `GPA` decimal(3,2) NOT NULL,
  PRIMARY KEY (`studentNO`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `y1semester2`
--

INSERT INTO `y1semester2` (`studentNO`, `RegNo`, `First Name`, `Last Name`, `BIS1206`, `MTH1203`, `CSC1214`, `MTH2203`, `BIS1204`, `GPA`) VALUES
(216006923, '16/u/2673/ps', 'abila', 'raphael', 66, 60, 73, 78, 81, '3.97');

-- --------------------------------------------------------

--
-- Table structure for table `y2semester1`
--

CREATE TABLE IF NOT EXISTS `y2semester1` (
  `studentNO` int(9) NOT NULL,
  `RegNo` varchar(20) NOT NULL,
  `FirstName` text NOT NULL,
  `LastName` text NOT NULL,
  `CSC2100` int(3) NOT NULL,
  `CSC2114` int(3) NOT NULL,
  `CSC2103` int(3) NOT NULL,
  `MTH3105` int(3) NOT NULL,
  `BSE2105` int(3) NOT NULL,
  `GPA` decimal(3,2) NOT NULL,
  PRIMARY KEY (`studentNO`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `y2semester1`
--

INSERT INTO `y2semester1` (`studentNO`, `RegNo`, `FirstName`, `LastName`, `CSC2100`, `CSC2114`, `CSC2103`, `MTH3105`, `BSE2105`, `GPA`) VALUES
(216009915, '16/u/2812/ps', ' agaba', 'davis', 90, 90, 90, 90, 90, '5.00');

-- --------------------------------------------------------

--
-- Table structure for table `y2semester2`
--

CREATE TABLE IF NOT EXISTS `y2semester2` (
  `studentNO` varchar(9) NOT NULL,
  `RegNo` varchar(10) NOT NULL,
  `FirstName` varchar(50) NOT NULL,
  `LastName` varchar(50) NOT NULL,
  `CSC2200` int(3) NOT NULL,
  `CSC1209` int(3) NOT NULL,
  `CSC2209` int(3) NOT NULL,
  `CSC2210` int(3) NOT NULL,
  `CSC2207` int(3) NOT NULL,
  `GPA` decimal(3,2) NOT NULL,
  PRIMARY KEY (`studentNO`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `y2semester2`
--

INSERT INTO `y2semester2` (`studentNO`, `RegNo`, `FirstName`, `LastName`, `CSC2200`, `CSC1209`, `CSC2209`, `CSC2210`, `CSC2207`, `GPA`) VALUES
('216009915', '16/u/2812/', 'agaba', 'davis', 90, 90, 90, 90, 90, '4.47');

-- --------------------------------------------------------

--
-- Table structure for table `y3semester1`
--

CREATE TABLE IF NOT EXISTS `y3semester1` (
  `studentNO` varchar(9) NOT NULL,
  `RegNo` varchar(15) NOT NULL,
  `First Name` varchar(50) NOT NULL,
  `Last Name` varchar(50) NOT NULL,
  `CSC3110` int(3) NOT NULL,
  `BAM2102` int(3) NOT NULL,
  `CSC3112` int(3) NOT NULL,
  `CSC3118` int(3) NOT NULL,
  `BIS3100/CSC3121` int(3) NOT NULL,
  `GPA` decimal(3,2) NOT NULL,
  PRIMARY KEY (`studentNO`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `y3semester1`
--

INSERT INTO `y3semester1` (`studentNO`, `RegNo`, `First Name`, `Last Name`, `CSC3110`, `BAM2102`, `CSC3112`, `CSC3118`, `BIS3100/CSC3121`, `GPA`) VALUES
('216009915', '16/u/2812/ps', 'agaba', 'davis', 90, 90, 90, 90, 90, '4.74');

-- --------------------------------------------------------

--
-- Table structure for table `y3semester2`
--

CREATE TABLE IF NOT EXISTS `y3semester2` (
  `studentNO` varchar(9) NOT NULL,
  `RegNo` varchar(15) NOT NULL,
  `First Name` varchar(50) NOT NULL,
  `Last Name` varchar(50) NOT NULL,
  `BSE2206` int(3) NOT NULL,
  `CSC3205` int(3) NOT NULL,
  `CSC3211` int(3) NOT NULL,
  `CSC3207/BIS3205` int(3) NOT NULL,
  `BSE3202/CSC3217` int(3) NOT NULL,
  `GPA` decimal(3,2) NOT NULL,
  PRIMARY KEY (`studentNO`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `y3semester2`
--

INSERT INTO `y3semester2` (`studentNO`, `RegNo`, `First Name`, `Last Name`, `BSE2206`, `CSC3205`, `CSC3211`, `CSC3207/BIS3205`, `BSE3202/CSC3217`, `GPA`) VALUES
('216009915', '467u', 'agaba', 'davis', 90, 90, 90, 90, 90, '5.00');
