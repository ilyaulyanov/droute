-- phpMyAdmin SQL Dump
-- version 4.2.8
-- http://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: Feb 25, 2015 at 10:37 AM
-- Server version: 5.5.39
-- PHP Version: 5.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `droute`
--
DROP DATABASE `droute`;
CREATE DATABASE IF NOT EXISTS `droute` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `droute`;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
`id` int(11) NOT NULL,
  `category_name` varchar(200) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

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
  `category` int(11) NOT NULL,
  `thumb` varchar(500) NOT NULL COMMENT 'thumbnail for the route'
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `routes`
--

INSERT INTO `routes` (`id`, `route_name`, `category`, `thumb`) VALUES
(4, 'Batman''s house', 1, 'http://images.forbes.com/media/2008/12/18/fictionalhouses_05.jpg'),
(10, 'Joker''s house', 2, 'https://lebbeuswoods.files.wordpress.com/2010/04/pubhousing-1c1.jpg'),
(11, 'My house', 2, 'http://www.theprovince.com/news/cms/binary/6099579.jpg?size=620x400s.jpeg'),
(12, 'Dog house', 2, 'http://www.wesellvancouver.ca/_media/Images/yaletown%20photo.jpg'),
(13, 'Rock bottom', 1, 'http://upload.wikimedia.org/wikipedia/commons/8/8c/Welcome_to_Surrey.jpg'),
(14, 'Robin''s house', 2, 'http://laubstudios.com/wordpress/wp-content/uploads/2012/11/laubstudios-02.jpg');

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
