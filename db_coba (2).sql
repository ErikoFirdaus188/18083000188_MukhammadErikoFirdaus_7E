-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 14 Nov 2021 pada 11.02
-- Versi server: 10.4.19-MariaDB
-- Versi PHP: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_coba`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `login`
--

INSERT INTO `login` (`id`, `username`, `email`, `password`) VALUES
(1, 'eriko99', 'erikofirdaus726@gmail.com', 'd8578edf8458ce06fbc5bb76a58c5ca4'),
(2, 'eriko', 'firdaus_erico@yahoo.co.id', '81dc9bdb52d04dc20036dbd8313ed055'),
(5, 'dhea', 'dhea12@yahoo.co.id', '08a76ccb496d9a85a7b0b9c6e698b4ca');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id` int(10) NOT NULL,
  `Nama` varchar(50) NOT NULL,
  `nim` varchar(12) NOT NULL,
  `Jurusan` varchar(50) NOT NULL,
  `jk` varchar(10) NOT NULL,
  `alamat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `mahasiswa`
--

INSERT INTO `mahasiswa` (`id`, `Nama`, `nim`, `Jurusan`, `jk`, `alamat`) VALUES
(59, 'Mukhammad Eriko Firdaus', '18083000188 ', 'Sistem Informasi', 'Perempuan', 'Jl. Perum Graha Citra No.32 Malang'),
(60, 'Amanda', '18083000643', 'Sistem Informasi', 'Perempuan', 'Jl. Perum Indah no.3'),
(61, 'Irma Dyah Alfianti', '20010003122', 'Ilmu Sosial dan Politik', 'Perempuan', 'Jl. Pahlawan No.21 Malang'),
(62, 'Halim Bayu', '1903000129', 'Psikologi', 'Laki-laki', 'Jl. Negeri Tua No.9'),
(63, 'Dheanira', '18083000212', 'Sistem Informasi', 'Perempuan', 'Jl. Grya Santa No.6 Malang');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
