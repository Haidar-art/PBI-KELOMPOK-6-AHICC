-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 23, 2022 at 05:12 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `incafe`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `password`, `nama_lengkap`) VALUES
(1, 'kelompok_ahicc', 'kelompok6', 'kelompok6ahicc');

-- --------------------------------------------------------

--
-- Table structure for table `admin_toko`
--

CREATE TABLE `admin_toko` (
  `id_admin_toko` int(11) NOT NULL,
  `email_admin` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tambah_cafe`
--

CREATE TABLE `tambah_cafe` (
  `id_tambah_cafe` int(11) NOT NULL,
  `nama_toko_cafe` varchar(50) NOT NULL,
  `deskripsi_cafe` text NOT NULL,
  `telepon_cafe` varchar(50) NOT NULL,
  `alamat_cafe` varchar(250) NOT NULL,
  `foto` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tambah_cafe`
--

INSERT INTO `tambah_cafe` (`id_tambah_cafe`, `nama_toko_cafe`, `deskripsi_cafe`, `telepon_cafe`, `alamat_cafe`, `foto`) VALUES
(3, 'HaloNiko Cafe!', 'Relaxed cafe with a lush garden, pool & outdoor tables offering a menu of classic Greek eats.', '(021) 22785710', 'Jalan Pejaten Barat Raya No.16A, RT.1/RW.10, Ragunan, Kec. Ps. Minggu, Kota Jakarta Selatan, Daerah Khusus Ibukota Jakarta 12540', 'picture-1508243925.jpg'),
(9, 'Cafe Batavia', 'Elegant, colonial-era room with high ceilings for creative Indonesian cuisine, coffees & cocktails.\"', '(021) 6915534', 'Jl. Pintu Besar Utara No.14, RT.7/RW.7, Pinangsia, Kec. Taman Sari, Kota Jakarta Barat, Daerah Khusus Ibukota Jakarta 11230', 'Cafe-Batavia-credit-@ourdiaryplace-1024x1024-1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nama_user` varchar(100) NOT NULL,
  `email_user` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `no_telpon` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama_user`, `email_user`, `password`, `no_telpon`) VALUES
(1, 'Calista Aulia', 'calistaaulia88@gmail.com', '12345', '089513968859'),
(2, 'Malia Arismaya Ichsan Putri', 'maliaarismaya2@gmail.com', '12345', '08778653495'),
(3, 'Ferdiansyah', 'ylkstore17@gmail.com', 'ferdi1', ''),
(4, 'calista', 'it.inventory@investree.id', '12345', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `admin_toko`
--
ALTER TABLE `admin_toko`
  ADD PRIMARY KEY (`id_admin_toko`);

--
-- Indexes for table `tambah_cafe`
--
ALTER TABLE `tambah_cafe`
  ADD PRIMARY KEY (`id_tambah_cafe`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `admin_toko`
--
ALTER TABLE `admin_toko`
  MODIFY `id_admin_toko` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tambah_cafe`
--
ALTER TABLE `tambah_cafe`
  MODIFY `id_tambah_cafe` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
