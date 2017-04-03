-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 03, 2017 at 09:34 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 7.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `weshared4u`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_donation_products`
--

CREATE TABLE `tb_donation_products` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `product_color` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `product_number` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `product_detail` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `product_size` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `product_weight` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `user_id` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `product_type` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `img_path` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tb_donation_products`
--

INSERT INTO `tb_donation_products` (`product_id`, `product_name`, `product_color`, `product_number`, `product_detail`, `product_size`, `product_weight`, `user_id`, `product_type`, `img_path`, `timestamp`) VALUES
(1, 'ตุ๊กตา', 'แดง', '12', 'แดง', '12 open', '12x12 Centimeters', '1', '', '149124159012002.jpg', '2017-04-03 17:46:30'),
(2, 'ตุ๊กตา', 'แดง', '12', 'แดง', '12 role', '3x4 Centimeters', '1', '', '149124194617712.jpg', '2017-04-03 17:52:26'),
(3, 'ตุ๊กตา', 'แดง', '12', 'แดง', '12 role', '3x4 Centimeters', '1', '', '149124231717833.jpg', '2017-04-03 17:58:37'),
(4, 'ตุ๊กตา', 'แดง', '12', 'แดง', '12 open', '12x12 Centimeters', '1', '', '149124240822318.jpg', '2017-04-03 18:00:08'),
(5, 'ตุ๊กตา', 'แดง', '12', 'แดง', '12 open', '12x12 Centimeters', '1', '', '149124246321199.jpg', '2017-04-03 18:01:03'),
(6, 'แดง', 'แดง', '12', 'แดง', '12 open', '12x12 Centimeters', '1', '', '149124484910398.jpg', '2017-04-03 18:40:49'),
(7, 'แดง', 'แดง', '12', 'แดง', '12 open', '12x12 Centimeters', '1', '', '149124633720086.jpg', '2017-04-03 19:05:37');

-- --------------------------------------------------------

--
-- Table structure for table `tb_donation_users`
--

CREATE TABLE `tb_donation_users` (
  `user_id` int(11) NOT NULL,
  `email` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `firstname` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `lastname` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `identity_card` varchar(13) COLLATE utf8_unicode_ci NOT NULL,
  `district` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `province` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `zip_code` int(10) NOT NULL,
  `address` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `phone` int(10) NOT NULL,
  `user_type` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tb_donation_users`
--

INSERT INTO `tb_donation_users` (`user_id`, `email`, `password`, `firstname`, `lastname`, `identity_card`, `district`, `province`, `zip_code`, `address`, `phone`, `user_type`, `timestamp`) VALUES
(5, 'admin@gmail.com', '21232f297a57a5a743894a0e4a801fc3', 'admin', 'admin', '1234567890123', 'admin', 'admin', 123456, 'admin', 1234567890, 'admin', '2017-04-03 14:29:39');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_donation_products`
--
ALTER TABLE `tb_donation_products`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `tb_donation_users`
--
ALTER TABLE `tb_donation_users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_donation_products`
--
ALTER TABLE `tb_donation_products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `tb_donation_users`
--
ALTER TABLE `tb_donation_users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
