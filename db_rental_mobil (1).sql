-- phpMyAdmin SQL Dump
-- version 5.2.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 02 Nov 2026 pada 11.05
-- Versi server: 5.7.33
-- Versi PHP: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_rental_mobil`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `username` varchar(50) NOT NULL,
  `password` varchar(225) NOT NULL,
  `status_akun` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`username`, `password`, `status_akun`) VALUES
('fakhril@mahasiswa.atmaluhur.ac.id', '123', 'Aktif'),
('nopicantik@gmail.com', '123', 'Aktif'),
('nuriza@gmail.com', '123', 'Aktif'),
('rafa@gmail.com', '123', 'Aktif'),
('rafaa@gmail.com', '123', 'Aktif');

-- --------------------------------------------------------

--
-- Struktur dari tabel `bayar`
--

CREATE TABLE `bayar` (
  `kode_bayar` varchar(20) NOT NULL,
  `tgl_wkt_byr` date NOT NULL,
  `ft_byr` varchar(225) NOT NULL,
  `mtode_byr` varchar(30) NOT NULL,
  `jns_byr` varchar(30) NOT NULL,
  `nominal` decimal(12,2) NOT NULL,
  `sttus_byr` varchar(30) NOT NULL,
  `tgl_wkt_ver` date NOT NULL,
  `kode_sewa` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `denda`
--

CREATE TABLE `denda` (
  `kode_denda` varchar(20) NOT NULL,
  `telat_jam` int(11) NOT NULL,
  `tarif_per_jam` decimal(12,2) NOT NULL,
  `kode_kembali` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `kembali`
--

CREATE TABLE `kembali` (
  `kode_kembali` varchar(20) NOT NULL,
  `tgl_wkt_blk` date NOT NULL,
  `stts_blk` varchar(30) NOT NULL,
  `ket_blk` text NOT NULL,
  `kode_bayar` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `mobil`
--

CREATE TABLE `mobil` (
  `no_plat` varchar(10) NOT NULL,
  `nm_mobil` varchar(100) NOT NULL,
  `nkursi` int(11) NOT NULL,
  `nbagasi` int(11) NOT NULL,
  `jns_mobil` varchar(50) NOT NULL,
  `transmisi` varchar(30) NOT NULL,
  `thn_buat` year(4) NOT NULL,
  `ft_depan` varchar(225) DEFAULT NULL,
  `ft_blkng` varchar(225) DEFAULT NULL,
  `ft_interior` varchar(225) DEFAULT NULL,
  `hrg_hari` decimal(12,2) NOT NULL,
  `cttn_unit` text,
  `status_unit` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `mobil`
--

INSERT INTO `mobil` (`no_plat`, `nm_mobil`, `nkursi`, `nbagasi`, `jns_mobil`, `transmisi`, `thn_buat`, `ft_depan`, `ft_blkng`, `ft_interior`, `hrg_hari`, `cttn_unit`, `status_unit`) VALUES
('BN0908NS', 'Mobil Mainan', 4, 1, 'Sport', 'manual', '2005', 'DepanBN0908NS.jpg', 'BelakangBN0908NS.jpg', 'InteriorBN0908NS.jpg', 2500000.00, 'keren', 'oq'),
('BN2000RF', 'Testarosa', 1, 1, 'MPV', 'Manual', '2006', 'DepanBN2000RF.jpg', 'BelakangBN2000RF.jpg', 'InteriorBN2000RF.jpg', 2500000.00, 'hebat', 'keren');

-- --------------------------------------------------------

--
-- Struktur dari tabel `penyewa`
--

CREATE TABLE `penyewa` (
  `user_plg064` varchar(50) NOT NULL,
  `Sandi064` varchar(225) NOT NULL,
  `Nik064` varchar(20) NOT NULL,
  `nm_lngkp064` varchar(100) NOT NULL,
  `no_hp064` varchar(20) NOT NULL,
  `almt_lngkp064` text NOT NULL,
  `ft_ktp` varchar(225) DEFAULT NULL,
  `ft_sim_a` varchar(225) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `penyewa`
--

INSERT INTO `penyewa` (`user_plg064`, `Sandi064`, `Nik064`, `nm_lngkp064`, `no_hp064`, `almt_lngkp064`, `ft_ktp`, `ft_sim_a`) VALUES
('rafa123', 'sandi', '1234567891', 'rafa alghifari', '12345678', 'pangkal', 'KTPrafa123.jpg', 'sim_arafa123.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pilih`
--

CREATE TABLE `pilih` (
  `kode_sewa` varchar(20) NOT NULL,
  `no_plat` varchar(15) NOT NULL,
  `hrg_sewa` decimal(12,2) NOT NULL,
  `n_hari` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `sewa`
--

CREATE TABLE `sewa` (
  `kode_sewa` varchar(20) NOT NULL,
  `tgl_mulai` date NOT NULL,
  `tgl_selesai` date NOT NULL,
  `wkt_ambil` datetime NOT NULL,
  `status_sewa` varchar(30) NOT NULL,
  `user_plg` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`username`);

--
-- Indeks untuk tabel `bayar`
--
ALTER TABLE `bayar`
  ADD PRIMARY KEY (`kode_bayar`),
  ADD KEY `kode_sewa` (`kode_sewa`);

--
-- Indeks untuk tabel `denda`
--
ALTER TABLE `denda`
  ADD PRIMARY KEY (`kode_denda`),
  ADD KEY `kode_kembali` (`kode_kembali`);

--
-- Indeks untuk tabel `kembali`
--
ALTER TABLE `kembali`
  ADD PRIMARY KEY (`kode_kembali`),
  ADD KEY `kode_bayar` (`kode_bayar`);

--
-- Indeks untuk tabel `mobil`
--
ALTER TABLE `mobil`
  ADD PRIMARY KEY (`no_plat`);

--
-- Indeks untuk tabel `penyewa`
--
ALTER TABLE `penyewa`
  ADD PRIMARY KEY (`user_plg064`),
  ADD KEY `nik` (`Nik064`);

--
-- Indeks untuk tabel `pilih`
--
ALTER TABLE `pilih`
  ADD PRIMARY KEY (`kode_sewa`,`no_plat`),
  ADD KEY `no_plat` (`no_plat`);

--
-- Indeks untuk tabel `sewa`
--
ALTER TABLE `sewa`
  ADD PRIMARY KEY (`kode_sewa`),
  ADD KEY `user_plg` (`user_plg`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
