-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 03, 2021 at 04:38 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rs_mhafizb`
--

-- --------------------------------------------------------

--
-- Table structure for table `table_passien`
--

CREATE TABLE `table_passien` (
  `id` int(11) NOT NULL,
  `nama_pasien` varchar(100) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `tempat_lahir` varchar(100) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `jenis_kelamin` int(11) NOT NULL,
  `pekerjaan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `table_passien`
--

INSERT INTO `table_passien` (`id`, `nama_pasien`, `alamat`, `tempat_lahir`, `tanggal_lahir`, `jenis_kelamin`, `pekerjaan`) VALUES
(1, 'Budi Sakit', 'Jakarta Pulau intan', 'Surabaya', '2021-12-07', 1, 'Tukang'),
(6, 'asd sad sad ', 'saasd ', 'sad as d', '2021-12-20', 1, 'asd asdsa'),
(7, 'asd sad sad ', 'saasd ', 'sad as d', '2021-12-20', 1, 'asd asdsa'),
(8, 'asd asd', 'asd sad', 'asd asd', '2021-12-14', 1, 'asd as'),
(10, 'Finalisasi checkerc xxxxxxx', 'azdasd sad asd ', 'asd sd as', '2021-12-14', 0, 'adasdasd '),
(11, 'Manusia Baik', '121212', 'Jakarta', '1988-01-04', 1, 'a dsadasd as');

-- --------------------------------------------------------

--
-- Table structure for table `table_perawat`
--

CREATE TABLE `table_perawat` (
  `id` int(11) NOT NULL,
  `id_poli` varchar(100) NOT NULL,
  `nama_perawat` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `tgl_lahir` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `table_perawat`
--

INSERT INTO `table_perawat` (`id`, `id_poli`, `nama_perawat`, `alamat`, `tgl_lahir`) VALUES
(2, 'sdf dfsd sad sad ', 'sdf sdf', 'sdf sd', '2021-12-22'),
(6, 'ad asd', 'asdasdsa', 'asd asd ', '2021-12-16'),
(7, 'asd as d', 'asd asd', 'asd sad', '2021-12-14'),
(8, '01', 'Bu Udin', 'asd asdas dasad ', '2021-12-20'),
(9, '6666', 'Bu Hehehaa', '121212', '2021-12-06');

-- --------------------------------------------------------

--
-- Table structure for table `table_tindakan`
--

CREATE TABLE `table_tindakan` (
  `id` int(11) NOT NULL,
  `id_perawat` int(11) NOT NULL,
  `id_pasien` int(11) NOT NULL,
  `jam` varchar(10) NOT NULL,
  `diagnosa` varchar(255) NOT NULL,
  `tindakan` varchar(100) NOT NULL,
  `no_ruang` int(11) NOT NULL,
  `keterangan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `table_tindakan`
--

INSERT INTO `table_tindakan` (`id`, `id_perawat`, `id_pasien`, `jam`, `diagnosa`, `tindakan`, `no_ruang`, `keterangan`) VALUES
(8, 2, 1, '', 'q edqwe sadsad ', 'asd sa dasd a', 123, 'asd asd'),
(10, 2, 1, '08:56', 'acasd', 'asd asd', 2147483647, 'asd '),
(11, 6, 8, '08:59', 'sa asd sd', 'ads as dsa', 1312, 'as dasd'),
(12, 2, 1, '09:35', 'xcvfsa ad ad asdsad sd asd sad asd ', 'sdsd', 2, 'ssadsad'),
(13, 2, 1, '09:52', 'asdsadsad', 'sadsadsad', 1121212, 'ssadsad'),
(15, 2, 1, '10:13', 'xcvfsa ad ad asdsad sd asd sad asd', 'Potong Sampe habis', 2222, 'asd sa dsad');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `table_passien`
--
ALTER TABLE `table_passien`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `table_perawat`
--
ALTER TABLE `table_perawat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `table_tindakan`
--
ALTER TABLE `table_tindakan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_perawat` (`id_perawat`),
  ADD KEY `id_pasien` (`id_pasien`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `table_passien`
--
ALTER TABLE `table_passien`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `table_perawat`
--
ALTER TABLE `table_perawat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `table_tindakan`
--
ALTER TABLE `table_tindakan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `table_tindakan`
--
ALTER TABLE `table_tindakan`
  ADD CONSTRAINT `table_tindakan_ibfk_1` FOREIGN KEY (`id_pasien`) REFERENCES `table_passien` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `table_tindakan_ibfk_2` FOREIGN KEY (`id_perawat`) REFERENCES `table_perawat` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
