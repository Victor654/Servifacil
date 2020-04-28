-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 28-04-2020 a las 21:21:38
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.2.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `traza2019`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cargo`
--

CREATE TABLE `cargo` (
  `Id_Cargo` int(11) NOT NULL,
  `Cargo` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `cargo`
--

INSERT INTO `cargo` (`Id_Cargo`, `Cargo`) VALUES
(1, 'Administrador'),
(2, 'Jefe De produccion'),
(3, 'Operario');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE `cliente` (
  `Id_Cliente` int(15) NOT NULL,
  `Nombre` varchar(45) DEFAULT NULL,
  `Nombre_contacto` varchar(20) NOT NULL,
  `Numero_contacto` varchar(30) NOT NULL,
  `Direccion` varchar(45) DEFAULT NULL,
  `Correo` varchar(45) DEFAULT NULL,
  `Tel` int(15) DEFAULT NULL,
  `Id_Tipo_Id` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`Id_Cliente`, `Nombre`, `Nombre_contacto`, `Numero_contacto`, `Direccion`, `Correo`, `Tel`, `Id_Tipo_Id`) VALUES
(18923, 'yiset', 'yiset', '1234567', 'cr 45 ', 'yiset@gmail.com', 213456, 1),
(122323, 'victor manuel', 'VICTOR', '1234556', 'cr 345 #2345', 'naranjohoyosvictormanuel@gmail.com', 2345567, 2),
(1007311489, 'Mariana', 'Mariana', '234566', 'cr 23', 'mariana@gmail.com', 2345567, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_fase`
--

CREATE TABLE `detalle_fase` (
  `Id_Detalle_Fase` int(11) NOT NULL,
  `Id_Pieza` int(11) NOT NULL,
  `Id_Fase` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `detalle_fase`
--

INSERT INTO `detalle_fase` (`Id_Detalle_Fase`, `Id_Pieza`, `Id_Fase`) VALUES
(0, 2, 8),
(0, 2, 10),
(0, 2, 13),
(3, 2, 2),
(4, 2, 12),
(5, 2, 2),
(6, 2, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_op`
--

CREATE TABLE `detalle_op` (
  `Id_Detalle_Op` int(11) NOT NULL,
  `Id_Orden_Produccion` int(11) NOT NULL,
  `Id_Cliente` int(11) NOT NULL,
  `Id_Producto` int(11) NOT NULL,
  `observaciones` varchar(50) NOT NULL,
  `Cantidad` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `detalle_op`
--

INSERT INTO `detalle_op` (`Id_Detalle_Op`, `Id_Orden_Produccion`, `Id_Cliente`, `Id_Producto`, `observaciones`, `Cantidad`) VALUES
(1, 1, 1007311489, 3, 'se solicita para mañana', 12),
(2, 2, 122323, 4, 'PARA MAÑANA', 123);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estado`
--

CREATE TABLE `estado` (
  `Id_Estado` int(11) NOT NULL,
  `Estado` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `estado`
--

INSERT INTO `estado` (`Id_Estado`, `Estado`) VALUES
(1, 'Activo'),
(2, 'Inactivo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estado_op`
--

CREATE TABLE `estado_op` (
  `Id_Estado_Op` int(11) NOT NULL,
  `Estado` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `estado_op`
--

INSERT INTO `estado_op` (`Id_Estado_Op`, `Estado`) VALUES
(1, 'Programada'),
(2, 'En proceso'),
(3, 'Terminada'),
(4, 'Cancelada');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fase`
--

CREATE TABLE `fase` (
  `Id_Fase` int(11) NOT NULL,
  `Fase` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `fase`
--

INSERT INTO `fase` (`Id_Fase`, `Fase`) VALUES
(1, 'Recolección de piezas'),
(2, 'Cortar'),
(3, 'Doblar'),
(4, 'Soldar'),
(5, 'Pulir'),
(6, 'Carpinteria'),
(7, 'Acolchado'),
(8, 'Tapizado'),
(9, 'Pintura'),
(10, 'Electricidad'),
(11, 'Ensamble'),
(12, 'Empacar'),
(13, 'Perforar');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ficha_tecnica`
--

CREATE TABLE `ficha_tecnica` (
  `Id_Ficha_Tecnica` int(11) NOT NULL,
  `Id_Producto` int(11) NOT NULL,
  `Id_Detalle_Fase` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `ficha_tecnica`
--

INSERT INTO `ficha_tecnica` (`Id_Ficha_Tecnica`, `Id_Producto`, `Id_Detalle_Fase`) VALUES
(3, 3, 3),
(4, 4, 4),
(5, 5, 5),
(6, 6, 6);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `operario`
--

CREATE TABLE `operario` (
  `Id_Operario` int(11) NOT NULL,
  `Nombre` varchar(45) DEFAULT NULL,
  `Correo` varchar(45) DEFAULT NULL,
  `Id_Estado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `operario`
--

INSERT INTO `operario` (`Id_Operario`, `Nombre`, `Correo`, `Id_Estado`) VALUES
(1007311489, 'victor manuel', 'victor_naranjo23191@elpoli.edu.co', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `orden_produccion`
--

CREATE TABLE `orden_produccion` (
  `Id_Orden_Produccion` int(11) NOT NULL,
  `Fecha_Pedido` varchar(12) DEFAULT NULL,
  `Id_Estado_Op` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `orden_produccion`
--

INSERT INTO `orden_produccion` (`Id_Orden_Produccion`, `Fecha_Pedido`, `Id_Estado_Op`) VALUES
(1, '2020-03-24', 1),
(2, '2020-04-02', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pieza`
--

CREATE TABLE `pieza` (
  `Id_Pieza` int(11) NOT NULL,
  `Pieza` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `pieza`
--

INSERT INTO `pieza` (`Id_Pieza`, `Pieza`) VALUES
(2, 'paso inferior'),
(3, 'paso superior'),
(4, 'lateral');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `Id_Producto` int(11) NOT NULL,
  `Referencia` varchar(20) NOT NULL,
  `Producto` varchar(45) DEFAULT NULL,
  `Descripcion` varchar(45) DEFAULT NULL,
  `Id_Tipo_Producto` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`Id_Producto`, `Referencia`, `Producto`, `Descripcion`, `Id_Tipo_Producto`) VALUES
(3, 'edp0102', 'escala de dos pasos', 'escalerilla para pacientes', 1),
(4, 'tornillo2345', 'tornillox100', 'viene por caja de 100 unidades', 3),
(5, 'tornillo2345', 'tornillox100', 'viene por caja de 100 unidades', 3),
(6, 'tornillo2345', 'tornillox100', 'viene por caja de 100 unidades', 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tarea`
--

CREATE TABLE `tarea` (
  `Id_Tarea` int(11) NOT NULL,
  `Id_Orden_Produccion` int(11) NOT NULL,
  `Id_Operario` int(11) NOT NULL,
  `Id_Producto` int(11) NOT NULL,
  `Fecha_tarea` date DEFAULT NULL,
  `Tarea` varchar(45) DEFAULT NULL,
  `Estado_Tarea` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tarea`
--

INSERT INTO `tarea` (`Id_Tarea`, `Id_Orden_Produccion`, `Id_Operario`, `Id_Producto`, `Fecha_tarea`, `Tarea`, `Estado_Tarea`) VALUES
(1, 1, 1007311489, 3, '2020-03-25', 'Despachar', 2);

--
-- Disparadores `tarea`
--
DELIMITER $$
CREATE TRIGGER `estado_op` AFTER INSERT ON `tarea` FOR EACH ROW UPDATE orden_produccion SET Id_Estado_Op=2 WHERE Id_Orden_Produccion= NEW.Id_Orden_Produccion
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_id`
--

CREATE TABLE `tipo_id` (
  `Id_Tipo_Id` int(11) NOT NULL,
  `Tipo_Id` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tipo_id`
--

INSERT INTO `tipo_id` (`Id_Tipo_Id`, `Tipo_Id`) VALUES
(1, 'Cedula'),
(2, 'NIT');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_producto`
--

CREATE TABLE `tipo_producto` (
  `Id_Tipo_Producto` int(11) NOT NULL,
  `Tipo_Producto` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tipo_producto`
--

INSERT INTO `tipo_producto` (`Id_Tipo_Producto`, `Tipo_Producto`) VALUES
(1, 'Escalera'),
(2, 'Sillas'),
(3, 'Tornillos'),
(4, 'arena'),
(5, 'cemento'),
(6, 'Tornillos');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `Id_Usuario` int(11) NOT NULL,
  `Nombre` varchar(45) DEFAULT NULL,
  `Clave` varchar(45) DEFAULT NULL,
  `Correo` varchar(45) DEFAULT NULL,
  `Id_Estado` int(11) NOT NULL,
  `Id_Cargo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`Id_Usuario`, `Nombre`, `Clave`, `Correo`, `Id_Estado`, `Id_Cargo`) VALUES
(1357, 'Mateo Sepulveda', '123', 'teo@gmail.com', 2, 2),
(123456, 'Yisset ', '123', 'yiset@gmail.com', 1, 1),
(1007311489, 'Victor Manuel', '1567', 'naranjohoyosvictormanuel@gmail.com', 1, 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cargo`
--
ALTER TABLE `cargo`
  ADD PRIMARY KEY (`Id_Cargo`);

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`Id_Cliente`),
  ADD KEY `fk_Cliente_Tipo_Id1_idx` (`Id_Tipo_Id`);

--
-- Indices de la tabla `detalle_fase`
--
ALTER TABLE `detalle_fase`
  ADD PRIMARY KEY (`Id_Detalle_Fase`,`Id_Fase`,`Id_Pieza`),
  ADD KEY `fk_Fase_has_Pieza_Pieza1_idx` (`Id_Pieza`),
  ADD KEY `fk_Fase_has_Pieza_Fase1_idx` (`Id_Fase`);

--
-- Indices de la tabla `detalle_op`
--
ALTER TABLE `detalle_op`
  ADD PRIMARY KEY (`Id_Detalle_Op`),
  ADD KEY `fk_Orden_Produccion_has_Producto_Producto1_idx` (`Id_Producto`),
  ADD KEY `fk_Orden_Produccion_has_Producto_Orden_Produccion1_idx` (`Id_Orden_Produccion`),
  ADD KEY `fk_Detalle_Op_Cliente1_idx` (`Id_Cliente`),
  ADD KEY `Id_Producto` (`Id_Producto`);

--
-- Indices de la tabla `estado`
--
ALTER TABLE `estado`
  ADD PRIMARY KEY (`Id_Estado`);

--
-- Indices de la tabla `estado_op`
--
ALTER TABLE `estado_op`
  ADD PRIMARY KEY (`Id_Estado_Op`);

--
-- Indices de la tabla `fase`
--
ALTER TABLE `fase`
  ADD PRIMARY KEY (`Id_Fase`);

--
-- Indices de la tabla `ficha_tecnica`
--
ALTER TABLE `ficha_tecnica`
  ADD PRIMARY KEY (`Id_Ficha_Tecnica`),
  ADD KEY `fk_Ficha_Tecnica_Producto1_idx` (`Id_Producto`),
  ADD KEY `fk_Ficha_Tecnica_Fase_has_Pieza1_idx` (`Id_Detalle_Fase`);

--
-- Indices de la tabla `operario`
--
ALTER TABLE `operario`
  ADD PRIMARY KEY (`Id_Operario`),
  ADD KEY `fk_Operario_Estado1_idx` (`Id_Estado`);

--
-- Indices de la tabla `orden_produccion`
--
ALTER TABLE `orden_produccion`
  ADD PRIMARY KEY (`Id_Orden_Produccion`),
  ADD KEY `fk_Orden_Produccion_Estado_Op1_idx` (`Id_Estado_Op`);

--
-- Indices de la tabla `pieza`
--
ALTER TABLE `pieza`
  ADD PRIMARY KEY (`Id_Pieza`);

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`Id_Producto`),
  ADD KEY `fk_Producto_Tipo_Producto1_idx` (`Id_Tipo_Producto`);

--
-- Indices de la tabla `tarea`
--
ALTER TABLE `tarea`
  ADD PRIMARY KEY (`Id_Tarea`) USING BTREE,
  ADD KEY `fk_Orden_Produccion_has_Operario_Operario1_idx` (`Id_Operario`),
  ADD KEY `fk_Orden_Produccion_has_Operario_Orden_Produccion1_idx` (`Id_Orden_Produccion`),
  ADD KEY `Id_Producto` (`Id_Producto`),
  ADD KEY `Estado_Tarea` (`Estado_Tarea`);

--
-- Indices de la tabla `tipo_id`
--
ALTER TABLE `tipo_id`
  ADD PRIMARY KEY (`Id_Tipo_Id`);

--
-- Indices de la tabla `tipo_producto`
--
ALTER TABLE `tipo_producto`
  ADD PRIMARY KEY (`Id_Tipo_Producto`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`Id_Usuario`),
  ADD KEY `fk_Usario_Estado_idx` (`Id_Estado`),
  ADD KEY `fk_Usario_Cargo1_idx` (`Id_Cargo`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `detalle_op`
--
ALTER TABLE `detalle_op`
  MODIFY `Id_Detalle_Op` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `pieza`
--
ALTER TABLE `pieza`
  MODIFY `Id_Pieza` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `producto`
--
ALTER TABLE `producto`
  MODIFY `Id_Producto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `tarea`
--
ALTER TABLE `tarea`
  MODIFY `Id_Tarea` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `tipo_producto`
--
ALTER TABLE `tipo_producto`
  MODIFY `Id_Tipo_Producto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD CONSTRAINT `fk_Cliente_Tipo_Id1` FOREIGN KEY (`Id_Tipo_Id`) REFERENCES `tipo_id` (`Id_Tipo_Id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `detalle_fase`
--
ALTER TABLE `detalle_fase`
  ADD CONSTRAINT `detalle_fase_ibfk_1` FOREIGN KEY (`Id_Pieza`) REFERENCES `pieza` (`Id_Pieza`),
  ADD CONSTRAINT `fk_Fase_has_Pieza_Fase1` FOREIGN KEY (`Id_Fase`) REFERENCES `fase` (`Id_Fase`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `detalle_op`
--
ALTER TABLE `detalle_op`
  ADD CONSTRAINT `detalle_op_ibfk_1` FOREIGN KEY (`Id_Producto`) REFERENCES `producto` (`Id_Producto`),
  ADD CONSTRAINT `fk_Detalle_Op_Cliente1` FOREIGN KEY (`Id_Cliente`) REFERENCES `cliente` (`Id_Cliente`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Orden_Produccion_has_Producto_Orden_Produccion1` FOREIGN KEY (`Id_Orden_Produccion`) REFERENCES `orden_produccion` (`Id_Orden_Produccion`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `ficha_tecnica`
--
ALTER TABLE `ficha_tecnica`
  ADD CONSTRAINT `ficha_tecnica_ibfk_1` FOREIGN KEY (`Id_Producto`) REFERENCES `producto` (`Id_Producto`),
  ADD CONSTRAINT `fk_Ficha_Tecnica_Fase_has_Pieza1` FOREIGN KEY (`Id_Detalle_Fase`) REFERENCES `detalle_fase` (`Id_Detalle_Fase`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `operario`
--
ALTER TABLE `operario`
  ADD CONSTRAINT `fk_Operario_Estado1` FOREIGN KEY (`Id_Estado`) REFERENCES `estado` (`Id_Estado`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `orden_produccion`
--
ALTER TABLE `orden_produccion`
  ADD CONSTRAINT `fk_Orden_Produccion_Estado_Op1` FOREIGN KEY (`Id_Estado_Op`) REFERENCES `estado_op` (`Id_Estado_Op`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `producto`
--
ALTER TABLE `producto`
  ADD CONSTRAINT `producto_ibfk_1` FOREIGN KEY (`Id_Tipo_Producto`) REFERENCES `tipo_producto` (`Id_Tipo_Producto`);

--
-- Filtros para la tabla `tarea`
--
ALTER TABLE `tarea`
  ADD CONSTRAINT `fk_Orden_Produccion_has_Operario_Operario1` FOREIGN KEY (`Id_Operario`) REFERENCES `operario` (`Id_Operario`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `tarea_ibfk_1` FOREIGN KEY (`Id_Producto`) REFERENCES `detalle_op` (`Id_Producto`),
  ADD CONSTRAINT `tarea_ibfk_2` FOREIGN KEY (`Id_Orden_Produccion`) REFERENCES `detalle_op` (`Id_Orden_Produccion`),
  ADD CONSTRAINT `tarea_ibfk_3` FOREIGN KEY (`Estado_Tarea`) REFERENCES `estado` (`Id_Estado`);

--
-- Filtros para la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `fk_Usario_Cargo1` FOREIGN KEY (`Id_Cargo`) REFERENCES `cargo` (`Id_Cargo`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Usario_Estado` FOREIGN KEY (`Id_Estado`) REFERENCES `estado` (`Id_Estado`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
