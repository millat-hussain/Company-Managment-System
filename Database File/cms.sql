-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 16, 2021 at 10:13 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cms`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer_bill`
--

CREATE TABLE `customer_bill` (
  `id` int(11) NOT NULL,
  `date_time` varchar(50) NOT NULL,
  `employeebill` varchar(100) NOT NULL,
  `serverbill` varchar(100) NOT NULL,
  `officebill` varchar(100) NOT NULL,
  `totalbill` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer_bill`
--

INSERT INTO `customer_bill` (`id`, `date_time`, `employeebill`, `serverbill`, `officebill`, `totalbill`) VALUES
(19, '2021-02-02T14:24', '100', '100', '100', '300');

-- --------------------------------------------------------

--
-- Table structure for table `customer_list`
--

CREATE TABLE `customer_list` (
  `id` int(11) NOT NULL,
  `name` varchar(75) NOT NULL,
  `mobile` varchar(20) NOT NULL,
  `emile` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `country` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer_list`
--

INSERT INTO `customer_list` (`id`, `name`, `mobile`, `emile`, `address`, `country`) VALUES
(1, 'Millat Hussain', '01853907553', 'millat@gmail.com', 'Mymensing ', 'Bangladesh'),
(2, 'Sagor khan', '0185236985', 'emile', '', ''),
(6, 'MD.Millat Hussain', '01853907553', 'jakir@gmail.com', 'dfdfdd', 'Bangladesh');

-- --------------------------------------------------------

--
-- Table structure for table `earn_report`
--

CREATE TABLE `earn_report` (
  `id` int(11) NOT NULL,
  `nmd` varchar(100) NOT NULL,
  `webern` varchar(100) NOT NULL,
  `dme` varchar(100) NOT NULL,
  `sde` varchar(100) NOT NULL,
  `dominhosting` varchar(100) NOT NULL,
  `totlaeran` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `earn_report`
--

INSERT INTO `earn_report` (`id`, `nmd`, `webern`, `dme`, `sde`, `dominhosting`, `totlaeran`) VALUES
(3, '2021-02-10T14:49', '200', '300', '500', '600', '1600');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer_bill`
--
ALTER TABLE `customer_bill`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer_list`
--
ALTER TABLE `customer_list`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `earn_report`
--
ALTER TABLE `earn_report`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer_bill`
--
ALTER TABLE `customer_bill`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `customer_list`
--
ALTER TABLE `customer_list`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `earn_report`
--
ALTER TABLE `earn_report`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
