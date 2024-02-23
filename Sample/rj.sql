-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 21, 2024 at 04:07 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rj`
--

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` int(10) NOT NULL,
  `name` varchar(15) NOT NULL,
  `surname` varchar(15) NOT NULL,
  `address` varchar(15) NOT NULL,
  `mobno` bigint(10) NOT NULL,
  `empname` varchar(15) NOT NULL,
  `np1` varchar(15) NOT NULL,
  `np2` varchar(15) NOT NULL,
  `np3` varchar(15) NOT NULL,
  `np4` varchar(15) DEFAULT NULL,
  `amt` int(10) NOT NULL,
  `DOJ` date NOT NULL DEFAULT current_timestamp(),
  `BSD` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `name`, `surname`, `address`, `mobno`, `empname`, `np1`, `np2`, `np3`, `np4`, `amt`, `DOJ`, `BSD`) VALUES
(2, 'Rahul', 'Attarde', 'Asoda', 7028030218, 'Rahul', 'LOKMAT', '----', '----', '----', 0, '2024-02-20', '2024-02-20'),
(3, 'Kaushik ', 'Dhangar', 'Paldhi', 465564685, 'Nikhil', 'LOKMAT', 'DIVYA_MARATHI', 'SAKAL', 'SELECT_PAPER', 0, '2024-02-20', '2024-02-20'),
(4, 'Mayank ', 'Vora', 'Jalgaon', 5646515, 'Nikhil', 'DIVYA_MARATHI', 'SELECT_PAPER', 'SELECT_PAPER', 'SELECT_PAPER', 0, '2024-02-20', '2024-02-20'),
(5, 'Mohit ', 'Wani', 'Jalgoan', 5315612, 'Nikhil', 'LOKMAT', '----', 'LOKMAT', 'LOKMAT', 0, '2024-02-20', '2024-02-20'),
(14, 'Nikhil', 'Kolhe', 'Asoda', 9112619540, 'Rahul', 'LOKMAT', '----', '----', '----', 0, '2024-02-20', '2024-02-20'),
(15, 'Nikhil', 'Kolhe', 'Asoda', 9112619540, 'Rahul', 'LOKMAT', '----', '----', '----', 0, '2024-02-20', '2024-02-20'),
(16, 'Nikhil', 'Kolhe', 'Asoda', 9112619540, 'Rahul', 'LOKMAT', '----', '----', '----', 0, '2024-02-20', '2024-02-20'),
(17, 'Nikhil', 'Kolhe', 'Asoda', 9112619540, 'Rahul', 'LOKMAT', '----', '----', '----', 0, '2024-02-20', '2024-02-20'),
(18, 'Nikhil', 'Kolhe', 'Asoda', 9112619540, 'Rahul', 'LOKMAT', '----', '----', '----', 0, '2024-02-20', '2024-02-20'),
(19, 'Nikhil', 'Kolhe', 'Asoda', 9112619540, 'Rahul', 'LOKMAT', '----', '----', '----', 0, '2024-02-20', '2024-02-20');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `id` int(10) NOT NULL,
  `name` varchar(15) NOT NULL,
  `mob` bigint(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`id`, `name`, `mob`) VALUES
(1, 'Nikhil', 9112619540),
(2, 'Rahul', 45552122);

-- --------------------------------------------------------

--
-- Table structure for table `papers`
--

CREATE TABLE `papers` (
  `paperid` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `price` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `papers`
--

INSERT INTO `papers` (`paperid`, `name`, `price`) VALUES
(2, 'LOKMAT', 5),
(3, 'DIVYA_MARATHI', 6),
(4, 'SAKAL', 3);

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `id` int(10) NOT NULL,
  `current_amt` int(10) NOT NULL DEFAULT 0,
  `previous_amt` int(10) NOT NULL DEFAULT 0,
  `total` int(10) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `papers`
--
ALTER TABLE `papers`
  ADD PRIMARY KEY (`paperid`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `papers`
--
ALTER TABLE `papers`
  MODIFY `paperid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `payment`
--
ALTER TABLE `payment`
  ADD CONSTRAINT `payment_ibfk_1` FOREIGN KEY (`id`) REFERENCES `customers` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
