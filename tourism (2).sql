-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 11, 2023 at 06:09 PM
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
-- Database: `tourism`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(5) NOT NULL,
  `username` char(10) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', '#123Admin');

-- --------------------------------------------------------

--
-- Table structure for table `hotel`
--

CREATE TABLE `hotel` (
  `id` int(10) NOT NULL,
  `hotel_name` char(35) NOT NULL,
  `address` char(30) NOT NULL,
  `phone` bigint(10) NOT NULL,
  `no_of_days` varchar(15) NOT NULL,
  `amount` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `hotel`
--

INSERT INTO `hotel` (`id`, `hotel_name`, `address`, `phone`, `no_of_days`, `amount`) VALUES
(1, 'brandavana', 'mysore', 9087654321, '2 days', 4500),
(4, 'Netravathi', 'Chikkamagaluru', 8907654321, '3 days', 5000),
(6, 'kaveri', 'mysore', 8907654123, '3 days', 6000),
(7, 'bhadra', 'Mangalore', 8976543210, '2 days', 8000),
(8, 'Netravathi', 'Mangalore', 9087654321, '3 days', 6000);

-- --------------------------------------------------------

--
-- Table structure for table `package`
--

CREATE TABLE `package` (
  `id` int(10) NOT NULL,
  `place_name` char(35) NOT NULL,
  `total_days` varchar(15) NOT NULL,
  `amount` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `package`
--

INSERT INTO `package` (`id`, `place_name`, `total_days`, `amount`) VALUES
(4, 'mysore', '2 days', 4000),
(5, 'Jog falls', '6 days', 8000),
(6, 'beluru', '2 days', 4000),
(7, 'Mullayana Giri', '4 days', 6300),
(8, 'beluru', '5days', 10000),
(9, 'thalakaveri', '2 days', 5000);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(10) NOT NULL,
  `name` char(20) NOT NULL,
  `age` int(3) NOT NULL,
  `gender` varchar(7) NOT NULL,
  `phone` bigint(10) NOT NULL,
  `address` char(25) NOT NULL,
  `place` varchar(30) NOT NULL,
  `visit_date` date NOT NULL,
  `hotel` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `age`, `gender`, `phone`, `address`, `place`, `visit_date`, `hotel`) VALUES
(8, 'Vanishree', 21, 'female', 897654321, 'ujire', 'Mullayana Giri', '2023-05-31', 'Netravathi'),
(9, 'kavana', 30, 'female', 9876543212, 'Mangalore', 'Jog falls', '2023-05-24', 'Netravathi'),
(11, 'chaya', 21, 'female', 7890654323, 'Mangalore', 'mysore', '2023-05-22', 'brandavana'),
(13, 'Vanishree', 222, 'female', 7890654323, 'Mangalore', 'mysore', '2023-05-23', 'brandavana');

-- --------------------------------------------------------

--
-- Table structure for table `user_register`
--

CREATE TABLE `user_register` (
  `id` int(11) NOT NULL,
  `name` char(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_register`
--

INSERT INTO `user_register` (`id`, `name`, `email`, `password`) VALUES
(5, 'chaya', 'chaya123@gmail.com', 'chaya12'),
(6, 'varun', 'varun124@gmail.com', 'varun1'),
(7, 'navya', 'navya345@gmail.com', 'navya12'),
(8, 'vanishree', 'vani12@gmail.com', 'vani123'),
(9, 'suraksha', 'suru@123gmail.com', 'sadananda'),
(10, 'kavana', 'kava56@gmail.com', 'kavana23'),
(11, 'nayana', 'nayana23@gmail.com', 'nayana'),
(12, 'nayana', 'nayana23@gmail', '&123Nayana'),
(13, 'havana', 'havana12@gmail.com', '#12Havana'),
(14, 'nayana', 'naya123@gmail.com', '&123Nayaa');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hotel`
--
ALTER TABLE `hotel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `package`
--
ALTER TABLE `package`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_register`
--
ALTER TABLE `user_register`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `hotel`
--
ALTER TABLE `hotel`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `package`
--
ALTER TABLE `package`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `user_register`
--
ALTER TABLE `user_register`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
