-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 08, 2023 at 12:35 PM
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
-- Table structure for table `admin_accounts`
--

CREATE TABLE `admin_accounts` (
  `admin_id` int(4) NOT NULL,
  `admin_fname` varchar(20) NOT NULL,
  `admin_lname` varchar(20) NOT NULL,
  `admin_fullname` varchar(30) NOT NULL,
  `admin_username` varchar(20) NOT NULL,
  `admin_email` varchar(30) NOT NULL,
  `admin_password` varchar(100) NOT NULL,
  `code` mediumint(50) NOT NULL,
  `status` text NOT NULL,
  `date_added` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_accounts`
--

INSERT INTO `admin_accounts` (`admin_id`, `admin_fname`, `admin_lname`, `admin_fullname`, `admin_username`, `admin_email`, `admin_password`, `code`, `status`, `date_added`) VALUES
(1, ' Vennicews', ' ehe', '', ' admin12 ', 'kemeko@cosino.com', '$2y$10$GoMYKyTNOTzR7oJm/lPeW.o8aRjrlIfcpMNP/PSUxbWSqexHhd2DS', 0, '', '2023-01-28'),
(2, 'Vennice-Zyna', 'Cosinos', '', 'vvadmin', 'vencosinoadminKemekochan@ccc.e', '$2y$10$AUSJNRSP7F7FGs6oSyLmredwfjK7fi.RHH6QmkRFPA6SESBMNIxqG', 0, '', '2023-01-28'),
(3, ' Adminone ad ', ' Admine', '', ' adminokemeko ', 'admin@ecample.com', '$2y$10$YSyqyvIiSNbk9BORRfu0jOYmK1Te4ih0Wc6zHBL1EmifdtZveG8Ey', 0, '', '2023-01-28'),
(10, 'Hey', 'hello', '', 'ADMIN2023-0010', 'saywhut@account.com', '$2y$10$HqouMVj0iBIm39E/WIseBOkK3pYgysL/wa52sYMcgGgycviyCYpBO', 0, '', '2023-01-28'),
(14, 'Vennice Zyna', 'Cosino', '', 'ADMIN2023-0011', 'vennice.cosino001@gmail.com', '$2y$10$QC3RvCGKusCAfA2DqIaUiuA8Tl.ERSYw92an/MctOBA273ZWUeqUy', 0, '', '2023-01-28'),
(15, 'Hi ', 'five', '', 'ADMIN2023-0015 ', 'kemaeko@cosino.com', '$2y$10$qELzfDJX0TCyrFkKsbc9a.2gsHS65fxHxwOHDCuZgTFDbB/pUb6tK', 0, '', '2023-01-28');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_accounts`
--
ALTER TABLE `admin_accounts`
  ADD PRIMARY KEY (`admin_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_accounts`
--
ALTER TABLE `admin_accounts`
  MODIFY `admin_id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
