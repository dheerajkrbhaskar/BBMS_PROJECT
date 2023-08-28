-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 15, 2019 at 07:48 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 5.6.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
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
-- Table structure for table `donor_registration`
--

CREATE TABLE `donor_registration` (
  `id` int(11) NOT NULL,
  `name` varchar(30) DEFAULT NULL,
  `age` varchar(10) DEFAULT NULL,
  `gender` varchar(10) DEFAULT NULL,
  `fname` varchar(30) DEFAULT NULL,
  `email` varchar(40) DEFAULT NULL,
  `address` varchar(200) DEFAULT NULL,
  `city` varchar(20) DEFAULT NULL,
  `bgroup` varchar(10) DEFAULT NULL,
  `mobno` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `donor_registration`
--

INSERT INTO `donor_registration` (`id`, `name`, `age`, `gender`, `fname`, `email`, `address`, `city`, `bgroup`, `mobno`) VALUES
(7, 'Akash Tiwari', '35', 'Male', 'Harsh Tiwari', 'akashtiwari@yahoo.com', 'MIG ADA Colony, Naini', 'Prayagraj', 'AB+', '8592657480'),
(8, 'Karan Chauhan', '45', 'Male', 'Rishi Chauhan', 'karanchauhan32@outlook.com', '45 Rajendra Nagar, Karchana', 'Prayagraj', 'A+', '9582674932'),
(9, 'Kushi Sharma', '21', 'Female', 'Rupesh Sharma', 'kushi32@gmail.com', 'H No.134, Cheonki', 'Prayagraj', 'O+', '8594672890');

-- --------------------------------------------------------

--
-- Table structure for table `exchange_blood`
--

CREATE TABLE `exchange_blood` (
  `id` int(11) NOT NULL,
  `name` varchar(20) DEFAULT NULL,
  `age` varchar(20) DEFAULT NULL,
  `gender` varchar(10) DEFAULT NULL,
  `fname` varchar(30) DEFAULT NULL,
  `email` varchar(40) DEFAULT NULL,
  `address` varchar(200) DEFAULT NULL,
  `city` varchar(20) DEFAULT NULL,
  `bgroup` varchar(10) DEFAULT NULL,
  `exbgroup` varchar(10) DEFAULT NULL,
  `mobno` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `exchange_blood`
--

INSERT INTO `exchange_blood` (`id`, `name`, `age`, `gender`, `fname`, `email`, `address`, `city`, `bgroup`, `exbgroup`, `mobno`) VALUES
(1, 'Rahul Tyagi', '45', 'Male', 'Karan Pandey', 'ankushpandey321@yahoo.com', 'H NO. 43 near Kamla hospital, Bamrauli', 'Prayagraj', 'O+', 'A+', '7548256895');

-- --------------------------------------------------------

--
-- Table structure for table `out_stoke_blood`
--

CREATE TABLE `out_stoke_blood` (
  `id` int(11) NOT NULL,
  `name` varchar(20) DEFAULT NULL,
  `bgroup` varchar(20) DEFAULT NULL,
  `mobno` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `out_stoke_blood`
--

INSERT INTO `out_stoke_blood` (`id`, `name`, `bgroup`, `mobno`) VALUES
(7, 'Rahul Tyagi', 'O+', '7548256895');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `age` varchar(20) DEFAULT NULL,
  `gender` varchar(10) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `city` varchar(50) DEFAULT NULL,
  `mobno` varchar(12) DEFAULT NULL,
  `pass` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `age`, `gender`, `email`, `city`, `mobno`, `pass`) VALUES
(25, 'Neeraj Kumar Bhaskar(Admin)', '20', 'Male', 'bhaskarneerajsatna@gmail.com', 'ALLAHABAD', '7318299039', '7318299039');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `donor_registration`
--
ALTER TABLE `donor_registration`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `exchange_blood`
--
ALTER TABLE `exchange_blood`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `out_stoke_blood`
--
ALTER TABLE `out_stoke_blood`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `donor_registration`
--
ALTER TABLE `donor_registration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `exchange_blood`
--
ALTER TABLE `exchange_blood`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `out_stoke_blood`
--
ALTER TABLE `out_stoke_blood`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
