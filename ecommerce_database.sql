-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 28, 2021 at 12:05 PM
-- Server version: 5.7.31
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `category` enum('book','stationery','other') NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `category`) VALUES
(1, 'harry_potter', 'book'),
(2, 'deception_point', 'book'),
(3, 'drunkards_walk', 'book'),
(4, 'the_kite_runner', 'book'),
(5, 'animal_farm', 'book'),
(6, 'night_lamp', 'other'),
(7, 'harry_potter', 'book'),
(8, 'deception_point', 'book'),
(9, 'drunkards_walk', 'book'),
(10, 'the_kite_runner', 'book'),
(11, 'animal_farm', 'book'),
(12, 'night_lamp', 'other'),
(13, 'harry_potter', 'book'),
(14, 'deception_point', 'book'),
(15, 'drunkards_walk', 'book'),
(16, 'the_kite_runner', 'book'),
(17, 'animal_farm', 'book'),
(18, 'night_lamp', 'other'),
(19, 'pencil_box', 'stationery'),
(20, 'fountain_pen', 'stationery'),
(21, 'study_bed_table', 'other'),
(22, 'personal_diary', 'stationery');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email_id` varchar(20) NOT NULL,
  `first_name` varchar(15) NOT NULL,
  `last_name` varchar(15) DEFAULT NULL,
  `phone` int(10) NOT NULL,
  `registration_timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email_id`, `first_name`, `last_name`, `phone`, `registration_timestamp`) VALUES
(1, 'venu@xyz.com', 'Venu', 'Sharma', 547903927, '2016-09-28 16:00:04'),
(2, 'shubham@xyz.com', 'Shubham', NULL, 538915694, '2021-04-28 10:21:22'),
(3, 'disha@xyz.com', 'Disha', 'Kaur', 557825323, '2016-09-29 18:32:14'),
(4, 'ankit@xyz.com', 'Ankit', 'Kumar', 561322116, '2016-09-30 09:35:18'),
(5, 'mrinal@xyz.com', 'Mrinal', 'Joy', 517918670, '2016-10-02 03:38:06'),
(6, 'abhilash@xyz.com', 'Abhilash', 'Jalsani', 509841902, '2016-10-01 05:00:00'),
(7, 'hardik@xyz.com', 'Hardik', 'Arora', 595452568, '2016-09-30 07:50:45'),
(8, 'yesha@xyz.com', 'Yesha', 'Krishna', 534532216, '2016-09-30 07:50:45'),
(9, 'rushit@xyz.com', 'Rushit', NULL, 534359370, '2016-09-29 06:16:37'),
(10, 'jessy@xyz.com', 'Jessy', 'Joseph', 591053100, '2016-09-28 18:32:14'),
(11, 'jasper@xyz.com', 'Jaspreet', NULL, 515078235, '2016-09-29 18:20:12'),
(12, 'prachi@xyz.com', 'Prachi', NULL, 530670640, '2016-09-29 06:42:12');

-- --------------------------------------------------------

--
-- Table structure for table `users_products`
--

DROP TABLE IF EXISTS `users_products`;
CREATE TABLE IF NOT EXISTS `users_products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `purchase_timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`),
  KEY `product_id` (`product_id`)
) ENGINE=InnoDB AUTO_INCREMENT=39 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users_products`
--

INSERT INTO `users_products` (`id`, `user_id`, `product_id`, `purchase_timestamp`) VALUES
(1, 12, 3, '2016-10-10 12:40:12'),
(2, 12, 6, '2016-10-12 12:40:12'),
(3, 8, 6, '2016-10-29 06:42:12'),
(4, 4, 6, '2016-10-15 07:35:04'),
(5, 10, 9, '2016-10-09 20:45:16'),
(6, 7, 4, '2016-10-10 03:04:42'),
(7, 12, 3, '2016-10-10 12:40:12'),
(8, 12, 6, '2016-10-12 12:40:12'),
(9, 8, 6, '2016-10-29 06:42:12'),
(10, 4, 6, '2016-10-15 07:35:04'),
(11, 10, 9, '2016-10-09 20:45:16'),
(12, 7, 4, '2016-10-10 03:04:42'),
(13, 5, 1, '2016-10-19 11:28:54'),
(14, 4, 5, '2016-10-14 06:05:32'),
(15, 12, 3, '2016-10-10 12:40:12'),
(16, 12, 6, '2016-10-12 12:40:12'),
(17, 8, 6, '2016-10-29 06:42:12'),
(18, 4, 6, '2016-10-15 07:35:04'),
(19, 10, 9, '2016-10-09 20:45:16'),
(20, 7, 4, '2016-10-10 03:04:42'),
(21, 5, 1, '2016-10-19 11:28:54'),
(22, 4, 5, '2016-10-14 06:05:32'),
(23, 12, 3, '2016-10-10 12:40:12'),
(24, 12, 6, '2016-10-12 12:40:12'),
(25, 8, 6, '2016-10-29 06:42:12'),
(26, 4, 6, '2016-10-15 07:35:04'),
(27, 10, 9, '2016-10-09 20:45:16'),
(28, 7, 4, '2016-10-10 03:04:42'),
(29, 5, 1, '2016-10-19 11:28:54'),
(30, 4, 5, '2016-10-14 06:05:32'),
(31, 8, 5, '2016-10-23 01:15:23'),
(32, 7, 7, '2016-10-04 07:42:35'),
(33, 12, 2, '2016-10-14 06:53:41'),
(34, 12, 7, '2016-10-21 08:45:13'),
(35, 7, 2, '2016-10-05 10:38:02'),
(36, 7, 8, '2016-10-06 12:04:49'),
(37, 1, 2, '2016-10-13 10:07:51'),
(38, 11, 6, '2016-10-15 04:33:01');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `users_products`
--
ALTER TABLE `users_products`
  ADD CONSTRAINT `users_products_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `users_products_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
