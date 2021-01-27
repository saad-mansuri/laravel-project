-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 15, 2020 at 08:00 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `wpnumber` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `budget` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `uname`, `email`, `phone`, `wpnumber`, `budget`, `description`, `created_at`, `updated_at`) VALUES
(1, 'saad', 'saadmansuri249@gmail.com', '6353121872', '6352148797', '$1000 - $5000', 'vgbhkn', '2020-11-22 04:23:13', '2020-11-22 04:23:13'),
(2, 'saad', 'saadmansuri249@gmail.com', '9090909090', '4878678', '$1000 - $5000', 'fvasd', '2020-11-22 04:24:26', '2020-11-22 04:24:26'),
(3, 'saad', 'saadmansuri249@gmail.com', '9090909090', '4878678', '$1000 - $5000', 'fvasd', '2020-11-22 04:24:49', '2020-11-22 04:24:49'),
(4, 'saad', 'saadmansuri249@gmail.com', '6353121872', '6352148797', '$10000 - $20000', 'vubhnj', '2020-11-22 04:25:42', '2020-11-22 04:25:42'),
(5, 'saad', 'saadmansuri249@gmail.com', '6353121872', '6352148797', 'Less then $1000', 'vbhinj', '2020-11-22 04:26:09', '2020-11-22 04:26:09'),
(6, 'saad', 'saadmansuri249@gmail.com', '6353121872', '6352148797', '$1000 - $5000', 'vubhnjl', '2020-11-22 04:28:16', '2020-11-22 04:28:16'),
(7, 'saad', 'saadmansuri249@gmail.com', '6353121872', '6352148797', '$5000 - $10000', 'cfyvigbhn', '2020-11-22 04:28:46', '2020-11-22 04:28:46'),
(8, 'saad', 'xyz@gmail.com', '6353121872', '23', 'Less then $1000', 'n', '2020-11-22 04:29:26', '2020-11-22 04:29:26'),
(9, 'henil', 'saadmansuri249@gmail.com', '6353121872', '6352148797', 'Less then $1000', 'hjnlkm', '2020-11-22 04:39:32', '2020-11-22 04:39:32'),
(10, 'saad', 'xyz@gmail.com', '54654654', '6352148797', '$1000 - $5000', 'vvubihnj', '2020-11-22 04:40:05', '2020-11-22 04:40:05'),
(11, 'henil', 'saadmansuri249@gmail.com', '9090909090', '4878678', 'Less then $1000', 'hkjl', '2020-11-22 04:40:28', '2020-11-22 04:40:28'),
(12, 'henil', 'saadmansuri249@gmail.com', '6353121872', '6352148797', '$1000 - $5000', 'bh', '2020-11-22 05:53:05', '2020-11-22 05:53:05'),
(13, 'saad', 'saadmansuri249@gmail.com', '6353121872', '6352148797', '$1000 - $5000', 'vubhin', '2020-11-22 05:56:43', '2020-11-22 05:56:43'),
(14, 'henil', 'rocksalman249@gmail.com', '6353121872', '6352148797', 'Less then $1000', 'yvgibhn', '2020-11-22 05:58:11', '2020-11-22 05:58:11'),
(15, 'saad', 'tirth886@gmail.com', '6353121872', '6352148797', '$1000 - $5000', 'bhnkj', '2020-11-22 06:00:13', '2020-11-22 06:00:13'),
(16, 'henil', 'tirth886@gmail.com', '6353121872', '6352148797', 'Less then $1000', 'cyvgbhnj', '2020-11-22 06:07:24', '2020-11-22 06:07:24'),
(17, 'saad', 'saadmansuri249@gmail.com', '6353121872', '6352148797', 'Less then $1000', 'bhkn', '2020-11-22 06:15:07', '2020-11-22 06:15:07'),
(18, 'saad', 'saadmansuri249@gmail.com', '6353121872', '6352148797', 'Less then $1000', 'bhkn', '2020-11-22 06:16:49', '2020-11-22 06:16:49'),
(19, 'saad', 'saadmansuri249@gmail.com', '6353121872', '6352148797', 'Less then $1000', 'bhkn', '2020-11-22 06:18:03', '2020-11-22 06:18:03'),
(20, 'saad', 'saadmansuri249@gmail.com', '6353121872', '6352148797', 'Less then $1000', 'bhkn', '2020-11-22 06:18:14', '2020-11-22 06:18:14'),
(21, 'henil', 'saadmansuri249@gmail.com', '6353121872', '6352148797', '$1000 - $5000', 'bhnkj', '2020-11-22 06:18:27', '2020-11-22 06:18:27'),
(22, 'saad', 'saadmansuri249@gmail.com', '9090909090', '6352148797', '$1000 - $5000', 'jk', '2020-11-22 06:19:58', '2020-11-22 06:19:58'),
(23, 'saad', 'saadmansuri249@gmail.com', '6353121872', '6352148797', '$1000 - $5000', 'vubhnij', '2020-11-22 06:21:36', '2020-11-22 06:21:36');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `iosuserdata`
--

CREATE TABLE `iosuserdata` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `wpnumber` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `budget` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `iosuserdata`
--

INSERT INTO `iosuserdata` (`id`, `uname`, `email`, `phone`, `wpnumber`, `budget`, `description`, `created_at`, `updated_at`) VALUES
(1, 'saadmansuri', 'saadmansuri249@gmail.com', '63531218', '4878678', '$5000 - $10000', 'tivubhn', '2020-11-20 12:53:46', '2020-11-20 12:53:46'),
(2, 'saadmansuri', 'saadmansuri249@gmail.com', '635312187', '4878678', '$10000 - $20000', '5rcvyibuhnij', '2020-11-20 13:06:21', '2020-11-20 13:06:21'),
(3, 'saadmansuri', 'saadmansuri249@gmail.com', '6353121872', '4878678', '56000', 'cufvgbh', '2020-11-21 01:16:00', '2020-11-21 01:16:00'),
(4, 'saadmansuri', 'saadmansuri249@gmail.com', '6353121872', '6352148797', '84000', 'i want this kind of project', '2020-11-21 03:44:37', '2020-11-21 03:44:37');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(15, '2014_10_12_000000_create_users_table', 1),
(16, '2014_10_12_100000_create_password_resets_table', 1),
(17, '2019_08_19_000000_create_failed_jobs_table', 1),
(18, '2020_11_20_134851_webuserdata', 1),
(19, '2020_11_20_164555_mobuserdata', 1),
(20, '2020_11_20_173925_iosuserdata', 2),
(21, '2020_11_20_183110_windowuserdata', 3),
(22, '2020_11_20_184532_windowuserdata', 4),
(23, '2020_11_22_073756_create_contacts_table', 5);

-- --------------------------------------------------------

--
-- Table structure for table `mobuserdata`
--

CREATE TABLE `mobuserdata` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `wpnumber` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `budget` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `mobuserdata`
--

INSERT INTO `mobuserdata` (`id`, `uname`, `email`, `phone`, `wpnumber`, `budget`, `description`, `created_at`, `updated_at`) VALUES
(1, 'mayurgohil', 'tirth886@gmail.com', '54654654', '4878678', '$10000 - $20000', 'sdcx', '2020-11-20 11:42:19', '2020-11-20 11:42:19'),
(2, 'mayurgohillllllllll', 'xyz@gmail.com', '998856457', '635312187', '$1000 - $5000', 'svcxz', '2020-11-20 11:43:58', '2020-11-20 11:43:58'),
(3, 'parthparma', 'tirth886@gmail.com', '635312187', '635214879', 'Less then $1000', 'arzstxrdcfvhgbjnk', '2020-11-20 11:46:38', '2020-11-20 11:46:38'),
(4, 'parthparma', 'tirth886@gmail.com', '635312187', '635214879', 'Less then $1000', 'arzstxrdcfvhgbjnk', '2020-11-20 11:47:27', '2020-11-20 11:47:27'),
(5, 'rocksalman', 'tirth886@gmail.com', '909090909', '6352148', '$5000 - $10000', 'wfsvadcs', '2020-11-20 11:49:02', '2020-11-20 11:49:02'),
(6, 'mayurgohil', 'tirth886@gmail.com', '635312187', '635214879', 'Less then $1000', 'sfvadc', '2020-11-20 11:55:46', '2020-11-20 11:55:46'),
(7, 'saadmansuri', 'tirth886@gmail.com', '909090909', '4878678', '$10000 - $20000', 'bafvd', '2020-11-20 11:56:32', '2020-11-20 11:56:32'),
(8, 'saadmansuri', 'saadmansuri249@gmail.com', '635312187', '4878678', '$5000 - $10000', 'yvgibuh', '2020-11-20 12:36:38', '2020-11-20 12:36:38'),
(9, 'saadmansuri', 'saadmansuri249@gmail.com', '6353121872', '6352148797', '56000', 'i want this kind of project.', '2020-11-21 01:11:21', '2020-11-21 01:11:21'),
(10, 'mayurgohil', 'xyz@gmail.com', '6353121872', '6352148797', '84000', 'vgbhdlkn', '2020-11-21 01:12:19', '2020-11-21 01:12:19'),
(11, 'parthparma', 'saadmansuri249@gmail.com', '6353121872', '6352148797', '252000', 'cryvubh', '2020-11-21 01:23:38', '2020-11-21 01:23:38'),
(12, 'saadmansuri', 'saadmansuri249@gmail.com', '6353121872', '6352148797', '280000', 'cvygbhj', '2020-11-21 01:47:39', '2020-11-21 01:47:39'),
(13, 'saadmansuri', 'tirth@gmail.com', '6353121872', '6352148797', '28000', 'yvgbhnj', '2020-11-21 03:26:14', '2020-11-21 03:26:14'),
(14, 'mayurgohil', 'saadmansuri249@gmail.com', '6353121872', '6352148797', '84000', 'bhinjl', '2020-11-22 13:04:36', '2020-11-22 13:04:36'),
(15, 'saadmansuri', 'saadmansuri249@gmail.com', '6353121872', '6352148797', '112000', 'fyvgbhnkm', '2020-12-01 01:20:31', '2020-12-01 01:20:31'),
(16, 'parthparma', 'pp4373225@gmail.com', '6353121872', '6352148797', '84000', 'rvgbuhnj', '2020-12-01 01:21:29', '2020-12-01 01:21:29'),
(17, 'saadmansuri', 'saadmansuri249@gmail.com', '6353121872', '6352148797', '168000', 'i want  to make ecommerce app', '2020-12-01 01:40:08', '2020-12-01 01:40:08');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `webuserdata`
--

CREATE TABLE `webuserdata` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `wpnumber` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `budget` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `webuserdata`
--

INSERT INTO `webuserdata` (`id`, `uname`, `email`, `phone`, `wpnumber`, `budget`, `description`, `created_at`, `updated_at`) VALUES
(1, 'saadmansuri', 'tirth886@gmail.com', '54654654', '4878678', '$5000 - $10000', 'sfvasdc', '2020-11-20 11:38:49', '2020-11-20 11:38:49'),
(2, 'henil', 'tirth@gmail.com', '54654654', '4878678', '$1000 - $5000', 'vigbhlnjm;k', '2020-11-20 11:45:31', '2020-11-20 11:45:31'),
(3, 'saadmansuri', 'saadmansuri249@gmail.com', '909090909', '4878678', '$10000 - $20000', 'svcx', '2020-11-20 11:49:42', '2020-11-20 11:49:42'),
(4, 'mayurgohil', 'tirth886@gmail.com', '909090909', '4878678', '$1000 - $5000', 'asd', '2020-11-20 11:52:18', '2020-11-20 11:52:18'),
(5, 'henil', 'saadmansuri249@gmail.com', '54654654', '635214879', 'Less then $1000', 'sac', '2020-11-20 11:52:46', '2020-11-20 11:52:46'),
(6, 'mayurgohil', 'saadmansuri249@gmail.com', '635312187', '4878678', '$5000 - $10000', 'vfasd', '2020-11-20 11:53:21', '2020-11-20 11:53:21'),
(7, 'rocksalman', 'xyz@gmail.com', '635312187', '635214879', '$1000 - $5000', 'vasd', '2020-11-20 11:55:03', '2020-11-20 11:55:03'),
(8, 'mayurgohil', 'tirth886@gmail.com', '9090909090', '6352148797', '56000', 'adsasdf', '2020-11-21 00:57:17', '2020-11-21 00:57:17'),
(9, 'mayurgohil', 'tirth886@gmail.com', '6353121872', '6352148797', '140000', 'cyvgbh', '2020-11-21 00:58:57', '2020-11-21 00:58:57'),
(10, 'henil', 'tirth886@gmail.com', '6353121872', '6352148797', '280000', 'cyvhb', '2020-11-21 01:37:04', '2020-11-21 01:37:04'),
(11, 'mayurgohil', 'saadmansuri249@gmail.com', '6353121872', '6352148797', '56000', 'vgbh', '2020-11-21 03:24:00', '2020-11-21 03:24:00'),
(12, 'saadmansuri', 'saadmansuri249@gmail.com', '6353121872', '6352148797', '28000', 'bhinj', '2020-11-21 03:24:43', '2020-11-21 03:24:43'),
(13, 'henil', 'tirth886@gmail.com', '6353121872', '6352148797', '56000', 'tvbinomk', '2020-11-21 03:25:10', '2020-11-21 03:25:10'),
(14, 'mayurgohil', 'saadmansuri249@gmail.com', '6353121872', '6352148797', '280000', 'i want ecommerce website', '2020-11-22 10:48:48', '2020-11-22 10:48:48'),
(15, 'henil', 'rocksalman249@gmail.com', '6353121872', '6352148797', '84000', 'vgkbhnkjml', '2020-11-22 11:05:03', '2020-11-22 11:05:03'),
(16, 'saadmansuri', 'saadmansuri249@gmail.com', '6353121872', '6352148797', '84000', 'etucyv', '2020-11-22 12:30:35', '2020-11-22 12:30:35'),
(17, 'saadmansuri', 'saadmansuri249@gmail.com', '6353121872', '6352148797', '84000', 'etucyv', '2020-11-22 12:30:54', '2020-11-22 12:30:54'),
(18, 'saadmansuri', 'saadmansuri249@gmail.com', '6353121872', '6352148797', '84000', 'etucyv', '2020-11-22 12:31:14', '2020-11-22 12:31:14'),
(19, 'saadmansuri', 'saadmansuri249@gmail.com', '6353121872', '6352148797', '84000', 'etucyv', '2020-11-22 12:32:10', '2020-11-22 12:32:10'),
(20, 'saadmansuri', 'saadmansuri249@gmail.com', '6353121872', '6352148797', '84000', 'etucyv', '2020-11-22 12:32:25', '2020-11-22 12:32:25'),
(21, 'saadmansuri', 'saadmansuri249@gmail.com', '6353121872', '6352148797', '112000', 'bsfda', '2020-11-22 12:34:02', '2020-11-22 12:34:02'),
(22, 'saadmansuri', 'tirth886@gmail.com', '6353121872', '6352148797', '84000', 'sdfvdc', '2020-11-22 12:36:19', '2020-11-22 12:36:19'),
(23, 'saadmansuri', 'tirth886@gmail.com', '6353121872', '6352148797', '84000', 'sdfvdc', '2020-11-22 12:38:33', '2020-11-22 12:38:33'),
(24, 'mayurgohil', 'saadmansuri249@gmail.com', '9090909090', '4878678', '112000', 'cyvgbhj', '2020-11-22 12:40:02', '2020-11-22 12:40:02'),
(25, 'mayurgohil', 'rocksalman249@gmail.com', '9090909090', '4878678', '84000', 'ucyvgub', '2020-11-22 12:43:02', '2020-11-22 12:43:02'),
(26, 'mayurgohil', 'tirth886@gmail.com', '6353121872', '6352148797', '112000', 'edtrufyvgbuh', '2020-11-22 12:44:20', '2020-11-22 12:44:20'),
(27, 'mayurgohil', 'tirth886@gmail.com', '6353121872', '6352148797', '112000', 'edtrufyvgbuh', '2020-11-22 12:44:25', '2020-11-22 12:44:25'),
(28, 'saadmansuri', 'saadmansuri249@gmail.com', '6353121872', '6352148797', '140000', 'utcyvgb', '2020-11-22 12:51:06', '2020-11-22 12:51:06'),
(29, 'Anas Mansuri', 'anasmansuri633@gmail.com', '6353121872', '6352148797', '168000', 'vuobn', '2020-11-22 12:53:17', '2020-11-22 12:53:17'),
(30, 'saadmansuri', 'saadmansuri249@gmail.com', '6353121872', '6352148797', '56000', 'vubhn', '2020-11-22 12:55:30', '2020-11-22 12:55:30'),
(31, 'saadmansuri', 'saadmansuri249@gmail.com', '6353121872', '6352148797', '252000', 'hkjn', '2020-11-22 12:57:39', '2020-11-22 12:57:39'),
(32, 'saadmansuri', 'saadmansuri249@gmail.com', '6353121872', '6352148797', '252000', 'vbhnj', '2020-11-22 13:01:27', '2020-11-22 13:01:27'),
(33, 'saadmansuri', 'saadmansuri249@gmail.com', '6353121872', '6352148797', '252000', 'vbhnj', '2020-11-22 13:01:40', '2020-11-22 13:01:40'),
(34, 'saadmansuri', 'saadmansuri249@gmail.com', '6353121872', '6352148797', '252000', 'cyvubh', '2020-11-23 00:55:33', '2020-11-23 00:55:33'),
(35, 'saadmansuri', 'saadmansuri249@gmail.com', '6353121872', '6352148797', '252000', 'cyvubh', '2020-11-23 00:55:44', '2020-11-23 00:55:44'),
(36, 'saadmansuri', 'saadmansuri249@gmail.com', '6353121872', '6352148797', '112000', 'cvyg', '2020-11-23 01:02:51', '2020-11-23 01:02:51'),
(37, 'saadmansuri', 'saadmansuri249@gmail.com', '6353121872', '6352148797', '196000', 't7vybinomk,', '2020-12-01 00:49:26', '2020-12-01 00:49:26');

-- --------------------------------------------------------

--
-- Table structure for table `windowuserdata`
--

CREATE TABLE `windowuserdata` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `wpnumber` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `budget` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `windowuserdata`
--

INSERT INTO `windowuserdata` (`id`, `uname`, `email`, `phone`, `wpnumber`, `budget`, `description`, `created_at`, `updated_at`) VALUES
(1, 'mayurgohil', 'tirth886@gmail.com', '635312187', '4878678', '$1000 - $5000', 'gbhnj', '2020-11-20 13:21:12', '2020-11-20 13:21:12'),
(2, 'mayurgohil', 'tirth886@gmail.com', '909090909', '635214879', '$10000 - $20000', 'vguobhinjmk', '2020-11-20 13:23:00', '2020-11-20 13:23:00'),
(3, 'mayurgohil', 'tirth886@gmail.com', '54654654', '635214879', '$10000 - $20000', 'hkjl', '2020-11-20 13:23:45', '2020-11-20 13:23:45'),
(4, 'mayurgohil', 'tirth886@gmail.com', '90909090', '4878678', '$10000 - $20000', 'hbjnlkm', '2020-11-20 13:26:20', '2020-11-20 13:26:20'),
(5, 'saadmansuriiiii', 'saadmansuri249@gmail.com', '635312187', '4878678', '$5000 - $10000', 'bhknjlm', '2020-11-20 13:28:28', '2020-11-20 13:28:28'),
(6, 'saadmansuri', 'saadmansuri249@gmail.com', '635312187', '635214879', '$5000 - $10000', 'sasa', '2020-11-20 13:47:02', '2020-11-20 13:47:02'),
(7, 'saadmansuri', 'saadmansuri249@gmail.com', '6353121872', '487867886', '140000', 'binj', '2020-11-21 01:19:03', '2020-11-21 01:19:03'),
(8, 'mayurgohil', 'saadmansuri249@gmail.com', '9090909090', '6352148797', '196000', 'vtubinj', '2020-11-22 13:15:47', '2020-11-22 13:15:47');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `iosuserdata`
--
ALTER TABLE `iosuserdata`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mobuserdata`
--
ALTER TABLE `mobuserdata`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `webuserdata`
--
ALTER TABLE `webuserdata`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `windowuserdata`
--
ALTER TABLE `windowuserdata`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `iosuserdata`
--
ALTER TABLE `iosuserdata`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `mobuserdata`
--
ALTER TABLE `mobuserdata`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `webuserdata`
--
ALTER TABLE `webuserdata`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `windowuserdata`
--
ALTER TABLE `windowuserdata`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
