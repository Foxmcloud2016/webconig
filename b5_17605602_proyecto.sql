-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 12-05-2017 a las 17:24:17
-- Versión del servidor: 10.1.13-MariaDB
-- Versión de PHP: 5.6.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `b5_17605602_proyecto_limpia`
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
  `DISTRITO` varchar(20) NOT NULL,
  `TIPO_COLEGIO` varchar(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `colegios`
--

INSERT INTO `colegios` (`ID_COLEGIO`, `DIRECTOR`, `DNI`, `DOMICILIO`, `COLEGIO`, `CUE`, `CIUDAD`, `DISTRITO`, `TIPO_COLEGIO`) VALUES
(19, 'Fernanda Gabriela DurÃ¡n', '25808560', 'Juana Fadul 266', ' Colegio Provincial Kloketen - Sede', 940015800, 'Ushuaia', 'Sur','Secundaria'),
(18, 'Claudia Viviana Astorga', '22455473', 'Facundo Quiroga 1780', ' Colegio Provincial Ernesto SÃ¡bato', 940015900, 'Ushuaia', 'Sur','Secundaria'),
(17, 'Lorena Florencia Cladera', '25009181', 'Felipe Romero 205', ' Colegio Provincial Los Andes', 940006100, 'Ushuaia', 'Sur','Secundaria'),
(16, 'Juan Enrique Carucci', '11392827', 'Indios YÃ¡manas 1572', ' Colegio Provincial Dr. JosÃ© MarÃ­a Sobral', 940008500, 'Ushuaia', 'Sur','Secundaria'),
(15, 'Ricardo Federico BouzÃ³n', '16730763', 'Avda. Alem 15', 'Centro Polivalente de Arte de Ushuaia - Prof. InÃ©s MarÃ­a Bustelo', 940008400, 'Ushuaia', 'Sur','Secundaria'),
(14, 'Juan RamÃ³n Arrieta', '18499008', 'Gobernador Paz 1693', ' Colegio TÃ©cnico Provincial Olga B.de Arko', 940008300, 'Ushuaia', 'Sur','Secundaria'),
(13, 'Ricardo JuliÃ¡n NÃ³bile', '16300660', 'AntÃ¡rtida Argentina 16', ' Colegio Provincial JosÃ© MartÃ­ - AntÃ¡rtida Argentina y MaipÃº - Sede', 940007608, 'Ushuaia', 'Sur','Secundaria'),
(12, 'Alejandra Elena Franck', '16969381', 'Camilo Antonio Giamarini 3472', ' Colegio Provincial Padre JosÃ© Zink', 940018900, 'Rio Grande', 'Norte','Secundaria'),
(11, 'Fernando JosÃ© Greco', '21986997', 'Thorne 2023', ' Colegio Provincial Dr. RenÃ© Favaloro ', 940016400, 'Rio Grande', 'Norte','Secundaria'),
(2, 'MarÃ­a Julia Plou', '16042722', 'ColÃ³n 751', ' Colegio Provincial Comandante Luis Piedrabuena', 940002500, 'Rio Grande', 'Norte','Secundaria'),
(3, 'MÃ³nica Patricia Norte', '20219813', 'Prefectura Naval Argentina 1151', ' Colegio Provincial  SoberanÃ­a Nacional', 940002600, 'Rio Grande', 'Norte','Secundaria'),
(4, 'Raquel NÃ©lida Lamattina', '16266854', 'RamÃ³n Diaz Chara 64', ' Colegio Provincial Alicia Moreau de Justo', 940001700, 'Rio Grande', 'Norte','Secundaria'),
(5, 'NÃ©stor Alejandro SÃ¡enz', '20645785', 'Avenida Belgrano 777       ', '  Colegio Provincial de EducaciÃ³n TecnolÃ³gica RÃ­o Grande', 940007700, 'Rio Grande', 'Norte','Secundaria'),
(6, 'MÃ³nica Viviana Marchese', '16915834', 'Luro Cambaceres y MarÃ­a Auxiliadora', '  Centro Polivalente de Arte de RÃ­o Grande Prof. Diana Cotorruelo', 940011400, 'Rio Grande', 'Norte','Secundaria'),
(7, 'Fernando Rogelio GarcÃ­a Carral', '12982648', 'JosÃ© Ingenieros 851', '  Colegio Provincial Haspen - "Profesor Luis Adan Felippa"', 940011500, 'Rio Grande', 'Norte','Secundaria'),
(8, 'Graciela Beatriz Castro', '14009006', 'Mosconi 655', ' Colegio Provincial Dr. Ernesto Guevara', 940015700, 'Rio Grande', 'Norte','Secundaria'),
(9, 'MarÃ­a AngÃ©lica Del Estal', '16751679', 'Santiago Rupatini 379', ' Colegio Provincial RamÃ³n Alberto Trejo Noel', 940001900, 'Tolhuin', 'Norte','Secundaria'),
(10, 'Daniela Viviana Balverdi', '23994784', 'Lima 731', ' Colegio Provincial Dr. Esteban Laureano Maradona', 940016200, 'Rio Grande', 'Norte','Secundaria'),
(1, 'MarÃ­a InÃ©s CaucamÃ¡n SÃ¡nchez', '24162062', 'Chawr 1042', ' Colegio Provincial AntÃ¡rtida Argentina', 940015000, 'Rio Grande', 'Norte','Secundaria'),
(27, 'Completar', 'Completar', 'Completar', 'Instituto Provincial de EnseÃ±anza Superior â€œPaulo Freireâ€', 940016900, 'Completar', 'Completar','ISFD'),
(26, 'Completar', 'Completar', 'Completar', 'Escuela Especial NÂº 2 - Casita de Luz', 940007100, 'Completar', 'Completar','Especial'),
(25, 'Completar', 'Completar', 'Completar', 'Escuela Especial NÂº 3 - IntegraciÃ³n Plena', 940002700, 'Completar', 'Completar','Especial');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comodatarios`
--

CREATE TABLE `comodatarios` (
  `ID_COMODATARIO` int(11) NOT NULL,
  `TIPO_COM` varchar(7) NOT NULL,
  `CUIL` varchar(40) CHARACTER SET utf8 COLLATE utf8_spanish2_ci DEFAULT NULL,
  `DNI_COM` int(10) NOT NULL,
  `APEYNOM` varchar(120) NOT NULL,
  `DNI_ADULTO` varchar(10) DEFAULT NULL,
  `APEYNOM_A` varchar(120) DEFAULT NULL,
  `SERIE` varchar(20) DEFAULT NULL,
  `MARCA` varchar(20) DEFAULT NULL,
  `MODELO` varchar(20) DEFAULT NULL,
  `CURSO` varchar(10) DEFAULT NULL,
  `DIVISION` varchar(10) DEFAULT NULL,
  `TURNO` varchar(10) DEFAULT NULL,
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
(1, 'ALMADA, DIEGO', 'ALMADA', '$2y$10$di6yC4Z8YbO.c/g2z2Ai9up1JD1ajPLAYn/zVancMe7.2FflT4wCS'),
(2, 'BREMSZ, CARLOS', 'BREMSZ', '$2y$10$F5nBLUuyZgcHzPsieh5TheOO6AUsAhorDFj5RC5A0JbTNaESc7ZZC'),
(3, 'BRIZUELA, EDUARDO NICOLAS', 'BRIZUELA', '$2y$10$J3CbEXL6qQyd3Z.P1pBxneaxF8gLUqtQMRgYnhvJnY62K6gMhruMq'),
(4, 'CABRAL, JUAN NAHUEL', 'CABRAL', '$2y$10$Zj0ZwjEBY6eTx0dx3VgqXeNfL5s93TVS1KCdjElUx/74BZuIovTt.'),
(5, 'CASTO CRESPO, JUAN PABLO', 'CRESPO', '$2y$10$0kHF20j/cxryhvYzgjCOJ.Pfzz5dtL4u7VXOD7NJTi8/MzPDt/XlW'),
(6, 'CEBALLOS, GERMAN ABAD', 'CEBALLOS', '$2y$10$tHpOgx6jVZIZbAOuB1BcRuQR3E5n3LTE.QMvOX4Xc8qawRB.7BcO2'),
(7, 'CONSTENLA, NAHUEL SANTIAGO', 'CONSTENLA', '$2y$10$yUSYCsFLwjct6acZlVqqFOxooAodr86UVDSZFH5C76ZvL5jBRw9z.'),
(8, 'CORDOBA, SERGIO', 'CORDOBA', '$2y$10$tQKu5sbk.eQxR4ARf0qiiO.D238W9.wpt/UeV5T2e9eLFJ0lwytJy'),
(9, 'DIAZ, LUIS NORBERTO', 'DIAZ', '$2y$10$AgKOxxlnZfbdBJMkpTf4pu8lK2Q.m14w9CUoEI.lSzVY0Og65/rk2'),
(10, 'GRENON, HORACIO FEDERICO', 'GRENON', '$2y$10$8mjAOcEw5zSD4kyyElz9pujqsSUqvetnevNYy/rY/wlR8sgVTNdCy'),
(11, 'GUERRA TRUJILLO, FABIAN', 'GUERRA', '$2y$10$pnG1Izbp77mv8Puw9z.IuuMlGdnKqH0QCyc218OhzV05J43SUaKdy'),
(12, 'HERRERA, JAVIER IVAN', 'HERRERA', '$2y$10$HGdP3REa/CcBd6WWqsa2duU0gYNvrcz7naczeLCJm3NXRXqnSInu.'),
(13, 'KURINCIC, GABRIEL', 'KURINCIC', '$2y$10$0HHQ4JQ8x5Se0TbSyA9raeyehdXU6MaLeWy0oG7FkwPqcYOheXcEq'),
(14, 'LECUNA, DIEGO', 'LECUNA', '$2y$10$18rJP44kx5kmYamZk7m5L.4f.lbOwU5l1dDT0iUQR0Ems26jdtnLW'),
(15, 'LONCON, MATIAS ALEJANDRO', 'LONCON', '$2y$10$6YlfYLvChEgjMfWFxDkhXekVERAhTb0ByTf74PvZiYLK65FT3WQV2'),
(16, 'LOPEZ, WALTER JAVIER', 'LOPEZ', '$2y$10$eitLmynndzmStcFDLIJ1BeAn5WJRdTCVCgGLFas5SeaOWqMRI40.K'),
(17, 'LUQUE SANDOVAL, HECTOR LEONARDO', 'LUQUE', '$2y$10$M4BqtiCK3DpL9k3nMYajweRaz7h7.MVVxO6JXTwy0b8fzFOIkWot6'),
(18, 'MICIOSCIA, ELIAN FABIAN', 'MICIOSCIA', '$2y$10$2UelM8cNr/RDG6.0T2HSMO7Qfl8bBwCvhx9WpFe.uxhizZ1wGXRKC'),
(19, 'OYOMEK, ROBERTO CARLOS', 'OYOMEK', '$2y$10$0OCr4gs35lBimCnOc6jGVOOJf13/AyI2gg4FGA2Y7zeS4mMwePpcK'),
(20, 'PEREZ, GUILLERMO SEBASTIAN', 'PEREZ', '$2y$10$8CLncRI67go/7nSJtxvdm.AoaoSd19fURk4ewiZCq6hYNFeQ6zhf.'),
(21, 'QUIROGA, MARCELO EMANUEL', 'QUIROGA', '$2y$10$whWFySninI3HYMqwBKk5reem87uGPjGKxTgLR66emJlMeZltVaHlm'),
(22, 'RAMIREZ, CRISTHIAN MARTIN', 'RAMIREZ', '$2y$10$7p75TQ8h5PRMyA/C0FdLT.tSHiDRc8U3MF3Z7r1JEOKq6JJa/hrJi'),
(23, 'RIVERA PUENTE, LEONEL ALEJANDRO', 'RIVERA', '$2y$10$.CUVunl2YZW2pxxC5pP5leh.gG6Yi2iHRyRspd1v2H.WitPuCPutW'),
(24, 'ROLANDO AGUILAR, JONATAN LUIS', 'ROLANDO', '$2y$10$/kiXS/Aq4sTPVO6x4.lw0eUwK2SGIYdYI/LohJAWYt9BKdBShfpxy'),
(25, 'ALGANARAZ, ISMAEL MARIO', 'ALGANARAZ', '$2y$10$ibNcBOWeVyKqWDDnqJ0LReYPyTQTV8vkskpbtac2DHRdwx3g/7iey'),
(26, 'BIANCHI, EMILIO', 'BIANCHI', '$2y$10$OyiGLzYLfPvpkZxL/q3ufuoSVRqeqEY2F9A6NMcgZqtveiZv7EoFK'),
(27, 'CARRIZO BORGAT, MATIAS MIGUEL', 'CARRIZO', '$2y$10$3ayK1Qiu4epi7PGUmfjhkuXo6RQ/noFiJlyp0ClcVpRz5jvrOoOva'),
(28, 'DELEON, PABLO ARIEL', 'DELEON', '$2y$10$a3Si4yCdCYjvjT9ddhOSyOJvXejpBOiL4CdvE75fd1YZQh4g/W4Ia'),
(29, 'GOMEZ RIJA, JOSE ALEJANDRO', 'GOMEZ', '$2y$10$A8SaGeZkhBhV0Pan2eMY6.nypITZEDzPKHHpAmfsvvKqVUcidX7V2'),
(30, 'MAMANI PALAGUERRA, ROSA NATALIA', 'MAMANI', '$2y$10$qAF.T22txuVVA3HnFEvUEulbXR.phwCrNxPZbVtW3MAWw3cD5/eru'),
(31, 'MONTEROS, IVANA CAROLINA', 'MONTEROS', '$2y$10$MKdPwYQk59RQ2dJO9Ly3bewTnj6EZ/vHO8Y8BSI.43jUJpMpwpdya'),
(32, 'POZZOLI GUTIERREZ, IGNACIO', 'POZZOLI', '$2y$10$y.Cd0Iwc99XgV.wus5wKPuFfOV2jqbJBdD9opd8oEGuW/7qfkrXZq'),
(33, 'QUIROGA, FACUNDO', 'QUIROGA', '$2y$10$FVgaE61wYojQyI9N1Z7YEOl8J9sxeaFFh3s8rr.Biv7FAt2HWvtf2'),
(34, 'SENSAN MARQUEZ, LEANDRO ANDRES', 'SENSAN', '$2y$10$zd4R5yDzigFw78DL9uzawu/hvRUnIpcojR8Ou1cxqbNBSa65QxRV2'),
(35, 'TREJO, JULIO A.', 'TREJO', '$2y$10$Cg/X8RWClmJ4uocLZgLOfuquUyHv39e/IYzaShDW6AejBZoIvoMSe'),
(36, 'TULIAN, LUCAS GABRIEL ', 'TULIAN', '$2y$10$OmXwzUamxhqZ1Z71Xjs5VeuGxhd020j0A3Bzyudaf3D5TNm7p6YXu'),
(37, 'VALENZUELA, PABLO', 'VALENZUELA', '$2y$10$yaCBkzscHLlox/vUUrLNzOJUWe.HnJRCnIFNpOZExcgw6NaJxSifi'),
(38, 'VAN DEN HUEVEL, EMILIANO', 'VAN', '$2y$10$Y9kISJls8h09SA4cYlK5peU21iYJPVWdpyqC0Fr9Y1RJmUVZd7Q6u'),
(39, 'VILCA ELBIO ARIEL', 'VILCA', '$2y$10$VQ02B6tWQiVmR4HvlXtIAulV29oXjOIxKgIi5/p95TErGnKrgp3qq'),
(40, 'PERALTA EZEQUIEL DAMIAN', 'PERALTA', '$2y$10$qtOXoZbpWlDAytXVdjqjXui20lQvXfxf8lSmlU9MU5siUWprKxady'),
(41, 'SOSA MATIAS ALEJANDRO', 'SOSA', '$2y$10$KQ.080qSF5toXa.LrCRrTO6Fzjo/OB31hIJ0LJpmkx.5o44H3kgCG'),
(42, 'VARGAS SANDOVAL SERGIO', 'VARGAS', '$2y$10$QkvL3/umxksaAWSt9sLKlu/.AjRXBvXPKZQkXCCNwHbfWXTVuhj2m'),
(43, 'Troncoso Gustavo', 'GUSTAVO', '$2y$10$paFfJXpbQ0kNkYlrkDrA4ebfhH6eMzQgyrQ5MPgmHj85.HYaFEGVe'),
(44, 'Arisaga, Gloria', 'GLORIA', '$2y$10$HnooleQzgcbNLJZ6vccyfO8lipWW6p3AGFlTudcQwmAHT5qrNNaXS'),
(45, 'Pastorino, Mariela', 'PASTORINO', '$2y$10$RKl/E9Y5f/AIWuDASwJ08.16/SDG1iv5YjmEPEKWaQ8A2jbGgmoKK'),
(46, 'Sandra, Almada', 'SANDRA', '$2y$10$phhK6VxfKcSsOh1Bb43Gf.ol1f/QV4yKm3scjdT9DsDjp1htMxhni'),
(47, 'Barboza, Marta', 'BARBOZA', '$2y$10$pUmLA3Uz7fmT/xVth98J0um/4gItYSU7JtpxLaJcwAQ7.luNbpS4S'),
(48, 'Ledesma, Rodrigo', 'LEDESMA', '$2y$10$Mg752RtpQPAcsPWBvb73OOCxBiPLPjIcU7uNGeY2bI9KWF0AdvJY6'),
(49, 'Maza, Daiana', 'MAZA', '$2y$10$gJSn/vv/3BJEB.xbXT/Uxua0kFA44rFVfJOSb35PlLA.8xu5NjYAO'),
(50, 'Roldan, Liliana', 'LILIANA', '$2y$10$cRPqDXbW6mZn/LoS4SRWdux1vimQsIpBl/jWRpy8yFRyr8URCEqOq'),
(51, 'Jose Guenchur', 'JOSE', '$2y$10$YXpsVZRSBLwSYMMfw8oYWuC6xyFeHeDG.wFghRf3aOscJ2epR5RiW');

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
  MODIFY `ID_COLEGIO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
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
  MODIFY `ID_USUARIO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
