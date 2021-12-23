-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 25, 2021 at 11:21 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `web_buku`
--

-- --------------------------------------------------------

--
-- Table structure for table `pemesanan`
--

CREATE TABLE `pemesanan` (
  `id_info` int(11) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `detail` text NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(80) NOT NULL,
  `tanggal` varchar(100) NOT NULL,
  `file` varchar(100) NOT NULL,
  `jenis` varchar(40) NOT NULL,
  `kualitas` varchar(50) NOT NULL,
  `checkbox` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pemesanan`
--

INSERT INTO `pemesanan` (`id_info`, `judul`, `detail`, `email`, `password`, `tanggal`, `file`, `jenis`, `kualitas`, `checkbox`) VALUES
(9, 'Courage to be Disliked', '<p><strong>Saya memesan ini dengan pengiriman neng booble wrap serta diberikan tambahan polpen beserta notes untuk aku belajar</strong></p>\r\n', 'anonim@gmail.com', 'antum', '2021-11-25', 'courage2.jpeg', 'baru', 'Koran', 'Normal');

-- --------------------------------------------------------

--
-- Table structure for table `produkbuku`
--

CREATE TABLE `produkbuku` (
  `id_buku` int(11) NOT NULL,
  `judul_buku` varchar(255) NOT NULL,
  `penggarang_buku` varchar(255) NOT NULL,
  `harga_buku` varchar(50) NOT NULL,
  `foto_sampul` varchar(255) NOT NULL DEFAULT 'default.jpg',
  `tanggal_dibuat` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `produkbuku`
--

INSERT INTO `produkbuku` (`id_buku`, `judul_buku`, `penggarang_buku`, `harga_buku`, `foto_sampul`, `tanggal_dibuat`) VALUES
(1, 'Sebuah Seni untuk Bersikap Bodo Amat', 'Mark Manson', '128000', 'sebuah-seni-untuk-bersikap-bodoh-amat-mojok-store.jpg', '12 Desember 2021'),
(8, 'Koala Kumal', 'Raditya Dika', '90000', '9789797807696_kuala_kumal__w600_hauto.jpg', '21 January 2021'),
(42, 'kucinggarong', 'meongzy', '20000', 'Screenshot_2021-11-21_09-25-10.png', '20 12 2001');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pemesanan`
--
ALTER TABLE `pemesanan`
  ADD PRIMARY KEY (`id_info`);

--
-- Indexes for table `produkbuku`
--
ALTER TABLE `produkbuku`
  ADD PRIMARY KEY (`id_buku`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pemesanan`
--
ALTER TABLE `pemesanan`
  MODIFY `id_info` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `produkbuku`
--
ALTER TABLE `produkbuku`
  MODIFY `id_buku` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
