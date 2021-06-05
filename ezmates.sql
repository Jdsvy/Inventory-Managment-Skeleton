-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 05, 2021 at 06:33 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ezmates`
--

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE `company` (
  `Company_ID` int(11) NOT NULL,
  `Company_Name` varchar(255) NOT NULL,
  `Company_Charge_Amount` decimal(10,4) NOT NULL,
  `Vat_Charge` decimal(10,4) NOT NULL,
  `Company_Addr` varchar(255) NOT NULL,
  `Company_Phone` varchar(20) NOT NULL,
  `Company_Country` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`Company_ID`, `Company_Name`, `Company_Charge_Amount`, `Vat_Charge`, `Company_Addr`, `Company_Phone`, `Company_Country`) VALUES
(23, '5', '5.2000', '6.2300', '2', '2', '2');

-- --------------------------------------------------------

--
-- Table structure for table `item`
--

CREATE TABLE `item` (
  `item_number` int(11) NOT NULL,
  `item_description` varchar(255) NOT NULL,
  `item_price` decimal(10,2) NOT NULL,
  `Item_Availability` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `item`
--

INSERT INTO `item` (`item_number`, `item_description`, `item_price`, `Item_Availability`) VALUES
(1, 'Water', '1.00', 'Available'),
(5, 'Nail', '0.50', 'Unavailable'),
(6, 'Bolt', '0.25', 'Unavailable'),
(7, 'Water', '1.00', 'Available'),
(8, 'Saw', '5.12', 'Available'),
(19, 'Cookies', '5.20', 'Available'),
(22, 'Test', '23.00', 'Unavailable');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_number` int(11) NOT NULL,
  `customer_ship_to_name` varchar(255) NOT NULL,
  `customer_ship_to_address_line_1` varchar(255) NOT NULL,
  `customer_ship_to_address_line_2` varchar(255) NOT NULL,
  `customer_ship_to_city` varchar(255) NOT NULL,
  `customer_ship_to_state` varchar(255) NOT NULL,
  `customer_ship_to_zip` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_number`, `customer_ship_to_name`, `customer_ship_to_address_line_1`, `customer_ship_to_address_line_2`, `customer_ship_to_city`, `customer_ship_to_state`, `customer_ship_to_zip`) VALUES
(25, 'John Smith', '123 Front St', '', 'West Oak', 'New York', 11235);

-- --------------------------------------------------------

--
-- Table structure for table `order_item`
--

CREATE TABLE `order_item` (
  `order_number` int(11) NOT NULL,
  `item_number` int(11) NOT NULL,
  `order_quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `order_item`
--

INSERT INTO `order_item` (`order_number`, `item_number`, `order_quantity`) VALUES
(5, 1, 100),
(6, 1, 10),
(7, 5, 50),
(8, 6, 25),
(9, 6, 10),
(10, 5, 100),
(11, 7, 20),
(15, 1, 0),
(16, 5, 5),
(17, 5, 5),
(23, 5, 10),
(24, 7, 88),
(25, 6, 50);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`Company_ID`);

--
-- Indexes for table `item`
--
ALTER TABLE `item`
  ADD PRIMARY KEY (`item_number`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_number`);

--
-- Indexes for table `order_item`
--
ALTER TABLE `order_item`
  ADD PRIMARY KEY (`order_number`),
  ADD KEY `Test` (`item_number`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `company`
--
ALTER TABLE `company`
  MODIFY `Company_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `item`
--
ALTER TABLE `item`
  MODIFY `item_number` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `order_item`
--
ALTER TABLE `order_item`
  MODIFY `order_number` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`order_number`) REFERENCES `order_item` (`order_number`);

--
-- Constraints for table `order_item`
--
ALTER TABLE `order_item`
  ADD CONSTRAINT `Test` FOREIGN KEY (`item_number`) REFERENCES `item` (`item_number`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
