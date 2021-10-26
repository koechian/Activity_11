-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 25, 2021 at 11:34 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.3.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecommerce`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_apiproductpaths`
--

CREATE TABLE `tbl_apiproductpaths` (
  `apiproductpath_id` int(11) NOT NULL,
  `path` enum('userdetails','products','transactions') NOT NULL,
  `added_by` int(11) NOT NULL,
  `created_by` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `is_deleted` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_apiproducts`
--

CREATE TABLE `tbl_apiproducts` (
  `apiproduct_id` int(11) NOT NULL,
  `productname` enum('userdetails','products','transaction') NOT NULL,
  `added_by` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_on` datetime NOT NULL,
  `is_deleted` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_apitokens`
--

CREATE TABLE `tbl_apitokens` (
  `apitoken_id` int(11) NOT NULL,
  `api_userid` int(11) NOT NULL,
  `api_productid` int(11) NOT NULL,
  `api_token` varchar(40) NOT NULL,
  `created_at` datetime NOT NULL,
  `expires_on` datetime NOT NULL,
  `is_deleted` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_apiusers`
--

CREATE TABLE `tbl_apiusers` (
  `apiuser_id` int(11) NOT NULL,
  `username` varchar(40) NOT NULL,
  `key` varchar(60) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_on` datetime NOT NULL,
  `added_by` int(11) NOT NULL,
  `is_deleted` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_categories`
--

CREATE TABLE `tbl_categories` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(25) NOT NULL,
  `is_deleted` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_order`
--

CREATE TABLE `tbl_order` (
  `order_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `order_amount` double NOT NULL DEFAULT 0,
  `order_status` enum('Pending','Pending payment','Paid','') NOT NULL,
  `created_at` datetime NOT NULL,
  `payment_type` int(11) NOT NULL,
  `updated_at` datetime NOT NULL,
  `is_deleted` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_orderdetails`
--

CREATE TABLE `tbl_orderdetails` (
  `orderdetails_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `product_price` double NOT NULL,
  `order_quantity` int(11) NOT NULL DEFAULT 1,
  `orderdetails_total` double NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `is_deleted` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_paymenttypes`
--

CREATE TABLE `tbl_paymenttypes` (
  `paymenttype_id` int(11) NOT NULL,
  `paymenttype_name` varchar(20) NOT NULL,
  `description` varchar(40) NOT NULL,
  `is_deleted` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product`
--

CREATE TABLE `tbl_product` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(25) NOT NULL,
  `product_description` text NOT NULL,
  `product_image` varchar(40) NOT NULL,
  `unit_price` double NOT NULL,
  `available_quantity` int(11) UNSIGNED NOT NULL,
  `subcategory_id` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `added_by` int(11) NOT NULL,
  `is_deleted` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_productimages`
--

CREATE TABLE `tbl_productimages` (
  `productimages_id` int(11) NOT NULL,
  `product_image` varchar(40) NOT NULL,
  `product_id` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `added_by` int(11) NOT NULL,
  `is_deleted` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_roles`
--

CREATE TABLE `tbl_roles` (
  `role_id` int(11) NOT NULL,
  `role_name` varchar(15) NOT NULL,
  `is_deleted` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_subcategories`
--

CREATE TABLE `tbl_subcategories` (
  `subcategory_id` int(11) NOT NULL,
  `subcategory_name` int(11) NOT NULL,
  `category` int(11) NOT NULL,
  `is_deleted` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_userlogins`
--

CREATE TABLE `tbl_userlogins` (
  `userlogin_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `user_ip` varchar(25) NOT NULL,
  `login_time` datetime NOT NULL,
  `logout_time` datetime NOT NULL,
  `is_deleted` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE `tbl_users` (
  `user_id` int(11) NOT NULL,
  `first_name` varchar(25) NOT NULL,
  `last_name` varchar(25) NOT NULL,
  `email` varchar(60) NOT NULL,
  `password` varchar(60) NOT NULL,
  `gender` enum('male','female') NOT NULL,
  `role` int(11) NOT NULL,
  `is_deleted` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_wallet`
--

CREATE TABLE `tbl_wallet` (
  `wallet_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `amount_available` double NOT NULL DEFAULT 0,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `is_deleted` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_apiproductpaths`
--
ALTER TABLE `tbl_apiproductpaths`
  ADD PRIMARY KEY (`apiproductpath_id`),
  ADD KEY `added_by` (`added_by`);

--
-- Indexes for table `tbl_apiproducts`
--
ALTER TABLE `tbl_apiproducts`
  ADD PRIMARY KEY (`apiproduct_id`),
  ADD KEY `added_by` (`added_by`);

--
-- Indexes for table `tbl_apitokens`
--
ALTER TABLE `tbl_apitokens`
  ADD PRIMARY KEY (`apitoken_id`),
  ADD KEY `api_userid` (`api_userid`),
  ADD KEY `api_productid` (`api_productid`);

--
-- Indexes for table `tbl_apiusers`
--
ALTER TABLE `tbl_apiusers`
  ADD PRIMARY KEY (`apiuser_id`),
  ADD KEY `added_by` (`added_by`);

--
-- Indexes for table `tbl_categories`
--
ALTER TABLE `tbl_categories`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `tbl_order`
--
ALTER TABLE `tbl_order`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `customer_id` (`customer_id`),
  ADD KEY `payment_type` (`payment_type`);

--
-- Indexes for table `tbl_orderdetails`
--
ALTER TABLE `tbl_orderdetails`
  ADD PRIMARY KEY (`orderdetails_id`),
  ADD KEY `order_id` (`order_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `tbl_paymenttypes`
--
ALTER TABLE `tbl_paymenttypes`
  ADD PRIMARY KEY (`paymenttype_id`);

--
-- Indexes for table `tbl_product`
--
ALTER TABLE `tbl_product`
  ADD PRIMARY KEY (`product_id`),
  ADD KEY `subcategory_id` (`subcategory_id`),
  ADD KEY `added_by` (`added_by`);

--
-- Indexes for table `tbl_productimages`
--
ALTER TABLE `tbl_productimages`
  ADD PRIMARY KEY (`productimages_id`),
  ADD KEY `product_id` (`product_id`),
  ADD KEY `added_by` (`added_by`);

--
-- Indexes for table `tbl_roles`
--
ALTER TABLE `tbl_roles`
  ADD PRIMARY KEY (`role_id`);

--
-- Indexes for table `tbl_subcategories`
--
ALTER TABLE `tbl_subcategories`
  ADD PRIMARY KEY (`subcategory_id`),
  ADD KEY `category` (`category`);

--
-- Indexes for table `tbl_userlogins`
--
ALTER TABLE `tbl_userlogins`
  ADD PRIMARY KEY (`userlogin_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`user_id`),
  ADD KEY `role` (`role`);

--
-- Indexes for table `tbl_wallet`
--
ALTER TABLE `tbl_wallet`
  ADD PRIMARY KEY (`wallet_id`),
  ADD KEY `customer_id` (`customer_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_apiproductpaths`
--
ALTER TABLE `tbl_apiproductpaths`
  MODIFY `apiproductpath_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_apiproducts`
--
ALTER TABLE `tbl_apiproducts`
  MODIFY `apiproduct_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_apitokens`
--
ALTER TABLE `tbl_apitokens`
  MODIFY `apitoken_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_apiusers`
--
ALTER TABLE `tbl_apiusers`
  MODIFY `apiuser_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_categories`
--
ALTER TABLE `tbl_categories`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_order`
--
ALTER TABLE `tbl_order`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_orderdetails`
--
ALTER TABLE `tbl_orderdetails`
  MODIFY `orderdetails_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_paymenttypes`
--
ALTER TABLE `tbl_paymenttypes`
  MODIFY `paymenttype_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_product`
--
ALTER TABLE `tbl_product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_productimages`
--
ALTER TABLE `tbl_productimages`
  MODIFY `productimages_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_roles`
--
ALTER TABLE `tbl_roles`
  MODIFY `role_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_subcategories`
--
ALTER TABLE `tbl_subcategories`
  MODIFY `subcategory_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_userlogins`
--
ALTER TABLE `tbl_userlogins`
  MODIFY `userlogin_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_wallet`
--
ALTER TABLE `tbl_wallet`
  MODIFY `wallet_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_apiproductpaths`
--
ALTER TABLE `tbl_apiproductpaths`
  ADD CONSTRAINT `tbl_apiproductpaths_ibfk_1` FOREIGN KEY (`added_by`) REFERENCES `tbl_users` (`user_id`);

--
-- Constraints for table `tbl_apiproducts`
--
ALTER TABLE `tbl_apiproducts`
  ADD CONSTRAINT `tbl_apiproducts_ibfk_1` FOREIGN KEY (`added_by`) REFERENCES `tbl_users` (`user_id`);

--
-- Constraints for table `tbl_apitokens`
--
ALTER TABLE `tbl_apitokens`
  ADD CONSTRAINT `tbl_apitokens_ibfk_1` FOREIGN KEY (`api_userid`) REFERENCES `tbl_apiusers` (`apiuser_id`),
  ADD CONSTRAINT `tbl_apitokens_ibfk_2` FOREIGN KEY (`api_productid`) REFERENCES `tbl_apiproducts` (`apiproduct_id`);

--
-- Constraints for table `tbl_apiusers`
--
ALTER TABLE `tbl_apiusers`
  ADD CONSTRAINT `tbl_apiusers_ibfk_1` FOREIGN KEY (`added_by`) REFERENCES `tbl_users` (`user_id`);

--
-- Constraints for table `tbl_order`
--
ALTER TABLE `tbl_order`
  ADD CONSTRAINT `tbl_order_ibfk_1` FOREIGN KEY (`customer_id`) REFERENCES `tbl_users` (`user_id`),
  ADD CONSTRAINT `tbl_order_ibfk_2` FOREIGN KEY (`payment_type`) REFERENCES `tbl_paymenttypes` (`paymenttype_id`);

--
-- Constraints for table `tbl_orderdetails`
--
ALTER TABLE `tbl_orderdetails`
  ADD CONSTRAINT `tbl_orderdetails_ibfk_1` FOREIGN KEY (`order_id`) REFERENCES `tbl_order` (`order_id`),
  ADD CONSTRAINT `tbl_orderdetails_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `tbl_product` (`product_id`);

--
-- Constraints for table `tbl_product`
--
ALTER TABLE `tbl_product`
  ADD CONSTRAINT `tbl_product_ibfk_1` FOREIGN KEY (`subcategory_id`) REFERENCES `tbl_subcategories` (`subcategory_id`),
  ADD CONSTRAINT `tbl_product_ibfk_2` FOREIGN KEY (`added_by`) REFERENCES `tbl_users` (`user_id`);

--
-- Constraints for table `tbl_productimages`
--
ALTER TABLE `tbl_productimages`
  ADD CONSTRAINT `tbl_productimages_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `tbl_product` (`product_id`),
  ADD CONSTRAINT `tbl_productimages_ibfk_2` FOREIGN KEY (`added_by`) REFERENCES `tbl_users` (`user_id`);

--
-- Constraints for table `tbl_subcategories`
--
ALTER TABLE `tbl_subcategories`
  ADD CONSTRAINT `tbl_subcategories_ibfk_1` FOREIGN KEY (`category`) REFERENCES `tbl_categories` (`category_id`);

--
-- Constraints for table `tbl_userlogins`
--
ALTER TABLE `tbl_userlogins`
  ADD CONSTRAINT `tbl_userlogins_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `tbl_users` (`user_id`);

--
-- Constraints for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD CONSTRAINT `tbl_users_ibfk_1` FOREIGN KEY (`role`) REFERENCES `tbl_roles` (`role_id`);

--
-- Constraints for table `tbl_wallet`
--
ALTER TABLE `tbl_wallet`
  ADD CONSTRAINT `tbl_wallet_ibfk_1` FOREIGN KEY (`customer_id`) REFERENCES `tbl_users` (`user_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
