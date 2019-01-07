-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 18, 2015 at 04:34 PM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `edm`
--
CREATE DATABASE `edm` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `edm`;

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE IF NOT EXISTS `employee` (
  `aadharno` varchar(12) NOT NULL,
  `name` text NOT NULL,
  `fathername` text NOT NULL,
  `address` longtext NOT NULL,
  `country` text NOT NULL,
  `city` text NOT NULL,
  `state` text NOT NULL,
  `email` varchar(30) NOT NULL,
  `mobile` varchar(10) NOT NULL,
  `qualification` varchar(18) NOT NULL,
  `emprole` varchar(20) NOT NULL,
  PRIMARY KEY (`aadharno`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`aadharno`, `name`, `fathername`, `address`, `country`, `city`, `state`, `email`, `mobile`, `qualification`, `emprole`) VALUES
('292591345037', 'Dhanamjay', 'Ramachandraiah', 'Punganur', 'India', 'Chittoor', 'Andhra Pradesh', 'kanipakkamdhanamjay@gmail.com', '9963958647', 'M.Tech', 'Student'),
('292591345038', 'Dhanu', 'adsfa', 'asdf\r\nasd', 'asdf', 'asdf', 'Andhra Pradesh', 'kanipakkamdhanamjay@gmail.com', '9963958647', 'M.Tech', 'Student'),
('292591345039', 'Uday', 'Ramachandraiah', '1-67\r\nChittoor', 'India', 'Chittoor', 'Andhra Pradesh', 'udaykumar@gmail.com', '9963958647', 'M.Tech', 'Student');
