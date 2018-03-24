-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 24, 2018 at 04:22 PM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ticket`
--

-- --------------------------------------------------------

--
-- Table structure for table `inquiries`
--

CREATE TABLE `inquiries` (
  `ticket_id` int(11) NOT NULL,
  `ticket_uniqueid` varchar(255) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `issue_title` varchar(255) NOT NULL,
  `issue_description` text NOT NULL,
  `status` varchar(255) NOT NULL,
  `operator` varchar(255) NOT NULL,
  `remarks` text NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `inquiries`
--

INSERT INTO `inquiries` (`ticket_id`, `ticket_uniqueid`, `full_name`, `issue_title`, `issue_description`, `status`, `operator`, `remarks`, `created_at`, `updated_at`) VALUES
(2, '367251', 'fffwf', 'awdawd', 'acawcaw', 'close', 'operator1', 'wdwd', '0000-00-00', '0000-00-00 00:00:00'),
(3, '744709', 'awgawgaca', 'awdwad', 'zxvavwa', 'open', '', '', '0000-00-00', '0000-00-00 00:00:00'),
(4, '616263', 'Huey', 'Villareal', 'Tabangi intawon ko ninyo kay wla na ko kabalo unsa akong buhaton', 'open', 'operator2', '', '0000-00-00', '0000-00-00 00:00:00'),
(5, '778019', 'Ricardo Lee', 'Bruce Jr.', 'Ako buhat sa CSS', 'open', 'operator3', 'eawfda', '0000-00-00', '0000-00-00 00:00:00'),
(7, '616961', 'Jr. Manny', 'Gloves', 'walay boxing', 'close', 'operator2', 'Walay boxing kay pildi ka', '0000-00-00', '0000-00-00 00:00:00'),
(8, '173401', 'Huey Villareal', 'Getting errors on search function', 'Errors on search function found. Kindly check if there is no errors before sending the data to the database', 'resolve', 'operator1', 'Malware detected, check your pc for viruses', '0000-00-00', '0000-00-00 00:00:00'),
(9, '596604', 'hey', 'you', 'test ticket', 'resolve', 'operator1', 'test ticket remarks', '0000-00-00', '0000-00-00 00:00:00'),
(10, '563950', 'adawdaw', 'fwafawf', 'ewgfewg', 'open', '', '', '0000-00-00', '0000-00-00 00:00:00'),
(11, '1', '1411', 'ewfewf', 'wexwewx', 'open', '', '', '0000-00-00', '0000-00-00 00:00:00'),
(12, '263204', 'awdwad', 'awcawc', 'ceca', 'open', '', '', '0000-00-00', '0000-00-00 00:00:00'),
(13, '792028', 'test123545', 'testeaaa', 'test error', 'open', '', '', '0000-00-00', '0000-00-00 00:00:00'),
(14, '472452', 'ewfawdwa', 'awcwawa', 'cqwcqcq', 'open', '', '', '2018-03-15', '0000-00-00 00:00:00'),
(15, '483854', 'Huey Villareal ', 'Error on errors', 'kindly check all the errors', 'open', '', '', '2018-03-15', '0000-00-00 00:00:00'),
(16, '20180324600454', 'hehe', 'ayy lmao', 'ayy lmao ', 'open', '', '', '2018-03-24', '0000-00-00 00:00:00'),
(17, '20180324732455', 'awcawcawca', 'awcxwadwa', 'ceaceacaec', 'open', '', '', '2018-03-24', '0000-00-00 00:00:00'),
(18, '20180324147021', 'afwaf', 'awcwac', 'awcwacwa', 'open', '', '', '2018-03-24', '0000-00-00 00:00:00'),
(19, '20180324717404', 'awcawcaaxa', 'axawxawx', 'cawc aw a', 'open', '', '', '2018-03-24', '0000-00-00 00:00:00'),
(20, '20180324153997', 'hehehe', 'aawcaw', 'awcawcwa', 'open', '', '', '2018-03-24', '0000-00-00 00:00:00'),
(21, '20180324952951', 'awdawdacawc', 'awcawcawcaw', 'cawcawcawc', 'open', '', '', '2018-03-24', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `usermanagement`
--

CREATE TABLE `usermanagement` (
  `id` int(11) NOT NULL,
  `full_user_name` varchar(255) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `user_password` varchar(255) NOT NULL,
  `user_type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `usermanagement`
--

INSERT INTO `usermanagement` (`id`, `full_user_name`, `user_name`, `user_password`, `user_type`) VALUES
(1, 'Huey Villareal', 'huey123', 'huey456', 'admin'),
(4, 'Angkol', 'angkol12345', '112233', 'operator'),
(5, 'Ugandan Knucles', 'knucles', 'doyouknowtheway', 'admin'),
(6, 'abcd123', 'test123', 'test456', 'operator'),
(7, 'Ricardo Bruce Jr.', 'brucejr', 'brucesr', 'operator');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `inquiries`
--
ALTER TABLE `inquiries`
  ADD PRIMARY KEY (`ticket_id`);

--
-- Indexes for table `usermanagement`
--
ALTER TABLE `usermanagement`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `inquiries`
--
ALTER TABLE `inquiries`
  MODIFY `ticket_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `usermanagement`
--
ALTER TABLE `usermanagement`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
