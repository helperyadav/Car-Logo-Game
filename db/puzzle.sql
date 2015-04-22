-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 22, 2015 at 06:52 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `puzzle`
--

CREATE TABLE IF NOT EXISTS `puzzle` (
  `id` int(11) NOT NULL,
  `src` varchar(200) NOT NULL,
  `op1` varchar(50) NOT NULL,
  `op2` varchar(50) NOT NULL,
  `op3` varchar(50) NOT NULL,
  `op4` varchar(50) NOT NULL,
  `ans` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `puzzle`
--

INSERT INTO `puzzle` (`id`, `src`, `op1`, `op2`, `op3`, `op4`, `ans`) VALUES
(1, 'img/puzzles/bmw.png', 'BMW', 'AUDI', 'TOYOTA', 'TATA', 'op1'),
(2, 'img/puzzles/audi.png', 'BMW', 'nividia', 'TOYOTA', 'Audi', 'op4'),
(3, 'img/puzzles/mercedes.png', 'BMW', 'AUDI', 'Mercedes', 'TATA', 'op3'),
(4, 'img/puzzles/Jaguar.png', 'Jaguar', 'AUDI', 'Mercedes', 'TATA', 'op1'),
(5, 'img/puzzles/Renault.png', 'Renault', 'AUDI', 'Mercedes', 'TATA', 'op1'),
(6, 'img/puzzles/farrari1.png', 'Renault', 'AUDI', 'Mercedes', 'farrari', 'op4');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
