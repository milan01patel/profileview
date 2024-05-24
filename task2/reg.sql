-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 22, 2024 at 09:02 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `reg`
--

-- --------------------------------------------------------

--
-- Table structure for table `tab`
--

CREATE TABLE `tab` (
  `uid` int(11) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `email` varchar(20) NOT NULL,
  `number` varchar(20) NOT NULL,
  `password` varchar(10) NOT NULL,
  `address` varchar(255) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `hobby` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tab`
--

INSERT INTO `tab` (`uid`, `fname`, `lname`, `email`, `number`, `password`, `address`, `gender`, `hobby`) VALUES
(2, 'ok', 'bro', 'ok@bro.com', '1232132454', '1234', 'gujrat.india', 'male', 'Cricket,Che'),
(3, 'done', 'max', 'max@gmail.com', '8765678762', '7654', 'goa,gujrat', 'male', 'Cricket'),
(19, 'milan', 'patel', 'm@gmail.com', '5463782911', '4321', 'lodha,gujrat', 'male', 'Cricket');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tab`
--
ALTER TABLE `tab`
  ADD PRIMARY KEY (`uid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tab`
--
ALTER TABLE `tab`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
