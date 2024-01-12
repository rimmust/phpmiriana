-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 12, 2024 at 06:46 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.1.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `database`
--

-- --------------------------------------------------------

--
-- Table structure for table `country`
--

CREATE TABLE `country` (
  `countryID` int(11) NOT NULL,
  `countryname` varchar(30) NOT NULL,
  `townId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `customerid` int(11) NOT NULL,
  `password` varchar(30) NOT NULL,
  `firstname` varchar(20) NOT NULL,
  `lastname` varchar(20) NOT NULL,
  `Dob` date NOT NULL,
  `Adress` varchar(30) NOT NULL,
  `contactnumber` int(11) NOT NULL,
  `streetid` int(11) NOT NULL,
  `postcode` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `genre`
--

CREATE TABLE `genre` (
  `genreID` int(11) NOT NULL,
  `genrename` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `genre`
--

INSERT INTO `genre` (`genreID`, `genrename`) VALUES
(1, 'pop'),
(2, 'rock');

-- --------------------------------------------------------

--
-- Table structure for table `newaccount`
--

CREATE TABLE `newaccount` (
  `customerid` int(11) NOT NULL,
  `username` int(11) NOT NULL,
  `firstname` varchar(20) NOT NULL,
  `lastname` varchar(10) NOT NULL,
  `dob` date NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `newaccount`
--

INSERT INTO `newaccount` (`customerid`, `username`, `firstname`, `lastname`, `dob`, `email`, `password`) VALUES
(1, 0, 'f', 'fr', '2004-03-23', 'hello@gmail.com', '$2y$10$gCwbPAFVNhx.h'),
(2, 0, 'hello', 'grixti', '2009-04-03', 'h@gmail.com', '$2y$10$MkG5WBO2dGf89'),
(3, 0, 'w', 'grixti', '2009-04-03', '3@gmail.com', '$2y$10$3ButZj.EIZN4J'),
(4, 0, 'hello', 'grixti', '2003-03-02', '2@gmail.com', '$2y$10$BIJw6Em7yAhlS'),
(5, 0, 'jos', 'grixti', '1998-08-20', 'j@gmail.com', '$2y$10$mnCaDxLjBsMDl'),
(6, 0, 'mike', 'grixti', '2008-02-02', 'p@gmail.com', '$2y$10$x4cFtxX9nK4t0'),
(7, 0, 'mir', 'grixti', '2004-04-02', 'o@gmail.com', '$2y$10$29SAm0WL2kq8q'),
(8, 0, 'thomas', 'grech', '2017-03-02', 't@gmail.com', '$2y$10$ZIYljJJeXdSQb'),
(9, 0, 'rudoplh', 'grixti', '2009-03-02', 'r@gmail.com', '$2y$10$McfKwq18MMiUY'),
(10, 0, 'tim', 'grech', '2000-02-01', 'q@gmail.com', '$2y$10$KbYhFglKXojuT'),
(11, 0, 'jos', 'grixti', '2009-03-02', '4@gmail.com', '$2y$10$V1RF5hhg1sg0L'),
(12, 0, 'pawla', 'amato', '1979-02-01', 'pawla@gmail.com', '$2y$10$abOD02/siA9nK');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `vinylrecord` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `genreID` int(11) NOT NULL,
  `description` varchar(30) NOT NULL,
  `StockQty` int(11) NOT NULL,
  `Bacthnumber` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `vat` int(11) NOT NULL,
  `supplierId` int(11) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `productorder`
--

CREATE TABLE `productorder` (
  `productorderId` int(11) NOT NULL,
  `userId` int(11) NOT NULL,
  `StatusID` int(11) NOT NULL,
  `Confirmed` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `shoppingcart`
--

CREATE TABLE `shoppingcart` (
  `shoppingcartID` int(11) NOT NULL,
  `customeriD` int(11) NOT NULL,
  `vinylrecord` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE `status` (
  `StatusId` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `street`
--

CREATE TABLE `street` (
  `streetId` int(11) NOT NULL,
  `streetname` varchar(20) NOT NULL,
  `townId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `supplier`
--

CREATE TABLE `supplier` (
  `supplireID` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `adress` varchar(20) NOT NULL,
  `streetId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `town`
--

CREATE TABLE `town` (
  `townID` int(11) NOT NULL,
  `townName` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `wishlist`
--

CREATE TABLE `wishlist` (
  `wishlistID` int(11) NOT NULL,
  `namevinylid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `country`
--
ALTER TABLE `country`
  ADD PRIMARY KEY (`countryID`),
  ADD KEY `FK_CountryTown` (`townId`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`customerid`),
  ADD KEY `FK_customerStreet` (`streetid`);

--
-- Indexes for table `genre`
--
ALTER TABLE `genre`
  ADD PRIMARY KEY (`genreID`);

--
-- Indexes for table `newaccount`
--
ALTER TABLE `newaccount`
  ADD PRIMARY KEY (`customerid`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`vinylrecord`),
  ADD KEY `FK_ProductGenre` (`genreID`),
  ADD KEY `FK_ProductSupplireid` (`supplierId`);

--
-- Indexes for table `productorder`
--
ALTER TABLE `productorder`
  ADD PRIMARY KEY (`productorderId`),
  ADD KEY `FK_Productstatus` (`StatusID`),
  ADD KEY `FK_customerID` (`userId`);

--
-- Indexes for table `shoppingcart`
--
ALTER TABLE `shoppingcart`
  ADD PRIMARY KEY (`shoppingcartID`),
  ADD KEY `FK_shoppingcartcustomerid` (`customeriD`),
  ADD KEY `vinylrecord` (`vinylrecord`);

--
-- Indexes for table `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`StatusId`);

--
-- Indexes for table `street`
--
ALTER TABLE `street`
  ADD PRIMARY KEY (`streetId`),
  ADD KEY `FK_StreetTown` (`townId`);

--
-- Indexes for table `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`supplireID`);

--
-- Indexes for table `town`
--
ALTER TABLE `town`
  ADD PRIMARY KEY (`townID`);

--
-- Indexes for table `wishlist`
--
ALTER TABLE `wishlist`
  ADD PRIMARY KEY (`wishlistID`),
  ADD KEY `namevinylid` (`namevinylid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `country`
--
ALTER TABLE `country`
  MODIFY `countryID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `customerid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `genre`
--
ALTER TABLE `genre`
  MODIFY `genreID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `newaccount`
--
ALTER TABLE `newaccount`
  MODIFY `customerid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `vinylrecord` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `productorder`
--
ALTER TABLE `productorder`
  MODIFY `productorderId` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `shoppingcart`
--
ALTER TABLE `shoppingcart`
  MODIFY `shoppingcartID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `status`
--
ALTER TABLE `status`
  MODIFY `StatusId` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `street`
--
ALTER TABLE `street`
  MODIFY `streetId` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `supplier`
--
ALTER TABLE `supplier`
  MODIFY `supplireID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `town`
--
ALTER TABLE `town`
  MODIFY `townID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `wishlist`
--
ALTER TABLE `wishlist`
  MODIFY `wishlistID` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `country`
--
ALTER TABLE `country`
  ADD CONSTRAINT `FK_CountryTown` FOREIGN KEY (`townId`) REFERENCES `town` (`townID`);

--
-- Constraints for table `customer`
--
ALTER TABLE `customer`
  ADD CONSTRAINT `FK_customerStreet` FOREIGN KEY (`streetid`) REFERENCES `street` (`streetId`);

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `FK_ProductGenre` FOREIGN KEY (`genreID`) REFERENCES `genre` (`genreID`),
  ADD CONSTRAINT `FK_ProductSupplireid` FOREIGN KEY (`supplierId`) REFERENCES `supplier` (`supplireID`);

--
-- Constraints for table `productorder`
--
ALTER TABLE `productorder`
  ADD CONSTRAINT `FK_Productstatus` FOREIGN KEY (`StatusID`) REFERENCES `status` (`StatusId`),
  ADD CONSTRAINT `FK_customerID` FOREIGN KEY (`userId`) REFERENCES `customer` (`customerid`);

--
-- Constraints for table `shoppingcart`
--
ALTER TABLE `shoppingcart`
  ADD CONSTRAINT `FK_shoppingcartcustomerid` FOREIGN KEY (`customeriD`) REFERENCES `customer` (`customerid`),
  ADD CONSTRAINT `vinylrecord` FOREIGN KEY (`vinylrecord`) REFERENCES `product` (`vinylrecord`);

--
-- Constraints for table `street`
--
ALTER TABLE `street`
  ADD CONSTRAINT `FK_StreetTown` FOREIGN KEY (`townId`) REFERENCES `town` (`townID`);

--
-- Constraints for table `wishlist`
--
ALTER TABLE `wishlist`
  ADD CONSTRAINT `wishlist_ibfk_1` FOREIGN KEY (`namevinylid`) REFERENCES `product` (`vinylrecord`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
