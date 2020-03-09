-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 05-09-2018 a las 22:05:54
-- Versión del servidor: 10.1.26-MariaDB
-- Versión de PHP: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `pr_titulo`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pt_tbcliente`
--

CREATE TABLE `pt_tbcliente` (
  `id_cl` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  `no_cl` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `ap_cl` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `di_cl` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `co_cl` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `ci_cl` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `ma_cl` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `fe_cl` date NOT NULL,
  `fo_cl` int(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `pt_tbcliente`
--

INSERT INTO `pt_tbcliente` (`id_cl`, `no_cl`, `ap_cl`, `di_cl`, `co_cl`, `ci_cl`, `ma_cl`, `fe_cl`, `fo_cl`) VALUES
('11111111-1', 'prueba', 'prueba 5', 'prueba xxx', 'prueba', 'ciudad prueba', 'prueba1@prueba.cl', '2018-09-04', 555555),
('14118773-2', 'Priscilla', 'Hurtado Fuentes', 'Alonso de ovalle 884', 'Santiago', 'Santiago', 'prueba1@prueba.cl', '2018-08-28', 62806295),
('15665030-7', 'Rodrigo Andres', 'Stuardo Perez', 'Lucas sierra 3557', 'Quinta normal', 'Santiago', 'rstuardo@academia.cl', '2018-08-28', 79980614);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pt_tbespecie`
--

CREATE TABLE `pt_tbespecie` (
  `id_especie` int(5) NOT NULL,
  `nom_especie` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `des_especie` varchar(200) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `pt_tbespecie`
--

INSERT INTO `pt_tbespecie` (`id_especie`, `nom_especie`, `des_especie`) VALUES
(2, 'Canino', 'Grupo perros'),
(3, 'Felinos', 'Grupo Gatos'),
(4, 'Roedor', 'Grupo Roedores (Hamster, chinchilla, etc.)'),
(5, 'Aves', 'Grupo Aves');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pt_tbficha`
--

CREATE TABLE `pt_tbficha` (
  `id_ficha` int(6) NOT NULL,
  `id_cl` varchar(10) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `no_mas` varchar(30) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `nom_cl` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `ho_ticket` time NOT NULL,
  `fe_ticket` date NOT NULL,
  `pro_ficha` varchar(100) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `dia_ficha` varchar(250) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `tra_ficha` varchar(250) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `obs_ficha` varchar(250) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `pt_tbficha`
--

INSERT INTO `pt_tbficha` (`id_ficha`, `id_cl`, `no_mas`, `nom_cl`, `ho_ticket`, `fe_ticket`, `pro_ficha`, `dia_ficha`, `tra_ficha`, `obs_ficha`) VALUES
(5, '14118773-2', 'Fido', 'Priscilla Hurtado Fuentes', '11:30:00', '2030-08-18', 'aer SI FUNCIONA AHORA', 'por', 'la', 'CTM!!!!!'),
(11, '15665030-7', 'pancho', 'Rodrigo Andres Stuardo Perez', '11:00:00', '2030-08-18', 'a', 'l', 'a', 'ctm'),
(12, '11111111-1', '111', 'prueba prueba 5', '02:00:00', '2018-09-05', '\r\nsdf', 'fsdg', 'dfd', 'dsfadf');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pt_tbhospital`
--

CREATE TABLE `pt_tbhospital` (
  `id_hospital` int(6) NOT NULL,
  `id_cl` varchar(10) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `id_ficha` int(6) NOT NULL,
  `no_mas` varchar(30) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `fein_hospital` date NOT NULL,
  `fesa_hospital` date NOT NULL,
  `obs_hospital` varchar(500) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `pt_tbhospital`
--

INSERT INTO `pt_tbhospital` (`id_hospital`, `id_cl`, `id_ficha`, `no_mas`, `fein_hospital`, `fesa_hospital`, `obs_hospital`) VALUES
(1, '11111111-1', 12, '111', '2018-09-05', '2018-09-08', 'Aers');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pt_tbjaula`
--

CREATE TABLE `pt_tbjaula` (
  `id_jaula` int(4) NOT NULL,
  `med_jaula` int(11) NOT NULL COMMENT 'medida jaula',
  `dis_jaula` int(1) NOT NULL COMMENT 'disponible?',
  `des_jaula` varchar(200) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pt_tbpaciente`
--

CREATE TABLE `pt_tbpaciente` (
  `id_mas` int(6) NOT NULL,
  `id_cl` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  `no_mas` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `id_especie` int(5) NOT NULL,
  `id_raza` int(5) NOT NULL,
  `co_mas` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `nc_mas` int(10) NOT NULL,
  `ed_mas` int(3) NOT NULL,
  `pe_mas` int(4) NOT NULL,
  `ge_mas` varchar(6) COLLATE utf8_spanish_ci NOT NULL,
  `ob_mas` varchar(150) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `pt_tbpaciente`
--

INSERT INTO `pt_tbpaciente` (`id_mas`, `id_cl`, `no_mas`, `id_especie`, `id_raza`, `co_mas`, `nc_mas`, `ed_mas`, `pe_mas`, `ge_mas`, `ob_mas`) VALUES
(1, '15665030-7', 'pancho', 2, 7, 'negro fuego', 0, 11, 3, 'Macho', 'Alguna observacion..'),
(2, '14118773-2', 'Fido', 2, 2, 'Gris', 2147483647, 5, 3, 'Macho', 'Se encuentra esterilizado'),
(3, '15665030-7', 'Bobby', 2, 1, 'negro fuego', 1111, 8, 8, 'Macho', 'Alguna observacion..'),
(6, '11111111-1', 'mascota de prueba', 2, 11, 'blanco', 11111111, 5, 4, 'Macho', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pt_tbproducto`
--

CREATE TABLE `pt_tbproducto` (
  `id_prod` int(5) NOT NULL,
  `nom_pro` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `tip_pro` varchar(30) CHARACTER SET utf8 NOT NULL,
  `mar_pro` varchar(30) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL COMMENT 'Marca',
  `des_pro` varchar(100) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `prc_pro` mediumint(7) NOT NULL COMMENT 'Precio Costo',
  `prv_pro` mediumint(7) NOT NULL COMMENT 'Precio Venta',
  `fecha_compra` date NOT NULL,
  `ruta_imagen` varchar(100) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `pt_tbproducto`
--

INSERT INTO `pt_tbproducto` (`id_prod`, `nom_pro`, `tip_pro`, `mar_pro`, `des_pro`, `prc_pro`, `prv_pro`, `fecha_compra`, `ruta_imagen`) VALUES
(2, 'Royal Canin Medium Junior 15Kg', 'Alimento', 'Royal Canin', 'Alimento mascota sobre los 12 meses', 37990, 44990, '2018-08-27', '41108-royal-canin-medium-junior.jpg'),
(3, 'Royal Canin Pasto Alemán Adulto 12Kg', 'Alimento', 'Royal Canin', 'Alimento pastor aleman', 40990, 44990, '2018-08-27', '73-royal-canin-pastor-aleman-adulto-.jpg'),
(4, 'CARDINA SUBPELAJE', 'Peines', 'Le SAlon', 'LE SALON ESSENTIALS CARDINA SUBPELAJE', 4990, 7390, '2018-08-27', 'LE_SALON_ESSENTIALS_CARDINA_SUBPELAJE.png'),
(5, 'ALIMENTO EXTRUIDO PARA HAMSTER', 'Alimento', 'Lving World', 'Alimento Hamsters', 5690, 10190, '2018-08-27', 'hamster1.jpg'),
(6, 'Nutrience Grain Free (Sin Grano)', 'Alimento', ' Nutrience', 'para mascotas activas o sensibles, y no contiene cereales ni gluten', 18990, 21190, '2018-08-27', 'nutrience-grain-free-dog.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pt_tbrazas`
--

CREATE TABLE `pt_tbrazas` (
  `id_raza` int(5) NOT NULL,
  `nom_raza` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `tam_raza` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `id_especie` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `pt_tbrazas`
--

INSERT INTO `pt_tbrazas` (`id_raza`, `nom_raza`, `tam_raza`, `id_especie`) VALUES
(1, 'Pastor Aleman', 'grande', 2),
(2, 'Pug', 'pequena', 2),
(3, 'Labrador Retriever', 'grande', 2),
(4, 'British Shorthair', 'mediano', 3),
(5, 'American Wirehair', 'mediano', 3),
(6, 'Persian', 'mediano', 3),
(7, 'Pinscher miniatura', 'toy', 2),
(9, 'Yorkshire Terrier', 'pequeno', 2),
(10, 'Bulldog Frances', 'mediano', 2),
(11, 'Mestizo', 'mediano', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pt_tbservicio`
--

CREATE TABLE `pt_tbservicio` (
  `id_serv` int(5) NOT NULL,
  `nomb_serv` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `prec_serv` int(7) NOT NULL,
  `desc_serv` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `ruta_imagen` varchar(100) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `pt_tbservicio`
--

INSERT INTO `pt_tbservicio` (`id_serv`, `nomb_serv`, `prec_serv`, `desc_serv`, `ruta_imagen`) VALUES
(2001, 'Vacuna', 10000, 'Vacuna anti-rabica', 'vacunas-para-perros_opt-compressor-1.jpg'),
(1001, 'Corte de pelo', 7990, 'Corte de pelo Raza pequena', 'perros-gatos-cortar-pelos-verano.jpg'),
(1002, 'Corte de pelo', 8990, 'Corte de pelo Raza Mediana', 'raza media.jpg'),
(3001, 'Cirugia esterilizacion', 15000, 'Cirugia esterilizacion Hembra', 'perras-esterilizacion-cuidados-art.jpg'),
(4001, 'Traumatología veterinaria', 25000, 'Intervencion debido a fractura o traumatismo', 'gato-11.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pt_tbticket`
--

CREATE TABLE `pt_tbticket` (
  `id_ticket` int(5) NOT NULL,
  `id_cl` varchar(10) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `id_mas` int(6) NOT NULL,
  `nom_cl` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `ho_ticket` time(5) NOT NULL,
  `fe_ticket` date NOT NULL,
  `modo_ticket` varchar(1) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL COMMENT '(A)ctivo o (P)asivo',
  `de_ticket` varchar(100) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `pt_tbticket`
--

INSERT INTO `pt_tbticket` (`id_ticket`, `id_cl`, `id_mas`, `nom_cl`, `ho_ticket`, `fe_ticket`, `modo_ticket`, `de_ticket`) VALUES
(1, '15665030-7', 1, 'Rodrigo Andres Stuardo Perez', '11:00:00.00000', '2018-08-30', 'P', 'Ticket  de prueba3'),
(2, '14118773-2', 2, 'Priscilla Hurtado Fuentes', '11:30:00.00000', '2018-08-30', 'P', 'Ticket  de prueba4'),
(5, '11111111-1', 7, 'prueba prueba 5', '02:00:00.00000', '2005-09-18', 'P', 'Corte de pelo Raza pequena');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pt_tbusuario`
--

CREATE TABLE `pt_tbusuario` (
  `id_usuario` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  `nom_usuario` varchar(20) CHARACTER SET utf8 NOT NULL,
  `ape_usuario` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `pas_usuario` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `ema_usuario` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `tip_usuario` int(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `pt_tbusuario`
--

INSERT INTO `pt_tbusuario` (`id_usuario`, `nom_usuario`, `ape_usuario`, `pas_usuario`, `ema_usuario`, `tip_usuario`) VALUES
('15665030', 'Rodrigo', 'Stuardo', '156650', 'tanner1983@gmail.com', 1),
('14118773-2', 'Usuario', 'Prueba 1', '1111', 'prueba1@rst.cl', 2),
('15665030-7', 'Usuario', 'Prueba 2', '2222', 'prueba2@rst.cl', 3),
('1-9', 'Usuario', 'Prueba 3', '3333', 'prueba3@rst.cl', 4);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `pt_tbcliente`
--
ALTER TABLE `pt_tbcliente`
  ADD PRIMARY KEY (`id_cl`);

--
-- Indices de la tabla `pt_tbespecie`
--
ALTER TABLE `pt_tbespecie`
  ADD PRIMARY KEY (`id_especie`);

--
-- Indices de la tabla `pt_tbficha`
--
ALTER TABLE `pt_tbficha`
  ADD PRIMARY KEY (`id_ficha`),
  ADD KEY `id_cl` (`id_cl`);

--
-- Indices de la tabla `pt_tbhospital`
--
ALTER TABLE `pt_tbhospital`
  ADD PRIMARY KEY (`id_hospital`);

--
-- Indices de la tabla `pt_tbjaula`
--
ALTER TABLE `pt_tbjaula`
  ADD PRIMARY KEY (`id_jaula`);

--
-- Indices de la tabla `pt_tbpaciente`
--
ALTER TABLE `pt_tbpaciente`
  ADD PRIMARY KEY (`id_mas`),
  ADD KEY `id_cl` (`id_cl`),
  ADD KEY `id_especie` (`id_especie`),
  ADD KEY `id_raza` (`id_raza`);

--
-- Indices de la tabla `pt_tbproducto`
--
ALTER TABLE `pt_tbproducto`
  ADD PRIMARY KEY (`id_prod`);

--
-- Indices de la tabla `pt_tbrazas`
--
ALTER TABLE `pt_tbrazas`
  ADD PRIMARY KEY (`id_raza`),
  ADD KEY `id_especie` (`id_especie`);

--
-- Indices de la tabla `pt_tbservicio`
--
ALTER TABLE `pt_tbservicio`
  ADD PRIMARY KEY (`id_serv`);

--
-- Indices de la tabla `pt_tbticket`
--
ALTER TABLE `pt_tbticket`
  ADD PRIMARY KEY (`id_ticket`);

--
-- Indices de la tabla `pt_tbusuario`
--
ALTER TABLE `pt_tbusuario`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `pt_tbespecie`
--
ALTER TABLE `pt_tbespecie`
  MODIFY `id_especie` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `pt_tbficha`
--
ALTER TABLE `pt_tbficha`
  MODIFY `id_ficha` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `pt_tbhospital`
--
ALTER TABLE `pt_tbhospital`
  MODIFY `id_hospital` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `pt_tbjaula`
--
ALTER TABLE `pt_tbjaula`
  MODIFY `id_jaula` int(4) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `pt_tbpaciente`
--
ALTER TABLE `pt_tbpaciente`
  MODIFY `id_mas` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `pt_tbrazas`
--
ALTER TABLE `pt_tbrazas`
  MODIFY `id_raza` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `pt_tbticket`
--
ALTER TABLE `pt_tbticket`
  MODIFY `id_ticket` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `pt_tbpaciente`
--
ALTER TABLE `pt_tbpaciente`
  ADD CONSTRAINT `pt_tbpaciente_ibfk_2` FOREIGN KEY (`id_raza`) REFERENCES `pt_tbrazas` (`id_raza`) ON UPDATE CASCADE,
  ADD CONSTRAINT `pt_tbpaciente_ibfk_3` FOREIGN KEY (`id_cl`) REFERENCES `pt_tbcliente` (`id_cl`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `pt_tbrazas`
--
ALTER TABLE `pt_tbrazas`
  ADD CONSTRAINT `pt_tbrazas_ibfk_1` FOREIGN KEY (`id_especie`) REFERENCES `pt_tbespecie` (`id_especie`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
