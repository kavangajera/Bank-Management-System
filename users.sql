-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 24, 2023 at 07:53 AM
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
-- Database: `users`
--

-- --------------------------------------------------------

--
-- Table structure for table `kavan7377`
--

CREATE TABLE `kavan7377` (
  `sr no` int(10) NOT NULL,
  `transaction` text NOT NULL,
  `date-time` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kavan7377`
--

INSERT INTO `kavan7377` (`sr no`, `transaction`, `date-time`) VALUES
(1, 'you deposite 10000 rupees in your bank account', '2023-05-20 15:08:47'),
(2, 'you deposite 1000000 rupees in your bank account', '2023-05-20 15:11:04'),
(3, 'yodraw 1000000 rupees in your bank account', '2023-05-20 15:11:31'),
(4, 'yodraw 100000 rupees in your bank account', '2023-05-20 15:13:54'),
(5, 'yodraw 100000 rupees in your bank account', '2023-05-20 15:14:57'),
(6, 'yodraw 100000 rupees in your bank account', '2023-05-20 15:15:20'),
(7, 'yodraw 100000 rupees in your bank account', '2023-05-20 15:18:43'),
(8, 'You deposited  60000 rupees in your account', '2023-05-22 23:33:53'),
(9, 'you withdraw 7000 rupees in your bank account', '2023-05-22 23:35:26'),
(10, 'You deposited  10000 rupees in your account', '2023-06-03 11:00:40'),
(11, 'You deposited  10 rupees in your account', '2023-06-03 11:08:20'),
(12, 'You deposited  10 rupees in your account', '2023-06-03 11:10:00'),
(13, 'You deposited  10 rupees in your account', '2023-06-03 11:10:07'),
(14, 'You deposited  10 rupees in your account', '2023-06-03 11:19:09'),
(15, 'You deposited  10 rupees in your account', '2023-06-03 11:19:15'),
(16, 'You deposited  10 rupees in your account', '2023-06-03 11:19:24'),
(17, 'You deposited  10 rupees in your account', '2023-06-03 11:20:58'),
(18, 'You deposited  10 rupees in your account', '2023-06-03 11:21:17'),
(19, 'You deposited  10 rupees in your account', '2023-06-03 11:21:27'),
(20, 'You deposited  10 rupees in your account', '2023-06-03 11:22:10'),
(21, 'recieve 100000 from  MS1234567', '2023-06-05 18:50:32'),
(22, 'recieve 10 from  kavan7377', '2023-06-05 19:15:12'),
(26, 'You deposited  100000 rupees in your account', '2023-06-05 22:25:06'),
(27, 'you withdraw 100000 rupees in your bank account', '2023-06-05 22:28:27'),
(28, 'You deposited  500000 rupees in your account', '2023-06-06 09:27:18'),
(29, 'give 100000 to MS1234567', '2023-06-06 09:28:27');

-- --------------------------------------------------------

--
-- Table structure for table `ms1234567`
--

CREATE TABLE `ms1234567` (
  `sr no` int(10) NOT NULL,
  `transaction` text NOT NULL,
  `date-time` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ms1234567`
--

INSERT INTO `ms1234567` (`sr no`, `transaction`, `date-time`) VALUES
(1, 'You deposited  100000 rupees in your account', '2023-06-05 18:48:38'),
(2, 'You deposited  100000 rupees in your account', '2023-06-05 18:49:29'),
(3, 'give 100000 to kavan7377', '2023-06-05 18:50:32'),
(4, 'recieve 100000 from  kavan7377', '2023-06-06 09:28:27');

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `srno` int(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `mname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `mpin` int(6) NOT NULL,
  `birthdate` varchar(12) NOT NULL,
  `balance` bigint(10) DEFAULT NULL,
  `mobile` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`srno`, `username`, `password`, `fname`, `mname`, `lname`, `mpin`, `birthdate`, `balance`, `mobile`) VALUES
(1, 'Smeet', 'Smeet@3525', 'Haraniya', 'Smeet', 'Niteshbhai', 123456, '2000-05-03', 0, ''),
(2, 's', 'Abcd@1234', 'a', 'b', 'c', 654321, '1950-05-05', NULL, ''),
(3, 'msd', 'Msd@77777', 'mahendra', 'singh', 'dhoni', 123456, '2000-07-07', 30000, '9746345489'),
(5, '', '', '', '', '', 0, '', 5000, ''),
(6, '', '', '', '', '', 0, '', 255000, ''),
(7, '', '', '', '', '', 0, '', 755000, ''),
(8, 'akf', 'Akf@20044', 'Arpit', 'Kirtibhai', 'Faldu', 111111, '2004-09-30', 10000, '9999999999'),
(9, 'kanji', 'Kanji#12345', 'Kanji', 'N', 'madariya', 0, '2004-07-15', 40000, '9999999999'),
(10, 'kavan7377', 'Kavan#1234567', 'kavan', 'gajera', 'sanjeev', 777777, '2003-12-11', 1173080, '9746345489'),
(11, 'MS1234567', 'Msd#1234567', 'mahendra', 'pansingh', 'dhoni', 777777, '1981-07-07', 300000, '9999999999');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kavan7377`
--
ALTER TABLE `kavan7377`
  ADD PRIMARY KEY (`sr no`);

--
-- Indexes for table `ms1234567`
--
ALTER TABLE `ms1234567`
  ADD PRIMARY KEY (`sr no`);

--
-- Indexes for table `signup`
--
ALTER TABLE `signup`
  ADD PRIMARY KEY (`srno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kavan7377`
--
ALTER TABLE `kavan7377`
  MODIFY `sr no` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `ms1234567`
--
ALTER TABLE `ms1234567`
  MODIFY `sr no` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `signup`
--
ALTER TABLE `signup`
  MODIFY `srno` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
