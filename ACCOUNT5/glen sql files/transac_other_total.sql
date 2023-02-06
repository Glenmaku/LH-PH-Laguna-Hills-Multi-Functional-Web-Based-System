-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 06, 2023 at 05:28 AM
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
-- Table structure for table `transac_other_total`
--

CREATE TABLE `transac_other_total` (
  `transaction_no` int(11) NOT NULL,
  `t_name` varchar(255) NOT NULL,
  `other_total` int(11) NOT NULL,
  `other_payment` int(11) NOT NULL,
  `other_remarks` varchar(400) NOT NULL,
  `other_change` int(255) NOT NULL,
  `other_remaining_balance` int(255) NOT NULL,
  `time_created` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transac_other_total`
--

INSERT INTO `transac_other_total` (`transaction_no`, `t_name`, `other_total`, `other_payment`, `other_remarks`, `other_change`, `other_remaining_balance`, `time_created`) VALUES
(13, 'mike zetchea', 369140, 400000, 'good', 30860, 0, '2023-02-05'),
(521, 'ONE', 6500, 7000, 'NONE', 0, 500, '2023-02-05');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `transac_other_total`
--
ALTER TABLE `transac_other_total`
  ADD PRIMARY KEY (`transaction_no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `transac_other_total`
--
ALTER TABLE `transac_other_total`
  MODIFY `transaction_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=522;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
