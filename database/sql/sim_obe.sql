-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 18, 2025 at 11:19 AM
-- Server version: 8.0.33
-- PHP Version: 8.2.26

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
  `id_cpl` char(36) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `kode_cpl` varchar(13) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi_cpl` varchar(1000) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `capaian_pembelajaran_lulusan`
--

INSERT INTO `capaian_pembelajaran_lulusan` (`id_cpl`, `kode_cpl`, `deskripsi_cpl`, `created_at`, `updated_at`) VALUES
('9cac326c-e488-4d1a-931b-698df5b79577', '23-MKU-CPL-01', 'Bertakwa kepada Tuhan Yang Maha Esa, taat hukum dan disiplin dalam kehidupan bermasyarakat dan bernegara', '2024-08-02 14:25:43', '2024-08-02 14:25:43'),
('9cac326d-02fb-40d5-92c3-5ea77d0a5659', '23-MKU-CPL-02', 'Menjunjung tinggi nilai kemanusiaan, nasionalisme, kebangsaan, kepedulian terhadap masyarakat dan lingkungan, serta menghargai keanekaragaman budaya, pandangan, agama dan kepercayaan serta pendapat atau temuan orisinal orang lain', '2024-08-02 14:25:43', '2024-08-02 14:25:43'),
('9cac326d-0d74-4224-bc71-e0d0147457f6', '23-MKU-CPL-03', 'Menginternalisasi semangat kemandirian, kejuangan, dan kewirausahaan serta mampu menerapkan nilai-nilai Jaya sebagai university value', '2024-08-02 14:25:43', '2024-08-02 14:25:43'),
('9cac326d-15a8-43a7-8bef-32062492041f', '23-MKU-CPL-04', 'Menerapkan pemikiran logis, kritis, sistematis, dan inovatif dalam konteks pengembangan atau implementasi ilmu pengetahuan dan teknologi yang memperhatikan dan menerapkan nilai humaniora yang sesuai dengan bidang keahliannya serta menunjukkan kinerja mandiri, bermutu, dan terukur', '2024-08-02 14:25:43', '2024-08-02 14:25:43');

-- --------------------------------------------------------

--
-- Table structure for table `capaian_pembelajaran_mata_kuliah`
--

CREATE TABLE `capaian_pembelajaran_mata_kuliah` (
  `id_cpmk` char(36) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_cpl` char(36) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `kode_cpmk` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi_cpmk` varchar(1000) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `capaian_pembelajaran_mata_kuliah`
--

INSERT INTO `capaian_pembelajaran_mata_kuliah` (`id_cpmk`, `id_cpl`, `kode_cpmk`, `deskripsi_cpmk`, `created_at`, `updated_at`) VALUES
('9cac326c-f033-4c34-b885-1d8949c22020', '9cac326c-e488-4d1a-931b-698df5b79577', '23-MKU-CPMK-011', 'Mampu menginternalisasi nilai-nilai ketakwaan kepada Tuhan Yang Maha Esa', '2024-08-02 14:25:43', '2024-08-02 14:25:43'),
('9cac326c-fa28-48a8-8955-0e9baa3ffd7f', '9cac326c-e488-4d1a-931b-698df5b79577', '23-MKU-CPMK-012', 'Mampu menjalankan kehidupan sosial masyarakat yang berdasarkan aturan dan norma hukum yang berlaku', '2024-08-02 14:25:43', '2024-08-02 14:25:43'),
('9cac326c-ff48-4edd-9a2b-719601369479', '9cac326c-e488-4d1a-931b-698df5b79577', '23-MKU-CPMK-013', 'Mampu menerapkan kedisiplinan dalam kehidupan bermasyarakat dan bernegara', '2024-08-02 14:25:43', '2024-08-02 14:25:43'),
('9cac326d-0469-41de-93ce-a941453c5e00', '9cac326d-02fb-40d5-92c3-5ea77d0a5659', '23-MKU-CPMK-021', 'Mampu menginternalisasi nilai kemanusiaan, nasionalisme dan kebangsaan', '2024-08-02 14:25:43', '2024-08-02 14:25:43'),
('9cac326d-076e-4f39-9dbe-3e5082fb077a', '9cac326d-02fb-40d5-92c3-5ea77d0a5659', '23-MKU-CPMK-022', 'Mampu menginternalisasi sikap peduli kepada masyarakat dan lingkungannya', '2024-08-02 14:25:43', '2024-08-02 14:25:43'),
('9cac326d-0a80-4e4b-aacd-c45c18c0277f', '9cac326d-02fb-40d5-92c3-5ea77d0a5659', '23-MKU-CPMK-023', 'Mampu menerapkan sikap menghargai keanekaragaman budaya, pandangan, agama dan kepercayaan serta pendapat atau temuan orisinal orang lain', '2024-08-02 14:25:43', '2024-08-02 14:25:43'),
('9cac326d-0f04-4420-8607-994f34712de6', '9cac326d-0d74-4224-bc71-e0d0147457f6', '23-MKU-CPMK-031', 'Mampu menerapkan semangat kemandirian, kejuangan, dan kewirausahaan', '2024-08-02 14:25:43', '2024-08-02 14:25:43'),
('9cac326d-127d-4af3-b882-b6dca86336af', '9cac326d-0d74-4224-bc71-e0d0147457f6', '23-MKU-CPMK-032', 'Mampu menerapkan nilai-nilai Jaya sebagai university value', '2024-08-02 14:25:43', '2024-08-02 14:25:43'),
('9cac326d-173a-4cb6-aa8e-9a9cd7203747', '9cac326d-15a8-43a7-8bef-32062492041f', '23-MKU-CPMK-041', 'Mampu menerapkan pemikiran logis, kritis, sistematis, dan inovatif dalam konteks pengembangan atau  implementasi ilmu pengetahuan dan teknologi yang memperhatikan dan menerapkan nilai humaniora yang sesuai dengan bidang keahliannya', '2024-08-02 14:25:43', '2024-08-02 14:25:43'),
('9cac326d-1b0f-41a4-9147-6b5f50b20b31', '9cac326d-15a8-43a7-8bef-32062492041f', '23-MKU-CPMK-042', 'Mampu menunjukkan kinerja mandiri, bermutu, dan terukur', '2024-08-02 14:25:43', '2024-08-02 14:25:43');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `hasil_pembelajaran`
--

CREATE TABLE `hasil_pembelajaran` (
  `id_hasil_pembelajaran` char(36) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `kode_mata_kuliah` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_mata_kuliah` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `hasil_pembelajaran`
--

INSERT INTO `hasil_pembelajaran` (`id_hasil_pembelajaran`, `kode_mata_kuliah`, `nama_mata_kuliah`, `created_at`, `updated_at`) VALUES
('9caf563b-6e44-4749-a13b-160217d5e320', 'MKU101', 'Agama', '2024-08-04 03:53:19', '2024-08-04 03:53:19'),
('9caf567d-ee1c-4bd9-b6f3-829ea4ed2505', 'MKU102', 'Pancasila dan Kewarganegaraan', '2024-08-04 03:54:03', '2024-08-04 03:54:03'),
('9caf56ac-3c51-4c6e-81db-ee8eca57c43f', 'MKU103', 'Bahasa Indonesia', '2024-08-04 03:54:33', '2024-08-04 03:54:33'),
('9caf56bc-dec8-41e6-827f-0d825f2b55bc', 'MKU104', 'Pembangunan Berkelanjutan', '2024-08-04 03:54:44', '2024-08-04 03:54:44'),
('9caf56cf-b04c-4e55-aa8b-0d543b6546fe', 'MKU105', 'Wawasan Kewirausahaan', '2024-08-04 03:54:56', '2024-08-04 03:54:56'),
('9caf56e0-9c1b-4900-a83e-f189ca8a8524', 'MKU106', 'Dasar Logika Matematika', '2024-08-04 03:55:07', '2024-08-04 03:55:07'),
('9caf56f1-634a-4716-ad9b-565efc8ecede', 'MKU201', 'Bahasa Inggris', '2024-08-04 03:55:18', '2024-08-04 03:55:18');

-- --------------------------------------------------------

--
-- Table structure for table `indikator_kinerja_scpmk`
--

CREATE TABLE `indikator_kinerja_scpmk` (
  `id_indikator_kinerja_scpmk` char(36) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_mapping_cpl` char(36) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_indikator` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `indikator_kode_scpmk` varchar(19) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `indikator_kinerja_scpmk`
--

INSERT INTO `indikator_kinerja_scpmk` (`id_indikator_kinerja_scpmk`, `id_mapping_cpl`, `nama_indikator`, `indikator_kode_scpmk`, `created_at`, `updated_at`) VALUES
('04e48a31-ac49-42fa-93eb-1923cb8a2210', '9caf4511-b411-4007-b2e9-09c227f569bd', 'tugas', '23-MKU-SUBCPMK-0321', '2024-08-04 03:05:19', '2024-08-04 03:05:19'),
('0bfaeb2f-4438-4b32-9c34-22cb1c9f4c5a', '9caf28b7-ea53-49f1-bcf0-c00c5bf4c5bf', 'evaluasi_akhir_semester', NULL, '2024-08-04 01:46:03', '2024-08-04 01:46:03'),
('118e1edd-e556-414e-a540-c93dd56d30db', '9caf42f0-be2b-4591-90fe-4381d46de3dd', 'evaluasi_akhir_semester', NULL, '2024-08-04 03:02:29', '2024-08-04 03:02:29'),
('1b07f03c-6d39-487c-b686-959cedde260d', '9caf28b7-ea53-49f1-bcf0-c00c5bf4c5bf', 'proyek', '23-MKU-SUBCPMK-0122', '2024-08-04 01:46:03', '2024-08-04 01:46:03'),
('21acf0c7-6e6e-4a55-8587-9887da08bd53', '9caf4555-e7b9-451d-82ac-b80008f904d7', 'tugas', '23-MKU-SUBCPMK-0321', '2024-08-04 03:06:04', '2024-08-04 03:06:04'),
('23684ef2-f84f-4bd5-be69-390c48875007', '9caf44b2-790a-4b13-b5dd-603eaa41d9a1', 'tugas', '23-MKU-SUBCPMK-0231', '2024-08-04 03:04:17', '2024-08-04 03:04:17'),
('25d24cee-91b2-4f8e-84a3-2b66ffdac9d1', '9caf42f0-be2b-4591-90fe-4381d46de3dd', 'partisipasi', '23-MKU-SUBCPMK-0221', '2024-08-04 03:02:29', '2024-08-04 03:02:29'),
('2afc6a1b-a666-4878-af52-1eff82fcafb6', '9caf42f0-be2b-4591-90fe-4381d46de3dd', 'tugas', '23-MKU-SUBCPMK-0411', '2024-08-04 03:02:29', '2024-08-04 03:02:29'),
('2c93c1fc-f48b-435c-a84c-188a3f5c4501', '9caf435e-2d6e-47f0-a6d5-19f16b67da81', 'tugas', '23-MKU-SUBCPMK-0231', '2024-08-04 03:00:34', '2024-08-04 03:00:34'),
('346fc5cc-40b2-4ed2-81f5-d9ab0b8f66f4', '9caefb07-e397-4c88-a44f-63bf19ae6094', 'evaluasi_akhir_semester', NULL, '2024-08-04 01:35:13', '2024-08-04 01:35:13'),
('3773880c-fbd9-4a65-9c0f-dc86785f3194', '9caf4511-b411-4007-b2e9-09c227f569bd', 'evaluasi_akhir_semester', NULL, '2024-08-04 03:05:19', '2024-08-04 03:05:19'),
('427c77a7-210f-4537-bffe-4f131bb2680d', '9caf42f0-be2b-4591-90fe-4381d46de3dd', 'evaluasi_tengah_semester', NULL, '2024-08-04 03:02:29', '2024-08-04 03:02:29'),
('57c639f5-33f8-4743-8369-c422904cb37a', '9caf28b7-ea53-49f1-bcf0-c00c5bf4c5bf', 'evaluasi_tengah_semester', NULL, '2024-08-04 01:46:03', '2024-08-04 01:46:03'),
('5eecb815-af10-4607-9512-19a1b19df675', '9caf435e-2d6e-47f0-a6d5-19f16b67da81', 'proyek', NULL, '2024-08-04 03:00:34', '2024-08-04 03:00:34'),
('61b11c41-f3fa-457f-81e8-c945946cafda', '9caf28b7-ea53-49f1-bcf0-c00c5bf4c5bf', 'partisipasi', '23-MKU-SUBCPMK-0121', '2024-08-04 01:46:03', '2024-08-04 01:46:03'),
('6424b1fa-13de-42f7-b037-6de6ddd0fa97', '9caf44b2-790a-4b13-b5dd-603eaa41d9a1', 'proyek', NULL, '2024-08-04 03:04:17', '2024-08-04 03:04:17'),
('649930fc-4bf2-49d2-9ee5-8c6ab398fd99', '9caf28b7-ea53-49f1-bcf0-c00c5bf4c5bf', 'tugas', '23-MKU-SUBCPMK-0131', '2024-08-04 01:46:03', '2024-08-04 01:46:03'),
('7e6a8fdb-d91e-4d05-9b2c-938dce99d424', '9caf44b2-790a-4b13-b5dd-603eaa41d9a1', 'evaluasi_tengah_semester', NULL, '2024-08-04 03:04:17', '2024-08-04 03:04:17'),
('7f948fc8-c5af-43e0-b2af-06fc35c981ca', '9caefb07-e397-4c88-a44f-63bf19ae6094', 'tugas', '23-MKU-SUBCPMK-0121', '2024-08-04 01:35:13', '2024-08-04 01:35:13'),
('80ab2c8a-a536-4d46-9a1f-acc05c358b87', '9caf4511-b411-4007-b2e9-09c227f569bd', 'proyek', '23-MKU-SUBCPMK-0311', '2024-08-04 03:05:19', '2024-08-04 03:05:19'),
('86613cd3-176f-498f-adab-ebc8a5f59ef2', '9caf4555-e7b9-451d-82ac-b80008f904d7', 'proyek', NULL, '2024-08-04 03:06:04', '2024-08-04 03:06:04'),
('8969ce28-d378-4e24-aae0-f3e288a84c2d', '9caf4555-e7b9-451d-82ac-b80008f904d7', 'evaluasi_akhir_semester', NULL, '2024-08-04 03:06:04', '2024-08-04 03:06:04'),
('8d41e9e1-03df-4521-be54-435953ec757c', '9caf42f0-be2b-4591-90fe-4381d46de3dd', 'kuis', '23-MKU-SUBCPMK-0421', '2024-08-04 03:02:29', '2024-08-04 03:02:29'),
('8f6b512b-b93f-4260-9458-783f3edf9f26', '9caefb07-e397-4c88-a44f-63bf19ae6094', 'evaluasi_tengah_semester', '23-MKU-SUBCPMK-0111', '2024-08-04 01:35:13', '2024-08-04 01:35:13'),
('92884311-9b6c-46b9-a91c-fa6e71678d65', '9caefb07-e397-4c88-a44f-63bf19ae6094', 'proyek', '23-MKU-SUBCPMK-0231', '2024-08-04 01:35:13', '2024-08-04 01:35:13'),
('a3110019-f21a-48c6-b27a-46bbedd69fe6', '9caefb07-e397-4c88-a44f-63bf19ae6094', 'kuis', NULL, '2024-08-04 01:35:13', '2024-08-04 01:35:13'),
('aaf03fbb-d997-4349-b80d-c89beff8eef1', '9caf435e-2d6e-47f0-a6d5-19f16b67da81', 'evaluasi_akhir_semester', '23-MKU-SUBCPMK-0421', '2024-08-04 03:00:34', '2024-08-04 03:00:34'),
('bac1d0e0-ec91-4c12-bfa7-ffe2bea18db8', '9caf4511-b411-4007-b2e9-09c227f569bd', 'evaluasi_tengah_semester', NULL, '2024-08-04 03:05:19', '2024-08-04 03:05:19'),
('bd8cda74-3df1-4440-ad4f-e8ffab621fde', '9caf28b7-ea53-49f1-bcf0-c00c5bf4c5bf', 'kuis', '23-MKU-SUBCPMK-0211', '2024-08-04 01:46:03', '2024-08-04 01:46:03'),
('c0b3adf5-1451-44c5-91dc-245c15d06ecd', '9caefb07-e397-4c88-a44f-63bf19ae6094', 'partisipasi', NULL, '2024-08-04 01:35:13', '2024-08-04 01:35:13'),
('c4a8ac94-5404-4c2d-bb14-2c6f1282e84e', '9caf435e-2d6e-47f0-a6d5-19f16b67da81', 'kuis', NULL, '2024-08-04 03:00:34', '2024-08-04 03:00:34'),
('c904f222-d6b1-471a-a896-cec0a002ac99', '9caf44b2-790a-4b13-b5dd-603eaa41d9a1', 'evaluasi_akhir_semester', NULL, '2024-08-04 03:04:17', '2024-08-04 03:04:17'),
('c98d606f-40d6-4a7d-a0f8-fccb5a53c9af', '9caf44b2-790a-4b13-b5dd-603eaa41d9a1', 'kuis', '23-MKU-SUBCPMK-0311', '2024-08-04 03:04:17', '2024-08-04 03:04:17'),
('cf3a9309-152d-4fdf-9275-7a8ed8ce6955', '9caf4511-b411-4007-b2e9-09c227f569bd', 'kuis', NULL, '2024-08-04 03:05:19', '2024-08-04 03:05:19'),
('d4aa7faa-76e4-41a3-b17b-645330ef10f3', '9caf435e-2d6e-47f0-a6d5-19f16b67da81', 'evaluasi_tengah_semester', '23-MKU-SUBCPMK-0411', '2024-08-04 03:00:34', '2024-08-04 03:00:34'),
('dd75a757-4ab5-4a53-aeec-28e0e8b9db27', '9caf42f0-be2b-4591-90fe-4381d46de3dd', 'proyek', '23-MKU-SUBCPMK-0321', '2024-08-04 03:02:29', '2024-08-04 03:02:29'),
('de6fe3a9-81c3-4c3a-8815-9643f9c30440', '9caf4555-e7b9-451d-82ac-b80008f904d7', 'kuis', '23-MKU-SUBCPMK-0411', '2024-08-04 03:06:04', '2024-08-04 03:06:04'),
('e52afa97-af0f-4ffc-817b-9da8c75b08c7', '9caf4555-e7b9-451d-82ac-b80008f904d7', 'evaluasi_tengah_semester', NULL, '2024-08-04 03:06:04', '2024-08-04 03:06:04'),
('efb4f634-86b7-4b44-a559-a67615d2f201', '9caf44b2-790a-4b13-b5dd-603eaa41d9a1', 'partisipasi', NULL, '2024-08-04 03:04:17', '2024-08-04 03:04:17'),
('f09ee0ac-4f30-4aca-8231-201aca42e08f', '9caf4511-b411-4007-b2e9-09c227f569bd', 'partisipasi', NULL, '2024-08-04 03:05:19', '2024-08-04 03:05:19'),
('f456cfbe-2c03-4d8c-90c4-bf703136f6dd', '9caf435e-2d6e-47f0-a6d5-19f16b67da81', 'partisipasi', NULL, '2024-08-04 03:00:34', '2024-08-04 03:00:34'),
('ff90ff8f-2210-435d-b1a1-7682d823f889', '9caf4555-e7b9-451d-82ac-b80008f904d7', 'partisipasi', NULL, '2024-08-04 03:06:04', '2024-08-04 03:06:04');

-- --------------------------------------------------------

--
-- Table structure for table `mapping_cpl`
--

CREATE TABLE `mapping_cpl` (
  `id_mapping_cpl` char(36) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `kode_mata_kuliah` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_mata_kuliah` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `kode_cpl` varchar(13) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `kode_cpmk` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `kode_scpmk` varchar(19) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
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
('9caefb07-e397-4c88-a44f-63bf19ae6094', 'MKU101', 'Agama', '23-MKU-CPL-01', '23-MKU-CPMK-011', '23-MKU-SUBCPMK-0111', NULL, 50, 30, NULL, 20, NULL, '2024-08-03 23:38:18', '2024-08-04 01:35:13'),
('9caf28b7-ea53-49f1-bcf0-c00c5bf4c5bf', 'MKU102', 'Pancasila dan Kewarganegaraan', '23-MKU-CPL-01', '23-MKU-CPMK-012', '23-MKU-SUBCPMK-0121', 20, 30, 30, 20, NULL, NULL, '2024-08-04 01:46:03', '2024-08-04 01:46:03'),
('9caf42f0-be2b-4591-90fe-4381d46de3dd', 'MKU104', 'Pembangunan Berkelanjutan', '23-MKU-CPL-02', '23-MKU-CPMK-022', '23-MKU-SUBCPMK-0221', 40, 30, 20, 10, NULL, NULL, '2024-08-04 02:59:22', '2024-08-04 03:02:29'),
('9caf435e-2d6e-47f0-a6d5-19f16b67da81', 'MKU103', 'Bahasa Indonesia', '23-MKU-CPL-02', '23-MKU-CPMK-023', '23-MKU-SUBCPMK-0231', NULL, NULL, 40, NULL, 25, 35, '2024-08-04 03:00:34', '2024-08-04 03:00:34'),
('9caf44b2-790a-4b13-b5dd-603eaa41d9a1', 'MKU201', 'Bahasa Inggris', '23-MKU-CPL-02', '23-MKU-CPMK-023', '23-MKU-SUBCPMK-0231', NULL, NULL, 30, 30, 15, 25, '2024-08-04 03:04:17', '2024-08-04 03:04:17'),
('9caf4511-b411-4007-b2e9-09c227f569bd', 'MKU105', 'Wawasan Kewirausahaan', '23-MKU-CPL-03', '23-MKU-CPMK-031', '23-MKU-SUBCPMK-0311', NULL, 50, 50, NULL, NULL, NULL, '2024-08-04 03:05:19', '2024-08-04 03:05:19'),
('9caf4555-e7b9-451d-82ac-b80008f904d7', 'MKU106', 'Dasar Logika Matematika', '23-MKU-CPL-03', '23-MKU-CPMK-032', '23-MKU-SUBCPMK-0321', NULL, NULL, 30, 30, 15, 25, '2024-08-04 03:06:04', '2024-08-04 03:06:04');

-- --------------------------------------------------------

--
-- Table structure for table `mata_kuliah`
--

CREATE TABLE `mata_kuliah` (
  `id_mata_kuliah` char(36) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_scpmk` char(36) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `kode_mata_kuliah` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_mata_kuliah` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `mata_kuliah`
--

INSERT INTO `mata_kuliah` (`id_mata_kuliah`, `id_scpmk`, `kode_mata_kuliah`, `nama_mata_kuliah`, `created_at`, `updated_at`) VALUES
('9cad35f4-d30c-4bf3-ba0f-990bcba17e3c', '9cac326c-f889-48a9-81ab-4a8408987b8c', 'MKU101', 'Agama', '2024-08-03 02:31:25', '2024-08-03 02:31:25'),
('9cad35f4-d6d8-4dfb-985f-03909844ee67', '9cac326c-fbec-4c37-980a-01870b57878a', 'MKU101', 'Agama', '2024-08-03 02:31:25', '2024-08-03 02:31:25'),
('9cad35f4-d749-4cc6-9bf9-4f08ce98bebe', '9cac326c-fbec-4c37-980a-01870b57878a', 'MKU102', 'Pancasila dan Kewarganegaraan', '2024-08-03 02:31:25', '2024-08-03 02:31:25'),
('9cad35f4-d828-4520-9c5d-401d76bfec91', '9cac326c-fdbf-4f24-bb9b-8b235f6fb074', 'MKU102', 'Pancasila dan Kewarganegaraan', '2024-08-03 02:31:25', '2024-08-03 02:31:25'),
('9cad35f4-d9be-4b47-89af-8ef915bebd33', '9cac326d-0132-48e3-adad-52399453ffab', 'MKU102', 'Pancasila dan Kewarganegaraan', '2024-08-03 02:31:25', '2024-08-03 02:31:25'),
('9cad35f4-dbaf-4d65-bbc5-f5b7dece2c2f', '9cac326d-05d7-4f98-8a19-ae211fc0d057', 'MKU102', 'Pancasila dan Kewarganegaraan', '2024-08-03 02:31:25', '2024-08-03 02:31:25'),
('9cad35f4-dd01-4eeb-bf9c-0f54ff880210', '9cac326d-08fd-413c-be80-450523c730e9', 'MKU102', 'Pancasila dan Kewarganegaraan', '2024-08-03 02:31:25', '2024-08-03 02:31:25'),
('9cad35f4-dd6e-45cc-a748-a2cba28fb818', '9cac326d-08fd-413c-be80-450523c730e9', 'MKU104', 'Pembangunan Berkelanjutan', '2024-08-03 02:31:25', '2024-08-03 02:31:25'),
('9cad35f4-dea9-4be3-9242-1de9b11cf0df', '9cac326d-0bf6-4339-8675-243f008c890e', 'MKU101', 'Agama', '2024-08-03 02:31:25', '2024-08-03 02:31:25'),
('9cad35f4-df2b-47b7-93b9-4e2b764f9fed', '9cac326d-0bf6-4339-8675-243f008c890e', 'MKU102', 'Pancasila dan Kewarganegaraan', '2024-08-03 02:31:25', '2024-08-03 02:31:25'),
('9cad35f4-dfdb-440e-bef9-2ba4ec37491e', '9cac326d-0bf6-4339-8675-243f008c890e', 'MKU103', 'Bahasa Indonesia', '2024-08-03 02:31:25', '2024-08-03 02:31:25'),
('9cad35f4-e048-4521-a610-0b1654c650d0', '9cac326d-0bf6-4339-8675-243f008c890e', 'MKU201', 'Bahasa Inggris', '2024-08-03 02:31:25', '2024-08-03 02:31:25'),
('9cad35f4-e215-4ee9-b69a-39e4f80a9b96', '9cac326d-10b2-41e0-8039-e4d7e2352d7c', 'MKU105', 'Wawasan Kewirausahaan', '2024-08-03 02:31:25', '2024-08-03 02:31:25'),
('9cad35f4-e289-45e4-8612-9839c177c198', '9cac326d-10b2-41e0-8039-e4d7e2352d7c', 'MKU201', 'Bahasa Inggris', '2024-08-03 02:31:25', '2024-08-03 02:31:25'),
('9cad35f4-e3bb-4d4f-9930-f72a805c6f0d', '9cac326d-1412-4a81-b9f5-2531b935e538', 'MKU105', 'Wawasan Kewirausahaan', '2024-08-03 02:31:25', '2024-08-03 02:31:25'),
('9cad35f4-e42c-4419-b4ec-71db164657eb', '9cac326d-1412-4a81-b9f5-2531b935e538', 'MKU104', 'Pembangunan Berkelanjutan', '2024-08-03 02:31:25', '2024-08-03 02:31:25'),
('9cad35f4-e497-428d-aa2b-2f56d67036b5', '9cac326d-1412-4a81-b9f5-2531b935e538', 'MKU106', 'Dasar Logika Matematika', '2024-08-03 02:31:25', '2024-08-03 02:31:25'),
('9cad35f4-e69d-4ef3-ade7-28ba6fada592', '9cac326d-1910-4e14-9ff3-ae843a8dc743', 'MKU103', 'Bahasa Indonesia', '2024-08-03 02:31:25', '2024-08-03 02:31:25'),
('9cad35f4-e75c-4c99-abca-ed8fa176059b', '9cac326d-1910-4e14-9ff3-ae843a8dc743', 'MKU105', 'Wawasan Kewirausahaan', '2024-08-03 02:31:25', '2024-08-03 02:31:25'),
('9cad35f4-e7ce-4b4a-811b-f2507ae9abb5', '9cac326d-1910-4e14-9ff3-ae843a8dc743', 'MKU104', 'Pembangunan Berkelanjutan', '2024-08-03 02:31:25', '2024-08-03 02:31:25'),
('9cad35f4-e847-435d-8408-f98bb3ff99eb', '9cac326d-1910-4e14-9ff3-ae843a8dc743', 'MKU106', 'Dasar Logika Matematika', '2024-08-03 02:31:25', '2024-08-03 02:31:25'),
('9cad35f4-e97d-4f8c-874b-7f565b72a931', '9cac326d-1cb8-417c-a574-f0800d389a10', 'MKU103', 'Bahasa Indonesia', '2024-08-03 02:31:25', '2024-08-03 02:31:25'),
('9cad35f4-e9ed-402a-9f40-262642c9294f', '9cac326d-1cb8-417c-a574-f0800d389a10', 'MKU105', 'Wawasan Kewirausahaan', '2024-08-03 02:31:25', '2024-08-03 02:31:25'),
('9cad35f4-ea59-492e-ac69-9eb7a5bbe6f6', '9cac326d-1cb8-417c-a574-f0800d389a10', 'MKU104', 'Pembangunan Berkelanjutan', '2024-08-03 02:31:25', '2024-08-03 02:31:25'),
('9cad35f4-eb28-4c1b-9d5e-3789e2812d04', '9cac326d-1e81-46b1-ae2a-58616a1d50b5', 'MKU103', 'Bahasa Indonesia', '2024-08-03 02:31:25', '2024-08-03 02:31:25'),
('9cad35f4-eb9c-4e74-9125-4ff953703a75', '9cac326d-1e81-46b1-ae2a-58616a1d50b5', 'MKU105', 'Wawasan Kewirausahaan', '2024-08-03 02:31:25', '2024-08-03 02:31:25'),
('9cad35f4-ec2f-4084-a80f-ed93ed56d5d6', '9cac326d-1e81-46b1-ae2a-58616a1d50b5', 'MKU104', 'Pembangunan Berkelanjutan', '2024-08-03 02:31:25', '2024-08-03 02:31:25'),
('9cad35f4-ed3b-41d3-9276-24178e302204', '9cac326d-205f-480f-95a6-956256857be1', 'MKU103', 'Bahasa Indonesia', '2024-08-03 02:31:25', '2024-08-03 02:31:25'),
('9cad35f4-edc1-4226-bbb2-09a4f5308010', '9cac326d-205f-480f-95a6-956256857be1', 'MKU105', 'Wawasan Kewirausahaan', '2024-08-03 02:31:25', '2024-08-03 02:31:25'),
('9cad35f4-ee42-454f-bcb4-c4ba04fedfa7', '9cac326d-205f-480f-95a6-956256857be1', 'MKU104', 'Pembangunan Berkelanjutan', '2024-08-03 02:31:25', '2024-08-03 02:31:25'),
('9cad35f4-ef31-456d-9fc8-a5f937d0d186', '9cac326d-2205-40ed-bb4b-a55416383f78', 'MKU103', 'Bahasa Indonesia', '2024-08-03 02:31:25', '2024-08-03 02:31:25'),
('9cad35f4-efa5-404c-8e10-208eff796cf3', '9cac326d-2205-40ed-bb4b-a55416383f78', 'MKU105', 'Wawasan Kewirausahaan', '2024-08-03 02:31:25', '2024-08-03 02:31:25'),
('9cad35f4-f064-4e72-a6e6-3e2e8af3adc5', '9cac326d-2205-40ed-bb4b-a55416383f78', 'MKU104', 'Pembangunan Berkelanjutan', '2024-08-03 02:31:25', '2024-08-03 02:31:25');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2024_07_14_124713_create_capaian_pembelajaran_lulusan_table', 2),
(4, '2024_07_14_125701_create_capaian_pembelajaran_mata_kuliah_table', 3),
(5, '2024_07_14_130755_create_fk_capaian_pembelajaran_mata_kuliah_table', 3),
(6, '2024_07_14_125819_create_sub_capaian_pembelajaran_mata_kuliah_table', 4),
(7, '2024_07_14_184047_create_fk_sub_capaian_pembelajaran_mata_kuliah', 4),
(9, '2024_07_14_230031_create_mapping_cpl_table', 6),
(10, '2024_07_15_043757_create_fk_mapping_cpl_table', 7),
(11, '2024_08_03_072656_create_mata_kuliah_table', 8),
(12, '2024_08_03_073029_create_fk_mata_kuliah_table', 8),
(14, '2024_08_03_122218_create_indikator_kinerja_scpmk_table', 9),
(15, '2024_07_15_065726_create_hasil_pembelajaran_table', 10),
(16, '2024_07_15_070734_create_fk_hasil_pembelajaran_table', 10),
(17, '2024_07_15_070227_create_nilai_hasil_pembelajaran_table', 11),
(18, '2024_07_15_070407_create_fk_nilai_hasil_pembelajaran_table', 11),
(19, '2024_07_15_220808_create_total_hasil_pembelajaran_table', 12),
(20, '2024_07_15_221148_create_fk_total_hasil_pembelajaran_table', 12),
(21, '2024_07_16_011709_create_score_cpl_table', 13);

-- --------------------------------------------------------

--
-- Table structure for table `nilai_hasil_pembelajaran`
--

CREATE TABLE `nilai_hasil_pembelajaran` (
  `id_nilai_hasil_pembelajaran` char(36) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_hasil_pembelajaran` char(36) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
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
('9caf563e-bc8a-46b4-a2fc-8e25ea0a71f2', '9caf563b-6e44-4749-a13b-160217d5e320', NULL, 55, 83.33, NULL, 30, NULL, '2024-08-04 03:53:21', '2024-08-04 03:53:21'),
('9caf563e-bd1c-4570-a0c6-b3a739f32133', '9caf563b-6e44-4749-a13b-160217d5e320', NULL, 100, 91.67, NULL, 75, NULL, '2024-08-04 03:53:21', '2024-08-04 03:53:21'),
('9caf563e-bdcc-49f0-a63a-d44dfbd3934f', '9caf563b-6e44-4749-a13b-160217d5e320', NULL, 85, 91.67, NULL, 57, NULL, '2024-08-04 03:53:21', '2024-08-04 03:53:21'),
('9caf563e-be62-4bad-b7f0-61668eabbf21', '9caf563b-6e44-4749-a13b-160217d5e320', NULL, 100, 91.67, NULL, 95, NULL, '2024-08-04 03:53:21', '2024-08-04 03:53:21'),
('9caf563e-bee4-467a-9d42-f7b3272f9918', '9caf563b-6e44-4749-a13b-160217d5e320', NULL, 90, 91.67, NULL, 74, NULL, '2024-08-04 03:53:21', '2024-08-04 03:53:21'),
('9caf567e-0bfd-4fe5-b94c-00e52d5677b0', '9caf567d-ee1c-4bd9-b6f3-829ea4ed2505', 30, 55, 83.33, 36.25, NULL, NULL, '2024-08-04 03:54:03', '2024-08-04 03:54:03'),
('9caf567e-0d0c-489c-99c9-dde66d2eae71', '9caf567d-ee1c-4bd9-b6f3-829ea4ed2505', 75, 100, 91.67, 90, NULL, NULL, '2024-08-04 03:54:03', '2024-08-04 03:54:03'),
('9caf567e-0ddb-4907-b8dd-d4200b02b652', '9caf567d-ee1c-4bd9-b6f3-829ea4ed2505', 57, 85, 91.67, 85, NULL, NULL, '2024-08-04 03:54:03', '2024-08-04 03:54:03'),
('9caf567e-0e72-4e99-9667-ccbadad3b2d5', '9caf567d-ee1c-4bd9-b6f3-829ea4ed2505', 95, 100, 91.67, 87, NULL, NULL, '2024-08-04 03:54:03', '2024-08-04 03:54:03'),
('9caf567e-0f07-427e-97de-2f2f65a1426e', '9caf567d-ee1c-4bd9-b6f3-829ea4ed2505', 74, 90, 91.67, 92.5, NULL, NULL, '2024-08-04 03:54:03', '2024-08-04 03:54:03'),
('9caf56ac-5b0d-4b45-a384-b5f2f0b790ab', '9caf56ac-3c51-4c6e-81db-ee8eca57c43f', NULL, NULL, 83.33, NULL, 30, 55, '2024-08-04 03:54:33', '2024-08-04 03:54:33'),
('9caf56ac-5bd6-44d0-a4c3-2eeef09b3ed9', '9caf56ac-3c51-4c6e-81db-ee8eca57c43f', NULL, NULL, 91.67, NULL, 75, 100, '2024-08-04 03:54:33', '2024-08-04 03:54:33'),
('9caf56ac-5c6b-4401-8cf8-2f090aa12edb', '9caf56ac-3c51-4c6e-81db-ee8eca57c43f', NULL, NULL, 91.67, NULL, 57, 85, '2024-08-04 03:54:33', '2024-08-04 03:54:33'),
('9caf56ac-5d05-479f-bea7-e20a6cde18f4', '9caf56ac-3c51-4c6e-81db-ee8eca57c43f', NULL, NULL, 91.67, NULL, 95, 100, '2024-08-04 03:54:33', '2024-08-04 03:54:33'),
('9caf56ac-5d93-42b5-8222-d4db2009fff3', '9caf56ac-3c51-4c6e-81db-ee8eca57c43f', NULL, NULL, 91.67, NULL, 74, 90, '2024-08-04 03:54:33', '2024-08-04 03:54:33'),
('9caf56bc-ff72-438b-9587-dcb4139d5473', '9caf56bc-dec8-41e6-827f-0d825f2b55bc', 30, 55, 83.33, 36.25, NULL, NULL, '2024-08-04 03:54:44', '2024-08-04 03:54:44'),
('9caf56bd-0001-47d6-9f88-7876a037eb1c', '9caf56bc-dec8-41e6-827f-0d825f2b55bc', 75, 100, 91.67, 90, NULL, NULL, '2024-08-04 03:54:44', '2024-08-04 03:54:44'),
('9caf56bd-008c-4bb9-b736-3099a8e8e643', '9caf56bc-dec8-41e6-827f-0d825f2b55bc', 57, 85, 91.67, 85, NULL, NULL, '2024-08-04 03:54:44', '2024-08-04 03:54:44'),
('9caf56bd-0105-42df-af3e-ab4375897c6a', '9caf56bc-dec8-41e6-827f-0d825f2b55bc', 95, 100, 91.67, 87, NULL, NULL, '2024-08-04 03:54:44', '2024-08-04 03:54:44'),
('9caf56bd-017e-4c06-b99b-e35d8338857a', '9caf56bc-dec8-41e6-827f-0d825f2b55bc', 74, 90, 91.67, 92.5, NULL, NULL, '2024-08-04 03:54:44', '2024-08-04 03:54:44'),
('9caf56cf-ce0a-436a-bf5d-6301aaaaf977', '9caf56cf-b04c-4e55-aa8b-0d543b6546fe', NULL, 55, 83.33, NULL, NULL, NULL, '2024-08-04 03:54:56', '2024-08-04 03:54:56'),
('9caf56cf-cec3-4356-a5d9-fa9cba570973', '9caf56cf-b04c-4e55-aa8b-0d543b6546fe', NULL, 100, 91.67, NULL, NULL, NULL, '2024-08-04 03:54:56', '2024-08-04 03:54:56'),
('9caf56cf-cf5a-4314-abfa-8798b51af437', '9caf56cf-b04c-4e55-aa8b-0d543b6546fe', NULL, 85, 91.67, NULL, NULL, NULL, '2024-08-04 03:54:56', '2024-08-04 03:54:56'),
('9caf56cf-cfd8-4793-9b6a-622eb8d70304', '9caf56cf-b04c-4e55-aa8b-0d543b6546fe', NULL, 100, 91.67, NULL, NULL, NULL, '2024-08-04 03:54:56', '2024-08-04 03:54:56'),
('9caf56cf-d05b-432d-bcdf-f26e4ba94f64', '9caf56cf-b04c-4e55-aa8b-0d543b6546fe', NULL, 90, 91.67, NULL, NULL, NULL, '2024-08-04 03:54:56', '2024-08-04 03:54:56'),
('9caf56e0-bcea-48d5-906d-4811f88daea8', '9caf56e0-9c1b-4900-a83e-f189ca8a8524', NULL, NULL, 83.33, 36.25, 30, 55, '2024-08-04 03:55:07', '2024-08-04 03:55:07'),
('9caf56e0-bda2-4fca-a539-1e4b62aae231', '9caf56e0-9c1b-4900-a83e-f189ca8a8524', NULL, NULL, 91.67, 90, 75, 100, '2024-08-04 03:55:07', '2024-08-04 03:55:07'),
('9caf56e0-be4a-4544-938a-639752137d81', '9caf56e0-9c1b-4900-a83e-f189ca8a8524', NULL, NULL, 91.67, 85, 57, 85, '2024-08-04 03:55:07', '2024-08-04 03:55:07'),
('9caf56e0-bed9-4c47-8fba-3df19a630352', '9caf56e0-9c1b-4900-a83e-f189ca8a8524', NULL, NULL, 91.67, 87, 95, 100, '2024-08-04 03:55:07', '2024-08-04 03:55:07'),
('9caf56e0-bf5c-4530-aeb0-1bb28482d6e7', '9caf56e0-9c1b-4900-a83e-f189ca8a8524', NULL, NULL, 91.67, 92.5, 74, 90, '2024-08-04 03:55:07', '2024-08-04 03:55:07'),
('9caf56f1-8186-4d4d-8370-3e604f83e6cf', '9caf56f1-634a-4716-ad9b-565efc8ecede', NULL, NULL, 83.33, 75, 30, 55, '2024-08-04 03:55:18', '2024-08-04 03:55:18'),
('9caf56f1-821b-4d54-a653-45e4e4a06783', '9caf56f1-634a-4716-ad9b-565efc8ecede', NULL, NULL, 91.67, 70, 75, 100, '2024-08-04 03:55:18', '2024-08-04 03:55:18'),
('9caf56f1-8290-469b-8297-148b25c08ba7', '9caf56f1-634a-4716-ad9b-565efc8ecede', NULL, NULL, 91.67, 65, 57, 85, '2024-08-04 03:55:18', '2024-08-04 03:55:18'),
('9caf56f1-82fc-412a-9485-dea4d77a1587', '9caf56f1-634a-4716-ad9b-565efc8ecede', NULL, NULL, 91.67, 82, 95, 100, '2024-08-04 03:55:18', '2024-08-04 03:55:18'),
('9caf56f1-837d-48e8-bab7-08dab8b93488', '9caf56f1-634a-4716-ad9b-565efc8ecede', NULL, NULL, 91.67, NULL, 74, 90, '2024-08-04 03:55:18', '2024-08-04 03:55:18');

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
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
  `id_score_cpl` char(36) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `column` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `score` decimal(5,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `score_cpl`
--

INSERT INTO `score_cpl` (`id_score_cpl`, `column`, `score`, `created_at`, `updated_at`) VALUES
('9caf5643-27aa-4aa5-bbfe-34255efc51f7', '23-MKU-CPL-01', 82.45, '2024-08-04 03:53:24', '2024-08-04 06:14:20'),
('9caf5643-2bea-4649-a6ba-e1962f779b4e', '23-MKU-CPL-02', 80.32, '2024-08-04 03:53:24', '2024-08-04 06:14:20'),
('9caf56f5-0de1-4672-afcd-8c562836406b', '23-MKU-CPL-03', 80.98, '2024-08-04 03:55:21', '2024-08-04 06:17:33'),
('9caf56f5-12f2-4eb3-84fb-3852e7d5324b', '23-MKU-CPL-04', 82.66, '2024-08-04 03:55:21', '2024-08-04 07:55:55');

-- --------------------------------------------------------

--
-- Table structure for table `sub_capaian_pembelajaran_mata_kuliah`
--

CREATE TABLE `sub_capaian_pembelajaran_mata_kuliah` (
  `id_scpmk` char(36) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_cpmk` char(36) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `kode_scpmk` varchar(19) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi_scpmk` varchar(1000) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `kemampuan` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `aspek` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sub_capaian_pembelajaran_mata_kuliah`
--

INSERT INTO `sub_capaian_pembelajaran_mata_kuliah` (`id_scpmk`, `id_cpmk`, `kode_scpmk`, `deskripsi_scpmk`, `kemampuan`, `aspek`, `created_at`, `updated_at`) VALUES
('9cac326c-f889-48a9-81ab-4a8408987b8c', '9cac326c-f033-4c34-b885-1d8949c22020', '23-MKU-SUBCPMK-0111', 'Mampu menunjukkan sikap ketakwaan kepada Tuhan Yang Maha Esa', 'Perilaku', 'Sikap', '2024-08-02 14:25:43', '2024-08-03 00:21:49'),
('9cac326c-fbec-4c37-980a-01870b57878a', '9cac326c-fa28-48a8-8955-0e9baa3ffd7f', '23-MKU-SUBCPMK-0121', 'Mampu menunjukkan sikap inklusif (sikap yang mencerminkan penerimaan dan pengakuan terhadap perbedaan individu dalam masyarakat atau lingkungan tertentu / tanpa diskriminasi)', 'Bersikap Inklusif', 'Sikap', '2024-08-02 14:25:43', '2024-08-03 00:21:49'),
('9cac326c-fdbf-4f24-bb9b-8b235f6fb074', '9cac326c-fa28-48a8-8955-0e9baa3ffd7f', '23-MKU-SUBCPMK-0122', 'Mampu mematuhi semua aturan dan norma hukum yang berlaku', 'Patuh', 'Sikap', '2024-08-02 14:25:43', '2024-08-03 00:21:49'),
('9cac326d-0132-48e3-adad-52399453ffab', '9cac326c-ff48-4edd-9a2b-719601369479', '23-MKU-SUBCPMK-0131', 'Mampu menunjukkan sikap disiplin dalam kehidupan bermasyarakat dan bernegara', 'Disiplin', 'Sikap', '2024-08-02 14:25:43', '2024-08-03 00:21:49'),
('9cac326d-05d7-4f98-8a19-ae211fc0d057', '9cac326d-0469-41de-93ce-a941453c5e00', '23-MKU-SUBCPMK-0211', 'Mampu menunjukkan peran sebagai warga negara yang bangga dan cinta tanah air, memiliki jiwa nasionalisme serta rasa tanggung jawab', 'Nasionalisme', 'Sikap', '2024-08-02 14:25:43', '2024-08-03 00:21:49'),
('9cac326d-08fd-413c-be80-450523c730e9', '9cac326d-076e-4f39-9dbe-3e5082fb077a', '23-MKU-SUBCPMK-0221', 'Mampu menunjukkan sikap peduli kepada masyarakat dan lingkungannya', 'Peduli', 'Sikap', '2024-08-02 14:25:43', '2024-08-03 00:21:49'),
('9cac326d-0bf6-4339-8675-243f008c890e', '9cac326d-0a80-4e4b-aacd-c45c18c0277f', '23-MKU-SUBCPMK-0231', 'Mampu menunjukkan sikap menghargai antar sesama tanpa membedakan keanekaragaman budaya, pandangan, agama dan kepercayaan, serta pendapat atau temuan orisinal orang lain', 'Menghargai', 'Sikap', '2024-08-02 14:25:43', '2024-08-03 00:21:49'),
('9cac326d-10b2-41e0-8039-e4d7e2352d7c', '9cac326d-0f04-4420-8607-994f34712de6', '23-MKU-SUBCPMK-0311', 'Mampu menunjukkan sikap mandiri, kejuangan dan kewirausahaan', 'Kemandirian', 'Sikap', '2024-08-02 14:25:43', '2024-08-03 00:21:49'),
('9cac326d-1412-4a81-b9f5-2531b935e538', '9cac326d-127d-4af3-b882-b6dca86336af', '23-MKU-SUBCPMK-0321', 'Mampu menunjukkan sikap integritas, adil, komit, motivasi, disiplin serta mengembangkan sikap mawas diri dan proaktif', 'Tata kelola diri', 'Sikap', '2024-08-02 14:25:43', '2024-08-03 00:21:49'),
('9cac326d-1910-4e14-9ff3-ae843a8dc743', '9cac326d-173a-4cb6-aa8e-9a9cd7203747', '23-MKU-SUBCPMK-0411', 'Mampu menerapkan pemikiran logis, kritis, sistematis, dan inovatif dalam konteks pengembangan atau implementasi ilmu dan teknologi yang memperhatikan dan menerapkan nilai humaniora yang relevan', 'Berpikir logis dan analitis', 'Keterampilan Umum', '2024-08-02 14:25:43', '2024-08-03 00:21:49'),
('9cac326d-1cb8-417c-a574-f0800d389a10', '9cac326d-1b0f-41a4-9147-6b5f50b20b31', '23-MKU-SUBCPMK-0421', 'Mampu merencanakan, memantau, menyelesaikan, dan mengevaluasi tugas-tugas dalam aktivitas yang terencana', 'Pengelolaan tugas dan perbaikan berkelanjutan', 'Keterampilan Umum', '2024-08-02 14:25:43', '2024-08-03 00:21:49'),
('9cac326d-1e81-46b1-ae2a-58616a1d50b5', '9cac326d-1b0f-41a4-9147-6b5f50b20b31', '23-MKU-SUBCPMK-0422', 'Mampu mengidentifikasi, merumuskan, menganalisis, mengembangkan alternatif penyelesaian, dan menyelesaikan masalah dalam aktivitas yang terencana', 'Menyelesaikan masalah', 'Keterampilan Umum', '2024-08-02 14:25:43', '2024-08-03 00:21:49'),
('9cac326d-205f-480f-95a6-956256857be1', '9cac326d-1b0f-41a4-9147-6b5f50b20b31', '23-MKU-SUBCPMK-0423', 'Mampu menyusun deskripsi saintifik hasil kajian implikasi pengembangan/implementasi ilmu dan teknologi dalam bentuk poster, laporan, artikel atau karya ilmiah lainnya', 'Peyusunan laporan kegiatan ilmiah', 'Keterampilan Umum', '2024-08-02 14:25:43', '2024-08-03 00:21:49'),
('9cac326d-2205-40ed-bb4b-a55416383f78', '9cac326d-1b0f-41a4-9147-6b5f50b20b31', '23-MKU-SUBCPMK-0424', 'Menguasai konsep teoritis matematika, sains dan/atau material serta teknologi informasi secara umum untuk memperoleh pemahaman yang komprehensif tentang prinsip dasar suatu keilmuan', 'Pemahaman teori dasar', 'Pengetahuan', '2024-08-02 14:25:43', '2024-08-03 00:21:49');

-- --------------------------------------------------------

--
-- Table structure for table `total_hasil_pembelajaran`
--

CREATE TABLE `total_hasil_pembelajaran` (
  `id_total_hasil_pembelajaran` char(36) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_hasil_pembelajaran` char(36) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `total` double NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `total_hasil_pembelajaran`
--

INSERT INTO `total_hasil_pembelajaran` (`id_total_hasil_pembelajaran`, `id_hasil_pembelajaran`, `total`, `created_at`, `updated_at`) VALUES
('9caf5755-dc6d-44f5-850d-c217dbd77b80', '9caf563b-6e44-4749-a13b-160217d5e320', 8324.06, '2024-08-04 03:56:24', '2024-08-04 03:56:24'),
('9caf5755-df52-4070-8342-ee6d3c8cf2f8', '9caf567d-ee1c-4bd9-b6f3-829ea4ed2505', 8167.06, '2024-08-04 03:56:24', '2024-08-04 03:56:24'),
('9caf5755-e0b9-4683-a12f-6c90b8bea18f', '9caf56ac-3c51-4c6e-81db-ee8eca57c43f', 8265.08, '2024-08-04 03:56:24', '2024-08-04 03:56:24'),
('9caf5755-e2da-4d3b-8ad6-47b454a76ee8', '9caf56bc-dec8-41e6-827f-0d825f2b55bc', 7809.54, '2024-08-04 03:56:24', '2024-08-04 03:56:24'),
('9caf5755-e4c6-449f-ab21-a1619fb4dd62', '9caf56cf-b04c-4e55-aa8b-0d543b6546fe', 8800.1, '2024-08-04 03:56:24', '2024-08-04 03:56:24'),
('9caf5755-e65f-41ab-9a6a-2cb09857f0e0', '9caf56e0-9c1b-4900-a83e-f189ca8a8524', 8187.56, '2024-08-04 03:56:24', '2024-08-04 03:56:24'),
('9caf5755-e7c2-4152-9abc-a98592652cc2', '9caf56f1-634a-4716-ad9b-565efc8ecede', 7595.06, '2024-08-04 03:56:24', '2024-08-04 03:56:24');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` char(36) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `fullname` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fullname`, `username`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
('9cac25ec-1479-433a-9882-47059da3f8c5', 'admin', 'admin', 'admin@gmail.com', NULL, '$2y$10$nwxT9LkxHD6sS3laYg3ce.NF1IqOoSUvI6uPGA/fONvEAc/o2iCwe', NULL, '2024-08-02 13:50:45', '2024-08-02 13:50:45');

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
  ADD KEY `fk_kode_mata_kuliah_mapping_cpl` (`kode_mata_kuliah`),
  ADD KEY `fk_nama_mata_kuliah_mapping_cpl` (`nama_mata_kuliah`);

--
-- Indexes for table `indikator_kinerja_scpmk`
--
ALTER TABLE `indikator_kinerja_scpmk`
  ADD PRIMARY KEY (`id_indikator_kinerja_scpmk`),
  ADD KEY `fk_id_mapping_cpl_id_mapping_cpl` (`id_mapping_cpl`),
  ADD KEY `fk_indikator_kinerja_scpmk_kode_scpmk_kode_scpmk` (`indikator_kode_scpmk`);

--
-- Indexes for table `mapping_cpl`
--
ALTER TABLE `mapping_cpl`
  ADD PRIMARY KEY (`id_mapping_cpl`),
  ADD KEY `mapping_cpl_kode_mata_kuliah_index` (`kode_mata_kuliah`),
  ADD KEY `mapping_cpl_nama_mata_kuliah_index` (`nama_mata_kuliah`),
  ADD KEY `fk_kode_cpl_kode_cpl` (`kode_cpl`),
  ADD KEY `fk_kode_cpmk_kode_cpmk` (`kode_cpmk`),
  ADD KEY `fk_kode_scpmk_kode_scpmk` (`kode_scpmk`);

--
-- Indexes for table `mata_kuliah`
--
ALTER TABLE `mata_kuliah`
  ADD PRIMARY KEY (`id_mata_kuliah`),
  ADD KEY `fk_id_scpmk_id_scpmk` (`id_scpmk`),
  ADD KEY `kode_mata_kuliah` (`kode_mata_kuliah`),
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
  ADD UNIQUE KEY `users_username_unique` (`username`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_fullname_index` (`fullname`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

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
-- Constraints for table `indikator_kinerja_scpmk`
--
ALTER TABLE `indikator_kinerja_scpmk`
  ADD CONSTRAINT `fk_id_mapping_cpl_id_mapping_cpl` FOREIGN KEY (`id_mapping_cpl`) REFERENCES `mapping_cpl` (`id_mapping_cpl`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_indikator_kinerja_scpmk_kode_scpmk_kode_scpmk` FOREIGN KEY (`indikator_kode_scpmk`) REFERENCES `sub_capaian_pembelajaran_mata_kuliah` (`kode_scpmk`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `mapping_cpl`
--
ALTER TABLE `mapping_cpl`
  ADD CONSTRAINT `fk_kode_cpl_kode_cpl` FOREIGN KEY (`kode_cpl`) REFERENCES `capaian_pembelajaran_lulusan` (`kode_cpl`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_kode_cpmk_kode_cpmk` FOREIGN KEY (`kode_cpmk`) REFERENCES `capaian_pembelajaran_mata_kuliah` (`kode_cpmk`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_kode_mata_kuliah_mata_kuliah` FOREIGN KEY (`kode_mata_kuliah`) REFERENCES `mata_kuliah` (`kode_mata_kuliah`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_kode_scpmk_kode_scpmk` FOREIGN KEY (`kode_scpmk`) REFERENCES `sub_capaian_pembelajaran_mata_kuliah` (`kode_scpmk`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_nama_mata_kuliah_mata_kuliah` FOREIGN KEY (`nama_mata_kuliah`) REFERENCES `mata_kuliah` (`nama_mata_kuliah`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `mata_kuliah`
--
ALTER TABLE `mata_kuliah`
  ADD CONSTRAINT `fk_id_scpmk_id_scpmk` FOREIGN KEY (`id_scpmk`) REFERENCES `sub_capaian_pembelajaran_mata_kuliah` (`id_scpmk`) ON DELETE CASCADE ON UPDATE CASCADE;

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
