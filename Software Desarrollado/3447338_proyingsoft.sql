-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Servidor: fdb25.awardspace.net
-- Tiempo de generación: 29-05-2020 a las 11:43:02
-- Versión del servidor: 5.7.20-log
-- Versión de PHP: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `3447338_proyingsoft`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Encabezados`
--

CREATE TABLE `Encabezados` (
  `encabezado` varchar(500) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `Encabezados`
--

INSERT INTO `Encabezados` (`encabezado`) VALUES
('Prueba de Que Funciona el encabezado'),
('Please take a moment to complete this form. Some questions may not apply and may be left unanswered. The information you share will help the Registered Dietitian have a better understanding of your needs. Please bring this questionnaire with you to your appointment. \r\n');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `EnferAdmin`
--

CREATE TABLE `EnferAdmin` (
  `enfermedad` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `EnferAdmin`
--

INSERT INTO `EnferAdmin` (`enfermedad`) VALUES
('Obesidad'),
('Obesidad'),
('diabetes');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `historiaclinica`
--

CREATE TABLE `historiaclinica` (
  `cedula_paciente` int(11) DEFAULT NULL,
  `cedula_nutricionista` int(11) DEFAULT NULL,
  `fecha_hora` datetime DEFAULT NULL,
  `motivo_consulta` varchar(255) DEFAULT NULL,
  `enfermedades_diagnosticadas` text,
  `alimentos_alergia` text,
  `medicamentos_alergia` text,
  `medicamentos_ingiere` text,
  `vitaminas_suplementos_ingiere` text,
  `ultimos_examenes` text,
  `estado_gestacion` varchar(255) DEFAULT NULL,
  `anticonceptivos_ingiere` varchar(255) DEFAULT NULL,
  `frecuencia_anticonceptivos` varchar(255) DEFAULT NULL,
  `desea_perder_peso` varchar(255) DEFAULT NULL,
  `formas_perder_peso` text,
  `peso_ideal` double DEFAULT NULL,
  `mayor_peso` double DEFAULT NULL,
  `fecha_mayor_peso` datetime DEFAULT NULL,
  `menor_peso` double DEFAULT NULL,
  `fecha_menor_peso` datetime DEFAULT NULL,
  `fuma` tinyint(1) DEFAULT NULL,
  `bebe` tinyint(1) DEFAULT NULL,
  `psicoactivas` tinyint(1) DEFAULT NULL,
  `ha_intentado_perder_peso` tinyint(1) DEFAULT NULL,
  `ha_ingerido_med_bajar_peso` tinyint(1) DEFAULT NULL,
  `come_fuera_control` tinyint(1) DEFAULT NULL,
  `Forma_come_fuera_control` text,
  `realiza_ejercicio` tinyint(1) DEFAULT NULL,
  `frecuencia_ejercicio` varchar(255) DEFAULT NULL,
  `tiempo_ejercicio` double DEFAULT NULL,
  `dificultades_ejercicio` text,
  `nivel_conocimiento` int(11) DEFAULT NULL,
  `aplicacion_conocimiento` int(11) DEFAULT NULL,
  `ejercicio_que_gusta` text,
  `cambios_gustaria_realizar` text,
  `barreras_cambios` text,
  `nivel_estres` int(11) DEFAULT NULL,
  `habitos_alimenticios` text,
  `alimentos_no_agrandan` text,
  `hora_mas_hambre` varchar(255) DEFAULT NULL,
  `tipo_grasa` varchar(255) DEFAULT NULL,
  `tipo_comida_frecuenta` text,
  `expectativa_asesoria` text,
  `alimentos_desayuno` text,
  `alimentos_mediamanana` text,
  `alimentos_almuerzo` text,
  `alimentos_mediatarde` text,
  `alimentos_cena` text,
  `alimentos_medianoche` text,
  `horas_duerme` double DEFAULT NULL,
  `litros_agua_dia` double DEFAULT NULL,
  `presion_arterial` double DEFAULT NULL,
  `medicamentos_recetados` text,
  `desayuno_recomendado` text,
  `mediamanana_recomendada` text,
  `almuerzo_recomendado` text,
  `mediatarde_recomendada` text,
  `cena_recomendada` text,
  `media_noche_recomendada` text,
  `alimentos_restringidos` text,
  `ejercicio_recomendado` text,
  `frecuencia_ejercicio_rec` text,
  `tiempo_dejercicio_rec` text,
  `diagnostico_final` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Preguntas`
--

CREATE TABLE `Preguntas` (
  `pregunta` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `Preguntas`
--

INSERT INTO `Preguntas` (`pregunta`) VALUES
('¿Usted Fuma?'),
('bebe'),
('¿Usted Consume Drogas?');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `residencia`
--

CREATE TABLE `residencia` (
  `id` int(11) NOT NULL,
  `Pais` varchar(255) DEFAULT NULL,
  `Ciudad` varchar(255) DEFAULT NULL,
  `Direccion` varchar(255) DEFAULT NULL,
  `cedula_propietario` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `cedula` int(11) NOT NULL,
  `tipo_persona` int(11) DEFAULT NULL,
  `PrimerNombre` varchar(255) DEFAULT NULL,
  `SegundoNombre` varchar(255) DEFAULT NULL,
  `PrimerApellido` varchar(255) DEFAULT NULL,
  `SegundoApellido` varchar(255) DEFAULT NULL,
  `Telefono` int(11) DEFAULT NULL,
  `Correo` varchar(255) DEFAULT NULL,
  `Sexo` varchar(255) DEFAULT NULL,
  `Edad` int(11) DEFAULT NULL,
  `Estatura` double DEFAULT NULL,
  `Peso` double DEFAULT NULL,
  `Ocupacion` varchar(255) DEFAULT NULL,
  `id_residencia` int(11) DEFAULT NULL,
  `clave` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`cedula`, `tipo_persona`, `PrimerNombre`, `SegundoNombre`, `PrimerApellido`, `SegundoApellido`, `Telefono`, `Correo`, `Sexo`, `Edad`, `Estatura`, `Peso`, `Ocupacion`, `id_residencia`, `clave`) VALUES
(1234, 1, 'Admin', 'Admin2', 'Admin3', 'Admin4', 3105261, 'Admin@gmail.com', 'M', 20, 165, 70, 'Administrador', 1, 1234),
(1234567, 2, 'khaterine', NULL, 'camacho', 'calderon', 3105261, 'katherine@gmail.com', 'F', 20, 165, 70, 'Nutricionista', 1, 123),
(12345678, 2, 'jeison', 'Fernando', 'Garces', 'Castañeda', 3105261, 'jeison@gmail.com', 'masculino', 20, 1, 70, 'Estudiante', 1, 123),
(123456789, 2, 'juan', 'jose', 'hoyos', 'urcue', 1234, 'juan@gmail.com', 'M', 20, 165, 70, 'Nutricionista', 1, 123);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `residencia`
--
ALTER TABLE `residencia`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cedula_propietario` (`cedula_propietario`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`cedula`);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `residencia`
--
ALTER TABLE `residencia`
  ADD CONSTRAINT `residencia_ibfk_1` FOREIGN KEY (`cedula_propietario`) REFERENCES `usuario` (`cedula`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
