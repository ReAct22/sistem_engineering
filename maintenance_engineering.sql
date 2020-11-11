-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 11 Nov 2020 pada 22.25
-- Versi server: 10.4.14-MariaDB
-- Versi PHP: 7.4.10

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
-- Struktur dari tabel `co_ac`
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
-- Dumping data untuk tabel `co_ac`
--

INSERT INTO `co_ac` (`id_complaine`, `name_tenant`, `tower`, `lantai`, `unit`, `complaine`, `keterangan`) VALUES
('AC002', 'dgegegedg', 'A', 'Lantai 2', 'A 02-01', 'gegeg', 'egwegg'),
('AC003', 'dgegegedg', 'B', 'Lantai 17', 'A 03-06', 'gegeg', 'aggasgasg'),
('AC004', 'gasg', 'A', 'Lantai 16', 'A 03-06', 'agsgsg', 'asgwegw'),
('AC005', 'Raehan Septian Dwi Putra', 'A', 'Ground', 'A 01-01', 'TV Rusak', 'sbjsbvsjvb');

-- --------------------------------------------------------

--
-- Struktur dari tabel `co_me`
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
-- Dumping data untuk tabel `co_me`
--

INSERT INTO `co_me` (`id_complaine`, `name_tenant`, `tower`, `lantai`, `unit`, `complaine`, `nama_barang`, `keterangan`) VALUES
('ME001', 'Bagas Wijaya FC', 'A', 'Lantai 5', 'A 05-05', 'Ac Rusak', 'AC', 'aaaaa'),
('ME002', 'Anjuni', 'B', 'Lantai 3', 'B 03-03', 'adadasd', 'agfsaggf', 'saffw3gfeg'),
('ME003', 'Rasidi', 'A', 'Lantai 3', 'A 03-03', 'Ac Rusak', 'AC', 'jvsbvjabv');

-- --------------------------------------------------------

--
-- Struktur dari tabel `co_sipil`
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
-- Dumping data untuk tabel `co_sipil`
--

INSERT INTO `co_sipil` (`id_complaine`, `nama_tenant`, `tower`, `lantai`, `unit`, `complaine`, `keterangan`) VALUES
('1', 'Andrean Ahmad Fauzi', 'A', 'Ground', 'A 01-02', 'TV Rusak', 'Bangsat');

-- --------------------------------------------------------

--
-- Struktur dari tabel `dc_air`
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
-- Dumping data untuk tabel `dc_air`
--

INSERT INTO `dc_air` (`id_air`, `unit`, `meter_awal`, `meter_akhir`, `gambar`, `total`, `keterangan`) VALUES
('PCA001', 'A 01-01', 32, 45, '31485-193x278.jpg', 77, 'fnsfnsnfnsd');

-- --------------------------------------------------------

--
-- Struktur dari tabel `dc_listrik`
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

-- --------------------------------------------------------

--
-- Struktur dari tabel `dp_air`
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
-- Dumping data untuk tabel `dp_air`
--

INSERT INTO `dp_air` (`id_cek`, `unit`, `meter_awal`, `meter_akhir`, `gambar`, `pemakaian`, `keterangan`) VALUES
('DPA002', 'A 01-01', '32', '44', '110-no-hanayome-35387.jpg', '76', 'adnkndlsavbsvbasvbvv'),
('DPA003', 'A 01-01', '32', '45', 'Little-Witch-Nobeta-PC-Version-Full-Game-Setup-Free-Download.jpg', '77', 'snasvjsva');

-- --------------------------------------------------------

--
-- Struktur dari tabel `dp_listrik`
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
-- Dumping data untuk tabel `dp_listrik`
--

INSERT INTO `dp_listrik` (`id_cek`, `unit`, `meter_awal`, `meter_akhir`, `gambar`, `pemakaian`, `keterangan`) VALUES
('DPL001', 'A 01-01', '32', '44', '110-no-hanayome-35387.jpg', '34343', 'c s ckasvkjsbvjsabvj'),
('DPL005', 'A 01-02', '11', '44', '31485-193x278.jpg', '55', 'sknvlajsbvjas\r\n');

-- --------------------------------------------------------

--
-- Struktur dari tabel `du_ac_public_area`
--

CREATE TABLE `du_ac_public_area` (
  `id_acpa` varchar(10) NOT NULL,
  `nama_utilitas` varchar(100) NOT NULL,
  `lokasi_utilitas` varchar(100) NOT NULL,
  `jumlah` int(50) NOT NULL,
  `keterangan` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `du_ac_public_area`
--

INSERT INTO `du_ac_public_area` (`id_acpa`, `nama_utilitas`, `lokasi_utilitas`, `jumlah`, `keterangan`) VALUES
('ACPA001', 'Angga', 'Tower A A 02-06', 5, 'hjfjdfjfj');

-- --------------------------------------------------------

--
-- Struktur dari tabel `du_elektrical`
--

CREATE TABLE `du_elektrical` (
  `id_utilitas` varchar(10) NOT NULL,
  `nama_utilitas` varchar(100) NOT NULL,
  `lokasi_utilitas` varchar(225) NOT NULL,
  `jumlah` int(50) NOT NULL,
  `keterangan` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `du_elektrical`
--

INSERT INTO `du_elektrical` (`id_utilitas`, `nama_utilitas`, `lokasi_utilitas`, `jumlah`, `keterangan`) VALUES
('DUE001', 'AC PANASONIC', 'Basemane', 3, 'Saya ngga tau'),
('DUE002', 'AC Panasonic 1', 'TOWER A', 3, 'Saya ngga tau'),
('DUE003', 'TV', 'Tower A', 3, 'sansknvaksvalv\r\n'),
('DUE004', 'AC Panasonic', 'Tower A A 02-06', 1, 'svavadvsveefFsvsvac'),
('DUE005', 'Andrean Ahmad Fauzi', 'Basemane', 4, 'kvnaskv');

-- --------------------------------------------------------

--
-- Struktur dari tabel `du_generator_set`
--

CREATE TABLE `du_generator_set` (
  `id_generator_set` varchar(10) NOT NULL,
  `nama_utilitas` varchar(100) NOT NULL,
  `lokasi_utilitas` varchar(100) NOT NULL,
  `jumlah` int(50) NOT NULL,
  `keterangan` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `du_generator_set`
--

INSERT INTO `du_generator_set` (`id_generator_set`, `nama_utilitas`, `lokasi_utilitas`, `jumlah`, `keterangan`) VALUES
('DUGS001', 'Andrean Ahmad Fauzi', 'Tower A A 02-06', 1, 'Ngga tau\r\n'),
('DUGS002', 'Andrean Ahmad Fauzi', 'Basemane', 1, 'Ngga tau');

-- --------------------------------------------------------

--
-- Struktur dari tabel `du_lift`
--

CREATE TABLE `du_lift` (
  `id_lift` varchar(10) NOT NULL,
  `nama_utilitas` varchar(100) NOT NULL,
  `lokasi_utilitas` varchar(100) NOT NULL,
  `jumlah` int(50) NOT NULL,
  `keterangan` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `du_lift`
--

INSERT INTO `du_lift` (`id_lift`, `nama_utilitas`, `lokasi_utilitas`, `jumlah`, `keterangan`) VALUES
('DUL001', 'Andrean Ahmad Fauzi', 'Basemane', 3, 'Saya ngga tau'),
('DUL002', 'Angga', 'Basemane', 1, 'scsnsknvlja vav'),
('DUL003', 'Angga', 'A A 03-01', 1, 'vsavqevsvasv'),
('DUL004', 'Andrean Ahmad Fauzi', 'Basemane', 5, 'fswfwfwqfwcsav');

-- --------------------------------------------------------

--
-- Struktur dari tabel `du_me`
--

CREATE TABLE `du_me` (
  `id_me` varchar(10) NOT NULL,
  `nama_equipment` varchar(50) NOT NULL,
  `lokasi_utilitas` varchar(50) NOT NULL,
  `jumlah` int(50) NOT NULL,
  `spesifikasi` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `du_me`
--

INSERT INTO `du_me` (`id_me`, `nama_equipment`, `lokasi_utilitas`, `jumlah`, `spesifikasi`) VALUES
('KME001', 'AC Panasonic', 'Tower A A 02-06', 1, 'Saya ngga tau');

-- --------------------------------------------------------

--
-- Struktur dari tabel `du_pompa`
--

CREATE TABLE `du_pompa` (
  `id_pompa` varchar(10) NOT NULL,
  `nama_utilitas` varchar(100) NOT NULL,
  `lokasi_utilitas` varchar(100) NOT NULL,
  `jumlah` int(10) NOT NULL,
  `keterangan` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `du_pompa`
--

INSERT INTO `du_pompa` (`id_pompa`, `nama_utilitas`, `lokasi_utilitas`, `jumlah`, `keterangan`) VALUES
('DUP001', 'Angga', 'Tower A A 02-06', 5, 'ddwdwdwd'),
('DUP002', 'Andrean Ahmad Fauzi', 'Basemane', 3, 'fndndfn');

-- --------------------------------------------------------

--
-- Struktur dari tabel `du_trafo`
--

CREATE TABLE `du_trafo` (
  `id_trafo` varchar(10) NOT NULL,
  `nama_utilitas` varchar(100) NOT NULL,
  `lokasi_utilitas` varchar(100) NOT NULL,
  `jumlah` int(50) NOT NULL,
  `keterangan` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `du_trafo`
--

INSERT INTO `du_trafo` (`id_trafo`, `nama_utilitas`, `lokasi_utilitas`, `jumlah`, `keterangan`) VALUES
('DUL001', 'Andrean Ahmad Fauzi', 'Basemane', 3, 'svsvsvsv');

-- --------------------------------------------------------

--
-- Struktur dari tabel `d_log_book`
--

CREATE TABLE `d_log_book` (
  `id_log_book` varchar(10) NOT NULL,
  `nama` varchar(250) NOT NULL,
  `tgl` date NOT NULL,
  `document` varchar(250) NOT NULL,
  `package` varchar(250) NOT NULL,
  `unit_key` varchar(250) NOT NULL,
  `inventori_key` varchar(250) NOT NULL,
  `acces_card` varchar(250) NOT NULL,
  `car_keys` varchar(250) NOT NULL,
  `l` varchar(250) NOT NULL,
  `payment` varchar(250) NOT NULL,
  `message` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `d_log_book`
--

INSERT INTO `d_log_book` (`id_log_book`, `nama`, `tgl`, `document`, `package`, `unit_key`, `inventori_key`, `acces_card`, `car_keys`, `l`, `payment`, `message`) VALUES
('NLB001', 'Alif Abby Damarhuri ', '2020-10-04', 'adada', 'adad', 'adad', 'adad', 'adad', 'adad', 'L', 'adada', 'adad'),
('NLB002', 'Varel Pura Jaya', '2020-10-04', 'adada', 'adad', 'adad', 'adad', 'adad', 'adad', 'F', 'adada', 'adad'),
('NLB003', 'Andrean Ahmad Fauzi', '2020-10-05', 'adada', 'adad', 'adad', 'adad', 'adad', 'adad', 'L', 'adada', 'adad'),
('NLB004', 'Varel Pura Jaya', '2020-10-06', 'adada', 'adad', 'adad', 'adad', 'adad', 'adad', 'L', 'adada', 'adad');

-- --------------------------------------------------------

--
-- Struktur dari tabel `d_parking`
--

CREATE TABLE `d_parking` (
  `id_tenant` varchar(10) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `floor` varchar(100) NOT NULL,
  `unit` varchar(100) NOT NULL,
  `no_park` varchar(100) NOT NULL,
  `no_plat` varchar(100) NOT NULL,
  `nama_driver` varchar(100) NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `d_parking`
--

INSERT INTO `d_parking` (`id_tenant`, `nama`, `floor`, `unit`, `no_park`, `no_plat`, `nama_driver`, `keterangan`) VALUES
('NPL001', 'Alif Abby Damarhuri ', 'floor 2', 'A 02 01', '001', 'B 00114 FG', 'jago', 'gdgsgdgs'),
('NPL002', 'Alif Abby Damarhuri ', 'floor 2', 'A 02 01', '001', 'B 00114 FG', 'jago', 'bfsdgdgsd'),
('NPL003', 'Alif Abby Damarhuri ', 'floor 3', 'A 02 01', '001', 'B 00114 FG', 'jago', 'gsdgdgdgee'),
('NPL004', 'Andrean Ahmad Fauzi', 'floor 5', 'A 02 01', '001', 'B 00114 FG', 'jago', 'ghyyjthh');

-- --------------------------------------------------------

--
-- Struktur dari tabel `d_request`
--

CREATE TABLE `d_request` (
  `id_request` varchar(10) NOT NULL,
  `floor` varchar(100) NOT NULL,
  `unit` varchar(100) NOT NULL,
  `ext` varchar(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `company` varchar(100) NOT NULL,
  `renmark` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `d_request`
--

INSERT INTO `d_request` (`id_request`, `floor`, `unit`, `ext`, `nama`, `company`, `renmark`) VALUES
('NRL001', 'floor 2', 'A 02 01', 'saya ngga tau', 'Alif Abby Damarhuri ', 'Dubes Bang Jago', 'jago'),
('NRL002', 'floor 3', 'A 02 01', 'saya ngga tau', 'Alif Abby Damarhuri ', 'Andrean ahmad fazui', 'jago'),
('NRL003', 'floor 5', 'A 02 01', 'saya ngga tau', 'Alif Abby Damarhuri ', 'Andrean ahmad fazui', 'jago'),
('NRL004', 'floor 2', 'A 02 01', 'saya ngga tau', 'Alif Abby Damarhuri ', 'Andrean ahmad fazui', 'jago');

-- --------------------------------------------------------

--
-- Struktur dari tabel `d_security`
--

CREATE TABLE `d_security` (
  `nik_security` varchar(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `tempat_lhr` varchar(100) NOT NULL,
  `tgl_lhr` date NOT NULL,
  `tmt` date NOT NULL,
  `tb` varchar(10) NOT NULL,
  `bb` varchar(10) NOT NULL,
  `nik_ktp` varchar(100) NOT NULL,
  `alamat` text NOT NULL,
  `agama` varchar(100) NOT NULL,
  `pendidikan` varchar(100) NOT NULL,
  `no_tlp` varchar(100) NOT NULL,
  `jabatan` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `d_security`
--

INSERT INTO `d_security` (`nik_security`, `nama`, `tempat_lhr`, `tgl_lhr`, `tmt`, `tb`, `bb`, `nik_ktp`, `alamat`, `agama`, `pendidikan`, `no_tlp`, `jabatan`, `status`) VALUES
('11222334', 'Alif Abby Damarhuri ', 'Jakarat', '2020-10-06', '2020-10-29', '150', '88', '1234567890', 'vdvasvsv', 'Islam', 'SMA', '08997776', 'Staff', 'Jomblo'),
('11222334', 'Andrean Ahmad Fauzi', 'Jakarat', '2001-01-03', '2020-10-20', '165', '95', '1234567890', 'assafsf', 'Islam', 'SMA', '08997776', 'Staff', 'Jomblo');

-- --------------------------------------------------------

--
-- Struktur dari tabel `hk_cl`
--

CREATE TABLE `hk_cl` (
  `no_check` varchar(100) NOT NULL,
  `floor` varchar(100) NOT NULL,
  `desk_floor` varchar(100) NOT NULL,
  `perkerjaan` varchar(100) NOT NULL,
  `kondisi` varchar(100) NOT NULL,
  `action_by` varchar(100) NOT NULL,
  `nama_petugas` varchar(100) NOT NULL,
  `catatan` text NOT NULL,
  `target` varchar(100) NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `hk_cl`
--

INSERT INTO `hk_cl` (`no_check`, `floor`, `desk_floor`, `perkerjaan`, `kondisi`, `action_by`, `nama_petugas`, `catatan`, `target`, `keterangan`) VALUES
('CLC001', '1', 'Lanti 1 aja ', 'adada', 'adad', 'HK', 'andrean', 'sasf', 'sfasfs', 'svasvsav'),
('CLC002', '1', 'Lanti 1 aja ', 'adada', 'adad', 'Sec', 'andrean', 'sasf', 'sfasfs', 'dvadvasvasv'),
('CLC003', '3', 'Lanti 1 aja ', 'adada', 'adad', 'HK', 'andrean', 'sasf', 'sfasfs', 'dvavasv'),
('CLC004', '3', 'Lanti 1 aja ', 'adada', 'adad', 'HK', 'Dhimas', 'svasvasv', 'svas', 'svasvsav');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jb_cs`
--

CREATE TABLE `jb_cs` (
  `no_job` varchar(10) NOT NULL,
  `hari` varchar(20) NOT NULL,
  `tgl` date NOT NULL,
  `waktu_shift` varchar(100) NOT NULL,
  `area` varchar(100) NOT NULL,
  `petugas` varchar(100) NOT NULL,
  `uraian_tugas` text NOT NULL,
  `supervisor` varchar(100) NOT NULL,
  `tugas_supervisor` text NOT NULL,
  `shift_supervisor` varchar(100) NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `jb_cs`
--

INSERT INTO `jb_cs` (`no_job`, `hari`, `tgl`, `waktu_shift`, `area`, `petugas`, `uraian_tugas`, `supervisor`, `tugas_supervisor`, `shift_supervisor`, `keterangan`) VALUES
('JDC001', 'Selasa', '2020-10-23', 'Shift 1', 'Lobby Utama', 'Andrean Ahmad Fauzi', 'sascasc', 'scasc', 'scasc', 'Shift 2', 'savasvasvsav'),
('JDC002', 'Selasa', '2020-10-23', 'Shift 1', 'Coridor PH-lt.10', 'Dhimas', 'sascasc', 'scasc', 'scasc', 'Shift 1', 'vasvsavasv'),
('JDC003', 'Selasa', '2020-10-24', 'Shift 2', 'Coridor 9-Ground', 'Andrean Ahmad Fauzi', 'sascasc', 'scasc', 'scasc', 'Shift 3', 'vasvasvsav'),
('JDC004', 'Selasa', '2020-10-30', 'Shift 3', 'Swimming Pool', 'Dhimas', 'sascasc', 'scasc', 'avsavsav', 'Shift 3', 'vavasvsav');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jb_st`
--

CREATE TABLE `jb_st` (
  `no_perawatan` varchar(10) NOT NULL,
  `tgl` date NOT NULL,
  `nama_petugas` varchar(100) NOT NULL,
  `area` varchar(100) NOT NULL,
  `desk_zona` text NOT NULL,
  `frekuensi` varchar(100) NOT NULL,
  `uraian_perkerjaan` text NOT NULL,
  `catatan` text NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `jb_st`
--

INSERT INTO `jb_st` (`no_perawatan`, `tgl`, `nama_petugas`, `area`, `desk_zona`, `frekuensi`, `uraian_perkerjaan`, `catatan`, `keterangan`) VALUES
('JBT001', '2020-10-23', 'Dhimas', '2', 'ssvsvsavasv', 'M', 'svsavasv', 'svasvasv', 'svasbabss'),
('JBT002', '2020-10-24', 'andrean', '1', 'ssvsvsavasv', 'M', 'cascsavasv', 'vasvasvsav', 'svasvsvavasv'),
('JBT003', '2020-10-31', 'Dhimas', '3', 'ssvsvsavasv', 'B.2B', 'svsavasv', 'sasf', 'dvasvasvs'),
('JBT004', '2020-10-31', 'Dhimas', '3', 'ssvsvsavasv', 'B.2B', 'svsavasv', 'svasvasv', 'svsavasvsav');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ls_th`
--

CREATE TABLE `ls_th` (
  `no_check` varchar(10) NOT NULL,
  `check_list` varchar(100) NOT NULL,
  `tgl` date NOT NULL,
  `jenis_tanaman` varchar(100) NOT NULL,
  `area` varchar(100) NOT NULL,
  `kondisi` varchar(100) NOT NULL,
  `desk_kondisi` text NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `ls_th`
--

INSERT INTO `ls_th` (`no_check`, `check_list`, `tgl`, `jenis_tanaman`, `area`, `kondisi`, `desk_kondisi`, `keterangan`) VALUES
('CLT001', '1', '2020-10-24', 'dbd', 'dbsdb', 'dbsdb', 'dbsdb', 'dbsdb'),
('CLT002', '2', '2020-10-17', 'dbd', 'dbsdb', 'adad', 'dbsdb', 'bdsjbvldjbvladbv'),
('CLT003', '4', '2020-11-01', 'reerer', 'dbsdb', 'adad', 'dbsdb', 'sdbdbsdb'),
('CLT004', '2', '2020-10-31', 'reerer', 'dbsdb', 'adad', 'dbsdb', 'bsdbdbsdb');

-- --------------------------------------------------------

--
-- Struktur dari tabel `negara1`
--

CREATE TABLE `negara1` (
  `negara` varchar(33) DEFAULT NULL,
  `COL 2` varchar(7) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `negara1`
--

INSERT INTO `negara1` (`negara`, `COL 2`) VALUES
(';', NULL),
('Afghanistan;', NULL),
(' Albania;', NULL),
('Algeria;', NULL),
('Andorra;', NULL),
('Angola;', NULL),
('Antigua & Barbuda;', NULL),
('Argentina;', NULL),
('Armenia;', NULL),
('Australia;', NULL),
('Austria;', NULL),
('Azerbaijan;', NULL),
('Bahamas;', NULL),
('Bahrain;', NULL),
('Bangladesh;', NULL),
('Barbados;', NULL),
('Belarus;', NULL),
('Belgium;', NULL),
('Belize;', NULL),
('Benin;', NULL),
('Bhutan;', NULL),
('Bolivia;', NULL),
('Bosnia & Herzegovina;', NULL),
('Botswana;', NULL),
('Brazil;', NULL),
('Brunei;', NULL),
('Bulgaria;', NULL),
('Burkina Faso;', NULL),
('Burundi;', NULL),
('Cambodia;', NULL),
('Cameroon;', NULL),
('Canada;', NULL),
('Cape Verde;', NULL),
('Central African Republic;', NULL),
('Chad;', NULL),
('Chile;', NULL),
('China;', NULL),
('Colombia;', NULL),
('Comoros;', NULL),
('Republic of the Congo;', NULL),
('Costa Rica;', NULL),
('Ivory Coast;', NULL),
('Croatia;', NULL),
('Cuba;', NULL),
('Cyprus;', NULL),
('Czech Republic;', NULL),
('Denmark;', NULL),
('Djibouti;', NULL),
('Dominica;', NULL),
('Dominican Republic;', NULL),
('East Timor;', NULL),
('Ecuador;', NULL),
('Egypt;', NULL),
('El Salvador;', NULL),
('Equatorial Guinea;', NULL),
('Eritrea;', NULL),
('Estonia;', NULL),
('Ethiopia;', NULL),
('Fiji;', NULL),
('Finland;', NULL),
('France;', NULL),
('Gabon;', NULL),
('The Gambia;', NULL),
('Georgia;', NULL),
('Germany;', NULL),
('Ghana;', NULL),
('Greece;', NULL),
('Grenada;', NULL),
('Guatemala;', NULL),
('Guinea;', NULL),
('Guinea Bissau;', NULL),
('Guyana;', NULL),
('Haiti;', NULL),
('Honduras;', NULL),
('Hungary;', NULL),
('Iceland;', NULL),
('India;', NULL),
('Indonesia;', NULL),
('Iran;', NULL),
('Iraq;', NULL),
('Ireland;', NULL),
('Israel;', NULL),
('Italy;', NULL),
('Jamaica;', NULL),
('Japan;', NULL),
('Jordan;', NULL),
('Kazakhstan;', NULL),
('Kenya;', NULL),
('Kiribati;', NULL),
('Korea', ' North;'),
('Korea', ' South;'),
('Kuwait;', NULL),
('Kyrgyzstan;', NULL),
('Laos;', NULL),
('Latvia;', NULL),
('Lebanon;', NULL),
('Libya;', NULL),
('Liechtenstein;', NULL),
('Luxembourg;', NULL),
('Macedonia;', NULL),
('Madagascar;', NULL),
('Malawi;', NULL),
('Malaysia;', NULL),
('Maldives;', NULL),
('Mali;', NULL),
('Malta;', NULL),
('Marshall Islands;', NULL),
('Mauritania;', NULL),
('Mauritius;', NULL),
('Mexico;', NULL),
('Federated States of Micronesia;', NULL),
('Moldova;', NULL),
('Monaco;', NULL),
('Mongolia;', NULL),
('Montenegro;', NULL),
('Morocco;', NULL),
('Mozambique;', NULL),
('Myanmar;', NULL),
('Namibia;', NULL),
('Nauru;', NULL),
('Nepal;', NULL),
('Netherlands;', NULL),
('New Zealand;', NULL),
('Nicaragua;', NULL),
('Niger;', NULL),
('Nigeria;', NULL),
('Norway;', NULL),
('Oman;', NULL),
('Pakistan;', NULL),
('Palau;', NULL),
('Panama;', NULL),
('Papua New Guinea;', NULL),
('Paraguay;', NULL),
('Peru;', NULL),
('Philippines;', NULL),
('Poland;', NULL),
('Portugal;', NULL),
('Qatar;', NULL),
('Romania;', NULL),
('Russia;', NULL),
('Rwanda;', NULL),
('Saint Kitts and Nevis;', NULL),
('Saint Lucia;', NULL),
('Saint Vincent and the Grenadines;', NULL),
('Samoa;', NULL),
('San Marino;', NULL),
('Sao Tome and Principe;', NULL),
('Saudi Arabia;', NULL),
('Senegal;', NULL),
('Serbia;', NULL),
('Seychelles;', NULL),
('Sierra Leone;', NULL),
('Singapore;', NULL),
('Slovakia;', NULL),
('Slovenia;', NULL),
('Solomon Islands;', NULL),
('Somalia;', NULL),
('South Africa;', NULL),
('Spain;', NULL),
('Sri Lanka;', NULL),
('Sudan;', NULL),
('Suriname;', NULL),
('Swaziland;', NULL),
('Sweden;', NULL),
('Switzerland;', NULL),
('Syria;', NULL),
('Tajikistan;', NULL),
('Tanzania;', NULL),
('Thailand;', NULL),
('Togo;', NULL),
('Tonga;', NULL),
('Trinidad and Tobago;', NULL),
('Tunisia;', NULL),
('Turkey;', NULL),
('Turkmenistan;', NULL),
('Tuvalu;', NULL),
('Uganda;', NULL),
('Ukraine;', NULL),
('United Arab Emirates;', NULL),
('United Kingdom;', NULL),
('United States;', NULL),
('Uruguay;', NULL),
('Uzbekistan;', NULL),
('Vanuatu;', NULL),
('Vatican City;', NULL),
('Venezuela;', NULL),
('Vietnam;', NULL),
('Yemen;', NULL),
('Zambia;', NULL),
('Zimbabwe;', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pm_acap`
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
-- Dumping data untuk tabel `pm_acap`
--

INSERT INTO `pm_acap` (`id_pmac`, `tanggal_rencana`, `tanggal_realisasi`, `nama_ac`, `lokasi_ac`, `nama_teknisi`, `progres`, `keterangan`) VALUES
('PMC001', '2020-10-02', '2020-09-25', 'Angga', 'Tower A A 02-06', 'Saya ngga tau', 'saya ngga tau', 'knlavljav');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pm_acten`
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
-- Dumping data untuk tabel `pm_acten`
--

INSERT INTO `pm_acten` (`id_acten`, `tanggal_rencana`, `tanggal_realisasi`, `unit`, `nama_teknisi`, `progres`, `keterangan`) VALUES
('PMT001', '2020-08-20', '2020-08-28', 'A 03-04', 'Andrean', 'saya ngga ', 'fbfbfbfbfbfb');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pm_elektrical`
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

-- --------------------------------------------------------

--
-- Struktur dari tabel `pm_fa`
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
-- Dumping data untuk tabel `pm_fa`
--

INSERT INTO `pm_fa` (`id_pmfa`, `periode`, `lokasi_pm`, `nama_unit`, `lokasi_utilitas`, `rencana`, `realisasi`, `break_glass`, `bell`, `telphone`, `box_hydrant`, `sprinkle`) VALUES
('PMF001', '3 Bulanan', 'Tower B', 'B 04-06', 'Basemane', '2020-08-22', '2020-08-30', 'Baik', 'Tidak Baik', 'Baik', 'Baik', 'Baik'),
('PMF002', '3 Bulanan', 'Basemane', 'A 02-04', 'Basemane', '2020-08-24', '2020-08-25', 'Baik', 'Tidak Baik', 'Baik', 'Baik', 'Tidak Baik');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pm_geset`
--

CREATE TABLE `pm_geset` (
  `id_geset` varchar(10) NOT NULL,
  `periode` varchar(50) NOT NULL,
  `nama_utilitas` varchar(50) NOT NULL,
  `lokasi_utilitas` varchar(50) NOT NULL,
  `rencana` date NOT NULL,
  `realisasi` date NOT NULL,
  `nama_vendor` varchar(50) NOT NULL,
  `alamat_vendor` text NOT NULL,
  `nama_teknisi` varchar(50) NOT NULL,
  `jenis_kerjaan` varchar(50) NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `rekomendasi` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pm_geset`
--

INSERT INTO `pm_geset` (`id_geset`, `periode`, `nama_utilitas`, `lokasi_utilitas`, `rencana`, `realisasi`, `nama_vendor`, `alamat_vendor`, `nama_teknisi`, `jenis_kerjaan`, `gambar`, `rekomendasi`) VALUES
('PMG001', 'Tahunan', 'AC Panasonic', 'Basemane', '2020-08-26', '2020-08-28', 'Saya ngga tau', 'Saya ngga tau pak sumpah', 'Saya ngga tau', 'svasvsvsv', 'business-hub-ecommerce-website-template.jpg', 'svsavasvfwfscas'),
('PMG002', 'Tahunan', 'AC Panasonic', 'Basemane', '2020-08-30', '2020-09-05', 'Saya ngga tau', 'sdshf', 'dbdbdb', 'svasvsvsv', '5LYzTBVoS196gvYvw3zjwDmcfgQNDrjz5dzwZ30U6mc.png', 'svsavasvfwfscas');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pm_gt`
--

CREATE TABLE `pm_gt` (
  `id_gt` varchar(10) NOT NULL,
  `periode` varchar(10) NOT NULL,
  `nama_utilitas` varchar(50) NOT NULL,
  `lokasi_utilitas` varchar(50) NOT NULL,
  `rencana` date NOT NULL,
  `realisasi` date NOT NULL,
  `nama_teknisi` varchar(50) NOT NULL,
  `jenis_kerjaan` varchar(50) NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `rekomendasi` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pm_gt`
--

INSERT INTO `pm_gt` (`id_gt`, `periode`, `nama_utilitas`, `lokasi_utilitas`, `rencana`, `realisasi`, `nama_teknisi`, `jenis_kerjaan`, `gambar`, `rekomendasi`) VALUES
('PGT001', '1 Tahun', 'AC Panasonic 2', 'Tower A', '2020-08-29', '2020-09-04', 'Saya ngga tau', 'svasvsvsv', '31485-193x278.jpg', 'svsavasvfwfscas');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pm_gwt`
--

CREATE TABLE `pm_gwt` (
  `id_pmgwt` varchar(10) NOT NULL,
  `periode` varchar(10) NOT NULL,
  `nama_utilitas` varchar(50) NOT NULL,
  `lokasi_utilitas` varchar(50) NOT NULL,
  `rencana` date NOT NULL,
  `realisasi` date NOT NULL,
  `nama_vendor` varchar(50) NOT NULL,
  `alamat_vendor` text NOT NULL,
  `nama_teknisi` varchar(50) NOT NULL,
  `jenis_kerjaan` varchar(50) NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `rekomendasi` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pm_gwt`
--

INSERT INTO `pm_gwt` (`id_pmgwt`, `periode`, `nama_utilitas`, `lokasi_utilitas`, `rencana`, `realisasi`, `nama_vendor`, `alamat_vendor`, `nama_teknisi`, `jenis_kerjaan`, `gambar`, `rekomendasi`) VALUES
('PMG002', '6 Bulanan', 'AC Panasonic 2', 'Basemane', '2020-08-28', '2020-09-05', 'Saya ngga tau', 'svasass', 'Saya ngga tau', 'svasvsvsv', '31485-193x278.jpg', 'svsavasvfwfscas'),
('PMG003', '6 Bulanan', 'AC Panasonic', 'svsvsav', '2020-08-29', '2020-08-26', 'fnsnd', 'bdbdbebeab', 'babdeb', 'abebe', 'unordinary-193x278.jpg', 'gmmdgmgdm'),
('PMG004', '6 Bulanan', 'AC Panasonic', 'Basemane', '2020-08-28', '2020-08-26', 'Saya ngga tau', 'ssdsbsb', 'Saya ngga tau', 'svasvsvsv', '673288_d51e13be-b076-4d05-a8b9-8b753ea99344.jpg', 'svsavasvfwfscas');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pm_infrared`
--

CREATE TABLE `pm_infrared` (
  `id_infrared` varchar(10) NOT NULL,
  `periode` varchar(10) NOT NULL,
  `nama_utilitas` varchar(50) NOT NULL,
  `lokasi_utilitas` varchar(50) NOT NULL,
  `rencana` date NOT NULL,
  `realisasi` date NOT NULL,
  `nama_vendor` varchar(50) NOT NULL,
  `alamat_vendor` text NOT NULL,
  `nama_teknisi` varchar(50) NOT NULL,
  `jenis_kerjaan` varchar(50) NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `rekomendasi` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pm_infrared`
--

INSERT INTO `pm_infrared` (`id_infrared`, `periode`, `nama_utilitas`, `lokasi_utilitas`, `rencana`, `realisasi`, `nama_vendor`, `alamat_vendor`, `nama_teknisi`, `jenis_kerjaan`, `gambar`, `rekomendasi`) VALUES
('KPI001', 'Tahunan', 'AC Panasonic', 'Basemane', '2020-08-28', '2020-08-29', 'Saya ngga tau', 'dgsfhfhsdhdagasafas', 'Saya ngga tau', 'svasvsvsv', '5LYzTBVoS196gvYvw3zjwDmcfgQNDrjz5dzwZ30U6mc.png', 'afasfsf'),
('KPI002', 'Tahunan', 'AC PANASONIC', 'Basemane', '2020-08-31', '2020-08-31', 'Saya ngga tau', 'apaan aja', 'ssassv', 'svasvsvsv', '110-no-hanayome-35387.jpg', 'afasfsf'),
('KPI004', '6 Bulanan', 'AC PANASONIC', 'Basemane', '2020-08-29', '2020-08-31', 'Saya ngga tau', 'knljj', 'ssassv', 'svasvsvsv', 'business-hub-ecommerce-website-template.jpg', 'afasfsf');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pm_lift`
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
-- Dumping data untuk tabel `pm_lift`
--

INSERT INTO `pm_lift` (`id_pmlift`, `tanggal_rencana`, `tanggal_realisasi`, `nama_equipmen`, `lokasi_equipmen`, `nama_vendor`, `nama_teknisi`, `alamat_vendor`, `progres`, `keterangan`) VALUES
('PML001', '2020-08-19', '2020-08-28', 'Angga', 'A A 03-01', 'ss', 'sfsf', 'sfsf', 'sfsfs', 'sfsfsf');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pm_mecha`
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
-- Dumping data untuk tabel `pm_mecha`
--

INSERT INTO `pm_mecha` (`id_mecha`, `periode`, `nama_utilitas`, `lokasi_utilitas`, `rencana`, `realisasi`, `gambar`) VALUES
('PMM001', '3 bulan', 'AC PANASONIC', 'TOWER A', '2020-08-19', '2020-08-28', '83aae224-a4ef-463b-af1b-a333c97f1379.jpg'),
('PMM002', '3 bulan', 'AC Panasonic 1', 'TOWER A', '2020-08-27', '2020-08-28', 'download.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pm_pl`
--

CREATE TABLE `pm_pl` (
  `id_pl` varchar(10) NOT NULL,
  `periode` varchar(50) NOT NULL,
  `nama_utilitas` varchar(50) NOT NULL,
  `lokasi_utilitas` varchar(50) NOT NULL,
  `rencana` date NOT NULL,
  `realisasi` date NOT NULL,
  `nama_vendor` varchar(50) NOT NULL,
  `alamat_vendor` text NOT NULL,
  `nama_teknisi` varchar(50) NOT NULL,
  `jenis_kerjaan` varchar(50) NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `rekomendasi` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pm_pl`
--

INSERT INTO `pm_pl` (`id_pl`, `periode`, `nama_utilitas`, `lokasi_utilitas`, `rencana`, `realisasi`, `nama_vendor`, `alamat_vendor`, `nama_teknisi`, `jenis_kerjaan`, `gambar`, `rekomendasi`) VALUES
('KPL001', 'Tahunan', 'AC Panasonic', 'Basemane', '2020-08-27', '2020-08-29', 'Saya ngga tau', 'Puri Citayam Permai 02 Block C4/11A', 'Saya ngga tau', 'svasvsvsv', '673288_d51e13be-b076-4d05-a8b9-8b753ea99344.jpg', 'svsavasvfwfscas');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pm_preasure_fan`
--

CREATE TABLE `pm_preasure_fan` (
  `id_pf` varchar(10) NOT NULL,
  `periode` varchar(10) NOT NULL,
  `nama_utilitas` varchar(50) NOT NULL,
  `lokasi_utilitas` varchar(50) NOT NULL,
  `rencana` date NOT NULL,
  `realisasi` date NOT NULL,
  `nama_vendor` varchar(50) NOT NULL,
  `alamat_vendor` text NOT NULL,
  `nama_teknisi` varchar(50) NOT NULL,
  `jenis_kerjaan` varchar(50) NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `rekomendasi` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pm_preasure_fan`
--

INSERT INTO `pm_preasure_fan` (`id_pf`, `periode`, `nama_utilitas`, `lokasi_utilitas`, `rencana`, `realisasi`, `nama_vendor`, `alamat_vendor`, `nama_teknisi`, `jenis_kerjaan`, `gambar`, `rekomendasi`) VALUES
('PMP001', '6 Bulanan', 'AC Panasonic', 'Basemane', '2020-08-26', '2020-08-29', 'Saya ngga tau', 'Ngga atau Saya', 'Saya ngga tau', 'svasvsvsv', '5LYzTBVoS196gvYvw3zjwDmcfgQNDrjz5dzwZ30U6mc.png', 'svsavasvfwfscas'),
('PMP002', '6 Bulanan', 'AC Panasonic', 'Basemane', '2020-08-26', '2020-08-27', 'Saya ngga tau', 'csavsvasv', 'sasfasfa', 'svasvsvsv', '1-13633_instagram-png-instagram-icon-transparent-background-instagram-logo.png', 'svsavasvfwfscas');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pm_ps`
--

CREATE TABLE `pm_ps` (
  `id_ps` varchar(10) NOT NULL,
  `periode` varchar(50) NOT NULL,
  `nama_utilitas` varchar(50) NOT NULL,
  `lokasi_utilitas` varchar(50) NOT NULL,
  `rencana` date NOT NULL,
  `realisasi` date NOT NULL,
  `nama_vendor` varchar(50) NOT NULL,
  `alamat_vendor` text NOT NULL,
  `nama_teknisi` varchar(50) NOT NULL,
  `jenis_kerjaan` varchar(50) NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `rekomendasi` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pm_ps`
--

INSERT INTO `pm_ps` (`id_ps`, `periode`, `nama_utilitas`, `lokasi_utilitas`, `rencana`, `realisasi`, `nama_vendor`, `alamat_vendor`, `nama_teknisi`, `jenis_kerjaan`, `gambar`, `rekomendasi`) VALUES
('KPS002', 'Tahunan', 'AC Panasonic', 'Basemane', '2020-08-28', '2020-08-29', 'Saya ngga tau', 'bfndfnsbddbsdbadvx d', 'Saya ngga tau', 'svasvsvsv', '5LYzTBVoS196gvYvw3zjwDmcfgQNDrjz5dzwZ30U6mc.png', 'svsavasvfwfscas');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pm_pt`
--

CREATE TABLE `pm_pt` (
  `id_pt` varchar(10) NOT NULL,
  `periode` varchar(10) NOT NULL,
  `nama_utilitas` varchar(50) NOT NULL,
  `lokasi_utilitas` varchar(50) NOT NULL,
  `rencana` date NOT NULL,
  `realisasi` date NOT NULL,
  `nama_vendor` varchar(100) NOT NULL,
  `alamat_vendor` text NOT NULL,
  `nama_teknisi` varchar(50) NOT NULL,
  `jenis_kerjaan` varchar(50) NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `rekomendasi` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pm_pt`
--

INSERT INTO `pm_pt` (`id_pt`, `periode`, `nama_utilitas`, `lokasi_utilitas`, `rencana`, `realisasi`, `nama_vendor`, `alamat_vendor`, `nama_teknisi`, `jenis_kerjaan`, `gambar`, `rekomendasi`) VALUES
('KPT001', '3 Bulanan', 'AC Panasonic', 'Basemane', '2021-02-01', '2021-03-02', 'Saya ngga tau', 'PCP 2 Block C4/11A', 'Saya ngga tau', 'svasvsvsv', '1-13633_instagram-png-instagram-icon-transparent-background-instagram-logo.png', 'svsavasvfwfscas'),
('KPT002', '3 Bulanan', 'AC Panasonic', 'Basemane', '2020-08-26', '2020-09-05', 'Saya ngga tau', 'hvjgchxhfg', 'Saya ngga tau', 'svasvsvsv', 'eqi7w3-u4aammka-bcebf2b4460a80f309ffb48813f7d580_600x400.jpg', 'afasfsf'),
('KPT003', 'Tahunan', 'AC Panasonic', 'Basemane', '2020-08-26', '2020-08-29', 'Saya ngga tau', 'fdfnfnsfn', 'dbdbdb', 'svasvsvsv', '106392.jpg', 'svsavasvfwfscas');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pm_rt`
--

CREATE TABLE `pm_rt` (
  `id_rt` varchar(10) NOT NULL,
  `periode` varchar(10) NOT NULL,
  `nama_utilitas` varchar(50) NOT NULL,
  `lokasi_utilitas` varchar(10) NOT NULL,
  `rencana` date NOT NULL,
  `realisasi` date NOT NULL,
  `nama_teknisi` varchar(50) NOT NULL,
  `jenis_kerjaan` varchar(500) NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `rekomendasi` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pm_rt`
--

INSERT INTO `pm_rt` (`id_rt`, `periode`, `nama_utilitas`, `lokasi_utilitas`, `rencana`, `realisasi`, `nama_teknisi`, `jenis_kerjaan`, `gambar`, `rekomendasi`) VALUES
('PRT002', '1 Tahun', 'AC Panasonic', 'Tower B', '2020-08-29', '2020-08-30', 'Saya ngga tau', 'svasvsvsv', '673288_d51e13be-b076-4d05-a8b9-8b753ea99344.jpg', 'svsavasvfwfscas');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pm_stp`
--

CREATE TABLE `pm_stp` (
  `id_stp` varchar(10) NOT NULL,
  `rencana` date NOT NULL,
  `realisasi` date NOT NULL,
  `nama_stp` varchar(50) NOT NULL,
  `lokasi_stp` varchar(50) NOT NULL,
  `jenis_kerusakan` varchar(50) NOT NULL,
  `nama_teknisi` text NOT NULL,
  `progres` varchar(50) NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pm_stp`
--

INSERT INTO `pm_stp` (`id_stp`, `rencana`, `realisasi`, `nama_stp`, `lokasi_stp`, `jenis_kerusakan`, `nama_teknisi`, `progres`, `keterangan`) VALUES
('PMS001', '2020-08-28', '2020-08-29', 'AC Panasonic', 'Tower A A 02-06', 'Saya ngga tau', 'Saya ngga tau', 'saya ngga tau', 'Kabel ada yang putus');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pm_trafo`
--

CREATE TABLE `pm_trafo` (
  `id_trafo` varchar(10) NOT NULL,
  `periode` varchar(50) NOT NULL,
  `nama_utilitas` varchar(50) NOT NULL,
  `lokasi_utilitas` varchar(50) NOT NULL,
  `rencana` date NOT NULL,
  `realisasi` date NOT NULL,
  `nama_vendor` varchar(50) NOT NULL,
  `alamat_vendor` text NOT NULL,
  `nama_teknisi` varchar(50) NOT NULL,
  `jenis_kerjaan` varchar(50) NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `rekomendasi` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pm_trafo`
--

INSERT INTO `pm_trafo` (`id_trafo`, `periode`, `nama_utilitas`, `lokasi_utilitas`, `rencana`, `realisasi`, `nama_vendor`, `alamat_vendor`, `nama_teknisi`, `jenis_kerjaan`, `gambar`, `rekomendasi`) VALUES
('PMT001', '3 Bulanan', 'AC Panasonic', 'Tower A', '2020-08-27', '2020-08-29', 'Saya ngga tau', 'Perumahan Puri Cityam Permai 2', 'Saya ngga tau', 'svasvsvsv', 'hot project.png', 'svsavasvfwfscas');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pm_tu`
--

CREATE TABLE `pm_tu` (
  `id_tu` varchar(10) NOT NULL,
  `periode` varchar(10) NOT NULL,
  `nama_utilitas` varchar(50) NOT NULL,
  `lokasi_utilitas` varchar(50) NOT NULL,
  `rencana` date NOT NULL,
  `realisasi` date NOT NULL,
  `nama_vendor` varchar(50) NOT NULL,
  `alamat_vendor` text NOT NULL,
  `nama_teknisi` varchar(50) NOT NULL,
  `jenis_kerjaan` varchar(50) NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `rekomendasi` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pm_tu`
--

INSERT INTO `pm_tu` (`id_tu`, `periode`, `nama_utilitas`, `lokasi_utilitas`, `rencana`, `realisasi`, `nama_vendor`, `alamat_vendor`, `nama_teknisi`, `jenis_kerjaan`, `gambar`, `rekomendasi`) VALUES
('KTU002', '3 Bulanan', 'AC Panasonic', 'Basemane', '2020-08-27', '2020-08-29', 'Saya ngga tau', 'fmfmssgm', 'Saya ngga tau', 'svasvsvsv', '5LYzTBVoS196gvYvw3zjwDmcfgQNDrjz5dzwZ30U6mc.png', 'svsavasvfwfscas'),
('KTU003', 'Tahunan', 'Aadavv', 'svsvsav', '2020-08-30', '2020-09-06', 'fnsnd', 'nrbebebbebeb', 'bsdbsdb', 'dbadbb', '31485-193x278.jpg', 'gmmdgmgdm');

-- --------------------------------------------------------

--
-- Struktur dari tabel `p_apar`
--

CREATE TABLE `p_apar` (
  `no_apar` varchar(10) NOT NULL,
  `tower` varchar(10) NOT NULL,
  `lantai` varchar(20) NOT NULL,
  `des_lantai` text NOT NULL,
  `posisi` varchar(100) NOT NULL,
  `des_posisi` text NOT NULL,
  `masa_berlaku` date NOT NULL,
  `preasure` varchar(100) NOT NULL,
  `des_preasure` text NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `p_apar`
--

INSERT INTO `p_apar` (`no_apar`, `tower`, `lantai`, `des_lantai`, `posisi`, `des_posisi`, `masa_berlaku`, `preasure`, `des_preasure`, `keterangan`) VALUES
('NPA001', 'A', 'lantai 2', 'Lantai 2 aja ini mash', 'Sebelah kiri', 'Pokonya kiri ini mash', '2020-10-21', 'aada', 'aada', 'sfafsanfslvbsjabvj'),
('NPA002', 'B', 'Ground', 'vskvnlsavla', 'sacsnavknsalvlasvlks', 'csnakvalsvk', '2020-10-30', 'svavjsbvjsbv', 'svavjsbvjsbv', 'vsivlvblsjbvsjbvsbvsbvsbv'),
('NPA003', 'A', 'lantai 7', 'sasvsjvbsajbvjsvjsv', 'vsvkvlbvevavslknv', 'vsvvblvblabvsbvbvl', '2020-10-31', 'cscalsvlsajbvjsbvjslv', 'cscalsvlsajbvjsbvjslv', 'svvwvnvlasvlabvljavlja'),
('NPA004', 'B', 'Ground', 'savsabvsjbvjsbvkjbv', 'vasvwvnwvnlsnvlsnvlsv', 'avsbvsbvsbvbsvbbw', '2020-10-31', 'svavsvasvasv', 'svavsvasvasv', 'vavslvlsvlsbvsvbslvskv');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_ke`
--

CREATE TABLE `tb_ke` (
  `id_ke` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `alamat` text NOT NULL,
  `jabatan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_ke`
--

INSERT INTO `tb_ke` (`id_ke`, `nama`, `alamat`, `jabatan`) VALUES
(1920010022, 'Alif Abby', 'Tinggal di persimpangan kali ciliwung', 'Babu'),
(2147483647, 'Varel Pura Jaya', 'jvhjghffz', 'Staff');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_negara`
--

CREATE TABLE `tb_negara` (
  `id` int(11) NOT NULL,
  `negara` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pjtn`
--

CREATE TABLE `tb_pjtn` (
  `no_unit` varchar(10) NOT NULL,
  `nama_pjtn` varchar(255) NOT NULL,
  `kontak_pjtn` int(40) NOT NULL,
  `email_pjtn` varchar(100) NOT NULL,
  `kantor_pjtn` varchar(100) NOT NULL,
  `status_pjtn` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_staff`
--

CREATE TABLE `tb_staff` (
  `id_staff` int(10) NOT NULL,
  `nama_staff` varchar(100) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `level` enum('engineering','tenant','security','gudang','admin') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_staff`
--

INSERT INTO `tb_staff` (`id_staff`, `nama_staff`, `username`, `password`, `level`) VALUES
(1, 'Andrean Ahmad Fauzi', 'andrean', 'staff2', 'engineering'),
(6, 'Alif Abby Damanhuri', 'alif', 'staff1', 'engineering'),
(7, 'andrean ahmad', 'admin', 'admin', 'admin'),
(8, 'Andrean Ahmad Fauzi', 'security', 'pass1', 'security'),
(9, 'Andrean Ahmad Fauzi', 'staff3', 'staff', 'gudang');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_tugas`
--

CREATE TABLE `tb_tugas` (
  `no_form` varchar(10) NOT NULL,
  `hari` varchar(10) NOT NULL,
  `tanggal` date NOT NULL,
  `regu` varchar(10) NOT NULL,
  `shift` varchar(10) NOT NULL,
  `waktu` varchar(10) NOT NULL,
  `nama_pos` varchar(100) NOT NULL,
  `lokasi` text NOT NULL,
  `petugas` varchar(100) NOT NULL,
  `masuk` varchar(10) NOT NULL,
  `keluar` varchar(10) NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_tugas`
--

INSERT INTO `tb_tugas` (`no_form`, `hari`, `tanggal`, `regu`, `shift`, `waktu`, `nama_pos`, `lokasi`, `petugas`, `masuk`, `keluar`, `keterangan`) VALUES
('NRT001', 'Selasa', '2020-10-06', 'Regu 1', 'Shift 1', '17:24', 'Pos1', 'svsdvsdv', 'Andrean Ahmad Fauzi', '17:24', '17:24', 'vsdvsdvdsv'),
('NRT002', 'Selasa', '2020-10-06', 'Regu 2', 'Shift 2', '18:26', 'Pos1', 'asv asvajsbvjs', 'Andrean Ahmad Fauzi', '18:26', '18:26', 'vjbvjasbvjasbv');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_unit`
--

CREATE TABLE `tb_unit` (
  `id_unit` int(11) NOT NULL,
  `unit` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_unit`
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
-- Struktur dari tabel `tb_user`
--

CREATE TABLE `tb_user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `negara` varchar(50) NOT NULL,
  `tanggal_lahir` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `username`, `password`, `nama_lengkap`, `gender`, `negara`, `tanggal_lahir`) VALUES
(2, 'contoh@gmail.com', 'user1', 'andrean ahmad fauzi', 'Man', 'Indonesia;', '2001-01-03');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `co_ac`
--
ALTER TABLE `co_ac`
  ADD PRIMARY KEY (`id_complaine`);

--
-- Indeks untuk tabel `co_me`
--
ALTER TABLE `co_me`
  ADD PRIMARY KEY (`id_complaine`);

--
-- Indeks untuk tabel `co_sipil`
--
ALTER TABLE `co_sipil`
  ADD PRIMARY KEY (`id_complaine`);

--
-- Indeks untuk tabel `dc_air`
--
ALTER TABLE `dc_air`
  ADD PRIMARY KEY (`id_air`);

--
-- Indeks untuk tabel `dc_listrik`
--
ALTER TABLE `dc_listrik`
  ADD PRIMARY KEY (`id_listrik`);

--
-- Indeks untuk tabel `dp_air`
--
ALTER TABLE `dp_air`
  ADD PRIMARY KEY (`id_cek`);

--
-- Indeks untuk tabel `dp_listrik`
--
ALTER TABLE `dp_listrik`
  ADD PRIMARY KEY (`id_cek`);

--
-- Indeks untuk tabel `du_ac_public_area`
--
ALTER TABLE `du_ac_public_area`
  ADD PRIMARY KEY (`id_acpa`);

--
-- Indeks untuk tabel `du_elektrical`
--
ALTER TABLE `du_elektrical`
  ADD PRIMARY KEY (`id_utilitas`);

--
-- Indeks untuk tabel `du_generator_set`
--
ALTER TABLE `du_generator_set`
  ADD PRIMARY KEY (`id_generator_set`);

--
-- Indeks untuk tabel `du_lift`
--
ALTER TABLE `du_lift`
  ADD PRIMARY KEY (`id_lift`);

--
-- Indeks untuk tabel `du_me`
--
ALTER TABLE `du_me`
  ADD PRIMARY KEY (`id_me`);

--
-- Indeks untuk tabel `du_pompa`
--
ALTER TABLE `du_pompa`
  ADD PRIMARY KEY (`id_pompa`);

--
-- Indeks untuk tabel `du_trafo`
--
ALTER TABLE `du_trafo`
  ADD PRIMARY KEY (`id_trafo`);

--
-- Indeks untuk tabel `pm_acap`
--
ALTER TABLE `pm_acap`
  ADD PRIMARY KEY (`id_pmac`);

--
-- Indeks untuk tabel `pm_acten`
--
ALTER TABLE `pm_acten`
  ADD PRIMARY KEY (`id_acten`);

--
-- Indeks untuk tabel `pm_elektrical`
--
ALTER TABLE `pm_elektrical`
  ADD PRIMARY KEY (`id_pmelektrik`);

--
-- Indeks untuk tabel `pm_fa`
--
ALTER TABLE `pm_fa`
  ADD PRIMARY KEY (`id_pmfa`);

--
-- Indeks untuk tabel `pm_geset`
--
ALTER TABLE `pm_geset`
  ADD PRIMARY KEY (`id_geset`);

--
-- Indeks untuk tabel `pm_gt`
--
ALTER TABLE `pm_gt`
  ADD PRIMARY KEY (`id_gt`);

--
-- Indeks untuk tabel `pm_gwt`
--
ALTER TABLE `pm_gwt`
  ADD PRIMARY KEY (`id_pmgwt`);

--
-- Indeks untuk tabel `pm_infrared`
--
ALTER TABLE `pm_infrared`
  ADD PRIMARY KEY (`id_infrared`);

--
-- Indeks untuk tabel `pm_lift`
--
ALTER TABLE `pm_lift`
  ADD PRIMARY KEY (`id_pmlift`);

--
-- Indeks untuk tabel `pm_mecha`
--
ALTER TABLE `pm_mecha`
  ADD PRIMARY KEY (`id_mecha`);

--
-- Indeks untuk tabel `pm_pl`
--
ALTER TABLE `pm_pl`
  ADD PRIMARY KEY (`id_pl`);

--
-- Indeks untuk tabel `pm_preasure_fan`
--
ALTER TABLE `pm_preasure_fan`
  ADD PRIMARY KEY (`id_pf`);

--
-- Indeks untuk tabel `pm_ps`
--
ALTER TABLE `pm_ps`
  ADD PRIMARY KEY (`id_ps`);

--
-- Indeks untuk tabel `pm_pt`
--
ALTER TABLE `pm_pt`
  ADD PRIMARY KEY (`id_pt`);

--
-- Indeks untuk tabel `pm_rt`
--
ALTER TABLE `pm_rt`
  ADD PRIMARY KEY (`id_rt`);

--
-- Indeks untuk tabel `pm_stp`
--
ALTER TABLE `pm_stp`
  ADD PRIMARY KEY (`id_stp`);

--
-- Indeks untuk tabel `pm_trafo`
--
ALTER TABLE `pm_trafo`
  ADD PRIMARY KEY (`id_trafo`);

--
-- Indeks untuk tabel `pm_tu`
--
ALTER TABLE `pm_tu`
  ADD PRIMARY KEY (`id_tu`);

--
-- Indeks untuk tabel `tb_ke`
--
ALTER TABLE `tb_ke`
  ADD PRIMARY KEY (`id_ke`);

--
-- Indeks untuk tabel `tb_negara`
--
ALTER TABLE `tb_negara`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_staff`
--
ALTER TABLE `tb_staff`
  ADD PRIMARY KEY (`id_staff`);

--
-- Indeks untuk tabel `tb_unit`
--
ALTER TABLE `tb_unit`
  ADD PRIMARY KEY (`id_unit`);

--
-- Indeks untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_negara`
--
ALTER TABLE `tb_negara`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tb_staff`
--
ALTER TABLE `tb_staff`
  MODIFY `id_staff` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `tb_unit`
--
ALTER TABLE `tb_unit`
  MODIFY `id_unit` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=248;

--
-- AUTO_INCREMENT untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
