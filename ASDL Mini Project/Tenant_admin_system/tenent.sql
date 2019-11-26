-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 26, 2019 at 07:50 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tenent`
--

-- --------------------------------------------------------

--
-- Table structure for table `apartment`
--

CREATE TABLE `apartment` (
  `fno` varchar(20) DEFAULT NULL,
  `head_name` varchar(20) DEFAULT NULL,
  `mem_no` int(11) DEFAULT NULL,
  `type` varchar(50) DEFAULT NULL,
  `phno` varchar(20) DEFAULT NULL,
  `gender` varchar(20) DEFAULT NULL,
  `tid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `apartment`
--

INSERT INTO `apartment` (`fno`, `head_name`, `mem_no`, `type`, `phno`, `gender`, `tid`) VALUES
('2B', 'James John', 4, 'Owner', '9875469121', 'male', 1001),
('5C', 'Nikitha R', 7, 'Owner', '8765876599', 'female', 1004);

-- --------------------------------------------------------

--
-- Table structure for table `bills`
--

CREATE TABLE `bills` (
  `tid` int(11) DEFAULT NULL,
  `water` int(11) DEFAULT NULL,
  `electricity` int(11) DEFAULT NULL,
  `maintanence` int(11) DEFAULT NULL,
  `lpg` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bills`
--

INSERT INTO `bills` (`tid`, `water`, `electricity`, `maintanence`, `lpg`) VALUES
(1000, 200, 2250, 7000, 700),
(1002, 240, 1500, 6000, 800),
(1003, 400, 4000, 8989, 999),
(1001, 240, 2567, 7000, 865);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `username` varchar(50) DEFAULT NULL,
  `pwd` varchar(50) DEFAULT NULL,
  `gender` varchar(50) DEFAULT NULL,
  `category` varchar(50) DEFAULT NULL,
  `tid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`username`, `pwd`, `gender`, `category`, `tid`) VALUES
('a', 'a', 'm', 'manager', 0),
('johan', 'joh', 'm', 'manager', 1),
('b', 'b', 'm', 'staff', 500),
('albin', 'ak', 'm', 'staff', 501),
('c', 'c', 'm', 'tenant', 1000),
('james', 'j', 'm', 'tenant', 1001),
('jerone', 'jose', 'm', 'tenant', 1002);

-- --------------------------------------------------------

--
-- Table structure for table `visitor`
--

CREATE TABLE `visitor` (
  `vname` varchar(20) DEFAULT NULL,
  `phno` varchar(20) DEFAULT NULL,
  `time_in` varchar(20) DEFAULT NULL,
  `time_out` varchar(20) DEFAULT NULL,
  `date` varchar(20) DEFAULT NULL,
  `fno` varchar(20) DEFAULT NULL,
  `purpose` varchar(20) DEFAULT NULL,
  `tid` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `visitor`
--

INSERT INTO `visitor` (`vname`, `phno`, `time_in`, `time_out`, `date`, `fno`, `purpose`, `tid`) VALUES
('Sam J', '8889344895', '3:00', '6:00', '23-12-2019', '3A', 'Visit', 1000),
('Mark W', '4549344895', '5:00', '5:30', '23-12-2019', '3A', 'Visit', 1000),
('Krish', '8787564522', '2:00', '5:00', '26-11-19', '3A', 'VISIT', 1000),
('siddarth', '8767984352', '12:00', '14:00', '27-11-19', '2B', 'Friendly Visit', 1002),
('Jeff J', '9876594839', '12:00', '14:00', '23-11-19', '2B', 'Visit', 1001),
('Siddarth S', '8765432198', '4:00', '5:00', '25-11-12', '2B', 'Visit', 1001);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `apartment`
--
ALTER TABLE `apartment`
  ADD PRIMARY KEY (`tid`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`tid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
