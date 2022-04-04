-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 04, 2022 at 10:54 AM
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
(8, 3, 'Perfect Room for 2', 'Perfect room for 2 is a 2 size bed...', 'BienUnido', 0);

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
  `priviledge` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `email`, `password`, `priviledge`) VALUES
(1, 'cris', 'co', 'crisco@gmail.com', '$2y$10$PpbvokexBjUTQD9V5n.cI.rlrVEVB1sddlxTyR7qJpM4qAtu3IuIe', 'Admin'),
(2, 'testuser', 'usertesting', 'testing123@gmail.com', '$2y$10$yIhSbFjUJjotsMGRafIuGu/4oXTLOAQjtih73Czyzgl6o.nMrW3Gm', 'Regular'),
(3, 'admin', 'test', 'admintest@gmail.com', '$2y$10$dUA3wpG529mk9.8UBAQWA.en762IizbxOR9nN/T7NYUPTsvSj/LKW', 'Admin');

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
  MODIFY `roomid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
