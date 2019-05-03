-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 03, 2019 at 09:58 AM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `da_perpus`
--

-- --------------------------------------------------------

--
-- Table structure for table `anggota`
--

CREATE TABLE `anggota` (
  `kd_anggota` int(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `prodi` varchar(255) NOT NULL,
  `jenjang` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `anggota`
--

INSERT INTO `anggota` (`kd_anggota`, `nama`, `prodi`, `jenjang`, `alamat`) VALUES
(111111, 'a', 'a', 'a', 'a');

-- --------------------------------------------------------

--
-- Table structure for table `buku`
--

CREATE TABLE `buku` (
  `kd_register` int(10) NOT NULL,
  `judul_buku` varchar(255) NOT NULL,
  `pengarang` varchar(255) NOT NULL,
  `penerbit` varchar(255) NOT NULL,
  `tahun_terbit` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `buku`
--

INSERT INTO `buku` (`kd_register`, `judul_buku`, `pengarang`, `penerbit`, `tahun_terbit`) VALUES
(1, 'a', 'a', 'a', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `detil_pinjam`
--

CREATE TABLE `detil_pinjam` (
  `kd_register` int(10) NOT NULL,
  `kd_pinjam` int(10) NOT NULL,
  `tgl_pinjam` date NOT NULL,
  `tgl_kembali` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `peminjaman`
--

CREATE TABLE `peminjaman` (
  `kd_pinjam` int(10) NOT NULL,
  `kd_anggota` int(10) NOT NULL,
  `kd_petugas` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `petugas`
--

CREATE TABLE `petugas` (
  `kd_petugas` int(10) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `last_login` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `petugas`
--

INSERT INTO `petugas` (`kd_petugas`, `username`, `password`, `nama`, `alamat`, `last_login`) VALUES
(0, 'qwerty', '1234', '', '', '2019-05-03 07:31:41'),
(1, '', '', 'a', 'a', '2019-05-03 06:54:16');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `anggota`
--
ALTER TABLE `anggota`
  ADD PRIMARY KEY (`kd_anggota`);

--
-- Indexes for table `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`kd_register`);

--
-- Indexes for table `detil_pinjam`
--
ALTER TABLE `detil_pinjam`
  ADD KEY `kd_register` (`kd_register`),
  ADD KEY `kd_pinjam` (`kd_pinjam`);

--
-- Indexes for table `peminjaman`
--
ALTER TABLE `peminjaman`
  ADD PRIMARY KEY (`kd_pinjam`),
  ADD KEY `kd_anggota` (`kd_anggota`),
  ADD KEY `kd_petugas` (`kd_petugas`);

--
-- Indexes for table `petugas`
--
ALTER TABLE `petugas`
  ADD PRIMARY KEY (`kd_petugas`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `detil_pinjam`
--
ALTER TABLE `detil_pinjam`
  ADD CONSTRAINT `detil_pinjam_ibfk_1` FOREIGN KEY (`kd_pinjam`) REFERENCES `peminjaman` (`kd_pinjam`),
  ADD CONSTRAINT `detil_pinjam_ibfk_2` FOREIGN KEY (`kd_register`) REFERENCES `buku` (`kd_register`);

--
-- Constraints for table `peminjaman`
--
ALTER TABLE `peminjaman`
  ADD CONSTRAINT `peminjaman_ibfk_1` FOREIGN KEY (`kd_anggota`) REFERENCES `anggota` (`kd_anggota`),
  ADD CONSTRAINT `peminjaman_ibfk_2` FOREIGN KEY (`kd_petugas`) REFERENCES `petugas` (`kd_petugas`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
