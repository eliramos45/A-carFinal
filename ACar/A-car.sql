-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 18-05-2023 a las 00:18:05
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `A-car`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estudiante`
--

CREATE TABLE `estudiante` (
  `matricula` int(8) NOT NULL,
  `contrasenia` varchar(50) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellido` varchar(50) NOT NULL,
  `carrera` varchar(50) NOT NULL,
  `semestre` int(2) NOT NULL,
  `celular` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `estudiante`
--

INSERT INTO `estudiante` (`matricula`, `contrasenia`, `nombre`, `apellido`, `carrera`, `semestre`, `celular`) VALUES
(424345, '12345Eli', 'Elizabeth', 'Ramos ', 'TIND', 6, 984216724);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estudianteConductor`
--

CREATE TABLE `estudianteConductor` (
  `matricula` int(8) NOT NULL,
  `marcaAuto` varchar(50) NOT NULL,
  `color` varchar(50) NOT NULL,
  `placa` int(7) NOT NULL,
  `capacidad` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estudianteViajero`
--

CREATE TABLE `estudianteViajero` (
  `matricula` int(8) NOT NULL,
  `pasajeros` int(2) NOT NULL,
  `equipaje` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `estudiante`
--
ALTER TABLE `estudiante`
  ADD PRIMARY KEY (`matricula`),
  ADD UNIQUE KEY `matricula` (`matricula`);

--
-- Indices de la tabla `estudianteConductor`
--
ALTER TABLE `estudianteConductor`
  ADD PRIMARY KEY (`matricula`),
  ADD UNIQUE KEY `matricula` (`matricula`);

--
-- Indices de la tabla `estudianteViajero`
--
ALTER TABLE `estudianteViajero`
  ADD PRIMARY KEY (`matricula`),
  ADD UNIQUE KEY `matricula` (`matricula`);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `estudianteConductor`
--
ALTER TABLE `estudianteConductor`
  ADD CONSTRAINT `FK_estudianteConductor_estudiante` FOREIGN KEY (`matricula`) REFERENCES `estudiante` (`matricula`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `estudianteViajero`
--
ALTER TABLE `estudianteViajero`
  ADD CONSTRAINT `FK_estudianteViajero_estudiante` FOREIGN KEY (`matricula`) REFERENCES `estudiante` (`matricula`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
