-- phpMyAdmin SQL Dump
-- version 4.1.8
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 26-11-2014 a las 06:20:00
-- Versión del servidor: 5.5.40-cll
-- Versión de PHP: 5.4.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `elitebro_kerserv`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nick` varchar(100) NOT NULL,
  `pass` varchar(100) NOT NULL,
  `nombres` varchar(100) NOT NULL,
  `apellidos` varchar(100) NOT NULL,
  `ci` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `pais` varchar(100) NOT NULL,
  `estado` varchar(100) NOT NULL,
  `ciudad` varchar(100) NOT NULL,
  `telefono` varchar(100) NOT NULL,
  `celular` varchar(100) NOT NULL,
  `dir` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nick`, `pass`, `nombres`, `apellidos`, `ci`, `email`, `pais`, `estado`, `ciudad`, `telefono`, `celular`, `dir`) VALUES
(1, 'kakashi', '123', 'enrique', 'menodza', '', 'enriquemendoza_162@hotmail.com', 'Venezuela', 'vargas', 'la guaira', '04142130589', '02123101971', 'caraballeda'),
(2, 'sardan', 'L71sfajhlwteq', 'Sandra Carolina ', 'Sardan Carrillo', '', 'scsardanc@gmail.com', 'Venezuela', 'Distrito Capital ', 'Caracas', '04123362764', '02124257784', 'Av. San Juan Bosco de Altamira Edificio Panaven piso 3 Emisora Baila 102.7 FM'),
(3, 'SAGEVEV', 'D11pdxvfknltj', 'EDUARDO', 'VEGAS', '', 'sagevev@hotmail.com', 'Venezuela', 'miranda', 'caracas', '04125934186', '02123635412', 'la candelaria'),
(4, 'LILIBETHJP', 'T26apuvsdxniy', 'LILIBETH', 'PEREZ', '', 'LILIBETHJP@GMAIL.COM', 'Venezuela', 'DC', 'CARACAS', '4166346696', '587940368', 'LAS PALMAS'),
(5, 'leonardmendoza', 'O85gmxjvtinco', 'Leonard', 'Mendoza', '', 'leonardmendoza@gmail.com', 'Venezuela', 'Miranda', 'Caraccas', '04141540094', '02129880501', 'AV CIRCUNVALACION DEL SOL CALLE GEMINIS RES ROSALI PISO 6 APTO 64 SANTA PAULA EL CAFETAL'),
(6, 'antone05', 'G56kipppvylau', 'Lisbeth', 'RondÃ³n', '', 'rondon.lisbeth@gmail.com', 'Venezuela', 'miranda', 'caracas', '04142237885', '0212-2856163', 'av. los chorros res ipas III piso 3 apto. 6 sebucan '),
(7, 'mildav', 'E74rxbrnflyfn', 'Miller', 'Sanchez', '', 'miller305_5@hotmail.com', 'Venezuela', 'Distrito capital', 'Caracas', '424-2426178', '212-8732610', 'av. principal de el cementerio Centro Comercial Merposur pasillo Canguro Local 94, al frente de banc'),
(8, 'abbycm', 'V72qosvwwpaor', 'adaryory', 'compres', '', 'adaryori@hotmail.com', 'Venezuela', 'lara', 'barquisimeto', '04122880787', '02512552409', 'av.hernan garmendia via el ujano urb villas del este plaza casa numero 22'),
(9, 'ljimenezi', 'R82ytlobruama', 'Leonel', 'Jimenez', '', 'ljimenezi@gmail.com', 'Venezuela', 'Bolivar', 'Ciudad Bolivar', '0414 0994232', '0285 6317209', 'Urbanizacion Vista Hermosa Carrera 5 Quinta Luisana # 54 Ciudad Bolivar'),
(10, 'Gricelgrp', 'F98djcrebxexe', 'Gricel', 'Rosas ', '', 'Gricelrosas6@gmail.com', 'Venezuela', 'Vargas ', 'Maiquetia ', '04146633226', '02123310712', 'Calle algarin casa # 10 maiquetia '),
(11, 'muma06', 'A81glwymmdupx', 'gricel', 'rosas', '', 'gjrp1996@gmail.com', 'Venezuela', 'vargas', 'maiquetia', '04146633226', '02123310712', 'calle algarin casa #10 maiquetia');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
