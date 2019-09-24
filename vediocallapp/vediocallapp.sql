-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 25, 2019 at 01:55 PM
-- Server version: 5.6.16
-- PHP Version: 5.5.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `vediocallapp`
--

-- --------------------------------------------------------

--
-- Table structure for table `administrators`
--

CREATE TABLE IF NOT EXISTS `administrators` (
  `ADMINID` bigint(20) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `user_role` int(11) NOT NULL DEFAULT '2',
  `profile_picture` varchar(500) NOT NULL,
  `profile_thumb` varchar(500) NOT NULL,
  `email` varchar(80) NOT NULL DEFAULT '',
  `username` varchar(80) NOT NULL DEFAULT '',
  `password` varchar(50) NOT NULL DEFAULT '',
  PRIMARY KEY (`ADMINID`),
  UNIQUE KEY `email` (`email`),
  UNIQUE KEY `username` (`username`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `administrators`
--

INSERT INTO `administrators` (`ADMINID`, `name`, `user_role`, `profile_picture`, `profile_thumb`, `email`, `username`, `password`) VALUES
(1, 'Mohit Chack', 1, '', '', 'mohitchack255@gmail.com', 'admin', 'e10adc3949ba59abbe56e057f20f883e');

-- --------------------------------------------------------

--
-- Table structure for table `companies`
--

CREATE TABLE IF NOT EXISTS `companies` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `company_name` varchar(500) NOT NULL,
  `company_address` varchar(500) NOT NULL,
  `contact_person` varchar(500) NOT NULL,
  `contact_number` varchar(500) NOT NULL,
  `noofdevices` varchar(500) NOT NULL,
  `password` varchar(500) NOT NULL,
  `created_on` varchar(200) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `company_name` (`company_name`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `companies`
--

INSERT INTO `companies` (`id`, `company_name`, `company_address`, `contact_person`, `contact_number`, `noofdevices`, `password`, `created_on`) VALUES
(1, 'digimonk', 'gwalior', 'Mohit chack', '8962334644', '5', '12345', '25-08-2019 03:52:36 PM');

-- --------------------------------------------------------

--
-- Table structure for table `devices`
--

CREATE TABLE IF NOT EXISTS `devices` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `company_id` int(11) NOT NULL,
  `device_id` varchar(200) NOT NULL,
  `created_on` varchar(200) NOT NULL,
  `created_by` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `devices`
--

INSERT INTO `devices` (`id`, `company_id`, `device_id`, `created_on`, `created_by`) VALUES
(1, 1, 'digi#9464', '25-08-2019 03:52:36 PM', 'Admin'),
(2, 1, 'digi#9051', '25-08-2019 03:52:36 PM', 'Admin'),
(3, 1, 'digi#9588', '25-08-2019 03:52:36 PM', 'Admin'),
(4, 1, 'digi#9746', '25-08-2019 03:52:36 PM', 'Admin'),
(5, 1, 'digi#9348', '25-08-2019 03:52:36 PM', 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `system_settings`
--

CREATE TABLE IF NOT EXISTS `system_settings` (
  `id` smallint(6) NOT NULL,
  `key` varchar(250) NOT NULL,
  `value` text NOT NULL,
  `system` tinyint(150) NOT NULL DEFAULT '1',
  `groups` varchar(150) NOT NULL,
  `update_date` date NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `system_settings`
--

INSERT INTO `system_settings` (`id`, `key`, `value`, `system`, `groups`, `update_date`, `status`) VALUES
(3, 'email_tittle', 'Digimonk Work', 1, 'config', '2018-09-28', 1),
(4, 'email_address', 'sandeep.sikarwar@digimonk.in', 1, 'config', '2018-09-28', 1),
(6, 'default_currency', 'USD', 1, 'config', '2018-09-28', 1),
(93, 'favicon', 'feelerz.png', 1, '', '0000-00-00', 1),
(97, 'currency_option', 'USD', 1, 'config', '2018-09-28', 1),
(279, 'logo_front', 'uploads/logo/1539777409_rodolfo_logo.png', 1, 'config', '2018-10-17', 1),
(306, 'smtp_host', 'mail.digimonk.net', 1, 'config', '2018-10-25', 1),
(307, 'smtp_port', '465', 1, 'config', '2018-10-25', 1),
(308, 'smtp_user', 'deepak@digimonk.net', 1, 'config', '2018-10-25', 1),
(309, 'smtp_pass', 'Deepak@3096~~', 1, 'config', '2018-10-25', 1),
(440, 'website_name', 'Feelerz', 1, 'config', '2018-11-20', 1),
(441, 'base_domain', 'http://work.digimonk.net/', 1, 'config', '2018-11-20', 1),
(442, 'website_slogan', '', 1, 'config', '2018-11-20', 1),
(443, 'price_option', 'dynamic', 1, 'config', '2018-11-20', 1),
(444, 'gig_price', '', 1, 'config', '2018-11-20', 1),
(445, 'extra_gig_price', '', 1, 'config', '2018-11-20', 1),
(446, 'admin_commision', '10', 1, 'config', '2018-11-20', 1),
(447, 'google_analytics_code', '', 1, 'config', '2018-11-20', 1),
(448, 'meta_title', '', 1, 'config', '2018-11-20', 1),
(449, 'meta_keywords', '', 1, 'config', '2018-11-20', 1),
(450, 'meta_description', '', 1, 'config', '2018-11-20', 1),
(451, 'facebook', 'https://www.facebook.com/DigiMonkOfficial/', 1, 'config', '2018-11-20', 1),
(452, 'twitter', 'https://twitter.com/teamdigimonk', 1, 'config', '2018-11-20', 1),
(453, 'google_plus', '', 1, 'config', '2018-11-20', 1),
(454, 'linkedIn', 'https://www.linkedin.com/company/pixel-online/', 1, 'config', '2018-11-20', 1),
(455, 'one_signal_subdomain', '', 1, 'config', '2018-11-20', 1),
(456, 'one_signal_app_id', '', 1, 'config', '2018-11-20', 1),
(457, 'one_signal_reset_key', '', 1, 'config', '2018-11-20', 1),
(458, 'paypal_option', '2', 1, 'config', '2018-11-20', 1),
(459, 'paypal_allow', '1', 1, 'config', '2018-11-20', 1),
(460, 'stripe_option', '2', 1, 'config', '2018-11-20', 1),
(461, 'stripe_allow', '1', 1, 'config', '2018-11-20', 1),
(462, 'publishable_key', 'pk_test_Js15CigEZPZH69hjS2hgXjBx', 1, 'config', '2018-11-20', 1),
(463, 'secret_key', 'sk_test_OVXvseuWuLVp2w0XOWvGKDQJ', 1, 'config', '2018-11-20', 1),
(464, 'live_publishable_key', 'pk_live_Fcv2quS4tvCx6BwXhfoQQFTT', 1, 'config', '2018-11-20', 1),
(465, 'live_secret_key', 'sk_live_juEOItnRuTNTkHuijyJCdSdt', 1, 'config', '2018-11-20', 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
