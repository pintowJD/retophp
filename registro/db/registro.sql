-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 12-03-2019 a las 23:54:17
-- Versión del servidor: 10.1.37-MariaDB
-- Versión de PHP: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `registro`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(100) NOT NULL,
  `nombre` text NOT NULL,
  `apellido` text NOT NULL,
  `correo` text NOT NULL,
  `pasword` text NOT NULL,
  `numero_de_celular` int(50) NOT NULL,
  `numero_de_documento` int(50) NOT NULL,
  `acudiente` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `apellido`, `correo`, `pasword`, `numero_de_celular`, `numero_de_documento`, `acudiente`) VALUES
(4, 'john', 'pinto', 'we@gmail.com', 'df', 321, 123, 'milena'),
(5, 'carlos', 'fuene', 'wee@gmail.com', '123', 456, 654, 'jade'),
(6, '23', 'pinto', '23@gmail.com', '$2y$10$qZzY3/yhDvjmLaQDF5G8c.68ZnN3JoakuNKa/.Rd/3nR7WuHUXHma', 2324, 3434, '123'),
(7, 'prueba', 'apellidoP', 'P@gmail.com', '$2y$10$3Ez5ChG8MvqphiZHX08s2OO6i0YaK8/rDUGEW.7PJhsHHzUI6jsG.', 321, 321, 'milena'),
(8, 'we', 'pinto', 'wewewe@gmail.com', '$2y$10$0bbvZqKjqR/G11qCACYH5u.BsLsP.4Ta77AudcyTDivY1i5EfPfBq', 3234, 3434, 'milena');

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
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
