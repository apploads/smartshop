-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 09, 2015 at 10:05 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `supermart`
--

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE IF NOT EXISTS `brands` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `brand` varchar(25) NOT NULL,
  `category` varchar(100) NOT NULL,
  PRIMARY KEY (`ID`),
  UNIQUE KEY `brand` (`brand`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`ID`, `brand`, `category`) VALUES
(9, 'LG', 'TV'),
(10, 'Samsung', 'TV');

-- --------------------------------------------------------

--
-- Table structure for table `classcategory`
--

CREATE TABLE IF NOT EXISTS `classcategory` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `category` varchar(100) NOT NULL,
  PRIMARY KEY (`ID`),
  UNIQUE KEY `category` (`category`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `classcategory`
--

INSERT INTO `classcategory` (`ID`, `category`) VALUES
(6, 'TV');

-- --------------------------------------------------------

--
-- Table structure for table `deposit`
--

CREATE TABLE IF NOT EXISTS `deposit` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `ticket` varchar(50) NOT NULL,
  `custName` varchar(60) NOT NULL,
  `custPhone` varchar(50) NOT NULL,
  `desc` varchar(255) NOT NULL,
  `deposit` char(11) NOT NULL,
  `price` char(11) NOT NULL,
  `balance` char(11) NOT NULL,
  `user` varchar(50) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `deposit`
--

INSERT INTO `deposit` (`ID`, `ticket`, `custName`, `custPhone`, `desc`, `deposit`, `price`, `balance`, `user`, `date`) VALUES
(1, '01146', 'jon', '07030098458', 'Alh Bisirat-- 1 Rossi Shoe Fuchsia', '12000', '26000', '14000', 'sara', '2012-02-16'),
(2, '0114', 'Tunde', '080', 'rossi shoes', '5000', '12000', '7000', 'sara', '2012-02-20'),
(3, '0116', 'joe', '08522', 'xpression wig', 'Paid', '1500', '1000', 'manager', '2012-03-28'),
(4, '01124', 'ffe', 'sd', 'aso oke', '2500', '5000', '2500', 'manager', '2014-10-11'),
(5, '02558877', 'biggy', '0812', 'Big mouthwash', '5000', '7500', '2500', 'manager', '2014-10-11'),
(6, '01278', 'boo', '030', 'Gucci cologne', '3500', '6000', '2500', 'sara', '2014-10-11'),
(7, '0000', 'goo', '0788888', 'Gucci bag', '7000', '15000', '8000', 'sara', '2014-10-12'),
(8, '0000', 'goo', '0788888', 'Estesse perfume', '1000', '20000', '19000', 'sara', '2014-10-12'),
(9, '6664', 'hugo', '0752556', 'splash', '2500', '5000', '2500', 'manager', '2015-06-09'),
(10, '000002552', 'bhuy', '1548', 'Huge Fridges', '5000', '85000', '80000', 'manager', '2015-06-09');

-- --------------------------------------------------------

--
-- Table structure for table `expenses`
--

CREATE TABLE IF NOT EXISTS `expenses` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `expenseDesc` varchar(50) NOT NULL,
  `cost` float NOT NULL,
  `user` varchar(50) NOT NULL,
  `timestamp` datetime NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `expenses`
--

INSERT INTO `expenses` (`ID`, `expenseDesc`, `cost`, `user`, `timestamp`, `date`) VALUES
(2, 'bought printing papers', 2000, 'manager', '2012-02-20 01:02:30', '2012-02-20'),
(3, 'Bought fuel', 5000, 'sara', '2012-02-17 01:02:18', '2012-02-17'),
(4, 'Bought Gas', 7000, 'manager', '2014-10-11 12:10:52', '2014-10-11');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE IF NOT EXISTS `product` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `category` varchar(100) NOT NULL,
  `catID` int(11) NOT NULL,
  `product` varchar(100) NOT NULL,
  `spec` varchar(100) NOT NULL,
  `unitPrice` float NOT NULL,
  `qty` int(5) NOT NULL,
  `buy` int(5) NOT NULL,
  `left` int(5) NOT NULL,
  `user` varchar(30) NOT NULL,
  `auth` char(10) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=23 ;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`ID`, `category`, `catID`, `product`, `spec`, `unitPrice`, `qty`, `buy`, `left`, `user`, `auth`) VALUES
(16, 'TV', 6, 'LG', '32"', 56000, 11, 3, 8, 'manager', 'Y'),
(17, 'TV', 6, 'Samsung', '50"', 250000, 3, 0, 3, 'manager', 'Y'),
(19, 'TV', 6, 'Samsung', '27.5"', 45000, 2, 0, 2, 'admin1', 'Y');

-- --------------------------------------------------------

--
-- Table structure for table `sell`
--

CREATE TABLE IF NOT EXISTS `sell` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `ticket` varchar(50) NOT NULL,
  `custName` varchar(50) NOT NULL,
  `custPhone` varchar(25) NOT NULL,
  `custAdd` varchar(255) NOT NULL,
  `catType` varchar(50) NOT NULL,
  `product` varchar(100) NOT NULL,
  `spec` varchar(100) NOT NULL,
  `qty` int(5) NOT NULL,
  `unitPrice` float NOT NULL,
  `vdiscount` int(6) NOT NULL,
  `userID` char(10) NOT NULL,
  `timestamp` datetime NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`ID`),
  UNIQUE KEY `ID` (`ID`),
  UNIQUE KEY `ID_3` (`ID`),
  KEY `ID_2` (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=51 ;

--
-- Dumping data for table `sell`
--

INSERT INTO `sell` (`ID`, `ticket`, `custName`, `custPhone`, `custAdd`, `catType`, `product`, `spec`, `qty`, `unitPrice`, `vdiscount`, `userID`, `timestamp`, `date`) VALUES
(2, '0145', 'bob', '07030098434', '22 Oak street', 'hair', 'xpression', 'black', 3, 750, 50, 'manager', '2012-02-16 07:02:15', '2012-02-16'),
(4, '0001', 'jon june jim', '07030098439', '23, taiwo', 'hair', 'xpression', 'blue wig', 5, 620, 0, 'sara', '2012-02-16 12:02:04', '2012-02-16'),
(7, '0002', 'jin', '080', '22 willo', 'hair products', 'xpression', 'glow', 2, 800, 0, 'manager', '2012-02-18 04:02:07', '2012-02-18'),
(8, '04014', 'jack', '070', '125', 'hair products', 'xpression', 'blue wig', 2, 750, 0, 'sara', '2012-02-17 01:02:55', '2012-02-17'),
(10, '01457', 'mr a', '080', '25', 'Toiletries', 'Mouthwash', 'Maclean Big', 5, 500, 0, 'manager', '2012-02-20 03:02:28', '2012-02-20'),
(11, '0045', 'aa', '070', '22', 'hair products', 'xpression', 'blue wig', 2, 750, 0, 'manager', '2012-03-12 03:03:26', '2012-03-12'),
(13, '0045', 'aa', '070', '22', 'Toiletries', 'Mouthwash', 'Maclean Big', 4, 500, 0, 'manager', '2012-03-12 03:03:47', '2012-03-12'),
(14, '01444', 'bob', '070', '22', 'hair products', 'xpression', 'blue wig', 2, 750, 0, 'manager', '2012-03-13 03:03:36', '2012-03-13'),
(16, '01444', 'bob', '070', '22', 'Toiletries', 'Mouthwash', 'Maclean Big', 2, 500, 0, 'manager', '2012-03-13 03:03:57', '2012-03-13'),
(18, '01114', 'ade george', '08097683344', '26 oaks blvd', 'hair products', 'xpression', 'dark glow', 2, 780, 0, 'manager', '2012-03-25 05:03:58', '2012-03-25'),
(22, '00012', 'ad', '070', 'sdde', 'Cologne', 'Gucci', 'Gucci perf', 5, 12000, 0, 'manager', '2012-04-19 12:04:59', '2012-04-19'),
(24, '01547', 'gttr', '070', 'drre', 'Cologne', 'Gucci', 'Gucci perf', 2, 12000, 0, 'manager', '2012-05-19 07:05:19', '2012-05-19'),
(25, '345', 'ay', '070', '55th street', 'Cologne', 'Gucci', 'Gucci perf', 1, 12000, 0, 'manager', '2013-02-14 09:02:15', '2013-02-14'),
(26, '', 'ada', '070', 'ad', 'Cologne', 'Gucci', 'Gucci perf', 2, 12000, 0, 'manager', '2013-09-17 04:09:00', '2013-09-17'),
(29, '1006', 'boof', '074', '', 'hair products', 'xpression', 'blue wig', 2, 750, 0, 'manager', '2014-10-10 11:10:53', '2014-10-10'),
(31, '1006', 'boof', '074', '', 'Toiletries', 'Mouthwash', 'Maclean Big', 1, 500, 0, 'manager', '2014-10-10 11:10:28', '2014-10-10'),
(32, '1006', 'boof', '074', '', 'Toiletries', 'Mouthwash', 'Maclean Big', 1, 500, 0, 'manager', '2014-10-10 11:10:49', '2014-10-10'),
(33, '1006', 'boof', '074', '', 'Toiletries', 'Mouthwash', 'Maclean Big', 1, 500, 0, 'manager', '2014-10-10 11:10:49', '2014-10-10'),
(35, '0124555', 'foo', '072', '', 'Cologne', 'Gucci', 'Gucci perf', 1, 12000, 0, 'sara', '2014-10-11 11:10:31', '2014-10-11'),
(36, '02225887', 'foo', '075', '', 'Cologne', 'Gucci', 'Gucci perf', 2, 12000, 500, 'manager', '2014-10-12 10:10:19', '2014-10-12'),
(47, '015552', 'bhhg', '114528', '', 'TV', 'LG', '32"', 1, 56000, 0, 'manager', '2015-06-09 07:06:15', '2015-06-09'),
(49, '175', 'kkii', '2145', '', 'TV', 'LG', '32"', 1, 56000, 0, 'sara', '2015-06-09 08:06:00', '2015-06-09');

-- --------------------------------------------------------

--
-- Table structure for table `shop`
--

CREATE TABLE IF NOT EXISTS `shop` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `address` varchar(255) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `shop`
--

INSERT INTO `shop` (`ID`, `name`, `address`) VALUES
(1, 'Akinlola Departmental Stores', 'Trumed Building.');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `username` char(10) NOT NULL,
  `password1` varchar(255) NOT NULL,
  `password2` varchar(255) NOT NULL,
  `firstname` char(10) NOT NULL,
  `lastname` char(10) NOT NULL,
  `who` char(10) NOT NULL,
  PRIMARY KEY (`ID`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`ID`, `username`, `password1`, `password2`, `firstname`, `lastname`, `who`) VALUES
(2, 'admin1', '7c6a180b36896a0a8c02787eeafb0e4c', '7c6a180b36896a0a8c02787eeafb0e4c', 'admin', 'one', 'admin'),
(3, 'sara', '5f4dcc3b5aa765d61d8327deb882cf99', '5f4dcc3b5aa765d61d8327deb882cf99', '', '', 'teller'),
(7, 'manager', '5f4dcc3b5aa765d61d8327deb882cf99', '5f4dcc3b5aa765d61d8327deb882cf99', 'manager', '', 'manager');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
