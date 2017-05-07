-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 07, 2017 at 08:04 AM
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
('A10', 'R0001'),
('A2', 'R0001'),
('A3', 'R0001'),
('A4', 'R0001'),
('A5', 'R0001'),
('A6', 'R0001'),
('A7', 'R0001'),
('A8', 'R0001'),
('A9', 'R0001'),
('B1', 'R0002'),
('B10', 'R0002'),
('B2', 'R0002'),
('B3', 'R0002'),
('B4', 'R0002'),
('B5', 'R0002'),
('B6', 'R0002'),
('B7', 'R0002'),
('B8', 'R0002'),
('B9', 'R0002'),
('C1', 'R0003'),
('C10', 'R0003'),
('C2', 'R0003'),
('C3', 'R0003'),
('C4', 'R0003'),
('C5', 'R0003'),
('C6', 'R0003'),
('C7', 'R0003'),
('C8', 'R0003'),
('C9', 'R0003'),
('D1', 'R0004'),
('D10', 'R0004'),
('D2', 'R0004'),
('D3', 'R0004'),
('D4', 'R0004'),
('D5', 'R0004'),
('D6', 'R0004'),
('D7', 'R0004'),
('D8', 'R0004'),
('D9', 'R0004'),
('E1', 'R0005'),
('E10', 'R0005'),
('E2', 'R0005'),
('E3', 'R0005'),
('E4', 'R0005'),
('E5', 'R0005'),
('E6', 'R0005'),
('E7', 'R0005'),
('E8', 'R0005'),
('E9', 'R0005');

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
('arsyan', 'arsyan@g.com', 'arsyan', 'c4ca4238a0b923820dcc509a6f75849b'),
('kuramammmmmmm', 'kurama@gm.com', 'kuramasieu', 'c20ad4d76fe97759aa27a0c99bff6710'),
('maulana cahyudi', 'ridh@gmail.com', 'ridho', 'c4ca4238a0b923820dcc509a6f75849b'),
('Ridho Maulana Cahyudi', 'ridho@yahoo.com', 'ridhomaulana', '0d959d72214a4cf573a2a7d3c64f76f6');

-- --------------------------------------------------------

--
-- Table structure for table `reservasi`
--

CREATE TABLE IF NOT EXISTS `reservasi` (
  `id_reservasi` int(100) NOT NULL AUTO_INCREMENT,
  `nama_cust` varchar(50) NOT NULL,
  `id_restoran` varchar(10) NOT NULL,
  `id_meja` varchar(5) NOT NULL,
  PRIMARY KEY (`id_reservasi`),
  KEY `id_restoran` (`id_restoran`),
  KEY `id_meja` (`id_meja`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `reservasi`
--

INSERT INTO `reservasi` (`id_reservasi`, `nama_cust`, `id_restoran`, `id_meja`) VALUES
(12, 'asdasd', 'R0001', 'A1'),
(13, 'haga', 'R0002', 'B6'),
(14, 'ridho', 'R0003', 'C2');

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

--
-- Constraints for dumped tables
--

--
-- Constraints for table `reservasi`
--
ALTER TABLE `reservasi`
  ADD CONSTRAINT `reservasi_ibfk_2` FOREIGN KEY (`id_meja`) REFERENCES `meja` (`id_meja`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `reservasi_ibfk_1` FOREIGN KEY (`id_restoran`) REFERENCES `restoran` (`id_restoran`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
