-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 10, 2019 at 07:56 PM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blogpost`
--

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `id` int(11) NOT NULL,
  `article_title` varchar(150) NOT NULL,
  `article_body` varchar(140) NOT NULL,
  `image_path` varchar(255) NOT NULL,
  `created_At` varchar(300) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`id`, `article_title`, `article_body`, `image_path`, `created_At`, `user_id`) VALUES
(36, 'deep', '9876h', 'http://localhost/blogPost/upload/animal2.jpg', '2019-02-10 19:13:40', 1),
(37, 'n', 'nbv', 'http://localhost/blogPost/upload/animal3.jpg', '2019-02-10 19:19:37', 1),
(39, 'gfjuygfd', 'xcverty', 'http://localhost/blogPost/upload/nature17.jpg', '2019-02-10 19:48:06', 13);

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

CREATE TABLE `city` (
  `city_id` int(11) NOT NULL,
  `state_id` int(11) NOT NULL,
  `city_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `city`
--

INSERT INTO `city` (`city_id`, `state_id`, `city_name`) VALUES
(1, 1, 'KOLKATA'),
(2, 1, 'dankuni'),
(3, 2, 'Parbhani City'),
(4, 2, 'Jalna City'),
(5, 3, 'patna'),
(6, 3, 'gaya'),
(7, 4, 'Jayanagar'),
(8, 4, 'Koramangala'),
(9, 5, 'gangtok'),
(10, 5, 'pelling'),
(11, 6, 'faridabad'),
(12, 6, 'goregawn'),
(13, 7, 'utica'),
(14, 7, 'albanu'),
(15, 8, 'rosewell'),
(16, 8, 'santa fe'),
(17, 9, 'seettle'),
(18, 9, 'spokena'),
(19, 10, 'miami'),
(20, 10, 'tampa'),
(21, 11, 'fairfax'),
(22, 11, 'alexgandria'),
(23, 12, 'south band'),
(24, 12, 'grand'),
(25, 13, 'kailua'),
(26, 13, 'hilo'),
(27, 14, 'maruti'),
(28, 14, 'sujiki'),
(29, 15, 'hiro'),
(30, 15, 'honda'),
(31, 16, 'kiya'),
(32, 16, 'bbaat '),
(33, 16, 'hai'),
(34, 17, 'jai'),
(35, 17, 'hoo'),
(36, 18, 'zindgi '),
(37, 18, 'milegi'),
(38, 18, 'dobara'),
(39, 14, 'ho'),
(40, 13, 'hiii');

-- --------------------------------------------------------

--
-- Table structure for table `country`
--

CREATE TABLE `country` (
  `country_id` int(11) NOT NULL,
  `country_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `country`
--

INSERT INTO `country` (`country_id`, `country_name`) VALUES
(1, 'USA'),
(2, 'INDIA'),
(3, 'RAsia');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `feedback1` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `name`, `email`, `feedback1`) VALUES
(1, 'raju', 'raju@gmail.com', 'raj'),
(2, 'deepak', 'wow ', 'that great man');

-- --------------------------------------------------------

--
-- Table structure for table `state`
--

CREATE TABLE `state` (
  `state_id` int(11) NOT NULL,
  `country_id` int(11) NOT NULL,
  `state_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `state`
--

INSERT INTO `state` (`state_id`, `country_id`, `state_name`) VALUES
(1, 2, 'westbangal'),
(2, 2, 'mumbia'),
(3, 2, 'bihar'),
(4, 2, 'bengaluru'),
(5, 2, 'sikkim'),
(6, 2, 'delhi'),
(7, 1, 'new york'),
(8, 1, 'new mexico'),
(9, 1, 'washington'),
(10, 1, 'Virginia'),
(11, 1, 'Indiana'),
(12, 1, 'Florida'),
(13, 1, 'Hawaii'),
(14, 3, 'Balabanovo'),
(15, 3, 'hi'),
(16, 3, 'vu'),
(17, 3, 'kk'),
(18, 3, 'ap');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `firstname`, `lastname`, `email`) VALUES
(1, 'deepak', '123', 'deepak', 'praja', 'prajapari1210deep@gmail.com'),
(2, 'sdf', 'ad', 'sd', 'fd', 'gfdf@gmal.com'),
(3, 'sdf', 'jhoi', 'kjhd', 'sdfew', 'kjkhgfd@gmail.com'),
(4, 'sdf', '432', 'dfhj', 'dfgj', 'dee@gmail.com'),
(5, 'fd', '543', 'gf', 'gf', 'fd@gmail.com'),
(6, 'sdf', 'dfg', 'sdf', 'dddf', 'sdfg@gmail.com'),
(7, 'raju', 'raju', 'raju', 'raju', 'raju@gmail.com'),
(10, 'ram', '123', 'ram', 'ram', 'ram@gmail.com'),
(11, 'r', '3', 'DEEPAK', 'PRAJAPATI', 'r@gmail.com'),
(13, 'f', '12', '2', '2', 'gr@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `city`
--
ALTER TABLE `city`
  ADD PRIMARY KEY (`city_id`);

--
-- Indexes for table `country`
--
ALTER TABLE `country`
  ADD PRIMARY KEY (`country_id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `state`
--
ALTER TABLE `state`
  ADD PRIMARY KEY (`state_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;
--
-- AUTO_INCREMENT for table `city`
--
ALTER TABLE `city`
  MODIFY `city_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
--
-- AUTO_INCREMENT for table `country`
--
ALTER TABLE `country`
  MODIFY `country_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `state`
--
ALTER TABLE `state`
  MODIFY `state_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
