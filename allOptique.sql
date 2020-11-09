-- --------------------------------------------------------
-- Hôte :                        localhost
-- Version du serveur:           5.7.24 - MySQL Community Server (GPL)
-- SE du serveur:                Win64
-- HeidiSQL Version:             10.2.0.5599
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Listage de la structure de la base pour alloptique
CREATE DATABASE IF NOT EXISTS `alloptique` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `alloptique`;

-- Listage de la structure de la table alloptique. categories
CREATE TABLE IF NOT EXISTS `categories` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Listage des données de la table alloptique.categories : ~3 rows (environ)
/*!40000 ALTER TABLE `categories` DISABLE KEYS */;
INSERT INTO `categories` (`id`, `name`, `created_at`, `updated_at`) VALUES
	(1, 'Women', NULL, '2020-11-07 21:45:42'),
	(2, 'man', '2020-11-07 21:40:40', '2020-11-07 21:40:40'),
	(3, 'kids', '2020-11-08 08:41:23', '2020-11-08 08:41:23');
/*!40000 ALTER TABLE `categories` ENABLE KEYS */;

-- Listage de la structure de la table alloptique. failed_jobs
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Listage des données de la table alloptique.failed_jobs : ~0 rows (environ)
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;

-- Listage de la structure de la table alloptique. marques
CREATE TABLE IF NOT EXISTS `marques` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Listage des données de la table alloptique.marques : ~3 rows (environ)
/*!40000 ALTER TABLE `marques` DISABLE KEYS */;
INSERT INTO `marques` (`id`, `name`, `image`, `created_at`, `updated_at`) VALUES
	(1, 'RayBan', 'marque/mark1.png', NULL, '2020-11-07 21:59:47'),
	(2, 'GUCCI', 'marque/mark2.png', '2020-11-07 22:07:21', '2020-11-07 22:07:35'),
	(3, 'Boss', 'marque/mark3.png', '2020-11-07 22:07:56', '2020-11-07 22:08:13');
/*!40000 ALTER TABLE `marques` ENABLE KEYS */;

-- Listage de la structure de la table alloptique. migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Listage des données de la table alloptique.migrations : ~16 rows (environ)
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(1, '2014_10_12_000000_create_users_table', 1),
	(2, '2014_10_12_100000_create_password_resets_table', 1),
	(3, '2019_08_19_000000_create_failed_jobs_table', 1),
	(4, '2020_11_07_213740_create_categories_table', 2),
	(5, '2020_11_07_213844_create_marques_table', 2),
	(6, '2020_11_07_214016_create_products_table', 2),
	(7, '2020_11_07_214641_add_categorie_id_to_products_table', 2),
	(8, '2020_11_07_214726_add_marque_id_to_products_table', 2),
	(9, '2020_11_07_215108_add_categori_id_to_products_table', 3),
	(10, '2020_11_07_215127_add_mark_id_to_products_table', 3),
	(11, '2020_11_08_074527_add_image_one_to_products_table', 4),
	(12, '2020_11_08_074650_add_image_two_to_products_table', 4),
	(13, '2020_11_08_074706_add_image_tree_to_products_table', 4),
	(14, '2020_11_08_075606_add_image_1_to_products_table', 5),
	(15, '2020_11_08_075622_add_image_2_to_products_table', 5),
	(16, '2020_11_08_075637_add_image_3_to_products_table', 5);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;

-- Listage de la structure de la table alloptique. password_resets
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Listage des données de la table alloptique.password_resets : ~0 rows (environ)
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;

-- Listage de la structure de la table alloptique. products
CREATE TABLE IF NOT EXISTS `products` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `marques_id` bigint(20) unsigned NOT NULL,
  `categories_id` bigint(20) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` double(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `image_one` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_two` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_three` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `products_categories_id_foreign` (`categories_id`),
  KEY `products_marques_id_foreign` (`marques_id`),
  CONSTRAINT `products_categories_id_foreign` FOREIGN KEY (`categories_id`) REFERENCES `categories` (`id`),
  CONSTRAINT `products_marques_id_foreign` FOREIGN KEY (`marques_id`) REFERENCES `marques` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Listage des données de la table alloptique.products : ~3 rows (environ)
/*!40000 ALTER TABLE `products` DISABLE KEYS */;
INSERT INTO `products` (`id`, `marques_id`, `categories_id`, `name`, `description`, `image`, `price`, `created_at`, `updated_at`, `image_one`, `image_two`, `image_three`) VALUES
	(1, 3, 1, 'produit 1', 'description du produit 1', 'product/lunettr8.png', 1000.00, NULL, '2020-11-08 08:36:10', 'product/lunette7.png', 'product/lunette5.png', 'product/lunette4.png'),
	(2, 1, 1, 'produit 1', 'Etiam diam eros, suscipit nec semper at, dapibus sit amet ante. Sed ante nisi, elementum ac luctus et, tincidunt non nulla.', 'product/lunette2.png', 2000.00, '2020-11-08 07:35:39', '2020-11-08 08:37:08', 'product/lunette1.png', 'product/lunette3.png', 'product/lunette2.png'),
	(4, 1, 3, 'Produit 3', 'Etiam diam eros, suscipit nec semper at, dapibus sit amet ante. Sed ante nisi, elementum ac luctus et, tincidunt non nulla.', 'product/lunette4.png', 1000.00, '2020-11-08 08:42:50', '2020-11-08 08:42:50', 'product/lunette7.png', 'product/lunettr8.png', 'product/lunette5.png');
/*!40000 ALTER TABLE `products` ENABLE KEYS */;

-- Listage de la structure de la table alloptique. users
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
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Listage des données de la table alloptique.users : ~1 rows (environ)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
	(1, 'allOptique', 'allOptique@gmail.com', NULL, '$2y$10$MOzOkATDhdTg6CXTx2BpiOfZ97qWHrozZvIiOeFJ.kMSW3bZdi2VC', 'W4DOIhLFoJsDiy3y4jfMrdEbJvsqRVOvxcWrogyT7Z5YQOhogx89SyfdJo0p', '2020-11-07 14:26:02', '2020-11-07 14:26:02');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
