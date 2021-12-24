-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 23, 2021 at 11:56 PM
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
-- Table structure for table `balance`
--

CREATE TABLE `balance` (
  `id_balance` int(11) NOT NULL,
  `balance` text NOT NULL,
  `Tanggal_balance` varchar(80) NOT NULL,
  `Keterangan` text NOT NULL,
  `id_user` int(11) NOT NULL,
  `jenis_bank` varchar(90) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `balance`
--

INSERT INTO `balance` (`id_balance`, `balance`, `Tanggal_balance`, `Keterangan`, `id_user`, `jenis_bank`) VALUES
(2, '900000', '22/22/21', 'Testing\r\n', 1, 'Bank BNI'),
(3, '120000', '12/12/2021', 'kkkkkk', 1, ''),
(4, '2000', '2021-12-15', '<p>sadadada</p>\r\n', 1, 'on'),
(7, '2000', '23/12/2021 02:42:11 ', 'Nominal Berkurang sebesar-178000', 1, 'Bank BNI'),
(8, '900000', '2021-02-12', '<p>asdada</p>\r\n', 1, 'on'),
(9, '450000', '23/12/2021 02:43:37 ', 'Nominal Berkurang sebesar450000', 1, 'Bank BNI'),
(10, '-8460000', '23/12/2021 02:44:18 ', 'Nominal Berkurang sebesar-8460000', 1, 'Bank BNI'),
(11, '90000000', '2021-12-07', '<p>dadsaasdasda</p>\r\n', 1, 'on'),
(12, '89100000', '23/12/2021 02:49:39 ', 'Nominal Berkurang sebesar89100000', 1, 'Bank BNI'),
(13, '10000', '23/12/2021 02:54:44 ', '<p>sasa</p>\r\n', 1, 'on'),
(14, '30000', '23/12/2021 02:56:39 ', '<p>untuk beli buku</p>\r\n\r\n<p>&nbsp;</p>\r\n', 1, 'BNI'),
(15, '40000', '23/12/2021 03:03:08 ', 'Saldo Telah ditambahkan dari Mandiri Sebesar 10000Keterangan : <p>Maun<strong>gzy</strong></p>\r\n', 1, 'Mandiri'),
(16, '50000', '23/12/2021 03:03:54 ', 'Saldo Telah ditambahkan dari Mandiri Sebesar 10000\nKeterangan : <p><strong>Aaaaaa</strong></p>\r\n', 1, 'Mandiri'),
(17, '70000', '23/12/2021 03:05:54 ', 'Saldo Telah ditambahkan dari BNI Sebesar <?php echo matauang(20000);?> Keterangan : <p>yahahahah</p>\r\n', 1, 'BNI'),
(18, '80000', '23/12/2021 03:08:07 ', 'Saldo Telah ditambahkan dari Mandiri Sebesar10000\n\n Keterangan : <p>yahahahah</p>\r\n', 1, 'Mandiri');

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
(8, 'Koala Kumal', 'Raditya Dika', '90000', '9789797807696_kuala_kumal__w600_hauto.jpg', '21 January 2021');

-- --------------------------------------------------------

--
-- Table structure for table `remainder`
--

CREATE TABLE `remainder` (
  `id_remainder` int(11) NOT NULL,
  `judul` varchar(80) NOT NULL,
  `keterangan` text NOT NULL,
  `batas_waktu` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `remainder`
--

INSERT INTO `remainder` (`id_remainder`, `judul`, `keterangan`, `batas_waktu`) VALUES
(6, 'testing', 'dasdasd', '2021-12-09T17:18');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id_transaksi` int(11) NOT NULL,
  `tanggal_transaksi` varchar(80) NOT NULL,
  `nilai` text NOT NULL,
  `jenis_transaksi` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id_transaksi`, `tanggal_transaksi`, `nilai`, `jenis_transaksi`) VALUES
(1, '21-12-2021', '20000', 'Pengeluaran'),
(2, '22-12-2021', '40000', 'Pemasukkan'),
(3, '23-12-2021', '50000', 'Pemasukkan');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `balance`
--
ALTER TABLE `balance`
  ADD PRIMARY KEY (`id_balance`),
  ADD KEY `id_user` (`id_user`);

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
-- Indexes for table `remainder`
--
ALTER TABLE `remainder`
  ADD PRIMARY KEY (`id_remainder`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_transaksi`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `balance`
--
ALTER TABLE `balance`
  MODIFY `id_balance` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `pemesanan`
--
ALTER TABLE `pemesanan`
  MODIFY `id_info` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `produkbuku`
--
ALTER TABLE `produkbuku`
  MODIFY `id_buku` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `remainder`
--
ALTER TABLE `remainder`
  MODIFY `id_remainder` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
