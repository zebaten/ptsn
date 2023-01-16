-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 16-01-2023 a las 16:58:10
-- Versión del servidor: 8.0.31
-- Versión de PHP: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `ptsnbd`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Casa`
--

CREATE TABLE `Casa` (
  `Casa_Id` int NOT NULL,
  `Casa_Numero` int DEFAULT NULL,
  `Casa_Calle` varchar(200) DEFAULT NULL,
  `Usuario_Id` int DEFAULT NULL,
  `Comuna_Id` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `Casa`
--

INSERT INTO `Casa` (`Casa_Id`, `Casa_Numero`, `Casa_Calle`, `Usuario_Id`, `Comuna_Id`) VALUES
(1, 555, 'Los monitos', 3, 1101),
(2, 123, 'uhuhuh', 5, 4103),
(5, 1, 'CitecUBB', 10, 8101);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Comuna`
--

CREATE TABLE `Comuna` (
  `Comuna_Id` int NOT NULL,
  `Comuna_Nombre` varchar(200) DEFAULT NULL,
  `Region_Id` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `Comuna`
--

INSERT INTO `Comuna` (`Comuna_Id`, `Comuna_Nombre`, `Region_Id`) VALUES
(1101, 'IQUIQUE', 1),
(1107, 'ALTO HOSPICIO', 1),
(1401, 'POZO ALMONTE', 1),
(1402, 'CAMIÑA', 1),
(1403, 'COLCHANE', 1),
(1404, 'HUARA', 1),
(1405, 'PICA', 1),
(2101, 'ANTOFAGASTA', 2),
(2102, 'MEJILLONES', 2),
(2103, 'SIERRA GORDA', 2),
(2104, 'TALTAL', 2),
(2201, 'CALAMA', 2),
(2202, 'OLLAGÜE', 2),
(2203, 'SAN PEDRO DE ATACAMA', 2),
(2301, 'TOCOPILLA', 2),
(2302, 'MARÍA ELENA', 2),
(3101, 'COPIAPÓ', 3),
(3102, 'CALDERA', 3),
(3103, 'TIERRA AMARILLA', 3),
(3201, 'CHAÑARAL', 3),
(3202, 'DIEGO DE ALMAGRO', 3),
(3301, 'VALLENAR', 3),
(3302, 'ALTO DEL CARMEN', 3),
(3303, 'FREIRINA', 3),
(3304, 'HUASCO', 3),
(4101, 'LA SERENA', 4),
(4102, 'COQUIMBO', 4),
(4103, 'ANDACOLLO', 4),
(4104, 'LA HIGUERA', 4),
(4105, 'PAIGUANO', 4),
(4106, 'VICUÑA', 4),
(4201, 'ILLAPEL', 4),
(4202, 'CANELA', 4),
(4203, 'LOS VILOS', 4),
(4204, 'SALAMANCA', 4),
(4301, 'OVALLE', 4),
(4302, 'COMBARBALÁ', 4),
(4303, 'MONTE PATRIA', 4),
(4304, 'PUNITAQUI', 4),
(4305, 'RÍO HURTADO', 4),
(5101, 'VALPARAÍSO', 5),
(5102, 'CASABLANCA', 5),
(5103, 'CONCÓN', 5),
(5104, 'JUAN FERNÁNDEZ', 5),
(5105, 'PUCHUNCAVÍ', 5),
(5107, 'QUINTERO', 5),
(5109, 'VIÑA DEL MAR', 5),
(5201, 'ISLA DE PASCUA', 5),
(5301, 'LOS ANDES', 5),
(5302, 'CALLE LARGA', 5),
(5303, 'RINCONADA', 5),
(5304, 'SAN ESTEBAN', 5),
(5401, 'LA LIGUA', 5),
(5402, 'CABILDO', 5),
(5403, 'PAPUDO', 5),
(5404, 'PETORCA', 5),
(5405, 'ZAPALLAR', 5),
(5501, 'QUILLOTA', 5),
(5502, 'CALERA', 5),
(5503, 'HIJUELAS', 5),
(5504, 'LA CRUZ', 5),
(5506, 'NOGALES', 5),
(5601, 'SAN ANTONIO', 5),
(5602, 'ALGARROBO', 5),
(5603, 'CARTAGENA', 5),
(5604, 'EL QUISCO', 5),
(5605, 'EL TABO', 5),
(5606, 'SANTO DOMINGO', 5),
(5701, 'SAN FELIPE', 5),
(5702, 'CATEMU', 5),
(5703, 'LLAILLAY', 5),
(5704, 'PANQUEHUE', 5),
(5705, 'PUTAENDO', 5),
(5706, 'SANTA MARÍA', 5),
(5801, 'QUILPUÉ', 5),
(5802, 'LIMACHE', 5),
(5803, 'OLMUÉ', 5),
(5804, 'VILLA ALEMANA', 5),
(6101, 'RANCAGUA', 6),
(6102, 'CODEGUA', 6),
(6103, 'COINCO', 6),
(6104, 'COLTAUCO', 6),
(6105, 'DOÑIHUE', 6),
(6106, 'GRANEROS', 6),
(6107, 'LAS CABRAS', 6),
(6108, 'MACHALÍ', 6),
(6109, 'MALLOA', 6),
(6110, 'MOSTAZAL', 6),
(6111, 'OLIVAR', 6),
(6112, 'PEUMO', 6),
(6113, 'PICHIDEGUA', 6),
(6114, 'QUINTA DE TILCOCO', 6),
(6115, 'RENGO', 6),
(6116, 'REQUÍNOA', 6),
(6117, 'SAN VICENTE', 6),
(6201, 'PICHILEMU', 6),
(6202, 'LA ESTRELLA', 6),
(6203, 'LITUECHE', 6),
(6204, 'MARCHIHUE', 6),
(6205, 'NAVIDAD', 6),
(6206, 'PAREDONES', 6),
(6301, 'SAN FERNANDO', 6),
(6302, 'CHÉPICA', 6),
(6303, 'CHIMBARONGO', 6),
(6304, 'LOLOL', 6),
(6305, 'NANCAGUA', 6),
(6306, 'PALMILLA', 6),
(6307, 'PERALILLO', 6),
(6308, 'PLACILLA', 6),
(6309, 'PUMANQUE', 6),
(6310, 'SANTA CRUZ', 6),
(7101, 'TALCA', 7),
(7102, 'CONSTITUCIÓN', 7),
(7103, 'CUREPTO', 7),
(7104, 'EMPEDRADO', 7),
(7105, 'MAULE', 7),
(7106, 'PELARCO', 7),
(7107, 'PENCAHUE', 7),
(7108, 'RÍO CLARO', 7),
(7109, 'SAN CLEMENTE', 7),
(7110, 'SAN RAFAEL', 7),
(7201, 'CAUQUENES', 7),
(7202, 'CHANCO', 7),
(7203, 'PELLUHUE', 7),
(7301, 'CURICÓ', 7),
(7302, 'HUALAÑÉ', 7),
(7303, 'LICANTÉN', 7),
(7304, 'MOLINA', 7),
(7305, 'RAUCO', 7),
(7306, 'ROMERAL', 7),
(7307, 'SAGRADA FAMILIA', 7),
(7308, 'TENO', 7),
(7309, 'VICHUQUÉN', 7),
(7401, 'LINARES', 7),
(7402, 'COLBÚN', 7),
(7403, 'LONGAVÍ', 7),
(7404, 'PARRAL', 7),
(7405, 'RETIRO', 7),
(7406, 'SAN JAVIER', 7),
(7407, 'VILLA ALEGRE', 7),
(7408, 'YERBAS BUENAS', 7),
(8101, 'CONCEPCIÓN', 8),
(8102, 'CORONEL', 8),
(8103, 'CHIGUAYANTE', 8),
(8104, 'FLORIDA', 8),
(8105, 'HUALQUI', 8),
(8106, 'LOTA', 8),
(8107, 'PENCO', 8),
(8108, 'SAN PEDRO DE LA PAZ', 8),
(8109, 'SANTA JUANA', 8),
(8110, 'TALCAHUANO', 8),
(8111, 'TOMÉ', 8),
(8112, 'HUALPÉN', 8),
(8201, 'LEBU', 8),
(8202, 'ARAUCO', 8),
(8203, 'CAÑETE', 8),
(8204, 'CONTULMO', 8),
(8205, 'CURANILAHUE', 8),
(8206, 'LOS ÁLAMOS', 8),
(8207, 'TIRÚA', 8),
(8301, 'LOS ÁNGELES', 8),
(8302, 'ANTUCO', 8),
(8303, 'CABRERO', 8),
(8304, 'LAJA', 8),
(8305, 'MULCHÉN', 8),
(8306, 'NACIMIENTO', 8),
(8307, 'NEGRETE', 8),
(8308, 'QUILACO', 8),
(8309, 'QUILLECO', 8),
(8310, 'SAN ROSENDO', 8),
(8311, 'SANTA BÁRBARA', 8),
(8312, 'TUCAPEL', 8),
(8313, 'YUMBEL', 8),
(8314, 'ALTO BIOBÍO', 8),
(8401, 'CHILLÁN', 16),
(8402, 'BULNES', 16),
(8403, 'COBQUECURA', 16),
(8404, 'COELEMU', 16),
(8405, 'COIHUECO', 16),
(8406, 'CHILLÁN VIEJO', 16),
(8407, 'EL CARMEN', 16),
(8408, 'NINHUE', 16),
(8409, 'ÑIQUÉN', 16),
(8410, 'PEMUCO', 16),
(8411, 'PINTO', 16),
(8412, 'PORTEZUELO', 16),
(8413, 'QUILLÓN', 16),
(8414, 'QUIRIHUE', 16),
(8415, 'RÁNQUIL', 16),
(8416, 'SAN CARLOS', 16),
(8417, 'SAN FABIÁN', 16),
(8418, 'SAN IGNACIO', 16),
(8419, 'SAN NICOLÁS', 16),
(8420, 'TREGUACO', 16),
(8421, 'YUNGAY', 16),
(9101, 'TEMUCO', 9),
(9102, 'CARAHUE', 9),
(9103, 'CUNCO', 9),
(9104, 'CURARREHUE', 9),
(9105, 'FREIRE', 9),
(9106, 'GALVARINO', 9),
(9107, 'GORBEA', 9),
(9108, 'LAUTARO', 9),
(9109, 'LONCOCHE', 9),
(9110, 'MELIPEUCO', 9),
(9111, 'NUEVA IMPERIAL', 9),
(9112, 'PADRE LAS CASAS', 9),
(9113, 'PERQUENCO', 9),
(9114, 'PITRUFQUÉN', 9),
(9115, 'PUCÓN', 9),
(9116, 'SAAVEDRA', 9),
(9117, 'TEODORO SCHMIDT', 9),
(9118, 'TOLTÉN', 9),
(9119, 'VILCÚN', 9),
(9120, 'VILLARRICA', 9),
(9121, 'CHOLCHOL', 9),
(9201, 'ANGOL', 9),
(9202, 'COLLIPULLI', 9),
(9203, 'CURACAUTÍN', 9),
(9204, 'ERCILLA', 9),
(9205, 'LONQUIMAY', 9),
(9206, 'LOS SAUCES', 9),
(9207, 'LUMACO', 9),
(9208, 'PURÉN', 9),
(9209, 'RENAICO', 9),
(9210, 'TRAIGUÉN', 9),
(9211, 'VICTORIA', 9),
(10101, 'PUERTO MONTT', 10),
(10102, 'CALBUCO', 10),
(10103, 'COCHAMÓ', 10),
(10104, 'FRESIA', 10),
(10105, 'FRUTILLAR', 10),
(10106, 'LOS MUERMOS', 10),
(10107, 'LLANQUIHUE', 10),
(10108, 'MAULLÍN', 10),
(10109, 'PUERTO VARAS', 10),
(10201, 'CASTRO', 10),
(10202, 'ANCUD', 10),
(10203, 'CHONCHI', 10),
(10204, 'CURACO DE VÉLEZ', 10),
(10205, 'DALCAHUE', 10),
(10206, 'PUQUELDÓN', 10),
(10207, 'QUEILÉN', 10),
(10208, 'QUELLÓN', 10),
(10209, 'QUEMCHI', 10),
(10210, 'QUINCHAO', 10),
(10301, 'OSORNO', 10),
(10302, 'PUERTO OCTAY', 10),
(10303, 'PURRANQUE', 10),
(10304, 'PUYEHUE', 10),
(10305, 'RÍO NEGRO', 10),
(10306, 'SAN JUAN DE LA COSTA', 10),
(10307, 'SAN PABLO', 10),
(10401, 'CHAITÉN', 10),
(10402, 'FUTALEUFÚ', 10),
(10403, 'HUALAIHUÉ', 10),
(10404, 'PALENA', 10),
(11101, 'COYHAIQUE', 11),
(11102, 'LAGO VERDE', 11),
(11201, 'AYSÉN', 11),
(11202, 'CISNES', 11),
(11203, 'GUAITECAS', 11),
(11301, 'COCHRANE', 11),
(11302, 'OHIGGINS', 11),
(11303, 'TORTEL', 11),
(11401, 'CHILE CHICO', 11),
(11402, 'RÍO IBÁÑEZ', 11),
(12101, 'PUNTA ARENAS', 12),
(12102, 'LAGUNA BLANCA', 12),
(12103, 'RÍO VERDE', 12),
(12104, 'SAN GREGORIO', 12),
(12201, 'CABO DE HORNOS', 12),
(12202, 'ANTÁRTICA', 12),
(12301, 'PORVENIR', 12),
(12302, 'PRIMAVERA', 12),
(12303, 'TIMAUKEL', 12),
(12401, 'NATALES', 12),
(12402, 'TORRES DEL PAINE', 12),
(13101, 'SANTIAGO', 13),
(13102, 'CERRILLOS', 13),
(13103, 'CERRO NAVIA', 13),
(13104, 'CONCHALÍ', 13),
(13105, 'EL BOSQUE', 13),
(13106, 'ESTACIÓN CENTRAL', 13),
(13107, 'HUECHURABA', 13),
(13108, 'INDEPENDENCIA', 13),
(13109, 'LA CISTERNA', 13),
(13110, 'LA FLORIDA', 13),
(13111, 'LA GRANJA', 13),
(13112, 'LA PINTANA', 13),
(13113, 'LA REINA', 13),
(13114, 'LAS CONDES', 13),
(13115, 'LO BARNECHEA', 13),
(13116, 'LO ESPEJO', 13),
(13117, 'LO PRADO', 13),
(13118, 'MACUL', 13),
(13119, 'MAIPÚ', 13),
(13120, 'ÑUÑOA', 13),
(13121, 'PEDRO AGUIRRE CERDA', 13),
(13122, 'PEÑALOLÉN', 13),
(13123, 'PROVIDENCIA', 13),
(13124, 'PUDAHUEL', 13),
(13125, 'QUILICURA', 13),
(13126, 'QUINTA NORMAL', 13),
(13127, 'RECOLETA', 13),
(13128, 'RENCA', 13),
(13129, 'SAN JOAQUÍN', 13),
(13130, 'SAN MIGUEL', 13),
(13131, 'SAN RAMÓN', 13),
(13132, 'VITACURA', 13),
(13201, 'PUENTE ALTO', 13),
(13202, 'PIRQUE', 13),
(13203, 'SAN JOSÉ DE MAIPO', 13),
(13301, 'COLINA', 13),
(13302, 'LAMPA', 13),
(13303, 'TILTIL', 13),
(13401, 'SAN BERNARDO', 13),
(13402, 'BUIN', 13),
(13403, 'CALERA DE TANGO', 13),
(13404, 'PAINE', 13),
(13501, 'MELIPILLA', 13),
(13502, 'ALHUÉ', 13),
(13503, 'CURACAVÍ', 13),
(13504, 'MARÍA PINTO', 13),
(13505, 'SAN PEDRO', 13),
(13601, 'TALAGANTE', 13),
(13602, 'EL MONTE', 13),
(13603, 'ISLA DE MAIPO', 13),
(13604, 'PADRE HURTADO', 13),
(13605, 'PEÑAFLOR', 13),
(14101, 'VALDIVIA', 14),
(14102, 'CORRAL', 14),
(14103, 'LANCO', 14),
(14104, 'LOS LAGOS', 14),
(14105, 'MÁFIL', 14),
(14106, 'MARIQUINA', 14),
(14107, 'PAILLACO', 14),
(14108, 'PANGUIPULLI', 14),
(14201, 'LA UNIÓN', 14),
(14202, 'FUTRONO', 14),
(14203, 'LAGO RANCO', 14),
(14204, 'RÍO BUENO', 14),
(15101, 'ARICA', 15),
(15102, 'CAMARONES', 15),
(15201, 'PUTRE', 15),
(15202, 'GENERAL LAGOS', 15);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Habitacion`
--

CREATE TABLE `Habitacion` (
  `Habitacion_Id` int NOT NULL,
  `Hab_Nombre` varchar(200) DEFAULT NULL,
  `Casa_Id` int DEFAULT NULL,
  `Ventilador` tinyint(1) NOT NULL DEFAULT '0',
  `Umbral` int NOT NULL DEFAULT '50'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `Habitacion`
--

INSERT INTO `Habitacion` (`Habitacion_Id`, `Hab_Nombre`, `Casa_Id`, `Ventilador`, `Umbral`) VALUES
(1, 'Baño', 1, 0, 45),
(4, 'Sala', 1, 0, 50),
(5, 'Baño', 5, 0, 50),
(6, 'Habitación', 5, 0, 50),
(7, 'Sala', 5, 0, 50);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Region`
--

CREATE TABLE `Region` (
  `Region_Id` int NOT NULL,
  `Region_Nombre` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `Region`
--

INSERT INTO `Region` (`Region_Id`, `Region_Nombre`) VALUES
(1, 'TARAPACÁ'),
(2, 'ANTOFAGASTA'),
(3, 'ATACAMA'),
(4, 'COQUIMBO'),
(5, 'VALPARAÍSO'),
(6, 'LIBERTADOR GENERAL BERNARDO OHIGGINS'),
(7, 'MAULE'),
(8, 'BIOBÍO'),
(9, 'LA ARAUCANÍA'),
(10, 'LOS LAGOS'),
(11, 'AYSÉN DEL GENERAL CARLOS IBÁÑEZ DEL CAMPO'),
(12, 'MAGALLANES Y DE LA ANTÁRTICA CHILENA'),
(13, 'METROPOLITANA DE SANTIAGO'),
(14, 'LOS RÍOS'),
(15, 'ARICA Y PARINACOTA'),
(16, 'ÑUBLE');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Sensor`
--

CREATE TABLE `Sensor` (
  `Sensor_Id` int NOT NULL,
  `Humedad_Relativa` int DEFAULT NULL,
  `Temperatura` float DEFAULT NULL,
  `Sens_Fecha_Hora` datetime DEFAULT NULL,
  `Habitacion_Id` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `Sensor`
--

INSERT INTO `Sensor` (`Sensor_Id`, `Humedad_Relativa`, `Temperatura`, `Sens_Fecha_Hora`, `Habitacion_Id`) VALUES
(1, 55, 23.3, '2023-01-14 21:35:41', 1),
(2, 56, 23.4, '2023-01-15 20:12:02', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Tipo_Usuario`
--

CREATE TABLE `Tipo_Usuario` (
  `Tipo_Usuario_Id` int NOT NULL,
  `Nombre_Tipo` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `Tipo_Usuario`
--

INSERT INTO `Tipo_Usuario` (`Tipo_Usuario_Id`, `Nombre_Tipo`) VALUES
(1, 'Administrador'),
(2, 'Hogar'),
(3, 'Regulador');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Usuario`
--

CREATE TABLE `Usuario` (
  `Usuario_Id` int NOT NULL,
  `Usuario_Correo` varchar(100) DEFAULT NULL,
  `Usuario_Pass` varchar(50) DEFAULT NULL,
  `Tipo_Usuario_Id` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `Usuario`
--

INSERT INTO `Usuario` (`Usuario_Id`, `Usuario_Correo`, `Usuario_Pass`, `Tipo_Usuario_Id`) VALUES
(2, 'admin@correo.com', 'admin', 1),
(3, 'casa@correo.com', 'casas', 2),
(4, 'regul@correo.com', 'regul', 3),
(5, 'casa2@correo.com', 'casa2', 2),
(7, 'reguls@correo.com', 'regul', 3),
(10, 'pruebas@correo.com', 'pruebas', 2);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `Casa`
--
ALTER TABLE `Casa`
  ADD PRIMARY KEY (`Casa_Id`),
  ADD KEY `Usuario_Id` (`Usuario_Id`),
  ADD KEY `Comuna_Id` (`Comuna_Id`);

--
-- Indices de la tabla `Comuna`
--
ALTER TABLE `Comuna`
  ADD PRIMARY KEY (`Comuna_Id`),
  ADD KEY `Region_Id` (`Region_Id`);

--
-- Indices de la tabla `Habitacion`
--
ALTER TABLE `Habitacion`
  ADD PRIMARY KEY (`Habitacion_Id`),
  ADD KEY `Habitacion_ibfk_1` (`Casa_Id`);

--
-- Indices de la tabla `Region`
--
ALTER TABLE `Region`
  ADD PRIMARY KEY (`Region_Id`);

--
-- Indices de la tabla `Sensor`
--
ALTER TABLE `Sensor`
  ADD PRIMARY KEY (`Sensor_Id`),
  ADD KEY `Sensor_ibfk_1` (`Habitacion_Id`);

--
-- Indices de la tabla `Tipo_Usuario`
--
ALTER TABLE `Tipo_Usuario`
  ADD PRIMARY KEY (`Tipo_Usuario_Id`);

--
-- Indices de la tabla `Usuario`
--
ALTER TABLE `Usuario`
  ADD PRIMARY KEY (`Usuario_Id`),
  ADD UNIQUE KEY `Usuario_Correo` (`Usuario_Correo`),
  ADD KEY `Tipo_Usuario_Id` (`Tipo_Usuario_Id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `Casa`
--
ALTER TABLE `Casa`
  MODIFY `Casa_Id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `Habitacion`
--
ALTER TABLE `Habitacion`
  MODIFY `Habitacion_Id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `Sensor`
--
ALTER TABLE `Sensor`
  MODIFY `Sensor_Id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `Usuario`
--
ALTER TABLE `Usuario`
  MODIFY `Usuario_Id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `Casa`
--
ALTER TABLE `Casa`
  ADD CONSTRAINT `Casa_ibfk_1` FOREIGN KEY (`Usuario_Id`) REFERENCES `Usuario` (`Usuario_Id`),
  ADD CONSTRAINT `Casa_ibfk_2` FOREIGN KEY (`Comuna_Id`) REFERENCES `Comuna` (`Comuna_Id`);

--
-- Filtros para la tabla `Comuna`
--
ALTER TABLE `Comuna`
  ADD CONSTRAINT `Comuna_ibfk_1` FOREIGN KEY (`Region_Id`) REFERENCES `Region` (`Region_Id`);

--
-- Filtros para la tabla `Habitacion`
--
ALTER TABLE `Habitacion`
  ADD CONSTRAINT `Habitacion_ibfk_1` FOREIGN KEY (`Casa_Id`) REFERENCES `Casa` (`Casa_Id`) ON DELETE CASCADE ON UPDATE RESTRICT;

--
-- Filtros para la tabla `Sensor`
--
ALTER TABLE `Sensor`
  ADD CONSTRAINT `Sensor_ibfk_1` FOREIGN KEY (`Habitacion_Id`) REFERENCES `Habitacion` (`Habitacion_Id`) ON DELETE CASCADE ON UPDATE RESTRICT;

--
-- Filtros para la tabla `Usuario`
--
ALTER TABLE `Usuario`
  ADD CONSTRAINT `Usuario_ibfk_1` FOREIGN KEY (`Tipo_Usuario_Id`) REFERENCES `Tipo_Usuario` (`Tipo_Usuario_Id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
