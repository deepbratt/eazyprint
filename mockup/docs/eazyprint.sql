-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Oct 27, 2018 at 10:32 AM
-- Server version: 5.7.19
-- PHP Version: 5.6.31

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
-- Table structure for table `brands`
--

DROP TABLE IF EXISTS `brands`;
CREATE TABLE IF NOT EXISTS `brands` (
  `brand_id` int(255) NOT NULL AUTO_INCREMENT,
  `brand_name` varchar(255) NOT NULL,
  `brand_code` varchar(255) NOT NULL,
  `brand_status` enum('0','1') NOT NULL,
  PRIMARY KEY (`brand_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

DROP TABLE IF EXISTS `category`;
CREATE TABLE IF NOT EXISTS `category` (
  `category_id` int(255) NOT NULL AUTO_INCREMENT,
  `category_name` varchar(255) NOT NULL,
  `category_status` enum('0','1') NOT NULL,
  PRIMARY KEY (`category_id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `category_name`, `category_status`) VALUES
(1, 'Accessories', '1'),
(2, 'Fashion', '1'),
(3, 'gifts', '1');

-- --------------------------------------------------------

--
-- Table structure for table `creators`
--

DROP TABLE IF EXISTS `creators`;
CREATE TABLE IF NOT EXISTS `creators` (
  `creator_id` int(255) NOT NULL AUTO_INCREMENT,
  `creator_fname` varchar(255) NOT NULL,
  `creator_lname` varchar(255) NOT NULL,
  `creator_email` varchar(255) NOT NULL,
  `creator_pass` varchar(255) NOT NULL,
  `creator_phone` varchar(255) NOT NULL,
  `creator_addr` longtext NOT NULL,
  `creator_pincode` varchar(255) NOT NULL,
  `creator_state` varchar(255) NOT NULL,
  `creator_city` varchar(255) NOT NULL,
  `creator_email_status` enum('0','1') NOT NULL,
  `creator_phone_status` enum('0','1') NOT NULL,
  `creator_status` enum('0','1') NOT NULL,
  `creator_date` varchar(255) NOT NULL,
  PRIMARY KEY (`creator_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

DROP TABLE IF EXISTS `customers`;
CREATE TABLE IF NOT EXISTS `customers` (
  `customer_id` int(255) NOT NULL AUTO_INCREMENT,
  `customer_fname` varchar(255) NOT NULL,
  `customer_lname` varchar(255) NOT NULL,
  `customer_email` varchar(255) NOT NULL,
  `customer_pass` varchar(255) NOT NULL,
  `customer_phone` varchar(255) NOT NULL,
  `customer_addr` longtext NOT NULL,
  `customer_pincode` varchar(255) NOT NULL,
  `customer_state` varchar(255) NOT NULL,
  `customer_city` varchar(255) NOT NULL,
  `customer_email_status` enum('0','1') NOT NULL,
  `customer_phone_status` enum('0','1') NOT NULL,
  `customer_status` enum('0','1') NOT NULL,
  `customer_date` varchar(255) NOT NULL,
  PRIMARY KEY (`customer_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `dealers`
--

DROP TABLE IF EXISTS `dealers`;
CREATE TABLE IF NOT EXISTS `dealers` (
  `dealers_id` int(255) NOT NULL AUTO_INCREMENT,
  `dealers_fname` varchar(255) NOT NULL,
  `dealers_lname` varchar(255) NOT NULL,
  `dealers_email` varchar(255) NOT NULL,
  `dealers_pass` varchar(255) NOT NULL,
  `dealers_phone` varchar(255) NOT NULL,
  `dealers_addr` longtext NOT NULL,
  `dealers_pincode` varchar(255) NOT NULL,
  `dealers_state` varchar(255) NOT NULL,
  `dealers_city` varchar(255) NOT NULL,
  `dealers_store_name` varchar(255) NOT NULL,
  `dealers_tradelicense_number` varchar(255) NOT NULL,
  `dealers_gst_number` varchar(255) NOT NULL,
  `dealers_email_status` enum('0','1') NOT NULL,
  `dealers_phone_status` enum('0','1') NOT NULL,
  `dealers_status` enum('0','1') NOT NULL,
  `dealers_date` varchar(255) NOT NULL,
  PRIMARY KEY (`dealers_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `eazycrew`
--

DROP TABLE IF EXISTS `eazycrew`;
CREATE TABLE IF NOT EXISTS `eazycrew` (
  `crew_id` int(255) NOT NULL AUTO_INCREMENT,
  `crew_fname` varchar(255) NOT NULL,
  `crew_lname` varchar(255) NOT NULL,
  `crew_email` varchar(255) NOT NULL,
  `crew_pass` varchar(255) NOT NULL,
  `crew_role` enum('admin','sales','operation','accounts') NOT NULL,
  `crew_status` enum('0','1') NOT NULL,
  `crew_date` varchar(255) NOT NULL,
  PRIMARY KEY (`crew_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sub_category`
--

DROP TABLE IF EXISTS `sub_category`;
CREATE TABLE IF NOT EXISTS `sub_category` (
  `sub_category_id` int(255) NOT NULL AUTO_INCREMENT,
  `parent_cat_id` varchar(255) NOT NULL,
  `sub_category_name` varchar(255) NOT NULL,
  `sub_category_status` enum('0','1') NOT NULL,
  PRIMARY KEY (`sub_category_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
