-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 29, 2023 at 04:10 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

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
-- Table structure for table `dummyowner_accounts`
--

CREATE TABLE `dummyowner_accounts` (
  `owner_id` int(4) NOT NULL,
  `owner_fname` varchar(20) NOT NULL,
  `owner_lname` varchar(20) NOT NULL,
  `owner_username` varchar(20) NOT NULL,
  `owner_email` varchar(30) NOT NULL,
  `owner_password` varchar(100) NOT NULL,
  `owner_date_added` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `dummyowner_accounts`
--

INSERT INTO `dummyowner_accounts` (`owner_id`, `owner_fname`, `owner_lname`, `owner_username`, `owner_email`, `owner_password`, `owner_date_added`) VALUES
(5, 'Admin-one', 'Admin-one', 'LHS2023-0002', 'glendelacruz27@gmail.com', '$2y$10$lZbjRNPxuBjUdyU0YddgVuOMf3ioTIT9tI0bZUhUiD8T4eZVjdEam', '2023-01-08'),
(6, 'TrialforUser', 'TrialforUser', 'LHS2023-0006', 'glendelacruz28@gmail.com', '$2y$10$.U9y.IUWbciAhMGobgZCh.ZVOlvOrmXnGUuERd7VsGgN5rixjJiKi', '2023-01-09'),
(7, 'Trialthree', 'Trialthree', 'LHS2023-0007', 'glendelacruz24@gmail.com', '$2y$10$sTpCUYNvQEb.sR4.Abj1M.ZAxnUM3e4yNc/.asIHflRI4o6x6zK6y', '2023-01-09'),
(9, 'Ownertestt', 'Ownertestt', 'LHS2023-0009', 'guyrx90@gmail.com', '$2y$10$ee6rzP9xWMQExKdsKv5bguA31gpcya/d3jMPYlN8q2vEdtIxjTPYS', '2023-01-09'),
(10, 'OWNER', 'TEST', 'LHS2023-0010', 'glenmarkdz07@gmail.com', '$2y$10$vi2ZIkHjCpeVs0H.NMsESes6TsDU4FxTAuPf3qB7Pd.QbG1ERkgSe', '2023-01-09'),
(11, 'asd', 'asd', 'LHS2023-0011', '29glendelacruz@gmail.com', '$2y$10$cYhd95dA6UDqPXI7mynGsepXoQYQigkTtKCFgP0m2KtC9d4aSCWoe', '2023-01-18'),
(12, 'DRAGON BALL', 'DZ', 'LHS2023-0012', 'glendelacruz24@gmail.com', '$2y$10$yH.NmENuqATq2Cwtnt8BN.hyezo5GpLQK0p087oBh67ZP42/VXE1q', '2023-01-25'),
(13, 'G', 'DZ', 'LHS2023-0013', '9noeldelacruz@gmail.com', '$2y$10$5zEICoazR0ovijNEHiwwfO3/z0L8aFn6SvaoPztMtB/J7hTVLyHXi', '2023-01-25');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dummyowner_accounts`
--
ALTER TABLE `dummyowner_accounts`
  ADD PRIMARY KEY (`owner_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dummyowner_accounts`
--
ALTER TABLE `dummyowner_accounts`
  MODIFY `owner_id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
