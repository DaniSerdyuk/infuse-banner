-- Adminer 4.8.1 MySQL 8.0.23 dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;

SET NAMES utf8mb4;

DROP DATABASE IF EXISTS `banner`;
CREATE DATABASE `banner` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `banner`;

DROP TABLE IF EXISTS `visitors`;
CREATE TABLE `visitors` (
  `ip_address` varchar(255) NOT NULL,
  `user_agent` varchar(255) NOT NULL,
  `view_date` datetime NOT NULL,
  `page_url` varchar(255) NOT NULL,
  `view_count` int unsigned NOT NULL DEFAULT '1',
  UNIQUE KEY `ip_address_user_agent_page_url` (`ip_address`,`user_agent`,`page_url`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;


-- 2023-03-01 15:20:21
