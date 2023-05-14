-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 12, 2023 at 07:25 PM
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
  `transaction_num` varchar(9) NOT NULL,
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
('2023-0001', 'blk1lot2', '10000.00', '10200.00', '0.00', '200.00', '0.00', '10200.00', '2023-02-10', '', 18),
('2023-0002', 'blk1lot2', '10000.00', '10002.00', '0.00', '2.00', '0.00', '10002.00', '2023-02-10', 'heheeee', 19),
('2023-0003', 'blk1lot2', '1.00', '1.00', '0.00', '0.00', '0.00', '1.00', '2023-02-10', '', 20),
('2023-0004', 'blk1lot2', '1.60', '1.60', '0.00', '0.00', '0.00', '1.60', '2023-02-10', '', 21),
('2023-0005', 'blk1lot2', '1.00', '1.00', '0.00', '0.00', '0.00', '1.00', '2023-02-10', '', 22),
('2023-0006', 'blk1lot2', '1.00', '1.00', '0.00', '0.00', '0.00', '1.00', '2023-02-10', '', 23),
('2023-0006', 'blk1lot2', '1.00', '1.00', '0.00', '0.00', '0.00', '1.00', '2023-02-10', '', 24),
('2023-0007', 'blk1lot2', '1.00', '1.00', '0.00', '0.00', '0.00', '1.00', '2023-02-10', 'wer', 25),
('2023-0008', 'blk1lot2', '1.00', '1.00', '0.00', '0.00', '0.00', '1.00', '2023-02-10', '', 26),
('2023-0009', 'blk1lot2', '1.00', '1.00', '0.00', '0.00', '0.00', '1.00', '2023-02-10', '', 27),
('2023-0010', 'blk1lot2', '1.00', '1.00', '0.00', '0.00', '0.00', '1.00', '2023-02-10', '', 28),
('2023-0011', 'blk1lot2', '1.00', '1.00', '0.00', '0.00', '0.00', '1.00', '2023-02-10', '', 29),
('2023-0012', 'blk1lot2', '1.00', '1.00', '0.00', '0.00', '0.00', '1.00', '2023-02-10', '', 30),
('2023-0013', 'blk1lot2', '1.00', '1.00', '0.00', '0.00', '0.00', '1.00', '2023-02-10', 'hoho', 31),
('2023-0014', 'blk1lot2', '1.00', '1.00', '0.00', '0.00', '0.00', '1.00', '2023-02-10', 'qweqwe', 32),
('2023-0015', 'blk1lot2', '1.00', '1.00', '0.00', '0.00', '0.00', '1.00', '2023-02-10', '123', 33),
('2023-0016', 'blk1lot2', '1.00', '1.00', '0.00', '0.00', '0.00', '1.00', '2023-02-10', 'wwww', 34),
('2023-0017', 'blk1lot2', '20.00', '20.00', '0.00', '0.00', '0.00', '20.00', '2023-02-10', 'er', 35),
('2023-0018', 'blk1lot2', '3000.00', '3100.00', '0.00', '100.00', '0.00', '3100.00', '2023-02-10', '', 36),
('2023-0019', 'blk1lot1', '2.00', '2.00', '0.00', '0.00', '0.00', '2.00', '2023-02-11', 'ewer werw wer wer wer ', 37),
('2023-0020', 'blk1lot1', '1.00', '1.00', '0.00', '0.00', '0.00', '1.00', '2023-02-11', 'qwe qweq qwe qwe', 38),
('2023-0020', 'blk1lot1', '1.00', '1.00', '0.00', '0.00', '0.00', '1.00', '2023-02-11', 'qwe qweq qwe qwe', 39),
('2023-0021', 'blk1lot1', '2.00', '2.00', '0.00', '0.00', '0.00', '2.00', '2023-02-11', '', 40),
('2023-0043', 'blk10lot1', '1.00', '301.00', '0.00', '300.00', '0.00', '301.00', '2023-02-13', 'Trial for all final', 41);

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
  MODIFY `idnum` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
