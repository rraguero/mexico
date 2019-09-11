-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 24-07-2019 a las 23:11:42
-- Versión del servidor: 10.1.36-MariaDB
-- Versión de PHP: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `db_mexico`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ci_sessions`
--

CREATE TABLE `ci_sessions` (
  `id` varchar(40) NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `timestamp` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `data` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_carta`
--

CREATE TABLE `tb_carta` (
  `idn` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `fecha` varchar(30) NOT NULL,
  `fk_cliente` int(11) NOT NULL,
  `fk_origen` int(11) NOT NULL,
  `fk_destino` int(11) NOT NULL,
  `servicio` int(1) NOT NULL,
  `fk_remolque` int(11) NOT NULL,
  `referencia` varchar(10) NOT NULL,
  `fk_tractor` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tb_carta`
--

INSERT INTO `tb_carta` (`idn`, `id`, `fecha`, `fk_cliente`, `fk_origen`, `fk_destino`, `servicio`, `fk_remolque`, `referencia`, `fk_tractor`) VALUES
(2, 66, '2019-07-24', 3, 1, 1, 1, 6, '32', '005-23'),
(3, 95, '2019-07-24', 3, 1, 1, 2, 6, '2', '005-23'),
(4, 96, '2019-07-24', 3, 1, 1, 1, 6, '5', '2345'),
(5, 966, '2019-07-24', 3, 1, 1, 3, 6, '963', '005-23'),
(8, 56546, '2019-07-24', 3, 1, 1, 1, 6, '65', '005-23');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_cliente`
--

CREATE TABLE `tb_cliente` (
  `id` int(11) NOT NULL,
  `nick` varchar(20) NOT NULL,
  `empresa` varchar(100) NOT NULL,
  `direccion` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tb_cliente`
--

INSERT INTO `tb_cliente` (`id`, `nick`, `empresa`, `direccion`) VALUES
(3, 'Mexitelsssss', 'Envios Mexico sssssss', 'Luz x MExico laredossssssss'),
(4, 'MExico tel', 'MExiocoss', 'mexico laredo tejas');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_destino`
--

CREATE TABLE `tb_destino` (
  `id` int(11) NOT NULL,
  `ciudad` varchar(100) NOT NULL,
  `bodega` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tb_destino`
--

INSERT INTO `tb_destino` (`id`, `ciudad`, `bodega`) VALUES
(1, 'Mexico', 'MExico Bodega');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_operador`
--

CREATE TABLE `tb_operador` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `apellidos` varchar(100) NOT NULL,
  `disponibilidad` varchar(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tb_operador`
--

INSERT INTO `tb_operador` (`id`, `nombre`, `apellidos`, `disponibilidad`) VALUES
(5, 'Fernando', 'Guilermo Areas', '0'),
(6, 'Rene', 'Hern Desz', '0');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_origen`
--

CREATE TABLE `tb_origen` (
  `id` int(11) NOT NULL,
  `ciudad` varchar(100) NOT NULL,
  `bodega` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tb_origen`
--

INSERT INTO `tb_origen` (`id`, `ciudad`, `bodega`) VALUES
(1, 'Tejas', 'Bodega');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_remolque`
--

CREATE TABLE `tb_remolque` (
  `id` int(11) NOT NULL,
  `no` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tb_remolque`
--

INSERT INTO `tb_remolque` (`id`, `no`) VALUES
(6, '123-12665');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_tractor`
--

CREATE TABLE `tb_tractor` (
  `id` varchar(50) NOT NULL,
  `fk_operador` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tb_tractor`
--

INSERT INTO `tb_tractor` (`id`, `fk_operador`) VALUES
('005-23', 5),
('2345', 6);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `ci_sessions`
--
ALTER TABLE `ci_sessions`
  ADD KEY `ci_sessions_timestamp` (`timestamp`);

--
-- Indices de la tabla `tb_carta`
--
ALTER TABLE `tb_carta`
  ADD PRIMARY KEY (`idn`),
  ADD KEY `fk_cliente` (`fk_cliente`),
  ADD KEY `fk_cliente_2` (`fk_cliente`),
  ADD KEY `fk_destino` (`fk_destino`),
  ADD KEY `fk_origen` (`fk_origen`),
  ADD KEY `fk_remolque` (`fk_remolque`),
  ADD KEY `fk_tractor` (`fk_tractor`),
  ADD KEY `fk_cliente_3` (`fk_cliente`);

--
-- Indices de la tabla `tb_cliente`
--
ALTER TABLE `tb_cliente`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tb_destino`
--
ALTER TABLE `tb_destino`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tb_operador`
--
ALTER TABLE `tb_operador`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tb_origen`
--
ALTER TABLE `tb_origen`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tb_remolque`
--
ALTER TABLE `tb_remolque`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tb_tractor`
--
ALTER TABLE `tb_tractor`
  ADD UNIQUE KEY `id` (`id`),
  ADD KEY `fk_operador` (`fk_operador`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tb_carta`
--
ALTER TABLE `tb_carta`
  MODIFY `idn` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `tb_cliente`
--
ALTER TABLE `tb_cliente`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `tb_destino`
--
ALTER TABLE `tb_destino`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `tb_operador`
--
ALTER TABLE `tb_operador`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `tb_origen`
--
ALTER TABLE `tb_origen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `tb_remolque`
--
ALTER TABLE `tb_remolque`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `tb_carta`
--
ALTER TABLE `tb_carta`
  ADD CONSTRAINT `tb_carta_ibfk_1` FOREIGN KEY (`fk_cliente`) REFERENCES `tb_cliente` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_carta_ibfk_2` FOREIGN KEY (`fk_destino`) REFERENCES `tb_destino` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_carta_ibfk_3` FOREIGN KEY (`fk_origen`) REFERENCES `tb_origen` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_carta_ibfk_5` FOREIGN KEY (`fk_remolque`) REFERENCES `tb_remolque` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_carta_ibfk_6` FOREIGN KEY (`fk_tractor`) REFERENCES `tb_tractor` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Filtros para la tabla `tb_tractor`
--
ALTER TABLE `tb_tractor`
  ADD CONSTRAINT `tb_tractor_ibfk_1` FOREIGN KEY (`fk_operador`) REFERENCES `tb_operador` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
