-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 31 Bulan Mei 2023 pada 15.21
-- Versi server: 10.4.21-MariaDB
-- Versi PHP: 7.3.31

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
-- Struktur dari tabel `asal_sekolah`
--

CREATE TABLE `asal_sekolah` (
  `id` int(11) NOT NULL,
  `id_mahasiswa` int(11) NOT NULL,
  `nama_sekolah` varchar(50) NOT NULL,
  `alamat_sekolah` varchar(255) NOT NULL,
  `tahun_masuk` varchar(50) NOT NULL,
  `tahun_lulus` varchar(50) NOT NULL,
  `jurusan` varchar(50) NOT NULL,
  `nilai_rata` varchar(50) NOT NULL,
  `kabupaten` varchar(50) NOT NULL,
  `provinsi` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `berkas_wajib`
--

CREATE TABLE `berkas_wajib` (
  `id` int(11) NOT NULL,
  `id_mahasiswa` int(100) NOT NULL,
  `ijazah` varchar(100) NOT NULL,
  `skhu` varchar(100) NOT NULL,
  `raport` varchar(100) NOT NULL,
  `keterangan_lulus` varchar(100) NOT NULL,
  `kartu_keluarga` varchar(100) NOT NULL,
  `file_ktp` varchar(100) NOT NULL,
  `file_foto` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `berkas_wajib`
--

INSERT INTO `berkas_wajib` (`id`, `id_mahasiswa`, `ijazah`, `skhu`, `raport`, `keterangan_lulus`, `kartu_keluarga`, `file_ktp`, `file_foto`) VALUES
(2, 20, 'laporan24.pdf', 'laporan24.pdf', 'laporan24.pdf', 'laporan24.pdf', 'laporan24.pdf', 'laporan22.pdf', 'laporan26.pdf');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_ortu`
--

CREATE TABLE `data_ortu` (
  `id` int(11) NOT NULL,
  `id_mahasiswa` int(11) NOT NULL,
  `nama_ayah` varchar(50) NOT NULL,
  `TTL` varchar(255) NOT NULL,
  `nik` varchar(50) NOT NULL,
  `nomor_ayah` varchar(30) NOT NULL,
  `pekerjaan_ayah` varchar(50) NOT NULL,
  `pendidikan_ayah` varchar(50) NOT NULL,
  `penghasilan_ayah` varchar(50) NOT NULL,
  `nama_ibu` varchar(100) NOT NULL,
  `TTL_ibu` varchar(50) NOT NULL,
  `nik_ibu` varchar(100) NOT NULL,
  `nomor_ibu` varchar(50) NOT NULL,
  `pekerjaan_ibu` varchar(50) NOT NULL,
  `pendidikan_ibu` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `data_ortu`
--

INSERT INTO `data_ortu` (`id`, `id_mahasiswa`, `nama_ayah`, `TTL`, `nik`, `nomor_ayah`, `pekerjaan_ayah`, `pendidikan_ayah`, `penghasilan_ayah`, `nama_ibu`, `TTL_ibu`, `nik_ibu`, `nomor_ibu`, `pekerjaan_ibu`, `pendidikan_ibu`) VALUES
(1, 20, 'dsdsa', 'ssd', '34234', 'sadas', 'asdsa', 'asdsa', 'asdas', 'sadsa', 'asdsa', 'asdsa', 'asdsa', 'asdasa', 'sadasad');

-- --------------------------------------------------------

--
-- Struktur dari tabel `hasil_seleksi`
--

CREATE TABLE `hasil_seleksi` (
  `id` int(11) NOT NULL,
  `id_pendaftaran` int(11) NOT NULL,
  `status_hasil` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `hasil_seleksi`
--

INSERT INTO `hasil_seleksi` (`id`, `id_pendaftaran`, `status_hasil`) VALUES
(10, 14, 0),
(11, 15, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `nama_lengkap` varchar(50) NOT NULL,
  `jenis_kelamin` varchar(15) NOT NULL,
  `TTL` varchar(50) NOT NULL,
  `agama` varchar(50) NOT NULL,
  `NIK` varchar(50) NOT NULL,
  `NPWP` varchar(50) NOT NULL,
  `kartu_keluarga` varchar(50) NOT NULL,
  `akta` varchar(50) NOT NULL,
  `no_hp` varchar(15) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `rtrw` varchar(50) NOT NULL,
  `desa` varchar(50) NOT NULL,
  `kecamatan` varchar(50) NOT NULL,
  `kabupaten` varchar(50) NOT NULL,
  `provinsi` varchar(50) NOT NULL,
  `penerima_kps` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `mahasiswa`
--

INSERT INTO `mahasiswa` (`id`, `id_user`, `nama_lengkap`, `jenis_kelamin`, `TTL`, `agama`, `NIK`, `NPWP`, `kartu_keluarga`, `akta`, `no_hp`, `alamat`, `rtrw`, `desa`, `kecamatan`, `kabupaten`, `provinsi`, `penerima_kps`) VALUES
(1, 20, 'Agung', 'laki-laki', 'Sumbawa, 14 Agustus 2000', 'Islam', '3423423423423423', '342342', '2342343', '34223', '224234', 'Sumabwa', '008/003', 'kebayan', 'sumbawa besar', 'sumbawa', 'ntb', 'ya');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pembayaran`
--

CREATE TABLE `pembayaran` (
  `id` int(11) NOT NULL,
  `nama_bank` varchar(255) NOT NULL,
  `nomor_rek` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pembayaran`
--

INSERT INTO `pembayaran` (`id`, `nama_bank`, `nomor_rek`) VALUES
(2, 'Mandiri', '34534343'),
(4, 'Novia Riska Aulia', '123456789');

-- --------------------------------------------------------

--
-- Struktur dari tabel `penerima_beasiswa`
--

CREATE TABLE `penerima_beasiswa` (
  `id` int(11) NOT NULL,
  `id_mahasiswa` int(11) NOT NULL,
  `sktm` varchar(100) NOT NULL,
  `penghasilan_ortu` varchar(100) NOT NULL,
  `piagam` varchar(100) NOT NULL,
  `bantuan` varchar(100) NOT NULL,
  `foto_rumah` varchar(100) NOT NULL,
  `rekening_listrik` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `penerima_beasiswa`
--

INSERT INTO `penerima_beasiswa` (`id`, `id_mahasiswa`, `sktm`, `penghasilan_ortu`, `piagam`, `bantuan`, `foto_rumah`, `rekening_listrik`) VALUES
(1, 20, 'laporan23.pdf', 'laporan23.pdf', 'laporan23.pdf', 'laporan23.pdf', 'laporan23.pdf', 'laporan23.pdf');

-- --------------------------------------------------------

--
-- Struktur dari tabel `program_studi`
--

CREATE TABLE `program_studi` (
  `id` int(11) NOT NULL,
  `nama_programstudi` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `setting`
--

CREATE TABLE `setting` (
  `id` int(11) NOT NULL,
  `facebook` varchar(255) NOT NULL,
  `instagram` varchar(255) NOT NULL,
  `alamat_lengkap` varchar(255) NOT NULL,
  `google_maps` text NOT NULL,
  `logo_website` varchar(255) NOT NULL,
  `nama_website` varchar(255) NOT NULL,
  `icon_website` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `setting`
--

INSERT INTO `setting` (`id`, `facebook`, `instagram`, `alamat_lengkap`, `google_maps`, `logo_website`, `nama_website`, `icon_website`) VALUES
(3, 'https://www.facebook.com/', 'https://www.instagram.com/', 'ini adalah update 2', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15773.448990531988!2d116.84584422587822!3d-8.751945749412812!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dcc65bc8c3f0541%3A0xf98bdc32d4193ccb!2sTaliwang%2C%20Kuang%2C%20Kec.%20Taliwang%2C%20Kabupaten%20Sumbawa%20Barat%2C%20Nusa%20Tenggara%20Bar.!5e0!3m2!1sid!2sid!4v1680974235679!5m2!1sid!2sid\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 'stais1.png', 'Sistem Penerimaan Mahasiswa Baru', 'stais.png');

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `nama_lengkap`, `nisn`, `npsn`, `asal_sekolah`, `email`, `jenis_kelamin`, `no_telepon`, `bukti_pembayaran`, `password`, `role_id`, `status`, `date_created`) VALUES
(1, 'admin', 'admin', '', '', '', 'admin@gmail.com', 'L', '', '', '$2y$10$6.35X47jsMFzYk5EDwZS4ueTChbDZ64P3QMt9J/XbCrijt5cFSLNC', 1, 1, '0000-00-00 00:00:00'),
(18, '1901013044', 'Rizky Adi Ryanto', '1901013044', '3456', '  SMPN 3 BOLO', 'rizky@gmail.com', 'L', '32423423', 'pamflet_commin_soon.png', '$2y$10$Ow.cTeacnFfEDJDJU/yKVeKwFSkr0TbSia3dCh5gLn4TKzjx6M80e', 2, 1, '2023-03-26 21:57:48'),
(20, '123', 'agung', '123', '3456', '  SMPN 3 BOLO', 'test@gmail.com', 'L', '32423423', 'Book11.pdf', '$2y$10$9/FB.pnvJAu99ZXTIKF4yOip93v4cjsd7h.XdeULybt5M3uRdvw0a', 2, 1, '2023-04-01 19:41:16'),
(22, '12345', 'herisman', '12345', '12345', '  SMPN 3 BOLO', 'osama@gmail.com', 'L', '085333411680', 'Screenshot_(3)1.png', '$2y$10$6M4bO/46enG4u/9Geeceoeg9dbjA3aU33CtWpkd9xxZDFOdR7mxMu', 2, 1, '2023-04-06 17:32:09'),
(23, '456', 'man', '456', '567', '  SMPN 3 BOLO', 'admin@gmail.com', 'L', '085333411680', 'dewi.pdf', '$2y$10$72N.Tn2/WSQG6oa86WhDk.uIcerCV5rNyTLVDYcg7jyLIVzPSLaKq', 2, 1, '2023-04-07 08:30:00'),
(24, '555', 'jainudin', '555', '555', '  SMPN 3 BOLO', 'wardatuljannah0707@gmail.com', 'L', '085333411680', 'PROPOSAL_DATA_TERDISTRIBUSI.pdf', '$2y$10$ezEkAO.6S6Q2lMk7j7jCe.BYq20v.Q6IwvJvBvr.vXQYa0AozpXmu', 2, 1, '2023-04-08 17:48:13'),
(25, '888', 'angga', '888', '888', '  SMPN 3 BOLO', 'osama@gmail.com', 'L', '085333411680', '293505-perancangan-data-warehouse-pemetaan-data-a52d3f38.pdf', '$2y$10$ChEgI4Cw/2/D7lPfp07Q0.IWU01F387ui485dTBwv.N2RivLKVavS', 2, 1, '2023-04-11 01:33:46'),
(26, '6666666', 'Novia Riska Aulia', '6666666', '777777', 'Smp 1 ', 'noviariska1711@gmail.com', 'P', '082340261382', 'brimo20230508-072251.png', '$2y$10$WW4wUneVRiegPy5Yt50dQewhrQR4o/pkuMhtYgTkR3PckFQX7V3z.', 2, 0, '2023-05-09 06:25:38');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `asal_sekolah`
--
ALTER TABLE `asal_sekolah`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `berkas_wajib`
--
ALTER TABLE `berkas_wajib`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `data_ortu`
--
ALTER TABLE `data_ortu`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `hasil_seleksi`
--
ALTER TABLE `hasil_seleksi`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `penerima_beasiswa`
--
ALTER TABLE `penerima_beasiswa`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `program_studi`
--
ALTER TABLE `program_studi`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `setting`
--
ALTER TABLE `setting`
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
-- AUTO_INCREMENT untuk tabel `asal_sekolah`
--
ALTER TABLE `asal_sekolah`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `berkas_wajib`
--
ALTER TABLE `berkas_wajib`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `data_ortu`
--
ALTER TABLE `data_ortu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `hasil_seleksi`
--
ALTER TABLE `hasil_seleksi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `pembayaran`
--
ALTER TABLE `pembayaran`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `penerima_beasiswa`
--
ALTER TABLE `penerima_beasiswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `program_studi`
--
ALTER TABLE `program_studi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `setting`
--
ALTER TABLE `setting`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
