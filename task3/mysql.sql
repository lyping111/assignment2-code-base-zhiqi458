-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 20, 2026 at 03:24 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `assignment2`
--

-- --------------------------------------------------------

--
-- Table structure for table `task3`
--

CREATE TABLE `task3` (
  `id` int(11) NOT NULL,
  `receiving_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `tracking_number` varchar(150) NOT NULL,
  `product_name` varchar(150) NOT NULL,
  `CBM` decimal(10,2) NOT NULL,
  `weight` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `task3`(`id`, `receiving_date`, `tracking_number`, `product_name`, `CBM`, `weight`) VALUES (1, '2023-04-20 03:24:00', 'TRK001', 'Product A', 10.50, 200.00);

UPDATE `task3` SET `id`='1',`receiving_date`='2023-04-20 03:24:00',`tracking_number`='TRK001',`product_name`='Product A',`CBM`='10.50',`weight`='200.00' WHERE id=1;

DELETE FROM `task3` WHERE id=1;
--
-- Indexes for dumped tables
--

--
-- Indexes for table `task3`
--
ALTER TABLE `task3`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `task3`
--
ALTER TABLE `task3`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

AFTER TABLE `task3`
  ADD `abc` varchar(30)

AFTER TABLE `task3`
  DROP `abc`

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
