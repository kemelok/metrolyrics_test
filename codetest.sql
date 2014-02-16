-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 03, 2013 at 12:46 AM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `codetest`
--

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE IF NOT EXISTS `messages` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `message` text NOT NULL,
  `createtime` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `name`, `message`, `createtime`) VALUES
(1, 'test', 'test msg', '2013-04-03 06:55:35'),
(2, 'test', 'test msg', '2013-04-03 06:55:35'),
(3, 'test', 'test msg', '2013-04-03 06:56:08'),
(4, 'test', 'test msg', '2013-04-03 07:07:14'),
(5, 'sda', 'asdad', '2013-04-03 07:08:24'),
(6, 'sda', 'asdad', '2013-04-03 07:08:55'),
(7, 'sda', 'asdad', '2013-04-03 07:09:00'),
(8, 'sda', 'asdad', '2013-04-03 07:09:09'),
(9, 'sda', 'asdad', '2013-04-03 07:09:30'),
(10, 'sda', 'asdad', '2013-04-03 07:09:45'),
(11, 'asd', 'assdfsdf', '2013-04-03 07:09:51'),
(12, '555', '555555555555', '2013-04-03 07:27:25'),
(13, 'asdad', 'sdaasdadadasdasd', '2013-04-03 07:33:52'),
(14, 'asd', 'asd asd asda ', '2013-04-03 07:33:58'),
(15, 'asdad', 'asd asdas a asca ', '2013-04-03 07:38:58'),
(16, 'AS', 'AS ASCA  S AS ', '2013-04-03 07:39:45'),
(17, 'AS', 'AS ASCA  S AS ', '2013-04-03 07:39:57'),
(18, 'asd', 'asddas''''''''''fghfghfgh', '2013-04-03 07:42:50'),
(19, 'xzc', 'zxczczxczxc  zc ', '2013-04-03 07:45:13'),
(20, 'xzcxzc ', 'xcczxcxzcxcc zx cz ', '2013-04-03 07:45:22');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
