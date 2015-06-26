-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 26, 2015 at 03:42 PM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_10_12_000000_create_users_table', 1),
('2014_10_12_100000_create_password_resets_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `monitor`
--

CREATE TABLE IF NOT EXISTS `monitor` (
  `id` int(11) NOT NULL,
  `noagenda` int(11) NOT NULL DEFAULT '0',
  `tariflama` varchar(50) NOT NULL DEFAULT '0',
  `lamadaya` varchar(50) NOT NULL DEFAULT '0',
  `tarifbaru` varchar(50) NOT NULL DEFAULT '0',
  `dayabaru` varchar(50) NOT NULL DEFAULT '0',
  `idpelanggan` int(11) NOT NULL DEFAULT '0',
  `namapelanggan` varchar(50) NOT NULL DEFAULT '0',
  `alamat` varchar(255) NOT NULL DEFAULT '0',
  `tanggalbayarbp` date NOT NULL DEFAULT '0000-00-00',
  `pengawas` varchar(50) NOT NULL DEFAULT '0',
  `pelaksana` varchar(50) NOT NULL DEFAULT '0',
  `nospk` int(11) NOT NULL DEFAULT '0',
  `jenispekerjaan` varchar(50) NOT NULL DEFAULT '0',
  `koorx` int(11) NOT NULL DEFAULT '0',
  `koory` int(11) NOT NULL DEFAULT '0',
  `sla` varchar(50) NOT NULL DEFAULT '0',
  `statuspengerjaan` varchar(50) NOT NULL DEFAULT '0',
  `lbsman` varchar(50) NOT NULL DEFAULT '0',
  `lbsmot` varchar(50) NOT NULL DEFAULT '0',
  `cbog` varchar(50) NOT NULL DEFAULT '0',
  `pb` varchar(50) NOT NULL DEFAULT '0',
  `OD160` varchar(50) NOT NULL DEFAULT '0',
  `OD250` varchar(50) NOT NULL DEFAULT '0',
  `OD400` varchar(50) NOT NULL DEFAULT '0',
  `OD630` varchar(50) NOT NULL DEFAULT '0',
  `ID400` varchar(50) NOT NULL DEFAULT '0',
  `ID630` varchar(50) NOT NULL DEFAULT '0',
  `OD4` varchar(50) NOT NULL DEFAULT '0',
  `ID4` varchar(50) NOT NULL DEFAULT '0',
  `ID6` varchar(50) NOT NULL DEFAULT '0',
  `ID8` varchar(50) NOT NULL DEFAULT '0',
  `sktm300` varchar(50) NOT NULL DEFAULT '0',
  `sktm240` varchar(50) NOT NULL DEFAULT '0',
  `sutm` varchar(50) NOT NULL DEFAULT '0',
  `skutm` varchar(50) NOT NULL DEFAULT '0',
  `scoretm` varchar(50) NOT NULL DEFAULT '0',
  `scoretr` varchar(50) NOT NULL DEFAULT '0',
  `nyfgby` varchar(50) NOT NULL DEFAULT '0',
  `jtr` varchar(50) NOT NULL DEFAULT '0',
  `keterangan` varchar(255) NOT NULL DEFAULT '0'
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=latin1 COMMENT='Table yang bakal digunain buat segala macem aplikasi pln';

--
-- Dumping data for table `monitor`
--

INSERT INTO `monitor` (`id`, `noagenda`, `tariflama`, `lamadaya`, `tarifbaru`, `dayabaru`, `idpelanggan`, `namapelanggan`, `alamat`, `tanggalbayarbp`, `pengawas`, `pelaksana`, `nospk`, `jenispekerjaan`, `koorx`, `koory`, `sla`, `statuspengerjaan`, `lbsman`, `lbsmot`, `cbog`, `pb`, `OD160`, `OD250`, `OD400`, `OD630`, `ID400`, `ID630`, `OD4`, `ID4`, `ID6`, `ID8`, `sktm300`, `sktm240`, `sutm`, `skutm`, `scoretm`, `scoretr`, `nyfgby`, `jtr`, `keterangan`) VALUES
(24, 123, '123', '123', '123', '123', 12312, 'abc', '0', '0000-00-00', '0', '0', 0, '0', 0, 0, '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0'),
(25, 4576879, '0', '0', '0', '0', 81246490, 'def', '0', '0000-00-00', '0', '0', 0, '0', 0, 0, '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0'),
(26, 5673453, '421465', '435', '5435', '45345', 67777666, 'abdul', '0', '0000-00-00', '0', '0', 0, '0', 0, 0, '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0'),
(27, 1454541, '0', '0', '0', '0', 53523413, 'ggg', '0', '0000-00-00', '0', '0', 0, '0', 0, 0, '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0'),
(28, 23412, '0', '0', '0', '0', 213123, 'sferwerwe', '0', '0000-00-00', 'joni', '0', 0, '0', 0, 0, '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', ''),
(29, 123, '123', '123', '123', '123', 32423, 'aawqeqw', '0', '0000-00-00', '0', '0', 0, '0', 0, 0, '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0'),
(30, 1454541, '0', '0', '0', '0', 42, 'ISS', '0', '0000-00-00', '0', '0', 0, '0', 0, 0, '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'qwe', 'qwe@qwedq.com', '$2y$10$06zLGe95L6xl91rIv2Ju/OjZobF5N5YuNZbL9ktRKnyim9xjBzheW', 'F88hJf9Txzds2fNGSNsR2jt7mbLziOVMRqaTMTHcseUZh56bZCdGgNDD8fxL', '2015-06-16 22:35:51', '2015-06-16 22:48:36'),
(2, 'asd', 'knigh_mukhlis_77@yahoo.com', '$2y$10$CPSPrIi5fnmFnSjtChuOI.PcKDaSCCCD6KnANKxJhDGHoMHVdYWda', 'YWCYyhCVlSgR0POxNZkYkWORueffWNBVh1FSn5KpvIT750asyyM01Dfjl02i', '2015-06-16 22:55:33', '2015-06-16 22:55:53'),
(3, 'asdf', 'asdf@lala.com', '$2y$10$xSEYjjKx1lo3KYEa.sApp.mcZ6G5GsoJSCJsvGpyjFdrHfnPKxt6u', 'YXsVSWg8CbuvkfU39imndKKqURVJ4dfl0W9DVvN3g99rDEKi91jprzcLmgj1', '2015-06-16 23:04:04', '2015-06-21 22:20:48');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `monitor`
--
ALTER TABLE `monitor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`), ADD KEY `password_resets_token_index` (`token`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `monitor`
--
ALTER TABLE `monitor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=31;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
