-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Aug 17, 2020 at 08:37 AM
-- Server version: 8.0.17
-- PHP Version: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ลองเถอะ`
--

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `U_ID` int(10) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `level` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`U_ID`, `username`, `password`, `email`, `level`) VALUES
(1, '111', 'a4a7eea2e1b38ffc2f86ea525082c8ae', '', 'admin'),
(2, '222', 'a4a7eea2e1b38ffc2f86ea525082c8ae', '', 'member'),
(7, 'baipor2545', 'bec14bdbd419edb0b6162f4ae1957fd0', 'baipor2545@gmail.com', 'member'),
(8, 'pisit123', '25f9e794323b453885f5181f1b624d0b', 'snorlax123@gmail.com', 'member'),
(9, 'baipor123', '25f9e794323b453885f5181f1b624d0b', 'potza2545@hotmail.com', 'member'),
(17, 'pisitasa', 'bec14bdbd419edb0b6162f4ae1957fd0', 'bruhbruh@gmail.com', 'member'),
(18, 'jutemaster', 'bec14bdbd419edb0b6162f4ae1957fd0', 'baipor@gmail.com', 'member'),
(19, 'admin123', 'bec14bdbd419edb0b6162f4ae1957fd0', 'baipor45@gmail.com', 'member');

-- --------------------------------------------------------

--
-- Table structure for table `tb_admin`
--

CREATE TABLE `tb_admin` (
  `id_dash` int(11) NOT NULL,
  `name_dash` varchar(100) NOT NULL,
  `email_dash` varchar(100) NOT NULL,
  `gender_dash` varchar(10) NOT NULL,
  `status_dash` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_admin`
--

INSERT INTO `tb_admin` (`id_dash`, `name_dash`, `email_dash`, `gender_dash`, `status_dash`) VALUES
(2, 'chartnayodom wiboonpanich', 'chartnayodom.wib@sbac.ac.th', 'man', 'admin'),
(3, 'ratchaphon wirapit', 'ratchaphon.wir@sbac.ac.th', 'man', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `tb_order`
--

CREATE TABLE `tb_order` (
  `id_order` int(11) NOT NULL,
  `proname_order` varchar(100) NOT NULL,
  `quantity_order` tinyint(10) NOT NULL,
  `trx_order` int(11) NOT NULL,
  `paymentstatus` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tb_product`
--

CREATE TABLE `tb_product` (
  `id_pro` int(11) NOT NULL,
  `name_pro` varchar(100) NOT NULL,
  `code` varchar(10) NOT NULL,
  `price_pro` int(11) NOT NULL,
  `category_pro` varchar(100) NOT NULL,
  `fileupload` varchar(200) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_product`
--

INSERT INTO `tb_product` (`id_pro`, `name_pro`, `code`, `price_pro`, `category_pro`, `fileupload`) VALUES
(2, 'computer + ram', '', 3000, 'computer addram', ''),
(45, 'Product3', '', 2990, 'Dafrick', 'womanyellingTon.jpg'),
(46, 'Product34', 'IDIOT', 19000022, 'Dafrick', '20200719530219868.jpg'),
(47, 'พี่เสี้ยน', 'OMFG', 1234, 'Dafrick', '20200817988462223.jpg'),
(48, 'JuteMaster', 'JTMT', 1234, '7K', '202008171323137104.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `useraddress`
--

CREATE TABLE `useraddress` (
  `ID` int(10) NOT NULL,
  `U_ID` int(10) NOT NULL,
  `F_name` varchar(100) NOT NULL,
  `L_name` varchar(100) NOT NULL,
  `Address` varchar(300) NOT NULL,
  `Tel` varchar(10) NOT NULL,
  `Postcode` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `useraddress`
--

INSERT INTO `useraddress` (`ID`, `U_ID`, `F_name`, `L_name`, `Address`, `Tel`, `Postcode`) VALUES
(1, 0, 'ชาติณโยดม', 'วิบูลย์พานิช', '322/73 ซอยสายไหม33 ถนนสายไหม แขวงสายไหม เขตสายไหม กรุงเทพ 10220', '', ''),
(4, 7, 'ชาติณโยดม', 'วิบูลย์พานิช', '60/97 ซอยสายไหม37 ถนนสายไหม แขวงสายไหม เขตสายไหม กรุงเทพ ', '0910789810', '10220'),
(5, 8, 'พิศิษย์ ', 'อัศวเด่นไพศาล', '1/12 ซอยรามอินทรา1 ถนนรามอินทรา แขวงอนุสาวรีย์ เขตบางเขน กรุงเทพ', '0987654321', '10250'),
(12, 17, 'พิศิษย์', 'อัศวเด่นไพศาล', '1/303 ซอยรามอินทรา1234 ถนนสายไหมแขวงอนุสาวรีย์ เขตบางเขน กรุงเทพ', '0987654321', '10220'),
(13, 19, 'ชาติณโยดม', 'วิบูลย์พานิช', '322/73 ซอยสายไหม33 ถนนสายไหม แขวงสายไหม เขตสายไหม กรุงเทพ ', '0910789810', '10220');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`U_ID`);

--
-- Indexes for table `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`id_dash`);

--
-- Indexes for table `tb_order`
--
ALTER TABLE `tb_order`
  ADD PRIMARY KEY (`id_order`);

--
-- Indexes for table `tb_product`
--
ALTER TABLE `tb_product`
  ADD PRIMARY KEY (`id_pro`);

--
-- Indexes for table `useraddress`
--
ALTER TABLE `useraddress`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `U_ID` (`U_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `U_ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `tb_product`
--
ALTER TABLE `tb_product`
  MODIFY `id_pro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `useraddress`
--
ALTER TABLE `useraddress`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
