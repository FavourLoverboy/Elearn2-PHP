-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 01, 2022 at 12:24 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `elearn2`
--

-- --------------------------------------------------------

--
-- Table structure for table `meals`
--

CREATE TABLE `meals` (
  `id` int(11) NOT NULL,
  `userId` varchar(10) NOT NULL,
  `mealId` varchar(10) NOT NULL,
  `mealName` varchar(30) NOT NULL,
  `image` varchar(255) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `meals`
--

INSERT INTO `meals` (`id`, `userId`, `mealId`, `mealName`, `image`, `date`) VALUES
(1, '2', '1650028136', 'PHP', 'php.jfif', '2022-04-15');

-- --------------------------------------------------------

--
-- Table structure for table `meal_steps`
--

CREATE TABLE `meal_steps` (
  `id` int(11) NOT NULL,
  `userId` varchar(10) NOT NULL,
  `mealId` varchar(10) NOT NULL,
  `step` text NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `meal_steps`
--

INSERT INTO `meal_steps` (`id`, `userId`, `mealId`, `step`, `date`) VALUES
(1, '2', '1650028136', '<h1><strong>This is a PHP tutorial</strong></h1>\r\n\r\n<p>Everything you need to know about PHP.</p>\r\n\r\n<p>yea, you are welcome to this page.</p>\r\n', '2022-04-15');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `fn` varchar(30) NOT NULL,
  `ln` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `pn` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL,
  `ms` varchar(20) NOT NULL,
  `date` date NOT NULL,
  `level` varchar(7) NOT NULL,
  `sex` varchar(7) NOT NULL,
  `picture` text NOT NULL,
  `last_login` date NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fn`, `ln`, `email`, `pn`, `password`, `ms`, `date`, `level`, `sex`, `picture`, `last_login`, `status`) VALUES
(1, 'Favour', 'Nwokamma', 'favourehio2019@gmail.com', '09097048450', 'loverboy', 'Single', '2022-04-10', 'Student', 'Male', '3.png', '2022-04-15', 'Active'),
(2, 'Kelly', 'John', 'kelly@gmail.com', '08172721023', 'kelly123', 'Single', '2022-04-10', 'Admin', 'Male', 'git.jpg', '2022-04-15', 'Active'),
(3, 'Success', 'Luiz', 'luiz@gmail.com', '08172721023', 'manman', 'Single', '2022-04-10', 'Student', 'Female', 'profile.png', '2022-04-10', 'Active'),
(4, 'Lovina', 'Joy', 'Joy@gmail.com', '12345678909', 'manman', 'Single', '2022-04-10', 'Student', 'Female', 'profile.png', '2022-04-10', 'Active'),
(5, 'John', 'Kenneth', 'Favourehio2019@gmail.comxxxxxxx', '1234567890', 'manman', 'Devoice', '2022-04-15', 'Student', 'Male', 'profile.png', '2022-04-15', 'Active');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `meals`
--
ALTER TABLE `meals`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `meal_steps`
--
ALTER TABLE `meal_steps`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `meals`
--
ALTER TABLE `meals`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `meal_steps`
--
ALTER TABLE `meal_steps`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
