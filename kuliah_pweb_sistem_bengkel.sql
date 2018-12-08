-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 08 Des 2018 pada 11.44
-- Versi Server: 10.1.26-MariaDB
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kuliah_pweb_sistem_bengkel`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `detail_transaksi`
--

CREATE TABLE `detail_transaksi` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_transaksi` int(10) UNSIGNED NOT NULL,
  `id_jenis_transaksi` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `detail_transaksi`
--

INSERT INTO `detail_transaksi` (`id`, `id_transaksi`, `id_jenis_transaksi`) VALUES
(1, 3, 7);

-- --------------------------------------------------------

--
-- Struktur dari tabel `jenis_transaksi`
--

CREATE TABLE `jenis_transaksi` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `jenis_transaksi`
--

INSERT INTO `jenis_transaksi` (`id`, `nama`) VALUES
(1, 'Ganti Ban'),
(2, 'Ganti Oli'),
(3, 'Ganti Mesin'),
(4, 'Tambal Ban'),
(5, 'Perbaikan Rem'),
(7, 'Servis Idling Stop System'),
(11, 'JJ'),
(14, 'jdksds');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pelanggan`
--

CREATE TABLE `pelanggan` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_ktp` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `no_hp` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alamat` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `pelanggan`
--

INSERT INTO `pelanggan` (`id`, `nama`, `no_ktp`, `no_hp`, `alamat`, `created_at`, `updated_at`) VALUES
(1, 'Hairul Anam', '9999', '087654321123', NULL, '2018-09-22 00:16:38', '2018-09-22 00:16:38');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengaturan`
--

CREATE TABLE `pengaturan` (
  `id` int(10) UNSIGNED NOT NULL,
  `skin` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `layout` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sidebar` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `teks_dasbor` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ikon_dasbor` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `teks_pengaturan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ikon_pengaturan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `teks_keluar` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ikon_keluar` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `teks_profil` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ikon_profil` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tahun_berdiri` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `versi` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `favicon` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nama_sistem_kiri` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_sistem_kanan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_sistem_kiri_mobile` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_sistem_kanan_mobile` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lama_notifikasi` int(11) NOT NULL,
  `warning` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `danger` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `primary` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `info` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `success` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tombol_flat` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `pengaturan`
--

INSERT INTO `pengaturan` (`id`, `skin`, `layout`, `sidebar`, `teks_dasbor`, `ikon_dasbor`, `teks_pengaturan`, `ikon_pengaturan`, `teks_keluar`, `ikon_keluar`, `teks_profil`, `ikon_profil`, `tahun_berdiri`, `versi`, `favicon`, `nama_sistem_kiri`, `nama_sistem_kanan`, `nama_sistem_kiri_mobile`, `nama_sistem_kanan_mobile`, `lama_notifikasi`, `warning`, `danger`, `primary`, `info`, `success`, `tombol_flat`) VALUES
(1, 'skin-purple-light', 'layout-boxed', '', 'Dasbor', 'fa fa-dashboard', 'Pengaturan', 'fa fa-gear', 'Keluar', 'fa fa-sign-out', 'Profil', 'fa fa-user', '2018', '1.0.0', '', 'Sistem', 'Bengkel', 'S', 'B', 5000, '#f39c12', '#dd4b39', '#3c8dbc', '#00c0ef', '#00a65a', 'ya');

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi`
--

CREATE TABLE `transaksi` (
  `id` int(10) UNSIGNED NOT NULL,
  `no_nota` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_kendaraan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_kendaraan` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `no_plat` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `permasalahan` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `biaya` double NOT NULL,
  `uang_pembayaran` double NOT NULL,
  `id_pelanggan` int(10) UNSIGNED DEFAULT NULL,
  `id_user` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `transaksi`
--

INSERT INTO `transaksi` (`id`, `no_nota`, `jenis_kendaraan`, `nama_kendaraan`, `no_plat`, `permasalahan`, `biaya`, `uang_pembayaran`, `id_pelanggan`, `id_user`, `created_at`, `updated_at`) VALUES
(1, '201809251949331', 'Motor', 'Beat CW', 'P 5772 LU', 'Ban Bocor', 20000, 2000, NULL, 2, '2018-09-25 12:49:33', '2018-10-05 12:58:17'),
(2, '201809251950392', 'Motor', 'Beat CW', 'P 5772 LU', 'Ban bocor', 40000, 40000, NULL, 2, '2018-09-25 12:50:39', '2018-09-25 12:50:39'),
(3, '201809252002193', 'Motor', 'Beat CW', 'P 5772 LU', 'Ban Boco', 23000, 32000, NULL, 2, '2018-09-25 13:02:19', '2018-09-25 13:02:19');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `nama`, `username`, `password`, `role`) VALUES
(2, 'Administrator', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'Admin'),
(4, 'Manajer hiu', 'manajer', '69b731ea8f289cf16a192ce78a37b4f0', 'Manajer'),
(10, 'VALIDASI', 'validasi', 'c9c2b0d7a43dfaed5f978ae886a2aeac', 'Kasir');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `detail_transaksi`
--
ALTER TABLE `detail_transaksi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `detail_transaksi_id_transaksi_foreign` (`id_transaksi`),
  ADD KEY `detail_transaksi_id_jenis_transaksi_foreign` (`id_jenis_transaksi`);

--
-- Indexes for table `jenis_transaksi`
--
ALTER TABLE `jenis_transaksi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pengaturan`
--
ALTER TABLE `pengaturan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `transaksi_id_pelanggan_foreign` (`id_pelanggan`),
  ADD KEY `transaksi_id_user_foreign` (`id_user`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_username_unique` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `detail_transaksi`
--
ALTER TABLE `detail_transaksi`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `jenis_transaksi`
--
ALTER TABLE `jenis_transaksi`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `pelanggan`
--
ALTER TABLE `pelanggan`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pengaturan`
--
ALTER TABLE `pengaturan`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `detail_transaksi`
--
ALTER TABLE `detail_transaksi`
  ADD CONSTRAINT `detail_transaksi_id_jenis_transaksi_foreign` FOREIGN KEY (`id_jenis_transaksi`) REFERENCES `jenis_transaksi` (`id`) ON DELETE SET NULL ON UPDATE SET NULL,
  ADD CONSTRAINT `detail_transaksi_id_transaksi_foreign` FOREIGN KEY (`id_transaksi`) REFERENCES `transaksi` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  ADD CONSTRAINT `transaksi_id_pelanggan_foreign` FOREIGN KEY (`id_pelanggan`) REFERENCES `pelanggan` (`id`) ON DELETE SET NULL ON UPDATE SET NULL,
  ADD CONSTRAINT `transaksi_id_user_foreign` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
