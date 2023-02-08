-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 08, 2023 at 12:50 PM
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
-- Table structure for table `transac_reserv_miming`
--

CREATE TABLE `transac_reserv_miming` (
  `transaction_no` int(255) NOT NULL,
  `t_name` varchar(255) NOT NULL,
  `reserv_date_start` date NOT NULL,
  `reserv_date_end` date NOT NULL,
  `time_start` varchar(50) NOT NULL,
  `time_end` varchar(50) NOT NULL,
  `price` int(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transac_reserv_miming`
--

INSERT INTO `transac_reserv_miming` (`transaction_no`, `t_name`, `reserv_date_start`, `reserv_date_end`, `time_start`, `time_end`, `price`, `created_at`) VALUES
(19, 'nineteen', '2023-10-19', '2023-10-19', '4', '5', 14250, '2023-02-06 21:39:35'),
(20, 'TWENTY', '2023-10-20', '2023-10-20', '19', '19', 16000, '2023-02-06 22:13:54'),
(21, 'twentyone', '2023-10-21', '2023-10-21', '6am', '6am', 9000, '2023-02-06 22:29:20'),
(22, 'twentytwo', '2023-10-22', '2023-10-22', '22', '22', 13300, '2023-02-06 22:50:47'),
(31, 'Vennice Cosinos', '2023-01-01', '2023-01-01', '6am', '10am', 6000, '2023-02-07 17:47:28'),
(32, '', '2023-10-10', '2023-10-10', '6am', '10am', 4000, '2023-02-07 17:48:18'),
(33, 'wewr', '2003-02-10', '2003-02-10', '6am', '10am', 1920, '2023-02-07 17:56:33'),
(36, '', '2023-02-10', '2033-10-20', '3234234', '23424', 20, '2023-02-08 10:33:27'),
(37, 'werwer', '0324-02-10', '0425-02-23', '234', '22', 3, '2023-02-08 10:44:36'),
(37, '', '3433-02-23', '0000-00-00', '345', '234', 243, '2023-02-08 10:51:03'),
(37, '', '3223-02-10', '3343-02-10', '234', '2222', 3, '2023-02-08 10:58:16'),
(37, '234', '0324-02-01', '4234-03-03', '1', '2', 123, '2023-02-08 11:07:35'),
(37, '234', '3123-02-10', '1343-02-13', '12', '22', 110, '2023-02-08 11:10:24'),
(37, '234', '3123-02-10', '1343-02-13', '12345', '2223', 110, '2023-02-08 11:10:41'),
(38, '', '0000-00-00', '0000-00-00', '23', '11', 300, '2023-02-08 11:15:36'),
(38, '', '0000-00-00', '0000-00-00', '23', '11', 300, '2023-02-08 11:15:50'),
(38, 'Vennice Cosinos', '0000-00-00', '0000-00-00', '23', '11', 300, '2023-02-08 11:15:54');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
