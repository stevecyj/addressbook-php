-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 12, 2018 at 05:45 PM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `addressbook`
--

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `ID` int(11) NOT NULL,
  `Fname` varchar(30) NOT NULL,
  `Lname` varchar(30) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Phone` char(11) NOT NULL,
  `Address` text NOT NULL,
  `ImgPath` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`ID`, `Fname`, `Lname`, `Email`, `Phone`, `Address`, `ImgPath`) VALUES
(96, 'Alii', 'Freddd', 'aaaa@aa.com', '02938486054', 'Gorgiaa', 'upload/images.jpg'),
(97, 'dddddffggggg', 'dddd', 'aa@aa.com', '09384860566', 'hooo', 'image/default.png'),
(98, 'dddddffggggg', 'dddd', 'aa@aa.com', '09384860566', 'hooooooooooo', 'image/default.png'),
(99, 'Alex', 'Fred', 'alex@gmail.com', '54874585414', 'Washington drive9 x587', 'image/default.png'),
(100, 'Alex', 'Fred', 'alex@gmail.com', '54874585414', '', 'image/default.png'),
(101, 'Alex', 'Fred', 'alex@gmail.com', '54874585414', '', 'image/default.png'),
(102, 'Alex', 'Fred', 'alex@gmail.com', '54874585414', '', 'image/default.png'),
(103, 'Alex', 'Fred', 'alex@gmail.com', '54874585414', '', 'image/default.png'),
(104, 'Alex', 'Fred', 'alex@gmail.com', '54874585414', '', 'image/default.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=105;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
