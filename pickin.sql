-- phpMyAdmin SQL Dump
-- version 4.7.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Jan 01, 2018 at 11:54 AM
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
  `postcode` int(11) NOT NULL,
  `suburb` varchar(250) NOT NULL,
  `typeofservice` text NOT NULL,
  `day` char(200) NOT NULL,
  `starttime` time(6) NOT NULL,
  `endtime` time(6) NOT NULL,
  `paymentmethod` text NOT NULL,
  `timestamp` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`BookingID`, `ParentID`, `EducatorID`, `postcode`, `suburb`, `typeofservice`, `day`, `starttime`, `endtime`, `paymentmethod`, `timestamp`) VALUES
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
(12, 12, 2, 0, '', '', 'monday , friday ,', '00:00:00.000000', '00:00:00.000000', '', '2018-01-01 01:00:20.161355');

-- --------------------------------------------------------

--
-- Table structure for table `coordinators`
--

CREATE TABLE `coordinators` (
  `CoordinatorID` int(200) NOT NULL,
  `firstname` text NOT NULL,
  `lastname` text NOT NULL,
  `phonenumber` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `address` varchar(250) NOT NULL,
  `suburb` varchar(50) NOT NULL,
  `postcode` int(20) NOT NULL,
  `avatar` varchar(250) NOT NULL DEFAULT 'default.jpg',
  `password` varchar(30) NOT NULL,
  `hashkey` varchar(32) NOT NULL,
  `active` int(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `coordinators`
--

INSERT INTO `coordinators` (`CoordinatorID`, `firstname`, `lastname`, `phonenumber`, `email`, `address`, `suburb`, `postcode`, `avatar`, `password`, `hashkey`, `active`) VALUES
(2, 'James', 'Hope', '+2348038471835', 'james@yahoo.com', '29 Earl Street', 'North Adelaide, SA', 5006, 'default.jpg', 'james', '', 1),
(6, 'Farida', 'Kabir', '8038471835', 'fareedakabeer@gmail.com', 'No 1B Dar es Salam Close Wuse 2', 'Gavin', 5113, 'IMG_3438.JPG', 'SHA1 (f)', '', 1);

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
  `hashkey` varchar(32) NOT NULL,
  `phonenumber` varchar(30) NOT NULL,
  `address` varchar(250) NOT NULL,
  `suburb` varchar(250) NOT NULL,
  `postcode` int(30) NOT NULL,
  `avatar` varchar(255) DEFAULT 'default.jpg',
  `numkids` varchar(250) NOT NULL,
  `ageofkids` varchar(50) NOT NULL,
  `typeofservice` varchar(250) NOT NULL,
  `servicehours` varchar(250) NOT NULL,
  `rating` int(5) DEFAULT '0',
  `active` int(1) NOT NULL DEFAULT '0'
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
(10, 0, 'Farida', 'Kabir', 'fareedakabeer@icloud.com', 'SHA1 (ff)', '7e7757b1e12abcb736ab9a754ffb617a', '', '', '', 0, 'default.jpg', '', '', '', '', 0, 1),
(11, 0, 'Amira', 'Kabir', 'amira@gmail.com', 'SHA1 (a)', '202cb962ac59075b964b07152d234b70', '', '32, Thames Street', 'Gavin', 5006, 'default.jpg', '', '', '', '', 0, 1),
(12, 0, 'tt', 'tt', 't@yahoo.com', 'SHA1 (t)', '1ecfb463472ec9115b10c292ef8bc986', '', '', '', 0, 'default.jpg', '', '', '', '', 0, 1),
(13, 0, 'Farida', 'Kabir', 'fareedakabeer@gmail.com', 'SHA1 (f)', '', '8038471835', 'No 1b dar es salam close wuse 2', 'Fct', 900001, 'IMG_3440.JPG', '2', '2,3', 'ww', '2', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `parents`
--

CREATE TABLE `parents` (
  `ParentID` int(200) NOT NULL,
  `firstname` text NOT NULL,
  `lastname` text NOT NULL,
  `email` varchar(30) NOT NULL,
  `age` int(50) NOT NULL,
  `password` varchar(30) NOT NULL,
  `hashkey` varchar(32) NOT NULL,
  `paymentmethod` text NOT NULL,
  `phonenumber` varchar(30) NOT NULL,
  `homeaddress` varchar(255) NOT NULL,
  `homesuburb` varchar(50) NOT NULL,
  `homepostcode` varchar(50) NOT NULL,
  `officeaddress` varchar(255) NOT NULL,
  `officesuburb` varchar(50) NOT NULL,
  `officepostcode` varchar(50) NOT NULL,
  `image` varchar(200) NOT NULL,
  `numkids` varchar(100) NOT NULL,
  `ageofkids` varchar(30) NOT NULL,
  `typeofservice` varchar(200) NOT NULL,
  `servicehours` varchar(50) NOT NULL,
  `active` int(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `parents`
--

INSERT INTO `parents` (`ParentID`, `firstname`, `lastname`, `email`, `age`, `password`, `hashkey`, `paymentmethod`, `phonenumber`, `homeaddress`, `homesuburb`, `homepostcode`, `officeaddress`, `officesuburb`, `officepostcode`, `image`, `numkids`, `ageofkids`, `typeofservice`, `servicehours`, `active`) VALUES
(12, 'Amira', 'Kabir', 'amira@yahoo.com', 24, 'SHA1 (a)', '', 'Paypal', '+2348038471836', 'London Street', 'Gavin', '3004', 'John Street', 'Gavin', '4211', 'IMG_3438.JPG', '2', '3,4', 'Special Care', '3', 1),
(30, 'Farida', 'Kabir', 'fareedakabeer@gmail.com', 0, 'SHA1 (f)', '49ae49a23f67c759bf4fc791ba842aa2', 'Credit Card', '', 'John Street', 'Adelaide', '5006', '', '', '', 'default.jpg', '0', '0', '', '', 1);

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
  MODIFY `BookingID` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `coordinators`
--
ALTER TABLE `coordinators`
  MODIFY `CoordinatorID` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `educators`
--
ALTER TABLE `educators`
  MODIFY `EducatorID` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `parents`
--
ALTER TABLE `parents`
  MODIFY `ParentID` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;