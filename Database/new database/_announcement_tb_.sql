-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 08, 2023 at 12:43 PM
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
-- Table structure for table `announcement_tb`
--

CREATE TABLE `announcement_tb` (
  `announcement_no` int(11) NOT NULL,
  `announcement_title` varchar(150) NOT NULL,
  `announcement_description` text NOT NULL,
  `announcement_attachment` varchar(255) NOT NULL,
  `announcement_date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `announcement_tb`
--

INSERT INTO `announcement_tb` (`announcement_no`, `announcement_title`, `announcement_description`, `announcement_attachment`, `announcement_date`) VALUES
(1, 'Discount for 2023', 'We have discount for this year 2023,  \r\nThank youuu', 'upload/discount.jpg', '2023-01-17'),
(2, 'Memorandum', 'hehe', 'upload/discount.jpg', '2023-01-17'),
(3, 'Accreditation', 'Jan 30', 'upload/user-icon.jpg', '2023-01-17'),
(4, 'ahanz', 'hwhw', 'upload/user-icon.jpg', '2023-01-17'),
(5, 'karl', 'hehe', '', '2023-01-17'),
(6, 'Shoppee', 'Shopee', '', '2023-01-17'),
(7, 'ahanzcarlllll', 'ahfdqau', 'upload/image_2023-01-17_201830026.png', '2023-01-17'),
(8, 'hanzahhda', 'agufdatwtd', '', '2023-01-17'),
(9, 'hanzahd', 'dqhbwdyuqw', '', '2023-01-17'),
(10, 'duaiwgdadb', 'd.,awudhqd', '', '2023-01-17'),
(11, 'awd', 'dqwdqdqwd', 'upload/user-icon.jpg', '2023-01-17'),
(12, 'ahanz', '', 'upload/image_2023-01-17_202416554.png', '2023-01-17'),
(13, 'hotdog', 'masarap', '', '2023-01-17'),
(14, 'ahanz', 'dws', '', '2023-01-17'),
(15, 'hotdog', 'fwfa', 'upload/user-icon.jpg', '2023-01-17'),
(16, 'dqwdq', 'dqdwqd', 'upload/user-icon.jpg', '2023-01-17'),
(17, 'dqwdq', 'dqdwqdda', '', '2023-01-18'),
(18, 'hotdog sale', '30% discount', 'assets/images/63ca7b013fafe5.24281817.jpg', '2023-01-20'),
(19, 'hotdog sale', '30% discount', 'assets/images/63ca7b02530fa2.24500545.jpg', '2023-01-20'),
(20, 'hotdog sale', '30% discount', 'assets/images/63ca7b027d9fe0.28608595.jpg', '2023-01-20'),
(21, 'hotdog sale', '30% discount', 'assets/images/63ca7b02a49229.57089292.jpg', '2023-01-20'),
(22, 'hotdog sale', '30% discount', 'assets/images/63ca7b02cf9d00.79078755.jpg', '2023-01-20'),
(23, 'hotdog sale', '30% discount', 'assets/images/63ca7b048d7f62.76057988.jpg', '2023-01-20'),
(24, 'hotdog sale', '30% discount', 'assets/images/63ca7b04b70d28.07185387.jpg', '2023-01-20'),
(25, 'hotdog sale', '30% discount', 'assets/images/63ca7b04de8385.22248061.jpg', '2023-01-20'),
(26, 'hotdog sale', '30% discount', 'assets/images/63ca7b05169b18.99490670.jpg', '2023-01-20'),
(27, 'hotdog sale', '30% discount', 'assets/images/63ca7b053eec99.40793992.jpg', '2023-01-20'),
(28, 'cheesedog', 'hehee', 'assets/images/63ca822499ee45.83747535.jpg', '2023-01-20'),
(29, 'admin hehe', 'hgahjdhwbndjwh', 'assets/images/63ca8269d07960.43850053.jpg', '2023-01-20'),
(30, 'karl', 'ahanz', 'adminViews/includes/uploadImg63ca83c5be7de4.49700557.jpg', '2023-01-20'),
(31, 'ahanz', 'karlito', 'adminViews/includes/uploadImg63ca84661d1011.53712810.jpg', '2023-01-20'),
(32, 'ahanz', 'ddwd', '/uploadImg63ca8489b59d58.05177454.jpg', '2023-01-20'),
(33, 'ahanz', 'adqwdq', '/uploadImg/63ca84b6537ff2.92666745.jpg', '2023-01-20'),
(34, 'ahanz', 'dwdq', 'adminViews/includes63ca8778b65fa7.99289995.jpg', '2023-01-20'),
(35, 'weq', 'dqwdqd2', 'adminViews/includes63ca87890fa767.85899919.jpg', '2023-01-20'),
(36, 'ahanz', 'qweqeq', './adminViews/includes/uploadImg63cb4cbf77f6d1.68794219.jpg', '2023-01-21'),
(37, 'carl', 'fernadnez', 'adminViews/includes/uploadImg63cb4d5cb166c4.28336681.jpg', '2023-01-21'),
(38, 'ahanz', 'ahanz carlfernandez', 'adminViews/includes/uploadImg63cb696cdcc318.96776382.jpg', '2023-01-21'),
(39, 'qdqwd', 'sdqwd', 'adminViews/includes/uploadImg63cb7182515069.32698535.jpg', '2023-01-21'),
(40, 'ahanz', 'ahanz', 'uploadImg/63cb71bb0a6887.75489798.jpg', '2023-01-21'),
(42, 'ahanz', 'ahanzcarl', ' 63cb78b0829455.47121013.jpg', '2023-01-21'),
(44, 'ahanz', 'dawdadwa', 'uploads/63cb79be5ed586.49805729uploads-jpg', '2023-01-21'),
(45, 'ahanz', 'dqawdq', 'uploads/user-icon.jpg', '2023-01-21'),
(54, 'adw', 'dqwdq', 'user-icon.jpg', '2023-01-22'),
(55, 'ahanz', 'dqwdq', 'uploads/user-icon.jpg', '2023-01-22'),
(58, 'One Piece ', ' 500 only', 'adminViews/includes/uploads/1243995.png', '2023-01-22'),
(62, 'sample', 'bviwyfn wqgfobca fgw8yfh eugfweyufcbyfgb ygqweyufwyufbfwebwey gqdbqyu', 'adminViews/includes/uploads/discount.jpg', '2023-02-02');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `announcement_tb`
--
ALTER TABLE `announcement_tb`
  ADD PRIMARY KEY (`announcement_no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `announcement_tb`
--
ALTER TABLE `announcement_tb`
  MODIFY `announcement_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
