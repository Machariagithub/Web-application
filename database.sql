-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 07, 2023 at 01:20 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `database`
--

-- --------------------------------------------------------

--
-- Table structure for table `data`
--

CREATE TABLE `data` (
  `Name` int(90) NOT NULL,
  `Email` varchar(90) NOT NULL,
  `password` varchar(89) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `data`
--

INSERT INTO `data` (`Name`, `Email`, `password`) VALUES
(0, 'example@gmail.com', '1234'),
(0, '', ''),
(0, 'example@gmail.com', '1234'),
(0, '', ''),
(0, 'example@gmail.com', ''),
(0, 'example@gmail.com', ''),
(0, '', ''),
(0, '', ''),
(0, '', ''),
(0, '', ''),
(0, 'okkoo', '1234'),
(0, 'okkoo', '1234'),
(0, '', ''),
(0, '', ''),
(0, 'okkoo', '123'),
(0, '', ''),
(0, 'example@gmail.com', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `reg`
--

CREATE TABLE `reg` (
  `Name` varchar(90) NOT NULL,
  `Email` varchar(90) NOT NULL,
  `Password` varchar(90) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `reg`
--

INSERT INTO `reg` (`Name`, `Email`, `Password`) VALUES
('yvone', 'example@gmail.com', '1234'),
('lucy', 'lucy@gmail.com', '7890'),
('', '', ''),
('', '', ''),
('', '', ''),
('', '', ''),
('JOHN', 'john@gmail.co', 'abcd');

-- --------------------------------------------------------

--
-- Table structure for table `update`
--

CREATE TABLE `UpdateDetails` (
  `Mobile` int(20) NOT NULL,
  `Email` varchar(90) NOT NULL,
  `Address` varchar(90) NOT NULL,
  `Registration` int(90) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
