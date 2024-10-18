-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 12, 2022 at 01:50 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tenun`
--

-- --------------------------------------------------------

--
-- Stand-in structure for view `detail_order`
-- (See below for the actual view)
--
CREATE TABLE `detail_order` (
`idkonfirmasi` int(11)
,`id_layanan` int(11)
,`id_pembayaran` int(11)
,`orderid` varchar(100)
,`namalengkap` varchar(50)
,`email` varchar(50)
,`total_harga` int(100)
,`alamat` varchar(255)
,`tglbayar` date
,`tglsubmit` timestamp
,`status` varchar(100)
,`upload_pembayaran` varchar(255)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `detail_produk`
-- (See below for the actual view)
--
CREATE TABLE `detail_produk` (
`idproduk` int(11)
,`namakategori` varchar(20)
,`namaproduk` varchar(30)
,`gambar` varchar(100)
,`deskripsi` varchar(200)
,`rate` int(11)
,`hargabefore` int(11)
,`hargaafter` int(11)
,`tgldibuat` timestamp
);

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `idkategori` int(11) NOT NULL,
  `namakategori` varchar(20) NOT NULL,
  `tgldibuat` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`idkategori`, `namakategori`, `tgldibuat`) VALUES
(1, 'Motif', '2021-07-03 07:28:34'),
(2, 'Sarung Tenun', '2021-07-03 07:34:17'),
(6, 'Tenun Songket', '2021-07-09 09:38:09'),
(7, 'Tenun Syall', '2021-07-09 09:38:53'),
(8, 'Tas Tenun', '2021-07-09 09:39:18'),
(11, 'Motif 2', '2022-10-15 04:31:14');

-- --------------------------------------------------------

--
-- Table structure for table `keranjang`
--

CREATE TABLE `keranjang` (
  `idcart` int(11) NOT NULL,
  `idproduk` int(11) NOT NULL,
  `orderid` varchar(101) NOT NULL,
  `userid` int(11) NOT NULL,
  `tglorder` timestamp NOT NULL DEFAULT current_timestamp(),
  `qty` int(11) NOT NULL,
  `subharga` int(255) NOT NULL,
  `hargaproduk` int(255) NOT NULL,
  `status` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `keranjang`
--

INSERT INTO `keranjang` (`idcart`, `idproduk`, `orderid`, `userid`, `tglorder`, `qty`, `subharga`, `hargaproduk`, `status`) VALUES
(19, 6, '16lp4ErFRN7Gk', 16, '2022-11-07 09:54:38', 2, 800000, 0, 'Belum Baya'),
(27, 8, '16lp4ErFRN7Gk', 16, '2022-11-11 07:09:35', 1, 1200000, 0, 'Belum Baya'),
(28, 7, '16P187JnFspyU', 16, '2022-11-11 10:23:06', 1, 580000, 0, 'Belum Bayar'),
(29, 6, '16Uc1BpS3kO0w', 16, '2022-11-11 08:17:26', 3, 1200000, 0, 'Belum Bayar'),
(30, 5, '16TbGf4mFcmEA', 16, '2022-11-11 08:36:37', 1, 250000, 0, 'Belum Bayar');

-- --------------------------------------------------------

--
-- Stand-in structure for view `keranjang_produk`
-- (See below for the actual view)
--
CREATE TABLE `keranjang_produk` (
`idcart` int(11)
,`orderid` varchar(101)
,`idproduk` int(11)
,`userid` int(11)
,`tglorder` timestamp
,`qty` int(11)
,`subharga` int(255)
,`hargaproduk` int(255)
,`status` varchar(30)
,`namaproduk` varchar(30)
,`gambar` varchar(100)
,`deskripsi` varchar(200)
,`rate` int(11)
,`hargabefore` int(11)
,`hargaafter` int(11)
,`tgldibuat` timestamp
);

-- --------------------------------------------------------

--
-- Table structure for table `konfirmasi`
--

CREATE TABLE `konfirmasi` (
  `idkonfirmasi` int(11) NOT NULL,
  `id_layanan` int(11) NOT NULL,
  `id_pembayaran` int(11) NOT NULL,
  `orderid` varchar(100) NOT NULL,
  `userid` int(11) NOT NULL,
  `total_harga` int(100) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `tglbayar` date NOT NULL,
  `tglsubmit` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` varchar(100) NOT NULL,
  `upload_pembayaran` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `konfirmasi`
--

INSERT INTO `konfirmasi` (`idkonfirmasi`, `id_layanan`, `id_pembayaran`, `orderid`, `userid`, `total_harga`, `alamat`, `tglbayar`, `tglsubmit`, `status`, `upload_pembayaran`) VALUES
(5, 2, 3, '16lp4ErFRN7Gk', 16, 2000000, 'Masbagik, Pratoh', '2022-11-11', '2022-11-11 10:15:42', 'Pembayaran Berhasil', 'logo-perum-bulog1.jpg'),
(6, 3, 1, '16P187JnFspyU', 16, 580000, 'Lendang Bedurik', '2022-11-11', '2022-11-11 10:31:31', 'Pesanan Di Konfirmasi', 'logo-perum-bulog.jpg'),
(7, 2, 1, '16Uc1BpS3kO0w', 16, 1200000, 'sdjsadj', '2022-11-11', '2022-11-11 08:17:40', 'Pengiriman', '16679047363253.jpg'),
(8, 2, 1, '16TbGf4mFcmEA', 16, 250000, 'dfgghfhjk', '2022-11-11', '2022-11-11 08:36:50', 'Pengiriman', 'logo-perum-bulog2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `layanan_pengiriman`
--

CREATE TABLE `layanan_pengiriman` (
  `id_layanan` int(11) NOT NULL,
  `nama` varchar(120) NOT NULL,
  `ongkir` varchar(151) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `layanan_pengiriman`
--

INSERT INTO `layanan_pengiriman` (`id_layanan`, `nama`, `ongkir`) VALUES
(1, 'JNE', '30000'),
(2, 'JNT', '25000'),
(3, 'SI CEPAT', '15000');

-- --------------------------------------------------------

--
-- Table structure for table `pembayaran`
--

CREATE TABLE `pembayaran` (
  `no` int(11) NOT NULL,
  `metode` varchar(25) NOT NULL,
  `norek` varchar(25) NOT NULL,
  `logo` text DEFAULT NULL,
  `an` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pembayaran`
--

INSERT INTO `pembayaran` (`no`, `metode`, `norek`, `logo`, `an`) VALUES
(1, 'Bank BCA', '13131231231', 'bca.jpg', 'Tenun Pringgasela'),
(3, 'DANA', '0882313132123', 'dana.png', 'Tenun Pringgasela');

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `idproduk` int(11) NOT NULL,
  `idkategori` int(11) NOT NULL,
  `namaproduk` varchar(30) NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `deskripsi` varchar(200) NOT NULL,
  `rate` int(11) NOT NULL,
  `hargabefore` int(11) NOT NULL,
  `hargaafter` int(11) NOT NULL,
  `tgldibuat` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`idproduk`, `idkategori`, `namaproduk`, `gambar`, `deskripsi`, `rate`, `hargabefore`, `hargaafter`, `tgldibuat`) VALUES
(5, 1, 'Sari Menantimu', '16zear23jHVpY.jpg', 'Kain tenun Pringgasela diolah secara tradisional, buatan tangan (handmade). Bisa buat sarung untuk Shalat atau bisa dibuat sebaga bahan pembuatan baju, Sprei, Taplak Meja dsb. Terbuat dari benang pili', 3, 300000, 250000, '2021-07-09 09:43:23'),
(6, 1, 'Garis - Garis Biru', '16Oa5AytU84qI.jpg', 'Kain tenun Pringgasela diolah secara tradisional, buatan tangan (handmade). Bisa buat sarung untuk Shalat atau bisa dibuat sebaga bahan pembuatan baju, Sprei, Taplak Meja dsb. Terbuat dari benang pili', 5, 400000, 400000, '2021-07-09 09:45:52'),
(7, 2, 'Tenun Endak', '16CF5EyYDoZkU.jpg', 'Tenun endak ini adalah salah satu ciri khas dari kain tenun pringgasela dan menjadi salah  satu kain tenun yang langka karena sangat jarang pengrajin yang bisa membuat kain tenun ini. 60cm x 4m', 5, 600000, 580000, '2021-07-09 12:33:03'),
(8, 2, 'Juara Dunia', '16KOwS8nNHJD..jpg', 'Tenun juara dunia ini adalah tenun yang paling mahal dan sangat langka di pringgasela, karena tenun ini dari proses pembuatannya yang memakan waktu yang cukup lama dibandingkan dengan motif yang lain ', 5, 1200000, 1200000, '2021-07-09 12:36:47');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userid` int(11) NOT NULL,
  `namalengkap` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(150) NOT NULL,
  `notelp` varchar(15) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `tgljoin` timestamp NOT NULL DEFAULT current_timestamp(),
  `role` varchar(7) NOT NULL DEFAULT 'Member',
  `lastlogin` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userid`, `namalengkap`, `email`, `password`, `notelp`, `alamat`, `tgljoin`, `role`, `lastlogin`) VALUES
(10, 'Haeruzzikri', 'zikry23mahyun@gmail.com', '$2y$10$4fkFQC2ztAvDHikVXmvZIuEzG38FnSgRKNn7Q5vXH.ReMroL1JQee', '087743329301', 'Pringgasela Selatan', '2022-10-04 13:14:07', 'Member', NULL),
(15, 'Admin', 'admin123@gmail.com', '$2y$10$xXjY/H8EKV478dIm/ykIyePhJpJ4FP0/eRlMkE65tlUhnCenDJzA2', '087734343333', 'Pringgasela Selatan', '2022-10-06 10:29:46', 'Admin', NULL),
(16, 'Emha Asqolani', 'emha@gmail.com', '$2y$10$zl3nRkF3dlGpoPD4vv1UXuWnfr.3SHXlP.hE16zyWhBRb6vGUreAO', '087774849494', 'Masbagik, Pratoh', '2022-10-06 11:14:53', 'Member', NULL),
(17, 'Admin2', 'admin2@gmail.com', '$2y$10$qNFTnkDCBy5ZBuktDyYbmu1aEC1O.GV/.d2r4mkwq/oh1jfSFuZwO', '08775678900', 'Lendang Bedurik', '2022-10-15 04:07:57', 'Admin', NULL);

-- --------------------------------------------------------

--
-- Structure for view `detail_order`
--
DROP TABLE IF EXISTS `detail_order`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `detail_order`  AS   (select `konfirmasi`.`idkonfirmasi` AS `idkonfirmasi`,`konfirmasi`.`id_layanan` AS `id_layanan`,`konfirmasi`.`id_pembayaran` AS `id_pembayaran`,`konfirmasi`.`orderid` AS `orderid`,`users`.`namalengkap` AS `namalengkap`,`users`.`email` AS `email`,`konfirmasi`.`total_harga` AS `total_harga`,`konfirmasi`.`alamat` AS `alamat`,`konfirmasi`.`tglbayar` AS `tglbayar`,`konfirmasi`.`tglsubmit` AS `tglsubmit`,`konfirmasi`.`status` AS `status`,`konfirmasi`.`upload_pembayaran` AS `upload_pembayaran` from (`konfirmasi` join `users`) where `konfirmasi`.`userid` = `users`.`userid`)  ;

-- --------------------------------------------------------

--
-- Structure for view `detail_produk`
--
DROP TABLE IF EXISTS `detail_produk`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `detail_produk`  AS   (select `produk`.`idproduk` AS `idproduk`,`kategori`.`namakategori` AS `namakategori`,`produk`.`namaproduk` AS `namaproduk`,`produk`.`gambar` AS `gambar`,`produk`.`deskripsi` AS `deskripsi`,`produk`.`rate` AS `rate`,`produk`.`hargabefore` AS `hargabefore`,`produk`.`hargaafter` AS `hargaafter`,`produk`.`tgldibuat` AS `tgldibuat` from (`produk` join `kategori`) where `produk`.`idkategori` = `kategori`.`idkategori`)  ;

-- --------------------------------------------------------

--
-- Structure for view `keranjang_produk`
--
DROP TABLE IF EXISTS `keranjang_produk`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `keranjang_produk`  AS   (select `keranjang`.`idcart` AS `idcart`,`keranjang`.`orderid` AS `orderid`,`keranjang`.`idproduk` AS `idproduk`,`keranjang`.`userid` AS `userid`,`keranjang`.`tglorder` AS `tglorder`,`keranjang`.`qty` AS `qty`,`keranjang`.`subharga` AS `subharga`,`keranjang`.`hargaproduk` AS `hargaproduk`,`keranjang`.`status` AS `status`,`produk`.`namaproduk` AS `namaproduk`,`produk`.`gambar` AS `gambar`,`produk`.`deskripsi` AS `deskripsi`,`produk`.`rate` AS `rate`,`produk`.`hargabefore` AS `hargabefore`,`produk`.`hargaafter` AS `hargaafter`,`produk`.`tgldibuat` AS `tgldibuat` from (`keranjang` join `produk`) where `keranjang`.`idproduk` = `produk`.`idproduk`)  ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`idkategori`);

--
-- Indexes for table `keranjang`
--
ALTER TABLE `keranjang`
  ADD PRIMARY KEY (`idcart`);

--
-- Indexes for table `konfirmasi`
--
ALTER TABLE `konfirmasi`
  ADD PRIMARY KEY (`idkonfirmasi`),
  ADD KEY `userid` (`userid`);

--
-- Indexes for table `layanan_pengiriman`
--
ALTER TABLE `layanan_pengiriman`
  ADD PRIMARY KEY (`id_layanan`);

--
-- Indexes for table `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`idproduk`),
  ADD KEY `idkategori` (`idkategori`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `idkategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `keranjang`
--
ALTER TABLE `keranjang`
  MODIFY `idcart` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `konfirmasi`
--
ALTER TABLE `konfirmasi`
  MODIFY `idkonfirmasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `layanan_pengiriman`
--
ALTER TABLE `layanan_pengiriman`
  MODIFY `id_layanan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `pembayaran`
--
ALTER TABLE `pembayaran`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `idproduk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `konfirmasi`
--
ALTER TABLE `konfirmasi`
  ADD CONSTRAINT `userid` FOREIGN KEY (`userid`) REFERENCES `users` (`userid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `produk`
--
ALTER TABLE `produk`
  ADD CONSTRAINT `idkategori` FOREIGN KEY (`idkategori`) REFERENCES `kategori` (`idkategori`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
