-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 15, 2022 at 06:46 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sait_db_kasus4`
--

-- --------------------------------------------------------

--
-- Table structure for table `kasus_covid`
--

CREATE TABLE `kasus_covid` (
  `no_id` int(241) NOT NULL AUTO_INCREMENT,
  `negara` varchar(50) NOT NULL,
  `total` varchar(255) NOT NULL,
  `meninggal` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kasus_covid`
--

INSERT INTO `kasus_covid` (`no_id`, `negara`, `total`, `meninggal`) VALUES
(1, 'Indonesia', '6.04 juta', '156 ribu'),
(2, 'Amerika Serikat', '80.5 juta', '986 ribu'),
(3, 'Korea Selatan', '16.1 juta', '20.6 ribu'),
(4, 'Swiss', '3.57 juta', '13.5 ribu');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kasus_covid`
--
ALTER TABLE `kasus_covid`
  ADD PRIMARY KEY (`no_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
