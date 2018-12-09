-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 09, 2018 at 08:58 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.1.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rent_house`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mobile` varchar(100) NOT NULL,
  `birth_date` date NOT NULL,
  `image` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `con_pass` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `mobile`, `birth_date`, `image`, `password`, `con_pass`) VALUES
(1, 'mominabhi', 'xelokaca@veanlo.com', '04398548686', '2018-12-13', 'img/abhi.jpg', '1a1dc91c907325c69271ddf0c944bc72', '1a1dc91c907325c69271ddf0c944bc72'),
(8, 'mominabhi', 'kingboyabhi@gmail.com', '04398548686', '1998-12-10', 'img/01.jpg', '1a1dc91c907325c69271ddf0c944bc72', '1a1dc91c907325c69271ddf0c944bc72'),
(11, 'mominabhi', 'abhipagla@gmail.com', '67678889', '1999-12-13', 'img/01.jpg', '1a1dc91c907325c69271ddf0c944bc72', '1a1dc91c907325c69271ddf0c944bc72');

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `id` int(11) NOT NULL,
  `member_id` int(11) NOT NULL,
  `city` varchar(300) NOT NULL,
  `area` varchar(300) NOT NULL,
  `rent_type` varchar(100) NOT NULL,
  `image` varchar(200) NOT NULL,
  `discription` text NOT NULL,
  `price` int(11) NOT NULL,
  `address` text NOT NULL,
  `post_date` date NOT NULL,
  `contact_no` varchar(100) NOT NULL,
  `flag` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`id`, `member_id`, `city`, `area`, `rent_type`, `image`, `discription`, `price`, `address`, `post_date`, `contact_no`, `flag`) VALUES
(7, 5, 'Dhaka', 'fgg', 'Full House', 'img/h2.jpg', 'cfggf', 4000, 'lulupapa', '2018-12-06', 'gfggj', 0),
(9, 5, 'Jhenaidah', 'choto kamar kundu', 'Full Flat', 'img/h1.jpg', 'sajdjsfjdjk', 300000, 'Choto kamar kundu,jhenaidah', '2018-12-14', '09875676875', 1),
(12, 2, 'Jhenaidah', 'Kallyanpur', 'Full Flat', 'img/h2.jpg', 'hdfgfgdhgdkgd', 150000, 'Choto kamar kundu,jhenaidah', '2018-12-07', '09875676875', 0);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `user_name` varchar(250) NOT NULL,
  `pass` varchar(250) NOT NULL,
  `email` varchar(300) NOT NULL,
  `name` varchar(300) NOT NULL,
  `mobile` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `user_name`, `pass`, `email`, `name`, `mobile`) VALUES
(2, 'fahim', 'fahim', 'fahim@gmail.com', 'fahim md riaz', '111'),
(5, 'abhi', 'pass', 'momin@gmail.com', 'momin', '04398548686'),
(6, 'abhi', 'pass', 'kingboyabhi@gmail.com', 'momin', '04398548686');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
