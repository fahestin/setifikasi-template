-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 02, 2024 at 04:19 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_sertifikasi`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_peserta`
--

CREATE TABLE `tb_peserta` (
  `Id_peserta` int(11) NOT NULL,
  `Kd_skema` varchar(100) NOT NULL,
  `Nm_peserta` varchar(100) NOT NULL,
  `Jekel` varchar(100) NOT NULL,
  `Alamat` varchar(100) NOT NULL,
  `No_hp` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_peserta`
--

INSERT INTO `tb_peserta` (`Id_peserta`, `Kd_skema`, `Nm_peserta`, `Jekel`, `Alamat`, `No_hp`) VALUES
(18, 'SKM-008', 'Septiani', 'Perempuan', 'Brebes', '09876543567'),
(19, 'SKM-009', 'Jeje', 'Perempuan', 'Bandung', '0876698765'),
(20, 'SKM-010', 'Dimas', 'Laki-Laki', 'Tegal', '089654321234');

-- --------------------------------------------------------

--
-- Table structure for table `tb_skema`
--

CREATE TABLE `tb_skema` (
  `Kd_skema` varchar(100) NOT NULL,
  `Nm_skema` varchar(100) NOT NULL,
  `Jenis` varchar(100) NOT NULL,
  `Jml_unit` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_skema`
--

INSERT INTO `tb_skema` (`Kd_skema`, `Nm_skema`, `Jenis`, `Jml_unit`) VALUES
('SKM-001', '2', 'Programmer', '5'),
('SKM-002', '3', 'Manajemen', '8');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_peserta`
--
ALTER TABLE `tb_peserta`
  ADD PRIMARY KEY (`Id_peserta`);

--
-- Indexes for table `tb_skema`
--
ALTER TABLE `tb_skema`
  ADD PRIMARY KEY (`Kd_skema`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_peserta`
--
ALTER TABLE `tb_peserta`
  MODIFY `Id_peserta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
