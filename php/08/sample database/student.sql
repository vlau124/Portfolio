-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 30, 2017 at 01:40 AM
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
-- Database: `school`
--

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `s_id` int(11) DEFAULT NULL,
  `s_last` varchar(50) DEFAULT NULL,
  `s_first` varchar(50) DEFAULT NULL,
  `s_mi` varchar(50) DEFAULT NULL,
  `s_address` varchar(50) DEFAULT NULL,
  `s_city` varchar(50) DEFAULT NULL,
  `s_state` varchar(50) DEFAULT NULL,
  `s_zip` varchar(50) DEFAULT NULL,
  `s_phone` varchar(50) DEFAULT NULL,
  `s_class` varchar(50) DEFAULT NULL,
  `s_dob` date DEFAULT NULL,
  `s_pin` varchar(50) DEFAULT NULL,
  `f_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`s_id`, `s_last`, `s_first`, `s_mi`, `s_address`, `s_city`, `s_state`, `s_zip`, `s_phone`, `s_class`, `s_dob`, `s_pin`, `f_id`) VALUES
(1234, 'lasttest', 'firsttest', 'mtest', '1234 street', 'city test', 'state test', '1234', '12341234', 'classtest', '1342-12-31', '1234', 12341234);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
