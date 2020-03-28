-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 27, 2020 at 05:11 PM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `electro`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `admin_id` int(11) NOT NULL,
  `admin_email` varchar(30) NOT NULL,
  `admin_password` varchar(18) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_email`, `admin_password`) VALUES
(1, 'arkarhein@gmail.com', 'akh456');

-- --------------------------------------------------------

--
-- Table structure for table `customer_registration`
--

CREATE TABLE IF NOT EXISTS `customer_registration` (
  `customer_id` int(11) NOT NULL,
  `customer_name` varchar(30) NOT NULL,
  `address` varchar(50) NOT NULL,
  `phone_number` varchar(15) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer_registration`
--

INSERT INTO `customer_registration` (`customer_id`, `customer_name`, `address`, `phone_number`) VALUES
(5, 'Min Min', 'Yangon', '09-23895754'),
(7, 'aung ko ko', 'Pyin Ma Nar', '09-23895754'),
(10, 'Hh', 'Mandalay', '09-23895754'),
(11, 'Hello', 'Manadaly', '09-23895754'),
(12, 'aung ko ko', 'Magway', '09-287102575'),
(14, 'aung ko ko', 'Mandalay', '09-287102575'),
(16, 'Min Min', 'Magway', '09-287102575'),
(17, 'koko', 'Mandalay', '09-23895754'),
(18, 'Error', 'Error', '09-287102575'),
(19, 'Marlion', 'Chan Mya Thar Si', '09-287102575');

-- --------------------------------------------------------

--
-- Table structure for table `delivery_data`
--

CREATE TABLE IF NOT EXISTS `delivery_data` (
  `delivery_id` int(11) NOT NULL,
  `delivery_address` varchar(30) NOT NULL,
  `station` varchar(30) NOT NULL,
  `delivery_date` date NOT NULL,
  `order_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `delivery_data`
--

INSERT INTO `delivery_data` (`delivery_id`, `delivery_address`, `station`, `delivery_date`, `order_id`, `customer_id`) VALUES
(1, 'Mandalay', '', '2020-03-19', 1, 3),
(2, 'Yangon', '', '2020-03-10', 1, 2),
(3, 'Mandalay', '', '2020-03-25', 1, 1),
(5, 'Mandalay', '', '2020-03-24', 1, 4),
(7, 'Yangon', '', '2020-03-17', 1, 1),
(9, 'Mandalay', '', '2020-03-17', 1, 13),
(12, 'Magway', '', '2020-03-25', 0, 16),
(13, 'Error', 'Mandalay', '2020-03-25', 0, 18);

-- --------------------------------------------------------

--
-- Table structure for table `item`
--

CREATE TABLE IF NOT EXISTS `item` (
  `item_id` int(11) NOT NULL,
  `item_name` varchar(30) NOT NULL,
  `item_type_id` decimal(11,0) NOT NULL,
  `item_made_in` varchar(30) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `item`
--

INSERT INTO `item` (`item_id`, `item_name`, `item_type_id`, `item_made_in`) VALUES
(1, 'Superglue929 ', '2', 'Myanmar'),
(2, 'Pan ', '2', 'Myanmar'),
(3, '$name', '0', '$industry'),
(5, 'Vcumn Cleaner ', '0', 'Myanmar'),
(6, 'Vcumn Cleaner', '0', 'Myanmar');

-- --------------------------------------------------------

--
-- Table structure for table `item_category`
--

CREATE TABLE IF NOT EXISTS `item_category` (
  `item_category_id` int(11) NOT NULL,
  `item_type_id` int(11) NOT NULL,
  `item_unit` varchar(30) NOT NULL,
  `item_quantity` int(20) NOT NULL,
  `item_price` varchar(30) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `item_category`
--

INSERT INTO `item_category` (`item_category_id`, `item_type_id`, `item_unit`, `item_quantity`, `item_price`) VALUES
(1, 0, '$cat_unit', 0, '$cat_price'),
(2, 7, '1 box ', 25, '150');

-- --------------------------------------------------------

--
-- Table structure for table `item_type`
--

CREATE TABLE IF NOT EXISTS `item_type` (
  `item_type_id` int(11) NOT NULL,
  `item_type_name` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `item_type`
--

INSERT INTO `item_type` (`item_type_id`, `item_type_name`) VALUES
(1, 'bulb'),
(2, 'Kitchen Application'),
(7, 'Bottle');

-- --------------------------------------------------------

--
-- Table structure for table `order_item`
--

CREATE TABLE IF NOT EXISTS `order_item` (
  `order_id` int(11) NOT NULL,
  `order_date` date NOT NULL,
  `item_id` int(11) NOT NULL,
  `item_price` float NOT NULL,
  `quantity` int(11) NOT NULL,
  `total` float NOT NULL,
  `customer_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order_item`
--

INSERT INTO `order_item` (`order_id`, `order_date`, `item_id`, `item_price`, `quantity`, `total`, `customer_id`) VALUES
(1, '2020-03-09', 1, 300, 4, 1200, 10),
(2, '2020-03-11', 1, 350, 2, 700, 17);

-- --------------------------------------------------------

--
-- Table structure for table `takeaway`
--

CREATE TABLE IF NOT EXISTS `takeaway` (
  `takeaway_id` int(11) NOT NULL,
  `takeaway_date` date NOT NULL,
  `takeaway_time` varchar(20) NOT NULL,
  `customer_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `takeaway`
--

INSERT INTO `takeaway` (`takeaway_id`, `takeaway_date`, `takeaway_time`, `customer_id`) VALUES
(1, '2020-03-25', '', 17),
(2, '2020-03-30', '3', 19);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `customer_registration`
--
ALTER TABLE `customer_registration`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `delivery_data`
--
ALTER TABLE `delivery_data`
  ADD PRIMARY KEY (`delivery_id`);

--
-- Indexes for table `item`
--
ALTER TABLE `item`
  ADD PRIMARY KEY (`item_id`);

--
-- Indexes for table `item_category`
--
ALTER TABLE `item_category`
  ADD PRIMARY KEY (`item_category_id`);

--
-- Indexes for table `item_type`
--
ALTER TABLE `item_type`
  ADD PRIMARY KEY (`item_type_id`);

--
-- Indexes for table `order_item`
--
ALTER TABLE `order_item`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `takeaway`
--
ALTER TABLE `takeaway`
  ADD PRIMARY KEY (`takeaway_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `customer_registration`
--
ALTER TABLE `customer_registration`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `delivery_data`
--
ALTER TABLE `delivery_data`
  MODIFY `delivery_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `item`
--
ALTER TABLE `item`
  MODIFY `item_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `item_category`
--
ALTER TABLE `item_category`
  MODIFY `item_category_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `item_type`
--
ALTER TABLE `item_type`
  MODIFY `item_type_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `order_item`
--
ALTER TABLE `order_item`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `takeaway`
--
ALTER TABLE `takeaway`
  MODIFY `takeaway_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
