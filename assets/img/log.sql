-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Feb 28, 2024 at 11:04 AM
-- Server version: 8.0.31
-- PHP Version: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `log`
--

-- --------------------------------------------------------

--
-- Table structure for table `mining_logs`
--

DROP TABLE IF EXISTS `mining_logs`;
CREATE TABLE IF NOT EXISTS `mining_logs` (
  `id` int NOT NULL AUTO_INCREMENT,
  `user_id` int DEFAULT NULL,
  `start_time` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `end_time` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=66 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int NOT NULL,
  `user_name` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `acc_balance` decimal(10,2) NOT NULL,
  `mine_amount` decimal(10,2) NOT NULL,
  `vip_id` int DEFAULT NULL,
  PRIMARY KEY (`user_id`),
  KEY `vip_id` (`vip_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_name`, `email`, `password`, `address`, `acc_balance`, `mine_amount`, `vip_id`) VALUES
(1, 'demo', 'john.doe@example.com', 'demo', '123 Main Street', '100.00', '50.00', 4),
(2, 'ding', 'jane.smith@example.com', 'ding', '456 Oak Avenue', '1500.00', '75.00', 2);

-- --------------------------------------------------------

--
-- Table structure for table `vip_levels`
--

DROP TABLE IF EXISTS `vip_levels`;
CREATE TABLE IF NOT EXISTS `vip_levels` (
  `vip_id` int NOT NULL,
  `level_name` varchar(20) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `rates` decimal(5,4) NOT NULL,
  PRIMARY KEY (`vip_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Dumping data for table `vip_levels`
--

INSERT INTO `vip_levels` (`vip_id`, `level_name`, `rates`) VALUES
(1, 'Bronze', '0.0070'),
(2, 'Silver', '0.0112'),
(3, 'Gold', '0.0125'),
(4, 'Platinum', '0.0300');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
