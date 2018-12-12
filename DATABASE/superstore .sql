-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 01, 2017 at 09:11 AM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `superstore`
--

-- --------------------------------------------------------

--
-- Table structure for table `address`
--

CREATE TABLE `address` (
  `addr_id` int(11) NOT NULL,
  `cust_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `admin_name` varchar(128) NOT NULL,
  `admin_user` varchar(128) NOT NULL,
  `admin_pass` varchar(128) NOT NULL,
  `admin_status` enum('Active','Inactive') NOT NULL DEFAULT 'Active',
  `admin_type` enum('Superadmin','Operator','Sales') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `admin_name`, `admin_user`, `admin_pass`, `admin_status`, `admin_type`) VALUES
(6, 'Nirjhor Anjum', 'nirjhor@piit.us', 'e99a18c428cb38d5f260853678922e03', 'Active', 'Superadmin'),
(11, 'Shahnawaz', 'shahnawz@gmail.com', 'e99a18c428cb38d5f260853678922e03', 'Active', 'Sales'),
(12, 'Palash Howlader', 'palashhowlader20@gmail.com', '4fb2db11d8a2687bf28a763c5ad1f320', 'Active', 'Operator'),
(13, 'Jisan Ahmed', 'jisan@gmail.com', 'e99a18c428cb38d5f260853678922e03', 'Active', 'Sales'),
(15, 'NIrjhor Anujum', 'nirjhor@gmail.com', 'e99a18c428cb38d5f260853678922e03', 'Active', 'Operator');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `cat_id` int(11) NOT NULL,
  `cat_name` varchar(32) NOT NULL,
  `cat_status` enum('Active','Inactive') NOT NULL DEFAULT 'Active',
  `cat_serial` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cat_id`, `cat_name`, `cat_status`, `cat_serial`) VALUES
(4, 'Women', 'Active', 0),
(5, 'Kid', 'Active', 2),
(6, 'Men', 'Active', 3),
(7, 'Sports ', 'Active', 5),
(8, 'Footwear', 'Active', 6),
(9, 'Computer', 'Active', 1);

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `cust_id` int(11) NOT NULL,
  `cust_name` varchar(128) NOT NULL,
  `cust_email` varchar(64) NOT NULL,
  `cust_pass` varchar(128) NOT NULL,
  `cust_phone` varchar(16) NOT NULL,
  `cust_gender` enum('Male','Female') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`cust_id`, `cust_name`, `cust_email`, `cust_pass`, `cust_phone`, `cust_gender`) VALUES
(2, 'Md. Shahnawaz Hossain', 'shahnawaz@aiub.edu', 'e99a18c428cb38d5f260853678922e03', '8801728283333', 'Male'),
(3, 'Sohana  Islam', 'sohana20@gmail.com', 'e99a18c428cb38d5f260853678922e03', '8801748288736', 'Female'),
(4, 'Rahim', 'rahim@gmail.com', 'e99a18c428cb38d5f260853678922e03', '017123456', 'Male');

-- --------------------------------------------------------

--
-- Table structure for table `invoice`
--

CREATE TABLE `invoice` (
  `inv_id` bigint(20) NOT NULL,
  `cust_id` int(11) NOT NULL,
  `inv_total` double NOT NULL,
  `inv_date` datetime NOT NULL,
  `inv_status` enum('Pending','Processing','Completed','Cancelled') NOT NULL,
  `trx_date` datetime NOT NULL,
  `trx_status` enum('Pending','Success','Cancelled','Failed','Fraud') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `invoice`
--

INSERT INTO `invoice` (`inv_id`, `cust_id`, `inv_total`, `inv_date`, `inv_status`, `trx_date`, `trx_status`) VALUES
(2, 3, 40000, '2017-11-22 08:10:45', 'Pending', '2017-11-22 08:10:45', 'Pending'),
(3, 2, 1000, '2017-11-22 08:20:45', 'Pending', '2017-11-22 08:20:45', 'Pending');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `ord_id` bigint(20) NOT NULL,
  `inv_id` bigint(20) NOT NULL,
  `cust_id` int(11) NOT NULL,
  `prod_id` int(11) NOT NULL,
  `prod_price` double NOT NULL,
  `prod_qty` int(11) NOT NULL,
  `ord_subtotal` double NOT NULL,
  `ord_date` datetime NOT NULL,
  `ord_status` enum('Pending','Accepted','Cancelled') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`ord_id`, `inv_id`, `cust_id`, `prod_id`, `prod_price`, `prod_qty`, `ord_subtotal`, `ord_date`, `ord_status`) VALUES
(3, 2, 3, 19, 20000, 2, 40000, '2017-11-22 09:30:22', 'Pending');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `prod_id` int(11) NOT NULL,
  `prod_name` varchar(128) NOT NULL,
  `prod_cat_id` int(11) NOT NULL,
  `prod_subcat_id` int(11) NOT NULL,
  `prod_price` double NOT NULL,
  `prod_short_desc` text NOT NULL,
  `prod_details` text NOT NULL,
  `prod_status` enum('Active','Inactive') NOT NULL DEFAULT 'Active',
  `prod_stock` int(11) NOT NULL,
  `prod_is_featured` enum('Yes','No') NOT NULL,
  `prod_is_latest` enum('Yes','No') NOT NULL,
  `prod_pic_1` text,
  `prod_pic_2` text,
  `prod_pic_3` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`prod_id`, `prod_name`, `prod_cat_id`, `prod_subcat_id`, `prod_price`, `prod_short_desc`, `prod_details`, `prod_status`, `prod_stock`, `prod_is_featured`, `prod_is_latest`, `prod_pic_1`, `prod_pic_2`, `prod_pic_3`) VALUES
(26, 'Dells', 9, 14, 25000, '<div>&nbsp;</div>\r\n<div>Lorem ipsum dolor sit amet, consectetur adipisicing elit Lorem ipsum dolor sit amet, consectetur adipisicing elit Lorem ipsum dolor sit amet, consectetur adipisicing elit</div>\r\n<div>&nbsp;</div>\r\n<div>Lorem ipsum dolor sit amet, consectetur adipisicing elit Lorem ipsum dolor sit amet, consectetur adipisicing elit Lorem ipsum dolor sit amet, consectetur adipisicing elit</div>', '<div>&nbsp;</div>\r\n<div>Lorem ipsum dolor sit amet, consectetur adipisicing elit Lorem ipsum dolor sit amet, consectetur adipisicing elit Lorem ipsum dolor sit amet, consectetur adipisicing elit</div>\r\n<div>&nbsp;</div>\r\n<div>Lorem ipsum dolor sit amet, consectetur adipisicing elit Lorem ipsum dolor sit amet, consectetur adipisicing elit Lorem ipsum dolor sit amet, consectetur adipisicing elit</div>', 'Active', 10, 'Yes', 'Yes', 'PROIMG1_20171124164437100000_15-Now-Tshirt-product.jpg', 'PROIMG2_20171124164455100000_project-sneakers2-1140x480.jpg', 'PROIMG3_20171124164541100000_15-Now-Tshirt-product.jpg'),
(31, 'Shirt', 6, 13, 500, '<div>Lorem ipsum dolor sit amet, consectetur adipisicing elit Lorem ipsum dolor sit amet, consectetur adipisicing elit Lorem ipsum dolor sit amet, consectetur adipisicing elit</div><div><br></div><div>Lorem ipsum dolor sit amet, consectetur adipisicing elit Lorem ipsum dolor sit amet, consectetur adipisicing elit Lorem ipsum dolor sit amet, consectetur adipisicing elit</div>', '<div>Lorem ipsum dolor sit amet, consectetur adipisicing elit Lorem ipsum dolor sit amet, consectetur adipisicing elit Lorem ipsum dolor sit amet, consectetur adipisicing elit</div><div><br></div><div>Lorem ipsum dolor sit amet, consectetur adipisicing elit Lorem ipsum dolor sit amet, consectetur adipisicing elit Lorem ipsum dolor sit amet, consectetur adipisicing elit</div><div><br></div><div>Lorem ipsum dolor sit amet, consectetur adipisicing elit Lorem ipsum dolor sit amet, consectetur adipisicing elit Lorem ipsum dolor sit amet, consectetur adipisicing elit</div>', 'Active', 50, 'Yes', 'Yes', 'PROIMG1_23255020171123011836download.jpg', 'PROIMG2_49749620171123011836download.jpg', 'PROIMG3_77163820171123011836download.jpg'),
(33, 'Jeans Pant', 6, 9, 700, '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit Lorem ipsum dolor sit amet, consectetur adipisicing elit Lorem ipsum dolor sit amet, consectetur adipisicing elit<br /><br />Lorem ipsum dolor sit amet, consectetur adipisicing elit Lorem ipsum dolor sit amet, consectetur adipisicing elit Lorem ipsum dolor sit amet, consectetur adipisicing elit<br /><br />Lorem ipsum dolor sit amet, consectetur adipisicing elit Lorem ipsum dolor sit amet, consectetur adipisicing elit Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit Lorem ipsum dolor sit amet, consectetur adipisicing elit Lorem ipsum dolor sit amet, consectetur adipisicing elit<br /><br />Lorem ipsum dolor sit amet, consectetur adipisicing elit Lorem ipsum dolor sit amet, consectetur adipisicing elit Lorem ipsum dolor sit amet, consectetur adipisicing elit<br /><br />Lorem ipsum dolor sit amet, consectetur adipisicing elit Lorem ipsum dolor sit amet, consectetur adipisicing elit Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>', 'Active', 25, 'Yes', 'Yes', 'PROIMG1_16175420171123141050download (1).jpg', 'PROIMG2_47098820171123141050download (1).jpg', 'PROIMG3_72135520171123141050download (1).jpg'),
(34, 'HP Core i 5', 9, 14, 25000, '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit Lorem ipsum dolor sit amet, consectetur adipisicing elit Lorem ipsum dolor sit amet, consectetur adipisicing elit<br /><br />Lorem ipsum dolor sit amet, consectetur adipisicing elit Lorem ipsum dolor sit amet, consectetur adipisicing elit Lorem ipsum dolor sit amet, consectetur adipisicing elit<br /><br />Lorem ipsum dolor sit amet, consectetur adipisicing elit Lorem ipsum dolor sit amet, consectetur adipisicing elit Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit Lorem ipsum dolor sit amet, consectetur adipisicing elit Lorem ipsum dolor sit amet, consectetur adipisicing elit<br /><br />Lorem ipsum dolor sit amet, consectetur adipisicing elit Lorem ipsum dolor sit amet, consectetur adipisicing elit Lorem ipsum dolor sit amet, consectetur adipisicing elit<br /><br />Lorem ipsum dolor sit amet, consectetur adipisicing elit Lorem ipsum dolor sit amet, consectetur adipisicing elit Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>', 'Active', 10, 'Yes', 'Yes', 'PROIMG1_42734320171123141230download (2).jpg', 'PROIMG2_98743520171123141230download (2).jpg', 'PROIMG3_20213320171123141230download (2).jpg');

-- --------------------------------------------------------

--
-- Table structure for table `shopcart`
--

CREATE TABLE `shopcart` (
  `cart_id` int(11) NOT NULL,
  `cust_id` int(11) NOT NULL,
  `temp_cust_id` varchar(128) DEFAULT NULL,
  `prod_id` int(11) NOT NULL,
  `prod_qty` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `shopcart`
--

INSERT INTO `shopcart` (`cart_id`, `cust_id`, `temp_cust_id`, `prod_id`, `prod_qty`) VALUES
(1, 2, NULL, 33, 3),
(2, 2, NULL, 26, 2),
(3, 2, NULL, 34, 3);

-- --------------------------------------------------------

--
-- Table structure for table `slides`
--

CREATE TABLE `slides` (
  `slide_id` int(11) NOT NULL,
  `slide_image` text NOT NULL,
  `slide_status` enum('Active','Inactive') NOT NULL,
  `slide_serial` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `subcategory`
--

CREATE TABLE `subcategory` (
  `subcat_id` int(11) NOT NULL,
  `cat_id` int(11) NOT NULL,
  `subcat_name` varchar(128) NOT NULL,
  `subcat_status` enum('Active','Inactive') NOT NULL DEFAULT 'Active',
  `subcat_serial` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `subcategory`
--

INSERT INTO `subcategory` (`subcat_id`, `cat_id`, `subcat_name`, `subcat_status`, `subcat_serial`) VALUES
(3, 4, 'Sharee', 'Active', 1),
(9, 6, 'Jeans Pant', 'Active', 3),
(10, 7, 'Football', 'Active', 5),
(11, 8, 'Shoe', 'Active', 4),
(12, 5, 'Baby Pant', 'Active', 10),
(13, 6, 'Shirt', 'Active', 5),
(14, 9, 'Laptop', 'Active', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `address`
--
ALTER TABLE `address`
  ADD PRIMARY KEY (`addr_id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admin_user` (`admin_user`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`cat_id`),
  ADD UNIQUE KEY `cat_name` (`cat_name`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`cust_id`);

--
-- Indexes for table `invoice`
--
ALTER TABLE `invoice`
  ADD PRIMARY KEY (`inv_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`ord_id`),
  ADD KEY `inv_id` (`inv_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`prod_id`);

--
-- Indexes for table `shopcart`
--
ALTER TABLE `shopcart`
  ADD PRIMARY KEY (`cart_id`),
  ADD KEY `cust_id` (`cust_id`),
  ADD KEY `prod_id` (`prod_id`);

--
-- Indexes for table `slides`
--
ALTER TABLE `slides`
  ADD PRIMARY KEY (`slide_id`);

--
-- Indexes for table `subcategory`
--
ALTER TABLE `subcategory`
  ADD PRIMARY KEY (`subcat_id`),
  ADD KEY `cat_id` (`cat_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `address`
--
ALTER TABLE `address`
  MODIFY `addr_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `cust_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `invoice`
--
ALTER TABLE `invoice`
  MODIFY `inv_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `ord_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `prod_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
--
-- AUTO_INCREMENT for table `shopcart`
--
ALTER TABLE `shopcart`
  MODIFY `cart_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `slides`
--
ALTER TABLE `slides`
  MODIFY `slide_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `subcategory`
--
ALTER TABLE `subcategory`
  MODIFY `subcat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`inv_id`) REFERENCES `invoice` (`inv_id`) ON UPDATE CASCADE;

--
-- Constraints for table `shopcart`
--
ALTER TABLE `shopcart`
  ADD CONSTRAINT `shopcart_ibfk_1` FOREIGN KEY (`cust_id`) REFERENCES `customer` (`cust_id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `shopcart_ibfk_2` FOREIGN KEY (`prod_id`) REFERENCES `product` (`prod_id`) ON UPDATE CASCADE;

--
-- Constraints for table `subcategory`
--
ALTER TABLE `subcategory`
  ADD CONSTRAINT `subcategory_ibfk_1` FOREIGN KEY (`cat_id`) REFERENCES `category` (`cat_id`) ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
