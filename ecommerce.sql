-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 04, 2018 at 09:38 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecommerce`
--

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `order_price` varchar(100) NOT NULL,
  `user_id` int(11) NOT NULL,
  `order_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `order_price`, `user_id`, `order_on`) VALUES
(1, '2225', 1, '2018-11-04 08:38:20'),
(2, '445', 1, '2018-11-04 08:38:34');

-- --------------------------------------------------------

--
-- Table structure for table `order_items`
--

CREATE TABLE `order_items` (
  `item_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `item_quantity` int(11) NOT NULL,
  `product_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order_items`
--

INSERT INTO `order_items` (`item_id`, `order_id`, `item_quantity`, `product_id`) VALUES
(1, 1, 6, 3),
(2, 1, 2, 2),
(3, 2, 4, 1);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `shipping_cost` decimal(10,2) NOT NULL,
  `brand` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `title`, `price`, `shipping_cost`, `brand`, `image`, `description`) VALUES
(1, 'Fujifilm FinePix S2950 Digital Camera', '223.00', '222.00', 'Fujifilm', 'https://www.dpreview.com/files/p/E~products/fujifilm_s1/shots/467e4706d5404fc8b7c5e31510cd6e04.png', '(14MP, 18x Optical Zoom) 3-inch LCD'),
(2, 'Fujifilm FinePix S2950 Digital Camera', '223.00', '222.00', 'Fujifilm', 'https://www.dpreview.com/files/p/E~products/fujifilm_s1/shots/467e4706d5404fc8b7c5e31510cd6e04.png', '(14MP, 18x Optical Zoom) 3-inch LCD'),
(3, 'Fujifilm FinePix S2950 Digital Camera', '223.00', '222.00', 'Fujifilm', 'https://www.dpreview.com/files/p/E~products/fujifilm_s1/shots/467e4706d5404fc8b7c5e31510cd6e04.png', '(14MP, 18x Optical Zoom) 3-inch LCD'),
(4, 'Fujifilm FinePix S2950 Digital Camera', '223.00', '222.00', 'Fujifilm', 'https://www.dpreview.com/files/p/E~products/fujifilm_s1/shots/467e4706d5404fc8b7c5e31510cd6e04.png', '(14MP, 18x Optical Zoom) 3-inch LCD'),
(5, 'Fujifilm FinePix S2950 Digital Camera', '223.00', '222.00', 'Fujifilm', 'https://www.dpreview.com/files/p/E~products/fujifilm_s1/shots/467e4706d5404fc8b7c5e31510cd6e04.png', '(14MP, 18x Optical Zoom) 3-inch LCD'),
(6, 'Fujifilm FinePix S2950 Digital Camera', '223.00', '222.00', 'Fujifilm', 'https://www.dpreview.com/files/p/E~products/fujifilm_s1/shots/467e4706d5404fc8b7c5e31510cd6e04.png', '(14MP, 18x Optical Zoom) 3-inch LCD');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` text NOT NULL,
  `address` varchar(255) NOT NULL,
  `address2` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `postcode` varchar(10) NOT NULL,
  `country` varchar(255) NOT NULL,
  `created_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `first_name`, `last_name`, `email`, `password`, `address`, `address2`, `city`, `postcode`, `country`, `created_on`) VALUES
(1, 'Indira', 'Simmons', 'fonyhuva@yopmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'Minim irure quis sit explicabo Obcaecati veniam nihil dolor totam lorem eos nobis sed excepturi sit natus debitis', 'Nisi quia quasi itaque ut quibusdam ut consectetur magni excepturi in omnis enim autem aspernatur corporis', 'Reprehenderit et saepe in provident', '60476', 'Canada', '2018-11-04 08:37:51');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `order_items`
--
ALTER TABLE `order_items`
  ADD PRIMARY KEY (`item_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `order_items`
--
ALTER TABLE `order_items`
  MODIFY `item_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
