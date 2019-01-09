-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 09, 2019 at 04:12 PM
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
(1, 'Book A', 'Author A', 'Pub A', 'Adventure', 200, 220, 5),
(2, 'Book B', 'Auth B', 'Pub B', 'History', 150, 250, 3),
(3, 'Book C', 'Author C', 'Publisher Book C', 'Thriller', 80, 100, 8),
(4, 'Book D', 'Author D', 'Publisher Book D', 'Drama', 120, 150, 3),
(5, 'Book E', 'Author E', 'Publisher Book E', 'Young Fiction', 60, 80, 5),
(6, 'Book F', 'Author E', 'Publisher Book F', 'Young Fiction', 112, 130, 4);

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
(1, 'RZ', 'rzrz', 'rz@rz.com', 'rzrz', 'PP_ME_2.png', '2019-01-09 10:12:13');

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
  MODIFY `book_id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `userInfo`
--
ALTER TABLE `userInfo`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
