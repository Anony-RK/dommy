-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 01, 2021 at 03:48 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.5

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
-- Table structure for table `taxmaster`
--

CREATE TABLE `taxmaster` (
  `taxid` int(11) NOT NULL,
  `financialyear` varchar(50) NOT NULL,
  `classification` varchar(50) NOT NULL,
  `description` varchar(100) NOT NULL,
  `tax` varchar(100) NOT NULL,
  `cess` varchar(50) NOT NULL,
  `addl` varchar(100) NOT NULL,
  `total` varchar(100) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `taxmaster`
--

INSERT INTO `taxmaster` (`taxid`, `financialyear`, `classification`, `description`, `tax`, `cess`, `addl`, `total`, `status`) VALUES
(1, '2001-2002', 'jhsdjshbds', 'sjdhfsud', '5', '50', '500', '555', '0'),
(2, '2005-2006', 'Custom Duty', 'judfua', '20000', '1000', '3726', '24726', '1'),
(3, '2009-2010', 'Custom Duty', 'ramakrishnan tax report', '1214', '2134213', '23412', '2158838', '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `taxmaster`
--
ALTER TABLE `taxmaster`
  ADD PRIMARY KEY (`taxid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `taxmaster`
--
ALTER TABLE `taxmaster`
  MODIFY `taxid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
