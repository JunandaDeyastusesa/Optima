-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 21 Sep 2019 pada 11.46
-- Versi server: 10.1.37-MariaDB
-- Versi PHP: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `siswa`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `guru`
--

CREATE TABLE `guru` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `mapel` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `nip` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `guru` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `gambar` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tanggal_lahir` date NOT NULL,
  `jenis_kelamin` enum('L','P') COLLATE utf8_unicode_ci NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `guru`
--

INSERT INTO `guru` (`id`, `mapel`, `nip`, `guru`, `gambar`, `tanggal_lahir`, `jenis_kelamin`, `updated_at`, `created_at`) VALUES
(2, 'QW', '001', 'Sa', '1329.jpg', '2019-09-14', 'L', '2019-09-16 17:45:19', '2019-09-12 00:23:30'),
(70, 'MTK', '002', 'A', NULL, '2019-09-19', 'L', '2019-09-14 20:26:29', '2019-09-14 20:26:29'),
(73, 'MTK', '111', 'ABC', NULL, '2019-09-19', 'L', '2019-09-17 07:24:50', '2019-09-14 20:26:54'),
(75, 'OP', '222', 'OKE', NULL, '2019-09-05', 'L', '2019-09-14 20:35:20', '2019-09-14 20:35:20');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kelas`
--

CREATE TABLE `kelas` (
  `id` int(30) UNSIGNED NOT NULL,
  `nama_kelas` varchar(30) NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `id_siswa` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kelas`
--

INSERT INTO `kelas` (`id`, `nama_kelas`, `updated_at`, `created_at`, `id_siswa`) VALUES
(1, 'XI RPL 5', '2019-09-03 17:00:00', '2019-09-04 17:00:00', 3),
(3, 'XI RPL 4', '2019-09-05 08:48:30', '2019-09-05 08:48:30', 12),
(4, 'XI RPL 6', '2019-09-05 08:56:51', '2019-09-05 08:56:51', 9),
(5, 'XI RPL 7', '2019-09-05 08:57:28', '2019-09-05 08:57:28', 8),
(6, 'XI RPL 1', '2019-09-06 20:46:09', '2019-09-06 20:46:09', NULL),
(7, 'XI RPL 2', '2019-09-06 21:07:51', '2019-09-06 21:07:51', NULL),
(8, 'okeh', '2019-09-16 06:25:16', '2019-09-16 06:25:16', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_05_231525_create_table_siswa', 1),
(4, '2019_08_13_003449_create_model_users_table', 2),
(5, '2019_08_13_010605_create_model_users_table', 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('ok@gmail.com', '$2y$10$M0fbDgjFGHh11rwAXld6xeDaIKFpgqXO400rmXdsnhiy/XPyXpnJC', '2019-08-28 16:49:30');

-- --------------------------------------------------------

--
-- Struktur dari tabel `siswa`
--

CREATE TABLE `siswa` (
  `id` int(10) UNSIGNED NOT NULL,
  `nisn` varchar(4) COLLATE utf8_unicode_ci NOT NULL,
  `nama_siswa` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `jenis_kelamin` enum('L','P') COLLATE utf8_unicode_ci NOT NULL,
  `gambar` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `id_kelas` int(30) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `siswa`
--

INSERT INTO `siswa` (`id`, `nisn`, `nama_siswa`, `tanggal_lahir`, `jenis_kelamin`, `gambar`, `created_at`, `updated_at`, `id_kelas`) VALUES
(3, '1003', 'Chicken Dinner', '2019-08-02', 'P', 'Untitled-13.png', '2019-08-06 17:00:00', '2019-09-09 17:36:43', 1),
(4, '1004', 'okes', '2019-08-08', 'P', '1329.jpg', '2019-08-02 17:00:00', '2019-09-06 20:38:33', 5),
(6, '1239', 'selamanya', '2019-09-20', 'P', 'photo-camera.png', '2019-09-04 17:54:49', '2019-09-12 18:57:44', 1),
(7, '1234', 'ahemm', '6565-05-06', 'L', 'req memo cat.png', '2019-09-04 18:18:06', '2019-09-12 18:48:36', 5),
(8, '1111', 'Abim', '2019-09-06', 'L', 'WhatsApp Image 2019-08-22 at 09.10.22.jpeg', '2019-09-05 09:48:59', '2019-09-12 18:42:08', NULL),
(9, '2222', 'Budia', '2019-09-11', 'L', 'C:\\xampp\\tmp\\phpFDB8.tmp', '2019-09-05 10:00:47', '2019-09-05 10:00:47', NULL),
(10, '321', 'TES', '1999-02-12', 'L', '', '2019-09-05 10:05:02', '2019-09-05 10:05:02', NULL),
(12, '987', 'TES', '1999-02-12', 'P', '2.PNG', '2019-09-05 10:06:39', '2019-09-12 18:41:13', NULL),
(13, '999', 'iyo', '2019-09-04', 'L', 'Artboard 1.png', '2019-09-06 20:39:12', '2019-09-14 20:48:12', 6),
(14, '888', 'kjsbjhdf', '1900-03-12', 'P', 'Stiker2.png', '2019-09-06 20:40:12', '2019-09-06 20:42:14', NULL),
(15, '555', 'ggi', '2019-09-05', 'P', 'Untitled-13.png', '2019-09-06 20:42:45', '2019-09-12 18:57:36', 1),
(16, '000', 'Budia', '2006-12-31', 'L', 'Backup_of_Backup_of_Untitled-1.cdr', '2019-09-09 18:41:10', '2019-09-14 20:47:58', 3),
(17, '3423', 'Selvi', '2009-12-12', 'L', '2570443.jpg', '2019-09-09 20:39:17', '2019-09-12 18:49:57', 1),
(18, '001', 'Q', '2019-09-12', 'L', '1.PNG', '2019-09-12 18:16:08', '2019-09-12 18:16:08', 4),
(19, '002', 'Bem', '2019-09-12', 'L', 'texture_emas_pucukmonas.jpg', '2019-09-12 18:43:34', '2019-09-12 18:43:34', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `name`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'juna@gmail.com', '$2y$10$t./jnhqPUv3i8owaTbIzjONgJf.ymGFsXsOtF.iWAo39EfEd7ktB.', 'juna', NULL, '2019-08-21 23:32:54', '2019-08-21 23:32:54'),
(2, 'ju@gmail.com', '$2y$10$WhOH.icIX/bS./pxDFS0CeOKGx8RfTliY3.TKYe9d.SpfEHjSLBnO', 'ju', NULL, '2019-08-22 08:15:05', '2019-08-22 08:15:05'),
(3, 'ok@gmail.com', '$2y$10$U6kp9GDZ8S/nmG5Fg5nEHOeNvG83Jxm.7YrxsEQVN5p0mvWztJKfO', 'ok', NULL, '2019-08-28 16:48:51', '2019-08-28 16:48:51'),
(4, 'ok@gmi.ku', '$2y$10$EOTMCXttuDkqOFbACYU6ZO30BmqnlOPVV.eHc0.9cCFqvtPm5ksjG', 'ok', '2fWvlE1syceMnOupF5aMhz4icbQNTZrjeZeC7V1OMLSPyVAnwLcEeYYrdIG6', '2019-09-02 17:23:33', '2019-09-02 17:23:33'),
(5, 'bb@bbb.bb', '$2y$10$IPwsLDKICFNDCQW0vITQYesTMxvNSrSIkgitg0PERt1mHku1u5TLa', 'john', NULL, '2019-09-06 22:09:23', '2019-09-06 22:09:23'),
(6, 'o@aa.aa', '$2y$10$CLn3pEMZrk.YhaU21.kg6e.IqJBZ1nhyjXMOBlNtJgCXJFoP4TH8.', 'o', NULL, '2019-09-14 19:19:45', '2019-09-14 19:19:45');

-- --------------------------------------------------------

--
-- Struktur dari tabel `walikelas`
--

CREATE TABLE `walikelas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_kelas` int(30) UNSIGNED NOT NULL,
  `nip` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `walikelas`
--

INSERT INTO `walikelas` (`id`, `id_kelas`, `nip`, `updated_at`, `created_at`) VALUES
(86, 3, '111', '2019-09-19 19:17:03', '2019-09-16 20:08:09'),
(87, 4, '222', '2019-09-17 07:22:58', '2019-09-17 07:12:58'),
(88, 7, '001', '2019-09-17 07:24:31', '2019-09-17 07:23:34'),
(89, 8, '111', '2019-09-19 19:18:33', '2019-09-19 19:18:04'),
(90, 4, '002', '2019-09-19 19:19:08', '2019-09-19 19:19:08');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `guru`
--
ALTER TABLE `guru`
  ADD PRIMARY KEY (`id`),
  ADD KEY `nip` (`nip`);

--
-- Indeks untuk tabel `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_siswa` (`id_siswa`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `siswa_nisn_unique` (`nisn`),
  ADD KEY `id_kelas` (`id_kelas`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indeks untuk tabel `walikelas`
--
ALTER TABLE `walikelas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_kelas` (`id_kelas`),
  ADD KEY `nip` (`nip`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `guru`
--
ALTER TABLE `guru`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;

--
-- AUTO_INCREMENT untuk tabel `kelas`
--
ALTER TABLE `kelas`
  MODIFY `id` int(30) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `siswa`
--
ALTER TABLE `siswa`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `walikelas`
--
ALTER TABLE `walikelas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=91;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `siswa`
--
ALTER TABLE `siswa`
  ADD CONSTRAINT `siswa_ibfk_1` FOREIGN KEY (`id_kelas`) REFERENCES `kelas` (`id`);

--
-- Ketidakleluasaan untuk tabel `walikelas`
--
ALTER TABLE `walikelas`
  ADD CONSTRAINT `walikelas_ibfk_2` FOREIGN KEY (`id_kelas`) REFERENCES `kelas` (`id`),
  ADD CONSTRAINT `walikelas_ibfk_3` FOREIGN KEY (`nip`) REFERENCES `guru` (`nip`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
