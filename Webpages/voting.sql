-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 02, 2018 at 02:56 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `voting`
--

-- --------------------------------------------------------

--
-- Table structure for table `voting`
--

CREATE TABLE `voting` (
  `article_id` int(10) NOT NULL,
  `heading` text NOT NULL,
  `text` text NOT NULL,
  `upvote` int(10) NOT NULL,
  `downvote` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `voting`
--

INSERT INTO `voting` (`article_id`, `heading`, `text`, `upvote`, `downvote`) VALUES
(1, 'Print numbers having first and last bits as the only set bits', 'Given a positive integer n. The problem is to print numbers in the range 1 to n having first and last bits as the only set bits. <br><br>  			Examples: <br><br>  			Input : n = 10 <br> 			Output : 1 3 5 9 <br><br> 			(1)<sub>10</sub> = (1)<sub>2</sub><br> 			(3)<sub>10</sub> = (11)<sub>2</sub><br> 			(5)<sub>10</sub> = (101)<sub>2</sub><br> 			(9)<sub>10</sub> = (1001)<sub>2</sub>', 10, 8),
(2, 'Find maximum power of a number that divides a factorial', 'Given two numbers, fact and n, find the largest power of n that divides fact! (Factorial of fact). <br> <br>  			Examples: <br> <br>  			Input : fact = 5, n = 2 <br> 			Output : 3 <br> <br> 			Value of 5! is 120. <br> 			The largest power of 2 that divides 120 is 8 (or 23) <br>  			Input : fact = 146, n = 15 			Output : 35', 6, 5);

-- --------------------------------------------------------

--
-- Table structure for table `voting_ip`
--

CREATE TABLE `voting_ip` (
  `ip_id` int(10) NOT NULL,
  `article_id_fk` int(10) NOT NULL,
  `ip_add` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `voting`
--
ALTER TABLE `voting`
  ADD PRIMARY KEY (`article_id`);

--
-- Indexes for table `voting_ip`
--
ALTER TABLE `voting_ip`
  ADD PRIMARY KEY (`ip_id`),
  ADD KEY `article_id_fk` (`article_id_fk`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `voting`
--
ALTER TABLE `voting`
  MODIFY `article_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `voting_ip`
--
ALTER TABLE `voting_ip`
  MODIFY `ip_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `voting_ip`
--
ALTER TABLE `voting_ip`
  ADD CONSTRAINT `voting_ip_ibfk_1` FOREIGN KEY (`article_id_fk`) REFERENCES `voting` (`article_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
