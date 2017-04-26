-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 26, 2017 at 09:35 AM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wecook`
--

-- --------------------------------------------------------

--
-- Table structure for table `colours`
--

DROP TABLE IF EXISTS `colours`;
CREATE TABLE `colours` (
  `id` int(11) NOT NULL,
  `colour_name` varchar(32) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `colours`
--

INSERT INTO `colours` (`id`, `colour_name`) VALUES
(1, 'blue'),
(2, 'red'),
(3, 'green'),
(4, 'orange'),
(5, 'yellow'),
(6, 'pink');

-- --------------------------------------------------------

--
-- Table structure for table `ingredients`
--

DROP TABLE IF EXISTS `ingredients`;
CREATE TABLE `ingredients` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `name` varchar(32) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ingredients`
--

INSERT INTO `ingredients` (`id`, `user_id`, `name`) VALUES
(1, 1, 'milk'),
(2, 1, 'flour'),
(3, 1, 'eggs'),
(4, 1, 'butter'),
(5, 2, 'ff'),
(6, 3, 'new'),
(7, 2, 'tester ingredient'),
(8, 1, 'gooo');

-- --------------------------------------------------------

--
-- Table structure for table `recipes`
--

DROP TABLE IF EXISTS `recipes`;
CREATE TABLE `recipes` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `description` varchar(255) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `recipes`
--

INSERT INTO `recipes` (`id`, `user_id`, `name`, `description`, `created`, `modified`) VALUES
(1, 1, 'The first recipe', 'This is the first recipe name', '2017-03-28 00:00:00', '2017-03-28 15:21:57'),
(2, 2, 'Recipe 2', 'Recipe 2 desc', '2017-03-29 08:52:25', '2017-03-29 08:52:25'),
(14, 1, 'Third Recipe Test', 'Description to the third recipe ', '2017-04-10 21:57:14', '2017-04-10 21:57:14');

-- --------------------------------------------------------

--
-- Table structure for table `recipes_ingredients`
--

DROP TABLE IF EXISTS `recipes_ingredients`;
CREATE TABLE `recipes_ingredients` (
  `id` int(11) NOT NULL,
  `recipe_id` int(11) NOT NULL,
  `ingredient_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `recipes_ingredients`
--

INSERT INTO `recipes_ingredients` (`id`, `recipe_id`, `ingredient_id`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 1, 3),
(4, 1, 4),
(5, 2, 1),
(6, 2, 3),
(7, 2, 4),
(26, 14, 2),
(25, 14, 1),
(27, 14, 3);

-- --------------------------------------------------------

--
-- Table structure for table `recipes_versions`
--

DROP TABLE IF EXISTS `recipes_versions`;
CREATE TABLE `recipes_versions` (
  `id` int(11) NOT NULL,
  `recipe_id` int(11) NOT NULL,
  `version_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `recipes_versions`
--

INSERT INTO `recipes_versions` (`id`, `recipe_id`, `version_id`) VALUES
(1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `steps`
--

DROP TABLE IF EXISTS `steps`;
CREATE TABLE `steps` (
  `id` int(11) NOT NULL,
  `recipe_id` int(11) NOT NULL,
  `description` varchar(144) NOT NULL,
  `position` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `steps`
--

INSERT INTO `steps` (`id`, `recipe_id`, `description`, `position`) VALUES
(1, 34, 'This is step 1 of the first recipe', 0),
(2, 1, 'This is step 2 of the first recipe', 2),
(3, 1, 'test', 1),
(4, 1, 'hello world', 3),
(5, 1, 'step 5', 5),
(22, 7, 'test desc 2 ', 0),
(15, 2, 'test2', 0),
(23, 7, 'test desc', 0),
(12, 5, '1', 0),
(21, 7, 'test desc ', 0),
(26, 8, 'testrr', 0),
(28, 14, 'Test Description ', 1),
(31, 14, 'step 2', 2),
(54, 32, 'step', 0),
(55, 61, 'c', 1),
(56, 61, 'd', 2),
(57, 62, 'step one ', 1),
(58, 62, 'step two', 2),
(59, 63, '3', 1),
(60, 63, '4', 2),
(61, 64, '3', 1),
(62, 64, '4', 2),
(63, 65, 'test', 1),
(64, 65, 'test', 2),
(65, 66, 'test', 1),
(66, 66, 'test', 2),
(67, 67, 'test', 1),
(68, 67, 'test', 2),
(69, 68, 'st1', 1),
(70, 68, 'st2', 2),
(71, 69, 'step 1', 1),
(72, 69, 'stpe 2', 2),
(73, 70, '3', 1),
(74, 70, 't', 2),
(75, 70, '3', 3),
(76, 70, '4', 4),
(77, 70, '5', 5),
(78, 71, 'fgfg', 1),
(79, 71, 'fgfg', 2),
(80, 71, '3', 3),
(81, 71, '4', 4),
(82, 71, '5', 5),
(83, 72, '1', 1),
(84, 72, '2', 2),
(85, 72, '3', 3),
(86, 72, '4', 4),
(87, 72, '5', 5),
(88, 73, '3', 1),
(89, 73, '4', 2),
(90, 73, '5', 3),
(91, 73, '6', 4),
(92, 73, '7', 5),
(93, 74, '1', 1),
(94, 74, '2', 2),
(95, 74, '3', 3),
(96, 74, '4', 4),
(97, 74, '5', 5),
(98, 75, '1', 1),
(99, 75, '2', 2),
(100, 75, '3', 3),
(101, 75, '4', 4),
(102, 75, '5', 5),
(103, 76, '1', 1),
(104, 76, '2', 2),
(105, 76, '3', 3),
(106, 76, '4', 4),
(107, 76, '5', 5),
(108, 77, '1', 1),
(109, 77, '2', 2),
(110, 77, '3', 3),
(111, 77, '4', 4),
(112, 77, '5', 5),
(113, 78, '1', 1),
(114, 78, '2', 2),
(115, 78, '3', 3),
(116, 78, '4', 4),
(117, 78, '5', 5),
(118, 79, '1', 1),
(119, 79, '2', 2),
(120, 79, '3', 3),
(121, 79, '4', 4),
(122, 79, '5', 5),
(123, 80, '1', 1),
(124, 80, '2', 2),
(125, 80, '3', 3),
(126, 80, '4', 4),
(127, 80, '5', 5),
(128, 81, 'q', 1),
(129, 81, '2', 2),
(130, 81, 'r', 3),
(131, 81, 'g', 4),
(132, 81, 'fc', 5),
(133, 82, 'g', 1),
(134, 82, 'f', 2),
(135, 82, 'f', 3),
(136, 82, 'd', 4),
(137, 82, 's', 5),
(138, 83, 'd', 1),
(139, 83, '3', 2),
(140, 83, 'r', 3),
(141, 83, '5', 4),
(142, 83, 'e', 5),
(143, 84, '1', 1),
(144, 84, '2', 2),
(145, 84, '3', 3),
(146, 84, '4', 4),
(147, 84, '5', 5),
(148, 85, '1', 1),
(149, 85, '2', 2),
(150, 85, '3', 3),
(151, 85, '4', 4),
(152, 85, '5', 5),
(153, 86, '1', 1),
(154, 86, '2', 2),
(155, 86, '3', 3),
(156, 86, '4', 4),
(157, 86, '5', 5),
(158, 87, '1', 1),
(159, 87, '2', 2),
(160, 87, '3', 3),
(161, 87, '4', 4),
(162, 87, '5', 5),
(163, 88, '1', 1),
(164, 88, '2', 2),
(165, 88, '3', 3),
(166, 88, '4', 4),
(167, 88, '5', 5),
(168, 89, '1', 1),
(169, 89, '2', 2),
(170, 89, '3', 3),
(171, 89, '4', 4),
(172, 89, '5', 5),
(173, 90, '1', 1),
(174, 90, '2', 2),
(175, 90, '3', 3),
(176, 90, '4', 4),
(177, 90, '5', 5),
(178, 91, '1', 1),
(179, 91, 'UU', 2),
(180, 91, 'H', 3),
(181, 91, 'I', 4),
(182, 91, 'H', 5),
(183, 92, '1', 1),
(184, 92, 'UU', 2),
(185, 92, 'H', 3),
(186, 92, 'I', 4),
(187, 92, 'H', 5),
(188, 93, '1', 1),
(189, 93, 'UU', 2),
(190, 93, 'H', 3),
(191, 93, 'I', 4),
(192, 93, 'H', 5);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(32) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `colour_id` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `colour_id`, `created`, `modified`) VALUES
(1, 'matt', 'mttlean@gmail.com', '$2y$10$Q65/gUFq8L49EEeFiipRneVePypfjNZfSdMnYCsMj0DsKHzTpdh4W', 1, '2017-03-19 22:51:01', '2017-03-19 22:53:10'),
(2, 'John', 'john@mail.com', '$2y$10$e2tfHLLVeU.m1oc38mXsJ.ciCbEQZPBdoxGA7hXztOMHK3PnFhi2q', 2, '2017-03-21 15:10:09', '2017-03-21 16:16:22'),
(3, 'Peter', 'peter@mail.com', '$2y$10$jwlvDYq1Si1S6nQqXBCXmefPfyPcUnrhFFxgXKEQJ7eC8b/sw.CP.', 1, '2017-03-21 17:57:53', '2017-03-21 17:57:53'),
(4, 'Dave', 'dave@mail.com', '$2y$10$W18YgQJt8ApVHaucaRiw9OV4Rgcgw4d.Ggl7nN15B6f5VJnwVWmYe', 2, '2017-03-21 18:24:25', '2017-03-21 18:24:25');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `colours`
--
ALTER TABLE `colours`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ingredients`
--
ALTER TABLE `ingredients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `recipes`
--
ALTER TABLE `recipes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `recipes_ingredients`
--
ALTER TABLE `recipes_ingredients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `recipes_versions`
--
ALTER TABLE `recipes_versions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `steps`
--
ALTER TABLE `steps`
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
-- AUTO_INCREMENT for table `colours`
--
ALTER TABLE `colours`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `ingredients`
--
ALTER TABLE `ingredients`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `recipes`
--
ALTER TABLE `recipes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=94;
--
-- AUTO_INCREMENT for table `recipes_ingredients`
--
ALTER TABLE `recipes_ingredients`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;
--
-- AUTO_INCREMENT for table `recipes_versions`
--
ALTER TABLE `recipes_versions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `steps`
--
ALTER TABLE `steps`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=193;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
