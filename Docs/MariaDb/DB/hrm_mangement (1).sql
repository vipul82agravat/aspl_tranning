-- phpMyAdmin SQL Dump
-- version 5.1.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 30, 2022 at 08:04 PM
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
  `password` varchar(255) DEFAULT NULL,
  `auth_token` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `employee_registration`
--

INSERT INTO `employee_registration` (`id`, `first_name`, `last_name`, `email`, `contactno`, `gender`, `education`, `address`, `brith_date`, `posting_date`, `password`, `auth_token`) VALUES
(9, 'vipulreplce', 'tt1', 'vipul@gmail.com', 96526359821, 'male', 'mca', 'raval', '2022-12-28 10:08:59', '2022-12-28 10:08:59', NULL, NULL),
(12, 'janak', 'agravat', 'janak@gmail.com', 562365985, 'Male', '12th', '	test123', '2022-12-29 04:18:05', '2022-12-27 12:20:58', 'a826ecc7f100de7afb82b91530c3040c', ' ');

-- --------------------------------------------------------

--
-- Stand-in structure for view `employee_registration_view`
-- (See below for the actual view)
--
CREATE TABLE `employee_registration_view` (
`first_name` varchar(255)
,`last_name` varchar(255)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `employee_registration_view_list`
-- (See below for the actual view)
--
CREATE TABLE `employee_registration_view_list` (
`note` varchar(100)
,`type` varchar(100)
,`first_name` varchar(255)
);

-- --------------------------------------------------------

--
-- Table structure for table `emp_attendance`
--

CREATE TABLE `emp_attendance` (
  `id` int(11) NOT NULL,
  `type` varchar(100) NOT NULL,
  `note` varchar(100) NOT NULL,
  `emp_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `emp_attendance`
--

INSERT INTO `emp_attendance` (`id`, `type`, `note`, `emp_id`) VALUES
(1, 'checkin', 'yes', 9),
(2, 'checkout', 'yes', 9);

-- --------------------------------------------------------

--
-- Structure for view `employee_registration_view`
--
DROP TABLE IF EXISTS `employee_registration_view`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `employee_registration_view`  AS SELECT `employee_registration`.`first_name` AS `first_name`, `employee_registration`.`last_name` AS `last_name` FROM `employee_registration``employee_registration`  ;

-- --------------------------------------------------------

--
-- Structure for view `employee_registration_view_list`
--
DROP TABLE IF EXISTS `employee_registration_view_list`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `employee_registration_view_list`  AS SELECT `mb`.`note` AS `note`, `mb`.`type` AS `type`, `mr`.`first_name` AS `first_name` FROM (`employee_registration` `mr` join `emp_attendance` `mb` on(`mr`.`id` = `mb`.`emp_id`))  ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employee_registration`
--
ALTER TABLE `employee_registration`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `emp_attendance`
--
ALTER TABLE `emp_attendance`
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
