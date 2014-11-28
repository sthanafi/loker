-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 28, 2014 at 03:49 AM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `loker`
--

-- --------------------------------------------------------

--
-- Table structure for table `pengguna`
--

CREATE TABLE IF NOT EXISTS `pengguna` (
  `id` tinyint(4) NOT NULL AUTO_INCREMENT,
  `username` varchar(32) NOT NULL,
  `password` varchar(32) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `pengguna`
--

INSERT INTO `pengguna` (`id`, `username`, `password`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3'),
(2, 'hanafi', 'hanafi');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE IF NOT EXISTS `transaksi` (
  `id_transaksi` smallint(6) NOT NULL AUTO_INCREMENT,
  `nama_pengguna` varchar(30) NOT NULL,
  `no_hp` varchar(13) NOT NULL,
  `keterangan` text NOT NULL,
  `no_loker` varchar(5) NOT NULL,
  `waktu_masuk` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `waktu_keluar` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `status_barang` tinyint(4) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id_transaksi`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id_transaksi`, `nama_pengguna`, `no_hp`, `keterangan`, `no_loker`, `waktu_masuk`, `waktu_keluar`, `status_barang`) VALUES
(3, 'hanafi', '0897216552625', 'tas', '56', '2014-11-28 09:46:53', '0000-00-00 00:00:00', 0),
(4, 'budi', '089762887625', 'sepatu', '78', '2014-11-28 09:47:14', '0000-00-00 00:00:00', 0),
(5, 'paijo', '0881917266255', 'peralatan dapur', '67', '2014-11-28 09:47:36', '0000-00-00 00:00:00', 0),
(6, 'rani', '086754664356', 'payung', '12', '2014-11-28 09:48:27', '0000-00-00 00:00:00', 0);
