-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 07, 2017 at 03:36 PM
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
  `password` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
(6, 'KP01', 'Materi kuliah yang diberikan sangat berbobot?'),
(7, 'KP01', 'Kesesuaian kurikulum dengan kebutuhan dunia kerja?'),
(8, 'KP01', 'Relevansi kasus dengan dunia nyata?'),
(9, 'KP01', 'Tersedianya pilihan konsentrasi?'),
(10, 'KP01', 'Tersedianya kelas reguler/non reguler?'),
(11, 'KP01', 'Nama perguruan tinggi yang terkenal?'),
(12, 'KP01', 'Mudah mendapat pekerjaan setelah lulus?'),
(13, 'KP02', 'Kesesuaian biaya kuliah dengan kualitas yang diberikan?'),
(14, 'KP02', 'Pembayaran dapat dicicil?'),
(15, 'KP03', 'Lokasi kuliah mudah dijangkau?'),
(16, 'KP03', 'Suasana akademik yang kondusif mendukung pembelajaran'),
(17, 'KP04', 'Adanya kunjungan presentasi dari universitas ke SMA/ SMK?'),
(19, 'KP04', 'Ada poster/spanduk yang mudah dilihat dan jelas tentang adanya pendaftaran?');

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
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
