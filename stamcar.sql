-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 17-04-2021 a las 01:58:34
-- Versión del servidor: 10.4.13-MariaDB
-- Versión de PHP: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `stamcar`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mercaderia`
--

CREATE TABLE `mercaderia` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) COLLATE utf8_bin NOT NULL,
  `precio` varchar(100) COLLATE utf8_bin NOT NULL,
  `tipo` varchar(100) COLLATE utf8_bin NOT NULL,
  `descripcion` varchar(255) COLLATE utf8_bin NOT NULL,
  `imagen` varchar(500) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `mercaderia`
--

INSERT INTO `mercaderia` (`id`, `nombre`, `precio`, `tipo`, `descripcion`, `imagen`) VALUES
(1, 'PantalonUno', '999', 'Pantalon', 'Descripcion', ''),
(2, 'PantalonDos', '200', 'Pantalon', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. In non sagittis nibh. Duis sit amet porttitor mi. Cras id varius nunc. Cras porta ante lectus, hendrerit euismod neque luctus sit amet. Quisque nec lorem in dolor commodo interdum scelerisque vel ni', ''),
(3, 'ShortUno', '100', 'Short', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. In non sagittis nibh. Duis sit amet porttitor mi. Cras id varius nunc. Cras porta ante lectus, hendrerit euismod neque luctus sit amet. Quisque nec lorem in dolor commodo interdum scelerisque vel ni', ''),
(4, 'CamperaUno', '100', 'Campera', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. In non sagittis nibh. Duis sit amet porttitor mi. Cras id varius nunc. Cras porta ante lectus, hendrerit euismod neque luctus sit amet. Quisque nec lorem in dolor commodo interdum scelerisque vel ni', ''),
(6, 'CamperaDos', '2147483647', 'Campera', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. In non sagittis nibh. Duis sit amet porttitor mi. Cras id varius nunc. Cras porta ante lectus, hendrerit euismod neque luctus sit amet. Quisque nec lorem in dolor commodo interdum scelerisque vel ni', ''),
(8, 'CamperaTres', '45646', 'Campera', '9999999', ''),
(9, 'PantalonDiez', '2222', 'Pantalon', 'Descripción no disponible', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) COLLATE utf8_bin NOT NULL,
  `email` varchar(100) COLLATE utf8_bin NOT NULL,
  `telefono` int(50) NOT NULL,
  `contraseña` varchar(255) COLLATE utf8_bin NOT NULL,
  `admin` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `email`, `telefono`, `contraseña`, `admin`) VALUES
(2, 'admin', 'admin@gmail.com', 0, '$2y$10$opdnYE8wVgVWLm8XEzeXpOlFo7AtGT/E1z7YSRd3z0LIt1WpIq7G2', 1),
(3, 'carlos', 'luna@gmail.com', 4345464, '$2y$10$MHLcAzII1.PGAR85cFu1l.XrCWQkLOUPG8w0ZEYp4q23BxoQhYQGW', NULL),
(4, 'tomi', 'tomi@gmail.com', 0, '$2y$10$c1IqNfsPv1/Dvkzls66WQeBvdofhq7xlpumWIU1/W137WfMNKpMbm', NULL),
(5, 'judas', 'judass@gmail.com', 123456789, '$2y$10$Qat.3RUNDgynuPo/fCOJNeBdCxlaWV5TAONIohn4PqpQZ0l0ykLRe', NULL),
(6, 'probando', 'probando@gmail.com', 111111, '$2y$10$GOH37QnsUlPtzXASnL8j5OKyIstZAnOXbo9uJSSlnMBBqTlusfX72', NULL);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `mercaderia`
--
ALTER TABLE `mercaderia`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `mercaderia`
--
ALTER TABLE `mercaderia`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
