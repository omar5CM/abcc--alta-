-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 11-11-2022 a las 01:54:04
-- Versión del servidor: 10.4.25-MariaDB
-- Versión de PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `crud`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clase`
--

CREATE TABLE `clase` (
  `numero` int(2) NOT NULL,
  `nombre` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `clase`
--

INSERT INTO `clase` (`numero`, `nombre`) VALUES
(1, 'COMESTIBLES'),
(2, 'LICUADORAS'),
(3, 'BATIDORAS'),
(4, 'CAFETERAS'),
(1, 'AMPLIFICADORES CAR AUDIO'),
(2, 'AUTO STEREOS'),
(1, 'COLCHON'),
(2, 'JUEGO BOX'),
(1, 'SALAS'),
(2, 'COMPLEMENTO PARA SALA'),
(3, 'SOFA CAMA');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `dato`
--

CREATE TABLE `dato` (
  `sku` int(6) DEFAULT NULL,
  `articulo` int(15) DEFAULT NULL,
  `marca` varchar(15) NOT NULL,
  `modelo` varchar(20) NOT NULL,
  `departamento` int(1) NOT NULL,
  `clase` int(2) NOT NULL,
  `familia` int(3) NOT NULL,
  `fechaA` time DEFAULT NULL,
  `stock` int(9) DEFAULT NULL,
  `cantidad` int(9) NOT NULL,
  `descontinuado` int(11) NOT NULL,
  `fechaB` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `dato`
--

INSERT INTO `dato` (`sku`, `articulo`, `marca`, `modelo`, `departamento`, `clase`, `familia`, `fechaA`, `stock`, `cantidad`, `descontinuado`, `fechaB`) VALUES
(45, NULL, '', '', 0, 0, 0, NULL, NULL, 0, 0, NULL),
(4, NULL, '', '', 0, 0, 0, NULL, NULL, 0, 0, NULL),
(45, NULL, '', '', 0, 0, 0, NULL, NULL, 0, 0, NULL),
(2, NULL, '', '', 0, 0, 0, NULL, NULL, 0, 0, NULL),
(4567, NULL, '', '', 0, 0, 0, NULL, NULL, 0, 0, NULL),
(68, NULL, '', '', 0, 0, 0, NULL, NULL, 0, 0, NULL),
(65765765, NULL, '', '', 0, 0, 0, NULL, NULL, 0, 0, NULL),
(65765765, NULL, '', '', 0, 0, 0, NULL, NULL, 0, 0, NULL),
(65765765, NULL, '', '', 0, 0, 0, NULL, NULL, 0, 0, NULL),
(78, NULL, '', '', 0, 0, 0, NULL, NULL, 0, 0, NULL),
(78, NULL, '', '', 0, 0, 0, NULL, NULL, 0, 0, NULL),
(35, NULL, '', '', 0, 0, 0, NULL, NULL, 0, 0, NULL),
(3232, NULL, '', '', 0, 0, 0, NULL, NULL, 0, 0, NULL),
(12312, NULL, '', '', 0, 0, 0, NULL, NULL, 0, 0, NULL),
(444444, NULL, '', '', 0, 0, 0, NULL, NULL, 0, 0, NULL),
(232312, NULL, '', '', 0, 0, 0, NULL, NULL, 0, 0, NULL),
(2147483647, NULL, '', '', 0, 0, 0, NULL, NULL, 0, 0, NULL),
(34343, NULL, '', '', 0, 0, 0, NULL, NULL, 0, 0, NULL),
(23, NULL, '', '', 0, 0, 0, NULL, NULL, 0, 0, NULL),
(456456465, NULL, '', '', 0, 0, 0, NULL, NULL, 0, 0, NULL),
(3543, NULL, '', '', 0, 0, 0, NULL, NULL, 0, 0, NULL),
(5765, NULL, '', '', 0, 0, 0, NULL, NULL, 0, 0, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `departamento`
--

CREATE TABLE `departamento` (
  `numero` int(1) DEFAULT NULL,
  `nombre` varchar(35) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `departamento`
--

INSERT INTO `departamento` (`numero`, `nombre`) VALUES
(1, 'DOMESTICOS'),
(2, 'ELECTRONICA'),
(3, 'MUEBLE SUELTO'),
(4, 'SALAS, RECAMARAS, COMEDORES');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `familia`
--

CREATE TABLE `familia` (
  `numero` int(3) NOT NULL,
  `nombre` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `familia`
--

INSERT INTO `familia` (`numero`, `nombre`) VALUES
(0, 'SIN NOMBRE'),
(1, 'LICUADORAS'),
(2, 'EXC COPPEL'),
(1, 'BATIDORA MANUAL'),
(2, 'PROCESADOR'),
(3, 'PICADORA'),
(4, 'BATIDORA PEDESTAL'),
(5, 'BATIDORA FUENTE'),
(6, 'MULTIPRACTICOS'),
(7, 'EXCLUSIVOS COPPEL'),
(1, 'CAFETERAS'),
(2, 'PERCOLADORAS'),
(1, 'AMPLIFICADOR/RECEPTOR'),
(2, 'KIT DE INSTALACION'),
(3, 'AMPLIFICADORES COPPEL'),
(1, 'AUTOESTEREO CD'),
(2, 'ACCESORIOS CAR AUDIO'),
(3, 'AMPLIFICADOR'),
(4, 'ALARMA');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
