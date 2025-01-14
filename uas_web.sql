-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 09, 2025 at 06:01 AM
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
-- Database: `uas_web`
--

-- --------------------------------------------------------

--
-- Table structure for table `daftarlagu`
--

CREATE TABLE `daftarlagu` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `artist` varchar(50) NOT NULL,
  `tahun` int(4) NOT NULL,
  `genre` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `daftarlagu`
--

INSERT INTO `daftarlagu` (`id`, `nama`, `artist`, `tahun`, `genre`) VALUES
(11, 'Shape of You', 'Ed Sheeran', 2017, 'Pop'),
(12, 'Blinding Lights', 'The Weeknd', 2020, 'R&B'),
(13, 'Bohemian Rhapsody', 'Queen', 1975, 'Rock'),
(15, 'Smells Like Teen Spirit', 'Nirvana', 1991, 'Grunge'),
(16, 'Rolling in the Deep', 'Adele', 2011, 'Pop'),
(17, 'Hotel California', 'Eagles', 1976, 'Rock'),
(18, 'Someone Like You', 'Adele', 2011, 'Pop'),
(19, 'Wonderwall', 'Oasis', 1995, 'Britpop'),
(20, 'Hey Jude', 'The Beatles', 1968, 'Rock');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userID` smallint(5) UNSIGNED NOT NULL,
  `name` varchar(25) NOT NULL,
  `username` varchar(15) NOT NULL,
  `pswd` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userID`, `name`, `username`, `pswd`) VALUES
(1, 'Administrator', 'admin', 'admin'),
(2, 'Nando', 'nando', 'nando');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `daftarlagu`
--
ALTER TABLE `daftarlagu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `daftarlagu`
--
ALTER TABLE `daftarlagu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userID` smallint(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
