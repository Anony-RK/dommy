-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 31, 2021 at 04:42 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rasi`
--

-- --------------------------------------------------------

--
-- Table structure for table `branch`
--

CREATE TABLE `branch` (
  `branchid` int(11) NOT NULL,
  `branchname` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `address1` varchar(255) NOT NULL,
  `address2` varchar(255) NOT NULL,
  `pincode` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `phonenumber` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `faxnumber` varchar(255) NOT NULL,
  `tanno` varchar(255) NOT NULL,
  `gst` varchar(255) NOT NULL,
  `pfno` varchar(255) NOT NULL,
  `esicno` varchar(255) NOT NULL,
  `loginshortername` varchar(255) NOT NULL,
  `status` varchar(10) NOT NULL,
  `createddate` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `branch`
--

INSERT INTO `branch` (`branchid`, `branchname`, `address`, `address1`, `address2`, `pincode`, `state`, `country`, `phonenumber`, `email`, `faxnumber`, `tanno`, `gst`, `pfno`, `esicno`, `loginshortername`, `status`, `createddate`) VALUES
(2, 'branch21', 'address1', 'address11', 'address21', '123451', 'tamilnadu1', 'india1', '1234567891', 'karthiscores1@gmail.com', '1234561', '1231', '2341', '4561', '6781', 'login ok1', '0', '2021-05-28 02:18:02');

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE `company` (
  `companyid` int(11) NOT NULL,
  `companyname` varchar(255) NOT NULL,
  `cinno` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `address1` varchar(255) NOT NULL,
  `address2` varchar(255) NOT NULL,
  `pincode` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `phonenumber` varchar(255) NOT NULL,
  `faxnumber` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `website` varchar(255) NOT NULL,
  `panno` varchar(255) NOT NULL,
  `itwardcircleno` varchar(255) NOT NULL,
  `tanno` varchar(255) NOT NULL,
  `gst` varchar(255) NOT NULL,
  `pfno` varchar(255) NOT NULL,
  `esicno` varchar(255) NOT NULL,
  `loginshortername` varchar(255) NOT NULL,
  `booksstartfrom` varchar(255) NOT NULL,
  `companyimagepath` varchar(255) NOT NULL,
  `status` varchar(10) NOT NULL,
  `createddate` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`companyid`, `companyname`, `cinno`, `address`, `address1`, `address2`, `pincode`, `state`, `country`, `phonenumber`, `faxnumber`, `email`, `website`, `panno`, `itwardcircleno`, `tanno`, `gst`, `pfno`, `esicno`, `loginshortername`, `booksstartfrom`, `companyimagepath`, `status`, `createddate`) VALUES
(1, 'comp1', '12341', 'address1', 'address11', 'address21', '123451', 'state1', 'country1', '1234567891', '1234567891', 'email1@gmail.com', 'www.i1.com', '1234566871', '12341231', '12341231', '22342421', '22345561', '22345571', 'shorter1', '13 May, 2021', '', '0', '2021-05-28 16:38:49'),
(2, 'weerewr', 'wetew', 'qwewq', 'qwe', 'qwewq', '234214', 'dsqadqd', 'wqdwqde', '2323232322', '2323232323', 'karthiprice@gmail.com', 'eqqweqwe', 'cypdk2666r', '2233', '3344', '4455', '123', '456', 'login', '20 May, 2021', '', '0', '2021-05-28 19:39:18'),
(3, 'comp1', '12341', 'address1', 'address11', 'address21', '123456', 'state1', 'country1', '3253253253', '1234567891', 'karthiprice@gmail.com', 'reyreyer.com', 'cypdk2666r', '12341231', '12341231', '22342421', '22345561', '22345571', 'login', '13 May, 2021', 'c404bacf-52c1-4ba3-8a80-2e382b2bb4fe.jpg', '0', '2021-05-28 19:45:44');

-- --------------------------------------------------------

--
-- Table structure for table `designation`
--

CREATE TABLE `designation` (
  `designationid` int(10) NOT NULL,
  `designation` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `designation`
--

INSERT INTO `designation` (`designationid`, `designation`) VALUES
(2, 'Teacher Updated'),
(3, 'Doctor Update'),
(4, 'Engineer'),
(6, 'New Demo');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `employeeid` int(11) NOT NULL,
  `employeecode` varchar(100) NOT NULL,
  `employeename` varchar(100) NOT NULL,
  `dateofbirth` varchar(50) NOT NULL,
  `gender` varchar(30) NOT NULL,
  `email` varchar(100) NOT NULL,
  `designation` varchar(40) NOT NULL,
  `mobilenumber` varchar(50) NOT NULL,
  `dateofjoining` varchar(50) NOT NULL,
  `contact` varchar(50) NOT NULL,
  `employeeimage` varchar(50) NOT NULL,
  `expertise` varchar(50) NOT NULL,
  `starrating` varchar(20) NOT NULL,
  `basic` int(50) NOT NULL,
  `hra` int(50) NOT NULL,
  `conveyance` int(50) NOT NULL,
  `allowance` int(50) NOT NULL,
  `incentivepercent` int(50) NOT NULL,
  `grosspay` int(50) NOT NULL,
  `tds` int(50) DEFAULT NULL,
  `pf` int(50) NOT NULL,
  `esi` int(50) DEFAULT NULL,
  `loans` int(50) NOT NULL,
  `salaryadvance` int(50) NOT NULL,
  `totaldeduction` int(50) NOT NULL,
  `anyotherdeduction` int(50) NOT NULL,
  `institutetype1` varchar(100) NOT NULL,
  `name1` varchar(100) NOT NULL,
  `positionheld1` varchar(50) NOT NULL,
  `place1` varchar(50) NOT NULL,
  `fromperiod1` varchar(50) NOT NULL,
  `toperiod1` varchar(50) NOT NULL,
  `date1` varchar(30) NOT NULL,
  `institutetype2` varchar(100) NOT NULL,
  `name2` varchar(50) NOT NULL,
  `positionheld2` varchar(50) NOT NULL,
  `place2` varchar(50) NOT NULL,
  `fromperiod2` varchar(50) NOT NULL,
  `toperiod2` varchar(50) NOT NULL,
  `date2` varchar(50) NOT NULL,
  `institutetype3` varchar(100) NOT NULL,
  `name3` varchar(50) NOT NULL,
  `positionheld3` varchar(50) NOT NULL,
  `place3` varchar(50) NOT NULL,
  `fromperiod3` varchar(50) NOT NULL,
  `toperiod3` varchar(50) NOT NULL,
  `date3` varchar(50) NOT NULL,
  `institutetype4` varchar(100) NOT NULL,
  `name4` varchar(50) NOT NULL,
  `positionheld4` varchar(50) NOT NULL,
  `place4` varchar(50) NOT NULL,
  `fromperiod4` varchar(50) NOT NULL,
  `toperiod4` varchar(50) NOT NULL,
  `date4` varchar(50) NOT NULL,
  `institutetype5` varchar(100) NOT NULL,
  `name5` varchar(50) NOT NULL,
  `positionheld5` varchar(50) NOT NULL,
  `place5` varchar(50) NOT NULL,
  `fromperiod5` varchar(50) NOT NULL,
  `toperiod5` varchar(50) NOT NULL,
  `date5` varchar(50) NOT NULL,
  `title1` varchar(100) NOT NULL,
  `certificate1` varchar(100) NOT NULL,
  `title2` varchar(100) NOT NULL,
  `certificate2` varchar(100) NOT NULL,
  `title3` varchar(100) NOT NULL,
  `certificate3` varchar(100) NOT NULL,
  `title4` varchar(100) NOT NULL,
  `certificate4` varchar(100) NOT NULL,
  `title5` varchar(100) NOT NULL,
  `certificate5` varchar(100) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`employeeid`, `employeecode`, `employeename`, `dateofbirth`, `gender`, `email`, `designation`, `mobilenumber`, `dateofjoining`, `contact`, `employeeimage`, `expertise`, `starrating`, `basic`, `hra`, `conveyance`, `allowance`, `incentivepercent`, `grosspay`, `tds`, `pf`, `esi`, `loans`, `salaryadvance`, `totaldeduction`, `anyotherdeduction`, `institutetype1`, `name1`, `positionheld1`, `place1`, `fromperiod1`, `toperiod1`, `date1`, `institutetype2`, `name2`, `positionheld2`, `place2`, `fromperiod2`, `toperiod2`, `date2`, `institutetype3`, `name3`, `positionheld3`, `place3`, `fromperiod3`, `toperiod3`, `date3`, `institutetype4`, `name4`, `positionheld4`, `place4`, `fromperiod4`, `toperiod4`, `date4`, `institutetype5`, `name5`, `positionheld5`, `place5`, `fromperiod5`, `toperiod5`, `date5`, `title1`, `certificate1`, `title2`, `certificate2`, `title3`, `certificate3`, `title4`, `certificate4`, `title5`, `certificate5`, `status`) VALUES
(1, '1001', 'prithiviraj', '2021-05-06', 'Male', 'prithivirajk2503@gmail.com', 'Manager', '06381268718', '2021-05-07', '06381268718', 'in4.jpg', '76', '4', 2, 2, 2, 2, 23, 31, 23, 23, 23, 66, 66, 267, 66, 'Technical', 'Prithiviraj', 'K', 'Melathaniyam', '87568', '875', '85', 'Select Institute Type', '', '', '', '', '', '', 'Select Institute Type', '', '', '', '', '', '', 'Select Institute Type', '', '', '', '', '', '', 'Select Institute Type', '', '', '', '', '', '', '', 'PRITHIVIRAJ.pdf', '', '', '', '', '', '', '', '', '0');

-- --------------------------------------------------------

--
-- Table structure for table `item`
--

CREATE TABLE `item` (
  `itemid` int(10) NOT NULL,
  `partnumber` varchar(200) NOT NULL,
  `stocktype` varchar(200) NOT NULL,
  `itemname` varchar(200) NOT NULL,
  `unitofmeasure` varchar(200) NOT NULL,
  `hsncode` varchar(200) NOT NULL,
  `gstrate` varchar(200) NOT NULL,
  `barcode` varchar(200) NOT NULL,
  `vendor` varchar(200) NOT NULL,
  `type` varchar(200) NOT NULL,
  `noofgmpcs` varchar(200) NOT NULL,
  `reorderlevel` varchar(200) NOT NULL,
  `lowerlevelqty` varchar(200) NOT NULL,
  `isincentive` varchar(200) NOT NULL,
  `isreuse` varchar(200) NOT NULL,
  `tablevendorselect` varchar(200) NOT NULL,
  `tableopeningstock` varchar(200) NOT NULL,
  `tableopeningpcs` varchar(200) NOT NULL,
  `tablecostperunit` varchar(200) NOT NULL,
  `tablecostprice` varchar(200) NOT NULL,
  `tablesellingpriceperpc` varchar(200) NOT NULL,
  `tabletotalsellingprice` varchar(200) NOT NULL,
  `status` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `item`
--

INSERT INTO `item` (`itemid`, `partnumber`, `stocktype`, `itemname`, `unitofmeasure`, `hsncode`, `gstrate`, `barcode`, `vendor`, `type`, `noofgmpcs`, `reorderlevel`, `lowerlevelqty`, `isincentive`, `isreuse`, `tablevendorselect`, `tableopeningstock`, `tableopeningpcs`, `tablecostperunit`, `tablecostprice`, `tablesellingpriceperpc`, `tabletotalsellingprice`, `status`) VALUES
(1, '1001', 'Sale', 'Chair', 'Gram', '72723', '12', '23423', 'VEN0001', 'plastic', '3', '13', '12', 'yes', 'no', 'VEN0001,VEN0002,', '1,1,', '2,1,', '2,1,', '2,1,', '1,1,', '1,1,', '0'),
(2, '65', 'Stock', 'qweqwe', 'Count', '765', '766', '776', 'VEN0002', '76567', '7656', '567', '76567', 'yes', 'yes', '', '', '', '', '', '', '', '0'),
(3, '1003', 'Towel', 'Towel', 'Count updated', '8723', '7235', '87235', 'VEN0001', 'cotton', '23', '234', '34', 'yes', 'yes', '', '', '', '', '', '', '', '0'),
(4, '87328', 'Sale', '85238', 'Gram', '76', '632', '875132', 'VEN0007', '7613', '7851283', '87', '632', 'yes', 'yes', 'VEN0007,VEN0002', '761,234', '1623,234', '83,234', '63163,54756', '623,234', '474103,54756', '0'),
(5, '873', 'Stock', 'shoes', 'Gram', '35', '87', 'kahsiu', 'VEN0002', '286387', '8723', '87235', '87235', 'yes', 'yes', '', '', '', '', '', '', '', '0'),
(6, '9008', 'Tools', 'Cutter', 'pieces', '823687', '872', '232', 'VEN0003', 'iron pices', '18', '15', '16', 'yes', 'no', 'VEN0001,VEN0005,VEN0010,VEN0011,VEN0002', '2,234,4,3,12', '56,3,4,4,123', '54,3,4,42,23', '108,702,16,126,276', '324,3,4,123,23', '648,702,16,369,276', '1');

-- --------------------------------------------------------

--
-- Table structure for table `units`
--

CREATE TABLE `units` (
  `unitid` int(15) NOT NULL,
  `unit` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `units`
--

INSERT INTO `units` (`unitid`, `unit`) VALUES
(3, 'Ton1'),
(4, 'weight'),
(12, 'Update'),
(14, 'Count updated *'),
(15, 'Gram'),
(17, 'Ok Insert'),
(18, 'pieces');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `user_password` varchar(255) NOT NULL,
  `role` varchar(50) NOT NULL,
  `trustactive` varchar(50) NOT NULL,
  `schoolcreationactive` varchar(50) NOT NULL,
  `manageuseractive` varchar(50) NOT NULL,
  `feemasteractive` varchar(50) NOT NULL,
  `subjectmasteractive` varchar(50) NOT NULL,
  `subjectgroupmasteractive` varchar(50) NOT NULL,
  `staffmasteractive` varchar(50) NOT NULL,
  `holidayinfoactive` varchar(50) NOT NULL,
  `createstudentactive` varchar(50) NOT NULL,
  `studentrollback` varchar(50) NOT NULL,
  `bulkimport` varchar(50) NOT NULL,
  `feescollectionactive` varchar(50) NOT NULL,
  `historyactive` varchar(50) NOT NULL,
  `birthdaywishesactive` varchar(50) NOT NULL,
  `generalwishesactive` varchar(50) NOT NULL,
  `paymentreminderactive` varchar(50) NOT NULL,
  `studentreportactive` varchar(50) NOT NULL,
  `castereportactive` varchar(50) NOT NULL,
  `pendingfeereportactive` varchar(50) NOT NULL,
  `collectionreportactive` varchar(50) NOT NULL,
  `status` varchar(255) NOT NULL,
  `Createddate` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `fullname`, `user_name`, `user_password`, `role`, `trustactive`, `schoolcreationactive`, `manageuseractive`, `feemasteractive`, `subjectmasteractive`, `subjectgroupmasteractive`, `staffmasteractive`, `holidayinfoactive`, `createstudentactive`, `studentrollback`, `bulkimport`, `feescollectionactive`, `historyactive`, `birthdaywishesactive`, `generalwishesactive`, `paymentreminderactive`, `studentreportactive`, `castereportactive`, `pendingfeereportactive`, `collectionreportactive`, `status`, `Createddate`) VALUES
(1, 'admin', 'support@feathertechnology.in', 'feather123', '1', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0', '2021-04-17 17:08:00');

-- --------------------------------------------------------

--
-- Table structure for table `user_logs`
--

CREATE TABLE `user_logs` (
  `loginid` int(11) NOT NULL,
  `ipaddress` varchar(255) NOT NULL,
  `login_date` varchar(255) NOT NULL,
  `fk_user_id` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_logs`
--

INSERT INTO `user_logs` (`loginid`, `ipaddress`, `login_date`, `fk_user_id`) VALUES
(1, '::1', '2021-04-17 05:14:16', '1'),
(2, '::1', '2021-04-17 05:16:15', '1'),
(3, '::1', '2021-04-17 05:17:36', '1'),
(4, '::1', '2021-04-19 09:50:40', '1'),
(5, '::1', '2021-04-23 10:45:10', '1'),
(6, '::1', '2021-04-24 06:52:22', '1'),
(7, '::1', '2021-04-24 10:36:30', '1'),
(8, '::1', '2021-04-24 10:37:55', '1'),
(9, '::1', '2021-04-24 10:39:46', '1'),
(10, '::1', '2021-04-24 11:56:41', '1'),
(11, '::1', '2021-04-25 12:28:33', '1'),
(12, '::1', '2021-04-26 10:23:53', '1'),
(13, '::1', '2021-04-26 10:42:25', '1'),
(14, '::1', '2021-04-27 01:32:36', '1'),
(15, '::1', '2021-04-27 08:12:46', '1'),
(16, '::1', '2021-04-29 10:34:22', '1'),
(17, '::1', '2021-04-29 11:20:33', '1'),
(18, '::1', '2021-04-30 10:33:16', '1'),
(19, '::1', '2021-04-30 10:34:57', '1'),
(20, '::1', '2021-05-01 12:21:25', '1'),
(21, '::1', '2021-05-01 04:54:12', '1'),
(22, '::1', '2021-05-04 10:27:10', '1'),
(23, '::1', '2021-05-05 07:25:33', '1'),
(24, '::1', '2021-05-06 12:03:20', '1'),
(25, '::1', '2021-05-06 11:00:45', '1'),
(26, '::1', '2021-05-07 04:28:21', '1'),
(27, '::1', '2021-05-07 05:24:13', '1'),
(28, '::1', '2021-05-07 11:56:56', '1'),
(29, '::1', '2021-05-09 03:58:57', '1'),
(30, '::1', '2021-05-13 04:22:59', '1'),
(31, '::1', '2021-05-13 11:57:33', '1'),
(32, '::1', '2021-05-14 04:29:22', '1'),
(33, '::1', '2021-05-14 08:09:56', '1'),
(34, '::1', '2021-05-18 06:10:48', '1'),
(35, '::1', '2021-05-19 06:18:37', '1'),
(36, '::1', '2021-05-20 05:55:25', '1'),
(37, '::1', '2021-05-20 06:29:46', '2'),
(38, '::1', '2021-05-20 06:30:46', '2'),
(39, '::1', '2021-05-20 06:31:03', '2'),
(40, '::1', '2021-05-20 06:31:17', '2'),
(41, '::1', '2021-05-29 01:50:15', '1'),
(42, '::1', '2021-05-29 01:50:27', '1'),
(43, '::1', '2021-05-29 05:07:36', '1'),
(44, '::1', '2021-05-29 05:12:11', '1'),
(45, '::1', '2021-05-31 06:30:13', '1');

-- --------------------------------------------------------

--
-- Table structure for table `vendordetails`
--

CREATE TABLE `vendordetails` (
  `vendorid` int(5) NOT NULL,
  `vendorcode` varchar(30) NOT NULL,
  `vendorname` varchar(30) NOT NULL,
  `address1` varchar(30) NOT NULL,
  `address2` varchar(30) NOT NULL,
  `pincode` int(10) NOT NULL,
  `contactperson` varchar(30) NOT NULL,
  `contact` varchar(30) NOT NULL,
  `mailid` varchar(50) NOT NULL,
  `gstnumber` varchar(30) NOT NULL,
  `pannumber` varchar(30) NOT NULL,
  `stocktype` varchar(100) NOT NULL,
  `deliverytime` varchar(30) NOT NULL,
  `reorderlevel` varchar(30) NOT NULL,
  `minimumstock` varchar(30) NOT NULL,
  `maximumstock` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vendordetails`
--

INSERT INTO `vendordetails` (`vendorid`, `vendorcode`, `vendorname`, `address1`, `address2`, `pincode`, `contactperson`, `contact`, `mailid`, `gstnumber`, `pannumber`, `stocktype`, `deliverytime`, `reorderlevel`, `minimumstock`, `maximumstock`) VALUES
(1, 'VEN0001', 'prithiviraj', '126 kamarajaburam street', 'Melathaniyam', 622002, 'Prithiviraj K', '6381268718', 'prithivirajk2503@gmail.com', '01ABCDE2345F6Z7', 'ABCDE1234F', 'apple															,Orange															,Strawberry												,Grapes											', '10', 'Yes', '100', '600'),
(2, 'VEN0002', 'Rajesh Kumar', '7G, rainbow colony', 'Covai', 622018, 'Prithiviraj K', '9876543298', 'rajesh@gmail.com', '51ABCDE2345F6Z9', 'EACBD7654G', 'Petrol,Diesel,Kerosine,Lignite', '20', 'No', '1000', '15000'),
(12, 'VEN0007', 'Name7', '132, BGT', 'Trichy', 6000012, 'Prithiviraj K', '8462121218', 'user99@gmail.com', 'KGUT7733Y', '51ABCDE2345F6Z9', 'Fruits, Vegetables', '20', 'No', '200', '2000'),
(14, 'VEN0009', 'Name', '287, TVS Street', 'Trichy', 6000014, 'Prithiviraj K', '8723486324', 'user4@gmail.com', 'KGUT7733Y', '51ABCDE2345F6Z9', 'Meat, Vegetables', '10', 'Medium', '400', '4000'),
(15, 'VEN0004', 'Name5', '879, RDS', 'Madurai', 6000014, 'Prithiviraj K', '9876543210', 'user5@gmail.com', 'KGUT7733Y', '51ABCDE2345F6Z9', 'Cosmetics, Stationary', '11', 'No', '500', '5000'),
(16, 'VEN0010', 'Name10', '765, RDS', 'Salem', 6000015, 'Prithiviraj K', '8654973465', 'user199@gmail.com', 'KGUT7733Y', '51ABCDE2345F6Z9', 'Paper, Wood', '15', 'Medium', '600', '6000'),
(17, 'VEN0003', 'Name3', '887, KVB', 'Namakkal', 6000016, 'Prithiviraj K', '9642176543', 'user752343526@gmail.com', 'KGUT7733Y', '51ABCDE2345F6Z9', 'Kerosine, Petrol', '20', 'High', '700', '7000'),
(18, 'VEN0005', 'Name5', '546, TVS Street', 'Salem', 6000018, 'Prithiviraj K', '9654321876', 'nae5@gmail.com', 'KGUT7733Y', '51ABCDE2345F6Z9', 'Meat, Vegetables', '23', 'High', '900', '9000'),
(19, 'VEN0006', 'Name6', '123, TVS Street', 'Chennai', 6000011, 'Prithiviraj K', '9823121218', 'user2@gmail.com', 'KGUT7733Y', '51ABCDE2345F6Z9', 'Paper, Wood', '10', 'Yes', '100', '1000');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `branch`
--
ALTER TABLE `branch`
  ADD PRIMARY KEY (`branchid`);

--
-- Indexes for table `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`companyid`);

--
-- Indexes for table `designation`
--
ALTER TABLE `designation`
  ADD PRIMARY KEY (`designationid`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`employeeid`);

--
-- Indexes for table `item`
--
ALTER TABLE `item`
  ADD PRIMARY KEY (`itemid`);

--
-- Indexes for table `units`
--
ALTER TABLE `units`
  ADD PRIMARY KEY (`unitid`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `user_logs`
--
ALTER TABLE `user_logs`
  ADD PRIMARY KEY (`loginid`);

--
-- Indexes for table `vendordetails`
--
ALTER TABLE `vendordetails`
  ADD PRIMARY KEY (`vendorid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `branch`
--
ALTER TABLE `branch`
  MODIFY `branchid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `company`
--
ALTER TABLE `company`
  MODIFY `companyid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `designation`
--
ALTER TABLE `designation`
  MODIFY `designationid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `employeeid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `item`
--
ALTER TABLE `item`
  MODIFY `itemid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `units`
--
ALTER TABLE `units`
  MODIFY `unitid` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user_logs`
--
ALTER TABLE `user_logs`
  MODIFY `loginid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `vendordetails`
--
ALTER TABLE `vendordetails`
  MODIFY `vendorid` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
