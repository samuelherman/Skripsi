-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 10, 2015 at 10:43 AM
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
  `keterangan` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `histori`
--

INSERT INTO `histori` (`id_histori`, `npm`, `pengguna`, `status`, `tanggal_pembaruan`, `keterangan`) VALUES
(1, '2010730013', 'pascal@unpar.ac.id', 'membuat entri', '2015-06-08 10:10:37', '# Umum\r\n\r\nSamuel Herman adalah mahasiswa angatan 2010. dengan dosen wali [Pascal Alfadian](pascal@unpar.ac.id).\r\n\r\n# Catatan\r\n\r\n* 8 Juni 2015, bimbingan revisi dengan Pascal. Masih ada beberapa hal yang perlu diperbaiki. Mahasiswa kooperatif.\r\n* 27 Mei 2015, sidang skripsi 2 dengan LNV dan VSM. Revisi wajib disetujui & **ditandatangani** oleh kedua penguji'),
(2, '2010730071', 'pascal@unpar.ac.id', 'membuat entri', '2015-06-08 10:14:38', '# Umum\r\n\r\nAndreas Haryawan adalah teman Samuel dan *dianggap bersedia* menjadi bahan percobaan di Skripsi ini :)\r\nYbs adalah mahasiswa yang kooperatif pada saat bimbingan.\r\n\r\n# Catatan\r\n\r\n* Mei 2015 dinyatakan lulus skripsi dengan perbaikan-perbaikan\r\n* Januari 2015 datang ke Pascal untuk mengambil Skripsi 1+2 setelah skripsi dengan CAN						'),
(3, '2010730013', 'pascal@unpar.ac.id', 'melihat', '2015-06-08 10:14:41', ''),
(4, '2010730071', 'pascal@unpar.ac.id', 'melihat', '2015-06-08 10:14:48', ''),
(5, '2010730013', 'pascal@unpar.ac.id', 'melihat', '2015-06-08 10:14:58', ''),
(6, '2010730013', 'pascal@unpar.ac.id', 'melihat', '2015-06-08 10:17:04', ''),
(7, '2010730013', 'chandraw@unpar.ac.id', 'melihat', '2015-06-08 10:21:50', ''),
(8, '2010730071', 'chandraw@unpar.ac.id', 'melihat', '2015-06-08 10:22:08', ''),
(9, '2010730071', 'chandraw@unpar.ac.id', 'mengedit', '2015-06-08 10:24:01', '# Umum\r\n\r\nAndreas Haryawan adalah teman Samuel dan *dianggap bersedia* menjadi bahan percobaan di Skripsi ini :)\r\nYbs adalah mahasiswa yang kooperatif pada saat bimbingan.\r\n\r\n# Catatan\r\n\r\n* Mei 2015 dinyatakan lulus skripsi dengan perbaikan-perbaikan\r\n* Januari 2015 datang ke Pascal untuk mengambil Skripsi 1+2 setelah skripsi dengan CAN\r\n* 2014 mengambil topik skripsi dengan CAN, dan telah sidang tapi tidak lulus. Karena sering terlambat.'),
(10, '2010730071', 'chandraw@unpar.ac.id', 'melihat', '2015-06-08 10:24:13', ''),
(11, '2010730069', 'chandraw@unpar.ac.id', 'membuat entri', '2015-06-08 10:25:54', '# Umum\r\n\r\nPernah memenangkan Cisco Netriders 2014 sebagai juara 3.\r\n\r\n# Catatan\r\n\r\n* 27 Mei 2015, pertama kali dibuat\r\n						'),
(12, '2010730069', 'chandraw@unpar.ac.id', 'melihat', '2015-06-08 10:25:59', ''),
(13, '2010730069', 'chandraw@unpar.ac.id', 'melihat', '2015-06-08 10:26:46', ''),
(14, '2010730069', 'chandraw@unpar.ac.id', 'melihat', '2015-06-08 10:26:53', ''),
(15, '2010730069', 'chandraw@unpar.ac.id', 'melihat', '2015-06-08 10:28:18', ''),
(16, '2010730071', 'pascal@unpar.ac.id', 'melihat', '2015-06-08 13:40:40', ''),
(17, '2010730071', 'pascal@unpar.ac.id', 'mengedit', '2015-06-08 13:43:48', '# Umum\r\n\r\nAndreas Haryawan adalah teman Samuel dan *dianggap bersedia* menjadi bahan percobaan di Skripsi ini :)\r\nYbs adalah mahasiswa yang kooperatif pada saat bimbingan.\r\n\r\n# Catatan\r\n\r\n* Mei 2015 dinyatakan lulus skripsi dengan perbaikan-perbaikan\r\n* 21 April 2015 datang terlambat kelas ADBO dengan alasan mengikuti upacara\r\n* 14 Februari 2015 datang terlambat untuk bimbingan dengan Pascal dengan alasan macet\r\n* Januari 2015 datang ke Pascal untuk mengambil Skripsi 1+2 setelah skripsi dengan CAN\r\n* 2014 mengambil topik skripsi dengan CAN, dan telah sidang tapi tidak lulus. Karena sering terlambat.'),
(18, '2010730071', 'pascal@unpar.ac.id', 'melihat', '2015-06-08 13:43:53', ''),
(19, '2010730071', 'pascal@unpar.ac.id', 'melihat', '2015-06-08 13:48:18', ''),
(20, '2010730069', 'pascal@unpar.ac.id', 'melihat', '2015-06-08 13:48:57', ''),
(21, '2010730013', 'vania.natali@unpar.ac.id', 'melihat', '2015-06-10 15:09:02', ''),
(22, '2010730013', 'vania.natali@unpar.ac.id', 'melihat', '2015-06-10 15:09:39', ''),
(23, '2010730071', 'vania.natali@unpar.ac.id', 'melihat', '2015-06-10 15:09:45', ''),
(24, '2010730071', 'vania.natali@unpar.ac.id', 'mengedit', '2015-06-10 15:10:25', '# Umum\r\n\r\nAndreas Haryawan adalah teman Samuel dan *dianggap bersedia* menjadi bahan percobaan di Skripsi ini :)\r\nYbs adalah mahasiswa yang kooperatif pada saat bimbingan.\r\n\r\n# Catatan\r\n\r\n* Mei 2015 dinyatakan lulus skripsi dengan perbaikan-perbaikan\r\n* 21 April 2015 datang terlambat kelas ADBO dengan alasan mengikuti upacara\r\n* 14 Februari 2015 datang terlambat untuk bimbingan dengan Pascal dengan alasan macet\r\n* Januari 2015 datang ke Pascal untuk mengambil Skripsi 1+2 setelah skripsi dengan CAN\r\n* 2014 mengambil topik skripsi dengan CAN, dan telah sidang tapi tidak lulus. Karena sering terlambat.\r\n* Andreas akan sidang ulang semester pendek'),
(25, '2010730071', 'vania.natali@unpar.ac.id', 'melihat', '2015-06-10 15:10:29', ''),
(26, '2010730071', 'vania.natali@unpar.ac.id', 'melihat', '2015-06-10 15:10:50', ''),
(27, '2010730013', 'vania.natali@unpar.ac.id', 'melihat', '2015-06-10 15:12:21', ''),
(28, '2010730013', 'vania.natali@unpar.ac.id', 'melihat', '2015-06-10 15:12:27', ''),
(29, '2010730013', 'vania.natali@unpar.ac.id', 'melihat', '2015-06-10 15:13:09', ''),
(30, '2010730013', 'vania.natali@unpar.ac.id', 'melihat', '2015-06-10 15:13:24', ''),
(31, '2010730071', 'vania.natali@unpar.ac.id', 'melihat', '2015-06-10 15:14:49', '');

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
('2010730013', 'Samuel Herman', '# Umum\r\n\r\nSamuel Herman adalah mahasiswa angatan 2010. dengan dosen wali [Pascal Alfadian](pascal@unpar.ac.id).\r\n\r\n# Catatan\r\n\r\n* 8 Juni 2015, bimbingan revisi dengan Pascal. Masih ada beberapa hal yang perlu diperbaiki. Mahasiswa kooperatif.\r\n* 27 Mei 2015, sidang skripsi 2 dengan LNV dan VSM. Revisi wajib disetujui & **ditandatangani** oleh kedua penguji', '2015-06-08 10:10:36'),
('2010730069', 'Raymond Chandra', '# Umum\r\n\r\nPernah memenangkan Cisco Netriders 2014 sebagai juara 3.\r\n\r\n# Catatan\r\n\r\n* 27 Mei 2015, pertama kali dibuat\r\n						', '2015-06-08 10:25:54'),
('2010730071', 'Andreas Haryawan', '# Umum\r\n\r\nAndreas Haryawan adalah teman Samuel dan *dianggap bersedia* menjadi bahan percobaan di Skripsi ini :)\r\nYbs adalah mahasiswa yang kooperatif pada saat bimbingan.\r\n\r\n# Catatan\r\n\r\n* Mei 2015 dinyatakan lulus skripsi dengan perbaikan-perbaikan\r\n* 21 April 2015 datang terlambat kelas ADBO dengan alasan mengikuti upacara\r\n* 14 Februari 2015 datang terlambat untuk bimbingan dengan Pascal dengan alasan macet\r\n* Januari 2015 datang ke Pascal untuk mengambil Skripsi 1+2 setelah skripsi dengan CAN\r\n* 2014 mengambil topik skripsi dengan CAN, dan telah sidang tapi tidak lulus. Karena sering terlambat.\r\n* Andreas akan sidang ulang semester pendek', '2015-06-10 15:10:25');

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
MODIFY `id_histori` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=32;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
