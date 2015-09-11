-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 07, 2015 at 02:01 PM
-- Server version: 5.5.40-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `pondokgurubakti`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE IF NOT EXISTS `booking` (
  `id_booking` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(30) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `no_telp` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `tipe_kamar` int(10) NOT NULL,
  `tanggal_masuk` datetime NOT NULL,
  `tanggal_keluar` datetime NOT NULL,
  `status` tinyint(1) NOT NULL,
  `extra_bed` int(20) NOT NULL,
  `code_booking` varchar(10) NOT NULL,
  PRIMARY KEY (`id_booking`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`id_booking`, `nama`, `alamat`, `no_telp`, `email`, `tipe_kamar`, `tanggal_masuk`, `tanggal_keluar`, `status`, `extra_bed`, `code_booking`) VALUES
(1, 'ar', 'gfagsfggagag', '4434343', 'arum@gmail.com', 4, '2015-08-23 00:00:00', '2015-08-25 00:00:00', 1, 2, 'aaaa');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE IF NOT EXISTS `gallery` (
  `id_gmb` int(10) NOT NULL AUTO_INCREMENT,
  `judul` varchar(50) NOT NULL,
  `url` varchar(100) NOT NULL,
  `comment` varchar(150) NOT NULL,
  `filename` varchar(50) NOT NULL,
  `date_upload` datetime NOT NULL,
  `content_id` int(10) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `deskripsi` varchar(300) NOT NULL,
  `cover_gambar` varchar(100) NOT NULL,
  `jns_file` varchar(20) NOT NULL,
  `other_id` int(11) NOT NULL DEFAULT '0',
  `tipe_album` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id_gmb`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id_gmb`, `judul`, `url`, `comment`, `filename`, `date_upload`, `content_id`, `status`, `deskripsi`, `cover_gambar`, `jns_file`, `other_id`, `tipe_album`) VALUES
(2, 'dsadsa', 'dsada', 'dsadsa', 'dsadsada', '0000-00-00 00:00:00', 1, 1, '', '', '', 0, 0),
(3, 'aaaaaaa', '', '', 'b367b8c6bf440f1132a6945be6f532cc.jpg', '0000-00-00 00:00:00', 0, 0, 'dsadasda	sadsad						', '', '', 0, 0),
(4, 'bbbb', '', '', '', '0000-00-00 00:00:00', 0, 0, 'bbbb					', '', '', 0, 0),
(5, 'cccc', '', '', '89865a7912e51336f142982511248669.png', '0000-00-00 00:00:00', 0, 0, 'cccc	', '', '', 0, 0),
(6, 'ar', '', '', 'cf8e16469f3e05eddee0cc9481779a7d.jpg', '0000-00-00 00:00:00', 0, 0, 'ararrrrrrarararaarrr						', '', '', 0, 0),
(7, 'asa', '', '', '36e8de09de0ebcf6af69be8254151c80.jpg', '0000-00-00 00:00:00', 0, 0, 'fsafad			', '', '', 0, 0),
(8, 'csacacs', '', '', 'ab8f6543198a5c94a93a591f502169c8.png', '0000-00-00 00:00:00', 0, 2, 'csacsaca', '', 'Foto', 3, 0),
(9, 'dd', '', '', '5b8002cdbbb1d1120072d6fed03bef98.jpg', '0000-00-00 00:00:00', 0, 0, 'dddddddddddddddddddddddddddddd', '', 'Foto', 7, 0),
(10, 'vxvxvvx', '', '', 'b461eda3c6608f34e94443dd9f189d9c.png', '0000-00-00 00:00:00', 0, 0, 'vcxvx', '', 'Foto', 7, 0),
(11, 'kaptain', '', '', '', '0000-00-00 00:00:00', 0, 0, 'alkisah alkisah alkisah alkisah alkisah alkisah v alkisah alkisah alkisah alkisah v v alkisah alkisah alkisah v alkisahalkisahv\r\n\r\nalkisahalkisahv\r\nalkisahalkisah\r\n\r\n\r\n\r\nalkisahalkisah\r\n\r\nalkisah alkisah alkisah alkisah alkisah alkisah v alkisah alkisah alkisah alkisah v v alkisah alkisah alkisah v ', '', 'Foto', 3, 0);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE IF NOT EXISTS `news` (
  `id_news` int(10) NOT NULL AUTO_INCREMENT,
  `judul` varchar(50) NOT NULL,
  `ulasan` varchar(100) NOT NULL,
  `detail` varchar(500) NOT NULL,
  `tanggal_upload` datetime NOT NULL,
  `author` varchar(20) NOT NULL,
  `status` tinyint(1) NOT NULL,
  PRIMARY KEY (`id_news`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id_news`, `judul`, `ulasan`, `detail`, `tanggal_upload`, `author`, `status`) VALUES
(1, 'fafafadf', 'ffaadfadfasdfdsaf', 'dfadasfadsfasdasdfdas', '2015-08-23 00:00:00', 'aa', 2),
(2, 'lalallalaaa', 'afafafaefafaefaef', '<p>efeafawefaefafafaewfafaeaw</p>', '2015-07-29 00:00:00', '', 1),
(3, 'jajal aja yah', 'ini adalah coba coba', '<p><p>ini adalah coba coba&nbsp;ini adalah coba coba&nbsp;ini adalah coba coba&nbsp;ini adalah coba coba &nbsp;ini adalah coba coba</p><p><br></p><p>ini adalah coba coba</p><p>ini adalah coba coba</p><p>ini adalah coba coba<br></p><hr id="[object Object]">ini adalah coba coba<hr id="[object Object]">ini adalah coba coba<hr id="[object Object]">v</p><hr id="[object Object]">v<hr id="[object Object]">ini adalah coba coba<hr id="[object Object]">ini adalah coba coba<hr id="[object Object]">v<hr id=', '0000-00-00 00:00:00', '2015-08-19', 1),
(4, 'coba malam malam', 'aaaa', '<p>aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa</p><p>aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa</p><p><br></p><p>aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaav</p><p><br></p><p><br></p><p><br></p><p>aaaa<br></p>', '0000-00-00 00:00:00', '2015-08-26', 1),
(5, 'arum coba siang', 'a', '2015-08-01', '0000-00-00 00:00:00', '0', 1),
(6, 'csasaca', 'csasa', '<p>csacsacas</p>', '0000-00-00 00:00:00', '2015-07-28', 1),
(7, 'aaaaa', 'csacasca', '<p>csacsacascacsa</p>', '2015-07-06 00:00:00', 'admin', 1),
(8, 'aaaaaaa', 'asasasa', '<p>sasasa</p>', '2015-07-28 00:00:00', 'admin', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id_user` int(10) NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) NOT NULL,
  `username` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(100) NOT NULL,
  `salt` varchar(10) NOT NULL,
  `date_reg` datetime NOT NULL,
  `status` tinyint(1) NOT NULL,
  `group` int(10) NOT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama`, `username`, `email`, `password`, `salt`, `date_reg`, `status`, `group`) VALUES
(1, 'admin', 'admin', 'admin@admin.com', 'dd94709528bb1c83d08f3088d4043f4742891f4f', 'admin', '2015-08-23 00:00:00', 1, 1),
(2, 'arum', 'arum', 'arumtri@arum.com', 'arum', 'admin', '2015-08-23 00:00:00', 1, 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
