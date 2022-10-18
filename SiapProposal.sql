-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 03 Apr 2019 pada 16.39
-- Versi server: 10.1.34-MariaDB
-- Versi PHP: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `SiapProposal`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `berkas_bimbingan`
--

CREATE TABLE `berkas_bimbingan` (
  `id` int(11) NOT NULL,
  `nrp` text NOT NULL,
  `filename` text NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `berkas_bimbingan`
--

INSERT INTO `berkas_bimbingan` (`id`, `nrp`, `filename`, `date`) VALUES
(6, '23', '05111640000041_IvandaZeviAmalia2.pdf', '2019-04-03 21:11:39');

-- --------------------------------------------------------

--
-- Struktur dari tabel `bidangminat`
--

CREATE TABLE `bidangminat` (
  `id` int(11) NOT NULL,
  `nama` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `bidangminat`
--

INSERT INTO `bidangminat` (`id`, `nama`) VALUES
(1, 'Minat 1'),
(2, 'Minat 2'),
(3, 'Minat 3');

-- --------------------------------------------------------

--
-- Struktur dari tabel `bukti_bimbingan`
--

CREATE TABLE `bukti_bimbingan` (
  `id` int(11) NOT NULL,
  `nrp` text NOT NULL,
  `filename` text NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `bukti_bimbingan`
--

INSERT INTO `bukti_bimbingan` (`id`, `nrp`, `filename`, `date`) VALUES
(6, '23', '7978043.jpg', '2019-04-03 21:11:39');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengajuan_judul`
--

CREATE TABLE `pengajuan_judul` (
  `id` int(11) NOT NULL,
  `nama` text NOT NULL,
  `nrp` text NOT NULL,
  `judul` text NOT NULL,
  `bidangminat` text NOT NULL,
  `berkas` text NOT NULL,
  `tanggal` date NOT NULL,
  `tanggalverif` date NOT NULL,
  `status` text NOT NULL,
  `info` text NOT NULL,
  `dosbing1` text NOT NULL,
  `dosbing2` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pengajuan_judul`
--

INSERT INTO `pengajuan_judul` (`id`, `nama`, `nrp`, `judul`, `bidangminat`, `berkas`, `tanggal`, `tanggalverif`, `status`, `info`, `dosbing1`, `dosbing2`) VALUES
(9, 'Ivanda Zevi Amalia', '23', 'Desain dan Analisis Algoritma Optimasi Linier pada Penyelesaian Permasalahan SPOJ FN16ROAD - Road Times', 'Minat 1', '05111640000041_IvandaZeviAmalia2.pdf', '2019-04-03', '0000-00-00', 'tolak', 'Tolak', '100', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengajuan_sidang`
--

CREATE TABLE `pengajuan_sidang` (
  `id` int(11) NOT NULL,
  `nama` text NOT NULL,
  `nrp` text NOT NULL,
  `tanggal` date NOT NULL,
  `judul` text NOT NULL,
  `jam` time NOT NULL,
  `status` text NOT NULL,
  `penguji` text NOT NULL,
  `tglsidang` date NOT NULL,
  `nilai` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pengajuan_sidang`
--

INSERT INTO `pengajuan_sidang` (`id`, `nama`, `nrp`, `tanggal`, `judul`, `jam`, `status`, `penguji`, `tglsidang`, `nilai`) VALUES
(6, 'Ivanda Zevi Amalia', '23', '2019-04-03', 'Desain dan Analisis Algoritma Optimasi Linier pada Penyelesaian Permasalahan SPOJ FN16ROAD - Road Times', '21:11:39', 'sidang', '102', '2019-04-06', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nrp` text NOT NULL,
  `password` text NOT NULL,
  `nama` text NOT NULL,
  `gender` text NOT NULL,
  `tipe` text NOT NULL,
  `photo` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `nrp`, `password`, `nama`, `gender`, `tipe`, `photo`) VALUES
(1, '23', 'user', 'Ivanda Zevi Amalia', 'perempuan', 'mahasiswa', 'sCHnNJUS5vP0mz9.png'),
(2, '100', 'dosen', 'Pak Dosen', 'lakilaki', 'dosen', 'user.png'),
(3, 'rmk', 'admin', 'Tim Verifikasi RMK', 'lakilaki', 'rmk', 'user.png'),
(4, 'kaprodi', 'admin', 'Kaprodi', 'lakilaki', 'kaprodi', 'user.png'),
(5, '101', 'dosen', 'Pak Dosen 2', 'lakilaki', 'dosen', 'user.png'),
(7, '102', 'dosen', 'pak dosen 3', 'lakilaki', 'dosen', '');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `berkas_bimbingan`
--
ALTER TABLE `berkas_bimbingan`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indeks untuk tabel `bidangminat`
--
ALTER TABLE `bidangminat`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indeks untuk tabel `bukti_bimbingan`
--
ALTER TABLE `bukti_bimbingan`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indeks untuk tabel `pengajuan_judul`
--
ALTER TABLE `pengajuan_judul`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indeks untuk tabel `pengajuan_sidang`
--
ALTER TABLE `pengajuan_sidang`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `berkas_bimbingan`
--
ALTER TABLE `berkas_bimbingan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `bidangminat`
--
ALTER TABLE `bidangminat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `bukti_bimbingan`
--
ALTER TABLE `bukti_bimbingan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `pengajuan_judul`
--
ALTER TABLE `pengajuan_judul`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `pengajuan_sidang`
--
ALTER TABLE `pengajuan_sidang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
