-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Aug 16, 2020 at 12:44 PM
-- Server version: 5.7.30-0ubuntu0.18.04.1
-- PHP Version: 7.2.24-0ubuntu0.18.04.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bank_sampah`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_jenis_sampah`
--

CREATE TABLE `tb_jenis_sampah` (
  `id` int(5) NOT NULL,
  `kategori` int(11) NOT NULL,
  `jenis_sampah` varchar(25) NOT NULL,
  `jumlah_sampah` varchar(10) NOT NULL,
  `harga_beli` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_jenis_sampah`
--

INSERT INTO `tb_jenis_sampah` (`id`, `kategori`, `jenis_sampah`, `jumlah_sampah`, `harga_beli`) VALUES
(1, 1, 'kotoran hewan', '80', '500'),
(11, 1, 'sisa bahan makanan', '70', '100'),
(12, 1, 'jerami', '30', '100'),
(14, 1, 'arang', '40', '10000');

-- --------------------------------------------------------

--
-- Table structure for table `tb_kat_sampah`
--

CREATE TABLE `tb_kat_sampah` (
  `id` int(11) NOT NULL,
  `nama_kategori` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_kat_sampah`
--

INSERT INTO `tb_kat_sampah` (`id`, `nama_kategori`) VALUES
(1, 'organik'),
(2, 'organik');

-- --------------------------------------------------------

--
-- Table structure for table `tb_kurir`
--

CREATE TABLE `tb_kurir` (
  `id` int(11) NOT NULL,
  `nama_kurir` varchar(100) NOT NULL,
  `no_ktp` varchar(100) NOT NULL,
  `upah` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_kurir`
--

INSERT INTO `tb_kurir` (`id`, `nama_kurir`, `no_ktp`, `upah`) VALUES
(1, 'lala', '7868457546547', 500),
(2, 'tono', '654646576585', 500),
(3, 'lala', '7868457546547', 500),
(4, 'tono', '654646576585', 500);

-- --------------------------------------------------------

--
-- Table structure for table `tb_portal`
--

CREATE TABLE `tb_portal` (
  `id` int(11) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `isi` text NOT NULL,
  `tgl` datetime NOT NULL,
  `gambar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_produk`
--

CREATE TABLE `tb_produk` (
  `id_produk` int(11) NOT NULL,
  `nama_produk` varchar(100) NOT NULL,
  `harga_produk` int(11) NOT NULL,
  `bahan` text NOT NULL,
  `gambar` varchar(50) NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_produk`
--

INSERT INTO `tb_produk` (`id_produk`, `nama_produk`, `harga_produk`, `bahan`, `gambar`, `keterangan`) VALUES
(1, 'pupuk organik 5 kg', 10000, 'kotoran ternak, jus sampah, gula pasir,  arang', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tb_transaksi`
--

CREATE TABLE `tb_transaksi` (
  `id` int(11) NOT NULL,
  `tgl` datetime NOT NULL,
  `kurir` int(11) NOT NULL,
  `kat` int(11) NOT NULL,
  `jenis` int(11) NOT NULL,
  `berat` int(10) NOT NULL,
  `total` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_transaksi`
--

INSERT INTO `tb_transaksi` (`id`, `tgl`, `kurir`, `kat`, `jenis`, `berat`, `total`) VALUES
(7, '2020-08-15 14:41:34', 1, 1, 11, 444, 44),
(14, '2020-08-16 10:24:22', 4, 1, 12, 7, 654);

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id` int(11) NOT NULL,
  `nama_lengkap` text NOT NULL,
  `username` text NOT NULL,
  `password` text NOT NULL,
  `level` enum('Admin','Teller','Nasabah') NOT NULL,
  `session` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id`, `nama_lengkap`, `username`, `password`, `level`, `session`) VALUES
(1, 'Administrator', 'admin', 'admin', 'Admin', '1'),
(2, 'ara', 'ara', 'ara', 'Teller', '12345');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_jenis_sampah`
--
ALTER TABLE `tb_jenis_sampah`
  ADD PRIMARY KEY (`id`),
  ADD KEY `kategori` (`kategori`);

--
-- Indexes for table `tb_kat_sampah`
--
ALTER TABLE `tb_kat_sampah`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_kurir`
--
ALTER TABLE `tb_kurir`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_portal`
--
ALTER TABLE `tb_portal`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_produk`
--
ALTER TABLE `tb_produk`
  ADD PRIMARY KEY (`id_produk`);

--
-- Indexes for table `tb_transaksi`
--
ALTER TABLE `tb_transaksi`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `kurir` (`kurir`),
  ADD KEY `tb_transaksi_ibfk_3` (`jenis`),
  ADD KEY `tb_transaksi_ibfk_4` (`kat`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_jenis_sampah`
--
ALTER TABLE `tb_jenis_sampah`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `tb_kat_sampah`
--
ALTER TABLE `tb_kat_sampah`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tb_kurir`
--
ALTER TABLE `tb_kurir`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tb_portal`
--
ALTER TABLE `tb_portal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tb_produk`
--
ALTER TABLE `tb_produk`
  MODIFY `id_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tb_transaksi`
--
ALTER TABLE `tb_transaksi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_jenis_sampah`
--
ALTER TABLE `tb_jenis_sampah`
  ADD CONSTRAINT `tb_jenis_sampah_ibfk_1` FOREIGN KEY (`kategori`) REFERENCES `tb_kat_sampah` (`id`);

--
-- Constraints for table `tb_transaksi`
--
ALTER TABLE `tb_transaksi`
  ADD CONSTRAINT `tb_transaksi_ibfk_2` FOREIGN KEY (`kurir`) REFERENCES `tb_kurir` (`id`),
  ADD CONSTRAINT `tb_transaksi_ibfk_3` FOREIGN KEY (`jenis`) REFERENCES `tb_jenis_sampah` (`id`),
  ADD CONSTRAINT `tb_transaksi_ibfk_4` FOREIGN KEY (`kat`) REFERENCES `tb_kat_sampah` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
