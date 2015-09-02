-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 02, 2015 at 06:12 PM
-- Server version: 5.6.24
-- PHP Version: 5.5.24

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
  `id_booking` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `no_telp` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `tipe_kamar` int(10) NOT NULL,
  `tanggal_masuk` datetime NOT NULL,
  `tanggal_keluar` datetime NOT NULL,
  `status` tinyint(1) NOT NULL,
  `extra_bed` int(20) NOT NULL DEFAULT '0',
  `code_booking` varchar(10) NOT NULL,
  `date_book` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`id_booking`, `nama`, `alamat`, `no_telp`, `email`, `tipe_kamar`, `tanggal_masuk`, `tanggal_keluar`, `status`, `extra_bed`, `code_booking`, `date_book`) VALUES
(1, 'ar', 'gfagsfggagag', '4434343', 'arum@gmail.com', 4, '2015-08-23 00:00:00', '2015-08-25 00:00:00', 1, 2, 'aaaa', '0000-00-00 00:00:00'),
(7, 'AFD', '', 'FDAF', 'FDFA', 4, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0, '', '2015-09-02 15:01:56'),
(8, 'fdsdfsdf', '', 'dfasfas', 'dafdfas', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0, 'U2AJ3F', '2015-09-02 15:12:37');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE IF NOT EXISTS `gallery` (
  `id_gmb` int(10) NOT NULL,
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
  `tipe_album` int(10) NOT NULL DEFAULT '0'
) ENGINE=InnoDB AUTO_INCREMENT=38 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id_gmb`, `judul`, `url`, `comment`, `filename`, `date_upload`, `content_id`, `status`, `deskripsi`, `cover_gambar`, `jns_file`, `other_id`, `tipe_album`) VALUES
(18, 'aru', '', '', '532cb1681069fda9948aa24fba4ed697.jpg', '0000-00-00 00:00:00', 0, 2, 'afafssssssssssssssssssssssss								', '', '', 0, 0),
(21, 'yip', '', '', 'c836769b9608e8edc909aa756a6ae232.jpg', '0000-00-00 00:00:00', 0, 0, '432423432 \r\ne434324\r\n\r\n\r\ngdfg\r\ndfg\r\ndfg\r\nd\r\nfg\r\nd\r\ngsd						', '', '', 0, 0),
(22, 'koalaaa', '', '', 'be1b5716de56abd307cd5a697ca7c8bd.jpg', '0000-00-00 00:00:00', 0, 2, 'koalaaakoalaaakoalaaakoalaaa\r\n\r\n\r\nkoalaaa\r\nkoalaaa\r\n\r\n\r\n\r\nkoalaaa', '', 'Foto', 18, 0),
(23, 'arumzzzzz', '', '', '', '0000-00-00 00:00:00', 0, 2, 'Morbi id felis porttitor tellus viverra pulvinar. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices Morbi id felis porttitor tellus viverra pulvinar. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices Morbi id felis porttitor tellus viverra pulvinar. Vestibulum ante ipsu', '', '', 0, 0),
(24, 'ocop', '', '', 'eda3f3b86d1ae6293760ed7bd3006a76.jpg', '0000-00-00 00:00:00', 0, 0, 'rer								rer								rer								rer								rer								rer								rer								rer								rer								rer								rer								rer								rer								rer								rer								rer								', '', '', 0, 0),
(25, 'juice', '', '', '431b033540a1ec0250f45b0542eb1a97.png', '0000-00-00 00:00:00', 0, 1, 'jdkasjdsfjsfjjsdoj			jdkasjdsfjsfjjsdoj			jdkasjdsfjsfjjsdoj			jdkasjdsfjsfjjsdoj			jdkasjdsfjsfjjsdoj			\r\n\r\n\r\njdkasjdsfjsfjjsdoj			jdkasjdsfjsfjjsdoj			jdkasjdsfjsfjjsdoj			jdkasjdsfjsfjjsdoj			jdkasjdsfjsfjjsdoj			', '', '', 0, 0),
(26, 'Gallery Kamar', '', '', '04e163e93ae3dd7e3307ed96228ff238.jpg', '0000-00-00 00:00:00', 0, 1, 'Gallery Kamar', '', '', 0, 1),
(27, 'ar 1', '', '', '4196a58611ab145b2f8523832c5b00de.jpg', '0000-00-00 00:00:00', 0, 2, 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat.\r\n\r\nLorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat.\r\n\r\nLorem ipsum dolor sit ', '', 'Foto', 26, 0),
(28, 'ar 2', '', '', '84772c5aec75b52bde5389387cc414ac.jpg', '0000-00-00 00:00:00', 0, 1, 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat.\r\n\r\n\r\nLorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat.\r\n\r\n\r\n\r\n\r\nLorem ipsum do', '', 'Foto', 26, 0),
(29, 'dd', '', '', '96a9405286e878fedf1de427287c7808.jpg', '0000-00-00 00:00:00', 0, 2, 'd', '', 'Foto', 25, 0),
(30, 'kakak', '', '', '5cc0683c5e188d3d965f6e801bcb79cb.jpg', '0000-00-00 00:00:00', 0, 2, 'mfdjdfkdkfdskfasjfjdsfh', '', 'Foto', 18, 0),
(31, 'sjysjalo', '', '', 'b1f47fb10ac6ac5368e99e8a0c49faac.jpg', '0000-00-00 00:00:00', 0, 0, 'hdfkahsfkh sadfhds', '', 'Foto', 18, 0),
(32, 'fhasfhkdfh', '', '', '23df934f93ba870bd37c763e3748384b.jpg', '0000-00-00 00:00:00', 0, 2, 'dsflasdjfjfasifj', '', 'Foto', 18, 0),
(34, 'mamah', '', '', 'ab9af36c732b3e8b90a58d7ec9349945.jpg', '2015-09-02 13:59:07', 0, 1, 'dubudiiii			', '', '', 0, 0),
(35, 'arumzzzzz', '', '', '', '2015-09-02 14:39:14', 0, 2, 'Morbi id felis porttitor tellus viverra pulvinar. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices Morbi id felis porttitor tellus viverra pulvinar. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices Morbi id felis porttitor tellus viverra pulvinar. Vestibulum ante ipsu', '', '', 0, 0),
(36, 'arumzzzzz', '', '', '', '2015-09-02 14:40:06', 0, 2, 'Morbi id felis porttitor tellus viverra pulvinar. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices Morbi id felis porttitor tellus viverra pulvinar. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices Morbi id felis porttitor tellus viverra pulvinar. Vestibulum ante ipsu', '', '', 0, 0),
(37, 'AKU', '', '', 'c532d92402ec10a6410a9507ffd2d49b.jpg', '2015-09-02 14:56:14', 0, 0, 'FFFFFF								\r\n								\r\n								', '', '', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE IF NOT EXISTS `news` (
  `id_news` int(10) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `ulasan` varchar(100) NOT NULL,
  `detail` varchar(500) NOT NULL,
  `tanggal_upload` datetime NOT NULL,
  `author` varchar(20) NOT NULL,
  `gambar` varchar(100) DEFAULT NULL,
  `status` tinyint(1) NOT NULL,
  `post_date` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id_news`, `judul`, `ulasan`, `detail`, `tanggal_upload`, `author`, `gambar`, `status`, `post_date`) VALUES
(10, 'test berita', 'hjthjdtrhjdtrh', 'shsthstrhsrthsrthsr', '2015-08-31 00:00:00', 'admin', '4ca13df65828018d9d92455467669d7d.jpg', 1, '0000-00-00 00:00:00'),
(11, 'arumz', 'faafa', '<p>agddgadgadsgadsgadgasdgadsgad</p>', '2015-08-01 00:00:00', 'admin', '1a62de6f2f8cf3b8cf0f464513711139.jpg', 1, '0000-00-00 00:00:00'),
(12, 'beautyyyy', 'when when when when when when when when when when when when when when when when when when when when ', '<p>hhh&nbsp;<span style="line-height: 17.142858505249px;">hhh&nbsp;</span><span style="line-height: 17.142858505249px;">hhh&nbsp;</span><span style="line-height: 17.142858505249px;">hhh&nbsp;</span><span style="line-height: 17.142858505249px;">hhh&nbsp;</span><span style="line-height: 17.142858505249px;">hhh&nbsp;</span><span style="line-height: 17.142858505249px;">hhh&nbsp;</span><span style="line-height: 17.142858505249px;">hhh&nbsp;</span><span style="line-height: 17.142858505249px;">hhh&nbsp', '2015-09-01 00:00:00', 'admin', 'ae1b63671bc73018a228a94e615ddc8a.png', 1, '0000-00-00 00:00:00'),
(13, 'undangan', 'syalaalallalalala hhh hhh hhh hhh hhh hhh hhh hhh hhh hhh\r\n hhh hhh hhh hhh hhh hhh hhh hhh hhh hhh\r', '<p>duduww</p><p><br></p><p><span style="line-height: 17.142858505249px;">duduww</span><span style="line-height: 17.142858505249px;">duduww</span><span style="line-height: 17.142858505249px;">duduww</span></p><p><span style="line-height: 17.142858505249px;"><br></span></p><p><span style="line-height: 17.142858505249px;"><br></span></p><p><span style="line-height: 17.142858505249px;">duduww</span><span style="line-height: 17.142858505249px;">duduww</span><span style="line-height: 17.142858505249px', '2015-09-05 00:00:00', 'admin', '1749e170d54dc6a0170080474ccf65ed.jpg', 1, '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id_user` int(10) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `username` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(100) NOT NULL,
  `salt` varchar(10) NOT NULL,
  `date_reg` datetime NOT NULL,
  `status` tinyint(1) NOT NULL,
  `group` int(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama`, `username`, `email`, `password`, `salt`, `date_reg`, `status`, `group`) VALUES
(1, 'admin', 'admin', 'admin@admin.com', 'dd94709528bb1c83d08f3088d4043f4742891f4f', 'admin', '2015-08-23 00:00:00', 1, 1),
(2, 'arum', 'arum', 'arumtri@arum.com', 'arum', 'admin', '2015-08-23 00:00:00', 1, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`id_booking`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id_gmb`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id_news`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `id_booking` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id_gmb` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=38;
--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id_news` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
