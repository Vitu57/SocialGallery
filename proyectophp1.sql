-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 28-10-2019 a las 20:28:35
-- Versión del servidor: 10.4.6-MariaDB
-- Versión de PHP: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `proyectophp1`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `gallery`
--

CREATE TABLE `gallery` (
  `id` int(11) NOT NULL,
  `name` varchar(20) DEFAULT NULL,
  `path` varchar(50) DEFAULT NULL,
  `dateimg` varchar(20) DEFAULT NULL,
  `id_user` int(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `gallery`
--

INSERT INTO `gallery` (`id`, `name`, `path`, `dateimg`, `id_user`) VALUES
(5, 'Resident Evil', 'imagenes/resident.jpg', '10.04.19', 45),
(11, 'Mario Bros', 'imagenes/Mario Bros.jpg', '10.04.19', 45),
(13, 'Mario Bros', 'imagenes/Mario Bros.jpg', '10.19.19', 56),
(47, 'Sonic', 'imagenes/hqdefault.jpg', '10.04.19', 45),
(58, 'The Legend of Zelda', 'imagenes/zelda.jpg', '10.06.19', 56),
(60, 'Zelda', 'imagenes/zelda.jpg', '10.25.19', 45),
(67, 'Doom', 'imagenes/doom.jpg', '10.07.19', 56),
(71, 'Tetris', 'imagenes/tetris.jpg', '10.19.19', 56),
(81, 'Pacman', 'imagenes/pacman.png', '10.04.19', 45),
(87, 'Metal Gear V', 'imagenes/metalgear.jpg', '10.07.19', 56),
(90, 'Mario', 'imagenes/Mario Bros.jpg', '10.20.19', 77),
(92, 'Crazy Taxi', 'imagenes/descarga.jpg', '10.04.19', 45);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(255) NOT NULL,
  `user` varchar(100) NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `user`, `password`) VALUES
(45, 'Juan56', '827ccb0eea8a706c4c34a16891f84e7b'),
(56, 'Marta26', 'e10adc3949ba59abbe56e057f20f883e'),
(77, 'Vitu', 'fa296149fa58bfd4408e407cc3fd3be5'),
(79, 'Oscar45', '827ccb0eea8a706c4c34a16891f84e7b');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_users` (`id_user`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `gallery`
--
ALTER TABLE `gallery`
  ADD CONSTRAINT `fk_users` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
