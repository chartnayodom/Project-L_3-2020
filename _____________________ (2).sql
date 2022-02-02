-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Sep 02, 2020 at 04:22 PM
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
(19, 'admin123', 'bec14bdbd419edb0b6162f4ae1957fd0', 'baipor45@gmail.com', 'member'),
(20, 'user1234', '25f9e794323b453885f5181f1b624d0b', 'baipor89@gmail.com', 'member'),
(21, 'come1234', '25f9e794323b453885f5181f1b624d0b', 'baipor2545@hotmail.com', 'member'),
(22, 'zaidforever', '9063391a77ea474c155e8e44d66793a7', 'ratchaphonwirapit@gmail.com', 'member'),
(23, 'zaidforever123', '25f9e794323b453885f5181f1b624d0b', 'mikezagamer@gmail.com', 'member');

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
  `username` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `name` varchar(100) NOT NULL,
  `address` varchar(300) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `date_order` datetime NOT NULL,
  `total` int(11) NOT NULL,
  `paymentstatus` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_order`
--

INSERT INTO `tb_order` (`id_order`, `username`, `name`, `address`, `email`, `phone`, `date_order`, `total`, `paymentstatus`) VALUES
(2, 'user1234', 'ชาติณโยดม วิบูลย์พานิช ', '12/30 ซอยรามอินทรา1234 ถนนรามอินทรา แขวงอนุสาวรีย์ เขตบางเขน กรุงเทพ 10250', 'baipor89@gmail.com', '910789810', '2020-08-25 21:02:00', 0, 'ชำระเงินแล้ว'),
(3, 'user1234', 'ชาติณโยดม วิบูลย์พานิช ', '12/30 ซอยรามอินทรา1234 ถนนรามอินทรา แขวงอนุสาวรีย์ เขตบางเขน กรุงเทพ 10250', 'baipor89@gmail.com', '910789810', '2020-08-26 00:05:43', 0, 'ชำระเงินแล้ว'),
(4, 'user1234', 'ชาติณโยดม วิบูลย์พานิช ', '12/30 ซอยรามอินทรา1234 ถนนรามอินทรา แขวงอนุสาวรีย์ เขตบางเขน กรุงเทพ 10250', 'baipor89@gmail.com', '910789810', '2020-08-26 23:19:43', 0, 'รอการชำระเงิน'),
(5, 'user1234', 'ชาติณโยดม วิบูลย์พานิช ', '12/30 ซอยรามอินทรา1234 ถนนรามอินทรา แขวงอนุสาวรีย์ เขตบางเขน กรุงเทพ 10250', 'baipor89@gmail.com', '910789810', '2020-08-27 21:12:14', 0, 'ชำระเงินแล้ว'),
(6, 'user1234', 'ชาติณโยดม วิบูลย์พานิช ', '12/30 ซอยรามอินทรา1234 ถนนรามอินทรา แขวงอนุสาวรีย์ เขตบางเขน กรุงเทพ 10250', 'baipor89@gmail.com', '910789810', '2020-08-27 21:33:33', 1500, 'ชำระเงินแล้ว'),
(7, 'user1234', 'ชาติณโยดม วิบูลย์พานิช ', '12/30 ซอยรามอินทรา1234 ถนนรามอินทรา แขวงอนุสาวรีย์ เขตบางเขน กรุงเทพ 10250', 'baipor89@gmail.com', '910789810', '2020-08-28 08:57:50', 1500, 'รอการชำระเงิน'),
(8, 'user1234', 'ชาติณโยดม วิบูลย์พานิช ', '12/30 ซอยรามอินทรา1234 ถนนรามอินทรา แขวงอนุสาวรีย์ เขตบางเขน กรุงเทพ 10250', 'baipor89@gmail.com', '910789810', '2020-08-28 08:59:14', 15000, 'รอการชำระเงิน'),
(9, 'user1234', 'ชาติณโยดม วิบูลย์พานิช ', '12/30 ซอยรามอินทรา1234 ถนนรามอินทรา แขวงอนุสาวรีย์ เขตบางเขน กรุงเทพ 10250', 'baipor89@gmail.com', '910789810', '2020-08-28 09:00:14', 1000, 'รอการชำระเงิน'),
(10, 'user1234', 'ชาติณโยดม วิบูลย์พานิช ', '12/30 ซอยรามอินทรา1234 ถนนรามอินทรา แขวงอนุสาวรีย์ เขตบางเขน กรุงเทพ 10250', 'baipor89@gmail.com', '0910789810', '2020-08-28 09:01:12', 1500, 'รอการชำระเงิน'),
(11, 'user1234', 'ชาติณโยดม วิบูลย์พานิช ', '12/30 ซอยรามอินทรา1234 ถนนรามอินทรา แขวงอนุสาวรีย์ เขตบางเขน กรุงเทพ 10250', 'baipor89@gmail.com', '0910789810', '2020-08-28 09:02:32', 18000, 'รอการชำระเงิน'),
(12, 'come1234', 'ชาติณโยดม วิบูลย์พานิช', '322/73 ซ.สายไหม33 ถ.สายไหม', 'baipor2545@hotmail.com', '0910789810', '2020-08-31 15:11:40', 39500, 'ชำระเงินแล้ว'),
(13, 'zaidforever', 'ชาติณโยดม วิบูลย์พานิช', '322/73 ซ.สายไหม33 ถ.สายไหม', 'baipor2545@hotmail.com', '0910789810', '2020-08-31 17:33:35', 50000, 'ชำระเงินแล้ว'),
(14, 'baipor2545', 'ชาติณโยดม วิบูลย์พานิช ', '322/73 ซอยสายไหม33 ถนนสายไหม แขวงสายไหม เขตสายไหม กรุงเทพ  10220', 'baipor2545@gmail.com', '0910789810', '2020-08-31 17:50:12', 19900, 'ชำระเงินแล้ว'),
(15, 'zaidforever123', 'ชาติณโยดม วิบูลย์พานิช', '322/73 ซ.สายไหม33 ถ.สายไหม', 'baipor2545@hotmail.com', '0910789810', '2020-08-31 18:01:36', 25000, 'ชำระเงินแล้ว');

-- --------------------------------------------------------

--
-- Table structure for table `tb_orderdetail`
--

CREATE TABLE `tb_orderdetail` (
  `id` int(11) NOT NULL,
  `id_order` int(11) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `product_code` varchar(10) NOT NULL,
  `quantity` int(11) NOT NULL,
  `total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tb_orderdetail`
--

INSERT INTO `tb_orderdetail` (`id`, `id_order`, `product_name`, `product_code`, `quantity`, `total`) VALUES
(7, 2, 'intel core 6', '', 1, 1500),
(8, 2, 'product test', '', 1, 1000),
(9, 3, 'intel core 6', '', 1, 1500),
(10, 4, 'product test', '', 1, 1000),
(11, 5, 'card video', '', 1, 15000),
(12, 6, 'intel core 6', '', 1, 1500),
(13, 7, 'intel core 6', '', 1, 1500),
(14, 8, 'card video', '', 1, 15000),
(15, 9, 'product test', '', 1, 1000),
(16, 10, 'intel core 6', '', 1, 1500),
(17, 11, 'intel core 6', '', 12, 18000),
(18, 12, 'computer', 'B0001', 1, 39500),
(19, 13, 'computer', 'B0003', 2, 50000),
(20, 14, 'computer', '', 1, 19900),
(21, 15, 'computer', 'B0003', 1, 25000);

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
(49, 'computer', 'B0001', 39500, 'computer', '20200831464566561.png'),
(51, 'computer', 'B0002', 24000, 'computer', '202008312113294754.png'),
(52, 'computer', 'B0003', 25000, 'computer', '202008311554550633.png'),
(53, 'computer', '', 21900, 'computer', '202008311337361330.png'),
(54, 'computer', '', 20900, 'computer', '20200831747645270.png'),
(55, 'computer', '', 17500, 'computer', '202008311355301884.png'),
(56, 'computer', '', 19900, 'computer', '20200831224708046.png'),
(57, 'computer', '', 10900, 'computer', '202008312003035984.png'),
(58, 'computer', '', 37900, 'computer', '202008311708750539.png'),
(59, 'computer', '', 15000, 'computer', '202008311832062698.png');

-- --------------------------------------------------------

--
-- Table structure for table `tb_purchase`
--

CREATE TABLE `tb_purchase` (
  `purchase_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `tel` varchar(10) NOT NULL,
  `bank` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `time` varchar(6) NOT NULL,
  `purs_total` int(11) NOT NULL,
  `transfer_pic` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tb_purchase`
--

INSERT INTO `tb_purchase` (`purchase_id`, `order_id`, `Name`, `tel`, `bank`, `date`, `time`, `purs_total`, `transfer_pic`) VALUES
(1, 6, 'ชาติณโยดม วิบูลย์พานิช', '0910789810', 'ธนาคารไทยพานิชย์', '2020-08-27', '22:05', 1500, 'เมม.jpg'),
(2, 6, 'ชาติณโยดม วิบูลย์พานิช', '0910789810', 'ธนาคารไทยพานิชย์', '2020-08-27', '22:05', 1500, ''),
(3, 6, 'ชาติณโยดม วิบูลย์พานิช', '0910789810', 'ธนาคารไทยพานิชย์', '2020-08-27', '22:05', 1500, ''),
(4, 6, 'ชาติณโยดม วิบูลย์พานิช', '0910789810', 'ธนาคารไทยพานิชย์', '2020-08-27', '22:05', 1500, ''),
(5, 0, 'ชาติณโยดม วิบูลย์พานิช', '', 'เลือกธนาคารที่ชำระเงิน', '2020-08-27', '', 0, ''),
(6, 6, 'ชาติณโยดม วิบูลย์พานิช', '0910789810', 'ธนาคารไทยพานิชย์', '2020-08-27', '22:05', 1500, ''),
(7, 6, 'ชาติณโยดม วิบูลย์พานิช', '0910789810', 'ธนาคารไทยพานิชย์', '2020-08-27', '22:05', 1500, '1c7602456b939ed920c92a773c36c732.jpg'),
(8, 6, 'ชาติณโยดม วิบูลย์พานิช', '0910789810', 'ธนาคารไทยพานิชย์', '2020-08-27', '22:05', 1500, ''),
(9, 6, 'ชาติณโยดม วิบูลย์พานิช', '0910789810', 'ธนาคารไทยพานิชย์', '2020-08-27', '22:05', 1500, ''),
(10, 6, 'ชาติณโยดม วิบูลย์พานิช', '0910789810', 'ธนาคารไทยพานิชย์', '2020-08-27', '22:05', 1500, ''),
(11, 6, 'ชาติณโยดม วิบูลย์พานิช', '0910789810', 'ธนาคารไทยพานิชย์', '2020-08-27', '22:05', 1500, ''),
(12, 6, 'ชาติณโยดม วิบูลย์พานิช', '0910789810', 'ธนาคารไทยพานิชย์', '2020-08-27', '22:05', 1500, ''),
(13, 6, 'ชาติณโยดม วิบูลย์พานิช', '0910789810', 'ธนาคารไทยพานิชย์', '2020-08-27', '22:05', 1500, ''),
(14, 6, 'ชาติณโยดม วิบูลย์พานิช', '0910789810', 'ธนาคารไทยพานิชย์', '2020-08-27', '22:05', 1500, ''),
(15, 6, 'ชาติณโยดม วิบูลย์พานิช', '0910789810', 'ธนาคารไทยพานิชย์', '2020-08-27', '22:05', 1500, ''),
(16, 6, 'ชาติณโยดม วิบูลย์พานิช', '0910789810', 'ธนาคารไทยพานิชย์', '2020-08-31', '22:05', 1500, ''),
(17, 7, 'ชาติณโยดม วิบูลย์พานิช', '0910789810', 'ธนาคารไทยพานิชย์', '2020-08-31', '22:05', 1500, ''),
(18, 11, 'ชาติณโยดม วิบูลย์พานิช', '0910789810', 'ธนาคารไทยพานิชย์', '2020-08-31', '22:05', 1500, 'banner1.png'),
(19, 4, 'ชาติณโยดม วิบูลย์พานิช', '0910789810', 'ธนาคารไทยพานิชย์', '2020-08-31', '22:05', 1000, '730143309813-content1.jpg'),
(20, 5, 'ชาติณโยดม วิบูลย์พานิช', '0910789810', 'ธนาคารไทยพานิชย์', '2020-08-31', '22:05', 15000, 'unnamed.png'),
(21, 12, 'ชาติณโยดม วิบูลย์พานิช', '0910789810', 'ธนาคารไทยพานิชย์', '2020-08-31', '22:05', 40000, '12.png'),
(22, 13, 'ราชพลลี่', '0910789810', 'ธนาคารไทยพานิชย์', '2020-08-31', '22:05', 50000, 'Creative-Tail-People-man-2.svg.png'),
(23, 14, 'ชาติณโยดม วิบูลย์พานิช', '0910789810', 'ธนาคารไทยพานิชย์', '2020-08-31', '17:50', 19900, 'Creative-Tail-People-man-2.svg.png'),
(24, 14, 'ชาติณโยดม วิบูลย์พานิช', '0910789810', 'ธนาคารกสิกรไทย', '2020-08-31', '17:50', 19900, 'Creative-Tail-People-man-2.svg.png'),
(25, 15, ' pisit', '0910789810', 'ธนาคารไทยพานิชย์', '2020-08-31', '18:02', 50000, 'B4.png');

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
(4, 7, 'ชาติณโยดม', 'วิบูลย์พานิช', '322/73 ซอยสายไหม33 ถนนสายไหม แขวงสายไหม เขตสายไหม กรุงเทพ ', '0910789810', '10220'),
(5, 8, 'พิศิษย์ ', 'อัศวเด่นไพศาล', '1/12 ซอยรามอินทรา1 ถนนรามอินทรา แขวงอนุสาวรีย์ เขตบางเขน กรุงเทพ', '0987654321', '10250'),
(12, 17, 'พิศิษย์', 'อัศวเด่นไพศาล', '1/303 ซอยรามอินทรา1234 ถนนสายไหมแขวงอนุสาวรีย์ เขตบางเขน กรุงเทพ', '0987654321', '10220'),
(13, 19, 'ชาติณโยดม', 'วิบูลย์พานิช', '322/73 ซอยสายไหม33 ถนนสายไหม แขวงสายไหม เขตสายไหม กรุงเทพ ', '0910789810', '10220'),
(14, 20, 'ชาติณโยดม', 'วิบูลย์พานิช', '12/30 ซอยรามอินทรา1234 ถนนรามอินทรา แขวงอนุสาวรีย์ เขตบางเขน กรุงเทพ', '0910789810', '10250');

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
-- Indexes for table `tb_orderdetail`
--
ALTER TABLE `tb_orderdetail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_product`
--
ALTER TABLE `tb_product`
  ADD PRIMARY KEY (`id_pro`);

--
-- Indexes for table `tb_purchase`
--
ALTER TABLE `tb_purchase`
  ADD PRIMARY KEY (`purchase_id`);

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
  MODIFY `U_ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `tb_order`
--
ALTER TABLE `tb_order`
  MODIFY `id_order` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `tb_orderdetail`
--
ALTER TABLE `tb_orderdetail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `tb_product`
--
ALTER TABLE `tb_product`
  MODIFY `id_pro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT for table `tb_purchase`
--
ALTER TABLE `tb_purchase`
  MODIFY `purchase_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `useraddress`
--
ALTER TABLE `useraddress`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
