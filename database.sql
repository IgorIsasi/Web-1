-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: db
-- Tiempo de generación: 20-10-2021 a las 16:26:32
-- Versión del servidor: 10.6.4-MariaDB-1:10.6.4+maria~focal
-- Versión de PHP: 7.4.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `database`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `liburua`
--

CREATE TABLE `liburua` (
  `izena` varchar(40) NOT NULL,
  `orriKop` int(11) NOT NULL,
  `egilea` varchar(40) NOT NULL,
  `kopurua` int(11) NOT NULL,
  `prezioa` int(11) NOT NULL,
  `irudia` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `liburua`
--

INSERT INTO `liburua` (`izena`, `orriKop`, `egilea`, `kopurua`, `prezioa`, `irudia`) VALUES
('El Último Trabajo Del Señor Luna', 248, 'Cesar Mallorquí', 12, 20, 'https://imagessl8.casadellibro.com/a/l/t7/98/9788423676798.jpg'),
('La Metamorfosis', 128, 'Franz Kafka', 18, 16, 'https://images-na.ssl-images-amazon.com/images/I/81B6ebdgtZL.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `NAN` varchar(9) NOT NULL,
  `izena` text NOT NULL,
  `abizenak` text NOT NULL,
  `telefonoa` int(9) NOT NULL,
  `jaiotzeData` date NOT NULL,
  `email` text NOT NULL,
  `pasahitza` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`NAN`, `izena`, `abizenak`, `telefonoa`, `jaiotzeData`, `email`, `pasahitza`) VALUES
('20975528B', 'Markel', 'Rubinos', 667261029, '2021-10-07', 'markelmontejo@gmail.com', '11111111');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `liburua`
--
ALTER TABLE `liburua`
  ADD PRIMARY KEY (`izena`,`egilea`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`NAN`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
