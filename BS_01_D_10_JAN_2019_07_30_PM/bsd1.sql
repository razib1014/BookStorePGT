-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 10, 2019 at 02:30 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bsd1`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookInfo`
--

CREATE TABLE `bookInfo` (
  `book_id` int(12) NOT NULL,
  `book_name` varchar(150) NOT NULL,
  `book_auth` varchar(60) NOT NULL,
  `book_pub` varchar(60) NOT NULL,
  `book_cat` varchar(60) NOT NULL,
  `book_page` int(4) NOT NULL,
  `book_price` float NOT NULL,
  `stock_no` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bookInfo`
--

INSERT INTO `bookInfo` (`book_id`, `book_name`, `book_auth`, `book_pub`, `book_cat`, `book_page`, `book_price`, `stock_no`) VALUES
(1, 'Drama Book A', 'Author A', 'Pub A', 'Drama', 100, 122, 5),
(2, 'Drama Book B', 'Author A', 'Pub B', 'Drama', 112, 125, 3),
(3, 'Drama Book C', 'Author B', 'Pub C', 'Drama', 123, 125, 4),
(4, 'Drama Book D', 'Author D', 'Pub D', 'Drama', 125, 130, 8),
(5, 'Drama Book E', 'Author B', 'Pub A', 'Drama', 130, 140, 5),
(6, 'Romance Book A', 'Author B', 'Pub D', 'Romance', 99, 100, 6),
(7, 'Romance Book B', 'Author B', 'Pub C', 'Romance', 115, 120, 3),
(8, 'Romance Book C', 'Author E', 'Pub G', 'Romance', 113, 123, 4),
(9, 'Romance Book D', 'Author K', 'Pub D', 'Romance', 120, 125, 3),
(10, 'Action Book A', 'Author A', 'Pub A', 'Action', 111, 115, 8),
(11, 'Action Book B', 'Author A', 'Pub C', 'Action', 115, 130, 7),
(12, 'Action Book C', 'Author B', 'Pub E', 'Action', 200, 220, 6),
(13, 'Action Book D', 'Author B', 'Pub D', 'Action', 220, 250, 8),
(14, 'Adventure Book A', 'Author C', 'Pub E', 'Adventure', 123, 225, 3),
(15, 'Adventure Book B', 'Author C', 'Pub D', 'Adventure', 152, 251, 4),
(16, 'Adventure Book C', 'Author A', 'Pub E', 'Adventure', 125, 180, 4),
(17, 'History Book A', 'Author B', 'Pub C', 'History', 100, 120, 3),
(18, 'History Book B', 'Author A', 'Pub D', 'History', 120, 130, 4),
(19, 'History Book C', 'Author D', 'Pub C', 'History', 125, 140, 5),
(20, 'History Book D', 'Author E', 'Pub E', 'History', 122, 130, 5),
(21, 'History Book E', 'Author B', 'Pub A', 'History', 125, 130, 3),
(22, 'Young Fiction Book E', 'Author A', 'Pub E', 'Young Fiction', 80, 100, 5),
(23, 'Young Fiction Book D', 'Author B', 'Pub A', 'Young Fiction', 90, 120, 4),
(24, 'Young Fiction Book C', 'Author C', 'Pub D', 'Young Fiction', 95, 125, 4),
(25, 'Young Fiction Book B', 'Author D', 'Pub B', 'Young Fiction', 100, 130, 5),
(26, 'Young Fiction Book A', 'Author B', 'Pub C', 'Young Fiction', 122, 135, 5),
(27, 'Thriller A', 'Author A', 'Pub E', 'Thriller', 130, 150, 6),
(28, 'Thriller B', 'Author A', 'Pub E', 'Thriller', 135, 150, 6),
(29, 'Thriller C', 'Author E', 'Pub A', 'Thriller', 140, 160, 5),
(30, 'Thriller D', 'Author B', 'Pub E', 'Thriller', 145, 170, 8),
(31, 'Thriller E', 'Author C', 'Pub C', 'Thriller', 150, 190, 10),
(32, 'Thriller F', 'Author A', 'Pub A', 'Thriller', 150, 160, 2),
(33, 'Thriller G', 'Author B', 'Pub V', 'Thriller', 200, 250, 5);

-- --------------------------------------------------------

--
-- Table structure for table `userInfo`
--

CREATE TABLE `userInfo` (
  `id` int(10) NOT NULL,
  `name` varchar(250) NOT NULL,
  `uname` varchar(50) NOT NULL,
  `email` varchar(80) NOT NULL,
  `passwd` varchar(50) NOT NULL,
  `image` varchar(100) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userInfo`
--

INSERT INTO `userInfo` (`id`, `name`, `uname`, `email`, `passwd`, `image`, `date`) VALUES
(1, 'Razib', 'razib', 'razib@email.com', 'razib', 'PP_ME_2.png', '2019-01-10 19:26:25');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bookInfo`
--
ALTER TABLE `bookInfo`
  ADD PRIMARY KEY (`book_id`);

--
-- Indexes for table `userInfo`
--
ALTER TABLE `userInfo`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `uname` (`uname`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bookInfo`
--
ALTER TABLE `bookInfo`
  MODIFY `book_id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `userInfo`
--
ALTER TABLE `userInfo`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
