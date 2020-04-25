-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 25, 2020 at 05:05 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kesehatan`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('admin', 'admin'),
('admin01', 'admin01'),
('aku', 'aku'),
('ody', 'ody'),
('rafi', 'rafi'),
('rui', 'rui'),
('saya', 'saya'),
('siap', 'siap');

-- --------------------------------------------------------

--
-- Table structure for table `odp`
--

CREATE TABLE `odp` (
  `id_odp` int(10) NOT NULL,
  `nama` varchar(299) NOT NULL,
  `umur` varchar(30) NOT NULL,
  `alamat` varchar(299) NOT NULL,
  `suhu` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `odp`
--

INSERT INTO `odp` (`id_odp`, `nama`, `umur`, `alamat`, `suhu`) VALUES
(3, 'Tsubasa', '44', 'JL. Berlubang', '37'),
(5, 'Genji', '33', 'JL. Aspal', '37'),
(6, 'Buffon', '23', 'JL. Berkelok', '37');

-- --------------------------------------------------------

--
-- Table structure for table `pdp`
--

CREATE TABLE `pdp` (
  `id_pdp` int(10) NOT NULL,
  `nama` varchar(299) NOT NULL,
  `umur` varchar(30) NOT NULL,
  `alamat` varchar(299) NOT NULL,
  `suhu` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pdp`
--

INSERT INTO `pdp` (`id_pdp`, `nama`, `umur`, `alamat`, `suhu`) VALUES
(2, 'Teveza', '45', 'JL. Argentina', '39');

-- --------------------------------------------------------

--
-- Table structure for table `positif`
--

CREATE TABLE `positif` (
  `id_positif` int(10) NOT NULL,
  `nama` varchar(299) NOT NULL,
  `umur` varchar(30) NOT NULL,
  `alamat` varchar(299) NOT NULL,
  `suhu` varchar(30) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `positif`
--

INSERT INTO `positif` (`id_positif`, `nama`, `umur`, `alamat`, `suhu`, `status`) VALUES
(2, 'Higuiti', '87', 'JL. Tikus', '39', 'Sembuh');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `odp`
--
ALTER TABLE `odp`
  ADD PRIMARY KEY (`id_odp`);

--
-- Indexes for table `pdp`
--
ALTER TABLE `pdp`
  ADD PRIMARY KEY (`id_pdp`);

--
-- Indexes for table `positif`
--
ALTER TABLE `positif`
  ADD PRIMARY KEY (`id_positif`),
  ADD UNIQUE KEY `id_status` (`status`),
  ADD KEY `status` (`status`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `odp`
--
ALTER TABLE `odp`
  MODIFY `id_odp` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `pdp`
--
ALTER TABLE `pdp`
  MODIFY `id_pdp` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `positif`
--
ALTER TABLE `positif`
  MODIFY `id_positif` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
