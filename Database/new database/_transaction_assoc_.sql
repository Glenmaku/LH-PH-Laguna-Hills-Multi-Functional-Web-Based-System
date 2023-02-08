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

INSERT INTO `transaction_assoc` (`transaction_num`, `Lot_ID`, `assoc_selectedBal`, `assoc_payment`, `assoc_change`, `assoc_penalty`, `assoc_discount`, `balance_val`, `assoc_date_payment`, `assoc_remarks`, `idnum`) VALUES
(3, 'blk10lot12', '10000.00', '10000.00', '400.00', '100.00', '500.00', '0.00', '2023-01-25', 'twice', 2),
(3, 'blk10lot12', '10000.00', '10000.00', '400.00', '100.00', '500.00', '0.00', '2023-01-25', 'hihi', 3),
(4, 'blk10lot12', '20000.00', '19500.00', '300.00', '200.00', '1000.00', '0.00', '2023-01-25', 'hehe change', 4),
(6, 'blk10lot13', '48168.00', '49000.00', '240.40', '3000.00', '2408.40', '0.00', '2023-01-25', 'hihi', 6),
(7, 'blk1lot1', '100000.00', '100000.00', '0.00', '3000.00', '3000.00', '100000.00', '2023-02-06', 'sdf', 7),
(8, 'blk1lot4', '26460.00', '0.00', '0.00', '0.00', '0.00', '0.00', '2023-02-06', '', 8),
(9, 'blk1lot4', '26460.00', '26460.00', '0.00', '0.00', '0.00', '26460.00', '2023-02-06', '', 9),
(10, 'blk1lot3', '207925.20', '300000.00', '0.00', '0.00', '0.00', '300000.00', '2023-02-06', '', 10),
(25, 'blk1lot1', '30000.00', '28600.00', '0.00', '100.00', '1500.00', '28600.00', '2023-02-07', 'aa', 11),
(26, 'blk10lot12', '6411.20', '7090.64', '0.00', '1000.00', '320.56', '7090.64', '2023-02-07', '', 12),
(27, 'blk1lot2', '100000.00', '95500.00', '0.00', '500.00', '5000.00', '95500.00', '2023-02-07', 'hello', 13),
(28, 'blk1lot1', '242.60', '1194.08', '0.00', '1000.00', '48.52', '1194.08', '2023-02-07', '2', 14),
(29, 'blk1lot2', '5000.00', '0.00', '0.00', '0.00', '0.00', '0.00', '2023-02-07', 'rt', 15);

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
