-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 20-01-2020 a las 23:44:53
-- Versión del servidor: 10.3.16-MariaDB
-- Versión de PHP: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `postmortem_bestday`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sesiones`
--

CREATE TABLE `sesiones` (
  `IDsesion` int(11) NOT NULL,
  `fecha_sesion` date DEFAULT NULL,
  `totalSi` varchar(11) NOT NULL DEFAULT '0',
  `totalParcial` varchar(11) NOT NULL DEFAULT '0',
  `totalNo` varchar(11) NOT NULL DEFAULT '0',
  `estatus_sesion` varchar(45) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `sesiones`
--

INSERT INTO `sesiones` (`IDsesion`, `fecha_sesion`, `totalSi`, `totalParcial`, `totalNo`, `estatus_sesion`) VALUES
(2, '2019-12-03', '1', '3', '2', '0'),
(6, '2019-12-19', '1', '0', '0', '0'),
(7, '2019-12-12', '1', '0', '0', '0'),
(9, '2019-12-13', '0', '1', '1', '0'),
(10, '2019-11-06', '1', '0', '0', '0'),
(12, '2019-12-05', '0', '0', '0', '0'),
(13, '2019-12-06', '5', '4', '1', '0'),
(14, '2019-12-27', '3', '3', '3', '0'),
(15, '2019-12-28', '0', '0', '0', '0');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `sesiones`
--
ALTER TABLE `sesiones`
  ADD PRIMARY KEY (`IDsesion`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `sesiones`
--
ALTER TABLE `sesiones`
  MODIFY `IDsesion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
