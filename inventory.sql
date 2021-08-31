-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 26, 2020 at 02:55 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `inventory`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `manger_id` int(11) NOT NULL,
  `Username` varchar(100) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`manger_id`, `Username`, `first_name`, `last_name`, `email`, `Password`) VALUES
(1, 'admin', 'Anand', 'Varma', 'anandvarma@gmail.com', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `ID` int(11) NOT NULL,
  `customer_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `address` text NOT NULL,
  `mobile` varchar(10) NOT NULL,
  `new_password` varchar(100) NOT NULL,
  `confirm_password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`ID`, `customer_name`, `email`, `address`, `mobile`, `new_password`, `confirm_password`) VALUES
(1, 'YOGINDRA KANUMURI', '2000040069@kluniversity.in', 'gudivada', '7659937222', '123', '123'),
(2, 'yogindra kanumuri', 'yogindraphani7605@gmail.com', 'gudivada', '7659937222', '12345', '12345'),
(3, 'Anand', 'anand@gmail.com', 'gudivada', '9618278852', '1454', '1454'),
(4, 'abxhjca', 'acsc@klu.in', 'gudivada', '14325', '123', '123'),
(5, 'YOGINDRA', '2000040069@kluniversity.in', 'gudivada', '7659937222', '654', '654'),
(6, 'prasanth', 'prs@gmail.com', 'eluru', '24234', '1234', '1234'),
(7, 'Kireeti', 'kireeti@main.com', 'hyderabad', '123456789', 'MADIST', 'MADIST'),
(8, 'Sunny', 'sunny1@gmail.com', 'bhimavaram', '6543278', '0000', '0000'),
(9, 'Anand Varma', 'anandvarma013@gmail.com', 'madhu mansion', '9918278852', '1454', '1454');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `id` int(11) NOT NULL,
  `employee_id` varchar(10) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `mobile` bigint(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `store_ID` int(11) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`id`, `employee_id`, `first_name`, `last_name`, `mobile`, `email`, `store_ID`, `password`) VALUES
(1, '101A', 'Prasanth', 'Babu', 98765432, 'prasanth@gmail.com', 1, '12345'),
(2, '101B', 'Kireeti', 'Nayak', 987352413, 'kireeti_nayak@gmail.com', 2, '300310');

-- --------------------------------------------------------

--
-- Table structure for table `invoice`
--

CREATE TABLE `invoice` (
  `id` int(11) NOT NULL,
  `cust_id` int(11) NOT NULL,
  `paid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `invoice`
--

INSERT INTO `invoice` (`id`, `cust_id`, `paid`) VALUES
(5, 3, 1400),
(6, 3, 600),
(7, 7, 1000),
(8, 9, 1300);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `code` varchar(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `product_desc` text NOT NULL,
  `image` varchar(100) NOT NULL,
  `price` int(11) NOT NULL,
  `no_of_items` int(11) NOT NULL,
  `expiry_date` date NOT NULL,
  `store_id` int(11) NOT NULL,
  `supplier_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `code`, `name`, `product_desc`, `image`, `price`, `no_of_items`, `expiry_date`, `store_id`, `supplier_id`) VALUES
(1, 'PD1001', 'Mi Phone XI', 'Good Phone', 'android-phone.jpg', 200, 10, '2023-06-15', 1, 1),
(2, 'PD1002', 'Television DXT', 'Good TV', 'lcd-tv.jpg', 300, 20, '2022-06-16', 1, 2),
(3, 'PD1003', 'External Hard Disk', 'Good Hard Disk', 'external-hard-disk.jpg', 500, 10, '2024-11-20', 2, 3),
(4, 'PD1004', 'Rolex Watch', 'Good watch', 'wrist-watch.jpg', 400, 10, '2023-10-18', 2, 4);

-- --------------------------------------------------------

--
-- Table structure for table `suppliers`
--

CREATE TABLE `suppliers` (
  `supplier_id` int(11) NOT NULL,
  `supplier_name` varchar(100) NOT NULL,
  `mobile` bigint(20) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `suppliers`
--

INSERT INTO `suppliers` (`supplier_id`, `supplier_name`, `mobile`, `email`) VALUES
(1, 'anand', 9618278852, 'anand@gmail.com'),
(2, 'akhil', 799576831, 'akhil@gnmail.com'),
(3, 'phani', 7659937222, '2000040069@kluniversity.in'),
(4, 'rene anto', 9182763873, 'anto@klu.in'),
(5, 'Sai', 0, 'saikrishna@gmail.com'),
(6, 'bhanu', 89168614, 'bhanu@gmail.com'),
(7, 'vasanth', 9999999999, 'vasanth@gmail.com'),
(8, 'Subbu', 1234567890, 'subbu@gmail.com'),
(9, 'sunny', 12464584324, 'Sunny@gmail.com'),
(10, 'harini', 7788866554, 'harininadimpalli@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `warehouse`
--

CREATE TABLE `warehouse` (
  `store_id` int(11) NOT NULL,
  `store_name` varchar(10) NOT NULL,
  `quantity` int(11) NOT NULL,
  `manager_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `warehouse`
--

INSERT INTO `warehouse` (`store_id`, `store_name`, `quantity`, `manager_id`) VALUES
(1, 'ST-1', 10000, 1),
(2, 'ST-2', 10000, 1),
(5, 'ST-3', 12000, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`manger_id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`id`),
  ADD KEY `store_ID` (`store_ID`);

--
-- Indexes for table `invoice`
--
ALTER TABLE `invoice`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `store_id` (`store_id`),
  ADD KEY `supplier_id` (`supplier_id`);

--
-- Indexes for table `suppliers`
--
ALTER TABLE `suppliers`
  ADD PRIMARY KEY (`supplier_id`);

--
-- Indexes for table `warehouse`
--
ALTER TABLE `warehouse`
  ADD PRIMARY KEY (`store_id`),
  ADD KEY `manager_id` (`manager_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `manger_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `invoice`
--
ALTER TABLE `invoice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `suppliers`
--
ALTER TABLE `suppliers`
  MODIFY `supplier_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `warehouse`
--
ALTER TABLE `warehouse`
  MODIFY `store_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `warehouse`
--
ALTER TABLE `warehouse`
  ADD CONSTRAINT `warehouse_ibfk_1` FOREIGN KEY (`manager_id`) REFERENCES `admin` (`manger_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
