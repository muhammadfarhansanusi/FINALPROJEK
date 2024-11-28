-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 27, 2024 at 06:03 PM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pemesanan_tiket`
--

-- --------------------------------------------------------

--
-- Table structure for table `jadwal_kereta`
--

CREATE TABLE `jadwal_kereta` (
  `id` int NOT NULL,
  `stasiun_keberangkatan` varchar(100) NOT NULL,
  `nama_kereta` varchar(100) NOT NULL,
  `jam_keberangkatan` time NOT NULL,
  `tanggal_keberangkatan` date NOT NULL,
  `tujuan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `jadwal_kereta`
--

INSERT INTO `jadwal_kereta` (`id`, `stasiun_keberangkatan`, `nama_kereta`, `jam_keberangkatan`, `tanggal_keberangkatan`, `tujuan`) VALUES
(8, 'karawang', 'agra', '19:45:00', '2024-11-26', 'jogja');

-- --------------------------------------------------------

--
-- Table structure for table `pemesanan`
--

CREATE TABLE `pemesanan` (
  `id_pemesanan` int NOT NULL,
  `nama_penumpang` varchar(100) NOT NULL,
  `stasiun_keberangkatan` varchar(100) NOT NULL,
  `nama_kereta` varchar(100) NOT NULL,
  `jam_keberangkatan` time NOT NULL,
  `tanggal_keberangkatan` date NOT NULL,
  `tujuan` varchar(100) NOT NULL,
  `tanggal_pemesanan` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `pemesanan`
--

INSERT INTO `pemesanan` (`id_pemesanan`, `nama_penumpang`, `stasiun_keberangkatan`, `nama_kereta`, `jam_keberangkatan`, `tanggal_keberangkatan`, `tujuan`, `tanggal_pemesanan`) VALUES
(1, 'aang', 'karawang', 'agra', '06:00:00', '2024-11-26', 'purwakarta', '2024-11-26 04:08:05'),
(2, 'adil', 'karawang', 'agra', '19:45:00', '2024-11-26', 'jogja', '2024-11-26 12:46:51');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jadwal_kereta`
--
ALTER TABLE `jadwal_kereta`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pemesanan`
--
ALTER TABLE `pemesanan`
  ADD PRIMARY KEY (`id_pemesanan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `jadwal_kereta`
--
ALTER TABLE `jadwal_kereta`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `pemesanan`
--
ALTER TABLE `pemesanan`
  MODIFY `id_pemesanan` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
