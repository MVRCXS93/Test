-- phpMyAdmin SQL Dump
-- version 4.7.3
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:8889
-- Tiempo de generación: 27-06-2018 a las 11:41:15
-- Versión del servidor: 5.6.35
-- Versión de PHP: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Base de datos: `KonaQueenK`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Perfil`
--

CREATE TABLE `Perfil` (
  `Id` int(11) NOT NULL,
  `Mail` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `Nombre` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `Apellidos` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `Calle` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `Portal` int(5) NOT NULL,
  `Letra` varchar(1) COLLATE latin1_general_ci NOT NULL,
  `Piso` int(3) NOT NULL,
  `Ciudad` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `Provincia` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `País` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `Foto` varchar(150) COLLATE latin1_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Usuario`
--

CREATE TABLE `Usuario` (
  `Id` int(11) NOT NULL,
  `Mail` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `Password` varchar(250) COLLATE latin1_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `Perfil`
--
ALTER TABLE `Perfil`
  ADD PRIMARY KEY (`Id`);

--
-- Indices de la tabla `Usuario`
--
ALTER TABLE `Usuario`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `Perfil`
--
ALTER TABLE `Perfil`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `Usuario`
--
ALTER TABLE `Usuario`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;