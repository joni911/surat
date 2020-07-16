-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 16, 2020 at 02:50 AM
-- Server version: 5.7.24
-- PHP Version: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `surat_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `disposisis`
--

CREATE TABLE `disposisis` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `surat_id` bigint(20) NOT NULL,
  `user` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `tujuan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kajian` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_kajian` date NOT NULL,
  `jam_kajian` time NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `disposisis`
--

INSERT INTO `disposisis` (`id`, `surat_id`, `user`, `tujuan`, `kajian`, `tanggal_kajian`, `jam_kajian`, `created_at`, `updated_at`) VALUES
(3, 6, 'admin', 'Kasubag_UMUM', '123', '2020-07-14', '07:56:51', '2020-07-13 23:56:51', '2020-07-13 23:56:51'),
(4, 9, 'admin', 'Kasubag Oprasional', 'Nie Li, one of the strongest Demon Spiritist in his past life standing at the pinnacle of the martial world , however he lost his life during the battle with Sage Emperor and the six deity ranked beast, his soul was then reborn back in time back to when he is still 13. Although he’s the weakest in his class with the lowest talent at only Red soul realm, with the aid of the vast knowledge which he accumulated in his previous life, he trained faster then anyone. Trying to protect the city which in the coming future was being assaulted by beast and ended up being destroyed as well as protecting his lover, friends and family who died by the beast assault. and to destroy the Sacred family whom abandon their duty and betrayed the city in his past life.', '2020-07-14', '12:37:10', '2020-07-14 04:37:10', '2020-07-14 04:37:10'),
(5, 9, 'admin', 'Kasubag Oprasional', 'Below is an example of a basic controller class. Note that the controller extends the base controller class included with Laravel. The base class provides a few convenience methods such as the middleware method, which may be used to attach middleware to controller actions:', '2020-07-14', '13:32:29', '2020-07-14 05:32:29', '2020-07-14 05:32:29'),
(6, 9, 'admin', 'IT', 'If there are errors processing the form, we will redirect them back to the create form with those errors. We will add them in so the user can understand what went wrong. They will show up in the errors section we setup earlier.\r\n\r\nNow you should be able to create a nerd and have them show up on the main page! Navigate to example.com/nerds and there they are. All that\'s left is showing a single nerd, updating, and deleting.', '2020-07-14', '13:33:19', '2020-07-14 05:33:19', '2020-07-14 05:33:19'),
(7, 9, 'admin', 'Kasubag UMUM', 'Simple Where Clauses\r\n\r\nYou may use the where method on a query builder instance to add where clauses to the query. The most basic call to where requires three arguments. The first argument is the name of the column. The second argument is an operator, which can be any of the database\'s supported operators. Finally, the third argument is the value to evaluate against the column.\r\n\r\nFor example, here is a query that verifies the value of the \"votes\" column is equal to 100:', '2020-07-14', '13:33:40', '2020-07-14 05:33:40', '2020-07-14 05:33:40'),
(8, 9, 'admin', 'it', 'Get created_at date in different formats with Laravel in PHP 5.2+. Put this code in your model (for example models/users.php) and in your views do {{ $user->short_created_at }}', '2020-07-14', '13:34:45', '2020-07-14 05:34:45', '2020-07-14 05:34:45'),
(9, 10, 'admin', 'Kasubag UMUM', 'kajian untuk pembelian pc', '2020-07-14', '14:26:39', '2020-07-14 06:26:39', '2020-07-14 06:26:39'),
(10, 10, 'arta', 'Kasubag UMUM', 'lanjut ke dirut', '2020-07-14', '14:40:40', '2020-07-14 06:40:40', '2020-07-14 06:40:40'),
(11, 10, 'arta', 'Kasubag Oprasional', 'lanjut ke dirut', '2020-07-14', '14:41:00', '2020-07-14 06:41:00', '2020-07-14 06:41:00'),
(12, 10, 'gusti', 'Sekpri Dirut', 'dewi lanjut ke bapak dirut', '2020-07-14', '14:41:36', '2020-07-14 06:41:36', '2020-07-14 06:41:36'),
(13, 10, 'dewi', 'Dirut', 'sudah sesiai mohon di acc', '2020-07-14', '14:43:25', '2020-07-14 06:43:25', '2020-07-14 06:43:25'),
(14, 10, 'Ir Made Astawa', 'TURT', 'segera eksekusi', '2020-07-14', '14:43:48', '2020-07-14 06:43:48', '2020-07-14 06:43:48'),
(15, 12, 'lestari', 'Sekpri Dirut', 'mohon di acc pembelian atk sudah sesuai', '2020-07-16', '02:45:22', '2020-07-15 18:45:22', '2020-07-15 18:45:22'),
(16, 12, 'dewi', 'Dirut', 'mohon di acc pak sudah sesuai', '2020-07-16', '02:46:13', '2020-07-15 18:46:13', '2020-07-15 18:46:13'),
(17, 12, 'Ir Made Astawa', 'TURT', 'bisa di lanjutkan sudah saya acc', '2020-07-16', '02:46:51', '2020-07-15 18:46:51', '2020-07-15 18:46:51');

-- --------------------------------------------------------

--
-- Table structure for table `expedisis`
--

CREATE TABLE `expedisis` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jabatans`
--

CREATE TABLE `jabatans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `jabatan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jabatans`
--

INSERT INTO `jabatans` (`id`, `user_id`, `jabatan`, `created_at`, `updated_at`) VALUES
(1, 1, 'IT', '2020-07-12 02:45:39', '2020-07-12 02:28:29'),
(6, 3, 'Kasubag Oprasional', '2020-07-11 19:31:05', '2020-07-12 06:56:39'),
(7, 4, 'Kasubag UMUM', '2020-07-12 07:05:20', '2020-07-14 06:30:43'),
(8, 6, 'Dirut', '2020-07-14 06:42:43', '2020-07-14 06:42:43'),
(9, 5, 'Sekpri Dirut', '2020-07-14 06:42:49', '2020-07-14 06:42:49'),
(10, 7, 'TURT', '2020-07-14 06:47:15', '2020-07-14 06:47:15'),
(11, 8, 'TURT', '2020-07-15 18:38:10', '2020-07-15 18:38:10'),
(12, 9, 'Kasubag UMUM', '2020-07-15 18:41:19', '2020-07-15 18:44:39');

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
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2020_07_11_144341_create_surats_table', 2),
(5, '2020_07_11_155947_create_jabatans_table', 2),
(6, '2020_07_11_160924_create_expedisis_table', 2),
(7, '2020_07_14_024256_create_disposisis_table', 3),
(8, '2020_07_15_065852_create_notifications_table', 4);

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notifiable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notifiable_id` bigint(20) UNSIGNED NOT NULL,
  `data` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `read_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `notifications`
--

INSERT INTO `notifications` (`id`, `type`, `notifiable_type`, `notifiable_id`, `data`, `read_at`, `created_at`, `updated_at`) VALUES
('545f1057-55eb-49b4-9dae-8e34bb72fd57', 'App\\Notifications\\NotifikasiSurat', 'App\\User', 1, '{\"name\":\"admin\",\"email\":\"admin@bankpasar.co.id\"}', NULL, '2020-07-15 00:23:48', '2020-07-15 00:23:48');

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
-- Table structure for table `surats`
--

CREATE TABLE `surats` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `no_surat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keterangan` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `tujuan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prihal` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_surat` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `surats`
--

INSERT INTO `surats` (`id`, `user_id`, `no_surat`, `keterangan`, `tujuan`, `prihal`, `file`, `tanggal_surat`, `created_at`, `updated_at`) VALUES
(6, 1, 'SPP 123', 'undangan', 'Kasubag UMUM', 'Surat spp', 'SPP 123-Surat spp.torrent', '2020-07-12', '2020-07-12 06:47:08', '2020-07-13 22:19:51'),
(7, 1, 'SPP 1234', 'keterangan untuk sekpri', '', 'untuk sekpri', 'SPP 1234-untuk sekpri.pdf', '2020-07-12', '2020-07-12 07:07:52', '2020-07-12 07:07:52'),
(8, 1, 'umum', 'umum', '', 'umum', 'umum-umum.torrent', '2020-07-12', '2020-07-12 07:25:31', '2020-07-12 07:25:31'),
(9, 1, '123', 'Nie Li, one of the strongest Demon Spiritist in his past life standing at the pinnacle of the martial world , however he lost his life during the battle with Sage Emperor and the six deity ranked beast, his soul was then reborn back in time back to when he is still 13. Although he’s the weakest in his class with the lowest talent at only Red soul realm, with the aid of the vast knowledge which he accumulated in his previous life, he trained faster then anyone. Trying to protect the city which in the coming future was being assaulted by beast and ended up being destroyed as well as protecting his lover, friends and family who died by the beast assault. and to destroy the Sacred family whom abandon their duty and betrayed the city in his past life.', 'it', '1233332', '123-1233332.xlsx', '2020-07-14', '2020-07-14 04:35:17', '2020-07-14 05:34:45'),
(10, 1, 'S/07/14/2020', 'Simple Where Clauses\r\n\r\nYou may use the where method on a query builder instance to add where clauses to the query. The most basic call to where requires three arguments. The first argument is the name of the column. The second argument is an operator, which can be any of the database\'s supported operators. Finally, the third argument is the value to evaluate against the column.\r\n\r\nFor example, here is a query that verifies the value of the \"votes\" column is equal to 100:', 'TURT', 'Pembelian PC', 'S/07/14/2020-Pembelian PC.pdf', '2020-07-14', '2020-07-14 06:24:09', '2020-07-14 06:43:48'),
(11, 1, '123', '12333', 'Kasubag UMUM', '123', '123-123.xlsx', '2020-07-16', '2020-07-15 18:14:53', '2020-07-15 18:14:53'),
(12, 8, 'S 07/16/2020', 'Permohonan pemebelian alat atk untuk keperluan printing di kantor', 'TURT', 'Pengajuan Pembelian ATK', 'S 07/16/2020-Pengajuan Pembelian ATK.xlsx', '2020-07-16', '2020-07-15 18:40:10', '2020-07-15 18:46:51');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hak_akses` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `hak_akses`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@bankpasar.co.id', 'administrator', NULL, '$2y$10$bFqOGz3QDyN8cmV5OVjcuufdAjPX543bUHJZBJmB43g.SjBLAwiAa', NULL, '2020-07-11 05:45:59', '2020-07-11 18:08:09'),
(3, 'gusti', 'gusti@bankpasar.co.id', 'user', NULL, '$2y$10$sLmx1SBxM47kvfuwXtFNXerVp4.IumULnwsyjZE.wYc5aA7Ve7MQW', NULL, '2020-07-11 18:41:31', '2020-07-11 19:10:07'),
(4, 'arta', 'arta@bankpasar.co.id', 'user', NULL, '$2y$10$1IEbUInFCNsBjsXixfE37.ngoVaQDiYmmHamgUwcmCN1DidD7Zy0O', NULL, '2020-07-12 07:05:09', '2020-07-12 07:05:09'),
(5, 'dewi', 'dewi@bankpasar.co.id', 'user', NULL, '$2y$10$M1t.yO8dqGka2DtHRDuJPuCCyYDEYHHK2xhskgNZAAdZAgUkZVy3.', NULL, '2020-07-14 06:42:00', '2020-07-14 06:42:07'),
(6, 'Ir Made Astawa', 'astawa@bankpasar.co.id', 'user', NULL, '$2y$10$8b.UCIWtWYja8rb66AoebeYGOT6N.UW5i6FOF2cR1YCkh/mLh3mme', NULL, '2020-07-14 06:42:31', '2020-07-14 06:42:31'),
(7, 'putu', 'putu@bankpasar.co.id', 'user', NULL, '$2y$10$f.Qezz7VBogSClkpdLknBOOPuDJ9e/vLOwCwjhBMdyKq8h/7Y9fDm', NULL, '2020-07-14 06:47:02', '2020-07-14 06:47:02'),
(8, 'rusi', 'rusi@bankpasar.co.id', 'user', NULL, '$2y$10$q9AOwiaQQhd8Kg44Zh5vGenyO3L4L8BW4oUhYWJwI9hpljjJ/.Ram', NULL, '2020-07-15 18:37:58', '2020-07-15 18:37:58'),
(9, 'lestari', 'lestari@bankpasar.co.id', 'user', NULL, '$2y$10$Y9rfPs.Rsr7VUys0L478CuuNZ1d2gwTb87eBzL/sttMFmktwDrg7S', NULL, '2020-07-15 18:41:10', '2020-07-15 18:41:10');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `disposisis`
--
ALTER TABLE `disposisis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `expedisis`
--
ALTER TABLE `expedisis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jabatans`
--
ALTER TABLE `jabatans`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user_id` (`user_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`),
  ADD KEY `notifications_notifiable_type_notifiable_id_index` (`notifiable_type`,`notifiable_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `surats`
--
ALTER TABLE `surats`
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
-- AUTO_INCREMENT for table `disposisis`
--
ALTER TABLE `disposisis`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `expedisis`
--
ALTER TABLE `expedisis`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jabatans`
--
ALTER TABLE `jabatans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `surats`
--
ALTER TABLE `surats`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
