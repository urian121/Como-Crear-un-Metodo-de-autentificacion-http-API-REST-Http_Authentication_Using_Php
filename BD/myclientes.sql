-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 09-02-2022 a las 21:20:52
-- Versión del servidor: 10.4.21-MariaDB
-- Versión de PHP: 7.4.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `vcard`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `myclientes`
--

CREATE TABLE `myclientes` (
  `id` int(10) NOT NULL,
  `cod_vcard` varchar(50) DEFAULT NULL,
  `nombre` varchar(100) DEFAULT NULL,
  `empresa` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `myclientes`
--

INSERT INTO `myclientes` (`id`, `cod_vcard`, `nombre`, `empresa`) VALUES
(1, '001', 'Urian Viera', 'Bull'),
(2, '002', 'Alejandro Torres', 'vcard'),
(3, '003', 'Ana', 'GOOL'),
(4, '004', 'Host', 'twitter'),
(5, '005', 'Diego', 'permutas'),
(6, '006', 'Alejandra', 'Luky pets');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `myclientes`
--
ALTER TABLE `myclientes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `myclientes`
--
ALTER TABLE `myclientes`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
