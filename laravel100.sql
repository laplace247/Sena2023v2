-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versión del servidor:         10.4.24-MariaDB - mariadb.org binary distribution
-- SO del servidor:              Win64
-- HeidiSQL Versión:             12.4.0.6659
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Volcando estructura de base de datos para laravel100
CREATE DATABASE IF NOT EXISTS `laravel100` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;
USE `laravel100`;

-- Volcando estructura para tabla laravel100.alumnos
CREATE TABLE IF NOT EXISTS `alumnos` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `dni` varchar(8) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nombres` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `apellidos` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `alumnos_dni_unique` (`dni`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla laravel100.alumnos: ~5 rows (aproximadamente)
INSERT INTO `alumnos` (`id`, `dni`, `nombres`, `apellidos`, `created_at`, `updated_at`) VALUES
	(1, '40633367', 'Juan', 'Perez', '2023-10-22 05:10:48', '2023-10-22 05:10:48'),
	(2, '40731571', 'Marco', 'Gutierrez', '2023-10-23 04:03:14', '2023-10-23 04:03:14'),
	(3, '46731549', 'Andres', 'Lopez', '2023-10-23 04:03:24', '2023-10-23 04:03:24'),
	(4, '43721678', 'Luis', 'Cabrera', '2023-10-23 04:03:53', '2023-10-23 04:03:53'),
	(5, '45721394', 'Alonso', 'Sanchez', '2023-10-23 04:04:17', '2023-10-23 04:04:17');

-- Volcando estructura para tabla laravel100.cursos
CREATE TABLE IF NOT EXISTS `cursos` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `codigo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ciclo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `cursos_codigo_unique` (`codigo`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla laravel100.cursos: ~4 rows (aproximadamente)
INSERT INTO `cursos` (`id`, `nombre`, `codigo`, `ciclo`, `created_at`, `updated_at`) VALUES
	(1, 'Matematica', 'COD01', 'I', '2023-10-22 05:10:48', '2023-10-22 05:10:48'),
	(2, 'Programacion', 'COD02', 'I', '2023-10-22 05:10:48', '2023-10-22 05:10:48'),
	(3, 'Comunicacion', 'COD03', 'I', '2023-10-22 06:28:32', '2023-10-23 04:07:36'),
	(4, 'Fisica', 'COD04', 'I', '2023-10-23 04:05:23', '2023-10-23 04:05:23');

-- Volcando estructura para tabla laravel100.failed_jobs
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla laravel100.failed_jobs: ~0 rows (aproximadamente)

-- Volcando estructura para tabla laravel100.instructores
CREATE TABLE IF NOT EXISTS `instructores` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `dni` varchar(8) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nombres` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `apellidos` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `genero` enum('MASCULINO','FEMENINO') COLLATE utf8mb4_unicode_ci NOT NULL,
  `edad` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `instructores_dni_unique` (`dni`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla laravel100.instructores: ~0 rows (aproximadamente)
INSERT INTO `instructores` (`id`, `dni`, `nombres`, `apellidos`, `genero`, `edad`, `created_at`, `updated_at`) VALUES
	(1, '40633367', 'Alan', 'Garcia', 'MASCULINO', 30, '2023-10-22 05:10:48', '2023-10-22 05:10:48'),
	(2, '43721678', 'Jorge', 'Mamani', 'MASCULINO', 34, '2023-10-23 01:46:52', '2023-10-23 01:46:52');

-- Volcando estructura para tabla laravel100.matriculas
CREATE TABLE IF NOT EXISTS `matriculas` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `idCurso` bigint(20) unsigned NOT NULL,
  `idAlumno` bigint(20) unsigned NOT NULL,
  `idInstructor` bigint(20) unsigned DEFAULT NULL,
  `anioAcad` enum('2023-I','2023-II','2024-I','2024-II') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `matriculas_idcurso_idalumno_anioacad_unique` (`idCurso`,`idAlumno`,`anioAcad`),
  KEY `matriculas_idalumno_foreign` (`idAlumno`),
  KEY `matriculas_idinstructor_foreign` (`idInstructor`),
  CONSTRAINT `matriculas_idalumno_foreign` FOREIGN KEY (`idAlumno`) REFERENCES `alumnos` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE,
  CONSTRAINT `matriculas_idcurso_foreign` FOREIGN KEY (`idCurso`) REFERENCES `cursos` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE,
  CONSTRAINT `matriculas_idinstructor_foreign` FOREIGN KEY (`idInstructor`) REFERENCES `instructores` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla laravel100.matriculas: ~9 rows (aproximadamente)
INSERT INTO `matriculas` (`id`, `idCurso`, `idAlumno`, `idInstructor`, `anioAcad`, `created_at`, `updated_at`) VALUES
	(17, 1, 1, 1, '2023-I', '2023-10-23 02:18:25', '2023-10-23 02:18:25'),
	(18, 1, 2, 1, '2023-I', '2023-10-23 04:10:16', '2023-10-23 04:10:16'),
	(19, 4, 2, 1, '2023-I', '2023-10-23 04:10:28', '2023-10-23 04:10:28'),
	(20, 2, 3, 2, '2023-I', '2023-10-23 04:10:59', '2023-10-23 04:10:59'),
	(21, 3, 3, 1, '2023-I', '2023-10-23 04:11:08', '2023-10-23 04:11:08'),
	(22, 2, 4, 1, '2023-I', '2023-10-23 04:11:34', '2023-10-23 04:11:34'),
	(23, 4, 4, 2, '2023-I', '2023-10-23 04:11:52', '2023-10-23 04:11:52'),
	(24, 1, 5, 1, '2023-I', '2023-10-23 04:12:50', '2023-10-23 04:12:50'),
	(25, 3, 5, 2, '2023-I', '2023-10-23 04:13:02', '2023-10-23 04:13:02'),
	(27, 3, 1, 2, '2023-I', '2023-10-23 04:14:02', '2023-10-23 04:14:02');

-- Volcando estructura para tabla laravel100.migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla laravel100.migrations: ~14 rows (aproximadamente)
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(1, '2014_10_12_000000_create_users_table', 1),
	(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
	(3, '2019_08_19_000000_create_failed_jobs_table', 1),
	(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
	(5, '2023_10_05_180835_create_alumnos_table', 1),
	(6, '2023_10_06_042017_add_rows_alumnos_table', 1),
	(7, '2023_10_06_173739_create_instructores_table', 1),
	(8, '2023_10_06_173757_add_rows_instructores_table', 1),
	(9, '2023_10_14_032435_create_cursos_table', 1),
	(10, '2023_10_14_032855_add_rows_cursos_table', 1),
	(11, '2023_10_14_114836_create_matriculas_table', 1),
	(12, '2023_10_15_021756_add_rows_matriculas_table', 1),
	(13, '2023_10_15_024005_create_usuarios_table', 1),
	(14, '2023_10_15_024030_add_rows_usuarios_table', 1);

-- Volcando estructura para tabla laravel100.password_reset_tokens
CREATE TABLE IF NOT EXISTS `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla laravel100.password_reset_tokens: ~0 rows (aproximadamente)

-- Volcando estructura para tabla laravel100.personal_access_tokens
CREATE TABLE IF NOT EXISTS `personal_access_tokens` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla laravel100.personal_access_tokens: ~0 rows (aproximadamente)

-- Volcando estructura para tabla laravel100.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla laravel100.users: ~0 rows (aproximadamente)

-- Volcando estructura para tabla laravel100.usuarios
CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `usuario` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `correo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `usuarios_correo_unique` (`correo`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla laravel100.usuarios: ~0 rows (aproximadamente)
INSERT INTO `usuarios` (`id`, `usuario`, `correo`, `password`, `created_at`, `updated_at`) VALUES
	(1, 'jorge', 'jorge@gmail.com', '$2y$10$aW/wt82QoGzkChbT.LtINOmFlJo8I52LX2A4ITzPb6Oh9B3jNUEkq', '2023-10-22 05:10:51', '2023-10-22 05:10:51');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
