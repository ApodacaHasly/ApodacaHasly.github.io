-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 28-02-2023 a las 01:41:31
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
-- Base de datos: `tienda_online`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `correo` varchar(100) NOT NULL,
  `telefono` varchar(20) NOT NULL,
  `fecha_nacimiento` date NOT NULL,
  `sexo` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `correo`, `telefono`, `fecha_nacimiento`, `sexo`) VALUES
(1, 'Hasly', 'hasly.apodaca21@cetis107.edu.mx', '6951230161', '2023-02-12', 2),
(2, 'Kamila', 'Kamy122006@gmail.com', '6951230161', '2022-02-14', 2),
(3, 'Evelyn', 'evelyn.castro21@cetis107.edu.mx', '6677908843', '2023-02-13', 2),
(4, 'Melissa', 'Melicastro@gmail.com', '6677908843', '2023-02-13', 2),
(5, 'Daniela', 'daniela.rodriguez21@cetis107.edu.mx', '6951230161', '2014-02-11', 2),
(6, 'Lizzette', 'Dani@gmail.com', '6951230161', '2014-02-28', 2),
(7, 'German', 'German@gmail.com', '6951230161', '2013-02-14', 1),
(8, 'Kami', 'HaslyA@gmail.com', '6951230161', '2023-02-12', 2),
(9, 'Alicia', 'Alicia.02@gmail.com', '6951230161', '2020-02-17', 2),
(10, 'Darah', 'darah12@gmail.com', '6951230161', '2019-07-07', 2);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
