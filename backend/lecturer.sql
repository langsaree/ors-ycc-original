-- phpMyAdmin SQL Dump
-- version 2.10.3
-- http://www.phpmyadmin.net
-- 
-- Host: localhost
-- Generation Time: Jan 27, 2011 at 03:36 PM
-- Server version: 5.0.51
-- PHP Version: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

-- 
-- Database: `ors_ycc`
-- 

-- --------------------------------------------------------

-- 
-- Table structure for table `lecturer`
-- 

CREATE TABLE `lecturer` (
  `lec_id` int(20) NOT NULL,
  `lec_name` varchar(30) collate utf8_unicode_ci NOT NULL,
  `lec_tel` varchar(20) collate utf8_unicode_ci NOT NULL,
  `lec_email` varchar(20) collate utf8_unicode_ci NOT NULL,
  `lec_comment` varchar(50) collate utf8_unicode_ci NOT NULL,
  `password` int(10) NOT NULL,
  PRIMARY KEY  (`lec_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- 
-- Dumping data for table `lecturer`
-- 

INSERT INTO `lecturer` VALUES (11, 'Irshad Ahmad', '093456743', 'irshad@gmail.com', '', 0);
INSERT INTO `lecturer` VALUES (12, 'Mr.Safdar Ali ', '0934567434', 'safdar@gmail.com', '', 0);
INSERT INTO `lecturer` VALUES (13, 'Mr.Manaver Ali', '0198745734', 'manaver@gmail.com', '', 0);
