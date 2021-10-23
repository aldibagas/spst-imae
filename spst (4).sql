-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 23, 2021 at 04:27 AM
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
-- Table structure for table `navigasi`
--

CREATE TABLE `navigasi` (
  `user_id` int(20) NOT NULL,
  `latitude` float NOT NULL,
  `longitude` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `pemesanan`
--

CREATE TABLE `pemesanan` (
  `user_id` int(20) NOT NULL,
  `pesanan_1` varchar(20) NOT NULL,
  `jumlah_1` int(50) NOT NULL,
  `pesanan_2` varchar(20) NOT NULL,
  `jumlah_2` int(50) NOT NULL,
  `pesanan_3` varchar(20) NOT NULL,
  `jumlah_3` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `pengguna`
--

CREATE TABLE `pengguna` (
  `id` int(20) NOT NULL,
  `Kelas` varchar(255) NOT NULL,
  `Nama` varchar(255) NOT NULL,
  `email` text NOT NULL,
  `Nomor Telepon` text NOT NULL,
  `Kata Sandi` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pengguna`
--

INSERT INTO `pengguna` (`id`, `Kelas`, `Nama`, `email`, `Nomor Telepon`, `Kata Sandi`) VALUES
(2, 'Tes', 'Yudhis', '', '1231231', '123456'),
(3, 'testing', 'asdasd', '', '234234', 'asdasdasd'),
(4, 'testing', '', '', '0', ''),
(5, 'testing', 'Yudhis', '', '2147483647', 'Sukolilo'),
(6, 'petugas', 'petugas', '', '1111', '1111'),
(7, 'pemesan', 'pemesan', '', '1111', '1111'),
(8, 'testing', 'Naufal', '', '2147483647', 'perselajuara'),
(9, 'testing', 'Udin', 'naufal.19103@mhs.its.ac.id', '2147483647', 'perseLA'),
(10, 'testing', 'Naufal', 'noval.12@hawaiipublicschools.org', '2147483647', 'terserah'),
(11, 'testing', 'Izzuddin', 'izzuddin3801@gmail.com', '081249530633', 'perrsela'),
(12, 'testing', 'Mas Alba', 'masalba@gmail.com', '087808008541', 'yamahar15');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pengguna`
--
ALTER TABLE `pengguna`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
