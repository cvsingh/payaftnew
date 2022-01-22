-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jan 22, 2022 at 11:17 AM
-- Server version: 5.7.31
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `payaft`
--

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

DROP TABLE IF EXISTS `employees`;
CREATE TABLE IF NOT EXISTS `employees` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `usertype` varchar(191) COLLATE utf8_unicode_ci DEFAULT NULL,
  `salutation` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL,
  `name` varchar(191) COLLATE utf8_unicode_ci DEFAULT NULL,
  `designation` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `date_of_birth` date DEFAULT NULL,
  `date_coc` date DEFAULT NULL,
  `email` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '0',
  `pay_creation` varchar(1) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'N',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `employees_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`id`, `usertype`, `salutation`, `name`, `designation`, `date_of_birth`, `date_coc`, `email`, `email_verified_at`, `password`, `status`, `pay_creation`, `created_at`, `updated_at`) VALUES
(1, 'CP', 'Justice', 'Rajendra Menon', 'Chairperson', '1957-06-07', '2022-11-18', 'rm@mail.com', NULL, '$2y$10$O2R82KS2D66bbdUUmWqkhOcedUEkAjGVwEc/l1c3pgCEQfiJmWbVy', 0, 'Y', '2022-01-19 07:30:19', '2022-01-22 09:18:59'),
(2, 'User', 'Justice', 'Sunita Gupta', 'Member (A)', '1954-12-14', '2022-06-13', 'sg@mail.com', NULL, '$2y$10$3nlbuAC83qgVr/IFQc4mwu8Gt.BlmwU2axfH2kiuD9LzxYrmNuzo.', 0, 'Y', '2022-01-19 07:45:39', '2022-01-20 11:10:07'),
(3, 'User', 'Lt Gen(Retd)', 'Philip', 'Compose Member (A)', '1955-07-23', '2022-04-22', 'ph@mail.com', NULL, '$2y$10$TA56.kTpIc8/XRiF3PFlC.KjjXcw4hwlv3VOCFa8M0AWREbq26Alm', 0, 'Y', '2022-01-20 11:36:12', '2022-01-20 11:39:59'),
(4, 'PR', 'Dr.', 'Rakesh Kumar', 'Principal Registrar', '1983-03-22', '2022-01-21', 'rk@mail.com', NULL, '$2y$10$ZjG34AF1qzqqyq/aOqNJLuSYydPgM9.LTqWgEDKQNuSlLqxB.dgq6', 0, 'N', '2022-01-22 07:42:03', NULL),
(5, 'DR', 'Ms', 'Rashmi Gupta', 'Deputy Registrar', '1988-01-01', '2022-01-21', 'rg@mail.com', NULL, '$2y$10$HXyal0itQ/617Bk4Onwiz.T.KknYF8rKMYQYlUVB0FrN8TRObdjaa', 0, 'N', '2022-01-22 07:49:07', NULL),
(6, 'SO', 'Mr', 'Gouranga Chandra Behera', 'SO', '2000-01-01', '2022-01-22', 'gcb@mail.com', NULL, '$2y$10$8WThPLbgNmrvGKxuQkPRJeDI2xuryyjtixNdh71zQrFGTZjX8.Wii', 0, 'N', '2022-01-22 07:55:17', NULL),
(7, 'JR', 'Ms', 'Anchal Aggarwal', 'Joint Registrar', '1993-01-22', '2022-01-22', 'aa@mail.com', NULL, '$2y$10$xVMhIaXVdVbS2a2eK4iyXeikt3Jn90cYFmgk.dYlGr3M5kMSlkCBm', 0, 'N', '2022-01-22 08:00:06', NULL),
(8, 'tsk', 'Mr', 'Chander Dutt Chahal', 'Asstt', '1960-12-12', '2022-01-22', 'cdc@mail.com', NULL, '$2y$10$ZjG34AF1qzqqyq/aOqNJLuSYydPgM9.LTqWgEDKQNuSlLqxB.dgq6', 0, 'N', '2022-01-22 09:21:46', NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
