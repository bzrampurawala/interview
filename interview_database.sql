-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 26, 2017 at 10:05 AM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `interview`
--

-- --------------------------------------------------------

--
-- Table structure for table `answers`
--

CREATE TABLE `answers` (
  `id` int(20) NOT NULL,
  `answers` varchar(500) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `answers`
--

INSERT INTO `answers` (`id`, `answers`) VALUES
(41, 'answer0'),
(38, 'answer1'),
(37, 'answer0'),
(36, 'answer3'),
(35, 'answer2'),
(34, 'answer1'),
(32, 'answer3'),
(33, 'answer0'),
(31, 'answer2'),
(30, 'answer1'),
(29, 'answer0'),
(28, 'answer3'),
(27, 'answer2'),
(26, 'answer1'),
(25, 'answer0'),
(24, 'answer3'),
(22, 'answer1'),
(23, 'answer2'),
(21, 'answer0'),
(20, 'answer3'),
(19, 'answer2'),
(18, 'answer1'),
(17, 'answer0'),
(16, 'answer3'),
(15, 'answer2'),
(14, 'answer1'),
(12, 'answer3'),
(13, 'answer0'),
(40, 'answer3'),
(39, 'answer2'),
(44, 'answer3'),
(43, 'answer2'),
(42, 'answer1'),
(47, 'answer2'),
(46, 'answer1'),
(45, 'answer0'),
(50, 'answer1'),
(49, 'answer0'),
(48, 'answer3'),
(11, 'answer2'),
(10, 'answer1'),
(9, 'answer0'),
(8, 'answer3'),
(7, 'answer2'),
(6, 'answer1'),
(5, 'answer0'),
(4, 'answer3'),
(3, 'answer2'),
(2, 'answer1'),
(1, 'answer0'),
(51, 'answer2'),
(52, 'answer3'),
(53, 'answer0'),
(54, 'answer1'),
(55, 'answer2'),
(56, 'answer3'),
(57, 'answer0'),
(58, 'answer1'),
(59, 'answer2'),
(60, 'answer3');

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `id` int(20) NOT NULL,
  `question` varchar(1000) NOT NULL,
  `uid` int(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `question`, `uid`) VALUES
(1, 'question1', 0),
(2, 'question2', 0),
(3, 'question3', 0),
(4, 'question4', 0),
(5, 'question5', 0),
(6, 'question6', 0),
(7, 'question7', 0),
(8, 'question8', 0),
(9, 'question9', 0),
(10, 'question10', 0),
(11, 'question11', 0),
(12, 'question12', 0),
(13, 'question13', 0),
(14, 'question14', 0),
(15, 'question15', 0),
(16, 'question16', 1),
(17, 'question17', 1),
(18, 'question18', 1),
(19, 'question19', 1),
(20, 'question20', 1),
(21, 'question21', 1),
(22, 'question22', 1),
(23, 'question23', 1),
(24, 'question24', 1),
(25, 'question25', 1);

-- --------------------------------------------------------

--
-- Table structure for table `studentinfo`
--

CREATE TABLE `studentinfo` (
  `id` int(20) NOT NULL,
  `name` varchar(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  `branch` varchar(20) NOT NULL,
  `year` varchar(20) NOT NULL,
  `bmonth` varchar(20) NOT NULL,
  `bday` int(5) NOT NULL,
  `byear` int(10) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `uid` varchar(500) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `studentinfo`
--
ALTER TABLE `studentinfo`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `uid` (`uid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `studentinfo`
--
ALTER TABLE `studentinfo`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
