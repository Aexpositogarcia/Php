-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 24-02-2019 a las 23:56:57
-- Versión del servidor: 10.1.36-MariaDB
-- Versión de PHP: 7.0.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `proyectophp`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `animales`
--

CREATE TABLE `animales` (
  `Propietario` varchar(30) NOT NULL,
  `Nombre` varchar(20) NOT NULL,
  `Fecha_nac` varchar(20) NOT NULL,
  `Codigochip` int(11) NOT NULL,
  `Tipo` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `animales`
--

INSERT INTO `animales` (`Propietario`, `Nombre`, `Fecha_nac`, `Codigochip`, `Tipo`) VALUES
('helenasc1999@gmail.com', 'Animal1', '2019-02-13', 1, 'Caballo'),
('alberexgar@hotmail.com', 'Animal2', '2021-03-01', 10, 'Caballo'),
('A@A', 'Helena ', '2019-02-11', 72, 'Anfibio'),
('A@A', 'dfafadf', '2018-12-17', 234, 'Perro'),
('alberexgar@hotmail.com', 'Animal6', '2021-02-01', 345, 'Huron'),
('alberexgar@hotmail.com', 'Animal5', '275760-02-01', 1234, 'Perro'),
('helenasc1999@gmail.com', 'Animal1', '2019-02-17', 1235, 'Anfibio'),
('A@A', 'fadfa', '2019-02-12', 1251, 'Perro'),
('alberexgar@hotmail.com', 'Animal2', '2019-01-02', 2341, 'Anfibio'),
('alberexgar@hotmail.com', 'Missy', '12-02-2018', 3412, 'Gato'),
('A@A', 'Animal1', '2019-02-15', 3441, 'Anfibio');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tabla_citas`
--

CREATE TABLE `tabla_citas` (
  `id` int(11) NOT NULL,
  `propietario` varchar(30) NOT NULL,
  `Mascota` varchar(30) NOT NULL,
  `cliqueado` tinyint(1) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tabla_citas`
--

INSERT INTO `tabla_citas` (`id`, `propietario`, `Mascota`, `cliqueado`) VALUES
(0, '', '', 0),
(1, 'Alberto Exposito ', 'Animal2', 1),
(2, '', '', 0),
(3, '', '', 0),
(4, '', '', 0),
(5, 'Carlos ', 'Perrito', 1),
(6, '', '', 0),
(7, '', '', 0),
(8, '', '', 0),
(9, '', '', 0),
(10, '', '', 0),
(11, 'admin', '', 1),
(12, '', '', 0),
(13, '', '', 0),
(14, '', '', 0),
(15, '', '', 0),
(16, '', '', 0),
(17, 'Alberto Exposito ', 'Animal2', 1),
(18, '', '', 0),
(19, '', '', 0),
(20, '', '', 0),
(21, '', '', 0),
(22, '', '', 0),
(23, '', '', 0),
(24, '', '', 0),
(25, '', '', 0),
(26, '', '', 0),
(27, '', '', 0),
(28, '', '', 0),
(29, '', '', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `email` varchar(40) NOT NULL,
  `nombre` varchar(40) NOT NULL,
  `contrasenia` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`email`, `nombre`, `contrasenia`) VALUES
('admin@admin', 'admin', 'admin'),
('aexpositogarcia@outlook.com', 'Alberto', '123'),
('alberexgar@hotmail.com', 'Alberto Exposito ', 'Alberto'),
('carexgar@outlook.com', 'Carlos ', 'Carlos');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `animales`
--
ALTER TABLE `animales`
  ADD PRIMARY KEY (`Codigochip`);

--
-- Indices de la tabla `tabla_citas`
--
ALTER TABLE `tabla_citas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
