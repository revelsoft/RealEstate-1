-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 12, 2019 at 03:29 AM
-- Server version: 5.7.17-log
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `revel_soft_real_estate`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_product_image`
--

CREATE TABLE `tb_product_image` (
  `product_image_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `product_image_img` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tb_product_image`
--

INSERT INTO `tb_product_image` (`product_image_id`, `product_id`, `product_image_img`) VALUES
(2, 8, '07032019110946-05032019145951-default.png'),
(3, 25, '07032019110946-05032019145951-default.png'),
(4, 26, '07032019110946-05032019145951-default.png'),
(5, 27, '07032019110946-05032019145951-default.png'),
(6, 9, '07032019110946-05032019145951-default.png'),
(7, 28, '07032019110946-05032019145951-default.png'),
(8, 29, '07032019110946-05032019145951-default.png'),
(9, 30, '07032019110946-05032019145951-default.png'),
(10, 31, '07032019110946-05032019145951-default.png'),
(11, 32, '07032019110946-05032019145951-default.png'),
(12, 33, '07032019110946-05032019145951-default.png'),
(13, 10, '07032019110946-05032019145951-default.png'),
(15, 14, '07032019110946-05032019145951-default.png'),
(16, 13, '07032019110946-05032019145951-default.png'),
(19, 16, '07032019110946-05032019145951-default.png'),
(20, 17, '07032019110946-05032019145951-default.png'),
(21, 18, '07032019110946-05032019145951-default.png'),
(22, 19, '07032019110946-05032019145951-default.png'),
(23, 20, '07032019110946-05032019145951-default.png'),
(24, 21, '07032019110946-05032019145951-default.png'),
(25, 22, '07032019110946-05032019145951-default.png'),
(26, 23, '07032019110946-05032019145951-default.png'),
(27, 24, '07032019110946-05032019145951-default.png'),
(28, 25, '07032019110946-05032019145951-default.png'),
(29, 26, '07032019110946-05032019145951-default.png'),
(30, 27, '07032019160551-05032019145951-default.png'),
(31, 15, '11032019120403-default.png'),
(32, 8, '07032019110946-05032019145951-default.png'),
(33, 25, '07032019110946-05032019145951-default.png'),
(34, 26, '07032019110946-05032019145951-default.png'),
(35, 27, '07032019110946-05032019145951-default.png'),
(36, 9, '07032019110946-05032019145951-default.png'),
(37, 28, '07032019110946-05032019145951-default.png'),
(38, 29, '07032019110946-05032019145951-default.png'),
(39, 30, '07032019110946-05032019145951-default.png'),
(40, 31, '07032019110946-05032019145951-default.png'),
(41, 32, '07032019110946-05032019145951-default.png'),
(42, 33, '07032019110946-05032019145951-default.png'),
(43, 10, '07032019110946-05032019145951-default.png'),
(44, 14, '07032019110946-05032019145951-default.png'),
(45, 13, '07032019110946-05032019145951-default.png'),
(46, 16, '07032019110946-05032019145951-default.png'),
(47, 17, '07032019110946-05032019145951-default.png'),
(48, 18, '07032019110946-05032019145951-default.png'),
(49, 19, '07032019110946-05032019145951-default.png'),
(50, 20, '07032019110946-05032019145951-default.png'),
(51, 21, '07032019110946-05032019145951-default.png'),
(52, 22, '07032019110946-05032019145951-default.png'),
(53, 23, '07032019110946-05032019145951-default.png'),
(54, 24, '07032019110946-05032019145951-default.png'),
(55, 25, '07032019110946-05032019145951-default.png'),
(56, 26, '07032019110946-05032019145951-default.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_product_image`
--
ALTER TABLE `tb_product_image`
  ADD PRIMARY KEY (`product_image_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_product_image`
--
ALTER TABLE `tb_product_image`
  MODIFY `product_image_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
