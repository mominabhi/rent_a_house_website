-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 26, 2017 at 03:23 AM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.11

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
(3, 3, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `id` int(11) NOT NULL,
  `member_id` int(11) NOT NULL,
  `city` varchar(300) NOT NULL,
  `area` varchar(300) NOT NULL,
  `discription` text NOT NULL,
  `available` tinyint(1) NOT NULL,
  `price` varchar(11) NOT NULL,
  `address` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`id`, `member_id`, `city`, `area`, `discription`, `available`, `price`, `address`) VALUES
(1, 1, 'dhaka', 'bosundhara', 'A button can be set to an active (appear pressed) or a disabled (unclickable) state:', 1, '1000', '53/6,basumddha,dhaka'),
(2, 3, 'Dhaka', 'hazaribagh', 'Let my soul smile through my heart and my heart smile through my eyes, that I may scatter rich smiles in sad hearts', 0, '10000', '53/6,baddanagar,hazaribagh,dhaka');

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
(1, 'imam', 'imam', 'imam@gmail.com', 'imam hoissain', '5454'),
(2, 'fahim', 'fahim', 'fahim@gmail.com', 'fahim md riaz', '111'),
(3, 'enayet', 'enayet', 'enayet@gmail.com', 'enayet molla', ''),
(4, 'hello', 'hello', 'hello@gmail.com', 'hello', '016568');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
