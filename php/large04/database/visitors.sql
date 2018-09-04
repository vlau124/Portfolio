-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 12, 2017 at 04:12 AM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `doctor`
--

-- --------------------------------------------------------

--
-- Table structure for table `visitors`
--

CREATE TABLE `visitors` (
  `id` int(50) DEFAULT NULL,
  `name1` varchar(50) DEFAULT NULL,
  `name2` varchar(50) DEFAULT NULL,
  `datetime1` datetime DEFAULT NULL,
  `datetime2` datetime DEFAULT NULL,
  `visitorhere` varchar(50) DEFAULT NULL,
  `stayduration` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `visitors`
--

INSERT INTO `visitors` (`id`, `name1`, `name2`, `datetime1`, `datetime2`, `visitorhere`, `stayduration`) VALUES
(46998, 'asdf', 'asdf', '2017-12-12 04:07:36', NULL, 'Yes', '0000-00-00 00:00:00'),
(49589, 'dfghdfgh', 'wefdvsdf', '2017-12-12 04:07:46', NULL, 'Yes', '0000-00-00 00:00:00'),
(12345, 'Testing Visitor Leaving', 'asdf', '2017-12-11 00:00:00', '2017-12-11 00:00:00', 'No', '0000-00-00 03:45:00'),
(54321, 'Testing Visitor Leaving2', 'asdf', '2017-12-11 00:00:00', '2017-12-11 00:00:00', 'No', '0000-00-00 04:23:00'),
(13298, 'dfghdf', 'xcvbbvc', '2017-12-12 04:11:11', NULL, 'Yes', '0000-00-00 00:00:00');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
