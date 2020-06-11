-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 31, 2018 at 07:54 AM
-- Server version: 5.1.36
-- PHP Version: 5.3.0

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `bandan1_db`
--
CREATE DATABASE `bandan1_db` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `bandan1_db`;

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE IF NOT EXISTS `contact` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `name` varchar(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  `mobile` varchar(15) NOT NULL,
  `message` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `contact`
--


-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `email` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `email`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `reg`
--

CREATE TABLE IF NOT EXISTS `reg` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `email` varchar(30) NOT NULL,
  `name` varchar(60) NOT NULL,
  `dob` varchar(15) NOT NULL,
  `password` varchar(100) NOT NULL,
  `mobile` varchar(36) NOT NULL,
  `nationality` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `religion` varchar(50) NOT NULL,
  `mothertongue` varchar(50) NOT NULL,
  `height` varchar(40) NOT NULL,
  `weight` varchar(19) NOT NULL,
  `address` varchar(100) NOT NULL,
  `gender` varchar(13) NOT NULL,
  `file` varchar(1000) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `reg`
--

INSERT INTO `reg` (`id`, `email`, `name`, `dob`, `password`, `mobile`, `nationality`, `city`, `religion`, `mothertongue`, `height`, `weight`, `address`, `gender`, `file`) VALUES
(13, 'pawan@gmail.com', 'Pawan', '2018-07-05', 'pawan', '1234567890', 'Indian', 'Agra', 'Hindu', 'Hindi', '6', '55', 'Kalindi Vihar,Agra', 'Male', 'pawan.jpg'),
(10, 'singhsivani699@gmail.com', 'Shivani', '2018-07-27', 'shivani', '9634683998', 'Indian', 'Agra', 'Hindu', 'Hindi', '5', '42', 'Foundary nagar,Agra-6', 'Female', 'shivani.jpg'),
(11, 'prashi@gmail.com', 'Prashi', '2018-07-20', 'prashi', '1234567890', 'Indian', 'Kanpur', 'Hindu', 'Hindi', '6', '45', 'Kanpur', 'Female', 'prashi.jpg'),
(12, 'anil@gmail.com', 'Anil', '2018-07-03', 'anil', '1234567890', 'Indian', 'Banaras', 'Select Religion', 'Hindi', '7', '50', 'Banaras', 'Male', 'anil.jpg'),
(16, 'singhsivani699@gmail.com', 'shaheen', '2018-07-13', 'cghgdvhuv', '3445567', 'Nationality', 'Select City', 'Hindu', 'Select Mother Tongue', '5', '45', 'hjuhcui', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `request`
--

CREATE TABLE IF NOT EXISTS `request` (
  `reqid` int(5) NOT NULL AUTO_INCREMENT,
  `reqby` int(5) NOT NULL,
  `reqto` int(5) NOT NULL,
  `reqdate` varchar(30) NOT NULL,
  `status` varchar(30) NOT NULL DEFAULT 'pending',
  PRIMARY KEY (`reqid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `request`
--

INSERT INTO `request` (`reqid`, `reqby`, `reqto`, `reqdate`, `status`) VALUES
(6, 14, 12, '2018-07-30', 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `story`
--

CREATE TABLE IF NOT EXISTS `story` (
  `Sid` int(5) NOT NULL AUTO_INCREMENT,
  `CName` varchar(200) NOT NULL,
  `MDate` varchar(200) NOT NULL,
  `MDec` varchar(300) NOT NULL,
  `CPic` varchar(200) NOT NULL,
  `SDate` varchar(50) NOT NULL,
  PRIMARY KEY (`Sid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `story`
--

INSERT INTO `story` (`Sid`, `CName`, `MDate`, `MDec`, `CPic`, `SDate`) VALUES
(3, 'Mr. A weds Miss. B', '12/10/34', '		happy starting of married life', 'is - Copy.jpg', '2018-07-30');
