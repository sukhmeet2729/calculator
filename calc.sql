-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 12, 2022 at 04:52 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `calc`
--

-- --------------------------------------------------------

--
-- Table structure for table `previous-searches`
--

CREATE TABLE `previous-searches` (
  `id` int(255) NOT NULL,
  `searches` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `previous-searches`
--

INSERT INTO `previous-searches` (`id`, `searches`) VALUES
(7, '2+3 = 5 Created on - August 12, 2022 04:45 pm'),
(8, '7+7 = 14 Created on - August 12, 2022 04:45 pm'),
(9, '123/3 = 41 Created on - August 12, 2022 04:45 pm'),
(10, '41*9 = 369 Created on - August 12, 2022 04:45 pm'),
(11, '369-6 = 363 Created on - August 12, 2022 04:45 pm');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `previous-searches`
--
ALTER TABLE `previous-searches`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `previous-searches`
--
ALTER TABLE `previous-searches`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
