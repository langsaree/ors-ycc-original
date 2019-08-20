-- phpMyAdmin SQL Dump
-- version 2.10.3
-- http://www.phpmyadmin.net
-- 
-- Host: localhost
-- Generation Time: Feb 10, 2011 at 10:48 AM
-- Server version: 5.0.51
-- PHP Version: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

-- 
-- Database: `ors_ycc`
-- 

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

INSERT INTO `student` VALUES ('sakirin', 'sakirin', 'Mr.', 'sakirin', 'Tam', '', '', '123', '0', '0', '', '0', '0', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');
INSERT INTO `student` VALUES ('ihsan', 'ihsan', 'นาย', 'อิฮสาน', 'สาและ', 'ชาย', '12', '2147483647', '103', '0', '', '0', '0', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');
INSERT INTO `student` VALUES ('tupatupa', '', 'นาย', 'gooo', 'gooo', '', '', '29501', '6-budi', 'meang', 'yala', '95000', '0831932177', 'langsaree@hotmail.co', 'ลูกจ้าง', '-- สัญชาติ --', '-- เชื้อชาติ --', '-- ศาสนา --', '-- การศึกษา --', '', '', '', '', '', '', '', '', '');
INSERT INTO `student` VALUES ('tupatupa', '111111', 'นาย', 'goooooooooo', 'goooooooooooo', '', '', '2950100011657', '6-budi', 'meang', 'yala', '95000', '0831932177', 'langsaree@hotmail.co', 'พนักงานรัฐวิสาหกิจ', 'ไทย', 'มลายู', 'อิสลาม', '-- การศึกษา --', 'yiu', '', '2554', '', '', '', '', '', '');
INSERT INTO `student` VALUES ('faisal', '123456', 'นาย', 'ไฟซอล', 'สาและ', '', '1/01/2553', '5353543434347', '777หมู่ที่ 2ซอย/ถนน -แขวง/ตำบล บาโงซีน่า', 'ยะหา', 'ยะลา', '94021', '0987654321', 'son@hotmail.com', 'ค้าขาย', 'ไทย', 'มลายู', 'อิสลาม', 'ปริญญาเอก หรือ สูงกว่า', 'มหาวิทยาลัยอิสลาม', 'ปัตตานี', '2559', '', '', '', '', '', '');
INSERT INTO `student` VALUES ('Kholed', '123456', 'นาย', 'คอเล๊ะ', 'ลังสารี', '', '3/มกราคม/2540', '7233333333339', '102หมู่ที่ 7ซอย/ถนน สุขยางแขวง/ตำบล สะเตง', 'เมือง', 'ยะลา', '95000', '0931920711', 'langsaree@gmail.com', 'รับจ้างทั่วไป', 'ไทย', 'จีน', 'พุธ', 'ปริญญาโท', 'มหาวิทยาลัยอิสลาม', 'ปัตตานี', '2554', '', '', '', '', '', '');
INSERT INTO `student` VALUES ('Kholed', '123456', 'นาย', 'คอเล๊ะ', 'ลังสารี', '', '1/พฤษภาคม/2531', '7565464364547', '102 7 สุขยาง สะเตง', 'เมือง', 'ยะลา', '95000', '0931920711', 'langsaree@gmail.com', 'พนักงานรัฐวิสาหกิจ', 'ไทย', 'มลายู', 'อิสลาม', 'ปริญญาโท', 'มหาวิทยาลัยอิสลาม', 'ปัตตานี', '2554', '', '', '', '', '', '');
INSERT INTO `student` VALUES ('tupatupa', '111111', 'นาย', 'goooooooooo', 'goooooooooooo', '', '17/เมษายน/2525', '7565464364563', '1026-บุดี', 'เมือง', 'ยะลา', '95000', '0931920711', 'langsaree@hotmail.co', 'พนักงานรัฐวิสาหกิจ', 'ไทย', 'จีน', 'คริสเตียน', '-- การศึกษา --', 'มหาวิทยาลัยอิสลาม', '', '2554', '', '', '', '', '', '');
INSERT INTO `student` VALUES ('tupatupa', '111111', 'นางสาว', 'goooooooooo', 'goooooooooooo', '', '1/กุมภาพันธ์/2551', '7565464364652', '102 6 - บุดี', 'เมือง', 'ยะลา', '95000', '0831932177', 'langsaree@hotmail.co', 'ค้าขาย', 'ไทย', 'ไทย', 'พุธ', '-- การศึกษา --', 'มหาวิทยาลัยอิสลาม', 'ปัตตานี', '2554', '', '', '', '', '', '');
