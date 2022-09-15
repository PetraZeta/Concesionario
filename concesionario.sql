-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 30-04-2022 a las 13:35:15
-- Versión del servidor: 5.7.26
-- Versión de PHP: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `concesionario`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

DROP TABLE IF EXISTS `cliente`;
CREATE TABLE IF NOT EXISTS `cliente` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(20) COLLATE utf8mb4_spanish_ci NOT NULL,
  `apellido` varchar(20) COLLATE utf8mb4_spanish_ci NOT NULL,
  `ciudad` varchar(20) COLLATE utf8mb4_spanish_ci NOT NULL,
  `dni` varchar(10) COLLATE utf8mb4_spanish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`id`, `nombre`, `apellido`, `ciudad`, `dni`) VALUES
(9, 'Manuel', 'Rodriguez', 'Valencia', '11111111-L'),
(10, 'JoaquÃ­n', 'Motino', 'Barcelona', '22222222-O'),
(11, 'MÃ³nica', 'Ortiz', 'Madrid', '33333333-O'),
(16, 'maria', 'GarcÃ­a', 'Barcelona', '12345678L'),
(20, 'cacafuti', 'uwustin 3Âº', 'mongolia', '123457');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `coches`
--

DROP TABLE IF EXISTS `coches`;
CREATE TABLE IF NOT EXISTS `coches` (
  `cod` int(4) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(20) COLLATE utf8mb4_spanish_ci NOT NULL,
  `modelo` varchar(10) COLLATE utf8mb4_spanish_ci NOT NULL,
  `marca` varchar(10) COLLATE utf8mb4_spanish_ci NOT NULL,
  PRIMARY KEY (`cod`),
  KEY `fk_marcoche` (`marca`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `coches`
--

INSERT INTO `coches` (`cod`, `nombre`, `modelo`, `marca`) VALUES
(1, 'Ibiza', 'GTI', 'MC1'),
(2, 'Ibiza', 'GLX', 'MC1'),
(3, 'Ibiza', 'GTD', 'MC1'),
(4, 'Toledo', 'GTD', 'MC1'),
(5, 'Cordoba', 'GTI', 'MC1'),
(6, 'Megane', '1.6', 'MC2'),
(7, 'Megane', 'GTI', 'MC2'),
(8, 'Laguna', 'TD', 'MC2'),
(9, 'Laguna', 'TD', 'MC2'),
(10, 'ZX', 'TD', 'MC1'),
(11, 'ZX', 'TD', 'MC3'),
(14, 'Toyota', 'TD', 'MC1'),
(15, 'Ferrari', 'TD', 'MC3');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `concesionario`
--

DROP TABLE IF EXISTS `concesionario`;
CREATE TABLE IF NOT EXISTS `concesionario` (
  `id_conc` varchar(5) COLLATE utf8mb4_spanish_ci NOT NULL,
  `nombre` varchar(20) COLLATE utf8mb4_spanish_ci NOT NULL,
  `ciudad` varchar(20) COLLATE utf8mb4_spanish_ci NOT NULL,
  PRIMARY KEY (`id_conc`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `concesionario`
--

INSERT INTO `concesionario` (`id_conc`, `nombre`, `ciudad`) VALUES
('CON1', 'CENCAR', 'Madrid'),
('CON2', 'MADRID_DOS', 'Madrid'),
('CON3', 'CAR_CULE', 'Barcelona'),
('CON4', 'COCHES DEL ESTE', 'Valencia'),
('CON5', 'NORCAR', 'Bilbao');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `distribucion`
--

DROP TABLE IF EXISTS `distribucion`;
CREATE TABLE IF NOT EXISTS `distribucion` (
  `concesionario` varchar(5) COLLATE utf8mb4_spanish_ci NOT NULL,
  `coche` int(5) NOT NULL,
  `cantidad` int(5) NOT NULL,
  KEY `fk_dis` (`concesionario`),
  KEY `distrib_venta` (`coche`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `distribucion`
--

INSERT INTO `distribucion` (`concesionario`, `coche`, `cantidad`) VALUES
('CON1', 1, 1),
('CON1', 1, 1),
('CON1', 7, 1),
('CON1', 15, 1),
('CON1', 15, 1),
('CON1', 15, 1),
('CON1', 1, 1),
('CON3', 15, 1),
('CON3', 1, 1),
('CON3', 1, 1),
('CON3', 2, 1),
('CON3', 3, 1),
('CON3', 5, 1),
('CON3', 6, 1),
('CON3', 7, 1),
('CON3', 14, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `marca`
--

DROP TABLE IF EXISTS `marca`;
CREATE TABLE IF NOT EXISTS `marca` (
  `id_marca` varchar(5) COLLATE utf8mb4_spanish_ci NOT NULL,
  `nombre` varchar(20) COLLATE utf8mb4_spanish_ci NOT NULL,
  `ciudad` varchar(20) COLLATE utf8mb4_spanish_ci NOT NULL,
  PRIMARY KEY (`id_marca`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `marca`
--

INSERT INTO `marca` (`id_marca`, `nombre`, `ciudad`) VALUES
('MC1', 'Seat', 'Madrid'),
('MC2', 'Renault', 'Barcelona'),
('MC3', 'Citroen', 'Valencia'),
('MC4', 'Audi', 'Madrid'),
('MC5', 'Opel', 'Bilbao'),
('MC6', 'BMV', 'Barcelona'),
('MC9', 'Mercedes', 'Barcelona');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ventas`
--

DROP TABLE IF EXISTS `ventas`;
CREATE TABLE IF NOT EXISTS `ventas` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `concesionario` varchar(5) COLLATE utf8mb4_spanish_ci NOT NULL,
  `cliente` int(5) NOT NULL,
  `coche` int(5) NOT NULL,
  `color` varchar(20) COLLATE utf8mb4_spanish_ci NOT NULL,
  `fecha` date NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_clien` (`cliente`),
  KEY `fk_coche` (`coche`),
  KEY `fk_con` (`concesionario`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `ventas`
--

INSERT INTO `ventas` (`id`, `concesionario`, `cliente`, `coche`, `color`, `fecha`) VALUES
(17, 'CON1', 11, 1, 'verde', '2022-04-28'),
(18, 'CON1', 11, 1, 'verde', '2022-04-28'),
(19, 'CON1', 10, 1, 'azul', '2022-04-28'),
(20, 'CON1', 16, 15, 'rosa', '2022-04-28'),
(21, 'CON1', 9, 1, 'azul', '2022-04-29'),
(22, 'CON3', 9, 1, 'vino', '2022-04-30');

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `coches`
--
ALTER TABLE `coches`
  ADD CONSTRAINT `coches_ibfk_1` FOREIGN KEY (`marca`) REFERENCES `marca` (`id_marca`);

--
-- Filtros para la tabla `distribucion`
--
ALTER TABLE `distribucion`
  ADD CONSTRAINT `distrib_venta` FOREIGN KEY (`coche`) REFERENCES `coches` (`cod`),
  ADD CONSTRAINT `distribucion_ibfk_1` FOREIGN KEY (`concesionario`) REFERENCES `concesionario` (`id_conc`);

--
-- Filtros para la tabla `ventas`
--
ALTER TABLE `ventas`
  ADD CONSTRAINT `fk_con` FOREIGN KEY (`concesionario`) REFERENCES `concesionario` (`id_conc`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
