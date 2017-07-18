-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 18, 2017 at 07:33 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `keryana`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `FirstName` varchar(255) NOT NULL,
  `LastName` varchar(255) DEFAULT NULL,
  `Email` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE IF NOT EXISTS `customers` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `FirstName` varchar(255) NOT NULL,
  `LastName` varchar(255) DEFAULT NULL,
  `Email` varchar(255) NOT NULL,
  `FacebookId` varchar(255) DEFAULT NULL,
  `Password` varchar(255) DEFAULT NULL,
  `Country` varchar(100) DEFAULT NULL,
  `IpAddress` varchar(100) DEFAULT NULL,
  `DateOfCreation` datetime DEFAULT NULL,
  `LastLogin` datetime DEFAULT NULL,
  `Mobile` varchar(20) DEFAULT NULL,
  `Address` varchar(255) DEFAULT NULL,
  `ZipCode` varchar(50) DEFAULT NULL,
  `LoyaltyPoints` int(11) DEFAULT NULL,
  `Visibility` int(11) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`ID`, `FirstName`, `LastName`, `Email`, `FacebookId`, `Password`, `Country`, `IpAddress`, `DateOfCreation`, `LastLogin`, `Mobile`, `Address`, `ZipCode`, `LoyaltyPoints`, `Visibility`) VALUES
(1, 'Khawar', 'Hussain', 'khawarhussain10@gmail.com', NULL, '4f5193eb93febf51d4eddfa846a8bea5', '', '::1', '2017-07-16 21:35:18', '2017-07-16 21:35:18', '', '', '', 25, 1),
(2, 'Khawar', 'Hussain', 'jghjg@hf', NULL, 'd3aedc3aa864176c901bf08a6018232b', '', '::1', '2017-07-16 22:00:23', '2017-07-16 22:00:23', '', '', '', 25, 1),
(3, 'Khawar', 'Hussain', 'khawar418895@hotmail.com', '845411395606244', '', '', '::1', '2017-07-17 11:39:48', '2017-07-17 11:39:48', '', '', '', 25, 1);

-- --------------------------------------------------------

--
-- Table structure for table `first_category`
--

CREATE TABLE IF NOT EXISTS `first_category` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `EncryptedId` varchar(255) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `CreationDate` datetime NOT NULL,
  `ModifiedDate` datetime NOT NULL,
  `visibility` int(11) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `second_category`
--

CREATE TABLE IF NOT EXISTS `second_category` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `EncryptedId` varchar(255) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `CreationDate` datetime NOT NULL,
  `ModifiedDate` datetime NOT NULL,
  `visibility` int(11) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `third_category`
--

CREATE TABLE IF NOT EXISTS `third_category` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `EncryptedId` varchar(255) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `CreationDate` datetime NOT NULL,
  `ModifiedDate` datetime NOT NULL,
  `visibility` int(11) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
