-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 08, 2023 at 06:33 PM
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
-- Database: `mapdata`
--

-- --------------------------------------------------------

--
-- Table structure for table `association_dues`
--

CREATE TABLE `association_dues` (
  `Lot_ID` varchar(15) NOT NULL,
  `Monthly_Dues` int(10) NOT NULL,
  `Yearly_Dues` int(10) NOT NULL,
  `Status` text NOT NULL,
  `Balance` int(15) NOT NULL,
  `Remarks` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `association_dues`
--

INSERT INTO `association_dues` (`Lot_ID`, `Monthly_Dues`, `Yearly_Dues`, `Status`, `Balance`, `Remarks`) VALUES
('blk1lot1', 481, 5767, '', 0, ''),
('blk1lot2', 1087, 13046, '', 0, ''),
('blk1lot3', 932, 11189, '', 0, ''),
('blk1lot4', 945, 11340, '', 0, ''),
('blk1lot5', 988, 11858, '', 0, ''),
('blk2lot1', 2354, 28253, '', 0, ''),
('blk2lot2', 1150, 13802, '', 0, ''),
('blk2lot3', 1231, 14774, '', 0, ''),
('blk2lot4', 1213, 14558, '', 0, ''),
('blk2lot5', 1060, 12722, '', 0, ''),
('blk3lot1', 743, 8921, '', 0, ''),
('blk3lot2', 767, 9202, '', 0, ''),
('blk3lot3', 511, 6134, '', 0, ''),
('blk3lot4', 515, 6178, '', 0, ''),
('blk3lot5', 518, 6221, '', 0, ''),
('blk4lot1', 826, 9914, '', 0, ''),
('blk4lot2', 893, 10714, '', 0, ''),
('blk4lot3', 416, 4990, '', 0, ''),
('blk4lot4', 513, 6156, '', 0, ''),
('blk4lot5', 392, 4709, '', 0, ''),
('blk5lot1', 911, 10930, '', 0, ''),
('blk5lot2', 909, 10908, '', 0, ''),
('blk5lot3', 882, 10584, '', 0, ''),
('blk5lot4', 1112, 13349, '', 0, ''),
('blk5lot5', 952, 11426, '', 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `lot_information`
--

CREATE TABLE `lot_information` (
  `Lot_ID` varchar(15) NOT NULL,
  `Block` int(3) NOT NULL,
  `Lot` int(3) NOT NULL,
  `Street` varchar(20) NOT NULL,
  `Status` varchar(20) NOT NULL,
  `Area` int(5) NOT NULL,
  `Price` int(10) NOT NULL,
  `Remarks` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `lot_information`
--

INSERT INTO `lot_information` (`Lot_ID`, `Block`, `Lot`, `Street`, `Status`, `Area`, `Price`, `Remarks`) VALUES
('blk1lot1', 1, 1, '', 'occupied', 267, 0, ''),
('blk1lot2', 1, 2, '', 'occupied', 604, 0, ''),
('blk1lot3', 1, 3, '', 'occupied', 518, 0, ''),
('blk1lot4', 1, 4, '', 'occupied', 525, 0, ''),
('blk1lot5', 1, 5, '', 'occupied', 549, 0, ''),
('blk2lot1', 2, 1, '', 'available', 1308, 0, ''),
('blk2lot2', 2, 2, '', 'occupied', 639, 0, ''),
('blk2lot3', 2, 3, '', 'available', 684, 0, ''),
('blk2lot4', 2, 4, '', 'occupied', 674, 0, ''),
('blk2lot5', 2, 5, '', 'occupied', 589, 0, ''),
('blk3lot1', 3, 1, '', 'occupied', 413, 0, ''),
('blk3lot2', 3, 2, '', 'occupied', 426, 0, ''),
('blk3lot3', 3, 3, '', 'occupied', 284, 0, ''),
('blk3lot4', 3, 4, '', 'occupied ', 286, 0, ''),
('blk3lot5', 3, 5, '', 'occupied', 288, 0, ''),
('blk4lot1', 4, 1, '', 'occupied', 459, 0, ''),
('blk4lot2', 4, 2, '', 'occupied', 496, 0, ''),
('blk4lot3', 4, 3, '', 'occupied', 231, 0, ''),
('blk4lot4', 4, 4, '', 'occupied', 285, 0, ''),
('blk4lot5', 4, 5, '', 'occupied', 218, 0, ''),
('blk5lot1', 5, 1, '', 'occupied', 506, 0, ''),
('blk5lot2', 5, 2, '', 'occupied', 505, 0, ''),
('blk5lot3', 5, 3, '', 'occupied', 490, 0, ''),
('blk5lot4', 5, 4, '', 'occupied', 618, 0, ''),
('blk5lot5', 5, 5, '', 'occupied ', 529, 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `owner_information`
--

CREATE TABLE `owner_information` (
  `Lot_ID` varchar(15) NOT NULL,
  `Full_Name` text NOT NULL,
  `Ownership` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `association_dues`
--
ALTER TABLE `association_dues`
  ADD PRIMARY KEY (`Lot_ID`);

--
-- Indexes for table `lot_information`
--
ALTER TABLE `lot_information`
  ADD PRIMARY KEY (`Lot_ID`);

--
-- Indexes for table `owner_information`
--
ALTER TABLE `owner_information`
  ADD PRIMARY KEY (`Lot_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
