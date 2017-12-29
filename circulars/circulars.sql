-- phpMyAdmin SQL Dump
-- version 3.1.3.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 22, 2013 at 02:16 AM
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
  `cirid` int(4) NOT NULL AUTO_INCREMENT,
  `creationdate` date NOT NULL,
  `dispatchdate` date NOT NULL,
  `circularno` varchar(40) NOT NULL,
  `body` text NOT NULL,
  `sectionid` int(2) NOT NULL,
  `macAddr` varchar(20) NOT NULL,
  `signedby` varchar(10) NOT NULL,
  `subject` varchar(60) NOT NULL,
  PRIMARY KEY (`cirid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `mycircular`
--

INSERT INTO `mycircular` (`cirid`, `creationdate`, `dispatchdate`, `circularno`, `body`, `sectionid`, `macAddr`, `signedby`, `subject`) VALUES
(1, '2013-05-14', '2013-05-14', 'KTPS/CE(O&M)/MIS/121', 'IMPORTANT!<p>1) Before installing or running Moto Racer you must insure that <br />your Desktop color palette is set to ''High Color (16 bit)''.</p><p>2) DirectX version 3 has to be installed on your PC (if in the <br />future you install another game which installs DirectX version 2 <br />or 1, it might be necessary to reinstall DirectX 3 to play the <br />MotoRacer demo again).</p><p>3) Make sure that there is no CD player running, if so quit any <br />Audio CD Player application (CD Player, FlexiCD, etc.).</p><p><br />________________________________________________________________</p><br />		 	', 1, '127.0.0.1', 'CE', 'Inventory mismatch');

-- --------------------------------------------------------

--
-- Table structure for table `refcir`
--

CREATE TABLE IF NOT EXISTS `refcir` (
  `refid` int(5) NOT NULL AUTO_INCREMENT,
  `cirid` int(4) NOT NULL,
  `name` varchar(20) NOT NULL,
  PRIMARY KEY (`refid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `refcir`
--

INSERT INTO `refcir` (`refid`, `cirid`, `name`) VALUES
(1, 1, 'ALLSH#ALLSE#DyCE#');

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
