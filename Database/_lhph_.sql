-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 04, 2023 at 06:01 AM
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
CREATE DATABASE IF NOT EXISTS `lhph` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `lhph`;

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `Contact_ID` int(11) NOT NULL,
  `Contact_Date` datetime(6) NOT NULL DEFAULT current_timestamp(6),
  `Full_Name` varchar(50) NOT NULL,
  `Email_Address` varchar(100) NOT NULL,
  `Cellphone_Number` int(20) NOT NULL,
  `Subject` varchar(100) NOT NULL,
  `Message` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`Contact_ID`, `Contact_Date`, `Full_Name`, `Email_Address`, `Cellphone_Number`, `Subject`, `Message`) VALUES
(1, '2023-01-04 03:08:08.404147', 'Vennice Zyna F. Cosino', 'vennice@ccc.edu.ph', 2147483647, 'Trial', 'sdfsdfsdfdf'),
(2, '2023-01-04 03:08:08.404147', 'Vennice Zyna F. Cosino', 'vennice@ccc.edu.ph', 2147483647, 'Trial', 'ffdsdss'),
(3, '2023-01-04 03:08:08.404147', 'Vennice Zyna F. Cosino', 'vennice@ccc.edu.ph', 2147483647, 'Trial', 'qweryt'),
(4, '2023-01-04 03:08:08.404147', 'Vennice Zyna F. Cosino', 'vennice@ccc.edu.ph', 2147483647, 'Trialwerw', 'rwerwerwer'),
(5, '2023-01-04 03:08:08.404147', 'Vennice Zyna F. Cosino', 'vennice@ccc.edu.ph', 2147483647, 'Trial', 'eeeeeeeeeeeeeeeeeeeeee'),
(6, '2023-01-04 03:08:08.404147', 'Carl Glen Pamplona', 'CGP@ccc.edu.ph', 987654321, 'trialulit', 'sssssssssssafgas  sadfsdf aqd'),
(7, '2023-01-04 03:08:08.404147', 'erte', 'vennice@ccc.edu.ph', 3, '2342', '234'),
(8, '2023-01-04 03:08:08.404147', 'ee', 'vennice@ccc.edu.ph', 2147483647, 'Trial', 'eddddd'),
(9, '2023-01-04 03:08:08.404147', 'Vennice Zyna F. Cosino', 'vennice@ccc.edu.ph', 2147483647, 'Trial', 'sdaaaaaaaaaaaa'),
(10, '2023-01-04 03:08:08.404147', 'Carl Glen Pamplona', 'CGP@ccc.edu.ph', 987654321, '2342', 'eeeeeeeeeeeeeeee'),
(11, '2023-01-04 03:08:08.404147', 'r', 'CGP@ccc.edu.ph', 2147483647, '2342', 'qw'),
(12, '2023-01-04 03:08:08.404147', 'Vennice Zyna F. Cosino', 'vennice@ccc.edu.ph', 2147483647, 'Kemeko', 'trial kemekochan'),
(13, '2023-01-04 03:08:08.404147', 'Vennice Zyna F. Cosino', 'vennice@ccc.edu.ph', 2147483647, 'Trial', 'trial 1'),
(14, '2023-01-04 03:08:08.404147', 'Vennice Zyna F. Cosino', 'vennice@ccc.edu.ph', 2147483647, '2342', 'qwqwe'),
(15, '2023-01-04 03:08:08.404147', 'Vennice Zyna F. Cosino', 'CGP@ccc.edu.ph', 2147483647, 'Kemeko', 'ererterter'),
(16, '2023-01-04 03:08:08.404147', 'ewe', 'vennice@ccc.edu.ph', 5656767, 'Codino', 'dsgfefdgerg'),
(17, '2023-01-04 03:08:08.404147', 'Kemeko', 'vennice.cosino@ccc.edu.ph', 945565563, 'rewer', 'sadff'),
(18, '2023-01-04 03:08:08.404147', '', '', 0, '', ''),
(19, '2023-01-04 03:08:08.404147', 'Vennice Zyna F. Cosino', 'vennice@ccc.edu.ph', 0, '', ''),
(20, '2023-01-04 03:08:08.404147', 'cwe vsdfsd', 'vennice@ccc.edu.ph', 2147483647, 'ertet', 'sddfertertg'),
(21, '2023-01-04 03:08:08.404147', 'cwe vsdfsd', 'vennice@ccc.edu.ph', 2147483647, 'ertet', 'sddfertertg'),
(22, '2023-01-04 03:08:08.404147', '', '', 0, '', ''),
(23, '2023-01-04 03:08:08.404147', '', '', 0, '', ''),
(24, '2023-01-04 03:08:08.404147', '', '', 0, '', ''),
(25, '2023-01-04 03:08:08.404147', 'Vennice Zyna F. Cosino', 'CGP@ccc.edu.ph', 2147483647, 'ds', 'qwe'),
(26, '2023-01-04 03:08:08.404147', 'Vennice Zyna F. Cosino', 'vennice@ccc.edu.ph', 945565563, 'trialulit', 'rwwerwetrsdf '),
(27, '2023-01-04 03:08:08.404147', 'Kemeko-chan Calling', 'vfcosino@ccc.edu.ph', 2147483647, 'Trial2', 'Kemekochan23'),
(28, '2023-01-04 03:09:36.873767', 'Mirezyle Shaken', 'MirezyleShaken45@ccc.edu.ph', 987654321, 'Ewan', 'Wala lang trip ko lang'),
(29, '2023-01-04 03:14:30.348940', 'r', 'asfd@gmail.com', 234234234, 'we', 'wr'),
(30, '2023-01-04 03:17:07.144645', 'fsdf', 'vennice@yahoo.com', 987654321, 'Trialwerw', '2w3rew'),
(31, '2023-01-04 03:19:41.083635', 'Carl Glen Pamplona', 'CGP@ccc.edu.ph', 2147483647, 'Trial', 'ewrw'),
(32, '2023-01-04 03:25:51.049217', '', '', 0, '', ''),
(33, '2023-01-04 12:26:10.995974', '', '', 0, '', ''),
(34, '2023-01-04 12:26:14.555040', '', '', 0, '', ''),
(35, '2023-01-04 12:26:57.149509', '', '', 0, '', ''),
(36, '2023-01-04 12:27:01.310755', '', '', 0, '', ''),
(37, '2023-01-04 12:28:14.328580', '', '', 0, '', ''),
(38, '2023-01-04 12:28:16.311091', '', '', 0, '', ''),
(39, '2023-01-04 12:36:29.566078', 'wrewer', 'gma@gmail.com', 9, 'er', 'werwe'),
(40, '2023-01-04 12:38:10.186897', 'Vennice Zyna F. Cosino', 'vennice@yahoo.com', 2147483647, 'trialulit', 'rwerw'),
(41, '2023-01-04 12:40:30.352139', 'Carl Glen Pamplona', 'vennice@ccc.edu.ph', 5656767, 'Kemeko', 'erwerw'),
(42, '2023-01-04 12:45:48.623064', 'Vennice Zyna F. Cosino', 'vennice@ccc.edu.ph', 945565563, 'trialulit', 'werwerwer'),
(43, '2023-01-04 12:49:39.735276', 'Vennice Zyna F. Cosino', 'vennice@ccc.edu.ph', 2147483647, 'er', 'wer'),
(44, '2023-01-04 12:52:37.935034', 'qw', 'vennice@ccc.edu.ph', 2147483647, 'Trial', 'rewrer'),
(45, '2023-01-04 12:54:16.629140', 'Vennice Zyna F. Cosino', 'MirezyleShaken45@ccc.edu.ph', 2147483647, 'werwer', 'werwre'),
(46, '2023-01-04 12:54:51.230097', 'Carl Glen Pamplona', 'CGP@ccc.edu.ph', 2147483647, 'erw', 'werwer'),
(47, '2023-01-04 12:58:24.909183', 'wer', 'vennice@ccc.edu.ph', 2147483647, 'Trialwerw', 'werwer');

-- --------------------------------------------------------

--
-- Table structure for table `employee_accounts`
--

CREATE TABLE `employee_accounts` (
  `Employee_Account_ID` int(10) NOT NULL,
  `Employee_FName` varchar(30) NOT NULL,
  `Employee_LName` varchar(30) NOT NULL,
  `Employee_Position` varchar(100) NOT NULL,
  `Employee_Email` varchar(50) NOT NULL,
  `Employee_Password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employee_accounts`
--

INSERT INTO `employee_accounts` (`Employee_Account_ID`, `Employee_FName`, `Employee_LName`, `Employee_Position`, `Employee_Email`, `Employee_Password`) VALUES
(1, 'Vennice', 'Cosino', 'Admin', 'vennice@ccc.edu.ph', 'Kemekochan23');

-- --------------------------------------------------------

--
-- Table structure for table `owner_accounts`
--

CREATE TABLE `owner_accounts` (
  `Owner_Account_ID` int(10) NOT NULL,
  `Owner_FName` varchar(50) NOT NULL,
  `Owner_LName` varchar(50) NOT NULL,
  `Owner_Email` varchar(100) NOT NULL,
  `Owner_Password` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `owner_accounts`
--

INSERT INTO `owner_accounts` (`Owner_Account_ID`, `Owner_FName`, `Owner_LName`, `Owner_Email`, `Owner_Password`) VALUES
(2, 'Vennice', 'Cosino', 'vennice.cosino001@gmail.com', '$2y$10$lJ.7MHyNzONu.uaQ1nH97e0xvNgSrunmlG/fk10CQNIh2wEkZMnWe'),
(3, 'Vennice', 'Cosino', 'Vennice@ccc.edu.ph', '$2y$10$n40jPaCsphZsFiFdbT0xUuI25Ed6ucXL82wbM.2fPdPDGGaVLhZWq');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`Contact_ID`);

--
-- Indexes for table `employee_accounts`
--
ALTER TABLE `employee_accounts`
  ADD PRIMARY KEY (`Employee_Account_ID`);

--
-- Indexes for table `owner_accounts`
--
ALTER TABLE `owner_accounts`
  ADD PRIMARY KEY (`Owner_Account_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `Contact_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `employee_accounts`
--
ALTER TABLE `employee_accounts`
  MODIFY `Employee_Account_ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `owner_accounts`
--
ALTER TABLE `owner_accounts`
  MODIFY `Owner_Account_ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
