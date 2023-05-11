-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 09, 2023 at 12:13 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webdevassignment`
--

-- --------------------------------------------------------

--
-- Table structure for table `users_orders`
--

CREATE TABLE `users_orders` (
  `id` int(50) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL,
  `createdAt` datetime(6) NOT NULL DEFAULT current_timestamp(6),
  `orders` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users_orders`
--

INSERT INTO `users_orders` (`id`, `username`, `password`, `role`, `createdAt`, `orders`) VALUES
(16, 'admin', 'admin', 'Admin', '2023-05-08 12:02:02.346478', ''),
(18, 'customer1', 'customer1', '', '2023-05-08 12:05:26.012458', 'The Moon Gang Adventure Game- $5, The Way of Water Adventure Game- $5, The Adventures of Jack Potter Game- $5, Checkers Board Game- $5, Chess Board Game- $5, FIFA 2019 Game- $5, The Crew Challenge Action Game- $5, Modern Combat Action Game- $5, Resident E'),
(19, 'customer2', 'customer2', '', '2023-05-08 12:05:43.592275', 'Asphalt 8 Car Racing Game- $5, Dream League Soccer 2023 Game- $5, Football Manager 2023 Game- $5, PES 2018 Game- $5, Uncharted Action Game- $5, '),
(21, 'customer3', 'customer3', '', '2023-05-08 13:32:21.781092', 'God of War Adventure Game- $5, Dark Knight Adventure Game- $5, FIFA 2019 Game- $5, Dream League Soccer 2023 Game- $5, Real Football 2019 Game- $5, Resident Evil Action Game- $5, '),
(22, 'customer4', 'customer4', '', '2023-05-08 14:09:14.301141', 'The Moon Gang Adventure Game- $5, The Adventures of Jack Potter Game- $5, Checkers Board Game- $5, Chess Board Game- $5, '),
(23, 'customer5', 'customer5', '', '2023-05-08 15:59:54.399598', 'Extreme Car Racing Game- $5, Football Manager 2023 Game- $5, PES 2018 Game- $5, Spiderman Action Game- $5, '),
(24, 'customer6', 'customer6', '', '2023-05-08 16:01:10.089037', 'Need for Speed Car Racing Game- $5, Chess Board Game- $5, Checkers Board Game- $5, Devil May Cry Action Game- $5, '),
(25, 'customer7', 'customer7', '', '2023-05-08 16:02:58.119709', 'Chess Board Game- $5, Checkers Board Game- $5, FIFA 2019 Game- $5, Dream League Soccer 2023 Game- $5, '),
(26, 'customer8', 'customer8', '', '2023-05-08 16:09:47.919547', 'Forza Horizon 5 Car Racing Game- $5, Extreme Car Racing Game- $5, City Racing Game- $5, Highway Racer Game- $5, Need for Speed Car Racing Game- $5, ');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users_orders`
--
ALTER TABLE `users_orders`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users_orders`
--
ALTER TABLE `users_orders`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
