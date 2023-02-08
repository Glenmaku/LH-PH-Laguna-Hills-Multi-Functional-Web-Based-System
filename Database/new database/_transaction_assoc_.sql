-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 08, 2023 at 12:48 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lhph`
--

-- --------------------------------------------------------

--
-- Table structure for table `transaction_assoc`
--

CREATE TABLE `transaction_assoc` (
  `transaction_num` int(5) NOT NULL,
  `Lot_ID` varchar(15) NOT NULL,
  `assoc_selectedBal` decimal(20,2) NOT NULL,
  `assoc_payment` decimal(20,2) NOT NULL,
  `assoc_change` decimal(20,2) NOT NULL,
  `assoc_penalty` decimal(20,2) NOT NULL,
  `assoc_discount` decimal(20,2) NOT NULL,
  `balance_val` decimal(20,2) NOT NULL,
  `assoc_date_payment` date NOT NULL DEFAULT current_timestamp(),
  `assoc_remarks` varchar(100) NOT NULL,
  `idnum` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transaction_assoc`
--


--
-- Indexes for dumped tables
--

--
-- Indexes for table `transaction_assoc`
--
ALTER TABLE `transaction_assoc`
  ADD PRIMARY KEY (`idnum`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `transaction_assoc`
--
ALTER TABLE `transaction_assoc`
  MODIFY `idnum` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
