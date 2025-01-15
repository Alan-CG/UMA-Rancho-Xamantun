-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 15-01-2025 a las 22:34:23
-- Versión del servidor: 8.0.30
-- Versión de PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `uma_xamantun`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `avistamientos_animales`
--

CREATE TABLE `avistamientos_animales` (
  `id_avistamiento` int NOT NULL,
  `id_avistamiento_especie` int NOT NULL,
  `fecha_avistamiento` date DEFAULT NULL,
  `latitud` decimal(11,8) DEFAULT NULL,
  `longitud` decimal(11,8) DEFAULT NULL,
  `descripcion` varchar(600) DEFAULT NULL,
  `ruta_imagen` varchar(600) DEFAULT NULL,
  `activo` int NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `avistamientos_animales`
--

INSERT INTO `avistamientos_animales` (`id_avistamiento`, `id_avistamiento_especie`, `fecha_avistamiento`, `latitud`, `longitud`, `descripcion`, `ruta_imagen`, `activo`, `created_at`, `updated_at`) VALUES
(1, 2, '2025-01-15', 19.84503700, -90.53707100, 'Avistamiento de tapir por la noche', 'uploads/avistamientos_fauna/img_6788353c0bae16.33524770.jpg', 1, '2025-01-15 22:22:52', '2025-01-15 16:30:26'),
(2, 1, '2025-01-15', 19.84503700, -90.53707100, 'Avistamiento de jaguar por la noche', 'uploads/avistamientos_fauna/img_67883577391e77.56158349.jpg', 1, '2025-01-15 22:23:51', '2025-01-15 16:23:51');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `avistamientos_flora`
--

CREATE TABLE `avistamientos_flora` (
  `id_avistamiento` int NOT NULL,
  `id_avistamiento_especie` int NOT NULL,
  `fecha_avistamiento` date DEFAULT NULL,
  `latitud` decimal(11,8) DEFAULT NULL,
  `longitud` decimal(11,8) DEFAULT NULL,
  `descripcion` varchar(600) DEFAULT NULL,
  `ruta_imagen` varchar(600) DEFAULT NULL,
  `activo` int NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `modified_at` datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `avistamientos_flora`
--

INSERT INTO `avistamientos_flora` (`id_avistamiento`, `id_avistamiento_especie`, `fecha_avistamiento`, `latitud`, `longitud`, `descripcion`, `ruta_imagen`, `activo`, `created_at`, `modified_at`) VALUES
(1, 1, '2025-01-15', 19.84503700, -90.53707100, 'Avistamiento de mangle', 'uploads/avistamientos_flora/img_678836b0444a38.37534582.jpg', 1, '2025-01-15 22:29:04', '2025-01-15 16:29:04'),
(2, 2, '2025-01-15', 19.84503700, -90.53707100, 'Avistamiento de Siricote', 'uploads/avistamientos_flora/img_678836de06faa0.42619683.jpg', 1, '2025-01-15 22:29:50', '2025-01-15 16:29:50');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `especies_animales`
--

CREATE TABLE `especies_animales` (
  `id_especie` int NOT NULL,
  `nombre_cientifico` varchar(80) DEFAULT NULL,
  `nombre_comun` varchar(80) DEFAULT NULL,
  `reino` varchar(80) DEFAULT NULL,
  `filo` varchar(80) DEFAULT NULL,
  `clase` varchar(80) DEFAULT NULL,
  `orden` varchar(80) DEFAULT NULL,
  `familia` varchar(80) DEFAULT NULL,
  `genero` varchar(80) DEFAULT NULL,
  `especie` varchar(80) DEFAULT NULL,
  `descripcion_fisica` varchar(1200) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `habitat` varchar(800) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `estado_conservacion` varchar(50) DEFAULT NULL,
  `activo` int NOT NULL DEFAULT '1' COMMENT 'Esta variable se usa para definir si el registro está activo y debe mostrarse o por si el contrario está inactivo y no debe mostrarse',
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `especies_animales`
--

INSERT INTO `especies_animales` (`id_especie`, `nombre_cientifico`, `nombre_comun`, `reino`, `filo`, `clase`, `orden`, `familia`, `genero`, `especie`, `descripcion_fisica`, `habitat`, `estado_conservacion`, `activo`, `created_at`, `updated_at`) VALUES
(1, 'Panthera onca', 'jaguar', 'Animalia', 'Chordata', 'Mammalia', 'Carnivora', 'Felidae', 'Panthera', 'P. onca', 'Es un animal robusto y musculoso que presenta variaciones significativas en cuanto al tamaño, con un peso que oscila normalmente entre 56 y 96 kilogramos, aunque hay registros de machos más grandes, de hasta 160 kg (aproximadamente como una tigresa o una leona),y por el contrario los más pequeños pueden tener un peso tan bajo como 36 kg. Las hembras suelen ser un 10-20 % más pequeñas que los machos. La longitud de este félido varía entre 162 y 183 cm y la cola puede añadir unos 75 cm más. Su altura hasta los hombros o la cruz es de unos 67-76 cm.​ Su cabeza es voluminosa y con una mandíbula prominente; el color de sus ojos varía de un tono amarillo oro a un amarillo verdoso y sus orejas son relativamente pequeñas y redondeadas.4', 'El hábitat de P. onca incluye las selvas húmedas de Centro y Sudamérica, zonas húmedas abiertas y de forma estacional inundadas, y praderas secas. De entre estos hábitats, prefiere el bosque denso;este félido ha perdido terreno más rápidamente en las regiones más secas, como la pampa argentina o las praderas áridas de México y el suroeste de los Estados Unidos,', 'Casi amenazado', 1, '2025-01-15 22:19:20', '2025-01-15 16:19:20'),
(2, 'Tapirus bairdii', 'Tapir', 'Animalia', 'Chordata', 'Mammalia', 'Perissodactyta', 'Tapiridae', 'Tapirus', 'T. bairdii', 'Alcanza entre 2 y 2,2 m de longitud, 1 m de alzada y 300 kg de peso. Presenta crin corta, hocico largo y robusto con una característica nariz en forma de trompa, pelaje pardo a grisáceo, el borde de la oreja blanco y el del labio blancuzco a grisáceo.', 'Esta especie prefiere los bosques tropicales húmedos, hasta los 3,600 m s. n. m.,y viven siempre cerca de algún curso de agua. Es en esos ambientes donde encuentra su alimento en abundancia.', 'En peligro', 1, '2025-01-15 22:21:16', '2025-01-15 16:21:16');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `especies_flora`
--

CREATE TABLE `especies_flora` (
  `id_especie` int NOT NULL,
  `nombre_cientifico` varchar(80) DEFAULT NULL,
  `nombre_comun` varchar(80) DEFAULT NULL,
  `reino` varchar(80) DEFAULT NULL,
  `filo` varchar(80) DEFAULT NULL,
  `clase` varchar(80) DEFAULT NULL,
  `orden` varchar(80) DEFAULT NULL,
  `familia` varchar(80) DEFAULT NULL,
  `genero` varchar(80) DEFAULT NULL,
  `especie` varchar(80) DEFAULT NULL,
  `descripcion_fisica` varchar(1200) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `habitat` varchar(800) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `estado_conservacion` varchar(50) DEFAULT NULL,
  `activo` int NOT NULL DEFAULT '1' COMMENT 'Esta variable se usa para definir si el registro está activo y debe mostrarse o por si el contrario está inactivo y no debe mostrarse',
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `especies_flora`
--

INSERT INTO `especies_flora` (`id_especie`, `nombre_cientifico`, `nombre_comun`, `reino`, `filo`, `clase`, `orden`, `familia`, `genero`, `especie`, `descripcion_fisica`, `habitat`, `estado_conservacion`, `activo`, `created_at`, `updated_at`) VALUES
(1, 'Rhizophora mangle ', 'Mangle rojo', 'Plantae', 'Fanerógama', 'Magnoliopsida', 'Malpighiales', 'Rhizophoraceae', 'Rhizophora', 'R. mangle', 'Los árboles de Rhizophora mangle son de 4 a 10 metros de alto, su forma es de árbol o arbusto perennifolio, halófilo,en el tronco se encuentran apoyadas numerosas raíces aéreas simples o dicotómicamente ramificadas con numerosas lenticelas, la corteza es de color olivo pálido con manchas grises, sin embargo en el interior es de color rojizo, su textura es de lisa a levemente rugosa con apariencia fibrosa.Las hojas son simples, opuestas, pecioladas, de hoja redondeada, elípticas a oblongas, estas se aglomeran en las puntas de las ramas, su color es verde oscuro en el haz y amarillentas en el envés.', 'Los manglares rojos se encuentran en zonas subtropicales y tropicales de ambos hemisferios, extendiéndose hasta cerca de los 28° de latitud norte a sur.Prosperan en las costas de agua salobre y en marismas pantanosas.Al estar bien adaptados al agua salada, prosperan donde muchas otras plantas fracasan y crean sus propios ecosistemas, los manglares.', 'Preocupación menor', 1, '2025-01-15 22:26:17', '2025-01-15 16:26:17'),
(2, 'Cordia dodecandra', 'Siricote', 'Plantae', 'Magnoliophyta', 'Magnoliopsida', 'Lamiales', 'Boraginaceae', 'Cordia', 'C. dodecandra', 'Árbol de tamaño mediano cuya altura oscila de 10 a 30 m de altura y con un diámetro de 40-70 cm. Presenta un tronco cilíndrico y recto de corteza rugosa y color gris, con ramas que crecen en forma ascendente. Las hojas, de forma elíptica a ovalada, tienen una longitud de 7-15 cm y ancho de 3-8 cm. El color del haz es verde oscuro, mientras que el envés presenta un verde grisáceo. Por ambos lados muestran una textura fibrosa con apéndices epidérmicos rígidos. Los árboles mayores de 15 años presentan una copa menos densa que los árboles jóvenes.', 'La distribución del siricote en México se presenta en la Península de Yucatán, Campeche, Quintana Roo y las partes bajas de Chiapas, Tabasco y Veracruz, también en partes de Belice, Guatemala.', 'Preocupación menor', 1, '2025-01-15 22:28:17', '2025-01-15 16:28:17');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `avistamientos_animales`
--
ALTER TABLE `avistamientos_animales`
  ADD PRIMARY KEY (`id_avistamiento`),
  ADD KEY `fk_id_avistamiento_especie` (`id_avistamiento_especie`);

--
-- Indices de la tabla `avistamientos_flora`
--
ALTER TABLE `avistamientos_flora`
  ADD PRIMARY KEY (`id_avistamiento`),
  ADD KEY `fk_avistamiento_especie_flora` (`id_avistamiento_especie`);

--
-- Indices de la tabla `especies_animales`
--
ALTER TABLE `especies_animales`
  ADD PRIMARY KEY (`id_especie`);

--
-- Indices de la tabla `especies_flora`
--
ALTER TABLE `especies_flora`
  ADD PRIMARY KEY (`id_especie`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `avistamientos_animales`
--
ALTER TABLE `avistamientos_animales`
  MODIFY `id_avistamiento` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `avistamientos_flora`
--
ALTER TABLE `avistamientos_flora`
  MODIFY `id_avistamiento` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `especies_animales`
--
ALTER TABLE `especies_animales`
  MODIFY `id_especie` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `especies_flora`
--
ALTER TABLE `especies_flora`
  MODIFY `id_especie` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `avistamientos_animales`
--
ALTER TABLE `avistamientos_animales`
  ADD CONSTRAINT `avistamientos_animales_ibfk_1` FOREIGN KEY (`id_avistamiento_especie`) REFERENCES `especies_animales` (`id_especie`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `avistamientos_flora`
--
ALTER TABLE `avistamientos_flora`
  ADD CONSTRAINT `avistamientos_flora_ibfk_1` FOREIGN KEY (`id_avistamiento_especie`) REFERENCES `especies_flora` (`id_especie`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
