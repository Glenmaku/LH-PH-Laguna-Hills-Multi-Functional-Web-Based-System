-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 12, 2023 at 07:30 PM
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
-- Table structure for table `transac_reserv_court`
--

CREATE TABLE `transac_reserv_court` (
  `transaction_no` varchar(9) NOT NULL,
  `t_name` varchar(255) NOT NULL,
  `reserv_date_start` date NOT NULL,
  `reserv_date_end` date NOT NULL,
  `time_start` varchar(50) NOT NULL,
  `time_end` varchar(50) NOT NULL,
  `price` int(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transac_reserv_court`
--

INSERT INTO `transac_reserv_court` (`transaction_no`, `t_name`, `reserv_date_start`, `reserv_date_end`, `time_start`, `time_end`, `price`, `created_at`) VALUES
('2023-0033', 'Vennices Cosinos', '0012-03-12', '0001-03-12', '', '', 0, '2023-02-12 08:48:27'),
('2023-0034', 'Vennices Cosinos', '0011-04-13', '0041-03-12', '', '', 0, '2023-02-12 08:49:02'),
('2023-0035', 'Vennices Cosinos', '0004-03-22', '0034-02-23', '12:34', '14:34', 3000, '2023-02-12 08:54:06'),
('2023-0036', 'thirty six', '3123-02-11', '0234-04-23', '', '', 0, '2023-02-12 09:09:27'),
('2023-0037', 'hehe hehe', '0032-04-12', '0003-03-12', '14:34', '02:32', 1960, '2023-02-12 09:32:39'),
('2023-0038', 'Kemeko Chan', '2023-02-14', '2023-02-17', '05:30', '17:30', 12350, '2023-02-12 12:43:14'),
('2023-0039', 'Vennicess Cosinossss', '2023-02-18', '2023-02-18', '', '10:30', 8550, '2023-02-12 13:05:54'),
('2023-0040', 'Vennices Cosinos', '2023-02-20', '2023-02-20', '04:30', '16:30', 5760, '2023-02-12 13:47:00');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
