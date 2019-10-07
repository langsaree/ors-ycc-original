-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 30, 2019 at 06:40 PM
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
-- Database: `ors_ycc`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(20) NOT NULL,
  `username` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin'),
(2, 'officer', 'officer');

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `cos_id` int(20) NOT NULL,
  `cos_group` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `cos_name` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `cos_period` int(5) NOT NULL,
  `cos_day` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `cos_after` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `cos_time` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `lec_id` int(20) NOT NULL,
  `cos_comment` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `cos_detail` varchar(500) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`cos_id`, `cos_group`, `cos_name`, `cos_period`, `cos_day`, `cos_after`, `cos_time`, `lec_id`, `cos_comment`, `status`, `cos_detail`) VALUES
(9506071, 'ธุรกิจและการบริหาร', 'หลักสูตร นวัตกรรมความงามและผิวพรรณ (เสริมสวย)', 0, '', '', '75', 13, '  ', 0, ''),
(95020501, 'ภาษาต่างประเทศ', 'หลักสูตร ภาษาอังกฤษเพื่อการสื่อสาร', 0, '', '', '75', 12, '', 1, ''),
(95020701, 'ภาษาจีนกลาง', 'หลักสูตร ภาษาจีนกลาง', 0, '', '', '75', 13, '', 0, ''),
(95020802, 'ภาษามาเลย์', 'หลักสูตร ภาษามลายูถิ่นเพื่อการสื่อสาร', 0, '', '', '75', 13, '', 1, ''),
(95030123, 'พื้นฐานทางศิลปกรรม', 'หลักสูตร การปักจักรผ้าคลุมลายดอก', 0, '', '', '75', 13, '', 0, ''),
(95030124, 'พื้นฐานทางศิลปกรรม', 'หลักสูตร ผลิตภัณฑ์ของที่ระลึก (การทำดอกไม้ใยบัว)', 0, '', '', '30', 13, '', 0, ''),
(95030125, 'พื้นฐานทางศิลปกรรม', 'หลักสูตร การประยุกต์ผลิตภัณฑ์จากผ้าบาติก', 0, '', '', '65', 13, '', 0, ''),
(95030126, 'พื้นฐานทางศิลปกรรม', 'หลักสูตร การจัดดอกไม้สด', 0, '', '', '60', 11, '', 0, ''),
(95060403, 'การตลาด', 'หลักสูตร การตลาดภาคปฏิบัติ', 0, '', '', '72', 12, '', 0, ''),
(95060717, 'ธุรกิจและการบริหาร', 'หลักสูตร การออกแบบทรงผมและบริหารร้านตัดผม (ตัดผมชาย)', 0, '', '', '40', 13, '', 0, ''),
(95071103, 'คอมพิวเตอร์', 'การใช้งานคอมพิวเตอร์เบื้องต้น(Microsoft Office)', 0, '', '', '40', 13, '', 1, ''),
(95071104, 'คอมพิวเตอร์', 'การใช้งานโปรแกรมตกแต่งรูปภาพและมัลติมีเดีย(Photo Shop)', 0, '', '', '40', 11, '', 1, ''),
(95071105, 'คอมพิวเตอร์', 'การใช้งานอินเทอร์เน็ตเบื้องต้น', 0, '', '', '40', 11, '', 0, ''),
(95071106, 'คอมพิวเตอร์', 'การสร้างและออกแบบเว็บไซต์', 0, '', '', '40', 12, '', 1, ''),
(95071207, 'การแพทย์แผนไทยประยุกต์', 'หลักสูตร การนวดแผนไทย', 0, '', '', '65', 12, '', 0, ''),
(95080141, 'อาหารและโภชนาการ', 'หลักสูตร การแปรรูปผลิตภัณฑ์ขนม', 0, '', '', '75', 11, '', 0, ''),
(95080202, 'ผ้าและเครื่องแต่งกาย', 'หลักสูตร การตัดเย็บเสื้อผ้าสตรี', 0, '', '', '75', 11, '', 0, ''),
(95090309, 'พืชสวน', 'หลักสูตร การจัดและตกแต่งสวนหย่อม', 0, '', '', '60', 11, '', 0, ''),
(95100801, 'อิเลคทรอนิคส์', 'หลักสูตร ช่างซ่อมโทรศัพท์มือถือ', 0, '', '', '40', 11, '', 1, ''),
(95100803, 'อิเลคทรอนิคส์', 'หลักสูตร ช่างซ่อมคอมพิวเตอร์', 0, '', '', '40', 11, '', 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `joblist`
--

CREATE TABLE `joblist` (
  `job_id` int(11) NOT NULL,
  `job_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `joblist`
--

INSERT INTO `joblist` (`job_id`, `job_name`) VALUES
(1, 'ไม่ได้ประกอบอาชีพ'),
(2, 'ลูกจ้างบริษัท/ห้างร้าน'),
(3, 'รับราชการ'),
(4, 'พนักงานรัฐวิสาหกิจ'),
(5, 'ค้าขาย'),
(6, 'รับจ้างทั่วไป ');

-- --------------------------------------------------------

--
-- Table structure for table `lecture`
--

CREATE TABLE `lecture` (
  `lec_id` int(20) NOT NULL,
  `lec_name` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `lec_tel` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `lec_email` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `username` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `lecture`
--

INSERT INTO `lecture` (`lec_id`, `lec_name`, `lec_tel`, `lec_email`, `username`, `password`) VALUES
(11, 'manaver Ali', '0293456743', 'safdar@gmail.com', 'safdar', 'safdar'),
(12, 'Mr.Irshad', '0293456743', 'Irshad@gmail.com', 'Irshad', 'Irshad'),
(13, 'manaver', '0293456743', 'safdar@gmail.com', 'manaver', 'manaver');

-- --------------------------------------------------------

--
-- Table structure for table `mrmrs`
--

CREATE TABLE `mrmrs` (
  `id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `describe` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `mrmrs`
--

INSERT INTO `mrmrs` (`id`, `name`, `describe`) VALUES
(2, 'นาย', ''),
(3, 'นาง', ''),
(4, 'นางสาว', ''),
(5, 'ด.ช.', ''),
(6, 'ด.ญ.', '');

-- --------------------------------------------------------

--
-- Table structure for table `number`
--

CREATE TABLE `number` (
  `id` int(10) NOT NULL,
  `number` varchar(10) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `number`
--

INSERT INTO `number` (`id`, `number`) VALUES
(1, '1'),
(2, '2'),
(3, '3'),
(4, '4'),
(5, '5'),
(6, '6'),
(7, '7'),
(8, '8'),
(9, '9'),
(10, '10'),
(11, '11'),
(12, '12'),
(13, '13'),
(14, '14'),
(15, '15'),
(16, '16'),
(17, '17'),
(18, '18'),
(19, '19'),
(20, '20'),
(21, '21'),
(22, '22'),
(23, '23'),
(24, '24'),
(25, '25'),
(26, '26'),
(27, '27'),
(28, '28'),
(29, '29'),
(30, '30'),
(31, '31'),
(32, '32'),
(33, '33'),
(34, '34'),
(35, '35'),
(36, '36'),
(37, '37'),
(38, '38'),
(39, '39'),
(40, '40'),
(41, '41'),
(42, '42'),
(43, '43'),
(44, '44'),
(45, '45'),
(46, '46'),
(47, '47'),
(48, '48'),
(49, '49'),
(50, '50'),
(51, '51'),
(52, '52'),
(53, '53'),
(54, '54'),
(55, '55'),
(56, '56'),
(57, '57'),
(58, '58'),
(59, '59'),
(60, '60'),
(61, '61'),
(62, '62'),
(63, '63'),
(64, '64'),
(65, '65'),
(66, '66'),
(67, '67'),
(68, '68'),
(69, '69'),
(70, '70'),
(71, '71'),
(72, '72'),
(73, '73'),
(74, '74'),
(75, '75'),
(76, '76'),
(77, '77'),
(78, '78'),
(79, '79'),
(80, '80'),
(81, '81'),
(82, '82'),
(83, '83'),
(84, '84'),
(85, '85'),
(86, '86'),
(87, '87'),
(88, '88'),
(89, '89'),
(90, '90'),
(91, '91'),
(92, '92'),
(93, '93'),
(94, '94'),
(95, '95'),
(96, '96'),
(97, '97'),
(98, '98'),
(99, '99'),
(100, '100');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `std_id` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `cos_id` int(20) NOT NULL,
  `lec_id` int(20) NOT NULL,
  `grade` varchar(10) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`std_id`, `cos_id`, `lec_id`, `grade`) VALUES
('7233333333339', 95020802, 13, ''),
('7233333333339', 95030124, 13, ''),
('7233333333339', 9506071, 13, ''),
('2323232322222', 95020802, 13, ''),
('2323232322222', 95030123, 13, ''),
('7233333333339', 95030124, 13, ''),
('5555555555551', 95020701, 13, ''),
('2323232322222', 95071106, 12, ''),
('2323232322222', 95071106, 12, ''),
('2323232322222', 95071106, 12, ''),
('2323232322222', 95071106, 12, ''),
('2323232322222', 95020501, 12, '');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `username` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `f_name` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `s_name` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `gender` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `birthday` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `std_id` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `city` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `province` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `postalcode` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `mobile` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `job` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `nation` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `origin` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `religion` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `edulevel` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `eduplace` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `eduprovince` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `eduyear` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `fat_fname` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `fat_lname` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `fat_job` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `mot_fname` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `mot_lname` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `mot_job` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`username`, `password`, `f_name`, `name`, `s_name`, `gender`, `birthday`, `std_id`, `address`, `city`, `province`, `postalcode`, `phone`, `mobile`, `email`, `job`, `nation`, `origin`, `religion`, `edulevel`, `eduplace`, `eduprovince`, `eduyear`, `fat_fname`, `fat_lname`, `fat_job`, `mot_fname`, `mot_lname`, `mot_job`, `status`) VALUES
('sakirin', 'sakirin', 'นาย', 'sakirin', 'sakirin', 'ชาย', '3/02/2552', '1568478958458', '45/1หมู่ที่  - ซอย/ถนน -แขวง/ตำบล ลูแบ', 'สายบุรี', 'ปัตตานี', '94160', '0865489758', '', 'sakirin@gmail.com', 'รับราชการ', 'ไทย', 'ไทย', 'อิสลาม', 'มัธยมศึกษาตอนปลาย', 'มหาวิทยาลัยฟาตอนี', 'ปัตตานี', '2558', '', '', '', '', '', '', 0),
('anas10', 'anas10', 'นาย', 'anas10', 'anas10', 'ชาย', '3/01/2554', '1568975865', '75/7หมู่ที่  - ซอย/ถนน -แขวง/ตำบล ลูแบ', 'สายบุรี', 'ปัตตานี', '94160', '0865489758', '', 'anastodeng@gmail.com', 'รับราชการ', 'ไทย', 'ไทย', 'อิสลาม', 'ปริญญาโท', 'มหาวิทยาลัยฟาตอนี', 'ปัตตานี', '2559', '', '', '', '', '', '', 0),
('shape', 'จจจจจึ', 'นาย', 'อับดุลรอซีด', 'เตะสัน', '', '0/0/0', '1910100093019', '1001หมู่ที่  6 ซอย/ถนน -แขวง/ตำบล เจะบีลัง', 'เมือง', 'สตูล', '91000', '089434725', '', 'datail@hotmail.com', '', '0', '0', '0', 'ปริญญาโท', 'มหาวิทยาลัยอิสลามยะลา', 'ยะลา', '2553', '', '', '', '', '', '', 1),
('haris01', 'haris01', 'นาย', 'Haris', 'Yunuh', 'ชาย', '18/02/$i', '1960500309477', '79/1หมู่ที่  - ซอย/ถนน -แขวง/ตำบล กาลิซา', 'ระแงะ', 'นราธิวาส', '94160', '0863130152', '', 'Harisyoonuh14@gmail.com', 'รับราชการ', 'ไทย', 'ไทย', 'อิสลาม', '0', 'มหาวิทยาลัยฟาตอนี', 'ปัตตานี', '', '', '', '', '', '', '', 1),
('ihsan', 'ihsan', 'นาย', 'อิฮซาน', 'สาเละ', 'ชาย', '05/สิงหาคม/2530', '2323232322222', '53 หมู่ที่ 6 ซอย/ถนน - แขวง/ตำบล สะเตง ', 'เมือง', 'ยะลา', '95000', '0867945627', '', 'ihsan@gmail.com', 'ไม่ได้ประกอบอาชีพ', 'ไทย', 'ไทย', 'อิสลาม', 'ปริณญาโท', 'มหาวิทยาหาดใหญ่', 'สงขลา', '2553', '', '', '', '', '', '', 1),
('tupatupa', '111111', 'นาย', 'goooooooooo', 'goooooooooooo', '', '', '2950100011657', '6-budi', 'meang', 'yala', '95000', '0831932177', '', 'langsaree@hotmail.co', 'พนักงานรัฐวิสาหกิจ', 'ไทย', 'มลายู', 'อิสลาม', '-- การศึกษา --', 'yiu', '', '2554', '', '', '', '', '', '', 1),
('faison', 'faison', 'นาย', 'faison', 'faison', '', '16/02/2538', '3333333333882', '111หมู่ที่  - ซอย/ถนน -แขวง/ตำบล -', '-', '-', '-', '-', '', 'faison@gmail.com', '', 'ไทย', 'ไทย', 'อิสลาม', '-- การศึกษา --', '', '', '', '', '', '', '', '', '', 1),
('tttttttttttt', '1111111', 'นาย', 'tttttttttt', 'tttttt', '', '2/02/2553', '3333333344442', '-หมู่ที่  - ซอย/ถนน -แขวง/ตำบล -', '-', '-', '-', '-', '', 'langsaree@gmail.com', '', 'ไทย', 'จีน', 'อิสลาม', '-- การศึกษา --', '', '', '', '', '', '', '', '', '', 1),
('bukhoree', 'bukhoree', 'นาย', 'บูคอรี', 'ดอเละหะมะ', '', '13/10/2527', '4434767800659', '105หมู่ที่  6 ซอย/ถนน -แขวง/ตำบล ยะรัง', 'เมือง', 'ปัตตานี', '56000', '56565699898', '', 'bukhoree@gmail.com', 'รับจ้างทั่วไป', 'ไทย', 'ไทย', 'พุธ', 'อนุปริญญา', 'Prince of Songkla University', 'สงขลา', '2558', '', '', '', '', '', '', 1),
('faisal', '123456', 'นาย', 'ไฟซอล', 'สาและ', '', '1/01/2553', '5353543434347', '777หมู่ที่ 2ซอย/ถนน -แขวง/ตำบล บาโงซีน่า', 'ยะหา', 'ยะลา', '94021', '0987654321', '', 'son@hotmail.com', 'ค้าขาย', 'ไทย', 'มลายู', 'อิสลาม', 'ปริญญาเอก หรือ สูงกว่า', 'มหาวิทยาลัยอิสลาม', 'ปัตตานี', '2559', '', '', '', '', '', '', 1),
('junior', '963258', 'นาย', 'ไฟซอล', 'สาและ', '', '1/01/2533', '5555555555551', '125หมู่ที่  บาโงย ซอย/ถนน -แขวง/ตำบล บาโงยซิแน', 'ยะหา', 'ยะลา', '95120', '0811132549', '', 'sal@hotmail.com', '', 'ไทย', 'ไทย', 'อิสลาม', 'ปริญญาตรี', 'มอย', 'ปัตตานี', '2553', '', '', '', '', '', '', 1),
('Kholed', '123456', 'นาย', 'คอเล็ะ', 'ลังสารี', '', '10/มกราคม/2531', '7233333333339', '103 หมู่ที่ 6  ซอย/ถนน- แขวง/ตำบล บุดี ', 'เมือง', 'ยะลา', '95000', '0831920711', '', 'langsaree@gmail.com', 'ไม่ได้ประกอบอาชีพ', 'ไทย', 'จีน', 'อิสลาม', 'ปริญญาโท', 'มหาวิทยาลัยอิสลาม', 'ปัตตานี', '2554', '', '', '', '', '', '', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`cos_id`),
  ADD KEY `lec_id` (`lec_id`);

--
-- Indexes for table `joblist`
--
ALTER TABLE `joblist`
  ADD PRIMARY KEY (`job_id`);

--
-- Indexes for table `lecture`
--
ALTER TABLE `lecture`
  ADD PRIMARY KEY (`lec_id`);

--
-- Indexes for table `mrmrs`
--
ALTER TABLE `mrmrs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `number`
--
ALTER TABLE `number`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD KEY `cos_id` (`cos_id`),
  ADD KEY `std_id` (`std_id`),
  ADD KEY `lec_id` (`lec_id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`std_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `joblist`
--
ALTER TABLE `joblist`
  MODIFY `job_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `mrmrs`
--
ALTER TABLE `mrmrs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `number`
--
ALTER TABLE `number`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `course`
--
ALTER TABLE `course`
  ADD CONSTRAINT `course_ibfk_1` FOREIGN KEY (`lec_id`) REFERENCES `lecture` (`lec_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `register`
--
ALTER TABLE `register`
  ADD CONSTRAINT `register_ibfk_1` FOREIGN KEY (`lec_id`) REFERENCES `lecture` (`lec_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `register_ibfk_2` FOREIGN KEY (`std_id`) REFERENCES `student` (`std_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `register_ibfk_3` FOREIGN KEY (`cos_id`) REFERENCES `course` (`cos_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
