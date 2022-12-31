-- phpMyAdmin SQL Dump
-- version 5.1.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 27, 2022 at 06:53 PM
-- Server version: 10.6.11-MariaDB-0ubuntu0.22.04.1
-- PHP Version: 8.1.2-1ubuntu2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hrm_mangement`
--

-- --------------------------------------------------------

--
-- Table structure for table `employee_registration`
--

CREATE TABLE `employee_registration` (
  `id` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `contactno` bigint(20) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `education` varchar(255) NOT NULL,
  `address` longtext NOT NULL,
  `brith_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `posting_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `employee_registration`
--

INSERT INTO `employee_registration` (`id`, `first_name`, `last_name`, `email`, `contactno`, `gender`, `education`, `address`, `brith_date`, `posting_date`, `password`) VALUES
(9, 'vipul', 'new', 'vipul@gmail.com', 9652365262, 'Male', '10th', '	test', '2022-12-07 18:30:00', '2022-12-27 08:30:46', 'd41d8cd98f00b204e9800998ecf8427e'),
(12, 'janak', 'agravat', 'janak@gmail.com', 562365985, 'Male', '12th', '	test123', '2022-12-08 18:30:00', '2022-12-27 12:20:58', 'a826ecc7f100de7afb82b91530c3040c'),
(13, 'tt1', 'tt', 't@gmail.com', 9652362564, 'Male', 'Graduate', '	ttt', '2022-12-15 18:30:00', '2022-12-27 13:12:19', '59f2443a4317918ce29ad28a14e1bdb7');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employee_registration`
--
ALTER TABLE `employee_registration`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `employee_registration`
--
ALTER TABLE `employee_registration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
