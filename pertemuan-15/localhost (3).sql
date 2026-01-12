-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 12, 2026 at 04:04 PM
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
-- Database: `db_pwd2025`
--
CREATE DATABASE IF NOT EXISTS `db_pwd2025` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci;
USE `db_pwd2025`;

-- --------------------------------------------------------

--
-- Table structure for table `biodata_mahasiswa`
--

CREATE TABLE `biodata_mahasiswa` (
  `nim` bigint UNSIGNED NOT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `tempat_lahir` varchar(100) DEFAULT NULL,
  `tgl_lahir` varchar(20) DEFAULT NULL,
  `hobi` varchar(100) DEFAULT NULL,
  `pasangan` varchar(100) DEFAULT NULL,
  `pekerjaan` varchar(100) DEFAULT NULL,
  `nm_orangtua` varchar(100) DEFAULT NULL,
  `nm_kakak` varchar(100) DEFAULT NULL,
  `nm_adik` varchar(100) DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `biodata_mahasiswa`
--

INSERT INTO `biodata_mahasiswa` (`nim`, `nama`, `tempat_lahir`, `tgl_lahir`, `hobi`, `pasangan`, `pekerjaan`, `nm_orangtua`, `nm_kakak`, `nm_adik`, `created_at`) VALUES
(1010101010, 'labubu', 's', 's', 's', 's', 's', 's', 's', 's', '2026-01-12 22:50:00'),
(2522500076, 'Prita Lauren', 'Pangkalpinang', '18 Oktober 2007', 'Baking, memasak', 'Tidak ada', 'Belum bekerja', 'Ai Nyong', 'Peter', 'Tidak ada', '2026-01-12 14:50:03');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_tamu`
--

CREATE TABLE `tbl_tamu` (
  `cid` int NOT NULL,
  `cnama` varchar(100) DEFAULT NULL,
  `cemail` varchar(100) DEFAULT NULL,
  `cpesan` text,
  `dcreated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tbl_tamu`
--

INSERT INTO `tbl_tamu` (`cid`, `cnama`, `cemail`, `cpesan`, `dcreated_at`) VALUES
(20, 'lorennn', 'loren@gmail.com', 'sdsdsdsdsdsd', '2026-01-10 22:31:42'),
(21, 'lulu', 'lulu@gmail.com', 'selamatttttt', '2026-01-10 22:31:56'),
(22, 'lorennn', 'fff@gmail.com', 'cascsadcscasacasd', '2026-01-12 13:28:14');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `biodata_mahasiswa`
--
ALTER TABLE `biodata_mahasiswa`
  ADD PRIMARY KEY (`nim`);

--
-- Indexes for table `tbl_tamu`
--
ALTER TABLE `tbl_tamu`
  ADD PRIMARY KEY (`cid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_tamu`
--
ALTER TABLE `tbl_tamu`
  MODIFY `cid` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
