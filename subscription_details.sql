-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 24, 2023 at 05:53 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `subscription_details`
--

-- --------------------------------------------------------

--
-- Table structure for table `subscription`
--

CREATE TABLE `subscription` (
  `id` int(5) NOT NULL,
  `plan` varchar(30) NOT NULL,
  `wing` int(3) NOT NULL,
  `sprice` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `subscription`
--

INSERT INTO `subscription` (`id`, `plan`, `wing`, `sprice`) VALUES
(1, '1 day plan', 1, 500),
(2, '1 month plan', 2, 2000),
(3, '3 month plan', 3, 3500),
(4, '6 month plan', 5, 5000),
(5, '9 month plan', 7, 6500),
(6, '1 year plan', 10, 8000);

-- --------------------------------------------------------

--
-- Table structure for table `subscription_form`
--

CREATE TABLE `subscription_form` (
  `sid` int(11) NOT NULL,
  `sname` varchar(40) NOT NULL,
  `semail` varchar(50) NOT NULL,
  `sstate` varchar(40) NOT NULL,
  `time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `subscription_form`
--

INSERT INTO `subscription_form` (`sid`, `sname`, `semail`, `sstate`, `time`) VALUES
(1, 'Pratyush Majumdar', 'pratyushmajumdar27@gmail.com', 'Bihar', '13:30:00'),
(2, 'Prayushi Majumdar', 'prayushi@gmail.com', 'Maharashtra', '01:30:00'),
(3, 'Ayush Indapure', 'ayushind@gmail.com', 'Manipur', '05:15:00'),
(4, 'Aryan Dhas', 'aryandhas30@gmail.com', 'West Bengal', '13:46:00'),
(5, 'Mahendra Jat', 'mahendra22@gmail.com', 'Assam', '06:30:00'),
(6, 'Srinand Hardikar', 'srinand3@gmail.com', 'Maharashtra', '12:00:00'),
(7, 'Sahil Makwana', 'sahilmak59@gmail.com', 'Rajasthan', '03:30:00'),
(8, 'Sujal Bhavsar', 'sujal2@gmail.com', 'Andhra Pradesh', '07:45:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `subscription`
--
ALTER TABLE `subscription`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subscription_form`
--
ALTER TABLE `subscription_form`
  ADD PRIMARY KEY (`sid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `subscription`
--
ALTER TABLE `subscription`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `subscription_form`
--
ALTER TABLE `subscription_form`
  MODIFY `sid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
