-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 06-11-2020 a las 03:44:26
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.3.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `ttecnica`
--
CREATE DATABASE IF NOT EXISTS `ttecnica` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `ttecnica`;

DELIMITER $$
--
-- Procedimientos
--
DROP PROCEDURE IF EXISTS `sp_actualizar_usuario`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_actualizar_usuario` (IN `usu` VARCHAR(30), IN `nom` VARCHAR(30), IN `ap` VARCHAR(30), IN `am` VARCHAR(30), IN `ps` VARCHAR(30), IN `idu` INT(30))  NO SQL
BEGIN
UPDATE usuarios SET 
usuario=usu,
nombre=nom,
apellido_paterno=ap,
apellido_materno=am,
password=ps 
WHERE id =idu;
END$$

DROP PROCEDURE IF EXISTS `sp_consultar_usuario`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_consultar_usuario` (IN `usu` VARCHAR(30), IN `pw` VARCHAR(30))  NO SQL
BEGIN

select usuario from usuarios where usuario = usu and password = pw;


END$$

DROP PROCEDURE IF EXISTS `sp_editar_usuario`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_editar_usuario` (IN `id_us` INT)  NO SQL
BEGIN
select * from usuarios where Id=id_us;
END$$

DROP PROCEDURE IF EXISTS `sp_eliminar_usuario`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_eliminar_usuario` (IN `id_us` INT(10))  NO SQL
BEGIN
delete from usuarios where id=id_us;
END$$

DROP PROCEDURE IF EXISTS `sp_nuevo_usuario`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_nuevo_usuario` (IN `usuario` VARCHAR(20), IN `nombre` VARCHAR(30), IN `apellido_paterno` VARCHAR(40), IN `apellido_materno` VARCHAR(40), IN `password` VARCHAR(30))  NO SQL
BEGIN

INSERT INTO `usuarios`(`usuario`, `nombre`, `apellido_paterno`, `apellido_materno`, `password`) VALUES (usuario,nombre,apellido_paterno,apellido_materno,password);

END$$

DROP PROCEDURE IF EXISTS `sp_traer_todos_usuarios`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_traer_todos_usuarios` ()  NO SQL
BEGIN
select * from usuarios;
END$$

DROP PROCEDURE IF EXISTS `sp_validar_usuario`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_validar_usuario` (IN `id_us` VARCHAR(30))  NO SQL
BEGIN
SELECT COUNT(*) as cant
FROM usuarios
WHERE usuario=id_us;
END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `usuario` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `nombre` varchar(60) COLLATE utf8_spanish_ci NOT NULL,
  `apellido_paterno` varchar(60) COLLATE utf8_spanish_ci NOT NULL,
  `apellido_materno` varchar(60) COLLATE utf8_spanish_ci NOT NULL,
  `password` varchar(30) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `usuario`, `nombre`, `apellido_paterno`, `apellido_materno`, `password`) VALUES
(28, 'ptecnica', 'JUAN', 'MANOSALVA2', 'RETAMAL', 'prueba123');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
