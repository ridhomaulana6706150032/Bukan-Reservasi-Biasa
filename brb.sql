-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 05, 2017 at 05:57 AM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `brb`
--

-- --------------------------------------------------------

--
-- Table structure for table `meja`
--

CREATE TABLE IF NOT EXISTS `meja` (
  `id_meja` varchar(5) NOT NULL,
  `id_restoran` varchar(10) NOT NULL,
  PRIMARY KEY (`id_meja`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `meja`
--

INSERT INTO `meja` (`id_meja`, `id_restoran`) VALUES
('A1', 'R0001'),
('A2', 'R0001'),
('A3', 'R0001'),
('A4', 'R0002');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE IF NOT EXISTS `register` (
  `nama` varchar(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  `username` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`nama`, `email`, `username`, `password`) VALUES
('', '', '', 'd41d8cd98f00b204e9800998ecf8427e'),
('aras', 'ar@gmail.com', 'arsyan', 'e4cc65e5749b25cc212cee483e1dbf29'),
('Ridho Maulana Cahyudi', 'ridhomaulana252@yahoo.com', 'maulanaridho', '0d959d72214a4cf573a2a7d3c64f76f6'),
('Ridho Maulana Cahyudi', 'ridhomaulana252@yahoo.com', 'ridhomaulana', 'f5bb0c8de146c67b44babbf4e6584cc0'),
('Ridho Maulana Cahyudi', 'ridhomaulana252@yahoo.com', 'ridhomaulana1', '0d959d72214a4cf573a2a7d3c64f76f6');

-- --------------------------------------------------------

--
-- Table structure for table `reservasi`
--

CREATE TABLE IF NOT EXISTS `reservasi` (
  `id_reservasi` int(100) NOT NULL AUTO_INCREMENT,
  `nama_cust` varchar(50) NOT NULL,
  `id_restoran` varchar(50) NOT NULL,
  `id_meja` varchar(5) NOT NULL,
  `nama_restoran` varchar(40) NOT NULL,
  PRIMARY KEY (`id_reservasi`),
  KEY `nama_restoran` (`nama_restoran`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `reservasi`
--

INSERT INTO `reservasi` (`id_reservasi`, `nama_cust`, `id_restoran`, `id_meja`, `nama_restoran`) VALUES
(10, 'ridho maulana', 'R0001', 'A1', ''),
(11, 'fasfs', 'R0001', 'A1', '');

-- --------------------------------------------------------

--
-- Table structure for table `restoran`
--

CREATE TABLE IF NOT EXISTS `restoran` (
  `id_restoran` varchar(10) NOT NULL,
  `nama_restoran` varchar(40) NOT NULL,
  PRIMARY KEY (`id_restoran`),
  UNIQUE KEY `nama_restoran` (`nama_restoran`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `restoran`
--

INSERT INTO `restoran` (`id_restoran`, `nama_restoran`) VALUES
('R0004', 'Bakso Akung'),
('R0002', 'Bakso Boedjangan'),
('R0003', 'Nasi Goreng Mafia'),
('R0001', 'Warunk Upnormal'),
('R0005', 'Wendy''s');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
