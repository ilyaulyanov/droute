-- phpMyAdmin SQL Dump
-- version 4.2.7
-- http://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: Feb 19, 2015 at 05:53 AM
-- Server version: 5.6.17-debug-log
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `droute`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
`id` int(11) NOT NULL,
  `category_name` varchar(200) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category_name`) VALUES
(1, 'caves'),
(2, 'houses');

-- --------------------------------------------------------

--
-- Table structure for table `routes`
--

CREATE TABLE IF NOT EXISTS `routes` (
`id` int(11) NOT NULL,
  `route_name` varchar(200) NOT NULL,
  `category` int(11) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `routes`
--

INSERT INTO `routes` (`id`, `route_name`, `category`) VALUES
(4, 'Batman''s house', 1),
(10, 'Joker''s house', 2),
(11, 'My house', 2),
(12, 'Dog house', 2),
(13, 'Rock bottom', 1),
(14, 'Robin''s house', 2);

-- --------------------------------------------------------

--
-- Table structure for table `routes_staffpicks`
--

CREATE TABLE IF NOT EXISTS `routes_staffpicks` (
  `routes_id` int(11) NOT NULL,
  `add_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `routes_staffpicks`
--

INSERT INTO `routes_staffpicks` (`routes_id`, `add_date`) VALUES
(4, '2015-02-18'),
(10, '2015-02-18'),
(11, '2015-02-18'),
(12, '2015-02-18'),
(13, '2015-02-18'),
(14, '2015-02-18');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `id` (`id`), ADD UNIQUE KEY `id_2` (`id`);

--
-- Indexes for table `routes`
--
ALTER TABLE `routes`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `id` (`id`), ADD KEY `category` (`category`);

--
-- Indexes for table `routes_staffpicks`
--
ALTER TABLE `routes_staffpicks`
 ADD UNIQUE KEY `routes_id` (`routes_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `routes`
--
ALTER TABLE `routes`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=15;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `routes`
--
ALTER TABLE `routes`
ADD CONSTRAINT `routes_ibfk_2` FOREIGN KEY (`category`) REFERENCES `categories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `routes_staffpicks`
--
ALTER TABLE `routes_staffpicks`
ADD CONSTRAINT `routes_staffpicks_ibfk_1` FOREIGN KEY (`routes_id`) REFERENCES `routes` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
