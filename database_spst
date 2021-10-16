-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 16, 2021 at 03:37 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `spst`
--

-- --------------------------------------------------------

--
-- Table structure for table `jual`
--

CREATE TABLE `jual` (
  `id` int(100) NOT NULL,
  `sampah` varchar(255) NOT NULL,
  `jumlah` int(100) NOT NULL,
  `latitude` int(100) NOT NULL,
  `longitude` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jual`
--

INSERT INTO `jual` (`id`, `sampah`, `jumlah`, `latitude`, `longitude`) VALUES
(1, '', 0, 0, 0),
(2, '', 0, 0, 0),
(3, '', 0, 0, 0),
(4, '', 0, 0, 0),
(5, '', 0, 0, 0),
(6, '', 0, 0, 0),
(7, '', 0, 0, 0),
(8, '', 0, 0, 0),
(9, '', 0, 0, 0),
(10, '', 0, 0, 0),
(11, '', 0, 0, 0),
(12, '', 0, 0, 0),
(13, '', 0, 0, 0),
(14, '', 0, 0, 0),
(15, 'HVS', 0, 0, 0),
(16, '', 0, 0, 0),
(17, 'PS', 0, 0, 0),
(18, '', 0, 0, 0),
(19, 'PS', 0, 0, 0),
(20, '', 0, 0, 0),
(21, 'SK', 0, 0, 0),
(22, 'KRT', 0, 0, 0),
(23, 'KRT', 0, 0, 0),
(24, 'KRD', 0, 0, 0),
(25, 'PVC', 0, 0, 0),
(26, 'HVS', 4, 0, 0),
(27, 'HVS', 0, 0, 0),
(28, 'PVC', 0, 0, 0),
(29, 'PVC', 0, 0, 0),
(30, 'HVS', 0, 0, 0),
(31, 'SB', 3, 0, 0),
(32, 'PP', 2, 0, 0),
(33, '', 2, 0, 0),
(34, '', 2, 0, 0),
(35, '', 2, 0, 0),
(36, '', 4, 0, 0),
(37, '', 4, 0, 0),
(38, 'KRT', 5, 0, 0),
(39, 'LDPE', 40, 0, 0),
(40, 'PVC', 1, 0, 0),
(41, 'PVC', 1, 0, 0),
(42, '', 1, 0, 0),
(43, '', 1, 0, 0),
(44, '', 1, 0, 0),
(45, '', 1, 0, 0),
(46, '', 0, 0, 0),
(47, 'KRT', 2, 0, 0),
(48, 'PS', 2, 0, 0),
(49, 'SB', 11, 0, 0),
(50, 'HDPE', 33, 0, 0),
(51, 'HDPE', 33, 0, 0),
(52, 'PVC', 111, 0, 0),
(53, 'HVS', 22, 0, 0),
(54, 'HDPE', 37, 0, 0),
(55, '', 0, 0, 0),
(56, 'LDPE', 44, 0, 0),
(57, '', 0, 0, 0),
(58, 'KRT', 1, 0, 0),
(59, 'PVC', 44, 0, 0),
(60, 'SB', 3, 0, 0),
(61, 'KRT', 3, 0, 0),
(62, 'KRT', 3, 0, 0),
(63, 'HVS', 66, 0, 0),
(64, 'SK', 21, 0, 0),
(65, 'SK', 21, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id` int(11) NOT NULL,
  `sampah` varchar(255) NOT NULL,
  `berat` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id`, `sampah`, `berat`) VALUES
(1, 'PP', 0),
(2, 'hdpe', 0);

-- --------------------------------------------------------

--
-- Table structure for table `layanan`
--

CREATE TABLE `layanan` (
  `koordinatpelanggan` int(200) NOT NULL,
  `koordinatpetugas` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `navigasi`
--

CREATE TABLE `navigasi` (
  `koordinatpelanggan` int(20) NOT NULL,
  `koordinatpetugas` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `pengguna`
--

CREATE TABLE `pengguna` (
  `id` int(20) NOT NULL,
  `Kelas` varchar(255) NOT NULL,
  `Nama` varchar(255) NOT NULL,
  `Nomor Telepon` int(10) NOT NULL,
  `Kata Sandi` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pengguna`
--

INSERT INTO `pengguna` (`id`, `Kelas`, `Nama`, `Nomor Telepon`, `Kata Sandi`) VALUES
(2, 'Tes', 'Yudhis', 1231231, '123456'),
(3, 'testing', 'asdasd', 234234, 'asdasdasd'),
(4, 'testing', '', 0, ''),
(5, 'testing', 'Yudhis', 2147483647, 'Sukolilo');

-- --------------------------------------------------------

--
-- Table structure for table `sampah`
--

CREATE TABLE `sampah` (
  `sampah` varchar(255) NOT NULL,
  `berat` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `Kelas` varchar(100) DEFAULT NULL,
  `Nama` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jual`
--
ALTER TABLE `jual`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `jual`
--
ALTER TABLE `jual`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pengguna`
--
ALTER TABLE `pengguna`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
