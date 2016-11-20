-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 17, 2016 at 06:04 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blood_bank_management`
--

-- --------------------------------------------------------

--
-- Table structure for table `donor`
--

CREATE TABLE `donor` (
  `name` varchar(50) NOT NULL,
  `blood_group` varchar(15) NOT NULL,
  `last_donation_date` date NOT NULL,
  `gender` varchar(10) NOT NULL,
  `contact_no` int(15) NOT NULL,
  `weight` varchar(10) NOT NULL,
  `date_of_birth` date NOT NULL,
  `living_district` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `donor`
--

INSERT INTO `donor` (`name`, `blood_group`, `last_donation_date`, `gender`, `contact_no`, `weight`, `date_of_birth`, `living_district`, `email`) VALUES
('Md. Kamrul Hasan', 'A+', '2016-11-17', 'Male', 1766247806, '56 kg', '1971-11-17', 'Jamalpur', 'kamrulhasan@gmail.com'),
('Md. MainulHasan', 'A+', '2016-11-17', 'Male', 1990181448, '54 kg', '1951-11-17', 'Gazipur', 'mainulhasan@gmail.com'),
('juyyj', 'juyjyuj', '0000-00-00', 'uyjuyjuy', 564674, 'uyiyiy', '0000-00-00', 'yuiyui', 'yttttttuty@bjm.com');

-- --------------------------------------------------------

--
-- Table structure for table `request_for_blood`
--

CREATE TABLE `request_for_blood` (
  `name` varchar(50) NOT NULL,
  `blood_group` varchar(20) NOT NULL,
  `amount` varchar(20) NOT NULL,
  `contact` int(20) NOT NULL,
  `address` varchar(50) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `stock`
--

CREATE TABLE `stock` (
  `a+` varchar(10) NOT NULL,
  `a-` varchar(10) NOT NULL,
  `o+` varchar(10) NOT NULL,
  `o-` varchar(10) NOT NULL,
  `ab+` varchar(10) NOT NULL,
  `ab-` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `donor`
--
ALTER TABLE `donor`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `request_for_blood`
--
ALTER TABLE `request_for_blood`
  ADD PRIMARY KEY (`contact`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
