-- phpMyAdmin SQL Dump
-- version 4.7.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 17, 2017 at 11:49 AM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nordicnoirtours_nordic`
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
(33, 2, 'Borgen', 'If you are a fan of Birgitte Nyborg you don’t want to miss the Borgen tour. You will get to see Christiansborg and its beautiful surroundings, walk underneath the arches where the politicians can be seen plotting and hear how the show got inspired by Danish business and politics.\r\n', '../assets/tours/PqqHhAU8r4screencapture-sam-baldura-module2-calendar-html-1492964646320.png', '../assets/tours/Kd2datCkBOscreencapture-sam-baldura-module2-calendar-html-1492964659091.png', 800, 'All our tours start from Vesterport station.\r\n\r\nThere  are  NO  open tours at the  moment  but  please  do NOT hesitate  to  ask  as  we  are  gathering a small group of guests every Saturday.\r\n\r\n* Tours are free for children under age 12\r\n* If you book before 14:00 pm Thursday, each person will receive 50 DKK discount\r\n*You are welcome to book a tour at  any time of the week  but by  maintaining it on Saturday,   it will enable us  to invite more guests and hopefully making it cheaper for you.\r\n*Note  that  there is no  guarantee that other guests  will  show up.   Therefore,  you should be prepared to pay 800 DKK for the tour.\r\n', 1, '2017-12-07', '2017-12-16'),
(34, 2, 'The Killing', 'On this tour you will see locations used in The Killing, hear stories about the TV series and how Copenhagen has been used as a background to crime.\r\n\r\nYou will see some dark corners you would normally not find on your own. You will hear the story behind the famous Faroese jumper and we will tell you about Danish/Swedish stereotypes. Please keep in mind that the tour does not take you near, on or over the bridge to Malmö.', '../assets/tours/Dlb00fpzNBscreencapture-sam-baldura-module2-gallery-html-1492964511564.png', '../assets/tours/Xf5gOWy32Pscreencapture-sam-baldura-module2-about-html-1492964584539.png', 300, 'All our tours start from Vesterport station.\r\n\r\nThere  are  NO  open tours at the  moment  but  please  do NOT hesitate  to  ask  as  we  are  gathering a small group of guests every Saturday.\r\n\r\n* Tours are free for children under age 12\r\n* If you book before 14:00 pm Thursday, each person will receive 50 DKK discount\r\n*You are welcome to book a tour at  any time of the week  but by  maintaining it on Saturday,   it will enable us  to invite more guests and hopefully making it cheaper for you.\r\n*Note  that  there is no  guarantee that other guests  will  show up.   Therefore,  you should be prepared to pay 800 DKK for the tour.\r\n', 1, '2017-12-07', '2017-12-16'),
(35, 2, 'The Bridge', 'On this tour you will see locations used in The Killing, hear stories about the TV series and how Copenhagen has been used as a background to crime.\r\n\r\nYou will see some dark corners you would normally not find on your own. You will hear the story behind the famous Faroese jumper and we will tell you about Danish/Swedish stereotypes. Please keep in mind that the tour does not take you near, on or over the bridge to Malmö.\r\n', '../assets/tours/vZLnwbBhqTScreen Shot 2017-12-16 at 22.10.26.png', '../assets/tours/8ckMJRqHtZScreen Shot 2017-12-16 at 22.36.19.png', 100, 'All our tours start from Vesterport station.\r\n\r\nThere  are  NO  open tours at the  moment  but  please  do NOT hesitate  to  ask  as  we  are  gathering a small group of guests every Saturday.\r\n\r\n* Tours are free for children under age 12\r\n* If you book before 14:00 pm Thursday, each person will receive 50 DKK discount\r\n*You are welcome to book a tour at  any time of the week  but by  maintaining it on Saturday,   it will enable us  to invite more guests and hopefully making it cheaper for you.\r\n*Note  that  there is no  guarantee that other guests  will  show up.   Therefore,  you should be prepared to pay 800 DKK for the tour.\r\n', 1, '2017-12-07', '2017-12-16'),
(36, 2, 'Private Tour', 'If you are not able to join our semi-private tours (on Saturdays in Copenhagen or Sundays in Malmö), or if you would like to have a more personalized experience,  book a private walking tour!\r\n\r\nIt is possible to make a combination tour of different series and to adjust the length of the tour.\r\n\r\nPrivate tours can be organized any day of the week, depending on availability. Language options are English, Danish, French and Finnish\r\n\r\nPrices are depending on group size, tour length and other wishes.\r\n\r\nIf you would like to inquire about the options please contact us and specify the date, group size, the tour you are interested in and other wishes.', '../assets/tours/QIfzBuPAn5Screen Shot 2017-12-16 at 22.30.55.png', '../assets/tours/0gdN1fSkJdScreen Shot 2017-12-16 at 22.10.26.png', 800, 'All our tours start from Vesterport station.\r\n\r\nThere  are  NO  open tours at the  moment  but  please  do NOT hesitate  to  ask  as  we  are  gathering a small group of guests every Saturday.\r\n\r\n* Tours are free for children under age 12\r\n* If you book before 14:00 pm Thursday, each person will receive 50 DKK discount\r\n*You are welcome to book a tour at  any time of the week  but by  maintaining it on Saturday,   it will enable us  to invite more guests and hopefully making it cheaper for you.\r\n*Note  that  there is no  guarantee that other guests  will  show up.   Therefore,  you should be prepared to pay 800 DKK for the tour.\r\n', 1, '2017-12-12', '2017-12-16');

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
  MODIFY `id` int(42) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
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
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
