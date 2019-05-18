-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Waktu pembuatan: 18. Mei 2019 jam 12:06
-- Versi Server: 5.5.8
-- Versi PHP: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `penjualan`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `barang`
--

CREATE TABLE IF NOT EXISTS `barang` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` text NOT NULL,
  `harga_jual` int(11) NOT NULL,
  `harga_beli` int(11) NOT NULL,
  `satuan` text NOT NULL,
  `keterangan` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=35 ;

--
-- Dumping data untuk tabel `barang`
--

INSERT INTO `barang` (`id`, `nama`, `harga_jual`, `harga_beli`, `satuan`, `keterangan`) VALUES
(17, 'tim tam', 3000, 1500, '1', ''),
(19, 'tic tac', 2000, 1500, '1', NULL),
(20, 'aqua sedang', 3000, 1500, '1', NULL),
(23, 'magnum', 12000, 10000, '1', NULL),
(27, 'fit gelas', 500, 400, '1', NULL),
(28, 'mild', 17000, 15000, '1', NULL),
(29, 'dji sam soe', 15000, 14000, '1', NULL),
(30, 'nu mild', 16000, 15000, '1', NULL),
(34, 'beng beng', 2000, 1500, '1', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `penjualan`
--

CREATE TABLE IF NOT EXISTS `penjualan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tanggal` date NOT NULL,
  `nama_konsumen` text NOT NULL,
  `nama` text NOT NULL,
  `jumlah` int(11) NOT NULL,
  `harga` int(11) NOT NULL,
  `total_harga` int(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=65 ;

--
-- Dumping data untuk tabel `penjualan`
--

INSERT INTO `penjualan` (`id`, `tanggal`, `nama_konsumen`, `nama`, `jumlah`, `harga`, `total_harga`) VALUES
(46, '2015-02-01', 'Rizky', 'roti unibis', 2, 6000, 12000),
(47, '2015-02-02', 'Agus', 'makkkanan', 7, 12000, 84000),
(48, '2015-02-02', 'Kurniawan', 'dji sam soe', 2, 15000, 30000),
(49, '2015-02-03', 'Fachry', 'makkkanan', 1, 12000, 12000),
(50, '2015-02-01', 'Indy', 'tim tam', 2, 4000, 8000),
(51, '2015-02-02', 'Ikbal', 'mild', 2, 17000, 34000),
(52, '2015-02-03', 'Diki', 'magnum', 1, 18000, 18000),
(53, '2015-02-06', 'gumil', 'dji sam soe', 2, 19000, 38000),
(54, '2015-02-15', 'Ichsan', 'nu mild', 2, 19100, 38200),
(55, '2015-02-27', 'Rogo', 'roti unibis', 2, 8000, 16000),
(56, '2015-02-19', 'Sammy', 'roti unibis', 1, 7000, 7000),
(57, '2015-01-14', 'Agung', 'roti unibis', 1, 7000, 7000),
(58, '2015-02-01', 'Rosita', 'pulpen', 1, 3000, 3000),
(59, '2015-02-02', 'Bagas', 'roti', 2, 3000, 6000),
(63, '2016-01-22', 'Bagol', 'tic tac', 8, 4000, 32000);
