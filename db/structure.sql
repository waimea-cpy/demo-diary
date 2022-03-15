-- Adminer 4.8.1 MySQL 8.0.27-0ubuntu0.21.04.1 dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

SET NAMES utf8mb4;

DROP TABLE IF EXISTS `entries`;
CREATE TABLE `entries` (
  `id` int NOT NULL AUTO_INCREMENT,
  `date` date NOT NULL,
  `notes` text COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;


-- 2022-03-15 03:05:18