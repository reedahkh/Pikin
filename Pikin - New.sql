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


-- Dumping database structure for pikin
CREATE DATABASE IF NOT EXISTS `pikin` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `pikin`;

-- Dumping structure for table pikin.coordinators
CREATE TABLE IF NOT EXISTS `coordinators` (
  `SN` int(200) NOT NULL AUTO_INCREMENT,
  `firstname` text NOT NULL,
  `lastname` text NOT NULL,
  `email` varchar(50) NOT NULL,
  `number` varchar(50) NOT NULL,
  `password` varchar(30) NOT NULL,
  PRIMARY KEY (`SN`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Dumping data for table pikin.coordinators: ~0 rows (approximately)
/*!40000 ALTER TABLE `coordinators` DISABLE KEYS */;
/*!40000 ALTER TABLE `coordinators` ENABLE KEYS */;

-- Dumping structure for table pikin.educators
CREATE TABLE IF NOT EXISTS `educators` (
  `SN` int(200) NOT NULL AUTO_INCREMENT,
  `firstname` text NOT NULL,
  `lastname` text NOT NULL,
  `email` varchar(30) NOT NULL,
  `number` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `postcode` int(30) NOT NULL,
  `suburb` text NOT NULL,
  `coordinator` text NOT NULL,
  `rating` int(5) DEFAULT '0',
  `avatar` varchar(255) DEFAULT 'default.jpg',
  PRIMARY KEY (`SN`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- Dumping data for table pikin.educators: ~5 rows (approximately)
/*!40000 ALTER TABLE `educators` DISABLE KEYS */;
REPLACE INTO `educators` (`SN`, `firstname`, `lastname`, `email`, `number`, `password`, `postcode`, `suburb`, `coordinator`, `rating`, `avatar`) VALUES
	(1, 'Habu', 'Mohammed', 'moh@yahoo.com', '+2348038471835', 'mohash', 900001, 'Ottawa', 'Mr Abdul', 1, 'default.jpg'),
	(2, 'Zee', 'Musa', 'zee@yahoo.com', '+2345968735467', 'zee', 900001, 'Ottawa', 'Mr Joshua', 2, 'default.jpg'),
	(3, 'Ree', 'Akin', 'ree@yahoo.com', '+2345968735467', 'ree', 900001, 'Ottawa', 'Mr Joshua', 3, 'default.jpg'),
	(4, 'Habu', 'Hashidu', 'habu@yahoo.com', '+2348097654372', 'habu', 900002, 'Ontario', 'Mr Yusuf', NULL, 'default.jpg'),
	(5, 'Kauna', 'Magaji', 'kauna@yahoo.com', '+2348075937563', 'kauna', 900002, 'Ontario', 'Mr Joshua', NULL, 'default.jpg');
/*!40000 ALTER TABLE `educators` ENABLE KEYS */;

-- Dumping structure for table pikin.parents
CREATE TABLE IF NOT EXISTS `parents` (
  `SN` int(200) NOT NULL AUTO_INCREMENT,
  `firstname` text NOT NULL,
  `lastname` text NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `paymentmethod` text NOT NULL,
  PRIMARY KEY (`SN`),
  UNIQUE KEY `email` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

-- Dumping data for table pikin.parents: 2 rows
/*!40000 ALTER TABLE `parents` DISABLE KEYS */;
REPLACE INTO `parents` (`SN`, `firstname`, `lastname`, `email`, `password`, `paymentmethod`) VALUES
	(1, 'Farida', 'Kabir', 'fareedakabeer@gmail.com', 'reedah', 'Credit Card'),
	(12, 'Amira', 'Kabir', 'amira@yahoo.com', 'SHA1 (a)', 'Paypal');
/*!40000 ALTER TABLE `parents` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
