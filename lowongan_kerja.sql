-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 24, 2021 at 02:04 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lowongan_kerja`
--

-- --------------------------------------------------------

--
-- Table structure for table `perkerjaan`
--

CREATE TABLE `perkerjaan` (
  `id_perkerjaan` int(11) NOT NULL,
  `nama_perusahaan` varchar(25) NOT NULL,
  `email_perusahaan` varchar(45) NOT NULL,
  `img_perusahaan` varchar(100) NOT NULL,
  `contact` varchar(14) NOT NULL,
  `deskripsi_perkerjaan` text NOT NULL,
  `role_perkerjaan` varchar(25) NOT NULL,
  `tanggal_berlaku` date NOT NULL,
  `jenis_perkerjaan` enum('Full-time','Part-time','Internship','Freelance','Remote') NOT NULL,
  `bidang_perkerjaan` varchar(25) NOT NULL,
  `lokasi` text NOT NULL,
  `tgl_input` datetime NOT NULL,
  `status` enum('Verify','Not Verify') NOT NULL,
  `state` enum('Sudah Direview','Belum Direview') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `perkerjaan`
--

INSERT INTO `perkerjaan` (`id_perkerjaan`, `nama_perusahaan`, `email_perusahaan`, `img_perusahaan`, `contact`, `deskripsi_perkerjaan`, `role_perkerjaan`, `tanggal_berlaku`, `jenis_perkerjaan`, `bidang_perkerjaan`, `lokasi`, `tgl_input`, `status`, `state`) VALUES
(26, 'MohFhmi27', '11181048@student.itk.ac.id', '9857download.png', '813-848-8555', '<p>Something</p>\r\n\r\n<ul>\r\n	<li>test</li>\r\n	<li>test2</li>\r\n	<li>test3</li>\r\n	<li>test4</li>\r\n</ul>\r\n\r\n<p><strong>Banyak lah</strong></p>\r\n', 'Admin', '2021-03-31', 'Full-time', 'Informasi dan Teknologi', 'Samarinda, Kalimantan Timur', '2021-03-24 19:44:55', 'Verify', 'Sudah Direview'),
(27, 'Mohammad Fahmi', '11181048@student.itk.ac.id', '3717download.png', '813-848-8555', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas et porttitor mi. Morbi elementum felis tortor, eu efficitur arcu efficitur volutpat. Maecenas elementum fermentum placerat. Praesent vel purus lorem. Nam efficitur ligula non malesuada ullamcorper. Vestibulum eget faucibus odio, sed maximus diam. Vestibulum mattis dictum turpis sed mollis. Nullam luctus dolor a urna ultrices pretium. Integer nec egestas risus. Praesent at neque porttitor, euismod ligula at, ultrices sapien.</p>\r\n\r\n<p>Cras ullamcorper, quam ac finibus convallis, nisi ligula fermentum mi, quis iaculis nulla magna non elit. Aenean egestas luctus bibendum. Cras purus augue, ultricies semper ligula nec, ornare molestie dolor. Aliquam pretium turpis et turpis volutpat, ac suscipit sapien malesuada. In leo velit, posuere quis velit sollicitudin, interdum accumsan tortor. Vestibulum mollis, sem vel hendrerit faucibus, risus urna malesuada nulla, sed congue mi metus vel lorem. Proin luctus ipsum ex, sit amet pretium elit euismod et. Cras imperdiet vitae libero eu viverra. Nulla tortor nulla, iaculis fringilla dapibus ut, semper placerat tortor. Vivamus tempor justo tincidunt magna elementum, vel pharetra neque elementum.</p>\r\n\r\n<p>Integer faucibus ultricies consectetur. Duis quis interdum massa. In at enim quis sapien commodo lacinia. Praesent sem odio, porttitor at odio porta, varius vestibulum neque. Vestibulum lobortis, lacus sed condimentum mattis, sem tellus mollis lorem, nec lobortis ipsum tortor eu dui. Etiam mollis malesuada purus, nec ultricies arcu tristique ut. Nunc ut pulvinar massa. Aenean placerat urna vestibulum tempor feugiat. Morbi egestas eget nisi et gravida. Aenean risus felis, blandit vel vulputate quis, cursus a lacus. Maecenas in leo blandit, bibendum quam ac, ultricies ligula.</p>\r\n', 'Admin', '2021-03-31', 'Remote', 'Logistik', 'Samarinda, Kalimantan Timur', '2021-03-24 20:24:53', 'Verify', 'Sudah Direview'),
(29, 'Test', '11181048@student.itk.ac.id', '291download.jpg', '81348563609', '<p>lorem</p>\r\n\r\n<ol>\r\n	<li>test</li>\r\n	<li>tes3</li>\r\n	<li>test4</li>\r\n</ol>\r\n', 'Admin', '2021-03-30', 'Internship', 'Pemerintahan', 'Samarinda, Kalimantan Timur', '2021-03-24 20:58:49', 'Verify', 'Sudah Direview');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `perkerjaan`
--
ALTER TABLE `perkerjaan`
  ADD PRIMARY KEY (`id_perkerjaan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `perkerjaan`
--
ALTER TABLE `perkerjaan`
  MODIFY `id_perkerjaan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
