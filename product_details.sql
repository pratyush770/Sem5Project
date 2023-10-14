-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 28, 2023 at 03:46 PM
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
-- Database: `product_details`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `pid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `payment_details`
--

CREATE TABLE `payment_details` (
  `payment_id` int(11) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `email2` varchar(50) NOT NULL,
  `addr` varchar(50) NOT NULL,
  `ccity` varchar(50) NOT NULL,
  `cstate` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payment_details`
--

INSERT INTO `payment_details` (`payment_id`, `fname`, `email2`, `addr`, `ccity`, `cstate`) VALUES
(1, 'Pratyush Majumdar', 'pratyushmajumdar27@gmail.com', 'Yamuna Nagar Nigdi', 'Pune', 'Maharashtra');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `pid` int(3) NOT NULL,
  `pname` varchar(50) NOT NULL,
  `pcategory` varchar(20) NOT NULL,
  `pprice` varchar(5) NOT NULL,
  `imgupload` varchar(50) NOT NULL,
  `quantity` varchar(3) NOT NULL DEFAULT '1',
  `d1` varchar(50) NOT NULL,
  `d2` varchar(50) NOT NULL,
  `d3` varchar(50) NOT NULL,
  `d4` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`pid`, `pname`, `pcategory`, `pprice`, `imgupload`, `quantity`, `d1`, `d2`, `d3`, `d4`) VALUES
(1, 'Light Lamp', 'E-Waste', '456', 'lightlamp.jpg', '1', 'Brand - Limo', 'Metallic', 'Shape oval', '2 years warranty'),
(2, 'Tree Lamp', 'E-Waste', '750', 'treelamp.jpg', '1', 'Brand - Tara', 'Color - Rambo', 'Metallic Wire', '1 year warranty'),
(3, 'Water Bottle', 'Plastic', '399', 'bottle.jpg', '1', 'Brand - Cello', 'Material - Plastic', 'Bottle Type - Standard Bottle', 'Capacity - 1 litre'),
(4, 'Pen Stand', 'Plastic', '399', '61d1HPzGEmL.jpg', '1', 'Brand - Cello', 'Colour - White', 'Material - Plastic', 'Pen Stand Type - Standard Stand'),
(5, 'Photo Frame', 'Paper', '299', 'Photo_frame_side.webp', '1', 'Technique - Handmade', 'Great idea for wedding gifts and anniversary gifts', 'Brand - AJANTA', '2 years warranty'),
(6, 'Wall Hanging', 'Paper', '489', 'wall-hanging-craft-with-paper-easy-683x1024.jpg', '1', 'Technique - Handmade', 'Multi color', 'Pack of 3', '1 year warranty'),
(8, 'Cloth Bag', 'Clothes', '300', 'j7652hgshf.jpg', '1', 'Brand - Kuber', 'Material - Cloth', 'Made of used clothes', '1 year warranty'),
(10, 'Table Cloth', 'Clothes', '389', 'datatable-cover-60x60-inch_1-750x650.jpg', '1', 'Product Dimensions - 152.4L x 101.6W cm', 'Shape - Rectangular', 'Material - Cloth', '2 years warranty'),
(13, 'Photo Frame', 'E-Waste', '430', 'photoframe.webp', '1', 'Brand - AJANTA ROYAL', 'Product Dimensions - 33L x 32W centimeters', 'Colour - Gold Metallic', 'Mounting Type - Wall Mount'),
(14, 'Clock', 'E-Waste', '500', 'clock.jpg', '1', 'Brand - Solimo', 'Product Dimensions - 30W x 30H', 'Room Type - Office, Living Room, Bedroom', 'Colour - Gold Metallic'),
(15, 'Pen Stand ', 'E-Waste', '350', 'pen.webp', '1', 'Brand - Aolimo', 'Product Dimensions - 15W x 20H', 'Metallic', 'Shape - Square'),
(16, 'Jewellery', 'E-Waste', '299', 'Jewellery.avif', '1', 'Brand - Speed', 'Color - Silver', 'Metallic', 'Shape - Circle'),
(17, 'Bracelet', 'E-Waste', '159', '123xyz.png', '1', 'Brand - Faster', 'Color - Black', 'Metallic', '1 year warranty'),
(18, 'Keychain', 'E-Waste', '199', 'keykitchen.jpg', '1', 'Theme - Alphabet, Car, Letter', 'Special Feature - Rust Resistant', 'Closure Type - Hook', 'Metallic Wire'),
(19, 'Night Lamp', 'E-Waste', '499', 'Nightlamp.jpg', '1', 'Style - Eclectic', 'Brand - EVERYTHING IMPORTED', 'Colour - Gold, White', 'Product Dimensions - 4.5D x 5.5W x 13.5H cm'),
(20, 'Home Decor', 'E-Waste', '399', 'homedecor.jpg', '1', 'Style - Brand', 'Brand - EVERYTHING IMPORTED', 'Colour - Yellow, Blue, White', 'Product Dimensions - 2.5D x 4W x 6H cm'),
(21, 'Handy Shoes', 'E-Waste', '1000', 'gabriel_dishaw_e_waste_art_hxrhu.jpg', '1', 'Imported', 'Heel measures approximately 2 inch', 'Memory Foam insole', 'Removable memory foam insole'),
(22, 'Recycled Robot', 'E-Waste', '500', 'ffd2c5aac814be69814fcf11506a3419.jpg', '1', 'Contains a soda can and a vibrating motor', 'Contains 2 LED and 2 AAA batteries', 'Contains toothbrushes', '1 year warranty'),
(31, 'Water Spray', 'Plastic', '499', 'image-16.png', '1', 'Brand - Cello', 'Comes in 3 colours', 'Material - Plastic', 'Capacity - 1 litre'),
(32, 'Table', 'Plastic', '489', 'Table.jpeg', '1', 'Colour - White', 'Shape - Rectangular', 'Table Design - Dining Table', 'Brand - Maharaja'),
(33, 'Hanging Lamp', 'Plastic', '150', 'hanginglamp.jpg', '1', 'Colour - Yellow', 'Shape - Round', 'Bottle Shape Design', 'Brand - Maharaja'),
(34, 'Light Lamp', 'Plastic', '456', '123lamp.jpg', '1', 'Style - Adjustable', 'Colour - White', 'Light Source Type - LED', 'Material - Plastic'),
(35, 'Bag', 'Plastic', '299', 'bag.jpeg', '1', 'Brand - TUGS', 'Capacity - 3.5 Kilograms', 'Colour - White, Blue', 'Material - Plastic'),
(36, 'Bracelet', 'Plastic', '59', 'b123.webp', '1', 'Brand - ARTIFICIAL', 'Colour - Blue(White)', 'Age Range (Description)	- Adult', '1 year warranty'),
(37, 'Keychain', 'Plastic', '199', 'pketchen.webp', '1', 'Brand - ARTIFICIAL', 'Colour - Blue(White)', 'Perfect choice for a gift', '2 years warranty'),
(38, 'Home Decor', 'Plastic', '459', 'maxresdefault.jpg', '1', 'ARTIFICIAL Finish', 'Colour - Black(White)', 'Pack of 3', '2 years warranty'),
(39, 'Lights', 'Plastic', '199', 'Screen+Shot+2017-10-17+at+3.01.17+PM.png', '1', 'Made of plastic', 'Colour - White', 'Pack of 2', '1 year warranty'),
(40, 'Chair', 'Plastic', '499', 'chair.jpg', '1', 'Made of plastic', 'Colour - Black', 'Assembly - Already Assembled', '2 years warranty'),
(42, 'Pen Stand', 'Paper', '199', 'yz432.webp', '1', 'Technique - Handmade', 'Great idea for gift', 'Pack of 2', '1 year warranty'),
(43, 'Paper Bag', 'Paper', '159', 'Newspaper-Bag-Craft.jpg', '1', 'Technique - Handmade', 'Can hold 1kg', 'Pack of 2', '1 year warranty'),
(44, 'Hanging Lamp', 'Paper', '350', 'wlamp.jpg', '1', 'Technique - Handmade', 'Color - White', 'Pack of 1', '1 year warranty'),
(45, 'Craft Basket', 'Paper', '456', 'FMLP5Q1HPXFS3O9.webp', '1', 'Technique - Handmade', 'Can hold upto 2.5kg', 'Pack of 3', '2 years warranty'),
(46, 'Bag', 'Paper', '299', '2-600x469.jpg', '1', 'Technique - Handmade', 'Can hold upto 4.5kg', 'Pack of 2', '1 year warranty'),
(47, 'Note Books', 'Paper', '199', 'notebook.jpg', '1', 'Brand - BRUSTRO', 'Material - Paper', 'Sheet Size - 148 x 210mm', 'Sheet Count - 100'),
(48, 'Keychain', 'Paper', '59', 'il_fullxfull.4056251308_mfm3.webp', '1', 'Great idea for gift', 'Material - Paper', 'Comes in pack of 1', '1 year warranty'),
(49, 'Paper Pencil', 'Paper', '259', 'new-product-500x500.webp', '1', 'Brand - GoodWill Tech', 'Material - Paper', 'Ink Colour - Black', 'Pack of 2'),
(50, 'Lights', 'Paper', '199', 'paper_light.webp', '1', 'Homemade', 'Material - Paper', 'Colour - White(Led)', 'Pack of 2'),
(51, 'Paper Cup', 'Paper', '199', 'cup.jpeg', '1', 'Material - Paper', 'Colour - Black', 'Comes in 48 pieces', 'Reusable'),
(54, 'Chair Cover', 'Clothes', '259', 'chair_cover.webp', '1', 'Product Dimensions - 25D x 15W x 5H cm', 'Colour - Beige Diamond', 'Recommended Use For Product Office Chairs.', '3 years warranty'),
(57, 'TV Cover', 'Clothes', '350', 'tv cover.jpg', '1', 'Product Dimensions - 15.4L x 68.6W cm', 'Shape - Rectangular', 'Material - Cloth', 'Made of used clothes'),
(58, 'School Bag', 'Clothes', '456', 'schoolbag.jpg', '1', 'Product Dimensions - 15.4L x 68.6W cm', 'Shape - Rectangular', 'Material - Cloth', '2 years warranty'),
(59, 'Towels', 'Clothes', '599', 'Handkerch.jpg', '1', 'Pack of 5', 'Material - Cloth', 'Made of used clothes', '1 year warranty'),
(60, 'Pillow Cover', 'Clothes', '199', 'pillowcover.webp', '1', 'Pack of 2', 'Color - White', 'Made of used clothes', '2 years warranty'),
(61, 'Bag', 'Clothes', '499', 'PinkandPurple.webp', '1', 'Brand - Kuber', 'Material - Cloth', 'Can hold upto 3 kilograms', '1 year warranty'),
(62, 'Keychain', 'Clothes', '59', 'clothsd.jpg', '1', 'Pack of 6', 'Shape - Rectangular', 'Great idea for gift', '1 year warranty'),
(63, 'Door Mats', 'Clothes', '359', 'Multicolor-Cotton-Door-Mat.jpg', '1', 'Pack of 4', 'Made of used clothes', 'Multi-colour', '2 year warranty'),
(64, 'Recycled Dress', 'Clothes', '599', 'recycled dress2.jpg', '1', 'Recycled Material', 'Fit Type - Regular', 'Pattern - Printed', 'Neck - Boat Neck'),
(65, 'Pen Stand', 'Clothes', '350', 'th (1).jpg', '1', 'Separate pens, pencils, rulers and scissors', 'Easy to organize pens, pencils and markers', 'Made of used clothes', '2 years warranty');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `payment_details`
--
ALTER TABLE `payment_details`
  ADD PRIMARY KEY (`payment_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`pid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT for table `payment_details`
--
ALTER TABLE `payment_details`
  MODIFY `payment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `pid` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
