-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 30, 2024 at 08:15 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `student_info_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2024_11_29_171920_create_programmes_table', 1),
(6, '2024_11_29_175307_create_profiles_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `profiles`
--

CREATE TABLE `profiles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `profile_pic` varchar(255) NOT NULL,
  `room_number` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `profiles`
--

INSERT INTO `profiles` (`id`, `profile_pic`, `room_number`, `email`, `user_id`, `created_at`, `updated_at`) VALUES
(4, 'profiles/UfC4q1N1fZOqinATvuu5wwyXoLir93NxGdTeX3v6.jpg', '306', 'muhammadfawwazredha@graduate.utm.my', 1, '2024-11-29 10:57:28', '2024-11-29 10:57:28'),
(5, 'profiles/d7YIlojF6z0UWWnBzIkjh6m6ZgkZxTLQIqVIXT9T.jpg', '304', 'faris@gmail.com', 4, '2024-11-29 11:04:11', '2024-11-29 11:04:11'),
(6, 'profiles/pPaFDlb0goRTlFAaIbKZ8bVYFVvQJejUIptbM6te.jpg', '576', 'aliya@gmail.com', 6, '2024-11-29 21:40:16', '2024-11-29 21:40:16'),
(7, 'profiles/cg2t9g25Arnd8pTh3XEsyXXRK3OyoSOr9cnHW9l3.jpg', 'ma1 304', 'syafi@gmail.com', 9, '2024-11-30 01:24:45', '2024-11-30 01:24:45'),
(8, 'profiles/nMB3TupNyVwEDR5IfJSS6wzWSDByNpdDUbFIfHID.jpg', 'm21 234', 'nina@gmail.com', 8, '2024-11-30 01:26:15', '2024-11-30 01:26:15');

-- --------------------------------------------------------

--
-- Table structure for table `programmes`
--

CREATE TABLE `programmes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `prog_name` varchar(255) NOT NULL,
  `prog_date` varchar(255) NOT NULL,
  `prog_time` varchar(255) NOT NULL,
  `prog_place` varchar(255) NOT NULL,
  `prog_poster` varchar(255) DEFAULT NULL,
  `prog_managed_by` varchar(255) NOT NULL,
  `prog_pic_name` varchar(255) NOT NULL,
  `prog_pic_email` varchar(255) DEFAULT NULL,
  `prog_pic_tel` varchar(255) NOT NULL,
  `createdBy` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `programmes`
--

INSERT INTO `programmes` (`id`, `prog_name`, `prog_date`, `prog_time`, `prog_place`, `prog_poster`, `prog_managed_by`, `prog_pic_name`, `prog_pic_email`, `prog_pic_tel`, `createdBy`, `created_at`, `updated_at`) VALUES
(2, 'Mahabbah', '2024-12-03', '20:30', 'resak', 'posters/VIKXJqtkxum5Rl7XPVD0qP0hLXD3faPCAh3fv9Y2.jpg', 'jkm', 'fred', 'f@gmail.com', '018289344', 4, '2024-11-29 11:25:16', '2024-11-29 11:25:16'),
(3, 'heh', '2024-12-06', '20:40', 'resak', 'posters/KKyjfbGxNwYkuVP6K1lbREIrpnLQ43uOeO1axva0.jpg', 'jkm', 'fred', 'f@gmail.com', '0182896667', 4, '2024-11-29 11:35:31', '2024-11-29 11:35:31'),
(4, 'heh', '2024-12-06', '20:40', 'resak', 'posters/1iYTgTRprwA4iFR38M76pNpojxVocnikzrVpAMlO.jpg', 'jkm', 'fred', 'f@gmail.com', '0182896667', 4, '2024-11-29 11:36:30', '2024-11-29 11:36:30'),
(5, 'heh', '2024-12-06', '20:40', 'resak', 'posters/2REVDgOaF85X6eSs2d7hDNPT3lqzJXpVMXeThUmT.jpg', 'jkm', 'fred', 'f@gmail.com', '0182896667', 4, '2024-11-29 11:40:42', '2024-11-29 11:40:42'),
(6, 'heh', '2024-12-06', '20:40', 'resak', 'posters/nAaUQbOOCOSGLVUD8p8iVnRuZSND0Dvr7vJ1gESz.jpg', 'jkm', 'fred', 'f@gmail.com', '0182896667', 4, '2024-11-29 11:42:57', '2024-11-29 11:42:57'),
(7, 'gym', '2024-12-07', '20:35', 'resak', 'posters/Ciu3Gn7KVuksgGRndYc3FSkgaFsVzwzznIvN1n7F.jpg', 'jkm', 'fred', 'f@gmail.com', '0182896667', 4, '2024-11-29 21:35:40', '2024-11-29 21:35:40'),
(8, 'opera', '2025-01-03', '10:00', 'Resak', 'posters/9vQ5S2MO99srY2MduKlhJJwlv6aiwmQcrGyarmM4.jpg', 'jkm', 'Syafi', 'syafi@gmail.com', '013454524356', 8, '2024-11-30 01:27:37', '2024-11-30 01:27:37');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('0GK5D2wh325TfCYvrgwlQ7zY4YGA8xsO7h3jr1ZX', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiTzhPbWVhdEYwejFyYnRuQWlaYjM1YThmTEpZRENTdVFXODFYc1FSYyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1732957585),
('5PFKWHv5c83DcYAnTLg4ZIMk1JU21XP1zs4BG4ho', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiMzBCNFZwaTdjaFlLZEVzRGJMcTR2WlhxWVgxbUxpWjJHY3M0UE9hYyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1732993612),
('Dp31ZQbvMtPyVce49U63tyh0XbrLIem5LoFeD4Dr', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiTnFianlsQ0JLWWJxbm9xUnA0WUNGRWk0cWdzZlA4S3NZY2R5Y2lZaSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjc6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9sb2dpbiI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1732958912),
('XxuiBFXDXlNdO0xVRZ9l8hdXG4c8f65LM8qWE1JV', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiQk5hbm1EclRKSUtaUk43a2E3bEtzRWNZWUJNMkFLSGhib3doR0VCVyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjc6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9sb2dpbiI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1732973681);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `spr_nama` varchar(255) NOT NULL,
  `spr_nokp` varchar(255) NOT NULL,
  `ssm_matrik` varchar(255) NOT NULL,
  `ssm_kursus` varchar(255) NOT NULL,
  `is_profile_completed` tinyint(1) NOT NULL DEFAULT 0,
  `role` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `spr_nama`, `spr_nokp`, `ssm_matrik`, `ssm_kursus`, `is_profile_completed`, `role`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'pawah', '1', '1', '1', 1, '0', NULL, NULL, '2024-11-29 10:57:28'),
(4, 'fad', '2', '2', 'des', 1, '1', NULL, NULL, '2024-11-29 11:04:11'),
(6, 'zee', '3', '3', '3', 1, '0', NULL, NULL, '2024-11-29 21:40:16'),
(8, 'syafi', '4', '4', '4', 1, '1', NULL, NULL, '2024-11-30 01:26:15'),
(9, 'amanina', '5', '5', '5', 1, '0', NULL, NULL, '2024-11-30 01:24:45');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `profiles`
--
ALTER TABLE `profiles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `profiles_user_id_foreign` (`user_id`);

--
-- Indexes for table `programmes`
--
ALTER TABLE `programmes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `programmes_createdby_foreign` (`createdBy`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_ssm_matrik_unique` (`ssm_matrik`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `profiles`
--
ALTER TABLE `profiles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `programmes`
--
ALTER TABLE `programmes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `profiles`
--
ALTER TABLE `profiles`
  ADD CONSTRAINT `profiles_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `programmes`
--
ALTER TABLE `programmes`
  ADD CONSTRAINT `programmes_createdby_foreign` FOREIGN KEY (`createdBy`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
