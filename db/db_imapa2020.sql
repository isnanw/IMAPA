-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 11, 2020 at 09:52 PM
-- Server version: 5.7.28-0ubuntu0.18.04.4
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_imapa2020`
--

-- --------------------------------------------------------

--
-- Table structure for table `group`
--

CREATE TABLE `group` (
  `kodegroup` int(11) NOT NULL,
  `group` varchar(50) NOT NULL,
  `deskripsi` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `group`
--

INSERT INTO `group` (`kodegroup`, `group`, `deskripsi`) VALUES
(1, 'Admin Aplikasi', 'admin aplikasi menangani pembuatan user dll'),
(2, 'Anggota', 'Anggota Imapa'),
(3, 'Pembina', 'Pembina Organisasi');

-- --------------------------------------------------------

--
-- Table structure for table `groupmenu`
--

CREATE TABLE `groupmenu` (
  `id` int(11) NOT NULL,
  `kodegroup` int(11) NOT NULL,
  `kodemenu` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `groupmenu`
--

INSERT INTO `groupmenu` (`id`, `kodegroup`, `kodemenu`) VALUES
(1, 1, 1),
(2, 1, 11),
(3, 1, 12),
(4, 1, 13),
(5, 1, 14),
(6, 1, 20),
(8, 1, 21),
(9, 1, 22),
(10, 1, 23),
(11, 2, 1),
(12, 2, 20),
(13, 2, 21),
(14, 2, 22),
(15, 2, 23);

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `kodemenu` int(11) NOT NULL,
  `menu` varchar(50) NOT NULL,
  `url` varchar(50) NOT NULL,
  `parent` int(11) NOT NULL,
  `icon` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`kodemenu`, `menu`, `url`, `parent`, `icon`) VALUES
(1, 'Home', 'dashboard', 0, 'ti-home'),
(11, 'Data Master', '', 0, 'fa fa-sitemap'),
(12, 'Pengaturan Pengguna', 'dataMaster/pengguna', 11, ''),
(13, 'Pengaturan Group', 'dataMaster/group', 11, ''),
(14, 'Pengaturan Menu', 'dataMaster/menu', 11, ''),
(15, 'Artikel', 'dataMaster/artikel', 11, ''),
(20, 'Anggota', '', 0, 'ti-user'),
(21, 'Kelas X', 'anggota/kelasX', 20, ''),
(22, 'Kelas XI', 'anggota/kelasXI', 20, ''),
(23, 'Kelas XII', 'anggota/kelasXII', 20, '');

-- --------------------------------------------------------

--
-- Table structure for table `tahun`
--

CREATE TABLE `tahun` (
  `id` int(11) NOT NULL,
  `tahun` int(11) NOT NULL,
  `active` enum('Y','T') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tahun`
--

INSERT INTO `tahun` (`id`, `tahun`, `active`) VALUES
(1, 2020, 'Y'),
(2, 2021, 'T'),
(3, 2022, 'T');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `image` varchar(256) NOT NULL,
  `password` varchar(128) NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` int(11) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `image`, `password`, `role_id`, `is_active`, `date_created`) VALUES
(1, 'Isnan', 'isnanwahyudi4@gmal.com', 'default.jpg', '$2y$10$/o9KWhyUhZmBodYK/NPio.Z4rpRSp54ojOUvcTjwJagi1A6jbFh0u', 1, 1, 1581327166),
(2, 'Wahyudi', 'isnan@gin.co.id', 'default.jpg', '$2y$10$aYdYUQfgNzVW/4rg0lbhiu6Zg5E4UbU9eoHNMu9Oke60sjGBPdJJK', 2, 1, 1581327264);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `group`
--
ALTER TABLE `group`
  ADD PRIMARY KEY (`kodegroup`);

--
-- Indexes for table `groupmenu`
--
ALTER TABLE `groupmenu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`kodemenu`);

--
-- Indexes for table `tahun`
--
ALTER TABLE `tahun`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `group`
--
ALTER TABLE `group`
  MODIFY `kodegroup` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `groupmenu`
--
ALTER TABLE `groupmenu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `tahun`
--
ALTER TABLE `tahun`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
