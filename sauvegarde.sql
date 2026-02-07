-- MySQL dump 10.13  Distrib 9.6.0, for macos26.2 (arm64)
--
-- Host: localhost    Database: onlybangers_db
-- ------------------------------------------------------
-- Server version	9.6.0

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
SET @MYSQLDUMP_TEMP_LOG_BIN = @@SESSION.SQL_LOG_BIN;
SET @@SESSION.SQL_LOG_BIN= 0;

--
-- GTID state at the beginning of the backup 
--

SET @@GLOBAL.GTID_PURGED=/*!80000 '+'*/ 'c7fe01cc-fd1c-11f0-b13b-e83c728750f9:1-120';

--
-- Table structure for table `article`
--

DROP TABLE IF EXISTS `article`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `article` (
  `id` int NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` datetime NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `author_id` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_23A0E66F675F31B` (`author_id`),
  CONSTRAINT `FK_23A0E66F675F31B` FOREIGN KEY (`author_id`) REFERENCES `user` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `article`
--

LOCK TABLES `article` WRITE;
/*!40000 ALTER TABLE `article` DISABLE KEYS */;
INSERT INTO `article` VALUES (15,'Playboi Carti - Die Lit','Die Lit is the debut studio album by the American rapper Playboi Carti. It was surprise-released on May 11, 2018, through AWGE and Interscope Records. Carti recorded the album in his hometown of Atlanta between December 2017 and March 2018, months after the release of his debut mixtape Playboi Carti (2017). Produced primarily by Pi\'erre Bourne, Die Lit is a trap and mumble rap album incorporating elements of cloud rap, characterized by fragmented production driven by synthesizers and 808 drums and ad-lib heavy delivery emphasizing mood and feeling over lyrical complexity. Its lyrical themes include hedonism, drugs, wealth, sex, relationships, and women. Guest appearances include Skepta, Travis Scott, Lil Uzi Vert, Bourne, Nicki Minaj, Bryson Tiller, Chief Keef, Gunna, Red Coldhearted, Young Thug, and Young Nudy.','2026-01-31 18:38:59','697e4c43b0b7b.jpg',3),(16,'Playboi Carti - Whole Lotta Red','Whole Lotta Red is the second studio album by the American rapper Playboi Carti. It was released on December 25, 2020, through AWGE and Interscope Records. It was primarily produced by F1lthy and Art Dealer, with contributions from Pi\'erre Bourne, Maaly Raw, Lil 88, Jasper Harris, Ojivolta, and Wheezy, while Kanye West and Matthew Williams served as executive producers. Diverging from the melodic trap style of Playboi Carti (2017) and Die Lit (2018), Whole Lotta Red is an experimental hip-hop, rage, and trap album that incorporates punk and electronic influences. Its lyrical themes include guns, wealth, and hedonism. Music critics highlighted its loose structure and frenetic pace; several songs abandon traditional verse-chorus structures in favor of chants or ad-libbing with an emphasis on atmosphere over narrative. The album features a dark, vampire-themed tone in which Carti adopts the persona of a vampire rock star, and its abrasive sound drew comparisons to West\'s Yeezus (2013). Guest appearances include West, Kid Cudi, and Future.','2026-01-31 18:39:42','697e4c6e8231d.jpg',3),(17,'Playboi Carti - Music','Music (also referred to as I Am Music, both stylized in all caps) is the third studio album by American rapper Playboi Carti. It was released on March 14, 2025, through AWGE and Interscope Records. A trap album, it marks a stylistic shift from the \"baby voice\" vocal approach of Carti\'s previous studio album, Whole Lotta Red (2020), toward a deeper and raspier delivery, while retaining elements associated with 2000s Atlanta mixtape culture.\n\nThe standard version of Music consists of 30 tracks and features guest appearances from Travis Scott, the Weeknd, Kendrick Lamar, Jhené Aiko, Skepta, Future, Lil Uzi Vert, Ty Dolla Sign, and Young Thug, as well as hosting from DJ Swamp Izzo. Production was handled by Ojivolta, Cardo, and F1lthy, alongside Bnyx, Kanye West[1], Maaly Raw, Metro Boomin, Wheezy, and members of 808 Mafia, including TM88 and Southside. Carti announced the completion of the album on March 9, 2025, after an extended production period, and confirmed its release date on March 12, following promotional teasers by Spotify.','2026-01-31 18:40:11','697e4c8b5bd65.webp',3),(18,'Kanye West - The College Dropout','The College Dropout is the debut studio album by the American rapper Kanye West. It was released on February 10, 2004, by Roc-A-Fella Records and Def Jam Recordings. In the years leading up to its release, West had received praise for his production work for rappers such as Jay-Z and Talib Kweli, but he faced difficulty being accepted as an artist in his own right by figures in the music industry. Intent on pursuing a solo career, he signed a record deal with Roc-A-Fella and recorded the album over a period of four years, beginning in 1999.\n\nThe production of The College Dropout was primarily handled by West and showcased his \"chipmunk soul\" musical style, which made use of sped-up, pitch shifted vocal samples from soul and R&B records, in addition to West\'s own drum programming, string accompaniments, and gospel choirs; the album also features contributions from Jay-Z, Mos Def, Jamie Foxx, Syleena Johnson, and Ludacris, among others. Diverging from the then-dominant gangster persona in hip-hop, West\'s lyrics concern themes of family, self-consciousness, materialism, religion, racism, and higher education.','2026-01-31 18:40:53','697e4cb599d08.jpg',3),(19,'Kanye West - Graduation','Graduation is the third studio album by the American rapper Kanye West. It was released on September 11, 2007, through Def Jam Recordings and Roc-A-Fella Records. Recording sessions took place between 2005 and 2007 at several studios in New York and Los Angeles. It was primarily produced by West himself, with contributions from various other producers, including DJ Toomp. The album features guest appearances from recording artists such as Dwele, T-Pain, Lil Wayne, Mos Def, DJ Premier, and Chris Martin. The cover art, which features West\'s mascot at the time Dropout Bear in a new cartoon form, had its interior artwork designed by contemporary artist Takashi Murakami, who later worked on the cover art for West and Kid Cudi\'s 2018 collaborative album Kids See Ghosts.[1]\n\nInspired by stadium tours, house music and indie rock, Graduation marked a departure from the ornate, soul-based sound of West\'s previous releases as he musically progressed to more anthemic compositions. West incorporated layered synthesizers and dabbled with electronics while sampling from various music genres and altering his approach to rapping. He conveys an ambivalent outlook on his newfound fame and media scrutiny alongside providing inspirational messages of triumph directed at listeners. The album prematurely concludes the education theme of West\'s first two studio albums, The College Dropout (2004) and Late Registration (2005).','2026-01-31 18:41:27','697e4cd711b54.jpg',3),(20,'Kanye West - The Life of Pablo','The Life of Pablo is the seventh studio album by the American rapper Kanye West. It was released on February 14, 2016, through GOOD Music and Def Jam Recordings. West recorded it between 2013 and 2016, and led its production with the executive producers Rick Rubin and Noah Goldstein. Guest appearances include The-Dream, Kelly Price, Chance the Rapper, Kirk Franklin, Kid Cudi, Desiigner, Rihanna, Young Thug, Chris Brown, the Weeknd, Ty Dolla Sign, Vic Mensa, Sia, Frank Ocean, Kendrick Lamar, Post Malone, and Sampha.\n\nWest summarized The Life of Pablo as his interpretation of the Gospel, and music journalists have described its sound as blending hip-hop with gospel music. Critics described its soundscape as intentionally messy and fragmented, combining the sampling, Auto-Tune, avant-pop, and industrial rap of West\'s previous works in an experimental fashion. It often shifts between subjects abruptly, as West exhibits braggadocio and paranoia. Themes include his Christian faith, family issues, and celebrity status. West changed the title frequently throughout the recording process, and the final one refers to three individuals: the drug dealer Pablo Escobar, the artist Pablo Picasso, and Paul the Apostle.','2026-01-31 18:42:06','697e4cfe8e0cb.jpg',3),(21,'Drake - Take Care','Take Care is the second studio album by the Canadian rapper Drake. It was released on November 15, 2011, by Young Money Entertainment, Cash Money Records and Republic Records. The album features guest appearances from the Weeknd, Rihanna, Kendrick Lamar, Birdman, Nicki Minaj, Rick Ross, Stevie Wonder, Lil Wayne, and André 3000. In addition to primary production from Drake and 40, further contributors include T-Minus, Chantal Kreviazuk, Boi-1da, Illangelo, Jamie xx, Supa Dups, Just Blaze, Chase N. Cashe, and Doc McKinney.\n\nPrior to Take Care, Drake released Thank Me Later, which experienced positive critical success, but left him feeling disjointed about the album\'s musical content. Expressing a desire to reunite with 40, his long-time producer who featured in parts on Thank Me Later, the duo worked extensively on the new album once recording sessions began in 2010. Drake\'s vocals on the album feature emotional crooning, alto vocals, a guttural cadence, a melodic flow, and a larger emphasis on singing than on Thank Me Later. In comparison to his debut album, Drake revealed that the album is called Take Care because \"I get to take my time this go-round [rather than rush]\".','2026-01-31 18:42:39','697e4d1f15843.jpg',3),(22,'Drake - Certified Lover Boy','Certified Lover Boy is the sixth studio album by Canadian rapper Drake, released on September 3, 2021, by OVO Sound and Republic Records. Its production was handled by frequent collaborators 40, Nineteen85, PartyNextDoor, OZ, and Vinylz, among others. Lil Baby, Lil Durk, Giveon, Jay-Z, Travis Scott, Future, Young Thug, Yebba, 21 Savage, Project Pat, Tems, Ty Dolla Sign, Lil Wayne, Rick Ross, and Kid Cudi appear as guest artists. It is the first part of what Drake described as a \"trilogy\" of albums, that also includes the follow-ups Honestly, Nevermind and Her Loss (both 2022).\n\nSimilar to Drake\'s previous releases, the album predominantly deals with his views on fame and success, particularly his dominance within the music industry, alongside misplaced loyalty, tainted romances, feuds, and loneliness. Primarily a hip hop record, a hazy atmosphere dominates the album\'s sound, which includes elements of crunk and trap. Several writers found aspects of the album to be reminiscent of Thank Me Later (2010), Take Care (2011) and Nothing Was the Same (2013). The album\'s artwork, designed by English artist Damien Hirst, which features 12 emojis of pregnant women, was the subject of ridicule.','2026-01-31 18:43:03','697e4d37c01e3.jpg',3),(23,'Drake - Iceman','Iceman is the upcoming ninth studio album by Canadian rapper and singer-songwriter Drake, expected to be released by OVO Sound and Republic Records in 2026. Confirmed producers on the album include Drake\'s frequent collaborators Tay Keith and Oz, among others.\n\nIceman serves as a follow-up to Drake\'s collaborative album Some Sexy Songs 4 U (2025); it also marks his first full-length solo release since his eighth album For All the Dogs (2023) and since his feud with Kendrick Lamar. The album was promoted by three singles, \"What Did I Miss?\", \"Which One\" featuring British rapper Central Cee, and \"Dog House\" featuring American rapper Yeat and singer Julia Wolf. Each single was preceded by a livestream on YouTube, though it is unconfirmed whether any track will ultimately appear on the album.','2026-01-31 18:43:32','697e4d5495762.webp',3);
/*!40000 ALTER TABLE `article` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `comment`
--

DROP TABLE IF EXISTS `comment`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `comment` (
  `id` int NOT NULL AUTO_INCREMENT,
  `content` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` datetime NOT NULL,
  `author_id` int NOT NULL,
  `article_id` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_9474526CF675F31B` (`author_id`),
  KEY `IDX_9474526C7294869C` (`article_id`),
  CONSTRAINT `FK_9474526C7294869C` FOREIGN KEY (`article_id`) REFERENCES `article` (`id`),
  CONSTRAINT `FK_9474526CF675F31B` FOREIGN KEY (`author_id`) REFERENCES `user` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=52 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `comment`
--

LOCK TABLES `comment` WRITE;
/*!40000 ALTER TABLE `comment` DISABLE KEYS */;
INSERT INTO `comment` VALUES (41,'🔥🔥🔥','2026-01-31 18:44:06',3,23),(42,'🔥🔥🔥','2026-01-31 18:44:18',3,22),(43,'🔥🔥🔥','2026-01-31 18:44:23',3,21),(44,'🐐🐐🐐','2026-01-31 18:44:38',3,20),(45,'🐐🐐🐐','2026-01-31 18:44:45',3,19),(46,'🐐🐐🐐','2026-01-31 18:44:52',3,18),(47,'🦇🦇🦇','2026-01-31 18:45:04',3,17),(48,'🦇🦇🦇','2026-01-31 18:45:11',3,16),(49,'🦇🦇🦇','2026-01-31 18:45:16',3,15),(50,'🦇🦇🦇','2026-01-31 18:45:38',3,16),(51,'🦇🦇🦇','2026-01-31 18:45:41',3,16);
/*!40000 ALTER TABLE `comment` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `doctrine_migration_versions`
--

DROP TABLE IF EXISTS `doctrine_migration_versions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `doctrine_migration_versions` (
  `version` varchar(191) NOT NULL,
  `executed_at` datetime DEFAULT NULL,
  `execution_time` int DEFAULT NULL,
  PRIMARY KEY (`version`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `doctrine_migration_versions`
--

LOCK TABLES `doctrine_migration_versions` WRITE;
/*!40000 ALTER TABLE `doctrine_migration_versions` DISABLE KEYS */;
/*!40000 ALTER TABLE `doctrine_migration_versions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `messenger_messages`
--

DROP TABLE IF EXISTS `messenger_messages`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `messenger_messages` (
  `id` bigint NOT NULL AUTO_INCREMENT,
  `body` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `headers` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue_name` varchar(190) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` datetime NOT NULL,
  `available_at` datetime NOT NULL,
  `delivered_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_75EA56E0FB7336F0E3BD61CE16BA31DBBF396750` (`queue_name`,`available_at`,`delivered_at`,`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `messenger_messages`
--

LOCK TABLES `messenger_messages` WRITE;
/*!40000 ALTER TABLE `messenger_messages` DISABLE KEYS */;
INSERT INTO `messenger_messages` VALUES (1,'O:36:\\\"Symfony\\\\Component\\\\Messenger\\\\Envelope\\\":2:{s:44:\\\"\\0Symfony\\\\Component\\\\Messenger\\\\Envelope\\0stamps\\\";a:1:{s:46:\\\"Symfony\\\\Component\\\\Messenger\\\\Stamp\\\\BusNameStamp\\\";a:1:{i:0;O:46:\\\"Symfony\\\\Component\\\\Messenger\\\\Stamp\\\\BusNameStamp\\\":1:{s:55:\\\"\\0Symfony\\\\Component\\\\Messenger\\\\Stamp\\\\BusNameStamp\\0busName\\\";s:21:\\\"messenger.bus.default\\\";}}}s:45:\\\"\\0Symfony\\\\Component\\\\Messenger\\\\Envelope\\0message\\\";O:51:\\\"Symfony\\\\Component\\\\Mailer\\\\Messenger\\\\SendEmailMessage\\\":2:{s:60:\\\"\\0Symfony\\\\Component\\\\Mailer\\\\Messenger\\\\SendEmailMessage\\0message\\\";O:39:\\\"Symfony\\\\Bridge\\\\Twig\\\\Mime\\\\TemplatedEmail\\\":5:{i:0;s:41:\\\"registration/confirmation_email.html.twig\\\";i:1;N;i:2;a:3:{s:9:\\\"signedUrl\\\";s:164:\\\"http://localhost:8000/verify/email?expires=1770140353&signature=2Eh1oOoCr53MUha9H0f380soFBmmM83XhDU1Xz2V6aI&token=Gv1N660jH8SIyNY2ms5wbG8sadd%2F7yFNOOHvGJ%2FhDIk%3D\\\";s:19:\\\"expiresAtMessageKey\\\";s:26:\\\"%count% hour|%count% hours\\\";s:20:\\\"expiresAtMessageData\\\";a:1:{s:7:\\\"%count%\\\";i:1;}}i:3;a:6:{i:0;N;i:1;N;i:2;N;i:3;N;i:4;a:0:{}i:5;a:2:{i:0;O:37:\\\"Symfony\\\\Component\\\\Mime\\\\Header\\\\Headers\\\":2:{s:46:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\Headers\\0headers\\\";a:3:{s:4:\\\"from\\\";a:1:{i:0;O:47:\\\"Symfony\\\\Component\\\\Mime\\\\Header\\\\MailboxListHeader\\\":5:{s:50:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0name\\\";s:4:\\\"From\\\";s:56:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0lineLength\\\";i:76;s:50:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0lang\\\";N;s:53:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0charset\\\";s:5:\\\"utf-8\\\";s:58:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\MailboxListHeader\\0addresses\\\";a:1:{i:0;O:30:\\\"Symfony\\\\Component\\\\Mime\\\\Address\\\":2:{s:39:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Address\\0address\\\";s:25:\\\"noreply@onlybangers.local\\\";s:36:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Address\\0name\\\";s:15:\\\"OnlyBangers Bot\\\";}}}}s:2:\\\"to\\\";a:1:{i:0;O:47:\\\"Symfony\\\\Component\\\\Mime\\\\Header\\\\MailboxListHeader\\\":5:{s:50:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0name\\\";s:2:\\\"To\\\";s:56:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0lineLength\\\";i:76;s:50:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0lang\\\";N;s:53:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0charset\\\";s:5:\\\"utf-8\\\";s:58:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\MailboxListHeader\\0addresses\\\";a:1:{i:0;O:30:\\\"Symfony\\\\Component\\\\Mime\\\\Address\\\":2:{s:39:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Address\\0address\\\";s:20:\\\"user@onlybangers.com\\\";s:36:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Address\\0name\\\";s:0:\\\"\\\";}}}}s:7:\\\"subject\\\";a:1:{i:0;O:48:\\\"Symfony\\\\Component\\\\Mime\\\\Header\\\\UnstructuredHeader\\\":5:{s:50:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0name\\\";s:7:\\\"Subject\\\";s:56:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0lineLength\\\";i:76;s:50:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0lang\\\";N;s:53:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0charset\\\";s:5:\\\"utf-8\\\";s:55:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\UnstructuredHeader\\0value\\\";s:25:\\\"Please Confirm your Email\\\";}}}s:49:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\Headers\\0lineLength\\\";i:76;}i:1;N;}}i:4;N;}s:61:\\\"\\0Symfony\\\\Component\\\\Mailer\\\\Messenger\\\\SendEmailMessage\\0envelope\\\";N;}}','[]','default','2026-02-03 16:39:13','2026-02-03 16:39:13',NULL);
/*!40000 ALTER TABLE `messenger_messages` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `user` (
  `id` int NOT NULL AUTO_INCREMENT,
  `email` varchar(180) COLLATE utf8mb4_unicode_ci NOT NULL,
  `roles` json NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_verified` tinyint NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_IDENTIFIER_EMAIL` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES (3,'admin@onlybangers.local','[\"ROLE_ADMIN\"]','$2y$13$IF.p1nIeOUv2iUsRFuAF1OKfswHFTGQtUoGKChl.Z06HNDHt7Oe8K',0),(4,'mouadbounokra@gmail.com','[\"ROLE_USER\"]','$2y$13$.Cb35QejW2wN1lM5Wkv6BOxwO4A2ZYI1IrEoylFS6saEqYl2cvVvS',0),(5,'user@onlybangers.com','[]','$2y$13$MDCypkNJZDBLQujNRRrLg./mqUjYeOumUURfWM56mkI33qY4iql.S',0);
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
UNLOCK TABLES;
SET @@SESSION.SQL_LOG_BIN = @MYSQLDUMP_TEMP_LOG_BIN;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2026-02-03 18:37:32
