-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 12, 2021 at 06:03 PM
-- Server version: 8.0.26-0ubuntu0.20.04.3
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hris`
--

-- --------------------------------------------------------

--
-- Table structure for table `karyawan`
--

CREATE TABLE `karyawan` (
  `id_karyawan` int NOT NULL,
  `nama_karyawan` varchar(255) NOT NULL,
  `no_induk_karyawan` varchar(25) NOT NULL,
  `foto_karyawan` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `peringkat_golongan` enum('None','I','II','III','IV','V','VI','VII','VIII','IX','X','XI','XII','XIII','XIV','XV') CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `sk_pengangkatan` varchar(100) DEFAULT NULL,
  `jabatan` varchar(50) NOT NULL,
  `jenis_kelamin` enum('laki-laki','perempuan') CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `agama` varchar(50) DEFAULT NULL,
  `status` enum('pkwtt','pkwt','pkh','outsourcing') CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `tempat_lahir` varchar(50) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `no_ktp` varchar(50) NOT NULL,
  `provinsi_ktp` varchar(50) DEFAULT NULL,
  `kota_ktp` varchar(50) DEFAULT NULL,
  `alamat_ktp` text,
  `no_npwp` varchar(50) DEFAULT NULL,
  `provinsi_domisili` varchar(50) DEFAULT NULL,
  `kota_domisili` varchar(50) DEFAULT NULL,
  `alamat_domisili` text,
  `pendidikan_terakhir` varchar(100) DEFAULT NULL,
  `no_ijazah` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `karyawan`
--

INSERT INTO `karyawan` (`id_karyawan`, `nama_karyawan`, `no_induk_karyawan`, `foto_karyawan`, `peringkat_golongan`, `sk_pengangkatan`, `jabatan`, `jenis_kelamin`, `agama`, `status`, `tempat_lahir`, `tanggal_lahir`, `no_ktp`, `provinsi_ktp`, `kota_ktp`, `alamat_ktp`, `no_npwp`, `provinsi_domisili`, `kota_domisili`, `alamat_domisili`, `pendidikan_terakhir`, `no_ijazah`) VALUES
(1, 'Ihsan Caisario', 'PKWT', NULL, 'None', '-', 'Staf SDM & Umum', 'laki-laki', 'Islam', 'pkwt', 'Padang', '1991-05-24', '1371092405910007', 'Sumatera Barat', 'Padang', 'Komp. Taruko I', 'laki-laki', 'Sumatera Utara', 'Medan', 'Jl Suluh No 26', 'S-2', '-'),
(13, 'Irwan Santoso', 'PKWT', 'img/G54090078 Ihsan Caisario.JPG', 'None', '-', 'Staf SDM & Umum', 'laki-laki', 'Islam', 'pkwt', 'Medan', '1988-08-15', '-', 'Sumatera Utara', 'Medan', 'TitiPapan', 'laki-laki', 'Sumatera Utara', 'Medan', 'TitiPapan', 'D-3', '-');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `user_password` varchar(255) NOT NULL,
  `user_email` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_name`, `user_password`, `user_email`) VALUES
(1, 'adminbelawan', '$2y$10$BTeHhhtfC38GgKIN/fbrY.8s1sITLVJePBa3Ui6Go/5uV.4n30nla', 'perumperindo.cabangbelawan@yahoo.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `karyawan`
--
ALTER TABLE `karyawan`
  ADD PRIMARY KEY (`id_karyawan`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `karyawan`
--
ALTER TABLE `karyawan`
  MODIFY `id_karyawan` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
