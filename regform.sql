-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 07, 2020 at 12:48 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.2.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `regform`
--

-- --------------------------------------------------------

--
-- Table structure for table `files`
--

CREATE TABLE `files` (
  `file_name` varchar(50) NOT NULL,
  `created_date` datetime NOT NULL,
  `id` int(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `quater` varchar(3) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `files`
--

INSERT INTO `files` (`file_name`, `created_date`, `id`, `image`, `quater`, `name`) VALUES
('Manning-Deep-Learning-with-Python-final.pdf', '2020-06-26 15:19:09', 31, '1593177549.jpg', '2', 'Deep Learning'),
('Smarter_Way_to_Learn_Paython.pdf', '2020-06-26 15:25:33', 32, '1593177933.jpg', '1', 'Python');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL,
  `date_time` datetime NOT NULL,
  `contactnumber` varchar(100) NOT NULL,
  `cnic` varchar(20) NOT NULL,
  `gender` varchar(30) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `level` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `name`, `email`, `password`, `date_time`, `contactnumber`, `cnic`, `gender`, `photo`, `level`) VALUES
(1, 'bilal', 'bilalzafar.cs@gmail.com', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', '2020-05-18 13:42:47', '03077152425', '4220113961525', 'Male', '', '1'),
(20, 'Bilal', 'bilal@gmail.com', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', '2020-06-26 13:07:11', '03077152425', '4220113961525', 'Male', '', '0');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `files`
--
ALTER TABLE `files`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `files`
--
ALTER TABLE `files`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
