-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 05, 2015 at 04:07 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `sirm`
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
  `keterangan` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=119 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `histori`
--

INSERT INTO `histori` (`id_histori`, `npm`, `pengguna`, `status`, `tanggal_pembaruan`, `keterangan`) VALUES
(1, '2010730001', '7310013@student.unpar.ac.id', 'membuat entri', '2015-04-20 21:49:40', '# Umum\r\n\r\nAndri mahasiswa yang pendiam namun berprestasi\r\n\r\n# Catatan\r\n\r\n* 20 April 2015, pertama kali dibuat\r\n'),
(2, '2010730001', '7310013@student.unpar.ac.id', 'melihat', '2015-04-20 21:50:03', ''),
(3, '2010730001', '7310013@student.unpar.ac.id', 'mengedit', '2015-04-20 21:51:34', '# Umum\r\n\r\nAndri mahasiswa yang pendiam namun berprestasi. Andri memilih sub jurusan _computer_ _science_\r\n\r\n# Catatan\r\n\r\n* 20 April 2015, pertama kali dibuat\r\n'),
(4, '2010730001', '7310013@student.unpar.ac.id', 'melihat', '2015-04-20 21:51:55', ''),
(5, '2010730001', '7310013@student.unpar.ac.id', 'melihat', '2015-04-21 00:55:45', ''),
(6, '2010730001', '7310013@student.unpar.ac.id', 'melihat', '2015-04-21 01:01:43', ''),
(7, '2010730013', '7310013@student.unpar.ac.id', 'membuat entri', '2015-04-21 01:06:40', '# Umum\r\n\r\nSamuel sedang mengambil tugas akhir\r\n\r\n# Catatan\r\n\r\n* 21 April 2015, pertama kali dibuat\r\n'),
(8, '2010730013', '7310013@student.unpar.ac.id', 'melihat', '2015-04-21 01:06:43', ''),
(9, '2010730013', '7310013@student.unpar.ac.id', 'melihat', '2015-04-21 01:06:55', ''),
(10, '2010730001', '7310013@student.unpar.ac.id', 'melihat', '2015-04-23 23:17:46', ''),
(11, '2010730001', '7310013@student.unpar.ac.id', 'melihat', '2015-04-23 23:22:03', ''),
(12, '2010730001', '7310013@student.unpar.ac.id', 'melihat', '2015-04-23 23:24:34', ''),
(13, '2010730001', '7310013@student.unpar.ac.id', 'melihat', '2015-04-23 23:25:21', ''),
(14, '2010730001', '7310013@student.unpar.ac.id', 'melihat', '2015-04-23 23:26:01', ''),
(15, '2010730001', '7310013@student.unpar.ac.id', 'melihat', '2015-04-23 23:26:39', ''),
(16, '2010730001', '7310013@student.unpar.ac.id', 'melihat', '2015-04-23 23:26:43', ''),
(17, '2010730001', '7310013@student.unpar.ac.id', 'melihat', '2015-04-23 23:27:00', ''),
(18, '2010730001', '7310013@student.unpar.ac.id', 'melihat', '2015-04-23 23:27:12', ''),
(19, '2010730001', '7310013@student.unpar.ac.id', 'melihat', '2015-04-23 23:27:37', ''),
(20, '2010730013', '7310013@student.unpar.ac.id', 'melihat', '2015-04-23 23:29:29', ''),
(21, '2010730013', '7310013@student.unpar.ac.id', 'melihat', '2015-04-23 23:31:56', ''),
(22, '2010730013', '7310013@student.unpar.ac.id', 'melihat', '2015-04-23 23:32:19', ''),
(23, '2010730013', '7310013@student.unpar.ac.id', 'melihat', '2015-04-23 23:32:42', ''),
(24, '2010730013', '7310013@student.unpar.ac.id', 'melihat', '2015-04-23 23:33:38', ''),
(25, '2010730013', '7310013@student.unpar.ac.id', 'melihat', '2015-04-23 23:33:47', ''),
(26, '2010730013', '7310013@student.unpar.ac.id', 'melihat', '2015-04-23 23:34:16', ''),
(27, '2010730013', '7310013@student.unpar.ac.id', 'melihat', '2015-04-23 23:34:51', ''),
(28, '2010730013', '7310013@student.unpar.ac.id', 'melihat', '2015-04-23 23:34:58', ''),
(29, '2010730013', '7310013@student.unpar.ac.id', 'melihat', '2015-04-24 00:00:53', ''),
(30, '2010730013', '7310013@student.unpar.ac.id', 'mengedit', '2015-04-24 00:23:34', '# Umum\r\n\r\nSamuel sedang mengambil tugas akhir dan sekarang sedang melakukan tahap _finishing_\r\n\r\n# Catatan\r\n\r\n* 22 April 2015, melakukan perwalian ke-2\r\n* 21 April 2015, pertama kali dibuat\r\n'),
(31, '2010730013', '7310013@student.unpar.ac.id', 'melihat', '2015-04-24 00:31:06', ''),
(32, '2010730012', '7310013@student.unpar.ac.id', 'membuat entri', '2015-04-24 00:55:57', '# Umum\r\n\r\nIsilah deskripsi umum mahasiswa disini.\r\n\r\n# Catatan\r\n\r\n* 9 Oktober 2014, pertama kali dibuat\r\n'),
(33, '2010730005', '7310013@student.unpar.ac.id', 'membuat entri', '2015-04-28 14:28:51', '# Umum\r\n\r\nGrady mahasiswa yang senang berbisnis.\r\n\r\n# Catatan\r\n\r\n* 4 April 2015, pertama kali dibuat\r\n'),
(34, '2010730005', '7310013@student.unpar.ac.id', 'melihat', '2015-04-28 14:28:55', ''),
(35, '2010730005', '7310013@student.unpar.ac.id', 'melihat', '2015-04-28 14:29:10', ''),
(36, '2010730005', '7310013@student.unpar.ac.id', 'mengedit', '2015-04-28 14:30:08', '# Umum\r\n\r\nGrady mahasiswa yang senang berbisnis. Grady saat ini sedang mengambil tugas akhir dan dibimbing oleh Ibu Joana\r\n\r\n# Catatan\r\n\r\n* 4 April 2015, pertama kali dibuat\r\n'),
(37, '2010730005', '7310013@student.unpar.ac.id', 'melihat', '2015-04-28 14:30:16', ''),
(38, '2010730005', '7310013@student.unpar.ac.id', 'melihat', '2015-04-28 14:31:02', ''),
(39, '2010730005', '7310013@student.unpar.ac.id', 'mengedit', '2015-04-28 14:32:08', '# Umum\r\n\r\nGrady mahasiswa yang senang berbisnis. Grady saat ini sedang mengambil tugas akhir dan dibimbing oleh Ibu Joana. Grady juga menjalankan bisnisnya yang telah dia rintis sejak semester 1.\r\n\r\n# Catatan\r\n\r\n* 4 April 2015, melakukan bimbingan\r\n* 4 April 2015, pertama kali dibuat\r\n'),
(40, '2010730005', '7310013@student.unpar.ac.id', 'melihat', '2015-04-28 14:32:11', ''),
(41, '2010730048', '7310048@student.unpar.ac.id', 'membuat entri', '2015-04-28 17:17:10', '# Umum\r\n\r\nbelum lulus\r\n\r\n# Catatan\r\n\r\n* 28 april 2015 first entry.... \r\n   no improvemenet\r\n\r\n* no look of improvement\r\n\r\n\r\n\r\n'),
(42, '2010730001', '7310048@student.unpar.ac.id', 'melihat', '2015-04-28 17:17:16', ''),
(43, '2010730001', '7310048@student.unpar.ac.id', 'melihat', '2015-04-28 17:18:15', ''),
(44, '2010730001', '7310048@student.unpar.ac.id', 'mengedit', '2015-04-28 17:18:56', '# Umum\r\n\r\nnot relevant\r\n\r\n# Catatan\r\n\r\n* 20 April 2015, pertama kali dibuat\r\n\r\n* 28 april 2015. edit by James \r\n'),
(45, '2010730005', '7310048@student.unpar.ac.id', 'melihat', '2015-04-28 17:19:35', ''),
(46, '2010730001', '7310048@student.unpar.ac.id', 'melihat', '2015-04-28 17:19:41', ''),
(47, '2010730001', '7310048@student.unpar.ac.id', 'melihat', '2015-04-28 17:20:07', ''),
(48, '2010730075', '7310005@student.unpar.ac.id', 'membuat entri', '2015-04-28 18:08:41', '# Umum\r\n\r\nIsilah deskripsi umum mahasiswa disini.\r\n\r\n# Catatan\r\n\r\n* 9 Oktober 2014, pertama kali dibuat\r\n'),
(49, '2010730005', '7310005@student.unpar.ac.id', 'melihat', '2015-04-28 18:08:48', ''),
(50, '2010730005', '7310005@student.unpar.ac.id', 'melihat', '2015-04-28 18:09:01', ''),
(51, '2010730005', '7310005@student.unpar.ac.id', 'melihat', '2015-04-28 18:09:21', ''),
(52, '2010730005', '7310005@student.unpar.ac.id', 'mengedit', '2015-04-28 18:10:06', '# Umum\r\n\r\nGrady mahasiswa yang senang berbisnis. Grady saat ini sedang mengambil tugas akhir dan dibimbing oleh Ibu Joana. Grady juga menjalankan bisnisnya yang telah dia rintis sejak semester 1.\r\n\r\n# Catatan\r\n\r\n* 4 April 2015, melakukan bimbingan\r\n* 4 April 2015, pertama kali dibuat\r\n* 28 April 2015 : menyelesaikan skripsi\r\n'),
(53, '2010730005', '7310005@student.unpar.ac.id', 'melihat', '2015-04-28 18:10:12', ''),
(54, '2010730005', '7310005@student.unpar.ac.id', 'melihat', '2015-04-28 18:10:39', ''),
(55, '2010730001', '7310075@student.unpar.ac.id', 'melihat', '2015-04-28 18:18:12', ''),
(56, '2010730001', '7310075@student.unpar.ac.id', 'melihat', '2015-04-28 18:18:28', ''),
(57, '2010730001', '7310075@student.unpar.ac.id', 'mengedit', '2015-04-28 18:19:07', '# Umum\r\n\r\nnot relevant\r\n\r\n# Catatan\r\n\r\n* 20 April 2015, pertama kali dibuat\r\n\r\n* 28 april 2015. edit by James \r\n\r\n*28 April 2015 edit by Reyner\r\n'),
(58, '2010730100', '7310075@student.unpar.ac.id', 'membuat entri', '2015-04-28 18:20:59', '# Umum\r\n\r\nreyna adalah mahasiswa IT\r\n\r\n# Catatan\r\n\r\n* 28 April 2014 pertama kali dibuat'),
(59, '2010730100', '7310075@student.unpar.ac.id', 'melihat', '2015-04-28 18:21:09', ''),
(60, '2010730001', '7310041@student.unpar.ac.id', 'melihat', '2015-04-29 14:13:21', ''),
(61, '2010730001', '7310041@student.unpar.ac.id', 'mengedit', '2015-04-29 14:14:06', '# Umum\r\n\r\nnot relevant\r\nook\r\n\r\n# Catatan\r\n\r\n* 20 April 2015, pertama kali dibuat\r\n\r\n* 28 april 2015. edit by James \r\n\r\n*28 April 2015 edit by Reyner\r\n'),
(62, '2010730001', '7310041@student.unpar.ac.id', 'melihat', '2015-04-29 14:14:10', ''),
(63, '2010730041', '7310041@student.unpar.ac.id', 'membuat entri', '2015-04-29 14:16:08', '# Umum\r\nlulusss\r\n  \r\n# Catatan\r\n\r\n* 29 april 2015, pertama kali dibuat\r\n'),
(64, '2010730041', '7310041@student.unpar.ac.id', 'melihat', '2015-04-29 14:16:21', ''),
(65, '2010730041', '7310041@student.unpar.ac.id', 'membuat entri', '2015-04-29 14:16:58', '# Umum\r\n\r\nIsilah deskripsi umum mahasiswa disini.\r\n\r\n# Catatan\r\n\r\n* 9 Oktober 2014, pertama kali dibuat\r\n'),
(66, '2010730001', '7310080@student.unpar.ac.id', 'melihat', '2015-04-29 15:09:23', ''),
(67, '2010730001', '7310080@student.unpar.ac.id', 'mengedit', '2015-04-29 15:09:33', '# Umum\r\n\r\nnot relevant\r\nook\r\n\r\n# Catatan\r\n\r\n* 20 April 2015, pertama kali dibuat\r\n\r\n* 28 april 2015. edit by James \r\n\r\n*28 April 2015 edit by Reyner\r\n'),
(68, '2010730080', '7310080@student.unpar.ac.id', 'membuat entri', '2015-04-29 15:09:54', '# Umum\r\n\r\nIsilah deskripsi umum mahasiswa disini.\r\n\r\n# Catatan\r\n\r\n* 9 Oktober 2014, pertama kali dibuat\r\n'),
(69, '2010730080', '7310080@student.unpar.ac.id', 'melihat', '2015-04-29 15:09:58', ''),
(70, '2010730080', '7310080@student.unpar.ac.id', 'melihat', '2015-04-29 15:10:20', ''),
(71, '2010730080', '7310080@student.unpar.ac.id', 'mengedit', '2015-04-29 15:11:20', '# Umum\r\n\r\nsemester ini lulus \r\n\r\n\r\n# Catatan\r\n\r\n* 9 Oktober 2014, pertama kali dibuat\r\n* 28 April 2015, diedit\r\n\r\n'),
(72, '2010730080', '7310080@student.unpar.ac.id', 'melihat', '2015-04-29 15:11:23', ''),
(73, '2010730080', '7310080@student.unpar.ac.id', 'melihat', '2015-04-29 15:11:38', ''),
(74, '2010730048', '7310080@student.unpar.ac.id', 'melihat', '2015-04-29 15:11:47', ''),
(75, '2010730048', '7310080@student.unpar.ac.id', 'mengedit', '2015-04-29 15:12:03', '# Umum\r\n\r\nbelum lulus gak pernah ke kampus\r\n\r\n# Catatan\r\n\r\n* 28 april 2015 first entry.... \r\n   no improvemenet\r\n\r\n* no look of improvement\r\n\r\n\r\n\r\n'),
(76, '2010730012', '7310080@student.unpar.ac.id', 'melihat', '2015-04-29 15:12:12', ''),
(77, '2010730012', '7310080@student.unpar.ac.id', 'melihat', '2015-04-29 15:12:19', ''),
(78, '2010730071', '7310071@student.unpar.ac.id', 'membuat entri', '2015-04-29 15:22:16', '# Umum\r\n\r\nSkripsi selesai\r\n\r\n# Catatan\r\n\r\n* 12 April 2015 Bimbingan terakhir\r\n\r\n* 9 Oktober 2014, pertama kali dibuat\r\n'),
(79, '2010730071', '7310071@student.unpar.ac.id', 'melihat', '2015-04-29 15:22:35', ''),
(80, '2010730071', '7310071@student.unpar.ac.id', 'melihat', '2015-04-29 15:22:54', ''),
(81, '2010730071', '7310071@student.unpar.ac.id', 'melihat', '2015-04-29 15:23:00', ''),
(82, '2010730071', '7310071@student.unpar.ac.id', 'mengedit', '2015-04-29 15:23:31', '# Umum\r\n\r\nSkripsi selesai \r\n\r\n# Catatan\r\n\r\n* 12 April 2015 Bimbingan terakhir + revisi dokumen\r\n\r\n* 9 Oktober 2014, pertama kali dibuat\r\n'),
(83, '2010730071', '7310071@student.unpar.ac.id', 'melihat', '2015-04-29 15:23:38', ''),
(84, '2010730071', '7310071@student.unpar.ac.id', 'melihat', '2015-04-29 15:23:43', ''),
(85, '2010730071', '7310071@student.unpar.ac.id', 'mengedit', '2015-04-29 15:24:25', '# Umum\r\n\r\nMemiliki situs andreas.blogspot.com\r\nSkripsi selesai \r\n\r\n# Catatan\r\n\r\n* 12 April 2015 Bimbingan terakhir + revisi dokumen\r\n\r\n* 9 Oktober 2014, pertama kali dibuat\r\n'),
(86, '2010730071', '7310071@student.unpar.ac.id', 'melihat', '2015-04-29 15:24:27', ''),
(87, '2010730071', '7310071@student.unpar.ac.id', 'mengedit', '2015-04-29 15:24:41', '# Umum\r\n\r\nMemiliki situs www.andreas.blogspot.com\r\nSkripsi selesai \r\n\r\n# Catatan\r\n\r\n* 12 April 2015 Bimbingan terakhir + revisi dokumen\r\n\r\n* 9 Oktober 2014, pertama kali dibuat\r\n'),
(88, '2010730071', '7310071@student.unpar.ac.id', 'melihat', '2015-04-29 15:24:44', ''),
(89, '2010730013', '7310071@student.unpar.ac.id', 'melihat', '2015-04-29 15:24:57', ''),
(90, '2010730071', '7310071@student.unpar.ac.id', 'melihat', '2015-04-29 15:25:09', ''),
(91, '2010730071', '7310071@student.unpar.ac.id', 'mengedit', '2015-04-29 15:25:55', '# Umum\r\n\r\nMemiliki situs www.andreas.blogspot.com\r\nSkripsi selesai \r\n\r\n# Catatan\r\n\r\n* 8 April 2015 Bab 5\r\n\r\n* 12 April 2015 Bimbingan terakhir + revisi dokumen\r\n\r\n* 9 Oktober 2014, pertama kali dibuat\r\n'),
(92, '2010730071', '7310071@student.unpar.ac.id', 'melihat', '2015-04-29 15:25:58', ''),
(93, '2010730039', '1311124@student.unpar.ac.id', 'membuat entri', '2015-04-29 18:09:32', '# Umum\r\n\r\nIsilah deskripsi umum mahasiswa disini.\r\n\r\n# Catatan\r\n\r\n* 9 Oktober 2014, pertama kali dibuat\r\n'),
(94, '2010730039', '1311124@student.unpar.ac.id', 'membuat entri', '2015-04-29 18:09:32', '# Umum\r\n\r\nIsilah deskripsi umum mahasiswa disini.\r\n\r\n# Catatan\r\n\r\n* 9 Oktober 2014, pertama kali dibuat\r\n'),
(95, '2010730040', '1311124@student.unpar.ac.id', 'membuat entri', '2015-04-29 18:10:12', '# Umum\r\n\r\nIsilah deskripsi umum mahasiswa disini.\r\n\r\n# Catatan\r\n\r\n* 9 Oktober 2014, pertama kali dibuat\r\n'),
(96, '2010730039', '1311124@student.unpar.ac.id', 'membuat entri', '2015-04-29 18:10:29', '# Umum\r\n\r\nIsilah deskripsi umum mahasiswa disini.\r\n\r\n# Catatan\r\n\r\n* 9 Oktober 2014, pertama kali dibuat\r\n'),
(97, '2010730039', '1311124@student.unpar.ac.id', 'membuat entri', '2015-04-29 18:10:29', '# Umum\r\n\r\nIsilah deskripsi umum mahasiswa disini.\r\n\r\n# Catatan\r\n\r\n* 9 Oktober 2014, pertama kali dibuat\r\n'),
(98, '2010730039', '1311124@student.unpar.ac.id', 'melihat', '2015-04-29 18:10:45', ''),
(99, '2010730039', '1311124@student.unpar.ac.id', 'mengedit', '2015-04-29 18:11:01', '# Umum\r\n\r\nIsilah deskripsi umum mahasiswa disini.\r\n\r\n# Catatan\r\n\r\n* 9 Oktober 2014, pertama kali dibuat\r\ntes'),
(100, '2010730039', '1311124@student.unpar.ac.id', 'mengedit', '2015-04-29 18:11:01', '# Umum\r\n\r\nIsilah deskripsi umum mahasiswa disini.\r\n\r\n# Catatan\r\n\r\n* 9 Oktober 2014, pertama kali dibuat\r\ntes'),
(101, '2010730039', '1311124@student.unpar.ac.id', 'melihat', '2015-04-29 18:11:04', ''),
(102, '2010730039', '1311124@student.unpar.ac.id', 'mengedit', '2015-04-29 18:11:20', 'testing'),
(103, '2010730039', '1311124@student.unpar.ac.id', 'melihat', '2015-04-29 18:11:23', ''),
(104, '2010730039', '1311124@student.unpar.ac.id', 'melihat', '2015-04-29 18:12:00', ''),
(105, '2010730040', '1311124@student.unpar.ac.id', 'melihat', '2015-04-29 18:12:05', ''),
(106, '2010730040', '1311124@student.unpar.ac.id', 'melihat', '2015-04-29 18:12:16', ''),
(107, '2010730040', '1311124@student.unpar.ac.id', 'melihat', '2015-04-29 18:12:30', ''),
(108, '2010120031', '1210031@student.unpar.ac.id', 'membuat entri', '2015-04-30 14:29:51', '# Umum\r\n\r\nSemester depan mengambil matkul skripsi\r\n\r\n# Catatan\r\n\r\n* 30 April 2015, pemberitahuan tentang rencana studi semester depan\r\n'),
(109, '2010120031', '1210031@student.unpar.ac.id', 'melihat', '2015-04-30 14:30:00', ''),
(110, '2010730005', '1210031@student.unpar.ac.id', 'melihat', '2015-04-30 14:30:05', ''),
(111, '2010730005', '1210031@student.unpar.ac.id', 'melihat', '2015-04-30 14:30:18', ''),
(112, '2010730005', '1210031@student.unpar.ac.id', 'melihat', '2015-04-30 14:30:29', ''),
(113, '2010730005', '1210031@student.unpar.ac.id', 'mengedit', '2015-04-30 14:31:19', '# Umum\r\n\r\nGrady mahasiswa yang senang berbisnis. Grady saat ini sedang mengambil tugas akhir dan dibimbing oleh Ibu Joana. Grady juga menjalankan bisnisnya yang telah dia rintis sejak semester 1.\r\n\r\n# Catatan\r\n\r\n* 4 April 2015, melakukan bimbingan\r\n* 4 April 2015, pertama kali dibuat\r\n* 28 April 2015 : menyelesaikan skripsi\r\n* 30 April 2015 : bimbingan dengan Kenneth\r\n'),
(114, '2010730013', '1210031@student.unpar.ac.id', 'melihat', '2015-04-30 14:31:24', ''),
(115, '2010730005', '1210031@student.unpar.ac.id', 'melihat', '2015-04-30 14:31:33', ''),
(116, '2012130199', '1312199@student.unpar.ac.id', 'membuat entri', '2015-05-04 14:29:20', '# Umum\r\n\r\nSiella mahasiswa akuntansi yang sedang mengambil 24 sks.\r\n\r\n# Catatan\r\n\r\n* 4 Mei 2015, pertama kali dibuat\r\n'),
(117, '2012130199', '1312199@student.unpar.ac.id', 'melihat', '2015-05-04 14:29:24', ''),
(118, '2010730013', '7310013@student.unpar.ac.id', 'melihat', '2015-05-04 15:40:24', '');

-- --------------------------------------------------------

--
-- Table structure for table `info_mahasiswa`
--

CREATE TABLE IF NOT EXISTS `info_mahasiswa` (
  `npm` varchar(10) NOT NULL,
  `nama` varchar(60) NOT NULL,
  `keterangan` text NOT NULL,
  `pembaruan_terakhir` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `info_mahasiswa`
--

INSERT INTO `info_mahasiswa` (`npm`, `nama`, `keterangan`, `pembaruan_terakhir`) VALUES
('2010120031', 'Kenneth Natanael', '# Umum\r\n\r\nSemester depan mengambil matkul skripsi\r\n\r\n# Catatan\r\n\r\n* 30 April 2015, pemberitahuan tentang rencana studi semester depan\r\n', '2015-04-30 14:29:51'),
('2010730001', 'Andri Agustian', '# Umum\r\n\r\nnot relevant\r\nook\r\n\r\n# Catatan\r\n\r\n* 20 April 2015, pertama kali dibuat\r\n\r\n* 28 april 2015. edit by James \r\n\r\n*28 April 2015 edit by Reyner\r\n', '2015-04-29 15:09:33'),
('2010730005', 'Grady Ireneus', '# Umum\r\n\r\nGrady mahasiswa yang senang berbisnis. Grady saat ini sedang mengambil tugas akhir dan dibimbing oleh Ibu Joana. Grady juga menjalankan bisnisnya yang telah dia rintis sejak semester 1.\r\n\r\n# Catatan\r\n\r\n* 4 April 2015, melakukan bimbingan\r\n* 4 April 2015, pertama kali dibuat\r\n* 28 April 2015 : menyelesaikan skripsi\r\n* 30 April 2015 : bimbingan dengan Kenneth\r\n', '2015-04-30 14:31:19'),
('2010730012', 'Kevin PL', '# Umum\r\n\r\nIsilah deskripsi umum mahasiswa disini.\r\n\r\n# Catatan\r\n\r\n* 9 Oktober 2014, pertama kali dibuat\r\n', '2015-04-24 00:55:57'),
('2010730013', 'Samuel Herman', '# Umum\r\n\r\nSamuel sedang mengambil tugas akhir dan sekarang sedang melakukan tahap _finishing_\r\n\r\n# Catatan\r\n\r\n* 22 April 2015, melakukan perwalian ke-2\r\n* 21 April 2015, pertama kali dibuat\r\n', '2015-04-24 00:23:34'),
('2010730039', 'henry', 'testing', '2015-04-29 18:11:20'),
('2010730040', 'david', '# Umum\r\n\r\nIsilah deskripsi umum mahasiswa disini.\r\n\r\n# Catatan\r\n\r\n* 9 Oktober 2014, pertama kali dibuat\r\n', '2015-04-29 18:10:12'),
('2010730041', 'dewi', '# Umum\r\nlulusss\r\n  \r\n# Catatan\r\n\r\n* 29 april 2015, pertama kali dibuat\r\n', '2015-04-29 14:16:08'),
('2010730048', 'James tjandra', '# Umum\r\n\r\nbelum lulus gak pernah ke kampus\r\n\r\n# Catatan\r\n\r\n* 28 april 2015 first entry.... \r\n   no improvemenet\r\n\r\n* no look of improvement\r\n\r\n\r\n\r\n', '2015-04-29 15:12:03'),
('2010730071', 'Andreas', '# Umum\r\n\r\nMemiliki situs www.andreas.blogspot.com\r\nSkripsi selesai \r\n\r\n# Catatan\r\n\r\n* 8 April 2015 Bab 5\r\n\r\n* 12 April 2015 Bimbingan terakhir + revisi dokumen\r\n\r\n* 9 Oktober 2014, pertama kali dibuat\r\n', '2015-04-29 15:25:55'),
('2010730075', 'Reyner', '# Umum\r\n\r\nIsilah deskripsi umum mahasiswa disini.\r\n\r\n# Catatan\r\n\r\n* 9 Oktober 2014, pertama kali dibuat\r\n', '2015-04-28 18:08:41'),
('2010730080', 'Steven', '# Umum\r\n\r\nsemester ini lulus \r\n\r\n\r\n# Catatan\r\n\r\n* 9 Oktober 2014, pertama kali dibuat\r\n* 28 April 2015, diedit\r\n\r\n', '2015-04-29 15:11:19'),
('2010730100', 'Reyna', '# Umum\r\n\r\nreyna adalah mahasiswa IT\r\n\r\n# Catatan\r\n\r\n* 28 April 2014 pertama kali dibuat', '2015-04-28 18:20:59'),
('2012130199', 'Siella K', '# Umum\r\n\r\nSiella mahasiswa akuntansi yang sedang mengambil 24 sks.\r\n\r\n# Catatan\r\n\r\n* 4 Mei 2015, pertama kali dibuat\r\n', '2015-05-04 14:29:20');

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
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `histori`
--
ALTER TABLE `histori`
MODIFY `id_histori` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=119;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
