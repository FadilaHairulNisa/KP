-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 18, 2023 at 02:12 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_industri`
--

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
(33, '2023_05_26_033149_create_status_produksis_table', 2),
(51, '2014_10_12_100000_create_password_resets_table', 3),
(52, '2019_08_19_000000_create_failed_jobs_table', 3),
(53, '2019_12_14_000001_create_personal_access_tokens_table', 3),
(54, '2023_06_05_062818_create_tb_kab_kota_table', 3),
(55, '2023_06_05_063120_create_tb_kec_table', 3),
(56, '2023_06_05_063218_create_tb_desa_table', 3),
(57, '2023_06_10_221831_create_tb_status_produksi', 3);

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
-- Table structure for table `status_produksi`
--

CREATE TABLE `status_produksi` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_kab_kota` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_kec` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_desa` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_perusahaan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `produk` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_industri` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tahun_komersil` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tb_desa`
--

CREATE TABLE `tb_desa` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kode_desa` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_desa` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tb_desa`
--

INSERT INTO `tb_desa` (`id`, `kode_desa`, `nama_desa`) VALUES
(1, 'D007', 'Dongkala'),
(2, 'D030', 'Kabawokole'),
(3, 'D023', 'Kancinaa');

-- --------------------------------------------------------

--
-- Table structure for table `tb_kab_kota`
--

CREATE TABLE `tb_kab_kota` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kode_kab` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_kab` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tb_kab_kota`
--

INSERT INTO `tb_kab_kota` (`id`, `kode_kab`, `nama_kab`) VALUES
(1, 'K01', 'Buton'),
(2, 'K02', 'Muna');

-- --------------------------------------------------------

--
-- Table structure for table `tb_kec`
--

CREATE TABLE `tb_kec` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kode_kec` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_kec` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tb_kec`
--

INSERT INTO `tb_kec` (`id`, `kode_kec`, `nama_kec`) VALUES
(1, 'KC060', 'Pasar Wajo'),
(2, 'KC022', 'Marobo'),
(3, 'KC080', 'Napabalano'),
(4, 'KC073', 'Batalaiworu');

-- --------------------------------------------------------

--
-- Table structure for table `tb_status_produksi`
--

CREATE TABLE `tb_status_produksi` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kab_kota_id` bigint(20) UNSIGNED NOT NULL,
  `kec_id` bigint(20) UNSIGNED NOT NULL,
  `desa_id` bigint(20) UNSIGNED NOT NULL,
  `nama_kab_kota` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_kec` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_desa` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_perusahaan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `produk` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_industri` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tahun_komersil` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tb_status_produksi`
--

INSERT INTO `tb_status_produksi` (`id`, `kab_kota_id`, `kec_id`, `desa_id`, `nama_kab_kota`, `nama_kec`, `nama_desa`, `nama_perusahaan`, `alamat`, `produk`, `jenis_industri`, `tahun_komersil`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 1, 'Buton', 'Pasar Wajo', 'DOngkala', 'PT. Triko Bina Nusantara', 'Dongkala', 'Ikan Beku', 'Industri Pengolahan dan Pengawetan Ikan dan Biota Air', '07-1997', NULL, NULL);

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
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `status_produksi`
--
ALTER TABLE `status_produksi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_desa`
--
ALTER TABLE `tb_desa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_kab_kota`
--
ALTER TABLE `tb_kab_kota`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_kec`
--
ALTER TABLE `tb_kec`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_status_produksi`
--
ALTER TABLE `tb_status_produksi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tb_status_produksi_kab_kota_id_foreign` (`kab_kota_id`),
  ADD KEY `tb_status_produksi_kec_id_foreign` (`kec_id`),
  ADD KEY `tb_status_produksi_desa_id_foreign` (`desa_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `status_produksi`
--
ALTER TABLE `status_produksi`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_desa`
--
ALTER TABLE `tb_desa`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_kab_kota`
--
ALTER TABLE `tb_kab_kota`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_kec`
--
ALTER TABLE `tb_kec`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tb_status_produksi`
--
ALTER TABLE `tb_status_produksi`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_status_produksi`
--
ALTER TABLE `tb_status_produksi`
  ADD CONSTRAINT `tb_status_produksi_desa_id_foreign` FOREIGN KEY (`desa_id`) REFERENCES `tb_desa` (`id`),
  ADD CONSTRAINT `tb_status_produksi_kab_kota_id_foreign` FOREIGN KEY (`kab_kota_id`) REFERENCES `tb_kab_kota` (`id`),
  ADD CONSTRAINT `tb_status_produksi_kec_id_foreign` FOREIGN KEY (`kec_id`) REFERENCES `tb_kec` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
