-- phpMyAdmin SQL Dump
-- version 2.10.3
-- http://www.phpmyadmin.net
-- 
-- Host: localhost
-- Generation Time: Mar 01, 2011 at 10:32 AM
-- Server version: 5.0.51
-- PHP Version: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

-- 
-- Database: `ors_ycc`
-- 

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
