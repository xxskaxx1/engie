-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 30-08-2020 a las 01:34:56
-- Versión del servidor: 10.1.39-MariaDB
-- Versión de PHP: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `engie`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8_unicode_ci NOT NULL,
  `queue` text COLLATE utf8_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2020_08_29_160741_create_ordentrab_table', 2),
(5, '2020_08_29_160900_create_operadores_table', 2),
(6, '2020_08_29_160929_create_tipoorden_table', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `operadores`
--

CREATE TABLE `operadores` (
  `id_operador` bigint(20) UNSIGNED NOT NULL,
  `nombre` varchar(80) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `operadores`
--

INSERT INTO `operadores` (`id_operador`, `nombre`) VALUES
(1, 'JUAN MANUEL DELGADO'),
(2, 'FERNANDO TORRES '),
(4, 'SERGIO RODRIGUEZ');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ordentrab`
--

CREATE TABLE `ordentrab` (
  `id_orden` bigint(20) UNSIGNED NOT NULL,
  `fecha_creacion` datetime NOT NULL,
  `fecha_asignacion` date DEFAULT NULL,
  `fecha_ejecucion` date DEFAULT NULL,
  `id_tipo` int(10) UNSIGNED NOT NULL,
  `id_operador` int(10) UNSIGNED DEFAULT NULL,
  `resultado` text COLLATE utf8_unicode_ci,
  `valor` decimal(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `ordentrab`
--

INSERT INTO `ordentrab` (`id_orden`, `fecha_creacion`, `fecha_asignacion`, `fecha_ejecucion`, `id_tipo`, `id_operador`, `resultado`, `valor`) VALUES
(3, '2020-08-29 18:07:24', NULL, NULL, 2, 2, NULL, NULL),
(4, '2020-08-29 18:07:31', NULL, NULL, 1, NULL, NULL, NULL),
(5, '2020-08-29 19:14:22', NULL, '2020-08-30', 1, 1, 'Se cumple', '1.00'),
(6, '2020-08-29 19:26:16', '2020-08-27', '2020-08-02', 1, 2, 'Se cumple', '123.00'),
(7, '2020-08-29 19:29:29', '2020-08-01', '2020-08-06', 1, 2, 'Se cumple', '123.00'),
(8, '2020-08-29 19:30:21', '2020-08-19', '2020-08-20', 1, 2, 'Se cumple', '154.00'),
(9, '1970-01-01 12:14:32', '1970-01-01', '1970-01-01', 1, 2, 'Resuelto', '1.10'),
(78, '2020-08-29 23:31:10', '2020-08-30', '2020-08-30', 1, 2, '\'Resuelto\'', '1.10'),
(79, '2020-08-29 23:31:10', '2020-08-30', '2020-08-30', 1, 2, '\'Resuelto\'', '2.10'),
(80, '2020-08-29 23:31:10', '2020-08-30', '2020-08-30', 1, 2, '\'Resuelto\'', '3.10'),
(81, '2020-08-29 23:31:10', '2020-08-30', '2020-08-30', 1, 2, '\'Resuelto\'', '4.10'),
(82, '2020-08-29 23:31:10', '2020-08-30', '2020-08-30', 1, 2, '\'Resuelto\'', '5.10'),
(83, '2020-08-29 23:31:10', '2020-08-30', '2020-08-30', 1, 2, '\'Resuelto\'', '6.10'),
(84, '2020-08-29 23:31:10', '2020-08-30', '2020-08-30', 1, 2, '\'Resuelto\'', '7.10'),
(85, '2020-08-29 23:31:10', '2020-08-30', '2020-08-30', 1, 2, '\'Resuelto\'', '8.10'),
(86, '2020-08-29 23:31:10', '2020-08-30', '2020-08-30', 1, 2, '\'Resuelto\'', '9.10'),
(87, '2020-08-29 23:31:10', '2020-08-30', '2020-08-30', 1, 2, '\'Resuelto\'', '10.10'),
(88, '2020-08-29 23:31:10', '2020-08-30', '2020-08-30', 1, 2, '\'Resuelto\'', '11.10'),
(89, '2020-08-29 23:31:10', '2020-08-30', '2020-08-30', 1, 2, '\'Resuelto\'', '12.10'),
(90, '2020-08-29 23:31:10', '2020-08-30', '2020-08-30', 1, 2, '\'Resuelto\'', '13.10'),
(91, '2020-08-29 23:31:10', '2020-08-30', '2020-08-30', 1, 2, '\'Resuelto\'', '14.10'),
(92, '2020-08-29 23:31:10', '2020-08-30', '2020-08-30', 1, 2, '\'Resuelto\'', '15.10'),
(93, '2020-08-29 23:31:10', '2020-08-30', '2020-08-30', 1, 2, '\'Resuelto\'', '16.10'),
(104, '2020-08-29 18:07:31', '2020-08-30', '2020-08-30', 1, 2, '\'Resuelto\'', '1.10'),
(105, '2020-08-29 18:07:32', '2020-08-30', '2020-08-30', 1, 2, '\'Resuelto\'', '2.10'),
(106, '2020-08-29 18:07:33', '2020-08-30', '2020-08-30', 1, 2, '\'Resuelto\'', '3.10');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipoorden`
--

CREATE TABLE `tipoorden` (
  `id_tipo` bigint(20) UNSIGNED NOT NULL,
  `nombre` varchar(30) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `tipoorden`
--

INSERT INTO `tipoorden` (`id_tipo`, `nombre`) VALUES
(1, 'TIPO 1'),
(2, 'TIPO 2'),
(4, 'TIPO 3');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `operadores`
--
ALTER TABLE `operadores`
  ADD PRIMARY KEY (`id_operador`);

--
-- Indices de la tabla `ordentrab`
--
ALTER TABLE `ordentrab`
  ADD PRIMARY KEY (`id_orden`);

--
-- Indices de la tabla `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indices de la tabla `tipoorden`
--
ALTER TABLE `tipoorden`
  ADD PRIMARY KEY (`id_tipo`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `operadores`
--
ALTER TABLE `operadores`
  MODIFY `id_operador` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `ordentrab`
--
ALTER TABLE `ordentrab`
  MODIFY `id_orden` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=107;

--
-- AUTO_INCREMENT de la tabla `tipoorden`
--
ALTER TABLE `tipoorden`
  MODIFY `id_tipo` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
