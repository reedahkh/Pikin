-- --------------------------------------------------------
-- Host:                         localhost
-- Server version:               5.7.19 - MySQL Community Server (GPL)
-- Server OS:                    Win64
-- HeidiSQL Version:             9.4.0.5125
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Dumping database structure for pickin
CREATE DATABASE IF NOT EXISTS `pickin` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `pickin`;

-- Dumping structure for table pickin.admin
CREATE TABLE IF NOT EXISTS `admin` (
  `AdminID` int(200) NOT NULL AUTO_INCREMENT,
  `firstname` text NOT NULL,
  `lastname` text NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(20) NOT NULL,
  PRIMARY KEY (`AdminID`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- Data exporting was unselected.
-- Dumping structure for table pickin.booking
CREATE TABLE IF NOT EXISTS `booking` (
  `BookingID` int(200) NOT NULL AUTO_INCREMENT,
  `ParentID` int(200) NOT NULL,
  `EducatorID` int(250) NOT NULL,
  `postcode` int(11) DEFAULT NULL,
  `suburb` varchar(250) DEFAULT NULL,
  `servicetype` text,
  `day` char(200) DEFAULT NULL,
  `starttime` time(6) DEFAULT NULL,
  `endtime` time(6) DEFAULT NULL,
  `paymentmethod` text,
  `timestamp` timestamp(6) NULL DEFAULT CURRENT_TIMESTAMP(6),
  PRIMARY KEY (`BookingID`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;

-- Data exporting was unselected.
-- Dumping structure for table pickin.coordinators
CREATE TABLE IF NOT EXISTS `coordinators` (
  `CoordinatorID` int(200) NOT NULL AUTO_INCREMENT,
  `firstname` text NOT NULL,
  `lastname` text NOT NULL,
  `phonenumber` varchar(50) DEFAULT NULL,
  `email` varchar(50) NOT NULL,
  `address` varchar(250) DEFAULT NULL,
  `suburb` varchar(50) DEFAULT NULL,
  `postcode` int(20) DEFAULT NULL,
  `avatar` varchar(250) DEFAULT 'default.jpg',
  `password` varchar(30) NOT NULL,
  `hashkey` varchar(32) DEFAULT NULL,
  `active` int(1) DEFAULT '0',
  PRIMARY KEY (`CoordinatorID`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

-- Data exporting was unselected.
-- Dumping structure for table pickin.educators
CREATE TABLE IF NOT EXISTS `educators` (
  `EducatorID` int(200) NOT NULL AUTO_INCREMENT,
  `CoordinatorID` int(11) DEFAULT NULL,
  `firstname` text NOT NULL,
  `lastname` text NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `hashkey` varchar(32) DEFAULT NULL,
  `phonenumber` varchar(30) DEFAULT NULL,
  `address` varchar(250) DEFAULT NULL,
  `suburb` varchar(250) DEFAULT NULL,
  `postcode` int(30) DEFAULT NULL,
  `avatar` varchar(255) DEFAULT 'default.jpg',
  `numkids` varchar(250) DEFAULT NULL,
  `ageofkids` varchar(50) DEFAULT NULL,
  `typeofservice` varchar(250) DEFAULT NULL,
  `servicehours` varchar(250) DEFAULT NULL,
  `rating` int(5) DEFAULT '0',
  `active` int(1) DEFAULT '0',
  PRIMARY KEY (`EducatorID`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;

-- Data exporting was unselected.
-- Dumping structure for table pickin.parents
CREATE TABLE IF NOT EXISTS `parents` (
  `ParentID` int(200) NOT NULL AUTO_INCREMENT,
  `firstname` text NOT NULL,
  `lastname` text NOT NULL,
  `email` varchar(30) NOT NULL,
  `age` int(50) DEFAULT NULL,
  `password` varchar(30) NOT NULL,
  `hashkey` varchar(32) DEFAULT NULL,
  `paymentmethod` text,
  `phonenumber` varchar(30) DEFAULT NULL,
  `homeaddress` varchar(255) DEFAULT NULL,
  `homesuburb` varchar(50) DEFAULT NULL,
  `homepostcode` varchar(50) DEFAULT NULL,
  `officeaddress` varchar(255) DEFAULT NULL,
  `officesuburb` varchar(50) DEFAULT NULL,
  `officepostcode` varchar(50) DEFAULT NULL,
  `image` longtext,
  `numkids` varchar(100) DEFAULT NULL,
  `ageofkids` varchar(30) DEFAULT NULL,
  `typeofservice` varchar(200) DEFAULT NULL,
  `servicehours` varchar(50) DEFAULT NULL,
  `active` int(1) DEFAULT '0',
  PRIMARY KEY (`ParentID`),
  UNIQUE KEY `email` (`email`),
  KEY `ParentID` (`ParentID`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- Data exporting was unselected.
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
