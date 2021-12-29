-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 29, 2021 at 10:44 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ready2jobs`
--

-- --------------------------------------------------------

--
-- Table structure for table `daftar_kerja`
--

CREATE TABLE `daftar_kerja` (
  `id` int(12) NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `no_hp` int(15) DEFAULT NULL,
  `domisili` varchar(255) DEFAULT NULL,
  `cv` varchar(255) DEFAULT NULL,
  `job_id` int(12) DEFAULT NULL,
  `user_id` int(12) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `daftar_kerja`
--

INSERT INTO `daftar_kerja` (`id`, `nama`, `email`, `no_hp`, `domisili`, `cv`, `job_id`, `user_id`) VALUES
(1, 'her', 'her@gmail.com', 123, 'purwokerto', '663079306_MBKM.png', 1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `daftar_program`
--

CREATE TABLE `daftar_program` (
  `id` int(12) NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `no_hp` varchar(255) DEFAULT NULL,
  `program_id` int(12) DEFAULT NULL,
  `user_id` int(12) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `daftar_program`
--

INSERT INTO `daftar_program` (`id`, `nama`, `email`, `no_hp`, `program_id`, `user_id`) VALUES
(1, 'coba', 'coba@gmail.com', '12312312312', 2, 2);

-- --------------------------------------------------------

--
-- Table structure for table `pekerjaan`
--

CREATE TABLE `pekerjaan` (
  `id` int(12) NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `perusahaan` varchar(255) DEFAULT NULL,
  `deskripsi` text DEFAULT NULL,
  `kategori` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pekerjaan`
--

INSERT INTO `pekerjaan` (`id`, `nama`, `perusahaan`, `deskripsi`, `kategori`) VALUES
(1, 'Front-End Developer', 'PT Bella Belle', 'Pekerjaan untuk Front End Developer', 'Fulltime'),
(2, 'Back-End Developer', 'PT Cinta Sejati', 'Mencari orang yang bisa menjadi pemersatu pasangan', 'Partime'),
(3, 'isi isi doang', 'hehe', 'cuman isi doang', 'Fulltime'),
(4, 'hehehehehehe', 'bercanda', 'hhehehehehehe', 'Fulltime');

-- --------------------------------------------------------

--
-- Table structure for table `program`
--

CREATE TABLE `program` (
  `id` int(12) NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `penyelenggara` varchar(255) DEFAULT NULL,
  `deskripsi` text DEFAULT NULL,
  `kategori` varchar(255) DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `harga` int(20) DEFAULT NULL,
  `gambar` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `program`
--

INSERT INTO `program` (`id`, `nama`, `penyelenggara`, `deskripsi`, `kategori`, `tanggal`, `harga`, `gambar`) VALUES
(1, 'Laravel Back End Training', 'PT Denice terbaik', 'Laravel Back End Training', 'Training', '2022-01-08', 50000, '649699683_SS comvis EDE.PNG'),
(2, 'Seminar UI/UX Desainer', 'PT Nabella', 'Seminar dari pekerja PT Nabella', 'Seminar', '2022-01-08', 50000, '177840693_MBKM.png');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `no_hp` int(15) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `nama`, `no_hp`, `email`, `password`) VALUES
(1, 'admin', 123, 'admin@admin.com', 'admin'),
(2, 'herher', 2567, 'her@her.com', '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `daftar_kerja`
--
ALTER TABLE `daftar_kerja`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_pekerjaan` (`job_id`),
  ADD KEY `fk_user` (`user_id`);

--
-- Indexes for table `daftar_program`
--
ALTER TABLE `daftar_program`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_program` (`program_id`),
  ADD KEY `fk_user_id` (`user_id`);

--
-- Indexes for table `pekerjaan`
--
ALTER TABLE `pekerjaan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `program`
--
ALTER TABLE `program`
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
-- AUTO_INCREMENT for table `daftar_kerja`
--
ALTER TABLE `daftar_kerja`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `daftar_program`
--
ALTER TABLE `daftar_program`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pekerjaan`
--
ALTER TABLE `pekerjaan`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `program`
--
ALTER TABLE `program`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `daftar_kerja`
--
ALTER TABLE `daftar_kerja`
  ADD CONSTRAINT `fk_pekerjaan` FOREIGN KEY (`job_id`) REFERENCES `pekerjaan` (`id`),
  ADD CONSTRAINT `fk_user` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `daftar_program`
--
ALTER TABLE `daftar_program`
  ADD CONSTRAINT `fk_program` FOREIGN KEY (`program_id`) REFERENCES `program` (`id`),
  ADD CONSTRAINT `fk_user_id` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
