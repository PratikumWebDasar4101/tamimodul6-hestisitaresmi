-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 11, 2018 at 03:45 PM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pendaftaran`
--

-- --------------------------------------------------------

--
-- Table structure for table `posting`
--

CREATE TABLE `posting` (
  `id` int(11) NOT NULL,
  `cerita` text NOT NULL,
  `file` text NOT NULL,
  `nim` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posting`
--

INSERT INTO `posting` (`id`, `cerita`, `file`, `nim`) VALUES
(10, 'jshsjdhsjdhjsd', 'nana.jpg', 670117030),
(11, 'hajshjahsjahJHkjha JhjhjshJAHSJHa', 'nana.jpg', 670117030),
(12, 'kzsjdjsdjajsdkasdjkajsdlkjaldb', 'nana.jpg', 670117030),
(13, '670117085 670117085 670117085 670117085', 'nana.jpg', 670117085),
(14, 'Nama saya', 'nana.jpg', 670117085),
(15, 'namaa', 'nana.jpg', 670117085),
(16, 'kljdklsjdkjaksjdaj dnlajjalkjdklasjdklas', 'nana.jpg', 670117085),
(17, 'aasahsghjags aasahsghjags aasahsghjags aasahsghjags aasahsghjags aasahsghjags aasahsghjags aasahsghjags aasahsghjags aasahsghjags aasahsghjags aasahsghjags aasahsghjags aasahsghjags aasahsghjags aasahsghjags aasahsghjags aasahsghjags aasahsghjags aasahsghjags aasahsghjags aasahsghjags aasahsghjags aasahsghjags aasahsghjags aasahsghjags aasahsghjags aasahsghjags aasahsghjags aasahsghjags aasahsghjags aasahsghjags aasahsghjags aasahsghjags aasahsghjags aasahsghjags aasahsghjags aasahsghjags aasahsghjags aasahsghjags aasahsghjags aasahsghjags aasahsghjags aasahsghjags aasahsghjags aasahsghjags aasahsghjags aasahsghjags aasahsghjags aasahsghjags aasahsghjags aasahsghjags aasahsghjags aasahsghjags aasahsghjags aasahsghjags aasahsghjags aasahsghjags aasahsghjags aasahsghjags aasahsghjags aasahsghjags aasahsghjags aasahsghjags aasahsghjags aasahsghjags aasahsghjags aasahsghjags aasahsghjags aasahsghjags aasahsghjags aasahsghjags aasahsghjags aasahsghjags aasahsghjags aasahsghjags aasahsghjags aasahsghjags aasahsghjags aasahsghjags aasahsghjags aasahsghjags aasahsghjags aasahsghjags ', 'nana.jpg', 670117085),
(18, 'asnjajshjhs', 'nana.jpg', 670117085),
(19, 'hdjkshdjhasjhdjka', 'nana.jpg', 670117085),
(20, 'Tahukan kini putri? karena itulah aku ingin hidup nyata.', 'nana.jpg', 670117033),
(21, 'Ajarkan aku melebur dalam gelap tanpa harus lenyap', 'nana.jpg', 670117033);

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE `siswa` (
  `nim` int(10) NOT NULL,
  `nama` text NOT NULL,
  `kelas` text NOT NULL,
  `jeniskelamin` text NOT NULL,
  `hobi` text NOT NULL,
  `fakultas` text NOT NULL,
  `alamat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`nim`, `nama`, `kelas`, `jeniskelamin`, `hobi`, `fakultas`, `alamat`) VALUES
(0, '', '', '', '', '', ''),
(670117000, 'Avatar', 'D3TK', 'Perempuan', 'Menyendiri', 'Fakultas Rekayasa Industri', 'Kuil'),
(670117001, 'Jati Wesiiiihjhjhj', 'D3MI', 'Laki-Laki', 'Browsing', 'Fakultas Industri Kreatif', 'Bantar Gebang'),
(670117002, 'Semua hanya ilusi', 'D3TK', 'Perempuan', 'Nonton', 'Fakultas Komunikasi Bisnis', 'Gang Belakang\r\n'),
(670117003, 'Bintang Jatuhhhhh', 'D3TK', 'Laki-Laki', 'Nonton', 'Fakultas Komunikasi Bisnis', 'Nirwana'),
(670117004, 'Bantar Gebang', 'D3TT', 'Perempuan', 'Menyendiri', 'Fakultas Industri Kreatif', 'Bandung'),
(670117005, 'Bintang Jatuh', 'D3TT', 'Laki-Laki', 'Menyendiri', 'Fakultas Industri Kreatif', 'Bandung'),
(670117006, 'Putri', 'D3IF', 'Perempuan', 'Nonton', 'Fakultas Komunikasi Bisnis', 'Ombak Soliton'),
(670117008, 'Karsa', 'D3IF', 'Perempuan', 'Menyendiri,Nonton', 'Fakultas Industri Kreatif', 'Kampung Sebelah'),
(670117009, 'Jati', 'D3TT', 'Perempuan', 'Jalan-Jalan', 'Fakultas Ekonomi Bisnis', 'Wesi'),
(670117010, 'who iam', 'D3IF', 'Perempuan', 'Browsing,Menyendiri,Nonton,Jalan-Jalan', 'Fakultas Industri Kreatif', 'Gang Sebelah'),
(670117011, 'Fere', 'D3TK', 'Laki-Laki', 'Nonton', 'Fakultas Komunikasi Bisnis', 'Newyork'),
(670117012, '', 'D3TK', 'Perempuan', 'Nonton', 'Fakultas Industri Kreatif', 'Bandung'),
(670117030, 'jshajhsjahs', 'D3SISMED', 'Perempuan', 'Menyendiri,Nonton', 'Fakultas Ilmu Terapan', 'mnnnzznamn\r\n'),
(670117033, 'Hesti Sitaresmi', 'D3MI', 'Perempuan', 'Nonton,Jalan-Jalan', 'Fakultas Industri Kreatif', 'Bantar Gebang'),
(670117035, 'Bintang Jatuh as diva', 'D3TK', 'Perempuan', 'Menyendiri,Nonton', 'Fakultas Komunikasi Bisnis', 'Madiun'),
(670117085, 'Dee lestari', 'D3IF', 'Perempuan', 'Menyendiri,Nonton', 'Fakultas Industri Kreatif', 'Neptunus'),
(2147483647, 'Hesti SItaresmi', 'D3TT', 'Perempuan', 'Array', 'Fakultas Teknik Elektro', 'Bandung');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `posting`
--
ALTER TABLE `posting`
  ADD PRIMARY KEY (`id`),
  ADD KEY `nim` (`nim`);

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`nim`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `posting`
--
ALTER TABLE `posting`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `posting`
--
ALTER TABLE `posting`
  ADD CONSTRAINT `posting_ibfk_1` FOREIGN KEY (`nim`) REFERENCES `siswa` (`nim`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
