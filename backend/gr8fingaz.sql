-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 24, 2020 at 06:02 PM
-- Server version: 5.7.21
-- PHP Version: 5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gr8fingaz`
--

-- --------------------------------------------------------

--
-- Table structure for table `all_users`
--

DROP TABLE IF EXISTS `all_users`;
CREATE TABLE IF NOT EXISTS `all_users` (
  `id` int(22) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `account_number` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `address` text,
  `created_date` datetime NOT NULL,
  `registeredby` varchar(50) NOT NULL,
  `status` int(3) NOT NULL DEFAULT '1',
  `unique_id` text,
  `encrypted_password` text,
  `salt` text,
  `irrelivant` text,
  `password_update` int(11) DEFAULT '0',
  `updated_at` varchar(30) DEFAULT NULL,
  `usertype` int(4) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `all_users`
--

INSERT INTO `all_users` (`id`, `name`, `account_number`, `phone`, `email`, `address`, `created_date`, `registeredby`, `status`, `unique_id`, `encrypted_password`, `salt`, `irrelivant`, `password_update`, `updated_at`, `usertype`) VALUES
(1, 'Oluwamitide Francis', 'GR8715169', '08035538658', 'olumideogundele@gmail.com', NULL, '2020-05-17 17:43:22', '', 1, '5ec169aa0883d1.04387994', '86tmGYiUajlia434mQ3Pp6dqbQxiM2IzODAwNDFi', 'b3b380041b', '123456!@#$%^', 1, NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `application`
--

DROP TABLE IF EXISTS `application`;
CREATE TABLE IF NOT EXISTS `application` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `slogan` varchar(50) NOT NULL,
  `address` varchar(200) NOT NULL,
  `logo` varchar(200) NOT NULL,
  `status` varchar(2) DEFAULT '0',
  `created_date` datetime NOT NULL,
  `registeredby` varchar(50) NOT NULL,
  `ip` varchar(255) DEFAULT 'https://api.ravepay.co/v2/services/confluence ',
  `port` varchar(10) DEFAULT NULL,
  `acct_num` varchar(30) DEFAULT NULL,
  `bank_name` varchar(10) DEFAULT NULL,
  `flutterapi` varchar(255) DEFAULT NULL,
  `flutterapisecret` varchar(255) DEFAULT NULL,
  `merchant_key` varchar(50) DEFAULT NULL,
  `api_key` varchar(50) DEFAULT NULL,
  `fee` int(50) DEFAULT '0',
  `googleapi` text,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `application`
--

INSERT INTO `application` (`id`, `name`, `phone`, `email`, `slogan`, `address`, `logo`, `status`, `created_date`, `registeredby`, `ip`, `port`, `acct_num`, `bank_name`, `flutterapi`, `flutterapisecret`, `merchant_key`, `api_key`, `fee`, `googleapi`) VALUES
(2, 'First Last', '08035538658', 'info_67@payall.com.ng', 'Payment made so easy ', '12422 W. Bluff Creek Drive Playa Vista,', 'graphicallity/Gpy.png', '1', '2020-05-14 14:35:17', '', '', '', '0690000031', '044', 'FLWPUBK_TEST-65fad94dcdd9605f3f92ae84545ce108-X', 'FLWSECK_TEST-31bdba0b238dc04db5017d2d2ebbc245-X', '', '', 200, 'AIzaSyAxXdYebcDwBfGkrbg9h00C0ns5mDg0R9I');

-- --------------------------------------------------------

--
-- Table structure for table `banks`
--

DROP TABLE IF EXISTS `banks`;
CREATE TABLE IF NOT EXISTS `banks` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) DEFAULT NULL,
  `code` varchar(50) NOT NULL,
  `status` varchar(2) DEFAULT '1',
  `created_date` datetime DEFAULT NULL,
  `registeredby` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=61 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `banks`
--

INSERT INTO `banks` (`id`, `name`, `code`, `status`, `created_date`, `registeredby`) VALUES
(2, 'Stanbic Mobile Money', '304', '1', NULL, 'admin'),
(6, 'First Bank of Nigeria', '011', '1', NULL, 'admin'),
(10, 'Zenith Bank', '057', '1', NULL, 'admin'),
(11, 'Standard Chartered Bank', '068', '1', NULL, 'admin'),
(13, 'Fidelity Bank', '070', '1', NULL, 'admin'),
(14, 'CitiBank', '023', '1', NULL, 'admin'),
(15, 'Unity Bank', '215', '1', NULL, 'admin'),
(17, 'Eartholeum', '302', '1', NULL, 'admin'),
(20, 'JAIZ Bank', '301', '1', NULL, 'admin'),
(21, 'Ecobank Plc', '050', '1', NULL, 'admin'),
(27, 'Stanbic IBTC Bank', '221', '1', NULL, 'admin'),
(31, 'ChamsMobile', '303', '1', NULL, 'admin'),
(37, 'Wema Bank', '035', '1', NULL, 'admin'),
(38, 'Enterprise Bank', '084', '1', NULL, 'admin'),
(39, 'Diamond Bank', '063', '1', NULL, 'admin'),
(41, 'SunTrust Bank', '100', '1', NULL, 'admin'),
(44, 'Heritage', '030', '1', NULL, 'admin'),
(46, 'GTBank Plc', '058', '1', NULL, 'admin'),
(47, 'Union Bank', '032', '1', NULL, 'admin'),
(48, 'Sterling Bank', '232', '1', NULL, 'admin'),
(49, 'Skye Bank', '076', '1', NULL, 'admin'),
(50, 'Keystone Bank', '082', '1', NULL, 'admin'),
(55, 'First City Monument Bank', '214', '1', NULL, 'admin'),
(59, 'United Bank for Africa', '033', '1', NULL, 'admin'),
(60, 'Access Bank', '044', '1', NULL, 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) DEFAULT NULL,
  `status` varchar(2) DEFAULT '1',
  `created_date` datetime DEFAULT NULL,
  `registeredby` varchar(50) DEFAULT NULL,
  `images` text,
  `unique` text,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `status`, `created_date`, `registeredby`, `images`, `unique`) VALUES
(1, 'Mechanic', '1', '2020-05-06 22:58:41', '', NULL, '6567865400444278'),
(2, 'HairDresser', '1', '2020-05-06 23:05:43', '', NULL, '2378654004442782'),
(3, 'AGRICTRADEVEST', '1', '2020-05-14 13:23:10', '', 'images-pictures/bag.jpg', '7865400444278245'),
(4, 'Mechanix', '1', '2020-05-14 14:44:59', '', 'images-pictures/10491376_384437485042507_6292872578561719464_o.jpg', '7865400444278280');

-- --------------------------------------------------------

--
-- Table structure for table `investment_type`
--

DROP TABLE IF EXISTS `investment_type`;
CREATE TABLE IF NOT EXISTS `investment_type` (
  `id` int(22) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `maturity` varchar(50) NOT NULL,
  `investment` varchar(50) NOT NULL,
  `information` text NOT NULL,
  `created_date` datetime NOT NULL,
  `registeredby` varchar(50) NOT NULL,
  `status` int(3) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `investment_type`
--

INSERT INTO `investment_type` (`id`, `name`, `maturity`, `investment`, `information`, `created_date`, `registeredby`, `status`) VALUES
(1, 'Golding', ' 9', '2020', '                     <ul><li>Manual</li><li>Original</li><li>Faking</li></ul>                  ', '2020-05-11 03:59:48', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

DROP TABLE IF EXISTS `services`;
CREATE TABLE IF NOT EXISTS `services` (
  `id` int(22) NOT NULL AUTO_INCREMENT,
  `service_by` varchar(50) NOT NULL,
  `code` varchar(50) NOT NULL,
  `category` varchar(22) NOT NULL,
  `created_date` datetime NOT NULL,
  `registeredby` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sp_registration`
--

DROP TABLE IF EXISTS `sp_registration`;
CREATE TABLE IF NOT EXISTS `sp_registration` (
  `id` int(22) NOT NULL AUTO_INCREMENT,
  `email` varchar(60) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `cname` varchar(50) NOT NULL,
  `country` varchar(50) NOT NULL,
  `created_date` datetime NOT NULL,
  `registeredby` varchar(50) NOT NULL,
  `status` int(3) NOT NULL DEFAULT '1',
  `address1` text,
  `address2` text,
  `city` varchar(50) NOT NULL,
  `states` varchar(30) DEFAULT NULL,
  `unique_id` text,
  `encrypted_password` text,
  `salt` text,
  `irrelivant` text,
  `password_update` int(11) DEFAULT '0',
  `updated_at` varchar(30) DEFAULT NULL,
  `lati` varchar(40) DEFAULT NULL,
  `longi` varchar(40) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sp_registration`
--

INSERT INTO `sp_registration` (`id`, `email`, `fname`, `lname`, `phone`, `cname`, `country`, `created_date`, `registeredby`, `status`, `address1`, `address2`, `city`, `states`, `unique_id`, `encrypted_password`, `salt`, `irrelivant`, `password_update`, `updated_at`, `lati`, `longi`) VALUES
(1, 'info@payaldl.com.ng', 'First', 'Last', '080355s38658', 'Megaray', 'Nigeria', '2020-05-12 02:55:56', '', 1, '1, Billings Road Oregun', 'Beside Unilever', 'Ikeja', 'Lagos', '5eba022df3e1f9.91484914', 'rSMtnK1EtduIzDx6eEhaF4MLTvk4ZjYzMmZhODli', '8f632fa89b', '773938290', 0, '2020-05-12 2:55:56', '', ''),
(2, 'info@payall.com.ng', 'First', 'Last', '08035538658', 'Megaray', 'Nigeria', '2020-05-12 02:58:52', '', 1, '1, Billings Road Oregun', 'Beside Unilever', 'Ikeja', 'Lagos', '5eba02ddeed8b5.62803972', 'xjCGdc+o5KaoC4o6z/NKcygogkk2YmY1NzFjNmQ3', '6bf571c6d7', '619186671', 0, '2020-05-12 2:58:52', '6.6045774', '3.3673556');

-- --------------------------------------------------------

--
-- Table structure for table `subcategories`
--

DROP TABLE IF EXISTS `subcategories`;
CREATE TABLE IF NOT EXISTS `subcategories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category` int(11) NOT NULL,
  `name` varchar(30) DEFAULT NULL,
  `status` varchar(2) DEFAULT '1',
  `created_date` datetime DEFAULT NULL,
  `registeredby` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subcategories`
--

INSERT INTO `subcategories` (`id`, `category`, `name`, `status`, `created_date`, `registeredby`) VALUES
(1, 2, 'AGRICTRADEVEST', '1', '2020-05-07 00:27:32', ''),
(2, 1, 'Olumide Francis', '1', '2020-05-11 03:07:41', 'UPVS294800'),
(3, 2, 'Totaling Finance', '1', '2020-05-11 03:08:02', 'UPVS294800');

-- --------------------------------------------------------

--
-- Table structure for table `users_investment_type`
--

DROP TABLE IF EXISTS `users_investment_type`;
CREATE TABLE IF NOT EXISTS `users_investment_type` (
  `id` int(22) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `maturity` varchar(50) NOT NULL,
  `investment` varchar(50) NOT NULL,
  `information` text NOT NULL,
  `created_date` datetime NOT NULL,
  `registeredby` varchar(50) NOT NULL,
  `status` int(3) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users_investment_type`
--

INSERT INTO `users_investment_type` (`id`, `name`, `maturity`, `investment`, `information`, `created_date`, `registeredby`, `status`) VALUES
(1, 'Bronze', '7', '80000', '<ul><li>dfsdf</li><li>dgdfg</li><li>fsdfsd</li></ul>', '2020-05-11 04:15:18', 'UPVS294800', 1),
(2, 'Bronze', '9', '700', '<ul><li>dfsdf</li><li>dgdfg</li><li>fsdfsd</li></ul>', '2020-05-11 04:15:18', 'UPVS294800', 1),
(3, 'Silver', '7', '9700', '<ul><li>dfsdf</li><li>dgdfg</li><li>fsdfsd</li></ul>', '2020-05-11 04:15:18', 'UPVS294800', 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
