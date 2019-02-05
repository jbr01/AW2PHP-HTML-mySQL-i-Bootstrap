-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 22-01-2019 a las 19:12:27
-- Versión del servidor: 10.1.37-MariaDB
-- Versión de PHP: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `futbol`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `equips`
--

CREATE TABLE `equips` (
  `codi` int(10) NOT NULL,
  `nom` varchar(30) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `localitat` varchar(30) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `web` varchar(100) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `escut` varchar(100) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `equips`
--

INSERT INTO `equips` (`codi`, `nom`, `localitat`, `web`, `escut`) VALUES
(1, 'FC Barcelona', 'Barcelona', 'https://www.fcbarcelona.cat/', 'img/fcbescut.PNG'),
(2, 'Athletic Club', 'Bilbao', 'https://www.athletic-club.eus/', 'img/atcescut.PNG'),
(3, 'Real Betis Balompie', 'Sevilla', 'https://www.realbetisbalompie.es/', 'img/betisescut.PNG'),
(4, 'Valencia Club de Futbol', 'Valencia', 'http://www.valenciacf.com/', 'img/valenciaescut.PNG'),
(5, 'Real Club Celta de Vigo', 'Vigo (Pontevedra)', 'www.rccelta.es/', 'img/cvescut.PNG'),
(6, 'Club Atletico de Madrid', 'Madrid', 'http://www.atleticodemadrid.com/', 'img/atmescut.PNG'),
(7, 'Real Club Deportiu Espanyol ', 'Cornella de Llobregat ', 'https://www.rcdespanyol.com/', 'img/espescut.PNG'),
(8, 'Real Sociedad de Futbol', 'San Sebastian (Guipuzcoa)', 'https://www.realsociedad.eus/', 'img/rsescut.PNG'),
(9, 'Sevilla Futbol Club', 'Sevilla', 'https://www.sevillafc.es/', 'img/sevescut.PNG'),
(10, '	Real Zaragoza', 'Zaragoza', 'https://www.realzaragoza.com/', 'img/zaragozaescut.PNG');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `titols`
--

CREATE TABLE `titols` (
  `codi` int(10) NOT NULL,
  `nom` varchar(30) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `codiequip` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Volcado de datos para la tabla `titols`
--

INSERT INTO `titols` (`codi`, `nom`, `codiequip`) VALUES
(1, '25 Ligas 30 Copas del Rey', 1),
(2, '8 Ligas 23 Copas del Rey', 2),
(3, '1 Ligas 2 Copas del Rey', 3),
(4, '6 Ligas 7 Copas del Rey', 4),
(5, '2 Ligas 2a división', 5),
(6, '10 Ligas 10 Copas del Rey', 6),
(7, '1 Liga 2a div 4 Copas del Rey', 7),
(8, '2 Ligas 2 Copas del Rey', 8),
(9, '1 Liga 5 Copas del Rey', 9),
(10, '1 Liga 2a div 5 Copas del Rey', 10);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `equips`
--
ALTER TABLE `equips`
  ADD PRIMARY KEY (`codi`);

--
-- Indices de la tabla `titols`
--
ALTER TABLE `titols`
  ADD PRIMARY KEY (`codi`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `titols`
--
ALTER TABLE `titols`
  MODIFY `codi` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
