-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: mysql
-- Tiempo de generación: 24-03-2024 a las 14:37:48
-- Versión del servidor: 8.3.0
-- Versión de PHP: 8.2.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `Games4Fun`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `salas_damas`
--

CREATE TABLE `salas_damas` (
  `id_sala` int NOT NULL,
  `jugador_1` varchar(255) NOT NULL,
  `jugador_2` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `movimiento` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `salas_hundir_flota`
--

CREATE TABLE `salas_hundir_flota` (
  `id_sala` int NOT NULL,
  `jugador_1` varchar(255) NOT NULL,
  `jugador_2` varchar(255) DEFAULT NULL,
  `objetivo` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `salas_quien_es_quien`
--

CREATE TABLE `salas_quien_es_quien` (
  `id_sala` int NOT NULL,
  `jugador_1` varchar(255) NOT NULL,
  `jugador_2` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `mensaje_j1` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `mensaje_j2` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `salas_tres_en_raya`
--

CREATE TABLE `salas_tres_en_raya` (
  `id_sala` int NOT NULL,
  `jugador_1` varchar(255) NOT NULL,
  `jugador_2` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `eleccion` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `salas_damas`
--
ALTER TABLE `salas_damas`
  ADD PRIMARY KEY (`id_sala`);

--
-- Indices de la tabla `salas_hundir_flota`
--
ALTER TABLE `salas_hundir_flota`
  ADD PRIMARY KEY (`id_sala`);

--
-- Indices de la tabla `salas_quien_es_quien`
--
ALTER TABLE `salas_quien_es_quien`
  ADD PRIMARY KEY (`id_sala`);

--
-- Indices de la tabla `salas_tres_en_raya`
--
ALTER TABLE `salas_tres_en_raya`
  ADD PRIMARY KEY (`id_sala`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `salas_damas`
--
ALTER TABLE `salas_damas`
  MODIFY `id_sala` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `salas_hundir_flota`
--
ALTER TABLE `salas_hundir_flota`
  MODIFY `id_sala` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `salas_quien_es_quien`
--
ALTER TABLE `salas_quien_es_quien`
  MODIFY `id_sala` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `salas_tres_en_raya`
--
ALTER TABLE `salas_tres_en_raya`
  MODIFY `id_sala` int NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
