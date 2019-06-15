-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 15, 2019 at 08:34 AM
-- Server version: 5.7.24
-- PHP Version: 7.2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `drugman`
--

-- --------------------------------------------------------

--
-- Table structure for table `bills`
--

DROP TABLE IF EXISTS `bills`;
CREATE TABLE IF NOT EXISTS `bills` (
  `Bill_ID` int(11) NOT NULL AUTO_INCREMENT,
  `Cust_ID` int(11) NOT NULL,
  `Total` float DEFAULT '0',
  PRIMARY KEY (`Bill_ID`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bills`
--

INSERT INTO `bills` (`Bill_ID`, `Cust_ID`, `Total`) VALUES
(1, 1, 10);

-- --------------------------------------------------------

--
-- Table structure for table `bill_items`
--

DROP TABLE IF EXISTS `bill_items`;
CREATE TABLE IF NOT EXISTS `bill_items` (
  `Bill_ID` int(10) NOT NULL,
  `Item_ID` int(10) NOT NULL,
  `Quantity` int(5) NOT NULL,
  PRIMARY KEY (`Bill_ID`,`Item_ID`),
  KEY `Item_ID` (`Item_ID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bill_items`
--

INSERT INTO `bill_items` (`Bill_ID`, `Item_ID`, `Quantity`) VALUES
(1, 3, 15),
(1, 2, 5),
(1, 1, 10);

-- --------------------------------------------------------

--
-- Table structure for table `inventory`
--

DROP TABLE IF EXISTS `inventory`;
CREATE TABLE IF NOT EXISTS `inventory` (
  `ID` int(4) NOT NULL AUTO_INCREMENT,
  `Name` varchar(500) NOT NULL,
  `Quantity` int(10) NOT NULL,
  `Price` decimal(10,2) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `inventory`
--

INSERT INTO `inventory` (`ID`, `Name`, `Quantity`, `Price`) VALUES
(1, 'Piriton Tablets', 100, '10.00'),
(2, 'Panadol Tablets', 150, '5.00'),
(3, 'Paracetamol', 100, '12.50'),
(4, 'Detol', 280, '100.00'),
(5, 'Piriton Syrup', 354, '456.00'),
(6, 'lamudu', 4, '100.00'),
(7, 'isuru', 400, '20.00'),
(11, 'fff', 22, '199.00'),
(12, 'aaaq', 29, '22.00');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
