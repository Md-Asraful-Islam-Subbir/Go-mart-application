-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 11, 2023 at 04:25 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `go_mart`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`name`, `image`) VALUES
('Cat', 'uploads/64c5dedc76bd2_cat.jpg'),
('Flower', 'uploads/64c387f62ff28_flower.jpg'),
('Pen', 'uploads/64d643b31a38b_pen.png'),
('Watch', 'uploads/64d6237dc1c33_wristwatch.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_name` varchar(255) NOT NULL,
  `price` int(30) NOT NULL,
  `category` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_name`, `price`, `category`, `image`) VALUES
('Pilot Pen', 99, 'Pen', 'uploads/64d643d62bd46_pilotPen.jpg'),
('Red Rose', 21, 'Flower', 'uploads/64d64441bf160_rose.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `email` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL,
  `name` varchar(40) NOT NULL,
  `address_1` varchar(100) NOT NULL,
  `address_2` varchar(100) NOT NULL,
  `city` varchar(30) NOT NULL,
  `state` varchar(30) NOT NULL,
  `zip` int(15) NOT NULL,
  `acctype` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`email`, `password`, `name`, `address_1`, `address_2`, `city`, `state`, `zip`, `acctype`) VALUES
('admin@gmail.com', 'admin', 'Admin', 'Dhaka', 'Bangladesh', 'Dhaka', 'Dhaka', 1200, 'admin'),
('hasan@gmail.com', 'hasan', 'Hasan', 'PSTU', 'PSTU', 'Patuakhali', 'Patuakhali', 8600, 'seller'),
('mehedihasan.cse18@gmail.com', 'asdf@1234', 'Md Mehedi Hasan', 'Batiaghata, Khulna, Bangladesh', 'Batiaghata, Khulna, Bangladesh', 'Khulna', 'Khulna', 9400, 'admin'),
('ratin@gmail.com', 'asdf@1234', 'Ratin', 'PSTU', 'PSTU', 'Patuakhali', 'Patuakhali', 8602, 'seller');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`name`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`image`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
