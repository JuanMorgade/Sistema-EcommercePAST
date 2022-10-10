-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 10-10-2022 a las 02:33:53
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
-- Base de datos: `sistema_ecommerse`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedido`
--

CREATE TABLE `pedido` (
  `codped` int(11) NOT NULL,
  `codusu` int(11) NOT NULL,
  `codpro` int(11) NOT NULL,
  `fecped` datetime NOT NULL,
  `estado` int(11) NOT NULL,
  `telusuped` varchar(12) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `pedido`
--

INSERT INTO `pedido` (`codped`, `codusu`, `codpro`, `fecped`, `estado`, `telusuped`) VALUES
(55, 7, 3, '2022-09-16 17:26:11', 3, '1700071'),
(56, 7, 1, '2022-09-16 17:27:19', 3, '11 35152345'),
(57, 7, 2, '2022-09-16 17:28:54', 2, '1135152345'),
(59, 7, 3, '2022-10-05 16:51:10', 3, '1135153245'),
(72, 7, 5, '2022-10-06 18:43:19', 2, '11343423'),
(73, 7, 4, '2022-10-07 15:11:48', 2, '11343423'),
(78, 1, 4, '2022-10-07 15:33:33', 3, ''),
(85, 1, 4, '2022-10-07 18:06:04', 3, '31117177'),
(86, 1, 4, '2022-10-07 18:12:50', 3, '31117177'),
(87, 1, 4, '2022-10-08 15:33:54', 3, '31117177'),
(95, 1, 3, '2022-10-08 16:11:18', 3, '31117177'),
(96, 1, 6, '2022-10-08 16:11:29', 3, '31117177'),
(97, 1, 4, '2022-10-08 16:23:09', 1, ''),
(98, 1, 2, '2022-10-08 16:26:02', 1, ''),
(99, 10, 4, '2022-10-09 21:00:16', 1, '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `codpro` int(11) NOT NULL,
  `nompro` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `despro` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL,
  `prepro` decimal(6,2) DEFAULT NULL,
  `estado` int(11) DEFAULT NULL,
  `rutimapro` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`codpro`, `nompro`, `despro`, `prepro`, `estado`, `rutimapro`) VALUES
(1, 'Macarons', 'Ideal para hornear en cualquier Cocina', '3500.00', 1, NULL),
(2, 'Cakes', 'Ideal para principiantes!', '5300.00', 1, NULL),
(3, 'Alfajores', 'Mas ricos que los Jorgitos', '2750.00', 1, NULL),
(4, 'Prueba1', 'Curso de Prueba para probar la Pag', '100.00', 1, NULL),
(5, 'Prueba2', 'Curso de Prueba para probar la Pag', '279.00', 1, NULL),
(6, 'Prueba3', 'Curso de Prueba para probar la Pag', '345.00', 1, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `codusu` int(11) NOT NULL,
  `nomusu` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `apeusu` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `emausu` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `pasusu` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `estado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`codusu`, `nomusu`, `apeusu`, `emausu`, `pasusu`, `estado`) VALUES
(1, 'Usuario', 'Demo', 'correo@example.com', '12345', 1),
(2, 'Juan', 'Morgade', 'jp.mor@gmail.com', '112266', 1),
(3, 'Pepe', 'Pepon', 'pepe@gmail.com', '123456', 1),
(4, 'Prueba', '001', 'prueba@gmail.com', '123123', 1),
(5, 'Juan Pablo', 'Morgade', 'jp.morgade@gmail.com.ar', '123456789', 1),
(6, 'sdsds', 'sdsds', 'test@gmail.com', '123123', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `pedido`
--
ALTER TABLE `pedido`
  ADD PRIMARY KEY (`codped`);

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`codpro`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`codusu`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `pedido`
--
ALTER TABLE `pedido`
  MODIFY `codped` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100;

--
-- AUTO_INCREMENT de la tabla `producto`
--
ALTER TABLE `producto`
  MODIFY `codpro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `codusu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
