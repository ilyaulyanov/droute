-- phpMyAdmin SQL Dump
-- version 4.2.7
-- http://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: Mar 26, 2015 at 09:01 PM
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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category_name`) VALUES
(1, 'caves'),
(2, 'houses'),
(3, 'city'),
(4, 'scenic'),
(5, 'historical'),
(6, 'trending');

-- --------------------------------------------------------

--
-- Table structure for table `route_imgs`
--

CREATE TABLE IF NOT EXISTS `route_imgs` (
  `route_img_rid` int(11) NOT NULL,
  `img_link` varchar(300) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `route_imgs`
--

INSERT INTO `route_imgs` (`route_img_rid`, `img_link`) VALUES
(15, 'http://www.websitesvancouver.com/wp-content/uploads/2010/11/vancouver.jpg'),
(15, 'http://www.unityofvancouver.org/wp-content/uploads/2012/05/vancouver_skyline-wallpaper-1920x10802.jpg'),
(15, 'http://www.shangri-la.com/uploadedImages/Shangri-la_Hotels/Shangri-La_Hotel,_Vancouver/SLV-Bg-Shangri-La-Hotel-Vancouver-v4.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `route_media`
--

CREATE TABLE IF NOT EXISTS `route_media` (
  `rid` int(11) NOT NULL,
  `date_of_creation` date DEFAULT NULL,
  `info` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `camera` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `route_media`
--

INSERT INTO `route_media` (`rid`, `date_of_creation`, `info`, `camera`) VALUES
(11, '2015-03-11', 'Best Route ever!', 'Go Pro 1'),
(15, '2015-03-13', 'weekend flying around vancouver.', 'Go Pro HERO 3'),
(16, '2015-03-06', 'It was dark but it was a good run', 'Go Pro Hero 3'),
(17, '2015-03-01', 'Took this after dragon boat practice ', 'Go Pro Hero 3'),
(18, '2015-03-05', 'Last day of school!!!', 'Go Pro Hero 3');

-- --------------------------------------------------------

--
-- Table structure for table `routes`
--

CREATE TABLE IF NOT EXISTS `routes` (
`id` int(11) NOT NULL,
  `route_name` varchar(200) NOT NULL,
  `category` int(11) NOT NULL,
  `thumb` varchar(500) NOT NULL COMMENT 'thumbnail for the route',
  `created_date` date NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `routes`
--

INSERT INTO `routes` (`id`, `route_name`, `category`, `thumb`, `created_date`) VALUES
(4, 'Batman''s house', 1, 'http://images.forbes.com/media/2008/12/18/fictionalhouses_05.jpg', '2015-03-05'),
(10, 'Joker''s house', 2, 'https://lebbeuswoods.files.wordpress.com/2010/04/pubhousing-1c1.jpg', '2015-03-06'),
(11, 'My house', 2, 'http://www.theprovince.com/news/cms/binary/6099579.jpg?size=620x400s.jpeg', '2015-03-12'),
(12, 'Dog house', 2, 'http://www.wesellvancouver.ca/_media/Images/yaletown%20photo.jpg', '2015-03-01'),
(13, 'Rock bottom', 1, 'http://upload.wikimedia.org/wikipedia/commons/8/8c/Welcome_to_Surrey.jpg', '2015-03-04'),
(14, 'Robin''s house', 2, 'http://laubstudios.com/wordpress/wp-content/uploads/2012/11/laubstudios-02.jpg', '2015-03-08'),
(15, 'Vancouver', 3, 'http://images.hellobc.com/mgen/tbccw/production/TBCCWDisplay.ms?img=%2Fgetmedia%2F4149a8de-fc5d-4e54-b659-5282486fa973%2F2-200291313-001-Vancouver-skyline.jpg.aspx&tl=1&sID=1&c=public%2Cmax-age%3D172802%2Cpost-check%3D7200%2Cpre-check%3D43200&bid=4_5', '2015-03-11'),
(16, 'Night VanCity', 4, 'http://s3.amazonaws.com/production.reserve123/images/product/1922-3.jpg', '2015-03-06'),
(17, 'Science World', 5, 'http://moon.com/wp-content/uploads/2014/04/Vancouver_ScienceWorld_aerial_day_TedMcGrath.jpg', '2015-03-01'),
(18, 'BCIT', 6, 'https://i.vimeocdn.com/video/465336328_1280x720.jpg', '2015-03-05');

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

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
`id` int(11) NOT NULL,
  `email` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(300) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `email`, `password`, `name`) VALUES
(1, 'test@gmail.com', '1234', 'Gordon');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `id` (`id`), ADD UNIQUE KEY `id_2` (`id`);

--
-- Indexes for table `route_imgs`
--
ALTER TABLE `route_imgs`
 ADD KEY `route_img_rid` (`route_img_rid`);

--
-- Indexes for table `route_media`
--
ALTER TABLE `route_media`
 ADD UNIQUE KEY `rid` (`rid`);

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
-- Indexes for table `user`
--
ALTER TABLE `user`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `routes`
--
ALTER TABLE `routes`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `route_imgs`
--
ALTER TABLE `route_imgs`
ADD CONSTRAINT `route_imgs_ibfk_1` FOREIGN KEY (`route_img_rid`) REFERENCES `routes` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `route_media`
--
ALTER TABLE `route_media`
ADD CONSTRAINT `route_media_ibfk_1` FOREIGN KEY (`rid`) REFERENCES `routes` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

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
