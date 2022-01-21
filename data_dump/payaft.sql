-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jan 20, 2022 at 02:00 PM
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
-- Table structure for table `admins`
--

DROP TABLE IF EXISTS `admins`;
CREATE TABLE IF NOT EXISTS `admins` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_team_id` bigint(20) UNSIGNED DEFAULT NULL,
  `profile_photo_path` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `admins_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `current_team_id`, `profile_photo_path`, `created_at`, `updated_at`) VALUES
(2, 'Admin', 'aftdelhi@gmail.com', '2022-01-12 01:08:09', '$2y$10$HuZITSNOCdvQvCWv3yhB1ucCUXNEqLVUuxaNmBbFUlvqapeEaQB1e', NULL, NULL, NULL, '2022-01-12 01:08:09', '2022-01-12 01:08:09'),
(3, 'cvsingh', 'cvsingh@rediffmail.com', NULL, '$2y$10$fLsYRJn4MrIj5Wnxk8AdueWCn5TY5NuLUp2ISFNr3VshbIHYPghqC', NULL, NULL, NULL, '2022-01-13 01:57:53', NULL);

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
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`id`, `usertype`, `salutation`, `name`, `designation`, `date_of_birth`, `date_coc`, `email`, `email_verified_at`, `password`, `status`, `pay_creation`, `created_at`, `updated_at`) VALUES
(1, 'CP', 'Justice', 'Rajendra Menon', 'Chairperson', '1957-06-07', '2022-11-05', 'cp@mail.com', NULL, '$2y$10$HuZITSNOCdvQvCWv3yhB1ucCUXNEqLVUuxaNmBbFUlvqapeEaQB1e', 0, 'Y', '2022-01-19 07:30:19', NULL),
(2, 'User', 'Justice', 'Sunita Gupta', 'Member (A)', '1954-12-14', '2022-06-13', 'sg@mail.com', NULL, '$2y$10$3nlbuAC83qgVr/IFQc4mwu8Gt.BlmwU2axfH2kiuD9LzxYrmNuzo.', 0, 'Y', '2022-01-19 07:45:39', '2022-01-20 11:10:07'),
(3, 'User', 'Lt Gen(Retd)', 'Philip', 'Compose Member (A)', '1955-07-23', '2022-04-22', 'ph@mail.com', NULL, '$2y$10$TA56.kTpIc8/XRiF3PFlC.KjjXcw4hwlv3VOCFa8M0AWREbq26Alm', 0, 'Y', '2022-01-20 11:36:12', '2022-01-20 11:39:59');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `uuid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `files_details`
--

DROP TABLE IF EXISTS `files_details`;
CREATE TABLE IF NOT EXISTS `files_details` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `file_no` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `section` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `files_details_file_no_unique` (`file_no`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `files_details`
--

INSERT INTO `files_details` (`id`, `file_no`, `subject`, `section`, `created_at`, `updated_at`) VALUES
(5, 'AFT/2', 'Establishment', 'Admin-2', NULL, NULL),
(6, 'AFT/3', 'Transfers', 'Admin-1', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `letters`
--

DROP TABLE IF EXISTS `letters`;
CREATE TABLE IF NOT EXISTS `letters` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `file_id` int(11) NOT NULL,
  `file_subject` text COLLATE utf8mb4_unicode_ci,
  `file_no` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type_document` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `letter_no` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `letter_date` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `letter_subject` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tsk_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tsk_date` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `so_id` int(11) DEFAULT NULL,
  `so_date` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ar_id` int(11) DEFAULT NULL,
  `ar_date` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dr_id` int(11) DEFAULT NULL,
  `dr_date` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jr_id` int(11) DEFAULT NULL,
  `jr_date` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pr_id` int(11) DEFAULT NULL,
  `pr_date` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` text COLLATE utf8mb4_unicode_ci,
  `disposal` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT 'Open',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `letters`
--

INSERT INTO `letters` (`id`, `file_id`, `file_subject`, `file_no`, `type_document`, `letter_no`, `letter_date`, `letter_subject`, `tsk_id`, `tsk_date`, `so_id`, `so_date`, `ar_id`, `ar_date`, `dr_id`, `dr_date`, `jr_id`, `jr_date`, `pr_id`, `pr_date`, `status`, `disposal`, `created_at`, `updated_at`) VALUES
(1, 4, 'Local Purchase', 'AFT/1', 'letter', 'Letter/1', '2022-01-17', 'Transfer', '5', '2022-01-18 14:31:05', 6, '2022-01-18 19:25:11', 7, '2022-01-18 19:26:21', 8, NULL, NULL, NULL, NULL, NULL, 'Letter Submitted by tsk tsk on - 2022-01-18 14:31:05 | Letter Submitted by so SO on - 2022-01-18 19:25:11 | Letter Submitted by AR AR on - 2022-01-18 19:26:21', 'Open', NULL, '2022-01-18 13:56:21'),
(2, 5, 'Establishment', 'AFT/2', 'letter', 'Letter/2', '2022-01-18', 'Try Purchase', '5', '2022-01-18 19:24:23', 6, '2022-01-18 19:25:32', 9999, '2022-01-18 19:25:32', 8, '2022-01-18 19:27:44', 9, '2022-01-18 19:28:29', 9999, NULL, 'Letter Submitted by tsk tsk on - 2022-01-18 19:24:23 | Letter Submitted by so SO on - 2022-01-18 19:25:32 | Letter Submitted by DR DR on - 2022-01-18 19:27:44 | Letter Submitted by JR JR on - 2022-01-18 19:28:29', 'Closed', NULL, '2022-01-18 13:58:29'),
(3, 6, 'Transfers', 'AFT/3', 'letter', 'Letter/3', '2022-01-18', 'Computer Resources', '5', '2022-01-18 14:31:28', 6, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Letter Submitted by tsk tsk on - 2022-01-18 14:31:28', 'Open', NULL, '2022-01-18 09:01:28');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(7, '2014_10_12_000000_create_users_table', 2),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2022_01_04_113055_create_sessions_table', 1),
(8, '2022_01_10_061214_create_files_details_table', 3),
(10, '2022_01_10_095411_create_letters_table', 4),
(11, '2022_01_11_081605_create_admins_table', 5),
(12, '2022_01_15_033817_create_employees_table', 6),
(13, '2022_01_19_145022_create_paymasters_table', 7);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `paymasters`
--

DROP TABLE IF EXISTS `paymasters`;
CREATE TABLE IF NOT EXISTS `paymasters` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `employee_id` int(11) NOT NULL,
  `basic_pay` int(11) NOT NULL,
  `da_flag` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `hospitaliy_allowance` int(11) DEFAULT NULL,
  `hra` int(11) DEFAULT NULL,
  `tpt` int(11) DEFAULT NULL,
  `orderly_allowance` int(11) DEFAULT NULL,
  `employer_contribution_epf` int(11) DEFAULT NULL,
  `cashier_allowance_flag` varchar(191) COLLATE utf8_unicode_ci DEFAULT NULL,
  `medical_allowance_flag` varchar(191) COLLATE utf8_unicode_ci DEFAULT NULL,
  `arrears` int(11) DEFAULT NULL,
  `pension` int(11) DEFAULT NULL,
  `da_pension` int(11) DEFAULT NULL,
  `eol` int(11) DEFAULT NULL,
  `gpf` int(11) DEFAULT NULL,
  `cghs` int(11) DEFAULT NULL,
  `cgeis` int(11) DEFAULT NULL,
  `employee_contribution_epf` int(11) DEFAULT NULL,
  `insurance` int(11) DEFAULT NULL,
  `incometax` int(11) DEFAULT NULL,
  `cess` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `employee_id` (`employee_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `paymasters`
--

INSERT INTO `paymasters` (`id`, `employee_id`, `basic_pay`, `da_flag`, `hospitaliy_allowance`, `hra`, `tpt`, `orderly_allowance`, `employer_contribution_epf`, `cashier_allowance_flag`, `medical_allowance_flag`, `arrears`, `pension`, `da_pension`, `eol`, `gpf`, `cghs`, `cgeis`, `employee_contribution_epf`, `insurance`, `incometax`, `cess`, `created_at`, `updated_at`) VALUES
(1, 1, 250000, 'S', 34000, 0, 0, NULL, 0, '0', NULL, 0, 125000, NULL, 0, 0, NULL, 0, 0, NULL, 40000, 0, NULL, NULL),
(2, 2, 225000, 'C', 0, 54000, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 30000, NULL, NULL, NULL),
(4, 3, 159677, 'C', 0, 38323, 0, NULL, 0, '0', NULL, 0, 112500, NULL, 825, 0, NULL, 0, 0, NULL, 40000, 1600, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

DROP TABLE IF EXISTS `personal_access_tokens`;
CREATE TABLE IF NOT EXISTS `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

DROP TABLE IF EXISTS `sessions`;
CREATE TABLE IF NOT EXISTS `sessions` (
  `id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `payload` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `sessions_user_id_index` (`user_id`),
  KEY `sessions_last_activity_index` (`last_activity`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('nuIwNlP0KxBi77syMidBQJUCLw48RONGKw7WwbJ9', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/97.0.4692.99 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiVDhBOUdzaEloRG1oaW1Wdnh1aGltZEJROWlUTXA0WDltTUt3VkZ6ayI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mzk6Imh0dHA6Ly9sb2NhbGhvc3Q6ODAwMC9lbXBsb3llZS9yZWdpc3RlciI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1642677668),
('MOArVPCiLbDNE1f25MyIZgHIPD4KGZ9d3crfPj2o', NULL, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/97.0.4692.99 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiM0tNNGJHSlRld0w0ODc3Q3VwWDRVVmpnUWtUWEt4Z1UxNGdiaUpoOCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NTM6Imh0dHA6Ly9sb2NhbGhvc3QvbGFydmVsOC9wYXlhZnQvcGF5YWZ0L3B1YmxpYy9wYXkvYWRkIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo1MjoibG9naW5fYWRtaW5fNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToyO30=', 1642678809);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `usertype` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_team_id` bigint(20) UNSIGNED DEFAULT NULL,
  `profile_photo_path` varchar(2048) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=28 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `usertype`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `current_team_id`, `profile_photo_path`, `created_at`, `updated_at`) VALUES
(27, 'Admin', 'CV Singh', 'cvsingh9888@gmail.com', NULL, '$2y$10$ii5jWNqUxxlHA.WCt7w31ereJ8a57qFYRnPSuIvcx9v1Hmmor/dEK', NULL, NULL, NULL, '2022-01-14 01:57:50', '2022-01-14 01:57:50');

-- --------------------------------------------------------

--
-- Table structure for table `users_o`
--

DROP TABLE IF EXISTS `users_o`;
CREATE TABLE IF NOT EXISTS `users_o` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_team_id` bigint(20) UNSIGNED DEFAULT NULL,
  `profile_photo_path` varchar(2048) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users_o`
--

INSERT INTO `users_o` (`id`, `name`, `email`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `remember_token`, `current_team_id`, `profile_photo_path`, `created_at`, `updated_at`) VALUES
(1, 'AFT Delhi', 'aftdelhi@gmail.com', NULL, '$2y$10$AsvTLaWdBKwhz01p727Rge4UVnXcBO92B/yTYLQFA/NvrZnfF6D4i', NULL, NULL, NULL, NULL, NULL, '2022-01-04 23:52:40', '2022-01-04 23:52:40');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
