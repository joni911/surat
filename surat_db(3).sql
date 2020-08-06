-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Aug 06, 2020 at 12:55 PM
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
-- Table structure for table `auto_numbers`
--

CREATE TABLE `auto_numbers` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `number` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(17, 12, 'Ir Made Astawa', 'TURT', 'bisa di lanjutkan sudah saya acc', '2020-07-16', '02:46:51', '2020-07-15 18:46:51', '2020-07-15 18:46:51'),
(18, 13, 'lestari', 'Sekpri Dirut', 'Jika Anda bertanya-tanya bagaimana server dapat mengirim pemberitahuan ke klien, itu menggunakan socket di bawah kap untuk mencapainya. Mari kita memahami aliran dasar socket sebelum kita menyelam lebih dalam ke implementasi yang sebenarnya.\r\n\r\n    Pertama, Anda memerlukan server yang mendukung protokol web-socket dan memungkinkan klien untuk membuat sambungan soket web.\r\n    Anda dapat mengimplementasikan server Anda sendiri atau menggunakan layanan pihak ketiga seperti Pusher. Kami akan memilih yang terakhir dalam artikel ini.\r\n    Klien memulai sambungan socket web ke server socket web dan menerima identifier unik setelah koneksi berhasil.\r\n    Setelah koneksi berhasil, klien berlangganan ke channel tertentu di mana ia ingin menerima event.\r\n    Akhirnya, di bawah channel berlangganan, klien mendaftarkan event yang ingin didengarkan.\r\n    Sekarang di sisi server, ketika peristiwa tertentu terjadi, kami informasikan server web-socket dengan menyediakannya dengan nama channel dan nama event.\r\n    Dan akhirnya, server web-socket menyiarkan event itu ke klien terdaftar di channel tertentu.\r\n\r\nJangan khawatir jika kelihatannya terlalu banyak pekerjaan dalam sekali jalan; Anda akan memahami hal itu saat kita menelusuri artikel ini.', '2020-07-16', '03:14:27', '2020-07-15 19:14:27', '2020-07-15 19:14:27'),
(19, 13, 'dewi', 'Dirut', 'Secara default, Laravel mendukung beberapa adaptor broadcast pada inti broadcast itu sendiri.\r\n\r\nDalam artikel ini, kita akan menggunakan adaptor broadcast Pusher. Untuk keperluan debugging, Anda juga bisa menggunakan adaptor log. Tentu saja, jika Anda menggunakan adaptor log, klien tidak akan menerima pemberitahuan event apa pun, dan hanya akan dicatat ke file laravel.log.\r\n\r\nDari bagian selanjutnya dan seterusnya, kita akan segera menyelami implementasi aktual dari use-case yang disebutkan di atas.', '2020-07-16', '03:15:06', '2020-07-15 19:15:06', '2020-07-15 19:15:06'),
(20, 13, 'Ir Made Astawa', 'TURT', 'Menyiapkan Prasyarat\r\n\r\nDalam broadcasting, ada berbagai jenis channel — publik, pribadi, dan kehadiran. Ketika Anda ingin menyiarkan event Anda secara publik, maka channel publik yang seharusnya Anda gunakan.  Sebaliknya, channel pribadi digunakan ketika Anda ingin membatasi notifikasi event ke channel pribadi tertentu.\r\n\r\nDalam use-case kita, kita ingin memberi tahu pengguna ketika mereka mendapat pesan baru. Dan agar memenuhi syarat untuk menerima pemberitahuan broadcast, pengguna harus masuk. Jadi, kita harus menggunakan channel pribadi dalam kasus kita.', '2020-07-16', '03:16:00', '2020-07-15 19:16:00', '2020-07-15 19:16:00'),
(21, 17, 'lestari', 'Kasubag Oprasional', 'Contoh Kajian', '2020-07-17', '06:32:41', '2020-07-16 22:32:41', '2020-07-16 22:32:41'),
(22, 15, 'lestari', 'Sekpri Dirut', 'Test ke sekpri', '2020-07-17', '06:36:21', '2020-07-16 22:36:21', '2020-07-16 22:36:21'),
(23, 15, 'dewi', 'Dirut', 'contoh kajian', '2020-07-17', '06:36:55', '2020-07-16 22:36:55', '2020-07-16 22:36:55'),
(24, 22, 'lestari', 'Sekpri Dirut', 'dewi 123', '2020-07-24', '06:28:17', '2020-07-23 22:28:17', '2020-07-23 22:28:17');

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
(1, 1, 'IT', '2020-07-20 07:51:41', '2020-07-20 07:51:41'),
(2, 9, 'Kasubag UMUM', '2020-07-24 06:27:03', '2020-07-24 06:27:03'),
(3, 5, 'Sekpri Dirut', '2020-07-24 06:28:59', '2020-07-24 06:28:59'),
(13, 4, 'TURT', '2020-07-19 23:56:00', '2020-07-19 23:56:00');

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
(8, '2020_07_15_065852_create_notifications_table', 4),
(9, '2017_08_03_055212_create_auto_numbers', 5),
(10, '2020_07_16_085222_create_surat_id_table', 5),
(11, '2020_07_17_040733_create_suratcodes_table', 6),
(12, '2020_07_17_044515_add_delete_at_to_surats_table', 7);

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
-- Table structure for table `suratcodes`
--

CREATE TABLE `suratcodes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kode_surat` varchar(3) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keterangan` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `suratcodes`
--

INSERT INTO `suratcodes` (`id`, `kode_surat`, `keterangan`, `created_at`, `updated_at`) VALUES
(1, 'B01', '-', '2020-07-16 20:29:52', '2020-07-16 20:29:52'),
(2, 'B02', '-', '2020-07-16 20:37:47', '2020-07-16 20:37:47'),
(4, 'B03', 'keterangan', '2020-07-16 22:23:53', '2020-07-16 22:23:53'),
(5, 'D1', '-', '2020-07-23 22:14:17', '2020-07-23 22:14:17');

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
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `surats`
--

INSERT INTO `surats` (`id`, `user_id`, `no_surat`, `keterangan`, `tujuan`, `prihal`, `file`, `tanggal_surat`, `created_at`, `updated_at`, `deleted_at`) VALUES
(6, 1, 'SPP 123', 'undangan x', 'Kasubag UMUM', 'Surat spp x', 'SPP 123-Surat spp x.jpeg', '2020-07-12', '2020-07-12 06:47:08', '2020-07-16 21:47:19', NULL),
(9, 1, '123', 'Nie Li, one of the strongest Demon Spiritist in his past life standing at the pinnacle of the martial world , however he lost his life during the battle with Sage Emperor and the six deity ranked beast, his soul was then reborn back in time back to when he is still 13. Although he’s the weakest in his class with the lowest talent at only Red soul realm, with the aid of the vast knowledge which he accumulated in his previous life, he trained faster then anyone. Trying to protect the city which in the coming future was being assaulted by beast and ended up being destroyed as well as protecting his lover, friends and family who died by the beast assault. and to destroy the Sacred family whom abandon their duty and betrayed the city in his past life.', 'it', '1233332', '123-1233332.xlsx', '2020-07-14', '2020-07-14 04:35:17', '2020-07-14 05:34:45', NULL),
(10, 1, 'S/07/14/2020', 'Simple Where Clauses\r\n\r\nYou may use the where method on a query builder instance to add where clauses to the query. The most basic call to where requires three arguments. The first argument is the name of the column. The second argument is an operator, which can be any of the database\'s supported operators. Finally, the third argument is the value to evaluate against the column.\r\n\r\nFor example, here is a query that verifies the value of the \"votes\" column is equal to 100:', 'TURT', 'Pembelian PC', 'S/07/14/2020-Pembelian PC.pdf', '2020-07-14', '2020-07-14 06:24:09', '2020-07-14 06:43:48', NULL),
(11, 1, '123', '12333', 'Kasubag UMUM', '123', '123-123.xlsx', '2020-07-16', '2020-07-15 18:14:53', '2020-07-16 20:49:58', '2020-07-16 20:49:58'),
(12, 8, 'S 07/16/2020', 'Permohonan pemebelian alat atk untuk keperluan printing di kantor', 'TURT', 'Pengajuan Pembelian ATK', 'S 07/16/2020-Pengajuan Pembelian ATK.xlsx', '2020-07-16', '2020-07-15 18:40:10', '2020-07-15 18:46:51', NULL),
(13, 8, 'PC 07/16/2020', 'Hari ini, kita akan mengeksplorasi konsep broadcasting dalam web framework Laravel. Ini memungkinkan Anda mengirim pemberitahuan ke sisi klien ketika sesuatu terjadi di sisi server.  Dalam artikel ini, kita akan menggunakan library pihak ketiga Pusher untuk mengirim pemberitahuan ke sisi klien.\r\n\r\nJika Anda pernah ingin mengirim pemberitahuan dari server ke klien ketika sesuatu terjadi pada server di Laravel, Anda mencari fitur broadcasting.\r\n\r\nSebagai contoh, mari kita asumsikan bahwa Anda telah menerapkan aplikasi pengiriman pesan yang memungkinkan pengguna sistem Anda untuk mengirim pesan satu sama lain.  Sekarang, ketika pengguna A mengirim pesan ke pengguna B, Anda ingin memberi tahu pengguna B secara real time. Anda dapat menampilkan popup atau kotak peringatan yang memberi tahu pengguna B tentang pesan baru! \r\n\r\nMerupakan use-case yang sempurna untuk berjalan melalui konsep broadcasting di Laravel, dan itulah yang akan kami terapkan dalam artikel ini.', 'TURT', 'Pembelian PC dan Laptop', 'PC 07/16/2020-Pembelian PC dan Laptop.xlsx', '2020-07-16', '2020-07-15 19:12:08', '2020-07-15 19:16:00', NULL),
(14, 1, 'B03/00004/7/2020', '123', 'Kasubag UMUM', '123', 'B03-123.jpeg', '2020-07-17', '2020-07-16 19:46:55', '2020-07-16 20:50:03', '2020-07-16 20:50:03'),
(15, 1, 'B01/00005/7/2020', 'Test 123', 'Dirut', 'Otomatis', 'B01-Otomatis.jpeg', '2020-07-16', '2020-07-16 22:24:25', '2020-07-16 22:36:55', NULL),
(16, 8, 'B01/00006/7/2020', 'Contoh surat 123 456 789', 'IT', 'Pembelian Masker', 'B01-Pembelian Masker.jpeg', '2020-07-17', '2020-07-16 22:29:41', '2020-07-16 22:29:41', NULL),
(17, 8, 'B01/00007/7/2020', 'Contoh surat 123', 'Kasubag Oprasional', 'Pembelian Masker', 'B01-Pembelian Masker.jpeg', '2020-07-17', '2020-07-16 22:30:29', '2020-07-16 22:32:41', NULL),
(18, 8, 'B01/00100/7/2020', '99', 'IT', '99', 'B01-99.jpeg', '2020-07-17', '2020-07-16 23:02:13', '2020-07-16 23:02:24', '2020-07-16 23:02:24'),
(19, 8, 'B01/00101/7/2020', 'https://bprbangli.cloudmnm.com/index.php?x=apkredit61&id=1169&ap=4https://bprbangli.cloudmnm.com/index.php?x=apkredit61&id=1169&ap=4https://bprbangli.cloudmnm.com/index.php?x=apkredit61&id=1169&ap=4https://bprbangli.cloudmnm.com/index.php?x=apkredit61&id=1169&ap=4https://bprbangli.cloudmnm.com/index.php?x=apkredit61&id=1169&ap=4https://bprbangli.cloudmnm.com/index.php?x=apkredit61&id=1169&ap=4', 'IT', '1233332', 'B01-1233332.jpeg', '2020-07-18', '2020-07-17 08:48:25', '2020-07-17 08:48:25', NULL),
(20, 1, 'B01 -/00001/7/2020', '123', 'Kasubag UMUM', 'Test', 'B01 --Test.txt', '2020-07-31', '2020-07-23 22:18:10', '2020-07-23 22:18:10', NULL),
(21, 1, 'B01 -/00002/7/2020', '123414', 'Kasubag UMUM', '123', 'B01 --123.docx', '2020-07-24', '2020-07-23 22:19:51', '2020-07-23 22:19:51', NULL),
(22, 1, 'B01 -/00001/7/2020', 'percobaan absen 2020 tambah no suart asli', 'Sekpri Dirut', 'prihal surat', 'B01 --prihal surat.bin', '2020-07-01', '2020-07-23 22:24:20', '2020-07-23 22:28:17', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `surat_ids`
--

CREATE TABLE `surat_ids` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kode_id` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `serial` bigint(20) NOT NULL,
  `bulan` bigint(20) NOT NULL,
  `tahun` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `surat_ids`
--

INSERT INTO `surat_ids` (`id`, `kode_id`, `serial`, `bulan`, `tahun`, `created_at`, `updated_at`) VALUES
(16, 'B01', 1, 7, 2020, '2020-07-16 19:37:42', '2020-07-16 19:37:42'),
(17, 'B01', 2, 7, 2020, '2020-07-16 19:37:50', '2020-07-16 19:37:50'),
(18, 'B01', 3, 7, 2020, '2020-07-16 19:38:25', '2020-07-16 19:38:25'),
(19, 'B01', 4, 7, 2020, '2020-07-16 19:38:44', '2020-07-16 19:38:44'),
(20, 'B02', 1, 7, 2020, '2020-07-16 19:38:49', '2020-07-16 19:38:49'),
(21, 'B02', 2, 7, 2020, '2020-07-16 19:38:54', '2020-07-16 19:38:54'),
(22, 'B02', 3, 7, 2020, '2020-07-16 19:39:04', '2020-07-16 19:39:04'),
(23, 'B03', 1, 7, 2020, '2020-07-16 19:39:08', '2020-07-16 19:39:08'),
(24, 'B03', 1, 7, 2021, '2020-07-16 19:41:50', '2020-07-16 19:41:50'),
(25, 'B03', 1, 7, 2021, '2020-07-16 19:42:09', '2020-07-16 19:42:09'),
(26, 'B03', 1, 7, 2021, '2020-07-16 19:42:22', '2020-07-16 19:42:22'),
(27, 'B03', 1, 7, 2021, '2020-07-16 19:42:49', '2020-07-16 19:42:49'),
(28, 'B03', 2, 7, 2021, '2020-07-16 19:43:24', '2020-07-16 19:43:24'),
(29, 'B03', 3, 7, 2021, '2020-07-16 19:43:35', '2020-07-16 19:43:35'),
(30, 'B03', 1, 7, 2020, '2020-07-16 19:44:10', '2020-07-16 19:44:10'),
(31, 'B03', 2, 7, 2020, '2020-07-16 19:44:19', '2020-07-16 19:44:19'),
(32, 'B03', 3, 7, 2020, '2020-07-16 19:46:04', '2020-07-16 19:46:04'),
(33, 'B03', 4, 7, 2020, '2020-07-16 19:46:55', '2020-07-16 19:46:55'),
(34, 'B01', 5, 7, 2020, '2020-07-16 22:24:25', '2020-07-16 22:24:25'),
(35, 'B01', 6, 7, 2020, '2020-07-16 22:29:41', '2020-07-16 22:29:41'),
(36, 'B01', 99, 7, 2020, '2020-07-16 22:30:29', '2020-07-16 22:30:29'),
(37, 'B01', 100, 7, 2020, '2020-07-16 23:02:12', '2020-07-16 23:02:12'),
(38, 'B01', 101, 7, 2020, '2020-07-17 08:48:25', '2020-07-17 08:48:25'),
(39, 'B01', 1, 7, 2020, '2020-07-23 22:18:10', '2020-07-23 22:18:10'),
(40, 'B01', 2, 7, 2020, '2020-07-23 22:19:51', '2020-07-23 22:19:51'),
(41, 'B01 -', 1, 7, 2020, '2020-07-23 22:24:20', '2020-07-23 22:24:20');

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
(4, 'arta', 'arta@bankpasar.co.id', 'user', NULL, '$2y$10$1IEbUInFCNsBjsXixfE37.ngoVaQDiYmmHamgUwcmCN1DidD7Zy0O', NULL, '2020-07-12 07:05:09', '2020-07-12 07:05:09'),
(5, 'dewi', 'dewi@bankpasar.co.id', 'user', NULL, '$2y$10$M1t.yO8dqGka2DtHRDuJPuCCyYDEYHHK2xhskgNZAAdZAgUkZVy3.', NULL, '2020-07-14 06:42:00', '2020-07-14 06:42:07'),
(6, 'Ir Made Astawa', 'astawa@bankpasar.co.id', 'user', NULL, '$2y$10$8b.UCIWtWYja8rb66AoebeYGOT6N.UW5i6FOF2cR1YCkh/mLh3mme', NULL, '2020-07-14 06:42:31', '2020-07-14 06:42:31'),
(7, 'putu', 'putu@bankpasar.co.id', 'user', NULL, '$2y$10$f.Qezz7VBogSClkpdLknBOOPuDJ9e/vLOwCwjhBMdyKq8h/7Y9fDm', NULL, '2020-07-14 06:47:02', '2020-07-14 06:47:02'),
(8, 'rusi', 'rusi@bankpasar.co.id', 'admin', NULL, '$2y$10$q9AOwiaQQhd8Kg44Zh5vGenyO3L4L8BW4oUhYWJwI9hpljjJ/.Ram', NULL, '2020-07-15 18:37:58', '2020-07-16 00:50:38'),
(9, 'lestari', 'lestari@bankpasar.co.id', 'user', NULL, '$2y$10$Y9rfPs.Rsr7VUys0L478CuuNZ1d2gwTb87eBzL/sttMFmktwDrg7S', NULL, '2020-07-15 18:41:10', '2020-07-15 18:41:10'),
(10, 'Test', 'test@gmail.com', 'user', NULL, '$2y$10$cVFyDwEPS8/OA/bAPucaUO2EG0kzagRLqjIL7BpeeGNKJVWXL7R2u', NULL, '2020-07-19 23:23:52', '2020-07-19 23:23:52');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `auto_numbers`
--
ALTER TABLE `auto_numbers`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `suratcodes`
--
ALTER TABLE `suratcodes`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `kode_surat` (`kode_surat`);

--
-- Indexes for table `surats`
--
ALTER TABLE `surats`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `surat_ids`
--
ALTER TABLE `surat_ids`
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
-- AUTO_INCREMENT for table `auto_numbers`
--
ALTER TABLE `auto_numbers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `disposisis`
--
ALTER TABLE `disposisis`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `suratcodes`
--
ALTER TABLE `suratcodes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `surats`
--
ALTER TABLE `surats`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `surat_ids`
--
ALTER TABLE `surat_ids`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
