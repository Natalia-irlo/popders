-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 01-02-2023 a las 15:24:40
-- Versión del servidor: 10.4.27-MariaDB
-- Versión de PHP: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `popders`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `coders`
--

CREATE TABLE `coders` (
  `Id_` int(11) NOT NULL,
  `Name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `song`
--

CREATE TABLE `song` (
  `Id_` int(11) NOT NULL,
  `Title` varchar(100) NOT NULL,
  `Artist` varchar(100) NOT NULL,
  `Genre` varchar(100) NOT NULL,
  `URL` varchar(200) NOT NULL,
  `Date` date NOT NULL,
  `Status` tinyint(1) NOT NULL,
  `Img` longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `coders`
--
ALTER TABLE `coders`
  ADD PRIMARY KEY (`Id_`);

--
-- Indices de la tabla `song`
--
ALTER TABLE `song`
  ADD PRIMARY KEY (`Id_`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `coders`
--
ALTER TABLE `coders`
  MODIFY `Id_` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `song`
--
ALTER TABLE `song`
  MODIFY `Id_` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `coders`
--
ALTER TABLE `coders`
  ADD CONSTRAINT `selectcoder_fk` FOREIGN KEY (`Id_`) REFERENCES `song` (`Id_`);

--
-- Filtros para la tabla `song`
--
ALTER TABLE `song`
  ADD CONSTRAINT `selectsong_fk` FOREIGN KEY (`Id_`) REFERENCES `coders` (`Id_`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
