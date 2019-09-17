-- phpMyAdmin SQL Dump
-- version 2.10.3
-- http://www.phpmyadmin.net
-- 
-- Host: localhost
-- Generation Time: Jun 20, 2011 at 05:24 PM
-- Server version: 5.0.51
-- PHP Version: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

-- 
-- Database: `ors_ycc`
-- 

-- --------------------------------------------------------

-- 
-- Table structure for table `admin`
-- 

CREATE TABLE `admin` (
  `id` int(20) NOT NULL,
  `username` varchar(20) collate utf8_unicode_ci NOT NULL,
  `password` varchar(20) collate utf8_unicode_ci NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- 
-- Dumping data for table `admin`
-- 

INSERT INTO `admin` VALUES (1, 'admin', 'admin');
INSERT INTO `admin` VALUES (2, 'officer', 'officer');

-- --------------------------------------------------------

-- 
-- Table structure for table `course`
-- 

CREATE TABLE `course` (
  `cos_id` int(20) NOT NULL,
  `cos_group` varchar(100) collate utf8_unicode_ci NOT NULL,
  `cos_name` varchar(200) collate utf8_unicode_ci NOT NULL,
  `cos_period` int(5) NOT NULL,
  `cos_day` varchar(15) collate utf8_unicode_ci NOT NULL,
  `cos_after` varchar(15) collate utf8_unicode_ci NOT NULL,
  `cos_time` varchar(15) collate utf8_unicode_ci NOT NULL,
  `lec_id` int(20) NOT NULL,
  `cos_comment` varchar(100) collate utf8_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL default '0',
  `cos_detail` varchar(500) collate utf8_unicode_ci NOT NULL,
  PRIMARY KEY  (`cos_id`),
  KEY `lec_id` (`lec_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- 
-- Dumping data for table `course`
-- 

INSERT INTO `course` VALUES (9506071, 'ธุรกิจและการบริหาร', 'หลักสูตร นวัตกรรมความงามและผิวพรรณ (เสริมสวย)', 0, '', '', '75', 13, '  ', 0, '');
INSERT INTO `course` VALUES (95020501, 'ภาษาต่างประเทศ', 'หลักสูตร ภาษาอังกฤษเพื่อการสื่อสาร', 0, '', '', '75', 12, '', 1, '');
INSERT INTO `course` VALUES (95020701, 'ภาษาจีนกลาง', 'หลักสูตร ภาษาจีนกลาง', 0, '', '', '75', 13, '', 0, '');
INSERT INTO `course` VALUES (95020802, 'ภาษามาเลย์', 'หลักสูตร ภาษามลายูถิ่นเพื่อการสื่อสาร', 0, '', '', '75', 13, '', 0, '');
INSERT INTO `course` VALUES (95030123, 'พื้นฐานทางศิลปกรรม', 'หลักสูตร การปักจักรผ้าคลุมลายดอก', 0, '', '', '75', 13, '', 0, '');
INSERT INTO `course` VALUES (95030124, 'พื้นฐานทางศิลปกรรม', 'หลักสูตร ผลิตภัณฑ์ของที่ระลึก (การทำดอกไม้ใยบัว)', 0, '', '', '30', 13, '', 0, '');
INSERT INTO `course` VALUES (95030125, 'พื้นฐานทางศิลปกรรม', 'หลักสูตร การประยุกต์ผลิตภัณฑ์จากผ้าบาติก', 0, '', '', '65', 13, '', 0, '');
INSERT INTO `course` VALUES (95030126, 'พื้นฐานทางศิลปกรรม', 'หลักสูตร การจัดดอกไม้สด', 0, '', '', '60', 11, '', 0, '');
INSERT INTO `course` VALUES (95060403, 'การตลาด', 'หลักสูตร การตลาดภาคปฏิบัติ', 0, '', '', '72', 12, '', 0, '');
INSERT INTO `course` VALUES (95060717, 'ธุรกิจและการบริหาร', 'หลักสูตร การออกแบบทรงผมและบริหารร้านตัดผม (ตัดผมชาย)', 0, '', '', '40', 13, '', 0, '');
INSERT INTO `course` VALUES (95071103, 'คอมพิวเตอร์', 'การใช้งานคอมพิวเตอร์เบื้องต้น(Microsoft Office)', 0, '', '', '40', 13, '', 1, '');
INSERT INTO `course` VALUES (95071104, 'คอมพิวเตอร์', 'การใช้งานโปรแกรมตกแต่งรูปภาพและมัลติมีเดีย(Photo Shop)', 0, '', '', '40', 11, '', 1, '');
INSERT INTO `course` VALUES (95071105, 'คอมพิวเตอร์', 'การใช้งานอินเทอร์เน็ตเบื้องต้น', 0, '', '', '40', 11, '', 0, '');
INSERT INTO `course` VALUES (95071106, 'คอมพิวเตอร์', 'การสร้างและออกแบบเว็บไซต์', 0, '', '', '40', 12, '', 1, '');
INSERT INTO `course` VALUES (95071207, 'การแพทย์แผนไทยประยุกต์', 'หลักสูตร การนวดแผนไทย', 0, '', '', '65', 12, '', 0, '');
INSERT INTO `course` VALUES (95080141, 'อาหารและโภชนาการ', 'หลักสูตร การแปรรูปผลิตภัณฑ์ขนม', 0, '', '', '75', 11, '', 0, '');
INSERT INTO `course` VALUES (95080202, 'ผ้าและเครื่องแต่งกาย', 'หลักสูตร การตัดเย็บเสื้อผ้าสตรี', 0, '', '', '75', 11, '', 0, '');
INSERT INTO `course` VALUES (95090309, 'พืชสวน', 'หลักสูตร การจัดและตกแต่งสวนหย่อม', 0, '', '', '60', 11, '', 0, '');
INSERT INTO `course` VALUES (95100801, 'อิเลคทรอนิคส์', 'หลักสูตร ช่างซ่อมโทรศัพท์มือถือ', 0, '', '', '40', 11, '', 1, '');
INSERT INTO `course` VALUES (95100803, 'อิเลคทรอนิคส์', 'หลักสูตร ช่างซ่อมคอมพิวเตอร์', 0, '', '', '40', 11, '', 0, '');

-- --------------------------------------------------------

-- 
-- Table structure for table `joblist`
-- 

CREATE TABLE `joblist` (
  `job_id` int(11) NOT NULL auto_increment,
  `job_name` varchar(100) collate utf8_unicode_ci NOT NULL,
  PRIMARY KEY  (`job_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=7 ;

-- 
-- Dumping data for table `joblist`
-- 

INSERT INTO `joblist` VALUES (1, 'ไม่ได้ประกอบอาชีพ');
INSERT INTO `joblist` VALUES (2, 'ลูกจ้างบริษัท/ห้างร้าน');
INSERT INTO `joblist` VALUES (3, 'รับราชการ');
INSERT INTO `joblist` VALUES (4, 'พนักงานรัฐวิสาหกิจ');
INSERT INTO `joblist` VALUES (5, 'ค้าขาย');
INSERT INTO `joblist` VALUES (6, 'รับจ้างทั่วไป ');

-- --------------------------------------------------------

-- 
-- Table structure for table `lecture`
-- 

CREATE TABLE `lecture` (
  `lec_id` int(20) NOT NULL,
  `lec_name` varchar(30) collate utf8_unicode_ci NOT NULL,
  `lec_tel` varchar(20) collate utf8_unicode_ci NOT NULL,
  `lec_email` varchar(20) collate utf8_unicode_ci NOT NULL,
  `lec_comment` varchar(50) collate utf8_unicode_ci NOT NULL,
  `username` varchar(20) collate utf8_unicode_ci NOT NULL,
  `password` varchar(20) collate utf8_unicode_ci NOT NULL,
  PRIMARY KEY  (`lec_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- 
-- Dumping data for table `lecture`
-- 

INSERT INTO `lecture` VALUES (11, 'manaver Ali', '0293456743', 'safdar@gmail.com', '', 'safdar', 'safdar');
INSERT INTO `lecture` VALUES (12, 'Mr.Irshad', '0293456743', 'Irshad@gmail.com', '', 'Irshad', 'Irshad');
INSERT INTO `lecture` VALUES (13, 'manaver', '0293456743', 'safdar@gmail.com', '', 'manaver', 'manaver');

-- --------------------------------------------------------

-- 
-- Table structure for table `mrmrs`
-- 

CREATE TABLE `mrmrs` (
  `id` int(11) NOT NULL auto_increment,
  `name` varchar(100) collate utf8_unicode_ci NOT NULL,
  `describe` varchar(100) collate utf8_unicode_ci NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=7 ;

-- 
-- Dumping data for table `mrmrs`
-- 

INSERT INTO `mrmrs` VALUES (2, 'นาย', '');
INSERT INTO `mrmrs` VALUES (3, 'นาง', '');
INSERT INTO `mrmrs` VALUES (4, 'นางสาว', '');
INSERT INTO `mrmrs` VALUES (5, 'ด.ช.', '');
INSERT INTO `mrmrs` VALUES (6, 'ด.ญ.', '');

-- --------------------------------------------------------

-- 
-- Table structure for table `number`
-- 

CREATE TABLE `number` (
  `id` int(10) NOT NULL auto_increment,
  `number` varchar(10) collate utf8_unicode_ci NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=101 ;

-- 
-- Dumping data for table `number`
-- 

INSERT INTO `number` VALUES (1, '1');
INSERT INTO `number` VALUES (2, '2');
INSERT INTO `number` VALUES (3, '3');
INSERT INTO `number` VALUES (4, '4');
INSERT INTO `number` VALUES (5, '5');
INSERT INTO `number` VALUES (6, '6');
INSERT INTO `number` VALUES (7, '7');
INSERT INTO `number` VALUES (8, '8');
INSERT INTO `number` VALUES (9, '9');
INSERT INTO `number` VALUES (10, '10');
INSERT INTO `number` VALUES (11, '11');
INSERT INTO `number` VALUES (12, '12');
INSERT INTO `number` VALUES (13, '13');
INSERT INTO `number` VALUES (14, '14');
INSERT INTO `number` VALUES (15, '15');
INSERT INTO `number` VALUES (16, '16');
INSERT INTO `number` VALUES (17, '17');
INSERT INTO `number` VALUES (18, '18');
INSERT INTO `number` VALUES (19, '19');
INSERT INTO `number` VALUES (20, '20');
INSERT INTO `number` VALUES (21, '21');
INSERT INTO `number` VALUES (22, '22');
INSERT INTO `number` VALUES (23, '23');
INSERT INTO `number` VALUES (24, '24');
INSERT INTO `number` VALUES (25, '25');
INSERT INTO `number` VALUES (26, '26');
INSERT INTO `number` VALUES (27, '27');
INSERT INTO `number` VALUES (28, '28');
INSERT INTO `number` VALUES (29, '29');
INSERT INTO `number` VALUES (30, '30');
INSERT INTO `number` VALUES (31, '31');
INSERT INTO `number` VALUES (32, '32');
INSERT INTO `number` VALUES (33, '33');
INSERT INTO `number` VALUES (34, '34');
INSERT INTO `number` VALUES (35, '35');
INSERT INTO `number` VALUES (36, '36');
INSERT INTO `number` VALUES (37, '37');
INSERT INTO `number` VALUES (38, '38');
INSERT INTO `number` VALUES (39, '39');
INSERT INTO `number` VALUES (40, '40');
INSERT INTO `number` VALUES (41, '41');
INSERT INTO `number` VALUES (42, '42');
INSERT INTO `number` VALUES (43, '43');
INSERT INTO `number` VALUES (44, '44');
INSERT INTO `number` VALUES (45, '45');
INSERT INTO `number` VALUES (46, '46');
INSERT INTO `number` VALUES (47, '47');
INSERT INTO `number` VALUES (48, '48');
INSERT INTO `number` VALUES (49, '49');
INSERT INTO `number` VALUES (50, '50');
INSERT INTO `number` VALUES (51, '51');
INSERT INTO `number` VALUES (52, '52');
INSERT INTO `number` VALUES (53, '53');
INSERT INTO `number` VALUES (54, '54');
INSERT INTO `number` VALUES (55, '55');
INSERT INTO `number` VALUES (56, '56');
INSERT INTO `number` VALUES (57, '57');
INSERT INTO `number` VALUES (58, '58');
INSERT INTO `number` VALUES (59, '59');
INSERT INTO `number` VALUES (60, '60');
INSERT INTO `number` VALUES (61, '61');
INSERT INTO `number` VALUES (62, '62');
INSERT INTO `number` VALUES (63, '63');
INSERT INTO `number` VALUES (64, '64');
INSERT INTO `number` VALUES (65, '65');
INSERT INTO `number` VALUES (66, '66');
INSERT INTO `number` VALUES (67, '67');
INSERT INTO `number` VALUES (68, '68');
INSERT INTO `number` VALUES (69, '69');
INSERT INTO `number` VALUES (70, '70');
INSERT INTO `number` VALUES (71, '71');
INSERT INTO `number` VALUES (72, '72');
INSERT INTO `number` VALUES (73, '73');
INSERT INTO `number` VALUES (74, '74');
INSERT INTO `number` VALUES (75, '75');
INSERT INTO `number` VALUES (76, '76');
INSERT INTO `number` VALUES (77, '77');
INSERT INTO `number` VALUES (78, '78');
INSERT INTO `number` VALUES (79, '79');
INSERT INTO `number` VALUES (80, '80');
INSERT INTO `number` VALUES (81, '81');
INSERT INTO `number` VALUES (82, '82');
INSERT INTO `number` VALUES (83, '83');
INSERT INTO `number` VALUES (84, '84');
INSERT INTO `number` VALUES (85, '85');
INSERT INTO `number` VALUES (86, '86');
INSERT INTO `number` VALUES (87, '87');
INSERT INTO `number` VALUES (88, '88');
INSERT INTO `number` VALUES (89, '89');
INSERT INTO `number` VALUES (90, '90');
INSERT INTO `number` VALUES (91, '91');
INSERT INTO `number` VALUES (92, '92');
INSERT INTO `number` VALUES (93, '93');
INSERT INTO `number` VALUES (94, '94');
INSERT INTO `number` VALUES (95, '95');
INSERT INTO `number` VALUES (96, '96');
INSERT INTO `number` VALUES (97, '97');
INSERT INTO `number` VALUES (98, '98');
INSERT INTO `number` VALUES (99, '99');
INSERT INTO `number` VALUES (100, '100');

-- --------------------------------------------------------

-- 
-- Table structure for table `register`
-- 

CREATE TABLE `register` (
  `std_id` varchar(20) collate utf8_unicode_ci NOT NULL,
  `cos_id` int(20) NOT NULL,
  `lec_id` int(20) NOT NULL,
  `grade` varchar(10) collate utf8_unicode_ci NOT NULL,
  KEY `cos_id` (`cos_id`),
  KEY `std_id` (`std_id`),
  KEY `lec_id` (`lec_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- 
-- Dumping data for table `register`
-- 

INSERT INTO `register` VALUES ('7233333333339', 95020802, 13, '');
INSERT INTO `register` VALUES ('7233333333339', 95030124, 13, '');
INSERT INTO `register` VALUES ('7233333333339', 9506071, 13, '');
INSERT INTO `register` VALUES ('2323232322222', 95020802, 13, '');
INSERT INTO `register` VALUES ('2323232322222', 95030123, 13, '');
INSERT INTO `register` VALUES ('7233333333339', 95030124, 13, '');
INSERT INTO `register` VALUES ('5555555555551', 95020701, 13, '');
INSERT INTO `register` VALUES ('2323232322222', 95071106, 12, '');
INSERT INTO `register` VALUES ('2323232322222', 95071106, 12, '');
INSERT INTO `register` VALUES ('2323232322222', 95071106, 12, '');
INSERT INTO `register` VALUES ('2323232322222', 95071106, 12, '');
INSERT INTO `register` VALUES ('2323232322222', 95020501, 12, '');

-- --------------------------------------------------------

-- 
-- Table structure for table `student`
-- 

CREATE TABLE `student` (
  `username` varchar(20) collate utf8_unicode_ci NOT NULL,
  `password` varchar(20) collate utf8_unicode_ci NOT NULL,
  `f_name` varchar(10) collate utf8_unicode_ci NOT NULL,
  `name` varchar(30) collate utf8_unicode_ci NOT NULL,
  `s_name` varchar(30) collate utf8_unicode_ci NOT NULL,
  `gender` varchar(10) collate utf8_unicode_ci NOT NULL,
  `birthday` varchar(20) collate utf8_unicode_ci NOT NULL,
  `std_id` varchar(20) collate utf8_unicode_ci NOT NULL,
  `address` varchar(50) collate utf8_unicode_ci NOT NULL,
  `city` varchar(20) collate utf8_unicode_ci NOT NULL,
  `province` varchar(20) collate utf8_unicode_ci NOT NULL,
  `postalcode` varchar(20) collate utf8_unicode_ci NOT NULL,
  `phone` varchar(20) collate utf8_unicode_ci NOT NULL,
  `mobile` varchar(15) collate utf8_unicode_ci NOT NULL,
  `email` varchar(50) collate utf8_unicode_ci NOT NULL,
  `job` varchar(30) collate utf8_unicode_ci NOT NULL,
  `nation` varchar(30) collate utf8_unicode_ci NOT NULL,
  `origin` varchar(30) collate utf8_unicode_ci NOT NULL,
  `religion` varchar(30) collate utf8_unicode_ci NOT NULL,
  `edulevel` varchar(30) collate utf8_unicode_ci NOT NULL,
  `eduplace` varchar(30) collate utf8_unicode_ci NOT NULL,
  `eduprovince` varchar(30) collate utf8_unicode_ci NOT NULL,
  `eduyear` varchar(30) collate utf8_unicode_ci NOT NULL,
  `fat_fname` varchar(20) collate utf8_unicode_ci NOT NULL,
  `fat_lname` varchar(20) collate utf8_unicode_ci NOT NULL,
  `fat_job` varchar(50) collate utf8_unicode_ci NOT NULL,
  `mot_fname` varchar(20) collate utf8_unicode_ci NOT NULL,
  `mot_lname` varchar(20) collate utf8_unicode_ci NOT NULL,
  `mot_job` varchar(50) collate utf8_unicode_ci NOT NULL,
  PRIMARY KEY  (`std_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- 
-- Dumping data for table `student`
-- 

INSERT INTO `student` VALUES ('tupa', '123456', 'นาย', 'คอลิด', 'ลังสารี', '', '05/03/2537', '', '102หมู่ที่  6 ซอย/ถนน -แขวง/ตำบล บุดี', 'เมือง', 'ยะลา', '95000', '0891920711', '', 'langsaree@gmail.com', '', 'ไทย', 'จีน', 'อิสลาม', 'ปริญญาตรี', 'มหาวิทยาลัยอิสลามยะลา', 'ปัตตานี', '2549', '', '', '', '', '', '');
INSERT INTO `student` VALUES ('sakirin', 'sakirin', 'Mr.', 'sakirin', 'Tam', '', '', '123', '0', '0', '', '0', '0', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');
INSERT INTO `student` VALUES ('shape', 'จจจจจึ', 'นาย', 'อับดุลรอซีด', 'เตะสัน', '', '0/0/0', '1910100093019', '1001หมู่ที่  6 ซอย/ถนน -แขวง/ตำบล เจะบีลัง', 'เมือง', 'สตูล', '91000', '089434725', '', 'datail@hotmail.com', '', '0', '0', '0', 'ปริญญาโท', 'มหาวิทยาลัยอิสลามยะลา', 'ยะลา', '2553', '', '', '', '', '', '');
INSERT INTO `student` VALUES ('ihsan', 'ihsan', 'นาย', 'อิฮซาน', 'สาเละ', 'ชาย', '05/สิงหาคม/2530', '2323232322222', '53 หมู่ที่ 6 ซอย/ถนน - แขวง/ตำบล สะเตง ', 'เมือง', 'ยะลา', '95000', '0867945627', '', 'ihsan@gmail.com', 'ไม่ได้ประกอบอาชีพ', 'ไทย', 'ไทย', 'อิสลาม', 'ปริณญาโท', 'มหาวิทยาหาดใหญ่', 'สงขลา', '2553', '', '', '', '', '', '');
INSERT INTO `student` VALUES ('tupatupa', '111111', 'นาย', 'goooooooooo', 'goooooooooooo', '', '', '2950100011657', '6-budi', 'meang', 'yala', '95000', '0831932177', '', 'langsaree@hotmail.co', 'พนักงานรัฐวิสาหกิจ', 'ไทย', 'มลายู', 'อิสลาม', '-- การศึกษา --', 'yiu', '', '2554', '', '', '', '', '', '');
INSERT INTO `student` VALUES ('faison', 'faison', 'นาย', 'faison', 'faison', '', '0/0/0', '3333333333335', '111หมู่ที่  - ซอย/ถนน -แขวง/ตำบล -', '-', '-', '-', '-', '', 'faison@gmail.com', '', '0', '0', '0', '-- การศึกษา --', '', '', '', '', '', '', '', '', '');
INSERT INTO `student` VALUES ('faison', 'faison', 'นาย', 'faison', 'faison', '', '16/02/2538', '3333333333882', '111หมู่ที่  - ซอย/ถนน -แขวง/ตำบล -', '-', '-', '-', '-', '', 'faison@gmail.com', '', 'ไทย', 'ไทย', 'อิสลาม', '-- การศึกษา --', '', '', '', '', '', '', '', '', '');
INSERT INTO `student` VALUES ('tttttttttttt', '1111111', 'นาย', 'tttttttttt', 'tttttt', '', '2/02/2553', '3333333344442', '-หมู่ที่  - ซอย/ถนน -แขวง/ตำบล -', '-', '-', '-', '-', '', 'langsaree@gmail.com', '', 'ไทย', 'จีน', 'อิสลาม', '-- การศึกษา --', '', '', '', '', '', '', '', '', '');
INSERT INTO `student` VALUES ('tupa', '123456', 'นาย', 'คอลิด', 'ลังสารี', '', '-- วัน --/-- เดือน -', '4325345345473', '102หมู่ที่  6 ซอย/ถนน -แขวง/ตำบล บุดี', 'เมือง', 'ยะลา', '95000', '0891920711', '', 'langsaree@gmail.com', '', '-- สัญชาติ --', '-- เชื้อชาติ --', '-- ศาสนา --', '-- การศึกษา --', 'มหาวิทยาลัยอิสลามยะลา', 'ปัตตานี', '2549', '', '', '', '', '', '');
INSERT INTO `student` VALUES ('bukhoree', 'bukhoree', 'นาย', 'บูคอรี', 'ดอเละหะมะ', '', '13/10/2527', '4434767800659', '105หมู่ที่  6 ซอย/ถนน -แขวง/ตำบล ยะรัง', 'เมือง', 'ปัตตานี', '56000', '56565699898', '', 'bukhoree@gmail.com', 'รับจ้างทั่วไป', 'ไทย', 'ไทย', 'พุธ', 'อนุปริญญา', 'Prince of Songkla University', 'สงขลา', '2558', '', '', '', '', '', '');
INSERT INTO `student` VALUES ('faisal', '123456', 'นาย', 'ไฟซอล', 'สาและ', '', '1/01/2553', '5353543434347', '777หมู่ที่ 2ซอย/ถนน -แขวง/ตำบล บาโงซีน่า', 'ยะหา', 'ยะลา', '94021', '0987654321', '', 'son@hotmail.com', 'ค้าขาย', 'ไทย', 'มลายู', 'อิสลาม', 'ปริญญาเอก หรือ สูงกว่า', 'มหาวิทยาลัยอิสลาม', 'ปัตตานี', '2559', '', '', '', '', '', '');
INSERT INTO `student` VALUES ('junior', '963258', 'นาย', 'ไฟซอล', 'สาและ', '', '1/01/2533', '5555555555551', '125หมู่ที่  บาโงย ซอย/ถนน -แขวง/ตำบล บาโงยซิแน', 'ยะหา', 'ยะลา', '95120', '0811132549', '', 'sal@hotmail.com', '', 'ไทย', 'ไทย', 'อิสลาม', 'ปริญญาตรี', 'มอย', 'ปัตตานี', '2553', '', '', '', '', '', '');
INSERT INTO `student` VALUES ('Kholed', '123456', 'นาย', 'คอเล็ะ', 'ลังสารี', '', '10/มกราคม/2531', '7233333333339', '103 หมู่ที่ 6  ซอย/ถนน- แขวง/ตำบล บุดี ', 'เมือง', 'ยะลา', '95000', '0831920711', '', 'langsaree@gmail.com', 'ไม่ได้ประกอบอาชีพ', 'ไทย', 'จีน', 'อิสลาม', 'ปริญญาโท', 'มหาวิทยาลัยอิสลาม', 'ปัตตานี', '2554', '', '', '', '', '', '');

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
