-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 30, 2022 at 09:58 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.13

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
  `producttype` enum('userdetails','products','transactions') DEFAULT NULL,
  `path` varchar(100) NOT NULL,
  `added_by` int(11) NOT NULL DEFAULT 33,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `is_deleted` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_apiproductpaths`
--

INSERT INTO `tbl_apiproductpaths` (`apiproductpath_id`, `producttype`, `path`, `added_by`, `created_at`, `updated_at`, `is_deleted`) VALUES
(9, 'products', 'http://localhost:8080/Api/productList', 55, '2022-01-30 21:38:44', '2022-01-30 21:38:44', 0),
(10, 'products', 'http://localhost:8080/Api/productListBySubCategory', 55, '2022-01-30 21:38:44', '2022-01-30 21:38:44', 0),
(11, 'products', 'http://localhost:8080/Api/productListByGender', 55, '2022-01-30 21:38:44', '2022-01-30 21:38:44', 0),
(12, 'userdetails', 'http://localhost:8080/Api/usersList', 55, '2022-01-30 21:38:44', '2022-01-30 21:38:44', 0),
(13, 'userdetails', 'http://localhost:8080/Api/userListGender', 55, '2022-01-30 21:38:44', '2022-01-30 21:38:44', 0),
(14, 'userdetails', 'http://localhost:8080/Api/userPurchases', 55, '2022-01-30 21:38:44', '2022-01-30 21:38:44', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_apiproducts`
--

CREATE TABLE `tbl_apiproducts` (
  `apiproduct_id` int(11) NOT NULL,
  `productname` enum('userdetails','products','transactions') DEFAULT NULL,
  `added_by` int(11) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_on` datetime DEFAULT NULL,
  `is_deleted` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_apiproducts`
--

INSERT INTO `tbl_apiproducts` (`apiproduct_id`, `productname`, `added_by`, `created_at`, `updated_on`, `is_deleted`) VALUES
(3, 'userdetails', 55, '2022-01-30 20:54:47', '2022-01-30 20:54:47', 0),
(4, 'products', 55, '2022-01-30 20:54:47', '2022-01-30 20:54:47', 0),
(5, 'transactions', 55, '2022-01-30 20:54:47', '2022-01-30 20:54:47', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_apitokens`
--

CREATE TABLE `tbl_apitokens` (
  `apitoken_id` int(11) NOT NULL,
  `api_userid` int(11) NOT NULL,
  `api_productid` int(11) NOT NULL DEFAULT 3,
  `api_token` varchar(40) DEFAULT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `expires_on` datetime DEFAULT NULL,
  `is_deleted` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_apitokens`
--

INSERT INTO `tbl_apitokens` (`apitoken_id`, `api_userid`, `api_productid`, `api_token`, `created_at`, `expires_on`, `is_deleted`) VALUES
(12, 21, 3, 'u9THSDt8k7CevK0N', '2022-01-30 22:56:00', NULL, NULL),
(13, 22, 3, 'HDbBrFGV4nYPaEme', '2022-01-30 23:25:57', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_apiusers`
--

CREATE TABLE `tbl_apiusers` (
  `apiuser_id` int(11) NOT NULL,
  `username` varchar(40) DEFAULT NULL,
  `user_key` varchar(60) DEFAULT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_on` datetime DEFAULT current_timestamp(),
  `added_by` int(11) NOT NULL DEFAULT 55,
  `is_deleted` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_apiusers`
--

INSERT INTO `tbl_apiusers` (`apiuser_id`, `username`, `user_key`, `created_at`, `updated_on`, `added_by`, `is_deleted`) VALUES
(21, 'ian', 'ian', '2022-01-30 22:53:43', '2022-01-30 22:53:43', 55, 0),
(22, 'test', 'test', '2022-01-30 23:25:51', '2022-01-30 23:25:51', 55, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_cart`
--

CREATE TABLE `tbl_cart` (
  `order_number` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `order_quantity` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_categories`
--

CREATE TABLE `tbl_categories` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(25) NOT NULL,
  `is_deleted` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_categories`
--

INSERT INTO `tbl_categories` (`category_id`, `category_name`, `is_deleted`) VALUES
(11, 'Female', 0),
(13, 'Male ', 0),
(15, 'Kids', 0),
(18, 'Universal Clothes', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_paymenttypes`
--

CREATE TABLE `tbl_paymenttypes` (
  `paymenttype_id` int(11) NOT NULL,
  `paymenttype_name` varchar(20) DEFAULT NULL,
  `description` varchar(100) DEFAULT NULL,
  `is_deleted` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_paymenttypes`
--

INSERT INTO `tbl_paymenttypes` (`paymenttype_id`, `paymenttype_name`, `description`, `is_deleted`) VALUES
(5, 'Wallet', 'In Store Wallet', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_products`
--

CREATE TABLE `tbl_products` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(25) NOT NULL,
  `product_description` text DEFAULT NULL,
  `product_image` varchar(400) DEFAULT NULL,
  `unit_price` double DEFAULT NULL,
  `available_quantity` int(11) DEFAULT NULL,
  `gender` text NOT NULL,
  `subcategory_id` int(11) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp(),
  `added_by` int(11) NOT NULL DEFAULT 55,
  `is_deleted` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_products`
--

INSERT INTO `tbl_products` (`product_id`, `product_name`, `product_description`, `product_image`, `unit_price`, `available_quantity`, `gender`, `subcategory_id`, `created_at`, `updated_at`, `added_by`, `is_deleted`) VALUES
(54, 'Draw String Hoodie', 'Black hoodie with drawstring', '/assets/products/drawstring-hoodie.webp', 4500, 50, 'female', 7, '2022-01-28 08:27:37', '2022-01-28 08:27:37', 55, 0),
(55, 'Long Gathered Dress', 'Long off-white cotton dress with gathers', '/assets/products/long-gathered.webp', 6000, 2, 'female', 7, '2022-01-28 08:27:37', '2022-01-28 08:27:37', 55, 0),
(56, 'Long Knitted Dress', 'Long White Knitted Dress', '/assets/products/long-knitted.webp', 4500, 2, 'female', 7, '2022-01-28 08:27:37', '2022-01-28 08:27:37', 55, 0),
(57, 'White Jacket', 'white cotton & polyester jacket', '/assets/products/white-jacket.webp', 2500, 10, 'female', 7, '2022-01-28 08:27:37', '2022-01-28 08:27:37', 55, 0),
(58, 'Cropped Pullover', 'Cropped Pullover', '/assets/products/cropped-pullover.webp', 6000, 50, 'female', 7, '2022-01-28 08:27:37', '2022-01-28 08:27:37', 55, 0),
(59, 'Felt Jacket', 'White Felt jacket', '/assets/products/plush-felt.webp', 8000, 2, 'female', 7, '2022-01-28 08:27:37', '2022-01-28 08:27:37', 55, 0),
(60, 'Cashmere Hoodie', 'Cashmere Hoodie', '/assets/products/cashmere-hoodie.webp', 4500, 20, 'female', 7, '2022-01-28 08:27:37', '2022-01-28 08:27:37', 55, 0),
(61, 'Cashmere TurtleNeck', 'Cashmere TurtleNeck', '/assets/products/cashmere-turtleneck.webp', 8500, 15, 'female', 7, '2022-01-28 08:27:37', '2022-01-28 08:27:37', 55, 0),
(62, 'Turleneck Sweater', 'Cashmere Turtleneck Sweater', '/assets/products/turtleneck-sweater.webp', 6000, 20, 'female', 7, '2022-01-28 12:42:57', '2022-01-28 12:42:57', 55, 0),
(63, 'Hooded Puffer Jacket', 'Puffer Jacket with a Hood', '/assets/products/hooded-puffer-jacket.webp', 7500, 50, 'male', 9, '2022-01-28 17:03:33', '2022-01-28 17:03:33', 55, 0),
(64, 'Jumper', 'Cotton Clay Jumper', '/assets/products/jumper.webp', 4500, 20, 'male', 9, '2022-01-28 17:03:33', '2022-01-28 17:03:33', 55, 0),
(65, 'Knitted Vest', 'Cotton Knitted Vest ', '/assets/products/knitted-vest.webp', 4500, 20, 'male', 9, '2022-01-28 17:03:33', '2022-01-28 17:03:33', 55, 0),
(66, 'Padded Overshirt', 'Heavy Cotton Overshirt ', '/assets/products/padded-overshirt.webp', 7500, 20, 'male', 9, '2022-01-28 17:03:33', '2022-01-28 17:03:33', 55, 0),
(67, 'Sweatshirt', 'Relaxed fit cotton sweatshirt', '/assets/products/relaxed-fit-sweatshirt.webp', 5000, 20, 'male', 9, '2022-01-28 17:03:33', '2022-01-28 17:03:33', 55, 0),
(68, 'Shirt', 'Normal Office shirt', '/assets/products/shirt.webp', 2500, 400, 'male', 10, '2022-01-28 17:03:33', '2022-01-28 17:03:33', 55, 0),
(69, 'Chino Pants', 'Tapered Chino Pants ', '/assets/products/tapered-chinos.webp', 4500, 20, 'male', 10, '2022-01-28 17:05:09', '2022-01-28 17:05:09', 55, 0),
(70, 'Turtle Neck', 'Turtle Neck top', '/assets/products/turtle-neck.webp', 3500, 20, 'male', 9, '2022-01-28 17:05:09', '2022-01-28 17:05:09', 55, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_purchases`
--

CREATE TABLE `tbl_purchases` (
  `purchase_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_name` varchar(40) NOT NULL,
  `unit_price` int(11) NOT NULL,
  `date_created` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_purchases`
--

INSERT INTO `tbl_purchases` (`purchase_id`, `user_id`, `product_name`, `unit_price`, `date_created`) VALUES
(18, 55, 'Draw String Hoodie', 4500, '2022-01-30'),
(19, 55, 'Long Gathered Dress', 6000, '2022-01-30'),
(20, 55, 'Long Knitted Dress', 4500, '2022-01-30'),
(21, 55, 'Cropped Pullover', 6000, '2022-01-30'),
(22, 55, 'Jumper', 4500, '2022-01-30'),
(23, 55, 'Knitted Vest', 4500, '2022-01-30');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_roles`
--

CREATE TABLE `tbl_roles` (
  `role_id` int(11) NOT NULL,
  `role_name` varchar(15) NOT NULL,
  `is_deleted` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_roles`
--

INSERT INTO `tbl_roles` (`role_id`, `role_name`, `is_deleted`) VALUES
(4, 'Admin', 0),
(5, 'Standard User', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_subcategories`
--

CREATE TABLE `tbl_subcategories` (
  `subcategory_id` int(11) NOT NULL,
  `subcategory_name` varchar(25) NOT NULL,
  `category` int(11) NOT NULL,
  `is_deleted` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_subcategories`
--

INSERT INTO `tbl_subcategories` (`subcategory_id`, `subcategory_name`, `category`, `is_deleted`) VALUES
(7, 'Female Casual', 11, 0),
(8, 'Female Official', 11, 0),
(9, 'Male Casual', 13, 0),
(10, 'Male Official', 13, 0),
(11, 'Kids Male', 15, 0),
(12, 'Kids Female', 15, 0),
(13, 'Universal Clothes', 17, 0);

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
  `gender` enum('male','female') DEFAULT NULL,
  `role` int(11) DEFAULT 5,
  `is_deleted` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`user_id`, `first_name`, `last_name`, `email`, `password`, `gender`, `role`, `is_deleted`) VALUES
(55, 'Ian', 'Koech', 'ian@gmail.com', 'ian', 'male', 4, 0);

--
-- Triggers `tbl_users`
--
DELIMITER $$
CREATE TRIGGER `Wallet Creation` AFTER INSERT ON `tbl_users` FOR EACH ROW insert into tbl_wallet(user_id)VALUES(new.user_id)
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_wallet`
--

CREATE TABLE `tbl_wallet` (
  `wallet_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `amount_available` double DEFAULT 0,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp(),
  `is_deleted` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_wallet`
--

INSERT INTO `tbl_wallet` (`wallet_id`, `user_id`, `amount_available`, `created_at`, `updated_at`, `is_deleted`) VALUES
(13, 55, 50100, '2022-01-29 17:50:16', '2022-01-29 17:50:16', 0);

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
-- Indexes for table `tbl_cart`
--
ALTER TABLE `tbl_cart`
  ADD PRIMARY KEY (`order_number`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `tbl_categories`
--
ALTER TABLE `tbl_categories`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `tbl_paymenttypes`
--
ALTER TABLE `tbl_paymenttypes`
  ADD PRIMARY KEY (`paymenttype_id`);

--
-- Indexes for table `tbl_products`
--
ALTER TABLE `tbl_products`
  ADD PRIMARY KEY (`product_id`),
  ADD KEY `subcategory_id` (`subcategory_id`),
  ADD KEY `added_by` (`added_by`);

--
-- Indexes for table `tbl_purchases`
--
ALTER TABLE `tbl_purchases`
  ADD PRIMARY KEY (`purchase_id`),
  ADD KEY `user_id` (`user_id`);

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
  ADD KEY `customer_id` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_apiproductpaths`
--
ALTER TABLE `tbl_apiproductpaths`
  MODIFY `apiproductpath_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tbl_apiproducts`
--
ALTER TABLE `tbl_apiproducts`
  MODIFY `apiproduct_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_apitokens`
--
ALTER TABLE `tbl_apitokens`
  MODIFY `apitoken_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tbl_apiusers`
--
ALTER TABLE `tbl_apiusers`
  MODIFY `apiuser_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `tbl_cart`
--
ALTER TABLE `tbl_cart`
  MODIFY `order_number` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `tbl_categories`
--
ALTER TABLE `tbl_categories`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `tbl_paymenttypes`
--
ALTER TABLE `tbl_paymenttypes`
  MODIFY `paymenttype_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_products`
--
ALTER TABLE `tbl_products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

--
-- AUTO_INCREMENT for table `tbl_purchases`
--
ALTER TABLE `tbl_purchases`
  MODIFY `purchase_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `tbl_roles`
--
ALTER TABLE `tbl_roles`
  MODIFY `role_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_subcategories`
--
ALTER TABLE `tbl_subcategories`
  MODIFY `subcategory_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT for table `tbl_wallet`
--
ALTER TABLE `tbl_wallet`
  MODIFY `wallet_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

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
-- Constraints for table `tbl_cart`
--
ALTER TABLE `tbl_cart`
  ADD CONSTRAINT `tbl_cart_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `tbl_users` (`user_id`),
  ADD CONSTRAINT `tbl_cart_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `tbl_products` (`product_id`);

--
-- Constraints for table `tbl_products`
--
ALTER TABLE `tbl_products`
  ADD CONSTRAINT `tbl_products_ibfk_1` FOREIGN KEY (`subcategory_id`) REFERENCES `tbl_subcategories` (`subcategory_id`),
  ADD CONSTRAINT `tbl_products_ibfk_2` FOREIGN KEY (`added_by`) REFERENCES `tbl_users` (`user_id`);

--
-- Constraints for table `tbl_purchases`
--
ALTER TABLE `tbl_purchases`
  ADD CONSTRAINT `tbl_purchases_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `tbl_users` (`user_id`);

--
-- Constraints for table `tbl_subcategories`
--
ALTER TABLE `tbl_subcategories`
  ADD CONSTRAINT `tbl_subcategories_ibfk_1` FOREIGN KEY (`category`) REFERENCES `tbl_categories` (`category_id`);

--
-- Constraints for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD CONSTRAINT `tbl_users_ibfk_1` FOREIGN KEY (`role`) REFERENCES `tbl_roles` (`role_id`);

--
-- Constraints for table `tbl_wallet`
--
ALTER TABLE `tbl_wallet`
  ADD CONSTRAINT `tbl_wallet_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `tbl_users` (`user_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
