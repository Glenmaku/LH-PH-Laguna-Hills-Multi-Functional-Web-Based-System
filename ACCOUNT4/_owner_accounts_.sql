-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 09, 2023 at 03:12 PM
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
  `owner_date_added` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `owner_accounts`
--

INSERT INTO `owner_accounts` (`owner_id`, `owner_fname`, `owner_lname`, `owner_username`, `owner_email`, `owner_password`, `owner_date_added`) VALUES
(5, 'Admin-one', 'Admin-one', 'LHS2023-0002', 'admin1@gmail.com', '$2y$10$lZbjRNPxuBjUdyU0YddgVuOMf3ioTIT9tI0bZUhUiD8T4eZVjdEam', '2023-01-08'),
(6, 'TrialforUser', 'TrialforUser', 'LHS2023-0006', 'TrialUser@gmail.com', '$2y$10$.U9y.IUWbciAhMGobgZCh.ZVOlvOrmXnGUuERd7VsGgN5rixjJiKi', '2023-01-09'),
(7, 'Trialthree', 'Trialthree', 'LHS2023-0007', 'owner1@gmail.com', '$2y$10$sTpCUYNvQEb.sR4.Abj1M.ZAxnUM3e4yNc/.asIHflRI4o6x6zK6y', '2023-01-09'),
(9, 'Ownertestt', 'Ownertestt', 'LHS2023-0009', 'kemekochan@gmail.com', '$2y$10$ee6rzP9xWMQExKdsKv5bguA31gpcya/d3jMPYlN8q2vEdtIxjTPYS', '2023-01-09'),
(10, 'OWNER', 'TEST', 'LHS2023-0010', 'owner@account.com', '$2y$10$vi2ZIkHjCpeVs0H.NMsESes6TsDU4FxTAuPf3qB7Pd.QbG1ERkgSe', '2023-01-09');

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
  MODIFY `owner_id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
