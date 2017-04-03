-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 03, 2017 at 06:04 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `openemr`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_payment_give`
--

CREATE TABLE `admin_payment_give` (
  `id` int(11) NOT NULL,
  `patientcredentials` varchar(255) NOT NULL,
  `transactiondate` date NOT NULL,
  `roomcharges` int(11) NOT NULL,
  `doctorfees` int(11) NOT NULL,
  `therapyfees` int(11) NOT NULL,
  `totalfees` int(11) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin_payment_give`
--

INSERT INTO `admin_payment_give` (`id`, `patientcredentials`, `transactiondate`, `roomcharges`, `doctorfees`, `therapyfees`, `totalfees`, `status`) VALUES
(25, 'Fammy Gultom Taruli - Male - 2017-03-23', '2017-03-31', 90000, 900000, 90000, 1080000, 'pending'),
(26, 'Fammy Gultom Taruli - Male - 2017-03-23', '2017-04-15', 1000000, 10000, 100000, 1110000, 'pending');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_payment_give`
--
ALTER TABLE `admin_payment_give`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_payment_give`
--
ALTER TABLE `admin_payment_give`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
