-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 11, 2018 at 12:14 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `phones`
--

-- --------------------------------------------------------

--
-- Table structure for table `phone`
--

CREATE TABLE `phone` (
  `id` int(255) NOT NULL,
  `phone_name` text NOT NULL,
  `phone_price` text NOT NULL,
  `phone_description` text NOT NULL,
  `phone_long_description` varchar(1000) NOT NULL,
  `phone_availability` text NOT NULL,
  `phone_brand` text NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `phone`
--

INSERT INTO `phone` (`id`, `phone_name`, `phone_price`, `phone_description`, `phone_long_description`, `phone_availability`, `phone_brand`, `image`) VALUES
(1, 'Asus Zenfone Max Pro M1', '15999', 'Asus Zenfone Max Pro M1 Description', '<h3 class=\"title\">Design</h3>\r\n			<ul class=\"review-points-list\">\r\n									<li class=\"positive\">Well built, with a good looking, ergonomic <b>design</b> - the minimalist body makes the display the center of attraction</li>\r\n											</ul>\r\n					<h3 class=\"title\">Display</h3>\r\n			<ul class=\"review-points-list\">\r\n									<li class=\"positive\">Modern, tall 18:9 <b>display</b>, with a great contrast ratio - comes across as more vibrant than the display on its top competitor, the Redmi Note 5 Pro</li>\r\n											</ul>\r\n					<h3 class=\"title\">Software</h3>\r\n			<ul class=\"review-points-list\">\r\n									<li class=\"positive\">Runs clean and simple stock Android <b>UI</b> - there’s hardly any bloatware save for a third-party payment app and Asus promises version updates less than two months after Google pushes it out (till Android Q)</li>\r\n											</ul>', 'Instock', 'Asus', 'zenfone-maxpro-m1.png'),
(2, 'iPhone 5s', '28000', 'Apple iPhone 5s', '<h3 class=\"title\">Design</h3> 			<ul class=\"review-points-list\"> 									<li class=\"positive\">Premium <b>build</b>, and classy design</li> 									<li class=\"positive\"><b>Compact</b> in-the-hand feel, easy to use with one hand</li> 									<li class=\"positive\">Touch ID <b>fingerprint</b> scanner provides a useful, convenient way to unlock the phone</li> 									<li class=\"positive\">Great on-screen keyboard</li> 											</ul> 					<h3 class=\"title\">Display</h3> 			<ul class=\"review-points-list\"> 									<li class=\"positive\">Beautiful display with incredibly accurate colors, excellent <b>brightness</b> output, and great viewing angles</li> 											</ul> 					<h3 class=\"title\">Software</h3> 			<ul class=\"review-points-list\"> 									<li class=\"positive\">Bundled iWork app suite</li> 											</ul>', 'Out Of Stock', 'Apple', 'iphone-5s.png'),
(3, 'OnePlus 2', '34999', 'Oneplus 2 Description', '<h3 class=\"title\">Design</h3> 			<ul class=\"review-points-list\"> 									<li class=\"positive\">Great <b>build</b> quality</li> 									<li class=\"positive\">Premium <b>design</b>, with magnesium alloy frame</li> 									<li class=\"positive\">Good ergonomics - the sandstone rear offers excellent <b>grip</b></li> 									<li class=\"positive\">Decent <b>fingerprint</b> scanner</li> 											</ul> 					<h3 class=\"title\">Display</h3> 			<ul class=\"review-points-list\"> 									<li class=\"positive\">Very good, sharp <b>display</b> - has very good viewing angles, natural color reproduction, and decent sunlight legibility</li> 											</ul>', 'Permanently Discontinued', 'OnePlus', 'oneplus.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `phone`
--
ALTER TABLE `phone`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `phone`
--
ALTER TABLE `phone`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
