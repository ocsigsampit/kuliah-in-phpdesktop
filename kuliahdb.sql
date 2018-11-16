-- phpMyAdmin SQL Dump
-- version 2.11.7
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 25, 2016 at 09:44 AM
-- Server version: 5.0.51
-- PHP Version: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `kuliahdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_makul`
--

CREATE TABLE IF NOT EXISTS `tb_makul` (
  `KD_MAKUL` varchar(255) NOT NULL default '',
  `NAMA_MAKUL` varchar(255) default NULL,
  `JML_SKS` int(11) default NULL,
  `WKT_UJIAN` varchar(255) default NULL,
  `HARI` varchar(255) default NULL,
  `JAM` varchar(255) default NULL,
  `SEMESTER` varchar(255) default NULL,
  PRIMARY KEY  (`KD_MAKUL`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_makul`
--

INSERT INTO `tb_makul` (`KD_MAKUL`, `NAMA_MAKUL`, `JML_SKS`, `WKT_UJIAN`, `HARI`, `JAM`, `SEMESTER`) VALUES
('ADBI4330', 'Administrasi Perpajakan', 3, 'I.4', 'I', '4', '3'),
('ADBI4438', 'Manajemen Sumber Daya Manusia', 3, 'I.3', 'I', '3', '4'),
('ADPU4130', 'Pengantar Ilmu Administrasi Negara', 3, 'I.1', 'I', '1', '1'),
('ADPU4217', 'Organisasi dan Manajemen', 3, 'II.4', 'II', '4', '2'),
('ADPU4218', 'Psikologi Sosial  ', 3, 'II.2 ', 'II', '2', '5'),
('ADPU4230', 'Sistem Administrasi Negara Kesatuan RI', 3, 'I.4', 'I', '4', '5'),
('ADPU4330', 'Perkoperasian ', 2, 'I.4', 'I', '4', '4'),
('ADPU4331', 'Administrasi Perkantoran', 3, 'II.4', 'II', '4', '3'),
('ADPU4332', 'Hukum Administrasi Negara', 3, 'II.5', 'II', '5', '4'),
('ADPU4333', 'Administrasi Keuangan', 3, 'I.1', 'I', '1', '4'),
('ADPU4334', 'Kepemimpinan ', 3, 'I.4', 'I', '4', '6'),
('ADPU4335', 'Administrasi Pertanahan', 3, 'I.1', 'I', '1', '6'),
('ADPU4337', 'Usaha - usaha Milik Negara & Daerah', 3, 'II.3', 'II', '3', '6'),
('ADPU4338', 'Manajemen Proyek', 3, 'II.5', 'II', '5', '8'),
('ADPU4340', 'Administrasi Pemerintahan Desa', 3, 'I.2', 'I', '2', '4'),
('ADPU4341', 'Teori Organisasi  ', 3, 'II.4', 'II', '4', '7'),
('ADPU4410', 'Kebijakan Publik', 3, 'I.4', 'I', '4', '7'),
('ADPU4430', 'Administrasi Kepegawaian', 3, 'II.3', 'II', '3', '8'),
('ADPU4431', 'Perilaku Organisasi  ', 3, 'II.3', 'II', '3', '7'),
('ADPU4433', 'Perencanaan Kota', 3, 'I.3', 'I', '3', '5'),
('ADPU4440', 'Administrasi Pemerintahan Daerah', 3, 'I.2', 'I', '2', '6'),
('ADPU4441', 'Pengembangan Organisasi  ', 3, 'II.1', 'II', '1', '7'),
('ADPU4442', 'Sistem Informasi Manajemen', 3, 'II.4', 'II', '4', '6'),
('ADPU4500', 'Tugas Akhir Program', 4, '0.2', '0', '2', '7'),
('ADPU4510', 'Perbandingan Administrasi Negara', 3, 'I.3 ', 'I', '3', '8'),
('ADPU4531', 'Filsafat Administrasi ', 2, 'I.1', 'I', '1', '7'),
('ADPU4533', 'Etika Administrasi Pemerintahan', 3, 'I.2 ', 'I', '2', '7'),
('ADPU4534', 'Manajemen Logistik Organisasi Publik', 3, 'I.1', 'I', '1', '8'),
('IPEM4425', 'Hubungan Pusat Dan Daerah', 3, 'II.3', 'II', '3', '5'),
('IPEM4429', 'Manajemen Pelayanan Umum', 3, 'II.1', 'II', '1', '5'),
('ISIP4110 ', 'Pengantar Sosiologi', 3, 'I.2', 'I', '2', '2'),
('ISIP4111 ', 'Asas-asas Manajemen', 3, 'I.5', 'I', '5', '5'),
('ISIP4112', 'Pengantar Ilmu Ekonomi ', 3, 'II.1', 'II', '1', '4'),
('ISIP4130', 'Pengantar Ilmu Hukum/ PTHI', 4, 'II.1', 'II', '1', '2'),
('ISIP4131', 'Sistem Hukum Indonesia', 3, 'II.2', 'II', '2', '2'),
('ISIP4210', 'Pengantar Antropologi', 3, 'I.5', 'I', '5', '2'),
('ISIP4211', 'Logika ', 3, 'I.1', 'I', '1', '2'),
('ISIP4212', 'Pengantar Ilmu Politik', 3, 'II.1', 'II', '1', '3'),
('ISIP4213 S', 'Sistem Politik Indonesia', 3, 'II.2', 'II', '2', '3'),
('ISIP4214', 'Sistem Sosial Budaya Indonesia', 3, 'I.5', 'I', '5', '3'),
('ISIP4215', 'Pengantar Statistik Sosial', 3, 'II.3', 'II', '3', '3'),
('ISIP4216', 'Metode Penelitian Sosial ', 3, 'II.2', 'II', '2', '6'),
('ISIP4310', 'Sistem Ekonomi Indonesia', 3, 'II.2 ', 'II', '2', '4'),
('MKDU4107', 'Bahasa Inggris I ', 3, 'II.2', 'II', '2', '1'),
('MKDU4109', 'Ilmu Sosial dan Budaya Dasar', 3, 'I.4 ', 'I', '4', '1'),
('MKDU4110', 'Bahasa Indonesia  ', 3, 'II.3 ', 'II', '3', '1'),
('MKDU4111', 'Pendidikan Kewarganegaraan', 3, 'II.4', 'II', '4', '1'),
('MKDU4221', 'Pendidikan Agama Islam', 3, 'I.5 ', 'I', '5', '1');

-- --------------------------------------------------------

--
-- Table structure for table `tb_nilai`
--

CREATE TABLE IF NOT EXISTS `tb_nilai` (
  `KD_MAKUL` varchar(255) default NULL,
  `UJIAN_KE` tinyint(4) default NULL,
  `NILAI` varchar(255) default NULL,
  `TGL_REKAM` datetime NOT NULL,
  UNIQUE KEY `unique_index` (`KD_MAKUL`,`UJIAN_KE`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_nilai`
--

INSERT INTO `tb_nilai` (`KD_MAKUL`, `UJIAN_KE`, `NILAI`, `TGL_REKAM`) VALUES
('MKDU4107', 1, 'A', '2016-06-07 07:51:05'),
('MKDU4111', 1, 'A', '2016-06-07 07:51:50'),
('MKDU4110', 1, 'A', '2016-06-07 07:52:09'),
('MKDU4221', 1, 'C', '2016-06-07 07:52:45'),
('MKDU4109', 1, 'D', '2016-06-07 07:52:54'),
('ADPU4130', 1, 'D', '2016-06-07 07:53:32'),
('ISIP4211', 1, 'C', '2016-10-21 10:40:42'),
('ISIP4210', 1, 'D', '2016-10-21 10:43:19'),
('ISIP4131', 1, 'C', '2016-10-21 10:44:08'),
('ISIP4130', 1, 'D', '2016-10-21 10:44:36'),
('ISIP4110 ', 1, 'B', '2016-10-21 10:45:27'),
('ADPU4217', 1, 'C', '2016-10-21 10:45:41');
