-- phpMyAdmin SQL Dump
-- version 5.3.0-dev+20220801.ff0b2d86c9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 10, 2025 at 05:20 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ovsystems`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_name` varchar(100) CHARACTER SET latin1 COLLATE latin1_general_cs NOT NULL,
  `admin_pass` varchar(100) CHARACTER SET latin1 COLLATE latin1_general_cs NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_name`, `admin_pass`) VALUES
('admin', '123');

-- --------------------------------------------------------

--
-- Table structure for table `candidate`
--

CREATE TABLE `candidate` (
  `id` int(20) NOT NULL,
  `fname` text NOT NULL,
  `lname` text NOT NULL,
  `email` varchar(30) NOT NULL,
  `age` int(3) NOT NULL,
  `uname` text CHARACTER SET latin1 COLLATE latin1_general_cs NOT NULL,
  `pass` varchar(20) NOT NULL,
  `state` varchar(15) NOT NULL,
  `district` text NOT NULL,
  `city` text NOT NULL,
  `gender` varchar(10) NOT NULL,
  `mstatus` varchar(15) NOT NULL,
  `status` int(1) NOT NULL,
  `votes` int(100) NOT NULL,
  `roles` varchar(10) NOT NULL,
  `teamname` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `candidate`
--

INSERT INTO `candidate` (`id`, `fname`, `lname`, `email`, `age`, `uname`, `pass`, `state`, `district`, `city`, `gender`, `mstatus`, `status`, `votes`, `roles`, `teamname`) VALUES
(83, 'John', 'Doe', 'john@gmail.com', 78, 'iamjohn', 'John123', 'bagmati', 'kathmandu', 'Kathmandu', 'male', 'married', 0, 0, 'candidate', '(NC)'),
(84, 'Ram', 'KC', 'ram@gmail.com', 78, 'iamram', 'Ram123', 'bagmati', 'kathmandu', 'kathmandu', 'male', 'married', 0, 0, 'candidate', 'CPN'),
(85, 'Shyam', 'Karki', 'shyam@gmail.com', 78, 'iamshyam', 'Shyam123', 'Bagmati', 'kathmandu', 'Kathmandu', 'male', 'married', 0, 0, 'candidate', '(UML)');

-- --------------------------------------------------------

--
-- Table structure for table `result`
--

CREATE TABLE `result` (
  `id` int(20) NOT NULL,
  `fname` text NOT NULL,
  `lname` text NOT NULL,
  `email` varchar(30) NOT NULL,
  `age` int(3) NOT NULL,
  `uname` text CHARACTER SET latin1 COLLATE latin1_general_cs NOT NULL,
  `pass` varchar(20) NOT NULL,
  `state` varchar(15) NOT NULL,
  `district` text NOT NULL,
  `city` text NOT NULL,
  `gender` varchar(10) NOT NULL,
  `mstatus` varchar(15) NOT NULL,
  `status` int(1) NOT NULL,
  `votes` int(100) NOT NULL,
  `roles` varchar(10) NOT NULL,
  `teamname` varchar(100) NOT NULL,
  `ai` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `result`
--

INSERT INTO `result` (`id`, `fname`, `lname`, `email`, `age`, `uname`, `pass`, `state`, `district`, `city`, `gender`, `mstatus`, `status`, `votes`, `roles`, `teamname`, `ai`) VALUES
(83, 'John', 'Doe', 'john@gmail.com', 78, 'iamjohn', 'John123', 'bagmati', 'kathmandu', 'Kathmandu', 'male', 'married', 0, 0, 'candidate', '(NC)', 11),
(84, 'Ram', 'KC', 'ram@gmail.com', 78, 'iamram', 'Ram123', 'bagmati', 'kathmandu', 'kathmandu', 'male', 'married', 0, 0, 'candidate', 'CPN', 12),
(85, 'Shyam', 'Karki', 'shyam@gmail.com', 78, 'iamshyam', 'Shyam123', 'Bagmati', 'kathmandu', 'Kathmandu', 'male', 'married', 0, 0, 'candidate', '(UML)', 13);

-- --------------------------------------------------------

--
-- Table structure for table `voter`
--

CREATE TABLE `voter` (
  `id` int(20) NOT NULL,
  `fname` text NOT NULL,
  `lname` text NOT NULL,
  `email` varchar(30) NOT NULL,
  `age` int(3) NOT NULL,
  `uname` text CHARACTER SET latin1 COLLATE latin1_general_cs NOT NULL,
  `pass` varchar(20) NOT NULL,
  `state` varchar(15) NOT NULL,
  `district` text NOT NULL,
  `city` text NOT NULL,
  `gender` varchar(10) NOT NULL,
  `mstatus` varchar(15) NOT NULL,
  `status` int(1) NOT NULL,
  `roles` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `voter`
--

INSERT INTO `voter` (`id`, `fname`, `lname`, `email`, `age`, `uname`, `pass`, `state`, `district`, `city`, `gender`, `mstatus`, `status`, `roles`) VALUES
(88, 'Kalyan', 'GC', 'kalyan@gmail.com', 23, 'Kalyan', 'Kalyan123', 'bagmati', 'kathmandu', 'Kathmandu', 'male', 'unmarried', 0, 'voter'),
(89, 'Apeksha', 'Dhungana', 'apeskha@gmail.com', 21, 'Apeksha', 'Apeksha123', 'Lumbini', 'Palpa', 'Tansen', 'female', 'unmarried', 0, 'voter');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `candidate`
--
ALTER TABLE `candidate`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `result`
--
ALTER TABLE `result`
  ADD PRIMARY KEY (`ai`);

--
-- Indexes for table `voter`
--
ALTER TABLE `voter`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `candidate`
--
ALTER TABLE `candidate`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=87;

--
-- AUTO_INCREMENT for table `result`
--
ALTER TABLE `result`
  MODIFY `ai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `voter`
--
ALTER TABLE `voter`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=94;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
