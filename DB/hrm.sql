-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 04, 2021 at 06:00 PM
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
-- Database: `hrm`
--
CREATE DATABASE IF NOT EXISTS `hrm` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `hrm`;

-- --------------------------------------------------------

--
-- Table structure for table `attendances`
--

CREATE TABLE `attendances` (
  `id` int(11) NOT NULL,
  `employee_id` int(11) NOT NULL,
  `date` date NOT NULL,
  `clock_in` time NOT NULL,
  `clock_out` time NOT NULL,
  `total_work` float NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `modified_at` timestamp NULL DEFAULT '0000-00-00 00:00:00',
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` int(11) NOT NULL,
  `CUST_ID` varchar(50) NOT NULL,
  `FIRST_NAME` varchar(50) DEFAULT NULL,
  `LAST_NAME` varchar(50) DEFAULT NULL,
  `PHONE_NUMBER` varchar(11) DEFAULT NULL,
  `createdBy` varchar(50) NOT NULL,
  `createdDate` varchar(50) NOT NULL,
  `updatedDate` varchar(50) NOT NULL,
  `UpdateedBy` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `CUST_ID`, `FIRST_NAME`, `LAST_NAME`, `PHONE_NUMBER`, `createdBy`, `createdDate`, `updatedDate`, `UpdateedBy`) VALUES
(15, 'KS/0097', 'amani', 'kilawe', '+2557655440', 'mnimbo', '01/12/2021', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `status` int(2) NOT NULL DEFAULT 1,
  `create_by` varchar(30) DEFAULT NULL,
  `create_date` timestamp NULL DEFAULT NULL,
  `modified_by` varchar(30) DEFAULT NULL,
  `modified_date` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`id`, `name`, `status`, `create_by`, `create_date`, `modified_by`, `modified_date`) VALUES
(1, 'Accountant', 1, 'Admin', '2017-05-24 06:37:11', '', '2017-05-05 18:00:00'),
(2, 'Storekeeper', 1, 'Admin', '2017-05-24 06:37:29', '', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `id` int(11) NOT NULL,
  `first_name` varchar(30) NOT NULL,
  `last_name` varchar(30) NOT NULL,
  `user_name` varchar(30) NOT NULL,
  `DOB` varchar(10) NOT NULL,
  `password` varbinary(500) NOT NULL,
  `gender` char(6) NOT NULL,
  `email` varchar(30) NOT NULL,
  `department_id` int(11) NOT NULL,
  `occupation` varchar(50) DEFAULT NULL,
  `textarea` varchar(100) DEFAULT NULL,
  `mobile_no` varchar(15) NOT NULL,
  `create_by` varchar(30) DEFAULT NULL,
  `created_date` varchar(10) DEFAULT NULL,
  `modified_by` varchar(30) DEFAULT NULL,
  `modified_date` varchar(10) DEFAULT NULL,
  `role` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`id`, `first_name`, `last_name`, `user_name`, `DOB`, `password`, `gender`, `email`, `department_id`, `occupation`, `textarea`, `mobile_no`, `create_by`, `created_date`, `modified_by`, `modified_date`, `role`) VALUES
(13, 'Amani', 'Gabbie', 'AmaniG', '2021-11-25', 0x2432792431302446624d54793241387135394245373268474558465165636c324b3853614b363235346e6a617246753757345331523531506e714561, 'Male', 'amanigabriel@gmail.com', 1, 'itttt', 'admin', '+255765544045', 'admin', '25/11/21', '', '', 'admin'),
(16, 'hussein', 'Mnimbo', 'mnimbo', '2021-12-21', 0x243279243130246e4334526438763952426d6d782e6e4732454970384f394f4a6f62734163734267664a34363979394e72686434746e706333414143, 'Male', 'elimu.gabriel@yahoo.com', 1, 'dpogeru', 'rkjlth54ri54jt34pot4po', '+255765544045', 'AmaniG', '01/12/21', '', '', 'sales'),
(17, 'Glory', 'msemo', 'GloryMsemo', '1998-12-12', 0x243279243130246e57526f4f44614b416a6c614559495178686d675675422e4b726f54386d6c61395153316d42514473454f7179753457626f323657, 'Female', 'glory@gmail.com', 2, 'Storekeeper', '', '0787676564', 'AmaniG', '04/12/21', '', '', 'store');

-- --------------------------------------------------------

--
-- Table structure for table `employee_designations`
--

CREATE TABLE `employee_designations` (
  `id` int(11) NOT NULL,
  `title` varchar(30) NOT NULL,
  `status` int(2) NOT NULL DEFAULT 1,
  `created_by` varchar(30) DEFAULT NULL,
  `create_date` timestamp NULL DEFAULT NULL,
  `modified_by` varchar(30) DEFAULT NULL,
  `modified_date` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `employee_designations`
--

INSERT INTO `employee_designations` (`id`, `title`, `status`, `created_by`, `create_date`, `modified_by`, `modified_date`) VALUES
(1, 'Teacher', 1, 'Admin', '2017-05-24 06:36:17', '', '2017-05-24 06:36:17'),
(2, 'Programmer', 1, 'Admin', '2017-05-03 18:00:00', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `employee_leavs`
--

CREATE TABLE `employee_leavs` (
  `id` int(11) NOT NULL,
  `leave_id` int(11) NOT NULL,
  `total_leave_yarly` int(11) NOT NULL,
  `deducated_leav` int(11) NOT NULL,
  `remaining_leav` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `modfied_at` timestamp NULL DEFAULT '0000-00-00 00:00:00',
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

-- --------------------------------------------------------

--
-- Table structure for table `expenses`
--

CREATE TABLE `expenses` (
  `id` int(11) NOT NULL,
  `employee_id` int(11) NOT NULL,
  `item` varchar(30) NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `modified_at` timestamp NULL DEFAULT '0000-00-00 00:00:00',
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `holiday_informations`
--

CREATE TABLE `holiday_informations` (
  `id` int(11) NOT NULL,
  `holiday_id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `types` varchar(30) NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `modfied_at` timestamp NULL DEFAULT '0000-00-00 00:00:00',
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

-- --------------------------------------------------------

--
-- Table structure for table `holydays`
--

CREATE TABLE `holydays` (
  `id` int(11) NOT NULL,
  `attendace_id` int(11) NOT NULL,
  `month` date NOT NULL,
  `day` date NOT NULL,
  `year` date NOT NULL,
  `description` varchar(155) NOT NULL,
  `status` int(11) NOT NULL,
  `crated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `modified_at` timestamp NULL DEFAULT '0000-00-00 00:00:00',
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

-- --------------------------------------------------------

--
-- Table structure for table `leaves`
--

CREATE TABLE `leaves` (
  `id` int(11) NOT NULL,
  `employee_id` int(11) NOT NULL,
  `type` varchar(30) NOT NULL,
  `leav_to` date NOT NULL,
  `leav_from` date NOT NULL,
  `total_leav` int(11) NOT NULL,
  `staus` int(11) NOT NULL,
  `created_at` int(11) DEFAULT NULL,
  `modified_at` int(11) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

-- --------------------------------------------------------

--
-- Table structure for table `live_events`
--

CREATE TABLE `live_events` (
  `id` int(11) NOT NULL,
  `subject` varchar(30) NOT NULL,
  `event_date` date NOT NULL,
  `event_time` time NOT NULL,
  `description` text NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `insert_by` varchar(30) NOT NULL,
  `insert_date` timestamp NULL DEFAULT NULL,
  `update_by` varchar(30) NOT NULL,
  `update_date` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `live_events`
--

INSERT INTO `live_events` (`id`, `subject`, `event_date`, `event_time`, `description`, `status`, `insert_by`, `insert_date`, `update_by`, `update_date`) VALUES
(1, 'Event', '2017-05-03', '00:17:00', 'sdfsdfsdf', 1, 'sxssdsa', '2017-05-29 18:00:00', '', NULL),
(2, 'Live Event', '2017-05-06', '12:59:00', 'dfgfgfg', 0, 'admin', '2017-05-23 15:03:11', '', NULL),
(3, 'Mitting', '2017-05-13', '12:59:00', 'xcvzxcvc', 1, 'admin', '2017-05-23 15:04:01', '', NULL),
(4, 'Outgoing', '2017-05-25', '12:59:00', 'gjhygjhjhhgjhjh', 1, 'admin', '2017-05-24 04:04:43', '', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `notices`
--

CREATE TABLE `notices` (
  `id` int(11) NOT NULL,
  `subject` varchar(30) NOT NULL,
  `notice_date` date NOT NULL,
  `notice_time` time NOT NULL,
  `description` text NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `insert_by` varchar(30) NOT NULL,
  `insert_date` timestamp NULL DEFAULT NULL,
  `update_by` varchar(30) NOT NULL,
  `update_date` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `notices`
--

INSERT INTO `notices` (`id`, `subject`, `notice_date`, `notice_time`, `description`, `status`, `insert_by`, `insert_date`, `update_by`, `update_date`) VALUES
(10, 'Sales Department Meeting', '2021-12-04', '19:29:00', 'All Sales department should attend the meeting at 12:00 pm Venue Nyati Hall', 1, '', '2021-12-04 16:30:42', '', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `PRODUCTCODE` int(10) NOT NULL,
  `DESCRIPTION` varchar(250) NOT NULL,
  `QTY_STOCK` int(50) DEFAULT NULL,
  `DATE_STOCK_IN` varchar(50) NOT NULL,
  `ADDEDBY` varchar(50) DEFAULT NULL,
  `UPDATEDBY` varchar(50) NOT NULL,
  `DATEUPDATED` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `PRODUCTCODE`, `DESCRIPTION`, `QTY_STOCK`, `DATE_STOCK_IN`, `ADDEDBY`, `UPDATEDBY`, `DATEUPDATED`) VALUES
(4, 1234567, 'Each package Have 50 sugar packets', 12, '04/12/2021', 'GloryMsemo', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `supplier`
--

CREATE TABLE `supplier` (
  `SUPPLIER_ID` int(11) NOT NULL,
  `COMPANY_NAME` varchar(50) DEFAULT NULL,
  `LOCATION_ID` int(11) NOT NULL,
  `PHONE_NUMBER` varchar(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `supplier`
--

INSERT INTO `supplier` (`SUPPLIER_ID`, `COMPANY_NAME`, `LOCATION_ID`, `PHONE_NUMBER`) VALUES
(11, 'InGame Tech', 114, '09457488521'),
(12, 'Asus', 115, '09635877412'),
(13, 'Razer Co.', 111, '09587855685'),
(15, 'Strategic Technology Co.', 116, '09124033805'),
(16, 'A4tech', 155, '09775673257');

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE `transaction` (
  `TRANS_ID` int(50) NOT NULL,
  `CUST_ID` varchar(50) DEFAULT NULL,
  `NUMOFITEMS` varchar(250) NOT NULL,
  `Price` varchar(50) NOT NULL,
  `VAT` varchar(50) NOT NULL,
  `TOTAL` varchar(250) NOT NULL,
  `DATE` varchar(50) NOT NULL,
  `DATEUPDATED` varchar(10) DEFAULT NULL,
  `MADEBY` varchar(40) NOT NULL,
  `UPDATEDBY` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaction`
--

INSERT INTO `transaction` (`TRANS_ID`, `CUST_ID`, `NUMOFITEMS`, `Price`, `VAT`, `TOTAL`, `DATE`, `DATEUPDATED`, `MADEBY`, `UPDATEDBY`) VALUES
(24, 'KS/0097', '12', '600000', '60000', '600000', '01/12/2021', '', 'mnimbo', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `attendances`
--
ALTER TABLE `attendances`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`CUST_ID`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employee_designations`
--
ALTER TABLE `employee_designations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employee_leavs`
--
ALTER TABLE `employee_leavs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `holiday_informations`
--
ALTER TABLE `holiday_informations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `holydays`
--
ALTER TABLE `holydays`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `live_events`
--
ALTER TABLE `live_events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notices`
--
ALTER TABLE `notices`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`PRODUCTCODE`),
  ADD UNIQUE KEY `PRODUCTCODE` (`PRODUCTCODE`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`SUPPLIER_ID`),
  ADD KEY `LOCATION_ID` (`LOCATION_ID`);

--
-- Indexes for table `transaction`
--
ALTER TABLE `transaction`
  ADD PRIMARY KEY (`TRANS_ID`),
  ADD KEY `CUST_ID` (`CUST_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `attendances`
--
ALTER TABLE `attendances`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `employee_designations`
--
ALTER TABLE `employee_designations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `employee_leavs`
--
ALTER TABLE `employee_leavs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `holiday_informations`
--
ALTER TABLE `holiday_informations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `holydays`
--
ALTER TABLE `holydays`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `live_events`
--
ALTER TABLE `live_events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `notices`
--
ALTER TABLE `notices`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `transaction`
--
ALTER TABLE `transaction`
  MODIFY `TRANS_ID` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
