-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 23, 2021 at 08:12 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `medical_diagonosis`
--

-- --------------------------------------------------------

--
-- Table structure for table `medical_report`
--

CREATE TABLE `medical_report` (
  `serial_number` int(11) NOT NULL,
  `first_name` text NOT NULL,
  `last_name` text NOT NULL,
  `checkupfor` text NOT NULL,
  `gender` text NOT NULL,
  `ege` int(11) NOT NULL,
  `obese` text NOT NULL,
  `smoke` text NOT NULL,
  `injury` text NOT NULL,
  `cholesterol` text NOT NULL,
  `hypertension` text NOT NULL,
  `diabetes` text NOT NULL,
  `address` text NOT NULL,
  `mobile_no` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `medical_report`
--

INSERT INTO `medical_report` (`serial_number`, `first_name`, `last_name`, `checkupfor`, `gender`, `ege`, `obese`, `smoke`, `injury`, `cholesterol`, `hypertension`, `diabetes`, `address`, `mobile_no`) VALUES
(23, 'Tubai', 'Ghosh', 'myself', 'male', 30, 'Don\'t know', 'Yes', 'No', 'Don\'t know', 'Yes', 'No', 'Bolpur', '7001367400'),
(24, 'Abhisek', 'Garai', 'myself', 'male', 22, 'Yes', 'Don\'t know', 'Yes', 'Don\'t know', 'Yes', 'Don\'t know', 'Vill.- Labpur Mahugram Road, Dist.- Birbhum, State- West Bengal', '9002504659'),
(25, 'somashree', 'Ghosh', 'someoneelse', 'female', 13, 'Don\'t know', 'Don\'t know', 'No', 'Don\'t know', 'No', 'No', 'Nabogram', '3362222222'),
(26, 'Abhijit', 'Garai', 'someone else', 'male', 30, 'No', 'Yes', 'Yes', 'Don\'t know', 'No', 'No', 'Labpur Mahugram Road, P.O-Labpur', '3333356565'),
(27, 'Meghdut', 'Garai', 'someone else', 'male', 60, 'Yes', 'No', 'No', 'Don\'t know', 'No', 'Don\'t know', 'suri', '6262625989'),
(28, 'Jit', 'Mondal', 'someone else', 'male', 15, 'Yes', 'Don\'t know', 'Yes', 'No', 'No', 'No', 'Kolkata', '5454586238'),
(29, 'Arabinda', 'Mondal', 'someone else', 'male', 21, 'Don\'t know', 'Yes', 'Don\'t know', 'Yes', 'No', 'Don\'t know', 'Mahugram', '6254548454'),
(30, 'Monmohan', 'Ghosh', 'someone else', 'male', 80, 'No', 'No', 'No', 'Don\'t know', 'Don\'t know', 'Don\'t know', 'Bolpur', '8002504659'),
(31, 'Aorabinda', 'Garai', 'someone else', 'male', 15, 'Yes', 'Don\'t know', 'No', 'No', 'No', 'No', 'Vill.- Labpur Mahugram Road, Dist.- Birbhum, State- West Bengal', '7005685600'),
(32, 'Rimpi', 'Ghosh', 'someone else', 'female', 22, 'Don\'t know', 'Don\'t know', 'Don\'t know', 'No', 'No', 'No', 'Nabogram', '6255555555'),
(33, 'Abhisek', 'Garai', 'myself', 'male', 22, 'No', 'No', 'No', 'Don\'t know', 'Don\'t know', 'Don\'t know', 'Vill.- Labpur Mahugram Road, Dist.- Birbhum, State- West Bengal', '8595785246');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `medical_report`
--
ALTER TABLE `medical_report`
  ADD PRIMARY KEY (`serial_number`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `medical_report`
--
ALTER TABLE `medical_report`
  MODIFY `serial_number` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
