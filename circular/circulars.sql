-- phpMyAdmin SQL Dump
-- version 3.1.3.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 13, 2013 at 08:52 AM
-- Server version: 5.1.33
-- PHP Version: 5.2.9-2

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `circulars`
--

-- --------------------------------------------------------

--
-- Table structure for table `mycircular`
--

CREATE TABLE IF NOT EXISTS `mycircular` (
  `cirid` int(3) NOT NULL,
  `creationdate` date NOT NULL,
  `dispatchdate` date NOT NULL,
  `circularno` int(10) NOT NULL,
  `body` text NOT NULL,
  `sectionid` int(2) NOT NULL,
  `macAddr` varchar(20) NOT NULL,
  `signedby` varchar(10) NOT NULL,
  `subject` varchar(60) NOT NULL,
  PRIMARY KEY (`cirid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mycircular`
--


-- --------------------------------------------------------

--
-- Table structure for table `refcir`
--

CREATE TABLE IF NOT EXISTS `refcir` (
  `refid` int(5) NOT NULL,
  `cirid` int(4) NOT NULL,
  `name` varchar(20) NOT NULL,
  PRIMARY KEY (`refid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `refcir`
--


-- --------------------------------------------------------

--
-- Table structure for table `section`
--

CREATE TABLE IF NOT EXISTS `section` (
  `id` int(4) NOT NULL,
  `name` varchar(20) NOT NULL,
  `contact` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `section`
--

INSERT INTO `section` (`id`, `name`, `contact`) VALUES
(1, 'mis', 2310),
(2, 'videecom', 2308),
(3, 'bm-ii', 2325);
