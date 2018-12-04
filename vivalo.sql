-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 04, 2018 at 02:14 AM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 5.6.31

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
  `no_hp` varchar(15) DEFAULT NULL,
  `alamat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vivalo_admin`
--

INSERT INTO `vivalo_admin` (`id_admin`, `nama_admin`, `no_hp`, `alamat`) VALUES
(1, 'Rizaldis', '08990091862', 'jekardah');

-- --------------------------------------------------------

--
-- Table structure for table `vivalo_barang`
--

CREATE TABLE `vivalo_barang` (
  `id_barang` int(11) NOT NULL,
  `kd_pemesanan` int(11) NOT NULL,
  `nama_barang` varchar(255) NOT NULL,
  `jumlah_berat` varchar(255) NOT NULL,
  `harga` varchar(255) NOT NULL,
  `total_harga` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vivalo_barang`
--

INSERT INTO `vivalo_barang` (`id_barang`, `kd_pemesanan`, `nama_barang`, `jumlah_berat`, `harga`, `total_harga`) VALUES
(3, 10, 'cinta', '10', '20000', '3000000'),
(4, 10, 'huhu', '123', '30000', '1000000'),
(5, 15, 'sdsd', '123', '1000000', '3000000'),
(6, 15, 'sjsjs', '123', '1000000', '100000'),
(7, 19, 'asdw', '5', '30000', '150000'),
(8, 19, 'sjs', '3', '30000', '90000'),
(9, 19, 'jj', '12', '30000', '360000'),
(10, 11, 'jaja', '123', '50002', '6150246'),
(11, 14, 'as', '23', '30000', '690000');

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
(2, 'Pewangi', 20000),
(3, 'test', 100000);

-- --------------------------------------------------------

--
-- Table structure for table `vivalo_konsumen`
--

CREATE TABLE `vivalo_konsumen` (
  `id_konsumen` int(5) NOT NULL,
  `nama_konsumen` char(30) NOT NULL,
  `email` varchar(255) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `no_hp` varchar(15) DEFAULT NULL,
  `file` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vivalo_konsumen`
--

INSERT INTO `vivalo_konsumen` (`id_konsumen`, `nama_konsumen`, `email`, `alamat`, `no_hp`, `file`) VALUES
(1, 'User', '', '', NULL, ''),
(2, 'user2', '', 'asdasd', '8989', ''),
(3, 'awe', '', '', NULL, ''),
(4, 'asdsad', '', '', NULL, ''),
(5, 'aweawe', '', '', NULL, ''),
(6, 'rizal', '', 'Jl babakan Rawa Kalong RT 05/RW 08 , Curug Cimangg', '2147483647', ''),
(7, 'Rizaldi', '', 'jakarta', '2147483647', ''),
(8, 'rrrr', '', 'rrrr', '2147483647', ''),
(9, 'ijaldi', '', 'baraka', '2147483647', ''),
(10, 'izal', '', 'jakarta', '2147483647', ''),
(11, 'ija', '', 'jaaaa', '8292812', ''),
(12, 'uus', '', 'uus', '08231239', ''),
(13, 'iis', '', 'asdasd', '2147483647', ''),
(14, 'n', '', 'n', '2147483647', ''),
(15, 's', '', 's', '2147483647', ''),
(16, 'xx', '', 'xx', '2147483647', '343225-176-k720920.jpg'),
(17, 'nn', '', 'nn', '0', ''),
(18, 'ss', '', 'ss', '08990091860', ''),
(19, 'Rizaldi Rizal', '', 'sdsd', '08990091860', ''),
(20, 'xxx', '', 'xxx', '01239123', '15698059_1842613895978691_4463830047466678924_n.jpg'),
(21, 'sada', '', 'sada', '08990091860', ''),
(22, 'mm', '', 'jajaja', '0912931923', ''),
(23, 'sad', 'sada@gmail.com', 'jajaja', '09812381293', ''),
(24, 'uusss', 'rizaldi354313@gmail.com', 'uusss', '08990091860', ''),
(25, 'rijal', 'rijal@gmail.com', 'baraka', '08990091860', '11102803_1601218896784860_4593040736968653880_n.jpg');

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
(5, 5, '??'),
(6, 6, '??'),
(7, 7, '??'),
(8, 8, 'selesai'),
(9, 9, 'diproses'),
(10, 10, 'diproses'),
(11, 11, 'diproses'),
(12, 12, 'diproses'),
(13, 13, 'diproses'),
(14, 14, 'diproses'),
(15, 15, 'pending'),
(16, 16, 'pending'),
(17, 17, 'pending'),
(18, 18, 'pending'),
(19, 19, 'diproses'),
(20, 20, 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `vivalo_laporan_pengeluaran`
--

CREATE TABLE `vivalo_laporan_pengeluaran` (
  `kd_laporan` int(5) NOT NULL,
  `kd_pembelian` int(5) NOT NULL,
  `status` char(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vivalo_laporan_pengeluaran`
--

INSERT INTO `vivalo_laporan_pengeluaran` (`kd_laporan`, `kd_pembelian`, `status`) VALUES
(1, 0, 'sukses'),
(2, 0, 'sukses'),
(3, 0, 'sukses'),
(4, 0, 'sukses'),
(5, 0, 'sukses');

-- --------------------------------------------------------

--
-- Table structure for table `vivalo_manajer`
--

CREATE TABLE `vivalo_manajer` (
  `id_manajer` int(5) NOT NULL,
  `nama_manajer` char(30) NOT NULL,
  `no_hp` varchar(15) NOT NULL,
  `alamat` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vivalo_manajer`
--

INSERT INTO `vivalo_manajer` (`id_manajer`, `nama_manajer`, `no_hp`, `alamat`) VALUES
(1, '21 guns', '0892310321', 'jl barak obama');

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
(3, 'Setrika', 50002);

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
(2, 1, 0, 122, '2018-12-28'),
(3, 3, 0, 3, '2018-12-11'),
(5, 3, 10000000, 100, '2018-12-21');

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
(1, 2, 1, '0000-00-00', 0, 10000),
(2, 2, 1, '0000-00-00', 0, 0),
(3, 2, 1, '2018-11-29', 0, 0),
(4, 2, 1, '2018-11-29', 0, 0),
(5, 2, 1, '2018-11-30', 0, 0),
(6, 2, 3, '2018-11-30', 0, 0),
(7, 2, 1, '2018-11-29', 0, 0),
(8, 6, 2, '2018-12-01', 1, 1),
(9, 0, 3, '2018-12-14', 0, 1),
(10, 0, 3, '2018-12-05', 0, 1),
(11, 6, 3, '2018-12-20', 0, 1),
(12, 18, 2, '2018-12-11', 0, 1),
(13, 18, 2, '2018-12-11', 0, 1),
(14, 0, 2, '2018-12-05', 0, 1),
(15, 12, 2, '2018-12-05', 0, 1),
(16, 24, 3, '2018-12-05', 0, 1),
(17, 23, 3, '2018-12-05', 0, 1),
(18, 23, 3, '2018-12-05', 0, 1),
(19, 20, 2, '2018-12-04', 0, 1),
(20, 25, 1, '2018-12-05', 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `vivalo_users`
--

CREATE TABLE `vivalo_users` (
  `username` varchar(15) NOT NULL,
  `password` varchar(150) NOT NULL,
  `id_admin` int(3) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `id_manajer` int(3) DEFAULT NULL,
  `id_konsumen` int(11) DEFAULT NULL,
  `level` char(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vivalo_users`
--

INSERT INTO `vivalo_users` (`username`, `password`, `id_admin`, `email`, `id_manajer`, `id_konsumen`, `level`) VALUES
('admin', '45cb41b32dcfb917ccd8614f1536d6da', 1, '', NULL, NULL, '1'),
('asdsad', '74b87337454200d4d33f80c4663dc5e5', NULL, '', NULL, 4, '3'),
('awe', '055d8401835cbd280eebce0ad57be90c', NULL, '', NULL, 3, '3'),
('aweawe', '62c47666ad1f60c5f60000391645617d', NULL, '', NULL, 5, '3'),
('iis', 'c7c9b5abc39fc757817e8a49a1e269ae', NULL, '', NULL, 13, '3'),
('ija', '94e2772cff476ae14eed276e81ae5b4d', NULL, '', NULL, 11, '3'),
('ijaldi', '5274b4108d38ccbb3cffc9e40a4de46a', NULL, '', NULL, 9, '3'),
('izal', '5274b4108d38ccbb3cffc9e40a4de46a', NULL, '', NULL, 10, '3'),
('j', 'd41d8cd98f00b204e9800998ecf8427e', NULL, 'rijal@gmail.com', NULL, 25, '3'),
('konsumen', '62c47666ad1f60c5f60000391645617d', NULL, 'sada@gmail.com', NULL, 2, '3'),
('manajer', '45cb41b32dcfb917ccd8614f1536d6da', NULL, '', 1, 1, '2'),
('mm', '8066f1531f1a08af0f59fe49c5cc31a8', NULL, '', NULL, 22, '3'),
('n', '7b8b965ad4bca0e41ab51de7b31363a1', NULL, '', NULL, 14, '3'),
('nn', 'eab71244afb687f16d8c4f5ee9d6ef0e', NULL, '', NULL, 17, '3'),
('rizal', '558d41757d1b5f90969b9ca380227e7f', NULL, 'rizaldi354313@gmail.com', NULL, 6, '3'),
('Rizaldi', '5274b4108d38ccbb3cffc9e40a4de46a', NULL, '', NULL, 7, '3'),
('Rizaldi Rizal', 'cb5a38cd0b1a470eca4343db5d165ee1', NULL, '', NULL, 19, '3'),
('rrrr', '5274b4108d38ccbb3cffc9e40a4de46a', NULL, '', NULL, 8, '3'),
('s', '03c7c0ace395d80182db07ae2c30f034', NULL, '', NULL, 15, '3'),
('sad', 'd41d8cd98f00b204e9800998ecf8427e', NULL, 'sada@gmail.com', NULL, 23, '3'),
('sada', '95c3014fba2451dfaa5ee9d7b3690528', NULL, '', NULL, 21, '3'),
('ss', '3691308f2a4c2f6983f2880d32e29c84', NULL, '', NULL, 18, '3'),
('test', '45cb41b32dcfb917ccd8614f1536d6da', NULL, '', NULL, NULL, ''),
('uus', 'd41d8cd98f00b204e9800998ecf8427e', NULL, 'uus@gmail.com', NULL, 12, '3'),
('uusss', '280fa32e8501d269d181e6567ebeea86', NULL, '', NULL, 24, '3'),
('xx', 'd41d8cd98f00b204e9800998ecf8427e', NULL, '', NULL, 16, '3'),
('xxx', 'd41d8cd98f00b204e9800998ecf8427e', NULL, '', NULL, 20, '3');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `vivalo_admin`
--
ALTER TABLE `vivalo_admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `vivalo_barang`
--
ALTER TABLE `vivalo_barang`
  ADD PRIMARY KEY (`id_barang`);

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
-- AUTO_INCREMENT for table `vivalo_barang`
--
ALTER TABLE `vivalo_barang`
  MODIFY `id_barang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `vivalo_kebutuhan`
--
ALTER TABLE `vivalo_kebutuhan`
  MODIFY `kd_barang` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `vivalo_konsumen`
--
ALTER TABLE `vivalo_konsumen`
  MODIFY `id_konsumen` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `vivalo_laporan_pemasukan`
--
ALTER TABLE `vivalo_laporan_pemasukan`
  MODIFY `kd_laporan` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `vivalo_laporan_pengeluaran`
--
ALTER TABLE `vivalo_laporan_pengeluaran`
  MODIFY `kd_laporan` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `vivalo_manajer`
--
ALTER TABLE `vivalo_manajer`
  MODIFY `id_manajer` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `vivalo_paket`
--
ALTER TABLE `vivalo_paket`
  MODIFY `kd_paket` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `vivalo_pembelian`
--
ALTER TABLE `vivalo_pembelian`
  MODIFY `kd_pembelian` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `vivalo_pemesanan`
--
ALTER TABLE `vivalo_pemesanan`
  MODIFY `kd_pemesanan` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
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
