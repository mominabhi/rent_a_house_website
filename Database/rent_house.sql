-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 03, 2018 at 05:57 PM
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
-- Table structure for table `offer_confirmed`
--

CREATE TABLE `offer_confirmed` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `confirm` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `offer_confirmed`
--

INSERT INTO `offer_confirmed` (`id`, `user_id`, `post_id`, `confirm`) VALUES
(1, 2, 1, 0),
(2, 4, 1, 0),
(3, 3, 1, 0),
(6, 5, 3, 0);

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
  `contact_no` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`id`, `member_id`, `city`, `area`, `rent_type`, `image`, `discription`, `price`, `address`, `post_date`, `contact_no`) VALUES
(6, 5, 'dhaka', 'ghhhj', 'One Room-Sublet', 'img/h1.jpg', 'dgfg', 0, 'kjgsdfjfd', '2018-12-12', ''),
(7, 5, 'Dhaka', 'fgg', 'Full Flat', 'img/h2.jpg', 'cfggf', 4000, 'kjgsdfjfd', '2018-12-06', 'gfggj'),
(8, 5, 'dhaka', 'ghhhj', 'Full Flat', 'img/W0CXE9.jpg', 'tftgjg', 150000, 'kjgsdfjfd', '2018-12-15', 'jhghj');

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
-- Indexes for table `offer_confirmed`
--
ALTER TABLE `offer_confirmed`
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
-- AUTO_INCREMENT for table `offer_confirmed`
--
ALTER TABLE `offer_confirmed`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
