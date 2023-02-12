-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 12, 2023 at 07:23 PM
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
-- Table structure for table `all_transaction`
--

CREATE TABLE `all_transaction` (
  `transaction_num` varchar(9) NOT NULL,
  `transaction_name` varchar(40) NOT NULL,
  `Category` varchar(20) NOT NULL,
  `transaction_email` varchar(50) NOT NULL,
  `transaction_date` datetime NOT NULL DEFAULT current_timestamp(),
  `confirmed_by` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `all_transaction`
--

INSERT INTO `all_transaction` (`transaction_num`, `transaction_name`, `Category`, `transaction_email`, `transaction_date`, `confirmed_by`) VALUES
('2023-0001', 'Vennices Cosinos', 'Association Dues', '', '2023-02-10 07:13:19', ''),
('2023-0002', 'Vennices Cosinos', 'Association Dues', '', '2023-02-10 09:48:44', 'Vennice Zyna Cosino'),
('2023-0003', 'Vennices Cosinos', 'Association Dues', '', '2023-02-10 10:29:44', 'Vennice Zyna Cosino'),
('2023-0004', 'Vennices Cosinos', 'Association Dues', '', '2023-02-10 12:01:45', 'Vennice Zyna Cosino'),
('2023-0005', 'Vennices Cosinos', 'Association Dues', '', '2023-02-10 12:04:47', 'Vennice Zyna Cosino'),
('2023-0006', 'Vennices Cosinos', 'Association Dues', '', '2023-02-10 12:13:24', 'Vennice Zyna Cosino'),
('2023-0006', 'Vennices Cosinos', 'Association Dues', '', '2023-02-10 12:13:24', 'Vennice Zyna Cosino'),
('2023-0007', 'Vennices Cosinos', 'Association Dues', '', '2023-02-10 12:20:51', 'Vennice Zyna Cosino'),
('2023-0008', 'Vennices Cosinos', 'Association Dues', '', '2023-02-10 12:30:08', 'Vennice Zyna Cosino'),
('2023-0009', 'Vennices Cosinos', 'Association Dues', '', '2023-02-10 12:35:17', 'Vennice Zyna Cosino'),
('2023-0010', 'Vennices Cosinos', 'Association Dues', '', '2023-02-10 12:42:36', 'Vennice Zyna Cosino'),
('2023-0011', 'Vennices Cosinos', 'Association Dues', '', '2023-02-10 12:43:05', 'Vennice Zyna Cosino'),
('2023-0012', 'Vennices Cosinos', 'Association Dues', '', '2023-02-10 12:45:07', 'Vennice Zyna Cosino'),
('2023-0013', 'Vennices Cosinos', 'Association Dues', '', '2023-02-10 12:45:33', 'Vennice Zyna Cosino'),
('2023-0014', '', 'Association Dues', '', '2023-02-10 16:44:09', 'Vennice Zyna Cosino'),
('2023-0015', 'Vennices Cosinos', 'Association Dues', '', '2023-02-10 16:45:30', 'Vennice Zyna Cosino'),
('2023-0016', 'Vennices Cosinos', 'Association Dues', '', '2023-02-10 16:56:51', 'Vennice Zyna Cosino'),
('2023-0017', 'Vennices Cosinos', 'Association Dues', '', '2023-02-10 19:52:13', 'Vennice Zyna Cosino'),
('2023-0018', 'Vennices Cosinos', 'Association Dues', '', '2023-02-10 20:41:01', 'Vennice Zyna Cosino'),
('2023-0019', 'Vennices Cosinos', 'Association Dues', '', '2023-02-11 17:18:25', 'Vennice Zyna Cosino'),
('2023-0020', 'Vennices Cosinos', 'Association Dues', 'Cosinos', '2023-02-11 17:40:18', 'Vennice Zyna Cosino'),
('2023-0020', 'Vennices Cosinos', 'Association Dues', 'Cosinos', '2023-02-11 17:40:18', 'Vennice Zyna Cosino'),
('2023-0021', 'Vennices Cosinos', 'Association Dues', 'vennice.cosino001@gmail.com', '2023-02-11 17:43:04', 'Vennice Zyna Cosino'),
('2023-0022', 'Vennices Cosinos', 'Reservation', 'vennice.cosino001@gmail.com', '2023-02-12 02:08:00', 'Vennice Zyna Cosino'),
('2023-0023', 'Vennices Cosinos', 'Reservation', 'vennice.cosino001@gmail.com', '2023-02-12 02:08:02', 'Vennice Zyna Cosino'),
('2023-0024', 'Vennices Cosinos', 'Reservation', 'vennice.cosino001@gmail.com', '2023-02-12 02:08:02', 'Vennice Zyna Cosino'),
('2023-0025', 'Vennices Cosinos', 'Reservation', 'vennice.cosino001@gmail.com', '2023-02-12 02:08:02', 'Vennice Zyna Cosino'),
('2023-0025', 'Vennices Cosinos', 'Reservation', 'vennice.cosino001@gmail.com', '2023-02-12 02:08:03', 'Vennice Zyna Cosino'),
('2023-0025', 'Vennices Cosinos', 'Reservation', 'vennice.cosino001@gmail.com', '2023-02-12 02:08:03', 'Vennice Zyna Cosino'),
('2023-0026', 'Vennices Cosinos', 'Reservation', 'vennice.cosino001@gmail.com', '2023-02-12 02:08:05', 'Vennice Zyna Cosino'),
('2023-0027', 'Vennices Cosinos', 'Reservation', 'vennice.cosino001@gmail.com', '2023-02-12 02:10:10', 'Vennice Zyna Cosino'),
('2023-0028', 'Vennices Cosinos', 'Reservation', 'vennice.cosino001@gmail.com', '2023-02-12 02:10:13', 'Vennice Zyna Cosino'),
('2023-0029', 'Vennices Cosinos', 'Reservation', 'vennice.cosino001@gmail.com', '2023-02-12 02:40:23', 'Vennice Zyna Cosino'),
('2023-0030', 'Vennices Cosinos', 'Reservation', 'vennice.cosino001@gmail.com', '2023-02-12 02:44:04', 'Vennice Zyna Cosino'),
('2023-0031', 'Vennices Cosinos', 'Reservation', 'vennice.cosino001@gmail.com', '2023-02-12 02:51:04', 'Vennice Zyna Cosino'),
('2023-0032', 'qwe qwe', 'Reservation', 'qdfff', '2023-02-12 03:04:55', 'Vennice Zyna Cosino'),
('2023-0033', 'Vennices Cosinos', 'Reservation', 'vennice.cosino001@gmail.com', '2023-02-12 08:48:27', 'Vennice Zyna Cosino'),
('2023-0034', 'Vennices Cosinos', 'Reservation', 'vennice.cosino001@gmail.com', '2023-02-12 08:49:02', 'Vennice Zyna Cosino'),
('2023-0035', 'Vennices Cosinos', 'Reservation', 'vennice.cosino001@gmail.com', '2023-02-12 08:54:06', 'Vennice Zyna Cosino'),
('2023-0036', 'thirty six', 'Reservation', 'thirthysix@gmail', '2023-02-12 09:09:27', 'Vennice Zyna Cosino'),
('2023-0037', 'hehe hehe', 'Reservation', 'sdfsdfsdf', '2023-02-12 09:32:39', 'Vennice Zyna Cosino'),
('2023-0038', 'Kemeko Chan', 'Reservation', 'vennice01@gmail.com', '2023-02-12 12:43:14', 'Vennice Zyna Cosino'),
('2023-0039', 'Vennicess Cosinossss', 'Reservation', 'fedsf', '2023-02-12 13:05:54', 'Vennice Zyna Cosino'),
('2023-0040', 'Vennices Cosinos', 'Reservation', 'vennice.cosino001@gmail.com', '2023-02-12 13:47:00', 'Vennice Zyna Cosino'),
('2023-0041', 'Vennices Cosinos', 'Other Services', 'vennice.cosino001@gmail.com', '2023-02-13 00:01:43', 'Vennice Zyna Cosino'),
('2023-0042', 'Vennices Cosinos', 'Other Services', 'vennice.cosino001@gmail.com', '2023-02-13 00:26:27', 'Vennice Zyna Cosino'),
('2023-0043', 'Vennices Cosinoss', 'Association Dues', 'vennice.cosino001@gmail.com', '2023-02-13 00:38:16', 'Vennice Zyna Cosino');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
