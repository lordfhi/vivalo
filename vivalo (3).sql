-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 30, 2018 at 09:22 AM
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
-- Table structure for table `vivalo_admin`
--

CREATE TABLE `vivalo_admin` (
  `id_admin` int(3) NOT NULL,
  `nama_admin` char(30) NOT NULL,
  `no_hp` int(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vivalo_admin`
--

INSERT INTO `vivalo_admin` (`id_admin`, `nama_admin`, `no_hp`) VALUES
(1, 'Admin', 0);

-- --------------------------------------------------------

--
-- Table structure for table `vivalo_kebutuhan`
--

CREATE TABLE `vivalo_kebutuhan` (
  `kd_barang` int(5) NOT NULL,
  `nama_barang` varchar(20) NOT NULL,
  `harga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vivalo_kebutuhan`
--

INSERT INTO `vivalo_kebutuhan` (`kd_barang`, `nama_barang`, `harga`) VALUES
(1, 'Detergen', 10000),
(2, 'Pewangi', 20000);

-- --------------------------------------------------------

--
-- Table structure for table `vivalo_konsumen`
--

CREATE TABLE `vivalo_konsumen` (
  `id_konsumen` int(5) NOT NULL,
  `nama_konsumen` char(30) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `no_hp` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vivalo_konsumen`
--

INSERT INTO `vivalo_konsumen` (`id_konsumen`, `nama_konsumen`, `alamat`, `no_hp`) VALUES
(1, 'User', '', NULL),
(2, 'user2', '', NULL),
(3, 'awe', '', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `vivalo_laporan_pemasukan`
--

CREATE TABLE `vivalo_laporan_pemasukan` (
  `kd_laporan` int(5) NOT NULL,
  `kd_pemesanan` int(5) NOT NULL,
  `status` char(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vivalo_laporan_pemasukan`
--

INSERT INTO `vivalo_laporan_pemasukan` (`kd_laporan`, `kd_pemesanan`, `status`) VALUES
(1, 1, '??'),
(2, 2, '??'),
(3, 3, '??'),
(4, 4, '??'),
(5, 5, '??');

-- --------------------------------------------------------

--
-- Table structure for table `vivalo_laporan_pengeluaran`
--

CREATE TABLE `vivalo_laporan_pengeluaran` (
  `kd_laporan` int(5) NOT NULL,
  `kd_pembelian` int(5) NOT NULL,
  `status` char(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `vivalo_manajer`
--

CREATE TABLE `vivalo_manajer` (
  `id_manajer` int(5) NOT NULL,
  `nama_manajer` char(30) NOT NULL,
  `no_hp` int(11) NOT NULL,
  `alamat` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `vivalo_paket`
--

CREATE TABLE `vivalo_paket` (
  `kd_paket` int(5) NOT NULL,
  `nama_paket` varchar(10) NOT NULL,
  `harga_paket` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vivalo_paket`
--

INSERT INTO `vivalo_paket` (`kd_paket`, `nama_paket`, `harga_paket`) VALUES
(1, 'Standart', 15000),
(2, 'Kilat', 30000),
(3, 'Setrika', 5000);

-- --------------------------------------------------------

--
-- Table structure for table `vivalo_pembelian`
--

CREATE TABLE `vivalo_pembelian` (
  `kd_pembelian` int(5) NOT NULL,
  `kd_barang` int(5) NOT NULL,
  `total_harga` int(11) NOT NULL,
  `jumlah_barang` int(11) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vivalo_pembelian`
--

INSERT INTO `vivalo_pembelian` (`kd_pembelian`, `kd_barang`, `total_harga`, `jumlah_barang`, `date`) VALUES
(1, 1, 20000, 2, '2018-11-30');

-- --------------------------------------------------------

--
-- Table structure for table `vivalo_pemesanan`
--

CREATE TABLE `vivalo_pemesanan` (
  `kd_pemesanan` int(5) NOT NULL,
  `id_konsumen` int(5) NOT NULL,
  `kd_paket` int(5) NOT NULL,
  `date` date NOT NULL,
  `jumlah_laundry` int(5) NOT NULL,
  `total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vivalo_pemesanan`
--

INSERT INTO `vivalo_pemesanan` (`kd_pemesanan`, `id_konsumen`, `kd_paket`, `date`, `jumlah_laundry`, `total`) VALUES
(1, 2, 1, '0000-00-00', 0, 0),
(2, 2, 1, '0000-00-00', 0, 0),
(3, 2, 1, '2018-11-29', 0, 0),
(4, 2, 1, '2018-11-29', 0, 0),
(5, 2, 1, '2018-11-30', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `vivalo_users`
--

CREATE TABLE `vivalo_users` (
  `username` varchar(15) NOT NULL,
  `password` varchar(150) NOT NULL,
  `id_admin` int(3) DEFAULT NULL,
  `id_manajer` int(3) DEFAULT NULL,
  `id_konsumen` int(11) DEFAULT NULL,
  `level` char(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vivalo_users`
--

INSERT INTO `vivalo_users` (`username`, `password`, `id_admin`, `id_manajer`, `id_konsumen`, `level`) VALUES
('admin', '45cb41b32dcfb917ccd8614f1536d6da', 1, NULL, NULL, '1'),
('awe', '055d8401835cbd280eebce0ad57be90c', NULL, NULL, 3, '3'),
('konsumen', '45cb41b32dcfb917ccd8614f1536d6da', NULL, NULL, 2, '3'),
('manajer', '45cb41b32dcfb917ccd8614f1536d6da', NULL, NULL, 1, '2'),
('test', '45cb41b32dcfb917ccd8614f1536d6da', NULL, NULL, NULL, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `vivalo_admin`
--
ALTER TABLE `vivalo_admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `vivalo_kebutuhan`
--
ALTER TABLE `vivalo_kebutuhan`
  ADD PRIMARY KEY (`kd_barang`);

--
-- Indexes for table `vivalo_konsumen`
--
ALTER TABLE `vivalo_konsumen`
  ADD PRIMARY KEY (`id_konsumen`);

--
-- Indexes for table `vivalo_laporan_pemasukan`
--
ALTER TABLE `vivalo_laporan_pemasukan`
  ADD PRIMARY KEY (`kd_laporan`),
  ADD KEY `pesanan` (`kd_pemesanan`);

--
-- Indexes for table `vivalo_laporan_pengeluaran`
--
ALTER TABLE `vivalo_laporan_pengeluaran`
  ADD PRIMARY KEY (`kd_laporan`);

--
-- Indexes for table `vivalo_manajer`
--
ALTER TABLE `vivalo_manajer`
  ADD PRIMARY KEY (`id_manajer`);

--
-- Indexes for table `vivalo_paket`
--
ALTER TABLE `vivalo_paket`
  ADD PRIMARY KEY (`kd_paket`);

--
-- Indexes for table `vivalo_pembelian`
--
ALTER TABLE `vivalo_pembelian`
  ADD PRIMARY KEY (`kd_pembelian`),
  ADD KEY `kd_barang` (`kd_barang`);

--
-- Indexes for table `vivalo_pemesanan`
--
ALTER TABLE `vivalo_pemesanan`
  ADD PRIMARY KEY (`kd_pemesanan`),
  ADD KEY `id_konsumen` (`id_konsumen`),
  ADD KEY `paket` (`kd_paket`);

--
-- Indexes for table `vivalo_users`
--
ALTER TABLE `vivalo_users`
  ADD PRIMARY KEY (`username`),
  ADD KEY `admin` (`id_admin`),
  ADD KEY `konsumen` (`id_konsumen`),
  ADD KEY `manajer` (`id_manajer`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `vivalo_admin`
--
ALTER TABLE `vivalo_admin`
  MODIFY `id_admin` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `vivalo_kebutuhan`
--
ALTER TABLE `vivalo_kebutuhan`
  MODIFY `kd_barang` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `vivalo_konsumen`
--
ALTER TABLE `vivalo_konsumen`
  MODIFY `id_konsumen` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `vivalo_laporan_pemasukan`
--
ALTER TABLE `vivalo_laporan_pemasukan`
  MODIFY `kd_laporan` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `vivalo_laporan_pengeluaran`
--
ALTER TABLE `vivalo_laporan_pengeluaran`
  MODIFY `kd_laporan` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `vivalo_manajer`
--
ALTER TABLE `vivalo_manajer`
  MODIFY `id_manajer` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `vivalo_paket`
--
ALTER TABLE `vivalo_paket`
  MODIFY `kd_paket` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `vivalo_pembelian`
--
ALTER TABLE `vivalo_pembelian`
  MODIFY `kd_pembelian` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `vivalo_pemesanan`
--
ALTER TABLE `vivalo_pemesanan`
  MODIFY `kd_pemesanan` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `vivalo_laporan_pemasukan`
--
ALTER TABLE `vivalo_laporan_pemasukan`
  ADD CONSTRAINT `pesanan` FOREIGN KEY (`kd_pemesanan`) REFERENCES `vivalo_pemesanan` (`kd_pemesanan`);

--
-- Constraints for table `vivalo_pembelian`
--
ALTER TABLE `vivalo_pembelian`
  ADD CONSTRAINT `vivalo_pembelian_ibfk_1` FOREIGN KEY (`kd_barang`) REFERENCES `vivalo_kebutuhan` (`kd_barang`);

--
-- Constraints for table `vivalo_pemesanan`
--
ALTER TABLE `vivalo_pemesanan`
  ADD CONSTRAINT `paket` FOREIGN KEY (`kd_paket`) REFERENCES `vivalo_paket` (`kd_paket`);

--
-- Constraints for table `vivalo_users`
--
ALTER TABLE `vivalo_users`
  ADD CONSTRAINT `admin` FOREIGN KEY (`id_admin`) REFERENCES `vivalo_admin` (`id_admin`),
  ADD CONSTRAINT `konsumen` FOREIGN KEY (`id_konsumen`) REFERENCES `vivalo_konsumen` (`id_konsumen`),
  ADD CONSTRAINT `manajer` FOREIGN KEY (`id_manajer`) REFERENCES `vivalo_manajer` (`id_manajer`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
