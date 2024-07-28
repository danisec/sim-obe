-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 18, 2024 at 01:14 AM
-- Server version: 8.0.33
-- PHP Version: 8.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sim_obe`
--

-- --------------------------------------------------------

--
-- Table structure for table `capaian_pembelajaran_lulusan`
--

CREATE TABLE `capaian_pembelajaran_lulusan` (
  `id_cpl` bigint UNSIGNED NOT NULL,
  `kode_cpl` varchar(13) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi_cpl` varchar(1000) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `capaian_pembelajaran_lulusan`
--

INSERT INTO `capaian_pembelajaran_lulusan` (`id_cpl`, `kode_cpl`, `deskripsi_cpl`, `created_at`, `updated_at`) VALUES
(4, '23-MKU-CPL-01', 'Bertakwa kepada Tuhan Yang Maha Esa, taat hukum dan disiplin dalam kehidupan bermasyarakat dan bernegara', '2024-07-14 15:01:01', '2024-07-14 15:01:01'),
(5, '23-MKU-CPL-02', 'Menjunjung tinggi nilai kemanusiaan, nasionalisme, kebangsaan, kepedulian terhadap masyarakat dan lingkungan, serta menghargai keanekaragaman budaya, pandangan, agama dan kepercayaan serta pendapat atau temuan orisinal orang lain', '2024-07-14 15:14:32', '2024-07-14 15:14:32'),
(6, '23-MKU-CPL-03', 'Menginternalisasi semangat kemandirian, kejuangan, dan kewirausahaan serta mampu menerapkan nilai-nilai Jaya sebagai university value', '2024-07-14 15:14:32', '2024-07-14 15:14:32'),
(7, '23-MKU-CPL-04', 'Menerapkan pemikiran logis, kritis, sistematis, dan inovatif dalam konteks pengembangan atau implementasi ilmu pengetahuan dan teknologi yang memperhatikan dan menerapkan nilai humaniora yang sesuai dengan bidang keahliannya serta menunjukkan kinerja mandiri, bermutu, dan terukur', '2024-07-14 15:14:32', '2024-07-14 15:14:32');

-- --------------------------------------------------------

--
-- Table structure for table `capaian_pembelajaran_mata_kuliah`
--

CREATE TABLE `capaian_pembelajaran_mata_kuliah` (
  `id_cpmk` bigint UNSIGNED NOT NULL,
  `id_cpl` bigint UNSIGNED NOT NULL,
  `kode_cpmk` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi_cpmk` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `capaian_pembelajaran_mata_kuliah`
--

INSERT INTO `capaian_pembelajaran_mata_kuliah` (`id_cpmk`, `id_cpl`, `kode_cpmk`, `deskripsi_cpmk`, `created_at`, `updated_at`) VALUES
(4, 4, '23-MKU-CPMK-011', 'Mampu menginternalisasi nilai-nilai ketakwaan kepada Tuhan Yang Maha Esa', '2024-07-14 15:01:01', '2024-07-14 15:01:01'),
(5, 4, '23-MKU-CPMK-012', 'Mampu menjalankan kehidupan sosial masyarakat yang berdasarkan aturan dan norma hukum yang berlaku', '2024-07-14 15:01:01', '2024-07-14 15:01:01'),
(6, 4, '23-MKU-CPMK-013', 'Mampu menerapkan kedisiplinan dalam kehidupan bermasyarakat dan bernegara', '2024-07-14 15:04:11', '2024-07-14 15:04:11'),
(7, 5, '23-MKU-CPMK-021', 'Mampu menginternalisasi nilai kemanusiaan, nasionalisme dan kebangsaan', '2024-07-14 15:14:32', '2024-07-14 15:14:32'),
(8, 5, '23-MKU-CPMK-022', 'Mampu menginternalisasi sikap peduli kepada masyarakat dan lingkungannya', '2024-07-14 15:14:32', '2024-07-14 15:14:32'),
(9, 5, '23-MKU-CPMK-023', 'Mampu menerapkan sikap menghargai keanekaragaman budaya, pandangan, agama dan kepercayaan serta pendapat atau temuan orisinal orang lain', '2024-07-14 15:14:32', '2024-07-14 15:14:32'),
(10, 6, '23-MKU-CPMK-031', 'Mampu menerapkan semangat kemandirian, kejuangan, dan kewirausahaan', '2024-07-14 15:14:32', '2024-07-14 15:14:32'),
(11, 6, '23-MKU-CPMK-032', 'Mampu menerapkan nilai-nilai Jaya sebagai university value', '2024-07-14 15:14:32', '2024-07-14 15:14:32'),
(12, 7, '23-MKU-CPMK-041', 'Mampu menerapkan pemikiran logis, kritis, sistematis, dan inovatif dalam konteks pengembangan atau  implementasi ilmu pengetahuan dan teknologi yang memperhatikan dan menerapkan nilai humaniora yang sesuai dengan bidang keahliannya', '2024-07-14 15:14:32', '2024-07-14 15:14:32'),
(13, 7, '23-MKU-CPMK-042', 'Mampu menunjukkan kinerja mandiri, bermutu, dan terukur', '2024-07-14 15:14:32', '2024-07-14 15:14:32');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `hasil_pembelajaran`
--

CREATE TABLE `hasil_pembelajaran` (
  `id_hasil_pembelajaran` bigint UNSIGNED NOT NULL,
  `kode_mata_kuliah` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_mata_kuliah` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `hasil_pembelajaran`
--

INSERT INTO `hasil_pembelajaran` (`id_hasil_pembelajaran`, `kode_mata_kuliah`, `nama_mata_kuliah`, `created_at`, `updated_at`) VALUES
(1, 'MKU101', 'Agama', '2024-07-15 14:19:48', '2024-07-15 14:19:48'),
(2, 'MKU102', 'Pancasila dan Kewarganegaraan', '2024-07-15 14:20:43', '2024-07-15 14:20:43'),
(3, 'MKU103', 'Bahasa Indonesia', '2024-07-15 17:51:34', '2024-07-15 17:51:34'),
(4, 'MKU104', 'Pembangunan Berkelanjutan', '2024-07-15 17:51:44', '2024-07-15 17:51:44'),
(5, 'MKU105', 'Wawasan Kewirausahaan', '2024-07-15 17:51:54', '2024-07-15 17:51:54'),
(6, 'MKU106', 'Dasar Logika Matematika', '2024-07-15 17:52:02', '2024-07-15 17:52:02'),
(7, 'MKU201', 'English for Specific Purposes', '2024-07-15 17:52:12', '2024-07-15 17:52:12');

-- --------------------------------------------------------

--
-- Table structure for table `mapping_cpl`
--

CREATE TABLE `mapping_cpl` (
  `id_mapping_cpl` bigint UNSIGNED NOT NULL,
  `kode_mata_kuliah` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_mata_kuliah` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kode_cpl` varchar(13) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kode_cpmk` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kode_scpmk` varchar(19) COLLATE utf8mb4_unicode_ci NOT NULL,
  `partisipasi` double DEFAULT NULL,
  `proyek` double DEFAULT NULL,
  `tugas` double DEFAULT NULL,
  `kuis` double DEFAULT NULL,
  `evaluasi_tengah_semester` double DEFAULT NULL,
  `evaluasi_akhir_semester` double DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `mapping_cpl`
--

INSERT INTO `mapping_cpl` (`id_mapping_cpl`, `kode_mata_kuliah`, `nama_mata_kuliah`, `kode_cpl`, `kode_cpmk`, `kode_scpmk`, `partisipasi`, `proyek`, `tugas`, `kuis`, `evaluasi_tengah_semester`, `evaluasi_akhir_semester`, `created_at`, `updated_at`) VALUES
(2, 'MKU101', 'Agama', '23-MKU-CPL-01', '23-MKU-CPMK-011', '23-MKU-SUBCPMK-0111', NULL, NULL, 30, 30, 15, 25, '2024-07-15 06:55:16', '2024-07-15 06:55:16'),
(3, 'MKU102', 'Pancasila dan Kewarganegaraan', '23-MKU-CPL-02', '23-MKU-CPMK-021', '23-MKU-SUBCPMK-0211', NULL, NULL, 30, 30, 20, 20, '2024-07-15 09:50:25', '2024-07-15 09:50:25'),
(4, 'MKU103', 'Bahasa Indonesia', '23-MKU-CPL-02', '23-MKU-CPMK-022', '23-MKU-SUBCPMK-0221', NULL, NULL, 30, 30, 15, 25, '2024-07-15 17:48:11', '2024-07-15 17:48:11'),
(5, 'MKU104', 'Pembangunan Berkelanjutan', '23-MKU-CPL-02', '23-MKU-CPMK-023', '23-MKU-SUBCPMK-0231', NULL, NULL, 30, 30, 15, 25, '2024-07-15 17:48:54', '2024-07-15 17:48:54'),
(6, 'MKU105', 'Wawasan Kewirausahaan', '23-MKU-CPL-02', '23-MKU-CPMK-022', '23-MKU-SUBCPMK-0221', NULL, NULL, 30, 30, 25, 15, '2024-07-15 17:49:23', '2024-07-15 17:49:23'),
(7, 'MKU106', 'Dasar Logika Matematika', '23-MKU-CPL-04', '23-MKU-CPMK-041', '23-MKU-SUBCPMK-0411', NULL, NULL, 15, 25, 30, 30, '2024-07-15 17:49:55', '2024-07-15 17:49:55'),
(8, 'MKU201', 'English for Specific Purposes', '23-MKU-CPL-04', '23-MKU-CPMK-042', '23-MKU-SUBCPMK-0423', NULL, NULL, 30, 25, 30, 15, '2024-07-15 17:51:12', '2024-07-15 17:51:12');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(10, '2024_07_14_124713_create_capaian_pembelajaran_lulusan_table', 2),
(11, '2024_07_14_125701_create_capaian_pembelajaran_mata_kuliah_table', 3),
(12, '2024_07_14_125819_create_sub_capaian_pembelajaran_mata_kuliah_table', 4),
(13, '2024_07_14_130755_create_fk_capaian_pembelajaran_mata_kuliah_table', 5),
(14, '2024_07_14_184047_create_fk_sub_capaian_pembelajaran_mata_kuliah', 6),
(15, '2024_07_14_230031_create_mapping_cpl_table', 7),
(16, '2024_07_15_043757_create_fk_mapping_cpl_table', 8),
(17, '2024_07_15_065726_create_hasil_pembelajaran_table', 9),
(18, '2024_07_15_070227_create_nilai_hasil_pembelajaran_table', 10),
(19, '2024_07_15_070407_create_fk_nilai_hasil_pembelajaran_table', 10),
(20, '2024_07_15_220808_create_total_hasil_pembelajaran_table', 11),
(21, '2024_07_15_221148_create_fk_total_hasil_pembelajaran_table', 12),
(22, '2024_07_16_011709_create_score_cpl_table', 13);

-- --------------------------------------------------------

--
-- Table structure for table `nilai_hasil_pembelajaran`
--

CREATE TABLE `nilai_hasil_pembelajaran` (
  `id_nilai_hasil_pembelajaran` bigint UNSIGNED NOT NULL,
  `id_hasil_pembelajaran` bigint UNSIGNED NOT NULL,
  `partisipasi` double DEFAULT NULL,
  `proyek` double DEFAULT NULL,
  `tugas` double DEFAULT NULL,
  `kuis` double DEFAULT NULL,
  `evaluasi_tengah_semester` double DEFAULT NULL,
  `evaluasi_akhir_semester` double DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `nilai_hasil_pembelajaran`
--

INSERT INTO `nilai_hasil_pembelajaran` (`id_nilai_hasil_pembelajaran`, `id_hasil_pembelajaran`, `partisipasi`, `proyek`, `tugas`, `kuis`, `evaluasi_tengah_semester`, `evaluasi_akhir_semester`, `created_at`, `updated_at`) VALUES
(1, 1, NULL, NULL, 55, 83.33, 75, 30, '2024-07-15 14:19:48', '2024-07-15 14:19:48'),
(2, 1, NULL, NULL, 100, 91.67, 90, 75, '2024-07-15 14:19:48', '2024-07-15 14:19:48'),
(3, 1, NULL, NULL, 85, 91.67, 85, 57, '2024-07-15 14:19:48', '2024-07-15 14:19:48'),
(4, 1, NULL, NULL, 100, 91.67, 80, 95, '2024-07-15 14:19:48', '2024-07-15 14:19:48'),
(5, 1, NULL, NULL, 85, 91.67, 95, 80, '2024-07-15 14:19:48', '2024-07-15 14:19:48'),
(6, 2, NULL, NULL, 75, 83.33, 55, 30, '2024-07-15 14:20:43', '2024-07-15 14:20:43'),
(7, 2, NULL, NULL, 90, 91.67, 100, 75, '2024-07-15 14:20:43', '2024-07-15 14:20:43'),
(8, 2, NULL, NULL, 85, 91.67, 85, 57, '2024-07-15 14:20:43', '2024-07-15 14:20:43'),
(9, 2, NULL, NULL, 80, 91.67, 100, 95, '2024-07-15 14:20:43', '2024-07-15 14:20:43'),
(10, 2, NULL, NULL, 95, 91.67, 85, 80, '2024-07-15 14:20:43', '2024-07-15 14:20:43'),
(11, 3, NULL, NULL, 75, 83.33, 55, 30, '2024-07-15 17:51:34', '2024-07-15 17:51:34'),
(12, 3, NULL, NULL, 90, 91.67, 100, 75, '2024-07-15 17:51:34', '2024-07-15 17:51:34'),
(13, 3, NULL, NULL, 85, 91.67, 85, 57, '2024-07-15 17:51:34', '2024-07-15 17:51:34'),
(14, 3, NULL, NULL, 80, 91.67, 100, 95, '2024-07-15 17:51:34', '2024-07-15 17:51:34'),
(15, 3, NULL, NULL, 95, 91.67, 85, 80, '2024-07-15 17:51:34', '2024-07-15 17:51:34'),
(16, 4, NULL, NULL, 75, 83.33, 55, 30, '2024-07-15 17:51:44', '2024-07-15 17:51:44'),
(17, 4, NULL, NULL, 90, 91.67, 100, 75, '2024-07-15 17:51:44', '2024-07-15 17:51:44'),
(18, 4, NULL, NULL, 85, 91.67, 85, 57, '2024-07-15 17:51:44', '2024-07-15 17:51:44'),
(19, 4, NULL, NULL, 80, 91.67, 100, 95, '2024-07-15 17:51:44', '2024-07-15 17:51:44'),
(20, 4, NULL, NULL, 95, 91.67, 85, 80, '2024-07-15 17:51:44', '2024-07-15 17:51:44'),
(21, 5, NULL, NULL, 75, 83.33, 55, 30, '2024-07-15 17:51:54', '2024-07-15 17:51:54'),
(22, 5, NULL, NULL, 90, 91.67, 100, 75, '2024-07-15 17:51:54', '2024-07-15 17:51:54'),
(23, 5, NULL, NULL, 85, 91.67, 85, 57, '2024-07-15 17:51:54', '2024-07-15 17:51:54'),
(24, 5, NULL, NULL, 80, 91.67, 100, 95, '2024-07-15 17:51:54', '2024-07-15 17:51:54'),
(25, 5, NULL, NULL, 95, 91.67, 85, 80, '2024-07-15 17:51:54', '2024-07-15 17:51:54'),
(26, 6, NULL, NULL, 75, 83.33, 55, 30, '2024-07-15 17:52:02', '2024-07-15 17:52:02'),
(27, 6, NULL, NULL, 90, 91.67, 100, 75, '2024-07-15 17:52:02', '2024-07-15 17:52:02'),
(28, 6, NULL, NULL, 85, 91.67, 85, 57, '2024-07-15 17:52:02', '2024-07-15 17:52:02'),
(29, 6, NULL, NULL, 80, 91.67, 100, 95, '2024-07-15 17:52:02', '2024-07-15 17:52:02'),
(30, 6, NULL, NULL, 95, 91.67, 85, 80, '2024-07-15 17:52:02', '2024-07-15 17:52:02'),
(31, 7, NULL, NULL, 75, 83.33, 55, 30, '2024-07-15 17:52:12', '2024-07-15 17:52:12'),
(32, 7, NULL, NULL, 90, 91.67, 100, 75, '2024-07-15 17:52:12', '2024-07-15 17:52:12'),
(33, 7, NULL, NULL, 85, 91.67, 85, 57, '2024-07-15 17:52:12', '2024-07-15 17:52:12'),
(34, 7, NULL, NULL, 80, 91.67, 100, 95, '2024-07-15 17:52:12', '2024-07-15 17:52:12'),
(35, 7, NULL, NULL, 95, 91.67, 85, 80, '2024-07-15 17:52:12', '2024-07-15 17:52:12');

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `score_cpl`
--

CREATE TABLE `score_cpl` (
  `id_score_cpl` bigint UNSIGNED NOT NULL,
  `column` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `score` decimal(5,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `score_cpl`
--

INSERT INTO `score_cpl` (`id_score_cpl`, `column`, `score`, `created_at`, `updated_at`) VALUES
(1, '23-MKU-CPL-01', 82.54, '2024-07-17 17:25:02', '2024-07-17 17:25:02'),
(2, '23-MKU-CPL-02', 82.32, '2024-07-17 17:25:02', '2024-07-17 17:25:02'),
(3, '23-MKU-CPL-03', 82.31, '2024-07-17 17:25:02', '2024-07-17 17:25:02'),
(4, '23-MKU-CPL-04', 82.26, '2024-07-17 17:25:02', '2024-07-17 17:25:02');

-- --------------------------------------------------------

--
-- Table structure for table `sub_capaian_pembelajaran_mata_kuliah`
--

CREATE TABLE `sub_capaian_pembelajaran_mata_kuliah` (
  `id_scpmk` bigint UNSIGNED NOT NULL,
  `id_cpmk` bigint UNSIGNED NOT NULL,
  `kode_scpmk` varchar(19) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi_scpmk` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sub_capaian_pembelajaran_mata_kuliah`
--

INSERT INTO `sub_capaian_pembelajaran_mata_kuliah` (`id_scpmk`, `id_cpmk`, `kode_scpmk`, `deskripsi_scpmk`, `created_at`, `updated_at`) VALUES
(4, 4, '23-MKU-SUBCPMK-0111', 'Mampu menunjukkan sikap ketakwaan kepada Tuhan Yang Maha Esa', '2024-07-14 15:01:01', '2024-07-14 15:01:01'),
(5, 5, '23-MKU-SUBCPMK-0121', 'Mampu menunjukkan sikap inklusif (sikap yang mencerminkan penerimaan dan pengakuan terhadap perbedaan individu dalam masyarakat atau lingkungan tertentu / tanpa diskriminasi)', '2024-07-14 15:01:01', '2024-07-14 15:01:01'),
(6, 5, '23-MKU-SUBCPMK-0122', 'Mampu mematuhi semua aturan dan norma hukum yang berlaku', '2024-07-14 15:04:11', '2024-07-14 15:04:11'),
(7, 6, '23-MKU-SUBCPMK-0131', 'Mampu menunjukkan sikap disiplin dalam kehidupan bermasyarakat dan bernegara', '2024-07-14 15:04:11', '2024-07-14 15:04:11'),
(8, 7, '23-MKU-SUBCPMK-0211', 'Mampu menunjukkan peran sebagai warga negara yang bangga dan cinta tanah air, memiliki jiwa nasionalisme serta rasa tanggung jawab', '2024-07-14 15:14:32', '2024-07-14 15:14:32'),
(9, 8, '23-MKU-SUBCPMK-0221', 'Mampu menunjukkan sikap peduli kepada masyarakat dan lingkungannya', '2024-07-14 15:14:32', '2024-07-14 15:14:32'),
(10, 9, '23-MKU-SUBCPMK-0231', 'Mampu menunjukkan sikap menghargai antar sesama tanpa membedakan keanekaragaman budaya, pandangan, agama dan kepercayaan, serta pendapat atau temuan orisinal orang lain', '2024-07-14 15:14:32', '2024-07-14 15:14:32'),
(11, 10, '23-MKU-SUBCPMK-0311', 'Mampu menunjukkan sikap mandiri, kejuangan dan kewirausahaan', '2024-07-14 15:14:32', '2024-07-14 15:14:32'),
(12, 11, '23-MKU-SUBCPMK-0321', 'Mampu menunjukkan sikap integritas, adil, komit, motivasi, disiplin serta mengembangkan sikap mawas diri dan proaktif', '2024-07-14 15:14:32', '2024-07-14 15:14:32'),
(13, 12, '23-MKU-SUBCPMK-0411', 'Mampu menerapkan pemikiran logis, kritis, sistematis, dan inovatif dalam konteks pengembangan atau implementasi ilmu dan teknologi yang memperhatikan dan menerapkan nilai humaniora yang relevan', '2024-07-14 15:14:32', '2024-07-14 15:14:32'),
(14, 13, '23-MKU-SUBCPMK-0421', 'Mampu merencanakan, memantau, menyelesaikan, dan mengevaluasi tugas-tugas dalam aktivitas yang terencana', '2024-07-14 15:14:33', '2024-07-14 15:14:33'),
(15, 13, '23-MKU-SUBCPMK-0422', 'Mampu mengidentifikasi, merumuskan, menganalisis, mengembangkan alternatif penyelesaian, dan menyelesaikan masalah dalam aktivitas yang terencana', '2024-07-14 15:14:33', '2024-07-14 15:14:33'),
(16, 13, '23-MKU-SUBCPMK-0423', 'Mampu menyusun deskripsi saintifik hasil kajian implikasi pengembangan/implementasi ilmu dan teknologi dalam bentuk poster, laporan, artikel atau karya ilmiah lainnya', '2024-07-14 15:14:33', '2024-07-14 15:14:33'),
(17, 13, '23-MKU-SUBCPMK-0424', 'Menguasai konsep teoritis matematika, sains dan/atau material serta teknologi informasi secara umum untuk memperoleh pemahaman yang komprehensif tentang prinsip dasar suatu keilmuan', '2024-07-14 15:14:33', '2024-07-14 15:14:33');

-- --------------------------------------------------------

--
-- Table structure for table `total_hasil_pembelajaran`
--

CREATE TABLE `total_hasil_pembelajaran` (
  `id_total_hasil_pembelajaran` bigint UNSIGNED NOT NULL,
  `id_hasil_pembelajaran` bigint UNSIGNED NOT NULL,
  `total` double NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `total_hasil_pembelajaran`
--

INSERT INTO `total_hasil_pembelajaran` (`id_total_hasil_pembelajaran`, `id_hasil_pembelajaran`, `total`, `created_at`, `updated_at`) VALUES
(1, 1, 8210.06, '2024-07-15 15:24:42', '2024-07-15 15:24:42'),
(2, 2, 8298.06, '2024-07-15 15:24:42', '2024-07-15 15:24:42'),
(3, 3, 8210.06, '2024-07-15 17:55:14', '2024-07-15 17:55:14'),
(4, 4, 8210.06, '2024-07-15 17:55:14', '2024-07-15 17:55:14'),
(5, 5, 8386.06, '2024-07-15 17:55:14', '2024-07-15 17:55:14'),
(6, 6, 8097.05, '2024-07-15 17:55:14', '2024-07-15 17:55:14'),
(7, 7, 8361.05, '2024-07-15 17:55:14', '2024-07-15 17:55:14');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `fullname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fullname`, `username`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(2, 'admin', 'admin', 'admin@gmail.com', NULL, '$2y$10$ngAoXyn07lFpVN2jRcbK..o2cIj51QlKa72i0f23/noeLtzr6LhDi', NULL, '2024-07-16 16:37:25', '2024-07-16 16:37:25');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `capaian_pembelajaran_lulusan`
--
ALTER TABLE `capaian_pembelajaran_lulusan`
  ADD PRIMARY KEY (`id_cpl`),
  ADD UNIQUE KEY `capaian_pembelajaran_lulusan_kode_cpl_unique` (`kode_cpl`);

--
-- Indexes for table `capaian_pembelajaran_mata_kuliah`
--
ALTER TABLE `capaian_pembelajaran_mata_kuliah`
  ADD PRIMARY KEY (`id_cpmk`),
  ADD UNIQUE KEY `capaian_pembelajaran_mata_kuliah_kode_cpmk_unique` (`kode_cpmk`),
  ADD KEY `fk_id_cpl_id_cpl` (`id_cpl`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `hasil_pembelajaran`
--
ALTER TABLE `hasil_pembelajaran`
  ADD PRIMARY KEY (`id_hasil_pembelajaran`),
  ADD KEY `kode_mata_kuliah` (`kode_mata_kuliah`,`nama_mata_kuliah`),
  ADD KEY `fk_nama_mata_kuliah_mapping_cpl` (`nama_mata_kuliah`);

--
-- Indexes for table `mapping_cpl`
--
ALTER TABLE `mapping_cpl`
  ADD PRIMARY KEY (`id_mapping_cpl`),
  ADD KEY `fk_kode_cpl_kode_cpl` (`kode_cpl`),
  ADD KEY `fk_kode_cpmk_kode_cpmk` (`kode_cpmk`),
  ADD KEY `fk_kode_scpmk_kode_scpmk` (`kode_scpmk`),
  ADD KEY `kode_mata_kuliah` (`kode_mata_kuliah`,`nama_mata_kuliah`),
  ADD KEY `nama_mata_kuliah` (`nama_mata_kuliah`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nilai_hasil_pembelajaran`
--
ALTER TABLE `nilai_hasil_pembelajaran`
  ADD PRIMARY KEY (`id_nilai_hasil_pembelajaran`),
  ADD KEY `fk_id_hasil_pembelajaran_id_hasil_pembelajaran` (`id_hasil_pembelajaran`);

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
-- Indexes for table `score_cpl`
--
ALTER TABLE `score_cpl`
  ADD PRIMARY KEY (`id_score_cpl`);

--
-- Indexes for table `sub_capaian_pembelajaran_mata_kuliah`
--
ALTER TABLE `sub_capaian_pembelajaran_mata_kuliah`
  ADD PRIMARY KEY (`id_scpmk`),
  ADD UNIQUE KEY `sub_capaian_pembelajaran_mata_kuliah_kode_scpmk_unique` (`kode_scpmk`),
  ADD KEY `fk_id_cpmk_id_cpmk` (`id_cpmk`);

--
-- Indexes for table `total_hasil_pembelajaran`
--
ALTER TABLE `total_hasil_pembelajaran`
  ADD PRIMARY KEY (`id_total_hasil_pembelajaran`),
  ADD KEY `fk_id_hasil_pembelajaran_hasil_pembelajaran` (`id_hasil_pembelajaran`);

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
-- AUTO_INCREMENT for table `capaian_pembelajaran_lulusan`
--
ALTER TABLE `capaian_pembelajaran_lulusan`
  MODIFY `id_cpl` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `capaian_pembelajaran_mata_kuliah`
--
ALTER TABLE `capaian_pembelajaran_mata_kuliah`
  MODIFY `id_cpmk` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `hasil_pembelajaran`
--
ALTER TABLE `hasil_pembelajaran`
  MODIFY `id_hasil_pembelajaran` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `mapping_cpl`
--
ALTER TABLE `mapping_cpl`
  MODIFY `id_mapping_cpl` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `nilai_hasil_pembelajaran`
--
ALTER TABLE `nilai_hasil_pembelajaran`
  MODIFY `id_nilai_hasil_pembelajaran` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `score_cpl`
--
ALTER TABLE `score_cpl`
  MODIFY `id_score_cpl` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `sub_capaian_pembelajaran_mata_kuliah`
--
ALTER TABLE `sub_capaian_pembelajaran_mata_kuliah`
  MODIFY `id_scpmk` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `total_hasil_pembelajaran`
--
ALTER TABLE `total_hasil_pembelajaran`
  MODIFY `id_total_hasil_pembelajaran` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `capaian_pembelajaran_mata_kuliah`
--
ALTER TABLE `capaian_pembelajaran_mata_kuliah`
  ADD CONSTRAINT `fk_id_cpl_id_cpl` FOREIGN KEY (`id_cpl`) REFERENCES `capaian_pembelajaran_lulusan` (`id_cpl`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `hasil_pembelajaran`
--
ALTER TABLE `hasil_pembelajaran`
  ADD CONSTRAINT `fk_kode_mata_kuliah_mapping_cpl` FOREIGN KEY (`kode_mata_kuliah`) REFERENCES `mapping_cpl` (`kode_mata_kuliah`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_nama_mata_kuliah_mapping_cpl` FOREIGN KEY (`nama_mata_kuliah`) REFERENCES `mapping_cpl` (`nama_mata_kuliah`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `mapping_cpl`
--
ALTER TABLE `mapping_cpl`
  ADD CONSTRAINT `fk_kode_cpl_kode_cpl` FOREIGN KEY (`kode_cpl`) REFERENCES `capaian_pembelajaran_lulusan` (`kode_cpl`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_kode_cpmk_kode_cpmk` FOREIGN KEY (`kode_cpmk`) REFERENCES `capaian_pembelajaran_mata_kuliah` (`kode_cpmk`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_kode_scpmk_kode_scpmk` FOREIGN KEY (`kode_scpmk`) REFERENCES `sub_capaian_pembelajaran_mata_kuliah` (`kode_scpmk`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `nilai_hasil_pembelajaran`
--
ALTER TABLE `nilai_hasil_pembelajaran`
  ADD CONSTRAINT `fk_id_hasil_pembelajaran_id_hasil_pembelajaran` FOREIGN KEY (`id_hasil_pembelajaran`) REFERENCES `hasil_pembelajaran` (`id_hasil_pembelajaran`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `sub_capaian_pembelajaran_mata_kuliah`
--
ALTER TABLE `sub_capaian_pembelajaran_mata_kuliah`
  ADD CONSTRAINT `fk_id_cpmk_id_cpmk` FOREIGN KEY (`id_cpmk`) REFERENCES `capaian_pembelajaran_mata_kuliah` (`id_cpmk`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `total_hasil_pembelajaran`
--
ALTER TABLE `total_hasil_pembelajaran`
  ADD CONSTRAINT `fk_id_hasil_pembelajaran_hasil_pembelajaran` FOREIGN KEY (`id_hasil_pembelajaran`) REFERENCES `hasil_pembelajaran` (`id_hasil_pembelajaran`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
