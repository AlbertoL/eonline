-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 07-12-2014 a las 01:09:40
-- Versión del servidor: 5.5.27
-- Versión de PHP: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `eonline`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_alumno`
--

CREATE TABLE IF NOT EXISTS `tb_alumno` (
  `id_alumno` int(11) NOT NULL,
  `nombre_alum` varchar(50) NOT NULL,
  `clave_alum` varchar(12) NOT NULL,
  `telefono_alum` varchar(20) NOT NULL,
  `apellido_alum` varchar(50) NOT NULL,
  `direccion_alum` varchar(50) NOT NULL,
  `rut_alum` varchar(20) NOT NULL,
  PRIMARY KEY (`id_alumno`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_asignatura`
--

CREATE TABLE IF NOT EXISTS `tb_asignatura` (
  `id_asignatura` int(11) NOT NULL,
  `descripcion` varchar(40) NOT NULL,
  `nombre_asig` varchar(20) NOT NULL,
  PRIMARY KEY (`id_asignatura`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_asignatura_alumno`
--

CREATE TABLE IF NOT EXISTS `tb_asignatura_alumno` (
  `id_asignatura_alumno` int(11) NOT NULL,
  `id_alumno` int(11) NOT NULL,
  `id_curso_asignatura` int(11) NOT NULL,
  PRIMARY KEY (`id_asignatura_alumno`),
  KEY `id_alumno` (`id_alumno`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_asignatura_evaluacion`
--

CREATE TABLE IF NOT EXISTS `tb_asignatura_evaluacion` (
  `id_asignatura_evaluacion` int(11) NOT NULL,
  `id_evaluacion` int(11) NOT NULL,
  `id_uscur_asig` int(11) NOT NULL,
  PRIMARY KEY (`id_asignatura_evaluacion`),
  KEY `id_evaluacion` (`id_evaluacion`),
  KEY `id_uscur_asig` (`id_uscur_asig`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_a_escolar`
--

CREATE TABLE IF NOT EXISTS `tb_a_escolar` (
  `id_a_escolar` int(11) NOT NULL,
  `id_estado` int(11) NOT NULL,
  `anio` date NOT NULL,
  PRIMARY KEY (`id_a_escolar`),
  KEY `id_estado` (`id_estado`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_curso`
--

CREATE TABLE IF NOT EXISTS `tb_curso` (
  `id_curso` int(11) NOT NULL,
  `descripcion` varchar(50) NOT NULL,
  `nombre_curso` varchar(20) NOT NULL,
  PRIMARY KEY (`id_curso`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_curso_asignatura_unidad`
--

CREATE TABLE IF NOT EXISTS `tb_curso_asignatura_unidad` (
  `id_curso_asignatura_unidad` int(11) NOT NULL,
  `id_unidad` int(11) NOT NULL,
  `id_uscur_asignatura` int(11) NOT NULL,
  PRIMARY KEY (`id_curso_asignatura_unidad`),
  KEY `id_unidad` (`id_unidad`),
  KEY `id_uscur_asignatura` (`id_uscur_asignatura`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_estado`
--

CREATE TABLE IF NOT EXISTS `tb_estado` (
  `id_estado` int(11) NOT NULL,
  `descripcion` varchar(50) NOT NULL,
  PRIMARY KEY (`id_estado`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_evaluacion`
--

CREATE TABLE IF NOT EXISTS `tb_evaluacion` (
  `id_evaluacion` int(11) NOT NULL,
  `id_tipo_evaluacion` int(11) NOT NULL,
  PRIMARY KEY (`id_evaluacion`),
  KEY `id_tipo_evaluacion` (`id_tipo_evaluacion`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_evaluacion_asignatura_alumno`
--

CREATE TABLE IF NOT EXISTS `tb_evaluacion_asignatura_alumno` (
  `id_evaluacion_asignatura_alumno` int(11) NOT NULL,
  `id_asignatura_evaluacion` int(11) NOT NULL,
  `id_asignatura_alumno` int(11) NOT NULL,
  PRIMARY KEY (`id_evaluacion_asignatura_alumno`),
  KEY `id_asignatura_evaluacion` (`id_asignatura_evaluacion`),
  KEY `id_asignatura_alumno` (`id_asignatura_alumno`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_material`
--

CREATE TABLE IF NOT EXISTS `tb_material` (
  `id_material` int(11) NOT NULL,
  `id_tipo_material` int(11) NOT NULL,
  PRIMARY KEY (`id_material`),
  KEY `id_tipo_material` (`id_tipo_material`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_plan`
--

CREATE TABLE IF NOT EXISTS `tb_plan` (
  `id_plan` int(2) NOT NULL AUTO_INCREMENT,
  `nombre_plan` varchar(20) NOT NULL,
  PRIMARY KEY (`id_plan`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_tipo_evaluacion`
--

CREATE TABLE IF NOT EXISTS `tb_tipo_evaluacion` (
  `id_tipo_evaluacion` int(11) NOT NULL,
  `descripcion` varchar(50) NOT NULL,
  PRIMARY KEY (`id_tipo_evaluacion`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_tipo_material`
--

CREATE TABLE IF NOT EXISTS `tb_tipo_material` (
  `id_tipo_material` int(11) NOT NULL,
  `descripcion_material` varchar(50) NOT NULL,
  `ruta_material` varchar(200) NOT NULL,
  `url_material` varchar(200) NOT NULL,
  PRIMARY KEY (`id_tipo_material`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_tipo_usuario`
--

CREATE TABLE IF NOT EXISTS `tb_tipo_usuario` (
  `id_tipo_usuario` int(11) NOT NULL,
  `descripcion` varchar(60) NOT NULL,
  PRIMARY KEY (`id_tipo_usuario`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tb_tipo_usuario`
--

INSERT INTO `tb_tipo_usuario` (`id_tipo_usuario`, `descripcion`) VALUES
(1, 'ADMINISTRADOR'),
(2, 'CLIENTE');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_unidad`
--

CREATE TABLE IF NOT EXISTS `tb_unidad` (
  `id_unidad` int(11) NOT NULL,
  `descripcion` varchar(50) NOT NULL,
  PRIMARY KEY (`id_unidad`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_unidad_material`
--

CREATE TABLE IF NOT EXISTS `tb_unidad_material` (
  `id_unidad_material` int(11) NOT NULL,
  `id_material` int(11) NOT NULL,
  `id_curso_asignatura_unidad` int(11) NOT NULL,
  PRIMARY KEY (`id_unidad_material`),
  KEY `id_material` (`id_material`),
  KEY `id_curso_asignatura_unidad` (`id_curso_asignatura_unidad`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_usuario`
--

CREATE TABLE IF NOT EXISTS `tb_usuario` (
  `id_usuario` int(11) NOT NULL AUTO_INCREMENT,
  `id_tipo_usuario` int(11) NOT NULL,
  `rut_usu` varchar(20) NOT NULL,
  `clave_usu` varchar(12) NOT NULL,
  `apellido_usu` varchar(50) NOT NULL,
  `direccion_usu` varchar(50) NOT NULL,
  `telefono_usu` varchar(25) NOT NULL,
  `email_usu` varchar(55) NOT NULL,
  `nombre_usu` varchar(50) NOT NULL,
  PRIMARY KEY (`id_usuario`),
  KEY `id_tipo_usuario` (`id_tipo_usuario`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_usuario_asignatura`
--

CREATE TABLE IF NOT EXISTS `tb_usuario_asignatura` (
  `id_usuario_asignatura` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `id_asignatura` int(11) NOT NULL,
  `id_a_escolar` int(11) NOT NULL,
  PRIMARY KEY (`id_usuario_asignatura`),
  KEY `id_usuario` (`id_usuario`),
  KEY `id_asignatura` (`id_asignatura`),
  KEY `id_a_escolar` (`id_a_escolar`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_usuario_curso`
--

CREATE TABLE IF NOT EXISTS `tb_usuario_curso` (
  `id_usuario_curso` int(11) NOT NULL,
  `id_curso` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `id_a_escolar` int(11) NOT NULL,
  PRIMARY KEY (`id_usuario_curso`),
  KEY `id_curso` (`id_curso`),
  KEY `id_usuario` (`id_usuario`),
  KEY `id_a_escolar` (`id_a_escolar`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_usuaro_curso_asignatura`
--

CREATE TABLE IF NOT EXISTS `tb_usuaro_curso_asignatura` (
  `id_usuario_curso_asignatura` int(11) NOT NULL,
  `id_usuario_curso` int(11) NOT NULL,
  `id_usuario_asignatura` int(11) NOT NULL,
  PRIMARY KEY (`id_usuario_curso_asignatura`),
  KEY `id_usuario_curso` (`id_usuario_curso`),
  KEY `id_usuario_asignatura` (`id_usuario_asignatura`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `tb_asignatura_alumno`
--
ALTER TABLE `tb_asignatura_alumno`
  ADD CONSTRAINT `tb_asignatura_alumno_ibfk_1` FOREIGN KEY (`id_alumno`) REFERENCES `tb_alumno` (`id_alumno`);

--
-- Filtros para la tabla `tb_asignatura_evaluacion`
--
ALTER TABLE `tb_asignatura_evaluacion`
  ADD CONSTRAINT `tb_asignatura_evaluacion_ibfk_1` FOREIGN KEY (`id_evaluacion`) REFERENCES `tb_evaluacion` (`id_evaluacion`),
  ADD CONSTRAINT `tb_asignatura_evaluacion_ibfk_2` FOREIGN KEY (`id_uscur_asig`) REFERENCES `tb_usuaro_curso_asignatura` (`id_usuario_curso_asignatura`);

--
-- Filtros para la tabla `tb_a_escolar`
--
ALTER TABLE `tb_a_escolar`
  ADD CONSTRAINT `tb_a_escolar_ibfk_1` FOREIGN KEY (`id_estado`) REFERENCES `tb_estado` (`id_estado`);

--
-- Filtros para la tabla `tb_curso_asignatura_unidad`
--
ALTER TABLE `tb_curso_asignatura_unidad`
  ADD CONSTRAINT `tb_curso_asignatura_unidad_ibfk_1` FOREIGN KEY (`id_unidad`) REFERENCES `tb_unidad` (`id_unidad`),
  ADD CONSTRAINT `tb_curso_asignatura_unidad_ibfk_2` FOREIGN KEY (`id_uscur_asignatura`) REFERENCES `tb_usuaro_curso_asignatura` (`id_usuario_curso_asignatura`);

--
-- Filtros para la tabla `tb_evaluacion`
--
ALTER TABLE `tb_evaluacion`
  ADD CONSTRAINT `tb_evaluacion_ibfk_1` FOREIGN KEY (`id_tipo_evaluacion`) REFERENCES `tb_tipo_evaluacion` (`id_tipo_evaluacion`);

--
-- Filtros para la tabla `tb_evaluacion_asignatura_alumno`
--
ALTER TABLE `tb_evaluacion_asignatura_alumno`
  ADD CONSTRAINT `tb_evaluacion_asignatura_alumno_ibfk_1` FOREIGN KEY (`id_asignatura_evaluacion`) REFERENCES `tb_asignatura_evaluacion` (`id_asignatura_evaluacion`),
  ADD CONSTRAINT `tb_evaluacion_asignatura_alumno_ibfk_2` FOREIGN KEY (`id_asignatura_alumno`) REFERENCES `tb_asignatura_alumno` (`id_asignatura_alumno`);

--
-- Filtros para la tabla `tb_material`
--
ALTER TABLE `tb_material`
  ADD CONSTRAINT `tb_material_ibfk_1` FOREIGN KEY (`id_tipo_material`) REFERENCES `tb_tipo_material` (`id_tipo_material`);

--
-- Filtros para la tabla `tb_unidad_material`
--
ALTER TABLE `tb_unidad_material`
  ADD CONSTRAINT `tb_unidad_material_ibfk_1` FOREIGN KEY (`id_material`) REFERENCES `tb_material` (`id_material`),
  ADD CONSTRAINT `tb_unidad_material_ibfk_2` FOREIGN KEY (`id_curso_asignatura_unidad`) REFERENCES `tb_curso_asignatura_unidad` (`id_curso_asignatura_unidad`);

--
-- Filtros para la tabla `tb_usuario`
--
ALTER TABLE `tb_usuario`
  ADD CONSTRAINT `tb_usuario_ibfk_1` FOREIGN KEY (`id_tipo_usuario`) REFERENCES `tb_tipo_usuario` (`id_tipo_usuario`);

--
-- Filtros para la tabla `tb_usuario_asignatura`
--
ALTER TABLE `tb_usuario_asignatura`
  ADD CONSTRAINT `tb_usuario_asignatura_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `tb_usuario` (`id_usuario`),
  ADD CONSTRAINT `tb_usuario_asignatura_ibfk_2` FOREIGN KEY (`id_asignatura`) REFERENCES `tb_asignatura` (`id_asignatura`),
  ADD CONSTRAINT `tb_usuario_asignatura_ibfk_3` FOREIGN KEY (`id_a_escolar`) REFERENCES `tb_a_escolar` (`id_a_escolar`);

--
-- Filtros para la tabla `tb_usuario_curso`
--
ALTER TABLE `tb_usuario_curso`
  ADD CONSTRAINT `tb_usuario_curso_ibfk_1` FOREIGN KEY (`id_curso`) REFERENCES `tb_curso` (`id_curso`),
  ADD CONSTRAINT `tb_usuario_curso_ibfk_2` FOREIGN KEY (`id_usuario`) REFERENCES `tb_usuario` (`id_usuario`),
  ADD CONSTRAINT `tb_usuario_curso_ibfk_3` FOREIGN KEY (`id_a_escolar`) REFERENCES `tb_a_escolar` (`id_a_escolar`);

--
-- Filtros para la tabla `tb_usuaro_curso_asignatura`
--
ALTER TABLE `tb_usuaro_curso_asignatura`
  ADD CONSTRAINT `tb_usuaro_curso_asignatura_ibfk_1` FOREIGN KEY (`id_usuario_curso`) REFERENCES `tb_usuario_curso` (`id_usuario_curso`),
  ADD CONSTRAINT `tb_usuaro_curso_asignatura_ibfk_2` FOREIGN KEY (`id_usuario_asignatura`) REFERENCES `tb_usuario_asignatura` (`id_usuario_asignatura`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
