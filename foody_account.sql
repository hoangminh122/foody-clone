-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 10, 2020 at 03:32 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.2.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `foody_account`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(20) NOT NULL,
  `name` varchar(20) CHARACTER SET utf8 NOT NULL,
  `lastname` varchar(11) CHARACTER SET utf8 NOT NULL,
  `email` varchar(50) CHARACTER SET utf8 NOT NULL,
  `password` varchar(50) CHARACTER SET utf8 NOT NULL,
  `gender` varchar(10) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `lastname`, `email`, `password`, `gender`) VALUES
(1, 'hoang', 'minh', 'hoangminh12297@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(20) NOT NULL,
  `name` varchar(100) CHARACTER SET utf8 NOT NULL,
  `description` varchar(500) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `description`) VALUES
(1, 'Đặt nhiều', 'description'),
(2, 'Mới', 'description'),
(3, 'Gần tôi', 'a');

-- --------------------------------------------------------

--
-- Table structure for table `menus`
--

CREATE TABLE `menus` (
  `id` int(11) NOT NULL,
  `name` varchar(20) CHARACTER SET utf8 NOT NULL,
  `description` varchar(500) CHARACTER SET utf8 NOT NULL,
  `price` varchar(20) CHARACTER SET utf8 NOT NULL,
  `thumbnail` varchar(200) CHARACTER SET utf8 NOT NULL,
  `shop_id` varchar(20) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menus`
--

INSERT INTO `menus` (`id`, `name`, `description`, `price`, `thumbnail`, `shop_id`) VALUES
(1, ' Cơm Tấm Bì Chả Trứn', 'Cơm tấm ăn kèm bì + chả trứng và trứng opla', '31500', '8f8d61b9-72c6-4dd7-8afd-ea21eac9acf1.jpg', '1'),
(2, ' Cơm Sườn Non Nướng ', 'Cơm Sườn Non Nướng Mật Ong', '58500', 'cba532be-5ff2-42bd-8a62-1bea3a5bc185.jpg', '1'),
(3, 'Cơm Mắm Chưng', '', '40500', '90d2f9c8-3332-4476-b870-faa3ab56c000.jpg', '1'),
(4, 'Canh Cải Chua Gân Bò', 'Món canh', '9000', '19f54d21-ccda-4f7c-8acd-6edfc78bec4b.jpg', '1'),
(5, 'Canh Khổ Qua Dồn Thị', 'Món Canh ', '10000', 'f9e6e41c-0331-4515-821a-c8b6e11e8239.jpg', '1');

-- --------------------------------------------------------

--
-- Table structure for table `shops`
--

CREATE TABLE `shops` (
  `id` tinyint(4) NOT NULL,
  `name` varchar(20) CHARACTER SET utf8 NOT NULL,
  `area` varchar(20) CHARACTER SET utf8 NOT NULL,
  `address` varchar(20) CHARACTER SET utf8 NOT NULL,
  `time_open` varchar(20) CHARACTER SET utf8 NOT NULL,
  `price_area` varchar(20) CHARACTER SET utf8 NOT NULL,
  `phone` varchar(20) CHARACTER SET utf8 NOT NULL,
  `email` varchar(20) CHARACTER SET utf8 NOT NULL,
  `thumbnail` varchar(200) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `shops`
--

INSERT INTO `shops` (`id`, `name`, `area`, `address`, `time_open`, `price_area`, `phone`, `email`, `thumbnail`) VALUES
(1, 'Bún nắm-Lạc Long Quâ', 'Giảm trực tiếp 30% t', '49 Ngõ 447 Lạc Lon', '09:00 - 21:30', '75.000đ - 150.000đ', '123456789', 'ahsgd@gmail.com', 'cach-nau-bun-mam-thom-ngon-khong-khac-gi-ngoai-hang.jpg'),
(2, 'Phở Bát Đàn', 'Giảm trực tiếp 10% t', 'Đường 270B', '7:00 AM', '20000', '5465215478', 'pho@gmail.com', 'pho.jpg'),
(3, 'Quán Nem - Bún Chả &', 'Giảm trực tiếp 2% tr', '106K1 Giảng Võ,', ' 09:00 - 21:30', '75.000đ - 150.000đ', '46521547', 'nem@gmail.com', 'nem.jpg'),
(4, 'Tùng Bản Quán - Lẩu ', 'Giảm trực tiếp 50% t', '9 - 13 Lê Duẩn, Quận', '00:00 - 01:30 | 16:0', '50,000 - 250,000', '545645454', 'lau@gmail.com', 'lau.jpg'),
(5, 'Chè Ngon Hà Nội & Mó', '', '297 Tô Hiệu, Quận Cầ', '09:00 - 23:00', '15,000 - 20,000', '5465215423', 'che@gmail.com', 'che.jpg'),
(8, 'Cơm Tấm Sài Gòn Út T', 'Giảm trực tiếp 35% t', '105 B8 Tô Hiệu, P. N', '10:00 - 22:00', '30,000 - 70,000', '2142523456', 'com@gmail.com', 'com.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `shop_category`
--

CREATE TABLE `shop_category` (
  `shop_id` int(20) NOT NULL,
  `category_id` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `shop_category`
--

INSERT INTO `shop_category` (`shop_id`, `category_id`) VALUES
(1, 1),
(2, 1),
(2, 3),
(3, 1),
(3, 2),
(3, 3),
(4, 1),
(4, 2),
(4, 3);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(20) NOT NULL,
  `name` varchar(20) CHARACTER SET utf8mb4 NOT NULL,
  `lastname` varchar(20) CHARACTER SET utf8mb4 NOT NULL,
  `email` varchar(50) CHARACTER SET utf8mb4 NOT NULL,
  `password` varchar(100) CHARACTER SET utf8 NOT NULL,
  `gender` varchar(10) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `lastname`, `email`, `password`, `gender`) VALUES
(27, 'huy', 'le', 'hoaihuy2011.vn@gmail.com', '25d55ad283aa400af464c76d713c07ad', 'male'),
(29, 'minh', 'hoang', 'hoangminh@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'male'),
(30, 'rete', 'er', 'hoangthuy1708@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'female');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shops`
--
ALTER TABLE `shops`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shop_category`
--
ALTER TABLE `shop_category`
  ADD PRIMARY KEY (`shop_id`,`category_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `menus`
--
ALTER TABLE `menus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `shops`
--
ALTER TABLE `shops`
  MODIFY `id` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
