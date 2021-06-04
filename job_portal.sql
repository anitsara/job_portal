-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 03, 2021 at 07:54 AM
-- Server version: 10.4.16-MariaDB
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `job_portal`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE `admin_login` (
  `id` int(11) NOT NULL,
  `admin_email` varchar(100) NOT NULL,
  `admin_pass` varchar(100) NOT NULL,
  `admin_username` varchar(111) NOT NULL,
  `first_name` varchar(111) NOT NULL,
  `last_name` varchar(111) NOT NULL,
  `admin_type` varchar(111) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`id`, `admin_email`, `admin_pass`, `admin_username`, `first_name`, `last_name`, `admin_type`) VALUES
(1, 'admin12@gmail.com', '12345', 'admin123', 'admin', '123', '1'),
(2, 'aman@gmail.com', 'aman123', 'aman321', 'Aman', 'Kumar', '2'),
(3, 'svsamuel8@gmail.com', '1234561', 'sam', 'samuel', 'sam', '2'),
(4, 'madhav56@gmail.com', 'maddhavan231', 'madhav123', 'madhav', 'mm12', '1'),
(12, 'chitra@gmail.com', '12345', 'chitra123', 'chitra', 'K T', '2'),
(13, 'neenu@gmail.com', '12345', 'neenu112', 'neenu', 'amn', '2');

-- --------------------------------------------------------

--
-- Table structure for table `admin_type`
--

CREATE TABLE `admin_type` (
  `id` int(111) NOT NULL,
  `admin` varchar(111) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_type`
--

INSERT INTO `admin_type` (`id`, `admin`) VALUES
(1, 'Super Admin'),
(2, 'Customer Admin');

-- --------------------------------------------------------

--
-- Table structure for table `all_jobs`
--

CREATE TABLE `all_jobs` (
  `job_id` int(111) NOT NULL,
  `customer_email` varchar(111) NOT NULL,
  `job_title` varchar(100) NOT NULL,
  `des` varchar(111) NOT NULL,
  `country` varchar(111) NOT NULL,
  `state` varchar(111) NOT NULL,
  `city` varchar(100) NOT NULL,
  `keyword` varchar(111) NOT NULL,
  `category` varchar(111) NOT NULL,
  `company_name` varchar(111) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `all_jobs`
--

INSERT INTO `all_jobs` (`job_id`, `customer_email`, `job_title`, `des`, `country`, `state`, `city`, `keyword`, `category`, `company_name`) VALUES
(2, 'aman@gmail.com', 'Java Developer', 'Java Developer', 'Angola', 'Zaire', 'Soio', 'java fresher', '1', 'new Comp'),
(4, 'admin12@gmail.com', 'Nodejs Urgent recruitment 0 to 3 years experience. Work From Home.', 'Web Developer. \r\nDear Candidate Greetings to all.\r\n\r\nWelcome all.', 'Anguilla', 'Sandy Hill', 'Sandy Hill', 'Fresher', '5', 'happy company'),
(7, 'admin12@gmail.com', 'C fresher', 'for fresher', 'Albania', 'Durres', 'Gjepalaj', 'C fresher', '4', 'Good Company'),
(8, 'admin12@gmail.com', 'php fresher', 'for fresher', 'Angola', 'Lunda Sul', 'Cazaje', 'php fresher', '3', 'happy company'),
(9, 'chitra@gmail.com', 'php fresher', 'PHP jobs', 'Angola', 'Moxico', 'Luena', 'php fresher', '3', 'kishan Company');

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE `company` (
  `company_id` int(111) NOT NULL,
  `company` varchar(111) NOT NULL,
  `des` varchar(100) NOT NULL,
  `admin` varchar(111) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`company_id`, `company`, `des`, `admin`) VALUES
(1, 'abc', 'web developer', 'neenu@gmail.com'),
(2, 'Java World', 'java developer', 'svsamuel8@gmail.com'),
(3, 'pqr', 'web developer', 'neenu@gmail.com'),
(15, 'kishan Company', 'New company', 'chitra@gmail.com'),
(16, 'hi company', 'Welcome to hi', 'chitra@gmail.com'),
(17, 'happy company', 'My new company', 'admin12@gmail.com'),
(18, 'Good Company', 'Here is the company.', 'admin12@gmail.com'),
(19, 'new Comp', 'My Company', 'aman@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(111) NOT NULL,
  `user_email` varchar(111) NOT NULL,
  `name` varchar(111) NOT NULL,
  `email` varchar(111) NOT NULL,
  `subject` varchar(111) NOT NULL,
  `message` varchar(111) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `user_email`, `name`, `email`, `subject`, `message`) VALUES
(14, 'Nil', 'Pritty', 'pritty@gmail.com', 'Experience', 'nice'),
(16, 'Nil', 'ann', 'aman@gmail.com', 'My Try', 'It was so good\r\n'),
(28, 'Nil', 'preetha', 'preetha12@gmail.com', 'Experience', 'Good'),
(29, 'Nil', 'Cutie', 'cutie@gmail.com', 'Experience', 'nice'),
(33, 'Nil', 'Krirti', 'kriti@gmail.com', 'Experience', 'Good work'),
(34, 'Nil', 'Krirti', 'kriti@gmail.com', 'Experience', 'Nice'),
(35, 'Nil', 'Pritty', 'pritty@gmail.com', 'Experience', 'Very Good'),
(36, 'pritty@gmail.com', 'Pritty', 'pritty@gmail.com', 'Experience', 'Never Forget\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `jobskeer`
--

CREATE TABLE `jobskeer` (
  `id` int(111) NOT NULL,
  `email` varchar(111) NOT NULL,
  `password` varchar(111) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `dob` varchar(255) NOT NULL,
  `mobile_number` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jobskeer`
--

INSERT INTO `jobskeer` (`id`, `email`, `password`, `first_name`, `last_name`, `dob`, `mobile_number`) VALUES
(1, 'karan12@gmail.com', 'karan123', 'karan', 'mm', '2020-12-08', '9845632123'),
(6, 'preetha12@gmail.com', '12345', 'Preetha', 'M M', '2020-12-17', '9873453421'),
(8, 'pritty@gmail.com', '12345', 'Pritty', 'Thomas', '2020-12-10', '7563635345');

-- --------------------------------------------------------

--
-- Table structure for table `job_apply`
--

CREATE TABLE `job_apply` (
  `id` int(111) NOT NULL,
  `first_name` varchar(111) NOT NULL,
  `last_name` varchar(111) NOT NULL,
  `dob` varchar(111) NOT NULL,
  `file` varchar(111) NOT NULL,
  `id_job` int(111) NOT NULL,
  `job_seeker` varchar(111) NOT NULL,
  `mobile_number` varchar(111) NOT NULL,
  `status` varchar(111) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `job_apply`
--

INSERT INTO `job_apply` (`id`, `first_name`, `last_name`, `dob`, `file`, `id_job`, `job_seeker`, `mobile_number`, `status`) VALUES
(9, 'Preetha', 'K T', '2020-12-24', '1276_1604030754_Module_IV.pptx', 7, 'preetha12@gmail.com', '9876543212', 'Waiting List'),
(10, 'Preetha', 'sam', '2020-12-16', 'New doc 12-18-20 12.04.39 PM.pdf', 7, 'preetha12@gmail.com', '9912345678', 'Rejected'),
(11, 'Kishan', 'N N', '2020-12-04', 'course_certificate (1).pdf', 9, 'karan12@gmail.com', '8765432129', ''),
(12, 'karan', 'MM', '2020-12-25', 'se_series2.PNG', 4, 'karan12@gmail.com', '7659043211', 'Waiting List'),
(13, 'karan', 'New ', '2020-12-11', 'wp_series2.PNG', 2, 'karan12@gmail.com', '6754458982', 'Accepted'),
(14, 'Preetha ', 'M N', '2020-12-11', 'add.PNG', 2, 'preetha12@gmail.com', '9865431231', 'Accepted'),
(19, 'Pritty', 'O', '2021-01-06', 'MCsveHpUeGlNTkg4UkxwZU1NZEJiUT09_QP (1).pdf', 7, 'pritty@gmail.com', '6546546456', 'Accepted');

-- --------------------------------------------------------

--
-- Table structure for table `job_category`
--

CREATE TABLE `job_category` (
  `id` int(111) NOT NULL,
  `category` varchar(111) NOT NULL,
  `des` varchar(111) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `job_category`
--

INSERT INTO `job_category` (`id`, `category`, `des`) VALUES
(1, 'java', 'this is for fresher'),
(3, 'php', 'php for fresher'),
(4, 'C', 'C programming'),
(5, 'JS', 'JavaScript');

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

CREATE TABLE `profile` (
  `id` int(111) NOT NULL,
  `img` varchar(111) NOT NULL,
  `name` varchar(111) NOT NULL,
  `dob` varchar(111) NOT NULL,
  `number` varchar(111) NOT NULL,
  `email` varchar(111) NOT NULL,
  `user_email` varchar(111) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `profile`
--

INSERT INTO `profile` (`id`, `img`, `name`, `dob`, `number`, `email`, `user_email`) VALUES
(6, '', 'Pritty', '2021-01-12', '6546346354', 'pritty@gmail.com', 'pritty@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_login`
--
ALTER TABLE `admin_login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `all_jobs`
--
ALTER TABLE `all_jobs`
  ADD PRIMARY KEY (`job_id`);

--
-- Indexes for table `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`company_id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jobskeer`
--
ALTER TABLE `jobskeer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `job_apply`
--
ALTER TABLE `job_apply`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `job_category`
--
ALTER TABLE `job_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `profile`
--
ALTER TABLE `profile`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_login`
--
ALTER TABLE `admin_login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `all_jobs`
--
ALTER TABLE `all_jobs`
  MODIFY `job_id` int(111) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `company`
--
ALTER TABLE `company`
  MODIFY `company_id` int(111) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(111) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `jobskeer`
--
ALTER TABLE `jobskeer`
  MODIFY `id` int(111) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `job_apply`
--
ALTER TABLE `job_apply`
  MODIFY `id` int(111) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `job_category`
--
ALTER TABLE `job_category`
  MODIFY `id` int(111) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `profile`
--
ALTER TABLE `profile`
  MODIFY `id` int(111) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
