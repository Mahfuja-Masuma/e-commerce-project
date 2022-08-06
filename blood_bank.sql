-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 23, 2020 at 04:53 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blood_bank`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(255) NOT NULL,
  `dob` varchar(255) NOT NULL,
  `number` int(50) NOT NULL,
  `student_id` varchar(55) NOT NULL,
  `address` varchar(200) NOT NULL,
  `blood_group` varchar(50) NOT NULL,
  `last_donate` varchar(50) NOT NULL,
  `age` int(11) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `dob`, `number`, `student_id`, `address`, `blood_group`, `last_donate`, `age`, `password`, `created_at`) VALUES
(1, 'John', 'john@example.com', '05/04/1993', 2147483647, 'uu007', 'uttara', 'o+', '5/5/2020', 22, '222222', '2020-09-21 18:20:47'),
(2, 'John', 'john@example.com', '05/04/1993', 2147483647, 'uu007', 'uttara', 'o+', '5/5/2020', 22, '222222', '2020-09-21 18:21:14'),
(3, 'John', 'john@example.com', '05/04/1993', 2147483647, 'uu007', 'uttara', 'o+', '5/5/2020', 22, '222222', '2020-09-21 18:26:28'),
(4, 'John', 'john@example.com', '05/04/1993', 2147483647, 'uu007', 'uttara', 'o+', '5/5/2020', 22, '222222', '2020-09-21 18:26:44'),
(5, 'John', 'john@example.com', '05/04/1993', 2147483647, 'uu007', 'uttara', 'o+', '5/5/2020', 22, '222222', '2020-09-22 13:50:05'),
(6, 'John', 'john@example.com', '05/04/1993', 2147483647, 'uu007', 'uttara', 'o+', '5/5/2020', 22, '222222', '2020-09-22 13:50:58'),
(7, '', 'sayed@zarss.com ', '', 0, '', '', '', '', 0, '11223344', '2020-09-22 14:11:12'),
(8, '', 'sayed@zarss.com ', '', 0, '', '', '', '', 0, '11223344', '2020-09-22 15:17:56');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
