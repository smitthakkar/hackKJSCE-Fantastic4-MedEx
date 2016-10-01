-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 01, 2016 at 09:33 AM
-- Server version: 5.6.26
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `medex`
--

-- --------------------------------------------------------

--
-- Table structure for table `bill`
--

CREATE TABLE IF NOT EXISTS `bill` (
  `med_name` varchar(23) NOT NULL,
  `cost` int(11) NOT NULL,
  `tcost` int(11) NOT NULL,
  `BID` int(11) NOT NULL,
  `PID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bill`
--

INSERT INTO `bill` (`med_name`, `cost`, `tcost`, `BID`, `PID`) VALUES
('crocin', 20, 60, 0, 0),
('torex', 34, 68, 0, 0),
('paracetamol', 2, 3, 1, 1),
('tylinol', 2, 2, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE IF NOT EXISTS `message` (
  `src` varchar(23) NOT NULL,
  `dest` varchar(23) NOT NULL,
  `Timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `Message` varchar(23) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`src`, `dest`, `Timestamp`, `Message`) VALUES
('john', 'sam', '2016-09-30 10:34:15', 'Hello'),
('john', 'sam', '2016-09-30 10:34:23', 'Hello'),
('John', 'Sam', '2016-09-30 10:36:39', 'sit'),
('John', 'Sam', '2016-09-30 10:37:05', 'hi'),
('John', 'Sam', '2016-09-30 10:37:46', 'hi'),
('John', 'Sam', '2016-09-30 10:39:07', 'hi'),
('John', 'Sam', '2016-09-30 10:39:13', 'hello'),
('John', 'Sam', '2016-09-30 10:39:20', 'hello'),
('John', 'Sam', '2016-09-30 10:40:08', 'hello'),
('John', 'Sam', '2016-09-30 10:40:32', 'hello'),
('John', 'Sam', '2016-09-30 10:40:36', 'hi'),
('John', 'Sam', '2016-09-30 10:42:54', 'hi'),
('John', 'Sam', '2016-09-30 11:20:12', 'hi'),
('John', 'Sam', '2016-09-30 11:20:38', 'hi'),
('John', 'Sam', '2016-09-30 11:26:13', 'hi'),
('John', 'Sam', '2016-09-30 11:26:25', 'hi'),
('John', 'Sam', '2016-09-30 13:12:15', 'yo mansi'),
('John', 'Sam', '2016-09-30 13:12:46', 'hello mansi'),
('John', 'Sam', '2016-09-30 13:16:45', 'hello mansi'),
('John', 'Sam', '2016-09-30 13:17:41', 'hello mansi'),
('John', 'Sam', '2016-09-30 13:19:23', 'hello mansi'),
('John', 'Sam', '2016-09-30 13:20:48', 'hello mansi'),
('Sam', 'John', '2016-09-30 13:22:36', 'hi sam'),
('John', 'Sam', '2016-09-30 13:22:42', 'hello mansi'),
('Sam', 'John', '2016-09-30 13:24:09', 'SO...'),
('Sam', 'John', '2016-09-30 13:26:27', 'SO...'),
('Sam', 'John', '2016-09-30 13:26:37', 'SO...'),
('Sam', 'John', '2016-09-30 13:26:58', 'hey john!!'),
('Sam', 'John', '2016-09-30 13:27:52', 'hey john!!'),
('Sam', 'John', '2016-09-30 13:28:53', 'hi'),
('Sam', 'John', '2016-09-30 13:29:38', 'hi'),
('Sam', 'John', '2016-09-30 13:31:23', 'hi'),
('Sam', 'John', '2016-09-30 13:32:50', 'hi');

-- --------------------------------------------------------

--
-- Table structure for table `prescription`
--

CREATE TABLE IF NOT EXISTS `prescription` (
  `med_name` varchar(50) NOT NULL,
  `days` varchar(20) NOT NULL,
  `times_day` varchar(20) NOT NULL,
  `time_of_day` varchar(20) NOT NULL,
  `PID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `prescription`
--

INSERT INTO `prescription` (`med_name`, `days`, `times_day`, `time_of_day`, `PID`) VALUES
('crocin', '5', '2', '12:30', 0),
('roseval', '4', '2', '8:00', 0),
('paracetamol', '3', '4', '3', 1),
('tylinol', '2', '3', '4', 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
