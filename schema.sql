-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 05, 2018 at 03:45 PM
-- Server version: 5.7.21-0ubuntu0.17.10.1
-- PHP Version: 7.1.11-0ubuntu0.17.10.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `billing-system`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `admin_name` varchar(20) NOT NULL,
  `admin_password` varchar(255) NOT NULL,
  `admin_email` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_name`, `admin_password`, `admin_email`) VALUES
(1, 'admin', '$2y$10$fGhf4nL0UDmx7pKzwiobH.m0HsmaJRiEO1Ih3P1MoZVKAM.tnynXq', 'summyj656@gmail.com'),
(2, 'root', '$2y$10$E16kLkP.p5S2O2pFc5//fei3j0mSce4mb8H/NDu8eVEC5jdnSacgi', NULL),
(4, 'newuser', '$2y$10$nQiG8s3S7LGFJmcgyfPOBepybvTMXXq.Y7ZtgDqUY7/Nz1Phn2GMW', 'efgh@gmail.com'),
(5, 'dummy', '$2y$10$fGhf4nL0UDmx7pKzwiobH.m0HsmaJRiEO1Ih3P1MoZVKAM.tnynXq', 'asdsa');

-- --------------------------------------------------------

--
-- Table structure for table `bill`
--

CREATE TABLE `bill` (
  `bill_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `admin_id` int(11) NOT NULL,
  `no_of_items` int(5) NOT NULL,
  `bill_date` date NOT NULL,
  `total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bill`
--

INSERT INTO `bill` (`bill_id`, `customer_id`, `admin_id`, `no_of_items`, `bill_date`, `total`) VALUES
(14, 1, 1, 2, '2012-07-25', 300),
(15, 1, 1, 2, '2012-07-25', 3),
(16, 1, 2, 2, '2012-07-25', 300);

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `customer_id` int(11) NOT NULL,
  `customer_name` varchar(20) NOT NULL,
  `customer_contactno` varchar(14) NOT NULL,
  `customer_address` varchar(25) NOT NULL,
  `customer_balance` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`customer_id`, `customer_name`, `customer_contactno`, `customer_address`, `customer_balance`) VALUES
(1, 'Sumit Jogalekar', '8867077352', 'Hanagal', 100),
(2, 'Supriya Jogalekar', '8862431111', 'abcd', 0),
(3, 'sumitaa', '8812345678', 'asassa', 0),
(4, 'suppi2', '1234567890', 'abcdefgggg', 0),
(5, 'abcd', '1234123412', 'efgh', 10),
(6, 'mnop', '8888888888', 'qwet', 0),
(7, 'abcd', '9999111122', 'efgh', 0);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(20) NOT NULL,
  `product_price` int(11) NOT NULL,
  `qty` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `product_name`, `product_price`, `qty`) VALUES
(1, 'prod1', 125, 101),
(2, 'prod2', 100, 501);

-- --------------------------------------------------------

--
-- Table structure for table `purchase`
--

CREATE TABLE `purchase` (
  `purchase_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `vendor_id` int(11) NOT NULL,
  `purchase_qty` int(6) NOT NULL,
  `purchase_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `purchase`
--

INSERT INTO `purchase` (`purchase_id`, `product_id`, `vendor_id`, `purchase_qty`, `purchase_date`) VALUES
(1, 1, 1, 10, '2012-07-25'),
(2, 2, 1, 20, '2012-07-25'),
(3, 1, 1, 100, '2012-07-25'),
(4, 2, 1, 200, '2012-07-25'),
(5, 2, 1, 150, '2012-07-25'),
(6, 1, 1, 100, '2012-07-25'),
(7, 2, 1, 200, '2012-07-25'),
(8, 2, 1, 300, '2012-07-25');

-- --------------------------------------------------------

--
-- Table structure for table `sales`
--

CREATE TABLE `sales` (
  `sales_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `sales_price` int(6) NOT NULL,
  `sales_qty` int(6) NOT NULL,
  `sales_date` date NOT NULL,
  `bill_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sales`
--

INSERT INTO `sales` (`sales_id`, `product_id`, `customer_id`, `sales_price`, `sales_qty`, `sales_date`, `bill_id`) VALUES
(7, 1, 1, 100, 1, '2012-07-25', 14),
(8, 1, 1, 200, 1, '2012-07-25', 14),
(9, 1, 1, 1, 1, '2012-07-25', 15),
(10, 1, 1, 2, 1, '2012-07-25', 15),
(11, 1, 1, 100, 1, '2012-07-25', 16),
(12, 1, 1, 200, 1, '2012-07-25', 16);

-- --------------------------------------------------------

--
-- Table structure for table `vendor`
--

CREATE TABLE `vendor` (
  `vendor_id` int(11) NOT NULL,
  `vendor_fullname` varchar(20) NOT NULL,
  `vendor_company` varchar(20) NOT NULL,
  `vendor_address` varchar(20) NOT NULL,
  `vendor_email` varchar(20) NOT NULL,
  `vendor_contactno` varchar(14) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vendor`
--

INSERT INTO `vendor` (`vendor_id`, `vendor_fullname`, `vendor_company`, `vendor_address`, `vendor_email`, `vendor_contactno`) VALUES
(1, 'vendorname1', 'vencorcompany1', 'vendoraddress1', 'vem1@abc.xyz', '1234123412');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`),
  ADD UNIQUE KEY `admin_name` (`admin_name`),
  ADD UNIQUE KEY `admin_email` (`admin_email`);

--
-- Indexes for table `bill`
--
ALTER TABLE `bill`
  ADD PRIMARY KEY (`bill_id`),
  ADD KEY `FK_BILL_CUST` (`customer_id`),
  ADD KEY `FK_BILL_ADMIN` (`admin_id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `purchase`
--
ALTER TABLE `purchase`
  ADD PRIMARY KEY (`purchase_id`),
  ADD KEY `FK_VENDOR_ID` (`vendor_id`),
  ADD KEY `FK_PURCHASE_PRODUCT_ID` (`product_id`);

--
-- Indexes for table `sales`
--
ALTER TABLE `sales`
  ADD PRIMARY KEY (`sales_id`),
  ADD KEY `FK_PRODUCT_ID` (`product_id`),
  ADD KEY `FK_CUSTOMER_ID` (`customer_id`),
  ADD KEY `FK_BILL_ID` (`bill_id`);

--
-- Indexes for table `vendor`
--
ALTER TABLE `vendor`
  ADD PRIMARY KEY (`vendor_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `bill`
--
ALTER TABLE `bill`
  MODIFY `bill_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `purchase`
--
ALTER TABLE `purchase`
  MODIFY `purchase_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `sales`
--
ALTER TABLE `sales`
  MODIFY `sales_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `vendor`
--
ALTER TABLE `vendor`
  MODIFY `vendor_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `bill`
--
ALTER TABLE `bill`
  ADD CONSTRAINT `FK_BILL_ADMIN` FOREIGN KEY (`admin_id`) REFERENCES `admin` (`admin_id`),
  ADD CONSTRAINT `FK_BILL_CUST` FOREIGN KEY (`customer_id`) REFERENCES `customer` (`customer_id`);

--
-- Constraints for table `purchase`
--
ALTER TABLE `purchase`
  ADD CONSTRAINT `FK_PURCHASE_PRODUCT_ID` FOREIGN KEY (`product_id`) REFERENCES `product` (`product_id`),
  ADD CONSTRAINT `FK_VENDOR_ID` FOREIGN KEY (`vendor_id`) REFERENCES `vendor` (`vendor_id`);

--
-- Constraints for table `sales`
--
ALTER TABLE `sales`
  ADD CONSTRAINT `FK_BILL_ID` FOREIGN KEY (`bill_id`) REFERENCES `bill` (`bill_id`),
  ADD CONSTRAINT `FK_CUSTOMER_ID` FOREIGN KEY (`customer_id`) REFERENCES `customer` (`customer_id`),
  ADD CONSTRAINT `FK_PRODUCT_ID` FOREIGN KEY (`product_id`) REFERENCES `product` (`product_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
