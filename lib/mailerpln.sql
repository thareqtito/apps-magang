-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 25, 2019 at 09:24 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mailerpln`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_login`
--

CREATE TABLE `tbl_login` (
  `id_login` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(10) NOT NULL,
  `email` varchar(100) NOT NULL,
  `email_pass` varchar(50) DEFAULT NULL,
  `login_role` int(1) NOT NULL,
  `last_active` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_login`
--

INSERT INTO `tbl_login` (`id_login`, `username`, `password`, `email`, `email_pass`, `login_role`, `last_active`) VALUES
(1, 'admin', '123456', 'codefive65@gmail.com', 'Pace1996', 0, '2019-03-25 08:04:42'),
(2, 'mhdiriansyah', 'Pace1996', 'muhammadiriansyah@ralali.com', NULL, 1, '2019-03-25 07:23:29'),
(3, 'tito', 'tito2000', 'tito@gmail.com', NULL, 1, '2019-03-25 07:25:33');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_vendor`
--

CREATE TABLE `tbl_vendor` (
  `id_vendor` int(11) NOT NULL,
  `no_kontrak` varchar(100) NOT NULL,
  `nama_vendor` text NOT NULL,
  `email_vendor` varchar(100) NOT NULL,
  `uraian` text NOT NULL,
  `tanggal_mulai` date NOT NULL,
  `tanggal_selesai` date NOT NULL,
  `kirim_notif` int(1) NOT NULL,
  `nilai_kontrak_spj_spk` int(12) DEFAULT NULL,
  `nilai_kontrak_akhir_amd` int(12) DEFAULT NULL,
  `penagihan_tanggal` date NOT NULL,
  `penagihan_rupiah` int(12) NOT NULL,
  `pembayaran_rupiah` int(12) NOT NULL,
  `progress_pekerjaan` int(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_vendor`
--

INSERT INTO `tbl_vendor` (`id_vendor`, `no_kontrak`, `nama_vendor`, `email_vendor`, `uraian`, `tanggal_mulai`, `tanggal_selesai`, `kirim_notif`, `nilai_kontrak_spj_spk`, `nilai_kontrak_akhir_amd`, `penagihan_tanggal`, `penagihan_rupiah`, `pembayaran_rupiah`, `progress_pekerjaan`) VALUES
(12, 'kontrak0001', 'CODE5', 'ryanjoker87@gmail.com', 'membangun jaringan internet', '2019-03-10', '2019-03-24', 1, 650000, 1150000, '2019-03-25', 5000, 5000, 88),
(14, 'kontrak00002', 'TAKUPAZ', 'muhammad.iriansyah@ralali.com', 'wkwk', '2019-03-06', '2019-03-31', 1, 5000000, 6000000, '2019-03-25', 5000, 5000, 98),
(15, 'kontrak0003', 'PT THREECRAFT', 'iriansyah1431299@sttpln.ac.id', 'Banyak-banyak membaca', '2019-03-14', '2019-03-31', 1, 6000000, 6500000, '2019-03-25', 5000, 5000, 87);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_login`
--
ALTER TABLE `tbl_login`
  ADD PRIMARY KEY (`id_login`);

--
-- Indexes for table `tbl_vendor`
--
ALTER TABLE `tbl_vendor`
  ADD PRIMARY KEY (`id_vendor`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_login`
--
ALTER TABLE `tbl_login`
  MODIFY `id_login` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_vendor`
--
ALTER TABLE `tbl_vendor`
  MODIFY `id_vendor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
