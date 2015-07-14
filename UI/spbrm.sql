-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 14, 2015 at 11:55 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `spbrm`
--

-- --------------------------------------------------------

--
-- Table structure for table `histori`
--

CREATE TABLE IF NOT EXISTS `histori` (
`id_histori` int(5) NOT NULL,
  `npm` varchar(10) NOT NULL,
  `pengguna` varchar(60) NOT NULL,
  `status` text NOT NULL,
  `tanggal_pembaruan` datetime NOT NULL,
  `keterangan` text NOT NULL,
  `catatan` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=44 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `histori`
--

INSERT INTO `histori` (`id_histori`, `npm`, `pengguna`, `status`, `tanggal_pembaruan`, `keterangan`, `catatan`) VALUES
(1, '2010730013', 'pascal@unpar.ac.id', 'membuat entri', '2015-07-09 10:37:32', 'Samuel adalah mahasiswa bimbingan Pascal', '9 Juli 2015 Pernah bimbingan dengan Pascal'),
(2, '2010730013', 'pascal@unpar.ac.id', 'melihat', '2015-07-09 10:37:36', '', ''),
(3, '2010730013', 'pascal@unpar.ac.id', 'menambah catatan masalah', '2015-07-09 10:37:55', '', ''),
(4, '2010730013', 'pascal@unpar.ac.id', 'melihat', '2015-07-09 10:37:58', '', ''),
(5, '2010730013', 'pascal@unpar.ac.id', 'melihat', '2015-07-09 10:38:12', '', ''),
(6, '2010730013', 'pascal@unpar.ac.id', 'melihat', '2015-07-09 10:38:21', '', ''),
(7, '2010730014', 'chandraw@unpar.ac.id', 'membuat entri', '2015-07-09 10:52:52', 'mahasiswa angkatan baru 2010', 'belum pernah terlambat'),
(8, '2010730013', 'chandraw@unpar.ac.id', 'melihat', '2015-07-09 10:52:57', '', ''),
(9, '2010730014', 'chandraw@unpar.ac.id', 'melihat', '2015-07-09 10:53:11', '', ''),
(10, '2010730014', 'chandraw@unpar.ac.id', 'menambah catatan masalah', '2015-07-09 10:53:24', '', ''),
(11, '2010730014', 'chandraw@unpar.ac.id', 'melihat', '2015-07-09 10:53:29', '', ''),
(12, '2010730014', 'chandraw@unpar.ac.id', 'melihat', '2015-07-09 10:53:39', '', ''),
(13, '2010730014', 'chandraw@unpar.ac.id', 'melihat', '2015-07-09 10:53:45', '', ''),
(14, '2010730013', 'chandraw@unpar.ac.id', 'melihat', '2015-07-09 10:54:25', '', ''),
(15, '2010730014', 'chandraw@unpar.ac.id', 'melihat', '2015-07-09 10:54:34', '', ''),
(16, '2013730006', 'husnulhakim@unpar.ac.id', 'membuat entri', '2015-07-09 11:03:03', '', ''),
(17, '2010730013', 'husnulhakim@unpar.ac.id', 'melihat', '2015-07-09 11:03:13', '', ''),
(18, '2010730013', 'husnulhakim@unpar.ac.id', 'melihat', '2015-07-09 11:03:23', '', ''),
(19, '2010730013', 'husnulhakim@unpar.ac.id', 'menambah catatan masalah', '2015-07-09 11:04:06', '', ''),
(20, '2010730013', 'husnulhakim@unpar.ac.id', 'melihat', '2015-07-09 11:04:11', '', ''),
(21, '2010730013', 'husnulhakim@unpar.ac.id', 'melihat', '2015-07-09 11:04:21', '', ''),
(22, '2010730013', 'husnulhakim@unpar.ac.id', 'melihat', '2015-07-09 11:04:39', '', ''),
(23, '2010730013', 'husnulhakim@unpar.ac.id', 'melihat', '2015-07-09 11:04:51', '', ''),
(24, '2010730013', 'husnulhakim@unpar.ac.id', 'melihat', '2015-07-09 11:05:02', '', ''),
(25, '2010730013', 'husnulhakim@unpar.ac.id', 'melihat', '2015-07-09 11:05:09', '', ''),
(26, '2010730013', 'husnulhakim@unpar.ac.id', 'melihat', '2015-07-09 11:05:21', '', ''),
(27, '2010730013', 'husnulhakim@unpar.ac.id', 'melihat', '2015-07-09 11:05:25', '', ''),
(28, '2010730013', 'husnulhakim@unpar.ac.id', 'mengedit', '2015-07-09 11:05:37', 'Samuel adalah mahasiswa bimbingan Pascal yang sedang melakukan pengujian', '9 Juli 2015 Pernah bimbingan dengan Pascal'),
(29, '2010730013', 'husnulhakim@unpar.ac.id', 'melihat', '2015-07-09 11:05:40', '', ''),
(30, '2010730013', 'husnulhakim@unpar.ac.id', 'melihat', '2015-07-09 11:05:49', '', ''),
(31, '2010730001', '7310013@student.unpar.ac.id', 'membuat entri', '2015-07-09 12:39:49', 'Andri mahasiswa yang rajin', '9 Juli 2015 Melakukan perwalian'),
(32, '2010730013', '7310013@student.unpar.ac.id', 'melihat', '2015-07-09 12:40:00', '', ''),
(33, '2010730013', '7310013@student.unpar.ac.id', 'menambah catatan masalah', '2015-07-09 12:40:58', '', ''),
(34, '2010730013', '7310013@student.unpar.ac.id', 'melihat', '2015-07-09 12:41:01', '', ''),
(35, '2010730013', '7310013@student.unpar.ac.id', 'melihat', '2015-07-09 12:41:18', '', ''),
(36, '2010730013', '7310013@student.unpar.ac.id', 'melihat', '2015-07-09 12:41:53', '', ''),
(37, '2010730013', '7310013@student.unpar.ac.id', 'melihat', '2015-07-09 12:42:17', '', ''),
(38, '2010730001', '7310013@student.unpar.ac.id', 'melihat', '2015-07-09 12:43:07', '', ''),
(39, '2010730013', '7310013@student.unpar.ac.id', 'melihat', '2015-07-09 12:45:12', '', ''),
(40, '2010730013', '7310013@student.unpar.ac.id', 'melihat', '2015-07-13 22:27:05', '', ''),
(41, '2010730013', '7310013@student.unpar.ac.id', 'melihat', '2015-07-13 22:57:27', '', ''),
(42, '2010730013', '7310013@student.unpar.ac.id', 'melihat', '2015-07-13 22:57:30', '', ''),
(43, '2010730013', '7310013@student.unpar.ac.id', 'melihat', '2015-07-13 23:24:38', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `info_mahasiswa`
--

CREATE TABLE IF NOT EXISTS `info_mahasiswa` (
  `npm` varchar(10) NOT NULL,
  `nama` varchar(60) NOT NULL,
  `keterangan` text NOT NULL,
  `catatan` text NOT NULL,
  `pembaruan_terakhir` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `info_mahasiswa`
--

INSERT INTO `info_mahasiswa` (`npm`, `nama`, `keterangan`, `catatan`, `pembaruan_terakhir`) VALUES
('2010730001', 'Andri AG', 'Andri mahasiswa yang rajin', '9 Juli 2015 Melakukan perwalian', '2015-07-09 12:39:49'),
('2010730013', 'Samuel Herman', 'Samuel adalah mahasiswa bimbingan Pascal yang sedang melakukan pengujian', '9 Juli 2015 Pernah bimbingan dengan Pascal', '2015-07-09 11:05:37'),
('2010730014', 'Nadia', 'mahasiswa angkatan baru 2010', 'belum pernah terlambat', '2015-07-09 10:52:52'),
('2013730006', 'Antonius', '', '', '2015-07-09 11:03:03');

-- --------------------------------------------------------

--
-- Table structure for table `masalah`
--

CREATE TABLE IF NOT EXISTS `masalah` (
`id_masalah` int(5) NOT NULL,
  `npm` varchar(10) NOT NULL,
  `pengguna` varchar(60) NOT NULL,
  `masalah_dengan` varchar(25) NOT NULL,
  `masalah` text NOT NULL,
  `tanggal` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `masalah`
--

INSERT INTO `masalah` (`id_masalah`, `npm`, `pengguna`, `masalah_dengan`, `masalah`, `tanggal`) VALUES
(1, '2010730013', '7310013@student.unpar.ac.id', 'Pascal', 'Terlambat datang 1 menit', '2015-07-09 10:37:55'),
(2, '2010730014', '7310013@student.unpar.ac.id', 'chandra', 'tidak masuk kelas 2x', '2015-07-09 10:53:24'),
(3, '2010730013', '7310013@student.unpar.ac.id', 'Skripsi 2', 'Belum mengembalikan kartu bimbingan.', '2015-07-09 11:04:06'),
(4, '2010730013', '7310013@student.unpar.ac.id', 'BPM', 'Jarang masuk kelas dan tugas sama seperti tugas kelompok lain', '2015-07-09 12:40:58');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `histori`
--
ALTER TABLE `histori`
 ADD PRIMARY KEY (`id_histori`);

--
-- Indexes for table `info_mahasiswa`
--
ALTER TABLE `info_mahasiswa`
 ADD PRIMARY KEY (`npm`), ADD UNIQUE KEY `nama` (`nama`);

--
-- Indexes for table `masalah`
--
ALTER TABLE `masalah`
 ADD PRIMARY KEY (`id_masalah`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `histori`
--
ALTER TABLE `histori`
MODIFY `id_histori` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=44;
--
-- AUTO_INCREMENT for table `masalah`
--
ALTER TABLE `masalah`
MODIFY `id_masalah` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
