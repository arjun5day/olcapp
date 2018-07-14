-- phpMyAdmin SQL Dump
-- version 3.1.3.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 19, 2014 at 11:38 AM
-- Server version: 5.1.33
-- PHP Version: 5.2.9-2

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_olc`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_computers`
--

CREATE TABLE IF NOT EXISTS `tbl_computers` (
  `s_no` int(10) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(40) NOT NULL,
  `middle_name` varchar(40) NOT NULL,
  `last_name` varchar(40) NOT NULL,
  `address` varchar(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `dob` date NOT NULL,
  `contact_no` varchar(10) NOT NULL,
  `joined_date` date NOT NULL,
  `course` varchar(40) NOT NULL,
  `total_fee` int(10) NOT NULL,
  `paid_fee` int(10) NOT NULL,
  `due_payment_date` date NOT NULL,
  PRIMARY KEY (`s_no`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `tbl_computers`
--

INSERT INTO `tbl_computers` (`s_no`, `first_name`, `middle_name`, `last_name`, `address`, `email`, `gender`, `dob`, `contact_no`, `joined_date`, `course`, `total_fee`, `paid_fee`, `due_payment_date`) VALUES
(2, 'arjun', '', 'panday', 'chiti, lamjung', 'bhanjaarjun@yahoo.com', 'male', '1985-12-21', '9841160160', '2014-11-19', 'hardware', 5000, 4000, '2014-11-26');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_language`
--

CREATE TABLE IF NOT EXISTS `tbl_language` (
  `s_no` int(10) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(40) NOT NULL,
  `middle_name` varchar(40) NOT NULL,
  `last_name` varchar(40) NOT NULL,
  `address` varchar(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `dob` date NOT NULL,
  `contact_no` varchar(10) NOT NULL,
  `joined_date` date NOT NULL,
  `course` varchar(40) NOT NULL,
  `total_fee` int(10) NOT NULL,
  `paid_fee` int(10) NOT NULL,
  `due_payment_date` date NOT NULL,
  PRIMARY KEY (`s_no`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `tbl_language`
--


-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE IF NOT EXISTS `tbl_users` (
  `s_no` int(30) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(40) NOT NULL,
  `user_password` varchar(40) NOT NULL,
  `user_type` varchar(40) NOT NULL,
  `activated` enum('0','1') NOT NULL,
  PRIMARY KEY (`s_no`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`s_no`, `user_name`, `user_password`, `user_type`, `activated`) VALUES
(3, 'arjun', 'panday', 'admin', '1'),
(4, 'kiran', 'sedhai', 'normal', '0');
