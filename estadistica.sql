-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 02-10-2017 a las 22:46:36
-- Versión del servidor: 10.1.13-MariaDB
-- Versión de PHP: 7.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `estadistica`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `encuesta`
--

CREATE TABLE `encuesta` (
  `id_encuesta` int(11) NOT NULL,
  `edad` int(2) NOT NULL,
  `peso` double NOT NULL,
  `estatura` double NOT NULL,
  `comidas` int(1) DEFAULT NULL,
  `snack` int(2) NOT NULL,
  `alimento` varchar(50) NOT NULL,
  `sueno` time NOT NULL,
  `h_sueno` time NOT NULL,
  `deporte` int(11) NOT NULL,
  `d_practica` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `encuesta`
--

INSERT INTO `encuesta` (`id_encuesta`, `edad`, `peso`, `estatura`, `comidas`, `snack`, `alimento`, `sueno`, `h_sueno`, `deporte`, `d_practica`) VALUES
(2, 17, 140, 1.7, 2, 3, 'Panes / Cereales', '07:00:00', '02:00:00', 1, 'Football'),
(3, 25, 145, 1.64, 3, 1, 'Comidas RÃ¡pidas', '08:00:00', '22:00:00', 1, 'Football'),
(4, 25, 110, 1.6, 2, 2, 'Comidas RÃ¡pidas', '10:00:00', '22:00:00', 1, 'Basketball'),
(5, 21, 135, 1.7, 2, 1, 'LÃ¡cteos', '07:00:00', '23:00:00', 0, 'Taekwondo'),
(6, 18, 100, 1.59, 3, 3, 'Comidas RÃ¡pidas', '08:00:00', '22:00:00', 0, NULL),
(7, 19, 110, 1.57, 3, 2, 'Frutas', '08:00:00', '22:00:00', 0, NULL),
(8, 19, 145, 1.7, 2, 0, 'Panes / Cereales', '06:00:00', '22:00:00', 0, NULL),
(9, 19, 170, 1.72, 3, 2, 'Verduras', '08:00:00', '21:00:00', 0, NULL),
(10, 20, 140, 1.5, 3, 1, 'Panes / Cereales', '08:00:00', '22:00:00', 0, NULL),
(11, 20, 117, 1.67, 2, 2, 'Carne / Huevos', '08:00:00', '22:00:00', 1, 'Football'),
(12, 18, 120, 1.5, 3, 1, 'Frutas', '06:00:00', '22:00:00', 1, 'Football'),
(13, 20, 135, 1.71, 1, 4, 'Comidas RÃ¡pidas', '08:00:00', '22:00:00', 0, NULL),
(14, 20, 120, 1.7, 3, 1, 'Verduras', '07:00:00', '22:00:00', 0, NULL),
(15, 20, 190, 1.87, 3, 0, 'Carne / Huevos', '06:00:00', '01:00:00', 1, 'Table Tennis'),
(16, 19, 140, 1.65, 3, 4, 'Carne / Huevos', '06:00:00', '22:00:00', 1, 'Basketball'),
(17, 20, 125, 1.75, 2, 2, 'LÃ¡cteos', '06:00:00', '23:00:00', 1, 'Football'),
(18, 19, 130, 1.5, 3, 2, 'Panes / Cereales', '08:00:00', '23:00:00', 1, 'Football'),
(19, 18, 170, 1.8, 1, 1, 'Comidas RÃ¡pidas', '05:00:00', '03:00:00', 1, 'Skateboarding'),
(20, 19, 170, 1.8, 2, 1, 'Comidas RÃ¡pidas', '04:00:00', '03:00:00', 1, 'Football'),
(21, 20, 145, 1.6, 3, 4, 'LÃ¡cteos', '06:00:00', '23:00:00', 0, NULL),
(22, 19, 130, 1.7, 3, 2, 'Frutas', '06:00:00', '00:00:00', 0, NULL),
(23, 18, 117, 1.97, 2, 3, 'Frutas', '08:00:00', '00:00:00', 1, 'Football'),
(24, 21, 140, 1.77, 3, 1, 'Panes / Cereales', '08:00:00', '21:00:00', 1, 'Football'),
(25, 19, 120, 1.7, 3, 3, 'Carne / Huevos', '05:00:00', '23:00:00', 1, 'Football'),
(26, 23, 197, 1.75, 2, 2, 'LÃ¡cteos', '06:00:00', '02:00:00', 0, NULL),
(27, 19, 130, 1.7, 2, 3, 'Mantequilla / Aceite', '08:00:00', '23:00:00', 1, 'Football'),
(28, 18, 135, 1.52, 3, 2, 'Frutas', '08:00:00', '22:00:00', 0, NULL),
(29, 19, 190, 1.7, 1, 2, 'Comidas RÃ¡pidas', '08:00:00', '23:00:00', 0, NULL),
(30, 22, 155, 1.65, 2, 2, 'Panes / Cereales', '05:00:00', '23:00:00', 0, NULL),
(31, 17, 171, 1.9, 2, 2, 'Verduras', '07:00:00', '23:30:00', 1, 'Basketball'),
(32, 21, 125, 1.68, 3, 1, 'Carne / Huevos', '07:00:00', '21:00:00', 1, 'Football'),
(33, 20, 130, 1.7, 3, 1, 'Mantequilla / Aceite', '04:00:00', '00:00:00', 1, 'Football'),
(34, 24, 190, 1.79, 3, 2, 'Frutas', '08:00:00', '22:00:00', 1, 'Taekwondo'),
(35, 22, 158, 1.89, 3, 4, 'Carne / Huevos', '07:00:00', '22:00:00', 0, NULL),
(36, 20, 100, 1.59, 3, 3, 'Comidas RÃ¡pidas', '08:00:00', '22:00:00', 0, NULL),
(37, 21, 153, 1.72, 3, 2, 'Verduras', '08:00:00', '22:00:00', 0, NULL);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `encuesta`
--
ALTER TABLE `encuesta`
  ADD PRIMARY KEY (`id_encuesta`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `encuesta`
--
ALTER TABLE `encuesta`
  MODIFY `id_encuesta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
