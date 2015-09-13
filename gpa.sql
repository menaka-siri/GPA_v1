-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 13, 2015 at 07:18 PM
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

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`id`, `lec_id`, `title`, `credits`, `semester`, `year`, `class_avg`, `remarks`) VALUES
('CE1022', '120343X', 'Fluid Mechanics', 2, 1, 2013, NULL, NULL),
('CS1032', '120343X', 'Programming Fundamentals', 2, 1, 2013, NULL, NULL),
('CS1822', '120343X', 'Aspects of Civil Engineering', 2, 3, 2014, NULL, NULL),
('CS2012', '120343X', 'OOP', 3, 2, 2013, NULL, NULL),
('CS2052', '120343X', 'Computer Architecture', 3, 2, 2013, NULL, NULL),
('CS2212', '120343X', 'PC II', 0, 4, 2014, NULL, NULL),
('CS3032', '120343X', 'Computer Networks', 3, 4, 2014, NULL, NULL),
('CS3042', '120343X', 'Database Systems', 3, 4, 2014, NULL, NULL),
('EE1013', '120343X', 'Electrical Engineering', 2, 1, 2013, NULL, NULL),
('EE2052', '120256N', 'High Voltage', 3, 3, 2015, NULL, 'CEB field visit at Mathara '),
('EN2022', '120343X', 'Digital Electronics', 3, 3, 2014, NULL, NULL),
('MA1032', '120343X', 'Numerical Methods', 2, 2, 2013, NULL, NULL),
('MA2033', '120343X', 'Linear Algebra', 2, 4, 2014, NULL, NULL),
('ME1026', '120256N', 'Introduction to Manufacturing', 2, 4, 2014, NULL, 'Blacksmith workshop');

-- --------------------------------------------------------

--
-- Table structure for table `enrolments`
--

CREATE TABLE IF NOT EXISTS `enrolments` (
  `student_id` varchar(7) NOT NULL,
  `course_id` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `enrolments`
--

INSERT INTO `enrolments` (`student_id`, `course_id`) VALUES
('120488U', 'CE1022'),
('120628C', 'CE1022'),
('120488U', 'CS1032'),
('120628C', 'CS1032'),
('120488U', 'CS1822'),
('120628C', 'CS1822'),
('120488U', 'CS2012'),
('120628C', 'CS2012'),
('120488U', 'CS2052'),
('120628C', 'CS2052'),
('120628C', 'CS2212'),
('120488U', 'CS3032'),
('120628C', 'CS3032'),
('120488U', 'CS3042'),
('120628C', 'CS3042'),
('120488U', 'EE1013'),
('120628C', 'EE1013'),
('120488U', 'EN2022'),
('120628C', 'EN2022'),
('120488U', 'MA1032'),
('120628C', 'MA1032'),
('120488U', 'MA2033'),
('120628C', 'MA2033');

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

--
-- Dumping data for table `results`
--

INSERT INTO `results` (`student_id`, `course_id`, `grade`, `credits`, `semester`) VALUES
('120488U', 'CE1022', 'A+', '4.2', 1),
('120488U', 'CS1032', 'B', '3.0', 1),
('120488U', 'CS1822', 'B', '3.0', 3),
('120488U', 'CS2012', 'A', '4.0', 2),
('120488U', 'CS2052', 'A', '4.0', 2),
('120488U', 'CS2212', 'A-', '3.7', 2),
('120488U', 'CS3032', 'A-', '3.7', 4),
('120488U', 'CS3042', 'A-', '3.7', 4),
('120488U', 'EE1013', 'C', '2.0', 1),
('120488U', 'EN2022', 'A', '4.0', 3),
('120488U', 'MA1032', 'B', '3.0', 2),
('120488U', 'MA2033', 'A', '4.0', 4),
('120628C', 'CE1022', 'A', '4.0', 1),
('120628C', 'CS1032', 'B', '3.0', 1),
('120628C', 'CS1822', 'B', '3.0', 3),
('120628C', 'CS2012', 'A', '4.0', 2),
('120628C', 'CS2052', 'A', '4.0', 2),
('120628C', 'CS2212', 'A-', '3.7', 2),
('120628C', 'CS3032', 'A-', '3.7', 4),
('120628C', 'CS3042', 'A', '4.0', 4),
('120628C', 'EE1013', 'C', '2.0', 1),
('120628C', 'EN2022', 'A', '4.0', 3),
('120628C', 'MA1032', 'B', '3.0', 2),
('120628C', 'MA2033', 'A', '4.0', 4);

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
('120488U', '0.000', 0),
('120628C', '0.000', 0);

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
('120111K', 1, '0.000', 0),
('120111K', 2, '0.000', 0),
('120111K', 3, '0.000', 0),
('120111K', 4, '0.000', 0),
('120111K', 5, '0.000', 0),
('120111K', 6, '0.000', 0),
('120111K', 7, '0.000', 0),
('120111K', 8, '0.000', 0),
('120343X', 1, '2.780', 20),
('120488U', 1, '3.067', 6),
('120488U', 2, '3.750', 8),
('120488U', 3, '3.600', 5),
('120488U', 4, '3.775', 8),
('120488U', 5, '0.000', 0),
('120488U', 6, '0.000', 0),
('120488U', 7, '0.000', 0),
('120488U', 8, '0.000', 0),
('120628C', 1, '3.000', 6),
('120628C', 2, '3.750', 8),
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
  `profession` int(1) NOT NULL COMMENT '0=staff, 1=lec, 2=student, 3=admin',
  `status` int(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `password`, `first_name`, `last_name`, `email`, `mobile`, `department`, `profession`, `status`) VALUES
('000000X', 'cc03e747a6afbbcbf8be7668acfebee5', 'Chathura', 'De Silva', 'admin@mrt.ac.lk', 789, 'ADMIN', 3, 0),
('000001X', 'cc03e747a6afbbcbf8be7668acfebee5', 'Siri', 'Boy', 'pop@pop.mop', 78956, 'ADMIN', 0, 1),
('000007F', 'cc03e747a6afbbcbf8be7668acfebee5', 'Milinda', 'Amare', 'mili@single.single', 789, 'ADMIN', 0, 1),
('120056Z', 'cc03e747a6afbbcbf8be7668acfebee5', 'Adeesha', 'Liyanage', 'adi@pop.lk', 789, 'CSE', 2, 0),
('120083X', 'cc03e747a6afbbcbf8be7668acfebee5', 'Promod', 'Malaya', 'malaya@lokka.lk', 78, 'TEXTILE', 2, 0),
('120111K', 'cc03e747a6afbbcbf8be7668acfebee5', 'Suchira', 'Chinese', 'suchira.12@ee.mrt.ac.lk', 789, 'ELECTRICAL', 2, 1),
('120256N', 'cc03e747a6afbbcbf8be7668acfebee5', 'Sujan', 'Kulathilake', 'kule@pera.lk', 8956, 'ENTC', 1, 1),
('120300J', 'cc03e747a6afbbcbf8be7668acfebee5', 'Udesh', 'Gunathilake', 'gune@gampaha.lk', 7845, 'ADMIN', 0, 0),
('120343X', 'cc03e747a6afbbcbf8be7668acfebee5', 'Janitha', 'Lokka', 'mooi@lpo.lk', 12, 'MATERIALS', 1, 1),
('120488U', 'cc03e747a6afbbcbf8be7668acfebee5', 'Prashan', 'Nipuna', 'nipuna@pop.lk', 112456369, 'CIVIL', 2, 1),
('120546V', 'cc03e747a6afbbcbf8be7668acfebee5', 'Dinusha', 'Premawansa', 'dinu@ljo.lm', 4568, 'ENTC', 1, 0),
('120628C', 'cc03e747a6afbbcbf8be7668acfebee5', 'Menaka', 'Sirisena', 'pop@pop.lk', 1234, 'CSE', 2, 1),
('120789G', 'cc03e747a6afbbcbf8be7668acfebee5', 'Malmee', 'Weeravansha', 'mal@mal.lk', 478596, 'CSE', 2, 0);

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
ADD CONSTRAINT `course_ibfk_7` FOREIGN KEY (`lec_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

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
