-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 30, 2018 at 11:31 AM
-- Server version: 5.6.17-log
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `gfm`
--

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE IF NOT EXISTS `student` (
  `name` varchar(255) NOT NULL,
  `enroll_no` int(10) NOT NULL,
  `unique_id` int(4) NOT NULL,
  `dept` varchar(255) NOT NULL,
  `class_coordinator` varchar(255) NOT NULL,
  `gfm` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `attend1` int(11) DEFAULT NULL,
  `attend2` int(11) DEFAULT NULL,
  `attend3` int(11) DEFAULT NULL,
  `attend4` int(11) DEFAULT NULL,
  `overall` int(11) DEFAULT NULL,
  `ptt1` int(11) DEFAULT NULL,
  `ptt2` int(11) DEFAULT NULL,
  `pst` int(11) DEFAULT NULL,
  `m_result` int(11) DEFAULT NULL,
  `shift` varchar(255) NOT NULL,
  PRIMARY KEY (`enroll_no`),
  UNIQUE KEY `enroll_no` (`enroll_no`,`unique_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`name`, `enroll_no`, `unique_id`, `dept`, `class_coordinator`, `gfm`, `password`, `attend1`, `attend2`, `attend3`, `attend4`, `overall`, `ptt1`, `ptt2`, `pst`, `m_result`, `shift`) VALUES
('iMH', 1316080154, 1224, 'ME', 'Umar Mursal', 'Umar Mursal', 'e10adc3949ba59abbe56e057f20f883e', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1st Shift');

-- --------------------------------------------------------

--
-- Table structure for table `validation`
--

CREATE TABLE IF NOT EXISTS `validation` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `type` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `validation`
--

INSERT INTO `validation` (`id`, `username`, `password`, `type`) VALUES
(1, 'Umar Mursal', 'umar123', 'cordinator'),
(2, 'Umar Mursal', 'umar123', 'gfm'),
(3, 'Mudassir', '123456', 'gfm'),
(4, 'Mudassir', '123456', 'cordinator');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
