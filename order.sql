-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 10, 2020 at 04:00 PM
-- Server version: 10.1.40-MariaDB
-- PHP Version: 7.1.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `order`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `message` text NOT NULL,
  `name` varchar(25) NOT NULL,
  `email` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `message`, `name`, `email`) VALUES
(1, '', '', ''),
(2, 'Saad Aslam', 'w.rizwan71@gmail.com', 'saaaaaaaaaaaaaaaaaaaaaad'),
(3, 'Hello there \r\nthis is a test message', 'M Saad Aslam', 'saadusufzai@gmail.com'),
(4, 'Hello there \r\nthis is a test message', 'M Saad Aslam', 'saadusufzai@gmail.com'),
(5, 'Hello there \r\nthis is a test message', 'M Saad Aslam', 'saadusufzai@gmail.com'),
(6, 'Hello', 'Humais', 'saadusufzai@gmail.com'),
(7, 'Hello', 'Humais', 'saadusufzai@gmail.com'),
(8, 'Hey there', 'Asad Jutt', 'asad@gmial.com'),
(9, 'Hello', 'Saad Aslam', 'saad@gmail.com'),
(10, 'Hello', 'Saad Aslam', 'saad@gmail.com'),
(11, 'Hello', 'Saad Aslam', 'saad@gmail.com'),
(12, 'Hello', 'Saad Aslam', 'saad@gmail.com'),
(13, 'Hello', 'Saad Aslam', 'saad@gmail.com'),
(14, 'shh', 'hs', 'w.rizwan71@gmail.com'),
(15, 'SASD', 'Saad Aslam', 'w.rizwan71@gmail.com'),
(16, '555', 'Rizwan 1122', 'w.rizwan71@gmail.com'),
(17, '555', 'Rizwan 1122', 'w.rizwan71@gmail.com'),
(18, '555', 'Rizwan 1122', 'w.rizwan71@gmail.com'),
(19, '555', 'Rizwan 1122', 'w.rizwan71@gmail.com'),
(20, '555', 'Rizwan 1122', 'w.rizwan71@gmail.com'),
(21, '555', 'Rizwan 1122', 'w.rizwan71@gmail.com'),
(22, '555', 'Rizwan 1122', 'w.rizwan71@gmail.com'),
(23, '555', 'Rizwan 1122', 'w.rizwan71@gmail.com'),
(24, '555', 'Rizwan 1122', 'w.rizwan71@gmail.com'),
(25, 'test', 'Rizwan 1122', 'w.rizwan71@gmail.com'),
(26, 'test', 'Rizwan 1122', 'w.rizwan71@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `plan`
--

CREATE TABLE `plan` (
  `id` int(11) NOT NULL,
  `name` varchar(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  `package` varchar(40) NOT NULL,
  `pay_method` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `plan`
--

INSERT INTO `plan` (`id`, `name`, `email`, `package`, `pay_method`) VALUES
(1, 'Saad', 'saadusufzai@gmail.com', '', ''),
(2, 'Saad', 'saadusufzai@gmail.com', 's', 'a'),
(3, 'Saad', 'saadusufzai@gmail.com', 's', 'a'),
(4, 'Rizwan 1122', 'w.rizwan71@gmail.com', 'premimum', 'jazz'),
(5, 'Rizwan 1122', 'w.rizwan71@gmail.com', 'premimum', 'easy'),
(6, 'Rizwan 1122', 'w.rizwan71@gmail.com', 'pro', 'jazz'),
(7, 'Saad Aslam', 'saadusufzai@gmail.com', 'pro', 'jazz'),
(8, 'Saad Aslam', 'saadusufzai@gmail.com', 'pro', 'jazz'),
(9, '', '', 'trial', 'back'),
(10, '', '', 'trial', 'back'),
(11, '', '', 'trial', 'back'),
(12, '', '', 'trial', 'back'),
(13, 'john', 'user@gmail.com', 'premimum', 'easy'),
(14, 'john', 'user@gmail.com', 'premimum', 'easy'),
(15, 'john', 'user@gmail.com', 'premimum', 'easy'),
(16, 'john', 'user@gmail.com', 'premimum', 'easy'),
(17, 'john', 'user@gmail.com', 'premimum', 'easy'),
(18, 'john', 'user@gmail.com', 'premimum', 'easy'),
(19, 'john', 'user@gmail.com', 'premimum', 'easy'),
(20, 'john', 'user@gmail.com', 'premimum', 'easy'),
(21, 'john', 'user@gmail.com', 'premimum', 'easy'),
(22, 'Saad Aslam', 'saad@gmail.com', 'trial', 'Bank Transfer'),
(23, 'Saad Aslam', 'saad@gmail.com', 'trial', 'Bank Transfer'),
(24, 'Saad Aslam', 'saad@gmail.com', 'trial', 'Bank Transfer'),
(25, 'Rizwan 1122', 'w.rizwan71@gmail.com', 'Plus', 'Jazz Cash'),
(26, 'Rizwan 1122', 'w.rizwan71@gmail.com', 'Plus', 'Jazz Cash'),
(27, 'Rizwan 1122', 'w.rizwan71@gmail.com', 'Plus', 'Jazz Cash'),
(28, 'Rizwan 1122', 'w.rizwan71@gmail.com', 'Plus', 'Jazz Cash'),
(29, 'Rizwan 1122', 'w.rizwan71@gmail.com', 'Plus', 'Jazz Cash'),
(30, 'Rizwan 1122', 'w.rizwan71@gmail.com', 'Plus', 'Jazz Cash'),
(31, 'Rizwan 1122', 'w.rizwan71@gmail.com', 'Plus', 'Jazz Cash'),
(32, 'Rizwan 1122', 'w.rizwan71@gmail.com', 'Plus', 'Jazz Cash'),
(33, 'Rizwan ', 'w.rizwan71@gmail.com', 'Plus', 'Jazz Cash'),
(34, 'Rizwan ', 'w.rizwan71@gmail.com', 'Plus', 'Jazz Cash'),
(35, 'Rizwan ', 'w.rizwan71@gmail.com', 'Plus', 'Jazz Cash'),
(36, 'Rizwan ', 'w.rizwan71@gmail.com', 'Plus', 'Jazz Cash'),
(37, 'Rizwan ', 'w.rizwan71@gmail.com', 'Plus', 'Jazz Cash'),
(38, 'Rizwan ', 'w.rizwan71@gmail.com', 'Plus', 'Jazz Cash'),
(39, 'Rizwan ', 'w.rizwan71@gmail.com', 'Plus', 'Jazz Cash'),
(40, 'Rizwan ', 'w.rizwan71@gmail.com', 'Plus', 'Jazz Cash'),
(41, 'Rizwan ', 'w.rizwan71@gmail.com', 'Plus', 'Jazz Cash'),
(42, 'Rizwan ', 'w.rizwan71@gmail.com', 'Plus', 'Jazz Cash'),
(43, 'Rizwan ', 'w.rizwan71@gmail.com', 'Plus', 'Jazz Cash'),
(44, 'Rizwan ', 'w.rizwan71@gmail.com', 'Plus', 'Jazz Cash'),
(45, 'Rizwan ', 'w.rizwan71@gmail.com', 'Plus', 'Jazz Cash'),
(46, 'Rizwan ', 'w.rizwan71@gmail.com', 'Plus', 'Jazz Cash'),
(47, 'Rizwan ', 'w.rizwan71@gmail.com', 'Plus', 'Jazz Cash'),
(48, 'Rizwan ', 'w.rizwan71@gmail.com', 'Plus', 'Jazz Cash'),
(49, 'Rizwan ', 'w.rizwan71@gmail.com', 'Plus', 'Jazz Cash'),
(50, 'Rizwan ', 'w.rizwan71@gmail.com', 'Plus', 'Jazz Cash'),
(51, 'Rizwan ', 'w.rizwan71@gmail.com', 'Plus', 'Jazz Cash'),
(52, 'Rizwan ', 'w.rizwan71@gmail.com', 'Plus', 'Jazz Cash'),
(53, 'Rizwan 1122', 'w.rizwan71@gmail.com', 'Trial', 'Bank Transfer'),
(54, 'Rizwan 1122', 'w.rizwan71@gmail.com', 'Pro', 'Bank Transfer'),
(55, '', '', '', ''),
(56, 'Rizwan 1122', 'w.rizwan71@gmail.com', 'Trial', 'Bank Transfer'),
(57, 'Rizwan 1122', 'w.rizwan71@gmail.com', 'Trial', 'Bank Transfer'),
(58, 'Rizwan 1122', 'w.rizwan71@gmail.com', 'Plus', 'Easy Paisa'),
(59, 'Rizwan 1122', 'w.rizwan71@gmail.com', 'Plus', 'Easy Paisa'),
(60, 'Rizwan 1122', 'w.rizwan71@gmail.com', 'Plus', 'Easy Paisa');

-- --------------------------------------------------------

--
-- Table structure for table `siginup`
--

CREATE TABLE `siginup` (
  `id` int(11) NOT NULL,
  `name` varchar(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `siginup`
--

INSERT INTO `siginup` (`id`, `name`, `email`, `password`) VALUES
(1, 'Saad Aslam', 'saad@gmail.com', '123456'),
(2, 'humais', 'humais@gmail.com', '987'),
(6, 'ahmad', 'ahmd@gmail.com', '321');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `plan`
--
ALTER TABLE `plan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `siginup`
--
ALTER TABLE `siginup`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `plan`
--
ALTER TABLE `plan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `siginup`
--
ALTER TABLE `siginup`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
