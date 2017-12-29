-- phpMyAdmin SQL Dump
-- version 4.7.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Dec 29, 2017 at 09:18 PM
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
  `postcode` int(11) NOT NULL,
  `suburb` text NOT NULL,
  `typeofservice` text NOT NULL,
  `day` char(200) NOT NULL,
  `starttime` time(6) NOT NULL,
  `endtime` time(6) NOT NULL,
  `paymentmethod` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`BookingID`, `ParentID`, `postcode`, `suburb`, `typeofservice`, `day`, `starttime`, `endtime`, `paymentmethod`) VALUES
(1, 0, 5006, 'North Adelaide, SA', 'Morning Childcare Service', 'monday ,', '08:00:00.000000', '09:00:00.000000', 'Paypal'),
(2, 0, 5006, 'North Adelaide, SA', 'Morning Childcare Service', 'monday , tuesday ,', '08:00:00.000000', '09:00:00.000000', 'Paypal'),
(3, 0, 5006, 'gavin', 'Morning Childcare Service', 'monday ,', '08:00:00.000000', '09:00:00.000000', 'Credit Card'),
(4, 0, 444, 'ffff', 'Morning Childcare Service', 'monday ,', '08:00:00.000000', '09:00:00.000000', 'Credit Card');

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
  `number` varchar(50) NOT NULL,
  `password` varchar(30) NOT NULL,
  `hashkey` varchar(32) NOT NULL,
  `active` int(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `coordinators`
--

INSERT INTO `coordinators` (`CoordinatorID`, `firstname`, `lastname`, `phonenumber`, `email`, `address`, `suburb`, `postcode`, `avatar`, `number`, `password`, `hashkey`, `active`) VALUES
(1, 'Farida', 'Kabir', '', 'fareedakabeer@gmail.com', 'James Street', 'Gavin', 5006, 'default.jpg', '+2348038471835', 'SHA1 (f)', '3a835d3215755c435ef4fe9965a3f2a0', 1);

-- --------------------------------------------------------

--
-- Table structure for table `educators`
--

CREATE TABLE `educators` (
  `EducatorID` int(200) NOT NULL,
  `firstname` text NOT NULL,
  `lastname` text NOT NULL,
  `email` varchar(30) NOT NULL,
  `phonenumber` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `hashkey` varchar(32) NOT NULL,
  `postcode` int(30) NOT NULL,
  `suburb` text NOT NULL,
  `CoordinatorID` int(11) NOT NULL,
  `rating` int(5) DEFAULT '0',
  `avatar` varchar(255) DEFAULT 'default.jpg',
  `active` int(1) NOT NULL DEFAULT '0',
  `address` varchar(250) NOT NULL,
  `numkids` varchar(250) NOT NULL,
  `ageofkids` varchar(250) NOT NULL,
  `typeofservice` varchar(250) NOT NULL,
  `servicehours` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `educators`
--

INSERT INTO `educators` (`EducatorID`, `firstname`, `lastname`, `email`, `phonenumber`, `password`, `hashkey`, `postcode`, `suburb`, `CoordinatorID`, `rating`, `avatar`, `active`, `address`, `numkids`, `ageofkids`, `typeofservice`, `servicehours`) VALUES
(1, 'Habu', 'Mohammed', 'moh@yahoo.com', '+2348038471835', 'mohash', '', 5006, 'North Adelaide, SA', 1, 1, 'default.jpg', 1, '', '', '', '', ''),
(2, 'Zee', 'Musa', 'zee@yahoo.com', '+2345968735467', 'zee', '', 5006, 'North Adelaide, SA', 1, 2, 'default.jpg', 1, '', '', '', '', ''),
(3, 'Ree', 'Akin', 'ree@yahoo.com', '+2345968735467', 'ree', '', 5950, 'Adelaide Airport, SA', 1, 3, 'default.jpg', 1, '', '', '', '', ''),
(4, 'Habu', 'Hashidu', 'habu@yahoo.com', '+2348097654372', 'habu', '', 5950, 'Adelaide Airport, SA', 1, 3, 'default.jpg', 1, '', '', '', '', ''),
(5, 'Kauna', 'Magaji', 'kauna@yahoo.com', '+2348075937563', 'kauna', '', 4703, 'Adelaide Park, Old', 0, 3, 'default.jpg', 0, '', '', '', '', ''),
(6, 'Mary', 'Joseph', 'mary@yahoo.com', '+2345968735467', 'mary', '', 4703, 'Adelaide Park Old', 0, 3, 'default.jpg', 0, '', '', '', '', ''),
(7, 'Isabelle', 'Joseph', 'isabel@gmail.com', '+2345968735465', 'isabel', '', 4211, 'Gaven', 0, 4, 'default.jpg', 0, '', '', '', '', ''),
(8, 'Lucy', 'Lui', 'lucy@yahoo.com', '+2348038471833', 'lucy', '', 4211, 'Gaven', 0, 4, 'default.jpg', 0, '', '', '', '', ''),
(9, 'Nora', 'Roberts', 'nora@yahoo.com', '+234596873086', 'nora', '', 3814, 'Garfield, Vic', 0, 3, 'default.jpg', 0, '', '', '', '', ''),
(10, 'Farida', 'Kabir', 'fareedakabeer@icloud.com', '', 'SHA1 (ff)', '7e7757b1e12abcb736ab9a754ffb617a', 0, '', 0, 0, 'default.jpg', 0, '', '', '', '', ''),
(11, 'Amira', 'Kabir', 'amira@gmail.com', '', 'SHA1 (a)', '202cb962ac59075b964b07152d234b70', 0, '', 0, 0, 'default.jpg', 0, '', '', '', '', ''),
(12, 'tt', 'tt', 't@yahoo.com', '', 'SHA1 (t)', '1ecfb463472ec9115b10c292ef8bc986', 0, '', 0, 0, 'default.jpg', 0, '', '', '', '', '');

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
  `image` varbinary(200) NOT NULL,
  `numkids` int(10) NOT NULL,
  `ageofkids` int(30) NOT NULL,
  `typeofservice` text NOT NULL,
  `servicehours` varchar(50) NOT NULL,
  `active` int(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `parents`
--

INSERT INTO `parents` (`ParentID`, `firstname`, `lastname`, `email`, `age`, `password`, `hashkey`, `paymentmethod`, `phonenumber`, `homeaddress`, `homesuburb`, `homepostcode`, `officeaddress`, `officesuburb`, `officepostcode`, `image`, `numkids`, `ageofkids`, `typeofservice`, `servicehours`, `active`) VALUES
(12, 'Amira', 'Kabir', 'amira@yahoo.com', 24, 'SHA1 (a)', '', 'Paypal', '+2348038471835', 'No 20 Yusuf Abdulsalam Street', 'North Adelaide, SA', '5006', '252 Winston Street', 'Gavin', '4211', 0xffd8ffe000104a46494600010101004800480000ffe1344e4578696600004d4d002a00000008000c010f0002000000060000009e011000020000000e000000a4011200030000000100010000011a000500000001000000b2011b000500000001000000ba0128000300000001000200000132000200000014000000c2013b000200000001000000000213000300000001000200008298000200000001000000008769000400000001000000d68825000400000001000024b2000024c643616e6f6e0043616e6f6e20, 1, 4, 'Drop off and Pick up', '2', 1),
(13, 'Hee', 'Hii', 'h@gmail.com', 0, 'SHA1 (hee)', '', 'Paypal', '0', '', '', '', '', '', '', '', 0, 0, '', '', 1),
(30, 'Farida', 'Kabir', 'fareedakabeer@gmail.com', 0, 'SHA1 (f)', '49ae49a23f67c759bf4fc791ba842aa2', 'Credit Card', '', '', '', '', '', '', '', '', 0, 0, '', '', 1),
(31, '', '', '', 0, '', '', '', '8038471835', 'No 1b dar es salam close wuse 2', 'Fct', '900001', 'ffff', 'fffff', '55555', 0x44534330313334312e4a5047, 1, 1, 'dd', '3', 1);

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
  ADD PRIMARY KEY (`BookingID`),
  ADD KEY `ParentID` (`ParentID`);

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
  MODIFY `BookingID` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `coordinators`
--
ALTER TABLE `coordinators`
  MODIFY `CoordinatorID` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `educators`
--
ALTER TABLE `educators`
  MODIFY `EducatorID` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `parents`
--
ALTER TABLE `parents`
  MODIFY `ParentID` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;