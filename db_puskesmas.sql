-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 22 Apr 2021 pada 10.56
-- Versi server: 10.4.8-MariaDB
-- Versi PHP: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_puskesmas`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `pasien`
--

CREATE TABLE `pasien` (
  `id_pasien` int(11) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `nik` varchar(20) NOT NULL,
  `tempatLahir` varchar(50) NOT NULL,
  `tanggalLahir` date NOT NULL,
  `jenisKelamin` varchar(20) NOT NULL,
  `noTelepon` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `pekerjaan` varchar(100) NOT NULL,
  `bpjs` varchar(20) NOT NULL,
  `vaksin` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pasien`
--

INSERT INTO `pasien` (`id_pasien`, `nama`, `nik`, `tempatLahir`, `tanggalLahir`, `jenisKelamin`, `noTelepon`, `email`, `pekerjaan`, `bpjs`, `vaksin`) VALUES
(11, 'Christina Prilla', '2490834723847', 'Jogja', '2001-05-05', 'Perempuan', '081573038425', 'prillarosaria@upi.edu', 'Mahasiswa', '2148137493287', 'Sudah'),
(12, 'Andreas Pudyantoro', '237372874824', 'Pekanbaru', '1971-02-04', 'Laki-laki', '08132746312', 'andreaspudyantoro@gmail.com', 'TNI-AU', '1243143535', 'Belum'),
(13, 'Tatik Hariyanti', '232849744221', 'Magelang', '1973-11-13', 'Perempuan', '0815720998', 'tatik@gmail.com', 'Ibu Rumah Tangga', '028371349314', 'Sudah');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `pasien`
--
ALTER TABLE `pasien`
  ADD PRIMARY KEY (`id_pasien`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `pasien`
--
ALTER TABLE `pasien`
  MODIFY `id_pasien` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
