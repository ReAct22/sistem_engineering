-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 24, 2020 at 12:44 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `maintenance_engineering`
--

-- --------------------------------------------------------

--
-- Table structure for table `co_ac`
--

CREATE TABLE `co_ac` (
  `id_complaine` varchar(10) NOT NULL,
  `name_tenant` varchar(100) NOT NULL,
  `tower` varchar(50) NOT NULL,
  `lantai` varchar(50) NOT NULL,
  `unit` varchar(50) NOT NULL,
  `complaine` varchar(225) NOT NULL,
  `keterangan` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `co_ac`
--

INSERT INTO `co_ac` (`id_complaine`, `name_tenant`, `tower`, `lantai`, `unit`, `complaine`, `keterangan`) VALUES
('AC001', 'Raehan Septian Dwi Putra', 'A', 'Lantai 9', 'A 03-01', 'TV Rusak', 'aaaa'),
('AC002', 'dgegegedg', 'A', 'Lantai 12', 'A 12-01', 'gegeg', 'egwegg'),
('AC003', 'dgegegedg', 'B', 'Lantai 17', 'A 03-06', 'gegeg', 'aggasgasg'),
('AC004', 'gasg', 'A', 'Lantai 16', 'A 03-06', 'agsgsg', 'asgwegw');

-- --------------------------------------------------------

--
-- Table structure for table `co_me`
--

CREATE TABLE `co_me` (
  `id_complaine` varchar(10) NOT NULL,
  `name_tenant` varchar(100) NOT NULL,
  `tower` varchar(50) NOT NULL,
  `lantai` varchar(50) NOT NULL,
  `unit` varchar(50) NOT NULL,
  `complaine` varchar(225) NOT NULL,
  `nama_barang` varchar(100) NOT NULL,
  `keterangan` varchar(10000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `co_me`
--

INSERT INTO `co_me` (`id_complaine`, `name_tenant`, `tower`, `lantai`, `unit`, `complaine`, `nama_barang`, `keterangan`) VALUES
('ME001', 'Dhimas', 'A', 'Lantai 5', 'A 05-05', 'Ac Rusak', 'AC', 'aaaaa'),
('ME002', 'Anjuni', 'A', 'Lantai 3', 'A 03-03', 'adadasd', 'agfsaggf', 'saffw3gfeg');

-- --------------------------------------------------------

--
-- Table structure for table `co_sipil`
--

CREATE TABLE `co_sipil` (
  `id_complaine` varchar(10) NOT NULL,
  `nama_tenant` varchar(100) NOT NULL,
  `tower` varchar(50) NOT NULL,
  `lantai` varchar(50) NOT NULL,
  `unit` varchar(50) NOT NULL,
  `complaine` varchar(225) NOT NULL,
  `keterangan` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `co_sipil`
--

INSERT INTO `co_sipil` (`id_complaine`, `nama_tenant`, `tower`, `lantai`, `unit`, `complaine`, `keterangan`) VALUES
('SPL001', 'Dhimas', 'B', 'Lantai 2', 'B 02-03', 'TV Rusak', 'dgsgsfhdjgfgjgjfdf'),
('SPL002', 'Andrean', 'A', 'Ground', 'A 01-01', 'TV Rusak', 'rhdfhdfdhrhhwrhf'),
('SPL003', 'Dhimas', 'A', 'Ground', 'A 01-01', 'TV Rusak', 'adkadalkdna'),
('SPL004', 'Dhimas', 'B', 'Lantai 13', 'B 13-04', 'TV Rusak', 'BFlkfbakbflKABF');

-- --------------------------------------------------------

--
-- Table structure for table `dc_air`
--

CREATE TABLE `dc_air` (
  `id_air` varchar(10) NOT NULL,
  `unit` varchar(50) NOT NULL,
  `meter_awal` int(10) NOT NULL,
  `meter_akhir` int(10) NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `total` int(10) NOT NULL,
  `keterangan` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dc_air`
--

INSERT INTO `dc_air` (`id_air`, `unit`, `meter_awal`, `meter_akhir`, `gambar`, `total`, `keterangan`) VALUES
('PCA001', 'A 01-02', 12, 33, 'download.jpg', 45, 'sfsnfsnfls'),
('PCA002', 'A 01-02', 12, 56, 'download.jpg', 68, 'safsfsafasgdgadsg');

-- --------------------------------------------------------

--
-- Table structure for table `dc_listrik`
--

CREATE TABLE `dc_listrik` (
  `id_listrik` varchar(10) NOT NULL,
  `unit` varchar(10) NOT NULL,
  `meter_awal` int(10) NOT NULL,
  `meter_akhir` int(10) NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `total` int(10) NOT NULL,
  `keterangan` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dc_listrik`
--

INSERT INTO `dc_listrik` (`id_listrik`, `unit`, `meter_awal`, `meter_akhir`, `gambar`, `total`, `keterangan`) VALUES
('PCL001', 'A 01-01', 12, 56, 'download.jpg', 68, 'sfasfgasfsaf'),
('PCL002', 'A 01-02', 12, 56, 'download.jpg', 68, 'sfsfasfasf');

-- --------------------------------------------------------

--
-- Table structure for table `dp_air`
--

CREATE TABLE `dp_air` (
  `id_cek` varchar(10) NOT NULL,
  `unit` varchar(10) NOT NULL,
  `meter_awal` varchar(50) NOT NULL,
  `meter_akhir` varchar(50) NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `pemakaian` varchar(225) NOT NULL,
  `keterangan` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dp_air`
--

INSERT INTO `dp_air` (`id_cek`, `unit`, `meter_awal`, `meter_akhir`, `gambar`, `pemakaian`, `keterangan`) VALUES
('DPA001', 'A 01-01', '32', '44', '83aae224-a4ef-463b-af1b-a333c97f1379.jpg', '34343', 'ssfsasfasfasf');

-- --------------------------------------------------------

--
-- Table structure for table `dp_listrik`
--

CREATE TABLE `dp_listrik` (
  `id_cek` varchar(10) NOT NULL,
  `unit` varchar(50) NOT NULL,
  `meter_awal` varchar(50) NOT NULL,
  `meter_akhir` varchar(50) NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `pemakaian` varchar(225) NOT NULL,
  `keterangan` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dp_listrik`
--

INSERT INTO `dp_listrik` (`id_cek`, `unit`, `meter_awal`, `meter_akhir`, `gambar`, `pemakaian`, `keterangan`) VALUES
('DPL001', 'A 01-01', '32', '44', '110-no-hanayome-35387.jpg', '34343', 'keterangan');

-- --------------------------------------------------------

--
-- Table structure for table `du_ac_public_area`
--

CREATE TABLE `du_ac_public_area` (
  `id_acpa` varchar(10) NOT NULL,
  `nama_utilitas` varchar(100) NOT NULL,
  `lokasi_utilitas` varchar(100) NOT NULL,
  `jumlah` int(50) NOT NULL,
  `keterangan` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `du_ac_public_area`
--

INSERT INTO `du_ac_public_area` (`id_acpa`, `nama_utilitas`, `lokasi_utilitas`, `jumlah`, `keterangan`) VALUES
('ACPA001', 'Angga', 'Tower A A 02-06', 5, 'hjfjdfjfj');

-- --------------------------------------------------------

--
-- Table structure for table `du_elektrical`
--

CREATE TABLE `du_elektrical` (
  `id_utilitas` varchar(10) NOT NULL,
  `nama_utilitas` varchar(100) NOT NULL,
  `lokasi_utilitas` varchar(225) NOT NULL,
  `jumlah` int(50) NOT NULL,
  `keterangan` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `du_elektrical`
--

INSERT INTO `du_elektrical` (`id_utilitas`, `nama_utilitas`, `lokasi_utilitas`, `jumlah`, `keterangan`) VALUES
('DUE001', 'AC PANASONIC', 'Basemane', 3, 'Saya ngga tau'),
('DUE002', 'AC Panasonic 1', 'TOWER A', 3, 'Saya ngga tau');

-- --------------------------------------------------------

--
-- Table structure for table `du_generator_set`
--

CREATE TABLE `du_generator_set` (
  `id_generator_set` varchar(10) NOT NULL,
  `nama_utilitas` varchar(100) NOT NULL,
  `lokasi_utilitas` varchar(100) NOT NULL,
  `jumlah` int(50) NOT NULL,
  `keterangan` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `du_generator_set`
--

INSERT INTO `du_generator_set` (`id_generator_set`, `nama_utilitas`, `lokasi_utilitas`, `jumlah`, `keterangan`) VALUES
('DUGS001', 'Andrean Ahmad Fauzi', 'Tower A A 02-06', 1, 'Ngga tau\r\n'),
('DUGS002', 'Andrean Ahmad Fauzi', 'Basemane', 1, 'Ngga tau');

-- --------------------------------------------------------

--
-- Table structure for table `du_lift`
--

CREATE TABLE `du_lift` (
  `id_lift` varchar(10) NOT NULL,
  `nama_utilitas` varchar(100) NOT NULL,
  `lokasi_utilitas` varchar(100) NOT NULL,
  `jumlah` int(50) NOT NULL,
  `keterangan` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `du_lift`
--

INSERT INTO `du_lift` (`id_lift`, `nama_utilitas`, `lokasi_utilitas`, `jumlah`, `keterangan`) VALUES
('DUL001', 'Andrean Ahmad Fauzi', 'Basemane', 3, 'Saya ngga tau');

-- --------------------------------------------------------

--
-- Table structure for table `du_pompa`
--

CREATE TABLE `du_pompa` (
  `id_pompa` varchar(10) NOT NULL,
  `nama_utilitas` varchar(100) NOT NULL,
  `lokasi_utilitas` varchar(100) NOT NULL,
  `jumlah` int(10) NOT NULL,
  `keterangan` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `du_pompa`
--

INSERT INTO `du_pompa` (`id_pompa`, `nama_utilitas`, `lokasi_utilitas`, `jumlah`, `keterangan`) VALUES
('DUP001', 'Angga', 'Tower A A 02-06', 5, 'ddwdwdwd');

-- --------------------------------------------------------

--
-- Table structure for table `du_trafo`
--

CREATE TABLE `du_trafo` (
  `id_trafo` varchar(10) NOT NULL,
  `nama_utilitas` varchar(100) NOT NULL,
  `lokasi_utilitas` varchar(100) NOT NULL,
  `jumlah` int(50) NOT NULL,
  `keterangan` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `du_trafo`
--

INSERT INTO `du_trafo` (`id_trafo`, `nama_utilitas`, `lokasi_utilitas`, `jumlah`, `keterangan`) VALUES
('DUL001', 'Andrean Ahmad Fauzi', 'Basemane', 3, 'svsvsvsv');

-- --------------------------------------------------------

--
-- Table structure for table `pm_acap`
--

CREATE TABLE `pm_acap` (
  `id_pmac` varchar(10) NOT NULL,
  `tanggal_rencana` date NOT NULL,
  `tanggal_realisasi` date NOT NULL,
  `nama_ac` varchar(50) NOT NULL,
  `lokasi_ac` varchar(50) NOT NULL,
  `nama_teknisi` varchar(50) NOT NULL,
  `progres` varchar(100) NOT NULL,
  `keterangan` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pm_acap`
--

INSERT INTO `pm_acap` (`id_pmac`, `tanggal_rencana`, `tanggal_realisasi`, `nama_ac`, `lokasi_ac`, `nama_teknisi`, `progres`, `keterangan`) VALUES
('PMC001', '2020-08-20', '2020-08-13', 'ssdd', 'Tower A A 02-06', 'sasfasfa', 'sfasfs', 'sfsafsf'),
('PMC002', '2020-08-21', '2020-08-22', 'dasfsafsaf', 'Tower A A 02-06', 'sfasfasfsfsfs', 'sfasfasf', 'sfasfsfwfaf');

-- --------------------------------------------------------

--
-- Table structure for table `pm_acten`
--

CREATE TABLE `pm_acten` (
  `id_acten` varchar(10) NOT NULL,
  `tanggal_rencana` date NOT NULL,
  `tanggal_realisasi` date NOT NULL,
  `unit` varchar(10) NOT NULL,
  `nama_teknisi` varchar(50) NOT NULL,
  `progres` varchar(10) NOT NULL,
  `keterangan` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pm_acten`
--

INSERT INTO `pm_acten` (`id_acten`, `tanggal_rencana`, `tanggal_realisasi`, `unit`, `nama_teknisi`, `progres`, `keterangan`) VALUES
('PMT001', '2020-08-19', '2020-08-28', 'A 03-04', 'Andrean', 'saya ngga ', 'fbfbfbfbfbfb'),
('PMT002', '2020-08-21', '2020-08-30', 'A 03-02', 'Andrean', 'sfasfasf', 'rewtewtwetw');

-- --------------------------------------------------------

--
-- Table structure for table `pm_elektrical`
--

CREATE TABLE `pm_elektrical` (
  `id_pmelektrik` varchar(10) NOT NULL,
  `periode` varchar(10) NOT NULL,
  `nama_utilitas` varchar(50) NOT NULL,
  `lokasi_utilitas` varchar(20) NOT NULL,
  `rencana` date NOT NULL,
  `realisasi` date NOT NULL,
  `gambar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pm_elektrical`
--

INSERT INTO `pm_elektrical` (`id_pmelektrik`, `periode`, `nama_utilitas`, `lokasi_utilitas`, `rencana`, `realisasi`, `gambar`) VALUES
('PML001', '3 bulan', 'AC PANASONIC', 'TOWER A', '2020-08-27', '2020-08-28', '83aae224-a4ef-463b-af1b-a333c97f1379.jpg'),
('PML002', '3 bulan', 'AC PANASONIC', 'Basemane', '2020-08-28', '2020-08-28', 'download.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `pm_fa`
--

CREATE TABLE `pm_fa` (
  `id_pmfa` varchar(10) NOT NULL,
  `periode` varchar(10) NOT NULL,
  `lokasi_pm` varchar(10) NOT NULL,
  `nama_unit` varchar(50) NOT NULL,
  `lokasi_utilitas` varchar(50) NOT NULL,
  `rencana` date NOT NULL,
  `realisasi` date NOT NULL,
  `break_glass` varchar(10) NOT NULL,
  `bell` varchar(10) NOT NULL,
  `telphone` varchar(10) NOT NULL,
  `box_hydrant` varchar(10) NOT NULL,
  `sprinkle` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pm_fa`
--

INSERT INTO `pm_fa` (`id_pmfa`, `periode`, `lokasi_pm`, `nama_unit`, `lokasi_utilitas`, `rencana`, `realisasi`, `break_glass`, `bell`, `telphone`, `box_hydrant`, `sprinkle`) VALUES
('PMF001', '3 Bulanan', 'Tower B', 'B 04-06', 'Basemane', '2020-08-22', '2020-08-30', 'Baik', 'Tidak Baik', 'Baik', 'Baik', 'Baik');

-- --------------------------------------------------------

--
-- Table structure for table `pm_lift`
--

CREATE TABLE `pm_lift` (
  `id_pmlift` varchar(10) NOT NULL,
  `tanggal_rencana` date NOT NULL,
  `tanggal_realisasi` date NOT NULL,
  `nama_equipmen` varchar(225) NOT NULL,
  `lokasi_equipmen` varchar(50) NOT NULL,
  `nama_vendor` varchar(225) NOT NULL,
  `nama_teknisi` varchar(225) NOT NULL,
  `alamat_vendor` varchar(1000) NOT NULL,
  `progres` varchar(50) NOT NULL,
  `keterangan` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pm_lift`
--

INSERT INTO `pm_lift` (`id_pmlift`, `tanggal_rencana`, `tanggal_realisasi`, `nama_equipmen`, `lokasi_equipmen`, `nama_vendor`, `nama_teknisi`, `alamat_vendor`, `progres`, `keterangan`) VALUES
('PML001', '2020-08-19', '2020-08-28', 'Andrean Ahmad Fauzi', 'Basemane', 'ss', 'sfsf', 'sfsf', 'sfsfs', 'sfsfsf'),
('PML002', '2020-08-21', '2020-08-29', 'Andrean Ahmad Fauzi', 'Basemane', 'fsafasg', 'fasgfaga', 'sagasgsg', 'gasgasgs', 'sgasgasg');

-- --------------------------------------------------------

--
-- Table structure for table `pm_mecha`
--

CREATE TABLE `pm_mecha` (
  `id_mecha` varchar(10) NOT NULL,
  `periode` varchar(10) NOT NULL,
  `nama_utilitas` varchar(50) NOT NULL,
  `lokasi_utilitas` varchar(50) NOT NULL,
  `rencana` date NOT NULL,
  `realisasi` date NOT NULL,
  `gambar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pm_mecha`
--

INSERT INTO `pm_mecha` (`id_mecha`, `periode`, `nama_utilitas`, `lokasi_utilitas`, `rencana`, `realisasi`, `gambar`) VALUES
('PMM001', '3 bulan', 'AC PANASONIC', 'TOWER A', '2020-08-19', '2020-08-28', '83aae224-a4ef-463b-af1b-a333c97f1379.jpg'),
('PMM002', '3 bulan', 'AC Panasonic 1', 'TOWER A', '2020-08-27', '2020-08-28', 'download.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tb_staff`
--

CREATE TABLE `tb_staff` (
  `id_staff` int(10) NOT NULL,
  `nama_staff` varchar(100) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `level` enum('engineering','tenant','security','gudang') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_staff`
--

INSERT INTO `tb_staff` (`id_staff`, `nama_staff`, `username`, `password`, `level`) VALUES
(1, 'Andrean Ahmad Fauzi', 'andrean', 'dd1602d48bcb40d7adbc75a709eb7046', 'engineering'),
(2, 'Raehan ', 'rehan', 'd35101883d6894ff4c6592f191ce3bd7', 'tenant'),
(3, 'Nur', 'nur', 'ed1e56ef963bb91c45a14a50c2f3cd95', 'security'),
(4, 'Abby', 'abby', '4636b17d0d975f911bc94c6a5ae745b6', 'gudang');

-- --------------------------------------------------------

--
-- Table structure for table `tb_unit`
--

CREATE TABLE `tb_unit` (
  `id_unit` int(11) NOT NULL,
  `unit` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_unit`
--

INSERT INTO `tb_unit` (`id_unit`, `unit`) VALUES
(40, 'A 01-01'),
(41, 'A 01-02'),
(42, 'A 01-04'),
(43, 'A 01-06'),
(44, 'A 02-01'),
(45, 'A 02-02'),
(46, 'A 02-03'),
(47, 'A 02-04'),
(48, 'A 02-05'),
(49, 'A 02-06'),
(50, 'A 03-01'),
(51, 'A 03-02'),
(52, 'A 03-03'),
(53, 'A 03-04'),
(54, 'A 03-05'),
(55, 'A 03-06'),
(56, 'A 04-01'),
(57, 'A 04-02'),
(58, 'A 04-03'),
(59, 'A 04-04'),
(60, 'A 04-05'),
(61, 'A 04-06'),
(62, 'A 05-01'),
(63, 'A 05-02'),
(64, 'A 05-03'),
(65, 'A 05-04'),
(66, 'A 05-05'),
(67, 'A 05-06'),
(68, 'A 06-01'),
(69, 'A 06-02'),
(70, 'A 06-03'),
(71, 'A 06-04'),
(72, 'A 06-05'),
(73, 'A 06-06'),
(74, 'A 07-01'),
(75, 'A 07-02'),
(76, 'A 07-03'),
(77, 'A 07-04'),
(78, 'A 07-05'),
(79, 'A 07-06'),
(80, 'A 08-01'),
(81, 'A 08-02'),
(82, 'A 08-03'),
(83, 'A 08-04'),
(84, 'A 08-05'),
(85, 'A 08-06'),
(86, 'A 09-01'),
(87, 'A 09-02'),
(88, 'A 09-03'),
(89, 'A 09-04'),
(90, 'A 09-05'),
(91, 'A 09-06'),
(92, 'A 10-01'),
(93, 'A 10-02'),
(94, 'A 10-03'),
(95, 'A 10-04'),
(96, 'A 10-05'),
(97, 'A 10-06'),
(98, 'A 11-01'),
(99, 'A 11-02'),
(100, 'A 11-03'),
(101, 'A 11-04'),
(102, 'A 11-05'),
(103, 'A 11-06'),
(104, 'A 12-01'),
(105, 'A 12-02'),
(106, 'A 12-03'),
(107, 'A 12-04'),
(108, 'A 12-05'),
(109, 'A 12-06'),
(110, 'A 13-01'),
(111, 'A 13-02'),
(112, 'A 13-03'),
(113, 'A 13-04'),
(114, 'A 13-05'),
(115, 'A 13-06'),
(116, 'A 14-01'),
(117, 'A 14-02'),
(118, 'A 14-03'),
(119, 'A 14-04'),
(120, 'A 14-05'),
(121, 'A 14-06'),
(122, 'A 15-01'),
(123, 'A 15-02'),
(124, 'A 15-03'),
(125, 'A 15-04'),
(126, 'A 15-05'),
(127, 'A 15-06'),
(128, 'A 16-01'),
(129, 'A 16-02'),
(130, 'A 16-03'),
(131, 'A 16-04'),
(132, 'A 16-05'),
(133, 'A 16-06'),
(134, 'A 17-01'),
(135, 'A 17-02'),
(136, 'A 17-03'),
(137, 'A 17-04'),
(138, 'A 17-05'),
(139, 'A 17-06'),
(140, 'A PH-01'),
(141, 'A PH-02'),
(142, 'A PH-03'),
(143, 'A PH-04'),
(144, 'B 01-01'),
(145, 'B 01-02'),
(146, 'B 01-04'),
(147, 'B 01-06'),
(148, 'B 02-01'),
(149, 'B 02-02'),
(150, 'B 02-03'),
(151, 'B 02-04'),
(152, 'B 02-05'),
(153, 'B 02-06'),
(154, 'B 03-01'),
(155, 'B 03-02'),
(156, 'B 03-03'),
(157, 'B 03-04'),
(158, 'B 03-05'),
(159, 'B 03-06'),
(160, 'B 04-01'),
(161, 'B 04-02'),
(162, 'B 04-03'),
(163, 'B 04-04'),
(164, 'B 04-05'),
(165, 'B 04-06'),
(166, 'B 05-01'),
(167, 'B 05-02'),
(168, 'B 05-03'),
(169, 'B 05-04'),
(170, 'B 05-05'),
(171, 'B 05-06'),
(172, 'B 06-01'),
(173, 'B 06-02'),
(174, 'B 06-03'),
(175, 'B 06-04'),
(176, 'B 06-05'),
(177, 'B 06-06'),
(178, 'B 07-01'),
(179, 'B 07-02'),
(180, 'B 07-03'),
(181, 'B 07-04'),
(182, 'B 07-05'),
(183, 'B 07-06'),
(184, 'B 08-01'),
(185, 'B 08-02'),
(186, 'B 08-03'),
(187, 'B 08-04'),
(188, 'B 08-05'),
(189, 'B 08-06'),
(190, 'B 09-01'),
(191, 'B 09-02'),
(192, 'B 09-03'),
(193, 'B 09-04'),
(194, 'B 09-05'),
(195, 'B 09-06'),
(196, 'B 10-01'),
(197, 'B 10-02'),
(198, 'B 10-03'),
(199, 'B 10-04'),
(200, 'B 10-05'),
(201, 'B 10-06'),
(202, 'B 11-01'),
(203, 'B 11-02'),
(204, 'B 11-03'),
(205, 'B 11-04'),
(206, 'B 11-05'),
(207, 'B 11-06'),
(208, 'B 12-01'),
(209, 'B 12-02'),
(210, 'B 12-03'),
(211, 'B 12-04'),
(212, 'B 12-05'),
(213, 'B 12-06'),
(214, 'B 13-01'),
(215, 'B 13-02'),
(216, 'B 13-03'),
(217, 'B 13-04'),
(218, 'B 13-05'),
(219, 'A 13-06'),
(220, 'A 14-01'),
(221, 'A 14-02'),
(222, 'A 14-03'),
(223, 'A 14-04'),
(224, 'B 14-05'),
(225, 'B 14-06'),
(226, 'B 15-01'),
(227, 'B 15-02'),
(228, 'B 15-03'),
(229, 'B 15-04'),
(230, 'B 15-05'),
(231, 'B 15-06'),
(232, 'B 16-01'),
(233, 'B 16-02'),
(234, 'B 16-03'),
(235, 'B 16-04'),
(236, 'B 16-05'),
(237, 'B 16-06'),
(238, 'B 17-01'),
(239, 'B 17-02'),
(240, 'B 17-03'),
(241, 'B 17-04'),
(242, 'B 17-05'),
(243, 'B 17-06'),
(244, 'B PH-01'),
(245, 'B PH-02'),
(246, 'B PH-03'),
(247, 'B PH-04');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id_user` int(10) NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `nama_lengkap`, `username`, `password`) VALUES
(1, 'Andrean Ahmad Fauzi', 'andreanahmadf@gmail.com', 'dd1602d48bcb40d7adbc75a709eb7046'),
(2, 'Nur Khusnia Noviyanti', 'nurkhusnia@gmail.com', 'dd1602d48bcb40d7adbc75a709eb7046');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `co_ac`
--
ALTER TABLE `co_ac`
  ADD PRIMARY KEY (`id_complaine`);

--
-- Indexes for table `co_me`
--
ALTER TABLE `co_me`
  ADD PRIMARY KEY (`id_complaine`);

--
-- Indexes for table `co_sipil`
--
ALTER TABLE `co_sipil`
  ADD PRIMARY KEY (`id_complaine`);

--
-- Indexes for table `dc_air`
--
ALTER TABLE `dc_air`
  ADD PRIMARY KEY (`id_air`);

--
-- Indexes for table `dc_listrik`
--
ALTER TABLE `dc_listrik`
  ADD PRIMARY KEY (`id_listrik`);

--
-- Indexes for table `dp_air`
--
ALTER TABLE `dp_air`
  ADD PRIMARY KEY (`id_cek`);

--
-- Indexes for table `dp_listrik`
--
ALTER TABLE `dp_listrik`
  ADD PRIMARY KEY (`id_cek`);

--
-- Indexes for table `du_ac_public_area`
--
ALTER TABLE `du_ac_public_area`
  ADD PRIMARY KEY (`id_acpa`);

--
-- Indexes for table `du_elektrical`
--
ALTER TABLE `du_elektrical`
  ADD PRIMARY KEY (`id_utilitas`);

--
-- Indexes for table `du_generator_set`
--
ALTER TABLE `du_generator_set`
  ADD PRIMARY KEY (`id_generator_set`);

--
-- Indexes for table `du_lift`
--
ALTER TABLE `du_lift`
  ADD PRIMARY KEY (`id_lift`);

--
-- Indexes for table `du_pompa`
--
ALTER TABLE `du_pompa`
  ADD PRIMARY KEY (`id_pompa`);

--
-- Indexes for table `du_trafo`
--
ALTER TABLE `du_trafo`
  ADD PRIMARY KEY (`id_trafo`);

--
-- Indexes for table `pm_acap`
--
ALTER TABLE `pm_acap`
  ADD PRIMARY KEY (`id_pmac`);

--
-- Indexes for table `pm_acten`
--
ALTER TABLE `pm_acten`
  ADD PRIMARY KEY (`id_acten`);

--
-- Indexes for table `pm_elektrical`
--
ALTER TABLE `pm_elektrical`
  ADD PRIMARY KEY (`id_pmelektrik`);

--
-- Indexes for table `pm_fa`
--
ALTER TABLE `pm_fa`
  ADD PRIMARY KEY (`id_pmfa`);

--
-- Indexes for table `pm_lift`
--
ALTER TABLE `pm_lift`
  ADD PRIMARY KEY (`id_pmlift`);

--
-- Indexes for table `pm_mecha`
--
ALTER TABLE `pm_mecha`
  ADD PRIMARY KEY (`id_mecha`);

--
-- Indexes for table `tb_staff`
--
ALTER TABLE `tb_staff`
  ADD PRIMARY KEY (`id_staff`);

--
-- Indexes for table `tb_unit`
--
ALTER TABLE `tb_unit`
  ADD PRIMARY KEY (`id_unit`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_staff`
--
ALTER TABLE `tb_staff`
  MODIFY `id_staff` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tb_unit`
--
ALTER TABLE `tb_unit`
  MODIFY `id_unit` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=248;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id_user` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
