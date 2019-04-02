-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 21, 2017 at 04:21 PM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `soil`
--

-- --------------------------------------------------------

--
-- Table structure for table `calibration`
--

CREATE TABLE IF NOT EXISTS `calibration` (
  `datacount` int(11) NOT NULL AUTO_INCREMENT,
  `data1` int(30) NOT NULL,
  `data2` int(30) NOT NULL,
  `data3` int(30) NOT NULL,
  `data4` int(30) NOT NULL,
  `data5` int(30) NOT NULL,
  `data6` int(30) NOT NULL,
  `data7` int(30) NOT NULL,
  `data8` int(30) NOT NULL,
  `data9` int(30) NOT NULL,
  `data10` int(30) NOT NULL,
  `data11` int(30) NOT NULL,
  `data12` int(30) NOT NULL,
  `data13` int(30) NOT NULL,
  `data14` int(30) NOT NULL,
  `data15` int(30) NOT NULL,
  `data16` int(30) NOT NULL,
  `data17` int(30) NOT NULL,
  `data18` int(30) NOT NULL,
  `data19` int(30) NOT NULL,
  `data20` int(30) NOT NULL,
  `reference` int(11) NOT NULL,
  PRIMARY KEY (`datacount`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `data`
--

CREATE TABLE IF NOT EXISTS `data` (
  `soilnumber` int(11) NOT NULL AUTO_INCREMENT,
  `n1` int(11) NOT NULL,
  `p1` int(11) NOT NULL,
  `k1` int(11) NOT NULL,
  `nref` int(11) NOT NULL,
  `pref` int(11) NOT NULL,
  `kref` int(11) NOT NULL,
  `data1` int(30) NOT NULL,
  `data2` varchar(30) NOT NULL,
  `data3` int(30) NOT NULL,
  `data4` int(30) NOT NULL,
  `data5` int(30) NOT NULL,
  `data6` int(30) NOT NULL,
  `data7` int(30) NOT NULL,
  `data8` int(30) NOT NULL,
  `data9` int(30) NOT NULL,
  `data10` int(30) NOT NULL,
  `data11` int(30) NOT NULL,
  `data12` int(30) NOT NULL,
  `data13` int(30) NOT NULL,
  `data14` int(30) NOT NULL,
  `data15` int(30) NOT NULL,
  `data16` int(30) NOT NULL,
  `data17` int(30) NOT NULL,
  `data18` int(30) NOT NULL,
  `data19` int(30) NOT NULL,
  `data20` int(30) NOT NULL,
  `dat1` int(11) NOT NULL,
  `dat2` int(11) NOT NULL,
  `dat3` int(11) NOT NULL,
  `dat4` int(11) NOT NULL,
  `dat5` int(11) NOT NULL,
  `dat6` int(11) NOT NULL,
  `dat7` int(11) NOT NULL,
  `dat8` int(11) NOT NULL,
  `dat9` int(11) NOT NULL,
  `dat10` int(11) NOT NULL,
  `dat11` int(11) NOT NULL,
  `dat12` int(11) NOT NULL,
  `dat13` int(11) NOT NULL,
  `dat14` int(11) NOT NULL,
  `dat15` int(11) NOT NULL,
  `dat16` int(11) NOT NULL,
  `dat17` int(11) NOT NULL,
  `dat18` int(11) NOT NULL,
  `dat19` int(11) NOT NULL,
  `dat20` int(11) NOT NULL,
  PRIMARY KEY (`soilnumber`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=171 ;

--
-- Dumping data for table `data`
--

INSERT INTO `data` (`soilnumber`, `n1`, `p1`, `k1`, `nref`, `pref`, `kref`, `data1`, `data2`, `data3`, `data4`, `data5`, `data6`, `data7`, `data8`, `data9`, `data10`, `data11`, `data12`, `data13`, `data14`, `data15`, `data16`, `data17`, `data18`, `data19`, `data20`, `dat1`, `dat2`, `dat3`, `dat4`, `dat5`, `dat6`, `dat7`, `dat8`, `dat9`, `dat10`, `dat11`, `dat12`, `dat13`, `dat14`, `dat15`, `dat16`, `dat17`, `dat18`, `dat19`, `dat20`) VALUES
(105, 0, 0, 0, 0, 0, 0, 15771744, '16777215', 15790320, 9474192, 3158064, 15784128, 7895160, 11053224, 6316128, 1579032, 4737096, 15777936, 14211288, 12632256, 16777200, 16773360, 9443352, 0, 4743312, 15794160, 12, 12, 9, 9, 7, 7, 7, 6, 5, 4, 4, 4, 4, 3, 2, 1, 1, 1, 0, 0),
(106, 0, 0, 0, 0, 0, 0, 15771744, '16777215', 15790320, 9474192, 3158064, 15784128, 7895160, 11053224, 6316128, 1579032, 4737096, 15777936, 14211288, 12632256, 16777200, 16773360, 9443352, 0, 4743312, 15794160, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(107, 0, 0, 0, 0, 0, 0, 15771744, '16777215', 15790320, 9474192, 3158064, 15784128, 7895160, 11053224, 6316128, 1579032, 4737096, 15777936, 14211288, 12632256, 16777200, 16773360, 9443352, 0, 4743312, 15794160, 12, 12, 9, 9, 7, 7, 7, 6, 5, 4, 4, 4, 4, 3, 2, 1, 1, 1, 0, 0),
(108, 4, 0, 6, 22, 55, 22, 15771744, '16777215', 15790320, 9474192, 3158064, 15784128, 7895160, 11053224, 6316128, 1579032, 4737096, 15777936, 14211288, 12632256, 16777200, 16773360, 9443352, 0, 4743312, 15794160, 12, 12, 9, 9, 7, 7, 7, 6, 5, 4, 4, 4, 4, 3, 2, 1, 1, 1, 0, 0),
(109, 0, 0, 0, 55, 23, 55, 0, '0', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(110, 0, 0, 0, 43, 23, 44, 15771744, '16777215', 15790320, 9474192, 3158064, 15784128, 7895160, 11053224, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 12, 12, 9, 9, 7, 7, 7, 6, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(111, 0, 0, 0, 0, 0, 0, 15771744, '16777215', 15790320, 9474192, 3158064, 15784128, 7895160, 11053224, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 12, 12, 9, 9, 7, 7, 7, 6, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(112, 0, 0, 0, 0, 0, 0, 15771744, '16777215', 15790320, 9474192, 3158064, 15784128, 7895160, 11053224, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 12, 12, 9, 9, 7, 7, 7, 6, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(113, 0, 0, 0, 13, 55, 23, 15771744, '16777215', 15790320, 9474192, 3158064, 15784128, 7895160, 11053224, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 12, 12, 9, 9, 7, 7, 7, 6, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(152, 0, 0, 0, 0, 0, 0, 0, '0', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(153, 0, 0, 0, 0, 0, 0, 0, '0', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(154, 0, 0, 0, 0, 0, 0, 0, '0', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(155, 0, 0, 0, 0, 0, 0, 0, '0', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(156, 0, 0, 0, 0, 0, 0, 0, '0', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(157, 0, 0, 0, 0, 0, 0, 0, '0', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(158, 0, 0, 0, 0, 0, 0, 0, '0', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(159, 0, 0, 0, 0, 0, 0, 0, '0', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(160, 0, 0, 0, 0, 0, 0, 0, '0', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(161, 0, 0, 0, 0, 0, 0, 0, '0', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(162, 0, 0, 0, 0, 0, 0, 0, '0', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(163, 0, 0, 0, 0, 0, 0, 0, '0', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(164, 0, 0, 0, 0, 0, 0, 0, '0', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(165, 0, 0, 0, 0, 0, 0, 0, '0', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(166, 0, 0, 0, 0, 0, 0, 0, '0', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(167, 0, 0, 0, 0, 0, 0, 0, '0', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(168, 0, 0, 0, 0, 0, 0, 0, '0', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(169, 0, 0, 0, 0, 0, 0, 0, '0', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(170, 0, 0, 0, 0, 0, 0, 0, '0', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `plants`
--

CREATE TABLE IF NOT EXISTS `plants` (
  `plantnumber` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  `chem1` int(11) NOT NULL,
  `chem2` int(11) NOT NULL,
  `chem3` int(11) NOT NULL,
  `chem4` int(11) NOT NULL,
  `chem5` int(11) NOT NULL,
  `chem6` int(11) NOT NULL,
  PRIMARY KEY (`plantnumber`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `plants`
--

INSERT INTO `plants` (`plantnumber`, `name`, `chem1`, `chem2`, `chem3`, `chem4`, `chem5`, `chem6`) VALUES
(4, 'carrots', 34, 11, 33, 0, 0, 0),
(5, 'eggplant', 67, 34, 22, 0, 0, 0),
(6, 'watermelon', 12, 3, 4, 0, 0, 0),
(7, 'potato', 2, 3, 4, 0, 0, 0),
(8, 'spinach', 3, 4, 5, 0, 0, 0),
(9, 'broccoli', 4, 5, 3, 0, 0, 0),
(10, 'cauliflower', 4, 6, 7, 0, 0, 0),
(11, 'squash', 5, 7, 3, 0, 0, 0),
(12, 'beans', 4, 2, 6, 0, 0, 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
