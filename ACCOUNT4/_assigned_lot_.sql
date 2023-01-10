-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 10, 2023 at 05:15 PM
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
  `lot_id` varchar(12) NOT NULL,
  `owner_username` varchar(12) NOT NULL,
  `ownership` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `assigned_lot`
--

INSERT INTO `assigned_lot` (`lot_id`, `owner_username`, `ownership`) VALUES
('blk1lot1', 'LHS2023-0010', 'on,on'),
('blk1lot1', 'LHS2023-0010', 'on,on'),
('blk1lot2', 'LHS2023-0009', ''),
('blk1lot2', 'LHS2023-0009', ''),
('blk1lot2', 'LHS2023-0007', ''),
('blk1lot12', 'LHS2023-0002', 'Array'),
('', '', 'homeowner,Lotowner'),
('', '', 'homeowner,Lotowner'),
('', '', 'homeowner,Lotowner'),
('', '', 'homeowner,Lotowner');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
