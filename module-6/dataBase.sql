-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 04, 2023 at 12:17 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ostad`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `category_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`category_id`, `name`) VALUES
(1, 'Mobile'),
(2, 'Television'),
(3, 'Refrigerator'),
(4, 'Washing Machine'),
(5, 'Oven'),
(6, 'Air Condition');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `customer_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `location` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`customer_id`, `name`, `email`, `location`) VALUES
(1, 'Ahsan Ullah', 'ahsan@gmail.com', '47 Mockingbird Ln'),
(2, 'Mihsan', 'mihsan@email.com', '372 Clearwater Blvd'),
(3, 'Tasnuva', 'tasnuva@gmail.com', '18 Jessup Rd'),
(4, 'Saymon', 'saymon@email.com', '12 Buchanan Ln'),
(5, 'Anahita Afnan', 'afnana@gmail.com', '2341 Main St'),
(6, 'Shirin Akter', 'shirin@gmail.com', '12 Blaylock Ln'),
(7, 'Marjahan', 'marjan@email.com', '29 Admiral Ln'),
(8, 'Faruk Khan', 'faruk@gmail.com', '472 Freedom Rd'),
(9, 'Yeasin Arafat Tipu', 'tipu@email.com', '29 Maple St');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `order_date` date NOT NULL,
  `total_amount` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `customer_id`, `order_date`, `total_amount`) VALUES
(1, 1, '2023-11-03', 90000),
(2, 2, '2023-11-03', 70000),
(3, 4, '2023-11-02', 150000),
(4, 3, '2023-11-02', 80000);

-- --------------------------------------------------------

--
-- Table structure for table `order_items`
--

CREATE TABLE `order_items` (
  `order_item_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `qty` int(5) NOT NULL,
  `unit_price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `order_items`
--

INSERT INTO `order_items` (`order_item_id`, `order_id`, `product_id`, `qty`, `unit_price`) VALUES
(1, 1, 20, 2, 15000),
(2, 1, 14, 3, 20000),
(3, 2, 13, 1, 40000),
(4, 2, 18, 2, 15000),
(5, 3, 21, 2, 50000),
(6, 3, 16, 5, 10000),
(7, 4, 19, 4, 20000);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `category_id`, `name`, `description`, `created_at`, `updated_at`) VALUES
(11, 3, 'Samsung Refrigerator Frost BMF 218 L Scarlet Red', 'Samsung Refrigerator Frost BMF 218 L Scarlet Red', '2023-11-03 04:20:30', '2023-11-03 04:20:30'),
(12, 3, 'Samsung Refrigerator SBS 674 liter', 'Samsung Refrigerator SBS 674 liter,RS62K60A7SL/TL', '2023-11-03 04:20:30', '2023-11-03 04:20:30'),
(13, 4, 'SAMSUNG Top Loading 13kg WASHING MACHINE	', 'WA13J5750SV/SE,SAMSUNG Top Loading 13kg WASHING MACHINE	', '2023-11-03 04:20:30', '2023-11-03 04:20:30'),
(14, 5, 'Samsung 28 L Convection Oven, CeramicCavity MC28H5023AK/D2', 'Samsung 28 L Convection Oven, CeramicCavity MC28H5023AK/D2', '2023-11-03 04:20:30', '2023-11-03 04:20:30'),
(15, 5, 'Samsung 20 L Grill Oven with Auto Cook (Black)GW732KD-B/D2', 'Samsung 20 L Grill Oven with Auto Cook (Black)GW732KD-B/D2', '2023-11-03 04:20:30', '2023-11-03 04:20:30'),
(16, 3, 'Samsung Refrigerator,RT42K5468SL/D2', 'Samsung Refrigerator,RT42K5468SL/D2', '2023-11-03 04:20:30', '2023-11-03 04:20:30'),
(17, 1, 'Galaxy A54 (8/128GB) Black	', 'Galaxy A54 (8/128GB) Black	', '2023-11-03 04:20:30', '2023-11-03 04:20:30'),
(18, 1, 'Galaxy A54 (8/128GB) Light Violet	', 'Galaxy A54 (8/128GB) Light Violet	', '2023-11-03 04:20:30', '2023-11-03 04:20:30'),
(19, 1, 'Galaxy A34 (8/128GB) Silver', 'Galaxy A34 (8/128GB) Silver', '2023-11-03 04:20:30', '2023-11-03 04:20:30'),
(20, 1, 'Galaxy A04e (3/32GB) Light Blue	', 'Galaxy A04e (3/32GB) Light Blue	', '2023-11-03 04:20:30', '2023-11-03 04:20:30'),
(21, 2, 'UA43CU7700RSFS 4K UHD Smart TV	', 'UA43CU7700RSFS 4K UHD Smart TV	', '2023-11-03 04:22:39', '2023-11-03 04:22:39'),
(22, 2, 'Samsung AirSlim Design, 4K UHD Smart TV	', 'Samsung AirSlim Design, 4K UHD Smart TV	', '2023-11-03 04:22:39', '2023-11-03 04:22:39');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `customer_id` (`customer_id`);

--
-- Indexes for table `order_items`
--
ALTER TABLE `order_items`
  ADD PRIMARY KEY (`order_item_id`),
  ADD KEY `order_id` (`order_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`),
  ADD KEY `category_id` (`category_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `order_items`
--
ALTER TABLE `order_items`
  MODIFY `order_item_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`customer_id`) REFERENCES `customers` (`customer_id`) ON DELETE CASCADE;

--
-- Constraints for table `order_items`
--
ALTER TABLE `order_items`
  ADD CONSTRAINT `order_items_ibfk_1` FOREIGN KEY (`order_id`) REFERENCES `orders` (`order_id`),
  ADD CONSTRAINT `order_items_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `products` (`product_id`) ON DELETE CASCADE;

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `categories` (`category_id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;