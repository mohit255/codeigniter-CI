-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 25, 2018 at 05:17 PM
-- Server version: 5.6.16
-- PHP Version: 5.5.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `pdo`
--

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE IF NOT EXISTS `student` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `student_id` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `name`, `student_id`) VALUES
(1, 'Ram1', '11'),
(2, 'Ram2', '12'),
(3, 'Ram3', '13'),
(4, 'Ram4', '14'),
(5, 'Ram5', '15'),
(6, 'Ram1', '11'),
(7, 'Ram2', '12'),
(8, 'Ram3', '13'),
(9, 'Ram4', '14'),
(10, 'Ram5', '15'),
(11, 'Ram1', '11'),
(12, 'Ram2', '12'),
(13, 'Ram3', '13'),
(14, 'Ram4', '14'),
(15, 'Ram5', '15');

-- --------------------------------------------------------

--
-- Table structure for table `student2`
--

CREATE TABLE IF NOT EXISTS `student2` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student2`
--

INSERT INTO `student2` (`id`, `name`) VALUES
(1, 'Mohan'),
(2, 'Latest'),
(1, 'Mohan'),
(2, 'Latest'),
(0, '2'),
(2, 'Shyam');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
