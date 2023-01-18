-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 18, 2023 at 01:21 PM
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
  `admin_password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_accounts`
--

INSERT INTO `admin_accounts` (`admin_id`, `admin_fname`, `admin_lname`, `admin_fullname`, `admin_username`, `admin_email`, `admin_password`) VALUES
(1, ' Vennice', ' ehe', '', ' admin12 ', 'kemeko@cosino.com', '$2y$10$GoMYKyTNOTzR7oJm/lPeW.o8aRjrlIfcpMNP/PSUxbWSqexHhd2DS'),
(2, 'Vennice-Zyna', 'Cosinos', '', 'vvadmin', 'vencosinoadminKemekochan@ccc.e', '$2y$10$AUSJNRSP7F7FGs6oSyLmredwfjK7fi.RHH6QmkRFPA6SESBMNIxqG'),
(3, ' Adminone ad ', ' Admin', '', ' adminokemeko ', ' admin@exxample.com ', '$2y$10$YSyqyvIiSNbk9BORRfu0jOYmK1Te4ih0Wc6zHBL1EmifdtZveG8Ey'),
(9, 'ADMIN', 'TEST', '', 'admintrial', 'admin@account.com', '$2y$10$irqBcc7UYoL/vaKkjypx0e0zHDxJwNW.pQUHq7BVi4naEGTZ15NE2'),
(10, 'Hey', 'hello', '', 'ADMIN2023-0010', 'saywhut@account.com', '$2y$10$HqouMVj0iBIm39E/WIseBOkK3pYgysL/wa52sYMcgGgycviyCYpBO');

-- --------------------------------------------------------

--
-- Table structure for table `assigned_lot`
--

CREATE TABLE `assigned_lot` (
  `lot_id` varchar(12) NOT NULL,
  `owner_username` varchar(12) NOT NULL,
  `ownership` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `assigned_lot`
--

INSERT INTO `assigned_lot` (`lot_id`, `owner_username`, `ownership`) VALUES
('blk1lot1', 'LHS2023-0010', 'on,on'),
('blk1lot1', 'LHS2023-0010', 'on,on'),
('blk1lot2', 'LHS2023-0009', ''),
('blk1lot2', 'LHS2023-0009', ''),
('blk1lot2', 'LHS2023-0007', ''),
('blk1lot12', 'LHS2023-0002', 'Array'),
('blk1lot3', 'LHS2023-0033', 'homeowner,Lotowner'),
('blk1lot2', 'LHS2023-0033', 'homeowner,Lotowner'),
('blk1lot2', 'LHS2023-0031', 'homeowner'),
('blk1lot1', 'LHS2023-0035', 'homeowner,Lotowner'),
('blk1lot2', 'LHS2023-0035', 'homeowner'),
('blk1lot3', 'LHS2023-0035', 'Lotowner'),
('blk1lot1', 'LHS2023-0002', 'homeowner,Lotowner'),
('blk1lot2', 'LHS2023-0002', 'homeowner,Lotowner'),
('blk1lot3', 'LHS2023-0002', 'homeowner,Lotowner'),
('blk1lot1', 'LHS2023-0004', 'homeowner'),
('blk1lot3', 'LHS2023-0001', 'homeowner'),
('blk1lot5', 'LHS2023-0001', 'homeowner');

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
(47, '2023-01-04 12:58:24.909183', 'wer', 'vennice@ccc.edu.ph', 2147483647, 'Trialwerw', 'werwer'),
(48, '2023-01-04 13:17:25.676324', 'Vennice Zyna F. Cosino', 'MirezyleShaken45@ccc.edu.ph', 2147483647, 'wer', 'werwer'),
(49, '2023-01-04 13:18:09.582423', 'Carl Glen Pamplona', 'CGP@ccc.edu.ph', 2147483647, '2342', 'werwer'),
(50, '2023-01-04 13:18:44.138341', 'Vennice Zyna F. Cosino', 'MirezyleShaken45@ccc.edu.ph', 3, '2342', 'eert'),
(51, '2023-01-04 13:20:14.626693', 'csd', 'MirezyleShaken45@ccc.edu.ph', 945565563, 'werwer', 'wewre'),
(52, '2023-01-04 13:21:02.996942', 'r', 'vennice@ccc.edu.ph', 2147483647, 'Kemeko', 'werwer'),
(53, '2023-01-04 13:22:06.396262', 'Vennice Zyna F. Cosino', 'vennice@ccc.edu.ph', 987654321, 'werwer', 'werwer'),
(54, '2023-01-04 13:23:51.794038', 'Vennice Zyna F. Cosino', 'vennice@ccc.edu.ph', 945565563, 'Kemeko', 'werwr'),
(55, '2023-01-04 13:27:53.465638', 'Vennice Zyna F. Cosino', 'vennice@ccc.edu.ph', 945565563, 'Trial', 'werwer'),
(56, '2023-01-04 13:29:21.699485', 'Carl Glen Pamplona', 'vennice@ccc.edu.ph', 945565563, 'Trialwerw', 'werwr'),
(57, '2023-01-04 13:31:17.324807', 'Carl Glen Pamplona', 'vennice@ccc.edu.ph', 2147483647, 'werwer', 'werwerewr'),
(58, '2023-01-04 13:33:28.158532', 'er', 'vennice@ccc.edu.ph', 2147483647, 'werwer', 'werwer'),
(59, '2023-01-04 13:36:28.429979', 'Vennice Zyna F. Cosino', 'vennice@ccc.edu.ph', 987654321, 'werwer', 'rwer');

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
(1, 'Vennice', '', 'LHS2023-0001', 'vennicecosino@yahoo.com', 'Kemekochan23', 0, '', '2023-01-17', '', '0000-00-00', 0, 0, ''),
(2, 'Zyna', 'Fopalan', 'LHS2023-0002', 'zynafopalan@ccc.edu.ph', '$2y$10$OHOJAuUNnHnSpadnv3svK.HYTDMDMpRS3z/4xjexkFy4rrCHU8bSe', 0, '', '2023-01-17', 'Female', '1111-11-11', 111111111, 111111111, '11111111'),
(3, 'Zyna', 'Fopalans', 'LHS2023-0003', 'zynafopalsan@ccc.edu.ph', '$2y$10$H0qeuapUtKjAGayBdonVQ.lg1da0vKNDynyIRCypuurWraWs9H2/O', 0, '', '2023-01-17', '', '0000-00-00', 0, 0, ''),
(4, 'Vennice', 'Cosino', 'LHS2023-0004', 'vennice.cosino@gmail.com', '$2y$10$lz8sVGRUz1oKN6us6XjKce9z.ROrKQMOOMXL5/efCnKNMhk1wFC2y', 0, '', '2023-01-17', '', '0000-00-00', 0, 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `owner_information`
--

CREATE TABLE `owner_information` (
  `owner_username` varchar(15) NOT NULL,
  `owner_fname` varchar(20) NOT NULL,
  `owner_lname` varchar(20) NOT NULL,
  `owner_gender` char(15) NOT NULL,
  `owner_birthdate` date NOT NULL,
  `owner_email` varchar(30) NOT NULL,
  `owner_mobile` int(15) NOT NULL,
  `owner_telephone` int(15) NOT NULL,
  `owner_address` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `owner_information`
--

INSERT INTO `owner_information` (`owner_username`, `owner_fname`, `owner_lname`, `owner_gender`, `owner_birthdate`, `owner_email`, `owner_mobile`, `owner_telephone`, `owner_address`) VALUES
('LHS2023-0036', 'Zynass', 'Nesya', 'Male', '0002-02-22', 'zyna@nesha.com', 2147483647, 2147483647, 'nlaksaraf'),
('LHS2023-0039', 'Vennice', 'Cosino', 'Male', '0323-02-03', ' owner@ac39count.com', 39393939, 39339, ' sdfsdf'),
('LHS2023-0040', 'Vennice-', 'Zyn', 'Female', '0423-03-04', ' owner@account.com', 2334, 3444, ' hehe');

-- --------------------------------------------------------

--
-- Table structure for table `usertable`
--

CREATE TABLE `usertable` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `code` mediumint(50) NOT NULL,
  `status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `usertable`
--

INSERT INTO `usertable` (`id`, `name`, `email`, `password`, `code`, `status`) VALUES
(1, 'Vennice', 'vfcosino@ccc.edu.ph', '$2y$10$41oGnd/Cp6Vjlke6TZK/7.s3oZYnEQs0.JLbjI3kGn2jlsxZHHxF.', 199875, 'notverified');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_accounts`
--
ALTER TABLE `admin_accounts`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`Contact_ID`);

--
-- Indexes for table `owner_accounts`
--
ALTER TABLE `owner_accounts`
  ADD PRIMARY KEY (`owner_id`);

--
-- Indexes for table `usertable`
--
ALTER TABLE `usertable`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_accounts`
--
ALTER TABLE `admin_accounts`
  MODIFY `admin_id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `Contact_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT for table `owner_accounts`
--
ALTER TABLE `owner_accounts`
  MODIFY `owner_id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `usertable`
--
ALTER TABLE `usertable`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
