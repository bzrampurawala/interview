-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 05, 2017 at 06:00 PM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `interview2`
--

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
(1, 'Out of a thousand identical buckets filled with water, one contains poison. The poison will kill a pig in exactly 30 minutes. If you must locate the poisoned bucket within an hour, what is the minimum number of pigs needed?', 0),
(2, '1, 11, 21, 1211, 111221, 312211, 13112221,  What is the next term ?', 0),
(3, 'Let\'s say in a lottery Samuel have a 4% chance of winning the jackpot.All lined up and 1st four people on the line lose. Samuel is 5th in the row.What\'s the chance of Samuel winning now?', 0),
(4, 'One of the following numbers can be marked out as the odd one out. Can you find which one?', 0),
(5, 'If the given equations are true, 24 $ 6 = 64, 35 $ 5 = 87, 63 $ 7 = 99, Then based on similar logic what\'s the value of the equation 88 $ 8 = ?', 0),
(6, 'Plane leaves from Chelsea every 50 minutes from West Ham airport. Air hostess told Frank Lampard that the plane had left 25 minutes ago and the next plane for Chelsea will leave at 7:00 p.m.\r\n\r\nAt what time air hostess convey this information to Frank Lampard?', 0),
(7, 'Tanya is older than Eric.\r\nCliff is older than Tanya.\r\nEric is older than Cliff.\r\n\r\nIf the first two statements are true, the third statement is', 0),
(8, 'Find the greatest five digit number that is exactly divisible by 7, 10, 15, 21 and 28.', 0),
(9, '10^25 - 7 is divisible by.', 0),
(10, 'At a party, everyone shook hands with everybody else. There were 66 handshakes.\r\nHow many people were at the party?', 0),
(11, 'If log27 to the base 12 = a, log16 to the base 9 = b, find log108 to the base 8.', 0),
(12, 'The sum of three distinct natural numbers is 25. What is the maximum value of their product?', 0),
(13, 'Two friends A and B simultaneously start running around a circular track. They run in the same direction. A travels at 6 m/s and B runs at b m/s. If they cross each other at exactly two points on the circular track and b is a natural number less than 30, how many values can b take?', 0),
(14, '(log sin 1 + log sin 2 + .... + log sin 89) + (log tan 1 + log tan 2 + .... +\r\nlog tan 89) - (log cos 1 + log cos 2 + .... + log cos 89) \r\nthe angles are in degree.', 0),
(15, 'Use only zeroes and mathematical operations to get a total of 720.', 1),
(16, 'There are 24 Kids in a classroom. 12 Kids are wearing socks and 8 are wearing\r\nShoes. 6 Kids are wearing both. How many kids are bare feet?', 1),
(17, 'What is a number that when divided by 10 leaves a remainder 9 and when divided by\r\n9 then leaves a remainder 8 and similarly till 1?', 1),
(18, 'Find three positive whole numbers that have the same answer added together or\r\nwhen multiplied together.', 1),
(19, 'There is exactly a week gap between Christmas and New Year. Therefore, it is\r\nobvious that New Year, which occurs right after Christmas occurs on the same day of the week. A strange thing happened in 1777. Christmas Eve was on Thursday and New Year was on Wednesday. Explain.', 1),
(20, 'Warden told the prisoner that if he told a lie then he will be hanged and if he told the truth then he will shoot him. What can the prisoner say to save himself?\r\n', 1),
(21, 'Mr. Smith sees a very rare bird named "Ruppell\'s vulture". Soon Mr. Smith was dead. Can you explain?', 1),
(22, 'Decode the message :\r\n\r\nCarrot fiasco nephew spring rabbit\r\nsonata tailor bureau legacy corona\r\ntravel bikini object happen soften.', 1),
(23, 'In a secret society, a buried chamber can be accessed only via a secret password. The password is seven characters long and comprises of JUST letters and numbers. You find a code that can help you in cracking the password. The code says, You force heaven to be empty. Guess the password.', 1),
(24, 'Using only a 4-minute and 7-minute hourglass, measure EXACTLY 9 minutes without the process taking any longer than 9 minutes.', 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
