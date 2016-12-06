-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 06, 2016 at 11:48 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `personalwebsite`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `person_id` int(11) NOT NULL,
  `first_name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comment` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `person_id`, `first_name`, `last_name`, `email`, `comment`) VALUES
(1, 0, 'Daniel', 'Critchfield', 'dancritchfield@gmail.com', 'I am leaving a comment for myself to prove to Peter that this works');

-- --------------------------------------------------------

--
-- Table structure for table `user_info`
--

CREATE TABLE `user_info` (
  `id` int(11) NOT NULL,
  `username` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hashed_password` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `first_name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `birthday` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_info`
--

INSERT INTO `user_info` (`id`, `username`, `hashed_password`, `first_name`, `last_name`, `email`, `birthday`) VALUES
(7, 'Daniel', '$2y$10$MTFiNGIyM2Y1OGQ5NmM1MOBwnal7P6PrZNJ0cY/JUX.63DUZ8d0Q.', 'Daniel', 'Critchfield', 'dancritchfield@gmail.com', '2016-01-01'),
(8, 'Arron', '$2y$10$MzNiYTE1MGMzYWRiZWFkMOHaB/cwg1lK2AkR/ouR0EMQcavFUO3GW', 'Arron', 'Critchfield', 'dslkkdjf@slkfjd', '2016-01-01'),
(9, 'Peter', '$2y$10$NWMwNTRhMWRjOTgwZjk5ZeCqXaTZYOjyYwSI1cAP4jJoT2HD6NKou', 'Peter', 'Andrew', 'jfsdklfjslkj@lsdkjfdslkfj', '2016-01-01'),
(11, 'Tyler', '$2y$10$MzBiOWZiNDBhN2FlZmZmM.703ZWfDg.1cQRbFq58buOkx7E6DUB86', 'Tyler', 'Bobik', 'dfdsf@ldkf', '2016-01-01'),
(14, 'Dan', '$2y$10$MjZmNDJmNmVmYzFiNTViZOCDNC1a3GCxueQHgl/WkHKsKwKwM7DGm', 'Dan', 'C', 'dancritchfield@gmail.com', '2016-01-31');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_info`
--
ALTER TABLE `user_info`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `user_info`
--
ALTER TABLE `user_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
