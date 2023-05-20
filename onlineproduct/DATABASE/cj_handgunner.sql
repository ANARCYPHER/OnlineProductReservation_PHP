-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 02, 2011 at 06:02 AM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `cj_handgunner`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE IF NOT EXISTS `admin_login` (
  `admin_id` int(20) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(20) NOT NULL,
  `user_pass` varchar(20) NOT NULL,
  PRIMARY KEY (`admin_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`admin_id`, `user_name`, `user_pass`) VALUES
(1, 'cj', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE IF NOT EXISTS `cart` (
  `id` varchar(50) NOT NULL,
  `prod_id` int(11) NOT NULL,
  `qty` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--


-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `cat_id` int(11) NOT NULL AUTO_INCREMENT,
  `cat_name` varchar(30) NOT NULL,
  `desc` text NOT NULL,
  PRIMARY KEY (`cat_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cat_id`, `cat_name`, `desc`) VALUES
(1, 'Handgun', ' a firearm designed to be held and operated by one hand.'),
(2, 'Shotgun', ' a firearm that is usually designed to be fired from the shoulder, which uses the energy of a fixed shell to fire a number of small spherical pellets called shot, or a solid projectile called a slug.'),
(3, 'Ammunitions', ' a generic term derived from the French language la munition which embraced all material used for war (from the Latin munire, to provide), but which in time came to refer specifically to gunpowder and artillery.');

-- --------------------------------------------------------

--
-- Table structure for table `cat_prod`
--

CREATE TABLE IF NOT EXISTS `cat_prod` (
  `prod` int(11) NOT NULL,
  `cat` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cat_prod`
--

INSERT INTO `cat_prod` (`prod`, `cat`) VALUES
(1, 1),
(2, 1),
(3, 1),
(4, 1),
(5, 1),
(6, 1),
(7, 2),
(8, 2),
(9, 2),
(10, 2),
(11, 3),
(12, 3),
(13, 3),
(14, 3),
(15, 3),
(16, 3),
(42, 3),
(43, 1),
(44, 1),
(45, 1),
(46, 1),
(47, 1),
(48, 1),
(49, 1),
(50, 1),
(51, 1),
(52, 1),
(53, 1),
(54, 1),
(55, 1),
(56, 1),
(57, 1),
(58, 2),
(59, 3),
(60, 2),
(61, 2),
(62, 2),
(63, 2),
(64, 2),
(65, 2),
(66, 2),
(67, 2),
(68, 2),
(69, 2),
(70, 2),
(71, 2),
(72, 3),
(73, 3),
(74, 3),
(75, 1);

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE IF NOT EXISTS `customers` (
  `customer_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `address` varchar(30) NOT NULL,
  `email_add` varchar(30) NOT NULL,
  `paypal` int(50) NOT NULL,
  PRIMARY KEY (`customer_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=23 ;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`customer_id`, `name`, `address`, `email_add`, `paypal`) VALUES
(18, '123', '123213', '213213', 123),
(20, '123', '123132', '112313213', 123),
(21, '1234', '3456', '2345', 4111),
(22, 'arlene', 'talisay', 'lawmarlovino@yahoo.com', 375943866);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE IF NOT EXISTS `orders` (
  `order_id` int(11) NOT NULL AUTO_INCREMENT,
  `prod_id` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `dpayment` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `date` varchar(20) NOT NULL,
  `transaction_id` int(11) NOT NULL,
  `trans_query` varchar(60) NOT NULL,
  PRIMARY KEY (`order_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `prod_id`, `qty`, `user_id`, `dpayment`, `status`, `date`, `transaction_id`, `trans_query`) VALUES
(1, 1, 1, 45, 10000, 0, '2011-10-25 23:11:56', 1, 'c4ca4238a0b923820dcc509a6f75849b'),
(2, 2, 1, 45, 10000, 0, '2011-10-25 23:11:56', 1, 'c4ca4238a0b923820dcc509a6f75849b'),
(3, 2, 1, 45, 0, 1, '2011-10-27 20:53:09', 0, 'd41d8cd98f00b204e9800998ecf8427e'),
(4, 2, 1, 45, 0, 1, '2011-10-27 20:57:13', 0, 'd41d8cd98f00b204e9800998ecf8427e'),
(5, 9, 2, 45, 0, 1, '2011-10-27 20:57:54', 0, 'd41d8cd98f00b204e9800998ecf8427e'),
(6, 11, 1, 45, 0, 1, '2011-10-27 20:59:00', 2, 'c81e728d9d4c2f636f067f89cc14862c'),
(7, 3, 1, 43, 0, 1, '2011-10-27 21:05:34', 3, 'eccbc87e4b5ce2fe28308fd9f2a7baf3'),
(8, 4, 1, 43, 0, 1, '2011-10-27 21:05:34', 3, 'eccbc87e4b5ce2fe28308fd9f2a7baf3'),
(9, 2, 1, 43, 0, 1, '2011-10-27 21:05:34', 3, 'eccbc87e4b5ce2fe28308fd9f2a7baf3'),
(10, 1, 1, 43, 0, 1, '2011-10-27 21:05:34', 3, 'eccbc87e4b5ce2fe28308fd9f2a7baf3'),
(11, 7, 1, 43, 0, 1, '2011-10-27 21:05:46', 4, 'a87ff679a2f3e71d9181a67b7542122c'),
(12, 8, 1, 50, 0, 1, '2011-11-07 15:17:09', 5, 'e4da3b7fbbce2345d7772b0674a318d5'),
(13, 3, 1, 50, 0, 1, '2011-11-07 15:17:09', 5, 'e4da3b7fbbce2345d7772b0674a318d5'),
(14, 3, 9, 50, 0, 1, '2011-12-02 13:40:13', 6, '1679091c5a880faf6fb5e6087eb1b2dc'),
(15, 2, 1, 50, 0, 1, '2011-12-02 13:40:13', 6, '1679091c5a880faf6fb5e6087eb1b2dc'),
(16, 5, 1, 50, 0, 1, '2011-12-02 13:40:13', 6, '1679091c5a880faf6fb5e6087eb1b2dc');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `image` varchar(50) NOT NULL,
  `name` varchar(30) NOT NULL,
  `price` int(11) NOT NULL,
  `model` varchar(20) NOT NULL,
  `serial_no` int(11) NOT NULL,
  `desc` varchar(100) NOT NULL,
  PRIMARY KEY (`id`),
  FULLTEXT KEY `desc` (`desc`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=75 ;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `image`, `name`, `price`, `model`, `serial_no`, `desc`) VALUES
(2, '1911 G1 series cal 9mm & 45_copy.jpg', '1911 Practical Series cal 9mm', 23000, 'Handgun', 6948, ''),
(3, '1991 practical series cal  45.jpg', '1911 Practical Series cal 45', 29000, 'Handgun', 7898, ''),
(4, 'Rogue Pistol.jpg', 'Rogue Pistol', 27000, 'Handgun', 2687, ''),
(5, 'Steelmaster Pistol.jpg', 'Steelmaster Pistol', 29000, 'Handgun', 6793, ''),
(6, 'Revolvers.jpg', 'Revolvers', 19200, 'Handgun', 1575, ''),
(7, 'airguns.jpg', 'Airguns', 19200, 'Shotgun', 7763, ''),
(8, 'M1500 rifle.jpg', 'M1500 Rifle', 11500, 'Shotgun', 6500, ''),
(9, 'M20 P rifle.jpg', 'M20 P Rifle', 9950, 'Shotgun ', 9278, ''),
(10, 'M30BG shotgun.jpg', 'M30 BG ', 21500, 'Shotgun', 9458, ''),
(11, '357magfmj.jpg', '357 MAG FMJ', 35, 'Ammunition', 6927, ''),
(12, '38 SPL LWC.jpg', '38 SPL LWC', 20, 'Ammunition', 8256, ''),
(13, '380AUTO-FMJ.jpg', '380 AUTO FMJ', 30, 'Ammunition', 2835, ''),
(14, '40 SW TFMJ.JPG', '40 SW  TFMJ', 43, 'Ammunition', 1780, ''),
(15, '45 ACP FMJ.jpg', '45 ACP FMJ', 34, 'Ammunition', 4977, ''),
(16, '9mm fmj.jpg', '9mm FMJ', 26, 'Ammunition', 9543, ''),
(18, 'Rogue Pistol.jpg', '', 0, '', 0, ''),
(22, 'pic_3.jpg', '123123123', 31231231, '213213213', 2147483647, ''),
(50, '1911 G1 series cal 9mm & 45_copy.jpg', '2131321', 23123123, '21312321', 33212312, ''),
(49, '1911 G1 series cal 9mm & 45_copy.jpg', '2131321', 23123123, '21312321', 33212312, '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `fname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `address` varchar(50) NOT NULL,
  `city` varchar(20) NOT NULL,
  `province` varchar(20) NOT NULL,
  `country` varchar(20) NOT NULL,
  `code` int(11) NOT NULL,
  `tel_no` varchar(15) NOT NULL,
  `email` varchar(100) NOT NULL,
  `username` varchar(15) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=52 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `fname`, `lname`, `address`, `city`, `province`, `country`, `code`, `tel_no`, `email`, `username`, `password`) VALUES
(50, 'arlene', 'abibuag', 'ssdd', 'asdad', 'add', 'asad', 11, '13344', 'arlene@yahoo.com', 'asd', '5fa72358f0b4fb4f2c5d7de8c9a41846'),
(51, 'Fatima', 'Moreno', 'asad', 'asdsd', 'adsd', 'asdd', 445, '989867', 'timmy@yahoo.com', 'das', '8bbc2b904d0f41c51ae92c2268935b03'),
(43, 'janine', 'Fernandez', 'Lugway', 'Silay City', 'Negros Occ.', 'Phil', 6116, '535', 'janine_fernandez@rocketmail.com', 'j9', '918b81db5e91d031548b963c93845e5b'),
(44, 'Welmarie Ann ', 'Gamboa', 'dfggfhg', 'bvbhgjnh', 'gfryhtjuy', 'Canada', 6787, '3423654', 'welmarie', 'hhghg', '90b19838bb3f531cd5824fa815e94bdb');
