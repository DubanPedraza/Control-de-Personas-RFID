-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 29-04-2017 a las 00:36:30
-- Versión del servidor: 10.1.21-MariaDB
-- Versión de PHP: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `registroevento`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registro_evento`
--

CREATE TABLE `registro_evento` (
  `ID_EVENTO` int(11) NOT NULL,
  `NOMBRES` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `APELLIDOS` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `DIRECCION` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `CELULAR` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `EMAIL` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `DOCUMENTO` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `INSTITUCION` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `CARGO` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `EDAD` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `ECP` varchar(100) CHARACTER SET utf8 DEFAULT NULL

) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `registro_evento`
--
ALTER TABLE `registro_evento`
  ADD UNIQUE KEY `ID` (`ID_EVENTO`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `registro_evento`
--
ALTER TABLE `registro_evento`
  MODIFY `ID_EVENTO` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
