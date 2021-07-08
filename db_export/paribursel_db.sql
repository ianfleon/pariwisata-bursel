-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 08, 2021 at 12:52 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `paribursel_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_tbl`
--

CREATE TABLE `admin_tbl` (
  `admin_id` varchar(50) NOT NULL,
  `admin_pass` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_tbl`
--

INSERT INTO `admin_tbl` (`admin_id`, `admin_pass`) VALUES
('1212NVL', '123');

-- --------------------------------------------------------

--
-- Table structure for table `artikel`
--

CREATE TABLE `artikel` (
  `id` int(11) NOT NULL,
  `judul_artikel` varchar(150) NOT NULL,
  `konten` text NOT NULL,
  `nama_file` varchar(100) NOT NULL,
  `tanggal` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `artikel`
--

INSERT INTO `artikel` (`id`, `judul_artikel`, `konten`, `nama_file`, `tanggal`) VALUES
(22, 'Tempat Wisata di Buru Selatan yang jarang diketahui', 'Tempat wisata berikut dapat kita jumpai dengan menempuh jarak tertentu.', '60e53bfb5bfe7.jpg', 'Rabu 07 Jul 2021'),
(23, 'Pulai Oki, Pulau Surga di Buru Selatan', 'Bagi teman-teman yang baru pertama kali ke Buru Selatan, bisa menjadi pilihan untuk menikmati surga kecil ini.', '60e53ce8e8cab.jpg', 'Rabu 07 Jul 2021'),
(24, 'Rekomendasi Pantai untuk foto-foto kekinian', 'Ini bisa jadi wishlist kalian gengs! Pantai-pantai di Buru Selatan bisa jadi salah satu tempat kalian mendapatkan latar yang alami.', '60e53dcedbf63.jpg', 'Rabu 07 Jul 2021');

-- --------------------------------------------------------

--
-- Table structure for table `galeri_tb`
--

CREATE TABLE `galeri_tb` (
  `id` int(11) NOT NULL,
  `nama_file` varchar(100) NOT NULL,
  `keterangan` varchar(100) NOT NULL,
  `waktu_upload` text NOT NULL,
  `gmaps` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `galeri_tb`
--

INSERT INTO `galeri_tb` (`id`, `nama_file`, `keterangan`, `waktu_upload`, `gmaps`) VALUES
(26, '60e53e1be01fc.jpg', 'Pantai Fogi', '07-07-21', 'https://goo.gl/maps/aHM6fu9Cs7eELkSv6'),
(27, '60e546cc9626f.jpg', 'Gua Waeteful', '07-07-21', '-'),
(28, '60e547219ed98.jpg', 'Gunung Geren', '07-07-21', 'https://goo.gl/maps/TBfuwM7U34Q7Z1ncA');

-- --------------------------------------------------------

--
-- Table structure for table `message_tb`
--

CREATE TABLE `message_tb` (
  `id` int(11) NOT NULL,
  `nama_lengkap` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `subjek` varchar(100) NOT NULL,
  `isi_pesan` text NOT NULL,
  `waktu` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `message_tb`
--

INSERT INTO `message_tb` (`id`, `nama_lengkap`, `email`, `subjek`, `isi_pesan`, `waktu`) VALUES
(7, 'Cahayo', 'cahayo@gmail.com', 'Tes', 'Lorem', '2021-07-05 06:16:05'),
(8, 'Ekoh', 'ekoh@gmail.com', 'Jeee', 'Lorem', '2021-07-06 06:30:49');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `galeri_tb`
--
ALTER TABLE `galeri_tb`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `message_tb`
--
ALTER TABLE `message_tb`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `artikel`
--
ALTER TABLE `artikel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `galeri_tb`
--
ALTER TABLE `galeri_tb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `message_tb`
--
ALTER TABLE `message_tb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
