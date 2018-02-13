-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 13, 2018 at 01:25 PM
-- Server version: 5.7.21-0ubuntu0.16.04.1
-- PHP Version: 7.0.27-1+ubuntu16.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `GFM`
--

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(11) NOT NULL,
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
  `shift` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `name`, `enroll_no`, `unique_id`, `dept`, `class_coordinator`, `gfm`, `password`, `attend1`, `attend2`, `attend3`, `attend4`, `overall`, `ptt1`, `ptt2`, `pst`, `m_result`, `shift`) VALUES
(3, 'Moin Gadkari', 1305690017, 6646, 'CO', 'suleman', 'test', '06a998cdd13c50b7875775d4e7e9fa74', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1st Shift'),
(5, 'Suleman Khan', 1655151515, 1551, 'CO', 'suleman', 'munaf ', '8f375f7f55ba6b6516364168a6cbf0fb', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1st Shift');

-- --------------------------------------------------------

--
-- Table structure for table `validation`
--

CREATE TABLE `validation` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `type` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `validation`
--

INSERT INTO `validation` (`id`, `username`, `password`, `type`) VALUES
(1, 'Moin ', 'moin', 'coordinator'),
(2, 'munaf ', 'munaf', 'gfm'),
(3, 'suleman', 'suleman', 'coordinator'),
(4, 'test', 'test', 'gfm');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `enroll_no` (`enroll_no`,`unique_id`);

--
-- Indexes for table `validation`
--
ALTER TABLE `validation`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `validation`
--
ALTER TABLE `validation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
