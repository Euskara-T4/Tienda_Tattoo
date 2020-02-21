-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 21-02-2020 a las 09:01:46
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `tfg`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `argazkia`
--

CREATE TABLE `argazkia` (
  `img_id` int(10) UNSIGNED NOT NULL,
  `izena` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `langile_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `argazkia`
--

INSERT INTO `argazkia` (`img_id`, `izena`, `url`, `langile_id`, `created_at`, `updated_at`) VALUES
(1, 'chicaLobo', '../public/img/ivan_morant/chicaLobo.PNG', 3, '2020-02-21 07:01:21', '2020-02-21 07:01:21'),
(2, 'hombreTigre', '../public/img/ivan_morant/hombreTigre.PNG', 3, '2020-02-21 07:01:21', '2020-02-21 07:01:21'),
(3, 'perfil', '../public/img/ivan_morant/Perfil.jpg', 3, '2020-02-21 07:01:21', '2020-02-21 07:01:21'),
(4, 'drStone', '../public/img/ivan_pelegrin/drStone.jpg', 2, '2020-02-21 07:01:21', '2020-02-21 07:01:21'),
(5, 'gogeta', '../public/img/ivan_pelegrin/gogeta.PNG', 2, '2020-02-21 07:01:21', '2020-02-21 07:01:21'),
(6, 'inuyasha', '../public/img/ivan_pelegrin/inuyasha.PNG', 2, '2020-02-21 07:01:21', '2020-02-21 07:01:21'),
(7, 'perfil', '../public/img/ivan_pelegrin/perfil.jpg', 2, '2020-02-21 07:01:22', '2020-02-21 07:01:22'),
(8, 'columna', '../public/img/yennick/columna.jpg', 4, '2020-02-21 07:01:22', '2020-02-21 07:01:22'),
(9, 'cuello', '../public/img/yennick/cuello.jpg', 4, '2020-02-21 07:01:22', '2020-02-21 07:01:22'),
(10, 'pomulo', '../public/img/yennick/pomulo.jpg', 4, '2020-02-21 07:01:22', '2020-02-21 07:01:22'),
(11, 'espalda', '../public/img/yennick/espalda.jpg', 4, '2020-02-21 07:01:22', '2020-02-21 07:01:22'),
(12, 'nariz', '../public/img/yennick/nariz.jpg', 4, '2020-02-21 07:01:22', '2020-02-21 07:01:22'),
(13, 'oreja', '../public/img/yennick/oreja.jpg', 4, '2020-02-21 07:01:22', '2020-02-21 07:01:22'),
(14, 'pecho', '../public/img/yennick/pecho.jpg', 4, '2020-02-21 07:01:22', '2020-02-21 07:01:22'),
(15, 'elimnacion 1', '../public/img/paula/1.jpg', 1, '2020-02-21 07:01:22', '2020-02-21 07:01:22'),
(16, 'eliminacion 2', '../public/img/paula/2.jpg', 1, '2020-02-21 07:01:22', '2020-02-21 07:01:22'),
(17, 'eliminacion 3', '../public/img/paula/3.jpg', 1, '2020-02-21 07:01:22', '2020-02-21 07:01:22'),
(18, 'elimacion 4', '../public/img/paula/4.jpg', 1, '2020-02-21 07:01:22', '2020-02-21 07:01:22'),
(19, 'perfil', '../public/img/paula/perfil.jpg', 1, '2020-02-21 07:01:22', '2020-02-21 07:01:22'),
(20, 'burjula', '../public/img/mike/brujula.jpg', 2, '2020-02-21 07:01:22', '2020-02-21 07:01:22'),
(21, 'flor', '../public/img/mike/flor.PNG', 2, '2020-02-21 07:01:22', '2020-02-21 07:01:22'),
(22, 'flor2', '../public/img/mike/flor2.PNG', 2, '2020-02-21 07:01:22', '2020-02-21 07:01:22'),
(23, 'escarificacion', '../public/img/mike/escar.jpg', 2, '2020-02-21 07:01:22', '2020-02-21 07:01:22'),
(24, 'perfil', '../public/img/mike/perfil.jpg', 2, '2020-02-21 07:01:22', '2020-02-21 07:01:22');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `lana`
--

CREATE TABLE `lana` (
  `lana_id` int(10) UNSIGNED NOT NULL,
  `izena` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `lana`
--

INSERT INTO `lana` (`lana_id`, `izena`, `created_at`, `updated_at`) VALUES
(1, 'tattoo', '2020-02-21 07:01:20', '2020-02-21 07:01:20'),
(2, 'piercing', '2020-02-21 07:01:20', '2020-02-21 07:01:20'),
(3, 'microdermal', '2020-02-21 07:01:20', '2020-02-21 07:01:20'),
(4, 'escarificacion', '2020-02-21 07:01:20', '2020-02-21 07:01:20'),
(5, 'eliminacion de tattoo', '2020-02-21 07:01:20', '2020-02-21 07:01:20');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `langilea`
--

CREATE TABLE `langilea` (
  `langile_id` int(10) UNSIGNED NOT NULL,
  `izena` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abizena` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lana_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `langilea`
--

INSERT INTO `langilea` (`langile_id`, `izena`, `abizena`, `lana_id`, `created_at`, `updated_at`) VALUES
(1, 'Ivan', 'Pelegrin', 1, '2020-02-21 07:01:21', '2020-02-21 07:01:21'),
(2, 'Ivan', 'Morant', 1, '2020-02-21 07:01:21', '2020-02-21 07:01:21'),
(3, 'Mike', 'Perez', 2, '2020-02-21 07:01:21', '2020-02-21 07:01:21'),
(4, 'Yannic', 'Grennier', 3, '2020-02-21 07:01:21', '2020-02-21 07:01:21'),
(5, 'Paula', 'Goméz', 4, '2020-02-21 07:01:21', '2020-02-21 07:01:21');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(8, '2014_10_12_000000_create_users_table', 1),
(9, '2014_10_12_100000_create_password_resets_table', 1),
(10, '2019_08_19_000000_create_failed_jobs_table', 1),
(11, '2020_02_14_122704_create_lana_table', 1),
(12, '2020_02_14_122936_create_langilea_table', 1),
(13, '2020_02_14_122955_create_zita_table', 1),
(14, '2020_02_14_123019_create_argazkia_table', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `erabiltzailea_id` int(10) UNSIGNED NOT NULL,
  `izena` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abizena` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pasahitza` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin` int(11) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`erabiltzailea_id`, `izena`, `abizena`, `email`, `pasahitza`, `admin`, `email_verified_at`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'administrador', 'admin@gmail.com', '$2y$10$MS/QBp2JxHo4f1fYA9vAp.ScFVPKMzLib97TH/aCEcgq988Uq/Rwa', 1, NULL, NULL, '2020-02-21 07:01:21', '2020-02-21 07:01:21');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `zita`
--

CREATE TABLE `zita` (
  `zita_id` int(10) UNSIGNED NOT NULL,
  `erabiltzailea_id` int(10) UNSIGNED NOT NULL,
  `descripcion` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lana_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `argazkia`
--
ALTER TABLE `argazkia`
  ADD PRIMARY KEY (`img_id`),
  ADD KEY `argazkia_langile_id_foreign` (`langile_id`);

--
-- Indices de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `lana`
--
ALTER TABLE `lana`
  ADD PRIMARY KEY (`lana_id`);

--
-- Indices de la tabla `langilea`
--
ALTER TABLE `langilea`
  ADD PRIMARY KEY (`langile_id`),
  ADD KEY `langilea_lana_id_foreign` (`lana_id`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`erabiltzailea_id`);

--
-- Indices de la tabla `zita`
--
ALTER TABLE `zita`
  ADD PRIMARY KEY (`zita_id`),
  ADD KEY `zita_erabiltzailea_id_foreign` (`erabiltzailea_id`),
  ADD KEY `zita_lana_id_foreign` (`lana_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `argazkia`
--
ALTER TABLE `argazkia`
  MODIFY `img_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `lana`
--
ALTER TABLE `lana`
  MODIFY `lana_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `langilea`
--
ALTER TABLE `langilea`
  MODIFY `langile_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `erabiltzailea_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `zita`
--
ALTER TABLE `zita`
  MODIFY `zita_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `argazkia`
--
ALTER TABLE `argazkia`
  ADD CONSTRAINT `argazkia_langile_id_foreign` FOREIGN KEY (`langile_id`) REFERENCES `langilea` (`langile_id`);

--
-- Filtros para la tabla `langilea`
--
ALTER TABLE `langilea`
  ADD CONSTRAINT `langilea_lana_id_foreign` FOREIGN KEY (`lana_id`) REFERENCES `lana` (`lana_id`);

--
-- Filtros para la tabla `zita`
--
ALTER TABLE `zita`
  ADD CONSTRAINT `zita_erabiltzailea_id_foreign` FOREIGN KEY (`erabiltzailea_id`) REFERENCES `users` (`erabiltzailea_id`),
  ADD CONSTRAINT `zita_lana_id_foreign` FOREIGN KEY (`lana_id`) REFERENCES `lana` (`lana_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
