-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 03, 2015 at 04:02 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `gpa`
--

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE IF NOT EXISTS `course` (
  `id` varchar(6) NOT NULL,
  `lec_id` varchar(7) NOT NULL,
  `title` varchar(50) NOT NULL,
  `credits` int(2) NOT NULL COMMENT 'zero credits for NGPA courses',
  `semester` int(1) NOT NULL,
  `year` int(4) NOT NULL,
  `class_avg` decimal(4,3) DEFAULT NULL,
  `remarks` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `enrolments`
--

CREATE TABLE IF NOT EXISTS `enrolments` (
  `student_id` varchar(7) NOT NULL,
  `course_id` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `results`
--

CREATE TABLE IF NOT EXISTS `results` (
  `student_id` varchar(7) NOT NULL,
  `course_id` varchar(6) NOT NULL,
  `grade` varchar(2) NOT NULL,
  `credits` decimal(2,1) NOT NULL DEFAULT '0.0',
  `semester` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `table_gpa`
--

CREATE TABLE IF NOT EXISTS `table_gpa` (
  `student_id` varchar(7) NOT NULL,
  `gpa` decimal(4,3) NOT NULL,
  `tot_credit` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `table_gpa`
--

INSERT INTO `table_gpa` (`student_id`, `gpa`, `tot_credit`) VALUES
('120628C', '3.170', 54);

-- --------------------------------------------------------

--
-- Table structure for table `table_sgpa`
--

CREATE TABLE IF NOT EXISTS `table_sgpa` (
  `student_id` varchar(7) NOT NULL,
  `semester` int(1) NOT NULL,
  `sgpa` decimal(4,3) NOT NULL,
  `sem_credits` int(2) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `table_sgpa`
--

INSERT INTO `table_sgpa` (`student_id`, `semester`, `sgpa`, `sem_credits`) VALUES
('120628C', 1, '3.333', 6),
('120628C', 2, '3.825', 8),
('120628C', 3, '3.600', 5),
('120628C', 4, '3.888', 8),
('120628C', 5, '0.000', 0),
('120628C', 6, '0.000', 0),
('120628C', 7, '0.000', 0),
('120628C', 8, '0.000', 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` varchar(7) NOT NULL,
  `password` varchar(50) NOT NULL,
  `first_name` varchar(20) NOT NULL,
  `last_name` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `mobile` int(10) DEFAULT NULL,
  `department` varchar(10) NOT NULL,
  `profession` int(1) NOT NULL COMMENT '0=staff, 1=lec, 2=student',
  `status` int(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `password`, `first_name`, `last_name`, `email`, `mobile`, `department`, `profession`, `status`) VALUES
('000000X', 'cc03e747a6afbbcbf8be7668acfebee5', 'Chathura', 'De Silva', 'admin@mrt.ac.lk', 789, 'CSE', 0, 0),
('120083X', 'c20ad4d76fe97759aa27a0c99bff6710', 'Janith', 'Lokka', 'ammo@lokka.lk', 78, 'TEXTILE', 2, 0),
('120111K', 'cc03e747a6afbbcbf8be7668acfebee5', 'Suchira', 'Chinese', 'suchira.12@ee.mrt.ac.lk', 789, 'ELECTRICAL', 2, 0),
('120343X', 'c20ad4d76fe97759aa27a0c99bff6710', 'Janitha', 'Lokka', 'mooi@lpo.lk', 12, 'MATERIALS', 2, 0),
('120488U', 'cc03e747a6afbbcbf8be7668acfebee5', 'Prashan', 'Nipuna', 'nipuna@pop.lk', 112456369, 'CIVIL', 2, 0),
('120628C', 'cc03e747a6afbbcbf8be7668acfebee5', 'Menaka', 'Sirisena', 'pop@pop.lk', 1234, 'CSE', 2, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `course`
--
ALTER TABLE `course`
 ADD PRIMARY KEY (`id`), ADD KEY `lec_id` (`lec_id`);

--
-- Indexes for table `enrolments`
--
ALTER TABLE `enrolments`
 ADD PRIMARY KEY (`student_id`,`course_id`), ADD KEY `course_id` (`course_id`);

--
-- Indexes for table `results`
--
ALTER TABLE `results`
 ADD PRIMARY KEY (`student_id`,`course_id`), ADD KEY `course_id` (`course_id`);

--
-- Indexes for table `table_gpa`
--
ALTER TABLE `table_gpa`
 ADD PRIMARY KEY (`student_id`);

--
-- Indexes for table `table_sgpa`
--
ALTER TABLE `table_sgpa`
 ADD PRIMARY KEY (`student_id`,`semester`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`id`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `course`
--
ALTER TABLE `course`
ADD CONSTRAINT `course_ibfk_1` FOREIGN KEY (`lec_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `enrolments`
--
ALTER TABLE `enrolments`
ADD CONSTRAINT `enrolments_ibfk_1` FOREIGN KEY (`student_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `enrolments_ibfk_2` FOREIGN KEY (`course_id`) REFERENCES `course` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `results`
--
ALTER TABLE `results`
ADD CONSTRAINT `results_ibfk_1` FOREIGN KEY (`student_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `results_ibfk_2` FOREIGN KEY (`course_id`) REFERENCES `course` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `table_gpa`
--
ALTER TABLE `table_gpa`
ADD CONSTRAINT `table_gpa_ibfk_1` FOREIGN KEY (`student_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `table_sgpa`
--
ALTER TABLE `table_sgpa`
ADD CONSTRAINT `table_sgpa_ibfk_1` FOREIGN KEY (`student_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
