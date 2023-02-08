-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 08, 2023 at 12:42 PM
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
  `transaction_num` int(5) NOT NULL,
  `transaction_name` varchar(40) NOT NULL,
  `Category` varchar(20) NOT NULL,
  `transaction_date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `all_transaction`
--

INSERT INTO `all_transaction` (`transaction_num`, `transaction_name`, `Category`, `transaction_date`) VALUES
(1, 'venven', '', '2023-01-23 18:33:45'),
(2, 'etertertert', '', '2023-01-23 18:40:58'),
(3, 'hell Ven', '', '2023-01-25 00:04:45'),
(4, 'Vennice Cosino', '', '2023-01-25 00:08:31'),
(5, 'blk10lot12', '', '2023-01-25 00:25:33'),
(6, '', '', '2023-01-25 04:45:17'),
(7, '', '', '2023-02-06 06:37:34'),
(8, 'Vennice Cosino', '', '2023-02-06 08:43:14'),
(9, 'Vennice Cosino', '', '2023-02-06 08:48:29'),
(10, 'Vennice Cosino', '', '2023-02-06 09:10:24'),
(0, 'Vennice C', 'Reservation', '2023-02-06 19:52:30'),
(11, 'vennice C', 'Reservation', '2023-02-06 19:55:03'),
(12, 'ven cen', 'Reservation', '2023-02-06 20:01:55'),
(12, 'Vennice Cp', 'Reservation', '2023-02-06 20:08:19'),
(13, 'VVVVVVVVV', 'Reservation', '2023-02-06 20:43:03'),
(14, 'CCCCCCCCCCC', 'Reservation', '2023-02-06 20:44:42'),
(15, 'venssss', 'Reservation', '2023-02-06 21:04:27'),
(16, 'vensa', 'Reservation', '2023-02-06 21:14:00'),
(17, 'hehe', 'Reservation', '2023-02-06 21:23:17'),
(18, 'eighteen', 'Reservation', '2023-02-06 21:35:18'),
(19, 'nineteen', 'Reservation', '2023-02-06 21:39:35'),
(20, 'TWENTY', 'Reservation', '2023-02-06 22:13:55'),
(21, 'twentyone', 'Reservation', '2023-02-06 22:29:20'),
(22, 'twentytwo', 'Reservation', '2023-02-06 22:50:47'),
(23, 'asda', 'Other Services', '2023-02-07 16:30:30'),
(24, '123', 'Other Services', '2023-02-07 16:32:54'),
(25, 'Vennice Cosinos', 'Association Dues', '2023-02-07 16:40:36'),
(26, 'Vennicesss Cosinoss', 'Association Dues', '2023-02-07 16:42:59'),
(27, 'Vennice Cosinos', 'Association Dues', '2023-02-07 17:20:39'),
(28, 'Vennice Cosinos', 'Association Dues', '2023-02-07 17:27:10'),
(29, 'Vennice Cosinos', 'Association Dues', '2023-02-07 17:35:08'),
(30, 'Vennice Cosinoss', 'Reservation', '2023-02-07 17:46:48'),
(31, 'Vennice Cosinos', 'Reservation', '2023-02-07 17:47:29'),
(32, '', 'Reservation', '2023-02-07 17:48:19'),
(33, 'wewr', 'Reservation', '2023-02-07 17:56:33'),
(34, '', 'Other Services', '2023-02-07 17:59:00'),
(35, '35', 'Other Services', '2023-02-07 18:07:09'),
(36, '', 'Reservation', '2023-02-08 10:33:27'),
(37, '234', 'Reservation', '2023-02-08 11:10:41'),
(38, 'Vennice Cosinos', 'Reservation', '2023-02-08 11:15:54'),
(39, '23424', 'Other Services', '2023-02-08 11:24:10'),
(40, 'wer', 'Other Services', '2023-02-08 11:30:14'),
(41, '234', 'Other Services', '2023-02-08 11:32:49'),
(42, 'wert', 'Other Services', '2023-02-08 11:36:13'),
(43, '234', 'Other Services', '2023-02-08 12:06:25'),
(44, '44', 'Other Services', '2023-02-08 12:37:36'),
(45, '45', 'Other Services', '2023-02-08 13:25:02');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
