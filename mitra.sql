-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 21, 2022 at 07:45 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mitra`
--

-- --------------------------------------------------------

--
-- Table structure for table `chats`
--

CREATE TABLE `chats` (
  `id` int(20) NOT NULL,
  `outgoing_id` int(30) NOT NULL,
  `incoming_id` int(30) NOT NULL,
  `msg` varchar(255) NOT NULL,
  `msgTime` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `chats`
--

INSERT INTO `chats` (`id`, `outgoing_id`, `incoming_id`, `msg`, `msgTime`) VALUES
(25, 1125167053, 514880377, 'hi dinesh', '1652601123'),
(26, 514880377, 1125167053, 'hello mayur', '1652601144');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `msg` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `msg`) VALUES
(1, 'shubham jadhav', 'shubhamkjadhav12@gmail.com', 'hello'),
(2, 'rushi', 'shubhamkjadh1@gmail.com', 'ff ff fef ff '),
(3, 'rushi', 'shubhamkjadh1@gmail.com', 'ff ff fef ff '),
(4, 'rushi', 'shubhamkjadh1@gmail.com', 'ff ff fef ff '),
(5, 'rushi', 'shubhamkjadh1@gmail.com', 'ff ff fef ff '),
(6, 'rushi', 'shubhamkjadh1@gmail.com', 'ff ff fef ff '),
(7, 'gaurav', 'gaurav@mail.com', 'fdf fknlpoekom k jf f'),
(8, 'rahul', 'rahul@mail.com', 'c fkjfm ofmfnmfn fdnf jbff fm');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL,
  `user_name` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `feedBack_msg` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `user_name`, `email`, `feedBack_msg`) VALUES
(1, 'Shubham Jadhav', 'shubham@mail.com', 'hello');

-- --------------------------------------------------------

--
-- Table structure for table `groupmsg`
--

CREATE TABLE `groupmsg` (
  `gp_id` int(11) NOT NULL,
  `gpmsg_id` int(20) NOT NULL,
  `group_id` int(20) NOT NULL,
  `user_id` int(20) NOT NULL,
  `msg` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `groupmsg`
--

INSERT INTO `groupmsg` (`gp_id`, `gpmsg_id`, `group_id`, `user_id`, `msg`) VALUES
(13, 31198, 97502, 1125167053, 'hi '),
(14, 72485, 97502, 514880377, 'hello'),
(15, 23959, 97502, 514880377, 'hello'),
(16, 20479, 97502, 1613612615, 'hi'),
(17, 53373, 97502, 1613612615, 'ok'),
(18, 68796, 97502, 1613612615, 'ok bye'),
(19, 34882, 97502, 977546980, 'hello');

-- --------------------------------------------------------

--
-- Table structure for table `groups`
--

CREATE TABLE `groups` (
  `id` int(11) NOT NULL,
  `group_id` int(11) NOT NULL,
  `group_name` varchar(20) NOT NULL,
  `group_img` varchar(30) NOT NULL,
  `group_bio` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `groups`
--

INSERT INTO `groups` (`id`, `group_id`, `group_name`, `group_img`, `group_bio`) VALUES
(17, 97502, 'yaari', '16526011833776933.jpg', 'yaari mayur dinesh');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(10) NOT NULL,
  `unique_id` int(10) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `imgs` varchar(50) NOT NULL,
  `passwords` varchar(16) NOT NULL,
  `bio` varchar(255) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `unique_id`, `name`, `email`, `imgs`, `passwords`, `bio`, `status`) VALUES
(15, 1313132194, 'Rishi Mangate', 'rishimangate@gmail.com', '1652599713Rushi pass.jpg', '12345', 'This is your bio you can edit it', 'offline'),
(16, 514880377, 'dinesh dhupe', 'dineshdhupe1234@gmail.com', '16526009483776924.png', '12345', 'This is your bio you can edit it', 'Active now'),
(17, 1125167053, 'mnayur bholane', 'mayurbholane2001@gmail.com', '16526010841729740.jpg', '12345', 'This is your bio you can edit it', 'Active now'),
(18, 860678792, 'Shubham Jadhav', 'shubham@mail.com', '16526274765555.jpg', '12345', 'This is your bio you can edit it', 'Active now'),
(19, 1613612615, 'Shubham', 'Subham21@mail.com', '16526276483776923.jpg', 'shubham@1244', 'This is your bio you can edit it', 'Active now'),
(20, 1538329916, 'rishab pant', 'rishab@mail.com', '1652809584Rushi pass.jpg', '12345', 'This is your bio you can edit it', 'Active now'),
(21, 977546980, 'Shubham Jadhav', 'shubham1244@mail.com', '16530639405555.jpg', '12345', 'This is your bio you can edit it', 'offline');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chats`
--
ALTER TABLE `chats`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `groupmsg`
--
ALTER TABLE `groupmsg`
  ADD PRIMARY KEY (`gp_id`);

--
-- Indexes for table `groups`
--
ALTER TABLE `groups`
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
-- AUTO_INCREMENT for table `chats`
--
ALTER TABLE `chats`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `groupmsg`
--
ALTER TABLE `groupmsg`
  MODIFY `gp_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `groups`
--
ALTER TABLE `groups`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
