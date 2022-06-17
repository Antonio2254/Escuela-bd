-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 16-06-2022 a las 08:53:15
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `escuela`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumnos`
--

CREATE TABLE `alumnos` (
  `id` int(11) DEFAULT NULL,
  `nombre` varchar(30) DEFAULT NULL,
  `apellidos` varchar(30) DEFAULT NULL,
  `telefono` int(11) DEFAULT NULL,
  `correo` varchar(30) DEFAULT NULL,
  `Licenciatura` varchar(30) DEFAULT NULL,
  `cuatrimestre` varchar(30) DEFAULT NULL,
  `Estatus` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `alumnos`
--

INSERT INTO `alumnos` (`id`, `nombre`, `apellidos`, `telefono`, `correo`, `Licenciatura`, `cuatrimestre`, `Estatus`) VALUES
(2, 'Delfin Gus', 'Montes de Oca', 2147483647, 'lunaacosta@gmail.com', 'ingenieria civil', 'segundo', 1),
(4, 'Antonio de jesus', 'Acosta Luna', 2147483647, 'lunaacosta@gmail.com', 'sistemas', 'segundo', 1),
(6, 'Norma Love', 'Pech Luna', 2147483647, 'normapech@gmail.com', 'Marketing', 'primero', 1),
(8, 'Jose Gutierrez', 'Perez Lopez', 2147483647, 'josegutierrez@gmail.com', 'pedagogia', 'Primero', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `materias`
--

CREATE TABLE `materias` (
  `id` int(11) DEFAULT NULL,
  `nombre` varchar(30) DEFAULT NULL,
  `Licenciatura` varchar(30) DEFAULT NULL,
  `cuatrimestre` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `materias`
--

INSERT INTO `materias` (`id`, `nombre`, `Licenciatura`, `cuatrimestre`) VALUES
(2254, 'Autocad', 'segundo', 'ingenieria civil'),
(2255, 'Pensamiento logico', 'primero', 'pedagogia'),
(2257, 'ventas', 'primero', 'marketing'),
(2259, 'Servicios integrados', 'segundo', 'sistemas');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `profesores`
--

CREATE TABLE `profesores` (
  `id` int(11) DEFAULT NULL,
  `nombre` varchar(30) DEFAULT NULL,
  `apellidos` varchar(30) DEFAULT NULL,
  `telefono` int(11) DEFAULT NULL,
  `Correo` varchar(30) DEFAULT NULL,
  `estatus` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `profesores`
--

INSERT INTO `profesores` (`id`, `nombre`, `apellidos`, `telefono`, `Correo`, `estatus`) VALUES
(12, 'laura mengana', 'sapor tome', 8320345, 'laurasapor@gmail.com', 1),
(14, 'Fabian Toby', 'Cortez de la O', 832676345, 'Fabiancortez@gmail.com', 1),
(16, 'abraham miguel', 'pech moguel', 2147483647, 'abrahampech@gmail.com', 1),
(18, 'luis miguel', 'rosas falconi', 2147483647, 'rosasfalconi@gmail.com', 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
