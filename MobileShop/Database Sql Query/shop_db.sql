-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 05, 2024 at 07:20 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `acc_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(5) NOT NULL,
  `name` varchar(20) NOT NULL,
  `price` double NOT NULL,
  `image` varchar(20) NOT NULL,
  `quantity` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `name`, `price`, `image`, `quantity`) VALUES
(16, 'iPhone 11 pro', 799, 'mobiles.jpg', 1),
(17, 'iPhone 12 pro', 899, 'iPhone_12_Pro_.png', 1);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `number` varchar(15) NOT NULL,
  `email` varchar(255) NOT NULL,
  `method` varchar(50) NOT NULL,
  `flat` varchar(50) NOT NULL,
  `street` varchar(255) NOT NULL,
  `city` varchar(100) NOT NULL,
  `state` varchar(100) NOT NULL,
  `country` varchar(100) NOT NULL,
  `pin_code` varchar(10) NOT NULL,
  `total_products` int(11) NOT NULL,
  `total_price` decimal(10,2) NOT NULL,
  `order_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `name`, `number`, `email`, `method`, `flat`, `street`, `city`, `state`, `country`, `pin_code`, `total_products`, `total_price`, `order_date`) VALUES
(1, 'Malith', '0776386633', 'malith.kavidu.34@gmail.com', 'cash on delivery', '13', 'pagoda road', 'Nugegoda', 'Nugegoda', 'SriLanka', '11000', 0, '1797.00', '2024-03-05 18:32:59'),
(2, 'Malith', '111221221', 'bsse0122011275@saegis.ac.lk', 'cash on delivery', '13', 'pagoda road', 'Nugegoda', 'Nugegoda', 'SriLanka', '11000', 0, '1797.00', '2024-03-05 18:51:21'),
(3, 'Malith', '0776386633', 'malith.kavidu.34@gmail.com', 'credit cart', '13', 'pagoda road', 'Nugegoda', 'Nugegoda', 'SriLanka', '11000', 0, '1797.00', '2024-03-05 18:52:38'),
(4, 'D.A.M.K Dodangoda', '1233', 'bsse012201275@saegis.ac.lk', 'credit cart', 'a', '23', 'as', '11sds', 'Sri Lanka', '12211', 0, '399.00', '2024-03-15 17:43:27'),
(5, 'Malith Dodangoda', '1233', 'bsse012201275@saegis.ac.lk', 'cash on delivery', 'Sammani', 'Lihiniwehera', 'Kurunegala', 'Dodangaslanda', 'Sri Lanka', '65630', 0, '1698.00', '2024-04-05 16:57:17'),
(6, 'Malith Dodangoda', '1233', 'bsse012201275@saegis.ac.lk', 'cash on delivery', 'Sammani', 'Lihiniwehera', 'Kurunegala', 'Dodangaslanda', 'Sri Lanka', '12321', 0, '0.00', '2024-04-05 17:01:36'),
(7, 'Malith Dodangoda', '1233', 'bsse012201275@saegis.ac.lk', 'cash on delivery', 'Sammani', 'Lihiniwehera', 'Kurunegala', 'Dodangaslanda', 'Sri Lanka', '121212', 0, '1698.00', '2024-04-05 17:02:19');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `image`) VALUES
(5, 'Airpods pro 2', 399, 'AirPods.png'),
(6, 'iPhone 15 pro', 999, 'iphone.jpg'),
(7, 'iPhone 12 pro', 899, 'iPhone_12_Pro_.png'),
(8, 'iPhone 11 pro', 799, 'mobiles.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
