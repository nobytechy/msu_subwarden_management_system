-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 19, 2017 at 03:39 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `msu`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(0, 'briz', 'brizmsu'),
(1, 'briz', 'msubriz');

-- --------------------------------------------------------

--
-- Table structure for table `applications`
--

CREATE TABLE `applications` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `surname` varchar(50) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `program` varchar(50) NOT NULL,
  `level` varchar(3) NOT NULL,
  `location` varchar(50) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `email` varchar(255) NOT NULL,
  `note` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `applications`
--

INSERT INTO `applications` (`id`, `name`, `surname`, `gender`, `program`, `level`, `location`, `phone`, `email`, `note`) VALUES
(1, 'brighton', 'dhlamini', 'Male', 'information systems', '2.1', 'Dalesfort', '0774354324', 'briz@gmail.com', 'owk thanx'),
(2, 'brighton', 'dhlamini', 'Male', 'information systems', '2.1', 'Senga', '0716605802', 'briz@gmail.com', 'just to rule');

-- --------------------------------------------------------

--
-- Table structure for table `common`
--

CREATE TABLE `common` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `message` text NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `common`
--

INSERT INTO `common` (`id`, `name`, `message`, `time`) VALUES
(6, 'brighton', '&#9;info team hey hey&#9;', '2017-10-13 10:05:24'),
(7, 'noby', '&#9;&#9;guys ko kune house ndekupi', '2017-10-13 10:06:02'),
(8, 'tim', '&#9;&#9;whatsapp me 0776534667 for house', '2017-10-13 10:35:43'),
(10, 'Silo', '&#9;haaa @ Tim makazodii neden riye&#9;', '2017-10-14 08:05:32'),
(11, 'peter', '&#9;&#9;wasup guys', '2017-10-16 12:18:29'),
(12, 'simba', '&#9;guys wasup&#9;', '2017-10-17 15:30:30'),
(13, 'wilson', '&#9;&#9;&#60;h1&#62;hey&#60;/h1&#62;', '2017-10-17 16:21:37');

-- --------------------------------------------------------

--
-- Table structure for table `common2`
--

CREATE TABLE `common2` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `message` text NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `common2`
--

INSERT INTO `common2` (`id`, `name`, `message`, `time`) VALUES
(1, 'brighton', '&#9;sub wardens only&#9;', '2017-10-13 10:50:46'),
(2, 'wilson', '&#9;taurai mdara..ko muri sei&#9;', '2017-10-13 11:11:12');

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `id` int(11) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `message` text NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notifications`
--

INSERT INTO `notifications` (`id`, `subject`, `message`, `time`) VALUES
(1, 'soccer', 'soccer players respond now', '2017-10-13 10:23:03'),
(2, 'accomodation issues', 'inbox Mr mwale for more info', '2017-10-16 05:23:24');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `regnumber` varchar(8) NOT NULL,
  `password` varchar(255) NOT NULL,
  `location` varchar(50) NOT NULL,
  `phone` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `name`, `regnumber`, `password`, `location`, `phone`) VALUES
(5, 'brighton', 'r234523t', 'run', 'Senga', '0774354324'),
(6, 'wilson', 'r152435z', 'met', 'Mambo', '0716605802'),
(7, 'wilson', 'r234523t', '123', 'Dalesfort', '0774354324'),
(8, 'brighton', 'r234523t', '123456789', 'Ridgemont', '0716605802'),
(9, 'brighton', 'r234523t', '123456789', 'Mtapa', '1233455567'),
(10, 'wilson', 'r234523t', '1234567890', 'Mtapa', '0776345345');

-- --------------------------------------------------------

--
-- Table structure for table `subwarden`
--

CREATE TABLE `subwarden` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `surname` varchar(50) NOT NULL,
  `regnumber` varchar(8) NOT NULL,
  `password` varchar(255) NOT NULL,
  `location` varchar(50) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `subwarden_reports`
--

CREATE TABLE `subwarden_reports` (
  `id` int(11) NOT NULL,
  `regnumber` varchar(8) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `message` text NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subwarden_reports`
--

INSERT INTO `subwarden_reports` (`id`, `regnumber`, `subject`, `message`, `time`) VALUES
(1, 'r234523t', 'hello', 'hello', '2017-10-13 08:33:15'),
(2, 'r234523t', 'hello', 'hello', '2017-10-13 08:33:15'),
(3, 'r234523t', 'house', 'house', '2017-10-13 08:33:15');

-- --------------------------------------------------------

--
-- Table structure for table `warden_reports`
--

CREATE TABLE `warden_reports` (
  `id` int(11) NOT NULL,
  `regnumber` varchar(11) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `message` text NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `warden_reports`
--

INSERT INTO `warden_reports` (`id`, `regnumber`, `subject`, `message`, `time`) VALUES
(2, 'r234523t', 'accomodation issues', 'please help us in Senga', '2017-10-13 11:06:53'),
(3, 'r234523t', 'accomodation issues', 'thanx', '2017-10-13 11:08:21');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `applications`
--
ALTER TABLE `applications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `common`
--
ALTER TABLE `common`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `common2`
--
ALTER TABLE `common2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subwarden`
--
ALTER TABLE `subwarden`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subwarden_reports`
--
ALTER TABLE `subwarden_reports`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `warden_reports`
--
ALTER TABLE `warden_reports`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `applications`
--
ALTER TABLE `applications`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `common`
--
ALTER TABLE `common`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `common2`
--
ALTER TABLE `common2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `notifications`
--
ALTER TABLE `notifications`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `subwarden`
--
ALTER TABLE `subwarden`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `subwarden_reports`
--
ALTER TABLE `subwarden_reports`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `warden_reports`
--
ALTER TABLE `warden_reports`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
