-- phpMyAdmin SQL Dump
-- version 5.2.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 29, 2026 at 09:54 AM
-- Server version: 5.7.33
-- PHP Version: 7.4.19

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

-- --------------------------------------------------------

--
-- Table structure for table `anggota`
--

CREATE TABLE `anggota` (
  `cid` int(30) NOT NULL,
  `NIM` varchar(30) NOT NULL,
  `Nama_Lengkap` varchar(30) NOT NULL,
  `Tempat_Lahir` varchar(50) NOT NULL,
  `Tanggal_Lahir` varchar(20) NOT NULL,
  `Hobi` varchar(15) NOT NULL,
  `Pasangan` varchar(30) NOT NULL,
  `Pekerjaan` varchar(30) NOT NULL,
  `Nama_Ortu` varchar(30) NOT NULL,
  `Nama_Kakak` varchar(30) NOT NULL,
  `Nama_Adik` varchar(30) NOT NULL,
  `create_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_tamu`
--

CREATE TABLE `tbl_tamu` (
  `cid` int(11) NOT NULL,
  `cnama` varchar(100) DEFAULT NULL,
  `cemail` varchar(100) DEFAULT NULL,
  `cpesan` text,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_tamu`
--

INSERT INTO `tbl_tamu` (`cid`, `cnama`, `cemail`, `cpesan`, `created_at`) VALUES
(1, 'Andin Alamanda Ningtyas', '2522500070@mahasiswa.atmaluhur.ac.id', 'Ke Edinburgh yuk!', '2025-12-17 08:37:32'),
(2, 'Nadia Syadahnie Putri', '2522500071@mahasiswa.atmaluhur.ac.id', 'Vibes kamu nenangin', '2025-12-17 08:37:32'),
(3, 'Maharani Indah Saputri', '2511500082@mahasiswa.atmaluhur.ac.id', 'Dasar penyuka pink', '2025-12-17 08:37:32'),
(4, 'Annisa', '2522500059@mahasiswa.atmaluhur.ac.id', 'Kamu cantik banget deh', '2025-12-17 08:47:07'),
(6, 'Anjelita Cahaya', '2522500063@mahasiswa.atmaluhur.ac.id', 'Kamu baik banget', '2025-12-17 08:48:58'),
(7, 'Redia Yuana', '2522500027@mahasiswa.atmaluhur.ac.id', 'Kamu jago dan keren', '2025-12-17 08:50:03');

-- --------------------------------------------------------

--
-- Table structure for table `tryout_pwd`
--

CREATE TABLE `tryout_pwd` (
  `cid` int(11) NOT NULL,
  `NIM` varchar(30) NOT NULL,
  `Nama_Lengkap` varchar(30) NOT NULL,
  `Tempat_Lahir` varchar(50) NOT NULL,
  `Tanggal_Lahir` date NOT NULL,
  `Hobi` varchar(15) NOT NULL,
  `Pasangan` varchar(30) NOT NULL,
  `Pekerjaan` varchar(30) NOT NULL,
  `Nama_Ortu` varchar(30) NOT NULL,
  `Nama_Kakak` varchar(30) NOT NULL,
  `Nama_Adik` varchar(30) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tryout_pwd`
--

INSERT INTO `tryout_pwd` (`cid`, `NIM`, `Nama_Lengkap`, `Tempat_Lahir`, `Tanggal_Lahir`, `Hobi`, `Pasangan`, `Pekerjaan`, `Nama_Ortu`, `Nama_Kakak`, `Nama_Adik`, `created_at`) VALUES
(1, '2522500070', 'Andin Alamanda Ningtyas', 'Pangkalpinang', '1970-01-01', 'Nonton film', 'nop', 'nop', 'Heru', 'Isnaini', 'nop', '2026-01-12 14:16:09');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `anggota`
--
ALTER TABLE `anggota`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `tbl_tamu`
--
ALTER TABLE `tbl_tamu`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `tryout_pwd`
--
ALTER TABLE `tryout_pwd`
  ADD PRIMARY KEY (`cid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `anggota`
--
ALTER TABLE `anggota`
  MODIFY `cid` int(30) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_tamu`
--
ALTER TABLE `tbl_tamu`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tryout_pwd`
--
ALTER TABLE `tryout_pwd`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
