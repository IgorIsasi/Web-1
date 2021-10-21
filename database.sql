-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: db
-- Tiempo de generación: 21-10-2021 a las 18:02:53
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
('Dora la exploradora', 34, 'Veronica Alonso', 7, 8, 'https://imagessl5.casadellibro.com/a/l/t5/65/9788448830465.jpg'),
('El italiano', 390, 'Arturo Perez Reverte', 50, 22, 'https://imagessl9.casadellibro.com/a/l/t5/99/9788420460499.jpg'),
('El Último Trabajo Del Señor Luna', 248, 'Cesar Mallorquí', 12, 20, 'https://imagessl8.casadellibro.com/a/l/t7/98/9788423676798.jpg'),
('Enigma', 240, 'Jim Ottaviani', 15, 18, 'https://imagessl5.casadellibro.com/a/l/t7/15/9788441541115.jpg'),
('La casa de Bernarda Alba', 310, 'Federico Garcia Lorca', 30, 19, 'https://imagessl4.casadellibro.com/a/l/t5/04/9788469833704.jpg'),
('La casa de los espiritus', 350, 'Isabel Allende', 13, 21, 'https://images-na.ssl-images-amazon.com/images/I/81Q1z5jXcfL.jpg'),
('La Metamorfosis', 128, 'Franz Kafka', 18, 16, 'https://images-na.ssl-images-amazon.com/images/I/81B6ebdgtZL.jpg'),
('Los tres bandidos', 230, 'Tomi Ungerer', 3, 24, 'https://biblioabrazo.files.wordpress.com/2010/08/bandidos2.jpg'),
('Peppa pig En el acuario', 32, 'Hasbro', 15, 30, 'https://images-na.ssl-images-amazon.com/images/I/81jXaU9KgzL.jpg'),
('Python Playground', 327, 'Mahesh venkitachalam', 12, 15, 'https://m.media-amazon.com/images/I/51296rvlbqL.jpg'),
('Teo va a Leioa', 45, 'UPV / EHU', 25, 15, 'https://raw.githubusercontent.com/Marru11/webIrudiak/master/WhatsApp%20Image%202021-10-14%20at%2022.39.12.jpeg');

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
('11112222A', 'Iker', 'Etxebarria', 123456789, '1111-11-11', 'ietxebarria@h.h', '123123123'),
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
