-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 01-12-2024 a las 23:06:07
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bd_biblioteca_central`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carreras`
--

CREATE TABLE `carreras` (
  `id` int(11) NOT NULL,
  `carrera` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `carreras`
--

INSERT INTO `carreras` (`id`, `carrera`) VALUES
(1, 'Ingeniería en Sistemas de Información'),
(2, 'Licenciatura en Administración de Empresas'),
(3, 'Ingeniería Industrial'),
(4, 'Licenciatura en Psicología'),
(5, 'Medicina');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `editoriales`
--

CREATE TABLE `editoriales` (
  `id` int(11) NOT NULL,
  `editorial` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `editoriales`
--

INSERT INTO `editoriales` (`id`, `editorial`) VALUES
(1, 'Editorial Universitaria Central'),
(2, 'Ediciones Literarias del Sur'),
(3, 'Editorial Mundo Académico'),
(4, 'Publicaciones Científicas Andes'),
(5, 'Editorial Aurora'),
(6, 'Grupo Editorial Prisma'),
(7, 'Ediciones Horizonte'),
(8, 'Editorial Siglo XXI'),
(9, 'Publicaciones Ágora'),
(10, 'Editorial Nova Cultura'),
(11, 'Editorial El Faro'),
(12, 'Ediciones del Valle'),
(13, 'Editorial Tiempo y Espacio'),
(14, 'Grupo Editorial Quimera'),
(15, 'Ediciones Solaris'),
(16, 'Editorial Nueva Frontera'),
(17, 'Publicaciones Omega'),
(18, 'Editorial Atenea'),
(19, 'Ediciones Claroscuro'),
(20, 'Editorial El Búho Sabio'),
(21, 'Ediciones Aurora Boreal'),
(22, 'Publicaciones Ícaro'),
(23, 'Editorial Terranova'),
(24, 'Grupo Editorial Epicentro'),
(25, 'Ediciones Eco Literario'),
(26, 'Editorial Letras y Saberes'),
(27, 'Publicaciones Alfa y Omega'),
(28, 'Editorial Luz del Saber'),
(29, 'Ediciones Narrativa Urbana'),
(30, 'Editorial Mundo de Papel');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `libros`
--

CREATE TABLE `libros` (
  `id` int(11) NOT NULL,
  `imagen` varchar(50) NOT NULL,
  `titulo` varchar(200) NOT NULL,
  `autor` varchar(200) NOT NULL,
  `ideditorial` int(11) NOT NULL,
  `anio` int(11) NOT NULL,
  `idusuario` int(11) DEFAULT NULL,
  `idcarrera` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `libros`
--

INSERT INTO `libros` (`id`, `imagen`, `titulo`, `autor`, `ideditorial`, `anio`, `idusuario`, `idcarrera`) VALUES
(1, 'libro1.jpg', 'Arquitectura de Computadoras', 'Patricio Quiroga', 1, 2020, 1, 1),
(2, 'libro2.jpg', 'Resolviendo problemas deBIG DATA', 'Ana García', 2, 2018, 2, 2),
(3, 'libro3.jpg', 'Curso de Android', 'Luis Pérez', 3, 2019, 3, 3),
(4, 'libro4.jpg', 'Introduccion a la Informatica', 'María López', 4, 2021, 4, 4),
(5, 'libro5.jpg', 'Scrum en Ingenieria de Software', 'Pedro Sánchez', 5, 2022, 5, 5),
(6, 'libro6.jpg', 'Cálculo Diferencial e Integral', 'Javier Ramírez', 1, 2017, 1, 1),
(7, 'libro7.jpg', 'Gestión de Recursos Humanos', 'Claudia Ortiz', 2, 2020, 2, 2),
(8, 'libro8.jpg', 'Física Aplicada para Ingeniería', 'Carlos Mendoza', 3, 2019, 3, 3),
(9, 'libro9.jpg', 'Comunicación Efectiva', 'Sara Díaz', 4, 2021, 4, 4),
(10, 'libro10.jpg', 'Manual de Derecho Constitucional', 'Miguel Torres', 5, 2018, 5, 2),
(11, 'libro11.jpg', 'Diseño de Estructuras Civiles', 'Laura Pérez', 1, 2022, 1, 1),
(12, 'libro12.jpg', 'Introducción a la Psicoterapia', 'Elena Ruiz', 2, 2021, 2, 4),
(13, 'libro13.jpg', 'Química General', 'Ricardo Gómez', 3, 2019, 3, 5),
(14, 'libro14.jpg', 'Electricidad y Magnetismo', 'Luis Ortega', 4, 2020, 4, 1),
(15, 'libro15.jpg', 'Principios de Marketing', 'Andrea González', 5, 2018, 5, 2),
(16, 'libro16.jpg', 'Microbiología Clínica', 'María Salas', 1, 2022, 1, 5),
(17, 'libro17.jpg', 'Algoritmos y Estructuras de Datos', 'Francisco Herrera', 2, 2020, 2, 1),
(18, 'libro18.jpg', 'Contabilidad Financiera', 'Lorena Pérez', 3, 2017, 3, 2),
(19, 'libro19.jpg', 'Economía Aplicada', 'Carmen López', 4, 2019, 4, 5),
(20, 'libro20.jpg', 'Biología Molecular', 'Sara Ramírez', 5, 2021, 5, 5),
(21, 'libro21.jpg', 'Teoría de Circuitos Eléctricos', 'José Martínez', 1, 2022, 1, 1),
(22, 'libro22.jpg', 'Administración Estratégica', 'Claudia Núñez', 2, 2020, 2, 2),
(23, 'libro23.jpg', 'Dinámica de Fluidos', 'Héctor Gómez', 3, 2018, 3, 3),
(24, 'libro24.jpg', 'Introducción al Derecho Penal', 'Carlos Ortega', 4, 2021, 4, 2),
(25, 'libro25.jpg', 'Farmacología Básica', 'Ana Vargas', 5, 2020, 5, 5),
(26, 'libro26.jpg', 'Estadística para Ingenieros', 'Roberto Torres', 1, 2019, 1, 3),
(27, 'libro27.jpg', 'Diseño Gráfico y Comunicación Visual', 'Laura Fernández', 2, 2022, 2, 4),
(28, 'libro28.jpg', 'Matemáticas Discretas', 'David Rojas', 3, 2018, 3, 1),
(29, 'libro29.jpg', 'Lenguaje de Programación Python', 'Patricia León', 4, 2020, 4, 1),
(30, 'libro30.jpg', 'Introducción a la Sociología', 'Carlos Castillo', 5, 2021, 5, 5),
(31, 'libro31.jpg', 'Principios de Termodinámica', 'Luis García', 1, 2019, 1, 3),
(32, 'libro32.jpg', 'Análisis Financiero Avanzado', 'Clara Vargas', 2, 2020, 2, 2),
(33, 'libro33.jpg', 'Tópicos de Mecánica Cuántica', 'Pablo Gutiérrez', 3, 2022, 3, 3),
(34, 'libro34.jpg', 'Derecho Procesal Civil', 'Raúl Herrera', 4, 2021, 4, 2),
(35, 'libro35.jpg', 'Fisiología Humana', 'Laura Molina', 5, 2018, 5, 5),
(36, 'libro36.jpg', 'Electrónica Digital', 'Roberto Sánchez', 1, 2021, 1, 1),
(37, 'libro37.jpg', 'Historia del Arte', 'María Ruiz', 2, 2020, 2, 4),
(38, 'libro38.jpg', 'Principios de Bioquímica', 'Carmen Castillo', 3, 2022, 3, 5),
(39, 'libro39.jpg', 'Teoría y Técnica de la Comunicación', 'Miguel Silva', 4, 2019, 4, 4),
(40, 'libro40.jpg', 'Análisis de Circuitos', 'José González', 5, 2020, 5, 1),
(41, 'libro41.jpg', 'Ética y Filosofía', 'Laura Martínez', 1, 2017, 1, 4),
(42, 'libro42.jpg', 'Inteligencia Artificial', 'Pablo Rojas', 2, 2021, 2, 1),
(43, 'libro43.jpg', 'Macroeconomía', 'Sofía Rodríguez', 3, 2019, 3, 5),
(44, 'libro44.jpg', 'Diseño de Bases de Datos', 'Carlos Vargas', 4, 2020, 4, 1),
(45, 'libro45.jpg', 'Cálculo Multivariable', 'Ana López', 5, 2021, 5, 3),
(46, 'libro46.jpg', 'Redes de Computadoras', 'Javier Gómez', 1, 2022, 1, 1),
(47, 'libro47.jpg', 'Investigación de Mercados', 'Lorena Fernández', 2, 2020, 2, 2),
(48, 'libro48.jpg', 'Sistemas Operativos', 'María Gutiérrez', 3, 2019, 3, 1),
(49, 'libro49.jpg', 'Derecho Internacional', 'Clara Ramírez', 4, 2020, 4, 2),
(50, 'libro50.jpg', 'Farmacología Clínica', 'Pedro Vargas', 5, 2022, 5, 5),
(51, 'libro51.jpg', 'Metodología de la Investigación', 'Sara Torres', 1, 2021, 1, 3),
(52, 'libro52.jpg', 'Análisis y Diseño de Sistemas', 'Luis Castillo', 2, 2019, 2, 1),
(53, 'libro53.jpg', 'Ingeniería de Software', 'Javier León', 3, 2020, 3, 1),
(54, 'libro54.jpg', 'Teoría Económica', 'Ana Ramírez', 4, 2022, 4, 5),
(55, 'libro55.jpg', 'Química Orgánica', 'Laura García', 5, 2018, 5, 5),
(56, 'libro56.jpg', 'Mecánica de Materiales', 'Pablo Hernández', 1, 2020, 1, 3),
(57, 'libro57.jpg', 'Desarrollo de Aplicaciones Web', 'Claudia Gutiérrez', 2, 2021, 2, 1),
(58, 'libro58.jpg', 'Derecho del Trabajo', 'Carlos Molina', 3, 2020, 3, 2),
(59, 'libro59.jpg', 'Biología Celular', 'Sofía Vargas', 4, 2019, 4, 5),
(60, 'libro60.jpg', 'Sistemas de Control', 'José Ramírez', 5, 2022, 5, 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `prestamos`
--

CREATE TABLE `prestamos` (
  `id` int(11) NOT NULL,
  `fechaprestamo` date NOT NULL,
  `fechadevolucion` date DEFAULT NULL,
  `idusuarioprestamo` int(11) NOT NULL,
  `idlibro` int(11) NOT NULL,
  `idusuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` smallint(6) NOT NULL,
  `usuario` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nombrecompleto` varchar(100) NOT NULL,
  `cu` varchar(10) NOT NULL,
  `idcarrera` int(11) NOT NULL,
  `nivel` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `usuario`, `password`, `nombrecompleto`, `cu`, `idcarrera`, `nivel`) VALUES
(1, 'usuario1@gmail.com', '8cb2237d0679ca88db6464eac60da96345513964', 'Carlos Fernández', '35-4250', 1, 2),
(2, 'usuario2@hotmail.com', '8cb2237d0679ca88db6464eac60da96345513964', 'Ana García', '35-4280', 2, 2),
(3, 'usuario3@outlook.com', '8cb2237d0679ca88db6464eac60da96345513964', 'Luis Pérez', '35-680', 3, 2),
(4, 'usuario4@yahoo.com', '8cb2237d0679ca88db6464eac60da96345513964', 'María López', '35-6874', 4, 2),
(5, 'usuario5@empresa.com', '8cb2237d0679ca88db6464eac60da96345513964', 'Pedro Sánchez', '111-542', 5, 2),
(6, 'usuario6@gmail.com', '8cb2237d0679ca88db6464eac60da96345513964', 'Javier Ramírez', '111-254', 1, 2),
(7, 'usuario7@hotmail.com', '8cb2237d0679ca88db6464eac60da96345513964', 'Claudia Ortiz', '111-699', 2, 2),
(8, 'usuario8@outlook.com', '8cb2237d0679ca88db6464eac60da96345513964', 'Carlos Mendoza', '35-6897', 3, 2),
(9, 'usuario9@yahoo.com', '8cb2237d0679ca88db6464eac60da96345513964', 'Sara Díaz', '35-1216', 4, 2),
(10, 'usuario10@empresa.com', '8cb2237d0679ca88db6464eac60da96345513964', 'Miguel Torres', '35-2222', 5, 2),
(11, 'admin@correo.com', '8cb2237d0679ca88db6464eac60da96345513964', 'Administrador', '-', 1, 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `carreras`
--
ALTER TABLE `carreras`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `editoriales`
--
ALTER TABLE `editoriales`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `libros`
--
ALTER TABLE `libros`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `prestamos`
--
ALTER TABLE `prestamos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `prestamos`
--
ALTER TABLE `prestamos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` smallint(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
