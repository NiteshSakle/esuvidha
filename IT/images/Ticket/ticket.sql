-- phpMyAdmin SQL Dump
-- version 3.1.3.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 02, 2012 at 06:21 PM
-- Server version: 5.1.33
-- PHP Version: 5.2.9-2

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ticket`
--

-- --------------------------------------------------------

--
-- Table structure for table `section`
--

CREATE TABLE IF NOT EXISTS `section` (
  `id` int(4) NOT NULL,
  `name` varchar(20) NOT NULL,
  `contact` int(10) NOT NULL,
  `stage` varchar(10) NOT NULL,
  `privilege` int(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `section`
--

INSERT INTO `section` (`id`, `name`, `contact`, `stage`, `privilege`) VALUES
(1, 'MIS', 2310, 'Stg-II', 1),
(2, 'VIDEECOM', 2308, 'Stg-II', 1),
(3, 'BM-II', 2325, 'Stg-II', 2);

-- --------------------------------------------------------

--
-- Table structure for table `ticketmaster`
--

CREATE TABLE IF NOT EXISTS `ticketmaster` (
  `ticketid` int(4) NOT NULL AUTO_INCREMENT,
  `sectionid` int(2) NOT NULL,
  `problem` varchar(50) NOT NULL,
  `assign` varchar(20) NOT NULL,
  `createdate` datetime NOT NULL,
  `solvedate` datetime NOT NULL,
  `status` int(1) NOT NULL,
  `ipaddress` varchar(20) NOT NULL,
  `priority` int(1) NOT NULL,
  `remark` text NOT NULL,
  PRIMARY KEY (`ticketid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `ticketmaster`
--

INSERT INTO `ticketmaster` (`ticketid`, `sectionid`, `problem`, `assign`, `createdate`, `solvedate`, `status`, `ipaddress`, `priority`, `remark`) VALUES
(1, 3, 'Computer_Problem', '', '2012-12-02 04:44:48', '0000-00-00 00:00:00', 1, '127.0.0.1', 2, 'Please start my computer on urent basis');

-- --------------------------------------------------------

--
-- Table structure for table `ticketremarks`
--

CREATE TABLE IF NOT EXISTS `ticketremarks` (
  `remarkid` int(6) NOT NULL AUTO_INCREMENT,
  `ticketid` int(4) NOT NULL,
  `remark` text NOT NULL,
  `remakdate` datetime NOT NULL,
  `remarkby` varchar(20) NOT NULL,
  PRIMARY KEY (`remarkid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `ticketremarks`
--

INSERT INTO `ticketremarks` (`remarkid`, `ticketid`, `remark`, `remakdate`, `remarkby`) VALUES
(1, 1, 'our engr was attended ur call, and found hard disk crashed,,,\r\nsent to nagpur for recovery,,,it takes 12 working days...', '2012-12-02 04:46:05', 'mis'),
(2, 1, 'please do it as early as possible,, or give replacement or another pc for further work,,and any how any cost dept data is essential,,so do data recovery as well', '2012-12-02 04:47:52', 'bm-ii'),
(3, 1, 'our dept will ready to recover ur data,,,but remiang imprest amount for this financial year is nil, so u have to take imptresr and pay recovery bills...', '2012-12-02 04:49:07', 'mis'),
(4, 1, 'ok', '2012-12-02 04:49:21', 'bm-ii'),
(5, 1, 'asdf', '2012-12-02 05:18:49', 'mis'),
(6, 1, 'closed', '2012-12-02 05:31:54', 'mis'),
(7, 1, 'hello', '2012-12-02 05:34:53', 'bm-ii'),
(8, 1, 'please do it', '2012-12-02 05:38:33', 'bm-ii'),
(9, 1, 'asdf', '2012-12-02 05:39:10', 'bm-ii'),
(10, 1, 'please', '2012-12-02 05:42:36', 'bm-ii'),
(11, 1, 'closed', '2012-12-02 05:43:37', 'mis'),
(12, 1, 'it not done', '2012-12-02 05:44:09', 'bm-ii');
