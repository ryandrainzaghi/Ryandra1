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
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
