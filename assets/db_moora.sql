-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 29, 2022 at 04:57 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_moora`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_alternatif`
--

CREATE TABLE `tb_alternatif` (
  `id` int(11) NOT NULL,
  `kode` text NOT NULL,
  `alternatif` varchar(100) NOT NULL,
  `k1` int(3) NOT NULL,
  `k2` int(3) NOT NULL,
  `k3` int(3) NOT NULL,
  `k4` int(3) NOT NULL,
  `k5` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_alternatif`
--

INSERT INTO `tb_alternatif` (`id`, `kode`, `alternatif`, `k1`, `k2`, `k3`, `k4`, `k5`) VALUES
(1, 'A1', 'Bigbos Store Profesional Curly ZF-2002\r\n', 30, 20, 30, 50, 50),
(2, 'A2', 'Sayota Curly HC 80\r\n', 20, 20, 30, 50, 40),
(3, 'A3', 'Wigo W-811 Curling Iron\r\n', 30, 50, 40, 50, 30),
(4, 'A4', 'Wand Interchangeable 3 Parts\r\n', 40, 50, 30, 40, 50),
(5, 'A5', 'Nova Curly Hair Profesional HC6808\r\n', 40, 50, 30, 40, 30),
(6, 'A6', 'Sonar Tourmalin SN-1071\r\n', 50, 50, 30, 40, 30),
(7, 'A7', 'Rui Zhi Tools Curling Iron\r\n', 30, 50, 40, 50, 40);

-- --------------------------------------------------------

--
-- Table structure for table `tb_kriteria`
--

CREATE TABLE `tb_kriteria` (
  `id` int(11) NOT NULL,
  `kode` text NOT NULL,
  `kriteria` varchar(50) NOT NULL,
  `type` varchar(50) NOT NULL,
  `bobot` float NOT NULL,
  `satuan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_kriteria`
--

INSERT INTO `tb_kriteria` (`id`, `kode`, `kriteria`, `type`, `bobot`, `satuan`) VALUES
(1, 'K1', 'Bahan Pembuatan', 'benefit', 2.2, '-'),
(2, 'K2', 'Pengaturan Suhu', 'benefit', 2.1, '°C'),
(3, 'K3', 'Garansi', 'benefit', 2.1, 'Tahun/Bulan'),
(4, 'K4', 'Harga', 'cost', 1.8, 'Rp.'),
(5, 'K5', 'Ukuran', 'cost', 1.8, 'P x  L x T');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_alternatif`
--
ALTER TABLE `tb_alternatif`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_kriteria`
--
ALTER TABLE `tb_kriteria`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_alternatif`
--
ALTER TABLE `tb_alternatif`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tb_kriteria`
--
ALTER TABLE `tb_kriteria`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
