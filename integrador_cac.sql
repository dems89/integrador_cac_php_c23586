-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 09-11-2023 a las 06:54:07
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
  `fecha_alta` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `oradores`
--

INSERT INTO `oradores` (`id_orador`, `nombre`, `apellido`, `mail`, `tema`, `fecha_alta`) VALUES
(1, 'Carlos', 'Garcia', 'ggarcia@gmail.com', 'Javascript', '2023-11-09 02:45:22'),
(2, 'Rodolfo', 'Paez', 'rPaez@gmail.com', 'CSS', '2023-11-09 02:45:29'),
(3, 'León', 'Gieco', 'rGieco@gmail.com', 'PHP', '2023-11-09 02:45:37'),
(4, 'Andres', 'Martinez', 'aMartinez@gmail.com', 'React', '2023-11-09 02:45:44'),
(5, 'Andrea', 'Alvarez', 'aAlvarez@gmail.com', 'Javascript', '2023-11-09 02:45:50'),
(6, 'Pepito', 'Gomez', 'pGomez@gmail.com', 'Javascript', '2023-11-09 02:45:57'),
(7, 'Rafael', 'Gonzales', 'rGonzales@gmail.com', 'HTML', '2023-11-09 02:46:03'),
(8, 'Luis', 'Spinetta', 'lMiguel@gmail.com', 'Java', '2023-11-09 02:46:10'),
(9, 'Ricardo', 'Mollo', 'rMollo@gmail.com', 'NodeJs', '2023-11-09 02:48:14'),
(10, 'Gustavo', 'Cerati', 'gCerati@gmail.com', 'C#', '2023-11-09 02:48:20');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `oradores`
--
ALTER TABLE `oradores`
  ADD PRIMARY KEY (`id_orador`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `oradores`
--
ALTER TABLE `oradores`
  MODIFY `id_orador` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
