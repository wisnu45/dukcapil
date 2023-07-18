-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 06, 2022 at 02:24 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_detusoko`
--

-- --------------------------------------------------------

--
-- Table structure for table `arske`
--

CREATE TABLE `arske` (
  `id` int(5) NOT NULL,
  `nosurat` varchar(25) NOT NULL,
  `noklasi` varchar(25) NOT NULL,
  `ringkasan` text NOT NULL,
  `pengelolah` varchar(25) NOT NULL,
  `tglsurat` date NOT NULL,
  `kepada` varchar(25) NOT NULL,
  `keterangan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `arske`
--

INSERT INTO `arske` (`id`, `nosurat`, `noklasi`, `ringkasan`, `pengelolah`, `tglsurat`, `kepada`, `keterangan`) VALUES
(16, '465.3/ULW/220/06/2021', '220', 'Melakukan penelitian ', 'Kaur umum', '2021-05-07', 'Fakultas Teknologi Inform', 'telah selesai penelitian'),
(17, '47/115/F5/71/N/5/2021', '220', 'penelitian ', 'Kaur umum', '2021-07-30', 'Fakultas Teknologi Inform', 'selesai');

-- --------------------------------------------------------

--
-- Table structure for table `arsma`
--

CREATE TABLE `arsma` (
  `id` int(11) NOT NULL,
  `nosurat` varchar(50) NOT NULL,
  `noklasi` varchar(50) NOT NULL,
  `tglsurat` date NOT NULL,
  `tglteri` date NOT NULL,
  `perihal` varchar(50) NOT NULL,
  `isi` text NOT NULL,
  `disposisi` text NOT NULL,
  `instansi` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `arsma`
--

INSERT INTO `arsma` (`id`, `nosurat`, `noklasi`, `tglsurat`, `tglteri`, `perihal`, `isi`, `disposisi`, `instansi`) VALUES
(61, '47/115/F5/71/N/5/2022', '234', '2021-07-16', '2021-07-30', 'Mohon Ijin Mengadakan Penelitian Skripsi', 'PENELITIAN', 'DESA ULUWAE', 'Universitas Flores '),
(62, '47/115/F5/71/N/5/2021', '115', '2021-07-10', '2021-07-24', 'Mohon IjinMengadakan Penelitian Skripsi', 'penelitian ', 'Desa Uluwae', 'Universitas Flores Fakult');

-- --------------------------------------------------------

--
-- Table structure for table `kartukel`
--

CREATE TABLE `kartukel` (
  `id` int(11) NOT NULL,
  `no_kk` varchar(16) NOT NULL,
  `nama_kk` varchar(25) NOT NULL,
  `alamat` varchar(25) NOT NULL,
  `kelurahan` varchar(25) NOT NULL,
  `rt/rw` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kartukel`
--

INSERT INTO `kartukel` (`id`, `no_kk`, `nama_kk`, `alamat`, `kelurahan`, `rt/rw`) VALUES
(9, '5309061002052476', 'Markus Rendo', 'Rewupoko', 'Uluwae', '07'),
(10, '5309061002052555', 'Wihelmus Pa\'i', 'Manatena', 'Uluwae', '03'),
(12, '5309061010020525', 'Wenslaus Rendu', 'Ngusu', 'Uluwae', '05'),
(13, '5309151804120001', 'Wenslaus Rendu', 'Ngusu', 'Uluwae', '05'),
(14, '1222222222222221', 'Andika1', 'Jln Sam Ratulangi1', 'www1', '2221'),
(15, '2222222222222222', 'Andika', 'Jln Sam Ratulangi', 'www', '222'),
(16, '1222222222222221', 'Andika', 'Jln Sam Ratulangi', 'Ddd', '222');

-- --------------------------------------------------------

--
-- Table structure for table `pegawai`
--

CREATE TABLE `pegawai` (
  `id` int(11) NOT NULL,
  `nama` varchar(35) NOT NULL,
  `nip` varchar(50) NOT NULL,
  `jk` varchar(20) NOT NULL,
  `golongan` varchar(20) NOT NULL,
  `jabatan` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pegawai`
--

INSERT INTO `pegawai` (`id`, `nama`, `nip`, `jk`, `golongan`, `jabatan`) VALUES
(13, 'FERDINANDUS WATU,S.FIL', '-', 'Laki-Laki', 'Penata Tk. I/ III d', 'Kapala Desa');

-- --------------------------------------------------------

--
-- Table structure for table `penduduk`
--

CREATE TABLE `penduduk` (
  `id` int(11) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `no_kk` varchar(16) NOT NULL,
  `nik` varchar(16) NOT NULL,
  `jk` varchar(20) NOT NULL,
  `tempatla` varchar(25) NOT NULL,
  `tglah` date NOT NULL,
  `agama` varchar(20) NOT NULL,
  `pend` varchar(25) NOT NULL,
  `pekerjaan` varchar(25) NOT NULL,
  `rtw` varchar(10) NOT NULL,
  `status` varchar(25) NOT NULL,
  `tgl` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `penduduk`
--

INSERT INTO `penduduk` (`id`, `nama`, `no_kk`, `nik`, `jk`, `tempatla`, `tglah`, `agama`, `pend`, `pekerjaan`, `rtw`, `status`, `tgl`) VALUES
(18, 'Martinus Nangga', '5309061010020525', '5309151303030003', 'Laki-Laki', 'Ngusu', '2003-03-13', 'Katolik', 'SMP', 'Pelajar', '001/002', 'Pindah', '2022-01-11'),
(19, 'Febrianus Djawa', '5309061010020525', '5309150202080002', 'Laki-Laki', 'Ngusu', '2008-02-02', 'Katolik', 'SD', 'Pedagang Sayur', '002/002', 'Mati', '2022-01-08'),
(20, 'Andika', '5309061002052476', '24242411', 'Perempuan', 'ddd', '2021-08-11', 'Kristen/Protestan', 'SMP', 'Petani', '001/012', 'Mati', '0000-00-00'),
(21, 'Andika', '5309061002052476', '5308196010970022', 'Laki-Laki', 'Surabaya', '2022-01-06', 'Katolik', 'Sarjana(S1)', 'Petani', '002/002', 'Pindah', '0000-00-00'),
(22, 'Yohan', '5309061002052476', '5308196010970089', 'Laki-Laki', 'Surabaya', '2022-01-07', 'Katolik', 'Sarjana(S1)', 'Petani', '002/002', 'Hidup', '2022-01-15'),
(23, 'Andika', '5309061010020525', '5308196010970121', 'Laki-Laki', 'Surabaya', '2022-01-08', 'Islam', 'Sarjana(S1)', 'PNS', '002/002', 'Hidup', '08-01-2022'),
(24, 'Imel', '5309061002052476', '5308196010970333', 'Perempuan', 'Surabaya', '2022-01-09', 'Kristen/Protestan', 'Diploma', 'Petani', '002/002', 'Hidup', '09-01-2022'),
(25, 'Andika', '5309061002052476', '5308196010970111', 'Laki-Laki', 'Surabaya', '2022-01-11', 'Katolik', 'SD', 'Petani', '002/002', 'Hidup', '11-01-2022');

-- --------------------------------------------------------

--
-- Table structure for table `tb_barang`
--

CREATE TABLE `tb_barang` (
  `id` int(11) NOT NULL,
  `no_barang` varchar(40) NOT NULL,
  `nma_barang` varchar(25) NOT NULL,
  `jumlah` varchar(30) NOT NULL,
  `kondisi` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_barang`
--

INSERT INTO `tb_barang` (`id`, `no_barang`, `nma_barang`, `jumlah`, `kondisi`) VALUES
(5, '003133', 'meja33', '1033', 'baik33'),
(6, '08111', 'Meja', '11', 'Lama'),
(7, '0811122', 'Mejaa', '111', 'Lama1'),
(8, '081', 'meja', '30', 'baik');

-- --------------------------------------------------------

--
-- Table structure for table `tb_domisili`
--

CREATE TABLE `tb_domisili` (
  `id` int(11) NOT NULL,
  `nosurat` varchar(40) NOT NULL,
  `nm_pej` varchar(40) NOT NULL,
  `jabatan` varchar(40) NOT NULL,
  `alamat` text NOT NULL,
  `nm_pen` varchar(40) NOT NULL,
  `tempat_lah` varchar(25) NOT NULL,
  `tg_lah` date NOT NULL,
  `jk` varchar(20) NOT NULL,
  `alamat_pen` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_domisilii`
--

CREATE TABLE `tb_domisilii` (
  `id` int(11) NOT NULL,
  `no_surat` varchar(60) NOT NULL,
  `nma_pej` varchar(25) NOT NULL,
  `jabatan` varchar(30) NOT NULL,
  `alamat` text NOT NULL,
  `nma_pen` varchar(25) NOT NULL,
  `jk` varchar(25) NOT NULL,
  `umur` varchar(20) NOT NULL,
  `ttl` varchar(50) NOT NULL,
  `usaha` varchar(50) NOT NULL,
  `tanggal` varchar(25) NOT NULL,
  `rt` varchar(12) NOT NULL,
  `alamat_pen` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_domisilii`
--

INSERT INTO `tb_domisilii` (`id`, `no_surat`, `nma_pej`, `jabatan`, `alamat`, `nma_pen`, `jk`, `umur`, `ttl`, `usaha`, `tanggal`, `rt`, `alamat_pen`) VALUES
(10, '55555555555555', 'Fabianus Rue Rani', 'Kepala Desa', 'Jln Sam Ratulangi', 'Febrianus Djawa', '', 'Katolik', 'Surabaya 20/10/1997', '', '2022-02-19', 'Petani', 'RT.04 RW. 003, Dusun Pemonago Desa Detusoko Barat, Kecamatan Detusoko, Kabupaten Ende.'),
(11, '3345354', 'FERDINANDUS WATU,S.FIL', 'Kapala Desa', 'Jln Sam Ratulangi', 'Febrianus Djawa', 'Laki-Laki', 'Katolik', 'Surabaya 20/10/1997', '', '2022-02-19', 'Petani', 'RT.04 RW. 003, Dusun Pemonago Desa Detusoko Barat, Kecamatan Detusoko, Kabupaten Ende.'),
(12, 'w3333', 'FERDINANDUS WATU,S.FIL', 'Kapala Desa', 'Jln Sam Ratulangi', 'Andika', 'Perempuan', 'Katolik', 'Surabaya 20/10/1997', '', '2022-02-19', 'Petani', 'RT.04 RW. 003, Dusun Pemonago Desa Detusoko Barat, Kecamatan Detusoko, Kabupaten Ende.');

-- --------------------------------------------------------

--
-- Table structure for table `tb_kerja`
--

CREATE TABLE `tb_kerja` (
  `id` int(11) NOT NULL,
  `pekerjaan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_kerja`
--

INSERT INTO `tb_kerja` (`id`, `pekerjaan`) VALUES
(1, 'Petani'),
(2, 'PNS'),
(3, 'Pedagang Sayur');

-- --------------------------------------------------------

--
-- Table structure for table `tb_lahir`
--

CREATE TABLE `tb_lahir` (
  `id` varchar(40) NOT NULL,
  `no_kk` varchar(55) NOT NULL,
  `nm_ayah` varchar(50) NOT NULL,
  `nm_ibu` varchar(50) NOT NULL,
  `nm_anak` varchar(50) NOT NULL,
  `jk` varchar(25) NOT NULL,
  `anak_ke` varchar(3) NOT NULL,
  `tmpt_lah` varchar(50) NOT NULL,
  `tgl_lah` date NOT NULL,
  `tahun` bigint(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_lahir`
--

INSERT INTO `tb_lahir` (`id`, `no_kk`, `nm_ayah`, `nm_ibu`, `nm_anak`, `jk`, `anak_ke`, `tmpt_lah`, `tgl_lah`, `tahun`) VALUES
('1', '11111111112', 'Andi2', 'Ani2', 'Raditia2', 'Perempuan', '12', 'Surabaya2', '2022-01-02', 2012),
('3', '11111111112', 'Simon', 'Tress', 'aaa', 'Laki-Laki', '1', 'Surabaya', '2022-01-10', 2010),
('4', '11111111112', 'Simon', 'Tress', 'sfsf', 'Laki-Laki', '1', 'sfs', '2022-01-10', 2009),
('AR2020', '2222222', 'Simon', 'qweqw', 'sfsf', 'Laki-Laki', '1', 'sfs', '2022-03-06', 2021),
('AR666', '66666', 'Simon6', 'Tress6', 'sfsf6', 'Perempuan', '16', 'Surabaya26', '2022-01-06', 2016),
('RA5555', '2222222222222222', 'qwwq', 'qweqw', 'sfsf', 'Perempuan', '12', 'Surabaya', '2022-01-11', 2008);

-- --------------------------------------------------------

--
-- Table structure for table `tb_mampu`
--

CREATE TABLE `tb_mampu` (
  `id` int(11) NOT NULL,
  `no_surat` varchar(60) NOT NULL,
  `nma_pej` varchar(25) NOT NULL,
  `jabatan` varchar(30) NOT NULL,
  `alamat` text NOT NULL,
  `nma_pen` varchar(25) NOT NULL,
  `ttl` varchar(50) NOT NULL,
  `jk` varchar(50) NOT NULL,
  `agama` varchar(20) NOT NULL,
  `tanggal` varchar(25) NOT NULL,
  `rt` varchar(12) NOT NULL,
  `alamat_pen` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_mampu`
--

INSERT INTO `tb_mampu` (`id`, `no_surat`, `nma_pej`, `jabatan`, `alamat`, `nma_pen`, `ttl`, `jk`, `agama`, `tanggal`, `rt`, `alamat_pen`) VALUES
(8, '47/115/F5/71/N/5/2022', 'Fabianus Rue Rani', 'Kepala Desa', 'Desa Uluwae, Kecamatan Bajawa Utara', 'Febrianus Djawa', 'Surabaya, 20 Oktober 1997', 'Laki-Laki', 'Katolik', '2021-07-29', '04', 'jgkglgiypytdytsy'),
(10, '3345354', 'Fabianus Rue Rani', 'Kepala Desa', 'Desaku', 'Andika', 'Surabaya 23/10/1997', 'Perempuan', 'Katolik', '2021-12-18', '2021-12-31', 'untuk menmbayar uang spp untuk anak pertamanya');

-- --------------------------------------------------------

--
-- Table structure for table `tb_rtw`
--

CREATE TABLE `tb_rtw` (
  `id` int(11) NOT NULL,
  `rtw` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_rtw`
--

INSERT INTO `tb_rtw` (`id`, `rtw`) VALUES
(2, '002/002'),
(3, '001/012');

-- --------------------------------------------------------

--
-- Table structure for table `tb_sertifikat`
--

CREATE TABLE `tb_sertifikat` (
  `id` int(11) NOT NULL,
  `no_surat` varchar(60) NOT NULL,
  `nma_pej` varchar(25) NOT NULL,
  `jabatan` varchar(30) NOT NULL,
  `alamat` text NOT NULL,
  `nma_pen` varchar(25) NOT NULL,
  `umur` varchar(20) NOT NULL,
  `tanggal` varchar(25) NOT NULL,
  `rt` varchar(12) NOT NULL,
  `alamat_pen` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_sertifikat`
--

INSERT INTO `tb_sertifikat` (`id`, `no_surat`, `nma_pej`, `jabatan`, `alamat`, `nma_pen`, `umur`, `tanggal`, `rt`, `alamat_pen`) VALUES
(11, '47/115/F5/71/N/5/2021', 'Fabianus Rue Rani', 'Kepala Desa', 'Desa Uluwae, Kecamatan Bajawa Utara', 'Martinus Nangga', '12', '2021-07-29', '04', 'hfjhfkjfh'),
(12, '47/115/F5/71/N/5/2023', 'Fabianus Rue Rani', 'Kepala Desa', 'Desa Uluwae, Kecamatan Bajawa Utara', 'Febrianus Djawa', '25', '2021-07-29', '04', 'kjhkHLhlPQPP'),
(13, '47/115/F5/71/N/5/2024', 'Fabianus Rue Rani', 'Kepala Desa', 'Desa Uluwae, Kecamatan Bajawa Utara', 'Martinus Nangga', '25', '2021-07-30', '05', 'nGUSU'),
(14, '47/115/F5/71/N/5/2025', 'Fabianus Rue Rani', 'Kepala Desa', 'Desa Uluwae, Kecamatan Bajawa Utara', 'Febrianus Djawa', '25', '2021-07-31', '05', 'JHGF'),
(15, '47/115/F5/71/N/5/2026', 'Fabianus Rue Rani', 'Kepala Desa', 'Desa Uluwae, Kecamatan Bajawa Utara', 'Febrianus Djawa', '25', '2021-07-23', '04', 'hjkiohg');

-- --------------------------------------------------------

--
-- Table structure for table `tb_surkel`
--

CREATE TABLE `tb_surkel` (
  `id` int(11) NOT NULL,
  `no_surat` varchar(60) NOT NULL,
  `perihal` varchar(25) NOT NULL,
  `tgl_surat` date NOT NULL,
  `nma_pej` varchar(25) NOT NULL,
  `jabatan` varchar(30) NOT NULL,
  `isi` text NOT NULL,
  `tgl_kegiatan` varchar(25) NOT NULL,
  `waktu` varchar(20) NOT NULL,
  `lokasi` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_surkel`
--

INSERT INTO `tb_surkel` (`id`, `no_surat`, `perihal`, `tgl_surat`, `nma_pej`, `jabatan`, `isi`, `tgl_kegiatan`, `waktu`, `lokasi`) VALUES
(9, '47/115/F5/71/N/5/2021', 'Undangan Rapat', '2021-07-27', 'Fabianus Rue Rani', 'Kepala Desa', 'Sehubungan dengan adanya sesuatu hal yang harus dimusyawarahkan terkait masalah persiapan pengkajian keadaan desa dan berbagai insentif RT/RW di Desa Uluwae,maka dengan ini kami mengundang Bapak/ Ibu untuk hadir pada ', 'Sabtu, 07 juli 2021', '08.00 s/d Selesai', 'Aula Desa Uluwae'),
(10, '47/115/F5/71/N/5/2021', 'undangan rapat astensi', '2021-07-15', 'Fabianus Rue Rani', 'Kepala Desa', 'Sehubungan dengan adanya sesuatu hal yang harus dimusyawarahkan terkait masalah persiapan pengkajian keadaan desa dan berbagai insentif RT/RW di Desa Uluwae,maka dengan ini kami mengundang Bapak/ Ibu untuk hadir pada', 'Kamis 21 Juli 2021', '08.00 s/d Selesai', 'Aula Desa Uluwae');

-- --------------------------------------------------------

--
-- Table structure for table `tb_usaha`
--

CREATE TABLE `tb_usaha` (
  `id` int(11) NOT NULL,
  `no_surat` varchar(60) NOT NULL,
  `nma_pej` varchar(25) NOT NULL,
  `jabatan` varchar(30) NOT NULL,
  `alamat` text NOT NULL,
  `nma_pen` varchar(25) NOT NULL,
  `umur` text NOT NULL,
  `jk` varchar(50) NOT NULL,
  `usaha` varchar(50) NOT NULL,
  `tanggal` varchar(25) NOT NULL,
  `rt` varchar(12) NOT NULL,
  `agama` varchar(50) NOT NULL,
  `alamat_pen` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_usaha`
--

INSERT INTO `tb_usaha` (`id`, `no_surat`, `nma_pej`, `jabatan`, `alamat`, `nma_pen`, `umur`, `jk`, `usaha`, `tanggal`, `rt`, `agama`, `alamat_pen`) VALUES
(11, '3345354dd', 'Fabianus Rue Rani', 'Kepala Desa', 'afafa', 'Febrianus Djawa', 'Surabaya 20 Oktober 1997', 'Laki-Laki', 'Jualan Pisang', '2021-12-17', 'Petani', 'Katolik', 'Desa ku');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `image` varchar(128) NOT NULL,
  `password` varchar(256) NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` int(1) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama`, `email`, `image`, `password`, `role_id`, `is_active`, `date_created`) VALUES
(10, 'ira', 'ira@gmail.com', 'IMG_20190710_121620.jpg', '$2y$10$McWlwaboLnxiIeMOnwH.UOO4losSP9nfm1AfOvluSzOhnWCIfB/Me', 1, 1, 1623558006),
(12, 'admin', 'admin@gmail.com', 'default.jpg', '$2y$10$JOlJVVk0NDlpXsWT309KH.LrWthK/XpdPYlLFTIaXtHH3ta3xQtsK', 1, 1, 1645276166);

-- --------------------------------------------------------

--
-- Table structure for table `user_access_menu`
--

CREATE TABLE `user_access_menu` (
  `id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_access_menu`
--

INSERT INTO `user_access_menu` (`id`, `role_id`, `menu_id`) VALUES
(1, 1, 1),
(27, 1, 5),
(28, 1, 8),
(30, 1, 9),
(39, 1, 2),
(45, 3, 2),
(46, 3, 4),
(47, 3, 3),
(48, 1, 11),
(49, 2, 11),
(50, 3, 11),
(54, 1, 3),
(56, 1, 4);

-- --------------------------------------------------------

--
-- Table structure for table `user_menu`
--

CREATE TABLE `user_menu` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `menu` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_menu`
--

INSERT INTO `user_menu` (`id`, `name`, `menu`) VALUES
(1, 'Administrator', 'Admin'),
(2, 'Master Data', 'Master'),
(3, 'Master Admnistrasi Penduduk', 'Kependudukan'),
(4, 'Grafik Statistik', 'Grafik'),
(5, 'Setting Menu', 'Menu'),
(6, 'Inventori Barang', 'Inventory'),
(11, 'Setting Account', 'User');

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL,
  `role` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_role`
--

INSERT INTO `user_role` (`id`, `role`) VALUES
(1, 'administrator'),
(2, 'member'),
(3, 'Member 2');

-- --------------------------------------------------------

--
-- Table structure for table `user_sub_menu`
--

CREATE TABLE `user_sub_menu` (
  `id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `title` varchar(128) NOT NULL,
  `url` varchar(128) NOT NULL,
  `icon` varchar(128) NOT NULL,
  `is_active` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_sub_menu`
--

INSERT INTO `user_sub_menu` (`id`, `menu_id`, `title`, `url`, `icon`, `is_active`) VALUES
(1, 1, 'Dashboard', 'admin', 'fas fa-fw fa-tachometer-alt', 1),
(4, 5, 'Menu Management', 'menu', 'fas fa-fw fa-folder', 0),
(5, 5, 'Submenu Management', 'menu/submenu', 'fas fa-fw fa-folder-open', 0),
(9, 5, 'Management Role Access', 'admin/role', 'fa fa-fw fa-user-tie', 0),
(10, 0, 'Arsip Surat Masuk', 'arsip', 'fas fa-fw fa-folder', 1),
(11, 0, 'Arsip Surat Keluar', 'arsip/suratkel', 'fas fa-fw fa-folder', 1),
(12, 5, 'Management Pengguna', 'menu/tampiluser', 'fas fa-fw fa-users', 1),
(13, 2, 'Master Kartu Keluarga', 'master', 'fas fa-fw fa-book', 1),
(14, 2, 'Master Data Penduduk', 'master/penduduk', 'fas fa-fw fa-users', 1),
(15, 2, 'Master Data Pegawai', 'master/pegawai', 'fas fa-fw fa-user', 1),
(16, 3, 'Pembuatan Surat', 'layanan', 'fas fa-fw fa-file', 0),
(17, 11, 'ProfilKu', 'user', 'fas fa-fw fa-user', 1),
(18, 11, 'Ubah Profil', 'user/edit', 'fas fa-fw fa-user', 1),
(19, 11, 'Ubah Password', 'user/changepassword', 'fas fa-fw fa-lock', 1),
(20, 6, 'Data Barang', 'inventory', 'fas fa-fw fa-folder', 1),
(21, 6, 'Tambah Barang', 'inventory/add', 'fas fa-fw fa-plus', 1),
(22, 3, 'Update Status Penduduk', 'kependudukan/update', 'fas fa-fw fa-edit', 1),
(23, 3, 'Master Data Kematian', 'kependudukan/mati', 'fas fa-fw fa-folder', 1),
(24, 3, 'Master Data Pindah', 'kependudukan/pindah', 'fas fa-fw fa-folder', 1),
(25, 2, 'Master Data Pekerjaan', 'master/kerja', 'fas fa-fw fa-folder', 1),
(26, 2, 'Master Data RT/RW', 'master/rtw', 'fas fa-fw fa-folder-open', 1),
(27, 3, 'Master Data Kelahiran', 'kependudukan/lahir', 'fas fa-fw fa-folder', 1),
(28, 1, 'Statistik Status Pend.', 'admin/status', 'fas fa-fw fa-folder', 1),
(29, 1, 'Statistik Kelahiran', 'admin/lahir', 'fas fa-fw fa-home', 1),
(30, 4, 'Grafik Status Penduduk', 'grafik', 'fas fa-fw fa-folder', 1),
(31, 4, 'Grafik Kelahiran Penduduk', 'grafik/lahir', 'fas fa-fw fa-folder', 1),
(32, 4, 'Grafik Statistik Agama', 'grafik/agama', 'fas fa-fw fa-folder', 1),
(33, 4, 'Grafik Statistik Pekerjaan', 'grafik/kerja', 'fas fa-fw fa-folder', 1),
(34, 4, 'Grafik Statistik Pendidikan', 'grafik/pendidikan', 'fas fa-fw fa-folder', 1),
(35, 1, 'Statistik Per-Kategori', 'admin/stat_item', 'fas fa-fw fa-home', 1),
(36, 2, 'Master Data Domisili', 'master/domisili', 'fas fa-fw fa-folder', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `arske`
--
ALTER TABLE `arske`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `arsma`
--
ALTER TABLE `arsma`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kartukel`
--
ALTER TABLE `kartukel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `penduduk`
--
ALTER TABLE `penduduk`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_barang`
--
ALTER TABLE `tb_barang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_domisili`
--
ALTER TABLE `tb_domisili`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_domisilii`
--
ALTER TABLE `tb_domisilii`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_kerja`
--
ALTER TABLE `tb_kerja`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_lahir`
--
ALTER TABLE `tb_lahir`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_mampu`
--
ALTER TABLE `tb_mampu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_rtw`
--
ALTER TABLE `tb_rtw`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_sertifikat`
--
ALTER TABLE `tb_sertifikat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_surkel`
--
ALTER TABLE `tb_surkel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_usaha`
--
ALTER TABLE `tb_usaha`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_access_menu`
--
ALTER TABLE `user_access_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_menu`
--
ALTER TABLE `user_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `arske`
--
ALTER TABLE `arske`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `arsma`
--
ALTER TABLE `arsma`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT for table `kartukel`
--
ALTER TABLE `kartukel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `pegawai`
--
ALTER TABLE `pegawai`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `penduduk`
--
ALTER TABLE `penduduk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `tb_barang`
--
ALTER TABLE `tb_barang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tb_domisili`
--
ALTER TABLE `tb_domisili`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_domisilii`
--
ALTER TABLE `tb_domisilii`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tb_kerja`
--
ALTER TABLE `tb_kerja`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tb_mampu`
--
ALTER TABLE `tb_mampu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tb_rtw`
--
ALTER TABLE `tb_rtw`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_sertifikat`
--
ALTER TABLE `tb_sertifikat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `tb_surkel`
--
ALTER TABLE `tb_surkel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tb_usaha`
--
ALTER TABLE `tb_usaha`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `user_access_menu`
--
ALTER TABLE `user_access_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT for table `user_menu`
--
ALTER TABLE `user_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
