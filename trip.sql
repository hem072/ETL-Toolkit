-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 24, 2017 at 06:58 AM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `trip`
--

-- --------------------------------------------------------

--
-- Table structure for table `driver_info`
--

CREATE TABLE IF NOT EXISTS `driver_info` (
  `id` int(20) NOT NULL,
  `name` varchar(30) NOT NULL,
  `dob` date NOT NULL,
  `Gender` varchar(50) NOT NULL,
  `dltype` varchar(30) NOT NULL,
  `cartype` varchar(30) NOT NULL,
  `triptype` varchar(30) NOT NULL,
  `cost` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `driver_info`
--

INSERT INTO `driver_info` (`id`, `name`, `dob`, `Gender`, `dltype`, `cartype`, `triptype`, `cost`) VALUES
(1, 'vinit', '1998-03-03', 'Male', 'permanent', 'micro', 'oneday', '2000');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `driver_info`
--
ALTER TABLE `driver_info`
 ADD PRIMARY KEY (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
