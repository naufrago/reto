-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 25-06-2017 a las 18:19:02
-- Versión del servidor: 5.6.26
-- Versión de PHP: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `securitychall`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ganadores`
--

CREATE TABLE IF NOT EXISTS `ganadores` (
  `id_ganador` int(11) NOT NULL,
  `id_usuario` int(11) DEFAULT NULL,
  `usuario_g` varchar(20) DEFAULT NULL,
  `time_stamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `ganadores`
--



-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `locked`
--

CREATE TABLE IF NOT EXISTS `locked` (
  `id_locked` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `url` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `niveles`
--

CREATE TABLE IF NOT EXISTS `niveles` (
  `id_nivel` int(11) NOT NULL,
  `nombre_nivel` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `niveles`
--

INSERT INTO `niveles` (`id_nivel`, `nombre_nivel`, `url`) VALUES
(1, 'Nivel 1', 'indexreto.php'),
(2, 'Nivel 1.1', 'sqli.php'),
(3, 'Nivel 1.2', 'cripto.php'),
(4, 'Nivel 1.3', 'xssdatatest.php'),
(5, 'Nivel 2', 'nivel2.php'),
(6, 'Nivel 2.1', 'nivel_2_1.php'),
(7, 'Nivel 2.2', 'nivel_2_2.php'),
(8, 'Nivel 3', 'trojan.php'),
(9, 'Nivel 3.1', 'movies.php'),
(10, 'Nivel 3.2', 'deep.php'),
(11, 'Nivel 3.3', 'fosa.php'),
(12, 'Nivel 3.4', 'tool.php'),
(13, 'Nivel 4', 'ciclo.php'),
(14, 'Nivel 5', 'pintoresco.php'),
(15, 'Nivel 6', 'joker.php'),
(16, 'Ganadores', 'winner.php');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `niveles_completos`
--

CREATE TABLE IF NOT EXISTS `niveles_completos` (
  `id_usuario` int(11) DEFAULT NULL,
  `id_nivel` int(11) DEFAULT NULL,
  `time_stamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `niveles_completos`
--


--
-- Estructura de tabla para la tabla `nivel_keys`
--

CREATE TABLE IF NOT EXISTS `nivel_keys` (
  `id_key` int(11) NOT NULL,
  `nombre_key` varchar(255) NOT NULL,
  `ubicacion` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `nivel_keys`
--

INSERT INTO `nivel_keys` (`id_key`, `nombre_key`, `ubicacion`) VALUES
(1, 'hexadecimal', 'Nivel 1 : indexreto.php '),
(2, '1''or1=''1', 'Nivel 1.1 : sqli.php'),
(3, 'plotkey1.2', 'Nivel 1 : indexreto.php'),
(4, 'full-xss-test', 'Nivel 1.3 : xssdatatest.php'),
(5, 'puertos', 'Nivel 2 : nivel2.php'),
(6, '1243', 'Nivel 1.2 : cripto.php'),
(7, 'nmap', 'Nivel 3.1 : movies.php'),
(8, '6_niveles', 'Nivel 3.2 : deep.php'),
(9, 'Marianas Web', 'Nivel 3.3 : fosa.php'),
(10, 'ToR', 'game : game/index.php'),
(11, 'ciclo', 'Nivel 4 : ciclo.php'),
(12, 'copy /b', 'descargar imagen : winrar Nivel 5 : pintoresco.php'),
(13, 'keys', 'Nivel 6 : joker.php');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
  `id_usuario` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `apellido` varchar(255) NOT NULL,
  `user` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `tipo` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `nombre`, `apellido`, `user`, `password`, `tipo`) VALUES
(1, 'YEISON', 'AGUIRRE ', 'yaoelpaisa', '0d52aee775e32af56dea6c8c7837c543', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `ganadores`
--
ALTER TABLE `ganadores`
  ADD PRIMARY KEY (`id_ganador`),
  ADD KEY `id_usuario` (`id_usuario`);

--
-- Indices de la tabla `locked`
--
ALTER TABLE `locked`
  ADD PRIMARY KEY (`id_locked`),
  ADD KEY `id_usuario` (`id_usuario`);

--
-- Indices de la tabla `niveles`
--
ALTER TABLE `niveles`
  ADD PRIMARY KEY (`id_nivel`);

--
-- Indices de la tabla `niveles_completos`
--
ALTER TABLE `niveles_completos`
  ADD KEY `id_usuario` (`id_usuario`),
  ADD KEY `id_nivel` (`id_nivel`);

--
-- Indices de la tabla `nivel_keys`
--
ALTER TABLE `nivel_keys`
  ADD PRIMARY KEY (`id_key`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `ganadores`
--
ALTER TABLE `ganadores`
  MODIFY `id_ganador` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=1;
--
-- AUTO_INCREMENT de la tabla `locked`
--
ALTER TABLE `locked`
  MODIFY `id_locked` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `niveles`
--
ALTER TABLE `niveles`
  MODIFY `id_nivel` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT de la tabla `nivel_keys`
--
ALTER TABLE `nivel_keys`
  MODIFY `id_key` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `ganadores`
--
ALTER TABLE `ganadores`
  ADD CONSTRAINT `ganadores_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id_usuario`);

--
-- Filtros para la tabla `locked`
--
ALTER TABLE `locked`
  ADD CONSTRAINT `locked_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id_usuario`);

--
-- Filtros para la tabla `niveles_completos`
--
ALTER TABLE `niveles_completos`
  ADD CONSTRAINT `niveles_completos_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id_usuario`),
  ADD CONSTRAINT `niveles_completos_ibfk_2` FOREIGN KEY (`id_nivel`) REFERENCES `niveles` (`id_nivel`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
