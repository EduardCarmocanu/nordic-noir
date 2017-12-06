-- phpMyAdmin SQL Dump
-- version 4.7.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Dec 03, 2017 at 01:26 PM
-- Server version: 5.6.35
-- PHP Version: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `nordicNoir`
--

-- --------------------------------------------------------

--
-- Table structure for table `Roles`
--

CREATE TABLE `Roles` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `type` int(11) NOT NULL,
  `date_created` date NOT NULL,
  `date_altered` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `Tours`
--

CREATE TABLE `Tours` (
  `id` int(42) NOT NULL,
  `user_id` int(42) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `image_url` varchar(255) NOT NULL,
  `thumbnail_url` varchar(255) NOT NULL,
  `price` int(45) NOT NULL,
  `aditional_info` text NOT NULL,
  `state` int(45) NOT NULL,
  `date_created` date NOT NULL,
  `date_altered` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Tours`
--

INSERT INTO `Tours` (`id`, `user_id`, `title`, `content`, `image_url`, `thumbnail_url`, `price`, `aditional_info`, `state`, `date_created`, `date_altered`) VALUES
(24, 2, 'The Killing', 'On this tour you will see locations used in The Killing, hear stories about the TV series and how Copenhagen has been used as a background to crime.\r\nYou will see some dark corners you would normally not find on your own. You will hear the story behind the famous Faroese jumper and we will tell you about Danish/Swedish stereotypes. Please keep in mind that the tour does not take you near, on or over the bridge to malmø.\r\n\r\nAll our tours start from Vesterport station.\r\n\r\nThere are NO open tours at the moment but please do NOT hesitate to ask as we are gathering a small group of guests every Saturday.', '../assets/tours/C6QCdmPp3iabout-privatetours.jpg', '../assets/tours/MFlkaGc23Pabout-privatetours.jpg', 200, '*Tours are free for childeren under age 12\r\n*If you book before 14:00 pm Thursday, each person will receive 50 DKK discount.\r\n*You are welcome to book a tour at any time of the week but by maintaining it on Saturday, it will enable us to invite more guests and hopefully making it cheaper for you.\r\n*Note that there are no guarantee that other guests will show up. Therefore, you should be prepared to pay 800 DKK for the tour.', 0, '2017-11-30', '2017-12-03'),
(25, 2, 'NEW TOUR', '', '', '', 0, '', 0, '2017-11-30', '2017-11-30');

-- --------------------------------------------------------

--
-- Table structure for table `Users`
--

CREATE TABLE `Users` (
  `id` int(11) NOT NULL,
  `email` varchar(80) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `password` char(255) NOT NULL,
  `date_created` date NOT NULL,
  `date_altered` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Users`
--

INSERT INTO `Users` (`id`, `email`, `user_name`, `password`, `date_created`, `date_altered`) VALUES
(2, 'baldurargesveins@gmail.com', 'baldur', '$2y$10$qdCyp8D7k2xZJFzmndcLauzimuZbGcmfIoIrdLjh3yhu1gVorvFZ.', '2017-11-27', '2017-11-27');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Roles`
--
ALTER TABLE `Roles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `Tours`
--
ALTER TABLE `Tours`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `Users`
--
ALTER TABLE `Users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user_name` (`user_name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Roles`
--
ALTER TABLE `Roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `Tours`
--
ALTER TABLE `Tours`
  MODIFY `id` int(42) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `Users`
--
ALTER TABLE `Users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `Roles`
--
ALTER TABLE `Roles`
  ADD CONSTRAINT `roles_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `Users` (`id`);

--
-- Constraints for table `Tours`
--
ALTER TABLE `Tours`
  ADD CONSTRAINT `tours_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `Users` (`id`);
