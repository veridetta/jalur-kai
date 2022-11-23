-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 23, 2022 at 05:32 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jalur_kai`
--

-- --------------------------------------------------------

--
-- Table structure for table `asets`
--

CREATE TABLE `asets` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `lintas` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `koridor` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `antara` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `resort` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_lengkung` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `km_ml` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `km_al` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jalur` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `asets`
--

INSERT INTO `asets` (`id`, `lintas`, `koridor`, `antara`, `resort`, `no_lengkung`, `km_ml`, `km_al`, `jalur`, `jenis`, `created_at`, `updated_at`) VALUES
(1, '222', '212', '323', '244', '21', '231', '3232', '122', '4442', '2022-11-22 10:55:01', '2022-11-22 10:55:01');

-- --------------------------------------------------------

--
-- Table structure for table `busurs`
--

CREATE TABLE `busurs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `petaks_id` bigint(20) UNSIGNED NOT NULL,
  `no_busur` int(11) NOT NULL,
  `km` int(11) NOT NULL,
  `antara` int(11) NOT NULL,
  `no_titik` int(11) NOT NULL,
  `lp_km` int(11) NOT NULL,
  `lp_hm` int(11) NOT NULL,
  `jembatan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lb_ukur` int(11) NOT NULL,
  `lb_hitung` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(11, '2014_10_12_000000_create_users_table', 1),
(12, '2014_10_12_100000_create_password_resets_table', 1),
(13, '2019_08_19_000000_create_failed_jobs_table', 1),
(14, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(15, '2022_11_17_164712_create_resorts_table', 1),
(16, '2022_11_18_145931_create_petaks_table', 1),
(17, '2022_11_18_150635_create_busurs_table', 1),
(18, '2022_11_18_151412_create_panahs_table', 1),
(19, '2022_11_18_151615_create_spoors_table', 1),
(20, '2022_11_22_171625_create_asets_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `panahs`
--

CREATE TABLE `panahs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `petaks_id` bigint(20) UNSIGNED NOT NULL,
  `hasil` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `geser` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hasil_baru` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `petaks`
--

CREATE TABLE `petaks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `resorts_id` bigint(20) UNSIGNED NOT NULL,
  `desc` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `resorts`
--

CREATE TABLE `resorts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `code_resorts` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name_resorts` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `spoors`
--

CREATE TABLE `spoors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `petaks_id` bigint(20) UNSIGNED NOT NULL,
  `t_lama` int(11) NOT NULL,
  `t_baru` int(11) NOT NULL,
  `l_lama` int(11) NOT NULL,
  `l_baru` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `firstname` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lastname` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `firstname`, `lastname`, `email`, `email_verified_at`, `password`, `role`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'Super', 'Admin', 'admin@argon.com', NULL, '$2y$10$oAIX77I3voIsYa//EQVfxeYobpBG8WwZKZIH1uy1zEz5R71d/SFZ.', 'super', NULL, NULL, '2022-11-23 09:30:19'),
(2, 'adminbiasa', 'Admin', 'Biasa', 'admin@gmail.com', NULL, '$2y$10$BeOojuZLfl1RMveMzuWpIersISzA5fWSxPnhMhKvtLWW3MaBKSgr6', 'admin', NULL, '2022-11-23 08:33:21', '2022-11-23 08:33:21');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `asets`
--
ALTER TABLE `asets`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `busurs`
--
ALTER TABLE `busurs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `busurs_petaks_id_foreign` (`petaks_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `panahs`
--
ALTER TABLE `panahs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `panahs_petaks_id_foreign` (`petaks_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `petaks`
--
ALTER TABLE `petaks`
  ADD PRIMARY KEY (`id`),
  ADD KEY `petaks_resorts_id_foreign` (`resorts_id`);

--
-- Indexes for table `resorts`
--
ALTER TABLE `resorts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `spoors`
--
ALTER TABLE `spoors`
  ADD PRIMARY KEY (`id`),
  ADD KEY `spoors_petaks_id_foreign` (`petaks_id`);

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
-- AUTO_INCREMENT for table `asets`
--
ALTER TABLE `asets`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `busurs`
--
ALTER TABLE `busurs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `panahs`
--
ALTER TABLE `panahs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `petaks`
--
ALTER TABLE `petaks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `resorts`
--
ALTER TABLE `resorts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `spoors`
--
ALTER TABLE `spoors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `busurs`
--
ALTER TABLE `busurs`
  ADD CONSTRAINT `busurs_petaks_id_foreign` FOREIGN KEY (`petaks_id`) REFERENCES `petaks` (`id`);

--
-- Constraints for table `panahs`
--
ALTER TABLE `panahs`
  ADD CONSTRAINT `panahs_petaks_id_foreign` FOREIGN KEY (`petaks_id`) REFERENCES `petaks` (`id`);

--
-- Constraints for table `petaks`
--
ALTER TABLE `petaks`
  ADD CONSTRAINT `petaks_resorts_id_foreign` FOREIGN KEY (`resorts_id`) REFERENCES `resorts` (`id`);

--
-- Constraints for table `spoors`
--
ALTER TABLE `spoors`
  ADD CONSTRAINT `spoors_petaks_id_foreign` FOREIGN KEY (`petaks_id`) REFERENCES `petaks` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
