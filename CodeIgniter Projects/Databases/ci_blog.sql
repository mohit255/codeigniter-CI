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
-- Database: `ci_blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE IF NOT EXISTS `blog` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `article_name` varchar(96) NOT NULL,
  `category` varchar(99) NOT NULL,
  `article_body` varchar(99) NOT NULL,
  `published_on` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `article_name`, `category`, `article_body`, `published_on`) VALUES
(4, 'new article', 'foodieiiii', 'this is sample text', '2018-05-08'),
(5, 'new article', 'foodeeee', 'this is sample text', '2018-05-08'),
(6, 'new article today monday', 'food', 'this is the new article pubished today', '2018-05-21');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(89) NOT NULL,
  `password` varchar(87) NOT NULL,
  `age` varchar(87) NOT NULL,
  `city` varchar(97) NOT NULL,
  `role` varchar(96) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `age`, `city`, `role`) VALUES
(1, 'asd', 'd41d8cd98f00b204e9800998ecf8427e', '', 'delhi', 'author'),
(2, 'asd', 'd41d8cd98f00b204e9800998ecf8427e', '', 'delhi', 'author'),
(3, 'aman', 'd41d8cd98f00b204e9800998ecf8427e', '', 'delhi', 'author'),
(4, 'amank', '202cb962ac59075b964b07152d234b70', '', 'delhi', 'author'),
(5, 'mohit255', '827ccb0eea8a706c4c34a16891f84e7b', '22', 'delhi', 'admin'),
(6, 'mohit255', '827ccb0eea8a706c4c34a16891f84e7b', '23', 'gurgaon', 'admin');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
