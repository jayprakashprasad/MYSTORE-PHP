-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 03, 2020 at 08:26 AM
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
-- Database: `mystore`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(100) NOT NULL,
  `order_id` varchar(100) NOT NULL,
  `product_id` varchar(100) NOT NULL,
  `quantity` int(100) NOT NULL,
  `order_by` varchar(100) NOT NULL,
  `date` timestamp(6) NOT NULL DEFAULT current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `order_id`, `product_id`, `quantity`, `order_by`, `date`) VALUES
(20, '5f264b69890d7', '5f25915489173', 1, '', '2020-08-02 06:59:55.560391'),
(21, '5f264b69890d7', '2', 1, '', '2020-08-02 06:59:59.217618'),
(24, '5f26b0910a408', '5f2573fb0b71b', 1, '', '2020-08-02 12:25:19.490235'),
(25, '5f26b4d153724', '5f25915489173', 5, '', '2020-08-02 12:42:57.341797'),
(26, '5f26b4d153724', '5f25a5abc15b8', 5, '', '2020-08-02 12:42:59.827148');

-- --------------------------------------------------------

--
-- Table structure for table `cats`
--

CREATE TABLE `cats` (
  `id` int(100) NOT NULL,
  `cat` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cats`
--

INSERT INTO `cats` (`id`, `cat`) VALUES
(1, 'Mobile'),
(2, 'Laptops'),
(3, 'TV'),
(4, 'Others');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(100) NOT NULL,
  `product_cat` varchar(100) NOT NULL,
  `product_id` varchar(100) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `product_desc` varchar(500) NOT NULL,
  `product_img` varchar(500) NOT NULL,
  `product_price` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `product_cat`, `product_id`, `product_name`, `product_desc`, `product_img`, `product_price`) VALUES
(20, 'Mobile', '5f26ea2f02dc6', 'Redmi 8A Dual ', '', 'Redmi-8A-Dual.jpg', 8099),
(21, 'Mobile', '5f26ea6ff2b5c', 'Redmi 8', '                                                                ', 'Redmi-8.jpg', 9999),
(23, 'Mobile', '5f26eacf1908b', 'Realme c3', '', 'realme-c3.webp', 10099),
(24, 'Mobile', '5f26eb8fa75ea', 'Iphone 11 (64 GB)', '', 'iphone11.jpg', 72999),
(25, 'Laptops', '5f26ec37eea83', 'Apple - Macbook', '', 'apple-macbookair.jpg', 101051),
(26, 'Laptops', '5f26ecf84378f', 'MacBook Pro', '', 'macbook-pro.jpg', 120010),
(27, 'Laptops', '5f26efd938be5', 'MacBook 3', '', 'Macbook3.jpg', 138888),
(28, 'Laptops', '5f26f05c81761', 'MacBook 4', '', 'macbook4.jpg', 129999),
(29, 'Laptops', '5f26f1da08d24', 'Macbook Case', '', 'macbook.jpg', 5899),
(30, 'Others', '5f26f26d6de93', 'Pendrive (30 GB)', '', 'sandisk.webp', 699),
(31, 'Mobile', '5f26f2c768305', 'Pendrive', '', 'Ankirant-OTG.jpg', 399),
(32, 'Others', '5f26f32c094c6', 'I-Watch', '', 'iwatch.jpg', 7999),
(33, 'Others', '5f26f3af2f34f', 'I-Watch', '', 'iwatch2.png', 8000),
(34, 'Others', '5f26f45544aa2', 'Holder(Iphone)', '', 'watch-iphone-holder.jpg', 2599),
(35, 'Others', '5f26f494a909e', 'Xiaomi Band', '', 'Xiaomi-band.jpg', 6000),
(36, 'TV', '5f26f4ff9a04b', 'Hisense Smart TV', '                                                                ', 'HISENSE-Smart-55-Inch-4K-UHD-Television-TV-55-A6103UW.jpg', 30099),
(37, 'TV', '5f26f56266481', 'Samsung UA55J6', '', 'samsung-UA55J6.jpg', 25999),
(38, 'TV', '5f26f5b995400', 'Smart TV Xiaomi', '', 'smarttv2.jpg', 39999),
(39, 'TV', '5f26f63e514cf', 'Samsung Curve', '', 'samsung-curve.jpg', 26999);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(100) NOT NULL,
  `user_id` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mobile` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user_id`, `name`, `email`, `mobile`, `password`) VALUES
(5, 'iunv', 'jay', 'hbrurhbi@jay.com', '', 'bb'),
(6, '', '', 'hbrurhbi@jay.com', '', '44'),
(7, '', '', 'hbrurhbi@jay.com', '', '44'),
(8, '', '', 'hbrurhbi@jay.com', '', '44'),
(9, '', '', 'hbrurhbi@jay.com', '', 'ff'),
(10, '', '', 'hbrurhbi@jay.com', '', 'ff'),
(11, '', '', 'hbrurhbi@jay.com', '', '7y67'),
(12, '', '', 'hbrurhbi@jay.com', '', '66'),
(13, '', '', 'hbrurhbi@jay.com', '', '66'),
(14, '', '', 'hbrurhbi@jay.com', '', '66'),
(15, '', '', 'hbrurhbi@jay.com', '', ' cc'),
(16, '', '', 'hbrurhbi@jay.com', '', 'hh'),
(17, '', '', 'hbrurhbi@jay.com', '', 'vv'),
(18, '', '', 'hbrurhbi@jay.com', '', 'jhjhjhjjhh'),
(19, '', '', 'jaytattoo12@gmail.com', '', 'jjjj'),
(20, '', '', 'jaytattoo12@gmail.com', '', 'jjjj'),
(21, '', '', 'hbrurhbi@jay.com', '', 'grg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cats`
--
ALTER TABLE `cats`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `cats`
--
ALTER TABLE `cats`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
