-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Sep 15, 2018 at 10:23 AM
-- Server version: 5.7.21
-- PHP Version: 5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `eazyprint`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `admin_id` int(255) NOT NULL AUTO_INCREMENT,
  `user_type` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  PRIMARY KEY (`admin_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `user_type`, `name`, `email`, `password`, `date`, `status`) VALUES
(1, 'admin', 'Eazyprint', 'eazyprint21@gmail.com', 'Samadder5#', '1536138353', '1');

-- --------------------------------------------------------

--
-- Table structure for table `brand`
--

DROP TABLE IF EXISTS `brand`;
CREATE TABLE IF NOT EXISTS `brand` (
  `brand_id` int(255) NOT NULL AUTO_INCREMENT,
  `brand_name` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  PRIMARY KEY (`brand_id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `brand`
--

INSERT INTO `brand` (`brand_id`, `brand_name`, `date`, `status`) VALUES
(1, 'Samsung', '1536230877', '1'),
(2, 'Nokia', '1536230865', '1'),
(3, 'Apple', '1536230853', '1'),
(4, 'Lenovo', '1536230841', '1'),
(5, 'Xiaomi', '1536232764', '1'),
(6, 'One Plus', '1536230908', '1');

-- --------------------------------------------------------

--
-- Table structure for table `frontend_image`
--

DROP TABLE IF EXISTS `frontend_image`;
CREATE TABLE IF NOT EXISTS `frontend_image` (
  `frontend_id` int(255) NOT NULL AUTO_INCREMENT,
  `frontend_image` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  PRIMARY KEY (`frontend_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `model`
--

DROP TABLE IF EXISTS `model`;
CREATE TABLE IF NOT EXISTS `model` (
  `model_id` int(255) NOT NULL AUTO_INCREMENT,
  `brand_id` varchar(255) NOT NULL,
  `model_number` varchar(255) NOT NULL,
  `frame_image` varchar(255) NOT NULL,
  `frame_dimension` varchar(255) NOT NULL,
  `cost_price` varchar(255) NOT NULL,
  `no_pieces` varchar(255) NOT NULL,
  `cover_type` varchar(255) NOT NULL,
  `colour` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  PRIMARY KEY (`model_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `model`
--

INSERT INTO `model` (`model_id`, `brand_id`, `model_number`, `frame_image`, `frame_dimension`, `cost_price`, `no_pieces`, `cover_type`, `colour`, `date`, `status`) VALUES
(1, '2', 'Nokia 6.1 plus', '', '', '', '', '', '', '', '1');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

DROP TABLE IF EXISTS `orders`;
CREATE TABLE IF NOT EXISTS `orders` (
  `order_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` varchar(255) NOT NULL,
  `type` enum('vendor','direct') NOT NULL,
  `cus_name` varchar(255) NOT NULL,
  `cus_email` varchar(255) NOT NULL,
  `cus_phone` varchar(255) NOT NULL,
  `brand_id` varchar(255) NOT NULL,
  `model_id` varchar(255) NOT NULL,
  `custom_image` varchar(255) NOT NULL,
  `billing_address` longtext NOT NULL,
  `shipping_address` longtext NOT NULL,
  `date` varchar(255) NOT NULL,
  `delivery_date` varchar(255) NOT NULL,
  `order_status` varchar(255) NOT NULL,
  PRIMARY KEY (`order_id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `user_id`, `type`, `cus_name`, `cus_email`, `cus_phone`, `brand_id`, `model_id`, `custom_image`, `billing_address`, `shipping_address`, `date`, `delivery_date`, `order_status`) VALUES
(1, '1', 'vendor', 'Kiran bhagotra', 'kiran@gmail.com', '0123456789', '2', '1', '8950abstract4.png', '14 no railgate ', 'Belfast,Northern Ireland', '1536757984', '1536847356', 'refund'),
(3, '1', 'vendor', 'Nick Brown', 'nick@gmail.com', '7894561230', '2', '1', '47124bg-01.jpg', '14 no railgate ', 'United Kingdom', '1537005625', '1537092519', 'complete');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

DROP TABLE IF EXISTS `product`;
CREATE TABLE IF NOT EXISTS `product` (
  `product_id` int(11) NOT NULL AUTO_INCREMENT,
  `order_id` varchar(255) NOT NULL,
  `order_type` enum('custom','general') NOT NULL,
  `brand_id` varchar(255) NOT NULL,
  `model_id` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  PRIMARY KEY (`product_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `order_id`, `order_type`, `brand_id`, `model_id`, `image`, `date`, `status`) VALUES
(1, '1', 'custom', '2', '1', '8950abstract4.png', '1536757984', ''),
(2, '3', 'custom', '2', '1', '47124bg-01.jpg', '1537005625', 'complete');

-- --------------------------------------------------------

--
-- Table structure for table `refund`
--

DROP TABLE IF EXISTS `refund`;
CREATE TABLE IF NOT EXISTS `refund` (
  `refund_id` int(255) NOT NULL AUTO_INCREMENT,
  `order_id` varchar(255) NOT NULL,
  `user_type` enum('vendor','direct') NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `refund_type` enum('refund','replace') NOT NULL,
  `reason` varchar(255) NOT NULL,
  `explain_reason` varchar(255) NOT NULL,
  `refund_status` enum('pending','complete') NOT NULL,
  `initate_date` varchar(255) NOT NULL,
  `resolving_date` varchar(255) NOT NULL,
  PRIMARY KEY (`refund_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `refund`
--

INSERT INTO `refund` (`refund_id`, `order_id`, `user_type`, `user_id`, `refund_type`, `reason`, `explain_reason`, `refund_status`, `initate_date`, `resolving_date`) VALUES
(1, '1', 'vendor', '1', 'refund', 'printing', 'Printing quality not good', 'pending', '1536999326', '');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `user_id` int(255) NOT NULL AUTO_INCREMENT,
  `user_type` enum('vendor','direct') NOT NULL,
  `vendor_id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `email_id` varchar(255) NOT NULL,
  `shipping_address` longtext NOT NULL,
  `billing_address` longtext NOT NULL,
  `date` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `vendor`
--

DROP TABLE IF EXISTS `vendor`;
CREATE TABLE IF NOT EXISTS `vendor` (
  `user_id` int(255) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `store_name` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `email_id` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `vendor_image` varchar(255) NOT NULL,
  `store_address` longtext NOT NULL,
  `home_address` longtext NOT NULL,
  `gst` varchar(255) NOT NULL,
  `trade_license` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vendor`
--

INSERT INTO `vendor` (`user_id`, `name`, `store_name`, `phone`, `email_id`, `password`, `vendor_image`, `store_address`, `home_address`, `gst`, `trade_license`, `date`, `status`) VALUES
(1, 'Shuvradeb Mondal', 'Deep Kumar Impex', '9876543210', 'deepbratt@gmail.com', 'aaaa', 'dp.jpg', '14 no railgate ', 'a road', '', '', '1536655276', 'Active');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
