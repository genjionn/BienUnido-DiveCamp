-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 05, 2022 at 02:03 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.6

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
-- Table structure for table `rooms`
--

CREATE TABLE `rooms` (
  `roomid` int(11) NOT NULL,
  `adminid` int(255) NOT NULL,
  `roomname` varchar(255) NOT NULL,
  `roomdesc` varchar(255) NOT NULL,
  `roomlocation` varchar(255) NOT NULL,
  `rating` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rooms`
--

INSERT INTO `rooms` (`roomid`, `adminid`, `roomname`, `roomdesc`, `roomlocation`, `rating`) VALUES
(1, 3, 'sampleroom', '', 'pardo', 0),
(2, 3, '2nd sample room', '', 'San fernando', 0),
(3, 3, 'sampleroom', '', 'pardo', 0),
(4, 3, 'sampleroom', '', 'pardo', 0),
(5, 3, 'sampleroom', '', 'pardo', 0),
(6, 3, 'Testroom', 'testdescription', 'testlocation', 0),
(7, 3, 'sampleroom', 'testdescription', 'pardo', 0),
(8, 3, 'Perfect Room for 21', 'Perfect room for 2 is a 2 size bed...', 'BienUnido', 0);

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
-- AUTO_INCREMENT for table `rooms`
--
ALTER TABLE `rooms`
  MODIFY `roomid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
