-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Oct 30, 2018 at 01:39 PM
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
  `sub_category` varchar(255) NOT NULL,
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
  `creator_commision_percentage` varchar(255) NOT NULL,
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
-- Table structure for table `designs`
--

DROP TABLE IF EXISTS `designs`;
CREATE TABLE IF NOT EXISTS `designs` (
  `design_id` int(255) NOT NULL AUTO_INCREMENT,
  `designed_by` varchar(255) NOT NULL,
  `designed_image` longtext NOT NULL,
  `sub_category_id` varchar(255) NOT NULL,
  `status` enum('0','1') NOT NULL,
  PRIMARY KEY (`design_id`)
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
-- Table structure for table `orders`
--

DROP TABLE IF EXISTS `orders`;
CREATE TABLE IF NOT EXISTS `orders` (
  `order_id` int(255) NOT NULL AUTO_INCREMENT,
  `product_id` int(255) NOT NULL,
  `purchase_type` enum('dealer','customer') NOT NULL,
  `purchaser_id` varchar(255) NOT NULL,
  `supplier_id` varchar(255) NOT NULL,
  `creator_id` varchar(255) NOT NULL,
  `creator_amt` varchar(255) NOT NULL,
  `product_price` varchar(255) NOT NULL,
  `discount_percentage` varchar(255) NOT NULL,
  `discount_amt` varchar(255) NOT NULL,
  `site_commision_amt` varchar(255) NOT NULL,
  `order_amount` varchar(255) NOT NULL,
  `payment_status` enum('pending','inprogress','completed','dispute') NOT NULL,
  `order_status` enum('0','1') NOT NULL,
  `payment_method` enum('cod','online') NOT NULL,
  `delivery_id` varchar(255) NOT NULL,
  `delivery_tracking_code` varchar(255) NOT NULL,
  `delviery_status` longtext NOT NULL,
  `order_date` varchar(255) NOT NULL,
  `delivery_date` varchar(255) NOT NULL,
  PRIMARY KEY (`order_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `product_id` int(255) NOT NULL AUTO_INCREMENT,
  `product_category` varchar(255) NOT NULL,
  `product_subcategory` varchar(255) NOT NULL,
  `product_brand` varchar(255) NOT NULL,
  `product_model_no` varchar(255) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `product_title` varchar(255) NOT NULL,
  `product_desc` longtext NOT NULL,
  `product_sku` varchar(255) NOT NULL,
  `product_wholesale_price` varchar(255) NOT NULL,
  `product_retail_price` varchar(255) NOT NULL,
  `product_purchase_price` varchar(255) NOT NULL,
  `product_material_type` int(255) NOT NULL,
  `product_color` varchar(255) NOT NULL,
  `product_size` varchar(255) NOT NULL,
  `product_shapetype` varchar(255) NOT NULL,
  `product_quantity` varchar(255) NOT NULL,
  `min_order` varchar(255) NOT NULL,
  `product_dimension_length` varchar(255) NOT NULL,
  `product_dimension_width` varchar(255) NOT NULL,
  `product_dimension_height` varchar(255) NOT NULL,
  `product_weight` varchar(255) NOT NULL,
  `product_supplier_id` varchar(255) NOT NULL,
  `product_status` enum('0','1') NOT NULL,
  `added_date` varchar(255) NOT NULL,
  `updated_date` varchar(255) NOT NULL,
  PRIMARY KEY (`product_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `product_color`
--

DROP TABLE IF EXISTS `product_color`;
CREATE TABLE IF NOT EXISTS `product_color` (
  `product_color_id` int(255) NOT NULL AUTO_INCREMENT,
  `product_color_name` varchar(255) NOT NULL,
  `product_color_code` varchar(255) NOT NULL,
  `sub_category_id` varchar(255) NOT NULL,
  PRIMARY KEY (`product_color_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `product_image`
--

DROP TABLE IF EXISTS `product_image`;
CREATE TABLE IF NOT EXISTS `product_image` (
  `product_image_id` int(255) NOT NULL AUTO_INCREMENT,
  `product_id` varchar(255) NOT NULL,
  `product_image_path` longtext NOT NULL,
  `product_thumb_path` longtext NOT NULL,
  PRIMARY KEY (`product_image_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `product_material_type`
--

DROP TABLE IF EXISTS `product_material_type`;
CREATE TABLE IF NOT EXISTS `product_material_type` (
  `product_material_id` int(255) NOT NULL AUTO_INCREMENT,
  `product_material_type` varchar(255) NOT NULL,
  `sub_category_id` varchar(255) NOT NULL,
  PRIMARY KEY (`product_material_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `product_shapetype`
--

DROP TABLE IF EXISTS `product_shapetype`;
CREATE TABLE IF NOT EXISTS `product_shapetype` (
  `product_shape_id` int(255) NOT NULL AUTO_INCREMENT,
  `product_shapetype_name` varchar(255) NOT NULL,
  `sub_category_id` varchar(255) NOT NULL,
  PRIMARY KEY (`product_shape_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `product_size`
--

DROP TABLE IF EXISTS `product_size`;
CREATE TABLE IF NOT EXISTS `product_size` (
  `product_size_id` int(255) NOT NULL AUTO_INCREMENT,
  `product_size_name` varchar(255) NOT NULL,
  `sub_category_id` varchar(255) NOT NULL,
  `dimension` varchar(255) NOT NULL,
  PRIMARY KEY (`product_size_id`)
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
