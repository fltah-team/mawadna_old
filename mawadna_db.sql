-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 13, 2016 at 12:27 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mawadna_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `college`
--

CREATE TABLE `college` (
  `id` int(50) NOT NULL,
  `name` varchar(500) NOT NULL,
  `uni` int(50) NOT NULL,
  `desc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `college`
--

INSERT INTO `college` (`id`, `name`, `uni`, `desc`) VALUES
(1, 'كلية علوم الحاسوب', 1, '');

-- --------------------------------------------------------

--
-- Table structure for table `dept`
--

CREATE TABLE `dept` (
  `id` int(50) NOT NULL,
  `name` varchar(500) NOT NULL,
  `college` int(50) NOT NULL,
  `desc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `dept`
--

INSERT INTO `dept` (`id`, `name`, `college`, `desc`) VALUES
(1, 'هندسة البرمجيات', 1, '');

-- --------------------------------------------------------

--
-- Table structure for table `slide`
--

CREATE TABLE `slide` (
  `id` int(50) NOT NULL,
  `name` varchar(500) NOT NULL,
  `sub` int(50) NOT NULL,
  `desc` text NOT NULL,
  `path` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `slide`
--

INSERT INTO `slide` (`id`, `name`, `sub`, `desc`, `path`) VALUES
(1, 'وصف', 1, 'desc', ''),
(2, 'وصف', 1, '', ''),
(3, 'وصف', 1, '', ''),
(4, 'وصف', 1, '', ''),
(5, 'عنوان', 1, '', ''),
(6, 'عنوان', 1, '', ''),
(7, 'عنوان', 1, '', ''),
(8, 'عنوان', 1, 'الوصف', ''),
(9, 'عنوان', 1, 'الوصف', ''),
(10, 'مبادئ الوصف', 1, 'وصفة الوصف', ''),
(11, 'مبادئ الوصف', 1, 'وصفة الوصف', ''),
(12, 'مبادئ الوصف', 1, 'وصفة الوصف', ''),
(13, 'مبادئ الوصف', 1, 'وصفة الوصف', ''),
(14, 'مبادئ الوصف', 1, 'وصفة الوصف', ''),
(15, 'مبادئ الوصف', 1, 'وصفة الوصف', ''),
(16, 'مبادئ الوصف', 1, 'وصفة الوصف', ''),
(17, 'مبادئ الوصف', 1, 'وصفة الوصف', ''),
(18, 'مبادئ الوصف', 1, 'وصفة الوصف', ''),
(19, 'مبادئ الوصف', 1, 'وصفة الوصف', ''),
(20, 'مبادئ الوصف', 1, 'وصفة الوصف', ''),
(21, 'مبادئ الوصف', 1, 'وصفة الوصف', ''),
(22, '', 1, 'وصفة الوصف', ''),
(23, 'name', 0, 'dec', ''),
(24, 'name', 1, 'dec', ''),
(25, 'name', 1, 'dec', '');

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE `subject` (
  `id` int(11) NOT NULL,
  `name` varchar(500) NOT NULL,
  `teacher` varchar(500) NOT NULL,
  `dept` int(50) NOT NULL,
  `sem` int(10) NOT NULL,
  `desc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`id`, `name`, `teacher`, `dept`, `sem`, `desc`) VALUES
(1, 'بناء البرمجيات', 'أبي حامد', 1, 6, '');

-- --------------------------------------------------------

--
-- Table structure for table `uni`
--

CREATE TABLE `uni` (
  `id` int(50) NOT NULL,
  `name` varchar(500) NOT NULL,
  `desc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `uni`
--

INSERT INTO `uni` (`id`, `name`, `desc`) VALUES
(1, 'جامعة السودان', '');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(50) NOT NULL,
  `name` varchar(500) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(500) NOT NULL,
  `phone` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `college`
--
ALTER TABLE `college`
  ADD PRIMARY KEY (`id`),
  ADD KEY `uni` (`uni`),
  ADD KEY `uni_2` (`uni`);

--
-- Indexes for table `dept`
--
ALTER TABLE `dept`
  ADD PRIMARY KEY (`id`),
  ADD KEY `college` (`college`),
  ADD KEY `college_2` (`college`);

--
-- Indexes for table `slide`
--
ALTER TABLE `slide`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sub` (`sub`);

--
-- Indexes for table `subject`
--
ALTER TABLE `subject`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `uni`
--
ALTER TABLE `uni`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `un` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `college`
--
ALTER TABLE `college`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `dept`
--
ALTER TABLE `dept`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `slide`
--
ALTER TABLE `slide`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `subject`
--
ALTER TABLE `subject`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `uni`
--
ALTER TABLE `uni`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
