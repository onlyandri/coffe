-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 18, 2021 at 08:42 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gis_cafe`
--

-- --------------------------------------------------------

--
-- Table structure for table `balas_komentar`
--

CREATE TABLE `balas_komentar` (
  `id_balasan` int(11) NOT NULL,
  `id_komentar` int(11) NOT NULL,
  `balasan` varchar(100) NOT NULL,
  `tanggal_balasan` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `balas_komentar`
--

INSERT INTO `balas_komentar` (`id_balasan`, `id_komentar`, `balasan`, `tanggal_balasan`) VALUES
(1, 1, 'terima kasih', '2021-06-16 08:32:19'),
(2, 1, 'kembali lagi ya jangan kapok', '2021-06-17 03:32:04');

-- --------------------------------------------------------

--
-- Table structure for table `cafe`
--

CREATE TABLE `cafe` (
  `id_cafe` int(11) NOT NULL,
  `id_otomatis` varchar(11) NOT NULL,
  `id_kelurahan` int(11) NOT NULL,
  `nik` varchar(15) NOT NULL,
  `nama_cafe` varchar(100) NOT NULL,
  `nama_pemilik` varchar(40) NOT NULL,
  `email_pemilik` varchar(50) NOT NULL,
  `rt` char(5) NOT NULL,
  `rw` char(5) NOT NULL,
  `longitude` varchar(30) NOT NULL,
  `latitude` varchar(30) NOT NULL,
  `ktp` varchar(30) NOT NULL,
  `foto` varchar(50) NOT NULL,
  `deskripsi` text NOT NULL,
  `status` int(11) NOT NULL,
  `password` varchar(100) NOT NULL,
  `no_telp` varchar(15) NOT NULL,
  `jam_buka` time NOT NULL,
  `jam_tutup` time NOT NULL,
  `hari_buka` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cafe`
--

INSERT INTO `cafe` (`id_cafe`, `id_otomatis`, `id_kelurahan`, `nik`, `nama_cafe`, `nama_pemilik`, `email_pemilik`, `rt`, `rw`, `longitude`, `latitude`, `ktp`, `foto`, `deskripsi`, `status`, `password`, `no_telp`, `jam_buka`, `jam_tutup`, `hari_buka`) VALUES
(4, 'cafe-000004', 152, '1879120940', 'andri cafe', 'andri', 'onlyandri97@gmail.com', '', '', '109.7500490531208', '-6.916298588350704', 'covid1.png', 'devil-boy-4k-f9.jpg', 'cafe yang ada di daerah reban', 2, '$2y$10$9kd/SsgTYpBJlY3vzJP6Z.ajjN4JEOxk/jUZDYqOuOzGaqXAX.SX.', '082220209043', '01:01:00', '05:05:00', 'senin - jumat'),
(5, 'cafe-000005', 98, '12341235', 'likemie', 'anjayani', 'onlyandri@gmail.com', '', '', '109.72283437558208', '-6.905727795193875', 'download.jpg', 'devil-boy-4k-f91.jpg', 'cafe yang sangat memalukan', 1, '$2y$10$wIm51f75.xhJHpHIa9EgOOO3YqmrdtT0a00oYfipULlx7ikxt7Fem', '', '00:00:00', '00:00:00', ''),
(6, 'cafe-000006', 108, '172400159', 'bersinggah 2.0', 'rizal muh', 'andritok102@gmail.com', '', '', '109.72979301064034', '-6.908522681594839', 'bg_1.jpg', 'bg_3.jpg', 'cafe yang menyediakan berbagai macam cemilan dan makanan ringan', 2, '$2y$10$WNlOQ4pdQby5Q58jSlMfKuSHDx4SdyFZP0.mIsbLhC7x4YCRR4IhC', '', '00:00:00', '00:00:00', '');

-- --------------------------------------------------------

--
-- Table structure for table `galeri`
--

CREATE TABLE `galeri` (
  `id_galeri` int(11) NOT NULL,
  `id_cafe` int(11) NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `galeri`
--

INSERT INTO `galeri` (`id_galeri`, `id_cafe`, `gambar`, `nama`, `deskripsi`) VALUES
(1, 4, 'about1.jpg', 'Ruangan bersih', 'ruangan yang selalu di jaga kebersihannya'),
(2, 4, 'bg_1.jpg', 'kualitas kopi no 1', 'kami selalu menjaga kualitas adalah yang no 1'),
(3, 4, 'bg_3.jpg', 'barista yang cantik', 'tenang bagi anda yang jomblo disini baristanya cantik-cantik');

-- --------------------------------------------------------

--
-- Table structure for table `kecamatan`
--

CREATE TABLE `kecamatan` (
  `id_kecamatan` int(11) NOT NULL,
  `nama_kecamatan` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kecamatan`
--

INSERT INTO `kecamatan` (`id_kecamatan`, `nama_kecamatan`) VALUES
(1, 'Bandar'),
(2, 'Banyuputih'),
(3, 'Batang'),
(4, 'Bawang'),
(5, 'Blado'),
(6, 'Gringsing'),
(7, 'Kandeman'),
(8, 'Limpung'),
(9, 'Pecalungan'),
(10, 'Reban'),
(11, 'Subah'),
(12, 'Tersono'),
(13, 'Tulis'),
(14, 'Warungasem'),
(15, 'Wonotunggal');

-- --------------------------------------------------------

--
-- Table structure for table `kelurahan`
--

CREATE TABLE `kelurahan` (
  `id_kelurahan` int(11) NOT NULL,
  `id_kecamatan` int(11) NOT NULL,
  `nama_kelurahan` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kelurahan`
--

INSERT INTO `kelurahan` (`id_kelurahan`, `id_kecamatan`, `nama_kelurahan`) VALUES
(28, 1, 'Bandar'),
(29, 1, 'Batiombo'),
(30, 1, 'Binangun'),
(31, 1, 'Candi'),
(32, 1, 'Kluwih'),
(33, 1, 'Pesalakan'),
(34, 1, 'Pucanggading'),
(35, 1, 'Sidayu'),
(36, 1, 'Simpar'),
(37, 1, 'Tambahrejo'),
(38, 1, 'Tombo'),
(39, 1, 'Toso'),
(40, 1, 'Tumbrep'),
(41, 1, 'Wonodadi'),
(42, 1, 'Wonokerto'),
(43, 1, 'Wonomerto'),
(44, 1, 'Wonosegoro'),
(45, 2, 'Banaran'),
(46, 2, 'Banyuputih'),
(47, 2, 'Bulu'),
(48, 2, 'Dlimas'),
(49, 2, 'Kalangsono'),
(50, 2, 'Kalibak'),
(51, 2, 'Kedawung'),
(52, 2, 'Luwung'),
(53, 2, 'Penundan'),
(54, 2, 'Sembung'),
(55, 2, 'Timbang'),
(56, 3, 'Cepokokuning'),
(57, 3, 'Denasri Wetan'),
(58, 3, 'Denasri Kulon'),
(59, 3, 'Kalipucang Kulon'),
(60, 3, 'Kalipucang Wetan'),
(61, 3, 'Kalisalak'),
(62, 3, 'Karanganyar'),
(63, 3, 'Kecepak'),
(64, 3, 'Klidang Lor'),
(65, 3, 'Klidang Wetan'),
(66, 3, 'Pasekaran'),
(67, 3, 'Rowobelang'),
(68, 4, 'Karangasem Selatan'),
(69, 4, 'Karangasem Utara'),
(70, 4, 'Kasepuhan'),
(71, 4, 'Kauman'),
(72, 4, 'Proyonanggan Selatan'),
(73, 4, 'Proyonanggan Tengah'),
(74, 4, 'Proyonanggan Utara'),
(75, 4, 'Sambong'),
(76, 4, 'Watesalit'),
(77, 5, 'Bawang'),
(78, 5, 'Candigugur'),
(79, 5, 'Candirejo'),
(80, 5, 'Deles'),
(81, 5, 'Getas'),
(82, 5, 'Gunungsari'),
(83, 5, 'Jambangan'),
(84, 5, 'Jlamprang'),
(85, 5, 'Kalirejo'),
(86, 5, 'Kebaturan'),
(87, 5, 'Pangempon'),
(88, 5, 'Pasusukan'),
(89, 5, 'Pranten'),
(90, 5, 'Purbo'),
(91, 5, 'Sangubanyu'),
(92, 5, 'Sibebek'),
(93, 5, 'Sidoharjo'),
(94, 5, 'Soka'),
(95, 5, 'Surjo'),
(96, 5, 'Wonosari'),
(97, 6, 'Gringsing'),
(98, 6, 'Kebondalem'),
(99, 6, 'Ketanggan'),
(100, 6, 'Krengseng'),
(101, 6, 'Kutosari'),
(102, 6, 'Lebo'),
(103, 6, 'Madugowongjati'),
(104, 6, 'Mentosari'),
(105, 6, 'Plelen'),
(106, 6, 'Sawangan'),
(107, 6, 'Sentul'),
(108, 6, 'Sidorejo'),
(109, 6, 'Surodadi'),
(110, 6, 'Tedunan'),
(111, 6, 'Yosorejo'),
(112, 7, 'Bakalan'),
(113, 7, 'Botolambat'),
(114, 7, 'Cempereng'),
(115, 7, 'Depok'),
(116, 7, 'Juragan'),
(117, 7, 'Kandeman'),
(118, 7, 'Karanganom'),
(119, 7, 'Karanggeneng'),
(120, 7, 'Lawangaji'),
(121, 7, 'Tegalsari'),
(122, 7, 'Tragung'),
(123, 7, 'Ujungnegoro'),
(124, 7, 'Wonokerso'),
(125, 8, 'Amongrogo'),
(126, 8, 'Babadan'),
(127, 8, 'Dlisen'),
(128, 8, 'Donorejo'),
(129, 8, 'Kalisalak'),
(130, 8, 'Kepuh'),
(131, 8, 'Limpung'),
(132, 8, 'Lobang'),
(133, 8, 'Ngaliyan'),
(134, 8, 'Plumbon'),
(135, 8, 'Pungangan'),
(136, 8, 'Rowosari'),
(137, 8, 'Sempu'),
(138, 8, 'Sidomulyo'),
(139, 8, 'Sukorejo'),
(140, 8, 'Tembok'),
(141, 8, 'Wonokerso'),
(142, 9, 'Bandung'),
(143, 9, 'Gemuh'),
(144, 9, 'Gombong'),
(145, 9, 'Gumawang'),
(146, 9, 'Keniten'),
(147, 9, 'Pecalungan'),
(148, 9, 'Pretek'),
(149, 9, 'Randu'),
(150, 9, 'Selokarto'),
(151, 9, 'Siguci'),
(152, 10, 'Adinuso'),
(153, 10, 'Cablikan'),
(154, 5, 'Kalisari'),
(155, 10, 'Karanganyar'),
(156, 10, 'Kepundung'),
(157, 10, 'Kumesu'),
(158, 10, 'Mojotengah'),
(159, 10, 'Ngadirejo'),
(160, 10, 'Ngroto'),
(161, 10, 'Pacet'),
(162, 10, 'Padomasan'),
(163, 10, 'Polodoro'),
(164, 10, 'Reban'),
(165, 10, 'Semampir'),
(166, 10, 'Sojomerto'),
(167, 10, 'Sukomangli'),
(168, 10, 'Tambakboyo'),
(169, 10, 'Wonorejo'),
(170, 10, 'Wonosobo'),
(171, 6, 'Kebondalem'),
(172, 6, 'Ketanggan'),
(173, 6, 'Krengseng'),
(174, 6, 'Kutosari'),
(175, 6, 'Lebo'),
(176, 6, 'Madugowongjati'),
(177, 6, 'Mentosari'),
(178, 6, 'Plelen'),
(179, 6, 'Sawangan'),
(180, 6, 'Sentul'),
(181, 6, 'Sidorejo'),
(182, 6, 'Surodadi'),
(183, 6, 'Tedunan'),
(184, 6, 'Yosorejo'),
(185, 7, 'Bakalan'),
(186, 7, 'Botolambat'),
(187, 7, 'Cempereng'),
(188, 7, 'Depok'),
(189, 7, 'Juragan'),
(190, 7, 'Kandeman'),
(191, 7, 'Karanganom'),
(192, 7, 'Karanggeneng'),
(193, 7, 'Lawangaji'),
(194, 7, 'Tegalsari'),
(195, 7, 'Tragung'),
(196, 7, 'Ujungnegoro'),
(197, 7, 'Wonokerso'),
(198, 8, 'Amongrogo'),
(199, 8, 'Babadan'),
(200, 8, 'Dlisen'),
(201, 8, 'Donorejo'),
(202, 8, 'Kalisalak'),
(203, 8, 'Kepuh'),
(204, 8, 'Limpung'),
(205, 8, 'Lobang'),
(206, 8, 'Ngaliyan'),
(207, 8, 'Plumbon'),
(208, 8, 'Pungangan'),
(209, 8, 'Rowosari'),
(210, 8, 'Sempu'),
(211, 8, 'Sidomulyo'),
(212, 8, 'Sukorejo'),
(213, 8, 'Tembok'),
(214, 8, 'Wonokerso'),
(215, 9, 'Bandung'),
(216, 9, 'Gemuh'),
(217, 9, 'Gombong'),
(218, 9, 'Gumawang'),
(219, 9, 'Keniten'),
(220, 9, 'Pecalungan'),
(221, 9, 'Pretek'),
(222, 9, 'Randu'),
(223, 9, 'Selokarto'),
(224, 9, 'Siguci'),
(225, 10, 'Adinuso'),
(226, 10, 'Cablikan'),
(227, 10, 'Kalisari'),
(228, 10, 'Karanganyar'),
(229, 10, 'Kepundung'),
(230, 10, 'Kumesu'),
(231, 10, 'Mojotengah'),
(232, 10, 'Ngadirejo'),
(233, 10, 'Ngroto'),
(234, 10, 'Pacet'),
(235, 10, 'Padomasan'),
(236, 10, 'Polodoro'),
(237, 10, 'Reban'),
(238, 10, 'Semampir'),
(239, 10, 'Sojomerto'),
(240, 10, 'Sukomangli'),
(241, 10, 'Tambakboyo'),
(242, 10, 'Wonorejo'),
(243, 10, 'Wonosobo');

-- --------------------------------------------------------

--
-- Table structure for table `komentar`
--

CREATE TABLE `komentar` (
  `id_komentar` int(11) NOT NULL,
  `id_cafe` int(11) NOT NULL,
  `email_komentar` varchar(50) NOT NULL,
  `komen` text NOT NULL,
  `nama_komentar` varchar(50) NOT NULL,
  `tanggal_komentar` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `komentar`
--

INSERT INTO `komentar` (`id_komentar`, `id_cafe`, `email_komentar`, `komen`, `nama_komentar`, `tanggal_komentar`) VALUES
(1, 4, 'romanof@gmail.com', 'sangat mengesankan berada disini', 'romanof', '2021-06-16 08:07:42'),
(2, 4, 'raja@gmail.com', 'sangat mengesankan bagi saya', 'raja', '2021-06-16 08:51:08');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `id_menu` int(11) NOT NULL,
  `id_cafe` int(11) NOT NULL,
  `nama_menu` varchar(50) NOT NULL,
  `harga` int(11) NOT NULL,
  `foto_menu` varchar(50) NOT NULL,
  `tanggal_posting` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `deskripsi` varchar(100) NOT NULL,
  `detail` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id_menu`, `id_cafe`, `nama_menu`, `harga`, `foto_menu`, `tanggal_posting`, `deskripsi`, `detail`) VALUES
(3, 4, 'mocanios', 140000, 'bg_2.jpg', '2021-06-16 13:45:00', 'kopi dengan cita rasa yang unik', '<p style=\"text-align: center; \"><b>mocacinos</b></p><p style=\"text-align: left;\">dibuat dengan cinta dan segenap rasa yang tertinggal dengan segala kesempurnaan yang saya ciptakan hanya untuk membuat sebuah cita rasa yang perfect dengan kombinasi yang sangat pas</p>'),
(4, 4, 'cappucino', 15000, 'menu-4.jpg', '2021-06-17 02:54:15', 'cappucino numero uno', '<p>dibuat dengan semua kesempurnaan cinta, yang dipadukan dengan rasa lokal yang menggelora menghasilkan rasa yang tidak akan pernah terlupakan walau sampai akhir menutup mata.</p>'),
(5, 4, 'burger cheese', 50000, 'burger-1.jpg', '2021-06-17 02:55:59', 'burger dengan keju mozarella yang meleleh dimulut', '<p>dubuat dengan perpaduan antara roti yang empuk, daging sapi wagiu A5 yang mahal dan lembut, serta sayuran yang segar dipetik langsung dari kebun, menjadikan burger dengan rasa premium yang ajib banget dimulut</p>'),
(6, 4, 'mie tektek', 16000, 'image_1.jpg', '2021-06-17 02:57:32', 'mie goreng yang lezat sekalii', '<p>dibuat dengan mengetok2 wajan sehingga menimbulkan bunyi tek-tek-tek-tek sehingga di sebut dengan mie tek-tek.</p><p>dibuat oleh koki handal nan canggih untuk mendapatkan rasa yang tidak biasa</p>'),
(7, 4, 'steak wagiyu A5', 70000, 'dish-1.jpg', '2021-06-17 02:58:45', 'hidangan utama untuk kemewahan', '<p>dibuat dengan daging wagiu A5 yang mahal dan premium untuk rasa yang takan pernah terlupakan</p>'),
(8, 5, 'kopi', 1200, 'gambar.jpg', '2021-06-17 11:25:21', 'kaka', 'sdfdf'),
(9, 5, 'kopee', 1200, 'sdf', '2021-06-17 11:25:21', 'sds', 'sfd');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  `password` varchar(250) NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` int(1) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `name`, `email`, `image`, `password`, `role_id`, `is_active`, `date_created`) VALUES
(41, 'andri only', 'andri@gmail.com', 'default.jpg', '$2y$10$rx1g59b6BchuAwsUld1BiO8enTpaICslSOkQq/jDuNqdLKJBzh6EO', 2, 1, '2021-05-07 03:34:08');

-- --------------------------------------------------------

--
-- Table structure for table `user_token`
--

CREATE TABLE `user_token` (
  `id` int(11) NOT NULL,
  `email` varchar(200) NOT NULL,
  `token` varchar(200) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_token`
--

INSERT INTO `user_token` (`id`, `email`, `token`, `date_created`) VALUES
(35, 'Onlyandri97@gmail.com', 'pPNXhjNGZ8S4KvWlgBMXbxh+yAeGmhOo24U8muA=', 1614314196),
(36, 'onlyandri97@gmail.com', 'S6N6811QreUIzv3bXaW4r//VikAqze6PCz3MHzc=', 1618737628),
(37, 'onlyandri97@gmail.com', 'JOoDXYfMZMgI9UXsHpAZa23Cj2+jma36w1d2K9s=', 1618737635),
(38, 'onlyandri97@gmail.com', 'cD0nv5gQoaCxOSoqeKckYEnbmK/U30dp4FjQX5k=', 1618901035),
(39, 'agnirosadi08@gmail.com', 'G4rfQmVknZ087NgjPbeidUVuRod/SwReg+OjedY=', 1619975335),
(40, 'agnirosadi08@gmail.com', 'QE7DYbtoFtA019+yqrqWv3VMfGvLtl/UBj7iGHE=', 1619975340),
(41, 'onlyandri@gmail.com', 'rp/BAIVga7usaNjuPpZ3ZDqjsWAh4C9zr8qw0Fg=', 1623828473);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `balas_komentar`
--
ALTER TABLE `balas_komentar`
  ADD PRIMARY KEY (`id_balasan`);

--
-- Indexes for table `cafe`
--
ALTER TABLE `cafe`
  ADD PRIMARY KEY (`id_cafe`);

--
-- Indexes for table `galeri`
--
ALTER TABLE `galeri`
  ADD PRIMARY KEY (`id_galeri`);

--
-- Indexes for table `kecamatan`
--
ALTER TABLE `kecamatan`
  ADD PRIMARY KEY (`id_kecamatan`);

--
-- Indexes for table `kelurahan`
--
ALTER TABLE `kelurahan`
  ADD PRIMARY KEY (`id_kelurahan`);

--
-- Indexes for table `komentar`
--
ALTER TABLE `komentar`
  ADD PRIMARY KEY (`id_komentar`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id_menu`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `user_token`
--
ALTER TABLE `user_token`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `balas_komentar`
--
ALTER TABLE `balas_komentar`
  MODIFY `id_balasan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `cafe`
--
ALTER TABLE `cafe`
  MODIFY `id_cafe` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `galeri`
--
ALTER TABLE `galeri`
  MODIFY `id_galeri` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `kecamatan`
--
ALTER TABLE `kecamatan`
  MODIFY `id_kecamatan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `kelurahan`
--
ALTER TABLE `kelurahan`
  MODIFY `id_kelurahan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=244;

--
-- AUTO_INCREMENT for table `komentar`
--
ALTER TABLE `komentar`
  MODIFY `id_komentar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id_menu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `user_token`
--
ALTER TABLE `user_token`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
