-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 11-12-2023 a las 23:39:41
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `integrador_cac`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `oradores`
--

CREATE TABLE `oradores` (
  `id_orador` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellido` varchar(50) NOT NULL,
  `mail` varchar(100) NOT NULL,
  `tema` varchar(255) NOT NULL,
  `imagen` varchar(255) NOT NULL,
  `aprobado` tinyint(1) DEFAULT 0,
  `fecha_alta` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `oradores`
--

INSERT INTO `oradores` (`id_orador`, `nombre`, `apellido`, `mail`, `tema`, `imagen`, `aprobado`, `fecha_alta`) VALUES
(1, 'Steve', 'Jobs', 'sJobs@gmail.com', 'Javascript - React', '1702007333_steve.png', 0, '2023-11-09 02:45:22'),
(2, 'Bill', 'Gates', 'bGates@gmail.com', 'Javascript - React', '1702007340_bill.png', 0, '2023-11-09 02:45:29'),
(3, 'Ada', 'Lovelace', 'aLovelace@gmail.com', 'Negocios y Startups', '1702007346_ada.png', 0, '2023-11-09 02:45:37'),
(4, 'Jeff', 'Bezos', 'jBezos@gmail.com', 'Marketing y comercio digital', '1702027204_jeffbezos.png', 1, '2023-11-09 02:45:44'),
(5, 'Elon', 'Musk', 'eMusk@gmail.com', 'Inteligencia Artificial', '1702027342_ElonMusk.png', 1, '2023-11-09 02:45:50'),
(6, 'Mark', 'Zuckerberg', 'mZuckerberg@gmail.com', 'Redes sociales y Realidad virtual', '1702027429_Mark.png', 1, '2023-11-09 02:45:57'),
(7, 'Juan ', 'Sebastián', 'rGutierrez@gmail.com', 'Historia del rock nacional', '1702175254_juanse.png', 0, '2023-11-09 02:46:03'),
(8, 'Norberto', 'Napolitano', 'nNapolitano@gmail.com', 'Modos musicales y escalas', '1702184186_pappo.png', 1, '2023-11-09 02:46:10'),
(9, 'Ricardo', 'Mollo', 'rMollo@gmail.com', 'Improvisación musical', '1702174922_mollo.png', 1, '2023-11-09 02:48:14'),
(10, 'Gustavo', 'Cerati', 'gCerati@gmail.com', 'Composición y armonización', '1702174196_Cerati.jpg', 1, '2023-11-09 02:48:20');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `clave` varchar(25) NOT NULL,
  `admin` tinyint(1) NOT NULL DEFAULT 0,
  `fecha_creacion` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `nombre`, `clave`, `admin`, `fecha_creacion`) VALUES
(1, 'admin', '123', 1, '2023-11-24 04:25:59'),
(33, 'invitado', '1', 0, '2023-12-10 00:05:43');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `oradores`
--
ALTER TABLE `oradores`
  ADD PRIMARY KEY (`id_orador`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `oradores`
--
ALTER TABLE `oradores`
  MODIFY `id_orador` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
