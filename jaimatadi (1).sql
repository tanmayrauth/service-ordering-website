-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 22, 2017 at 12:11 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 7.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jaimatadi`
--

-- --------------------------------------------------------

--
-- Table structure for table `my_serivces`
--

CREATE TABLE `my_serivces` (
  `id` int(11) NOT NULL,
  `sub_services` int(11) NOT NULL,
  `company_id` int(11) NOT NULL,
  `description1` varchar(255) NOT NULL,
  `description2` varchar(255) NOT NULL,
  `description3` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `since` int(100) NOT NULL,
  `demo` varchar(100) NOT NULL,
  `why` varchar(255) NOT NULL,
  `posted_on` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `my_serivces`
--

INSERT INTO `my_serivces` (`id`, `sub_services`, `company_id`, `description1`, `description2`, `description3`, `price`, `since`, `demo`, `why`, `posted_on`) VALUES
(1, 0, 0, 'dafffdfdfdfdda', 'fddgfdafaefaafd', 'fdfdfdsfddfs', 1212, 1231, 'yes', 'fdsafddfdf', '2017-03-22 13:57:09'),
(2, 0, 0, 'dafffdfdfdfdda', 'fddgfdafaefaafd', 'fdfdfdsfddfs', 1212, 1231, 'yes', 'fdsafddfdf', '2017-03-22 13:59:47'),
(3, 0, 0, 'dafffdfdfdfdda', 'fddgfdafaefaafd', 'fdfdfdsfddfs', 1212, 1231, 'yes', 'fdsafddfdf', '2017-03-22 14:02:40'),
(4, 1, 1, 'fddfsdf', 'fdafd', 'fddfsa', 2312, 312231, 'no', 'fdfsfd', '2017-03-22 14:09:50'),
(5, 18, 1, 'gfdfggf', 'fdfddf', 'fdfsafd', 423, 34432, 'yes', 'dfffa', '2017-03-22 14:11:19'),
(6, 18, 1, 'gfdfggf', 'fdfddf', 'fdfsafd', 423, 34432, 'yes', 'dfffa', '2017-03-22 14:17:28'),
(7, 21, 1, 'fdsfasdfadsfdasfadfghsxdcfvbwsdefvgbhfdfas', 'dfafdasfdafdasf', 'dfsadfadfaafd', 21, 321123, 'yes', 'fdafafdfdafad', '2017-03-22 15:12:41'),
(8, 1, 1, 'fgvqr', 'trertertq', 't4rwtw', 23432, 32324, 'yes', 'ferafr', '2017-03-22 15:31:58');

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `id` int(11) NOT NULL,
  `username` varchar(16) NOT NULL,
  `initiator` varchar(16) NOT NULL,
  `app` varchar(255) NOT NULL,
  `note` varchar(255) NOT NULL,
  `did_read` enum('0','1') NOT NULL DEFAULT '0',
  `date_time` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notifications`
--

INSERT INTO `notifications` (`id`, `username`, `initiator`, `app`, `note`, `did_read`, `date_time`) VALUES
(1, 'tanny', 'harry', 'Status Post', 'harry posted on: <br /><a href="user.php?u=harry#status_0">harry&#39;s Profile</a>', '0', '2016-12-04 19:02:37'),
(2, 'tanny', 'harry', 'Status Post', 'harry posted on: <br /><a href="user.php?u=harry#status_0">harry&#39;s Profile</a>', '0', '2016-12-04 19:03:05'),
(3, 'tanny', 'harry', 'Status Post', 'harry posted on: <br /><a href="user.php?u=harry#status_0">harry&#39;s Profile</a>', '0', '2016-12-04 19:30:08'),
(4, 'tanny', 'harry', 'Status Post', 'harry posted on: <br /><a href="user.php?u=harry#status_0">harry&#39;s Profile</a>', '0', '2016-12-04 19:32:55'),
(5, 'tanny', 'harry', 'Status Post', 'harry posted on: <br /><a href="user.php?u=harry#status_0">harry&#39;s Profile</a>', '0', '2016-12-04 19:32:59'),
(6, 'tanny', 'harry', 'Status Post', 'harry posted on: <br /><a href="user.php?u=tanny#status_0">tanny&#39;s Profile</a>', '0', '2016-12-04 19:33:47'),
(7, 'tanny', 'harry', 'Status Post', 'harry posted on: <br /><a href="user.php?u=tanny#status_0">tanny&#39;s Profile</a>', '0', '2016-12-04 19:36:23'),
(8, 'tanny', 'harry', 'Status Post', 'harry posted on: <br /><a href="user.php?u=harry#status_0">harry&#39;s Profile</a>', '0', '2016-12-04 19:36:42'),
(9, 'tanny', 'harry', 'Status Post', 'harry posted on: <br /><a href="user.php?u=harry#status_0">harry&#39;s Profile</a>', '0', '2016-12-04 19:37:14'),
(10, 'tanny', 'harry', 'Status Post', 'harry posted on: <br /><a href="user.php?u=harry#status_0">harry&#39;s Profile</a>', '0', '2016-12-04 19:41:20'),
(11, 'harry', 'tanny', 'Status Post', 'tanny posted on: <br /><a href="user.php?u=harry#status_9">harry&#39;s Profile</a>', '0', '2016-12-04 22:11:26'),
(12, 'harry', 'tanny', 'Status Post', 'tanny posted on: <br /><a href="user.php?u=harry#status_10">harry&#39;s Profile</a>', '0', '2016-12-04 22:11:40'),
(13, 'harry', 'tanny', 'Status Post', 'tanny posted on: <br /><a href="user.php?u=tanny#status_11">tanny&#39;s Profile</a>', '0', '2016-12-04 22:12:13'),
(14, 'harry', 'tanny', 'Status Post', 'tanny posted on: <br /><a href="user.php?u=tanny#status_14">tanny&#39;s Profile</a>', '0', '2017-02-21 15:35:01');

-- --------------------------------------------------------

--
-- Table structure for table `photos`
--

CREATE TABLE `photos` (
  `id` int(11) NOT NULL,
  `user` varchar(16) NOT NULL,
  `gallery` varchar(16) NOT NULL,
  `filename` varchar(255) NOT NULL,
  `description` varchar(255) DEFAULT NULL,
  `uploaddate` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `requested`
--

CREATE TABLE `requested` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `company_id` int(11) NOT NULL,
  `service_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `services_type`
--

CREATE TABLE `services_type` (
  `id` bigint(20) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `services_type`
--

INSERT INTO `services_type` (`id`, `name`) VALUES
(1, 'Android app development'),
(2, 'Online marketing'),
(3, 'Open source develpment'),
(4, 'Web and Graphic design'),
(5, 'Web development'),
(6, 'Animation'),
(7, 'Cloud hosting');

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE `status` (
  `id` int(11) NOT NULL,
  `osid` int(11) DEFAULT NULL,
  `account_name` varchar(16) NOT NULL,
  `author` varchar(16) NOT NULL,
  `type` enum('a','b','c') NOT NULL,
  `data` text NOT NULL,
  `postdate` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `status`
--

INSERT INTO `status` (`id`, `osid`, `account_name`, `author`, `type`, `data`, `postdate`) VALUES
(13, 10, 'harry', 'tanny', 'b', 'Ohh nice', '2016-12-04 22:12:33'),
(12, 9, 'harry', 'tanny', 'b', 'good night harry', '2016-12-04 22:12:27'),
(11, 11, 'tanny', 'tanny', 'a', 'Hello everyone, How r u??', '2016-12-04 22:12:13'),
(10, 10, 'harry', 'tanny', 'c', 'It was really a nice day.....', '2016-12-04 22:11:40'),
(9, 9, 'harry', 'tanny', 'c', 'Hello, Good Night evry1 !!!', '2016-12-04 22:11:26');

-- --------------------------------------------------------

--
-- Table structure for table `sub_services`
--

CREATE TABLE `sub_services` (
  `id` int(100) NOT NULL,
  `name` varchar(25) NOT NULL,
  `parent` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sub_services`
--

INSERT INTO `sub_services` (`id`, `name`, `parent`) VALUES
(1, 'Android', 1),
(2, 'IOS', 1),
(3, 'Windows', 1),
(4, 'Cross Platform', 1),
(5, 'SEO', 2),
(6, 'SMO', 2),
(7, 'Joomla', 3),
(8, 'Magneto', 3),
(9, 'Oscommerce', 3),
(10, 'Wordpress ', 3),
(11, 'Zencart ', 3),
(12, 'Ecommerce webdesign', 4),
(13, 'Graphic or Logo Design', 4),
(14, 'Template Theme Design', 4),
(15, 'Custom Web Design', 4),
(16, 'Business Application', 5),
(17, 'Cake PHP', 5),
(18, 'CMS web ', 5),
(19, 'Ecommerce Portal', 5),
(20, 'Web Management ', 5),
(21, '2D Animation', 6),
(22, '3D Animation', 6),
(23, '3D Modelling ', 6),
(24, '3D Rendering', 6),
(25, 'Linux Web Hosting', 7),
(26, 'Windows Web Hosting', 7),
(27, 'VPS Servers', 7);

-- --------------------------------------------------------

--
-- Table structure for table `useroptions`
--

CREATE TABLE `useroptions` (
  `id` int(11) NOT NULL,
  `username` varchar(16) NOT NULL,
  `background` varchar(255) NOT NULL,
  `question` varchar(255) DEFAULT NULL,
  `answer` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `useroptions`
--

INSERT INTO `useroptions` (`id`, `username`, `background`, `question`, `answer`) VALUES
(1, 'tanny', 'original', NULL, NULL),
(2, 'ammy', 'original', NULL, NULL),
(3, 'harry', 'original', NULL, NULL),
(4, 'ravi', 'original', NULL, NULL),
(5, 'appy', 'original', NULL, NULL),
(6, 'tanmay', 'original', NULL, NULL),
(7, 'tanmayrauth', 'original', NULL, NULL),
(8, 'tanmayi', 'original', NULL, NULL),
(9, 'fda', 'original', NULL, NULL),
(10, 'fdass', 'original', NULL, NULL),
(11, 'aaaaaa', 'original', NULL, NULL),
(12, 'aaaaa', 'original', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(16) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `country` varchar(255) DEFAULT NULL,
  `userlevel` enum('a','b','c','d') NOT NULL DEFAULT 'a',
  `avatar` varchar(255) DEFAULT NULL,
  `ip` varchar(255) NOT NULL,
  `signup` datetime NOT NULL,
  `lastlogin` datetime NOT NULL,
  `notescheck` datetime NOT NULL,
  `activated` enum('0','1') NOT NULL DEFAULT '0',
  `authenticated` varchar(255) NOT NULL DEFAULT 'no'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `name`, `country`, `userlevel`, `avatar`, `ip`, `signup`, `lastlogin`, `notescheck`, `activated`, `authenticated`) VALUES
(2, 'ammy', 'ammy@gmail.com', '202cb962ac59075b964b07152d234b70', NULL, 'United States of America', 'a', NULL, '1', '2016-12-04 16:41:39', '2016-12-04 16:41:39', '2016-12-04 16:41:39', '1', '0'),
(3, 'harry', 'harry@gmail.com', '202cb962ac59075b964b07152d234b70', NULL, 'United States of America', 'a', NULL, '1', '2016-12-04 16:42:54', '2016-12-04 22:09:35', '2016-12-04 22:09:47', '1', '0'),
(4, 'ravi', 'ravi@gmail.com', '202cb962ac59075b964b07152d234b70', NULL, 'United States of America', 'a', NULL, '1', '2016-12-04 17:07:57', '2016-12-04 17:07:57', '2016-12-04 17:07:57', '1', '0'),
(5, 'appy', 'appy@gmail.com', '202cb962ac59075b964b07152d234b70', NULL, 'Anguilla', 'a', NULL, '1', '2016-12-04 21:17:07', '2016-12-04 21:17:07', '2016-12-04 21:17:07', '1', '0'),
(6, 'tanmay', 'tanmayrauth@ves.ac.in', '202cb962ac59075b964b07152d234b70', NULL, 'United States of America', 'a', NULL, '103.248.112.139', '2017-02-21 15:33:08', '2017-02-21 15:33:08', '2017-02-21 15:33:08', '0', '0'),
(7, 'tanmayrauth', 'tanmay.rauth@ves.ac.in', '202cb962ac59075b964b07152d234b70', NULL, 'United States of America', 'a', NULL, '103.248.112.139', '2017-02-21 15:34:13', '2017-02-21 15:34:13', '2017-02-21 15:34:13', '0', '0'),
(8, 'tanmayi', 'tna@gmail.com', '202cb962ac59075b964b07152d234b70', NULL, 'United States of America', 'a', NULL, '1', '2017-03-22 10:10:03', '2017-03-22 10:10:03', '2017-03-22 10:10:03', '0', '0'),
(9, 'fda', 'fdas', '202cb962ac59075b964b07152d234b70', 'fdsa', 'United States of America', 'a', NULL, '1', '2017-03-22 11:48:55', '2017-03-22 11:48:55', '2017-03-22 11:48:55', '0', '0'),
(10, 'fdass', 'fdassss', '202cb962ac59075b964b07152d234b70', 'fdsass', 'United States of America', 'b', NULL, '1', '2017-03-22 11:49:56', '2017-03-22 11:49:56', '2017-03-22 11:49:56', '0', '0'),
(11, 'aaaaaa', 'aaaaaaaa', '202cb962ac59075b964b07152d234b70', 'aa', 'Australia', 'b', NULL, '1', '2017-03-22 11:51:17', '2017-03-22 11:51:17', '2017-03-22 11:51:17', '0', '0'),
(12, 'aaaaa', 'tanmay@gmail.com', '202cb962ac59075b964b07152d234b70', 'aaaaaa', 'United States of America', 'a', NULL, '1', '2017-03-22 15:25:19', '2017-03-22 16:39:25', '2017-03-22 15:25:19', '1', 'no');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `my_serivces`
--
ALTER TABLE `my_serivces`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `photos`
--
ALTER TABLE `photos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services_type`
--
ALTER TABLE `services_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sub_services`
--
ALTER TABLE `sub_services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `useroptions`
--
ALTER TABLE `useroptions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`,`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `my_serivces`
--
ALTER TABLE `my_serivces`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `notifications`
--
ALTER TABLE `notifications`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `photos`
--
ALTER TABLE `photos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `status`
--
ALTER TABLE `status`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `sub_services`
--
ALTER TABLE `sub_services`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
