-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 15, 2022 at 05:21 PM
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
-- Database: `shop`
--
CREATE DATABASE IF NOT EXISTS `shop` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `shop`;

-- --------------------------------------------------------

--
-- Table structure for table `cash`
--

CREATE TABLE `cash` (
  `cashID` int(11) NOT NULL,
  `company` varchar(50) NOT NULL,
  `transType` varchar(50) NOT NULL,
  `amount` int(11) NOT NULL,
  `cashRemain` int(11) NOT NULL,
  `date` varchar(10) NOT NULL,
  `time` varchar(10) NOT NULL,
  `addedBy` varchar(50) NOT NULL,
  `UpdatedBy` varchar(50) NOT NULL,
  `updateDate` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cash`
--

INSERT INTO `cash` (`cashID`, `company`, `transType`, `amount`, `cashRemain`, `date`, `time`, `addedBy`, `UpdatedBy`, `updateDate`) VALUES
(7, 'airtelmoney', 'cash', 40000, 40000, '2022-03-12', '05:51:02pm', 'victor', '', ''),
(15, 'airtelmoney', 'kutoa', 10000, 30000, '2022-03-12', '07:27:47pm', 'victor', '', ''),
(22, 'airtelmoney', 'kuweka', 10000, 40000, '2022-03-12', '07:40:26pm', 'victor', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `cash_shopkeeper`
--

CREATE TABLE `cash_shopkeeper` (
  `cashIDS` int(11) NOT NULL,
  `transType` varchar(50) NOT NULL,
  `amount` int(11) NOT NULL,
  `cashRemain` int(11) NOT NULL,
  `time` varchar(10) NOT NULL,
  `addeddate` varchar(10) NOT NULL,
  `addedBy` varchar(50) NOT NULL,
  `updateDate` varchar(10) NOT NULL,
  `UpdatedBy` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cash_shopkeeper`
--

INSERT INTO `cash_shopkeeper` (`cashIDS`, `transType`, `amount`, `cashRemain`, `time`, `addeddate`, `addedBy`, `updateDate`, `UpdatedBy`) VALUES
(1, 'cash', 0, 0, '27:07:17', '2022-03-16', 'amani', '', ''),
(9, 'cash', 50000, 50000, '04:14:39pm', '2022-03-15', 'mea', '', ''),
(10, 'purchase', 300, 49700, '04:16:28pm', '2022-03-15', 'mea', '', ''),
(11, 'purchase', 5000, 44700, '04:20:17pm', '2022-03-15', 'mea', '', ''),
(12, 'sales', 6000, 50700, '04:20:47pm', '2022-03-15', 'mea', '', ''),
(13, 'sales', 2000, 52700, '04:21:15pm', '2022-03-15', 'mea', '', ''),
(14, 'cash', 40000, 92700, '05:15:12pm', '2022-03-15', 'mea', '', ''),
(15, 'purchase', 2000, 90700, '05:16:25pm', '2022-03-15', 'mea', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `floata`
--

CREATE TABLE `floata` (
  `floatID` int(11) NOT NULL,
  `floatType` varchar(50) NOT NULL,
  `amount` int(11) NOT NULL,
  `date` varchar(10) NOT NULL,
  `time` varchar(10) NOT NULL,
  `addedBy` varchar(50) NOT NULL,
  `updateBy` varchar(50) NOT NULL,
  `updateDate` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `floata`
--

INSERT INTO `floata` (`floatID`, `floatType`, `amount`, `date`, `time`, `addedBy`, `updateBy`, `updateDate`) VALUES
(3, 'airtelmoney', 5000000, '2022-03-06', '10:19:18am', 'victor', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `item`
--

CREATE TABLE `item` (
  `itemID` int(11) NOT NULL,
  `itemName` varchar(500) NOT NULL,
  `stock` int(11) NOT NULL,
  `unitPrice` int(50) NOT NULL,
  `Price_jumla` int(11) NOT NULL,
  `AddedBy` varchar(50) NOT NULL,
  `dateAdded` varchar(10) NOT NULL,
  `description` varchar(500) NOT NULL,
  `updateBy` varchar(50) NOT NULL,
  `updateDate` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `item`
--

INSERT INTO `item` (`itemID`, `itemName`, `stock`, `unitPrice`, `Price_jumla`, `AddedBy`, `dateAdded`, `description`, `updateBy`, `updateDate`) VALUES
(3, 'card Reader', 12, 1000, 3000, 'mea', '2022-03-05', 'samsung', 'mea', '2022-03-05'),
(5, 'kava la simu', 12, 3000, 2500, 'mea', '2022-03-10', 'makava ya samsung s4', '', ''),
(6, 'soap', 13, 2500, 2000, 'mea', '2022-03-12', 'jamaa soap', 'mea', '2022-03-12'),
(7, 'karanga', 12, 500, 100, 'mea', '2022-03-15', 'pakets', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `messageID` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `content` varchar(500) NOT NULL,
  `date` varchar(10) NOT NULL,
  `time` varchar(15) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`messageID`, `title`, `content`, `date`, `time`, `status`) VALUES
(92, 'PurchaseAdded', 'karanga was bought by mea from Stephano sentimea', '2022-03-15', '04:16:28pm', 1),
(93, 'PurchaseAdded', 'chakula was bought by mea from Stephano sentimea', '2022-03-15', '04:20:17pm', 1),
(94, 'PurchaseAdded', 'card Reader was bought by mea from Stephano sentimea', '2022-03-15', '05:16:25pm', 1);

-- --------------------------------------------------------

--
-- Table structure for table `purchase`
--

CREATE TABLE `purchase` (
  `purchaseID` int(11) NOT NULL,
  `itemName` varchar(50) NOT NULL,
  `quantity` int(50) NOT NULL,
  `unitPrice` int(50) NOT NULL,
  `totalPrice` int(50) NOT NULL,
  `vendorName` varchar(50) NOT NULL,
  `purchaseDate` varchar(10) NOT NULL,
  `addedBy` varchar(50) NOT NULL,
  `updateDate` varchar(10) NOT NULL,
  `updateBy` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `purchase`
--

INSERT INTO `purchase` (`purchaseID`, `itemName`, `quantity`, `unitPrice`, `totalPrice`, `vendorName`, `purchaseDate`, `addedBy`, `updateDate`, `updateBy`) VALUES
(17, 'karanga', 3, 100, 300, 'Stephano sentimea', '2022-03-15', 'mea', '', ''),
(18, 'chakula', 2, 2500, 5000, 'Stephano sentimea', '2022-03-15', 'mea', '', ''),
(19, 'card Reader', 2, 1000, 2000, 'Stephano sentimea', '2022-03-15', 'mea', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `sales`
--

CREATE TABLE `sales` (
  `saleID` int(11) NOT NULL,
  `itemName` varchar(50) NOT NULL,
  `quantity` int(50) NOT NULL,
  `unitPrice` int(50) NOT NULL,
  `totalPrice` int(50) NOT NULL,
  `saleDate` varchar(10) NOT NULL,
  `userSale` varchar(50) NOT NULL,
  `updateDate` varchar(10) NOT NULL,
  `userUpdate` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sales`
--

INSERT INTO `sales` (`saleID`, `itemName`, `quantity`, `unitPrice`, `totalPrice`, `saleDate`, `userSale`, `updateDate`, `userUpdate`) VALUES
(12, 'card Reader', 2, 3000, 6000, '2022-03-15', 'mea', '', ''),
(13, 'soap', 2, 1000, 2000, '2022-03-15', 'mea', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `seniortrans`
--

CREATE TABLE `seniortrans` (
  `StransID` int(11) NOT NULL,
  `company` varchar(50) NOT NULL,
  `transType` varchar(50) NOT NULL,
  `amount` int(11) DEFAULT NULL,
  `floatRemain` int(11) DEFAULT NULL,
  `phoneNo` int(11) NOT NULL,
  `date` varchar(10) NOT NULL,
  `time` varchar(10) NOT NULL,
  `addedBy` varchar(50) NOT NULL,
  `updateBy` varchar(50) NOT NULL,
  `updateDate` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `seniortrans`
--

INSERT INTO `seniortrans` (`StransID`, `company`, `transType`, `amount`, `floatRemain`, `phoneNo`, `date`, `time`, `addedBy`, `updateBy`, `updateDate`) VALUES
(11, 'airtelmoney', 'float', 50000, 50000, 765544045, '2022-03-12', '07:51:56pm', 'victor', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `senior_cash`
--

CREATE TABLE `senior_cash` (
  `ScashID` int(11) NOT NULL,
  `company` varchar(50) NOT NULL,
  `transType` varchar(50) NOT NULL,
  `amount` int(11) NOT NULL,
  `cashRemain` int(11) NOT NULL,
  `date` varchar(10) NOT NULL,
  `time` varchar(10) NOT NULL,
  `addedBy` varchar(50) NOT NULL,
  `UpdatedBy` varchar(50) NOT NULL,
  `updateDate` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `senior_cash`
--

INSERT INTO `senior_cash` (`ScashID`, `company`, `transType`, `amount`, `cashRemain`, `date`, `time`, `addedBy`, `UpdatedBy`, `updateDate`) VALUES
(9, 'airtelmoney', 'cash', 40000, 40000, '2022-03-12', '07:52:07pm', 'victor', '', ''),
(12, 'airtelmoney', 'kutoa', 10000, 30000, '2022-03-12', '07:55:55pm', 'victor', '', ''),
(13, 'airtelmoney', 'kutoa', 10000, 30000, '2022-03-12', '07:55:55pm', 'victor', '', ''),
(14, 'airtelmoney', 'kuweka', 10000, 40000, '2022-03-12', '07:57:10pm', 'victor', '', ''),
(15, 'airtelmoney', 'kuweka', 10000, 40000, '2022-03-12', '07:57:10pm', 'victor', '', ''),
(16, 'airtelmoney', 'kuweka', 10000, 50000, '2022-03-12', '07:57:43pm', 'victor', '', ''),
(17, 'airtelmoney', 'kuweka', 10000, 50000, '2022-03-12', '07:57:43pm', 'victor', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE `transaction` (
  `transID` int(11) NOT NULL,
  `company` varchar(50) NOT NULL,
  `transType` varchar(50) NOT NULL,
  `amount` int(11) NOT NULL,
  `floatRemain` int(11) NOT NULL DEFAULT 0,
  `phoneNo` int(10) NOT NULL,
  `date` varchar(10) NOT NULL,
  `time` varchar(10) NOT NULL,
  `addedBy` varchar(50) NOT NULL,
  `UpdatedBy` varchar(50) NOT NULL,
  `updateDate` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transaction`
--

INSERT INTO `transaction` (`transID`, `company`, `transType`, `amount`, `floatRemain`, `phoneNo`, `date`, `time`, `addedBy`, `UpdatedBy`, `updateDate`) VALUES
(30, 'airtelmoney', 'float', 50000, 50000, 765544045, '2022-03-12', '05:50:48pm', 'victor', '', ''),
(38, 'airtelmoney', 'kutoa', 10000, 60000, 765544045, '2022-03-12', '07:27:47pm', 'victor', '', ''),
(45, 'airtelmoney', 'kuweka', 10000, 50000, 765544045, '2022-03-12', '07:40:26pm', 'victor', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userID` int(11) NOT NULL,
  `fullName` varchar(500) NOT NULL,
  `userName` varchar(500) NOT NULL,
  `DOB` varchar(10) NOT NULL,
  `phone` int(10) NOT NULL,
  `Password` varbinary(500) NOT NULL,
  `Status` varchar(50) NOT NULL DEFAULT 'active',
  `Role` varchar(50) NOT NULL,
  `dateCreated` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userID`, `fullName`, `userName`, `DOB`, `phone`, `Password`, `Status`, `Role`, `dateCreated`) VALUES
(1, 'sentimea stephano', 'mea', '2022-03-03', 765656765, 0x243279243130245a45634859336961586332472f7078734c556930656546726971534f3653792e6b64364756382f38554e7049496f4f526841705a79, 'active', 'shopkeeper', '2022-03-03'),
(4, 'Mghani Philip', 'Mghani', '2022-03-01', 789786758, 0x2432792431302430696a476f52366f2e4d37345557723648313855752e76524d6449565a642f3154566464647935614f72436972524776714d4f7057, 'active', 'admin', '2022-03-15'),
(6, 'sentimea stephano', 'victor', '2022-03-16', 765544045, 0x2432792431302432666d643071557a6737797a64525074633846674b75756f5150616578503661434268484b73647a686e30742e4c50395037436a71, 'active', 'agent', '2022-03-05');

-- --------------------------------------------------------

--
-- Table structure for table `vendor`
--

CREATE TABLE `vendor` (
  `vendorID` int(11) NOT NULL,
  `fullName` varchar(500) NOT NULL,
  `email` varchar(500) DEFAULT NULL,
  `mobile` int(10) NOT NULL,
  `phone2` int(10) DEFAULT NULL,
  `Address` varchar(50) NOT NULL,
  `registerDate` varchar(10) NOT NULL,
  `Status` varchar(10) NOT NULL,
  `registerBy` varchar(50) NOT NULL,
  `updateBy` varchar(50) NOT NULL,
  `updatedDate` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vendor`
--

INSERT INTO `vendor` (`vendorID`, `fullName`, `email`, `mobile`, `phone2`, `Address`, `registerDate`, `Status`, `registerBy`, `updateBy`, `updatedDate`) VALUES
(2, 'Stephano sentimea', 'elimu.gabriel@yahoo.com', 708897679, 0, 'arusha', '2022-03-03', 'active', 'mea', 'mea', '2022-03-04'),
(3, 'Stephano sentimea', 'admin@gmail.com', 708897679, 0, 'arusha', '2022-03-04', 'active', 'mea', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cash`
--
ALTER TABLE `cash`
  ADD PRIMARY KEY (`cashID`);

--
-- Indexes for table `cash_shopkeeper`
--
ALTER TABLE `cash_shopkeeper`
  ADD PRIMARY KEY (`cashIDS`);

--
-- Indexes for table `floata`
--
ALTER TABLE `floata`
  ADD PRIMARY KEY (`floatID`);

--
-- Indexes for table `item`
--
ALTER TABLE `item`
  ADD PRIMARY KEY (`itemID`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`messageID`);

--
-- Indexes for table `purchase`
--
ALTER TABLE `purchase`
  ADD PRIMARY KEY (`purchaseID`);

--
-- Indexes for table `sales`
--
ALTER TABLE `sales`
  ADD PRIMARY KEY (`saleID`);

--
-- Indexes for table `seniortrans`
--
ALTER TABLE `seniortrans`
  ADD PRIMARY KEY (`StransID`);

--
-- Indexes for table `senior_cash`
--
ALTER TABLE `senior_cash`
  ADD PRIMARY KEY (`ScashID`);

--
-- Indexes for table `transaction`
--
ALTER TABLE `transaction`
  ADD PRIMARY KEY (`transID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userID`);

--
-- Indexes for table `vendor`
--
ALTER TABLE `vendor`
  ADD PRIMARY KEY (`vendorID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cash`
--
ALTER TABLE `cash`
  MODIFY `cashID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `cash_shopkeeper`
--
ALTER TABLE `cash_shopkeeper`
  MODIFY `cashIDS` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `floata`
--
ALTER TABLE `floata`
  MODIFY `floatID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `item`
--
ALTER TABLE `item`
  MODIFY `itemID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `messageID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=95;

--
-- AUTO_INCREMENT for table `purchase`
--
ALTER TABLE `purchase`
  MODIFY `purchaseID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `sales`
--
ALTER TABLE `sales`
  MODIFY `saleID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `seniortrans`
--
ALTER TABLE `seniortrans`
  MODIFY `StransID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `senior_cash`
--
ALTER TABLE `senior_cash`
  MODIFY `ScashID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `transaction`
--
ALTER TABLE `transaction`
  MODIFY `transID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `vendor`
--
ALTER TABLE `vendor`
  MODIFY `vendorID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
