-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 22, 2021 at 03:39 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_absensi_ma_beta4_0`
--

-- --------------------------------------------------------

--
-- Table structure for table `absensi`
--

CREATE TABLE `absensi` (
  `id` bigint(20) NOT NULL,
  `tgl` date NOT NULL,
  `waktu` time DEFAULT NULL,
  `keterangan` varchar(15) DEFAULT NULL,
  `id_user` int(20) NOT NULL,
  `longlat` varchar(1024) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `absensi`
--

INSERT INTO `absensi` (`id`, `tgl`, `waktu`, `keterangan`, `id_user`, `longlat`, `created_at`, `updated_at`) VALUES
(270, '2021-07-20', '21:28:58', 'Ijin', 1, NULL, '2021-07-20 07:29:02', '2021-07-20 20:00:53'),
(271, '2021-07-20', '21:30:38', 'Masuk', 1, NULL, '2021-07-20 07:30:40', '2021-07-20 07:30:40'),
(272, '2021-07-20', '23:32:31', 'Masuk', 1, NULL, '2021-07-20 09:32:33', '2021-07-20 09:32:33'),
(273, '2021-07-20', '23:32:54', 'Ijin', 6, NULL, '2021-07-20 09:32:55', '2021-07-20 10:30:49'),
(280, '2021-07-21', '11:04:20', 'Masuk', 1, '37.421998333333335, -122.08400000000002', '2021-07-21 04:04:20', '2021-07-21 04:04:20'),
(281, '2021-07-21', '11:32:13', 'Masuk', 0, '37.421998333333335, -122.08400000000002', '2021-07-21 04:32:13', '2021-07-21 04:32:13'),
(282, '2021-07-21', '11:42:53', 'Masuk', 1, '37.421998333333335, -122.08400000000002', '2021-07-21 04:42:53', '2021-07-21 04:42:53'),
(283, '2021-07-21', '12:18:53', 'Sakit', 1, '37.421998333333335, -122.08400000000002', '2021-07-21 05:18:53', '2021-07-20 23:08:41'),
(284, '2021-07-21', '19:08:00', 'Masuk', 1, NULL, '2021-07-21 05:08:13', '2021-07-21 05:08:13'),
(285, '2021-07-21', '19:12:35', 'Masuk', 6, NULL, '2021-07-21 05:12:40', '2021-07-21 05:12:40'),
(286, '2021-07-21', '19:15:03', 'Masuk', 1, '37.421998333333335, -122.08400000000002', '2021-07-21 12:15:03', '2021-07-21 12:15:03');

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
-- Table structure for table `informasi_lainnya`
--

CREATE TABLE `informasi_lainnya` (
  `id_info_lainnya` int(11) NOT NULL,
  `logo_aplikasi` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `jabatans`
--

CREATE TABLE `jabatans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `jabatan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jabatans`
--

INSERT INTO `jabatans` (`id`, `jabatan`, `created_at`, `updated_at`) VALUES
(2, 'Karyawan', NULL, NULL),
(3, 'Admin', NULL, NULL),
(11, 'administrator', NULL, NULL),
(12, 'Hakim', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `jamkerja`
--

CREATE TABLE `jamkerja` (
  `id` tinyint(4) NOT NULL,
  `start` time NOT NULL,
  `finish` time NOT NULL,
  `keterangan` enum('Masuk','Pulang') NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jamkerja`
--

INSERT INTO `jamkerja` (`id`, `start`, `finish`, `keterangan`, `updated_at`) VALUES
(1, '01:00:00', '21:39:00', 'Masuk', '2021-07-21 05:07:57');

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2021_05_24_153208_create_sessions_table', 1),
(7, '2021_05_24_153659_create_members_table', 2),
(8, '2021_05_24_171626_create_jabatans_table', 3),
(9, '2021_06_21_133758_create_jam_kerjas_table', 4),
(10, '2021_06_21_182907_create_absens_table', 4);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('febriarc@gmail.com', '$2y$10$RvW0hlpaefYsDKF.MX2/FOZDnSlYxvBRYXZRJ/.IQ0xTNQT72.T/u', '2021-07-12 08:27:49');

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
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payload` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('WkXXVKg0feRfmzpVDdJmL50YKDQqFBMSYubQZ5VI', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/92.0.4515.107 Safari/537.36', 'YTo2OntzOjY6Il90b2tlbiI7czo0MDoiQWtOSU93Z1BjYVJrQ0tnOXJjaGM5d0IwRFlRdWJVaXZBNkI3U29xRyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzQ6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC91c2VyL3Byb2ZpbGUiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToxO3M6MTc6InBhc3N3b3JkX2hhc2hfd2ViIjtzOjYwOiIkMnkkMTAkUjVQMFpkN2dwOFhQT2JYcTBBbkpMLi9RenN6SnJjd3NXVTJGbzg3LnliUjk3T0VJVHdqR0ciO3M6MjE6InBhc3N3b3JkX2hhc2hfc2FuY3R1bSI7czo2MDoiJDJ5JDEwJFI1UDBaZDdncDhYUE9iWHEwQW5KTC4vUXpzekpyY3dzV1UyRm84Ny55YlI5N09FSVR3akdHIjt9', 1626936069),
('y5TO39lawDUCeOXkI4GFP0rLf9VVZ8CIPstLiu4x', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/92.0.4515.107 Safari/537.36', 'YTo2OntzOjY6Il90b2tlbiI7czo0MDoiUnZzeDUwNlRpNWd0a0dybTBHQkdRUlAzUlpoNXZmRXBHOUo4dVJyNCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9kYXNoYm9hcmQiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToxO3M6MTc6InBhc3N3b3JkX2hhc2hfd2ViIjtzOjYwOiIkMnkkMTAkUjVQMFpkN2dwOFhQT2JYcTBBbkpMLi9RenN6SnJjd3NXVTJGbzg3LnliUjk3T0VJVHdqR0ciO3M6MjE6InBhc3N3b3JkX2hhc2hfc2FuY3R1bSI7czo2MDoiJDJ5JDEwJFI1UDBaZDdncDhYUE9iWHEwQW5KTC4vUXpzekpyY3dzV1UyRm84Ny55YlI5N09FSVR3akdHIjt9', 1626961139);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ttd` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jabatan` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hak_akses` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_telepon` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `profile_photo_path` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `ttd`, `jabatan`, `hak_akses`, `no_telepon`, `email`, `password`, `alamat`, `profile_photo_path`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'FebriPutra', 'Jember', 'Admin', 'Admin', '0821', 'febript@gmail.com', '$2y$10$R5P0Zd7gp8XPObXq0AnJL./QzszJrcwsWU2Fo87.ybR97OEITwjGG', 'Jember', 'profile-photos/Cyxb8tHJu0pXo1lUhyKDq9xChVWlW0EODqq0mWq2.png', '81T2uMRt8V82naALdz2oD4ACKi5Kmi7sZlOHffwXAbW4RS9sQJs6obF5e5si', '2021-05-24 08:54:05', '2021-07-21 23:41:09'),
(6, 'afrizal', 'jember', 'Karyawan', 'Karyawan', '213123', 'febriarc@gmail.com', '$2y$10$dnpFSBYtpleWDbbxybvevuOh5IKtd6VkG6R9Rly2mXYIgVc0XMhx.', 'Jember', NULL, 'Ta9E7GIW8f6vCg8Dt8i4aZoCz69GttyOG0QvLfsSwXzXpXGcjjV4YiDtYv1P', '2021-06-09 21:30:13', '2021-07-20 07:53:26'),
(14, 'Fahrel', 'Jember', 'Karyawan', 'Karyawan', '123123213', 'naomi@gmail.com', '$2y$10$8Mhp2A.H23sQaDQbmmDKqe8XtELtIPXbHfpQiAhU9Nzy/LzjAkaVS', 'Jember', NULL, NULL, '2021-06-21 05:02:31', '2021-07-21 05:07:17');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `absensi`
--
ALTER TABLE `absensi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `informasi_lainnya`
--
ALTER TABLE `informasi_lainnya`
  ADD PRIMARY KEY (`id_info_lainnya`);

--
-- Indexes for table `jabatans`
--
ALTER TABLE `jabatans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jamkerja`
--
ALTER TABLE `jamkerja`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

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
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `absensi`
--
ALTER TABLE `absensi`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=287;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `informasi_lainnya`
--
ALTER TABLE `informasi_lainnya`
  MODIFY `id_info_lainnya` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jabatans`
--
ALTER TABLE `jabatans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `jamkerja`
--
ALTER TABLE `jamkerja`
  MODIFY `id` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
