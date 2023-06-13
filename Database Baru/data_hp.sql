-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 23, 2018 at 01:57 AM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laptop`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_hp`
--

CREATE TABLE `daftar_laptop` (
  `id` int(4) NOT NULL,
  `merk` varchar(256) COLLATE utf8_bin NOT NULL,
  `seri` varchar(256) COLLATE utf8_bin NOT NULL,
  `harga` varchar(64) COLLATE utf8_bin NOT NULL,
  `layar` varchar(64) COLLATE utf8_bin NOT NULL,
  `ram` varchar(64) COLLATE utf8_bin NOT NULL,
  `jenis_memory` varchar(64) COLLATE utf8_bin NOT NULL,
  `ukuran_memory` varchar(64) COLLATE utf8_bin NOT NULL,
  `processor` varchar(64) COLLATE utf8_bin NOT NULL,
  `harga_angka` varchar(64) COLLATE utf8_bin NOT NULL,
  `layar_angka` varchar(64) COLLATE utf8_bin NOT NULL,
  `ram_angka` varchar(64) COLLATE utf8_bin NOT NULL,
  `jenis_memory_angka` varchar(64) COLLATE utf8_bin NOT NULL,
  `ukuran_memory_angka` varchar(64) COLLATE utf8_bin NOT NULL,
  `processor_angka` varchar(64) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table
--

INSERT INTO `daftar_laptop` (`id`, `merk`, `seri`, `harga`, `layar`, `ram`, `jenis_memory`, `ukuran_memory`, `processor`, `harga_angka`,`layar_angka`, `ram_angka`, `jenis_memory_angka`,`ukuran_memory_angka`, `processor_angka`) VALUES
(1, 'ASUS','Zenbook 14','18499000', '14.5', '16', 'SSD', '512', 'Performa Tinggi', '8', '5', '3', '5', '3', '4'),
(2, 'Apple','Macbook Pro','28000000', '14', '16', 'SSD', '512', 'Performa Maximal', '9', '5', '3', '5', '3', '5'),
(3, 'HP','Omen 16','25000000', '16', '32', 'SSD', '1024', 'Performa Maximal', '9', '8', '4', '5', '4', '5');
--
-- Indexes for dumped tables
--

--
-- Indexes for table 
--
ALTER TABLE `daftar_laptop`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table
--
ALTER TABLE `daftar_laptop`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
