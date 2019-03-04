-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 04 Mar 2019 pada 16.05
-- Versi Server: 5.6.26
-- PHP Version: 5.5.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sertipikat`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `pembeli`
--

CREATE TABLE IF NOT EXISTS `pembeli` (
  `id_pembeli` varchar(5) NOT NULL,
  `nm_pembeli` varchar(30) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `no_tel` varchar(14) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pembeli`
--

INSERT INTO `pembeli` (`id_pembeli`, `nm_pembeli`, `alamat`, `no_tel`) VALUES
('C320', 'DEFI APITASARI', 'DUSUN PENGANTEN, DESA PENGANTEN, KLAMBU-GROBOGAN', '085641501824'),
('C360', 'MUHAMAD DIMYATI', 'DUSUN PUTAT, DESA PUTAT, PURWODADI-GROBOGAN', '082136435155'),
('C567', 'RINA', 'GROBOGAN', '081297868497'),
('C754', 'JEPIE INDRA SUKMA', 'DUSUN PENGANTEN, DESA PENGANTEN, KLAMBU-GROBOGAN', '085200220990'),
('S1161', 'JOKO SUTRISNO', 'DUSUN KENTENG, DESA KENTENG, TOROH-GROBOGAN', '082156368431'),
('S1170', 'HADI MULYONO', 'JL. BAKUNG, KEL. GROBOGAN, GROBOGAN-GROBOGAN', '081327185152'),
('S128', 'ISRIWAYATUN', 'DUSUN TEGUHAN, DESA TEGUHAN, GROBOGAN-GROBOGAN', '085226222770'),
('S1935', 'SULISTIYOWATI', 'DUSUN PEJAREN, DESA BOLOH, TOROH-GROBOGAN', '082137998639'),
('S194', 'ANDIK SUNYIKNO', 'DUSUN KEPUH, DESA TAMBIREJO, TOROH-GROBOGAN', '081239206795'),
('S2179', 'SOWO', 'DUSUN MANGUNREJO, DESA TAMBIREJO, TOROH-GROBOGAN', '085877271336'),
('S2507', 'YAHMO ', 'DUSUN NGABLAK, DESA NGRAJI, PURWODADI-GROBOGAN', '081390826069'),
('S2896', 'MARMIN', 'DUSUN BOLOH I, DESA BOLOH, TOROH-GROBOGAN', '081225093122'),
('S591', 'RUDI  HARTONO', 'DUSUN TIMONGO, DESA GEYER, GEYER-GROBOGAN', '0852918787880');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pem_sertipikat`
--

CREATE TABLE IF NOT EXISTS `pem_sertipikat` (
  `no_sertipikat` int(11) NOT NULL,
  `nm_penjual` varchar(35) NOT NULL,
  `nm_pembeli` varchar(35) NOT NULL,
  `almt_pembeli` varchar(50) NOT NULL,
  `kategori` varchar(10) NOT NULL,
  `proses` varchar(100) NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pem_sertipikat`
--

INSERT INTO `pem_sertipikat` (`no_sertipikat`, `nm_penjual`, `nm_pembeli`, `almt_pembeli`, `kategori`, `proses`, `tanggal`) VALUES
(113, 'TIYAS', 'RINA', 'GROBOAN', 'sertipikat', 'pn_dokumen', '2019-02-24 02:07:40'),
(128, 'LATIYEM BINTI KARSIDI', 'ISRIWAYATUN', 'GROBOGAN', 'sertipikat', 'pn_dokumen,ploting,pn_sertipikat,zona,IPH', '2018-11-25 06:01:24'),
(194, 'SITI AISAH CS', 'ANDIK SUNYIKNO', 'BOLOH', 'sertipikat', 'pn_dokumen,ploting', '2018-11-25 06:07:14'),
(320, 'SJ KARMIN', 'DEFI APITASARI', 'PENGANTEN', 'c_desa', 'pn_dokumen,pengukuran', '2018-11-25 06:12:59'),
(360, 'SARGO', 'MUHAMAD DIMYATI', 'PUTAT', 'c_desa', 'pn_dokumen', '2018-11-28 05:31:25'),
(591, 'TATIK WAHYUNINGSIH', 'RUDI  HARTONO', 'MONGGOT', 'sertipikat', 'pn_dokumen,ploting,pn_sertipikat', '2018-11-27 12:09:58'),
(754, 'SAWINAH BIN SALEKUN', 'JEPIE INDRA SUKMA', 'PENGANTEN', 'c_desa', 'pn_dokumen,pengukuran,pn_pajak', '2018-11-25 05:54:07'),
(1161, 'ROSID', 'JOKO SUTRISNO', 'KALONGAN', 'sertipikat', 'pn_dokumen,ploting,pn_sertipikat,zona,IPH', '2018-11-25 06:09:06'),
(1170, 'ADI YULIANTO', 'HADI MULYONO', 'KARANGRREJO', 'sertipikat', 'pn_dokumen', '2018-11-29 05:07:25'),
(1860, 'SAONAH', 'HADI SUGITO', 'SINDUREJO', 'sertipikat', 'pn_dokumen', '2018-11-28 13:17:08'),
(1935, 'PARMAN BIN PARMO', 'SULISTIYOWATI', 'BOLOH', 'sertipikat', 'pn_dokumen,ploting,pn_sertipikat,zona,IPH,pn_pajak', '2018-11-25 05:46:02'),
(2179, 'NJAMIN RANGGOLO', 'SOWO', 'DEPOK', 'sertipikat', 'pn_dokumen,ploting,pn_sertipikat', '2018-11-25 05:57:17'),
(2507, 'DAMIN', 'YAHMO ', 'NRAJI', 'sertipikat', 'pn_dokumen,ploting,pn_sertipikat,zona,IPH,pn_pajak', '2018-11-25 06:10:44'),
(2896, 'ENDANG SUSILOWATI', 'MARMIN', 'BOLOH', 'sertipikat', 'pn_dokumen,ploting,pn_sertipikat,zona,IPH', '2018-11-25 05:48:53'),
(5689, 'MUHAMAD DIMYATI', 'ATMIYATI', 'PUTAT', 'sertipikat', 'pn_dokumen,ploting', '2019-02-24 02:10:14');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `u_id` int(3) NOT NULL,
  `nama` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `u_name` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `u_paswd` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `role` varchar(15) COLLATE latin1_general_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`u_id`, `nama`, `u_name`, `u_paswd`, `role`) VALUES
(3, 'Ayuningtiyas', 'admin', 'e4195bc977cc9db5d3d522261d611284', 'Administrator'),
(4, 'Agus Supriyanto', 'presdir', '21232f297a57a5a743894a0e4a801fc3', 'Owner');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pembeli`
--
ALTER TABLE `pembeli`
  ADD PRIMARY KEY (`id_pembeli`);

--
-- Indexes for table `pem_sertipikat`
--
ALTER TABLE `pem_sertipikat`
  ADD PRIMARY KEY (`no_sertipikat`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`u_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `u_id` int(3) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
