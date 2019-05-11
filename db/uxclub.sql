-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 11, 2019 at 11:42 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `uxclub`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone_number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'super admin',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `password`, `image`, `phone_number`, `role`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Asif Reaz', 'adminmastul@gmail.com', '$2y$12$3ft4ivvctzS1MaI6buBq.uO85axMHqZgK7SO9sTebBijdCig92ZEy', NULL, NULL, 'super admin', 'aEfyKuMIFgakuVfgX9d3Ivily4jbrtnWwmyMlLOTkoydlXfHZCXKjquHS4i7', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `coursefiles`
--

CREATE TABLE `coursefiles` (
  `id` int(10) UNSIGNED NOT NULL,
  `courseitem_id` int(10) UNSIGNED NOT NULL COMMENT 'Course item id',
  `image_title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'image title',
  `imagefile` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'image file',
  `vediofile` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'vedio embeded link',
  `vedio_title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'vedio title',
  `vedio_duration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'vedio duration',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `coursefiles`
--

INSERT INTO `coursefiles` (`id`, `courseitem_id`, `image_title`, `imagefile`, `vediofile`, `vedio_title`, `vedio_duration`, `created_at`, `updated_at`) VALUES
(1, 1, 'UI/UX Designer', 'ui_ux_designer.jpg', '306705787', 'Learn all the Basic tools of Photoshop for UI Design', '4:57min', NULL, NULL),
(2, 1, '', '', '308736859', 'Introduction to UI/UX & Online Resources', '4:58min', NULL, NULL),
(3, 2, 'Mobile App Designer', 'mobile_app.jpg', '307133457', 'Become a Mobile App Designer', '4:58min', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `courseitems`
--

CREATE TABLE `courseitems` (
  `id` int(10) UNSIGNED NOT NULL,
  `course_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Course title',
  `description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Course title',
  `imagefile` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `courseitems`
--

INSERT INTO `courseitems` (`id`, `course_name`, `title`, `description`, `imagefile`, `slug`, `created_at`, `updated_at`) VALUES
(3, 'Jannatul Ferdous', 'Age 9 years | | Dream polish', 'She is child of a Risksha-pullar', '1557554134.jpg', 'jannatul-ferdous', '2019-05-10 23:55:34', '2019-05-10 23:55:34'),
(4, 'MD Arman', 'Age 10 years | | Dream Doctor', 'i\'am very poor, Please Sponsor Me', '1557564136.jpg', 'md-arman', '2019-05-11 02:42:16', '2019-05-11 02:42:16'),
(5, 'MD Mojahidul Islam', 'Age 11 years | | Dream Cricketer', 'Sponsor me', '1557565051.jpg', 'md-mojahidul-islam', '2019-05-11 02:57:31', '2019-05-11 02:57:31'),
(6, 'jamal udding', 'Age 8 years | | Dream Doctor', 'please sponser me', '1557566562.JPG', 'jamal-udding', '2019-05-11 03:22:42', '2019-05-11 03:22:42');

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `id` int(10) UNSIGNED NOT NULL,
  `members_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `courses_title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Course_title',
  `comment` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Comment',
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `stasus` tinyint(3) UNSIGNED NOT NULL DEFAULT '0' COMMENT '1',
  `membersimage` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'image file',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`id`, `members_name`, `courses_title`, `comment`, `slug`, `email`, `address`, `stasus`, `membersimage`, `created_at`, `updated_at`) VALUES
(1, 'Mohammad Saiful Islam a', 'Member of UX Club', 'a consonant.rstand that you are not asking about a specific type of gift or a specific item. “I am going to bring an apple pie,', '!Mohammad-Saiful-Islam', 'MohammadSai@gmail.com', '32/31 makeup khan road rayser bazzer dhaka 1209', 0, 'member1.png', NULL, NULL),
(2, 'Sharmin Akhter Soma b', 'Member of UX Club', 'a consonant.rstand that you are not asking about a specific type of gift or a specific item. “I am going to bring an apple pie', 'Sharmin-Akhter-Soma', 'SharminAkhterSoma@gamil.com', '32/31 b makeup khan road dhaka 1209 ', 0, 'member2.png', NULL, NULL);

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(6, '2019_01_05_084507_create_members_table', 3),
(7, '2019_01_05_105257_create_stories_table', 4),
(8, '2019_01_05_143548_create_admins_table', 5);

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
-- Table structure for table `stories`
--

CREATE TABLE `stories` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Course title',
  `description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Course title',
  `imagefile` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'image file',
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `stories`
--

INSERT INTO `stories` (`id`, `title`, `description`, `imagefile`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'UX Club is a Online Based UX/UI Learning Platform', 'UX club is currently the best platform of UX/UI and Mobile app design learning.Already we have created an expert team who provides you Video tutorial and Live class support.We have many talen', 'story1.jpg', 'UX-Club-is-a-Online-Based-UX/UI-Learning-Platform', NULL, NULL),
(2, 'Meetup Program - 2018', 'UX club is currently the best platform of UX/UI and Mobile app design learning.Already we have created an expert team who provides you Video tutorial and Live class support.We have many talen', 'story2.jpg', 'Meetup-Program-2018', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'webmastul', 'webmastul@gmail.com', NULL, '$2y$10$zVnWjsvh5HYYgOLZbEBu3OEWVi5B0SAT3kflcggDIztYk8mtZL9DC', 'IdRXOByOVHQoo4GlQGKWAqwQiumg346JxkiA5a1DFKNCg8ExepH0G2k7kYCD', '2019-05-10 23:22:18', '2019-05-10 23:22:18');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `coursefiles`
--
ALTER TABLE `coursefiles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `courseitems`
--
ALTER TABLE `courseitems`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `members_email_unique` (`email`);

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
-- Indexes for table `stories`
--
ALTER TABLE `stories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `coursefiles`
--
ALTER TABLE `coursefiles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `courseitems`
--
ALTER TABLE `courseitems`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `stories`
--
ALTER TABLE `stories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
