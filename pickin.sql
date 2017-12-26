-- phpMyAdmin SQL Dump
-- version 4.7.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Dec 25, 2017 at 02:00 PM
-- Server version: 5.6.35
-- PHP Version: 7.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `pickin`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `SN` int(200) NOT NULL,
  `postcode` int(11) NOT NULL,
  `suburb` text NOT NULL,
  `typeofservice` text NOT NULL,
  `day` char(200) NOT NULL,
  `starttime` time(6) NOT NULL,
  `endtime` time(6) NOT NULL,
  `paymentmethod` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`SN`, `postcode`, `suburb`, `typeofservice`, `day`, `starttime`, `endtime`, `paymentmethod`) VALUES
(1, 5006, 'North Adelaide, SA', '', 'on', '16:05:00.000000', '17:05:00.000000', 'Credit Card'),
(2, 5006, 'North Adelaide, SA', '', 'on', '09:00:00.000000', '11:00:00.000000', 'Paypal'),
(3, 5006, 'North Adelaide, SA', '', 'on', '08:00:00.000000', '09:00:00.000000', 'Paypal'),
(4, 5006, 'North Adelaide, SA', '', 'saturday', '08:00:00.000000', '09:00:00.000000', 'Credit Card'),
(5, 5006, 'North Adelaide, SA', '', 'on', '08:00:00.000000', '09:00:00.000000', 'Paypal'),
(6, 5950, 'Adelaide Airport, SA', '', 'on', '08:00:00.000000', '09:00:00.000000', 'Credit Card'),
(7, 5950, 'Adelaide Airport, SA', '', 'on', '17:00:00.000000', '18:00:00.000000', 'Credit Card'),
(8, 5950, 'Adelaide Airport, SA', '', 'on', '08:00:00.000000', '09:00:00.000000', 'Credit Card'),
(9, 5950, 'Adelaide Airport, SA', '', '', '08:00:00.000000', '09:00:00.000000', 'Credit Card'),
(10, 5950, 'Adelaide Airport, SA', '', '', '09:00:00.000000', '17:00:00.000000', 'Paypal'),
(11, 4703, 'Adelaide Park, Old', '', 'on , on ,', '08:00:00.000000', '09:00:00.000000', 'Credit Card'),
(12, 4703, 'Adelaide Park, Old', '', 'on , on ,', '17:00:00.000000', '18:00:00.000000', 'Credit Card'),
(13, 4703, 'Adelaide Park, Old', '', 'on , on ,', '21:00:00.000000', '22:00:00.000000', 'Credit Card'),
(14, 4211, 'Gavin', '', 'monday , tuesday ,', '05:05:00.000000', '06:00:00.000000', 'Credit Card'),
(15, 4211, 'Gavin', 'Morning Childcare Service', 'monday ,', '06:00:00.000000', '07:00:00.000000', 'Paypal'),
(16, 4211, 'Gavin', 'Morning Childcare Service', 'monday ,', '06:00:00.000000', '07:00:00.000000', 'Paypal');

-- --------------------------------------------------------

--
-- Table structure for table `coordinators`
--

CREATE TABLE `coordinators` (
  `SN` int(200) NOT NULL,
  `firstname` text NOT NULL,
  `lastname` text NOT NULL,
  `email` varchar(50) NOT NULL,
  `number` varchar(50) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `educators`
--

CREATE TABLE `educators` (
  `SN` int(200) NOT NULL,
  `firstname` text NOT NULL,
  `lastname` text NOT NULL,
  `email` varchar(30) NOT NULL,
  `number` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `postcode` int(30) NOT NULL,
  `suburb` text NOT NULL,
  `coordinator` text NOT NULL,
  `rating` int(5) DEFAULT '0',
  `avatar` varchar(255) DEFAULT 'default.jpg'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `educators`
--

INSERT INTO `educators` (`SN`, `firstname`, `lastname`, `email`, `number`, `password`, `postcode`, `suburb`, `coordinator`, `rating`, `avatar`) VALUES
(1, 'Habu', 'Mohammed', 'moh@yahoo.com', '+2348038471835', 'mohash', 5006, 'North Adelaide, SA', 'Mr Abdul', 1, 'default.jpg'),
(2, 'Zee', 'Musa', 'zee@yahoo.com', '+2345968735467', 'zee', 5006, 'North Adelaide, SA', 'Mr Joshua', 2, 'default.jpg'),
(3, 'Ree', 'Akin', 'ree@yahoo.com', '+2345968735467', 'ree', 5950, 'Adelaide Airport, SA', 'Mr Joshua', 3, 'default.jpg'),
(4, 'Habu', 'Hashidu', 'habu@yahoo.com', '+2348097654372', 'habu', 5950, 'Adelaide Airport, SA', 'Mr Yusuf', 3, 'default.jpg'),
(5, 'Kauna', 'Magaji', 'kauna@yahoo.com', '+2348075937563', 'kauna', 4703, 'Adelaide Park, Old', 'Mr Joshua', 3, 'default.jpg'),
(6, 'Mary', 'Joseph', 'mary@yahoo.com', '+2345968735467', 'mary', 4703, 'Adelaide Park Old', 'Mr John', 3, 'default.jpg'),
(7, 'Isabelle', 'Joseph', 'isabel@gmail.com', '+2345968735465', 'isabel', 4211, 'Gaven', 'Mr John', 4, 'default.jpg'),
(8, 'Lucy', 'Lui', 'lucy@yahoo.com', '+2348038471833', 'lucy', 4211, 'Gaven', 'Mr Philips', 4, 'default.jpg'),
(9, 'Nora', 'Roberts', 'nora@yahoo.com', '+234596873086', 'nora', 3814, 'Garfield, Vic', 'Mr Sam', 3, 'default.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `parents`
--

CREATE TABLE `parents` (
  `SN` int(200) NOT NULL,
  `image` varbinary(200) NOT NULL,
  `firstname` text NOT NULL,
  `lastname` text NOT NULL,
  `email` varchar(30) NOT NULL,
  `age` int(50) NOT NULL,
  `password` varchar(30) NOT NULL,
  `hash` varchar(32) NOT NULL,
  `paymentmethod` text NOT NULL,
  `phonenumber` varchar(30) NOT NULL,
  `homeaddress` varchar(255) NOT NULL,
  `homesuburb` varchar(50) NOT NULL,
  `homepostcode` varchar(50) NOT NULL,
  `officeaddress` varchar(255) NOT NULL,
  `officesuburb` varchar(50) NOT NULL,
  `officepostcode` varchar(50) NOT NULL,
  `numkids` int(10) NOT NULL,
  `ageofkids` int(30) NOT NULL,
  `typeofservice` text NOT NULL,
  `servicehours` varchar(50) NOT NULL,
  `active` int(1) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `parents`
--

INSERT INTO `parents` (`SN`, `image`, `firstname`, `lastname`, `email`, `age`, `password`, `hash`, `paymentmethod`, `phonenumber`, `homeaddress`, `homesuburb`, `homepostcode`, `officeaddress`, `officesuburb`, `officepostcode`, `numkids`, `ageofkids`, `typeofservice`, `servicehours`, `active`) VALUES
(12, 0xffd8ffe000104a46494600010101004800480000ffe1344e4578696600004d4d002a00000008000c010f0002000000060000009e011000020000000e000000a4011200030000000100010000011a000500000001000000b2011b000500000001000000ba0128000300000001000200000132000200000014000000c2013b000200000001000000000213000300000001000200008298000200000001000000008769000400000001000000d68825000400000001000024b2000024c643616e6f6e0043616e6f6e20, 'Amira', 'Kabir', 'amira@yahoo.com', 24, 'SHA1 (a)', '', 'Paypal', '+2348038471835', 'No 20 Yusuf Abdulsalam Street', 'North Adelaide, SA', '5006', '252 Winston Street', 'Gavin', '4211', 1, 4, 'Drop off and Pick up', '2', 1),
(13, '', 'Hee', 'Hii', 'h@gmail.com', 0, 'SHA1 (hee)', '', 'Paypal', '0', '', '', '', '', '', '', 0, 0, '', '', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`SN`);

--
-- Indexes for table `coordinators`
--
ALTER TABLE `coordinators`
  ADD PRIMARY KEY (`SN`);

--
-- Indexes for table `educators`
--
ALTER TABLE `educators`
  ADD PRIMARY KEY (`SN`);

--
-- Indexes for table `parents`
--
ALTER TABLE `parents`
  ADD PRIMARY KEY (`SN`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `SN` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `coordinators`
--
ALTER TABLE `coordinators`
  MODIFY `SN` int(200) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `educators`
--
ALTER TABLE `educators`
  MODIFY `SN` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `parents`
--
ALTER TABLE `parents`
  MODIFY `SN` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;