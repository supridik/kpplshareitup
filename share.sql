-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 30, 2017 at 11:59 PM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `share`
--

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `id_barang` int(3) NOT NULL,
  `nama_barang` varchar(50) NOT NULL,
  `jenis` varchar(20) NOT NULL,
  `foto_barang` varchar(100) NOT NULL,
  `deskripsi_barang` varchar(200) NOT NULL,
  `dipinjam` tinyint(1) NOT NULL,
  `dikembalikan` tinyint(1) NOT NULL,
  `id_pemilik` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `transaksi_barang`
--

CREATE TABLE `transaksi_barang` (
  `id_peminjam` int(4) NOT NULL,
  `id_barang` int(3) NOT NULL,
  `tgl_dipinjam` date NOT NULL,
  `tgl_dikembalikan` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(4) NOT NULL,
  `nama_user` varchar(50) NOT NULL,
  `alamat` varchar(150) NOT NULL,
  `kecamatan` varchar(20) NOT NULL,
  `kelurahan` varchar(20) NOT NULL,
  `kode_pos` varchar(5) NOT NULL,
  `foto_profil` varchar(100) NOT NULL,
  `foto_ktp` varchar(100) NOT NULL,
  `deskripsi` varchar(200) NOT NULL,
  `username` varchar(15) NOT NULL,
  `password` varchar(40) NOT NULL,
  `isAdmin` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama_user`, `alamat`, `kecamatan`, `kelurahan`, `kode_pos`, `foto_profil`, `foto_ktp`, `deskripsi`, `username`, `password`, `isAdmin`) VALUES
(1, 'admin', '', '', '', '', '', '', '', 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997', 1),
(2, 'Zakaria Achmad', '', '', '', '', '', '', '', 'achmadz', '7654ae508ade5a9c01dbd566eca6b5a9d5e2135d', 0),
(3, 'Supri', '', '', '', '', '', '', '', 'supri', 'e404fb3a838a8c931b3ef40889cd0cd0b99b0db3', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id_barang`),
  ADD KEY `id_pemilik` (`id_pemilik`);

--
-- Indexes for table `transaksi_barang`
--
ALTER TABLE `transaksi_barang`
  ADD KEY `id_peminjam` (`id_peminjam`),
  ADD KEY `id_barang` (`id_barang`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `barang`
--
ALTER TABLE `barang`
  MODIFY `id_barang` int(3) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `barang`
--
ALTER TABLE `barang`
  ADD CONSTRAINT `barang_ibfk_1` FOREIGN KEY (`id_pemilik`) REFERENCES `user` (`id_user`);

--
-- Constraints for table `transaksi_barang`
--
ALTER TABLE `transaksi_barang`
  ADD CONSTRAINT `transaksi_barang_ibfk_1` FOREIGN KEY (`id_peminjam`) REFERENCES `user` (`id_user`),
  ADD CONSTRAINT `transaksi_barang_ibfk_2` FOREIGN KEY (`id_barang`) REFERENCES `barang` (`id_barang`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
