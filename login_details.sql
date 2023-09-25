-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 24, 2023 at 05:54 PM
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
-- Database: `login_details`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_signup_form`
--

CREATE TABLE `admin_signup_form` (
  `aid` int(11) NOT NULL,
  `myname1` varchar(40) NOT NULL,
  `email1` varchar(50) NOT NULL,
  `pass1` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_signup_form`
--

INSERT INTO `admin_signup_form` (`aid`, `myname1`, `email1`, `pass1`) VALUES
(1, 'Pratyush', 'pratyushmajumdar27@gmail.com', 'matsumoto');

-- --------------------------------------------------------

--
-- Table structure for table `signup_form`
--

CREATE TABLE `signup_form` (
  `id` int(2) NOT NULL,
  `myname` varchar(25) NOT NULL,
  `email` varchar(40) NOT NULL,
  `pass` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `signup_form`
--

INSERT INTO `signup_form` (`id`, `myname`, `email`, `pass`) VALUES
(1, 'Pratyush', 'pratyushmajumdar27@gmail.com', 'matsumoto');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_signup_form`
--
ALTER TABLE `admin_signup_form`
  ADD PRIMARY KEY (`aid`);

--
-- Indexes for table `signup_form`
--
ALTER TABLE `signup_form`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_signup_form`
--
ALTER TABLE `admin_signup_form`
  MODIFY `aid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `signup_form`
--
ALTER TABLE `signup_form`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
