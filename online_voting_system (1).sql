-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 16, 2025 at 01:20 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `online_voting_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_name` varchar(100) CHARACTER SET latin1 COLLATE latin1_general_cs NOT NULL,
  `admin_pass` varchar(100) CHARACTER SET latin1 COLLATE latin1_general_cs NOT NULL,
  `user_id` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_name`, `admin_pass`, `user_id`) VALUES
('admin', '123', 1);

-- --------------------------------------------------------

--
-- Table structure for table `candidate`
--

CREATE TABLE `candidate` (
  `id` int(20) NOT NULL,
  `name` text NOT NULL,
  `uname` text CHARACTER SET latin1 COLLATE latin1_general_cs NOT NULL,
  `pass` varchar(20) NOT NULL,
  `age` int(3) NOT NULL,
  `email` varchar(30) NOT NULL,
  `state` varchar(15) NOT NULL,
  `district` text NOT NULL,
  `city` text NOT NULL,
  `gender` varchar(10) NOT NULL,
  `mstatus` varchar(15) NOT NULL,
  `status` int(1) NOT NULL,
  `votes` int(100) NOT NULL,
  `roles` varchar(10) NOT NULL,
  `partyname` varchar(100) NOT NULL,
  `image_path` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `candidate`
--

INSERT INTO `candidate` (`id`, `name`, `uname`, `pass`, `age`, `email`, `state`, `district`, `city`, `gender`, `mstatus`, `status`, `votes`, `roles`, `partyname`, `image_path`) VALUES
(0, 'John Doe', '', '', 0, '', '', '', '', '', '', 0, 0, '', '', '/images/voter_image.jpg'),
(84, 'Pushpa Dahal', 'iampk', '123456', 78, 'pushpa@gmail.com', 'bagmati', 'kathmandu', 'kathmandu', 'male', 'married', 1, 1, 'candidate', 'CPN(Maoist-centre)', NULL),
(85, 'KP Oli', 'iamkp', 'abcdefg', 78, 'kpoli@gmail.com', 'Bagmati', 'kathmandu', 'Kathmandu', 'male', 'married', 1, 1, 'candidate', 'CPN (UML)', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `result`
--

CREATE TABLE `result` (
  `id` int(20) NOT NULL,
  `name` text NOT NULL,
  `uname` text CHARACTER SET latin1 COLLATE latin1_general_cs NOT NULL,
  `pass` varchar(20) NOT NULL,
  `age` int(3) NOT NULL,
  `email` varchar(30) NOT NULL,
  `state` varchar(15) NOT NULL,
  `district` text NOT NULL,
  `city` text NOT NULL,
  `gender` varchar(10) NOT NULL,
  `mstatus` varchar(15) NOT NULL,
  `status` int(1) NOT NULL,
  `votes` int(11) NOT NULL,
  `roles` varchar(10) NOT NULL,
  `partyname` varchar(100) NOT NULL,
  `ai` int(11) NOT NULL,
  `image` blob DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `result`
--

INSERT INTO `result` (`id`, `name`, `uname`, `pass`, `age`, `email`, `state`, `district`, `city`, `gender`, `mstatus`, `status`, `votes`, `roles`, `partyname`, `ai`, `image`) VALUES
(84, 'Pushpa Dahal', 'iampk', '123456', 78, 'pushpa@gmail.com', 'bagmati', 'kathmandu', 'kathmandu', 'male', 'married', 1, 1, 'candidate', 'CPN(Maoist-centre)', 12, NULL),
(85, 'KP Oli', 'iamkp', 'abcdefg', 78, 'kpoli@gmail.com', 'Bagmati', 'kathmandu', 'Kathmandu', 'male', 'married', 1, 1, 'candidate', 'CPN (UML)', 13, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `voter`
--

CREATE TABLE `voter` (
  `id` int(20) NOT NULL,
  `name` text NOT NULL,
  `uname` text CHARACTER SET latin1 COLLATE latin1_general_cs NOT NULL,
  `pass` varchar(20) NOT NULL,
  `age` int(3) NOT NULL,
  `email` varchar(30) NOT NULL,
  `state` varchar(15) NOT NULL,
  `district` text NOT NULL,
  `city` text NOT NULL,
  `gender` varchar(10) NOT NULL,
  `mstatus` varchar(15) NOT NULL,
  `status` int(1) NOT NULL,
  `votes` int(11) NOT NULL,
  `roles` varchar(10) NOT NULL,
  `image_path` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `voter`
--

INSERT INTO `voter` (`id`, `name`, `uname`, `pass`, `age`, `email`, `state`, `district`, `city`, `gender`, `mstatus`, `status`, `votes`, `roles`, `image_path`) VALUES
(83, 'Apekshya Dhungana', 'apekshya', '123456', 20, 'apekshya@gmail.com', 'bagmati', 'kavrepalanchok', 'Dhulikhel', 'female', 'unmarried', 1, 0, 'voter', NULL),
(84, 'Kalyan Chettri', 'kalyan', '123456', 21, 'kalyan@gmail.com', 'bagmati', 'gulmi', 'kathmandu', 'male', 'unmarried', 1, 0, 'voter', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD UNIQUE KEY `user_id` (`user_id`);

--
-- Indexes for table `candidate`
--
ALTER TABLE `candidate`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `result`
--
ALTER TABLE `result`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `voter`
--
ALTER TABLE `voter`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `user_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `result`
--
ALTER TABLE `result`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=86;

--
-- AUTO_INCREMENT for table `voter`
--
ALTER TABLE `voter`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=94;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
