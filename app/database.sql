-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: db
-- Generation Time: Oct 19, 2021 at 05:22 PM
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
-- Table structure for table `erreserba`
--

CREATE TABLE `erreserba` (
  `liburuIzena` varchar(40) NOT NULL,
  `liburuEgilea` varchar(40) NOT NULL,
  `erabEmail` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `erreserba`
--

INSERT INTO `erreserba` (`liburuIzena`, `liburuEgilea`, `erabEmail`) VALUES
('La Metamorfosis', 'Franz Kafka', 'pop@gmail.com');

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
('La Metamorfosis', 128, 'Franz Kafka', 17, 16, 'LaMetamorfosis.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `usuarios`
--

CREATE TABLE `usuarios` (
  `izena` varchar(50) NOT NULL,
  `abizenak` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `nan` varchar(9) NOT NULL,
  `jaiotzeData` date NOT NULL,
  `pasahitza` varchar(50) NOT NULL,
  `telefonoa` int(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `usuarios`
--

INSERT INTO `usuarios` (`izena`, `abizenak`, `email`, `nan`, `jaiotzeData`, `pasahitza`, `telefonoa`) VALUES
('Igor', 'Isasi Diez', 'pop@gmail.com', '12345678A', '2003-09-11', '12345678', 123456789);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `erreserba`
--
ALTER TABLE `erreserba`
  ADD PRIMARY KEY (`liburuIzena`,`liburuEgilea`,`erabEmail`),
  ADD KEY `erabEmail` (`erabEmail`);

--
-- Indexes for table `liburua`
--
ALTER TABLE `liburua`
  ADD PRIMARY KEY (`izena`,`egilea`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`email`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `erreserba`
--
ALTER TABLE `erreserba`
  ADD CONSTRAINT `erreserba_ibfk_1` FOREIGN KEY (`erabEmail`) REFERENCES `usuarios` (`email`),
  ADD CONSTRAINT `erreserba_ibfk_2` FOREIGN KEY (`liburuIzena`,`liburuEgilea`) REFERENCES `liburua` (`izena`, `egilea`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
