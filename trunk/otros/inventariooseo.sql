-- phpMyAdmin SQL Dump
-- version 3.3.10deb1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 12-10-2011 a las 17:07:08
-- Versión del servidor: 5.1.54
-- Versión de PHP: 5.3.5-1ubuntu7.2

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `inventariooseo`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `acronimos`
--

CREATE TABLE IF NOT EXISTS `acronimos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(4) COLLATE utf8_spanish2_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci AUTO_INCREMENT=6 ;

--
-- Volcar la base de datos para la tabla `acronimos`
--

INSERT INTO `acronimos` (`id`, `nombre`) VALUES
(1, 'MDQ'),
(2, 'CABA'),
(3, 'TAN'),
(4, 'PM'),
(5, 'BAN');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inventario_arq`
--

CREATE TABLE IF NOT EXISTS `inventario_arq` (
  `id_inventario` int(11) NOT NULL,
  `arqueologo_responsable` varchar(255) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `fecha_inicio` varchar(50) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `fecha_finalizacion` varchar(50) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `ente_responsable` varchar(255) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `numero_reg_arq` varchar(25) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `tipo_sepultura` varchar(25) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `sexo` varchar(20) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `edad` varchar(35) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `anios` varchar(255) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `grado_integridad` varchar(10) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `numero_elementos` varchar(255) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `estado_preservacion` varchar(10) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `tratamiento_conservacion` varchar(10) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `rel_pato_esqueleto` varchar(2) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `estudios_realizados` varchar(2) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `rel_pato_masticatorio` varchar(2) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `elementos_asociados` varchar(30) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `otros_asociados` varchar(30) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `vestimenta_asociada` varchar(30) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `inventario_osteologico` varchar(255) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `registro_fotografico` varchar(2) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `referencia_bibliograficas` text COLLATE utf8_spanish2_ci,
  PRIMARY KEY (`id_inventario`),
  UNIQUE KEY `id_inventario` (`id_inventario`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcar la base de datos para la tabla `inventario_arq`
--

INSERT INTO `inventario_arq` (`id_inventario`, `arqueologo_responsable`, `fecha_inicio`, `fecha_finalizacion`, `ente_responsable`, `numero_reg_arq`, `tipo_sepultura`, `sexo`, `edad`, `anios`, `grado_integridad`, `numero_elementos`, `estado_preservacion`, `tratamiento_conservacion`, `rel_pato_esqueleto`, `estudios_realizados`, `rel_pato_masticatorio`, `elementos_asociados`, `otros_asociados`, `vestimenta_asociada`, `inventario_osteologico`, `registro_fotografico`, `referencia_bibliograficas`) VALUES
(2, '', '', '', '', '', 'Huesos Aislados', 'Indefinido', 'Infantil (0-11 años)', '', '<25%', '', NULL, 'Ausente', 'No', 'No', 'No', 'Ninguno', 'Ninguno', 'Ninguno', '2El cementerio de la MS C14 (1).JPG', 'No', ''),
(3, '', '', '', '', '', 'Huesos Aislados', 'Indefinido', 'Infantil (0-11 años)', '', '<25%', '', NULL, 'Ausente', 'No', 'No', 'No', 'Ninguno', 'Ninguno', 'Ninguno', NULL, 'No', ''),
(55, '', '', '', '', '', 'Huesos Aislados', 'Indefinido', 'Infantil (0-11 años)', '', '<25%', '', NULL, 'Ausente', 'No', 'No', 'No', 'Ninguno', 'Ninguno', 'Ninguno', NULL, 'No', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inventario_oseo`
--

CREATE TABLE IF NOT EXISTS `inventario_oseo` (
  `ficha` int(11) NOT NULL AUTO_INCREMENT,
  `numero_resumen` varchar(10) COLLATE utf8_spanish2_ci NOT NULL,
  `numero_registro` int(11) NOT NULL,
  `sitio` varchar(255) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `acronimo` varchar(4) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `localidad` varchar(100) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `provincia` varchar(100) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `pais` varchar(50) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `periodo` varchar(255) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `latitud` varchar(255) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `longitud` varchar(255) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `precision` varchar(15) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `dataciones` varchar(15) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `material_asociado` varchar(255) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `sobrehueso` varchar(255) COLLATE utf8_spanish2_ci DEFAULT NULL,
  PRIMARY KEY (`ficha`),
  UNIQUE KEY `numero_registro` (`numero_registro`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci AUTO_INCREMENT=13 ;

--
-- Volcar la base de datos para la tabla `inventario_oseo`
--

INSERT INTO `inventario_oseo` (`ficha`, `numero_resumen`, `numero_registro`, `sitio`, `acronimo`, `localidad`, `provincia`, `pais`, `periodo`, `latitud`, `longitud`, `precision`, `dataciones`, `material_asociado`, `sobrehueso`) VALUES
(3, '2', 2, '', '', 'Mar del Plata', 'Buenos Aires', NULL, '', '', '', 'No', 'No', 'No', 'No'),
(4, '3', 3, '', '', 'Tandil', 'Buenos Aires', NULL, '', '', '', 'No', 'No', 'No', 'No'),
(5, '55', 55, '', '', 'Rosario', 'Santa Fe', NULL, '', '', '', 'No', 'No', 'No', 'No'),
(7, '10', 10, '', 'SM', 'San Miguel de Tucumán', 'Tucumán', '', '657657', '', '', 'No', '14C', 'Si', 'Si'),
(8, '999', 999, '', '', '', '', 'Argentina', '', '', '', 'No', 'No', 'No', 'No'),
(9, '456', 456, '', '', '', '', '', '', '', '', 'No', 'No', 'No', 'No'),
(10, '343', 343, '', '', '', '', '', '', '', '', 'No', 'No', 'No', 'No'),
(11, '701', 701, '', '', '', '', '', '', '', '', 'No', 'No', 'No', 'No'),
(12, '800', 800, '', '', '', '', '', '', '', '', 'No', 'No', 'No', 'No');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inventario_ubi`
--

CREATE TABLE IF NOT EXISTS `inventario_ubi` (
  `id_inventario` int(11) NOT NULL,
  `fecha_ingreso` varchar(255) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `numero_caja` varchar(255) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `sala` varchar(255) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `estanteria` varchar(255) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `plano` varchar(255) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `restos_humano` varchar(255) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `otros_restos` varchar(255) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `forma_ingreso` varchar(15) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `fecha_salida` varchar(255) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `res_registro` varchar(255) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `res_conservacion` varchar(255) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `res_digitalizacion` varchar(255) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `res_bodegaje` varchar(255) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `observaciones` text COLLATE utf8_spanish2_ci,
  PRIMARY KEY (`id_inventario`),
  UNIQUE KEY `id_inventario` (`id_inventario`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcar la base de datos para la tabla `inventario_ubi`
--

INSERT INTO `inventario_ubi` (`id_inventario`, `fecha_ingreso`, `numero_caja`, `sala`, `estanteria`, `plano`, `restos_humano`, `otros_restos`, `forma_ingreso`, `fecha_salida`, `res_registro`, `res_conservacion`, `res_digitalizacion`, `res_bodegaje`, `observaciones`) VALUES
(2, '', '', '', '', NULL, '', '', 'Excavación', '', '', '', '', '', ''),
(3, '', '', '', '', NULL, '', '', 'Excavación', '', '', '', '', '', ''),
(10, '01/08/2011', '', '', '', NULL, '', '', 'Rescate', '01/08/2011', '', '', '', '', ''),
(55, '', '', '', '', NULL, '', '', 'Excavación', '', '', '', '', '', ''),
(343, '', '', '', '', NULL, '', '', 'Excavación', '', '', '', '', '', ''),
(456, '', '', '', '', NULL, '', '', 'Excavación', '', '', '', '', '', ''),
(701, '', '', '', '', NULL, '', '', 'Excavación', '', '', '', '', '', ''),
(800, '', '', '', '', NULL, '', '', 'Excavación', '', '', '', '', '', ''),
(999, '', '', '', '', NULL, '', '', 'Excavación', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `localidades`
--

CREATE TABLE IF NOT EXISTS `localidades` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci AUTO_INCREMENT=13 ;

--
-- Volcar la base de datos para la tabla `localidades`
--

INSERT INTO `localidades` (`id`, `nombre`) VALUES
(1, 'Buenos Aires'),
(2, 'Córdoba'),
(3, 'Rosario'),
(4, 'La Plata'),
(5, 'Mar del Plata'),
(6, 'San Miguel de Tucumán'),
(7, 'Salta'),
(8, 'Santa Fe'),
(9, 'Corrientes'),
(10, 'Bahía Blanca'),
(11, 'Resistencia'),
(12, 'Vicente López');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `paises`
--

CREATE TABLE IF NOT EXISTS `paises` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci AUTO_INCREMENT=7 ;

--
-- Volcar la base de datos para la tabla `paises`
--

INSERT INTO `paises` (`id`, `nombre`) VALUES
(1, 'Argentina'),
(2, 'Brasil'),
(3, 'Chile'),
(4, 'Uruguay'),
(5, 'Bolivia'),
(6, 'Perú');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `provincias`
--

CREATE TABLE IF NOT EXISTS `provincias` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci AUTO_INCREMENT=24 ;

--
-- Volcar la base de datos para la tabla `provincias`
--

INSERT INTO `provincias` (`id`, `nombre`) VALUES
(1, 'Buenos Aires'),
(2, 'Catamarca'),
(3, 'Chaco'),
(4, 'Chubut'),
(5, 'Córdoba'),
(6, 'Corrientes'),
(7, 'Entre Ríos'),
(8, 'Formosa'),
(9, 'Jujuy'),
(10, 'La Pampa'),
(11, 'La Rioja'),
(12, 'Mendoza'),
(13, 'Misiones'),
(14, 'Neuquén'),
(15, 'Río Negro'),
(16, 'Salta'),
(17, 'San Juan'),
(18, 'San Luis'),
(19, 'Santa Cruz'),
(20, 'Santa Fe'),
(21, 'Santiago del Estero'),
(22, 'Tierra del Fuego, Antártida e Islas del Atlántico '),
(23, 'Tucumán');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sessions`
--

CREATE TABLE IF NOT EXISTS `sessions` (
  `id` varchar(100) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL DEFAULT '',
  `data` text CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL,
  `timestamp` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcar la base de datos para la tabla `sessions`
--

INSERT INTO `sessions` (`id`, `data`, `timestamp`) VALUES
('98vdh176h7ihsd439p64aftgu6', '', 1312493302),
('aa6p5a928k1s5c87v8ot06bg26', '', 1312493619),
('455djcqtqa8f5unttd7em3pak0', '', 1312549690);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
  `nombreusuario` varchar(30) COLLATE utf8_spanish2_ci NOT NULL,
  `contrasenia` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `algo` varchar(50) COLLATE utf8_spanish2_ci DEFAULT NULL,
  PRIMARY KEY (`nombreusuario`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcar la base de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`nombreusuario`, `contrasenia`, `algo`) VALUES
('guille', '7ca148345e657e45b0dbca77c9d792111f38ca08', NULL);

--
-- Filtros para las tablas descargadas (dump)
--

--
-- Filtros para la tabla `inventario_arq`
--
ALTER TABLE `inventario_arq`
  ADD CONSTRAINT `inventario_arq_ibfk_1` FOREIGN KEY (`id_inventario`) REFERENCES `inventario_oseo` (`numero_registro`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `inventario_ubi`
--
ALTER TABLE `inventario_ubi`
  ADD CONSTRAINT `inventario_ubi_ibfk_1` FOREIGN KEY (`id_inventario`) REFERENCES `inventario_oseo` (`numero_registro`) ON DELETE CASCADE ON UPDATE CASCADE;
