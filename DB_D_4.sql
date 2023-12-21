-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 21, 2023 at 06:16 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kinema_bioskop`
--

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
-- Table structure for table `food`
--

CREATE TABLE `food` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `status` enum('Ready','Empty') NOT NULL,
  `harga` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `food`
--

INSERT INTO `food` (`id`, `image`, `nama`, `status`, `harga`, `created_at`, `updated_at`) VALUES
(1, '1703134674.jpg', 'PopCorn + Cola + French Fries', 'Ready', '70000', '2023-12-20 20:23:17', '2023-12-21 04:57:54'),
(2, '1703134697.jpg', 'Nachos + NesTea', 'Ready', '35000', '2023-12-21 04:58:17', '2023-12-21 04:58:17');

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_12_14_053657_create_order_food_table', 1),
(6, '2023_12_14_131957_create_movie_table', 1),
(7, '2023_12_15_155123_create_food_table', 1),
(8, '2023_12_16_130113_create_studio_table', 1),
(9, '2023_12_16_130123_create_schedule_table', 1),
(10, '2023_12_16_130603_create_order_movie_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `movie`
--

CREATE TABLE `movie` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `poster` varchar(255) NOT NULL,
  `judul_film` varchar(255) NOT NULL,
  `genre` varchar(255) NOT NULL,
  `durasi` varchar(255) NOT NULL,
  `status` enum('Now Playing','Coming Soon','Not Show') NOT NULL,
  `ratingUsia` int(11) NOT NULL,
  `sutradara` varchar(255) NOT NULL,
  `actor` longtext NOT NULL,
  `sinopsis` longtext NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `movie`
--

INSERT INTO `movie` (`id`, `poster`, `judul_film`, `genre`, `durasi`, `status`, `ratingUsia`, `sutradara`, `actor`, `sinopsis`, `created_at`, `updated_at`) VALUES
(1, '1703134024.jpg', 'Avengers End Game', 'Action, Sc-fi', '181', 'Now Playing', 13, 'Anthony Russo; Joe Russo;', 'Robert Downey Jr; Scarlett Johansson, Chrris Evans;', 'Melanjutkan Avengers Infinity War, dimana kejadian setelah Thanos berhasil mendapatkan semua infinity stones dan memusnahkan 50% semua mahluk hidup di alam semesta. Akankah para Avengers berhasil mengalahkan Thanos?', '2023-12-20 20:22:13', '2023-12-21 04:47:04'),
(2, '1703134185.jpg', 'Shang-Chi and the Legend of the Ten Rings', 'Action, Adventure', '132', 'Now Playing', 13, 'Destin Daniel Cretton', 'Simu Liu;Awkwafina;Tony Leung Chiu-wai;Michelle Yeoh;Wah Yuen', 'Shang-Chi (Simu Liu) harus menghadapi masa lalunya sebelum ia memilih untuk meninggalkan dan bergabung ke dalam sebuah organisasi bernama Ten Rings.', '2023-12-21 04:49:45', '2023-12-21 04:49:45'),
(3, '1703134370.jpg', 'Oppenheimer', 'Drama, Biography, History', '180', 'Coming Soon', 13, 'Christopher Nolan', 'Cillian Murphy;Emily Blunt ;Matt Damon;Robert Downey Jr;Florence Pugh', 'The story of American scientist, J. Robert Oppenheimer, and his role in the development of the atomic bomb.', '2023-12-21 04:52:50', '2023-12-21 04:52:50'),
(4, '1703134605.jpg', 'Sang Pemimpi', 'Drama', '140', 'Now Playing', 17, 'Riri Riza', 'Lukman Sardi;Rendy Ahmad;Vikri Septiawan;Azwir Fitrianto;Nugie;Landung Simatupang', 'Kisah lanjutan dari \"Laskar Pelangi\", tentang tiga anak remaja lelaki yang mencari jati diri dan berusaha mengatasi problema hidup mereka.', '2023-12-21 04:56:45', '2023-12-21 05:09:47');

-- --------------------------------------------------------

--
-- Table structure for table `order_food`
--

CREATE TABLE `order_food` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_user` bigint(20) UNSIGNED NOT NULL,
  `food` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`food`)),
  `total` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_food`
--

INSERT INTO `order_food` (`id`, `id_user`, `food`, `total`, `created_at`, `updated_at`) VALUES
(1, 2, '{\"PopCorn\":{\"nama\":\"PopCorn\",\"jumlah\":\"6\",\"harga\":\"120\"}}', 120, '2023-12-20 20:34:25', '2023-12-20 20:34:25'),
(2, 2, '{\"PopCorn\":{\"nama\":\"PopCorn\",\"jumlah\":\"1\",\"harga\":\"20\"}}', 20, '2023-12-20 20:35:55', '2023-12-20 20:35:55'),
(3, 2, '{\"PopCorn\":{\"nama\":\"PopCorn\",\"jumlah\":\"2\",\"harga\":\"40\"}}', 40, '2023-12-21 04:21:51', '2023-12-21 04:21:51'),
(4, 2, '{\"PopCorn\":{\"nama\":\"PopCorn\",\"jumlah\":\"2\",\"harga\":\"40\"}}', 40, '2023-12-21 04:22:33', '2023-12-21 04:22:33'),
(5, 2, '{\"PopCorn\":{\"nama\":\"PopCorn\",\"jumlah\":\"1\",\"harga\":\"20\"}}', 20, '2023-12-21 04:23:17', '2023-12-21 04:23:17'),
(6, 3, '{\"PopCorn + Cola + French Fries\":{\"nama\":\"PopCorn + Cola + French Fries\",\"jumlah\":\"1\",\"harga\":\"70000\"}}', 70000, '2023-12-21 05:05:56', '2023-12-21 05:05:56'),
(7, 3, '{\"PopCorn + Cola + French Fries\":{\"nama\":\"PopCorn + Cola + French Fries\",\"jumlah\":\"1\",\"harga\":\"70000\"},\"Nachos + NesTea\":{\"nama\":\"Nachos + NesTea\",\"jumlah\":\"1\",\"harga\":\"35000\"}}', 105000, '2023-12-21 05:12:43', '2023-12-21 05:12:43');

-- --------------------------------------------------------

--
-- Table structure for table `order_ticket`
--

CREATE TABLE `order_ticket` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_user` bigint(20) UNSIGNED NOT NULL,
  `id_schedule` bigint(20) UNSIGNED NOT NULL,
  `seat` text NOT NULL,
  `quantity` int(11) NOT NULL,
  `total_price` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_ticket`
--

INSERT INTO `order_ticket` (`id`, `id_user`, `id_schedule`, `seat`, `quantity`, `total_price`, `created_at`, `updated_at`) VALUES
(1, 2, 1, 'C4,C5,C6,C7,C8,D6,D7', 7, 245000, '2023-12-21 03:50:35', '2023-12-21 03:50:35'),
(2, 2, 1, 'H9,I9', 2, 70000, '2023-12-21 04:18:30', '2023-12-21 04:18:30'),
(3, 2, 1, 'J9', 1, 35000, '2023-12-21 04:20:13', '2023-12-21 04:20:13'),
(4, 2, 1, 'C2', 1, 35000, '2023-12-21 04:22:59', '2023-12-21 04:22:59'),
(5, 3, 1, 'G1,G2', 2, 70000, '2023-12-21 05:11:44', '2023-12-21 05:11:44');

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
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `schedule`
--

CREATE TABLE `schedule` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_movie` bigint(20) UNSIGNED NOT NULL,
  `id_studio` bigint(20) UNSIGNED NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `schedule`
--

INSERT INTO `schedule` (`id`, `id_movie`, `id_studio`, `date`, `time`, `created_at`, `updated_at`) VALUES
(1, 1, 1, '2023-12-21', '13:30:00', '2023-12-20 20:25:44', '2023-12-21 04:59:26'),
(2, 1, 29, '2023-12-21', '14:15:00', '2023-12-21 05:00:12', '2023-12-21 05:00:21'),
(3, 2, 30, '2023-12-21', '13:15:00', '2023-12-21 05:00:46', '2023-12-21 05:00:46'),
(4, 2, 1, '2023-12-21', '19:10:00', '2023-12-21 05:01:10', '2023-12-21 05:01:10');

-- --------------------------------------------------------

--
-- Table structure for table `studio`
--

CREATE TABLE `studio` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `seat` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `studio`
--

INSERT INTO `studio` (`id`, `name`, `seat`, `created_at`, `updated_at`) VALUES
(1, 'Studio 01', 60, '2023-12-20 20:23:37', '2023-12-21 04:58:29'),
(29, 'Studio 02', 69, '2023-12-21 04:58:41', '2023-12-21 04:58:41'),
(30, 'Studio 03', 50, '2023-12-21 04:58:51', '2023-12-21 04:58:51');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `verify_key` varchar(255) DEFAULT NULL,
  `active` int(11) DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `role` enum('admin','user') NOT NULL,
  `no_telp` varchar(255) DEFAULT NULL,
  `profile_picture` varchar(255) DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `verify_key`, `active`, `email_verified_at`, `password`, `role`, `no_telp`, `profile_picture`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@gmail.com', '1', 1, NULL, '$2y$10$ziKW/wlI2evocowtuAbWQeHDRFxI45WMXKQSQHLrF158K.sBI9lHq', 'admin', NULL, NULL, NULL, NULL, NULL),
(2, 'trisna', 'rewalak287@bayxs.com', 'pfkhcE89xzItupdvdEApi6pmwZyjppa0X3KlKaA65OW7pU7GLowKy3J0wdRhgbnWH7ef50LKyJ3BuII1zL4ZX7boTxeRQ0e0O1Cf', 1, '2023-12-20 20:30:10', '$2y$10$DCyJuSpNpnUv3rg9hNHy.OOiB8gDBIFt8jh5JtNc3okNFQ64AOYjS', 'user', '081234567890', '1703129449.jpg', NULL, '2023-12-20 20:29:40', '2023-12-21 04:13:30'),
(3, 'Sejefan', 'sejefiy162@avucon.com', '0H4ffYTH0VFdQH1TsQvg9muFK7QWH1WYtGXaHo4Zo0snpQdva3ILJvVN4ocOMtcsxKRcHJvqitILwUa2GfOmUne9Z7yyqslMrhB0', 1, '2023-12-21 04:39:49', '$2y$10$R1KorKks2aHQIdTLBAMQHOSrL1qwRSszok6NFVvmz0VzRynlskfQi', 'user', '081309758399', NULL, NULL, '2023-12-21 04:39:06', '2023-12-21 04:39:49');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `food`
--
ALTER TABLE `food`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `movie`
--
ALTER TABLE `movie`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_food`
--
ALTER TABLE `order_food`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_food_id_user_foreign` (`id_user`);

--
-- Indexes for table `order_ticket`
--
ALTER TABLE `order_ticket`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_ticket_id_user_foreign` (`id_user`),
  ADD KEY `order_ticket_id_schedule_foreign` (`id_schedule`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `schedule`
--
ALTER TABLE `schedule`
  ADD PRIMARY KEY (`id`),
  ADD KEY `schedule_id_movie_foreign` (`id_movie`),
  ADD KEY `schedule_id_studio_foreign` (`id_studio`);

--
-- Indexes for table `studio`
--
ALTER TABLE `studio`
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
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `food`
--
ALTER TABLE `food`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `movie`
--
ALTER TABLE `movie`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `order_food`
--
ALTER TABLE `order_food`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `order_ticket`
--
ALTER TABLE `order_ticket`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `schedule`
--
ALTER TABLE `schedule`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `studio`
--
ALTER TABLE `studio`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `order_food`
--
ALTER TABLE `order_food`
  ADD CONSTRAINT `order_food_id_user_foreign` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`);

--
-- Constraints for table `order_ticket`
--
ALTER TABLE `order_ticket`
  ADD CONSTRAINT `order_ticket_id_schedule_foreign` FOREIGN KEY (`id_schedule`) REFERENCES `schedule` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `order_ticket_id_user_foreign` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `schedule`
--
ALTER TABLE `schedule`
  ADD CONSTRAINT `schedule_id_movie_foreign` FOREIGN KEY (`id_movie`) REFERENCES `movie` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `schedule_id_studio_foreign` FOREIGN KEY (`id_studio`) REFERENCES `studio` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
