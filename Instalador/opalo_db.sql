-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 11-09-2017 a las 05:23:56
-- Versión del servidor: 10.1.21-MariaDB
-- Versión de PHP: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `opalo_db`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `antenas`
--

CREATE TABLE `antenas` (
  `ID_ANTENA` int(50) NOT NULL,
  `Antena` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `Ent_Sal` varchar(100) CHARACTER SET utf8 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `antenas`
--

INSERT INTO `antenas` (`ID_ANTENA`, `Antena`, `Ent_Sal`) VALUES
(1, '2', 'ENTRADA'),
(2, '3', 'SALIDA');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estadisticas`
--

CREATE TABLE `estadisticas` (
  `ID_ESTADISTICA` int(50) NOT NULL,
  `NOMBRES` varchar(100) DEFAULT NULL,
  `APELLIDOS` varchar(100) DEFAULT NULL,
  `DOCUMENTO` varchar(100) DEFAULT NULL,
  `INSTITUCION` varchar(100) DEFAULT NULL,
  `HORA` varchar(100) DEFAULT NULL,
  `ENTRADA_SALIDA` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registro_evento`
--

CREATE TABLE `registro_evento` (
  `ID_EVENTO` int(100) NOT NULL,
  `NOMBRES` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `APELLIDOS` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `DIRECCION` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `CELULAR` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `EMAIL` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `DOCUMENTO` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `INSTITUCION` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `CARGO` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `EDAD` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `TAG_RFID` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `ETIQUETADO` enum('1','2') DEFAULT '1' COMMENT '''1''-NO,''2''-SI',
  `TAG_RFID_HEX` varchar(100) DEFAULT NULL,
  `NOMBRE_EVENTO` varchar(100) CHARACTER SET utf8 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `registro_evento`
--

INSERT INTO `registro_evento` (`ID_EVENTO`, `NOMBRES`, `APELLIDOS`, `DIRECCION`, `CELULAR`, `EMAIL`, `DOCUMENTO`, `INSTITUCION`, `CARGO`, `EDAD`, `TAG_RFID`, `ETIQUETADO`, `TAG_RFID_HEX`, `NOMBRE_EVENTO`) VALUES
(1, 'Jeronimo', 'Burgos', 'Calle 81 N° 102 - 60 Calle 82 No. 102 - 79', '6277776 - 3005627292', 'bochica3industrial@hotmail.com', '52.710.695', 'UIS', 'Estudiante', '23', '8122', '2', '\"1fba\"', 'IV Simposio'),
(2, 'Estefania', 'Villegas', 'Calle 76 Sur No. 18 B 82 La Estrella', '6178535', 'antenaestrella@hotmail.com', '51.738.984', 'UIS', 'Estudiante', '25', '9312', '2', '\"2460\"', 'IV Simposio'),
(3, 'Guillermo', 'Fernandez', 'Carrera 7 B bis A #148-1', '3153348636-5638010', 'parabolicacedrogolf@hotmail.com', '52.355.290', 'UIS', 'Estudiante', '23', '3395', '2', '\"0d43\"', 'IV Simposio'),
(4, 'Juan', 'Gómez', 'Carrerra 80 N°13-87', '3209040124', 'industriales@gmail.com', '67.358.932', 'UIS', 'Estudiante', '22', '4606', '2', '\"11fe\"', 'IV Simposio'),
(5, 'Eliana', 'Ramirez', 'Calle 65 No 80 - 51 Sur Piso 2 Bosa Centro\n\n', '4186435 - 3178203810', '\nacelcombosa@hotmail.com', '79962291', 'UIS', 'Estudiante', '25', '9246', '2', '\"241e\"', 'IV Simposio'),
(6, 'Jose', 'Carmona', ' Calle 45 No. 46-21  Barrio La Esmeralda', '3114603299', 'asoanpaesmeralda@yahoo.com', '41547273', 'UIS', 'Estudiante', '24', '3180', '2', '\"0c6c\"', 'IV Simposio'),
(7, 'Marcela', 'De santis', '\n\nCarrera 53 A No. 7-08\n\n', '3 479626', 'asocolsgsorrento@hotmail.com', '51899077', 'UIS', 'Estudiante', '24', '9202', '2', '\"23f2\"', 'IV Simposio'),
(8, 'Daniela', 'Franco', 'Transversal 68 C No. 31-26 Sur Barrio Floralia', '7403462', 'telefloraliatv@yahoo.es', '39.568.175', 'UIS', 'Estudiante', '26', '4495', '2', '\"118f\"', 'IV Simposio'),
(9, 'Rafael', 'Cortes', 'Calle 144 No. 45 - 16', '7127318', 'canal@asoamigostv.org  -  asoamigostv@yahoo.com.mx', '52.755.672', 'UIS', 'Estudiante', '20', '9353', '2', '\"2489\"', 'IV Simposio'),
(10, 'Camilo', 'Berrio', 'Carrera 24C No. 53 – 47 Sur\n\n', '6771177', 'tvtunal123@gmail.com', '52.817.196', 'UIS', 'Estudiante', '22', '3633', '2', '\"0e31\"', 'IV Simposio'),
(11, 'Francisco', 'Arias', 'Calle 41Sur No. 26- 73 Barrio Ingles', '3134931384', 'teleinglesyasociados@gmail.com', '52960227', 'UIS', 'Estudiante', '21', '4598', '2', '\"11f6\"', 'IV Simposio'),
(12, 'Antonio', 'Merizalde', 'Calle 78 Sur No,. 0 - 40 Int.2 Barrio Marichuela', '3108197376', 'asomarichuela@hotmail.com', '52329187', 'UIS', 'Estudiante', '23', '4138', '2', '\"102a\"', 'IV Simposio'),
(13, 'Karen', 'Restrepo', 'Calle 64 No. 120 - 42 Oficina 201', '4340364', 'ingeniros@hotmail.com', '52.494.004', 'UIS', 'Estudiante', '21', '9289', '2', '\"2449\"', 'IV Simposio'),
(14, 'David', 'Lemus', 'Diagonal 23 No. 28 – 20 / Calle 22C - 28- 10 Int 3', '3103058303 / 2943739', 'asocousatama@hotmail.com', '52.705.875', 'UIS', 'Estudiante', '20', '5274', '2', '\"149a\"', 'IV Simposio'),
(15, 'Javier', 'Santana', 'Calle 18 No. 109 - 48', '3107594044', 'teleunidos109@hotmail.com ', '52.987.453', 'UIS', 'Estudiante', '22', '3332', '2', '\"0d04\"', 'IV Simposio'),
(16, 'Virginia', 'Saldarriaga', 'Carrera 96 A No 73 - 02', '3143870584', 'tevealamos@hotmail.com', '52.880.406', 'UIS', 'Estudiante', '25', '1352', '2', '\"0548\"', 'IV Simposio');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rfid_1`
--

CREATE TABLE `rfid_1` (
  `ID` int(50) NOT NULL,
  `READER_NAME` varchar(50) NOT NULL,
  `MAC_ADDRESS` text NOT NULL,
  `EPC` text NOT NULL,
  `ANTENA_PORT` text NOT NULL,
  `TIME_STAMP` text NOT NULL,
  `PEAK_RSSI` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `rfid_1`
--

INSERT INTO `rfid_1` (`ID`, `READER_NAME`, `MAC_ADDRESS`, `EPC`, `ANTENA_PORT`, `TIME_STAMP`, `PEAK_RSSI`) VALUES
(1, '\"Impinj RFID Reader\"', '\"00:16:25:10:A0:70\"', '\"1E13\"', '2', '05-09-2017 10:14:39 am', '-54'),
(2, '\"Impinj RFID Reader\"', '\"00:16:25:10:A0:70\"', '\"0316\"', '2', '05-09-2017 10:14:39 am', '-54'),
(3, '\"Impinj RFID Reader\"', '\"00:16:25:10:A0:70\"', '\"09D6\"', '2', '05-09-2017 10:14:39 am', '-54'),
(4, '\"Impinj RFID Reader\"', '\"00:16:25:10:A0:70\"', '\"09D6\"', '3', '05-09-2017 10:34:17 am', '-52'),
(5, '\"Impinj RFID Reader\"', '\"00:16:25:10:A0:70\"', '\"0316\"', '3', '05-09-2017 10:34:17 am', '-51'),
(6, '\"Impinj RFID Reader\"', '\"00:16:25:10:A0:70\"', '\"1E13\"', '3', '05-09-2017 10:34:18 am', '-54'),
(7, '\"Impinj RFID Reader\"', '\"00:16:25:10:A0:70\"', '\"1E13\"', '2', '05-09-2017 11:19:44 am', '-54'),
(8, '\"Impinj RFID Reader\"', '\"00:16:25:10:A0:70\"', '\"0316\"', '2', '05-09-2017 11:19:45 am', '-54'),
(9, '\"Impinj RFID Reader\"', '\"00:16:25:10:A0:70\"', '\"09D6\"', '2', '05-09-2017 11:19:45 am', '-52'),
(10, '\"Impinj RFID Reader\"', '\"00:16:25:10:A0:70\"', '\"09D6\"', '3', '05-09-2017 11:43:44 am', '-50'),
(11, '\"Impinj RFID Reader\"', '\"00:16:25:10:A0:70\"', '\"0316\"', '3', '05-09-2017 11:43:46 am', '-52'),
(12, '\"Impinj RFID Reader\"', '\"00:16:25:10:A0:70\"', '\"1E13\"', '3', '05-09-2017 11:43:46 am', '-49'),
(13, '\"Impinj RFID Reader\"', '\"00:16:25:10:A0:70\"', '\"09D6\"', '2', '05-09-2017 13:31:04 pm', '-52'),
(14, '\"Impinj RFID Reader\"', '\"00:16:25:10:A0:70\"', '\"1E13\"', '2', '05-09-2017 13:31:05 pm', '-50'),
(15, '\"Impinj RFID Reader\"', '\"00:16:25:10:A0:70\"', '\"0316\"', '2', '05-09-2017 13:31:05 pm', '-50'),
(16, '\"Impinj RFID Reader\"', '\"00:16:25:10:A0:70\"', '\"1E13\"', '3', '05-09-2017 13:47:36 pm', '-54'),
(17, '\"Impinj RFID Reader\"', '\"00:16:25:10:A0:70\"', '\"09D6\"', '3', '05-09-2017 13:47:36 pm', '-50'),
(18, '\"Impinj RFID Reader\"', '\"00:16:25:10:A0:70\"', '\"0316\"', '3', '05-09-2017 13:47:36 pm', '-46');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `ID_USUARIO` int(11) NOT NULL,
  `Nombre` varchar(100) NOT NULL,
  `Usuario` varchar(100) NOT NULL,
  `Password` varchar(20) NOT NULL,
  `Tipo_usuario` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`ID_USUARIO`, `Nombre`, `Usuario`, `Password`, `Tipo_usuario`) VALUES
(1, 'Duban Gabriel Pedraza', 'Duban', 'admin', 'Admin'),
(2, 'Efren Dario Acevedo', 'Efren', 'user', 'Usuario'),
(3, 'Javier Eduardo Arias', 'Javier', 'admin', 'Admin');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `estadisticas`
--
ALTER TABLE `estadisticas`
  ADD UNIQUE KEY `idx_ESTADISTICAS` (`NOMBRES`,`APELLIDOS`,`DOCUMENTO`,`INSTITUCION`,`HORA`,`ENTRADA_SALIDA`);

--
-- Indices de la tabla `registro_evento`
--
ALTER TABLE `registro_evento`
  ADD PRIMARY KEY (`ID_EVENTO`);

--
-- Indices de la tabla `rfid_1`
--
ALTER TABLE `rfid_1`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`ID_USUARIO`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `registro_evento`
--
ALTER TABLE `registro_evento`
  MODIFY `ID_EVENTO` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT de la tabla `rfid_1`
--
ALTER TABLE `rfid_1`
  MODIFY `ID` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `ID_USUARIO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
