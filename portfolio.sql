-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 25 Mar 2021 pada 08.35
-- Versi server: 10.4.14-MariaDB
-- Versi PHP: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `portfolio`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `about`
--

CREATE TABLE `about` (
  `id` int(11) NOT NULL,
  `text` text NOT NULL,
  `foto` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `about`
--

INSERT INTO `about` (`id`, `text`, `foto`) VALUES
(1, 'Nama Saya Zaky Putra Kresya. Saya tinggal di Depok ( Jawa Barat ).\r\nSaya sedang belajar di Sekolah SMK Taruna Bhakti.\r\nKekuatan saya adalah motivasi diri saya sendiri.\r\nKeahlian saya pada web developer saya kira pada bagian Back-End, Karena saya kalo desain jelek bang awkowkw.', 'https://static.thenounproject.com/png/17241-200.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin_user`
--

CREATE TABLE `admin_user` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `admin_user`
--

INSERT INTO `admin_user` (`id`, `nama`, `username`, `password`) VALUES
(1, 'Zaky Putra ( Admin )', 'admin', '46cf4fd4c165b7e35878cd4e2c913d77');

-- --------------------------------------------------------

--
-- Struktur dari tabel `galerry`
--

CREATE TABLE `galerry` (
  `id_galeri` int(11) NOT NULL,
  `link_foto` text NOT NULL,
  `nama_foto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `galerry`
--

INSERT INTO `galerry` (`id_galeri`, `link_foto`, `nama_foto`) VALUES
(1, 'https://i.ytimg.com/vi/XhINzQTgheA/maxresdefault.jpg', 'Darcy'),
(2, 'https://i.ytimg.com/vi/JOkqqqDnQpI/maxresdefault.jpg', 'Florentin'),
(3, 'https://i.ytimg.com/vi/hlAsjrW5Q-s/maxresdefault.jpg', 'Veres'),
(4, 'https://aovpro.net/wp-content/uploads/2021/03/laville-heavenly-striker-thumbnail.jpg', 'Laville'),
(5, 'https://storage.support.garena.co.id/media/repository/AOV/Wallpaper/HD%20Size/Heavenly%20Striker%20Airi%20Wallpaper%203.jpg', 'Airi'),
(6, 'https://storage.support.garena.co.id/media/repository/AOV/WOTW/24%20sept%202020/web__750x420_celestial-clash.jpg', 'Nakroth');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pesan`
--

CREATE TABLE `pesan` (
  `id` int(11) NOT NULL,
  `nama` text DEFAULT NULL,
  `email` text DEFAULT NULL,
  `pesan` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pesan`
--

INSERT INTO `pesan` (`id`, `nama`, `email`, `pesan`) VALUES
(2, 'Ali Ghufron', 'ali.ag33@gmail.com', 'Wah keren banged xixixi'),
(10, 'akowakwoakawo', 'zakyputrakresya@gmail.com', 'Keren'),
(11, 'Andi Saputra', 'rasyxia@gmail.com', 'Bagus dan keren');

-- --------------------------------------------------------

--
-- Struktur dari tabel `profile`
--

CREATE TABLE `profile` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `bio` text NOT NULL,
  `foto` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `profile`
--

INSERT INTO `profile` (`id`, `nama`, `bio`, `foto`) VALUES
(1, 'Zaky Putra Kresya', 'Back End Developer', 'https://image.freepik.com/free-vector/cute-zebra-working-laptop-cartoon-icon-illustration_138676-2795.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `sosmed`
--

CREATE TABLE `sosmed` (
  `id` int(11) NOT NULL,
  `wa` text NOT NULL,
  `ig` text NOT NULL,
  `fb` text NOT NULL,
  `github` text NOT NULL,
  `twitter` text NOT NULL,
  `linkedin` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `sosmed`
--

INSERT INTO `sosmed` (`id`, `wa`, `ig`, `fb`, `github`, `twitter`, `linkedin`) VALUES
(0, '6282111021268', 'zakyputrakresya', 'zakyputrakresya', 'ZakyPutraKresya', '#', '#');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `admin_user`
--
ALTER TABLE `admin_user`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `galerry`
--
ALTER TABLE `galerry`
  ADD PRIMARY KEY (`id_galeri`);

--
-- Indeks untuk tabel `pesan`
--
ALTER TABLE `pesan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `profile`
--
ALTER TABLE `profile`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `sosmed`
--
ALTER TABLE `sosmed`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `about`
--
ALTER TABLE `about`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `admin_user`
--
ALTER TABLE `admin_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `galerry`
--
ALTER TABLE `galerry`
  MODIFY `id_galeri` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `pesan`
--
ALTER TABLE `pesan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `profile`
--
ALTER TABLE `profile`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
