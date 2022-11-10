-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 07, 2022 at 08:30 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `agriquick`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `ID` int(100) NOT NULL,
  `Name` text NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Phone` int(50) NOT NULL,
  `Website` varchar(50) NOT NULL,
  `Description` text NOT NULL,
  `Time` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`ID`, `Name`, `Email`, `Phone`, `Website`, `Description`, `Time`) VALUES
(1, 'Benn Kaiser', 'bennkaiser1@gmail.com', 2147483647, 'https://nullchemy.com', 'hello just greetings', '2022-05-17 08:51:24');

-- --------------------------------------------------------

--
-- Table structure for table `subscribers`
--

CREATE TABLE `subscribers` (
  `ID` int(50) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Time` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `ID` int(100) NOT NULL,
  `FullName` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Phone` int(50) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `SessionID` varchar(100) NOT NULL,
  `UserID` varchar(100) NOT NULL,
  `Verified` int(10) NOT NULL DEFAULT 0,
  `OTP` int(100) NOT NULL DEFAULT 0,
  `Token` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`ID`, `FullName`, `Email`, `Phone`, `Password`, `SessionID`, `UserID`, `Verified`, `OTP`, `Token`) VALUES
(6, 'Dennis Kibet', 'nathan.orland7@gmail.com', 798116710, '$2y$10$eWpkJlx.RWJgha//cVuxaOfpMvjnaFqFhDh0t3mp/JwqrJeljL/oa', 'fEsVOmmb8f9qaRSbEiffkkS1p1hLz4ML', 'rYfcQyvj', 0, 339668, ''),
(7, 'Mercy Shiku', 'mercy7@gmail.com', 2147483647, '$2y$10$D9yWMhUQMeQQMv//REdeB.VUy220lmq738XNIMO.kGLliU62mYgLe', 'zrjmfFXclS', 'KF3vI9jw', 0, 0, ''),
(8, 'wesh', 'josewesh477@gmail.com', 110453656, '$2y$10$QP7lHSp7nujFh9NO677I5.NUk8F2VjJrYXG1wcaq2hTTAo9BiXwl.', 'u0j9AwdSkButnUJz73cjZkLVFjtqrSRo', 'cyGXpG1Q', 0, 0, ''),
(9, 'Dennis Kibet', 'dennisrkibet@gmail.com', 798116710, '$2y$10$BywN9aIhPoqkWQ0z.X1egeZEwB7ADFfW/TDOb5W4VXNgzKgwBFHcO', 'kabVwXIKYjI7OFydV57ljkLuKZGstGGE', '8Fhe9qyB', 0, 253540, 'hViP3yqlJvIE27OVTQ4nNnek85M29oPv'),
(10, 'Dominic langat', 'kipkoechdominic1999@gmail.com', 758791015, '$2y$10$G7T0znAQrbCooN4fn3tL8OakAUKXf8M3FJEjb8akw2/sqzGpRG/mu', 'Df40fsvb4zLG8D0NMaeO5caCDxO8oHYc', '3Ipme2vN', 0, 0, '29hxPgBGOr2YZei2nTcNGzDXILlvGRlh'),
(11, 'Saumu Andrews', 'saumuandrews@gmail.com', 798116710, '$2y$10$WIMZgPPNmmDSM7LikV6cnuuBw3yltstktyVJ6j.PoFvlFqo6KM.GS', 'rfl0N7giLv', 'eJHcFSoM', 0, 0, 'jQUJlbHDffNimZwC2SW0PtlTLQSrNKZz'),
(12, 'Debra Kaiser', 'debra@nullchemy.com', 2147483647, '$2y$10$lSlYHflFB9DOU/WxlY7JvuxKuj5cPcZa046beA3G6lqSPye3lJOLO', 'okiAatEEOTRxfThHr7bYkeJwN8A9iXtH', 'R9OUZh87', 0, 0, 'wxkvkofNTp2TKSte7YXCjsEd5o9igzdd');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `subscribers`
--
ALTER TABLE `subscribers`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `ID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `subscribers`
--
ALTER TABLE `subscribers`
  MODIFY `ID` int(50) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `ID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
