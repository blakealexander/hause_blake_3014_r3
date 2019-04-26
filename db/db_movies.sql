-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Apr 26, 2019 at 06:32 PM
-- Server version: 5.7.23
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `db_movies`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `user_id` mediumint(8) UNSIGNED NOT NULL,
  `user_fname` varchar(250) NOT NULL,
  `user_name` varchar(250) NOT NULL,
  `user_pass` varchar(250) NOT NULL,
  `user_email` varchar(250) NOT NULL,
  `user_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `user_ip` varchar(50) NOT NULL DEFAULT 'no',
  `user_admin` tinyint(4) DEFAULT NULL,
  `user_access` tinyint(4) DEFAULT NULL,
  `firstTime` int(11) DEFAULT '1',
  `suspended` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`user_id`, `user_fname`, `user_name`, `user_pass`, `user_email`, `user_date`, `user_ip`, `user_admin`, `user_access`, `firstTime`, `suspended`) VALUES
(1, 'blake', 'hausey', 'testing', 'b@h.com', '2019-02-01 19:07:35', '::1', 1, 5, 0, 0),
(2, 'Jenny', 'JayZ', 'testing', 'j@z.com', '2019-02-01 20:11:28', '127.0.0.1:8000', 1, 5, 1, 0),
(3, 'Kiehl', 'littleBro', 'testing', 'k@h.com', '2019-02-01 20:12:40', '::1', 0, 3, 1, 0),
(4, 'test', 'test', 'test', 'test@test.com', '2019-03-01 20:39:17', 'no', NULL, NULL, 1, 0),
(5, 'test', 'test', 'test', 'test@test.com', '2019-03-01 20:39:35', 'no', NULL, NULL, 1, 0),
(6, 'blake', 'Blake123Hause', 'test123', 'blakealexhause@gmail.com', '2019-03-06 22:47:03', 'no', NULL, NULL, 1, 0),
(7, 'blake', 'Blake123Hause', 'test123', 'blakealexhause@gmail.com', '2019-03-06 22:53:24', 'no', NULL, NULL, 1, 0),
(8, 'jenny', 'jennyZ', 'testing', 'zupancicjenny@gmail.com', '2019-03-08 02:57:05', '::1', NULL, NULL, 0, 0),
(9, 'testing', 'testing', '09065fd45bdff0df0e9d270472779ae8c6a99d0b', 'testing@test.com', '2019-04-26 17:22:43', 'no', NULL, NULL, 1, 0),
(10, 'blaker', 'blakeeeeer', 'd598f4886db8a5000fb6e3479150e3dab0a4650f', 'blake.hause@hotmail.com', '2019-04-26 17:24:57', 'no', NULL, NULL, 1, 0),
(11, 'john', 'johnDoe', 'b6ebdaf49906b1af68ae0635d98903744dc67608', 'asdasd@mailinator.com', '2019-04-26 18:30:18', 'no', NULL, NULL, 1, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `user_id` mediumint(8) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
