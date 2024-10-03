-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 07, 2020 at 05:10 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `homestay`
--

-- --------------------------------------------------------

--
-- Table structure for table `alamat`
--

CREATE TABLE `alamat` (
  `idalamat` int(11) NOT NULL,
  `alamat2` varchar(20) NOT NULL,
  `alamat1` varchar(20) NOT NULL,
  `bandar` varchar(20) NOT NULL,
  `poskod` varchar(5) NOT NULL,
  `negeri` varchar(20) NOT NULL,
  `icpelanggan` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `alamat`
--

INSERT INTO `alamat` (`idalamat`, `alamat2`, `alamat1`, `bandar`, `poskod`, `negeri`, `icpelanggan`) VALUES
(1, 'kampung pisang', 'no1', '22100', 'setiu', 'terengganu', '01010203124'),
(2, 'kampung pisang', 'no1', '22100', 'setiu', 'terengganu', '01010203124'),
(3, 'kampung pisang', 'no1', '22100', 'setiu', 'terengganu', '01010203124'),
(4, 'kampung pisang', 'no1', '22100', 'setiu', 'terengganu', '01010203124'),
(5, 'Jln. Mawar', 'no5', '21100', 'Binta', 'Selangor', '6812071111'),
(6, 'Perumahan Daliaa', 'No9', '11800', 'alor ', 'Perlis', '031207031234'),
(7, 'Jln. Bengkulu', 'no23', '11500', 'Balik', 'Pulau Penang', '681125115221');

-- --------------------------------------------------------

--
-- Table structure for table `bilik`
--

CREATE TABLE `bilik` (
  `idbilik` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `harga` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bilik`
--

INSERT INTO `bilik` (`idbilik`, `nama`, `harga`) VALUES
(2, 'Aries', '200.00'),
(10, 'Virgo', '250.00'),
(12, 'Gemini', '300.00');

-- --------------------------------------------------------

--
-- Table structure for table `pelanggan`
--

CREATE TABLE `pelanggan` (
  `icpelanggan` varchar(12) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `nomhp` varchar(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pelanggan`
--

INSERT INTO `pelanggan` (`icpelanggan`, `nama`, `nomhp`) VALUES
('01010203124', 'LILY QASTINA', '0199086622'),
('031207031234', 'HUMAIRAH MOHD', '0186452179'),
('681125115221', 'NATASYA WILONA', '0125847662'),
('6812071111', 'Daliaa Farah', '015369752');

-- --------------------------------------------------------

--
-- Table structure for table `pengguna`
--

CREATE TABLE `pengguna` (
  `nama_pengguna` varchar(20) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `kata_laluan` varchar(10) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengguna`
--

INSERT INTO `pengguna` (`nama_pengguna`, `nama`, `kata_laluan`, `status`) VALUES
('admin', 'PENGURUS SISTEM', '1234', 'ADMIN'),
('Aisyah', 'NUR AISYAH BINTI ZAMRI', '123', 'PEKERJA'),
('Auni', 'NURUL AUNI BINTI ZANAWANI', '2211', 'PEKERJA'),
('Irham', 'ARI IRHAM BIN UDIN', '321', 'PEKERJA');

-- --------------------------------------------------------

--
-- Table structure for table `tempah`
--

CREATE TABLE `tempah` (
  `idtempah` int(11) NOT NULL,
  `tarikh_masuk` date NOT NULL,
  `tarikh_keluar` date NOT NULL,
  `idbilik` varchar(10) NOT NULL,
  `idpelanggan` varchar(12) NOT NULL,
  `bayaran` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tempah`
--

INSERT INTO `tempah` (`idtempah`, `tarikh_masuk`, `tarikh_keluar`, `idbilik`, `idpelanggan`, `bayaran`) VALUES
(6, '2020-09-22', '2020-09-27', '10', '01010203124', '250.00'),
(8, '2020-09-24', '2020-09-27', '12', '031207031234', '300.00'),
(9, '2020-09-26', '2020-09-29', '2', '681125115221', '200.00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `alamat`
--
ALTER TABLE `alamat`
  ADD PRIMARY KEY (`idalamat`),
  ADD KEY `icpelanggan` (`icpelanggan`);

--
-- Indexes for table `bilik`
--
ALTER TABLE `bilik`
  ADD PRIMARY KEY (`idbilik`);

--
-- Indexes for table `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`icpelanggan`);

--
-- Indexes for table `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`nama_pengguna`);

--
-- Indexes for table `tempah`
--
ALTER TABLE `tempah`
  ADD PRIMARY KEY (`idtempah`),
  ADD KEY `idpelanggan` (`idpelanggan`),
  ADD KEY `idbilik` (`idbilik`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `alamat`
--
ALTER TABLE `alamat`
  MODIFY `idalamat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `bilik`
--
ALTER TABLE `bilik`
  MODIFY `idbilik` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tempah`
--
ALTER TABLE `tempah`
  MODIFY `idtempah` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
