-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 13, 2019 at 08:33 PM
-- Server version: 10.1.40-MariaDB
-- PHP Version: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kasir`
--

-- --------------------------------------------------------

--
-- Table structure for table `kelompok`
--

CREATE TABLE `kelompok` (
  `id` int(11) NOT NULL,
  `nmKelompok` varchar(50) NOT NULL,
  `owner` varchar(50) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kelompok`
--

INSERT INTO `kelompok` (`id`, `nmKelompok`, `owner`, `status`) VALUES
(1, 'dian backery', '2', 1);

-- --------------------------------------------------------

--
-- Table structure for table `menuSlidebar`
--

CREATE TABLE `menuSlidebar` (
  `kode` int(11) NOT NULL,
  `judulMenu` varchar(50) NOT NULL,
  `href` varchar(100) NOT NULL,
  `icon` varchar(50) NOT NULL,
  `isMainMenu` int(11) NOT NULL,
  `tingkatanUser` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menuSlidebar`
--

INSERT INTO `menuSlidebar` (`kode`, `judulMenu`, `href`, `icon`, `isMainMenu`, `tingkatanUser`) VALUES
(99, 'Settings', 'Setting', 'oi oi-browseroi oi-wrench', 0, 0),
(111, 'Manajemen Menu', 'Menu', 'oi oi-browser', 99, 0),
(112, 'Manajemen User', 'Usman', 'fas fa-user', 99, 0),
(113, 'Billing', 'Billing', 'fas fa-table', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `login` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(25) NOT NULL,
  `tingkatan` int(11) NOT NULL,
  `kelompok` varchar(50) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama`, `login`, `password`, `email`, `phone`, `tingkatan`, `kelompok`, `status`) VALUES
(1, 'Admin Super User', 'root', 'toor', 'root@localhost', '+62', 999, '0', 1),
(2, 'dian', 'dian', 'dian', 'dian@localhost', '0976544567', 1, '1', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kelompok`
--
ALTER TABLE `kelompok`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menuSlidebar`
--
ALTER TABLE `menuSlidebar`
  ADD PRIMARY KEY (`kode`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kelompok`
--
ALTER TABLE `kelompok`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `menuSlidebar`
--
ALTER TABLE `menuSlidebar`
  MODIFY `kode` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=114;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
