-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 12 Mei 2018 pada 16.36
-- Versi Server: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gen_bahagia`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `donasi`
--

CREATE TABLE `donasi` (
  `id_donasi` int(1) NOT NULL,
  `user_id` int(1) NOT NULL,
  `pembayaran_id` int(1) NOT NULL,
  `nominal` varchar(50) NOT NULL,
  `hp` varchar(13) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `genbaru`
--

CREATE TABLE `genbaru` (
  `id_genbaru` int(1) NOT NULL,
  `user_id` int(1) DEFAULT NULL,
  `nama` varchar(120) NOT NULL,
  `ttl` date NOT NULL,
  `alamat` varchar(256) NOT NULL,
  `hobby` text,
  `citacita` text,
  `deskripsi` text NOT NULL,
  `foto` blob,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `genbaru`
--

INSERT INTO `genbaru` (`id_genbaru`, `user_id`, `nama`, `ttl`, `alamat`, `hobby`, `citacita`, `deskripsi`, `foto`, `created_at`, `updated_at`) VALUES
(3, NULL, 'bela', '1997-11-10', 'afgfsgf', 'fdghgh', NULL, 'sdhgfnc bels', NULL, '2017-05-22 01:35:21', '2017-05-22 01:35:21');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pembayaran`
--

CREATE TABLE `pembayaran` (
  `id_pembayaran` int(1) NOT NULL,
  `nama_rek` varchar(120) NOT NULL,
  `no_rek` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pembayaran`
--

INSERT INTO `pembayaran` (`id_pembayaran`, `nama_rek`, `no_rek`) VALUES
(1, 'Bank Rakyat Indonesia (BRI)', '147801000801501'),
(2, 'Bank Central Asia (BCA)', '09876689865676789'),
(3, 'Danamon', '348591827483748'),
(4, 'Panin Bank', '937491930438275'),
(5, 'Bank Negara Indonesia (BNI)', '834729792358723'),
(6, 'Bank Mandiri', '89359561083465398');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengguna`
--

CREATE TABLE `pengguna` (
  `id_user` int(1) NOT NULL,
  `nama` varchar(120) NOT NULL,
  `email` varchar(50) NOT NULL,
  `hp` varchar(13) NOT NULL,
  `ttl` date NOT NULL,
  `password` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pengguna`
--

INSERT INTO `pengguna` (`id_user`, `nama`, `email`, `hp`, `ttl`, `password`, `created_at`, `updated_at`) VALUES
(12, '5115100013', 'arijnafi@gmail.com', '6879', '7868-06-21', 'shaggy', '2018-05-01 03:03:04', '2018-05-01 03:03:04');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `donasi`
--
ALTER TABLE `donasi`
  ADD PRIMARY KEY (`id_donasi`),
  ADD KEY `user_id` (`user_id`,`pembayaran_id`),
  ADD KEY `pembayaran_id` (`pembayaran_id`);

--
-- Indexes for table `genbaru`
--
ALTER TABLE `genbaru`
  ADD PRIMARY KEY (`id_genbaru`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD PRIMARY KEY (`id_pembayaran`);

--
-- Indexes for table `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `donasi`
--
ALTER TABLE `donasi`
  MODIFY `id_donasi` int(1) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `genbaru`
--
ALTER TABLE `genbaru`
  MODIFY `id_genbaru` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `pembayaran`
--
ALTER TABLE `pembayaran`
  MODIFY `id_pembayaran` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `pengguna`
--
ALTER TABLE `pengguna`
  MODIFY `id_user` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `donasi`
--
ALTER TABLE `donasi`
  ADD CONSTRAINT `donasi_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `pengguna` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `donasi_ibfk_2` FOREIGN KEY (`pembayaran_id`) REFERENCES `pembayaran` (`id_pembayaran`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `genbaru`
--
ALTER TABLE `genbaru`
  ADD CONSTRAINT `genbaru_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `pengguna` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
