database:koraditp_ticket
user:koraditp_ticket
pwd:ticket123



-- phpMyAdmin SQL Dump
-- version 3.1.3.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 19, 2013 at 02:53 PM
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
(3, 'BM-II', 2325, 'Stg-II', 2),
(5, 'TM-II', 2255, 'STG-I', 2),
(6, 'EM-II', 2335, 'STG-II', 2),
(7, 'ET-II', 2345, 'STG-II', 2),
(4, 'I&C-II', 2350, 'STG-II', 2),
(8, 'WTP-II', 2355, 'STG-II', 2),
(9, 'WTP-I', 2255, 'STG-II', 2),
(10, 'PCR-5', 2815, 'STG-II', 2),
(11, 'PCR-6', 2816, 'STG-II', 2),
(12, 'PCR-7', 2817, 'STG-II', 2),
(13, 'CHP', 2511, 'CHP', 2),
(14, 'CHP-EM', 2504, 'CHP', 2),
(15, 'CHP-RAIL', 2513, 'STG-II', 2),
(16, 'CHP-M1', 2560, 'CHP', 2),
(17, 'CHP-M2', 2560, 'CHP', 2),
(18, 'CHP C ROOM', 2528, 'CHP', 2),
(19, 'CHP-VM', 2508, 'CHP', 2),
(20, 'CIVIL', 2441, 'STG1', 2),
(21, 'COL CIVIL', 3443, 'COLONY', 2),
(22, 'OS-I', 2207, 'STG-I', 2),
(23, 'OS-II', 2307, 'STG-I', 2),
(24, 'SAFETY', 2207, 'STG-I', 2),
(25, 'FIRE FIGHTING', 4444, 'STG-1', 2),
(26, 'POG-I', 2209, 'STG-I', 2),
(27, 'POG-II', 2400, 'STG-II', 2),
(28, 'TSC', 2406, 'STG-II', 2),
(29, 'RCA+ISO', 2309, 'STG-II', 2),
(30, 'PURCHASE', 1408, 'URJA BHAVA', 2),
(31, 'ACCOUNT', 1610, 'URJA BHAVA', 2),
(32, 'COORD', 1415, 'URJA BHAVA', 2),
(33, 'EM COLONY', 3445, 'URJA BHAVA', 2),
(34, 'HR', 1518, 'URJA BHAVA', 2),
(35, 'WELFARE', 1407, 'URJA BHAVA', 2),
(36, 'SECURITY', 2911, 'URJA BHAVA', 2),
(37, 'DISPENSARY', 3450, 'COLONY', 2),
(38, 'MSA', 2583, 'URJA BHAVA', 2),
(39, 'ODP-II', 0, 'URJA BHAVA', 2),
(40, 'R AND M', 2205, 'STG-I', 2),
(41, 'FQAD', 2556, 'STG-I', 2),
(42, 'MPD', 2313, 'STG-I', 2),
(43, 'CESTENO', 1411, 'URJA BHAVA', 2),
(44, 'CHP COAL', 2582, 'STAGE-I', 2),
(45, 'TO-I', 2445, 'Stg-I', 2),
(46, 'TO-II', 2448, 'Stg-II', 2),
(47, 'CHP-ROPEWAY', 2515, 'CHP', 2),
(48, 'NTPC', 2205, 'STG-I', 2),
(49, 'BOOSTER PUMP', 2210, 'STG-I', 2),
(50, 'IC-I', 2250, 'STG-1', 2),
(51, 'TM-I', 2215, 'STG-I', 2),
(52, 'BM-I', 2225, 'STG-I', 2),
(53, 'EM-I', 2240, 'STG-I', 2),
(54, 'CHP-TECH', 2511, 'CHP', 2),
(55, 'CE(O&M)', 1411, 'UB', 2),
(56, 'FLY ASH', 1405, 'UB', 2),
(57, 'DYCE-E', 0, '', 2),
(58, 'DYCE-M', 0, '', 2),
(59, 'DYCE-G', 0, 'STG-I', 2),
(60, 'GCR', 2400, 'STG-II', 2),
(61, 'SE', 2332, 'Stage2', 2);
