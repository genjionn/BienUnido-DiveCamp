-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 04, 2022 at 03:36 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `divecamp`
--

-- --------------------------------------------------------

--
-- Table structure for table `reserves`
--

CREATE TABLE `reserves` (
  `reserveid` int(255) NOT NULL,
  `roomid` int(255) NOT NULL,
  `userid` int(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `checkin_date` varchar(255) NOT NULL,
  `checkout_date` varchar(255) NOT NULL,
  `number_of_adult` int(255) NOT NULL,
  `number_of_child` int(255) NOT NULL,
  `mobile_number` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reserves`
--

INSERT INTO `reserves` (`reserveid`, `roomid`, `userid`, `email`, `checkin_date`, `checkout_date`, `number_of_adult`, `number_of_child`, `mobile_number`) VALUES
(15, 22, 2, 'testing123@gmail.com', '2022-05-05', '2022-05-12', 2, 1, 12344565),
(16, 24, 2, 'testing123@gmail.com', '2022-05-06', '2022-05-13', 1, 1, 1232423),
(17, 22, 2, 'testing123@gmail.com', '2022-05-05', '2022-05-31', 1, 1, 4342343);

-- --------------------------------------------------------

--
-- Table structure for table `rooms`
--

CREATE TABLE `rooms` (
  `roomid` int(11) NOT NULL,
  `adminid` int(255) NOT NULL,
  `roomname` varchar(255) NOT NULL,
  `roomdesc` varchar(255) NOT NULL,
  `roomlocation` varchar(255) NOT NULL,
  `rating` int(255) NOT NULL,
  `roomsavailable` int(255) NOT NULL,
  `roomprice` varchar(255) NOT NULL,
  `roomimage` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rooms`
--

INSERT INTO `rooms` (`roomid`, `adminid`, `roomname`, `roomdesc`, `roomlocation`, `rating`, `roomsavailable`, `roomprice`, `roomimage`) VALUES
(22, 3, 'Medium Room', 'Good For 2 People Room', 'BienUnido', 0, 7, '2300', '624e7cdf218763.43944350.jpg'),
(24, 3, 'Small Room', 'Good for a single person', 'BienUnido', 0, 4, '1000', '624e62d05c31c0.57640541.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `priviledge` varchar(255) NOT NULL,
  `picname` varchar(255) NOT NULL DEFAULT 'defaultprofilepic.jpg'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `email`, `password`, `priviledge`, `picname`) VALUES
(1, 'cris', 'co', 'crisco@gmail.com', '$2y$10$PpbvokexBjUTQD9V5n.cI.rlrVEVB1sddlxTyR7qJpM4qAtu3IuIe', 'Admin', 'defaultprofilepic.jpg'),
(2, 'testuser', 'usertesting', 'testing123@gmail.com', '$2y$10$yIhSbFjUJjotsMGRafIuGu/4oXTLOAQjtih73Czyzgl6o.nMrW3Gm', 'Regular', 'defaultprofilepic.jpg'),
(3, 'admin', 'test', 'admintest@gmail.com', '$2y$10$dUA3wpG529mk9.8UBAQWA.en762IizbxOR9nN/T7NYUPTsvSj/LKW', 'Admin', 'defaultprofilepic.jpg'),
(4, 'jon', 'genobaten', 'genjionn@gmail.com', '$2y$10$p1GElnnAKRzVanG6DGdoW.u9GOrGlvXHlxcu88Zv4ZMu2f0GJegSG', 'Admin', 'user4_624c2d8309897.jpg'),
(5, 'regular', 'jon', 'jon@gmail.com', '$2y$10$z9Xr3o4lE7Xok/dUhsJDDOcOLOnTrf30PykKZ3jlv4hI7BhClbEb.', 'Regular', 'user5_624c2ef07d60c.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `reserves`
--
ALTER TABLE `reserves`
  ADD PRIMARY KEY (`reserveid`);

--
-- Indexes for table `rooms`
--
ALTER TABLE `rooms`
  ADD PRIMARY KEY (`roomid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `reserves`
--
ALTER TABLE `reserves`
  MODIFY `reserveid` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `rooms`
--
ALTER TABLE `rooms`
  MODIFY `roomid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
