-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 31, 2017 at 12:55 PM
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
-- Table structure for table `addressbook`
--

CREATE TABLE IF NOT EXISTS `addressbook` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(255) DEFAULT NULL,
  `lastname` varchar(255) DEFAULT NULL,
  `phone` varchar(100) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=149 ;

--
-- Dumping data for table `addressbook`
--

INSERT INTO `addressbook` (`id`, `firstname`, `lastname`, `phone`, `email`) VALUES
(1, 'Veda', 'Zane', '1-822-111-8722', 'tristique.neque@imperdietullamcorperDuis.ca'),
(2, 'Debra', 'Barclay', '1-834-403-5169', 'eu@Donecfeugiatmetus.com'),
(3, 'Cameran', 'Ethan', '1-424-207-4344', 'sed.tortor@Suspendissealiquetmolestie.net'),
(4, 'Bertha', 'Uriah', '1-213-739-6455', 'feugiat.tellus@Curabiturconsequatlectus.com'),
(5, 'Adrian', 'Geoffrey', '1-401-946-3860', 'arcu@id.ca'),
(6, 'Hammett', 'Keaton', '1-365-910-5682', 'Donec.feugiat@pharetra.ca'),
(7, 'Gay', 'Brock', '1-577-863-9970', 'Sed@laoreetlibero.net'),
(8, 'Candace', 'Felix', '1-624-293-4547', 'velit.eget@leo.org'),
(9, 'Theodore', 'Ezra', '1-357-355-3798', 'suscipit.est@nullamagnamalesuada.com'),
(10, 'Dalton', 'Dennis', '1-515-960-7108', 'hendrerit.neque.In@nonummyipsumnon.net'),
(11, 'Eden', 'Rashad', '1-173-452-1081', 'aliquet.magna.a@nullaat.ca'),
(12, 'Keely', 'Palmer', '1-527-238-0028', 'nisi@elit.edu'),
(13, 'Summer', 'Donovan', '1-535-643-7231', 'nec.ante@euelit.org'),
(14, 'Sierra', 'Zephania', '1-628-730-5416', 'iaculis.enim@ligulatortor.net'),
(15, 'Stephen', 'Derek', '1-425-259-2099', 'ultricies@posuereatvelit.co.uk'),
(16, 'Zelda', 'Amery', '1-721-373-8263', 'dignissim@ornare.net'),
(17, 'Jenna', 'Troy', '1-909-208-1319', 'aliquet.vel@Crasdolordolor.co.uk'),
(18, 'Christian', 'Preston', '1-290-927-2204', 'Duis.volutpat@actellusSuspendisse.net'),
(19, 'Yuli', 'Graham', '1-102-244-0059', 'elementum.dui@vehicula.ca'),
(20, 'Cailin', 'Jason', '1-532-863-2211', 'ipsum.dolor.sit@odio.co.uk'),
(21, NULL, NULL, NULL, NULL),
(22, NULL, NULL, NULL, NULL),
(23, NULL, NULL, NULL, NULL),
(24, NULL, NULL, NULL, NULL),
(25, NULL, NULL, NULL, NULL),
(26, NULL, NULL, NULL, NULL),
(27, NULL, NULL, NULL, NULL),
(28, NULL, NULL, NULL, NULL),
(29, NULL, NULL, NULL, NULL),
(30, NULL, NULL, NULL, NULL),
(31, NULL, NULL, NULL, NULL),
(32, NULL, NULL, NULL, NULL),
(33, NULL, NULL, NULL, NULL),
(34, NULL, NULL, NULL, NULL),
(35, NULL, NULL, NULL, NULL),
(36, NULL, NULL, NULL, NULL),
(37, NULL, NULL, NULL, NULL),
(38, NULL, NULL, NULL, NULL),
(39, NULL, NULL, NULL, NULL),
(40, NULL, NULL, NULL, NULL),
(41, NULL, NULL, NULL, NULL),
(42, NULL, NULL, NULL, NULL),
(43, NULL, NULL, NULL, NULL),
(44, NULL, NULL, NULL, NULL),
(45, NULL, NULL, NULL, NULL),
(46, NULL, NULL, NULL, NULL),
(47, NULL, NULL, NULL, NULL),
(48, NULL, NULL, NULL, NULL),
(49, NULL, NULL, NULL, NULL),
(50, NULL, NULL, NULL, NULL),
(51, NULL, NULL, NULL, NULL),
(52, NULL, NULL, NULL, NULL),
(53, NULL, NULL, NULL, NULL),
(54, NULL, NULL, NULL, NULL),
(55, NULL, NULL, NULL, NULL),
(56, NULL, NULL, NULL, NULL),
(57, NULL, NULL, NULL, NULL),
(58, NULL, NULL, NULL, NULL),
(59, NULL, NULL, NULL, NULL),
(60, NULL, NULL, NULL, NULL),
(61, NULL, NULL, NULL, NULL),
(62, NULL, NULL, NULL, NULL),
(63, NULL, NULL, NULL, NULL),
(64, NULL, NULL, NULL, NULL),
(65, NULL, NULL, NULL, NULL),
(66, NULL, NULL, NULL, NULL),
(67, NULL, NULL, NULL, NULL),
(68, NULL, NULL, NULL, NULL),
(69, NULL, NULL, NULL, NULL),
(70, NULL, NULL, NULL, NULL),
(71, NULL, NULL, NULL, NULL),
(72, NULL, NULL, NULL, NULL),
(73, NULL, NULL, NULL, NULL),
(74, NULL, NULL, NULL, NULL),
(75, NULL, NULL, NULL, NULL),
(76, NULL, NULL, NULL, NULL),
(77, NULL, NULL, NULL, NULL),
(78, NULL, NULL, NULL, NULL),
(79, NULL, NULL, NULL, NULL),
(80, NULL, NULL, NULL, NULL),
(81, NULL, NULL, NULL, NULL),
(82, NULL, NULL, NULL, NULL),
(83, NULL, NULL, NULL, NULL),
(84, NULL, NULL, NULL, NULL),
(85, NULL, NULL, NULL, NULL),
(86, NULL, NULL, NULL, NULL),
(87, NULL, NULL, NULL, NULL),
(88, NULL, NULL, NULL, NULL),
(89, NULL, NULL, NULL, NULL),
(90, NULL, NULL, NULL, NULL),
(91, NULL, NULL, NULL, NULL),
(92, NULL, NULL, NULL, NULL),
(93, NULL, NULL, NULL, NULL),
(94, NULL, NULL, NULL, NULL),
(95, NULL, NULL, NULL, NULL),
(96, NULL, NULL, NULL, NULL),
(97, NULL, NULL, NULL, NULL),
(98, NULL, NULL, NULL, NULL),
(99, NULL, NULL, NULL, NULL),
(100, NULL, NULL, NULL, NULL),
(101, NULL, NULL, NULL, NULL),
(102, NULL, NULL, NULL, NULL),
(103, NULL, NULL, NULL, NULL),
(104, NULL, NULL, NULL, NULL),
(105, NULL, NULL, NULL, NULL),
(106, NULL, NULL, NULL, NULL),
(107, NULL, NULL, NULL, NULL),
(108, NULL, NULL, NULL, NULL),
(109, NULL, NULL, NULL, NULL),
(110, NULL, NULL, NULL, NULL),
(111, NULL, NULL, NULL, NULL),
(112, NULL, NULL, NULL, NULL),
(113, NULL, NULL, NULL, NULL),
(114, NULL, NULL, NULL, NULL),
(115, NULL, NULL, NULL, NULL),
(116, NULL, NULL, NULL, NULL),
(117, NULL, NULL, NULL, NULL),
(118, NULL, NULL, NULL, NULL),
(119, NULL, NULL, NULL, NULL),
(120, NULL, NULL, NULL, NULL),
(121, NULL, NULL, NULL, NULL),
(122, NULL, NULL, NULL, NULL),
(123, NULL, NULL, NULL, NULL),
(124, NULL, NULL, NULL, NULL),
(125, NULL, NULL, NULL, NULL),
(126, NULL, NULL, NULL, NULL),
(127, NULL, NULL, NULL, NULL),
(128, NULL, NULL, NULL, NULL),
(129, NULL, NULL, NULL, NULL),
(130, NULL, NULL, NULL, NULL),
(131, NULL, NULL, NULL, NULL),
(132, NULL, NULL, NULL, NULL),
(133, NULL, NULL, NULL, NULL),
(134, NULL, NULL, NULL, NULL),
(135, NULL, NULL, NULL, NULL),
(136, NULL, NULL, NULL, NULL),
(137, NULL, NULL, NULL, NULL),
(138, NULL, NULL, NULL, NULL),
(139, NULL, NULL, NULL, NULL),
(140, NULL, NULL, NULL, NULL),
(141, NULL, NULL, NULL, NULL),
(142, NULL, NULL, NULL, NULL),
(143, NULL, NULL, NULL, NULL),
(144, NULL, NULL, NULL, NULL),
(145, NULL, NULL, NULL, NULL),
(146, NULL, NULL, NULL, NULL),
(147, NULL, NULL, NULL, NULL),
(148, NULL, NULL, NULL, NULL);

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
-- Table structure for table `brands`
--

CREATE TABLE IF NOT EXISTS `brands` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `EncryptedId` varchar(255) DEFAULT NULL,
  `Name` varchar(255) DEFAULT NULL,
  `ImageUrl` varchar(255) DEFAULT NULL,
  `Visibility` int(11) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`ID`, `EncryptedId`, `Name`, `ImageUrl`, `Visibility`) VALUES
(3, 'eccbc87e4b5ce2fe28308fd9f2a7baf3', 'Coca Cola', 'Coca_Cola.png', 1),
(4, 'a87ff679a2f3e71d9181a67b7542122c', 'Lipton', 'Lipton.png', 1),
(5, 'e4da3b7fbbce2345d7772b0674a318d5', 'Pepsi', 'Pepsi.png', 1),
(6, '1679091c5a880faf6fb5e6087eb1b2dc', 'Tapal', 'Tapal.png', 1),
(7, '8f14e45fceea167a5a36dedd4bea2543', 'Uniliver', 'Uniliver.png', 1),
(8, 'c9f0f895fb98ab9159f51fd0297e236d', 'Nestle', 'Nestle.png', 1);

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
  `EncryptedId` varchar(40) NOT NULL,
  `FacebookId` varchar(255) DEFAULT NULL,
  `Password` varchar(255) DEFAULT NULL,
  `City` varchar(50) DEFAULT NULL,
  `IpAddress` varchar(100) DEFAULT NULL,
  `DateOfCreation` datetime DEFAULT NULL,
  `LastLogin` datetime DEFAULT NULL,
  `Mobile` varchar(20) DEFAULT NULL,
  `Address` varchar(255) DEFAULT NULL,
  `ZipCode` varchar(50) DEFAULT NULL,
  `LoyaltyPoints` int(11) DEFAULT NULL,
  `Visibility` int(11) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`ID`, `FirstName`, `LastName`, `Email`, `EncryptedId`, `FacebookId`, `Password`, `City`, `IpAddress`, `DateOfCreation`, `LastLogin`, `Mobile`, `Address`, `ZipCode`, `LoyaltyPoints`, `Visibility`) VALUES
(1, 'Khawar', 'Hussain', 'khawarhussain10@gmail.com', 'ab7f85526867916faaf0f35ce9b5f9c3', NULL, '4f5193eb93febf51d4eddfa846a8bea5', 'KSK', '::1', '2017-07-16 21:35:18', '2017-07-31 10:50:16', '', '', '', 25, 1),
(5, 'Abdur', 'Rehman', 'abdkhan422@gmail.com', '47e33975835566be99d83be09a761989', '', 'd93ec75bca4b7ef88df5a6c591654422', '', '::1', '2017-07-30 02:48:56', '2017-07-30 03:11:34', '', '', '', 25, 1);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `first_category`
--

INSERT INTO `first_category` (`ID`, `EncryptedId`, `Name`, `CreationDate`, `ModifiedDate`, `Image`, `visibility`) VALUES
(1, 'c4ca4238a0b923820dcc509a6f75849b', 'Again', '2017-07-23 01:03:24', '2017-07-27 02:31:55', '', 0),
(2, 'c81e728d9d4c2f636f067f89cc14862c', 'First', '2017-07-23 01:22:00', '2017-07-23 01:22:00', '', 1),
(3, 'eccbc87e4b5ce2fe28308fd9f2a7baf3', 'New Cat', '2017-07-23 04:20:53', '2017-07-23 04:20:53', '', 1),
(4, 'a87ff679a2f3e71d9181a67b7542122c', 'Another', '2017-07-24 01:40:25', '2017-07-24 01:40:25', '', 1),
(5, 'e4da3b7fbbce2345d7772b0674a318d5', 'FinalTestOne', '2017-07-24 02:25:34', '2017-07-24 02:25:34', '', 1),
(6, '1679091c5a880faf6fb5e6087eb1b2dc', 'Beverages', '2017-07-25 01:30:58', '2017-07-27 04:13:36', '1679091c5a880faf6fb5e6087eb1b2dc.JPG', 0),
(7, '8f14e45fceea167a5a36dedd4bea2543', 'Grocery', '2017-07-30 04:13:57', '2017-07-30 04:13:57', NULL, 0),
(8, 'c9f0f895fb98ab9159f51fd0297e236d', 'Grocery & Staples', '2017-07-31 12:35:47', '2017-07-31 12:35:47', NULL, 1),
(9, '45c48cce2e2d7fbdea1afc51c7c6ad26', 'Baverages', '2017-07-31 12:35:51', '2017-07-31 12:35:51', NULL, 1),
(10, 'd3d9446802a44259755d38e6d163e820', 'NewTestCat', '2017-07-31 10:59:25', '2017-07-31 10:59:25', NULL, 1);

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
  `BrandID` int(11) DEFAULT NULL,
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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=280 ;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`ID`, `EncryptedId`, `Name`, `Details`, `CreationDate`, `ModifiedDate`, `FirstCategoryID`, `SecondCategoryID`, `ThirdCategoryID`, `BrandID`, `Unit`, `OfferType`, `OfferAmount`, `Image`, `Views`, `visibility`) VALUES
(2, 'c81e728d9d4c2f636f067f89cc14862c', 'Coca Cola', 'Aashirvaad Whole Wheat Flour is finished from the best accepted ingredients that help recover digestion and offer good number of well nutrients to the body. Aashirvaad Whole Grain Atta does not hold any extra preservatives or flavours. 100% full Wheat Cha', '2017-07-29 03:40:24', '2017-07-29 03:40:24', 6, 7, 9, 3, '', NULL, NULL, 'coca-cola-logo-260x2604.png', 0, 1),
(3, 'eccbc87e4b5ce2fe28308fd9f2a7baf3', 'Pepsi', NULL, '2017-07-29 04:15:52', '2017-07-29 04:15:52', 6, 7, 9, 5, '', NULL, NULL, 'image003.png', 0, 1),
(4, 'a87ff679a2f3e71d9181a67b7542122c', 'Lipton Green Tea', 'Lipton Green TeaLipton Green TeaLipton Green Tea', '2017-07-29 07:42:09', '2017-07-29 07:42:09', 6, 8, 13, 4, '', NULL, NULL, 'llll.png', 0, 1),
(5, 'e4da3b7fbbce2345d7772b0674a318d5', 'FinalTestProduct', 'Hello testing', '2017-07-31 12:58:43', '2017-07-31 12:58:43', 4, 3, 46, 4, '', NULL, NULL, NULL, 0, 1),
(6, '1679091c5a880faf6fb5e6087eb1b2dc', 'Daal Chana', '', '2017-07-31 01:32:55', '2017-07-31 01:46:14', 8, 12, 15, 0, '', NULL, NULL, '1.jpg', 0, 1),
(7, '8f14e45fceea167a5a36dedd4bea2543', 'Daal Mash', '', '2017-07-31 01:32:56', '2017-07-31 01:46:14', 8, 12, 15, 0, '', NULL, NULL, '2.jpg', 0, 1),
(8, 'c9f0f895fb98ab9159f51fd0297e236d', 'Daal Masoor', '', '2017-07-31 01:32:56', '2017-07-31 01:46:14', 8, 12, 15, 0, '', NULL, NULL, '3.jpg', 0, 1),
(9, '45c48cce2e2d7fbdea1afc51c7c6ad26', 'Safaid Chana (White)', '', '2017-07-31 01:32:57', '2017-07-31 01:46:14', 8, 12, 15, 0, '', NULL, NULL, '4.jpg', 0, 1),
(10, 'd3d9446802a44259755d38e6d163e820', 'Daal Moong', '', '2017-07-31 01:32:57', '2017-07-31 01:46:14', 8, 12, 15, 0, '', NULL, NULL, '5.jpg', 0, 1),
(11, '6512bd43d9caa6e02c990b0a82652dca', 'Sabut Masoor', '', '2017-07-31 01:32:57', '2017-07-31 01:46:14', 8, 12, 15, 0, '', NULL, NULL, '6.jpg', 0, 1),
(12, 'c20ad4d76fe97759aa27a0c99bff6710', 'Kala Chana (Black)', '', '2017-07-31 01:32:57', '2017-07-31 01:46:14', 8, 12, 15, 0, '', NULL, NULL, '7.jpg', 0, 1),
(13, 'c51ce410c124a10e0db5e4b97fc2af39', 'White Lobia', '', '2017-07-31 01:32:57', '2017-07-31 01:46:14', 8, 12, 15, 0, '', NULL, NULL, '8.jpg', 0, 1),
(14, 'aab3238922bcc25a6f606eb525ffdc56', 'Red Lobia', '', '2017-07-31 01:32:57', '2017-07-31 01:46:14', 8, 12, 15, 0, '', NULL, NULL, '9.jpg', 0, 1),
(15, '9bf31c7ff062936a96d3c8bd1f8f2ff3', 'Baisan', '', '2017-07-31 01:32:57', '2017-07-31 01:46:14', 8, 12, 15, 0, '', NULL, NULL, '12.jpg', 0, 1),
(16, 'c74d97b01eae257e44aa9d5bade97baf', 'Suji', '', '2017-07-31 01:32:58', '2017-07-31 01:46:14', 8, 12, 15, 0, '', NULL, NULL, '19.jpg', 0, 1),
(17, '70efdf2ec9b086079795c442636b55fb', 'Bhuna Chana', '', '2017-07-31 01:32:58', '2017-07-31 01:46:14', 8, 12, 15, 0, '', NULL, NULL, '14.jpg', 0, 1),
(18, '6f4922f45568161a8cdf4ad2299f6d23', 'Dliya', '', '2017-07-31 01:32:58', '2017-07-31 01:46:14', 8, 12, 15, 0, '', NULL, NULL, '15.jpg', 0, 1),
(19, '1f0e3dad99908345f7439f8ffabdffc4', 'Super Kernal Rice', '', '2017-07-31 01:32:58', '2017-07-31 01:46:14', 8, 12, 16, 0, '', NULL, NULL, '16.jpg', 0, 1),
(20, '98f13708210194c475687be6106a3b84', 'Super Basmati Rice', '', '2017-07-31 01:32:58', '2017-07-31 01:46:14', 8, 12, 16, 0, '', NULL, NULL, '17.jpg', 0, 1),
(21, '3c59dc048e8850243be8079a5c74d079', 'Atta', '', '2017-07-31 01:32:59', '2017-07-31 01:46:14', 8, 12, 17, 0, '', NULL, NULL, '18.jpg', 0, 1),
(22, 'b6d767d2f8ed5d21a44b0e5886680cb9', 'Suji', '', '2017-07-31 01:32:59', '2017-07-31 01:46:14', 8, 12, 17, 0, '', NULL, NULL, '19.jpg', 0, 1),
(23, '37693cfc748049e45d87b8c7d8b9aacd', 'Maida', '', '2017-07-31 01:32:59', '2017-07-31 01:46:14', 8, 12, 17, 0, '', NULL, NULL, '20.jpg', 0, 1),
(24, '1ff1de774005f8da13f42943881c655f', 'Sugar', '', '2017-07-31 01:32:59', '2017-07-31 01:46:14', 8, 13, 18, 0, '', NULL, NULL, '21.jpg', 0, 1),
(25, '8e296a067a37563370ded05f5a3bf3ec', 'National Iodized Salt', '', '2017-07-31 01:32:59', '2017-07-31 01:46:14', 8, 13, 18, 0, '', NULL, NULL, '22.jpg', 0, 1),
(26, '4e732ced3463d06de0ca9a15b6153677', 'National Chinese Salt', '', '2017-07-31 01:32:59', '2017-07-31 01:46:15', 8, 13, 18, 0, '', NULL, NULL, '25.jpg', 0, 1),
(27, '02e74f10e0327ad868d138f2b4fdd6f0', 'National Iodized Refined Salt', '', '2017-07-31 01:32:59', '2017-07-31 01:46:15', 8, 13, 18, 0, '', NULL, NULL, '24.jpg', 0, 1),
(28, '33e75ff09dd601bbe69f351039152189', 'National Chinese Salt', '', '2017-07-31 01:33:00', '2017-07-31 01:46:15', 8, 13, 18, 0, '', NULL, NULL, '25.jpg', 0, 1),
(29, '6ea9ab1baa0efb9e19094440c317e21b', 'Shangrila Chinese Salt', '', '2017-07-31 01:33:00', '2017-07-31 01:46:15', 8, 13, 18, 0, '', NULL, NULL, '28.jpg', 0, 1),
(30, '34173cb38f07f89ddbebc2ac9128303f', 'Medicam Sweatner MSC Free', '', '2017-07-31 01:33:00', '2017-07-31 01:46:15', 8, 13, 18, 0, '', NULL, NULL, '27.jpg', 0, 1),
(31, 'c16a5320fa475530d9583c34fd356ef5', 'Shangrila Chinese Salt', '', '2017-07-31 01:33:00', '2017-07-31 01:46:15', 8, 13, 18, 0, '', NULL, NULL, '28.jpg', 0, 1),
(32, '6364d3f0f495b6ab9dcf8d3b5c6e0b01', 'Scotch Brite Aluminium Foil', '', '2017-07-31 01:33:00', '2017-07-31 01:46:15', 8, 13, 19, 0, '', NULL, NULL, '29.jpg', 0, 1),
(33, '182be0c5cdcd5072bb1864cdee4d3d6e', 'National Sabzi Masala', '', '2017-07-31 01:33:00', '2017-07-31 01:46:15', 8, 14, 20, 0, '', NULL, NULL, '32.jpg', 0, 1),
(34, 'e369853df766fa44e1ed0ff613f563bd', 'National Pakora Mix', '', '2017-07-31 01:33:00', '2017-07-31 01:46:15', 8, 14, 20, 0, '', NULL, NULL, '33.jpg', 0, 1),
(35, '1c383cd30b7c298ab50293adfecb7b18', 'Shan Haleem Mix', '', '2017-07-31 01:33:00', '2017-07-31 01:46:15', 8, 14, 20, 0, '', NULL, NULL, '34.jpg', 0, 1),
(36, '19ca14e7ea6328a42e0eb13d585e4c22', 'National Tikka Boti Masala', '', '2017-07-31 01:33:00', '2017-07-31 01:46:15', 8, 14, 20, 0, '', NULL, NULL, '35.jpg', 0, 1),
(37, 'a5bfc9e07964f8dddeb95fc584cd965d', 'National Pulao Masala', '', '2017-07-31 01:33:01', '2017-07-31 01:46:15', 8, 14, 20, 0, '', NULL, NULL, '36.jpg', 0, 1),
(38, 'a5771bce93e200c36f7cd9dfd0e5deaa', 'Shan Tikka Boti Masala', '', '2017-07-31 01:33:01', '2017-07-31 01:46:15', 8, 14, 20, 0, '', NULL, NULL, '37.jpg', 0, 1),
(39, 'd67d8ab4f4c10bf22aa353e27879133c', 'Shan Seikh Kabab Masala', '', '2017-07-31 01:33:01', '2017-07-31 01:46:15', 8, 14, 20, 0, '', NULL, NULL, '38.jpg', 0, 1),
(40, 'd645920e395fedad7bbbed0eca3fe2e0', 'Shan Teekhi Kali Mirch Powder', '', '2017-07-31 01:33:01', '2017-07-31 01:46:15', 8, 14, 20, 0, '', NULL, NULL, '39.jpg', 0, 1),
(41, '3416a75f4cea9109507cacd8e2f2aefc', 'Colves (Long)', '', '2017-07-31 01:33:01', '2017-07-31 01:46:15', 8, 14, 20, 0, '', NULL, NULL, '40.jpg', 0, 1),
(42, 'a1d0c6e83f027327d8461063f4ac58a6', 'National Bihari Kabab Masala', '', '2017-07-31 01:33:01', '2017-07-31 01:46:15', 8, 14, 20, 0, '', NULL, NULL, '41.jpg', 0, 1),
(43, '17e62166fc8586dfa4d1bc0e1742c08b', 'Coriander Powder (Pisa Dhaniya)', '', '2017-07-31 01:33:01', '2017-07-31 01:46:15', 8, 14, 20, 0, '', NULL, NULL, '42.jpg', 0, 1),
(44, 'f7177163c833dff4b38fc8d2872f1ec6', 'National Tandoor Masala', '', '2017-07-31 01:33:01', '2017-07-31 01:46:15', 8, 14, 20, 0, '', NULL, NULL, '43.jpg', 0, 1),
(45, '6c8349cc7260ae62e3b1396831a8398f', 'Black Salt (Kala Namak)', '', '2017-07-31 01:33:02', '2017-07-31 01:46:15', 8, 14, 20, 0, '', NULL, NULL, '44.jpg', 0, 1),
(46, 'd9d4f495e875a2e075a1a4a6e1b9770f', 'Shan Tez Lal Mirch Powder', '', '2017-07-31 01:33:02', '2017-07-31 01:46:15', 8, 14, 20, 0, '', NULL, NULL, '45.jpg', 0, 1),
(47, '67c6a1e7ce56d3d6fa748ab6d9af3fd7', 'Shan Chicken White Karahi', '', '2017-07-31 01:33:02', '2017-07-31 01:46:15', 8, 14, 20, 0, '', NULL, NULL, '46.jpg', 0, 1),
(48, '642e92efb79421734881b53e1e1b18b6', 'Shan Paya Masala', '', '2017-07-31 01:33:02', '2017-07-31 01:46:15', 8, 14, 20, 0, '', NULL, NULL, '47.jpg', 0, 1),
(49, 'f457c545a9ded88f18ecee47145a72c0', 'National Cumin Seeds', '', '2017-07-31 01:33:02', '2017-07-31 01:46:15', 8, 14, 20, 0, '', NULL, NULL, '48.jpg', 0, 1),
(50, 'c0c7c76d30bd3dcaefc96f40275bdc0a', 'Shan Bombay Biryani Masala', '', '2017-07-31 01:33:02', '2017-07-31 01:46:15', 8, 14, 20, 0, '', NULL, NULL, '49.jpg', 0, 1),
(51, '2838023a778dfaecdc212708f721b788', 'Topioco Sago', '', '2017-07-31 01:33:02', '2017-07-31 01:46:16', 8, 14, 20, 0, '', NULL, NULL, '50.jpg', 0, 1),
(52, '9a1158154dfa42caddbd0694a4e9bdc8', 'Shan Keema Maslaa', '', '2017-07-31 01:33:02', '2017-07-31 01:46:16', 8, 14, 20, 0, '', NULL, NULL, '51.jpg', 0, 1),
(53, 'd82c8d1619ad8176d665453cfb2e55f0', 'National Delhi Nihari', '', '2017-07-31 01:33:03', '2017-07-31 01:46:16', 8, 14, 20, 0, '', NULL, NULL, '52.jpg', 0, 1),
(54, 'a684eceee76fc522773286a895bc8436', 'National Quick Cook Haleem Mix', '', '2017-07-31 01:33:03', '2017-07-31 01:46:16', 8, 14, 20, 0, '', NULL, NULL, '53.jpg', 0, 1),
(55, 'b53b3a3d6ab90ce0268229151c9bde11', 'National Karahi Fry Gosht', '', '2017-07-31 01:33:03', '2017-07-31 01:46:16', 8, 14, 20, 0, '', NULL, NULL, '54.jpg', 0, 1),
(56, '9f61408e3afb633e50cdf1b20de6f466', 'Shan Tikka Masala', '', '2017-07-31 01:33:03', '2017-07-31 01:46:16', 8, 14, 20, 0, '', NULL, NULL, '55.jpg', 0, 1),
(57, '72b32a1f754ba1c09b3695e0cb6cde7f', 'National Salan (Curry) Masala', '', '2017-07-31 01:33:03', '2017-07-31 01:46:16', 8, 14, 20, 0, '', NULL, NULL, '56.jpg', 0, 1),
(58, '66f041e16a60928b05a7e228a89c3799', 'Green Cardamom (Small Elachi)', '', '2017-07-31 01:33:03', '2017-07-31 01:46:19', 8, 14, 20, 0, '', NULL, NULL, '116.jpg', 0, 1),
(59, '093f65e080a295f8076b1c5722a46aa2', 'Cumin Seed (Safaid Zeera)', '', '2017-07-31 01:33:03', '2017-07-31 01:46:16', 8, 14, 20, 0, '', NULL, NULL, '58.jpg', 0, 1),
(60, '072b030ba126b2f4b2374f342be9ed44', 'National Kofta Masala', '', '2017-07-31 01:33:04', '2017-07-31 01:46:16', 8, 14, 20, 0, '', NULL, NULL, '59.jpg', 0, 1),
(61, '7f39f8317fbdb1988ef4c628eba02591', 'Shan Achar Gosht', '', '2017-07-31 01:33:04', '2017-07-31 01:46:16', 8, 14, 20, 0, '', NULL, NULL, '60.jpg', 0, 1),
(62, '44f683a84163b3523afe57c2e008bc8c', 'Black Cardamom (Big Elachi)', '', '2017-07-31 01:33:04', '2017-07-31 01:46:16', 8, 14, 20, 0, '', NULL, NULL, '61.jpg', 0, 1),
(63, '03afdbd66e7929b125f8597834fa83a4', 'Black Pepper', '', '2017-07-31 01:33:04', '2017-07-31 01:46:17', 8, 14, 20, 0, '', NULL, NULL, '62.jpg', 0, 1),
(64, 'ea5d2f1c4608232e07d3aa3d998e5135', 'Nationa Mutton Biryani', '', '2017-07-31 01:33:04', '2017-07-31 01:46:17', 8, 14, 20, 0, '', NULL, NULL, '63.jpg', 0, 1),
(65, 'fc490ca45c00b1249bbe3554a4fdf6fb', 'Shan White Korma Masala', '', '2017-07-31 01:33:04', '2017-07-31 01:46:17', 8, 14, 20, 0, '', NULL, NULL, '64.jpg', 0, 1),
(66, '3295c76acbf4caaed33c36b1b5fc2cb1', 'Shami Kabab Masala', '', '2017-07-31 01:33:04', '2017-07-31 01:46:17', 8, 14, 20, 0, '', NULL, NULL, '65.jpg', 0, 1),
(67, '735b90b4568125ed6c3f678819b6e058', 'Shan Koofta Masala', '', '2017-07-31 01:33:04', '2017-07-31 01:46:17', 8, 14, 20, 0, '', NULL, NULL, '66.jpg', 0, 1),
(68, 'a3f390d88e4c41f2747bfa2f1b5f87db', 'Shan Curry Masala', '', '2017-07-31 01:33:05', '2017-07-31 01:46:17', 8, 14, 20, 0, '', NULL, NULL, '67.jpg', 0, 1),
(69, '14bfa6bb14875e45bba028a21ed38046', 'Bicarbonate Soda (Meetha Soda)', '', '2017-07-31 01:33:05', '2017-07-31 01:46:17', 8, 14, 20, 0, '', NULL, NULL, '68.jpg', 0, 1),
(70, '7cbbc409ec990f19c78c75bd1e06f215', 'Shan Sindhi Biryani', '', '2017-07-31 01:33:05', '2017-07-31 01:46:17', 8, 14, 20, 0, '', NULL, NULL, '69.jpg', 0, 1),
(71, 'e2c420d928d4bf8ce0ff2ec19b371514', 'Turmeric Powder (Haldi Powder)', '', '2017-07-31 01:33:05', '2017-07-31 01:46:17', 8, 14, 20, 0, '', NULL, NULL, '70.jpg', 0, 1),
(72, '32bb90e8976aab5298d5da10fe66f21d', 'Shan Biryani Masala', '', '2017-07-31 01:33:05', '2017-07-31 01:46:17', 8, 14, 20, 0, '', NULL, NULL, '71.jpg', 0, 1),
(73, 'd2ddea18f00665ce8623e36bd4e3c7c5', 'Shan Zafrani Garam Masala', '', '2017-07-31 01:33:05', '2017-07-31 01:46:17', 8, 14, 20, 0, '', NULL, NULL, '72.jpg', 0, 1),
(74, 'ad61ab143223efbc24c7d2583be69251', 'National Black Pepper Powder', '', '2017-07-31 01:33:05', '2017-07-31 01:46:17', 8, 14, 20, 0, '', NULL, NULL, '73.jpg', 0, 1),
(75, 'd09bf41544a3365a46c9077ebb5e35c3', 'National Coriander Powder', '', '2017-07-31 01:33:05', '2017-07-31 01:46:17', 8, 14, 20, 0, '', NULL, NULL, '74.jpg', 0, 1),
(76, 'fbd7939d674997cdb4692d34de8633c4', 'National Ginger Powder', '', '2017-07-31 01:33:05', '2017-07-31 01:46:17', 8, 14, 20, 0, '', NULL, NULL, '75.jpg', 0, 1),
(77, '28dd2c7955ce926456240b2ff0100bde', 'National Garam Masala', '', '2017-07-31 01:33:06', '2017-07-31 01:46:17', 8, 14, 20, 0, '', NULL, NULL, '76.jpg', 0, 1),
(78, '35f4a8d465e6e1edc05f3d8ab658c551', 'Nigella Seed (Kalonji)', '', '2017-07-31 01:33:06', '2017-07-31 01:46:17', 8, 14, 20, 0, '', NULL, NULL, '77.jpg', 0, 1),
(79, 'd1fe173d08e959397adf34b1d77e88d7', 'Shan Chapli Kabab', '', '2017-07-31 01:33:06', '2017-07-31 01:46:17', 8, 14, 20, 0, '', NULL, NULL, '78.jpg', 0, 1),
(80, 'f033ab37c30201f73f142449d037028d', 'Shan Nihari', '', '2017-07-31 01:33:06', '2017-07-31 01:46:17', 8, 14, 20, 0, '', NULL, NULL, '79.jpg', 0, 1),
(81, '43ec517d68b6edd3015b3edc9a11367b', 'Shan Bihari Kabab', '', '2017-07-31 01:33:06', '2017-07-31 01:46:17', 8, 14, 20, 0, '', NULL, NULL, '80.jpg', 0, 1),
(82, '9778d5d219c5080b9a6a17bef029331c', 'Shan Taza Dhania Powder', '', '2017-07-31 01:33:06', '2017-07-31 01:46:17', 8, 14, 20, 0, '', NULL, NULL, '81.jpg', 0, 1),
(83, 'fe9fc289c3ff0af142b6d3bead98a923', 'Shan Chaat Masala', '', '2017-07-31 01:33:06', '2017-07-31 01:46:17', 8, 14, 20, 0, '', NULL, NULL, '82.jpg', 0, 1),
(84, '68d30a9594728bc39aa24be94b319d21', 'National Chicken Jalfrezi', '', '2017-07-31 01:33:06', '2017-07-31 01:46:17', 8, 14, 20, 0, '', NULL, NULL, '83.jpg', 0, 1),
(85, '3ef815416f775098fe977004015c6193', 'National Butter Chuicken Masala', '', '2017-07-31 01:33:07', '2017-07-31 01:46:18', 8, 14, 20, 0, '', NULL, NULL, '84.jpg', 0, 1),
(86, '93db85ed909c13838ff95ccfa94cebd9', 'Shan Tandoori Masala', '', '2017-07-31 01:33:07', '2017-07-31 01:46:18', 8, 14, 20, 0, '', NULL, NULL, '85.jpg', 0, 1),
(87, 'c7e1249ffc03eb9ded908c236bd1996d', 'National Korma Masala', '', '2017-07-31 01:33:07', '2017-07-31 01:46:18', 8, 14, 20, 0, '', NULL, NULL, '86.jpg', 0, 1),
(88, '2a38a4a9316c49e5a833517c45d31070', 'National Cumin Powder', '', '2017-07-31 01:33:07', '2017-07-31 01:46:18', 8, 14, 20, 0, '', NULL, NULL, '87.jpg', 0, 1),
(89, '7647966b7343c29048673252e490f736', 'Cinnamon (Dar Chini)', '', '2017-07-31 01:33:07', '2017-07-31 01:46:18', 8, 14, 20, 0, '', NULL, NULL, '88.jpg', 0, 1),
(90, '8613985ec49eb8f757ae6439e879bb2a', 'Red Chilli (lal Mirch)', '', '2017-07-31 01:33:07', '2017-07-31 01:46:18', 8, 14, 20, 0, '', NULL, NULL, '89.jpg', 0, 1),
(91, '54229abfcfa5649e7003b83dd4755294', 'National Mixed Pickle', '', '2017-07-31 01:33:07', '2017-07-31 01:46:18', 8, 14, 21, 0, '', NULL, NULL, '91.jpg', 0, 1),
(92, '92cc227532d17e56e07902b254dfad10', 'National Mixed Pickle', '', '2017-07-31 01:33:07', '2017-07-31 01:46:18', 8, 14, 21, 0, '', NULL, NULL, '91.jpg', 0, 1),
(93, '98dce83da57b0395e163467c9dae521b', 'Shangrila Mixed Pickle in Oil', '', '2017-07-31 01:33:08', '2017-07-31 01:46:18', 8, 14, 21, 0, '', NULL, NULL, '94.jpg', 0, 1),
(94, 'f4b9ec30ad9f68f89b29639786cb62ef', 'Shan Mixe Pickle', '', '2017-07-31 01:33:08', '2017-07-31 01:46:18', 8, 14, 21, 0, '', NULL, NULL, '93.jpg', 0, 1),
(95, '812b4ba287f5ee0bc9d43bbf5bbe87fb', 'Shangrila Mixed Pickle in Oil', '', '2017-07-31 01:33:08', '2017-07-31 01:46:18', 8, 14, 21, 0, '', NULL, NULL, '94.jpg', 0, 1),
(96, '26657d5ff9020d2abefe558796b99584', 'National Hyderabadi Mix Pickle', '', '2017-07-31 01:33:08', '2017-07-31 01:46:18', 8, 14, 21, 0, '', NULL, NULL, '96.jpg', 0, 1),
(97, 'e2ef524fbf3d9fe611d5a8e90fefdc9c', 'National Hyderabadi Mix Pickle', '', '2017-07-31 01:33:08', '2017-07-31 01:46:18', 8, 14, 21, 0, '', NULL, NULL, '96.jpg', 0, 1),
(98, 'ed3d2c21991e3bef5e069713af9fa6ca', 'Shezan Satrangi Mix Pickle', '', '2017-07-31 01:33:08', '2017-07-31 01:46:18', 8, 14, 21, 0, '', NULL, NULL, '97.jpg', 0, 1),
(99, 'ac627ab1ccbdb62ec96e702f07f6425b', 'Shan Mango Pickle', '', '2017-07-31 01:33:08', '2017-07-31 01:46:18', 8, 14, 21, 0, '', NULL, NULL, '98.jpg', 0, 1),
(100, 'f899139df5e1059396431415e770c6dd', 'Mitchell''s Mixed Pickle', '', '2017-07-31 01:33:09', '2017-07-31 01:46:18', 8, 14, 21, 0, '', NULL, NULL, '99.jpg', 0, 1),
(101, '38b3eff8baf56627478ec76a704e9b52', 'National Mango Pickle', '', '2017-07-31 01:33:09', '2017-07-31 01:46:18', 8, 14, 21, 0, '', NULL, NULL, '101.jpg', 0, 1),
(102, 'ec8956637a99787bd197eacd77acce5e', 'National Mango Pickle', '', '2017-07-31 01:33:09', '2017-07-31 01:46:18', 8, 14, 21, 0, '', NULL, NULL, '101.jpg', 0, 1),
(103, '6974ce5ac660610b44d9b9fed0ff9548', 'National Garlic Pickle', '', '2017-07-31 01:33:09', '2017-07-31 01:46:18', 8, 14, 21, 0, '', NULL, NULL, '102.jpg', 0, 1),
(104, 'c9e1074f5b3f9fc8ea15d152add07294', 'Shezan Chilli & Lemon Pickle In Vinegar', '', '2017-07-31 01:33:09', '2017-07-31 01:46:18', 8, 14, 21, 0, '', NULL, NULL, '103.jpg', 0, 1),
(105, '65b9eea6e1cc6bb9f0cd2a47751a186f', 'Shezan Chilli  Pickle In Vinegar', '', '2017-07-31 01:33:09', '2017-07-31 01:46:18', 8, 14, 21, 0, '', NULL, NULL, '104.jpg', 0, 1),
(106, 'f0935e4cd5920aa6c7c996a5ee53a70f', 'Natiional Chilli Pickle', '', '2017-07-31 01:33:10', '2017-07-31 01:46:18', 8, 14, 21, 0, '', NULL, NULL, '105.jpg', 0, 1),
(107, 'a97da629b098b75c294dffdc3e463904', 'Shangril Mango Pickle in Oil', '', '2017-07-31 01:33:10', '2017-07-31 01:46:18', 8, 14, 21, 0, '', NULL, NULL, '106.jpg', 0, 1),
(108, 'a3c65c2974270fd093ee8a9bf8ae7d0b', 'Sheza Mix Vegetable Pickle', '', '2017-07-31 01:33:10', '2017-07-31 01:46:18', 8, 14, 21, 0, '', NULL, NULL, '107.jpg', 0, 1),
(109, '2723d092b63885e0d7c260cc007e8b9d', 'Mitchell''s Plum Chutney', '', '2017-07-31 01:33:10', '2017-07-31 01:46:18', 8, 14, 21, 0, '', NULL, NULL, '108.jpg', 0, 1),
(110, '5f93f983524def3dca464469d2cf9f3e', 'Shangrila Synthetic Vinegar Sauce', '', '2017-07-31 01:33:10', '2017-07-31 01:46:19', 8, 14, 22, 0, '', NULL, NULL, '111.jpg', 0, 1),
(111, '698d51a19d8a121ce581499d7b701668', 'National Synthetic Vinegar White', '', '2017-07-31 01:33:10', '2017-07-31 01:46:18', 8, 14, 22, 0, '', NULL, NULL, '110.jpg', 0, 1),
(112, '7f6ffaa6bb0b408017b62254211691b5', 'Shangrila Synthetic Vinegar Sauce', '', '2017-07-31 01:33:10', '2017-07-31 01:46:19', 8, 14, 22, 0, '', NULL, NULL, '111.jpg', 0, 1),
(113, '73278a4a86960eeb576a8fd4c9ec6997', 'Mitchell''s Apple Cider Vinegar', '', '2017-07-31 01:33:11', '2017-07-31 01:46:19', 8, 14, 22, 0, '', NULL, NULL, '112.jpg', 0, 1),
(114, '5fd0b37cd7dbbb00f97ba6ce92bf5add', 'Mitchell''s Fruit Vinegar', '', '2017-07-31 01:33:11', '2017-07-31 01:46:19', 8, 14, 22, 0, '', NULL, NULL, '113.jpg', 0, 1),
(115, '2b44928ae11fb9384c4cf38708677c48', 'Mitchell''s Synthetic Vinegar', '', '2017-07-31 01:33:11', '2017-07-31 01:46:19', 8, 14, 22, 0, '', NULL, NULL, '114.jpg', 0, 1),
(116, 'c45147dee729311ef5b5c3003946c48f', 'Knorr Chicken Cubes', '', '2017-07-31 01:33:11', '2017-07-31 01:46:19', 8, 14, 23, 0, '', NULL, NULL, '115.jpg', 0, 1),
(117, 'eb160de1de89d9058fcb0b968dbbbd68', 'Green Cardamom (Small Elachi)', '', '2017-07-31 01:33:11', '2017-07-31 01:46:19', 8, 14, 23, 0, '', NULL, NULL, '116.jpg', 0, 1),
(118, '5ef059938ba799aaa845e1c2e8a762bd', 'National Ginger Garlic Paste', '', '2017-07-31 01:33:11', '2017-07-31 01:46:19', 8, 14, 23, 0, '', NULL, NULL, '117.jpg', 0, 1),
(119, '07e1cd7dca89a1678042477183b7ac3f', 'Natiional Garlic Paste', '', '2017-07-31 01:33:12', '2017-07-31 01:46:19', 8, 14, 23, 0, '', NULL, NULL, '118.jpg', 0, 1),
(120, 'da4fb5c6e93e74d3df8527599fa62642', 'Mitchell''s Tomato Puree', '', '2017-07-31 01:33:12', '2017-07-31 01:46:19', 8, 14, 23, 0, '', NULL, NULL, '119.jpg', 0, 1),
(121, '4c56ff4ce4aaf9573aa5dff913df997a', 'Shan Garlic Paste', '', '2017-07-31 01:33:12', '2017-07-31 01:46:19', 8, 14, 23, 0, '', NULL, NULL, '120.jpg', 0, 1),
(122, 'a0a080f42e6f13b3a2df133f073095dd', 'Shan Ginger Paste', '', '2017-07-31 01:33:12', '2017-07-31 01:46:19', 8, 14, 23, 0, '', NULL, NULL, '121.jpg', 0, 1),
(123, '202cb962ac59075b964b07152d234b70', 'Shangrila Ginger Garlic Paste', '', '2017-07-31 01:33:12', '2017-07-31 01:46:19', 8, 14, 23, 0, '', NULL, NULL, '122.jpg', 0, 1),
(124, 'c8ffe9a587b126f152ed3d89a146b445', 'Shan Ginger Garlic Past', '', '2017-07-31 01:33:12', '2017-07-31 01:46:19', 8, 14, 23, 0, '', NULL, NULL, '123.jpg', 0, 1),
(125, '3def184ad8f4755ff269862ea77393dd', 'National Ginger Paste', '', '2017-07-31 01:33:12', '2017-07-31 01:46:19', 8, 14, 23, 0, '', NULL, NULL, '124.jpg', 0, 1),
(126, '069059b7ef840f0c74a814ec9237b6ec', 'Shangril Ginger Paste', '', '2017-07-31 01:33:13', '2017-07-31 01:46:19', 8, 14, 23, 0, '', NULL, NULL, '125.jpg', 0, 1),
(127, 'ec5decca5ed3d6b8079e2e7e7bacc9f2', 'Knorr Rolls & Wraps Mix Beef Masaledar', '', '2017-07-31 01:33:13', '2017-07-31 01:46:19', 8, 14, 24, 0, '', NULL, NULL, '126.jpg', 0, 1),
(128, '76dc611d6ebaafc66cc0879c71b5db5c', 'Knorr Rolls & Wraps Chicken Paratha Mix', '', '2017-07-31 01:33:13', '2017-07-31 01:46:19', 8, 14, 24, 0, '', NULL, NULL, '127.jpg', 0, 1),
(129, 'd1f491a404d6854880943e5c3cd9ca25', 'Knorr Crispy Fried Chicken Mix', '', '2017-07-31 01:33:13', '2017-07-31 01:46:19', 8, 14, 24, 0, '', NULL, NULL, '128.jpg', 0, 1),
(130, '9b8619251a19057cff70779273e95aa6', 'Rafhan Cornflour', '', '2017-07-31 01:33:13', '2017-07-31 01:46:19', 8, 14, 24, 0, '', NULL, NULL, '129.jpg', 0, 1),
(131, '1afa34a7f984eeabdbb0a7d494132ee5', 'Knorr Chef''s Nuggets Mix', '', '2017-07-31 01:33:13', '2017-07-31 01:46:19', 8, 14, 24, 0, '', NULL, NULL, '130.jpg', 0, 1),
(132, '65ded5353c5ee48d0b7d48c591b8f430', 'Dalda VTF Banaspati Ghee', '', '2017-07-31 01:33:13', '2017-07-31 01:46:20', 8, 15, 25, 0, '', NULL, NULL, '139.jpg', 0, 1),
(133, '9fc3d7152ba9336a670e36d0ed79bc43', 'Dalda Cooking Oil', '', '2017-07-31 01:33:13', '2017-07-31 01:46:20', 8, 15, 25, 0, '', NULL, NULL, '140.jpg', 0, 1),
(134, '02522a2b2726fb0a03bb19f2d8d9524d', 'Dalda Cooking Oil', '', '2017-07-31 01:33:14', '2017-07-31 01:46:20', 8, 15, 25, 0, '', NULL, NULL, '140.jpg', 0, 1),
(135, '7f1de29e6da19d22b51c68001e7e0e54', 'Dalda Canola Oil', '', '2017-07-31 01:33:14', '2017-07-31 01:46:20', 8, 15, 25, 0, '', NULL, NULL, '138.jpg', 0, 1),
(136, '42a0e188f5033bc65bf8d78622277c4e', 'Dalda Canola Oil', '', '2017-07-31 01:33:14', '2017-07-31 01:46:20', 8, 15, 25, 0, '', NULL, NULL, '138.jpg', 0, 1),
(137, '3988c7f88ebcb58c6ce932b957b6f332', 'Dalda Cooking Oil', '', '2017-07-31 01:33:14', '2017-07-31 01:46:20', 8, 15, 25, 0, '', NULL, NULL, '140.jpg', 0, 1),
(138, '013d407166ec4fa56eb1e1f8cbe183b9', 'Dalda VTF Banaspati Ghee', '', '2017-07-31 01:33:14', '2017-07-31 01:46:20', 8, 15, 25, 0, '', NULL, NULL, '139.jpg', 0, 1),
(139, 'e00da03b685a0dd18fb6a08af0923de0', 'Dalda Canola Oil', '', '2017-07-31 01:33:14', '2017-07-31 01:46:20', 8, 15, 25, 0, '', NULL, NULL, '138.jpg', 0, 1),
(140, '1385974ed5904a438616ff7bdb3f7439', 'Dalda VTF Banaspati Ghee', '', '2017-07-31 01:33:14', '2017-07-31 01:46:20', 8, 15, 25, 0, '', NULL, NULL, '139.jpg', 0, 1),
(141, '0f28b5d49b3020afeecd95b4009adf4c', 'Dalda Cooking Oil', '', '2017-07-31 01:33:14', '2017-07-31 01:46:20', 8, 15, 25, 0, '', NULL, NULL, '140.jpg', 0, 1),
(142, 'a8baa56554f96369ab93e4f3bb068c22', 'Dalda Extra Virgin Olive Oil', '', '2017-07-31 01:33:15', '2017-07-31 01:46:20', 8, 15, 25, 0, '', NULL, NULL, '142.jpg', 0, 1),
(143, '903ce9225fca3e988c2af215d4e544d3', 'Dalda Extra Virgin Olive Oil', '', '2017-07-31 01:33:15', '2017-07-31 01:46:20', 8, 15, 25, 0, '', NULL, NULL, '142.jpg', 0, 1),
(144, '0a09c8844ba8f0936c20bd791130d6b6', 'Dalda Planta Cooking Oil', '', '2017-07-31 01:33:15', '2017-07-31 01:46:20', 8, 15, 25, 0, '', NULL, NULL, '144.jpg', 0, 1),
(145, '2b24d495052a8ce66358eb576b8912c8', 'Dalda Planta Cooking Oil', '', '2017-07-31 01:33:15', '2017-07-31 01:46:20', 8, 15, 25, 0, '', NULL, NULL, '144.jpg', 0, 1),
(146, 'a5e00132373a7031000fd987a3c9f87b', 'Habib Banaspati Ghee', '', '2017-07-31 01:33:15', '2017-07-31 01:46:20', 8, 15, 26, 0, '', NULL, NULL, '147.jpg', 0, 1),
(147, '8d5e957f297893487bd98fa830fa6413', 'Habib Cooking Oil', '', '2017-07-31 01:33:15', '2017-07-31 01:46:20', 8, 15, 26, 0, '', NULL, NULL, '150.jpg', 0, 1),
(148, '47d1e990583c9c67424d369f3414728e', 'Habib Banaspati Ghee', '', '2017-07-31 01:33:15', '2017-07-31 01:46:20', 8, 15, 26, 0, '', NULL, NULL, '147.jpg', 0, 1),
(149, 'f2217062e9a397a1dca429e7d70bc6ca', 'Habib Cooking Oil', '', '2017-07-31 01:33:15', '2017-07-31 01:46:20', 8, 15, 26, 0, '', NULL, NULL, '150.jpg', 0, 1),
(150, '7ef605fc8dba5425d6965fbd4c8fbe1f', 'Habib VTF Banaspati Ghee', '', '2017-07-31 01:33:15', '2017-07-31 01:46:20', 8, 15, 26, 0, '', NULL, NULL, '149.jpg', 0, 1),
(151, 'a8f15eda80c50adb0e71943adc8015cf', 'Habib Cooking Oil', '', '2017-07-31 01:33:16', '2017-07-31 01:46:20', 8, 15, 26, 0, '', NULL, NULL, '150.jpg', 0, 1),
(152, '37a749d808e46495a8da1e5352d03cae', 'Habib Super Cooking Oil', '', '2017-07-31 01:33:16', '2017-07-31 01:46:20', 8, 15, 26, 0, '', NULL, NULL, '151.jpg', 0, 1),
(153, 'b3e3e393c77e35a4a3f3cbd1e429b5dc', 'Soya Supreme Cooking Oil', '', '2017-07-31 01:33:16', '2017-07-31 01:46:21', 8, 15, 27, 0, '', NULL, NULL, '157.jpg', 0, 1),
(154, '1d7f7abc18fcb43975065399b0d1e48e', 'Soya Supreme Cooking Oil', '', '2017-07-31 01:33:16', '2017-07-31 01:46:21', 8, 15, 27, 0, '', NULL, NULL, '157.jpg', 0, 1),
(155, '2a79ea27c279e471f4d180b08d62b00a', 'Soya Supreme Banaspati Ghee', '', '2017-07-31 01:33:16', '2017-07-31 01:46:20', 8, 15, 27, 0, '', NULL, NULL, '155.jpg', 0, 1),
(156, '1c9ac0159c94d8d0cbedc973445af2da', 'Soya Supreme Banaspati Ghee', '', '2017-07-31 01:33:16', '2017-07-31 01:46:20', 8, 15, 27, 0, '', NULL, NULL, '155.jpg', 0, 1),
(157, '6c4b761a28b734fe93831e3fb400ce87', 'Soya Supreme Cooking Oil', '', '2017-07-31 01:33:16', '2017-07-31 01:46:21', 8, 15, 27, 0, '', NULL, NULL, '157.jpg', 0, 1),
(158, '06409663226af2f3114485aa4e0a23b4', 'Soya Supreme Cooking Oil', '', '2017-07-31 01:33:16', '2017-07-31 01:46:21', 8, 15, 27, 0, '', NULL, NULL, '157.jpg', 0, 1),
(159, '140f6969d5213fd0ece03148e62e461e', 'Mezan Banaspati Ghee', '', '2017-07-31 01:33:17', '2017-07-31 01:46:21', 8, 15, 28, 0, '', NULL, NULL, '165.jpg', 0, 1),
(160, 'b73ce398c39f506af761d2277d853a92', 'Mezan Canola Oil', '', '2017-07-31 01:33:17', '2017-07-31 01:46:21', 8, 15, 28, 0, '', NULL, NULL, '160.jpg', 0, 1),
(161, 'bd4c9ab730f5513206b999ec0d90d1fb', 'Mezan Canola Oil', '', '2017-07-31 01:33:17', '2017-07-31 01:46:21', 8, 15, 28, 0, '', NULL, NULL, '160.jpg', 0, 1),
(162, '82aa4b0af34c2313a562076992e50aa3', 'Mezan Cooking Oil', '', '2017-07-31 01:33:17', '2017-07-31 01:46:21', 8, 15, 28, 0, '', NULL, NULL, '161.jpg', 0, 1),
(163, '0777d5c17d4066b82ab86dff8a46af6f', 'Mezan Banaspati Ghee', '', '2017-07-31 01:33:17', '2017-07-31 01:46:21', 8, 15, 28, 0, '', NULL, NULL, '165.jpg', 0, 1),
(164, 'fa7cdfad1a5aaf8370ebeda47a1ff1c3', 'Mezan Sunlower Oil', '', '2017-07-31 01:33:17', '2017-07-31 01:46:21', 8, 15, 28, 0, '', NULL, NULL, '164.jpg', 0, 1),
(165, '9766527f2b5d3e95d4a733fcfb77bd7e', 'Mezan Sunlower Oil', '', '2017-07-31 01:33:17', '2017-07-31 01:46:21', 8, 15, 28, 0, '', NULL, NULL, '164.jpg', 0, 1),
(166, '7e7757b1e12abcb736ab9a754ffb617a', 'Mezan Banaspati Ghee', '', '2017-07-31 01:33:17', '2017-07-31 01:46:21', 8, 15, 28, 0, '', NULL, NULL, '165.jpg', 0, 1),
(167, '5878a7ab84fb43402106c575658472fa', 'Olper''s Tarrka Desi Ghee Tin', '', '2017-07-31 01:33:17', '2017-07-31 01:46:21', 8, 15, 29, 0, '', NULL, NULL, '166.jpg', 0, 1),
(168, '006f52e9102a8d3be2fe5614f42ba989', 'Tullo Special Banaspati Ghee', '', '2017-07-31 01:33:17', '2017-07-31 01:46:21', 8, 15, 30, 0, '', NULL, NULL, '167.jpg', 0, 1),
(169, '3636638817772e42b59d74cff571fbb3', 'Tullo Cooking Oil', '', '2017-07-31 01:33:18', '2017-07-31 01:46:21', 8, 15, 30, 0, '', NULL, NULL, '170.jpg', 0, 1),
(170, '149e9677a5989fd342ae44213df68868', 'Tullo Cooking Oil', '', '2017-07-31 01:33:18', '2017-07-31 01:46:21', 8, 15, 30, 0, '', NULL, NULL, '170.jpg', 0, 1),
(171, 'a4a042cf4fd6bfb47701cbc8a1653ada', 'Tullo Cooking Oil', '', '2017-07-31 01:33:18', '2017-07-31 01:46:21', 8, 15, 30, 0, '', NULL, NULL, '170.jpg', 0, 1),
(172, '1ff8a7b5dc7a7d1f0ed65aaa29c04b1e', 'Tullo Banaspati Ghee', '', '2017-07-31 01:33:18', '2017-07-31 01:46:21', 8, 15, 30, 0, '', NULL, NULL, '171.jpg', 0, 1),
(173, 'f7e6c85504ce6e82442c770f7c8606f0', 'Rafhan Corn Oil', '', '2017-07-31 01:33:18', '2017-07-31 01:46:21', 8, 15, 31, 0, '', NULL, NULL, '172.jpg', 0, 1),
(174, 'bf8229696f7a3bb4700cfddef19fa23f', 'Kisan Cooking Oil', '', '2017-07-31 01:33:18', '2017-07-31 01:46:21', 8, 15, 32, 0, '', NULL, NULL, '174.jpg', 0, 1),
(175, '82161242827b703e6acf9c726942a1e4', 'Kisan Cooking Oil', '', '2017-07-31 01:33:18', '2017-07-31 01:46:21', 8, 15, 32, 0, '', NULL, NULL, '174.jpg', 0, 1),
(176, '38af86134b65d0f10fe33d30dd76442e', 'Kisan Banaspati Ghee', '', '2017-07-31 01:33:18', '2017-07-31 01:46:21', 8, 15, 32, 0, '', NULL, NULL, '176.jpg', 0, 1),
(177, '96da2f590cd7246bbde0051047b0d6f7', 'Kisan Banaspati Ghee', '', '2017-07-31 01:33:19', '2017-07-31 01:46:21', 8, 15, 32, 0, '', NULL, NULL, '176.jpg', 0, 1),
(178, '8f85517967795eeef66c225f7883bdcb', 'Eva Cooking Oil', '', '2017-07-31 01:33:19', '2017-07-31 01:46:21', 8, 15, 33, 0, '', NULL, NULL, '180.jpg', 0, 1),
(179, '8f53295a73878494e9bc8dd6c3c7104f', 'Eva Canola Oil', '', '2017-07-31 01:33:19', '2017-07-31 01:46:21', 8, 15, 33, 0, '', NULL, NULL, '178.jpg', 0, 1),
(180, '045117b0e0a11a242b9765e79cbf113f', 'Eva Cooking Oil', '', '2017-07-31 01:33:19', '2017-07-31 01:46:21', 8, 15, 33, 0, '', NULL, NULL, '180.jpg', 0, 1),
(181, 'fc221309746013ac554571fbd180e1c8', 'Eva Cooking Oil', '', '2017-07-31 01:33:19', '2017-07-31 01:46:21', 8, 15, 33, 0, '', NULL, NULL, '180.jpg', 0, 1),
(182, '4c5bde74a8f110656874902f07378009', 'Eva Sunflower Oil', '', '2017-07-31 01:33:20', '2017-07-31 01:46:22', 8, 15, 33, 0, '', NULL, NULL, '184.jpg', 0, 1),
(183, 'cedebb6e872f539bef8c3f919874e9d7', 'Eva VTF Banaspati Ghee', '', '2017-07-31 01:33:20', '2017-07-31 01:46:21', 8, 15, 33, 0, '', NULL, NULL, '183.jpg', 0, 1),
(184, '6cdd60ea0045eb7a6ec44c54d29ed402', 'Eva VTF Banaspati Ghee', '', '2017-07-31 01:33:20', '2017-07-31 01:46:21', 8, 15, 33, 0, '', NULL, NULL, '183.jpg', 0, 1),
(185, 'eecca5b6365d9607ee5a9d336962c534', 'Eva Sunflower Oil', '', '2017-07-31 01:33:20', '2017-07-31 01:46:22', 8, 15, 33, 0, '', NULL, NULL, '184.jpg', 0, 1),
(186, '9872ed9fc22fc182d371c3e9ed316094', 'Nestle Mineral Water', '', '2017-07-31 01:33:20', '2017-07-31 01:46:22', 9, 7, 34, 0, '', NULL, NULL, '187.jpg', 0, 1),
(187, '31fefc0e570cb3860f2a6d4b38c6490d', 'Nestle Mineral Water', '', '2017-07-31 01:33:20', '2017-07-31 01:46:22', 9, 7, 34, 0, '', NULL, NULL, '187.jpg', 0, 1),
(188, '9dcb88e0137649590b755372b040afad', 'Nestle Mineral Water', '', '2017-07-31 01:33:20', '2017-07-31 01:46:22', 9, 7, 34, 0, '', NULL, NULL, '187.jpg', 0, 1),
(189, 'a2557a7b2e94197ff767970b67041697', 'Aquafina Mineral Water', '', '2017-07-31 01:33:21', '2017-07-31 01:46:22', 9, 7, 34, 0, '', NULL, NULL, '189.jpg', 0, 1),
(190, 'cfecdb276f634854f3ef915e2e980c31', 'Aquafina Mineral Water', '', '2017-07-31 01:33:21', '2017-07-31 01:46:22', 9, 7, 34, 0, '', NULL, NULL, '189.jpg', 0, 1),
(191, '0aa1883c6411f7873cb83dacb17b0afc', 'Red Bull', '', '2017-07-31 01:33:21', '2017-07-31 01:46:22', 9, 16, 35, 0, '', NULL, NULL, '190.jpg', 0, 1),
(192, '58a2fc6ed39fd083f55d4182bf88826d', 'Nestle Milo RTD', '', '2017-07-31 01:33:21', '2017-07-31 01:46:22', 9, 16, 35, 0, '', NULL, NULL, '191.jpg', 0, 1),
(193, 'bd686fd640be98efaae0091fa301e613', 'Sting Berry Blast', '', '2017-07-31 01:33:21', '2017-07-31 01:46:22', 9, 16, 35, 0, '', NULL, NULL, '192.jpg', 0, 1),
(194, 'a597e50502f5ff68e3e25b9114205d4a', 'Red Bull Sugar Free', '', '2017-07-31 01:33:21', '2017-07-31 01:46:22', 9, 16, 35, 0, '', NULL, NULL, '193.jpg', 0, 1),
(195, '0336dcbab05b9d5ad24f4333c7658a0e', 'Nestle Milo Drink', '', '2017-07-31 01:33:21', '2017-07-31 01:46:22', 9, 16, 35, 0, '', NULL, NULL, '194.jpg', 0, 1),
(196, '084b6fbb10729ed4da8c3d3f5a3ae7c9', 'Nestle Milo Drinking Powder', '', '2017-07-31 01:33:22', '2017-07-31 01:46:22', 9, 16, 35, 0, '', NULL, NULL, '195.jpg', 0, 1),
(197, '85d8ce590ad8981ca2c8286f79f59954', 'Epic Energy Drink', '', '2017-07-31 01:33:22', '2017-07-31 01:46:22', 9, 16, 35, 0, '', NULL, NULL, '196.jpg', 0, 1),
(198, '0e65972dce68dad4d52d063967f0a705', 'Nestle Fruita Vital Chaunsa Fruit Nectar', '', '2017-07-31 01:33:22', '2017-07-31 01:46:22', 9, 16, 36, 0, '', NULL, NULL, '197.jpg', 0, 1),
(199, '84d9ee44e457ddef7f2c4f25dc8fa865', 'Nestle Nesfruta Mango Fruit Drink', '', '2017-07-31 01:33:22', '2017-07-31 01:46:22', 9, 16, 36, 0, '', NULL, NULL, '198.jpg', 0, 1),
(200, '3644a684f98ea8fe223c713b77189a77', 'Nestle Fruita Vital Peach Fruit Drink', '', '2017-07-31 01:33:22', '2017-07-31 01:46:22', 9, 16, 36, 0, '', NULL, NULL, '199.jpg', 0, 1),
(201, '757b505cfd34c64c85ca5b5690ee5293', 'Nestle Fruita Vital Red Grape Fruit Drink', '', '2017-07-31 01:33:22', '2017-07-31 01:46:22', 9, 16, 36, 0, '', NULL, NULL, '200.jpg', 0, 1),
(202, '854d6fae5ee42911677c739ee1734486', 'Nestle Nesfruta Apple Fruit Drink', '', '2017-07-31 01:33:23', '2017-07-31 01:46:22', 9, 16, 36, 0, '', NULL, NULL, '201.jpg', 0, 1),
(203, 'e2c0be24560d78c5e599c2a9c9d0bbd2', 'Nestle Fruita Vital Kinnow Fruit Nectar', '', '2017-07-31 01:33:23', '2017-07-31 01:46:22', 9, 16, 36, 0, '', NULL, NULL, '202.jpg', 0, 1),
(204, '274ad4786c3abca69fa097b85867d9a4', 'Nestle Fruita Vital White Grape & Lychee', '', '2017-07-31 01:33:23', '2017-07-31 01:46:22', 9, 16, 36, 0, '', NULL, NULL, '203.jpg', 0, 1),
(205, 'eae27d77ca20db309e056e3d2dcd7d69', 'Rani Pulpy Orange', '', '2017-07-31 01:33:23', '2017-07-31 01:46:22', 9, 16, 36, 0, '', NULL, NULL, '204.jpg', 0, 1),
(206, '7eabe3a1649ffa2b3ff8c02ebfd5659f', 'Nestle Fruita Vital Guava Fruit Nectar', '', '2017-07-31 01:33:23', '2017-07-31 01:46:23', 9, 16, 36, 0, '', NULL, NULL, '205.jpg', 0, 1),
(207, '69adc1e107f7f7d035d7baf04342e1ca', 'Nestle Fruita Vital Apple Fruit Nectar', '', '2017-07-31 01:33:23', '2017-07-31 01:46:23', 9, 16, 36, 0, '', NULL, NULL, '206.jpg', 0, 1),
(208, '091d584fced301b442654dd8c23b3fc9', 'Shezan All Pure Orange Juice', '', '2017-07-31 01:33:23', '2017-07-31 01:46:23', 9, 16, 36, 0, '', NULL, NULL, '207.jpg', 0, 1),
(209, 'b1d10e7bafa4421218a51b1e1f1b0ba2', 'Rani Floats Mango', '', '2017-07-31 01:33:23', '2017-07-31 01:46:23', 9, 16, 36, 0, '', NULL, NULL, '208.jpg', 0, 1),
(210, '6f3ef77ac0e3619e98159e9b6febf557', 'Shezan All Pure Mango Juice', '', '2017-07-31 01:33:23', '2017-07-31 01:46:23', 9, 16, 36, 0, '', NULL, NULL, '209.jpg', 0, 1),
(211, 'eb163727917cbba1eea208541a643e74', 'Shezan All Pure Grape Juice', '', '2017-07-31 01:33:24', '2017-07-31 01:46:23', 9, 16, 36, 0, '', NULL, NULL, '210.jpg', 0, 1),
(212, '1534b76d325a8f591b52d302e7181331', 'Shezan All Pure Guava Juice', '', '2017-07-31 01:33:24', '2017-07-31 01:46:23', 9, 16, 36, 0, '', NULL, NULL, '211.jpg', 0, 1),
(213, '979d472a84804b9f647bc185a877a8b5', '7up Buddy Pack', '', '2017-07-31 01:33:24', '2017-07-31 01:46:23', 9, 16, 37, 0, '', NULL, NULL, '212.jpg', 0, 1),
(214, 'ca46c1b9512a7a8315fa3c5a946e8265', 'Pepsi Tin Pack', '', '2017-07-31 01:33:24', '2017-07-31 01:46:23', 9, 16, 37, 0, '', NULL, NULL, '213.jpg', 0, 1),
(215, '3b8a614226a953a8cd9526fca6fe9ba5', '7 Up Bottle', '', '2017-07-31 01:33:24', '2017-07-31 01:46:23', 9, 16, 37, 0, '', NULL, NULL, '214.jpg', 0, 1),
(216, '45fbc6d3e05ebd93369ce542e8f2322d', 'Pepsi Bottle', '', '2017-07-31 01:33:24', '2017-07-31 01:46:23', 9, 16, 37, 0, '', NULL, NULL, '215.jpg', 0, 1),
(217, '63dc7ed1010d3c3b8269faf0ba7491d4', 'Mirinda Bottle', '', '2017-07-31 01:33:24', '2017-07-31 01:46:23', 9, 16, 37, 0, '', NULL, NULL, '216.jpg', 0, 1),
(218, 'e96ed478dab8595a7dbda4cbcbee168f', 'Coca Cola (Coke) Tin Pack', '', '2017-07-31 01:33:24', '2017-07-31 01:46:23', 9, 16, 37, 0, '', NULL, NULL, '217.jpg', 0, 1),
(219, 'c0e190d8267e36708f955d7ab048990d', '7Up Diet Bottle', '', '2017-07-31 01:33:24', '2017-07-31 01:46:23', 9, 16, 37, 0, '', NULL, NULL, '218.jpg', 0, 1),
(220, 'ec8ce6abb3e952a85b8551ba726a1227', 'Mountain Dew Bottle', '', '2017-07-31 01:33:25', '2017-07-31 01:46:23', 9, 16, 37, 0, '', NULL, NULL, '219.jpg', 0, 1),
(221, '060ad92489947d410d897474079c1477', '7up Tin Pack', '', '2017-07-31 01:33:25', '2017-07-31 01:46:23', 9, 16, 37, 0, '', NULL, NULL, '220.jpg', 0, 1),
(222, 'bcbe3365e6ac95ea2c0343a2395834dd', 'Coca Cola (Coke) Bottle', '', '2017-07-31 01:33:25', '2017-07-31 01:46:23', 9, 16, 37, 0, '', NULL, NULL, '221.jpg', 0, 1),
(223, '115f89503138416a242f40fb7d7f338e', 'Sprite Bottle', '', '2017-07-31 01:33:25', '2017-07-31 01:46:23', 9, 16, 37, 0, '', NULL, NULL, '222.jpg', 0, 1),
(224, '13fe9d84310e77f13a6d184dbf1232f3', 'Coca Cola (Coke) Diet', '', '2017-07-31 01:33:25', '2017-07-31 01:46:23', 9, 16, 37, 0, '', NULL, NULL, '223.jpg', 0, 1),
(225, 'd1c38a09acc34845c6be3a127a5aacaf', 'Mountain Dew Tin Pack', '', '2017-07-31 01:33:25', '2017-07-31 01:46:23', 9, 16, 37, 0, '', NULL, NULL, '224.jpg', 0, 1),
(226, '9cfdf10e8fc047a44b08ed031e1f0ed1', 'Fanta Orange Bottle', '', '2017-07-31 01:33:25', '2017-07-31 01:46:23', 9, 16, 37, 0, '', NULL, NULL, '225.jpg', 0, 1),
(227, '705f2172834666788607efbfca35afb3', 'Fanta Orange Tin Pack', '', '2017-07-31 01:33:26', '2017-07-31 01:46:23', 9, 16, 37, 0, '', NULL, NULL, '226.jpg', 0, 1),
(228, '74db120f0a8e5646ef5a30154e9f6deb', 'Sprite Zero Bottle', '', '2017-07-31 01:33:26', '2017-07-31 01:46:23', 9, 16, 37, 0, '', NULL, NULL, '227.jpg', 0, 1),
(229, '57aeee35c98205091e18d1140e9f38cf', 'Pepsi Diet Bottle', '', '2017-07-31 01:33:26', '2017-07-31 01:46:23', 9, 16, 37, 0, '', NULL, NULL, '228.jpg', 0, 1),
(230, '6da9003b743b65f4c0ccd295cc484e57', 'Bake Parlor Icecream Sysups', '', '2017-07-31 01:33:26', '2017-07-31 01:46:23', 9, 16, 38, 0, '', NULL, NULL, '229.jpg', 0, 1),
(231, '9b04d152845ec0a378394003c96da594', 'Hamdard Rooh Afza', '', '2017-07-31 01:33:26', '2017-07-31 01:46:24', 9, 16, 38, 0, '', NULL, NULL, '230.jpg', 0, 1),
(232, 'be83ab3ecd0db773eb2dc1b0a17836a1', 'Qarshi Jam-e-Shireen', '', '2017-07-31 01:33:26', '2017-07-31 01:46:24', 9, 16, 38, 0, '', NULL, NULL, '231.jpg', 0, 1),
(233, 'e165421110ba03099a1c0393373c5b43', 'Qarshi Jam-e-Shireen Sugar Free', '', '2017-07-31 01:33:26', '2017-07-31 01:46:24', 9, 16, 38, 0, '', NULL, NULL, '232.jpg', 0, 1),
(234, '289dff07669d7a23de0ef88d2f7129e7', 'Mitchell''s Mix Fruite Squashe', '', '2017-07-31 01:33:26', '2017-07-31 01:46:24', 9, 16, 38, 0, '', NULL, NULL, '233.jpg', 0, 1),
(235, '577ef1154f3240ad5b9b413aa7346a1e', 'Shezan Lemon Barley Squashe', '', '2017-07-31 01:33:27', '2017-07-31 01:46:24', 9, 16, 38, 0, '', NULL, NULL, '234.jpg', 0, 1),
(236, '01161aaa0b6d1345dd8fe4e481144d84', 'Shezan Samarqand Sharbat', '', '2017-07-31 01:33:27', '2017-07-31 01:46:24', 9, 16, 38, 0, '', NULL, NULL, '235.jpg', 0, 1),
(237, '539fd53b59e3bb12d203f45a912eeaf2', 'Tang Mosambi', '', '2017-07-31 01:33:27', '2017-07-31 01:46:24', 9, 16, 39, 0, '', NULL, NULL, '236.jpg', 0, 1),
(238, 'ac1dd209cbcc5e5d1c6e28598e8cbbe8', 'Tang Mango', '', '2017-07-31 01:33:27', '2017-07-31 01:46:24', 9, 16, 39, 0, '', NULL, NULL, '237.jpg', 0, 1),
(239, '555d6702c950ecb729a966504af0a635', 'Tang Pineapple', '', '2017-07-31 01:33:27', '2017-07-31 01:46:24', 9, 16, 39, 0, '', NULL, NULL, '238.jpg', 0, 1),
(240, '335f5352088d7d9bf74191e006d8e24c', 'Tang Orange', '', '2017-07-31 01:33:28', '2017-07-31 01:46:24', 9, 16, 39, 0, '', NULL, NULL, '239.jpg', 0, 1),
(241, 'f340f1b1f65b6df5b5e3f94d95b11daf', 'Horlicks Chocolate', '', '2017-07-31 01:33:28', '2017-07-31 01:46:24', 9, 16, 39, 0, '', NULL, NULL, '240.jpg', 0, 1),
(242, 'e4a6222cdb5b34375400904f03d8e6a5', 'Horlicks Classic Malt', '', '2017-07-31 01:33:28', '2017-07-31 01:46:24', 9, 16, 39, 0, '', NULL, NULL, '241.jpg', 0, 1),
(243, 'cb70ab375662576bd1ac5aaf16b3fca4', 'Complan Straawberry', '', '2017-07-31 01:33:28', '2017-07-31 01:46:24', 9, 16, 39, 0, '', NULL, NULL, '242.jpg', 0, 1),
(244, '9188905e74c28e489b44e954ec0b9bca', 'Energile Mix Fruit', '', '2017-07-31 01:33:28', '2017-07-31 01:46:24', 9, 16, 39, 0, '', NULL, NULL, '243.jpg', 0, 1),
(245, '0266e33d3f546cb5436a10798e657d97', 'Cadbury Bournvita Drinking Powder', '', '2017-07-31 01:33:28', '2017-07-31 01:46:24', 9, 16, 39, 0, '', NULL, NULL, '244.jpg', 0, 1),
(246, '38db3aed920cf82ab059bfccbd02be6a', 'Complan Chocolate', '', '2017-07-31 01:33:29', '2017-07-31 01:46:24', 9, 16, 39, 0, '', NULL, NULL, '245.jpg', 0, 1),
(247, '3cec07e9ba5f5bb252d13f5f431e4bbb', 'Complan Mango', '', '2017-07-31 01:33:29', '2017-07-31 01:46:24', 9, 16, 39, 0, '', NULL, NULL, '246.jpg', 0, 1),
(248, '621bf66ddb7c962aa0d22ac97d69b793', 'Ovaltine Original', '', '2017-07-31 01:33:29', '2017-07-31 01:46:24', 9, 16, 39, 0, '', NULL, NULL, '247.jpg', 0, 1),
(249, '077e29b11be80ab57e1a2ecabb7da330', 'Supreme Black Tea', '', '2017-07-31 01:33:29', '2017-07-31 01:46:24', 9, 8, 40, 0, '', NULL, NULL, '249.jpg', 0, 1),
(250, '6c9882bbac1c7093bd25041881277658', 'Supreme Black Tea', '', '2017-07-31 01:33:29', '2017-07-31 01:46:24', 9, 8, 40, 0, '', NULL, NULL, '249.jpg', 0, 1),
(251, '19f3cd308f1455b3fa09a282e0d496f4', 'Supreme Black Tea Pouch', '', '2017-07-31 01:33:29', '2017-07-31 01:46:24', 9, 8, 40, 0, '', NULL, NULL, '250.jpg', 0, 1),
(252, '03c6b06952c750899bb03d998e631860', 'Supreme Black Tea Jar', '', '2017-07-31 01:33:29', '2017-07-31 01:46:24', 9, 8, 40, 0, '', NULL, NULL, '251.jpg', 0, 1),
(253, 'c24cd76e1ce41366a4bbe8a49b02a028', 'Lipton Yellow Label Black Tea', '', '2017-07-31 01:33:29', '2017-07-31 01:46:24', 9, 8, 41, 0, '', NULL, NULL, '255.jpg', 0, 1),
(254, 'c52f1bd66cc19d05628bd8bf27af3ad6', 'Lipton Yellow Label Black Tea Bags', '', '2017-07-31 01:33:30', '2017-07-31 01:46:24', 9, 8, 41, 0, '', NULL, NULL, '253.jpg', 0, 1),
(255, 'fe131d7f5a6b38b23cc967316c13dae2', 'Lipton Yellow Label Black Tea Jar', '', '2017-07-31 01:33:30', '2017-07-31 01:46:24', 9, 8, 41, 0, '', NULL, NULL, '254.jpg', 0, 1),
(256, 'f718499c1c8cef6730f9fd03c8125cab', 'Lipton Yellow Label Black Tea', '', '2017-07-31 01:33:30', '2017-07-31 01:46:24', 9, 8, 41, 0, '', NULL, NULL, '255.jpg', 0, 1),
(257, 'd96409bf894217686ba124d7356686c9', 'Tapal Danedar Black Tea', '', '2017-07-31 01:33:30', '2017-07-31 01:46:24', 9, 8, 42, 0, '', NULL, NULL, '256.jpg', 0, 1),
(258, '502e4a16930e414107ee22b6198c578f', 'Tapal Danedar Black Tea Jar', '', '2017-07-31 01:33:30', '2017-07-31 01:46:24', 9, 8, 42, 0, '', NULL, NULL, '257.jpg', 0, 1),
(259, 'cfa0860e83a4c3a763a7e62d825349f7', 'Tapal Danedar Black Tea Bag', '', '2017-07-31 01:33:30', '2017-07-31 01:46:24', 9, 8, 42, 0, '', NULL, NULL, '258.jpg', 0, 1),
(260, 'a4f23670e1833f3fdb077ca70bbd5d66', 'Tapal Family Mixture', '', '2017-07-31 01:33:30', '2017-07-31 01:46:24', 9, 8, 42, 0, '', NULL, NULL, '259.jpg', 0, 1),
(261, 'b1a59b315fc9a3002ce38bbe070ec3f5', 'Tapal Family Mixture Jar', '', '2017-07-31 01:33:31', '2017-07-31 01:46:24', 9, 8, 42, 0, '', NULL, NULL, '260.jpg', 0, 1),
(262, '36660e59856b4de58a219bcf4e27eba3', 'Tapal Tezdam Black Tea', '', '2017-07-31 01:33:31', '2017-07-31 01:46:25', 9, 8, 42, 0, '', NULL, NULL, '262.jpg', 0, 1),
(263, '8c19f571e251e61cb8dd3612f26d5ecf', 'Tapal Tezdam Black Tea', '', '2017-07-31 01:33:31', '2017-07-31 01:46:25', 9, 8, 42, 0, '', NULL, NULL, '262.jpg', 0, 1),
(264, 'd6baf65e0b240ce177cf70da146c8dc8', 'Lipton Green Tea Bags -Lemon', '', '2017-07-31 01:33:31', '2017-07-31 01:46:25', 9, 8, 43, 0, '', NULL, NULL, '263.jpg', 0, 1),
(265, 'e56954b4f6347e897f954495eab16a88', 'Tapal Green Tea Elaichi', '', '2017-07-31 01:33:31', '2017-07-31 01:46:25', 9, 8, 43, 0, '', NULL, NULL, '264.jpg', 0, 1),
(266, 'f7664060cc52bc6f3d620bcedc94a4b6', 'Tapal Green Tea Lemon', '', '2017-07-31 01:33:31', '2017-07-31 01:46:25', 9, 8, 43, 0, '', NULL, NULL, '265.jpg', 0, 1),
(267, 'eda80a3d5b344bc40f3bc04f65b7a357', 'Tapal Green Tea Bags - Lemon', '', '2017-07-31 01:33:31', '2017-07-31 01:46:25', 9, 8, 43, 0, '', NULL, NULL, '266.jpg', 0, 1),
(268, '8f121ce07d74717e0b1f21d122e04521', 'Tapal Green Tea Jasmin Jar', '', '2017-07-31 01:33:31', '2017-07-31 01:46:25', 9, 8, 43, 0, '', NULL, NULL, '267.jpg', 0, 1),
(269, '06138bc5af6023646ede0e1f7c1eac75', 'Tapal Green Tea lemon Jar', '', '2017-07-31 01:33:32', '2017-07-31 01:46:25', 9, 8, 43, 0, '', NULL, NULL, '268.jpg', 0, 1),
(270, '39059724f73a9969845dfe4146c5660e', 'Tapal Green Tea bags Selection Pack', '', '2017-07-31 01:33:32', '2017-07-31 01:46:25', 9, 8, 43, 0, '', NULL, NULL, '269.jpg', 0, 1),
(271, '7f100b7b36092fb9b06dfb4fac360931', 'Lipton Clear Green Tea Bag Mint', '', '2017-07-31 01:33:32', '2017-07-31 01:46:25', 9, 8, 43, 0, '', NULL, NULL, '270.jpg', 0, 1),
(272, '7a614fd06c325499f1680b9896beedeb', 'Lipton Green Tea Bag Pure & Light', '', '2017-07-31 01:33:32', '2017-07-31 01:46:25', 9, 8, 43, 0, '', NULL, NULL, '271.jpg', 0, 1),
(273, '4734ba6f3de83d861c3176a6273cac6d', 'Nestle Coffee Mate', '', '2017-07-31 01:33:32', '2017-07-31 01:46:25', 9, 17, 44, 0, '', NULL, NULL, '272.jpg', 0, 1),
(274, 'd947bf06a885db0d477d707121934ff8', 'Nescafe Matinal Coffee', '', '2017-07-31 01:33:32', '2017-07-31 01:46:25', 9, 17, 45, 0, '', NULL, NULL, '273.jpg', 0, 1),
(275, '63923f49e5241343aa7acb6a06a751e7', 'Nescafe Gold Coffee', '', '2017-07-31 01:33:32', '2017-07-31 01:46:25', 9, 17, 45, 0, '', NULL, NULL, '274.jpg', 0, 1),
(276, 'db8e1af0cb3aca1ae2d0018624204529', 'Nescafe 3 in 1 box 20 gm', '', '2017-07-31 01:33:32', '2017-07-31 01:46:25', 9, 17, 45, 0, '', NULL, NULL, '275.jpg', 0, 1),
(277, '20f07591c6fcb220ffe637cda29bb3f6', 'Nescafe Classic Jar', '', '2017-07-31 01:33:32', '2017-07-31 01:46:25', 9, 17, 45, 0, '', NULL, NULL, '276.jpg', 0, 1),
(278, '07cdfd23373b17c6b337251c22b7ea57', 'Nescafe Manu-Lette', '', '2017-07-31 01:33:33', '2017-07-31 01:46:25', 9, 17, 45, 0, '', NULL, NULL, '277.jpg', 0, 1),
(279, 'd395771085aab05244a4fb8fd91bf4ee', 'Nescafe Manu-Cappuccino', '', '2017-07-31 01:33:33', '2017-07-31 01:46:25', 9, 17, 45, 0, '', NULL, NULL, '278.jpg', 0, 1);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `product_price`
--

INSERT INTO `product_price` (`ID`, `ProductID`, `Price`, `visibility`) VALUES
(1, 2, 100, 1),
(2, 2, 25, 1),
(3, 2, 50, 1),
(4, 2, 120, 1),
(5, 3, 100, 1);

-- --------------------------------------------------------

--
-- Table structure for table `product_unit`
--

CREATE TABLE IF NOT EXISTS `product_unit` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `ProductID` int(11) NOT NULL,
  `Unit` varchar(11) NOT NULL,
  `Price` int(11) NOT NULL,
  `visibility` int(11) NOT NULL,
  PRIMARY KEY (`ID`),
  KEY `ProductID` (`ProductID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=400 ;

--
-- Dumping data for table `product_unit`
--

INSERT INTO `product_unit` (`ID`, `ProductID`, `Unit`, `Price`, `visibility`) VALUES
(1, 2, '1 Liter', 100, 1),
(2, 2, '1/2 Liter', 40, 1),
(3, 2, '1 Liter', 120, 1),
(4, 2, '2.25 Liter', 120, 1),
(5, 3, '1.5 LITER', 100, 1),
(6, 4, '100 Bag', 500, 1),
(7, 5, '5 Kg', 1000, 1),
(8, 6, '500 gm', 120, 1),
(9, 6, '1 kg', 0, 1),
(10, 7, '500 gm', 0, 1),
(11, 7, '1 kg', 0, 1),
(12, 8, '500 gm', 0, 1),
(13, 8, '1 kg', 0, 1),
(14, 9, '500 gm', 0, 1),
(15, 9, '1 kg', 0, 1),
(16, 10, '500 gm', 0, 1),
(17, 10, '1 kg', 0, 1),
(18, 11, '500 gm', 0, 1),
(19, 11, '1 kg', 0, 1),
(20, 12, '500 gm', 0, 1),
(21, 12, '1 kg', 0, 1),
(22, 13, '500 gm', 0, 1),
(23, 13, '1 kg', 0, 1),
(24, 14, '500 gm', 0, 1),
(25, 14, '1 kg', 0, 1),
(26, 15, '500 gm', 0, 1),
(27, 15, '1 kg', 0, 1),
(28, 16, '200 gm', 0, 1),
(29, 16, '500 gm', 0, 1),
(30, 16, '1 kg', 0, 1),
(31, 17, '50 gm', 0, 1),
(32, 17, '100 gm', 0, 1),
(33, 17, '200 gm', 0, 1),
(34, 18, '500 gm', 0, 1),
(35, 18, '1 kg', 0, 1),
(36, 19, '500 gm', 0, 1),
(37, 19, '1 kg', 0, 1),
(38, 19, '3 kg', 0, 1),
(39, 19, '5 kg', 0, 1),
(40, 20, '500 gm', 0, 1),
(41, 20, '1 kg', 0, 1),
(42, 20, '3 kg', 0, 1),
(43, 20, '5 kg', 0, 1),
(44, 21, '10 kg', 0, 1),
(45, 21, '20 kg', 0, 1),
(46, 22, '200 gm', 0, 1),
(47, 22, '500 gm', 0, 1),
(48, 22, '1 kg', 0, 1),
(49, 23, '500 gm', 0, 1),
(50, 23, '1 kg', 0, 1),
(51, 23, '5 kg', 0, 1),
(52, 24, '1 kg', 55, 1),
(53, 24, '2.5 kg', 0, 1),
(54, 24, '5 kg', 0, 1),
(55, 25, '800 gm', 25, 1),
(56, 26, '45 gm', 26, 1),
(57, 27, '800 gm', 25, 1),
(58, 28, '415 gm', 140, 1),
(59, 29, '90 gm', 50, 1),
(60, 30, '200 tabs', 110, 1),
(61, 31, '45 gm', 27, 1),
(62, 32, '1 Piece', 260, 1),
(63, 33, '100 gm', 50, 1),
(64, 34, '150 gm', 40, 1),
(65, 35, '300 gm', 110, 1),
(66, 36, '50 gm', 55, 1),
(67, 37, '50 gm', 0, 1),
(68, 38, '50 gm', 50, 1),
(69, 39, '50 gm', 50, 1),
(70, 39, '100 gm', 85, 1),
(71, 40, '50 gm', 100, 1),
(72, 41, '50 gm', 90, 1),
(73, 42, '50 gm', 55, 1),
(74, 43, '200 gm', 50, 1),
(75, 44, '25 gm', 25, 1),
(76, 45, '400 gm', 30, 1),
(77, 46, '100 gm', 60, 1),
(78, 46, '200 gm', 120, 1),
(79, 47, '50 gm', 50, 1),
(80, 48, '50 gm', 50, 1),
(81, 48, '100 gm', 85, 1),
(82, 49, '50 gm', 70, 1),
(83, 50, '60 gm', 50, 1),
(84, 50, '120 gm', 90, 1),
(85, 51, '200 gm', 35, 1),
(86, 52, '50 gm', 50, 1),
(87, 53, '130 gm', 85, 1),
(88, 54, '345 gm', 110, 1),
(89, 55, '50 gm', 50, 1),
(90, 55, '100 gm', 85, 1),
(91, 56, '50 gm', 50, 1),
(92, 56, '100 gm', 85, 1),
(93, 57, '50 gm', 35, 1),
(94, 57, '100 gm', 50, 1),
(95, 57, '200 gm', 0, 1),
(96, 58, '50 gm', 130, 1),
(97, 59, '200 gm', 120, 1),
(98, 60, '50 gm', 50, 1),
(99, 61, '100 gm', 85, 1),
(100, 62, '50 gm', 130, 1),
(101, 63, '100 gm', 130, 1),
(102, 64, '45 gm', 50, 1),
(103, 65, '40 gm', 50, 1),
(104, 66, '50 gm', 50, 1),
(105, 67, '50 gm', 50, 1),
(106, 68, '100 gm', 85, 1),
(107, 69, '200 gm', 25, 1),
(108, 70, '50 gm', 50, 1),
(109, 71, '200 gm', 55, 1),
(110, 72, '50 gm', 50, 1),
(111, 73, '50 gm', 90, 1),
(112, 74, '25 gm', 60, 1),
(113, 74, '50 gm', 100, 1),
(114, 75, '50 gm', 40, 1),
(115, 75, '100 gm', 60, 1),
(116, 75, '200 gm', 0, 1),
(117, 76, '50 gm', 55, 1),
(118, 77, '25 gm', 50, 1),
(119, 77, '50 gm', 90, 1),
(120, 78, '100 gm', 60, 1),
(121, 79, '100 gm', 50, 1),
(122, 80, '60 gm', 50, 1),
(123, 80, '120 gm', 85, 1),
(124, 81, '50 gm', 50, 1),
(125, 82, '100 gm', 60, 1),
(126, 82, '200 gm', 100, 1),
(127, 83, '100 gm', 65, 1),
(128, 84, '50 gm', 55, 1),
(129, 85, '50 gm', 55, 1),
(130, 86, '50 gm', 50, 1),
(131, 86, '100 gm', 85, 1),
(132, 87, '50 gm', 50, 1),
(133, 87, '100 gm', 85, 1),
(134, 88, '50 gm', 55, 1),
(135, 89, '100 gm', 50, 1),
(136, 90, '100 gm', 40, 1),
(137, 90, '200 gm', 80, 1),
(138, 90, '500 gm', 0, 1),
(139, 91, '500 gm', 130, 1),
(140, 91, '1 kg', 240, 1),
(141, 92, '320 gm', 120, 1),
(142, 93, '500 gm', 55, 1),
(143, 93, '1 kg', 0, 1),
(144, 94, '330 gm', 0, 1),
(145, 94, '400 gm', 0, 1),
(146, 95, '200 gm', 0, 1),
(147, 95, '320 gm', 0, 1),
(148, 96, '320 gm', 0, 1),
(149, 97, '400 gm', 0, 1),
(150, 97, '1 kg', 0, 1),
(151, 98, '330 gm', 0, 1),
(152, 99, '320 gm', 0, 1),
(153, 100, '360 gm', 120, 1),
(154, 101, '400 gm', 0, 1),
(155, 101, '500 gm', 0, 1),
(156, 101, '1 kg', 0, 1),
(157, 102, '320 gm', 0, 1),
(158, 103, '310 gm', 0, 1),
(159, 104, '300 gm', 0, 1),
(160, 105, '300 gm', 0, 1),
(161, 106, '310 gm', 0, 1),
(162, 107, '320 gm', 100, 1),
(163, 108, '300 gm', 110, 1),
(164, 109, '420 gm', 220, 1),
(165, 110, '800 ml', 85, 1),
(166, 110, '300 ml', 50, 1),
(167, 110, '120 ml', 0, 1),
(168, 111, '725 ml', 75, 1),
(169, 111, '275 ml', 50, 1),
(170, 112, '4 ltr', 350, 1),
(171, 113, '310 ml', 95, 1),
(172, 114, '800 ml', 95, 1),
(173, 115, '800 ml', 95, 1),
(174, 116, '20 gm', 28, 1),
(175, 117, '20 gm', 28, 1),
(176, 118, '300 gm', 165, 1),
(177, 119, '300 gm', 0, 1),
(178, 120, '450 gm', 145, 1),
(179, 121, '310 gm', 190, 1),
(180, 122, '310 gm', 190, 1),
(181, 123, '320 gm', 145, 1),
(182, 124, '310 gm', 190, 1),
(183, 125, '300 gm', 165, 1),
(184, 126, '320 gm', 0, 1),
(185, 127, '75 gm', 100, 1),
(186, 128, '60 gm', 90, 1),
(187, 129, '75 gm', 90, 1),
(188, 130, '300 gm', 70, 1),
(189, 131, '75 gm', 90, 1),
(190, 132, '1 kg x 5 Pa', 900, 1),
(191, 133, '1 ltr x 5 P', 900, 1),
(192, 134, '3 ltr', 600, 1),
(193, 135, '3 ltr', 580, 1),
(194, 135, '4.5 ltr', 890, 1),
(195, 136, '1 ltr x 5 P', 910, 1),
(196, 137, '1 ltr', 165, 1),
(197, 138, '1 kg', 165, 1),
(198, 139, '1 ltr', 165, 1),
(199, 140, '2.5 kg Tin', 470, 1),
(200, 140, '5 kg Tin', 930, 1),
(201, 141, '5 ltr Tin', 920, 1),
(202, 142, '500 ml', 490, 1),
(203, 142, '1 ltr', 865, 1),
(204, 143, '3 ltr', 2355, 1),
(205, 143, '4 ltr', 2985, 1),
(206, 144, '1 ltr x 5 P', 925, 1),
(207, 145, '3 ltr', 580, 1),
(208, 145, '4.5 ltr', 850, 1),
(209, 146, '1 kg', 170, 1),
(210, 147, '1 ltr', 175, 1),
(211, 148, '1 kg x 5 Pa', 995, 1),
(212, 149, '1 ltr x 5 P', 0, 1),
(213, 150, '2.5 kg Tin', 450, 1),
(214, 150, '10 kg Tin', 1650, 1),
(215, 150, '5 kg', 0, 1),
(216, 151, '2.5 ltr Tin', 465, 1),
(217, 151, '5 ltr Tin', 920, 1),
(218, 151, '10 ltr Tin', 0, 1),
(219, 152, '5 ltr', 940, 1),
(220, 152, '3 ltr', 570, 1),
(221, 153, '1 ltr', 185, 1),
(222, 154, '3 ltr', 575, 1),
(223, 154, '5 ltr', 940, 1),
(224, 155, '1 kg', 165, 1),
(225, 156, '1 kg x 5 Pa', 815, 1),
(226, 157, '10 ltr', 1760, 1),
(227, 158, '1 ltr x 5 P', 890, 1),
(228, 159, '1 kg x 5 Pa', 780, 1),
(229, 160, '1 ltr x 5 P', 790, 1),
(230, 161, '3 ltr', 520, 1),
(231, 162, '1 ltr x 5 P', 825, 1),
(232, 163, '1 kg', 165, 1),
(233, 164, '1 ltr x 5 P', 825, 1),
(234, 165, '1 ltr', 165, 1),
(235, 166, '2.5 kg Tin', 0, 1),
(236, 166, '5 kg Tin', 0, 1),
(237, 167, '1 kg', 780, 1),
(238, 168, '1 kg x 5 Pa', 780, 1),
(239, 169, '1 ltr x 5 P', 790, 1),
(240, 170, '1 ltr', 165, 1),
(241, 171, '2.5 ltr Tin', 410, 1),
(242, 171, '5 ltr Tin', 465, 1),
(243, 172, '2.5 kg Tin', 0, 1),
(244, 172, '5 kg Tin', 0, 1),
(245, 173, '2 ltr', 730, 1),
(246, 173, '4 ltr', 1430, 1),
(247, 173, '9.5 ltr', 0, 1),
(248, 174, '1 ltr', 180, 1),
(249, 175, '1 ltr x 5 P', 885, 1),
(250, 176, '1 kg', 170, 1),
(251, 177, '1 kg x 5 Pa', 850, 1),
(252, 178, '1 ltr', 185, 1),
(253, 179, '1 ltr', 185, 1),
(254, 180, '1 ltr x 5 P', 925, 1),
(255, 181, '5 ltr', 950, 1),
(256, 181, '3 ltr', 580, 1),
(257, 182, '1 ltr x 5 P', 925, 1),
(258, 183, '5 kg Bucket', 900, 1),
(259, 184, '1 kg x 5 Pa', 840, 1),
(260, 185, '3 ltr', 570, 1),
(261, 185, '5 ltr', 950, 1),
(262, 186, '500 ml', 25, 1),
(263, 186, '1.5 ltr', 50, 1),
(264, 187, '5 ltr', 145, 1),
(265, 188, '1.5 ltr x 6', 300, 1),
(266, 189, '500 ml', 25, 1),
(267, 189, '1.5 ltr', 50, 1),
(268, 190, '1.5 ltr x 6', 300, 1),
(269, 191, '250 ml', 160, 1),
(270, 192, '200 ml', 35, 1),
(271, 193, '500 ml', 60, 1),
(272, 194, '250 ml', 170, 1),
(273, 195, '240 ml', 80, 1),
(274, 196, '80 gm', 90, 1),
(275, 196, '200 gm', 210, 1),
(276, 196, '300 gm', 265, 1),
(277, 196, '600 gm', 550, 1),
(278, 197, '330 ml', 120, 1),
(279, 198, '1 ltr', 150, 1),
(280, 199, '1 ltr', 100, 1),
(281, 200, '1 ltr', 150, 1),
(282, 201, '1 ltr', 150, 1),
(283, 202, '1 ltr', 100, 1),
(284, 203, '1 ltr', 150, 1),
(285, 204, '1 ltr', 220, 1),
(286, 205, '1 ltr', 150, 1),
(287, 206, '1 lte', 150, 1),
(288, 207, '1 lte', 150, 1),
(289, 208, '1 ltr', 135, 1),
(290, 209, '240 ml', 55, 1),
(291, 210, '1 ltr', 135, 1),
(292, 211, '1 ltr', 135, 1),
(293, 212, '1 ltr', 135, 1),
(294, 213, '300 ml', 30, 1),
(295, 214, '250 ml', 50, 1),
(296, 216, '1 ltr', 60, 1),
(297, 216, '1.5 ltr', 85, 1),
(298, 216, '1.75 ltr', 95, 1),
(299, 216, '2.25 ltr', 105, 1),
(300, 218, '250 ml', 35, 1),
(301, 219, '500 ml', 40, 1),
(302, 219, '300 ml', 30, 1),
(303, 219, '1.5 ltr', 85, 1),
(304, 221, '250 ml', 35, 1),
(305, 221, '330 ml', 45, 1),
(306, 222, '500 ml', 40, 1),
(307, 222, '1.5 ltr', 85, 1),
(308, 222, '2.25 ltr', 110, 1),
(309, 223, '500 ml', 40, 1),
(310, 223, '2.25 ltr', 110, 1),
(311, 223, '1.5 ltr', 85, 1),
(312, 224, '500 ml', 45, 1),
(313, 224, '1.5 ltr', 85, 1),
(314, 225, '300 ml', 40, 1),
(315, 226, '500 ml', 40, 1),
(316, 226, '1.5 ltr', 85, 1),
(317, 226, '2.25 ltr', 105, 1),
(318, 227, '330 ml', 45, 1),
(319, 228, '500 ml', 45, 1),
(320, 228, '1.5 ltr', 90, 1),
(321, 229, '1.5 ltr', 85, 1),
(322, 229, '500 ml', 45, 1),
(323, 230, '800 ml', 132, 1),
(324, 231, '800 ml', 170, 1),
(325, 231, '1.5 ltr', 300, 1),
(326, 232, '800 ml', 180, 1),
(327, 232, '1.5 ltr', 315, 1),
(328, 232, '3 ltr', 600, 1),
(329, 233, '800 ml', 170, 1),
(330, 234, '800 ml', 165, 1),
(331, 234, '1.5 ltr', 270, 1),
(332, 235, '800 ml', 160, 1),
(333, 236, '800 ml', 160, 1),
(334, 237, '50 gm', 30, 1),
(335, 237, '340 gm', 165, 1),
(336, 238, '340 gm', 165, 1),
(337, 238, '50 gm', 30, 1),
(338, 239, '50 gm', 30, 1),
(339, 239, '340 gm', 165, 1),
(340, 240, '50 gm', 30, 1),
(341, 241, '500 gm', 450, 1),
(342, 242, '500 gm', 450, 1),
(343, 243, '200 gm', 225, 1),
(344, 244, '400 gm', 130, 1),
(345, 244, '100 gm', 45, 1),
(346, 245, '500 gm', 550, 1),
(347, 245, '200 gm', 265, 1),
(348, 246, '500 gm', 450, 1),
(349, 247, '200 gm', 225, 1),
(350, 248, '100 gm', 180, 1),
(351, 249, '95 gm', 82, 1),
(352, 250, '190 gm', 155, 1),
(353, 250, '475 gm', 410, 1),
(354, 251, '950 gm', 780, 1),
(355, 252, '450 gm', 460, 1),
(356, 253, '95 gm', 90, 1),
(357, 253, '380 gm', 370, 1),
(358, 253, '475 gm', 450, 1),
(359, 253, '950 gm', 820, 1),
(360, 254, '50 Sachets', 200, 1),
(361, 254, '100 Sachets', 390, 1),
(362, 255, '475 gm', 510, 1),
(363, 256, '190 gm', 195, 1),
(364, 257, '95 gm', 85, 1),
(365, 257, '385 gm', 335, 1),
(366, 257, '950 gm', 950, 1),
(367, 257, '190 gm', 170, 1),
(368, 258, '450 gm', 435, 1),
(369, 259, '50 Sachets', 200, 1),
(370, 259, '100 Sachets', 390, 1),
(371, 260, '190 gm', 145, 1),
(372, 260, '475 gm', 370, 1),
(373, 260, '950 gm', 710, 1),
(374, 261, '450 gm', 410, 1),
(375, 262, '475 gm', 355, 1),
(376, 262, '950 gm', 685, 1),
(377, 263, '95 gm', 70, 1),
(378, 263, '190 gm', 135, 1),
(379, 264, '25 Sachets', 100, 1),
(380, 265, '45 gm', 95, 1),
(381, 266, '45 gm', 95, 1),
(382, 267, '90 Sachets', 315, 1),
(383, 268, '100 gm', 120, 1),
(384, 269, '100 gm', 130, 1),
(385, 270, '32 Sachets', 105, 1),
(386, 271, '25 Sachets', 100, 1),
(387, 272, '25 Sachets', 100, 1),
(388, 273, '170 gm', 200, 1),
(389, 273, '400 gm', 350, 1),
(390, 274, '50 gm', 200, 1),
(391, 275, '50 gm', 400, 1),
(392, 275, '100 gm', 545, 1),
(393, 275, '200 GM', 1130, 1),
(394, 276, '24 Sachets', 480, 1),
(395, 277, '100 gm', 315, 1),
(396, 277, '50 gm', 165, 1),
(397, 277, '200 gm', 520, 1),
(398, 278, '6 Sachets', 460, 1),
(399, 279, '10 Sachets', 460, 1);

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
  `Image` varchar(255) DEFAULT NULL,
  `visibility` int(11) NOT NULL,
  PRIMARY KEY (`ID`),
  KEY `fk_first_category_id` (`FirstCategoryID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `second_category`
--

INSERT INTO `second_category` (`ID`, `EncryptedId`, `Name`, `FirstCategoryID`, `CreationDate`, `ModifiedDate`, `Image`, `visibility`) VALUES
(1, 'c4ca4238a0b923820dcc509a6f75849b', 'Second', 1, '2017-07-23 01:21:59', '2017-07-23 01:21:59', NULL, 1),
(3, 'eccbc87e4b5ce2fe28308fd9f2a7baf3', 'adasdas', 4, '2017-07-24 02:16:43', '2017-07-24 02:16:43', NULL, 1),
(4, 'a87ff679a2f3e71d9181a67b7542122c', 'adasdasasdasd', 3, '2017-07-24 02:17:05', '2017-07-24 02:17:05', NULL, 1),
(5, 'e4da3b7fbbce2345d7772b0674a318d5', 'askdas', 2, '2017-07-24 02:17:46', '2017-07-24 02:17:46', NULL, 1),
(6, '1679091c5a880faf6fb5e6087eb1b2dc', 'FinalTestTwo', 5, '2017-07-24 02:25:49', '2017-07-24 02:25:49', NULL, 1),
(7, '8f14e45fceea167a5a36dedd4bea2543', 'Water', 6, '2017-07-25 01:33:47', '2017-07-25 01:33:47', NULL, 1),
(8, 'c9f0f895fb98ab9159f51fd0297e236d', 'Tea', 6, '2017-07-25 01:35:06', '2017-07-27 04:16:35', NULL, 1),
(9, '45c48cce2e2d7fbdea1afc51c7c6ad26', 'Milk', 6, '2017-07-26 11:10:12', '2017-07-26 11:10:12', NULL, 1),
(10, 'd3d9446802a44259755d38e6d163e820', 'Another one', 5, '2017-07-27 03:54:55', '2017-07-27 03:54:55', NULL, 1),
(11, '6512bd43d9caa6e02c990b0a82652dca', 'Daal', 7, '2017-07-30 04:14:32', '2017-07-30 04:14:32', NULL, 1),
(12, 'c20ad4d76fe97759aa27a0c99bff6710', 'Staples', 8, '2017-07-31 12:35:47', '2017-07-31 12:35:47', NULL, 1),
(13, 'c51ce410c124a10e0db5e4b97fc2af39', 'Value Added', 8, '2017-07-31 12:35:48', '2017-07-31 12:35:48', NULL, 1),
(14, 'aab3238922bcc25a6f606eb525ffdc56', 'Cooking Needs', 8, '2017-07-31 12:35:49', '2017-07-31 12:35:49', NULL, 1),
(15, '9bf31c7ff062936a96d3c8bd1f8f2ff3', 'Oil & Ghee', 8, '2017-07-31 12:35:50', '2017-07-31 12:35:50', NULL, 1),
(16, 'c74d97b01eae257e44aa9d5bade97baf', 'Drinks', 9, '2017-07-31 12:35:52', '2017-07-31 12:35:52', NULL, 1),
(17, '70efdf2ec9b086079795c442636b55fb', 'Coffee', 9, '2017-07-31 12:35:53', '2017-07-31 12:35:53', NULL, 1),
(18, '6f4922f45568161a8cdf4ad2299f6d23', 'SecondONE', 10, '2017-07-31 10:59:44', '2017-07-31 10:59:44', NULL, 1);

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
  `Image` varchar(255) DEFAULT NULL,
  `visibility` int(11) NOT NULL,
  PRIMARY KEY (`ID`),
  KEY `fk_second_category_id` (`SecondCategoryID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=47 ;

--
-- Dumping data for table `third_category`
--

INSERT INTO `third_category` (`ID`, `EncryptedId`, `Name`, `SecondCategoryID`, `CreationDate`, `ModifiedDate`, `Image`, `visibility`) VALUES
(1, 'c4ca4238a0b923820dcc509a6f75849b', 'Third', 1, '2017-07-23 01:21:58', '2017-07-23 01:21:58', NULL, 1),
(7, '8f14e45fceea167a5a36dedd4bea2543', 'FinalTestThree', 6, '2017-07-24 02:26:00', '2017-07-24 02:26:00', NULL, 1),
(9, '45c48cce2e2d7fbdea1afc51c7c6ad26', 'Tonic Water', 7, '2017-07-25 01:36:08', '2017-07-25 01:36:08', NULL, 1),
(10, 'd3d9446802a44259755d38e6d163e820', 'Coffee', 8, '2017-07-26 11:09:49', '2017-07-27 04:16:59', NULL, 1),
(12, 'c20ad4d76fe97759aa27a0c99bff6710', 'Haleeb', 9, '2017-07-27 04:17:37', '2017-07-27 04:17:37', NULL, 1),
(13, 'c51ce410c124a10e0db5e4b97fc2af39', 'Green Tea', 8, '2017-07-29 07:40:26', '2017-07-29 07:40:26', NULL, 1),
(14, 'aab3238922bcc25a6f606eb525ffdc56', 'Daal Mash', 11, '2017-07-30 04:14:39', '2017-07-30 04:14:39', NULL, 1),
(15, '9bf31c7ff062936a96d3c8bd1f8f2ff3', 'Pulses', 12, '2017-07-31 12:35:47', '2017-07-31 12:35:47', NULL, 1),
(16, 'c74d97b01eae257e44aa9d5bade97baf', 'Rice', 12, '2017-07-31 12:35:48', '2017-07-31 12:35:48', NULL, 1),
(17, '70efdf2ec9b086079795c442636b55fb', 'Flour & Grains', 12, '2017-07-31 12:35:48', '2017-07-31 12:35:48', NULL, 1),
(18, '6f4922f45568161a8cdf4ad2299f6d23', 'Salt & Sugar', 13, '2017-07-31 12:35:48', '2017-07-31 12:35:48', NULL, 1),
(19, '1f0e3dad99908345f7439f8ffabdffc4', 'Aluminium Foil', 13, '2017-07-31 12:35:48', '2017-07-31 12:35:48', NULL, 1),
(20, '98f13708210194c475687be6106a3b84', 'Masala & Spices', 14, '2017-07-31 12:35:49', '2017-07-31 12:35:49', NULL, 1),
(21, '3c59dc048e8850243be8079a5c74d079', 'Pickle / Achar', 14, '2017-07-31 12:35:49', '2017-07-31 12:35:49', NULL, 1),
(22, 'b6d767d2f8ed5d21a44b0e5886680cb9', 'Vinegar', 14, '2017-07-31 12:35:50', '2017-07-31 12:35:50', NULL, 1),
(23, '37693cfc748049e45d87b8c7d8b9aacd', 'Cubes & Paste', 14, '2017-07-31 12:35:50', '2017-07-31 12:35:50', NULL, 1),
(24, '1ff1de774005f8da13f42943881c655f', 'Baking & Frying', 14, '2017-07-31 12:35:50', '2017-07-31 12:35:50', NULL, 1),
(25, '8e296a067a37563370ded05f5a3bf3ec', 'Dalda', 15, '2017-07-31 12:35:50', '2017-07-31 12:35:50', NULL, 1),
(26, '4e732ced3463d06de0ca9a15b6153677', 'Habib', 15, '2017-07-31 12:35:50', '2017-07-31 12:35:50', NULL, 1),
(27, '02e74f10e0327ad868d138f2b4fdd6f0', 'Soya Supreme', 15, '2017-07-31 12:35:51', '2017-07-31 12:35:51', NULL, 1),
(28, '33e75ff09dd601bbe69f351039152189', 'Mezan', 15, '2017-07-31 12:35:51', '2017-07-31 12:35:51', NULL, 1),
(29, '6ea9ab1baa0efb9e19094440c317e21b', 'Olpers', 15, '2017-07-31 12:35:51', '2017-07-31 12:35:51', NULL, 1),
(30, '34173cb38f07f89ddbebc2ac9128303f', 'Tullo', 15, '2017-07-31 12:35:51', '2017-07-31 12:35:51', NULL, 1),
(31, 'c16a5320fa475530d9583c34fd356ef5', 'Rafhan', 15, '2017-07-31 12:35:51', '2017-07-31 12:35:51', NULL, 1),
(32, '6364d3f0f495b6ab9dcf8d3b5c6e0b01', 'Kisan', 15, '2017-07-31 12:35:51', '2017-07-31 12:35:51', NULL, 1),
(33, '182be0c5cdcd5072bb1864cdee4d3d6e', 'Eva', 15, '2017-07-31 12:35:51', '2017-07-31 12:35:51', NULL, 1),
(34, 'e369853df766fa44e1ed0ff613f563bd', 'Mineral Water', 7, '2017-07-31 12:35:52', '2017-07-31 12:35:52', NULL, 1),
(35, '1c383cd30b7c298ab50293adfecb7b18', 'Enery Drinks', 16, '2017-07-31 12:35:52', '2017-07-31 12:35:52', NULL, 1),
(36, '19ca14e7ea6328a42e0eb13d585e4c22', 'Juices', 16, '2017-07-31 12:35:52', '2017-07-31 12:35:52', NULL, 1),
(37, 'a5bfc9e07964f8dddeb95fc584cd965d', 'Soft Drink', 16, '2017-07-31 12:35:52', '2017-07-31 12:35:52', NULL, 1),
(38, 'a5771bce93e200c36f7cd9dfd0e5deaa', 'Syrups & Squashes', 16, '2017-07-31 12:35:52', '2017-07-31 12:35:52', NULL, 1),
(39, 'd67d8ab4f4c10bf22aa353e27879133c', 'Powder Drink', 16, '2017-07-31 12:35:53', '2017-07-31 12:35:53', NULL, 1),
(40, 'd645920e395fedad7bbbed0eca3fe2e0', 'Supreme', 8, '2017-07-31 12:35:53', '2017-07-31 12:35:53', NULL, 1),
(41, '3416a75f4cea9109507cacd8e2f2aefc', 'Lipton', 8, '2017-07-31 12:35:53', '2017-07-31 12:35:53', NULL, 1),
(42, 'a1d0c6e83f027327d8461063f4ac58a6', 'Tapal', 8, '2017-07-31 12:35:53', '2017-07-31 12:35:53', NULL, 1),
(43, '17e62166fc8586dfa4d1bc0e1742c08b', 'Geen Tea', 8, '2017-07-31 12:35:53', '2017-07-31 12:35:53', NULL, 1),
(44, 'f7177163c833dff4b38fc8d2872f1ec6', 'Nestle', 17, '2017-07-31 12:35:53', '2017-07-31 12:35:53', NULL, 1),
(45, '6c8349cc7260ae62e3b1396831a8398f', 'Nescafe', 17, '2017-07-31 12:35:54', '2017-07-31 12:35:54', NULL, 1),
(46, 'd9d4f495e875a2e075a1a4a6e1b9770f', 'TestThree', 3, '2017-07-31 12:54:58', '2017-07-31 12:54:58', NULL, 1);

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
-- Constraints for table `product_unit`
--
ALTER TABLE `product_unit`
  ADD CONSTRAINT `product_units_ibfk_1` FOREIGN KEY (`ProductID`) REFERENCES `products` (`ID`);

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
