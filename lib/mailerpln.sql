-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 06, 2019 at 10:27 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.2.12

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
  `email_pass` varchar(50) NOT NULL,
  `last_active` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_login`
--

INSERT INTO `tbl_login` (`id_login`, `username`, `password`, `email`, `email_pass`, `last_active`) VALUES
(1, 'ADMINPLN', 'admin1919', 'codefive65@gmail.com', 'Pace1996', '2019-03-06 08:10:18');

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
  `progress_pekerjaan` int(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_vendor`
--

INSERT INTO `tbl_vendor` (`id_vendor`, `no_kontrak`, `nama_vendor`, `email_vendor`, `uraian`, `tanggal_mulai`, `tanggal_selesai`, `kirim_notif`, `nilai_kontrak_spj_spk`, `nilai_kontrak_akhir_amd`, `progress_pekerjaan`) VALUES
(1, '0022/DAN.02.03/A.CKR/2017', 'PT MANGUN KARYA MANDIRI', 'ryanjoker87@gmail.com', 'Pembangunan GH Baru Ex Gardu TG62F', '2019-03-13', '2019-03-11', 1, 307971500, 307971500, 80),
(2, '0025/DAN.02.03/A.CKR/2017', 'MANDALA INDAH SAKTI', 'ryanjoker87@gmail.com', 'Pembangunan GH Baru MK75A dan TG 102B\r\n', '2019-02-28', '2019-01-04', 1, 263726600, 263726600, 80),
(4, ' 00114/REN/01.03/ASMAN REN/2017 ', 'MITRA ADIKARSA', 'ryanjoker87@gmail.com', ' Paket 1A Rehab Kabel Tua G Dukos P. Tebing CKG37 ', '2019-03-05', '2019-03-11', 1, 0, 0, 0);

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
  MODIFY `id_login` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_vendor`
--
ALTER TABLE `tbl_vendor`
  MODIFY `id_vendor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
