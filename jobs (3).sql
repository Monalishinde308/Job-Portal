-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 07, 2020 at 04:59 AM
-- Server version: 10.1.40-MariaDB
-- PHP Version: 7.1.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jobs`
--

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` int(11) NOT NULL,
  `name` varchar(400) NOT NULL,
  `designation` varchar(500) NOT NULL,
  `qualification` varchar(500) NOT NULL,
  `dept_name` varchar(800) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `name`, `designation`, `qualification`, `dept_name`) VALUES
(8, 'Aush', 'student', 'Diploma Engineer', 'Automobile Engineering'),
(11, 'Arohi Kulkarni', 'student', 'Diploma Engineer', 'Automobile Engineering'),
(14, 'Sanjiwani Pawar', 'student', 'B.E', 'Computer Technology'),
(16, 'Payal ', 'student', 'M.E', 'Automobile Engineering'),
(17, 'Supriya Gajare', 'student', 'Diploma Engineer', 'Automobile Engineering'),
(18, 'Harsha Kawade', 'student', 'M.E', 'Electrical Engineering'),
(19, 'Anjali', 'student', 'Diploma Engineer', 'E & TC Department'),
(23, 'Nishant', 'student', 'B.E', 'Automobile Engineering'),
(24, 'Mayur', 'student', 'Diploma Engineer', 'E & TC Department'),
(25, 'Aushi', 'student', 'B.E', 'Automobile Engineering'),
(26, 'Yash', 'student', 'B.E', 'Automobile Engineering');

-- --------------------------------------------------------

--
-- Table structure for table `dbregister`
--

CREATE TABLE `dbregister` (
  `id` int(11) NOT NULL,
  `fname` varchar(400) NOT NULL,
  `lname` varchar(500) NOT NULL,
  `address` varchar(500) NOT NULL,
  `mobileno` varchar(10) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `designation` varchar(200) NOT NULL,
  `qualification` varchar(200) NOT NULL,
  `department` varchar(300) NOT NULL,
  `gender` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dbregister`
--

INSERT INTO `dbregister` (`id`, `fname`, `lname`, `address`, `mobileno`, `email`, `password`, `designation`, `qualification`, `department`, `gender`) VALUES
(44, 'pratidnya', 'Deshmukh', 'Bhalwani', '9865432121', 'pratidnyadeshmukh2020@gmail.com', '7410', 'student', 'Diploma Engineer', 'Computer Technology', 'Female'),
(46, 'Mayur', 'kole', 'Pandharpur', '987876548', 'qwerty@gmail.com', 'qwerty', 'student', 'Diploma Engineer', 'E & TC Department', 'Male'),
(47, 'Harsh', 'Redy', 'Kolhapur', '0987654312', 'harsh@gmail.com', '8520', 'student', 'Diploma Engineer', 'Automobile Engineering', 'Male');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `name` varchar(400) NOT NULL,
  `qualification` varchar(500) NOT NULL,
  `location` varchar(500) NOT NULL,
  `description` varchar(800) NOT NULL,
  `link` varchar(200) NOT NULL,
  `department` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `name`, `qualification`, `location`, `description`, `link`, `department`) VALUES
(9, 'Cognizant', 'Diploma Engineer', 'Benglore', 'qwerty', 'https://hiremee.co.in/candidate/login', 'Automobile Engineering'),
(10, 'Infosys', 'M.E', 'Hydrabad', 'xcvbnm,.', 'https://hiremee.co.in/candidate/register', 'Automobile Engineering'),
(11, 'Vipro', 'M.E', 'Hydrabad', 'cvbnm', 'https://hiremee.co.in/candidate/register', 'Automobile Engineering'),
(12, 'Jio', 'M.E', 'pune', 'qwertyui', 'https://hiremee.co.in/candidate/register', 'Automobile Engineering');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dbregister`
--
ALTER TABLE `dbregister`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `dbregister`
--
ALTER TABLE `dbregister`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
