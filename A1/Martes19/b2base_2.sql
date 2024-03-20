-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 20-03-2024 a las 03:15:20
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `b2base_2`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_clientes`
--

CREATE TABLE `tbl_clientes` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellido` varchar(50) NOT NULL,
  `direccion` varchar(100) NOT NULL,
  `telefono` varchar(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `tbl_clientes`
--

INSERT INTO `tbl_clientes` (`id`, `nombre`, `apellido`, `direccion`, `telefono`) VALUES
(1, 'maria', 'hernandez', 'Por algun lado', '12345678'),
(2, 'pepito', 'perez', 'En su casa', '5464564'),
(3, 'jose', 'fernandez', 'En algun lugar', '879546');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_rentas`
--

CREATE TABLE `tbl_rentas` (
  `id` int(11) NOT NULL,
  `fk_cliente` int(11) NOT NULL,
  `fk_vehiculo` int(11) NOT NULL,
  `fecha_ini` datetime NOT NULL,
  `fecha_fin` datetime NOT NULL,
  `precio` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `tbl_rentas`
--

INSERT INTO `tbl_rentas` (`id`, `fk_cliente`, `fk_vehiculo`, `fecha_ini`, `fecha_fin`, `precio`) VALUES
(1, 1, 3, '2024-03-25 10:15:32', '2024-03-31 10:15:32', 300),
(2, 1, 3, '2024-03-24 10:16:51', '2024-03-31 10:16:51', 300);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_vehiculos`
--

CREATE TABLE `tbl_vehiculos` (
  `id` int(11) NOT NULL,
  `modelo` varchar(50) NOT NULL,
  `placa` varchar(7) NOT NULL,
  `marca` varchar(50) NOT NULL,
  `descripcion` varchar(200) DEFAULT 'Pendiente descripcion'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `tbl_vehiculos`
--

INSERT INTO `tbl_vehiculos` (`id`, `modelo`, `placa`, `marca`, `descripcion`) VALUES
(1, 'Frontier', 'P123456', 'Nissan', 'Con 11k kilometros recorridos'),
(2, 'Vocho', 'P456789', 'Volkwasgen', 'Pendiente descripcion'),
(3, 'La Ferrari', 'P87235', 'Ferrario', 'Para clientes exclusivos');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tbl_clientes`
--
ALTER TABLE `tbl_clientes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tbl_rentas`
--
ALTER TABLE `tbl_rentas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_cliente` (`fk_cliente`),
  ADD KEY `fk_vehiculo` (`fk_vehiculo`);

--
-- Indices de la tabla `tbl_vehiculos`
--
ALTER TABLE `tbl_vehiculos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tbl_clientes`
--
ALTER TABLE `tbl_clientes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `tbl_rentas`
--
ALTER TABLE `tbl_rentas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `tbl_vehiculos`
--
ALTER TABLE `tbl_vehiculos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `tbl_rentas`
--
ALTER TABLE `tbl_rentas`
  ADD CONSTRAINT `tblrentas_tblclientes` FOREIGN KEY (`fk_cliente`) REFERENCES `tbl_clientes` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tblrentas_tblvehiculos` FOREIGN KEY (`fk_vehiculo`) REFERENCES `tbl_vehiculos` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
