-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 04, 2021 at 04:59 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cctv`
--

-- --------------------------------------------------------

--
-- Table structure for table `bill_details`
--

CREATE TABLE `bill_details` (
  `bill_id` int(10) NOT NULL,
  `product_id` int(11) NOT NULL,
  `P_Quantity` float NOT NULL,
  `Rate` decimal(65,0) NOT NULL,
  `Discount` decimal(10,0) NOT NULL,
  `bill_master_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bill_details`
--

INSERT INTO `bill_details` (`bill_id`, `product_id`, `P_Quantity`, `Rate`, `Discount`, `bill_master_id`) VALUES
(52, 2, 2, '100', '20', 1),
(53, 2, 1, '99', '20', 1);

-- --------------------------------------------------------

--
-- Table structure for table `bill_master_details`
--

CREATE TABLE `bill_master_details` (
  `bill_master_id` int(10) NOT NULL,
  `cust_id` int(10) NOT NULL,
  `Date` varchar(50) NOT NULL,
  `P_Status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bill_master_details`
--

INSERT INTO `bill_master_details` (`bill_master_id`, `cust_id`, `Date`, `P_Status`) VALUES
(1, 39, '04-08-2021', 'UNPAID');

-- --------------------------------------------------------

--
-- Table structure for table `customer_details`
--

CREATE TABLE `customer_details` (
  `cust_id` int(10) NOT NULL,
  `cust_name` varchar(20) NOT NULL,
  `cust_address` varchar(30) NOT NULL,
  `cust_contact_no` bigint(10) NOT NULL,
  `cust_email_id` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer_details`
--

INSERT INTO `customer_details` (`cust_id`, `cust_name`, `cust_address`, `cust_contact_no`, `cust_email_id`) VALUES
(39, 'ahamad', 'hubli', 7795921352, 'ahamad@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `customer_payment_details`
--

CREATE TABLE `customer_payment_details` (
  `payment_id` int(10) NOT NULL,
  `cust_id` int(10) NOT NULL,
  `payment_amt` float(10,0) NOT NULL,
  `payment_date` date NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer_payment_details`
--

INSERT INTO `customer_payment_details` (`payment_id`, `cust_id`, `payment_amt`, `payment_date`, `description`) VALUES
(15, 39, 198, '2021-08-04', 'paid');

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE `order_details` (
  `order_id` int(10) NOT NULL,
  `cust_id` int(10) NOT NULL,
  `pro_id` int(15) NOT NULL,
  `order_qty` int(10) NOT NULL,
  `description` text NOT NULL,
  `order_date` date NOT NULL,
  `order_status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order_details`
--

INSERT INTO `order_details` (`order_id`, `cust_id`, `pro_id`, `order_qty`, `description`, `order_date`, `order_status`) VALUES
(10, 39, 2, 1, 'camera', '2021-08-04', 'Order Confirmed');

-- --------------------------------------------------------

--
-- Table structure for table `product_details`
--

CREATE TABLE `product_details` (
  `product_id` int(10) NOT NULL,
  `product_name` varchar(20) NOT NULL,
  `product_price` int(20) NOT NULL,
  `product_description` varchar(100) NOT NULL,
  `product_image` varchar(200) NOT NULL,
  `product_model` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_details`
--

INSERT INTO `product_details` (`product_id`, `product_name`, `product_price`, `product_description`, `product_image`, `product_model`) VALUES
(2, 'IR Bullet Camera 600', 2200, 'Samrt IR Mode, 1/3', 'bullet_600_tvl.jpg', '600TV15B.ZA'),
(3, 'IR Dome Camera 600', 1800, 'Samrt IR Mode, IR Range 20 Mtrs, Internal Synchronization.', 'dome_600.jpg', '600TV55B.ZA'),
(4, 'IR Bullet Camera 720', 2700, 'Samrt IR Mode, 1/3', 'bullet_700.jpg', '720TV15C'),
(5, 'IR Dome Camera 720 T', 3300, 'High Intensity 36 pieces IR LED,Night Vision upto 25 - 28 Mts', 'dome_720.jpg', 'AA-7233'),
(6, 'IR Bullet Camera 820', 3500, '1080P Full HD?Night Vision, IP67 Weatherproof.', 'bullet_820.jpg', '850TV33'),
(7, 'IR Dome Camera 850', 2000, '1080P real time high resolution, IR Distance: Upto 20 Meters', 'dome_820.jpg', 'SO15MT'),
(11, 'IR Bullet Camera 100', 4000, '1080P High-definition, 360° Ceiling Panoramic Monitor.', 'bullet_1000.jpg', '1000TV22'),
(12, 'IR Dome Camera 100 T', 4500, '[Full- HD] - 1080P full HD (2 megapixel), 10m/33ft night vision and pan/tilt 360° monitoring provide', 'dome_360.jpg', 'B093DP24XG');

-- --------------------------------------------------------

--
-- Table structure for table `product_purchase_details`
--

CREATE TABLE `product_purchase_details` (
  `pro_purchase_id` int(10) NOT NULL,
  `product_id` int(10) NOT NULL,
  `pro_qty` int(15) NOT NULL,
  `purchase_price` float NOT NULL,
  `discount` float NOT NULL,
  `supplier_id` int(5) NOT NULL,
  `purchase_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `Hint_q` varchar(100) NOT NULL,
  `Hint_ans` varchar(100) NOT NULL,
  `type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `name`, `city`, `mobile`, `email`, `password`, `Hint_q`, `Hint_ans`, `type`) VALUES
(24, 'Admin', 'dwd', '9988776655', 'admin@gmail.com', '123', 'name', 'admin', 'admin'),
(33, 'ahamad', 'hubli', '7795921352', 'ahamad@gmail.com', '123', 'name', 'ahamad', 'customer');

-- --------------------------------------------------------

--
-- Table structure for table `stock_details`
--

CREATE TABLE `stock_details` (
  `stock_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `stock` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stock_details`
--

INSERT INTO `stock_details` (`stock_id`, `product_id`, `stock`) VALUES
(1, 1, 1450),
(10, 12, 9),
(16, 5, 7),
(18, 2, 9);

-- --------------------------------------------------------

--
-- Table structure for table `supplier_details`
--

CREATE TABLE `supplier_details` (
  `supplier_id` int(10) NOT NULL,
  `supplier_name` varchar(20) NOT NULL,
  `supplier_address` varchar(40) NOT NULL,
  `supplier_city` varchar(10) NOT NULL,
  `contact_no` varchar(10) NOT NULL,
  `email_id` varchar(20) NOT NULL,
  `sup_bal` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `supplier_details`
--

INSERT INTO `supplier_details` (`supplier_id`, `supplier_name`, `supplier_address`, `supplier_city`, `contact_no`, `email_id`, `sup_bal`) VALUES
(6, 'Tech suppliers', 'hubli', 'DWD', '9998882233', 'tech@gmail.com', 10914),
(8, 'Rashi and Co', 'Gokul Rd Hubli', 'Hubli', '9611778055', 'rashi@gmail.com', 0),
(9, 'Suprit', 'C B nagar', 'Hubli', '9611779099', 'suprithubli@yahoo.co', 0);

-- --------------------------------------------------------

--
-- Table structure for table `supplier_payment_details`
--

CREATE TABLE `supplier_payment_details` (
  `supplier_payment_id` int(10) NOT NULL,
  `supplier_id` int(10) NOT NULL,
  `supplier_payment_amt` varchar(15) NOT NULL,
  `description` varchar(30) NOT NULL,
  `payment_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bill_details`
--
ALTER TABLE `bill_details`
  ADD PRIMARY KEY (`bill_id`);

--
-- Indexes for table `bill_master_details`
--
ALTER TABLE `bill_master_details`
  ADD PRIMARY KEY (`bill_master_id`);

--
-- Indexes for table `customer_details`
--
ALTER TABLE `customer_details`
  ADD PRIMARY KEY (`cust_id`);

--
-- Indexes for table `customer_payment_details`
--
ALTER TABLE `customer_payment_details`
  ADD PRIMARY KEY (`payment_id`);

--
-- Indexes for table `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `product_details`
--
ALTER TABLE `product_details`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `product_purchase_details`
--
ALTER TABLE `product_purchase_details`
  ADD PRIMARY KEY (`pro_purchase_id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stock_details`
--
ALTER TABLE `stock_details`
  ADD PRIMARY KEY (`stock_id`);

--
-- Indexes for table `supplier_details`
--
ALTER TABLE `supplier_details`
  ADD PRIMARY KEY (`supplier_id`);

--
-- Indexes for table `supplier_payment_details`
--
ALTER TABLE `supplier_payment_details`
  ADD PRIMARY KEY (`supplier_payment_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bill_details`
--
ALTER TABLE `bill_details`
  MODIFY `bill_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `customer_details`
--
ALTER TABLE `customer_details`
  MODIFY `cust_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `customer_payment_details`
--
ALTER TABLE `customer_payment_details`
  MODIFY `payment_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `order_details`
--
ALTER TABLE `order_details`
  MODIFY `order_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `product_details`
--
ALTER TABLE `product_details`
  MODIFY `product_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `product_purchase_details`
--
ALTER TABLE `product_purchase_details`
  MODIFY `pro_purchase_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `stock_details`
--
ALTER TABLE `stock_details`
  MODIFY `stock_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `supplier_details`
--
ALTER TABLE `supplier_details`
  MODIFY `supplier_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `supplier_payment_details`
--
ALTER TABLE `supplier_payment_details`
  MODIFY `supplier_payment_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
