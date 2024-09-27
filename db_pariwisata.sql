-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 06, 2024 at 08:05 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_pariwisata`
--

-- --------------------------------------------------------

--
-- Table structure for table `pemesanan`
--

CREATE TABLE `pemesanan` (
  `id_pemesanan` int(6) NOT NULL,
  `nama` varchar(40) NOT NULL,
  `alamat` varchar(200) NOT NULL,
  `tujuan` varchar(20) NOT NULL,
  `gender` enum('Pria','Wanita') NOT NULL,
  `paket` int(3) NOT NULL,
  `sarapan` varchar(1) NOT NULL,
  `kendaraan` varchar(1) NOT NULL,
  `penginapan` varchar(1) NOT NULL,
  `tanggal` date NOT NULL,
  `email` varchar(50) NOT NULL,
  `hp` varchar(13) NOT NULL,
  `logbuat` timestamp NOT NULL DEFAULT current_timestamp(),
  `logupdate` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pemesanan`
--

INSERT INTO `pemesanan` (`id_pemesanan`, `nama`, `alamat`, `tujuan`, `gender`, `paket`, `sarapan`, `kendaraan`, `penginapan`, `tanggal`, `email`, `hp`, `logbuat`, `logupdate`) VALUES
(9, 'Shindi Cahyandari', 'Desa Karangrejo, Pesawaran', 'Nusa Penida', 'Wanita', 2, '1', '1', '1', '2024-08-31', 'shindicahyandari8@mail.com  ', '083176584534 ', '2024-08-06 05:39:06', NULL),
(10, 'Celsi Maulida', 'Gading Rejo', 'Bedugul Bali', 'Wanita', 1, '1', ' ', '1', '2024-08-24', 'celsimaulida@gmail.com  ', '081345678909 ', '2024-08-06 06:00:27', NULL),
(11, 'Celsi Maulida', 'Gading Rejo', 'Bedugul Bali', 'Wanita', 1, '1', ' ', '1', '2024-08-24', 'celsimaulida@gmail.com  ', '081345678909 ', '2024-08-06 06:00:33', NULL),
(12, 'Celsi Maulida', 'Gading Rejo', 'Bedugul Bali', 'Wanita', 1, '1', ' ', '1', '2024-08-24', 'celsimaulida@gmail.com  ', '081345678909 ', '2024-08-06 06:02:01', NULL),
(13, 'Celsi Maulida', 'Gading Rejo', 'Bedugul Bali', 'Wanita', 1, '1', ' ', '1', '2024-08-24', 'celsimaulida@gmail.com  ', '081345678909 ', '2024-08-06 06:02:05', NULL),
(14, 'Celsi Maulida', 'Gading Rejo', 'Bedugul Bali', 'Wanita', 1, '1', ' ', '1', '2024-08-24', 'celsimaulida@gmail.com  ', '081345678909 ', '2024-08-06 06:02:54', NULL),
(15, 'Celsi Maulida', 'Karangrejo', 'Pura Ulun Danu Berat', 'Wanita', 1, '1', ' ', '1', '2024-08-15', 'shindicahyandari8@mail.com  ', '08565 ', '2024-08-06 06:03:14', NULL),
(16, '', '', '', '', 0, '', ' ', ' ', '0000-00-00', '  ', ' ', '2024-08-06 06:03:54', NULL),
(17, 'Celsi Maulida', 'Karangrejo', 'Pura Ulun Danu Berat', 'Wanita', 1, '1', ' ', '1', '2024-08-15', 'shindicahyandari8@mail.com  ', '08565 ', '2024-08-06 06:04:37', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pemesanan`
--
ALTER TABLE `pemesanan`
  ADD PRIMARY KEY (`id_pemesanan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pemesanan`
--
ALTER TABLE `pemesanan`
  MODIFY `id_pemesanan` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
