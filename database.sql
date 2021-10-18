-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: db
-- Generation Time: Oct 18, 2021 at 05:12 PM
-- Server version: 10.6.4-MariaDB-1:10.6.4+maria~focal
-- PHP Version: 7.4.20

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
-- Table structure for table `liburua`
--

CREATE TABLE `liburua` (
  `izena` varchar(40) NOT NULL,
  `orriKop` int(11) NOT NULL,
  `egilea` varchar(40) NOT NULL,
  `kopurua` int(11) NOT NULL,
  `prezioa` double DEFAULT NULL,
  `irudia` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `liburua`
--

INSERT INTO `liburua` (`izena`, `orriKop`, `egilea`, `kopurua`, `prezioa`, `irudia`) VALUES
('La Metamorfosis', 128, 'Franz Kafka', 18, 16, 'LaMetamorfosis.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `usuarios`
--

CREATE TABLE `usuarios` (
  `erabiltzailea` varchar(50) NOT NULL,
  `izenAbizena` varchar(50) NOT NULL,
  `email` text NOT NULL,
  `nan` varchar(9) NOT NULL,
  `jaiotzeData` date NOT NULL,
  `Pasahitza` varchar(50) NOT NULL,
  `telefonoa` int(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `usuarios`
--

INSERT INTO `usuarios` (`erabiltzailea`, `izenAbizena`, `email`, `nan`, `jaiotzeData`, `Pasahitza`, `telefonoa`) VALUES
('Markel', 'Markel Rubiños', 'markelmontejo@gmail.com', '20975528B', '2001-09-04', '123123', 667261029);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `liburua`
--
ALTER TABLE `liburua`
  ADD PRIMARY KEY (`izena`,`egilea`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`erabiltzailea`),
  ADD UNIQUE KEY `nan` (`nan`),
  ADD UNIQUE KEY `telefonoa` (`telefonoa`),
  ADD UNIQUE KEY `email` (`email`) USING HASH;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
