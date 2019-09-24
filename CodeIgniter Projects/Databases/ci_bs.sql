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
-- Database: `ci_bs`
--

-- --------------------------------------------------------

--
-- Table structure for table `postinfo`
--

CREATE TABLE IF NOT EXISTS `postinfo` (
  `post_id` int(20) NOT NULL AUTO_INCREMENT,
  `user_id` int(224) NOT NULL,
  `title` varchar(224) NOT NULL,
  `author` varchar(224) NOT NULL,
  `categories` varchar(224) NOT NULL,
  `description` varchar(224) NOT NULL,
  PRIMARY KEY (`post_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `postinfo`
--

INSERT INTO `postinfo` (`post_id`, `user_id`, `title`, `author`, `categories`, `description`) VALUES
(1, 0, 'wepiri', 'wergtip', 'jrghtipo', 'eorp4irfpdkfpwrir'),
(2, 6, 'eprii', 'qwiefi', 'Weather', 'derrgthyjjuyyyyyyyyyyyyyyyyyyyyyyyyyyyyyggrr'),
(3, 6, 'hello', 'Arti Singh Chauhan', 'news', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas sed diam eget risus varius blandit sit amet non magna. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent commodo cursus magna, vel scelerisque'),
(5, 6, 'new topic', 'artisingh', 'Weather', 'x'),
(6, 7, 'helloooo', 'chauhan', 'Bollywood', 'hiiiiiiiiiiiii'),
(7, 7, 'tomorrow', 'msndns', 'Weather', 'how r u?');

-- --------------------------------------------------------

--
-- Table structure for table `userinfo`
--

CREATE TABLE IF NOT EXISTS `userinfo` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `username` varchar(224) NOT NULL,
  `password` varchar(224) NOT NULL,
  `firstname` varchar(224) NOT NULL,
  `lastname` varchar(224) NOT NULL,
  `email` varchar(224) NOT NULL,
  `number` varchar(224) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `userinfo`
--

INSERT INTO `userinfo` (`id`, `username`, `password`, `firstname`, `lastname`, `email`, `number`) VALUES
(1, 'asdfg', 'qwje', 'kwjd', 'jwdjf', 'df', 'df'),
(2, 'ajsjdjsdj', 'asjdjf', 'sjdfj', 'sjdfj', 'asdf', 'sdfg'),
(3, 'ajsjdjsdjwew', 'asjdjfwe', 'sjdfjwew', 'sjdfjwje', 'wjje', 'wewej'),
(4, 'ajsjdjsdjwew', 'asjdjfwe', 'sjdfjwew', 'sjdfjwje', 'wjje', 'wewej'),
(5, 'Arti', 'arti', 'Arti', 'Singh', 'artilife@gmail.com', '9711408074'),
(6, 'arti', '2865a5b14e5a70273a7d311bfc150f4f', 'aksjkjds', 'jasd', 'ssdj', 'asd'),
(7, 'chauhan', '21232f297a57a5a743894a0e4a801fc3', ' jsdksjdsk', 'singh', 'admin@gmail.com', '123456'),
(8, 'mohit255', '827ccb0eea8a706c4c34a16891f84e7b', 'Mohit', 'Chack', 'mohitchack255@gmail.com', '8962334644');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
