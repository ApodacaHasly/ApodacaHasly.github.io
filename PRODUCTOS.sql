-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 25-02-2023 a las 02:37:08
-- Versión del servidor: 10.1.39-MariaDB
-- Versión de PHP: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `Tienda_Online`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `PRODUCTOS`
--

CREATE TABLE `productos` (
  `id` int(11) NOT NULL,
  `nombre` varchar(200) NOT NULL,
  `precio` double NOT NULL,
  `descripcion` varchar(300) NOT NULL,
  `color` varchar(50) NOT NULL,
  `existencia` int(11) NOT NULL,
  `marca` varchar(30) NOT NULL,
  `medida` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `PRODUCTOS`
--

INSERT INTO `PRODUCTOS` (`id`, `nombre`, `precio`, `descripcion`, `color`, `existencia`, `marca`, `medida`) VALUES
(1, 'playera', 0, 'Camiseta con estampado de oso de dibujos animados y letra', 'rosa', 9, 'shein', 'mediana'),
(2, 'vestido', 0, 'Vestido con estampado floral de espalda abierta con nudo fruncido tirantes', 'floral', 19, 'shein', 'mediana'),
(3, 'blusa', 0, 'SHEIN VCAY Blusa con estampado de mariposa de espalda abierta con cordón de manga farol', 'azul', 10, 'shein', 'mediana'),
(4, 'short deportivo', 0, 'Shorts deportivos inconsútil de talle alto', 'negro', 4, 'shein', 'mediana'),
(5, 'conjunto', 476, 'Shorts con blusa con botón de hombros caídos', 'rosa', 25, 'shein', 'mediana'),
(6, 'pantalon', 516, 'SHEIN PETITE Jeans desgarro de pierna bootcut', 'mezclilla', 27, 'shein', 'mediano'),
(7, 'short', 369, 'Shorts en mezclilla bajo de doblez', 'azul mezclilla', 19, 'shein', 'mediano'),
(8, 'falda', 254, 'Niñas Falda fruncido unicolor', 'blanca', 13, 'shein', 'mediana'),
(10, 'bolsa', 89, 'Bolso con cadena con diseño de pañuelo con bordado floral', 'rosa', 4, 'shein', ''),
(11, 'bolsa', 82, 'Bolso bandolera con patrón geométrico', 'negro', 4, 'shein', '');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `PRODUCTOS`
--
ALTER TABLE `PRODUCTOS`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `PRODUCTOS`
--
ALTER TABLE `PRODUCTOS`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
