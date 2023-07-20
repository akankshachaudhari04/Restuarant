-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 16, 2023 at 09:14 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `booking1`
--
CREATE DATABASE IF NOT EXISTS `booking1` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `booking1`;

-- --------------------------------------------------------

--
-- Table structure for table `results`
--

CREATE TABLE `results` (
  `id` int(11) NOT NULL,
  `occasion` varchar(100) DEFAULT NULL,
  `partyDate` date DEFAULT NULL,
  `meal` varchar(100) DEFAULT NULL,
  `foodOptions` varchar(100) DEFAULT NULL,
  `men` varchar(100) DEFAULT NULL,
  `cost` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `results`
--

INSERT INTO `results` (`id`, `occasion`, `partyDate`, `meal`, `foodOptions`, `men`, `cost`) VALUES
(8, 'Birthday', '2023-06-30', 'Lunch', 'Non Vegetarian', NULL, '3500_4000'),
(9, 'Social Gathering', '2023-06-17', 'Lunch', 'Vegetarian,Non Vegetarian,Non Vegetarian', NULL, '1500_2500'),
(10, 'Social Gathering', '2023-06-16', 'Lunch', 'Vegetarian,Non Vegetarian,Cold Drink', NULL, '1500_2500');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `results`
--
ALTER TABLE `results`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `results`
--
ALTER TABLE `results`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
