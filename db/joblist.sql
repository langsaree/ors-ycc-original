-- phpMyAdmin SQL Dump
-- version 2.10.3
-- http://www.phpmyadmin.net
-- 
-- Host: localhost
-- Generation Time: Mar 01, 2011 at 10:31 AM
-- Server version: 5.0.51
-- PHP Version: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

-- 
-- Database: `ors_ycc`
-- 

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
