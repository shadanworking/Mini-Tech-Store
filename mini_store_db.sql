-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 17 ديسمبر 2025 الساعة 20:00
-- إصدار الخادم: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mini_store_db`
--

-- --------------------------------------------------------

--
-- بنية الجدول `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `price` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- إرجاع أو استيراد بيانات الجدول `products`
--

INSERT INTO `products` (`id`, `name`, `description`, `price`) VALUES
(1, 'Laptop Dell', 'High performance laptop', '500.00'),
(2, 'iPhone 17 pro max', 'Latest Apple smartphone', '1999.00'),
(3, 'Samsung S25 Ultra', 'Android smartphone', '850.00'),
(4, 'Sony Headphones', 'Noise cancelling', '150.00'),
(5, 'Mouse Logitech', 'Wireless mouse', '20.00'),
(6, 'Keyboard Mechanical', 'RGB keyboard', '80.00'),
(7, 'Monitor LG', '24 inch display', '120.00'),
(8, 'USB Drive', '64GB storage', '15.00'),
(9, 'Webcam', 'HD 1080p webcam', '45.00'),
(10, 'Printer HP', 'LaserJet printer', '200.00'),
(12, 'Speaker JBL', 'Bluetooth speaker', '60.00'),
(13, 'Smart Watch', 'Fitness tracker', '100.00'),
(14, 'Tablet iPad', '10 inch screen', '300.00'),
(15, 'Gaming Chair', 'Comfortable chair', '180.00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
