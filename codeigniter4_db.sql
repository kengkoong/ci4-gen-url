-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 09, 2022 at 07:43 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `codeigniter4_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `short_urls`
--

CREATE TABLE `short_urls` (
  `id` int(11) NOT NULL,
  `long_url` text NOT NULL,
  `short_code` varchar(256) NOT NULL,
  `hits` int(11) NOT NULL,
  `created` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `short_urls`
--

INSERT INTO `short_urls` (`id`, `long_url`, `short_code`, `hits`, `created`) VALUES
(1, 'test', 'test', 1, '2022-11-05 07:08:19'),
(2, 'www.google.com', 'K0yqFq8', 3, '2022-11-05 01:33:29'),
(3, 'www.google.com', '51mxWPh', 1, '2022-11-05 01:34:18'),
(4, 'www.facebook.com', 'DtptdT0', 1, '2022-11-05 01:35:51'),
(5, 'www.google.com', '0jawLxg', 1, '2022-11-05 01:36:36'),
(6, 'www.google.com', '8Q2nBP1', 1, '2022-11-05 01:53:28'),
(7, 'www.google.com', 'vFzgqQ7', 1, '2022-11-05 01:53:29'),
(8, 'www.google.com', 't5SxpH1', 1, '2022-11-05 01:53:30'),
(9, 'www.google.com', 'VA43jan', 1, '2022-11-05 01:53:48'),
(10, 'www.google.com', 'r9cxRtY', 1, '2022-11-05 01:54:01'),
(11, 'www.google.com', '41DxqCm', 1, '2022-11-05 01:54:21'),
(12, 'www.google.com', '8xvZaNC', 1, '2022-11-05 01:54:39'),
(13, 'www.google.com', 'XwrZ47Y', 1, '2022-11-05 01:55:24'),
(14, 'www.google.com', 'm0pJ0sS', 1, '2022-11-05 01:55:25'),
(15, 'www.google.com', '5sG4nY1', 1, '2022-11-05 01:55:39'),
(16, 'www.google.com', 'RQmkd5C', 1, '2022-11-05 01:55:50'),
(17, 'www.google.com', 'Q4k5yB9', 1, '2022-11-05 01:56:21'),
(18, 'www.google.com', 'YDpSm8v', 1, '2022-11-05 01:58:19'),
(19, 'www.google.com', 'LQHkp4H', 1, '2022-11-05 01:58:21'),
(20, 'www.google.com', 'fhZ3K9s', 1, '2022-11-05 01:58:23'),
(21, 'www.google.com', 'DB72ww2', 1, '2022-11-05 01:59:38'),
(22, 'www.google.com', 'vpmQF7W', 1, '2022-11-05 01:59:50'),
(23, 'www.google.com', '9gR9KxF', 1, '2022-11-05 01:59:52'),
(24, 'www.google.com', 'BRp9V9X', 1, '2022-11-05 01:59:52'),
(25, 'www.google.com', 'KprL9k5', 1, '2022-11-05 01:59:53'),
(26, 'www.google.com', 'T2LLvJY', 1, '2022-11-05 01:59:53'),
(27, 'www.google.com', 'RJ3gAXN', 1, '2022-11-05 01:59:53'),
(28, 'www.google.com', 'FYpK2qa', 1, '2022-11-05 01:59:53'),
(29, 'www.google.com', 'y2N6LyJ', 1, '2022-11-05 01:59:53'),
(30, 'www.google.com', 'CFP544z', 1, '2022-11-05 01:59:54'),
(31, 'www.google.com', 'cHA1Qag', 1, '2022-11-05 01:59:54'),
(32, 'www.google.com', 'tvf2MYS', 1, '2022-11-05 01:59:54'),
(33, 'www.google.com', '57T8VdY', 1, '2022-11-05 01:59:54'),
(34, 'www.google.com', 'WpD8Anr', 1, '2022-11-05 01:59:54'),
(35, 'www.google.com', 'Xd1cW9x', 1, '2022-11-05 01:59:54'),
(36, 'www.google.com', 'S6QKFRr', 1, '2022-11-05 01:59:55'),
(37, 'www.hi5.com', 'X0zCrfW', 1, '2022-11-05 04:16:49'),
(38, 'www.hi566.com', 'Mwh1Czp', 1, '2022-11-05 04:17:54'),
(39, 'www.hi56dd6.com', 'sV53zkM', 1, '2022-11-05 04:18:37'),
(40, 'ddddd', '1wJ11Mm', 1, '2022-11-05 04:19:15'),
(41, 'xxx', 'Pc56nrT', 1, '2022-11-05 04:20:00'),
(42, 'xxx', 'WM07j8j', 1, '2022-11-05 04:20:28'),
(43, 'xxx', 'Q6fggZ3', 1, '2022-11-05 04:20:40'),
(44, 'xxx', '7AwsKXM', 1, '2022-11-05 04:20:56'),
(45, 'https://mynovel.co', 'V8fTfJd', 4, '2022-11-08 02:26:22');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `short_urls`
--
ALTER TABLE `short_urls`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `short_urls`
--
ALTER TABLE `short_urls`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
