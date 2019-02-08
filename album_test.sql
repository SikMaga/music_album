-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 08-02-2019 a las 09:27:25
-- Versión del servidor: 10.1.32-MariaDB
-- Versión de PHP: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `album_test`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_reg_album`
--

CREATE TABLE `tb_reg_album` (
  `id` int(11) NOT NULL,
  `TituloAlbum` varchar(200) NOT NULL,
  `FechaPublicacion` date NOT NULL,
  `Activo` text NOT NULL,
  `Banda` varchar(200) NOT NULL,
  `NumeroDePistas` int(10) NOT NULL,
  `FechaYHoraDeRegistro` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `ContenidoAdicional` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tb_reg_album`
--

INSERT INTO `tb_reg_album` (`id`, `TituloAlbum`, `FechaPublicacion`, `Activo`, `Banda`, `NumeroDePistas`, `FechaYHoraDeRegistro`, `ContenidoAdicional`) VALUES
(1, 'Dark Side of The Moon', '0000-00-00', 'si', 'Pink Floyd', 15, '2019-02-08 01:28:36', 1),
(2, 'The Rise and Fall', '0000-00-00', 'no', 'David Bowie', 10, '2019-02-08 01:29:28', 0),
(3, 'Exile on Main', '0000-00-00', 'si', 'The Rolling Stones', 14, '2019-02-08 01:30:23', 1),
(4, 'Abbey Road', '0000-00-00', 'no', 'The Beatles', 8, '2019-02-08 01:31:28', 0),
(5, 'Paranoid', '0000-00-00', 'si', 'Black Sabbath', 13, '2019-02-08 04:26:51', 1),
(6, 'Elvis Presley', '0000-00-00', 'no', 'Elvis Presley', 6, '2019-02-08 04:34:58', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tb_reg_album`
--
ALTER TABLE `tb_reg_album`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tb_reg_album`
--
ALTER TABLE `tb_reg_album`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
