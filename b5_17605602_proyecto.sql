-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 09-05-2017 a las 20:17:45
-- Versión del servidor: 10.1.13-MariaDB
-- Versión de PHP: 5.6.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `b5_17605602_proyecto`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `colegios`
--

CREATE TABLE `colegios` (
  `ID_COLEGIO` int(11) NOT NULL,
  `DIRECTOR` varchar(80) NOT NULL,
  `DNI` varchar(10) NOT NULL,
  `DOMICILIO` varchar(80) NOT NULL,
  `COLEGIO` varchar(80) NOT NULL,
  `CUE` int(11) NOT NULL,
  `CIUDAD` varchar(20) NOT NULL,
  `DISTRITO` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `colegios`
--

INSERT INTO `colegios` (`ID_COLEGIO`, `DIRECTOR`, `DNI`, `DOMICILIO`, `COLEGIO`, `CUE`, `CIUDAD`, `DISTRITO`) VALUES
(19, 'Fernanda Gabriela DurÃ¡n', '25808560', 'Juana Fadul 266', ' Colegio Provincial Kloketen - Sede', 940015800, 'Ushuaia', 'Sur'),
(18, 'Claudia Viviana Astorga', '22455473', 'Facundo Quiroga 1780', ' Colegio Provincial Ernesto SÃ¡bato', 940015900, 'Ushuaia', 'Sur'),
(17, 'Lorena Florencia Cladera', '25009181', 'Felipe Romero 205', ' Colegio Provincial Los Andes', 940006100, 'Ushuaia', 'Sur'),
(16, 'Juan Enrique Carucci', '11392827', 'Indios YÃ¡manas 1572', ' Colegio Provincial Dr. JosÃ© MarÃ­a Sobral', 940008500, 'Ushuaia', 'Sur'),
(15, 'Ricardo Federico BouzÃ³n', '16730763', 'Avda. Alem 15', 'Centro Polivalente de Arte de Ushuaia - Prof. InÃ©s MarÃ­a Bustelo', 940008400, 'Ushuaia', 'Sur'),
(14, 'Juan RamÃ³n Arrieta', '18499008', 'Gobernador Paz 1693', ' Colegio TÃ©cnico Provincial Olga B.de Arko', 940008300, 'Ushuaia', 'Sur'),
(13, 'Ricardo JuliÃ¡n NÃ³bile', '16300660', 'AntÃ¡rtida Argentina 16', ' Colegio Provincial JosÃ© MartÃ­ - AntÃ¡rtida Argentina y MaipÃº - Sede', 940007608, 'Ushuaia', 'Sur'),
(12, 'Alejandra Elena Franck', '16969381', 'Camilo Antonio Giamarini 3472', ' Colegio Provincial Padre JosÃ© Zink', 940018900, 'Rio Grande', 'Norte'),
(11, 'Fernando JosÃ© Greco', '21986997', 'Thorne 2023', ' Colegio Provincial Dr. RenÃ© Favaloro ', 940016400, 'Rio Grande', 'Norte'),
(2, 'MarÃ­a Julia Plou', '16042722', 'ColÃ³n 751', ' Colegio Provincial Comandante Luis Piedrabuena', 940002500, 'Rio Grande', 'Norte'),
(3, 'MÃ³nica Patricia Norte', '20219813', 'Prefectura Naval Argentina 1151', ' Colegio Provincial  SoberanÃ­a Nacional', 940002600, 'Rio Grande', 'Norte'),
(4, 'Raquel NÃ©lida Lamattina', '16266854', 'RamÃ³n Diaz Chara 64', ' Colegio Provincial Alicia Moreau de Justo', 940001700, 'Rio Grande', 'Norte'),
(5, 'NÃ©stor Alejandro SÃ¡enz', '20645785', 'Avenida Belgrano 777       ', '  Colegio Provincial de EducaciÃ³n TecnolÃ³gica RÃ­o Grande', 940007700, 'Rio Grande', 'Norte'),
(6, 'MÃ³nica Viviana Marchese', '16915834', 'Luro Cambaceres y MarÃ­a Auxiliadora', '  Centro Polivalente de Arte de RÃ­o Grande Prof. Diana Cotorruelo', 940011400, 'Rio Grande', 'Norte'),
(7, 'Fernando Rogelio GarcÃ­a Carral', '12982648', 'JosÃ© Ingenieros 851', '  Colegio Provincial Haspen - "Profesor Luis Adan Felippa"', 940011500, 'Rio Grande', 'Norte'),
(8, 'Graciela Beatriz Castro', '14009006', 'Mosconi 655', ' Colegio Provincial Dr. Ernesto Guevara', 940015700, 'Rio Grande', 'Norte'),
(9, 'MarÃ­a AngÃ©lica Del Estal', '16751679', 'Santiago Rupatini 379', ' Colegio Provincial RamÃ³n Alberto Trejo Noel', 940001900, 'Tolhuin', 'Norte'),
(10, 'Daniela Viviana Balverdi', '23994784', 'Lima 731', ' Colegio Provincial Dr. Esteban Laureano Maradona', 940016200, 'Rio Grande', 'Norte'),
(1, 'MarÃ­a InÃ©s CaucamÃ¡n SÃ¡nchez', '24162062', 'Chawr 1042', ' Colegio Provincial AntÃ¡rtida Argentina', 940015000, 'Rio Grande', 'Norte');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comodatarios`
--

CREATE TABLE `comodatarios` (
  `ID_COMODATARIO` int(11) NOT NULL,
  `TIPO_COM` varchar(7) NOT NULL,
  `DNI_COM` int(10) NOT NULL,
  `APEYNOM` varchar(120) NOT NULL,
  `DNI_ADULTO` varchar(10) DEFAULT NULL,
  `APEYNOM_A` varchar(120) DEFAULT NULL,
  `SERIE` varchar(20) DEFAULT NULL,
  `MARCA` varchar(20) DEFAULT NULL,
  `MODELO` varchar(20) DEFAULT NULL,
  `ID_COLEGIO_FK` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `egresados`
--

CREATE TABLE `egresados` (
  `ID_EGRESADO` int(11) NOT NULL,
  `DNI` int(10) NOT NULL,
  `ANIO_EGRESO` int(11) NOT NULL,
  `CURSO` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  `DIVISION` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `TURNO` varchar(12) COLLATE utf8_spanish_ci NOT NULL,
  `ESTADO` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migraciones`
--

CREATE TABLE `migraciones` (
  `ID_MIGRACION` int(11) NOT NULL,
  `ID_COMODATARIO_FK` int(11) NOT NULL,
  `ID_COLEGIO_O` int(11) NOT NULL,
  `ID_COLEGIO_D` int(11) NOT NULL,
  `ESTADO` int(11) NOT NULL,
  `FECHA` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `movimientos`
--

CREATE TABLE `movimientos` (
  `ID_MOVIMIENTO` int(11) NOT NULL,
  `ID_USUARIO_FK` int(11) NOT NULL,
  `ID_COMODATARIO_FK` int(11) NOT NULL,
  `MOTIVO` varchar(20) NOT NULL,
  `FECHA` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `parque_escolar`
--

CREATE TABLE `parque_escolar` (
  `ID_MAQUINA` int(11) NOT NULL,
  `ID_COLEGIO_FK` int(11) NOT NULL,
  `SERIE` varchar(20) NOT NULL,
  `MARCA` varchar(20) NOT NULL,
  `MODELO` varchar(20) NOT NULL,
  `ESTADO` varchar(20) NOT NULL,
  `ESTADO_EQUIPO` varchar(300) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `prestamos`
--

CREATE TABLE `prestamos` (
  `ID_PRESTAMO` int(11) NOT NULL,
  `DNI` int(11) NOT NULL,
  `APEYNOM` varchar(120) NOT NULL,
  `ID_MAQUINA_FK` int(11) NOT NULL,
  `CARGADOR` tinyint(1) NOT NULL,
  `VIGENTE` tinyint(1) NOT NULL,
  `TIPO_COM_PRE` int(11) NOT NULL,
  `ADEUDA_BATERIA` varchar(15) NOT NULL,
  `ADEUDA_CARGADOR` varchar(15) NOT NULL,
  `ADEUDA_ANTENA` varchar(15) NOT NULL,
  `MOTIVO_PRESTAMO` varchar(1500) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `ID_USUARIO` int(11) NOT NULL,
  `NOMBRE_ATEI` varchar(80) NOT NULL,
  `USUARIO` varchar(20) NOT NULL,
  `PASS` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`ID_USUARIO`, `NOMBRE_ATEI`, `USUARIO`, `PASS`) VALUES
(1, 'ALMADA, DIEGO', 'ALMADA', '$2y$10$XoHp26rvCURVXnf4.wWBJeclGR92U.OQ24pzQq6UkWK9s6cOUc36C'),
(2, 'BREMSZ, CARLOS', 'BREMSZ', '$2y$10$lX2Gh5AT/dzuEpTLvCRTD.wB98z29cvtZvsfuRtUPrjIT4iAv/Io6'),
(3, 'BRIZUELA, EDUARDO NICOLAS', 'BRIZUELA', '$2y$10$wWyRlQ81teOfQxIXRO0BOuVGGdxvx7QkUxARzLvKlRvCl2F65mWAy'),
(4, 'CABRAL, JUAN NAHUEL', 'CABRAL', '$2y$10$DGOH3WqKSZZfUaMJ9c9QM.wYznAeJe6At0A67Z1L96YL56xmkjmiS'),
(5, 'CASTO CRESPO, JUAN PABLO', 'CRESPO', '$2y$10$fwzRuHcg1tNHonDvEkFVMOvaqoSTRahAA9BNuFNDECB8WS7b19u/q'),
(6, 'CEBALLOS, GERMAN ABAD', 'CEBALLOS', '$2y$10$IZvmCVkZqepPQuy8y9rCMedSpZ1y4LJZr2ekEqKMMROXsCcbAusYq'),
(7, 'CONSTENLA, NAHUEL SANTIAGO', 'CONSTENLA', '$2y$10$ekYDqrATwWFe0iaWsbwS.e51xgK18Hi1ZPyBIhjF.DT35f1ZeJiSe'),
(8, 'CORDOBA, SERGIO', 'CORDOBA', '$2y$10$/5E2RwKQuhJ4nTQbxu0m/e2fzFvYG.1ql/M1HDdlCIuf1FriVhatG'),
(9, 'DIAZ, LUIS NORBERTO', 'DIAZ', '$2y$10$bsceoCBCXTR.I/iOmYHfU.ffxMCkccZIQ/0WMXvRy8sk1SpzWQDoC'),
(10, 'GRENON, HORACIO FEDERICO', 'GRENON', '$2y$10$N.AEQBnIYSWkocfYm..9K.rF1sU.XTRI5dB4wWilF/dzYBFki1Fva'),
(11, 'GUERRA TRUJILLO, FABIAN', 'GUERRA', '$2y$10$7gGVFRv661qWyv.I4NBiiuRnkvBbO4EQ14mFIynwjLbPrjIKxJypO'),
(12, 'HERRERA, JAVIER IVAN', 'HERRERA', '$2y$10$WNvFXjEY4L1xmR4irg2N/.lzY5M/KskoCJpLZXuWGIcVPHROLom7C'),
(13, 'KURINCIC, GABRIEL', 'KURINCIC', '$2y$10$x0eFPHuxEBRyxhms94kJl.Pwb8WCJ7txc9SdkM2Zsr7s1XU4IV0US'),
(14, 'LECUNA, DIEGO', 'LECUNA', '$2y$10$ZcdSUSqglWMjqEsGSTPYq.wFmovNcuFP7O.JHKgS6hE9PEIJaI0OK'),
(15, 'LONCON, MATIAS ALEJANDRO', 'LONCON', '$2y$10$prkM.41EPZoSEM3Jf934qeLpocGLtFritv0d5s0m5XN3PRjUEZdYO'),
(16, 'LOPEZ, WALTER JAVIER', 'LOPEZ', '$2y$10$ySV00uRJLspbhq2BHSzZI./uEaxkimKMdeFaYRGOJB3MjLgssHnmy'),
(17, 'LUQUE SANDOVAL, HECTOR LEONARDO', 'LUQUE', '$2y$10$2HpdqpFWLv4a1YDAgMbGAuitKLgpre1HzznhbKC7M5yFSMT9nX7Nq'),
(18, 'MICIOSCIA, ELIAN FABIAN', 'MICIOSCIA', '$2y$10$Yx0ppRQLXTmZ4Va5y.zhrO5N60clwynEvIx5gKgK5s87HXdLVhumi'),
(19, 'OYOMEK, ROBERTO CARLOS', 'OYOMEK', '$2y$10$YF1plMzUaTYL7t6UdbW67.o9vbgBqyYmQbjkNvEpEgZTTxsdWaQ8W'),
(20, 'PEREZ, GUILLERMO SEBASTIAN', 'PEREZ', '$2y$10$f3PsdP0oDqHoM0Zw9nKcvOX.BK40lHomLg6WsRxmsPVTpEiePDZQm'),
(21, 'QUIROGA, MARCELO EMANUEL', 'QUIROGA', '$2y$10$cOb4qic1vhNGz/B5741SUOpLvx8X6GCdCBmz6fv2fBCkp.2EDAdsK'),
(22, 'RAMIREZ, CRISTHIAN MARTIN', 'RAMIREZ', '$2y$10$bURG61kQnsNvehXdHl0zaOXmbgpetDZ1pHVQCnPXywQM/7DCJpeLC'),
(23, 'RIVERA PUENTE, LEONEL ALEJANDRO', 'RIVERA', '$2y$10$ryUCuFHGFU336hvHQo9d5uJt2tEsJozl73UeRjxyNQsFU55FvEQUa'),
(24, 'ROLANDO AGUILAR, JONATAN LUIS', 'ROLANDO', '$2y$10$J9SgRb1OSWagIOJGy42V.uEWMBDgKmFnZptFXo5RF7ygCsBPuoiB.'),
(25, 'ALGANARAZ, ISMAEL MARIO', 'ALGANARAZ', '$2y$10$Xc9ZknHhlzMzyqrazp1YCO/1PaGfvxpy13UcVFG3SZsh9XhBk9/BO'),
(26, 'BIANCHI, EMILIO', 'BIANCHI', '$2y$10$rq/33sphozRs32b3uDzIwe4xfqdOIap0om0/YdOFX1SQGr0dq6Icq'),
(27, 'CARRIZO BORGAT, MATIAS MIGUEL', 'CARRIZO', '$2y$10$PdMRMByoJWWGco6NUSyG6OcfH8ECzuxu1Arl2MDU41gAftVH245XC'),
(28, 'DELEON, PABLO ARIEL', 'DELEON', '$2y$10$AA26sLjECjaQSB3fpI5ybe8.2oTm7NDRwaiNCrQJ8B9IWdk6fvnsG'),
(29, 'GOMEZ RIJA, JOSE ALEJANDRO', 'GOMEZ', '$2y$10$lzOb1v1jNphRYcmWk09cBOotZMTmZuAhylrg.RMjm7/KUV7XV9zDu'),
(30, 'MAMANI PALAGUERRA, ROSA NATALIA', 'MAMANI', '$2y$10$xE58abVl6BBuNcellqXm7.iKQMfw7yymNLxiw3oPWDjpHKR4mHQbm'),
(31, 'MONTEROS, IVANA CAROLINA', 'MONTEROS', '$2y$10$UnEc2B.6EnJawk35rjweu.r3ASmNJeHMPWi2Kfm21o3ELeJVHR0ai'),
(32, 'POZZOLI GUTIERREZ, IGNACIO', 'POZZOLI', '$2y$10$6e1pypmgZBOUWYrXaI6gxuFxQ7c8UKH5Kc9Z0fWukYhDtDNaMugmm'),
(33, 'QUIROGA, FACUNDO', 'QUIROGA', '$2y$10$d5ZP2q.69Gc9UpabmEiMheoljMoP5oiFxDyod9pkKPrPYVS2MJUo6'),
(34, 'SENSAN MARQUEZ, LEANDRO ANDRES', 'SENSAN', '$2y$10$qIA8BNJfBiVHIG5HtArSW.M.1JfpyePUqYaRKF7M4bOTljV5zyHQm'),
(35, 'TREJO, JULIO A.', 'TREJO', '$2y$10$HBj9xjFebCYYYj3OwT7IMuZddrCC9i6Z8qmrgqrVK4SsVzcAaUYOe'),
(36, 'TULIAN, LUCAS GABRIEL ', 'TULIAN', '$2y$10$5p8kr0h4jZtm2wm9otzfxuXaTJ5pksrhG8a/88o1aN.8zdejo4wRC'),
(37, 'VALENZUELA, PABLO', 'VALENZUELA', '$2y$10$hxvph6P4Yg1beLEwubpmI.jYkMgE3Hod8ZMXYX50be1S44kDgjmwC'),
(38, 'VAN DEN HUEVEL, EMILIANO', 'VAN', '$2y$10$dlf.6XRi9fqgBv86cML/PuJoid2oG.mycmhIO.G3kLjcUuN8GwXIm'),
(39, 'VILCA ELBIO ARIEL', 'VILCA', '$2y$10$aOqwb7XFxNg7K2oMI7a4FOYvb7HU4vWjhKTbwZxDoyecvu47ogUqS'),
(40, 'PERALTA EZEQUIEL DAMIAN', 'PERALTA', '$2y$10$06xCdBKjLLxSTv9/BC2DROCvAbJpjvAQVCAnbFHui.lNcElt.B.42'),
(41, 'SOSA MATIAS ALEJANDRO', 'SOSA', '$2y$10$kjEUJD5bGj8NFwKHftmDEu/yRzkTqx5F7nvDnKWFz0bwjl34BbLgi'),
(42, 'VARGAS SANDOVAL SERGIO', 'VARGAS', '$2y$10$OmVIYhKYx2Goaf/3E48Eq.IlWM7fujvH2fpyhJzNl9JTvm1ziN7F2'),
(43, 'Troncoso Gustavo', 'GUSTAVO', '$2y$10$avaswLwCj6fPpEK3zBMMNexbaaseb8hYKnRp33yA.VfN5.0TMs25e');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `colegios`
--
ALTER TABLE `colegios`
  ADD PRIMARY KEY (`ID_COLEGIO`);

--
-- Indices de la tabla `comodatarios`
--
ALTER TABLE `comodatarios`
  ADD PRIMARY KEY (`ID_COMODATARIO`),
  ADD UNIQUE KEY `DNI_COM` (`DNI_COM`);

--
-- Indices de la tabla `egresados`
--
ALTER TABLE `egresados`
  ADD PRIMARY KEY (`ID_EGRESADO`),
  ADD UNIQUE KEY `DNI` (`DNI`);

--
-- Indices de la tabla `migraciones`
--
ALTER TABLE `migraciones`
  ADD PRIMARY KEY (`ID_MIGRACION`);

--
-- Indices de la tabla `movimientos`
--
ALTER TABLE `movimientos`
  ADD PRIMARY KEY (`ID_MOVIMIENTO`);

--
-- Indices de la tabla `parque_escolar`
--
ALTER TABLE `parque_escolar`
  ADD PRIMARY KEY (`ID_MAQUINA`);

--
-- Indices de la tabla `prestamos`
--
ALTER TABLE `prestamos`
  ADD PRIMARY KEY (`ID_PRESTAMO`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`ID_USUARIO`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `colegios`
--
ALTER TABLE `colegios`
  MODIFY `ID_COLEGIO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT de la tabla `comodatarios`
--
ALTER TABLE `comodatarios`
  MODIFY `ID_COMODATARIO` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `egresados`
--
ALTER TABLE `egresados`
  MODIFY `ID_EGRESADO` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `migraciones`
--
ALTER TABLE `migraciones`
  MODIFY `ID_MIGRACION` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `movimientos`
--
ALTER TABLE `movimientos`
  MODIFY `ID_MOVIMIENTO` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `parque_escolar`
--
ALTER TABLE `parque_escolar`
  MODIFY `ID_MAQUINA` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `prestamos`
--
ALTER TABLE `prestamos`
  MODIFY `ID_PRESTAMO` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `ID_USUARIO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
