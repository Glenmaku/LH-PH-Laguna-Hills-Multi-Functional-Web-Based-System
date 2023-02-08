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
-- Table structure for table `transac_reserv_records`
--

CREATE TABLE `transac_reserv_records` (
  `records_transaction_no` int(255) NOT NULL,
  `t_name` varchar(255) NOT NULL,
  `total` int(255) NOT NULL,
  `discount` int(255) NOT NULL,
  `remarks` varchar(400) NOT NULL,
  `reserv_payment` int(255) NOT NULL,
  `reserv_change` int(255) NOT NULL,
  `remaining_balance` int(255) NOT NULL,
  `date_created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transac_reserv_records`
--

INSERT INTO `transac_reserv_records` (`records_transaction_no`, `t_name`, `total`, `discount`, `remarks`, `reserv_payment`, `reserv_change`, `remaining_balance`, `date_created`) VALUES
(8888, '', 0, 5, '0', 0, 0, 0, '2023-02-02 19:51:37'),
(567, 'POOOOOOOOOOSHH', 689, 22, 'UNANG TRYYYY', 0, 0, 0, '2023-02-02 21:29:24'),
(574, 'TEN TERTEY SVEN', 2147483647, 30, 'bayad na siya', 0, 158, 0, '2023-02-03 10:38:00'),
(312, 'TEHN TERTEI NAYN', 2147483647, 25, 'may sukli pa siyang 4732 pesos only', 40000, 4732, 0, '2023-02-03 10:40:46'),
(315, 'elven sixtin', 6300, 30, 'may sukli pa', 17000, 900, 0, '2023-02-03 11:16:58'),
(400, 'elven fifty', 5460, 30, 'may change pa siya. ', 22000, 1840, 0, '2023-02-03 11:51:06'),
(401, 'elven fifthrie', 0, 3, 'may kulang pa siyang 1005 pesos', 15000, 0, 1005, '2023-02-03 11:54:02'),
(402, 'elven fiftyfive', 0, 5, '800 sukli', 16000, 800, 0, '2023-02-03 11:56:10'),
(405, 'alas dose', 14679, 5, 'ASDAS G', 15000, 321, 0, '2023-02-03 11:59:31'),
(11, '', 18000, 10, '', 20000, 2000, 0, '2023-02-06 18:45:09'),
(11, '', 40000, 20, '', 0, 0, 0, '2023-02-06 18:57:44'),
(11, '', 40000, 20, '', 40000, 0, 0, '2023-02-06 19:01:13'),
(11, 'Vennice Cosinosqw', 16000, 20, '', 16000, 0, 0, '2023-02-06 19:05:33'),
(11, 'sdsdfsdf', 36000, 10, '', 36000, 0, 0, '2023-02-06 19:07:13'),
(11, '132234', 27000, 10, '', 27000, 0, 0, '2023-02-06 19:10:46'),
(11, 'werwerwer', 40000, 20, '1111111111', 40000, 0, 0, '2023-02-06 19:17:36'),
(0, 'Vennice C', 27000, 10, '1111111111', 40000, 0, 0, '2023-02-06 19:52:30'),
(11, 'vennice C', 18000, 10, '', 18000, 0, 0, '2023-02-06 19:55:03'),
(12, 'ven cen', 36000, 10, '', 36000, 0, 0, '2023-02-06 20:01:55'),
(12, 'Vennice Cp', 25500, 15, '', 25500, 0, 0, '2023-02-06 20:08:19'),
(13, 'VVVVVVVVV', 28500, 5, '', 28500, 0, 0, '2023-02-06 20:43:03'),
(14, 'CCCCCCCCCCC', 285000, 5, '', 285000, 0, 0, '2023-02-06 20:44:42'),
(15, 'venssss', 38000, 5, '123123', 38000, 0, 0, '2023-02-06 21:04:27'),
(16, 'vems', 28500, 5, '11231231', 28500, 0, 0, '2023-02-06 21:06:46'),
(16, 'venssssss', 49000, 2, 'werw', 49000, 0, 0, '2023-02-06 21:10:22'),
(16, 'vensa', 38800, 3, '', 38800, 0, 0, '2023-02-06 21:14:00'),
(17, 'hehe', 45000, 10, '123123123', 45000, 0, 0, '2023-02-06 21:23:17'),
(18, 'eighteen', 42750, 5, 'rerwerwer', 42750, 0, 0, '2023-02-06 21:35:18'),
(19, 'nineteen', 42750, 5, '', 42750, 0, 0, '2023-02-06 21:39:35'),
(20, 'TWENTY', 45000, 0, '', 45000, 0, 0, '2023-02-06 22:13:54'),
(21, 'twentyone', 25200, 40, 'sdfsdfsdf', 25200, 0, 0, '2023-02-06 22:29:20'),
(22, 'twentytwo', 37050, 5, '234234', 37050, 0, 0, '2023-02-06 22:50:47'),
(30, 'Vennice Cosinoss', 3800, 5, '', 3800, 0, 0, '2023-02-07 17:46:48'),
(31, 'Vennice Cosinos', 15000, 0, '0', 0, 0, 0, '2023-02-07 17:47:28'),
(32, '', 12000, 0, '', 12000, 0, 0, '2023-02-07 17:48:18'),
(33, 'wewr', 5760, 4, '', 6000, 240, 0, '2023-02-07 17:56:33'),
(36, '', 60, 0, '', 60, 0, 0, '2023-02-08 10:33:27'),
(37, '234', 2332, 0, '', 2332, 0, 0, '2023-02-08 11:10:41'),
(38, 'Vennice Cosinos', 900, 0, '', 900, 0, 0, '2023-02-08 11:15:54');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
