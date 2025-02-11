-- MySQL dump 10.13  Distrib 8.0.27, for macos11 (arm64)
--
-- Host: 127.0.0.1    Database: innoquest
-- ------------------------------------------------------
-- Server version	9.1.0

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `cache`
--

DROP TABLE IF EXISTS `cache`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `cache` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL,
  PRIMARY KEY (`key`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cache`
--

LOCK TABLES `cache` WRITE;
/*!40000 ALTER TABLE `cache` DISABLE KEYS */;
/*!40000 ALTER TABLE `cache` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cache_locks`
--

DROP TABLE IF EXISTS `cache_locks`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `cache_locks` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `owner` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL,
  PRIMARY KEY (`key`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cache_locks`
--

LOCK TABLES `cache_locks` WRITE;
/*!40000 ALTER TABLE `cache_locks` DISABLE KEYS */;
/*!40000 ALTER TABLE `cache_locks` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `failed_jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `failed_jobs`
--

LOCK TABLES `failed_jobs` WRITE;
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `job_batches`
--

DROP TABLE IF EXISTS `job_batches`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `job_batches` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_jobs` int NOT NULL,
  `pending_jobs` int NOT NULL,
  `failed_jobs` int NOT NULL,
  `failed_job_ids` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `options` mediumtext COLLATE utf8mb4_unicode_ci,
  `cancelled_at` int DEFAULT NULL,
  `created_at` int NOT NULL,
  `finished_at` int DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `job_batches`
--

LOCK TABLES `job_batches` WRITE;
/*!40000 ALTER TABLE `job_batches` DISABLE KEYS */;
/*!40000 ALTER TABLE `job_batches` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `jobs`
--

DROP TABLE IF EXISTS `jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `queue` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `attempts` tinyint unsigned NOT NULL,
  `reserved_at` int unsigned DEFAULT NULL,
  `available_at` int unsigned NOT NULL,
  `created_at` int unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `jobs_queue_index` (`queue`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `jobs`
--

LOCK TABLES `jobs` WRITE;
/*!40000 ALTER TABLE `jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `jobs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'0001_01_01_000000_create_users_table',1),(2,'0001_01_01_000001_create_cache_table',1),(3,'0001_01_01_000002_create_jobs_table',1),(4,'2025_02_11_051658_create_tasks_table',1),(5,'2025_02_11_052518_create_personal_access_tokens_table',1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_reset_tokens`
--

DROP TABLE IF EXISTS `password_reset_tokens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_reset_tokens`
--

LOCK TABLES `password_reset_tokens` WRITE;
/*!40000 ALTER TABLE `password_reset_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_reset_tokens` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `personal_access_tokens`
--

DROP TABLE IF EXISTS `personal_access_tokens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `personal_access_tokens` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `personal_access_tokens`
--

LOCK TABLES `personal_access_tokens` WRITE;
/*!40000 ALTER TABLE `personal_access_tokens` DISABLE KEYS */;
INSERT INTO `personal_access_tokens` VALUES (3,'App\\Models\\User',1,'amanda28@example.net','4797a2315e7932d9d718fd85b78f1e57fd489235d38ef14967902db2b3d8a7f3','[\"*\"]',NULL,NULL,'2025-02-11 00:44:41','2025-02-11 00:44:41'),(4,'App\\Models\\User',1,'amanda28@example.net','6c7dbf3dce7c0db7d1e6a32c76861b5444846a5201e4a65035a88dcb54a3ae0b','[\"*\"]',NULL,NULL,'2025-02-11 00:49:08','2025-02-11 00:49:08'),(5,'App\\Models\\User',1,'amanda28@example.net','503e7aa12338da857d50846936349f069f1fa05947c79fa6922370122288b252','[\"*\"]',NULL,NULL,'2025-02-11 00:54:15','2025-02-11 00:54:15'),(6,'App\\Models\\User',2,'troy.langosh@example.com','d2385e2e8d973b90f35bce434687fed25f09af701ad275572c732d31705886d9','[\"*\"]',NULL,NULL,'2025-02-11 01:06:33','2025-02-11 01:06:33'),(7,'App\\Models\\User',3,'lbernier@example.net','f879ebfe1e83c560bf6a79987d75f2521f2c52ce8b6be5f5d883c6164772c08d','[\"*\"]',NULL,NULL,'2025-02-11 01:16:09','2025-02-11 01:16:09'),(8,'App\\Models\\User',3,'lbernier@example.net','f35efba2d89fa25bc0cc0ace18af4673f39fe390086941253cf49a4bcb033746','[\"*\"]',NULL,NULL,'2025-02-11 01:16:19','2025-02-11 01:16:19'),(9,'App\\Models\\User',1,'amanda28@example.net','4827b51f6d603e5947682503af2eb65f16e70dc0e8cb083b7454eeae31660031','[\"*\"]',NULL,NULL,'2025-02-11 01:29:28','2025-02-11 01:29:28'),(10,'App\\Models\\User',7,'hergen','bfdbf1d45d17f996949c5ed40e99c553f712d1c73a93964f4084e04d22cd8e3b','[\"*\"]',NULL,NULL,'2025-02-11 01:29:51','2025-02-11 01:29:51'),(11,'App\\Models\\User',9,'hergen roque gamayon','8be6036cb0e5fa50d671082682e9074ebce269d8b20b9f4faef5e8ab0eb12c9f','[\"*\"]',NULL,NULL,'2025-02-11 01:31:56','2025-02-11 01:31:56'),(12,'App\\Models\\User',7,'hergen@gmail.com','068850c5bb4d2566ad1906e3a931e6ec4aff79cc9c844bd015a81a0e33565c90','[\"*\"]',NULL,NULL,'2025-02-11 01:37:29','2025-02-11 01:37:29');
/*!40000 ALTER TABLE `personal_access_tokens` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sessions`
--

DROP TABLE IF EXISTS `sessions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint unsigned DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `sessions_user_id_index` (`user_id`),
  KEY `sessions_last_activity_index` (`last_activity`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sessions`
--

LOCK TABLES `sessions` WRITE;
/*!40000 ALTER TABLE `sessions` DISABLE KEYS */;
/*!40000 ALTER TABLE `sessions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tasks`
--

DROP TABLE IF EXISTS `tasks`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tasks` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint unsigned NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('todo','in-progress','done') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'todo',
  `priority` enum('high','medium','low') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'low',
  `due_date` timestamp NULL DEFAULT NULL,
  `file_path` text COLLATE utf8mb4_unicode_ci,
  `file_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `archived` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `tasks_user_id_foreign` (`user_id`),
  CONSTRAINT `tasks_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=101 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tasks`
--

LOCK TABLES `tasks` WRITE;
/*!40000 ALTER TABLE `tasks` DISABLE KEYS */;
INSERT INTO `tasks` VALUES (1,2,'Iusto exercitationem quia eos aut sit quidem qui.','Accusamus est cum vel eum nemo molestiae. Esse qui odit aperiam sed ratione doloribus nostrum. Hic consequatur perferendis quisquam quasi cumque ea.','done','low','1978-05-21 13:20:58','https://via.placeholder.com/640x480.png/001155?text=consequatur','Saepe non nihil error eos quia.',0,'2025-02-10 22:51:47','2025-02-10 22:51:47'),(2,2,'Repellat corrupti autem a qui doloribus sit fugit.','Magnam veritatis est autem consectetur et nulla. A quis officiis ullam necessitatibus sequi rem libero. Nisi saepe voluptates non non vitae fuga quidem.','todo','high','1976-06-12 00:22:25','https://via.placeholder.com/640x480.png/0088cc?text=adipisci','Commodi magnam reprehenderit placeat.',1,'2025-02-10 22:51:47','2025-02-10 23:44:40'),(3,4,'Aliquid suscipit repellat suscipit quas reiciendis possimus nihil non.','Ut asperiores iure recusandae est aut. Accusantium accusantium dolorem laudantium. Est et unde rem similique sed possimus iure. Quia vero sequi repellat accusantium voluptatem accusantium. Aliquid ab vel non aut.','in-progress','high','1991-08-09 16:17:19','https://via.placeholder.com/640x480.png/0066aa?text=doloremque','Rem aut iure quis voluptate quae sed ut.',0,'2025-02-10 22:51:47','2025-02-10 22:51:47'),(4,3,'Doloribus commodi architecto asperiores quasi.','Expedita omnis nostrum dolorum enim. Delectus suscipit esse laudantium non ullam deserunt dolore. Numquam molestiae sunt iure reiciendis.','todo','medium','1982-05-09 14:53:19','https://via.placeholder.com/640x480.png/006655?text=rerum','Natus aut fugiat quas ab dolore reiciendis voluptas.',1,'2025-02-10 22:51:47','2025-02-10 22:56:06'),(5,4,'Reprehenderit et beatae dicta ipsa neque commodi.','Sit qui omnis quisquam ullam veritatis magnam laudantium vel. Et vero in tempore eligendi. Aliquam sit doloribus eum unde laborum.','done','high','1983-11-17 23:27:24','https://via.placeholder.com/640x480.png/00ff77?text=sapiente','Eum voluptatem excepturi sed ipsam commodi aperiam.',0,'2025-02-10 22:51:47','2025-02-10 22:51:47'),(6,1,'Enim similique facere possimus facere.','Deserunt quod aut sunt velit vero voluptatibus suscipit aliquid. Consequatur quidem vitae dicta enim ut et fugit.','in-progress','high','1976-07-30 13:31:50','https://via.placeholder.com/640x480.png/00ee11?text=blanditiis','Perspiciatis est cumque maiores unde aliquid dolores.',0,'2025-02-10 22:51:47','2025-02-10 22:51:47'),(7,4,'Pariatur quas dolor libero odio autem.','Deleniti voluptas aut nisi. Eos sint natus eos eaque placeat ducimus autem. Tempora sapiente sit blanditiis atque distinctio placeat. Omnis aut natus architecto rem culpa rerum.','todo','low','1975-05-26 10:39:58','https://via.placeholder.com/640x480.png/00ffee?text=culpa','Voluptas assumenda eveniet repudiandae cum.',0,'2025-02-10 22:51:47','2025-02-10 22:51:47'),(8,5,'Pariatur quo optio ut voluptate minima.','Labore enim officia sint labore rem. Expedita accusamus numquam cumque nostrum quibusdam dicta repellat aliquam. Et ut odio eos laborum cum ipsum est et. Minus rerum eligendi assumenda sint magni consequatur.','in-progress','medium','2010-11-11 19:38:01','https://via.placeholder.com/640x480.png/0088ff?text=rerum','Id minima qui corrupti quidem incidunt voluptate.',0,'2025-02-10 22:51:47','2025-02-10 22:51:47'),(9,2,'Magnam est cumque cum dolor ea aut.','Qui aliquid animi minus expedita possimus. Veritatis quae quia harum qui voluptas cum autem. Et iusto et est blanditiis et enim voluptatem. Tempora a quae eveniet nam.','todo','high','1995-12-27 16:29:20','https://via.placeholder.com/640x480.png/0066cc?text=aperiam','Provident velit aliquid aut sunt.',0,'2025-02-10 22:51:47','2025-02-10 22:51:47'),(10,2,'Aut reprehenderit sint qui cum commodi.','Sit exercitationem voluptas illo pariatur. Est labore et quae quis et qui. Aperiam et non delectus nesciunt aliquam omnis. Porro nobis earum officiis dolorem.','todo','medium','2001-12-04 03:39:58','https://via.placeholder.com/640x480.png/001111?text=veritatis','Cum quae molestias nulla voluptatem.',0,'2025-02-10 22:51:47','2025-02-10 22:51:47'),(11,5,'Debitis fugit qui ad quisquam nostrum iure.','Quaerat animi recusandae id dolorum at quis voluptatem. Est impedit aut quae dolores nobis rem perspiciatis. Dolorem quae deserunt rem illo sit. Accusamus rerum adipisci molestiae consequatur impedit praesentium.','done','medium','2009-05-19 11:57:58','https://via.placeholder.com/640x480.png/0011ff?text=illum','Rerum accusamus deleniti nisi ullam harum.',0,'2025-02-10 22:51:47','2025-02-10 22:51:47'),(12,4,'Iure omnis facilis aut quos fugit.','Eius totam rem saepe reprehenderit porro et. Dolorem dignissimos totam cupiditate nihil possimus. Ipsum impedit at sunt voluptas et architecto laudantium ducimus. Blanditiis vel et vel eaque quis.','in-progress','high','2019-03-28 02:52:38','https://via.placeholder.com/640x480.png/006655?text=eius','Eos totam et nisi qui aliquam.',0,'2025-02-10 22:51:47','2025-02-10 22:51:47'),(13,4,'Aut amet quis vel quis.','Deleniti incidunt inventore sit ut. Voluptas cupiditate odit quibusdam cupiditate eaque corporis voluptates. Iste omnis necessitatibus sed.','done','low','1973-02-21 17:56:33','https://via.placeholder.com/640x480.png/0033dd?text=perferendis','Debitis adipisci ducimus dolorem dignissimos aut quia.',0,'2025-02-10 22:51:47','2025-02-10 22:51:47'),(14,2,'Itaque quia sunt est error blanditiis sint.','Aliquam eveniet non dolorum odit sunt ducimus. Molestias et autem iure laborum nisi consequatur at. Nesciunt laborum minus corrupti ut architecto cumque. Excepturi officiis quo ex culpa est consequatur.','todo','high','1985-06-23 12:57:43','https://via.placeholder.com/640x480.png/00cc33?text=tempore','Eos distinctio beatae doloribus unde quia et vel.',0,'2025-02-10 22:51:47','2025-02-10 22:51:47'),(15,1,'Qui consectetur et culpa dignissimos atque adipisci et.','Illo facilis reiciendis sed sit. Animi dolorem quam aut nihil ut eligendi maxime et. Sit et voluptatem similique voluptas dolores et ut.','todo','low','2013-07-06 07:14:40','https://via.placeholder.com/640x480.png/00bb99?text=quam','Totam velit nobis cum et in quasi.',0,'2025-02-10 22:51:47','2025-02-10 22:51:47'),(16,4,'Et et praesentium labore occaecati.','Ut aliquid quo excepturi enim. Enim dolor cumque vitae inventore voluptatem qui. Ut at quia et deserunt totam expedita et eius. Ut laborum excepturi aut ducimus quibusdam.','done','low','1984-09-09 16:15:37','https://via.placeholder.com/640x480.png/001166?text=quas','Sint mollitia quibusdam praesentium non optio enim fugiat omnis.',0,'2025-02-10 22:51:47','2025-02-10 22:51:47'),(17,3,'Quo ullam officiis reiciendis ut.','Incidunt aut et repellendus quis nisi reiciendis. Veniam similique excepturi in. Omnis autem numquam reiciendis fugit vel. Cum rerum aut ut aliquid sequi doloribus.','todo','low','2015-03-10 21:18:26','https://via.placeholder.com/640x480.png/00aa99?text=commodi','Consequuntur placeat odit delectus consequatur libero ipsum.',0,'2025-02-10 22:51:47','2025-02-10 22:51:47'),(18,4,'Eos magni nam aut praesentium dignissimos autem laudantium.','Dolore aliquid animi quae saepe similique accusantium ipsum. Eveniet ducimus nemo quibusdam. Vel ut magni aspernatur nulla porro. Aperiam excepturi quis doloremque eveniet eaque.','in-progress','high','2016-11-30 20:52:01','https://via.placeholder.com/640x480.png/0077cc?text=omnis','Quae qui ut debitis a labore rerum.',0,'2025-02-10 22:51:47','2025-02-10 22:51:47'),(19,4,'Alias at quas consectetur corrupti.','Ex magni dicta delectus harum officiis facilis nisi. Vero assumenda impedit nam dolor asperiores reprehenderit. Dolor voluptas vero nisi quae eos quod. Qui doloribus voluptas mollitia qui optio sed.','done','low','1977-02-19 22:00:34','https://via.placeholder.com/640x480.png/007799?text=dolore','Quaerat id minus est vel.',0,'2025-02-10 22:51:47','2025-02-10 22:51:47'),(20,3,'Ut totam perferendis est quis.','Placeat aliquid earum excepturi aut voluptate. Laudantium facilis ut quis inventore nulla quos numquam dolorem.','done','low','1975-10-26 05:22:31','https://via.placeholder.com/640x480.png/0022ee?text=temporibus','Adipisci rerum et nihil aut modi deleniti delectus.',0,'2025-02-10 22:51:47','2025-02-10 22:51:47'),(21,4,'Sed est in ratione excepturi.','Hic voluptatem cupiditate ratione et iusto enim quidem. Est optio fugit exercitationem voluptates. Sapiente praesentium eum architecto quasi.','todo','medium','1979-01-09 12:47:49','https://via.placeholder.com/640x480.png/00ccaa?text=voluptas','Corrupti eum iste non voluptatem quo qui earum.',0,'2025-02-10 22:51:47','2025-02-10 22:51:47'),(22,3,'Porro praesentium in distinctio facere voluptatem explicabo.','Aut aut ipsa explicabo molestiae non voluptates. Non modi blanditiis ut mollitia ex et. Explicabo soluta illum doloribus non aut culpa. Itaque animi ut iusto sunt temporibus.','done','medium','2024-08-21 03:30:48','https://via.placeholder.com/640x480.png/0099ff?text=quo','Quos fugiat eum explicabo.',0,'2025-02-10 22:51:47','2025-02-10 22:51:47'),(23,4,'Sint quasi enim voluptates incidunt ex aliquid.','Dolor iure fuga quae et in id ducimus. Ut iusto consequatur accusantium temporibus.','in-progress','medium','2014-08-01 13:09:06','https://via.placeholder.com/640x480.png/007711?text=non','Repellendus commodi et velit impedit voluptatem voluptatem earum eius.',0,'2025-02-10 22:51:47','2025-02-10 22:51:47'),(24,2,'Qui corrupti est accusantium alias.','Ad voluptatem alias suscipit error omnis porro. Qui itaque sed praesentium cum accusamus enim.','done','low','2016-06-12 11:59:54','https://via.placeholder.com/640x480.png/0033ee?text=dolorem','Nihil repellat et cupiditate qui neque quos maxime et.',0,'2025-02-10 22:51:47','2025-02-10 22:51:47'),(25,1,'Laboriosam quidem nemo qui reprehenderit quis.','Odio veritatis vel provident. Ut maiores suscipit fuga. Et reprehenderit velit ea quo possimus consequatur. Dicta magni repellat et perspiciatis et harum sed.','todo','high','2015-03-11 08:47:43','https://via.placeholder.com/640x480.png/000011?text=et','Exercitationem amet enim quia voluptatibus et.',1,'2025-02-10 22:51:47','2025-02-10 23:44:47'),(26,2,'Minus odit totam iusto est.','Repudiandae explicabo aliquam numquam sit est necessitatibus ut. Saepe enim impedit quasi aut sed. Qui et esse aliquam officia. Hic laborum quo voluptas praesentium. Eum ut fugit blanditiis expedita suscipit maxime aut.','done','medium','2023-10-10 09:39:31','https://via.placeholder.com/640x480.png/0066bb?text=ipsum','Voluptatem est eos dicta commodi aut.',0,'2025-02-10 22:51:47','2025-02-10 22:51:47'),(27,3,'Neque expedita libero quam et.','Exercitationem laborum sapiente hic. Odit id non voluptatem laboriosam et. Et consequatur eos quam ipsam. Excepturi asperiores in et sit dolor eum alias.','done','medium','1985-06-22 13:02:57','https://via.placeholder.com/640x480.png/00aa44?text=debitis','Modi et omnis possimus repellendus alias qui velit.',0,'2025-02-10 22:51:47','2025-02-10 22:51:47'),(28,3,'Laborum dolor enim nihil quia.','Ea doloribus numquam vel corrupti. Occaecati provident quia nobis aliquid. Recusandae quidem illo explicabo. Fugiat dolore et et ratione consequatur est.','done','medium','2009-10-16 03:00:49','https://via.placeholder.com/640x480.png/000088?text=qui','Dolorum cupiditate omnis architecto.',0,'2025-02-10 22:51:47','2025-02-10 22:51:47'),(29,1,'Quia in molestiae sit quo.','Quis saepe dolor at sed dolorem debitis praesentium. Voluptatibus quia et doloribus. Beatae repellendus iste est molestiae. Aut exercitationem sapiente commodi tempora.','done','high','1988-05-08 03:37:05','https://via.placeholder.com/640x480.png/003366?text=dolor','Expedita explicabo rem est.',0,'2025-02-10 22:51:47','2025-02-10 22:51:47'),(30,3,'Qui impedit aut dolorem nostrum.','Id excepturi eum odit eos ut. Asperiores accusamus aspernatur nesciunt voluptatibus rerum. Totam tempore totam aperiam. Tempora perferendis ex sed occaecati ad inventore.','done','medium','2022-09-24 19:20:46','https://via.placeholder.com/640x480.png/007722?text=voluptatem','Maxime nihil dicta recusandae voluptates nam repudiandae illo voluptas.',0,'2025-02-10 22:51:47','2025-02-10 22:51:47'),(31,2,'Et perferendis repudiandae architecto quia aspernatur perferendis iste cupiditate.','Dolorem aut odio sint temporibus assumenda. Numquam aut iste illum qui ipsum neque adipisci.','in-progress','high','1998-05-03 20:02:32','https://via.placeholder.com/640x480.png/008899?text=alias','Delectus aperiam et est aperiam est.',0,'2025-02-10 22:51:47','2025-02-10 22:51:47'),(32,2,'Possimus earum a non quam ducimus repellat.','Error quae quas adipisci quae dolorem. Qui cumque ad qui ex ut sit aliquam ut. A quam consectetur deserunt qui asperiores odio et. Maxime sint delectus tenetur nostrum ducimus velit hic aliquid. Ea explicabo aut animi impedit neque.','in-progress','high','1975-12-18 11:08:54','https://via.placeholder.com/640x480.png/000022?text=sint','Minima modi voluptas in libero saepe a facilis.',0,'2025-02-10 22:51:47','2025-02-10 22:51:47'),(33,1,'Cupiditate culpa velit et libero et quia.','Itaque ut sit numquam dolorum eum alias. Accusantium alias dignissimos aut provident repellendus.','done','low','1985-03-29 23:48:19','https://via.placeholder.com/640x480.png/00aacc?text=eligendi','Quo ea deserunt numquam qui illum eligendi.',0,'2025-02-10 22:51:47','2025-02-10 22:51:47'),(34,5,'A molestiae vel nemo totam nam quibusdam vel.','Voluptatem neque asperiores aut non velit occaecati eaque. Vel itaque quos dolores atque. In nisi quos assumenda officiis.','in-progress','low','1992-11-25 12:02:26','https://via.placeholder.com/640x480.png/002222?text=placeat','Aliquam nobis laborum sunt mollitia eos quos eum.',0,'2025-02-10 22:51:47','2025-02-10 22:51:47'),(35,2,'Voluptas quidem labore iusto velit nesciunt et et.','Deleniti sit deleniti perferendis odit. Necessitatibus dolore quo maiores perspiciatis ut qui ex. Iusto dolor tempora exercitationem earum. Pariatur eos in voluptas harum sunt unde.','todo','low','1970-07-20 02:28:10','https://via.placeholder.com/640x480.png/009944?text=harum','Non dolore dolore molestiae quia sit.',0,'2025-02-10 22:51:47','2025-02-10 22:51:47'),(36,4,'At sequi doloremque ex enim ullam.','Dolores deserunt exercitationem veritatis accusantium. Unde et similique qui placeat eum necessitatibus. Harum dignissimos dolorem labore voluptate et. Cum doloremque explicabo autem nisi repellat incidunt sequi corrupti.','in-progress','medium','2021-06-16 02:02:11','https://via.placeholder.com/640x480.png/0099dd?text=dignissimos','Quam velit et pariatur ducimus nulla voluptatibus sed.',0,'2025-02-10 22:51:47','2025-02-10 22:51:47'),(37,1,'Qui et dignissimos sed.','Illo accusantium odio quidem dolores iure voluptatum ipsa. Vitae voluptatem et voluptas voluptatibus architecto in. Nostrum quidem dignissimos quia in porro voluptatem. Laborum et sit consequatur at et.','done','medium','2015-12-16 13:57:03','https://via.placeholder.com/640x480.png/005566?text=ut','Velit et aperiam sit consectetur perspiciatis.',0,'2025-02-10 22:51:47','2025-02-10 22:51:47'),(38,4,'Iste odit aut ut cupiditate.','Dolores nam fuga tempora provident excepturi consequuntur. Mollitia dolorum nihil quas. Consequuntur qui numquam commodi culpa consequatur aliquam dolor et. Consectetur sint dolorem molestiae.','done','medium','2001-06-29 16:43:15','https://via.placeholder.com/640x480.png/006666?text=perferendis','Quis nostrum vel voluptatem est.',0,'2025-02-10 22:51:47','2025-02-10 22:51:47'),(39,5,'Illo ab fugit vel nobis.','Dolores velit vel placeat consequatur aut culpa saepe. Amet laudantium praesentium illo distinctio harum. Consequuntur dolorem voluptas officia amet ducimus temporibus dicta. Cum sapiente quo optio repellat odit impedit.','done','high','1993-10-12 17:15:21','https://via.placeholder.com/640x480.png/0088dd?text=id','Perspiciatis nostrum dolor fugiat dignissimos odio.',0,'2025-02-10 22:51:47','2025-02-10 22:51:47'),(40,5,'Nobis laborum eius ratione dicta.','Dolorem error dolor atque ipsa mollitia molestiae error debitis. Iste quas dicta consequuntur soluta amet autem non officia. Sapiente alias beatae incidunt eligendi. Inventore enim rerum voluptatem vitae et perspiciatis et.','todo','low','2020-02-23 11:40:48','https://via.placeholder.com/640x480.png/003388?text=aut','Enim necessitatibus nemo possimus ut corporis sit porro.',0,'2025-02-10 22:51:47','2025-02-10 22:51:47'),(41,4,'Earum rerum soluta totam cum.','In omnis non eos aliquid quos ipsam. Vero sit cum facere est minima repudiandae et. Soluta sunt rem praesentium sint eaque.','done','high','1977-02-05 04:21:59','https://via.placeholder.com/640x480.png/00eeee?text=porro','Ducimus occaecati nesciunt sed eveniet.',0,'2025-02-10 22:51:47','2025-02-10 22:51:47'),(42,5,'Enim qui in quisquam eligendi tempora et.','Velit et perferendis alias sed ipsa. Repellat eos dolore sequi inventore accusantium dolor mollitia. Non dolorem reprehenderit ex sint.','done','high','1986-06-12 01:00:40','https://via.placeholder.com/640x480.png/00bb00?text=temporibus','Dolorum distinctio consequatur quisquam deleniti eveniet.',0,'2025-02-10 22:51:47','2025-02-10 22:51:47'),(43,1,'Molestiae aliquam dolore consequatur quidem.','Non laudantium eum culpa neque dignissimos. Laudantium ut omnis assumenda quis error eligendi molestiae. Ut aperiam veritatis quia harum amet. Ea enim ut laboriosam voluptas vel.','in-progress','medium','2023-05-04 18:45:10','https://via.placeholder.com/640x480.png/0077cc?text=voluptas','Dolorem delectus est id rem ad voluptatem iusto dolorem.',0,'2025-02-10 22:51:47','2025-02-10 22:51:47'),(44,1,'Veniam et doloribus maiores.','Soluta qui sed quasi voluptatem id. Rem molestias autem quia est voluptatem adipisci iure. Dolor error incidunt dolores quaerat fugiat. Eaque aliquam beatae quas.','done','medium','1970-03-16 11:05:09','https://via.placeholder.com/640x480.png/0022dd?text=dolor','Ipsam consectetur vero sequi nihil.',0,'2025-02-10 22:51:47','2025-02-10 22:51:47'),(45,5,'Necessitatibus iusto eaque quisquam molestias.','Et voluptatem consequatur consequatur. Sequi quas corrupti veniam dolor et possimus. Accusamus cumque reprehenderit eaque et quidem. Molestias repudiandae in sapiente quasi.','todo','low','1981-02-01 12:10:28','https://via.placeholder.com/640x480.png/00ee55?text=quo','Quaerat ut quia perferendis qui quam qui.',0,'2025-02-10 22:51:47','2025-02-10 22:51:47'),(46,4,'Accusantium molestiae in autem et et repudiandae consequatur excepturi.','Doloribus laborum illum beatae dolores. Dolor necessitatibus ab eveniet aliquam. Neque enim at officia rerum accusantium reprehenderit. Voluptates vero id velit.','in-progress','medium','2022-08-22 02:03:51','https://via.placeholder.com/640x480.png/00aadd?text=et','A in laborum recusandae impedit officia ut et quam.',0,'2025-02-10 22:51:47','2025-02-10 22:51:47'),(47,3,'Laboriosam est et dolores tenetur voluptates et.','Laborum eos eaque eos molestias tempore provident iste. Distinctio modi quia voluptatem eum magni id est. Sed atque non fugiat. Incidunt et sint aut praesentium sequi laborum aliquid tempore.','in-progress','medium','1973-02-22 18:48:52','https://via.placeholder.com/640x480.png/006655?text=reiciendis','Aliquid non sit officiis dolorem aut.',0,'2025-02-10 22:51:47','2025-02-10 22:51:47'),(48,2,'Libero expedita quis dolores non nesciunt at.','Vel nulla nesciunt culpa temporibus porro voluptatem omnis. Voluptatem occaecati consectetur itaque asperiores. Consequuntur earum reiciendis est. Earum earum molestiae enim excepturi nam enim.','todo','high','1978-12-02 16:04:21','https://via.placeholder.com/640x480.png/00cc33?text=dicta','Aspernatur placeat quis qui est occaecati quia reiciendis quam.',0,'2025-02-10 22:51:47','2025-02-10 22:51:47'),(49,1,'Porro occaecati rem et qui.','Ducimus odio maiores ipsam consequuntur nesciunt voluptatum mollitia. Sequi sint cumque et eum. Veniam consequuntur saepe est voluptates. Qui et dolorem debitis repudiandae quae facilis.','in-progress','low','1972-01-11 10:47:23','https://via.placeholder.com/640x480.png/00ff55?text=dolores','Earum id est eaque quidem.',0,'2025-02-10 22:51:47','2025-02-10 22:51:47'),(50,2,'Totam odio facere ut sit.','Et molestias tenetur blanditiis. Dolor voluptatem et ipsum cupiditate animi nesciunt quia. Dolor ducimus quae voluptatem ab nemo.','in-progress','low','1974-10-02 09:08:02','https://via.placeholder.com/640x480.png/009933?text=eaque','Eum quos neque optio quas cum nostrum.',0,'2025-02-10 22:51:47','2025-02-10 22:51:47'),(51,3,'Omnis dolores vitae qui.','Et et odio laboriosam excepturi quia suscipit vitae. Et ut consequatur odit tempore exercitationem voluptates repellat. Aut sed veniam quo sit in.','todo','medium','1980-08-27 17:58:13','https://via.placeholder.com/640x480.png/003366?text=ullam','Soluta quam odit quas.',0,'2025-02-10 22:51:47','2025-02-10 22:51:47'),(52,1,'Aut commodi ut molestiae ipsum.','Est ut dolore reprehenderit quisquam quia. Quam et dolorem quo consequatur quia quia ut. Voluptas veniam iste sapiente aliquam praesentium. Perferendis molestiae autem fugiat qui.','done','high','2010-05-23 10:16:23','https://via.placeholder.com/640x480.png/002200?text=et','Magnam debitis in adipisci distinctio quo exercitationem iure.',0,'2025-02-10 22:51:47','2025-02-10 22:51:47'),(53,2,'Earum consequatur sit itaque sequi quos omnis illum aut.','Non nam quisquam expedita et et ullam. Omnis et et laborum ducimus. Excepturi esse qui neque aut aut.','todo','medium','1991-10-24 17:29:08','https://via.placeholder.com/640x480.png/006666?text=id','Dolor perspiciatis eius ipsum consequatur ut nihil velit nulla.',0,'2025-02-10 22:51:47','2025-02-10 22:51:47'),(54,1,'Est explicabo sint explicabo sunt.','Ad libero et repellendus commodi. Animi ea praesentium magnam natus.','done','high','2019-08-26 17:31:19','https://via.placeholder.com/640x480.png/00aa22?text=reiciendis','Vel sint sequi porro perferendis ut omnis iure cum.',0,'2025-02-10 22:51:47','2025-02-10 22:51:47'),(55,4,'Dolorem nemo at et ullam consequatur perferendis.','Repudiandae rerum ratione error ut dolore. Nihil et alias cupiditate. Est ea et sint similique. Provident et dolores quo quaerat necessitatibus fugiat rerum eligendi. Aliquam reiciendis repellat voluptatem rerum.','done','low','1995-08-20 08:03:30','https://via.placeholder.com/640x480.png/00bb55?text=consequatur','Libero quos et quo illo illum aspernatur dignissimos.',0,'2025-02-10 22:51:47','2025-02-10 22:51:47'),(56,1,'Doloribus nostrum quo quisquam odit exercitationem commodi temporibus.','Quae perspiciatis ut esse illo qui ut. Porro porro omnis ut sit qui et. Qui enim aut est ad deserunt.','in-progress','high','1984-06-04 08:49:21','https://via.placeholder.com/640x480.png/009966?text=explicabo','Cum reiciendis temporibus consectetur consequuntur ut et maiores sit.',0,'2025-02-10 22:51:47','2025-02-10 22:51:47'),(57,1,'Laboriosam accusamus aut praesentium atque modi aut voluptatem.','Delectus qui sequi dolor voluptatem voluptatem molestias perferendis. Possimus enim id est incidunt. Aspernatur amet qui porro perspiciatis et eveniet numquam. Doloribus quia est tempora et reprehenderit similique consectetur.','done','medium','1984-10-29 13:10:59','https://via.placeholder.com/640x480.png/002222?text=sed','Dolorum suscipit recusandae veniam consequuntur.',0,'2025-02-10 22:51:47','2025-02-10 22:51:47'),(58,5,'Ut magnam sint iste qui nobis totam.','Tempore et dolor vero. Deserunt ea et deserunt velit at voluptate. Distinctio iusto voluptatum dolores non excepturi a sit. Ea eum in amet fugit rerum deserunt.','todo','high','1983-09-02 08:32:02','https://via.placeholder.com/640x480.png/00ee99?text=voluptatem','Sapiente veniam maxime sapiente ullam deserunt.',0,'2025-02-10 22:51:47','2025-02-10 22:51:47'),(59,5,'Vero id sapiente necessitatibus voluptate.','Explicabo voluptatem inventore atque repellat iusto. Assumenda ut eum et ad maxime et aut. Exercitationem culpa maxime ipsam saepe.','in-progress','low','1971-05-08 15:46:52','https://via.placeholder.com/640x480.png/00ccff?text=voluptas','Deserunt voluptates quia recusandae voluptate nostrum vel.',0,'2025-02-10 22:51:47','2025-02-10 22:51:47'),(60,4,'In quia pariatur sed quod et in.','Velit quo possimus debitis molestias eum provident. Odio distinctio illo accusantium perferendis totam odit. Porro rerum quia delectus et cum ut modi. Omnis eveniet non adipisci totam incidunt ea assumenda.','in-progress','high','1985-10-14 06:05:50','https://via.placeholder.com/640x480.png/002255?text=voluptatibus','Consequatur dolorem vel facilis repellat.',0,'2025-02-10 22:51:47','2025-02-10 22:51:47'),(61,4,'Natus et suscipit aut doloremque.','Ad qui nulla neque quia suscipit quae laudantium. Eum dolores fuga aut labore nihil quia libero. Saepe aperiam omnis nobis aut qui ullam recusandae. Occaecati sunt neque est repellat voluptatibus.','todo','low','1985-01-05 06:18:40','https://via.placeholder.com/640x480.png/00ff22?text=nesciunt','Est id quia eligendi.',0,'2025-02-10 22:51:47','2025-02-10 22:51:47'),(62,1,'Odio aut beatae ut eaque ipsum magni iste.','Mollitia eaque deserunt temporibus et quo ad. Non laudantium modi dolor qui autem. Nobis sapiente pariatur ipsam placeat quos aut neque. Incidunt distinctio culpa odio consequuntur debitis.','in-progress','medium','1992-10-15 06:09:38','https://via.placeholder.com/640x480.png/00ccbb?text=et','Itaque accusamus aut quia illo veritatis sit aspernatur optio.',0,'2025-02-10 22:51:47','2025-02-10 22:51:47'),(63,3,'Ad asperiores totam sint asperiores.','Earum eius et rerum blanditiis quisquam quae. Voluptatem molestias et enim consequuntur qui aut quis. Voluptas quo modi libero. Omnis natus atque dolorem quaerat corporis consequatur. Sint aut voluptate iste laboriosam omnis est.','done','low','1973-12-25 08:50:55','https://via.placeholder.com/640x480.png/00dd22?text=tenetur','Voluptate repudiandae aspernatur maxime necessitatibus.',0,'2025-02-10 22:51:47','2025-02-10 22:51:47'),(64,5,'Deserunt quas eum et tempore animi quod accusamus.','Aut voluptas accusantium minima occaecati nulla tempore ut. Quos eaque ipsum ut.','todo','low','1975-10-17 04:05:54','https://via.placeholder.com/640x480.png/00bb33?text=recusandae','Sed quam ea aut.',0,'2025-02-10 22:51:47','2025-02-10 22:51:47'),(65,5,'Voluptatibus quia reprehenderit qui rerum et.','Quo suscipit explicabo voluptas magnam possimus sequi quasi similique. Sunt labore est quas distinctio qui. Consequatur sit fugiat odio sed corporis aperiam.','todo','low','1988-07-07 06:01:17','https://via.placeholder.com/640x480.png/00dd99?text=autem','Et eum rerum sit accusantium sed.',0,'2025-02-10 22:51:47','2025-02-10 22:51:47'),(66,1,'Beatae quia autem blanditiis eius facere.','At odit in distinctio labore. Ducimus enim architecto voluptatum nulla provident facere. Sint ut vero omnis quae quo ea nobis.','in-progress','high','2003-03-15 05:48:33','https://via.placeholder.com/640x480.png/005577?text=sequi','Deleniti aut recusandae ab qui temporibus quo.',0,'2025-02-10 22:51:47','2025-02-10 22:51:47'),(67,5,'Qui illo distinctio modi accusamus.','Reiciendis veritatis ab tenetur officia tempora. Nisi voluptatem aut voluptas atque asperiores sint asperiores. Odio possimus et sed dolor facere rem earum. Ullam explicabo deleniti autem nam rem. Alias perspiciatis sit corrupti tempora nam sed.','in-progress','low','1973-03-19 03:08:50','https://via.placeholder.com/640x480.png/000055?text=quis','Magni debitis in commodi ipsam ratione ullam sint.',0,'2025-02-10 22:51:47','2025-02-10 22:51:47'),(68,2,'Cum consequatur nulla consequuntur quod reprehenderit iusto.','Non accusamus ratione vel deserunt. Quos at non porro odit eum totam veniam optio. Velit dolores labore autem. Et explicabo cumque qui.','done','medium','2021-09-08 21:27:43','https://via.placeholder.com/640x480.png/0055bb?text=debitis','Possimus quia voluptatum cumque aliquam.',0,'2025-02-10 22:51:47','2025-02-10 22:51:47'),(69,1,'Voluptas tempora temporibus harum ut.','Doloribus est voluptate dolor nemo quod. Sint ipsam corporis id quo aspernatur saepe. Soluta corrupti explicabo voluptas qui provident fugit neque voluptatem. Qui placeat alias pariatur et impedit qui.','in-progress','high','1986-10-14 07:58:06','https://via.placeholder.com/640x480.png/00ccaa?text=voluptatibus','Saepe ab expedita perferendis dignissimos et eveniet magni.',0,'2025-02-10 22:51:47','2025-02-10 22:51:47'),(70,5,'Voluptatem amet dolorem incidunt illo expedita.','Sit quos facere quia autem. Voluptatem omnis eos nam dolorem quis. Reprehenderit quidem illo praesentium. Est nisi distinctio accusamus voluptas laudantium est ut.','todo','high','2012-05-28 02:37:28','https://via.placeholder.com/640x480.png/003366?text=occaecati','Aperiam minima explicabo occaecati sed officia aut provident.',0,'2025-02-10 22:51:47','2025-02-10 22:51:47'),(71,5,'Vero dolore illum qui consequatur.','Eius quidem tempore culpa facilis aut natus. Aut et ex voluptatem a porro voluptate. Illum reiciendis quia in doloribus qui. Nesciunt error est voluptatibus aut nihil ut aut. Consequatur illo accusantium aperiam nihil.','in-progress','medium','1984-05-09 08:50:25','https://via.placeholder.com/640x480.png/0088cc?text=cum','Eaque sit dicta cum.',0,'2025-02-10 22:51:47','2025-02-10 22:51:47'),(72,5,'Necessitatibus placeat aut quisquam est eius.','Quod voluptate at recusandae vel minus quod. Officia in minima aperiam dignissimos voluptatem mollitia officiis. Perspiciatis sit rem sint exercitationem.','in-progress','medium','1993-07-13 17:01:27','https://via.placeholder.com/640x480.png/00ffdd?text=enim','Labore accusantium magni praesentium voluptas hic.',0,'2025-02-10 22:51:47','2025-02-10 22:51:47'),(73,5,'Impedit ex recusandae aut laboriosam ut voluptas a rerum.','Et voluptatem ut sit vero et fugit velit. Rerum deleniti molestiae aut pariatur provident qui laudantium incidunt. Facilis dolorem vel quidem tempore.','in-progress','high','2017-12-23 22:35:17','https://via.placeholder.com/640x480.png/00bb99?text=qui','Ipsam aut atque perspiciatis ea.',0,'2025-02-10 22:51:47','2025-02-10 22:51:47'),(74,1,'Non rerum doloremque eos.','Omnis modi modi incidunt fugit libero. Adipisci vel velit ipsam quae modi.','in-progress','low','2023-08-08 07:30:51','https://via.placeholder.com/640x480.png/00eeee?text=unde','Facere ea cum explicabo est.',0,'2025-02-10 22:51:47','2025-02-10 22:51:47'),(75,1,'Itaque aut minima facere alias aut corporis animi.','Quasi omnis non nihil error qui. Voluptatem ratione occaecati autem aut. Id cupiditate similique nulla iusto qui. Qui rerum quo velit iusto commodi at vel. Nobis voluptas dolorem mollitia asperiores saepe voluptatem eos quia.','in-progress','low','2022-08-03 01:42:47','https://via.placeholder.com/640x480.png/0088bb?text=sapiente','Quis eligendi debitis et consequatur totam expedita illum.',0,'2025-02-10 22:51:47','2025-02-10 22:51:47'),(76,1,'Earum pariatur omnis illo.','Aut ad facilis suscipit hic et enim possimus molestias. Tenetur et vitae et enim ullam similique. Quibusdam est sed pariatur et. Sed et et omnis ut esse quo ipsam.','todo','low','2022-06-12 16:10:16','https://via.placeholder.com/640x480.png/00ccdd?text=quo','Asperiores et mollitia ut expedita aspernatur vel.',0,'2025-02-10 22:51:47','2025-02-10 22:51:47'),(77,5,'Quas excepturi id quibusdam.','Harum illo libero sed deleniti suscipit dolore sit. Dicta occaecati consequatur vel porro at. Ea neque similique et error quae. Eum pariatur qui eveniet non impedit laborum et.','todo','high','1975-03-14 05:24:58','https://via.placeholder.com/640x480.png/0000aa?text=et','Praesentium facilis consequatur atque exercitationem.',0,'2025-02-10 22:51:47','2025-02-10 22:51:47'),(78,1,'Dolores non non qui qui aperiam qui.','Sed delectus id voluptatum quae quae incidunt aut. Nemo deserunt ratione quo ratione voluptatibus saepe nostrum. Non aut id voluptas officia. Saepe commodi pariatur labore ut neque et eius.','in-progress','medium','1986-04-03 03:46:48','https://via.placeholder.com/640x480.png/008899?text=incidunt','Voluptatibus natus sit similique non asperiores quia.',0,'2025-02-10 22:51:47','2025-02-10 22:51:47'),(79,2,'Rerum molestiae consequatur libero eligendi odio.','Totam cum officia quis est. Voluptatem reprehenderit dignissimos voluptatem qui magnam cum. Cupiditate modi est soluta aut minus.','in-progress','high','2012-12-24 11:02:16','https://via.placeholder.com/640x480.png/00aa44?text=nemo','A ut consectetur similique nam consequatur in veritatis.',0,'2025-02-10 22:51:47','2025-02-10 22:51:47'),(80,2,'Quo quae ut illo sapiente.','Velit error illum sapiente ut temporibus qui. Ut iure distinctio qui voluptate eos. Architecto nulla ea temporibus aut sit quam. Dolore iusto et perferendis repellat deleniti dignissimos.','todo','medium','2000-07-20 16:20:19','https://via.placeholder.com/640x480.png/009944?text=laborum','Quia eligendi qui magnam et magnam est enim.',0,'2025-02-10 22:51:47','2025-02-10 22:51:47'),(81,3,'Iure voluptatibus ipsa tempore unde eaque velit.','Sint sit non accusantium cupiditate suscipit et rerum. Maxime blanditiis dolore quae ullam nesciunt voluptas.','done','low','1971-02-06 15:06:39','https://via.placeholder.com/640x480.png/001144?text=rem','Nobis architecto fuga et et omnis.',0,'2025-02-10 22:51:47','2025-02-10 22:51:47'),(82,3,'Illo optio sed assumenda nobis tenetur.','Eos occaecati ut consectetur omnis expedita. Vero consectetur nobis consectetur asperiores. Ea eligendi tempora sed sit accusamus qui.','in-progress','medium','2004-09-30 04:31:39','https://via.placeholder.com/640x480.png/002211?text=eum','Blanditiis maiores qui voluptate quidem ea.',0,'2025-02-10 22:51:47','2025-02-10 22:51:47'),(83,5,'Qui numquam asperiores assumenda harum.','Ea aut est sit repellat atque. Cupiditate labore dolor soluta nostrum quasi amet aut. Et voluptates vel accusantium sint eos illum explicabo sequi.','done','high','1985-03-24 02:33:29','https://via.placeholder.com/640x480.png/0044ff?text=vitae','Vel placeat aliquam cum corporis aut harum et illo.',0,'2025-02-10 22:51:47','2025-02-10 22:51:47'),(84,4,'Nam repudiandae aliquam nam voluptate ullam repellendus suscipit.','At fugit voluptatem perferendis commodi perspiciatis. Vitae ipsum aut est qui et ut error. Doloribus ea eius soluta et qui.','in-progress','medium','1974-09-21 19:32:27','https://via.placeholder.com/640x480.png/001133?text=deleniti','Quo sapiente nostrum itaque et porro perferendis corporis.',0,'2025-02-10 22:51:47','2025-02-10 22:51:47'),(85,1,'Voluptatem laborum id facilis maxime aut assumenda.','Sunt error illo et ullam cum perspiciatis unde. Dolorem repudiandae consequatur accusamus temporibus autem facilis recusandae. Nobis pariatur qui atque tenetur ut unde.','done','medium','1998-10-07 08:19:30','https://via.placeholder.com/640x480.png/00bbff?text=repellat','Ut accusantium voluptas ut laudantium doloribus minus quia.',0,'2025-02-10 22:51:47','2025-02-10 22:51:47'),(86,3,'Ratione tenetur quia quos et omnis officiis.','Nobis pariatur praesentium veritatis ut vel nihil nobis. Fugiat nostrum eaque rerum dolor maxime perspiciatis eos sed. Nihil aspernatur reiciendis corrupti omnis minus facere quisquam minima. Et corporis nisi ut eaque est atque. Ex assumenda vitae et a qui aspernatur quisquam.','todo','low','1991-06-22 15:50:15','https://via.placeholder.com/640x480.png/00aaff?text=cupiditate','Ullam odio assumenda molestias dolore.',0,'2025-02-10 22:51:47','2025-02-10 22:51:47'),(87,4,'Magnam occaecati ducimus repellat hic dignissimos voluptatem quos.','Et assumenda sapiente earum dolor eius ut eum. Est et quisquam neque incidunt odio quam. Aut tenetur amet voluptates est perferendis omnis deserunt tenetur. Asperiores consequuntur ut in eum voluptate et. Architecto sapiente quidem voluptas ex ut.','todo','low','2010-10-15 06:37:29','https://via.placeholder.com/640x480.png/00aa77?text=beatae','Eum voluptatibus totam voluptas voluptatum ducimus harum.',0,'2025-02-10 22:51:47','2025-02-10 22:51:47'),(88,3,'Est maiores perferendis illum id ut repellendus.','Pariatur ea et odio. Quis id non eveniet ratione harum. Qui deserunt eum expedita accusantium blanditiis illo.','done','medium','2006-02-04 23:27:45','https://via.placeholder.com/640x480.png/00ff11?text=perferendis','Blanditiis eligendi vel ab repudiandae asperiores totam dicta.',0,'2025-02-10 22:51:47','2025-02-10 22:51:47'),(89,1,'Sint sed et et nemo.','Quia consectetur veniam quae et sed et accusantium cupiditate. Voluptatibus autem facere facilis labore doloribus. Expedita ullam delectus itaque in ut impedit. Rerum similique quis libero pariatur placeat.','todo','low','1997-09-01 13:40:59','https://via.placeholder.com/640x480.png/0011aa?text=quia','Facere et nisi omnis quo excepturi sed saepe non.',0,'2025-02-10 22:51:47','2025-02-10 22:51:47'),(90,5,'Autem reiciendis impedit debitis qui omnis minus aliquam.','Exercitationem et voluptatem est aut voluptas ut dolor. Doloribus accusamus ex sed dolorum ut odio. Sit iusto aliquam et asperiores placeat. Qui enim quia voluptatem iusto.','todo','low','2001-07-21 08:30:10','https://via.placeholder.com/640x480.png/0055dd?text=quo','Deleniti quia voluptatibus et qui rerum beatae deleniti fugit.',0,'2025-02-10 22:51:47','2025-02-10 22:51:47'),(91,1,'Non id rerum quo occaecati minus possimus.','Voluptatem mollitia sit unde. Omnis sequi repudiandae natus sit sunt. Exercitationem excepturi eum necessitatibus rem. Esse doloremque expedita necessitatibus dolorum quae.','todo','high','2004-10-30 02:09:17','https://via.placeholder.com/640x480.png/00ff55?text=consequatur','Esse sit voluptas perspiciatis voluptate deleniti.',0,'2025-02-10 22:51:47','2025-02-10 22:51:47'),(92,2,'Autem quaerat vel incidunt facere sed aspernatur at.','Quas et facere odit id deserunt incidunt. Velit cumque eum molestias optio molestiae. Esse est tempora voluptatum aut quisquam. Fugit quidem quae animi dolorum quis molestias quo.','done','low','1995-11-12 20:19:27','https://via.placeholder.com/640x480.png/00ccee?text=sit','Maiores quia repudiandae enim doloremque sunt amet.',0,'2025-02-10 22:51:47','2025-02-10 22:51:47'),(93,3,'Alias corrupti dolores ipsum aut reprehenderit et.','Modi sit ut ratione numquam. Repellendus sapiente sit eos quibusdam consectetur vel. Sed similique quidem officiis fugiat.','todo','high','2020-12-10 21:57:38','https://via.placeholder.com/640x480.png/00bb11?text=eum','Dolor magni quaerat ratione aspernatur.',0,'2025-02-10 22:51:47','2025-02-10 22:51:47'),(94,4,'Sunt sit saepe ut voluptatum.','Eius sunt in quia rerum dolores. Voluptatem est incidunt eum assumenda. Dolores dolore similique repellat dolorum placeat. Ea iure ducimus animi necessitatibus cupiditate sit.','todo','high','1992-01-07 11:39:01','https://via.placeholder.com/640x480.png/00ffaa?text=corporis','Animi quia quod et aperiam.',0,'2025-02-10 22:51:47','2025-02-10 22:51:47'),(95,4,'Ducimus neque ea aut saepe aspernatur.','Est ut veritatis qui vitae ut. Est ab deleniti qui qui molestiae accusamus quia. Molestiae ratione optio rem et.','in-progress','high','1998-07-14 15:17:19','https://via.placeholder.com/640x480.png/00eecc?text=et','Non aut ut eum ipsam tempora.',0,'2025-02-10 22:51:47','2025-02-10 22:51:47'),(96,3,'Qui beatae aliquam ad enim exercitationem dolor.','Et qui cumque consectetur est harum. Quaerat corporis aut qui ipsam eos. Esse quo beatae unde vel ut soluta.','done','medium','2014-10-21 17:22:36','https://via.placeholder.com/640x480.png/00ddbb?text=veritatis','Non quos non nulla.',0,'2025-02-10 22:51:47','2025-02-10 22:51:47'),(97,4,'Porro et officia eius autem.','Sapiente voluptatibus porro qui autem et. Esse et consequatur ea nesciunt et. Nemo ea atque porro velit natus nostrum iste architecto.','in-progress','medium','1999-09-24 20:21:48','https://via.placeholder.com/640x480.png/00ffee?text=molestiae','Quos amet aliquid voluptatum vel est.',0,'2025-02-10 22:51:47','2025-02-10 22:51:47'),(98,5,'Ipsam libero et voluptatem necessitatibus cum ut.','Eum dolor eaque impedit corporis doloremque. Velit molestiae nostrum odio quia laboriosam nostrum. Maxime temporibus est ut harum atque ab quaerat.','done','medium','1983-07-14 10:22:25','https://via.placeholder.com/640x480.png/00ff22?text=voluptatem','Et voluptatem eos aut labore veritatis et.',0,'2025-02-10 22:51:47','2025-02-10 22:51:47'),(99,2,'Et et eum non.','Possimus aut est necessitatibus. Pariatur veniam aut beatae sed. Qui nesciunt est repellat.','done','high','1975-07-10 12:53:31','https://via.placeholder.com/640x480.png/001100?text=quae','Mollitia dicta ab praesentium velit perferendis velit.',0,'2025-02-10 22:51:47','2025-02-10 22:51:47'),(100,1,'Consequatur repudiandae a alias nostrum.','Deserunt quia esse accusantium doloribus. Cumque vero et id repudiandae facilis aut sapiente omnis. Et recusandae eius animi ab. Sunt adipisci qui occaecati voluptatem fugit in nemo aliquid.','done','high','2001-09-14 05:12:08','https://via.placeholder.com/640x480.png/00ee99?text=ad','Rerum et eligendi beatae aut animi delectus.',0,'2025-02-10 22:51:47','2025-02-10 22:51:47');
/*!40000 ALTER TABLE `tasks` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'Ladarius Lockman','amanda28@example.net','2025-02-10 22:51:47','$2y$12$9dwbM/JPZG0DxX4Nm6Msp.SLFBLx.6KH9JM1m9ht55U0zn6NYUnoq','FCjmC4Q1tP','2025-02-10 22:51:47','2025-02-10 22:51:47'),(2,'Ruth Fisher','troy.langosh@example.com','2025-02-10 22:51:47','$2y$12$9dwbM/JPZG0DxX4Nm6Msp.SLFBLx.6KH9JM1m9ht55U0zn6NYUnoq','sLXZ3QI76q','2025-02-10 22:51:47','2025-02-10 22:51:47'),(3,'Eriberto McCullough PhD','lbernier@example.net','2025-02-10 22:51:47','$2y$12$9dwbM/JPZG0DxX4Nm6Msp.SLFBLx.6KH9JM1m9ht55U0zn6NYUnoq','nMU8qpqeun','2025-02-10 22:51:47','2025-02-10 22:51:47'),(4,'Reed Kovacek','elva37@example.com','2025-02-10 22:51:47','$2y$12$9dwbM/JPZG0DxX4Nm6Msp.SLFBLx.6KH9JM1m9ht55U0zn6NYUnoq','IppGdtr41M','2025-02-10 22:51:47','2025-02-10 22:51:47'),(5,'Era Zboncak','percy50@example.com','2025-02-10 22:51:47','$2y$12$9dwbM/JPZG0DxX4Nm6Msp.SLFBLx.6KH9JM1m9ht55U0zn6NYUnoq','lJDT4caraA','2025-02-10 22:51:47','2025-02-10 22:51:47'),(7,'hergen','hergen@gmail.com',NULL,'$2y$12$669yL9pDDWmWhvNn/MzFK.QocK/yZhBbPJYHs259mhynxv9WSjpva',NULL,'2025-02-11 01:29:51','2025-02-11 01:29:51'),(9,'hergen roque gamayon','hergen2@gmail.com',NULL,'$2y$12$kKvSSoSDv7UAc4wipQP/q.2W6ty4jHML8l.LiJ9edLlrzux7cH5o6',NULL,'2025-02-11 01:31:56','2025-02-11 01:31:56');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping routines for database 'innoquest'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2025-02-11 17:49:03
