-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 03, 2018 at 09:53 AM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `reminderapp`
--

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `fullname` varchar(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`fullname`, `username`, `password`) VALUES
('jijo', 'jijo', 'jijo'),
('vimal', 'vimal', 'vimal'),
('rahul', 'rahul', 'rahul');

-- --------------------------------------------------------

--
-- Table structure for table `reminder`
--

CREATE TABLE IF NOT EXISTS `reminder` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  `title` varchar(20) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `rdate` date NOT NULL,
  `rtime` time NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `reminder`
--

INSERT INTO `reminder` (`id`, `username`, `title`, `description`, `rdate`, `rtime`) VALUES
(5, 'rahul', 'exam', 'university exam', '2018-05-14', '11:00:00'),
(6, 'rahul', 'new xam', 'university exam', '2018-05-14', '11:00:00'),
(7, 'rahul', 'hallticket', 'university exam', '2018-05-14', '11:00:00'),
(8, 'jijo', 'fees payment', 'exam fees must be paid ', '2019-01-01', '11:00:00'),
(12, 'vimal', 'marriage', 'abys marriage', '2018-05-05', '00:00:00'),
(14, 'jijo', 'exam', 'university exam is starting', '2018-06-01', '09:09:00');
