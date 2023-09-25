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
-- Database: `contact_detail`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact_form`
--

CREATE TABLE `contact_form` (
  `id` int(11) NOT NULL,
  `myname1` varchar(25) NOT NULL,
  `email1` varchar(50) NOT NULL,
  `phone1` varchar(15) NOT NULL,
  `msg1` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact_form`
--

INSERT INTO `contact_form` (`id`, `myname1`, `email1`, `phone1`, `msg1`) VALUES
(1, 'Pratyush', 'pratyushmajumdar27@gmail.com', '7666234983', 'Need more information!'),
(2, 'Mahendra', 'mahendra22@gmail.com', '9454477980', 'Contact me ASAP!!'),
(3, 'Sahil', 'sahil51@gmail.com', '9922544790', 'Call me on my number'),
(4, 'Aryan', 'aryandhas@gmail.com', '7602359010', 'Contact me till next week!'),
(5, 'Srinand', 'srinandhardikar@gmail.com', '9922449460', 'Contact Me ASAP!!'),
(6, 'Ayush', 'ayushindapure@gmail.com', '9654138091', 'Need more details!'),
(7, 'Manoj', 'manoj@gmail.com', '7666234890', 'Contact me till next month!'),
(8, 'Aditya', 'adityawaghmare@gmail.com', '9922701204', 'Please call me');

-- --------------------------------------------------------

--
-- Table structure for table `feedback_form`
--

CREATE TABLE `feedback_form` (
  `id` int(11) NOT NULL,
  `email2` varchar(40) NOT NULL,
  `feedback` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedback_form`
--

INSERT INTO `feedback_form` (`id`, `email2`, `feedback`) VALUES
(1, 'pratyushmajumdar27@gmail.com', 'Good Website!'),
(2, 'mahendra22@gmail.com', 'Website interface looks good!!'),
(3, 'sahilmak@gmail.com', 'Good interface!!'),
(4, 'srinand123@gmail.com', 'Needs more improvement!\r\n'),
(5, 'aryandhas27@gmail.com', 'Good website!'),
(6, 'sujalbhavsar2@gmail.com', 'Nice user interface!!'),
(7, 'manojvardhan@gmail.com', 'Loved the website!!'),
(8, 'adityawaghmare@gmail.com', 'Backend is good!!');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact_form`
--
ALTER TABLE `contact_form`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback_form`
--
ALTER TABLE `feedback_form`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact_form`
--
ALTER TABLE `contact_form`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `feedback_form`
--
ALTER TABLE `feedback_form`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
