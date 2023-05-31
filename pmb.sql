-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Waktu pembuatan: 03 Apr 2023 pada 13.06
-- Versi server: 10.4.27-MariaDB
-- Versi PHP: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pmb`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `hasil_seleksi`
--

CREATE TABLE `hasil_seleksi` (
  `id` int(11) NOT NULL,
  `id_pendaftaran` int(11) NOT NULL,
  `status` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `hasil_seleksi`
--

INSERT INTO `hasil_seleksi` (`id`, `id_pendaftaran`, `status`) VALUES
(10, 14, 1),
(11, 15, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pendaftaran`
--

CREATE TABLE `pendaftaran` (
  `id` int(11) NOT NULL,
  `nama_lengkap` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `nisn` varchar(255) NOT NULL,
  `npsn` varchar(255) NOT NULL,
  `tempat_lahir` varchar(255) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `asal_sekolah` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `no_telepon` varchar(255) NOT NULL,
  `jenis_kelamin` varchar(255) NOT NULL,
  `ijazah` varchar(255) DEFAULT NULL,
  `ktp` varchar(255) DEFAULT NULL,
  `sktm` varchar(255) DEFAULT NULL,
  `status` int(2) NOT NULL,
  `date_created` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `pendaftaran`
--

INSERT INTO `pendaftaran` (`id`, `nama_lengkap`, `email`, `nisn`, `npsn`, `tempat_lahir`, `tanggal_lahir`, `asal_sekolah`, `alamat`, `no_telepon`, `jenis_kelamin`, `ijazah`, `ktp`, `sktm`, `status`, `date_created`) VALUES
(14, 'Rizky Adi Ryanto', 'rizky@gmail.com', '1901013044', '3456', 'Bima  ', '2023-03-27', '  SMPN 3 BOLO', 'Sumbawa', '32423423', 'L', 'bem-removebg-preview3.png', 'bem3.png', 'pamflet_commin_soon5.png', 1, '2023-03-26 22:00:49'),
(15, 'agung', 'test@gmail.com', '123', '3456', 'Bima  ', '2023-04-02', '  SMPN 3 BOLO', 'sumbawa', '32423423', 'L', 'ayank.pdf', 'Book1.pdf', 'bem4.png', 1, '2023-04-01 19:43:30');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `nama_lengkap` varchar(255) NOT NULL,
  `nisn` varchar(255) DEFAULT NULL,
  `npsn` varchar(255) DEFAULT NULL,
  `asal_sekolah` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `jenis_kelamin` varchar(255) NOT NULL,
  `no_telepon` varchar(255) NOT NULL,
  `bukti_pembayaran` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role_id` int(2) NOT NULL,
  `status` int(2) NOT NULL,
  `date_created` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `nama_lengkap`, `nisn`, `npsn`, `asal_sekolah`, `email`, `jenis_kelamin`, `no_telepon`, `bukti_pembayaran`, `password`, `role_id`, `status`, `date_created`) VALUES
(1, 'admin', 'admin', '', '', '', 'admin@gmail.com', 'L', '', '', '$2y$10$6.35X47jsMFzYk5EDwZS4ueTChbDZ64P3QMt9J/XbCrijt5cFSLNC', 1, 1, '0000-00-00 00:00:00'),
(18, '1901013044', 'Rizky Adi Ryanto', '1901013044', '3456', '  SMPN 3 BOLO', 'rizky@gmail.com', 'L', '32423423', 'pamflet_commin_soon.png', '$2y$10$Ow.cTeacnFfEDJDJU/yKVeKwFSkr0TbSia3dCh5gLn4TKzjx6M80e', 2, 1, '2023-03-26 21:57:48'),
(20, '123', 'agung', '123', '3456', '  SMPN 3 BOLO', 'test@gmail.com', 'L', '32423423', 'Book11.pdf', '$2y$10$9/FB.pnvJAu99ZXTIKF4yOip93v4cjsd7h.XdeULybt5M3uRdvw0a', 2, 1, '2023-04-01 19:41:16');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `hasil_seleksi`
--
ALTER TABLE `hasil_seleksi`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pendaftaran`
--
ALTER TABLE `pendaftaran`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `hasil_seleksi`
--
ALTER TABLE `hasil_seleksi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `pendaftaran`
--
ALTER TABLE `pendaftaran`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
