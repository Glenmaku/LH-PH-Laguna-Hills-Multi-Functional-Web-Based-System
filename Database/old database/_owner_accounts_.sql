-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 08, 2023 at 12:36 PM
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
-- Table structure for table `owner_accounts`
--

CREATE TABLE `owner_accounts` (
  `owner_id` int(4) NOT NULL,
  `owner_fname` varchar(20) NOT NULL,
  `owner_lname` varchar(20) NOT NULL,
  `owner_username` varchar(20) NOT NULL,
  `owner_email` varchar(30) NOT NULL,
  `owner_password` varchar(100) NOT NULL,
  `code` mediumint(50) NOT NULL,
  `status` text NOT NULL,
  `owner_date_added` date NOT NULL DEFAULT current_timestamp(),
  `owner_gender` varchar(15) NOT NULL,
  `owner_birthdate` date NOT NULL,
  `owner_mobile` int(15) NOT NULL,
  `owner_telephone` int(15) NOT NULL,
  `owner_address` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `owner_accounts`
--

INSERT INTO `owner_accounts` (`owner_id`, `owner_fname`, `owner_lname`, `owner_username`, `owner_email`, `owner_password`, `code`, `status`, `owner_date_added`, `owner_gender`, `owner_birthdate`, `owner_mobile`, `owner_telephone`, `owner_address`) VALUES
(4, 'Vennice', 'Cosinos', 'LHS2023-0004', 'vennice.cosino001@gmail.com', '$2y$10$QC3RvCGKusCAfA2DqIaUiuA8Tl.ERSYw92an/MctOBA273ZWUeqUy', 0, '', '2023-01-17', '', '2001-08-23', 2147483647, 2147483647, 'sdfsdfrtrwgsdfsdfrsdf'),
(5, 'Vennicesss', 'Cosinoss', 'LHS2023-0005', 'vennice.cosino@gmail.com', '$2y$10$jAFEeujwwTvzM1G1f.JDdO7ymdaM7oKn7XGWhKxv3EivyZJrKgO.W', 603939, '', '2023-01-20', '', '0000-00-00', 0, 0, ''),
(6, 'Vennice', 'Admin-one', 'LHS2023-0006', 'w@gmail.com', '$2y$10$IQ17AFCqCfwbXvhYiuc2f.YMU6Po7yFVa6f4fivzJ8P7ViJp5wjXi', 0, '', '2023-01-21', '', '0000-00-00', 0, 0, ''),
(7, 'Vennsdasdicea', 'Cosinsao', 'LHS2023-0007', 'vennice.cosinodddddd@gmail.com', '$2y$10$o7ieI..KxOUP5d8m2k1m5uatuIES1Ir7CjYLiGA/0YxyDFKikHKDq', 0, '', '2023-01-28', '', '0000-00-00', 0, 0, ''),
(8, 'Venchi', 'Cossso', 'LHS2023-0008', 'vennice.cosssssssino@gmail.com', '$2y$10$bWq9kVQJnU.R4wsCBedfbu1EXI8kKo3XDvg4Wjmg.Zwz4Pp.Sqon.', 0, '', '2023-02-01', '', '0000-00-00', 0, 0, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `owner_accounts`
--
ALTER TABLE `owner_accounts`
  ADD PRIMARY KEY (`owner_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `owner_accounts`
--
ALTER TABLE `owner_accounts`
  MODIFY `owner_id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
