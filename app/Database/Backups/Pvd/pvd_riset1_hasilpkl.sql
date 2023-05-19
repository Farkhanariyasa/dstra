-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 18, 2023 at 07:31 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pkldummy62`
--

-- --------------------------------------------------------

--
-- Table structure for table `pvd_riset1_hasilpkl`
--

CREATE TABLE `pvd_riset1_hasilpkl` (
  `Kelompok Umur (Tahun)` varchar(5) DEFAULT NULL,
  `Jumlah Perjalanan Wisata Asal Kota Malang Triwulan IV 2022` int(6) DEFAULT NULL,
  `Jumlah Wisatawan Nusantara Asal Kota Malang` int(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pvd_riset1_hasilpkl`
--

INSERT INTO `pvd_riset1_hasilpkl` (`Kelompok Umur (Tahun)`, `Jumlah Perjalanan Wisata Asal Kota Malang Triwulan IV 2022`, `Jumlah Wisatawan Nusantara Asal Kota Malang`) VALUES
('0-12', 209379, 99900),
('13-15', 37198, 18773),
('16-18', 40792, 21459),
('19-24', 130379, 50053),
('25-49', 389280, 174128),
('>=50', 218631, 99415);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
