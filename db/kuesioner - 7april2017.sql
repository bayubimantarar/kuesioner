-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 06, 2017 at 01:14 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kuesioner`
--
CREATE DATABASE kuesioner;
USE kuesioner;
-- --------------------------------------------------------

--
-- Table structure for table `alumni`
--

CREATE TABLE `alumni` (
  `nim` int(20) NOT NULL,
  `nama` varchar(75) NOT NULL,
  `lulus` int(20) NOT NULL,
  `no_hp` varchar(20) NOT NULL,
  `email` varchar(75) NOT NULL,
  `alamat` text NOT NULL,
  `kegiatan` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `alumni`
--

INSERT INTO `alumni` (`nim`, `nama`, `lulus`, `no_hp`, `email`, `alamat`, `kegiatan`) VALUES
(1, '1', 1, '1', '1', '1', 1),
(2, '2', 2, '2', '2', '2', 1),
(3, '3', 3, '3', '3', '3', 1),
(4, '4', 4, '4', '4', '4', 1),
(5, '5', 5, '5', '5', '5', 1),
(6, '6', 6, '6', '6', '6', 1),
(7, '7', 7, '7', '7', '7', 1),
(8, '8', 8, '8', '8', '8', 1),
(9, '9', 9, '9', '9', '9', 1),
(10, '10', 10, '10', '10', '10', 1),
(11, '11', 11, '11', '11', '11', 1),
(12, '12', 12, '12', '12', '12', 1),
(13, '13', 13, '13', '13', '13', 1),
(14, '14', 14, '14', '14', '14', 1),
(15, '15', 15, '15', '15', '15', 1),
(16, '16', 16, '16', '16', '16', 1),
(17, '17', 17, '17', '17', '17', 1),
(18, '18', 18, '18', '18', '18', 1),
(19, '19', 19, '19', '19', '19', 1),
(20, '20', 20, '20', '20', '20', 1),
(21, '21', 21, '21', '21', '21', 2),
(22, '22', 22, '22', '22', '22', 2),
(23, '23', 23, '23', '23', '23', 2),
(24, '24', 24, '24', '24', '24', 2),
(25, '25', 25, '25', '25', '25', 2),
(26, '26', 26, '26', '26', '26', 2),
(27, '27', 27, '27', '27', '27', 2),
(28, '28', 28, '28', '28', '28', 2),
(29, '29', 29, '29', '29', '29', 2),
(30, '30', 30, '30', '30', '30', 2),
(31, '31', 31, '31', '31', '31', 3),
(32, '32', 32, '32', '32', '32', 3),
(33, '33', 33, '33', '33', '33', 3),
(34, '34', 34, '34', '34', '34', 3),
(35, '35', 35, '35', '35', '35', 3),
(36, '36', 36, '36', '36', '36', 1),
(37, '37', 37, '37', '37', '37', 1),
(38, '38', 38, '38', '38', '38', 1),
(39, '39', 39, '39', '39', '39', 1),
(40, '40', 40, '40', '40', '40', 1),
(90, '90', 2015, '90', '90', '90', 1),
(1215001, 'Febrian Angga', 2009, '089673372429', 'febriangangga@gmail.com', 'Bandung', 3),
(3215002, 'reza fernanda', 2015, '0809834209', 'rezafernanda@gmail.com', 'subang', 2);

-- --------------------------------------------------------

--
-- Table structure for table `bekerja`
--

CREATE TABLE `bekerja` (
  `nim` int(20) NOT NULL,
  `nama_perusahaan` varchar(75) NOT NULL,
  `alamat_perusahaan` text NOT NULL,
  `sektor_perusahaan` varchar(75) NOT NULL,
  `tahun_masuk` int(20) NOT NULL,
  `gaji_pertama` int(20) NOT NULL,
  `informasi_lowongan` varchar(75) NOT NULL,
  `skala_relevan` varchar(75) NOT NULL,
  `pengetahuan_relevan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bekerja`
--

INSERT INTO `bekerja` (`nim`, `nama_perusahaan`, `alamat_perusahaan`, `sektor_perusahaan`, `tahun_masuk`, `gaji_pertama`, `informasi_lowongan`, `skala_relevan`, `pengetahuan_relevan`) VALUES
(1215001, 'PT. Alim Rugi', 'Bandung', 'Industri Elektronik', 2015, 3000000, 'Media Masa', 'Sangat Tidak Relevan', 'Ahh Lieur'),
(1215008, 'Maju Mundur inc', 'cijerah, jl ujung kaler', 'Boneka', 2016, 1000, 'Bursa Kerja', 'Tidak Tahu', 'Main ML'),
(1215010, 'PT. Lotus', 'Cimahi', 'Industri Kain', 2011, 2000000, 'Media Masa', 'Sangat Tidak Relevan', 'Aljabar linear');

-- --------------------------------------------------------

--
-- Table structure for table `belum_bekerja`
--

CREATE TABLE `belum_bekerja` (
  `nim` int(20) NOT NULL,
  `kegiatan_belum_bekerja` varchar(75) NOT NULL,
  `saran_pekerjaan` text NOT NULL,
  `saran_kampus` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `belum_bekerja`
--

INSERT INTO `belum_bekerja` (`nim`, `kegiatan_belum_bekerja`, `saran_pekerjaan`, `saran_kampus`) VALUES
(1215001, 'Mebantu orang tua', 'Hampir setiap hari saya mencari pekerjaan, tapi tidak dapat', 'Hampir setiap hari saya mencari pekerjaan, tapi tidak dapat'),
(1215003, 'Mencari pekerjaan yang sesuai', 'Kampus Harus lebih giat mencari pekerjaan', 'Kampus harus dikurangi sppnya'),
(1215004, 'Mencari sekolah', 'Harusnya kampus lebih mempunyai koneksi dengan perusahaan lain.', 'Kampus harus lebih selektif terhadap mata kuliah dan materi'),
(1215005, 'Mengikuti suami (menjadi ibu rumah tangga)', 'Pusing', 'Ahh'),
(1215009, 'Mencari pekerjaan yang sesuai', 'asdasd', 'asdasd');

-- --------------------------------------------------------

--
-- Table structure for table `hasil_pertanyaan`
--

CREATE TABLE `hasil_pertanyaan` (
  `id_pertanyaan` int(20) NOT NULL,
  `a` int(10) NOT NULL,
  `b` int(10) NOT NULL,
  `c` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hasil_pertanyaan`
--

INSERT INTO `hasil_pertanyaan` (`id_pertanyaan`, `a`, `b`, `c`) VALUES
(1, 1, 0, 0),
(2, 0, 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `kategori_pertanyaan`
--

CREATE TABLE `kategori_pertanyaan` (
  `id` varchar(20) NOT NULL,
  `nama_kategori` varchar(75) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori_pertanyaan`
--

INSERT INTO `kategori_pertanyaan` (`id`, `nama_kategori`) VALUES
('KP01', 'Product'),
('KP02', 'Price'),
('KP03', 'Place'),
('KP04', 'Promotion'),
('KP05', 'Dosen'),
('KP06', 'Tata Usaha'),
('KP07', 'Pekarya Non Tata Usaha'),
('KP08', 'Physical Evidence'),
('KP09', 'Word of Mouth');

-- --------------------------------------------------------

--
-- Table structure for table `pertanyaan`
--

CREATE TABLE `pertanyaan` (
  `id` int(20) NOT NULL,
  `id_kategori` varchar(20) NOT NULL,
  `pertanyaan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pertanyaan`
--

INSERT INTO `pertanyaan` (`id`, `id_kategori`, `pertanyaan`) VALUES
(1, 'KP01', 'Materi kuliah yang diberikan sangat berbobot'),
(2, 'KP01', 'Kesesuaian kurikulum dengan kebutuhan dunia kerja'),
(3, 'KP02', 'Kesuaian biaya kuliah dengan kualitas yang diberikan'),
(4, 'KP02', 'Permbayaran dapat dicicil'),
(5, 'KP03', 'Adanya kunjungan presentasi dari universitas ke SMA/ SMK');

-- --------------------------------------------------------

--
-- Table structure for table `usaha`
--

CREATE TABLE `usaha` (
  `nim` int(20) NOT NULL,
  `nama_usaha` varchar(75) NOT NULL,
  `alamat_usaha` text NOT NULL,
  `bidang_usaha` varchar(75) NOT NULL,
  `jumlah_karyawan` int(20) NOT NULL,
  `omzet_perbulan` int(20) NOT NULL,
  `pengeluaran_perbulan` int(20) NOT NULL,
  `skala_relevan` varchar(75) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `usaha`
--

INSERT INTO `usaha` (`nim`, `nama_usaha`, `alamat_usaha`, `bidang_usaha`, `jumlah_karyawan`, `omzet_perbulan`, `pengeluaran_perbulan`, `skala_relevan`) VALUES
(1215002, 'CV, Mayora Roti', 'Bandung', 'Kuliner, Sandan, Pangan', 0, 9000000, 1000000, 'Tidak Relevan'),
(3215002, 'jual ginjal', 'stmik bandung', 'jual anak', 0, 1000, 2000, 'Sangat Relevan');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `username` varchar(75) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(75) NOT NULL,
  `active_since` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`, `active_since`) VALUES
(23, 'admin', '$2a$12$XHHkoyR9CXlavl4xYvAjFuTZGATEU4uG9sOr1.AtSDgaPQUdeVsV.', 'admin@gmail.com', '2017-03-24'),
(24, 'bayubimantara', '$2a$12$CzEg11hm5P629mArXZyxoenFuh76FSK.LvbK7AdogVJxKjBTy5mTy', 'bayubimantarar@gmail.com', '2017-04-04');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `alumni`
--
ALTER TABLE `alumni`
  ADD PRIMARY KEY (`nim`);

--
-- Indexes for table `bekerja`
--
ALTER TABLE `bekerja`
  ADD PRIMARY KEY (`nim`);

--
-- Indexes for table `belum_bekerja`
--
ALTER TABLE `belum_bekerja`
  ADD PRIMARY KEY (`nim`);

--
-- Indexes for table `hasil_pertanyaan`
--
ALTER TABLE `hasil_pertanyaan`
  ADD PRIMARY KEY (`id_pertanyaan`);

--
-- Indexes for table `kategori_pertanyaan`
--
ALTER TABLE `kategori_pertanyaan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pertanyaan`
--
ALTER TABLE `pertanyaan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usaha`
--
ALTER TABLE `usaha`
  ADD PRIMARY KEY (`nim`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pertanyaan`
--
ALTER TABLE `pertanyaan`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
