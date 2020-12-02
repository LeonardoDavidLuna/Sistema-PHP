-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 12-04-2016 a las 01:18:38
-- Versión del servidor: 5.5.24-log
-- Versión de PHP: 5.4.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `rentas`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE IF NOT EXISTS `clientes` (
  `id_cliente` int(11) NOT NULL AUTO_INCREMENT,
  `usuario` varchar(64) NOT NULL,
  `password` varchar(60) DEFAULT NULL,
  `tipo` int(11) NOT NULL,
  `email` varchar(64) NOT NULL,
  PRIMARY KEY (`id_cliente`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`id_cliente`, `usuario`, `password`, `tipo`, `email`) VALUES
(1, 'Maria del Pilar', 'maria', 0, 'maria@live.com'),
(2, 'Nicolas', 'nick', 0, 'leo'),
(3, 'Alfredo', 'alfredo', 0, ''),
(4, 'Jorge Perez', 'jorge', 1, ''),
(5, 'Marco Soto', 'marco', 1, ''),
(6, 'Camacho', 'camacho', 1, ''),
(7, 'Jose Luis', 'jose', 1, ''),
(8, 'Carlos', 'carlos', 1, ''),
(10, 'David', 'david', 1, 'david@live.com'),
(11, 'Leonardo', 'Leo', 0, 'leonard_dave_nick@hotmail.com'),
(12, 'Juan', 'juan', 1, 'juan@live.com'),
(14, 'Juanito', 'juanito', 1, 'juanito@live.com'),
(16, 'Alma', 'alma', 1, 'alma@live.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `copias`
--

CREATE TABLE IF NOT EXISTS `copias` (
  `id_copia` int(11) DEFAULT NULL,
  `formato` varchar(30) DEFAULT NULL,
  `precio` int(11) DEFAULT NULL,
  `titulo` varchar(60) DEFAULT NULL,
  `cliente` varchar(30) DEFAULT NULL,
  `fecha_inicio` date DEFAULT NULL,
  `fecha_fin` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `copias`
--

INSERT INTO `copias` (`id_copia`, `formato`, `precio`, `titulo`, `cliente`, `fecha_inicio`, `fecha_fin`) VALUES
(100, 'VHS', 30, 'Blade Runner', 'Jorge Perez', '2016-04-05', '2016-04-13'),
(101, 'DVD', 20, 'Alien', 'David', '2016-04-07', '2016-04-14'),
(102, 'BETA', 30, 'Doce Monos', 'Marco Soto', '2016-04-07', '2016-04-14'),
(103, 'VHS', 20, 'Contact', 'David', '2016-04-05', '2016-04-12'),
(104, 'VHS', 15, 'Alien', 'Marco Soto', '2016-04-04', '2016-04-15'),
(105, 'BETA', 30, 'Alien', 'Alma', '2016-04-07', '2016-04-14'),
(106, 'BETA', 20, 'Avatar', NULL, NULL, NULL),
(107, 'DVD', 20, 'Contact', 'Jose Luis', '2016-04-03', '2016-04-30'),
(108, 'DVD', 20, 'Doce Monos', 'Camacho', '2016-04-07', '2016-04-23'),
(109, 'VHS', 20, 'Scary Movie 3', 'Carlos', '2016-04-12', '2016-04-21'),
(110, 'DVD', 40, 'Destino Final 4', NULL, NULL, NULL),
(111, 'BETA', 15, 'Mi Novio es un Zombi', 'Camacho', '2016-04-22', '2016-04-30'),
(112, 'VHS', 20, 'Terror en Chernobil', 'Carlos', '2016-04-10', '2016-04-22'),
(113, 'DVD', 30, 'Asesino del Futuro', NULL, NULL, NULL),
(114, 'BETA', 15, 'Hostel Parte III', 'Marco Soto', '2016-04-03', '2016-04-13'),
(115, 'VHS', 15, 'Resident Evil', 'Jorge Perez', '2016-04-11', '2016-04-22'),
(116, 'DVD', 30, 'Archivo 253', 'Carlos', '2016-04-04', '2016-04-12'),
(117, 'DVD', 15, 'Prisionera del Espacio', NULL, NULL, NULL),
(118, 'BETA', 15, 'Casese Quien Pueda', NULL, NULL, NULL),
(119, 'BETA', 20, 'Archivo 253', NULL, NULL, NULL),
(120, 'DVD', 30, 'Archivo 253', 'Marco Soto', '2016-04-06', '2016-04-13'),
(121, 'BETA', 15, 'Asesino del Futuro', 'Juanito', '2016-04-07', '2016-04-14'),
(122, 'VHS', 15, 'Asesino del Futuro', NULL, NULL, NULL),
(123, 'DVD', 30, 'Avatar', NULL, NULL, NULL),
(124, 'BETA', 20, 'Avatar', 'Alma', '2016-04-08', '2016-04-15'),
(125, 'DVD', 15, 'Blade Runner', NULL, NULL, NULL),
(126, 'VHS', 25, 'Blade Runner', NULL, NULL, NULL),
(127, 'DVD', 15, 'Casese Quien Pueda', 'Alma', '2016-04-07', '2016-04-14'),
(128, 'DVD', 25, 'Casese Quien Pueda', NULL, NULL, NULL),
(129, 'DVD', 20, 'Avengers', 'David', '2016-04-06', '2016-04-14'),
(130, 'VHS', 40, 'La mujer maravilla', 'Alma', '2016-04-08', '2016-04-15');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pelicula`
--

CREATE TABLE IF NOT EXISTS `pelicula` (
  `id_pelicula` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(64) NOT NULL,
  `director` varchar(128) NOT NULL,
  `actor` varchar(128) NOT NULL,
  `categoria` varchar(20) DEFAULT NULL,
  `imagen` varchar(50) DEFAULT NULL,
  `descripcion` tinytext,
  `ranking` int(3) DEFAULT NULL,
  PRIMARY KEY (`id_pelicula`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Volcado de datos para la tabla `pelicula`
--

INSERT INTO `pelicula` (`id_pelicula`, `titulo`, `director`, `actor`, `categoria`, `imagen`, `descripcion`, `ranking`) VALUES
(1, 'Blade Runner', 'Ridley Scott', 'Harrison Ford', 'Accion', 'imagen1.jpg', 'La pelicula describe un futuro en el que humanos artificiales son fabricados a traves de la ingenieria genetica, a los que se denomina "replicantes"; son empleados en trabajos peligrosos y como esclavos en las "colonias exteriores" de la Tierra.', 45),
(2, 'Alien', 'Ridley Scott', 'Sigourney Weaver', 'Ciencia Ficion', 'imagen2.jpg', 'Hace referencia a una criatura alienigena que acecha a la tripulacion de una nave espacial.', 34),
(3, 'Doce monos', 'Terry Gilliam', 'Bruce Willis', 'Fantasia', 'imagen3.jpg', 'Esla historia de un prisionero llamado James Cole que en un mundo postapocaliptico, se ofrece como voluntario para un experimento cientifico para viajar al pasado y saber que provoco la situacion en la que se vive en el futuro.', 50),
(4, 'Contact', 'Robert Zemeckis', 'Jodie Foster', 'Ciencia Ficcion', 'imagen4.jpg', 'la Dr. Eleanor "Ellie" Arroway, una cientifico del SETI que encuentra pruebas fehacientes de vida extraterrestre y es elegida para tomar contacto por primera vez.', 45),
(5, 'Tron', 'Steven Lisberger', 'Jeff Bridges', 'Ciencia Ficcion', 'imagen5.jpg', 'Flynn era un programador joven y presumido que trabajaba en la megacorporacion ENCOM pero fue engañado por Dillinger respecto a las ganancias y autoria de los juegos que ha creado. Dillinger vende sus juegos y pasaron a su propiedad.', 75),
(6, 'Star Wars', 'George Lucas', 'Harrison Ford', 'Ciencia Ficcion', 'imagen6.jpg', 'una franquicia perteneciente al genero de la opera espacial epica, concebida por el estadounidense George Lucas, quien ha sido el principal guionista, director y productor de la saga de peliculas con la que inicio la franquicia.', 60),
(7, 'Avatar', 'James Cameron', 'Sam Worthington', 'Fantasia', 'imagen7.jpg', 'Nos lleva a un mundo situado más allá de la imaginación, en donde un recién llegado de la Tierra se embarca en una aventura épica, llegando a luchar, al final, por salvar el extraño mundo al que ha aprendido a llamar su hogar. ', 80),
(8, 'Nosotros los nobles', 'Gary Alazraki', 'Luis Guerardo Mendez', 'Comedia', 'imagen8.jpg', 'Situada en la Ciudad de MÃ©xico en el aÃ±o 2013, Gonzalo Vega, gran empresario con grandes ingresos, no se da cuenta de que sus hijos: Javier, BÃ¡rbara y Carlos, no estÃ¡n haciendo nada de su vida.', 70),
(9, 'Scary Movie 3', 'David Zucker', 'Keene Ivory', 'Comedia', 'imagen9.jpg', 'Una interesante parodia a El seÃ±or de los Anillos y otras peliculas.', 90),
(10, 'Pesadilla en la calle del infierno', 'Samuel Bayer', 'Kylle Garner', 'Terror', 'imagen10.jpg', 'Freddy Krueger es un asesino serial que cruza la frontera entre los sueños y la realidad para destripar a sus victimas con sus filosos guantes.', 90),
(11, 'Destino Final 4', 'David R. Ellis', 'Marvin Eliosa', 'Suspenso', 'imagen11.jpg', 'Nick O''Bannon cree haber engañado a la muerte cuando evita que una extraña premonición se cumpla.', 70),
(12, 'Mi Novio es un Zombi', 'Jonathan Levine', 'Nicholas Hoult', 'Comedia', 'imagen12.jpg', 'Un zombie recien fallecido que se come el cerebro de un joven y absorbe sus recuerdos almacenados, se enamora de la novia de su victima.', 30),
(13, 'Terror en Chernobil', 'Bradley Parker', 'Dimitri Diatchenko', 'Suspenso', 'imagen13.jpg', 'Un grupo de amigos que viajan a Europa se encuentran en una pesadilla al quedar atrapados en Prypiat, ciudad ucraniana, abandonada tras el desastre de Chernobil.', 50),
(14, 'Asesino del Futuro', 'Rian Johnson', 'Joseph Gordon-Levitt', 'Accion', 'imagen14.jpg', 'En el 2044, un mercenario se enriquece asesinando personas que viajaron desde otro tiempo. ï¿½Quï¿½ harï¿½ cuando deba acabar consigo mismo?', 85),
(15, 'Hostel Parte III', 'Scott Spiegel', 'Kip Pardue', 'Terror', 'imagen15.jpg', 'Una despedida de soltero en Las Vegas, se convierte en un baÃ±o de sangre infernal.', 25),
(16, 'Resident Evil', 'Paul W.S. Anderson', 'Milla Jovovich', 'Accion', 'imagen16.jpg', 'Un virus letal en un centro de investigacion, hace que se selle el lugar para evitar la propagacion pero un hallazgo cambia todo y en poco tiempo se debe evitar lo peor.', 95),
(17, 'Casese Quien Pueda', 'Marco Polo Constandse', 'Marta Higareda', 'Comedia', 'imagen17.jpg', 'Ana Paula descubre a su novio engaÃ±andola. Despues de una noche de bebidas, se despierta lejos de casa, no tan seguro de querer regresar.', 70),
(18, 'Archivo 253', 'Abe Rosenberg', 'Anna Cetti', 'Terror', 'imagen18.jpg', 'Un grupo de investigadores de actividades paranormales, decide saber la verdad sobre un manicomio abandonado.', 85),
(19, 'The Town That Dreaded Sundown', 'Alfonso Gomez-Rejon', 'Addison Timblin', 'Terror', 'imagen19.jpg', 'Decadas despues del siniestro momento que vivio Texarkana, los tormentos inician de nuevo... Y una solidaria adolescente podria ser la clave para atrapar al asesino.', 70),
(20, 'Prisionera del Espacio', 'James Mather', 'Guy Pearse', 'Ciencia Ficcion', 'imagen20.jpg', 'Un agente del gobierno acusado por un crimen que no cometio. Si logra llevar a cabo una mision en el espacio, podra salir libre.', 90);

--
-- Disparadores `pelicula`
--
DROP TRIGGER IF EXISTS `bip`;
DELIMITER //
CREATE TRIGGER `bip` BEFORE INSERT ON `pelicula`
 FOR EACH ROW begin
set new.actor="Marvin Eliosa";
end
//
DELIMITER ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
