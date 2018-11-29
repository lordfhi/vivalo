-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 28, 2018 at 12:53 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vivalo`
--

-- --------------------------------------------------------

--
-- Table structure for table `vivalo_kebutuhan`
--

CREATE TABLE `vivalo_kebutuhan` (
  `kd_barang` int(5) NOT NULL,
  `nama_barang` varchar(50) NOT NULL,
  `harga_barang` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `vivalo_laporan_pemasukan`
--

CREATE TABLE `vivalo_laporan_pemasukan` (
  `kd_laporan` int(5) NOT NULL,
  `kd_pemesanan` int(5) NOT NULL,
  `status` enum('1','2','3') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `vivalo_laporan_pengeluaran`
--

CREATE TABLE `vivalo_laporan_pengeluaran` (
  `kd_laporan` int(5) NOT NULL,
  `kd_pembelian` int(5) NOT NULL,
  `status` enum('1','2','3') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `vivalo_paket`
--

CREATE TABLE `vivalo_paket` (
  `kd_paket` int(3) NOT NULL,
  `nama_paket` varchar(100) NOT NULL,
  `harga` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `vivalo_pembelian`
--

CREATE TABLE `vivalo_pembelian` (
  `kd_pembelian` int(5) NOT NULL,
  `kd_barang` int(5) NOT NULL,
  `jumlah_barang` int(100) NOT NULL,
  `date` date NOT NULL,
  `total` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `vivalo_pemesanan`
--

CREATE TABLE `vivalo_pemesanan` (
  `kd_pemesanan` int(5) NOT NULL,
  `id_user` int(3) NOT NULL,
  `kd_paket` int(3) NOT NULL,
  `jumlah` int(90) NOT NULL,
  `date` date NOT NULL,
  `total_harga` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `vivalo_user`
--

CREATE TABLE `vivalo_user` (
  `id_user` int(3) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `no_hp` int(20) NOT NULL,
  `alamat` text NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `level` enum('1','2','3') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vivalo_user`
--

INSERT INTO `vivalo_user` (`id_user`, `nama`, `no_hp`, `alamat`, `username`, `password`, `level`) VALUES
(1, 'Luthfi Ramadan', 0, '', 'upi', '98db0b07bba92340ab23fdde110814c1', '1'),
(2, 'a', 0, '', 'a', '0cc175b9c0f1b6a831c399e269772661', '3');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `vivalo_kebutuhan`
--
ALTER TABLE `vivalo_kebutuhan`
  ADD PRIMARY KEY (`kd_barang`);

--
-- Indexes for table `vivalo_laporan_pemasukan`
--
ALTER TABLE `vivalo_laporan_pemasukan`
  ADD PRIMARY KEY (`kd_laporan`);

--
-- Indexes for table `vivalo_laporan_pengeluaran`
--
ALTER TABLE `vivalo_laporan_pengeluaran`
  ADD PRIMARY KEY (`kd_laporan`);

--
-- Indexes for table `vivalo_paket`
--
ALTER TABLE `vivalo_paket`
  ADD PRIMARY KEY (`kd_paket`);

--
-- Indexes for table `vivalo_pembelian`
--
ALTER TABLE `vivalo_pembelian`
  ADD PRIMARY KEY (`kd_pembelian`);

--
-- Indexes for table `vivalo_pemesanan`
--
ALTER TABLE `vivalo_pemesanan`
  ADD PRIMARY KEY (`kd_pemesanan`);

--
-- Indexes for table `vivalo_user`
--
ALTER TABLE `vivalo_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `vivalo_kebutuhan`
--
ALTER TABLE `vivalo_kebutuhan`
  MODIFY `kd_barang` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `vivalo_laporan_pemasukan`
--
ALTER TABLE `vivalo_laporan_pemasukan`
  MODIFY `kd_laporan` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `vivalo_laporan_pengeluaran`
--
ALTER TABLE `vivalo_laporan_pengeluaran`
  MODIFY `kd_laporan` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `vivalo_paket`
--
ALTER TABLE `vivalo_paket`
  MODIFY `kd_paket` int(3) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `vivalo_pembelian`
--
ALTER TABLE `vivalo_pembelian`
  MODIFY `kd_pembelian` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `vivalo_pemesanan`
--
ALTER TABLE `vivalo_pemesanan`
  MODIFY `kd_pemesanan` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `vivalo_user`
--
ALTER TABLE `vivalo_user`
  MODIFY `id_user` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
