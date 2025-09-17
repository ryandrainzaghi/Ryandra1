-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 15, 2024 at 01:13 PM
-- Server version: 10.5.22-MariaDB
-- PHP Version: 7.3.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id22191558_statistikers`
--

-- --------------------------------------------------------

--
-- Table structure for table `question`
--

CREATE TABLE `question` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `nim` varchar(11) NOT NULL,
  `kelas` varchar(255) NOT NULL,
  `no1` char(1) NOT NULL,
  `no2` char(1) NOT NULL,
  `no3` char(1) NOT NULL,
  `no4` char(1) NOT NULL,
  `no5` char(1) NOT NULL,
  `no6` char(1) NOT NULL,
  `no7` char(1) NOT NULL,
  `no8` char(1) NOT NULL,
  `score` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `question`
--

INSERT INTO `question` (`id`, `nama`, `nim`, `kelas`, `no1`, `no2`, `no3`, `no4`, `no5`, `no6`, `no7`, `no8`, `score`) VALUES
(1, 'Dylan Agustino Caesar Putra', '2390343032', 'RJ23B', 'b', 'a', 'c', 'c', 'a', 'a', 'b', 'a', 63),
(2, 'Dzakwan Aufa Syauqi', '2390343033', 'RJ23B', 'b', 'c', 'c', 'd', 'a', 'a', 'a', 'a', 88),
(3, 'Efania Falita Miyarhadi', '2390343035', 'RJ23B', 'b', 'd', 'c', 'd', 'c', 'a', 'a', 'a', 75),
(4, 'Adhitya Dwi Putra Azri', '2390343004', 'RJ23B', 'a', 'c', 'c', 'd', 'd', 'a', 'a', 'a', 88),
(5, 'Varrel Walfren Anvieto', '2390343117', 'RJ23B', 'b', 'c', 'a', 'c', 'd', 'a', 'a', 'a', 75),
(6, 'Feziabrar Aktaf Indria', '2390343044', 'RJ23B', 'b', 'c', 'c', 'd', 'd', 'a', 'a', 'a', 100),
(7, 'Haura Dzikriyyah', '2390343053', 'RJ23B', 'b', 'c', 'c', 'd', 'd', 'a', 'a', 'a', 100),
(8, 'Nadya Karina Putri Sukmana', '2390343094', 'RJ23B', 'b', 'c', 'c', 'a', 'd', 'a', 'a', 'a', 88),
(9, 'Amy Rahmadhanti', '2390343013', 'RJ23B', 'b', 'c', 'c', 'd', 'a', 'a', 'a', 'a', 88),
(10, 'Erlina Diana Putri', '2390343038', 'RJ23B', 'b', 'c', 'c', 'd', 'd', 'a', 'a', 'a', 100),
(11, 'Andaru Dimasseto Wibowo', '2390343014', 'RJ23B', 'b', 'c', 'c', 'd', 'd', 'a', 'a', 'a', 100),
(12, 'Sophia Dwi Cahyani', '2390343111', 'RJ23B', 'b', 'c', 'c', 'd', 'b', 'a', 'a', 'a', 88),
(13, 'Naufal Irbad Albayhaqqi', '2390343098', 'RJ23B', 'b', 'd', 'c', 'd', 'd', 'a', 'a', 'a', 88),
(14, 'Affifah Nurhaliza Putri', '2390343007', 'RJ23B', 'b', 'c', 'c', 'd', 'd', 'a', 'a', 'a', 100),
(15, 'Khairatun Hisan', '2390343061', 'RJ23B', 'b', 'c', 'c', 'd', 'd', 'a', 'a', 'a', 100);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `nim` varchar(20) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama`, `nim`, `email`, `password`) VALUES
(1, 'Dylan Agustino Caesar Putra', '2390343032', 'dylanags123@gmail.com', 'dylan123'),
(2, 'Dzakwan Aufa Syauqi ', '2390343033', 'dzakwanauf31@gmail.com', 'dzakwan123'),
(3, 'Efania Falita Miyarhadi ', '2390343035', 'efaniafalita@gmail.com', 'efania22'),
(4, 'Adhitya Dwi Putra Azri', '2390343004', 'adhityadwi12@gmail.com', 'adhityadwi123'),
(5, 'Sophia Dwi Cahyani', '2390343111', 'sophiadwi123gmail.com', 'sophia123'),
(6, 'Varrel Walfren Anvieto ', '2390343117', 'varrelwalfren7@gmail.com', 'varrel123'),
(7, 'Naufal Irbad Albayhaqqi', '2390343098', 'naufalirbad321@gmail.com', 'naufal123'),
(8, 'Feziabrar Aktaf Indria', '2390343044', 'feziabrar@gmail.com', 'feziabr123'),
(9, 'Affifah Nurhaliza Putri', '2390343007', 'afifahnur1@gmail.com', 'afifah123'),
(10, 'Haura Dzikriyyah', '2390343053', 'hauradz3@gmail.com', 'harua123'),
(11, 'Khairatun Hisan', '2390343061', 'khaira@gmail.com', 'khaira123'),
(12, 'Andaru Dimasseto Wibowo', '2390343014', 'andarudimas5@gmail.com', 'andaru123'),
(13, 'Nadya Karina Putri Sukmana', '2390343094', 'nadya999@gmail.com', 'nadya123'),
(14, 'Amy Rahmadhanti ', '2390343013', 'amyrmdhnti@gmail.com', 'amy1234556'),
(15, 'Erlina Diana Putri', '2390343038', 'erlinadiana@gmail.com', 'erlina123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `question`
--
ALTER TABLE `question`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `question`
--
ALTER TABLE `question`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
