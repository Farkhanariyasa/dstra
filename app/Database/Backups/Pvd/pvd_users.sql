-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 13, 2023 at 02:04 PM
-- Server version: 8.0.30
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pkl62`
--

-- --------------------------------------------------------

--
-- Table structure for table `pvd_users`
--

CREATE TABLE `pvd_users` (
  `id` int UNSIGNED NOT NULL,
  `platform_id` varchar(25) NOT NULL,
  `username` varchar(255) NOT NULL,
  `nama_lengkap` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `instansi` varchar(255) NOT NULL,
  `picture` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pvd_users`
--
INSERT INTO `pvd_users` (`id`, `platform_id`, `username`, `nama_lengkap`, `email`, `password`, `instansi`, `picture`) VALUES
(1, '', 'subjectmatter', 'Subject Matter', 'pkl@stis.ac.id', '$2y$10$SFfN/pF34a34iE/fQOF72euFIdXCCjlwiyF4n1wMkG4VkaEJY.8w2', 'BPS', 'https://ui-avatars.com/api/?name=Subject+Matter&color=7F9CF5&background=EBF4FF');
--
-- Indexes for dumped tables
--

--
-- Indexes for table `pvd_users`
--
ALTER TABLE `pvd_users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pvd_users`
--
ALTER TABLE `pvd_users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
