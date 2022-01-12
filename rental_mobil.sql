-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 09, 2022 at 05:51 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rental_mobil`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `nama_admin` varchar(120) NOT NULL,
  `username` varchar(120) NOT NULL,
  `password` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id_customer` int(11) NOT NULL,
  `nama` varchar(120) NOT NULL,
  `nama_rental` varchar(120) NOT NULL,
  `username` varchar(120) NOT NULL,
  `alamat` varchar(120) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `no_telp` varchar(20) NOT NULL,
  `no_ktp` varchar(50) NOT NULL,
  `password` varchar(120) NOT NULL,
  `role_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id_customer`, `nama`, `nama_rental`, `username`, `alamat`, `gender`, `no_telp`, `no_ktp`, `password`, `role_id`) VALUES
(6, 'Admin', '', 'admin', 'admin', 'Laki-laki', '000', '000', '21232f297a57a5a743894a0e4a801fc3', 1),
(7, 'Riando Putra ', 'Putra Riau Travel', 'riandoputra', 'Jl. Riau, Pekanbaru', 'Laki-laki', '082286789987', '1403301109948876', '1ab64f64dc250c00e3b78f222bdbc01e', 3),
(8, 'Cahyo Purnomo', 'Permata Rental', 'cahyopurnomo', 'Jl. Soekarno-Hatta, Pekanbaru', 'Laki-laki', '083178664785', '1402030909897765', 'b83e1bc6933e8be68e7a931a203b1555', 3),
(9, 'M. Dani', '', 'mdani', 'Jl. Teuku Umar, Pekanbaru', 'Laki-laki', '081266774667', '1401022104901263', '4aef180c96fd94d684dc8a3d2b4135ca', 2),
(10, 'Musli Khairul', 'Sejahtera Travel', 'muslikhairul', 'Jl. SM Amin, Pekanbaru', 'Laki-laki', '08115656777', '1402020412858784', 'cf9e356170ec20f1a7fd572c4785c456', 3),
(11, 'Adi Maarif', '', 'adimaarif', 'Jl. Soebrantas, Pekanbaru', 'Laki-laki', '085288544488', '1402010904837655', 'd43d6f5df36c34f256a072701e96cb49', 2),
(12, 'Dewi Utami', '', 'dewiutami', 'Jl. Taman Karya, Jl. Soebrantas, Pekanbaru', 'Perempuan', '081234778655', '1402031205904465', '0a6d6a030c1ace188fbde8450603f62d', 2),
(13, 'Murni Rusmiah', '', 'murnirusmiah', 'Jl. Durian, Pekanbaru', 'Perempuan', '081276548897', '1402030405837655', '2e44fb210acac79046c7ee536fc06874', 2),
(14, 'Latif Akbar', '', 'latifakbar', 'Jl. Nangka, Pekanbaru', 'Laki-laki', '082136774589', '1403020711895674', 'cef19b883a25d09aa2454df9c4bcd0e6', 2),
(15, 'Wira Krisna', 'Utama Travel', 'wirakrisna', 'Jl. Arifin Achmad, Pekanbaru', 'Laki-laki', '082344557665', '1402021208846755', '39c1a3157ee234c0e972e45e3431a259', 3),
(16, 'Cengkir Mansur', 'Rental Jaya Abadi', 'cengkirmansur', 'Jl. Soebrantas', 'Laki-laki', '0822222212312', '423423432423', '960e8d1b6b24cb8de1eac32592de12ca', 3),
(17, 'norman', '', 'norman', 'Gg. Jihad', 'Laki-laki', '08000000', '000000000', '9ac915832a9a1c970c1564708917c3aa', 2),
(18, 'foriz', '', 'foriz', 'Jl. Foriz', 'Laki-laki', '5645', '4654645', '09776fbdf3875c65a3d63339f10e3986', 2),
(19, 'customer01', 'Rental Customer Jaya', 'customer01', 'jl customer01', 'Laki-laki', '0888', '834734', '41d280f49cef01c5ae33eb28b4c3d699', 3),
(20, 'customer02', '', 'customer02', 'jl. customer02', 'Laki-laki', '5534', '657565', 'b3104f7d3e375cdb09477e25b07c9d38', 2);

-- --------------------------------------------------------

--
-- Table structure for table `mobil`
--

CREATE TABLE `mobil` (
  `id_mobil` int(11) NOT NULL,
  `nama_rental` varchar(120) NOT NULL,
  `kode_type` varchar(120) NOT NULL,
  `merk` varchar(120) NOT NULL,
  `no_plat` varchar(20) NOT NULL,
  `warna` varchar(20) NOT NULL,
  `tahun` varchar(4) NOT NULL,
  `status` varchar(50) NOT NULL,
  `harga` int(11) NOT NULL,
  `denda` int(11) NOT NULL,
  `ac` int(11) NOT NULL,
  `supir` int(11) NOT NULL,
  `mp3_player` int(11) NOT NULL,
  `central_lock` int(11) NOT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mobil`
--

INSERT INTO `mobil` (`id_mobil`, `nama_rental`, `kode_type`, `merk`, `no_plat`, `warna`, `tahun`, `status`, `harga`, `denda`, `ac`, `supir`, `mp3_player`, `central_lock`, `gambar`) VALUES
(9, 'Putra Riau Travel', 'SDN', 'Honda City New 2022', 'BM 4553 KJ', 'Putih', '2012', '1', 300000, 45000, 1, 1, 1, 0, 'honda-city-generasi-kelima-bermesin-turbo-mengaspal-di-thailand-nKxUNH0qVW.jpg'),
(10, 'Putra Riau Travel', 'MPV', 'Daihatsu Xenia', 'BM 7655 HG', 'Biru', '2019', '1', 250000, 30000, 1, 1, 1, 1, 'mpv-daihatsu-xenia-biru.jpg'),
(11, 'Putra Riau Travel', 'MPV', 'Toyota Avanza', 'BM 3222 YH', 'Champagne Metallic', '2011', '1', 250000, 30000, 1, 1, 1, 1, 'mpv-toyota-avanza.png'),
(12, 'Putra Riau Travel', 'MPV', 'Daihatsu Xenia', 'BM 3455 GF', 'Merah', '2005', '1', 250000, 30000, 1, 1, 1, 1, 'MPV_Daihatsu_Xenia_2015_-_Red.png'),
(13, 'Permata Rental', 'MPV', 'Toyota Avanza', 'BM 2896 TG', 'Putih', '2004', '1', 250000, 30000, 1, 1, 1, 1, 'MPV_Toyota_Avanza_2014_-_White.png'),
(14, 'Permata Rental', 'SUV', 'Daihatsu Terios', 'BM 5637 PL', 'Putih', '2007', '1', 350000, 50000, 1, 1, 1, 1, 'SUV_Daihatsu_Terios_2007_-_Black.jpg'),
(15, 'Permata Rental', 'SUV', 'Toyota Rush', 'BM 3424 UH', 'Hitam', '2012', '1', 500000, 80000, 1, 1, 1, 1, 'SUV_Toyota_Rush_2012_-_Black.jpg'),
(16, 'Sejahtera Travel', 'MPV', 'Toyota Avanza', 'BM 8655 DF', 'Putih', '2014', '1', 300000, 45000, 1, 1, 1, 1, 'MPV_Toyota_Avanza_2014_-_White1.png'),
(17, 'Sejahtera Travel', 'PUD', 'Mitsubishi Strada', 'BM 7655 HI', 'Hitam', '2006', '1', 800000, 100000, 1, 1, 1, 1, 'PUD_Mitsubishi_Strada_2015_-_Black.jpg'),
(18, 'Sejahtera Travel', 'PUD', 'Mitsubishi Strada', 'BM 6755 MK', 'Putih', '2011', '1', 900000, 110000, 1, 1, 1, 1, 'PUD_Mitsubishi_Strada_2017_-_White.png'),
(19, 'Sejahtera Travel', 'MPV', 'Daihatsu Xenia', 'BM 4366 PL', 'Putih', '2003', '1', 300000, 40000, 1, 1, 1, 1, 'MPV_Daihatsu_Xenia_2015_-_White.png');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `id_payment` int(11) NOT NULL,
  `nama_payment` varchar(120) NOT NULL,
  `key_payment` varchar(120) NOT NULL,
  `atas_nama` varchar(120) DEFAULT NULL,
  `nama_rental` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`id_payment`, `nama_payment`, `key_payment`, `atas_nama`, `nama_rental`) VALUES
(2, 'Bank BRI', '42367482374', 'Mang Group', 'Jaya Rental'),
(3, 'Bank Kai', '123', NULL, 'Murah Rental'),
(6, 'nro', 'ljk', NULL, 'Murah Rental'),
(7, 'jkjk', '899', 'fdsfs', 'Murah Rental'),
(8, 'Paypal', 'mang@mangkok.com', 'Mang Group', 'Jaya Rental'),
(9, 'BANK BRI', '478657865432656', 'Sejahtera Travel', 'Sejahtera Travel'),
(10, 'DANA', '08115656777', 'Sejahtera Travel', 'Sejahtera Travel'),
(11, 'OVO', '08115656777', 'Sejahtera Travel', 'Sejahtera Travel'),
(12, 'BANK BNI', '2367489773', 'Sejahtera Travel', 'Sejahtera Travel'),
(13, 'BANK MANDIRI', '3493439897432', 'Sejahtera Travel', 'Sejahtera Travel'),
(14, 'BANK BRI', '324349897689743', 'Permata Rental', 'Permata Rental'),
(15, 'BANK BNI', '2487539893', 'Permata Rental', 'Permata Rental'),
(16, 'BANK BRI', '47254587854765', 'Putra Riau Travel', 'Putra Riau Travel'),
(17, 'BANK BNI', '5247698584', 'Putra Riau Travel', 'Putra Riau Travel'),
(18, 'BANK MANDIRI', '4373487899322', 'Putra Riau Travel', 'Putra Riau Travel');

-- --------------------------------------------------------

--
-- Table structure for table `rental`
--

CREATE TABLE `rental` (
  `id_rental` int(11) NOT NULL,
  `id_customer` int(11) NOT NULL,
  `tanggal_rental` date NOT NULL,
  `tanggal_kembali` date NOT NULL,
  `tanggal_pengembalian` date NOT NULL,
  `status_rental` varchar(50) NOT NULL,
  `status_pengembalian` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id_rental` int(11) NOT NULL,
  `id_customer` int(11) NOT NULL,
  `id_mobil` int(11) NOT NULL,
  `nama_rental` varchar(120) NOT NULL,
  `tanggal_rental` date NOT NULL,
  `tanggal_kembali` date NOT NULL,
  `harga` int(11) NOT NULL,
  `denda` int(11) NOT NULL,
  `total_denda` varchar(120) NOT NULL DEFAULT '0',
  `tanggal_pengembalian` date NOT NULL,
  `status_pengembalian` varchar(50) NOT NULL,
  `status_rental` varchar(50) NOT NULL,
  `bukti_pembayaran` varchar(130) NOT NULL,
  `status_pembayaran` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id_rental`, `id_customer`, `id_mobil`, `nama_rental`, `tanggal_rental`, `tanggal_kembali`, `harga`, `denda`, `total_denda`, `tanggal_pengembalian`, `status_pengembalian`, `status_rental`, `bukti_pembayaran`, `status_pembayaran`) VALUES
(10, 9, 17, 'Sejahtera Travel', '2020-06-08', '2020-06-12', 800000, 100000, '58604166.666667', '2022-01-19', 'Kembali', 'Selesai', '009.PNG', 1),
(15, 20, 9, 'Putra Riau Travel', '2022-01-09', '2022-01-12', 300000, 45000, '90000', '2022-01-14', 'Kembali', 'Selesai', 'Bukti_Pembayaran_Contoh.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `type`
--

CREATE TABLE `type` (
  `id_type` int(11) NOT NULL,
  `kode_type` varchar(10) NOT NULL,
  `nama_type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `type`
--

INSERT INTO `type` (`id_type`, `kode_type`, `nama_type`) VALUES
(1, 'SDN', 'Sedan'),
(2, 'HB', 'Hatchback'),
(3, 'MPV', 'Multi Purpose Vehicle'),
(4, 'SUV', 'Sport Utility Vehicle'),
(5, 'PUS', 'Pick-Up Single Cabin'),
(6, 'PUD', 'Pick-Up Double Cabin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id_customer`);

--
-- Indexes for table `mobil`
--
ALTER TABLE `mobil`
  ADD PRIMARY KEY (`id_mobil`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`id_payment`);

--
-- Indexes for table `rental`
--
ALTER TABLE `rental`
  ADD PRIMARY KEY (`id_rental`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_rental`);

--
-- Indexes for table `type`
--
ALTER TABLE `type`
  ADD PRIMARY KEY (`id_type`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id_customer` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `mobil`
--
ALTER TABLE `mobil`
  MODIFY `id_mobil` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `id_payment` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `rental`
--
ALTER TABLE `rental`
  MODIFY `id_rental` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id_rental` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `type`
--
ALTER TABLE `type`
  MODIFY `id_type` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
