-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 15-04-2017 a las 23:14:30
-- Versión del servidor: 10.1.21-MariaDB
-- Versión de PHP: 5.6.30

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
(7, 'Fernando Rogelio GarcÃ­a Carral', '12982648', 'JosÃ© Ingenieros 851', '  Colegio Provincial Haspen - \"Profesor Luis Adan Felippa\"', 940011500, 'Rio Grande', 'Norte'),
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

--
-- Volcado de datos para la tabla `comodatarios`
--

INSERT INTO `comodatarios` (`ID_COMODATARIO`, `TIPO_COM`, `DNI_COM`, `APEYNOM`, `DNI_ADULTO`, `APEYNOM_A`, `SERIE`, `MARCA`, `MODELO`, `ID_COLEGIO_FK`) VALUES
(1, 'alumno', 123456789, 'Gomez Juan', '987654321', 'Gomez Jose', 'aa123456789', 'EXO', 'E10IS', 0),
(2, 'alumno', 987654321, 'Ramirez Juan', '123456789', 'Ramirez Jose', 'aa987654321', 'EXO', 'E11IS2', 0),
(5, 'alumno', 111222333, 'Sosa Juan', '333222111', 'Sosa Jose', 'aa123456789', 'EXO', 'E10IS', 11),
(4, 'alumno', 999999999, 'Crespo Juan', '123456789', 'Crespo Jose', 'aa123456789', 'EXO', 'E10IS', 5),
(6, 'alumno', 444555666, 'Gallo Juan', '77788899', 'Gallo Jose', 'aa123456789', 'EXO', 'E10IS', 19),
(7, 'docente', 999888777, 'Gaitan Juan', NULL, NULL, 'aa123456789', 'EXO', 'E10IS', 19),
(8, 'alumno', 789456123, 'Perez Ramon', '789456789', 'Perez Jose', 'aa888555333', 'Samsung', '100NZC', 18),
(9, 'alumno', 456123123, 'Aranda Ramon', '789456789', 'Perez Jose', 'AA456789456', 'Samsung', '100NZC', 18),
(10, 'docente', 777555333, 'Fernandez Juan', NULL, NULL, 'AA999666333', 'CX', 'NT1015E', 18);

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

--
-- Volcado de datos para la tabla `parque_escolar`
--

INSERT INTO `parque_escolar` (`ID_MAQUINA`, `ID_COLEGIO_FK`, `SERIE`, `MARCA`, `MODELO`, `ESTADO`, `ESTADO_EQUIPO`) VALUES
(4, 5, 'AA777555333', 'PC-BOX', 'NT1015E', 'prestada', ' ok'),
(7, 5, 'AA123456456', 'Samsung', '100NZC', 'disponible', ' EstÃ¡ bien.'),
(6, 5, 'AA123456789', 'EXO', 'E10IS', 'disponible', ' ok');

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

--
-- Volcado de datos para la tabla `prestamos`
--

INSERT INTO `prestamos` (`ID_PRESTAMO`, `DNI`, `APEYNOM`, `ID_MAQUINA_FK`, `CARGADOR`, `VIGENTE`, `TIPO_COM_PRE`, `ADEUDA_BATERIA`, `ADEUDA_CARGADOR`, `ADEUDA_ANTENA`, `MOTIVO_PRESTAMO`) VALUES
(62, 444555666, 'Gaitan Juan', 6, 1, 0, 0, '', '', '', ''),
(63, 11222333, 'Gallo Juan', 4, 1, 0, 0, '', '', '', ''),
(61, 111222333, 'Gallo Juan', 4, 1, 0, 0, '', '', '', ''),
(60, 111222333, 'Gallo Juan', 4, 1, 0, 0, '', '', '', ''),
(59, 111222333, 'Gallo Juan', 4, 1, 0, 0, '', '', '', ''),
(58, 444555666, 'Gaitan Juan', 6, 1, 0, 0, '', '', '', ''),
(57, 111222333, 'Gallo Juan', 4, 1, 0, 0, '', '', '', ''),
(56, 444555666, 'Gaitan Juan', 6, 1, 0, 0, '', '', '', ''),
(55, 1123456789, 'Gallo Juan', 4, 1, 0, 0, '', '', '', ''),
(54, 444555666, 'Gaitan Juan', 6, 1, 0, 0, '', '', '', ''),
(53, 111222333, 'Gallo Juan', 4, 1, 0, 0, '', '', '', ''),
(52, 999666333, 'Gallo Juan', 4, 1, 0, 0, '', '', '', ''),
(51, 85234697, 'Gallo Juan', 4, 1, 0, 0, '', '', '', ''),
(50, 777888999, 'Crespo Juan', 2, 1, 0, 0, '', '', '', ''),
(49, 777888999, 'Perez Juan', 1, 1, 0, 0, '', '', '', ''),
(65, 111222333, 'Gallo Juan', 4, 1, 0, 0, '', '', '', ''),
(64, 444555666, 'Gaitan Juan', 6, 1, 0, 0, '', '', '', ''),
(66, 444555666, 'Gaitan Jose', 6, 1, 0, 0, '', '', '', ''),
(67, 111222333, 'Gallo Juan', 4, 1, 0, 0, '', '', '', ''),
(68, 444555666, 'Gaitan Jose', 6, 1, 0, 0, '', '', '', ''),
(69, 111222333, 'Gallo Juan', 4, 1, 0, 0, '', '', '', ''),
(70, 111222333, 'Gallo Juan', 4, 1, 0, 0, '', '', '', ''),
(71, 444555666, 'Gaitan Juan', 6, 1, 0, 0, '', '', '', ''),
(72, 111222333, 'Gallo Juan', 4, 1, 0, 0, '', '', '', ''),
(73, 111222333, 'Gallo Juan', 4, 1, 0, 0, '', '', '', ''),
(74, 111222333, 'Gallo Juan', 4, 1, 0, 0, '', '', '', ''),
(75, 111222333, 'Gallo Juan', 4, 1, 0, 0, '', '', '', ''),
(76, 111222333, 'Gallo Juan', 4, 1, 0, 0, '', '', '', ''),
(77, 444555666, 'Gaitan Juan', 6, 1, 0, 0, '', '', '', ''),
(78, 111222333, 'Gallo Juan', 4, 1, 0, 0, '', '', '', ''),
(79, 444555666, 'Gallo Juan', 4, 1, 0, 0, '', '', '', ''),
(80, 11122233, 'Gallo Juan', 4, 1, 0, 0, '', '', '', ''),
(81, 444555666, 'Gaitan Juan', 6, 1, 0, 0, '', '', '', ''),
(82, 37909122, 'Gallo Juan', 4, 1, 0, 0, '', '', '', ''),
(83, 37909122, 'Gallo Juan', 4, 1, 0, 0, '', '', '', ''),
(84, 37909122, 'Gallo Juan', 4, 1, 0, 0, '', '', '', ''),
(85, 37909122, 'Gallo Juan', 4, 1, 0, 0, '', '', '', ''),
(86, 37909122, 'Gallo Juan', 6, 1, 0, 0, '', '', '', ''),
(87, 37909122, 'Gallo Juan', 6, 1, 0, 0, '', '', '', ''),
(88, 37909122, 'Gallo Juan', 6, 1, 0, 0, '', '', '', ''),
(89, 37829937, 'Ramallo Juan', 1, 1, 0, 0, '', '', '', ''),
(90, 37939049, 'Troncoso Gustavo', 1, 1, 0, 0, '', '', '', ''),
(91, 37939049, 'Troncoso Gustavo', 1, 1, 0, 0, '', '', '', ''),
(92, 37939049, 'Troncoso Gustavo', 1, 1, 0, 0, '', '', '', ''),
(93, 37939049, 'Troncoso Gustavo', 1, 1, 0, 0, '', '', '', ''),
(94, 37939049, 'Troncoso Gustavo', 1, 1, 0, 0, '', '', '', ''),
(95, 37939049, 'Troncoso Gustavo', 1, 1, 0, 0, '', '', '', ''),
(96, 37939049, 'Troncoso Gustavo', 1, 1, 0, 0, '', '', '', ''),
(97, 37939049, 'Troncoso Gustavo', 1, 1, 0, 0, '', '', '', ''),
(98, 1234679, 'Troncoso Gustavo', 1, 1, 0, 0, '', '', '', ''),
(99, 543143, 'Troncoso Gustavo', 2, 1, 0, 0, '', '', '', ''),
(100, 37909122, 'Trocnoso Gustavo', 4, 1, 0, 0, '', '', '', ''),
(101, 37909122, 'Troncoso Gustavo', 6, 1, 0, 0, '', '', '', ''),
(102, 37909122, 'Troncoso GUstavo', 1, 1, 0, 0, '', '', '', ''),
(103, 37909122, 'Troncoso Gustavo', 1, 1, 0, 0, '', '', '', ''),
(104, 37909122, 'Troncoso Gustavo', 2, 1, 0, 0, '', '', '', ''),
(105, 37909122, 'Troncoso GUstavo', 4, 1, 0, 0, '', '', '', ''),
(106, 37909122, 'Troncoso GUstavo', 6, 1, 0, 0, '', '', '', ''),
(107, 37909122, 'Troncoso Gustavo', 1, 1, 0, 0, '', '', '', ''),
(108, 37909122, 'Troncoso Gustavo', 2, 1, 0, 0, '', '', '', ''),
(109, 379091221, 'Troncosoosoo Gustavoovovo', 4, 1, 0, 0, '', '', '', ''),
(110, 379094320, 'Toroncoo Gustavo', 6, 1, 0, 0, '', '', '', ''),
(111, 37909122, 'Troncsoo Gustavo', 1, 1, 0, 0, '', '', '', ''),
(112, 4321, 'fdsaf fdsfda', 4, 1, 0, 0, '', '', '', ''),
(113, 2147483647, 'Troncoso Fugifos', 6, 1, 0, 0, '', '', '', ''),
(114, 379094321, 'troncodso fdjsioaf', 1, 1, 0, 0, '', '', '', ''),
(115, 473218, 'tjrioej gjdiosj', 4, 1, 0, 0, '', '', '', ''),
(116, 584849, 'fjdisojfdios fdjsiojfdso', 6, 1, 0, 0, '', '', '', ''),
(117, 43214231, 'Troncoo fjdiosjfdos', 1, 1, 0, 0, '', '', '', ''),
(118, 53214321, 'jfiodsjfio fjdsoijd', 4, 1, 0, 0, '', '', '', ''),
(119, 887483949, 'fdmsoifjds jfdoisjf', 6, 1, 0, 0, '', '', '', ''),
(120, 1123456789, 'fdsaf dsafdsaf', 1, 1, 0, 0, '', '', '', ''),
(121, 165494, 'sdfiojf jdsiojfds', 4, 1, 0, 0, '', '', '', ''),
(122, 12314568, 'fjdiosjfio fjdsiofjds', 6, 1, 0, 0, '', '', '', ''),
(123, 12345689, 'Gallo Juan', 1, 1, 0, 0, '', '', '', ''),
(124, 123456789, 'Gaitan Juan', 4, 1, 0, 0, '', '', '', ''),
(125, 878976515, 'sndkjsad jdsihdj', 6, 1, 0, 0, '', '', '', ''),
(126, 54648645, 'jjsjah dsjkd', 1, 1, 0, 0, '', '', '', ''),
(127, 5465446, 'dldkle dedweoil', 4, 1, 0, 0, '', '', '', ''),
(128, 123456789, 'Gallo Juan', 6, 1, 0, 0, '', '', '', ''),
(129, 123456789, 'Gallo Juan', 1, 1, 0, 0, '', '', '', ''),
(130, 456789123, 'Gallo Juan', 6, 1, 0, 0, '', '', '', ''),
(131, 123456789, 'Gaitan juan', 4, 1, 0, 0, '', '', '', ''),
(132, 123456879, 'Gallo Juan', 6, 1, 0, 0, '', '', '', ''),
(133, 777888999, 'Gaitan Jose', 4, 1, 0, 0, '', '', '', ''),
(134, 123456789, 'Gallo Juan', 6, 1, 0, 0, '', '', '', ''),
(135, 777888999, 'Gaitan Jose', 4, 1, 0, 0, '', '', '', ''),
(136, 123456789, 'Gallo Juan', 1, 1, 0, 0, '', '', '', ''),
(137, 123123123, 'Gaitan Jose', 6, 1, 0, 0, '', '', '', ''),
(138, 123123123, 'Gaitan Juan', 4, 1, 0, 0, '', '', '', ''),
(139, 444555666, 'Crespo Jose', 4, 1, 0, 0, '', '', '', ''),
(140, 777888999, 'Gallo Juan', 4, 1, 0, 0, '', '', '', ''),
(141, 123456789, 'Gaitan Jose', 6, 1, 0, 0, '', '', '', ''),
(143, 789456789, 'Gaitan Juan', 6, 1, 0, 0, '', '', '', ''),
(145, 11122233, 'Gallo Juan', 6, 1, 0, 0, '', '', '', ''),
(148, 111222333, 'Crespo Juan', 4, 1, 0, 0, '', '', '', ''),
(149, 111222333, 'Crespo Juan', 4, 1, 0, 0, '', '', '', ''),
(152, 852963963, 'Lopez Jose', 6, 1, 0, 0, '', '', '', ''),
(153, 852963963, 'Lopez Jose', 6, 1, 0, 0, '', '', '', ''),
(154, 777777777, 'Caceres Juan', 4, 1, 0, 0, '', '', '', ''),
(155, 888888888, 'Cordonier Juan', 6, 1, 0, 0, '', '', '', ''),
(157, 111222333, 'Rolon Jose', 4, 1, 0, 0, '', '', '', ''),
(158, 777888999, 'Ramos Juan', 6, 0, 0, 1, '', '', '', ''),
(160, 2147483647, 'Juan Juan', 4, 1, 0, 0, '', '', '', ''),
(161, 777888999, 'Perez Juan', 6, 1, 0, 0, '', '', '', ''),
(162, 852852852, 'Juan Juan', 4, 1, 0, 0, '', '', '', ''),
(163, 963963963, 'Juan JUan', 6, 1, 0, 0, '', '', '', ''),
(165, 741741741, 'Juan Juan', 4, 1, 0, 0, '', '', '', ''),
(166, 7878789, 'Jose Jose', 6, 1, 0, 0, '', '', '', ''),
(168, 741741741, 'Juan Juan', 4, 1, 0, 0, '', '', '', ''),
(169, 741741741, 'Casto Juan', 6, 0, 0, 1, '', '', '', ''),
(171, 963964, 'Rberto Juan', 4, 1, 0, 0, '', '', '', ''),
(212, 32109441, 'Casto Juan', 4, 1, 1, 0, '', '', '', 'net_st'),
(211, 12345789, 'Casto Juan', 6, 1, 0, 0, '1', '0', '0', 'cue_ext_jur');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `ID_USUARIO` int(11) NOT NULL,
  `NOMBRE_ATEI` varchar(80) NOT NULL,
  `USUARIO` varchar(20) NOT NULL,
  `PASS` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`ID_USUARIO`, `NOMBRE_ATEI`, `USUARIO`, `PASS`) VALUES
(1, 'ALMADA, DIEGO', 'ALMADA', 'ALM6455'),
(2, 'BREMSZ, CARLOS', 'BREMSZ', 'BRE8438'),
(3, 'BRIZUELA, EDUARDO NICOLAS', 'BRIZUELA', 'BRI4385'),
(4, 'CABRAL, JUAN NAHUEL', 'CABRAL', 'CAB7906'),
(5, 'CASTO CRESPO, JUAN PABLO', 'CRESPO', 'CRE3803'),
(6, 'CEBALLOS, GERMAN ABAD', 'CEBALLOS', 'CEB1978'),
(7, 'CONSTENLA, NAHUEL SANTIAGO', 'CONSTENLA', 'CON6689'),
(8, 'CORDOBA, SERGIO', 'CORDOBA', 'COR4903'),
(9, 'DIAZ, LUIS NORBERTO', 'DIAZ', 'DIA5588'),
(10, 'GRENON, HORACIO FEDERICO', 'GRENON', 'GRE2576'),
(11, 'GUERRA TRUJILLO, FABIAN', 'GUERRA', 'GUE8010'),
(12, 'HERRERA, JAVIER IVAN', 'HERRERA', 'HER3003'),
(13, 'KURINCIC, GABRIEL', 'KURINCIC', 'KUR2852'),
(14, 'LECUNA, DIEGO', 'LECUNA', 'LEC8486'),
(15, 'LONCON, MATIAS ALEJANDRO', 'LONCON', 'LON9902'),
(16, 'LOPEZ, WALTER JAVIER', 'LOPEZ', 'LOP1795'),
(17, 'LUQUE SANDOVAL, HECTOR LEONARDO', 'LUQUE', 'LUQ3909'),
(18, 'MICIOSCIA, ELIAN FABIAN', 'MICIOSCIA', 'MIC6139'),
(19, 'OYOMEK, ROBERTO CARLOS', 'OYOMEK', 'OYO2384'),
(20, 'PEREZ, GUILLERMO SEBASTIAN', 'PEREZ', 'PER9941'),
(21, 'QUIROGA, MARCELO EMANUEL', 'QUIROGA', 'QUI4853'),
(22, 'RAMIREZ, CRISTHIAN MARTIN', 'RAMIREZ', 'RAM6658'),
(23, 'RIVERA PUENTE, LEONEL ALEJANDRO', 'RIVERA', 'RIV3234'),
(24, 'ROLANDO AGUILAR, JONATAN LUIS', 'ROLANDO', 'ROL4727'),
(25, 'ALGANARAZ, ISMAEL MARIO', 'ALGANARAZ', 'ALG4758'),
(26, 'BIANCHI, EMILIO', 'BIANCHI', 'BIA6797'),
(27, 'CARRIZO BORGAT, MATIAS MIGUEL', 'CARRIZO', 'CAR1997'),
(28, 'DELEON, PABLO ARIEL', 'DELEON', 'DEL4109'),
(29, 'GOMEZ RIJA, JOSE ALEJANDRO', 'GOMEZ', 'GOM9173'),
(30, 'MAMANI PALAGUERRA, ROSA NATALIA', 'MAMANI', 'MAM2249'),
(31, 'MONTEROS, IVANA CAROLINA', 'MONTEROS', 'MON1715'),
(32, 'POZZOLI GUTIERREZ, IGNACIO', 'POZZOLI', 'POZ6298'),
(33, 'QUIROGA, FACUNDO', 'QUIROGA', 'QUI8071'),
(34, 'SENSAN MARQUEZ, LEANDRO ANDRES', 'SENSAN', 'SEN4646'),
(35, 'TREJO, JULIO A.', 'TREJO', 'TRE5263'),
(36, 'TULIAN, LUCAS GABRIEL ', 'TULIAN', 'TUL3299'),
(37, 'VALENZUELA, PABLO', 'VALENZUELA', 'VAL2018'),
(38, 'VAN DEN HUEVEL, EMILIANO', 'VAN', 'VAN1674'),
(39, 'VILCA ELBIO ARIEL', 'VILCA', 'VIL4760'),
(40, 'PERALTA EZEQUIEL DAMIAN', 'PERALTA', 'PER1071'),
(41, 'SOSA MATIAS ALEJANDRO', 'SOSA', 'SOS8391'),
(42, 'VARGAS SANDOVAL SERGIO', 'VARGAS', 'VAR4733');

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
  ADD PRIMARY KEY (`ID_COMODATARIO`);

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
  MODIFY `ID_COMODATARIO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;
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
  MODIFY `ID_MAQUINA` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT de la tabla `prestamos`
--
ALTER TABLE `prestamos`
  MODIFY `ID_PRESTAMO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=213;
--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `ID_USUARIO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
