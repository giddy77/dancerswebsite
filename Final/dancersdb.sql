-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 26, 2022 at 12:30 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dancersdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `Username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`Username`, `password`) VALUES
('[kim]', '[kim]');

-- --------------------------------------------------------

--
-- Table structure for table `dancers`
--

CREATE TABLE `dancers` (
  `Username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dancers`
--

INSERT INTO `dancers` (`Username`, `password`, `email`, `phone`) VALUES
('kim', 'kim', 'muhammad.zia3@mail.bcu.ac.uk', 2147483647),
('Grace', 'GRACE', 'muhammad.zia3@mail.bcu.ac.uk', 2147483647),
('dancer', 'dancer', 'mercymkirima@gmail.com', 2147483647),
('new', 'new', 'muhammad.zia3@mail.bcu.ac.uk', 2147483647),
('aaaa', 'aaaa', 'muhammad.zia3@mail.bcu.ac.uk', 2147483647),
('solo', 'solo', 'solo@solo', 2343345);

-- --------------------------------------------------------

--
-- Table structure for table `getus`
--

CREATE TABLE `getus` (
  `Names` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `number` varchar(50) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `getus`
--

INSERT INTO `getus` (`Names`, `email`, `number`, `message`) VALUES
('fsdfsdf', 'giddysipoi@gmail.com', '0707282965', 'gddfgfhffgghg'),
('fsdfsdf', 'muhammad.zia3@mail.bcu.ac.uk', '0707282965', 'rdsytsey'),
('fsdfsdf', 'giddysipoi@gmail.com', '0707282965', 'sgsfdfgdf'),
('fsdfsdf', 'giddysipoi@gmail.com', '0707282965', 'sgsfdfgdf'),
('fsdfsdf', 'mercymkirima@gmail.com', '0707282965', 'gsgdhdd'),
('fsdfsdf', 'mercymkirima@gmail.com', '0707282965', 'gsgdhdd'),
('fsdfsdf', 'giddysipoi@gmail.com', '0707282965', 'dhgdfhfd'),
('fsdfsdf', 'giddysipoi@gmail.com', '0707282965', 'dhgdfhfd'),
('fsdfsdf', 'mercymkirima@gmail.com', '0707282965', 'hdfhd'),
('fsdfsdf', 'kiok@gmail.com', '0707282965', 'dcgdffgfdf'),
('fsdfsdf', 'edwineddy2m@gmail.com', '0707282965', 'dfghdfhh');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
