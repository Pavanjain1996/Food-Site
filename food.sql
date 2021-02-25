-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 15, 2018 at 12:05 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `food`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `username` varchar(20) NOT NULL,
  `pizza` int(3) DEFAULT '0',
  `sandwich` int(3) DEFAULT '0',
  `dosa` int(3) DEFAULT '0',
  `kulche` int(3) DEFAULT '0',
  `chowmein` int(3) DEFAULT '0',
  `macroni` int(3) DEFAULT '0',
  `pasta` int(3) DEFAULT '0',
  `manchurian` int(3) DEFAULT '0',
  `coldcoffee` int(3) DEFAULT '0',
  `colddrink` int(3) DEFAULT '0',
  `sweet` int(3) DEFAULT '0',
  `icecream` int(3) DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`username`, `pizza`, `sandwich`, `dosa`, `kulche`, `chowmein`, `macroni`, `pasta`, `manchurian`, `coldcoffee`, `colddrink`, `sweet`, `icecream`) VALUES
('Pavan Jain', 0, 0, 3, 5, 0, 0, 0, 0, 0, 0, 0, 0),
('Kritika Soni', 2, 1, 2, 1, 2, 5, 6, 4, 2, 1, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `price`
--

CREATE TABLE `price` (
  `item` varchar(20) NOT NULL,
  `price` int(3) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `price`
--

INSERT INTO `price` (`item`, `price`) VALUES
('pizza', 250),
('sandwich', 70),
('dosa', 60),
('kulche', 80),
('chowmein', 50),
('macroni', 60),
('pasta', 60),
('manchurian', 90),
('coldcoffee', 70),
('colddrink', 60),
('sweet', 20),
('icecream', 90);

-- --------------------------------------------------------

--
-- Table structure for table `validate`
--

CREATE TABLE `validate` (
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `address` varchar(20) DEFAULT NULL,
  `gender` varchar(10) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `validate`
--

INSERT INTO `validate` (`username`, `password`, `address`, `gender`) VALUES
('Pavan Jain', '123456789', 'Kalpana Nagar 85', 'Male'),
('Kritika Soni', 'Ab!123456', 'Data Colony Lalghati', 'Female');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `price`
--
ALTER TABLE `price`
  ADD PRIMARY KEY (`item`);

--
-- Indexes for table `validate`
--
ALTER TABLE `validate`
  ADD PRIMARY KEY (`username`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
