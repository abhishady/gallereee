-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 21, 2015 at 08:45 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `gallereee`
--

-- --------------------------------------------------------

--
-- Table structure for table `malls`
--

CREATE TABLE IF NOT EXISTS `malls` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `mall_name` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  `mobile` int(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `description` varchar(300) NOT NULL,
  `email` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `malls`
--

INSERT INTO `malls` (`id`, `mall_name`, `image`, `mobile`, `address`, `description`, `email`) VALUES
(1, 'mall', 'hha.jpg', 124578, 'ghagsa', 'cvaxga', 'xsaadxa');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
