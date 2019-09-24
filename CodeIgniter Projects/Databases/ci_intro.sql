-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 25, 2018 at 05:21 PM
-- Server version: 5.6.16
-- PHP Version: 5.5.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ci_intro`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE IF NOT EXISTS `blog` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `post_by` varchar(100) NOT NULL,
  `post_title` varchar(200) NOT NULL,
  `post_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `post` varchar(1000) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `post_by`, `post_title`, `post_time`, `post`) VALUES
(8, 'mohit@gmail.com', 'Codeigniter', '2018-06-22 19:59:20', 'bcmvbnbsdfsdgdfbdgmcgnhxd354g6b5g4h3dfcb'),
(10, 'mohit@gmail.com', 'sefrdhjghj,ghj,j', '2018-06-19 20:24:15', 'ilui7tuykl7ui'),
(12, 'mohit@gmail.com', 'Test CI', '2018-06-22 20:05:44', 'IS the ci post work?');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(200) NOT NULL,
  `lastname` varchar(200) NOT NULL,
  `mobile` int(12) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `mobile`, `email`, `password`) VALUES
(1, 'mohit', 'chack', 896233464, 'mohit@gmail.com', '12345'),
(2, 'chack', 'mohit', 12345678, 'mohitchack@gmail.com', '1234567'),
(3, 'mohit', 'chack', 1234567, 'mohitchack255@gmial.com', '12345'),
(4, 'hemu', 'hemant', 1234567890, 'cchinlund@gmail.com', '456789'),
(5, 'hemu', 'hemant', 1234567890, 'hemantchack2201@gmail.com', '123'),
(6, 'Mohit', 'chack', 2147483647, 'm@gmail.com', '1234');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
