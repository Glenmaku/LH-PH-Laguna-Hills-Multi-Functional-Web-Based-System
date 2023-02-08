-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 08, 2023 at 12:44 PM
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
-- Table structure for table `assigned_lot`
--

CREATE TABLE `assigned_lot` (
  `assign_no` int(11) NOT NULL,
  `lot_id` varchar(12) NOT NULL,
  `owner_username` varchar(12) NOT NULL,
  `ownership` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `assigned_lot`
--

INSERT INTO `assigned_lot` (`assign_no`, `lot_id`, `owner_username`, `ownership`) VALUES
(7, 'blk1lot3', 'LHS2023-0033', 'homeowner,Lotowner'),
(8, 'blk1lot2', 'LHS2023-0033', 'homeowner,Lotowner'),
(9, 'blk1lot2', 'LHS2023-0031', 'homeowner'),
(10, 'blk1lot1', 'LHS2023-0035', 'homeowner,Lotowner'),
(11, 'blk1lot2', 'LHS2023-0035', 'homeowner'),
(12, 'blk1lot3', 'LHS2023-0035', 'Lotowner'),
(13, 'blk1lot1', 'LHS2023-0002', 'homeowner,Lotowner'),
(14, 'blk1lot2', 'LHS2023-0002', 'homeowner,Lotowner'),
(15, 'blk1lot3', 'LHS2023-0002', 'homeowner,Lotowner'),
(16, 'blk1lot1', 'LHS2023-0004', 'homeowner'),
(17, 'blk1lot3', 'LHS2023-0001', 'homeowner'),
(18, 'blk1lot5', 'LHS2023-0001', 'homeowner'),
(19, 'blk1lot10', 'LHS2023-0008', 'homeowner'),
(20, 'blk1lot2', 'LHS2023-0004', 'homeowner'),
(21, 'blk1lot3', 'LHS2023-0004', 'homeowner'),
(23, 'blk1lot4', 'LHS2023-0004', 'homeowner'),
(24, 'blk1lot5', 'LHS2023-0004', 'homeowner,Lotowner');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `assigned_lot`
--
ALTER TABLE `assigned_lot`
  ADD PRIMARY KEY (`assign_no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `assigned_lot`
--
ALTER TABLE `assigned_lot`
  MODIFY `assign_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
