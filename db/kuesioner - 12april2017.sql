-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 12, 2017 at 03:53 PM
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
  `password` varchar(150) NOT NULL,
  `jurusan` int(10) NOT NULL,
  `email` varchar(75) NOT NULL,
  `alamat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `alumni`
--

INSERT INTO `alumni` (`nim`, `nama`, `password`, `jurusan`, `email`, `alamat`) VALUES
(1214003, 'Dede Suhendar', '$2a$12$B3It8J0j.zI/qqGQToMgoOzrRbOFetWfSxrJARJDjyg.P8bgKQEpS', 1, 'dedesuhendar@gmail.com', 'Ciawi'),
(1214004, 'Asyifa Shiami', '$2a$12$4tz/Ze.zIFPIVG38t.jxmuTwbTPupTA.3KZKc6NWLrW6UagRUfsWG', 1, 'asyifashiami@gmail.com', 'Margahayu'),
(1214007, 'Handono', '$2a$12$2IHp8vhnXEbGpm7Znxnv.en1mwbYsObcTDViYVXqB9I5n4gOQEgt6', 1, 'handono@gmail.com', 'Jambi'),
(1214008, 'Satria Pagah', '$2a$12$mac0QeujBwzSgOz0gmfkK.NI549zIjPVi9UupMm61EH7uWysDVXpO', 1, 'satriapagah@gmail.com', 'Cimahi'),
(1214601, 'Fajar Rian Renalda', '$2a$12$0kDHBT5wrT5yXgZVZm/c0.8i2rHktnaY01odnjk8LeBs5rU4/zg5y', 1, 'fajarrianrenalda@gmail.com', 'Bandung'),
(1214604, 'Saeful Rizal', '$2a$12$fy9DY3ozZXlyhkVpLHRVK./jOAZbnKvD88OSQcyXPL0S3JZ4Ss16.', 1, 'saefulrizal@gmail.com', 'Bandung'),
(1214605, 'Heldan M. Haidar', '$2a$12$fUU5wM6rWPb21G2WupYsg.KC3SDhdNdsdcHGyAECttaV2Upov23Ja', 1, 'heldanmhaidar@gmail.com', 'Garut'),
(1214606, 'Amalia Fauziah', '$2a$12$mTwBgG/9E9rH47spL8XaVeTWL5d1DU2uQicS.fFhxDhp66kZE.7Ge', 1, 'amaliafauziah@gmail.com', 'Bandung'),
(1214607, 'Riky Fadhulhuda', '$2a$12$Q2ptSp6xS4vWms.S33BFveYl80EjTiWxtFGjL7SjJnshdm2vnx62y', 1, 'rikyfadhulhuda@gmail.com', 'Bandung'),
(1214608, 'Rafi Sani', '$2a$12$TCXAxEpHkrdpj.so8src5u6gN2W3tIt/vta9Qwm2ilLsKEOo/ZLfG', 1, 'rafisani@gmail.com', 'Bandung'),
(1214609, 'Iip Abdul', '$2a$12$GGNDt3P/fFhGrn6iwu1sPOkJJgr8DIit9wJPHBhMljaRF2XCHcBs.', 1, 'iipabdul@gmail.com', 'Bandung'),
(1214610, 'Sidiq Fahmi', '$2a$12$R4fcnK.K7d4PEQRnlfk68.Ppo9tdDMmyN25daQNFispeweu5RQYmm', 1, 'sidiqfahmi@gmail.com', 'Bandung'),
(1214612, 'Abu Rizal', '$2a$12$lcaaqCN1dgMuuF/xedZBiOonvfedF36GajsrpQjjxJCzaniJwKTEy', 1, 'aburizal@gmail.com', 'Bandung'),
(1214613, 'Ahmad Akram', '$2a$12$TbWaMWdr9..Pv6/n1j//A.EYXlMgYuSgSXVTkOTVUFCXiE/rqot5a', 1, 'ahmadakram@gmail.com', 'Bandung'),
(1214614, 'Kristian', '$2a$12$.PdEamIyERbztWVB/GhJgusarUTvH.k4nKm3ozeZVrDUn59NInprK', 1, 'kristian@rocketmail.com', 'Bandung'),
(1214615, 'Almnoven Malau', '$2a$12$tRNVQuabRPssQavzw7wJd.cbVIJDkQJbOU/gQKpCDHhacOl3uqQIq', 1, 'almnovenmalau@gmail.com', 'Panguruan'),
(1214616, 'Beben Hermawan', '$2a$12$CDvbXFUxKy9nN7hou3Ge1.e96cMJjYpp6cQzKNG5M1/zOzq0mgGuO', 1, 'bebenhermawan@gmail.com', 'Bandung'),
(1214617, 'Novianto', '$2a$12$.djbUidlCl.WL8DcqTy2uOP5ypXv.vfSf6JSzWVwkxYWesghqNDt.', 1, 'novianto@gmail.com', 'Bandung'),
(1214618, 'Ibrais Adha', '$2a$12$uiP/b1KpbAVHWl0oiud20OlWfJmsiF7hLEypEkM0L8wItyKDJSSMS', 1, 'ibraisadha@yahoo.com', 'Timika'),
(1214701, 'Budhi Setiyawan', '$2a$12$SA0ET5HzHsmyFDfH1lAhWenNyJQLw.w4z7ew4vnU9Eiln40vwZLsa', 1, 'budhisetiyawan@gmail.com', 'Bandung'),
(1214702, 'Alma Putra Chan', '$2a$12$hW7y6r8O8SsaVXQQy4gazOz5QZqBXxDNfNEKDXqLU419rf5zoM7J6', 1, 'almaputrachan@gmail.com', 'Bandung'),
(1214703, 'Yadi Supriyadi', '$2a$12$kt05rc/9yiCW.DP5FfENJutQ5/PvdZ8.t3DmD4VdRbkuqIAuEBWa.', 1, 'yadisupriyadi@gmail.com', 'Tasikmalaya'),
(1214704, 'Haryandi Agus', '$2a$12$DcV4m28V2vhFn0rEZruk2.L8xcgmnz6u0uBUODA2IG.IEHQhMStne', 1, 'haryandiagus@gmail.com', 'Bandung'),
(1215001, 'Febrian Angga Ramadhan', '$2a$12$hOh7jRODxaF6kb6NYVMJku56eMxKvjdnaN1PexJ/tUv8Ma.Ry.xeW', 1, 'febrianangga@gmail.com', 'Bandung'),
(1215002, 'Bayu Bimantara', '$2a$12$9kpzBrOqJ2oQzE2jmTkDWesB6ixjSm2o2rQo8eQAds7PLQp/gSpS6', 1, 'bayubimantarar@gmail.com', 'Cilame'),
(1215003, 'Verly Ananda', '$2a$12$YLFSb/mLs0vFkjQ.dqucNuktVfYmmTA9pjIDs18B.vuYQTDj7zN5C', 1, 'verlyananda@gmail.com', 'Cilame'),
(1215004, 'Muhamad Fajar Sidiq', '$2a$12$LY1M7C.gSPQwzh5Wzx/UDeDDr/4wINnA7t8lpbqC24TVl/qGWV.0u', 1, 'muhamadfajarsidiq@gmail.com', 'Bandung'),
(1215005, 'Mita Aryanti', '$2a$12$jnZixG0GXgMHHGF3HP6gM.fy7GeSxH98GSACA896JwfCYHm7Ec7IC', 1, 'mitaaryanti@gmail.com', 'Ciamis'),
(1215006, 'Farida Affianti', '$2a$12$DbuUbLtZ9V9eRyUDE8zZGeC4crAoVyRE3qiBRlMY/h63evCnj6qzu', 1, 'faridaaffianti@gmail.com', 'Ciamis'),
(1215007, 'Zalfa Siti Asa Salsabilla', '$2a$12$d5R7RKNseyFcuH31/hNV5eTEX4/DOfW2e.tv7C3iBzAGZBCSTOZRa', 1, 'zalfasitiasa@gmail.com', 'Bandung'),
(1215008, 'Radityo Yoga Pratama', '$2a$12$RwbFJrAZJohw6vVZf7T11OEIChVnVtzjs/RadsqpXuw9B5uD/7Oy.', 1, 'radityoyogapratama@gmail.com', 'Solo'),
(1215009, 'Regi Fiandri Agusti', '$2a$12$83WYKA6mGgvvDdue5B1RVujEm7oUb8iNl.KtVW87e/HMkRmxNDY7q', 1, 'regifiandri@gmail.com', 'Bandung'),
(1215010, 'Hanif Hairulloh', '$2a$12$byHy78q0WGcMC2OVkQbIbe5k4OlqwJ4kXqWXSmiNg/tKTQOU4fnpC', 1, 'hanifhairulloh@gmail.com', 'Bandung'),
(1215011, 'Fahmi Ari', '$2a$12$DNuOGJCcas8DddMmRfrwbuZ0yN91B2qCrMhstm/N15SaGRSj3zt5y', 1, 'fahmiari@gmail.com', 'Bandung'),
(1215602, 'Nasratul Hasnah', '$2a$12$nfSeeM/nH6295JH0iYmCQucKDYWJTBPR8hvY/OlZtEfYIxVBMRaVK', 1, 'nasratulhasnah@gmail.com', 'Bandung'),
(1215604, 'Ari Julianto', '$2a$12$7uY2t/jRDXYsuc6ShGaKpurI5qIiZJ0F838rlNJOEiv8kLSVQK8H.', 1, 'arijulianto@gmail.com', 'Rancaekek'),
(1215605, 'Dani Ramdani', '$2a$12$DTcvbc4.tLd/Qww3KNvGQ.I1E8u7Q/QlLcrrAdqFIBVsBHRHQZhe6', 1, 'daniramdani@gmail.com', 'Bandung'),
(1215606, 'M Ghozali', '$2a$12$2Kgx0.SarzcZ/MbbwUhqiu95LkEhiTrHHB54iPJasNlcpjnlVcmzS', 1, 'mghozali@gmail.com', 'Jambi'),
(1215607, 'Syaiful Fitriawan', '$2a$12$2sUvrfDp4IB9kzwH4KnFd./qYNKtRnYGtOkz8GcEbZXEtwsgQ8zNy', 1, 'syaifulfitriawan@gmail.com', 'Bandung'),
(1215705, 'Fikalis Nong Emu', '$2a$12$wg8IIjAqLV2U5yYsA/Q3autr/D1FUwY65sRi.AUxHUvoUP2oWhHz2', 1, 'fikalisnong@gmail.com', 'Bandung'),
(1215901, 'Fabricio Armindo', '$2a$12$sWviUZephYdyxZXOdZKnbuS6t6Ol.2HkQ8J8fBDtbxDbGSQaB2ox.', 1, 'fabricio@gmail.com', 'Bandung'),
(3214002, 'Irma Yuliyanti', '$2a$12$7P8tDdpYt4cNqkv6zEJdjOFTPDzvHglIYGPl892Fc0oOpBg58pfLO', 2, 'irmayuliyanti@gmail.com', 'Bandung'),
(3214003, 'Syeni Cicilia', '$2a$12$/Pa4YJPhhmf7RPVcMs0a.u4.BcwOvsDntCfhpaYJLDubNFwLj43xW', 2, 'syenicicilia@gmail.com', 'Bandung'),
(3214601, 'Sandi Hermawan', '$2a$12$c4IN8yd9YtnrtKnC/SNUc.dsrxEJa3BjmPhT961KjTnhR7BIxHi1y', 2, 'sandihermawan@gmail.com', 'Bandung'),
(3214603, 'Dicky Desta', '$2a$12$.4dVreI5tkMZ4adpCSldpuieMgrgZkPVl6pIz7kdGKE0zuKO4ULHW', 2, 'dickydesta@gmail.com', 'Bandung'),
(3214605, 'Ade Kusnandi', '$2a$12$SA1zrKQ68IM0y0tGdmAkpOSmYimflGZOso/PqFyQ7p0vdRMAL516G', 2, 'adekusnandi@gmail.com', 'Cipongkor'),
(3214606, 'Aldi Hafiz', '$2a$12$FC60x133R7fiqPDG/NTteeUknBwilRE6/wrbh6noWjHJBMjTjKwAq', 2, 'aldihafiz@gmail.com', 'Garut'),
(3214607, 'Ridwan Nasir', '$2a$12$awgfR6mU4pRLetvRm5pjWuCY43disQSpQYaiwCdrxQ1xgGAJrOmKS', 2, 'ridwannasir@yahoo.com', 'Cimahi'),
(3214608, 'Subandi', '$2a$12$W7S1FZly.6g29L2E3g5bp.CZkZ32JhcGRwzAuUC7gp5IZ2psk5bCS', 2, 'subandi@gmail.com', 'Padalarang'),
(3214701, 'Faridz Nugraha', '$2a$12$I/SPCp2p/Ke.c7F4ec9iz.J0NL4DNG5q5v2AyA5ybjLgzzHlswZim', 2, 'faridznugraha@gmail.com', 'Bandung'),
(3214702, 'Sugianto', '$2a$12$th1cOh5Ezsn4CxiBPDdP1.O7ooBP6gyBObW6pzGTjkSRPp8LCKaMy', 2, 'sugianto@gmail.com', 'Jakarta'),
(3214703, 'Marudut Martinus', '$2a$12$0Apng.LU.4qHfZUG3KXTLe9JphM7Tm7/stOZPjgtHAoWrv/qfPGfO', 2, 'marudutmartinus@gmail.com', 'Bandung'),
(3214704, 'Yan Vicarista', '$2a$12$9S7w4Zv6pRzcddJhyEzTqecQK39j7ztPOoZW90mVsrlSP3PxUJXAG', 2, 'yanvicarista@gmail.com', 'Bandung'),
(3215001, 'Rama Mandala S', '$2a$12$LgL5l/0YkQYloIxL77W4oOQZA0yemIXZTJjuXhBiCVUVmTz3dC6ta', 2, 'ramamandala@gmail.com', 'Ternate'),
(3215002, 'Reza Fernanda', '$2a$12$e1jooV4.i8wvDIsLqnGQh.KVygHVrv2JUPujQ0NjJWDFjASuuB8SG', 2, 'rezafernanda@gmail.com', 'Subang'),
(3215003, 'Nida Nur Apridayanti', '$2a$12$4Q2zIm8ffb3gwRPXPe9uquKduHcfsv40PM1apv2FnWPM7RUVpzNSG', 2, 'nidanur@gmail.com', 'Bandung'),
(3215004, 'Erika', '$2a$12$zybio0FRwp2GeATmDoEK1ek6qgfWWrbUFRSQaOyABF6jGD1V/yKgm', 2, 'erika@gmail.com', 'Majalaya'),
(3215005, 'Irvan Nugraha', '$2a$12$cKKYD1fD5rb7WTzd1.Hy2erfAbbMblm1X2QWlpSOpQP23gn3HTZee', 2, 'irvannugraha@gmail.com', 'Subang'),
(3215602, 'Farida Rizqi Lestari', '$2a$12$kCSs.YaNOLJjWVOQMkSJvuYkuiROeLIXp10/udQyfd1NYG4PV61Fm', 2, 'faridarizqi@gmail.com', 'Bandung'),
(3215603, 'Budhi Anggoro', '$2a$12$q.eH886mm96pxiRMRosT2.4m4h9Gxnt4WqHbuCgfsu6/8KKB3FQRG', 2, 'budhianggoro@gmail.com', 'Bandung'),
(3215604, 'Herawan', '$2a$12$xwVMWGNn6zd5QxRIgX.Zc.O.O1SBgLtoNlkyoXeOt0foU1DiPsMje', 2, 'herawan@gmail.com', 'Bandung'),
(3215606, 'Abdul Gofur', '$2a$12$T/qo9t2w8LMPjA.h5U3.OehG0UAbgRLm36jJ/k0w2LsBbs3ZOp7ai', 2, 'abdulfogur@gmail.com', 'Sumedang'),
(3215607, 'Riyana', '$2a$12$brYArCNE8XcjgPGgUhO6yOat1D8MIHdOqHO0yI72a0sv7wR4pA8EC', 2, 'riyana@yahoo.com', 'Bandung'),
(3215608, 'Resa Rizki', '$2a$12$tEDMAsXSJ73xYRPlR4suseF7dRQ5aeisRAjwRYQ6oEyJdf3SwpiH.', 2, 'resarizki@gmail.com', 'Bandung'),
(3215701, 'Jupri', '$2a$12$70y46c1S4mMxx1VYxvsEqu/NOxhiXJbgaEEAjSsh4ZWI67.NEVj8i', 2, 'jupri@rocketmail.com', 'Bandung');

-- --------------------------------------------------------

--
-- Table structure for table `token`
--

CREATE TABLE `token` (
  `id` int(10) NOT NULL,
  `nim` int(20) NOT NULL,
  `token` varchar(75) NOT NULL,
  `created` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `token`
--

INSERT INTO `token` (`id`, `nim`, `token`, `created`) VALUES
(5, 1215008, 'YzNmMDhiZjVmMDY1ZTY2OGQzNjU4MTA3NDNmMThi', '2017-04-12'),
(6, 1215005, 'YzJhY2U1ZTQ3ZWEwYTc4MTYyNDc3MTE5YzFlNDk2', '2017-04-12');

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
-- Indexes for table `token`
--
ALTER TABLE `token`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `token`
--
ALTER TABLE `token`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
