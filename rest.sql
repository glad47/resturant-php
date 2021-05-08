-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 15, 2020 at 09:42 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rest`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `password`) VALUES
(1, 'Naveen@1', 'Forwebsite@1');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(500) NOT NULL,
  `mobile` varchar(100) NOT NULL,
  `ratedIndex` varchar(11) NOT NULL,
  `review` varchar(500) NOT NULL,
  `vkey` varchar(500) NOT NULL,
  `verified` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `name`, `email`, `password`, `mobile`, `ratedIndex`, `review`, `vkey`, `verified`) VALUES
(1, 'Aziz', 'ggffhh3344@gmail.com', 'zz0864975', '18276915525', '3', 'i am happy ', '', 0),
(2, 'Sam', 'sam@gmail.com', 'zz0864975', '1827695525', '4', 'i am sam it was greate', '', 0),
(3, 'John', 'john@gmail.com', 'zz0864975', '18276915525', '5', 'i am john it was a graete deal', '', 0),
(8, 'MyAziz', 'zizoo4949@gmail.com', '33baf2fafdaff52ac85fe03828cfdcfd', '146484854145', '-1', '', '99f3900744a748ab207102f5394eff4b', 1);

-- --------------------------------------------------------

--
-- Table structure for table `cus_pac`
--

CREATE TABLE `cus_pac` (
  `cus_id` int(11) NOT NULL,
  `pac_id` int(11) NOT NULL,
  `date_pay` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cus_pac`
--

INSERT INTO `cus_pac` (`cus_id`, `pac_id`, `date_pay`) VALUES
(8, 3, '2020/8/4'),
(8, 1, '2020/8/9'),
(1, 5, '2020/1/4'),
(2, 3, '2020/2/4');

-- --------------------------------------------------------

--
-- Table structure for table `package`
--

CREATE TABLE `package` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `price` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `package`
--

INSERT INTO `package` (`id`, `name`, `price`) VALUES
(1, 'tasta', '150'),
(2, 'Mini Serve3 Package', '950'),
(3, 'Mini Serve2 Package', '750'),
(4, 'Extra Serve3 Package', '1800'),
(5, 'Extra Serve2 Package', '1400'),
(6, 'Ultra Serve3 Package', '3600'),
(7, 'Ultra Serve2 Package', '2700');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `package`
--
ALTER TABLE `package`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `package`
--
ALTER TABLE `package`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
