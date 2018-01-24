-- phpMyAdmin SQL Dump
-- version 4.7.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Jan 24, 2018 at 06:41 PM
-- Server version: 5.6.35
-- PHP Version: 7.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `pickin`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `AdminID` int(200) NOT NULL,
  `firstname` text NOT NULL,
  `lastname` text NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`AdminID`, `firstname`, `lastname`, `email`, `password`) VALUES
(1, 'Ola', 'Ola', 'ola@yahoo.com', 'ola');

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `BookingID` int(200) NOT NULL,
  `ParentID` int(200) NOT NULL,
  `EducatorID` int(250) NOT NULL,
  `postcode` int(11) DEFAULT NULL,
  `suburb` varchar(250) DEFAULT NULL,
  `servicetype` text,
  `day` char(200) DEFAULT NULL,
  `starttime` time(6) DEFAULT NULL,
  `endtime` time(6) DEFAULT NULL,
  `paymentmethod` text,
  `timestamp` timestamp(6) NULL DEFAULT CURRENT_TIMESTAMP(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`BookingID`, `ParentID`, `EducatorID`, `postcode`, `suburb`, `servicetype`, `day`, `starttime`, `endtime`, `paymentmethod`, `timestamp`) VALUES
(1, 12, 11, 5006, 'North Adelaide, SA', 'Morning Childcare Service', 'monday ,', '08:00:00.000000', '09:00:00.000000', 'Paypal', '2017-12-30 17:26:46.445208'),
(2, 12, 11, 5006, 'North Adelaide, SA', 'Morning Childcare Service', 'monday , tuesday ,', '08:00:00.000000', '09:00:00.000000', 'Paypal', '2017-12-30 17:26:46.445208'),
(3, 10, 0, 5006, 'gavin', 'Morning Childcare Service', 'monday ,', '08:00:00.000000', '09:00:00.000000', 'Credit Card', '2017-12-30 17:26:46.445208'),
(4, 10, 0, 444, 'ffff', 'Morning Childcare Service', 'monday ,', '08:00:00.000000', '09:00:00.000000', 'Credit Card', '2017-12-30 17:26:46.445208'),
(5, 12, 0, 333, 'aaa', 'Morning Childcare Service', 'monday ,', '08:00:00.000000', '09:00:00.000000', 'Credit Card', '2017-12-31 16:45:49.693646'),
(6, 12, 0, 333, 'aaa', 'Morning Childcare Service', 'monday ,', '14:00:00.000000', '15:00:00.000000', 'Credit Card', '2017-12-31 16:49:53.120620'),
(7, 12, 0, 333, 'aaa', 'Morning Childcare Service', 'monday ,', '08:00:00.000000', '09:00:00.000000', 'Credit Card', '2017-12-31 17:10:01.855638'),
(8, 12, 2, 333, 'aaa', 'Evening Childcare Service', 'monday ,', '20:00:00.000000', '21:00:00.000000', 'Paypal', '2017-12-31 17:43:49.642563'),
(9, 12, 1, 222, 'www', 'Morning Childcare Service', 'monday ,', '08:00:00.000000', '09:00:00.000000', 'Credit Card', '2018-01-01 00:43:12.039105'),
(10, 0, 0, 0, '', '', 'monday , tuesday ,', '00:00:00.000000', '00:00:00.000000', '', '2018-01-01 00:54:26.198990'),
(11, 0, 0, 0, '', '', 'tuesday , wednesday , thursday ,', '00:00:00.000000', '00:00:00.000000', '', '2018-01-01 00:58:13.832363'),
(12, 12, 2, 0, '', '', 'monday , friday ,', '00:00:00.000000', '00:00:00.000000', '', '2018-01-01 01:00:20.161355'),
(13, 30, 2, 333, '444', 'Pickoff and Dropoff', 'monday ,', '09:00:00.000000', '17:00:00.000000', 'Credit Card', '2018-01-01 14:08:12.862539');

-- --------------------------------------------------------

--
-- Table structure for table `coordinators`
--

CREATE TABLE `coordinators` (
  `CoordinatorID` int(200) NOT NULL,
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
  `active` int(1) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `coordinators`
--

INSERT INTO `coordinators` (`CoordinatorID`, `firstname`, `lastname`, `phonenumber`, `email`, `address`, `suburb`, `postcode`, `avatar`, `password`, `hashkey`, `active`) VALUES
(2, 'James', 'Hope', '+2348038471835', 'james@yahoo.com', '29 Earl Street', 'North Adelaide, SA', 5006, 'default.jpg', 'james', '', 1),
(6, 'Farida', 'Kabir', '8038471835', 'fareedakabeer@gmail.com', 'No 1B Dar es Salam Close Wuse 2', 'Gavin', 5113, 'IMG_3438.JPG', 'SHA1(fds)', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `educators`
--

CREATE TABLE `educators` (
  `EducatorID` int(200) NOT NULL,
  `CoordinatorID` int(11) NOT NULL,
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
  `active` int(1) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `educators`
--

INSERT INTO `educators` (`EducatorID`, `CoordinatorID`, `firstname`, `lastname`, `email`, `password`, `hashkey`, `phonenumber`, `address`, `suburb`, `postcode`, `avatar`, `numkids`, `ageofkids`, `typeofservice`, `servicehours`, `rating`, `active`) VALUES
(1, 1, 'Habu', 'Mohammed', 'moh@yahoo.com', 'mohash', '', '+2348038471835', '', 'North Adelaide, SA', 5006, 'default.jpg', '', '', '', '', 1, 1),
(2, 1, 'Zee', 'Musa', 'zee@yahoo.com', 'zee', '', '+2345968735467', '', 'North Adelaide, SA', 5006, 'default.jpg', '', '', '', '', 2, 1),
(4, 1, 'Habu', 'Hashidu', 'habu@yahoo.com', 'habu', '', '+2348097654372', '', 'Adelaide Airport, SA', 5950, 'default.jpg', '', '', '', '', 3, 1),
(6, 2, 'Mary', 'Joseph', 'mary@yahoo.com', 'mary', '', '+2345968735467', '', 'Adelaide Park Old', 4703, 'default.jpg', '', '', '', '', 3, 1),
(7, 2, 'Isabelle', 'Joseph', 'isabel@gmail.com', 'isabel', '', '+2345968735465', '', 'Gaven', 4211, 'default.jpg', '', '', '', '', 4, 1),
(8, 2, 'Lucy', 'Lui', 'lucy@yahoo.com', 'lucy', '', '+2348038471833', '', 'Gaven', 4211, 'default.jpg', '', '', '', '', 4, 1),
(9, 2, 'Nora', 'Roberts', 'nora@yahoo.com', 'nora', '', '+234596873086', '', 'Garfield, Vic', 3814, 'default.jpg', '', '', '', '', 3, 1),
(10, 0, 'Farida', 'Kabir', 'fareedakabeer@icloud.com', 'SHA1(red)', '7e7757b1e12abcb736ab9a754ffb617a', '', '', 'Gavin', 5006, 'default.jpg', '', '', '', '', 3, 1),
(11, 0, 'Amira', 'Kabir', 'amira@gmail.com', 'SHA1 (a)', '202cb962ac59075b964b07152d234b70', '', '32, Thames Street', 'Gavin', 5006, 'default.jpg', '', '', '', '', 1, 1),
(12, 6, 'tt', 'tt', 't@yahoo.com', 'SHA1 (t)', '1ecfb463472ec9115b10c292ef8bc986', '', '', 'Gavin', 5006, 'default.jpg', '', '', '', '', 4, 1),
(13, 6, 'Farida', 'Kabir', 'fareedakabeer@gmail.com', 'SHA1(fer)', '', '8038471835', 'No 1b dar es salam close wuse 2', 'Fct', 900001, 'IMG_3440.JPG', '2', '2,3', 'ww', '2', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `parents`
--

CREATE TABLE `parents` (
  `ParentID` int(200) NOT NULL,
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
  `active` int(1) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `parents`
--

INSERT INTO `parents` (`ParentID`, `firstname`, `lastname`, `email`, `age`, `password`, `hashkey`, `paymentmethod`, `phonenumber`, `homeaddress`, `homesuburb`, `homepostcode`, `officeaddress`, `officesuburb`, `officepostcode`, `image`, `numkids`, `ageofkids`, `typeofservice`, `servicehours`, `active`) VALUES
(12, 'Amira', 'Kabir', 'amira@yahoo.com', 24, 'SHA1 (a)', '', 'Paypal', '+2348038471836', 'London Street', 'Gavin', '3004', 'John Street', 'Gavin', '4211', 'IMG_3438.JPG', '2', '3,4', 'Special Care', '3', 1),
(30, 'Farida', 'Kabir', 'fareedakabeer@gmail.com', 0, 'SHA1(red)', '49ae49a23f67c759bf4fc791ba842aa2', 'Credit Card', '8038471835', 'No 1b dar es salam close wuse 2', 'Fct', '900001', 'g', '', '', 'IMG_3600.JPG', '4', '4', 'f', '4', 1),
(31, 'Farida', 'Kabir', 'fareedakabeer@icloud.com', NULL, 'SHA1(vvrvrvrvr)', '352fe25daf686bdb4edca223c921acea', 'Paypal', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, 0),
(32, 'Farida', 'Kabir', 'otracvhf@gmail.com', NULL, 'SHA1 (f)', '50c3d7614917b24303ee6a220679dab3', 'Paypal', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, 0),
(33, 'Janet', 'Jane', 'j@yahoo.com', NULL, 'SHA1 (j)', '918317b57931b6b7a7d29490fe5ec9f9', 'Paypal', '+23455677899', 'John Street', 'Gavin', '4444', 'James Street', 'Adelaide', '3333', 'IMG_3437.JPG', '3', '3,4,5', 'r', '4', 0);

-- --------------------------------------------------------

--
-- Table structure for table `passwordReset`
--

CREATE TABLE `passwordReset` (
  `id` int(11) NOT NULL,
  `email` text,
  `hashvalue` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `passwordReset`
--

INSERT INTO `passwordReset` (`id`, `email`, `hashvalue`) VALUES
(1, 'fareedakabeer@icloud.com', '289dff07669d7a23de0ef88d2f7129e7'),
(2, 'fareedakabeer@icloud.com', '4daa3db355ef2b0e64b472968cb70f0d'),
(3, 'fareedakabeer@icloud.com', '5737c6ec2e0716f3d8a7a5c4e0de0d9a'),
(4, 'fareedakabeer@icloud.com', '6faa8040da20ef399b63a72d0e4ab575'),
(5, 'fareedakabeer@icloud.com', '6faa8040da20ef399b63a72d0e4ab575'),
(6, 'f@yahoo.com', 'e744f91c29ec99f0e662c9177946c627'),
(7, 'f@yahoo.com', '30bb3825e8f631cc6075c0f87bb4978c'),
(8, 'f@yahoo.com', '02a32ad2669e6fe298e607fe7cc0e1a0'),
(9, 'f@yahoo.com', '1ff1de774005f8da13f42943881c655f'),
(10, 'f@yahoo.com', '5f0f5e5f33945135b874349cfbed4fb9'),
(11, 'f@yahoo.com', 'd58072be2820e8682c0a27c0518e805e'),
(12, 'f@yahoo.com', 'f9028faec74be6ec9b852b0a542e2f39'),
(13, 'f@yahoo.com', 'df263d996281d984952c07998dc54358'),
(14, 'f@yahoo.com', '07a96b1f61097ccb54be14d6a47439b0'),
(15, 'fareedakabeer@icloud.com', 'f3f27a324736617f20abbf2ffd806f6d');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`AdminID`);

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`BookingID`);

--
-- Indexes for table `coordinators`
--
ALTER TABLE `coordinators`
  ADD PRIMARY KEY (`CoordinatorID`);

--
-- Indexes for table `educators`
--
ALTER TABLE `educators`
  ADD PRIMARY KEY (`EducatorID`);

--
-- Indexes for table `parents`
--
ALTER TABLE `parents`
  ADD PRIMARY KEY (`ParentID`),
  ADD UNIQUE KEY `email` (`email`),
  ADD KEY `ParentID` (`ParentID`);

--
-- Indexes for table `passwordReset`
--
ALTER TABLE `passwordReset`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `AdminID` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `BookingID` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `coordinators`
--
ALTER TABLE `coordinators`
  MODIFY `CoordinatorID` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `educators`
--
ALTER TABLE `educators`
  MODIFY `EducatorID` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `parents`
--
ALTER TABLE `parents`
  MODIFY `ParentID` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
--
-- AUTO_INCREMENT for table `passwordReset`
--
ALTER TABLE `passwordReset`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;