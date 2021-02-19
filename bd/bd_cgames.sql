-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 30-05-2016 a las 09:49:06
-- Versión del servidor: 10.1.13-MariaDB
-- Versión de PHP: 7.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bd_cgames`
--
CREATE DATABASE IF NOT EXISTS `bd_cgames` DEFAULT CHARACTER SET utf8 COLLATE utf8_bin;
USE `bd_cgames`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_chat`
--

CREATE TABLE `tbl_chat` (
  `id_chat` int(11) NOT NULL,
  `usu_emailP` varchar(50) COLLATE utf8_bin NOT NULL,
  `usu_emailC` varchar(50) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `tbl_chat`
--

INSERT INTO `tbl_chat` (`id_chat`, `usu_emailP`, `usu_emailC`) VALUES
(6, 'aitor.blesa@fje.edu', 'sergio.ayala@fje.edu'),
(7, 'xavi.granell@fje.edu', 'sergio.ayala@fje.edu');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_genero`
--

CREATE TABLE `tbl_genero` (
  `id_genero` int(11) NOT NULL,
  `gen_nombre` varchar(20) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `tbl_genero`
--

INSERT INTO `tbl_genero` (`id_genero`, `gen_nombre`) VALUES
(1, 'Arcade'),
(2, 'Estrategia'),
(3, 'Acción'),
(4, 'Carreras'),
(5, 'Deportes'),
(6, 'Bélico'),
(7, 'Rol'),
(8, 'Aventuras');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_interesado`
--

CREATE TABLE `tbl_interesado` (
  `id_interes` int(11) NOT NULL,
  `usu_emailP` varchar(50) COLLATE utf8_bin NOT NULL,
  `usu_emailC` varchar(50) COLLATE utf8_bin NOT NULL,
  `id_juegos` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `tbl_interesado`
--

INSERT INTO `tbl_interesado` (`id_interes`, `usu_emailP`, `usu_emailC`, `id_juegos`) VALUES
(1, 'aitor.blesa@fje.edu', 'sergio.ayala@fje.edu', 6),
(2, 'sergio.ayala@fje.edu', 'xavi.granell@fje.edu', 7);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_juego`
--

CREATE TABLE `tbl_juego` (
  `id_juegos` int(11) NOT NULL,
  `jue_nombre` varchar(30) COLLATE utf8_bin NOT NULL,
  `id_genero` int(11) NOT NULL,
  `id_plataforma` int(11) NOT NULL,
  `jue_foto` varchar(50) COLLATE utf8_bin NOT NULL,
  `usu_emailP` varchar(50) COLLATE utf8_bin NOT NULL,
  `video` varchar(80) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `tbl_juego`
--

INSERT INTO `tbl_juego` (`id_juegos`, `jue_nombre`, `id_genero`, `id_plataforma`, `jue_foto`, `usu_emailP`, `video`) VALUES
(6, 'DriveClub', 4, 12, 'drive.jpg', 'aitor.blesa@fje.edu', 'https://www.youtube.com/embed/qXeeDTZg6Tk'),
(7, 'FIFA 16', 5, 12, 'fifa16.jpg', 'sergio.ayala@fje.edu', 'https://www.youtube.com/embed/rIwYxuElcvk'),
(8, 'World Of Warcraft', 7, 11, 'wow.jpg', 'sergio.ayala@fje.edu', 'https://www.youtube.com/embed/p_ckDyFhTGQ'),
(9, 'OverWatch', 3, 11, 'overwatch.jpg', 'xavi.granell@fje.edu', 'https://www.youtube.com/embed/IBIwGKDwnWY'),
(10, 'Assassin''s Creed', 2, 13, 'assassins.jpg', 'aitor.blesa@fje.edu', 'https://www.youtube.com/embed/xzCEdSKMkdU'),
(11, 'SuperMario Bros', 8, 14, 'mariobros.jpg', 'xavi.granell@fje.edu', 'https://www.youtube.com/embed/IRQsET7_WE0'),
(12, 'The Legend Of Zelda', 8, 14, 'zelda.jpg', 'aitor.blesa@fje.edu', 'https://www.youtube.com/embed/lzlzPhLp_7Y'),
(13, 'MineCraft ', 2, 15, 'minecraft.jpg', 'sergio.ayala@fje.edu', 'https://www.youtube.com/embed/MmB9b5njVbA'),
(14, 'Soul Sacrifice', 7, 15, 'soul.jpg', 'xavi.granell@fje.edu', 'https://www.youtube.com/embed/4MhCeWJ68pU'),
(15, 'Skyrim', 8, 11, 'skyrim.jpg', 'aitor.blesa@fje.edu', 'https://www.youtube.com/embed/JSRtYpNRoN0'),
(16, 'Diablo3', 2, 11, 'diablo3.jpg', 'sergio.ayala@fje.edu', 'https://www.youtube.com/embed/tq92P1hBfjw'),
(17, 'Bloodborne', 6, 12, 'sergio.ayala@fje.edu_bloodborne.jpg', 'sergio.ayala@fje.edu', 'https://www.youtube.com/embed/TmZ5MTIu5hU'),
(31, 'The Art Of War', 6, 11, 'aitor.blesa@fje.edu_theartofwar.jpg', 'aitor.blesa@fje.edu', ''),
(32, 'Empire Total War', 2, 11, 'carlos.sanchez@fje.edu_empiretotal.jpg', 'carlos.sanchez@fje.edu', 'https://www.youtube.com/embed/tu_93WMqINE'),
(33, 'Imperium II', 2, 11, 'enric.gorriz@fje.edu_imperium2.jpg', 'enric.gorriz@fje.edu', ''),
(34, 'Toca Race Driver 2', 4, 11, 'sergio.ayala@fje.edu_tocaracer2.jpg', 'sergio.ayala@fje.edu', ''),
(35, 'Colin McRae: Dirt 2', 4, 11, 'xavi.granell@fje.edu_colinmcrae.jpg', 'xavi.granell@fje.edu', ''),
(36, 'Mario Kart Wii', 4, 14, 'xavi.granell@fje.edu_mariokart.jpg', 'xavi.granell@fje.edu', ''),
(37, 'Wii Sports', 5, 14, 'xavi.granell@fje.edu_wiisports.jpg', 'xavi.granell@fje.edu', ''),
(38, 'Super Smash Bros. Brawl', 8, 14, 'xavi.granell@fje.edu_supersmash.jpg', 'xavi.granell@fje.edu', ''),
(39, 'Wii Dance 2014', 5, 14, 'xavi.granell@fje.edu_justdance2014.jpg', 'xavi.granell@fje.edu', ''),
(40, 'Monopoly', 1, 14, 'carlos.sanchez@fje.edu_monopoly.jpg', 'carlos.sanchez@fje.edu', ''),
(41, 'Pro Evolution Soccer 2008', 5, 14, 'enric.gorriz@fje.edu_proevolution08.jpg', 'enric.gorriz@fje.edu', ''),
(42, 'Grand Theft Auto V', 4, 12, 'sergio.ayala@fje.edu_grandtheft.jpg', 'sergio.ayala@fje.edu', ''),
(43, 'God of War III', 6, 12, 'aitor.blesa@fje.edu_godofwar.jpg', 'aitor.blesa@fje.edu', ''),
(44, 'FIFA Street', 5, 12, 'carlos.sanchez@fje.edu_fifastreet.jpg', 'carlos.sanchez@fje.edu', ''),
(45, 'Need For Speed: Undercover', 4, 12, 'enric.gorriz@fje.edu_nfsundercover.jpg', 'enric.gorriz@fje.edu', ''),
(46, 'Kingdom Hearts HD 2.5 Remix', 3, 12, 'xavi.granell@fje.edu_kh.jpg', 'xavi.granell@fje.edu', ''),
(48, 'Formula One Championship', 4, 12, 'carlos.sanchez@fje.edu_formula1.jpg', 'carlos.sanchez@fje.edu', ''),
(49, 'Tomb Raider: UnderWorld', 3, 12, 'enric.gorriz@fje.edu_trunderworld.jpg', 'enric.gorriz@fje.edu', ''),
(50, 'Star Wars:Poder de la Fuerza', 3, 12, 'sergio.ayala@fje.edu_starwarspdlf.jpg', 'sergio.ayala@fje.edu', ''),
(51, 'Uncharted 4', 8, 12, 'sergio.ayala@fje.edu_uncharted4.jpg', 'sergio.ayala@fje.edu', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_mensajes`
--

CREATE TABLE `tbl_mensajes` (
  `id_mensaje` int(11) NOT NULL,
  `mens_mensaje` text COLLATE utf8_bin NOT NULL,
  `id_chat` int(11) NOT NULL,
  `usu_email` varchar(50) COLLATE utf8_bin NOT NULL,
  `visto` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `tbl_mensajes`
--

INSERT INTO `tbl_mensajes` (`id_mensaje`, `mens_mensaje`, `id_chat`, `usu_email`, `visto`) VALUES
(47, 'Hola Buenas, estaba interesado en el producto que pusiste hace 1 semana...', 6, 'aitor.blesa@fje.edu', 1),
(48, 'Hola buenas el juego de The Witcher 3 esta rallado', 7, 'xavi.granell@fje.edu', 1),
(49, 'Exijo una devoluciÃ³n!', 7, 'xavi.granell@fje.edu', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_plataforma`
--

CREATE TABLE `tbl_plataforma` (
  `id_plataforma` int(11) NOT NULL,
  `pla_nombre` varchar(20) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `tbl_plataforma`
--

INSERT INTO `tbl_plataforma` (`id_plataforma`, `pla_nombre`) VALUES
(11, 'Pc'),
(12, 'PlayStation'),
(13, 'Xbox'),
(14, 'Nintendo Wiï'),
(15, 'PlayStation Portable');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_usuario`
--

CREATE TABLE `tbl_usuario` (
  `usu_email` varchar(50) COLLATE utf8_bin NOT NULL,
  `usu_contra` varchar(50) COLLATE utf8_bin NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `usu_nombre` varchar(20) COLLATE utf8_bin NOT NULL,
  `usu_apellido` varchar(35) COLLATE utf8_bin NOT NULL,
  `usu_foto` varchar(25) COLLATE utf8_bin NOT NULL,
  `usu_nick` varchar(20) COLLATE utf8_bin NOT NULL,
  `usu_direccion` varchar(100) COLLATE utf8_bin NOT NULL,
  `usu_lat` double NOT NULL,
  `usu_long` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `tbl_usuario`
--

INSERT INTO `tbl_usuario` (`usu_email`, `usu_contra`, `id_usuario`, `usu_nombre`, `usu_apellido`, `usu_foto`, `usu_nick`, `usu_direccion`, `usu_lat`, `usu_long`) VALUES
('aitor.blesa@fje.edu', '81dc9bdb52d04dc20036dbd8313ed055', 1, 'Aitor', 'Blesa', 'aitor.jpg', 'Sangik95', '', 41.2865971, 1.9844913),
('carlos.sanchez@fje.edu', '81dc9bdb52d04dc20036dbd8313ed055', 4, 'Carlos', 'Sanchez', '', 'Stravinskii', '', 0, 0),
('enric.gorriz@fje.edu', '81dc9bdb52d04dc20036dbd8313ed055', 5, 'Enric', 'Gorriz', '', 'enric95', '', 0, 0),
('sergio.ayala@fje.edu', '81dc9bdb52d04dc20036dbd8313ed055', 2, 'Sergio', 'Ayala', 'sergio.jpg', 'Mrbowndepter', '', 41.3520453, 2.1087691000000177),
('xavi.granell@fje.edu', '81dc9bdb52d04dc20036dbd8313ed055', 3, 'Xavier', 'Granell', 'xavi.jpg', 'xavicillo', '', 40.4381311, -3.819623);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_valoracio`
--

CREATE TABLE `tbl_valoracio` (
  `id_valoracion` int(11) NOT NULL,
  `usu_emailP` varchar(50) COLLATE utf8_bin NOT NULL,
  `usu_emailC` varchar(50) COLLATE utf8_bin NOT NULL,
  `val_valoracion` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `tbl_valoracio`
--

INSERT INTO `tbl_valoracio` (`id_valoracion`, `usu_emailP`, `usu_emailC`, `val_valoracion`) VALUES
(3, 'aitor.blesa@fje.edu', 'sergio.ayala@fje.edu', 'Muy buen vendedor y buena compra. Todo en buenas condiciones'),
(4, 'xavi.granell@fje.edu', 'aitor.blesa@fje.edu', 'Comprador muy fiable');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tbl_chat`
--
ALTER TABLE `tbl_chat`
  ADD PRIMARY KEY (`id_chat`),
  ADD KEY `id_usuarioP` (`usu_emailP`),
  ADD KEY `id_usuarioC` (`usu_emailC`);

--
-- Indices de la tabla `tbl_genero`
--
ALTER TABLE `tbl_genero`
  ADD PRIMARY KEY (`id_genero`),
  ADD KEY `id_genero` (`id_genero`);

--
-- Indices de la tabla `tbl_interesado`
--
ALTER TABLE `tbl_interesado`
  ADD PRIMARY KEY (`id_interes`),
  ADD KEY `id_usuarioP` (`usu_emailP`),
  ADD KEY `id_usuarioC` (`usu_emailC`),
  ADD KEY `id_juego` (`id_juegos`);

--
-- Indices de la tabla `tbl_juego`
--
ALTER TABLE `tbl_juego`
  ADD PRIMARY KEY (`id_juegos`),
  ADD KEY `id_genero` (`id_genero`),
  ADD KEY `id_plataforma` (`id_plataforma`),
  ADD KEY `id_usuarioP` (`usu_emailP`),
  ADD KEY `id_juegos` (`id_juegos`);

--
-- Indices de la tabla `tbl_mensajes`
--
ALTER TABLE `tbl_mensajes`
  ADD PRIMARY KEY (`id_mensaje`),
  ADD KEY `id_chat` (`id_chat`),
  ADD KEY `usu_email` (`usu_email`);

--
-- Indices de la tabla `tbl_plataforma`
--
ALTER TABLE `tbl_plataforma`
  ADD PRIMARY KEY (`id_plataforma`);

--
-- Indices de la tabla `tbl_usuario`
--
ALTER TABLE `tbl_usuario`
  ADD PRIMARY KEY (`usu_email`),
  ADD KEY `id_usuario` (`id_usuario`);

--
-- Indices de la tabla `tbl_valoracio`
--
ALTER TABLE `tbl_valoracio`
  ADD PRIMARY KEY (`id_valoracion`),
  ADD KEY `id_usuarioP` (`usu_emailP`),
  ADD KEY `id_usuarioC` (`usu_emailC`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tbl_chat`
--
ALTER TABLE `tbl_chat`
  MODIFY `id_chat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT de la tabla `tbl_genero`
--
ALTER TABLE `tbl_genero`
  MODIFY `id_genero` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT de la tabla `tbl_interesado`
--
ALTER TABLE `tbl_interesado`
  MODIFY `id_interes` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `tbl_juego`
--
ALTER TABLE `tbl_juego`
  MODIFY `id_juegos` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;
--
-- AUTO_INCREMENT de la tabla `tbl_mensajes`
--
ALTER TABLE `tbl_mensajes`
  MODIFY `id_mensaje` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;
--
-- AUTO_INCREMENT de la tabla `tbl_plataforma`
--
ALTER TABLE `tbl_plataforma`
  MODIFY `id_plataforma` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT de la tabla `tbl_usuario`
--
ALTER TABLE `tbl_usuario`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `tbl_valoracio`
--
ALTER TABLE `tbl_valoracio`
  MODIFY `id_valoracion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `tbl_chat`
--
ALTER TABLE `tbl_chat`
  ADD CONSTRAINT `tbl_chat_ibfk_1` FOREIGN KEY (`usu_emailP`) REFERENCES `tbl_usuario` (`usu_email`),
  ADD CONSTRAINT `tbl_chat_ibfk_2` FOREIGN KEY (`usu_emailC`) REFERENCES `tbl_usuario` (`usu_email`);

--
-- Filtros para la tabla `tbl_interesado`
--
ALTER TABLE `tbl_interesado`
  ADD CONSTRAINT `tbl_interesado_ibfk_3` FOREIGN KEY (`id_juegos`) REFERENCES `tbl_juego` (`id_juegos`),
  ADD CONSTRAINT `tbl_interesado_ibfk_4` FOREIGN KEY (`usu_emailP`) REFERENCES `tbl_usuario` (`usu_email`),
  ADD CONSTRAINT `tbl_interesado_ibfk_5` FOREIGN KEY (`usu_emailC`) REFERENCES `tbl_usuario` (`usu_email`);

--
-- Filtros para la tabla `tbl_juego`
--
ALTER TABLE `tbl_juego`
  ADD CONSTRAINT `tbl_juego_ibfk_3` FOREIGN KEY (`id_plataforma`) REFERENCES `tbl_plataforma` (`id_plataforma`),
  ADD CONSTRAINT `tbl_juego_ibfk_4` FOREIGN KEY (`id_genero`) REFERENCES `tbl_genero` (`id_genero`),
  ADD CONSTRAINT `tbl_juego_ibfk_5` FOREIGN KEY (`usu_emailP`) REFERENCES `tbl_usuario` (`usu_email`);

--
-- Filtros para la tabla `tbl_mensajes`
--
ALTER TABLE `tbl_mensajes`
  ADD CONSTRAINT `tbl_mensajes_ibfk_1` FOREIGN KEY (`id_chat`) REFERENCES `tbl_chat` (`id_chat`),
  ADD CONSTRAINT `tbl_mensajes_ibfk_2` FOREIGN KEY (`usu_email`) REFERENCES `tbl_usuario` (`usu_email`);

--
-- Filtros para la tabla `tbl_valoracio`
--
ALTER TABLE `tbl_valoracio`
  ADD CONSTRAINT `tbl_valoracio_ibfk_1` FOREIGN KEY (`usu_emailP`) REFERENCES `tbl_usuario` (`usu_email`),
  ADD CONSTRAINT `tbl_valoracio_ibfk_2` FOREIGN KEY (`usu_emailC`) REFERENCES `tbl_usuario` (`usu_email`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
