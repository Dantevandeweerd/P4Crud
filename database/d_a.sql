-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 04, 2024 at 08:28 AM
-- Server version: 8.2.0
-- PHP Version: 8.2.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `d&a`
--
CREATE DATABASE IF NOT EXISTS `d&a` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci;
USE `d&a`;

-- --------------------------------------------------------

--
-- Table structure for table `bookingen`
--

DROP TABLE IF EXISTS `bookingen`;
CREATE TABLE IF NOT EXISTS `bookingen` (
  `booking_id` int NOT NULL AUTO_INCREMENT,
  `user_id` int DEFAULT NULL,
  `kosten` decimal(10,2) DEFAULT NULL,
  `stoel_nummer` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`booking_id`),
  KEY `user_id` (`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

DROP TABLE IF EXISTS `reviews`;
CREATE TABLE IF NOT EXISTS `reviews` (
  `review_id` int NOT NULL AUTO_INCREMENT,
  `user_id` int DEFAULT NULL,
  `bericht` text,
  `sterren` int DEFAULT NULL,
  `onderwerp` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`review_id`),
  KEY `user_id` (`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `User_id` int NOT NULL AUTO_INCREMENT,
  `Email` varchar(255) NOT NULL,
  `Wachtwoord` varchar(255) NOT NULL,
  PRIMARY KEY (`User_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `vluchten`
--

DROP TABLE IF EXISTS `vluchten`;
CREATE TABLE IF NOT EXISTS `vluchten` (
  `vlucht_id` int NOT NULL AUTO_INCREMENT,
  `booking_id` int DEFAULT NULL,
  `vertrek_luchthaven` varchar(100) DEFAULT NULL,
  `aankomst_luchthaven` varchar(100) DEFAULT NULL,
  `vluchtnummer` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`vlucht_id`),
  KEY `booking_id` (`booking_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
