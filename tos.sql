-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 19, 2019 at 06:30 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tos`
--

-- --------------------------------------------------------

--
-- Table structure for table `activeguets`
--

CREATE TABLE `activeguets` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `active_guests`
--

CREATE TABLE `active_guests` (
  `id` int(10) UNSIGNED NOT NULL,
  `session_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ip` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `active_guests`
--

INSERT INTO `active_guests` (`id`, `session_id`, `ip`, `created_at`, `updated_at`) VALUES
(1, 'atuk82umm6mm9qtpbo629eqqn4', '127.0.0.1', '2018-12-06 05:14:03', '2018-12-06 05:14:03'),
(2, 'gj3pose99alnpmgm2b0d0rk9tr', '127.0.0.1', '2018-12-08 09:47:15', '2018-12-08 09:47:15'),
(3, 'cht54hcsal3b9m18qul2n8elcb', '127.0.0.1', '2018-12-09 05:13:39', '2018-12-09 05:13:39'),
(4, 'sf7gae40b26derb2mtlgojseik', '127.0.0.1', '2018-12-09 06:37:00', '2018-12-09 06:37:00'),
(5, '3hc3u5p6pc049tql7l5vddbpou', '127.0.0.1', '2018-12-10 05:41:48', '2018-12-10 05:41:48'),
(6, '6ldljkfutbtol93sgt9esj44s8', '127.0.0.1', '2018-12-11 09:32:56', '2018-12-11 09:32:56'),
(7, 'a80lc7sa3ctal7ffs3b2rf9h8r', '127.0.0.1', '2018-12-12 05:27:02', '2018-12-12 05:27:02'),
(8, 'l4e4n4ksagastr6e2sdh6cchjg', '127.0.0.1', '2018-12-13 05:52:15', '2018-12-13 05:52:15'),
(9, '2ul14c53duslre61di7ugvtipq', '127.0.0.1', '2018-12-15 05:24:06', '2018-12-15 05:24:06'),
(10, '1iuckpo6ta34g7q0ad2cg3t71r', '127.0.0.1', '2018-12-17 05:25:18', '2018-12-17 05:25:18'),
(11, 'er99mues9imi9nlifb16ra9l84', '127.0.0.1', '2018-12-19 05:54:17', '2018-12-19 05:54:17'),
(12, '3t49ktggmqcq58em2qkrmqi9d0', '127.0.0.1', '2018-12-22 10:22:24', '2018-12-22 10:22:24'),
(13, '4msemmqt4m1536it24dukeg3sv', '127.0.0.1', '2018-12-23 11:39:11', '2018-12-23 11:39:11'),
(14, 'chd45fgivoki310k9gv9guehtb', '127.0.0.1', '2018-12-24 05:31:20', '2018-12-24 05:31:20'),
(15, 'gs4aq4rflfgpu93qgut562eoib', '127.0.0.1', '2018-12-29 14:17:28', '2018-12-29 14:17:28'),
(16, 's025fgc6kfpasa04lbf9tnt6nf', '127.0.0.1', '2019-02-12 18:55:50', '2019-02-12 18:55:50'),
(17, '416l51emalvkvc3nma4181l6ng', '127.0.0.1', '2019-02-12 18:55:52', '2019-02-12 18:55:52'),
(18, 'cm6p8drre3v351nhg9s9avtl2r', '127.0.0.1', '2019-02-14 16:33:59', '2019-02-14 16:33:59');

-- --------------------------------------------------------

--
-- Table structure for table `active_users`
--

CREATE TABLE `active_users` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `active_users`
--

INSERT INTO `active_users` (`id`, `user_id`, `created_at`, `updated_at`) VALUES
(55, 9, '2018-12-02 11:00:11', '2018-12-02 11:00:11'),
(56, 38, '2018-12-11 11:48:45', '2018-12-11 11:48:45'),
(57, 2, '2018-12-13 06:08:01', '2018-12-13 06:08:01');

-- --------------------------------------------------------

--
-- Table structure for table `date_times`
--

CREATE TABLE `date_times` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `last_activity` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `date_times`
--

INSERT INTO `date_times` (`id`, `user_id`, `last_activity`, `created_at`, `updated_at`) VALUES
(4, 2, '2019-02-14 16:45:55', '2018-12-05 08:00:01', '2018-12-05 08:00:01'),
(5, 30, '2018-12-10 11:30:53', '2018-12-05 08:00:09', '2018-12-05 08:00:09'),
(6, 9, '2018-12-10 11:12:43', '2018-12-05 08:06:17', '2018-12-05 08:06:17'),
(7, 3, '2018-12-05 09:38:34', '2018-12-05 08:07:10', '2018-12-05 08:07:10'),
(8, 27, '2018-12-08 18:00:00', NULL, NULL),
(14, 35, '2018-12-26 11:28:45', '2018-12-10 11:27:45', '2018-12-10 11:27:45'),
(15, 36, '2018-12-10 11:30:35', '2018-12-10 11:29:30', '2018-12-10 11:29:30'),
(16, 37, '2018-12-11 11:26:19', '2018-12-11 11:23:59', '2018-12-11 11:23:59'),
(17, 38, '2018-12-12 06:18:36', '2018-12-11 11:35:12', '2018-12-11 11:35:12'),
(18, 39, '2018-12-12 06:59:39', '2018-12-12 06:58:32', '2018-12-12 06:58:32'),
(19, 42, '2018-12-12 08:11:54', '2018-12-12 08:11:54', '2018-12-12 08:11:54'),
(20, 46, '2018-12-12 08:27:57', '2018-12-12 08:26:13', '2018-12-12 08:26:13'),
(21, 49, '2018-12-12 08:34:10', '2018-12-12 08:34:10', '2018-12-12 08:34:10'),
(22, 50, '2018-12-12 08:41:01', '2018-12-12 08:38:02', '2018-12-12 08:38:02'),
(23, 52, '2018-12-12 08:43:56', '2018-12-12 08:40:33', '2018-12-12 08:40:33'),
(24, 53, '2019-02-14 16:41:42', '2019-02-14 16:40:30', '2019-02-14 16:40:30');

-- --------------------------------------------------------

--
-- Table structure for table `demos`
--

CREATE TABLE `demos` (
  `id` int(10) UNSIGNED NOT NULL,
  `role_id` int(11) NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `demos`
--

INSERT INTO `demos` (`id`, `role_id`, `phone`, `image`, `file`, `gender`, `subject`, `created_at`, `updated_at`) VALUES
(3, 1, '6568687', 'image-2018-11-19-5bf2793c443d8.jpg', 'Asadur Zaman.pdf', 'male', 'bangla,english', '2018-11-19 08:50:05', '2018-11-19 08:50:05'),
(11, 1, '34534', 'image-2018-11-19-5bf295a1ddd90.png', 'OMR_13_D_ I & II.pdf', 'female', 'bangla,english', '2018-11-19 10:51:17', '2018-11-19 10:51:17'),
(12, 1, '34534', 'image-2018-11-19-5bf295a60c1bd.png', 'OMR_13_D_ I & II.pdf', 'female', 'bangla,english', '2018-11-19 10:51:18', '2018-11-19 10:51:18');

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(7, '2018_11_07_055351_add_sign_in_at_to_users', 2),
(8, '2018_11_07_065022_add_sign_out_at_users', 3),
(9, '2018_11_07_074410_add_current_sign_in_at_users', 4),
(14, '2014_10_12_000000_create_users_table', 5),
(15, '2014_10_12_100000_create_password_resets_table', 5),
(16, '2018_11_01_115822_create_roles_table', 5),
(17, '2018_11_08_160643_create_activeguets_table', 5),
(18, '2018_11_09_225443_create_sessions_table', 6),
(19, '2018_11_11_110413_create_active_guests_table', 7),
(20, '2018_11_11_110426_create_active_users_table', 7),
(21, '2018_11_13_114303_create_vr_emails_table', 8),
(22, '2018_11_18_153835_create_demos_table', 8),
(23, '2018_12_01_105322_create_jobs_table', 9),
(24, '2018_12_04_212415_add__last_activity_to_users_table', 10),
(25, '2018_12_05_115548_create_date_times_table', 11),
(27, '2018_12_05_120917_create_date_times_table', 12),
(28, '2018_12_12_133629_create_verify_users_table', 13),
(33, '2018_12_17_112741_create_subcribers_table', 14);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'SuperAdmin', NULL, NULL),
(2, 'Admin', NULL, NULL),
(3, 'Author', NULL, NULL),
(4, 'Register', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `subcribers`
--

CREATE TABLE `subcribers` (
  `id` int(10) UNSIGNED NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `verifytoken` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `subcribers`
--

INSERT INTO `subcribers` (`id`, `email`, `verifytoken`, `status`, `created_at`, `updated_at`) VALUES
(18, 'asadur.diu33@gmail.com', 'L4QbIXE8lnY14IlYx8HwUkV3e3q44uAhabM9v4Vc', 1, '2018-12-22 12:25:41', '2018-12-23 12:11:52'),
(19, 'dddd@gmail.com', 'YnDtRdwdXZ9rYtqepzVmZ9oqsRk5sBYxl19fgpxe', 0, '2018-12-23 11:59:26', '2018-12-23 11:59:26'),
(20, 'asadursf1994@gmail.com', '2V7jHpjvp7pNd5wJFdzAcQMDp2DsqzlctdHYWYxu', 0, '2018-12-24 05:36:47', '2018-12-24 05:36:47'),
(21, 'safia@gmail.com', 'QSBNlMRZIYdSAjPJa3ibO2zerw9Tx4AuvHHxrMbC', 0, '2018-12-24 06:14:34', '2018-12-24 06:14:34'),
(22, 'ronok@gmail.com', '7P2L2buCVtFxhwJCeg6gEAOvtW9yMnkaMnV0JBlp', 0, '2018-12-24 06:15:28', '2018-12-24 06:15:28'),
(23, 'ronokd@gmail.com', 'kubjGQxWtLKwNy1UAwtxgjMYDJTo6M6bHiSCjlHU', 0, '2018-12-24 06:30:52', '2018-12-24 06:30:52'),
(24, 'safiaddd@gmail.com', 'ghYVYQ1XZ8MedGyJTdqVFdids723QYJ35K9yoDIx', 0, '2018-12-24 06:44:16', '2018-12-24 06:44:16'),
(28, 'a@gmail.com', 'f9Xwwz9SmVeobWJrMQhVEp2euXAHyNLNIR3g2NW7', 0, '2018-12-24 08:28:26', '2018-12-24 08:28:26'),
(29, 'ami@gmail.com', '8VfY3rrH6ielEClSk1MNS7bf8jMxtgWuuM8MEzxS', 0, '2018-12-24 08:50:17', '2018-12-24 08:50:17');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `role_id` int(11) DEFAULT '4',
  `username` varchar(25) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `last_sign_in_at` timestamp NULL DEFAULT NULL,
  `last_sign_out_at` timestamp NULL DEFAULT NULL,
  `current_sign_in_at` timestamp NULL DEFAULT NULL,
  `status` int(2) NOT NULL DEFAULT '0',
  `verified` tinyint(1) NOT NULL DEFAULT '0',
  `email_verified_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `role_id`, `username`, `email`, `password`, `remember_token`, `created_at`, `updated_at`, `last_sign_in_at`, `last_sign_out_at`, `current_sign_in_at`, `status`, `verified`, `email_verified_at`) VALUES
(2, 2, 'Asadur338', 'asadur.diu33@gmail.com', '$2y$10$AAjj2GvKlqTyEk4KJAGPROqb/Fronx5caws0NmxaiD3K3ND6sFRbC', 'miDg1oCR3L667cnlO8KEimUBDi3ACP7tC0Wd61z0K9Xg2VdplXx9GCadbkEg', '2018-11-09 06:08:15', '2019-02-14 16:40:54', '2018-12-24 06:12:52', '2018-12-17 06:53:08', '2019-02-14 16:40:54', 1, 0, '2018-12-13 06:47:20'),
(30, 1, 'Hmmd22', 'asadur@tos.com.bd', '$2y$10$GtUBDW4pKPd5dP7Ej28FjuemM7OG15zhktkHa9IZGSebbZiKXvCi2', 'BHjix3HpZcYE7nUDKZn5MheQCIC29cfoJy15srfNdU1ZQxeEvD6qChXZCp0s', '2018-12-05 07:33:03', '2018-12-10 11:29:53', '2018-12-05 07:33:13', '2018-12-10 11:29:53', '2018-12-10 11:13:59', 1, 0, '2018-12-03 18:00:00'),
(35, 1, 'Asadur3186', 'dfd@gmail.com', '$2y$10$bcT7.Gu6wKbTGNhnXW7eFeSFyhw2N0o48A5UI6od3YXq33B.RGUmG', 'yqSzvp28xQh3qpH4lGuyZWOSq1MQCIfMuBUosvWwFxF1oR76BSplyzW4oWGz', '2018-12-10 11:27:40', '2018-12-10 11:28:48', '2018-12-10 11:27:44', '2018-12-10 11:28:48', '2018-12-10 11:27:44', 1, 0, NULL),
(36, 2, 'Ronok44', 'asadursf1994@gmail.com', '$2y$10$XDcGdX2vPiUbkSnNdhXWxev8FT/4JBbgIaDITsGhNY5Quhzwku8dC', 'd9xhwmNwdc0XxMJwnYssVeLtO4MvJE4K1iPDbl3nnfLmYpiggnYurhxRxxup', '2018-12-10 11:29:25', '2018-12-10 11:29:35', '2018-12-10 11:29:29', '2018-12-10 11:29:35', '2018-12-10 11:29:29', 1, 0, '2018-12-03 18:00:00'),
(50, 4, 'As3333', 'asadur.diu33@gmail.c', '$2y$10$ecJJSgSnVkQJ5Uqhs0wd5Okp6pOVge4mFBsZ4AMa3DEo5u9qL3Xzy', NULL, '2018-12-12 08:35:12', '2018-12-12 08:35:21', '2018-12-12 08:35:21', NULL, '2018-12-12 08:35:21', 0, 0, NULL),
(52, 4, 'As33', 'asadur.diffu33@gmail.fd', '$2y$10$WtCUCrwq64fDHgOic2JH9uPDRkdpvvKF8hal14zyAYwGISn3TzLjO', '05DVrVslfd2ElSrW7lPqdBz21sQdmZHyjMZwlRx0UTCQrzMmd9UJYrYNlqIG', '2018-12-12 08:40:01', '2018-12-12 08:42:56', '2018-12-12 08:40:32', '2018-12-12 08:42:56', '2018-12-12 08:40:32', 0, 0, NULL),
(53, 4, 'asadkj5454', 'Asadur.s@gmail.com', '$2y$10$AAjj2GvKlqTyEk4KJAGPROqb/Fronx5caws0NmxaiD3K3ND6sFRbC', 'Gzfj3yby6ahkSuSBF0sb8MDOlajuxc7aJfCwIP2ONNkxLpvyvQhDLZ3Dhlek', '2019-02-14 16:40:11', '2019-02-14 16:40:42', '2019-02-14 16:40:29', '2019-02-14 16:40:42', '2019-02-14 16:40:29', 0, 0, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `verify_users`
--

CREATE TABLE `verify_users` (
  `user_id` int(11) NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `vr_emails`
--

CREATE TABLE `vr_emails` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activeguets`
--
ALTER TABLE `activeguets`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `active_guests`
--
ALTER TABLE `active_guests`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `session_id` (`session_id`);

--
-- Indexes for table `active_users`
--
ALTER TABLE `active_users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `date_times`
--
ALTER TABLE `date_times`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `demos`
--
ALTER TABLE `demos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subcribers`
--
ALTER TABLE `subcribers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `subcribers_email_unique` (`email`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `vr_emails`
--
ALTER TABLE `vr_emails`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `activeguets`
--
ALTER TABLE `activeguets`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `active_guests`
--
ALTER TABLE `active_guests`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `active_users`
--
ALTER TABLE `active_users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT for table `date_times`
--
ALTER TABLE `date_times`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `demos`
--
ALTER TABLE `demos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `subcribers`
--
ALTER TABLE `subcribers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `vr_emails`
--
ALTER TABLE `vr_emails`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
