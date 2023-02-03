-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 03, 2023 at 05:09 AM
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
(405, 'alas dose', 14679, 5, 'ASDAS G', 15000, 321, 0, '2023-02-03 11:59:31');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
