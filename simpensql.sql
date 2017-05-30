-- MySQL dump 10.13  Distrib 5.7.18, for Linux (x86_64)
--
-- Host: localhost    Database: coba
-- ------------------------------------------------------
-- Server version	5.7.18-0ubuntu0.16.04.1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `links`
--

DROP TABLE IF EXISTS `links`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `links` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `links_url_unique` (`url`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `links`
--

LOCK TABLES `links` WRITE;
/*!40000 ALTER TABLE `links` DISABLE KEYS */;
INSERT INTO `links` VALUES (1,'Bernice Kuhn','https://dickens.com/placeat-velit-voluptatum-nulla-aut-voluptatem.html','Quis accusantium optio temporibus quos ullam voluptas dolore voluptatem. Aut et harum facere rerum amet perspiciatis labore. Debitis quae qui deserunt dolor sequi id ut.','2017-05-29 00:03:06','2017-05-29 00:03:06'),(2,'Lily Marvin Jr.','http://ledner.biz/animi-voluptatem-excepturi-velit-dolor','Nam omnis labore in facere ut debitis. Fuga neque dolor odio voluptas. Excepturi impedit quaerat aut quis ut ipsa. Ab qui impedit exercitationem eaque molestiae aliquid corporis adipisci.','2017-05-29 00:03:06','2017-05-29 00:03:06'),(3,'Andi Budi','linkstub.stub.id','Fix database',NULL,NULL),(4,'Nora Turner','http://emard.com/atque-sed-alias-amet-aspernatur-modi-quo-reiciendis.html','Cupiditate sunt voluptas voluptatem sapiente. Dolores voluptate fugiat atque qui debitis dolorum. Est expedita magni ea consequatur ut nobis. Velit sint at id aut molestias.','2017-05-29 00:03:06','2017-05-29 00:03:06'),(5,'Ms. Marianna Haley','http://www.parisian.com/laudantium-ea-architecto-et-vel-voluptas-dolorem.html','Hic molestiae et laborum reprehenderit fugit sint. Necessitatibus est veritatis dolorem eius. Suscipit praesentium ut est sit repudiandae sapiente.','2017-05-29 00:03:07','2017-05-29 00:03:07'),(6,'Santina Hilpert','http://www.wehner.com/quos-accusamus-quo-vel-molestiae-esse','Aspernatur quo reiciendis illo quasi voluptas. Id illo incidunt maiores dolor qui tenetur et. Adipisci non cumque animi amet nisi. Aut omnis laboriosam cum ea deleniti.','2017-05-29 00:03:07','2017-05-29 00:03:07'),(7,'Clare Borer','http://grady.net/qui-nesciunt-impedit-sed-qui-dolorem.html','Aspernatur aut vel aliquam aut exercitationem provident velit. At sint modi adipisci dolorem. Dolore deleniti totam temporibus occaecati. Pariatur qui temporibus commodi. Numquam cupiditate eligendi perferendis sint qui.','2017-05-29 00:03:07','2017-05-29 00:03:07'),(8,'Skylar Conn','http://www.conroy.com/tempora-tempora-dolorum-id-fugit-magnam-illo-quam','Consequatur ut soluta aut nulla. Itaque est modi voluptatem non vero est. Velit quia laudantium distinctio voluptatibus voluptas exercitationem enim. Natus itaque molestiae inventore doloremque. Rem blanditiis qui suscipit commodi voluptatum suscipit sed.','2017-05-29 00:03:07','2017-05-29 00:03:07'),(9,'Budi Andi','linkstubjuga.stub.id','Fix database, repairing missing id',NULL,NULL),(10,'Ms. Brandi McCullough','http://www.shields.com/at-architecto-commodi-delectus-eligendi-nihil','Placeat assumenda voluptates ratione est consequatur perspiciatis amet. Consectetur dolor possimus dolore aliquam et neque nesciunt hic.','2017-05-29 00:03:07','2017-05-29 00:03:07'),(11,'Dyas Plus','cobacobayuk.com','Try editing','2017-05-29 01:02:11','2017-05-29 20:12:19'),(12,'A New Person','newlinklink.com','This is a description for a new person','2017-05-29 01:09:32','2017-05-29 01:09:32'),(13,'Andi Budi Andi','linklinkstubjuga.stub.id','Fixing database, no missing id',NULL,NULL),(14,'Baru lagi','barulag.com','Deskripsi baru lagi',NULL,NULL);
/*!40000 ALTER TABLE `links` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2014_10_12_000000_create_users_table',1),(2,'2014_10_12_100000_create_password_resets_table',1),(3,'2017_05_29_065952_create_links_table',1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_resets`
--

LOCK TABLES `password_resets` WRITE;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-05-30 11:28:15
