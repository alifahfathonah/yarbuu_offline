-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 09 Agu 2020 pada 07.42
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `offline_lms`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `akun`
--

CREATE TABLE `akun` (
  `id_admin_sekolah` int(5) NOT NULL,
  `nisn` varchar(200) NOT NULL,
  `nis` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL,
  `tingkat` int(11) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `kelas` varchar(20) NOT NULL,
  `bahasa` varchar(2) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `download_video`
--

CREATE TABLE `download_video` (
  `id_download_video` int(11) NOT NULL,
  `id_video` int(11) NOT NULL,
  `id_siswa` int(11) NOT NULL,
  `tanggal` varchar(20) NOT NULL,
  `status` varchar(20) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `kelas`
--

CREATE TABLE `kelas` (
  `id_kelas` int(11) NOT NULL,
  `nama_kelas` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `masuk_web_siswa`
--

CREATE TABLE `masuk_web_siswa` (
  `id_masuk_web_siswa` int(11) NOT NULL,
  `nama` varchar(250) NOT NULL,
  `kelas` varchar(20) NOT NULL,
  `tipe` varchar(10) NOT NULL,
  `ip` varchar(30) NOT NULL,
  `agent` varchar(200) NOT NULL,
  `tanggal2` varchar(20) NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `motivasi`
--

CREATE TABLE `motivasi` (
  `id_motivasi` int(11) NOT NULL,
  `isi_motivasi` text NOT NULL,
  `pengarang` varchar(100) NOT NULL,
  `day` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `motivasi`
--

INSERT INTO `motivasi` (`id_motivasi`, `isi_motivasi`, `pengarang`, `day`) VALUES
(1, 'Science without religion is lame, religion without science is blind.', 'Albert Einsten', 'Fri'),
(2, 'Jas Merah - Jangan sekali-sekali melupakan sejarah.', 'Soekarno', 'Wed');

-- --------------------------------------------------------

--
-- Struktur dari tabel `operator`
--

CREATE TABLE `operator` (
  `id_operator` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `operator`
--

INSERT INTO `operator` (`id_operator`, `nama`, `username`, `password`) VALUES
(1, 'Operator', 'username', 'password');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pelajaran`
--

CREATE TABLE `pelajaran` (
  `id_pelajaran` int(4) NOT NULL,
  `nama_pelajaran` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `setting`
--

CREATE TABLE `setting` (
  `id_setting` int(11) NOT NULL,
  `nama_sekolah` varchar(250) NOT NULL,
  `ajaran` varchar(30) NOT NULL,
  `kepala_sekolah` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `video`
--

CREATE TABLE `video` (
  `id_video` int(11) NOT NULL,
  `materi` varchar(250) NOT NULL,
  `nama_pelajaran` varchar(30) NOT NULL,
  `file` varchar(100) NOT NULL,
  `tipe` varchar(10) NOT NULL,
  `tingkat` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `akun`
--
ALTER TABLE `akun`
  ADD PRIMARY KEY (`id_admin_sekolah`);

--
-- Indeks untuk tabel `download_video`
--
ALTER TABLE `download_video`
  ADD PRIMARY KEY (`id_download_video`);

--
-- Indeks untuk tabel `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`id_kelas`);

--
-- Indeks untuk tabel `masuk_web_siswa`
--
ALTER TABLE `masuk_web_siswa`
  ADD PRIMARY KEY (`id_masuk_web_siswa`);

--
-- Indeks untuk tabel `motivasi`
--
ALTER TABLE `motivasi`
  ADD PRIMARY KEY (`id_motivasi`);

--
-- Indeks untuk tabel `operator`
--
ALTER TABLE `operator`
  ADD PRIMARY KEY (`id_operator`);

--
-- Indeks untuk tabel `pelajaran`
--
ALTER TABLE `pelajaran`
  ADD PRIMARY KEY (`id_pelajaran`),
  ADD UNIQUE KEY `id_pelajaran` (`id_pelajaran`);

--
-- Indeks untuk tabel `setting`
--
ALTER TABLE `setting`
  ADD PRIMARY KEY (`id_setting`);

--
-- Indeks untuk tabel `video`
--
ALTER TABLE `video`
  ADD PRIMARY KEY (`id_video`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `akun`
--
ALTER TABLE `akun`
  MODIFY `id_admin_sekolah` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `download_video`
--
ALTER TABLE `download_video`
  MODIFY `id_download_video` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `kelas`
--
ALTER TABLE `kelas`
  MODIFY `id_kelas` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `masuk_web_siswa`
--
ALTER TABLE `masuk_web_siswa`
  MODIFY `id_masuk_web_siswa` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `motivasi`
--
ALTER TABLE `motivasi`
  MODIFY `id_motivasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `operator`
--
ALTER TABLE `operator`
  MODIFY `id_operator` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `pelajaran`
--
ALTER TABLE `pelajaran`
  MODIFY `id_pelajaran` int(4) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `setting`
--
ALTER TABLE `setting`
  MODIFY `id_setting` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `video`
--
ALTER TABLE `video`
  MODIFY `id_video` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
