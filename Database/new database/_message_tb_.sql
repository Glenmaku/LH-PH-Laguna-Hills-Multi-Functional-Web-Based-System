-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 08, 2023 at 12:47 PM
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
-- Table structure for table `message_tb`
--

CREATE TABLE `message_tb` (
  `message_id` int(11) NOT NULL,
  `Homeowner_Username` varchar(20) NOT NULL,
  `Homeowner_Full_Name` varchar(50) NOT NULL,
  `message_title` varchar(255) NOT NULL,
  `email_desc` text NOT NULL,
  `message_date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `message_tb`
--

INSERT INTO `message_tb` (`message_id`, `Homeowner_Username`, `Homeowner_Full_Name`, `message_title`, `email_desc`, `message_date`) VALUES
(1, '', '', 'sample', '123', '2023-02-01'),
(2, '', '', 'sample', 'Attention all staff,\n\nWe are pleased to announce that our company will be holding its annual holiday party on December 15th from 6pm to 10pm at the Grand Hotel. The evening will include a festive dinner, music, and fun activities for everyone to enjoy.\n\nWe encourage all employees to attend and celebrate the end of another successful year. Dress code is semi-formal.\n\nPlease RSVP to the HR department by December 5th with your attendance confirmation and any dietary restrictions.\n\nWe look forward to seeing you all there!\n\nBest regards,\nThe HR Team.\n\n\n\n', '2023-02-01'),
(3, '', 'Vennice Cosino', 'dfsdf', 'werwerwerwerwer', '2023-02-02'),
(4, 'LHS2023-0004', 'Vennice Cosinos', 'sfsdf', 'dfsdfsdfsdf', '2023-02-02');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `message_tb`
--
ALTER TABLE `message_tb`
  ADD PRIMARY KEY (`message_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `message_tb`
--
ALTER TABLE `message_tb`
  MODIFY `message_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
