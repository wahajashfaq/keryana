-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 27, 2017 at 01:39 PM
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
  `Username` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `EncryptedUsername` varchar(255) NOT NULL,
  `Password` varchar(100) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`ID`, `FirstName`, `LastName`, `Username`, `Email`, `EncryptedUsername`, `Password`) VALUES
(1, 'Abdul', 'Rehman', 'keryana', 'test@gmail.com', '3d0abb2e7beaf060674be7ffbb5f9b3a', '3d0abb2e7beaf060674be7ffbb5f9b3a');

-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

CREATE TABLE IF NOT EXISTS `banners` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `EncryptedId` varchar(255) DEFAULT NULL,
  `Name` varchar(255) DEFAULT NULL,
  `ImageUrl` varchar(255) DEFAULT NULL,
  `CreationDate` datetime DEFAULT NULL,
  `Active` int(11) DEFAULT NULL,
  `Visibility` int(11) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `banners`
--

INSERT INTO `banners` (`ID`, `EncryptedId`, `Name`, `ImageUrl`, `CreationDate`, `Active`, `Visibility`) VALUES
(1, 'c4ca4238a0b923820dcc509a6f75849b', 'Banner One', 'uploads/banners/banner_one.jpg', '2017-07-20 01:32:15', 1, 1),
(2, 'c81e728d9d4c2f636f067f89cc14862c', 'Banner Two', 'uploads/banners/banner_two.jpg', '2017-07-20 01:34:27', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE IF NOT EXISTS `contact_us` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `EncryptedId` varchar(255) DEFAULT NULL,
  `Email` varchar(100) DEFAULT NULL,
  `ContactNumber` varchar(20) DEFAULT NULL,
  `Subject` varchar(100) DEFAULT NULL,
  `Query` varchar(1000) DEFAULT NULL,
  `ContactDate` datetime DEFAULT NULL,
  `IpAddress` varchar(50) NOT NULL,
  `Response` varchar(1000) DEFAULT NULL,
  `ResponseDate` datetime DEFAULT NULL,
  `Responded` int(11) DEFAULT NULL,
  `Visibility` int(11) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`ID`, `EncryptedId`, `Email`, `ContactNumber`, `Subject`, `Query`, `ContactDate`, `IpAddress`, `Response`, `ResponseDate`, `Responded`, `Visibility`) VALUES
(1, 'c4ca4238a0b923820dcc509a6f75849b', 'khawarhussain10@gmail.com', '03334855555', 'Test', NULL, '2017-07-21 02:23:34', '::1', NULL, NULL, 0, 1),
(2, 'c81e728d9d4c2f636f067f89cc14862c', 'khawarhussain10@gmail.com', '03334855555', 'Test', NULL, '2017-07-21 02:25:38', '::1', NULL, NULL, 0, 1),
(3, 'eccbc87e4b5ce2fe28308fd9f2a7baf3', 'khawarhussain10@gmail.com', '03334855555', 'Test', NULL, '2017-07-21 02:26:30', '::1', NULL, NULL, 0, 1),
(4, 'a87ff679a2f3e71d9181a67b7542122c', 'khawarhussain10@gmail.com', '03334855555', 'Test', NULL, '2017-07-21 02:27:04', '::1', NULL, NULL, 0, 1),
(5, 'e4da3b7fbbce2345d7772b0674a318d5', 'khawarhussain10@gmail.com', '03334855555', 'Test', NULL, '2017-07-21 02:27:23', '::1', NULL, NULL, 0, 1),
(6, '1679091c5a880faf6fb5e6087eb1b2dc', 'abdkhan422@gmail.com', '00000000', 'kjasdhk', NULL, '2017-07-21 02:27:49', '::1', NULL, NULL, 0, 1),
(7, '8f14e45fceea167a5a36dedd4bea2543', 'kasd', '897979798', 'asjd', NULL, '2017-07-21 02:29:35', '::1', NULL, NULL, 0, 1),
(8, 'c9f0f895fb98ab9159f51fd0297e236d', 'abdkhan422@gmail.com', '0999999999', 'Test(Textarea)', 'akdsjlksad', '2017-07-21 02:30:16', '::1', NULL, NULL, 0, 1),
(9, '45c48cce2e2d7fbdea1afc51c7c6ad26', NULL, NULL, NULL, NULL, '2017-07-23 03:02:26', '::1', NULL, NULL, 0, 1),
(10, 'd3d9446802a44259755d38e6d163e820', NULL, NULL, NULL, NULL, '2017-07-23 03:02:46', '::1', NULL, NULL, 0, 1),
(11, '6512bd43d9caa6e02c990b0a82652dca', 'kasd@jalsd.com', '1111111111', 'lsakdjlksj', 'dlkjsaldk ', '2017-07-23 03:03:55', '::1', NULL, NULL, 0, 1),
(12, 'c20ad4d76fe97759aa27a0c99bff6710', '', '', '', '', '2017-07-23 03:25:05', '::1', NULL, NULL, 0, 1);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`ID`, `FirstName`, `LastName`, `Email`, `FacebookId`, `Password`, `Country`, `IpAddress`, `DateOfCreation`, `LastLogin`, `Mobile`, `Address`, `ZipCode`, `LoyaltyPoints`, `Visibility`) VALUES
(1, 'Khawar', 'Hussain', 'khawarhussain10@gmail.com', NULL, '4f5193eb93febf51d4eddfa846a8bea5', '', '::1', '2017-07-16 21:35:18', '2017-07-16 21:35:18', '', '', '', 25, 1),
(2, 'Khawar', 'Hussain', 'jghjg@hf', NULL, 'd3aedc3aa864176c901bf08a6018232b', '', '::1', '2017-07-16 22:00:23', '2017-07-16 22:00:23', '', '', '', 25, 1),
(3, 'Khawar', 'Hussain', 'khawar418895@hotmail.com', '845411395606244', '', '', '::1', '2017-07-17 11:39:48', '2017-07-17 11:39:48', '', '', '', 25, 1),
(4, 'Abdur', 'Rehman', 'abdkhan422@gmail.com', '', 'd42912a3e6363697fe6a46cdae8b4a18', '', '::1', '2017-07-20 01:15:01', '2017-07-20 01:15:01', '', '', '', 25, 1);

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
  `Image` varchar(255) DEFAULT NULL,
  `visibility` int(11) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `first_category`
--

INSERT INTO `first_category` (`ID`, `EncryptedId`, `Name`, `CreationDate`, `ModifiedDate`, `Image`, `visibility`) VALUES
(1, 'c4ca4238a0b923820dcc509a6f75849b', 'Again', '2017-07-23 01:03:24', '2017-07-27 02:31:55', '', 0),
(2, 'c81e728d9d4c2f636f067f89cc14862c', 'First', '2017-07-23 01:22:00', '2017-07-23 01:22:00', '', 1),
(3, 'eccbc87e4b5ce2fe28308fd9f2a7baf3', 'New Cat', '2017-07-23 04:20:53', '2017-07-23 04:20:53', '', 1),
(4, 'a87ff679a2f3e71d9181a67b7542122c', 'Another', '2017-07-24 01:40:25', '2017-07-24 01:40:25', '', 1),
(5, 'e4da3b7fbbce2345d7772b0674a318d5', 'FinalTestOne', '2017-07-24 02:25:34', '2017-07-24 02:25:34', '', 1),
(6, '1679091c5a880faf6fb5e6087eb1b2dc', 'Beverages', '2017-07-25 01:30:58', '2017-07-27 04:13:36', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `EncryptedId` varchar(255) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Details` varchar(255) DEFAULT NULL,
  `CreationDate` datetime NOT NULL,
  `ModifiedDate` datetime NOT NULL,
  `FirstCategoryID` int(11) DEFAULT NULL,
  `SecondCategoryID` int(11) DEFAULT NULL,
  `ThirdCategoryID` int(11) DEFAULT NULL,
  `Unit` varchar(255) NOT NULL,
  `OfferType` varchar(50) DEFAULT NULL,
  `OfferAmount` varchar(50) DEFAULT NULL,
  `Image` varchar(255) DEFAULT NULL,
  `Views` int(11) NOT NULL,
  `visibility` int(11) NOT NULL,
  PRIMARY KEY (`ID`),
  KEY `FirstCategoryID` (`FirstCategoryID`),
  KEY `SecondCategoryID` (`SecondCategoryID`),
  KEY `ThirdCategoryID` (`ThirdCategoryID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `product_price`
--

CREATE TABLE IF NOT EXISTS `product_price` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `ProductID` int(11) NOT NULL,
  `Price` int(11) NOT NULL,
  `visibility` int(11) NOT NULL,
  PRIMARY KEY (`ID`),
  KEY `ProductID` (`ProductID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `second_category`
--

CREATE TABLE IF NOT EXISTS `second_category` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `EncryptedId` varchar(255) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `FirstCategoryID` int(11) NOT NULL,
  `CreationDate` datetime NOT NULL,
  `ModifiedDate` datetime NOT NULL,
  `visibility` int(11) NOT NULL,
  PRIMARY KEY (`ID`),
  KEY `fk_first_category_id` (`FirstCategoryID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `second_category`
--

INSERT INTO `second_category` (`ID`, `EncryptedId`, `Name`, `FirstCategoryID`, `CreationDate`, `ModifiedDate`, `visibility`) VALUES
(1, 'c4ca4238a0b923820dcc509a6f75849b', 'Second', 1, '2017-07-23 01:21:59', '2017-07-23 01:21:59', 1),
(3, 'eccbc87e4b5ce2fe28308fd9f2a7baf3', 'adasdas', 4, '2017-07-24 02:16:43', '2017-07-24 02:16:43', 1),
(4, 'a87ff679a2f3e71d9181a67b7542122c', 'adasdasasdasd', 3, '2017-07-24 02:17:05', '2017-07-24 02:17:05', 1),
(5, 'e4da3b7fbbce2345d7772b0674a318d5', 'askdas', 2, '2017-07-24 02:17:46', '2017-07-24 02:17:46', 1),
(6, '1679091c5a880faf6fb5e6087eb1b2dc', 'FinalTestTwo', 5, '2017-07-24 02:25:49', '2017-07-24 02:25:49', 1),
(7, '8f14e45fceea167a5a36dedd4bea2543', 'Water', 6, '2017-07-25 01:33:47', '2017-07-25 01:33:47', 1),
(8, 'c9f0f895fb98ab9159f51fd0297e236d', 'Tea', 6, '2017-07-25 01:35:06', '2017-07-27 04:16:35', 1),
(9, '45c48cce2e2d7fbdea1afc51c7c6ad26', 'Milk', 6, '2017-07-26 11:10:12', '2017-07-26 11:10:12', 1),
(10, 'd3d9446802a44259755d38e6d163e820', 'Another one', 5, '2017-07-27 03:54:55', '2017-07-27 03:54:55', 1);

-- --------------------------------------------------------

--
-- Table structure for table `sliding_banners`
--

CREATE TABLE IF NOT EXISTS `sliding_banners` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `EncryptedId` varchar(255) DEFAULT NULL,
  `Name` varchar(255) DEFAULT NULL,
  `ImageUrl` varchar(255) DEFAULT NULL,
  `CreationDate` datetime DEFAULT NULL,
  `Active` int(11) DEFAULT NULL,
  `Visibility` int(11) DEFAULT NULL,
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
  `SecondCategoryID` int(11) NOT NULL,
  `CreationDate` datetime NOT NULL,
  `ModifiedDate` datetime NOT NULL,
  `visibility` int(11) NOT NULL,
  PRIMARY KEY (`ID`),
  KEY `fk_second_category_id` (`SecondCategoryID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `third_category`
--

INSERT INTO `third_category` (`ID`, `EncryptedId`, `Name`, `SecondCategoryID`, `CreationDate`, `ModifiedDate`, `visibility`) VALUES
(1, 'c4ca4238a0b923820dcc509a6f75849b', 'Third', 1, '2017-07-23 01:21:58', '2017-07-23 01:21:58', 1),
(6, '1679091c5a880faf6fb5e6087eb1b2dc', 'dasdsad', 4, '2017-07-24 02:24:08', '2017-07-24 02:24:08', 1),
(7, '8f14e45fceea167a5a36dedd4bea2543', 'FinalTestThree', 6, '2017-07-24 02:26:00', '2017-07-24 02:26:00', 1),
(8, 'c9f0f895fb98ab9159f51fd0297e236d', 'Chayyee', 7, '2017-07-25 01:35:24', '2017-07-27 04:12:16', 0),
(9, '45c48cce2e2d7fbdea1afc51c7c6ad26', 'Tonic Water', 7, '2017-07-25 01:36:08', '2017-07-25 01:36:08', 1),
(10, 'd3d9446802a44259755d38e6d163e820', 'Coffee', 8, '2017-07-26 11:09:49', '2017-07-27 04:16:59', 1),
(11, '6512bd43d9caa6e02c990b0a82652dca', 'Coffe2', 8, '2017-07-27 04:17:22', '2017-07-27 04:17:22', 1),
(12, 'c20ad4d76fe97759aa27a0c99bff6710', 'Haleeb', 9, '2017-07-27 04:17:37', '2017-07-27 04:17:37', 1);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`FirstCategoryID`) REFERENCES `first_category` (`ID`),
  ADD CONSTRAINT `products_ibfk_2` FOREIGN KEY (`SecondCategoryID`) REFERENCES `second_category` (`ID`),
  ADD CONSTRAINT `products_ibfk_3` FOREIGN KEY (`ThirdCategoryID`) REFERENCES `third_category` (`ID`);

--
-- Constraints for table `product_price`
--
ALTER TABLE `product_price`
  ADD CONSTRAINT `product_price_ibfk_1` FOREIGN KEY (`ProductID`) REFERENCES `products` (`ID`);

--
-- Constraints for table `second_category`
--
ALTER TABLE `second_category`
  ADD CONSTRAINT `fk_first_category_id` FOREIGN KEY (`FirstCategoryID`) REFERENCES `first_category` (`ID`);

--
-- Constraints for table `third_category`
--
ALTER TABLE `third_category`
  ADD CONSTRAINT `fk_second_category_id` FOREIGN KEY (`SecondCategoryID`) REFERENCES `second_category` (`ID`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
