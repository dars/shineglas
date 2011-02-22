# Sequel Pro dump
# Version 2492
# http://code.google.com/p/sequel-pro
#
# Host: 127.0.0.1 (MySQL 5.1.44)
# Database: shineglas
# Generation Time: 2011-02-22 15:35:28 +0800
# ************************************************************

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table boards
# ------------------------------------------------------------

DROP TABLE IF EXISTS `boards`;

CREATE TABLE `boards` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(150) DEFAULT NULL,
  `content` text,
  `category` int(11) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `lang` varchar(5) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=utf8 COMMENT='????';

LOCK TABLES `boards` WRITE;
/*!40000 ALTER TABLE `boards` DISABLE KEYS */;
INSERT INTO `boards` (`id`,`title`,`content`,`category`,`created`,`modified`,`lang`)
VALUES
	(10,'網球混雙女雙晉級 中華拚雙金','<p>\n	<span style=\"font-size: 12px;\">廣州亞運網球混雙準決賽，中華隊楊宗樺、詹詠然今天輕鬆以6比3、6比3擊敗日本組合近藤大生與瀨間友里加，晉級決賽，至少可以拿下銀牌。</span></p>\n<p>\n	<br />\n	<span style=\"font-size: 12px;\">今天稍早，詹詠然與莊佳容搭配的女雙，也以2比1擊敗南韓組合，晉級決賽。詹詠然的女雙與混雙都闖進決賽，有機會為中華隊添雙金。</span></p>\n<div firebugversion=\"1.5.4\" id=\"_firebugConsole\" style=\"display: none;\">\n	&nbsp;</div>\n',39,'2010-11-22 02:54:55','2010-11-22 02:54:55','zhtw'),
	(11,'立體聲揚聲器 只聽，不見。','<p>\n	<img alt=\"\" src=\"http://192.168.1.131/~Dars/shineglas/public/files/ckfiles/fe829de72430d3c5c8b3290a1c3c6cf1.png\" style=\"width: 147px; height: 76px; float: left; margin: 5px;\" /><span style=\"font-size: 14px;\"><strong>儘管體積小巧， MacBook Air 可以發出完整的立體聲效。機殼內部的空間效率設計，可以讓左右揚聲器位置經由鍵盤發出聲響。所以你在線上談話，聽音樂或是玩遊戲的時候，都能體驗更出色的聲音。</strong></span></p>\n<p>\n	儘管體積小巧， MacBook Air 可以發出完整的立體聲效。機殼內部的空間效率設計，可以讓左右揚聲器位置經由鍵盤發出聲響。所以你在線上談話，聽音樂或是玩遊戲的時候，都能體驗更出色的聲音。</p>\n<p>\n	儘管體積小巧， MacBook Air 可以發出完整的立體聲效。機殼內部的空間效率設計，可以讓左右揚聲器位置經由鍵盤發出聲響。所以你在線上談話，聽音樂或是玩遊戲的時候，都能體驗更出色的聲音。</p>\n',40,'2010-11-22 09:21:49','2010-11-22 09:21:49','zhtw');

/*!40000 ALTER TABLE `boards` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table files
# ------------------------------------------------------------

DROP TABLE IF EXISTS `files`;

CREATE TABLE `files` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `file_type` varchar(50) DEFAULT NULL,
  `category` varchar(50) DEFAULT NULL,
  `hash_id` int(11) DEFAULT NULL,
  `weight` float DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=28 DEFAULT CHARSET=utf8;

LOCK TABLES `files` WRITE;
/*!40000 ALTER TABLE `files` DISABLE KEYS */;
INSERT INTO `files` (`id`,`name`,`file_type`,`category`,`hash_id`,`weight`,`created`,`modified`)
VALUES
	(13,'f_2529087_1.jpg','pix','product',35,NULL,'2010-11-22 07:07:55','2010-11-22 07:07:55'),
	(16,'IMG_5671.JPG','pix','product',44,NULL,'2010-11-22 09:51:41','2010-11-22 09:51:41'),
	(17,'IMG_5714.JPG','pix','product',44,NULL,'2010-11-22 09:51:42','2010-11-22 09:51:42'),
	(18,'IMG_5715.JPG','pix','product',44,NULL,'2010-11-22 09:51:42','2010-11-22 09:51:42'),
	(19,'IMG_5730.JPG','pix','product',44,NULL,'2010-11-22 09:51:42','2010-11-22 09:51:42'),
	(20,'IMG_5731.JPG','pix','product',44,NULL,'2010-11-22 09:51:42','2010-11-22 09:51:42'),
	(21,'IMG_5670.JPG','pix','product',44,NULL,'2010-11-22 09:52:10','2010-11-22 09:52:10'),
	(22,'IMG_5669.JPG','pix','product',44,NULL,'2010-11-22 09:52:10','2010-11-22 09:52:10'),
	(23,'IMG_5697.JPG','pix','product',44,NULL,'2010-11-22 09:52:10','2010-11-22 09:52:10'),
	(24,'IMG_5639.JPG','pix','product',44,NULL,'2010-11-22 09:52:10','2010-11-22 09:52:10'),
	(25,'P1090641.JPG','pix','product',46,NULL,'2010-11-22 21:51:11','2010-11-22 21:51:11'),
	(26,'P1090570.JPG','pix','product',46,NULL,'2010-11-22 21:51:11','2010-11-22 21:51:11');

/*!40000 ALTER TABLE `files` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table nodes
# ------------------------------------------------------------

DROP TABLE IF EXISTS `nodes`;

CREATE TABLE `nodes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `content` text,
  `content2` text,
  `type` varchar(45) DEFAULT NULL,
  `parent` int(11) DEFAULT NULL,
  `lang` varchar(5) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=47 DEFAULT CHARSET=utf8 COMMENT='??????';

LOCK TABLES `nodes` WRITE;
/*!40000 ALTER TABLE `nodes` DISABLE KEYS */;
INSERT INTO `nodes` (`id`,`title`,`content`,`content2`,`type`,`parent`,`lang`,`created`,`modified`)
VALUES
	(27,'關於我們','<p>\n	&nbsp;<img alt=\"\" src=\"http://121.50.181.129/shineglas/public/files/ckfiles/6e10f08f02d5afb44b8e824e5a551a4d.png\" style=\"width: 103px; height: 57px\" /><a href=\"#001\"><img alt=\"\" src=\"http://121.50.181.129/shineglas/public/files/ckfiles/9cc1a718da2f8ee3624c97d6f56a947e.png\" style=\"width: 201px; height: 57px\" /></a><a href=\"#002\"><img alt=\"\" src=\"http://121.50.181.129/shineglas/public/files/ckfiles/136168daade50268ea5e3feba553e11c.png\" style=\"width: 192px; height: 57px\" /></a><img alt=\"\" src=\"http://121.50.181.129/shineglas/public/files/ckfiles/a2c58ee2b5e3e838b6bcb367665c76d9.png\" style=\"width: 195px; height: 57px\" /><img alt=\"\" src=\"http://121.50.181.129/shineglas/public/files/ckfiles/8745c412e255a4fe06d790a8e76d4a37.png\" style=\"width: 109px; height: 57px\" /></p>\n<p>\n	<a name=\"001\"></a><img alt=\"\" src=\"http://121.50.181.129/shineglas/public/files/ckfiles/29202cfa9469b9a71ec5a3183440aae9.png\" style=\"width: 800px; height: 522px\" /><a name=\"002\"></a><img alt=\"\" src=\"http://121.50.181.129/shineglas/public/files/ckfiles/647a1af01a30155eadf8c6aa00e2d83d.png\" style=\"width: 800px; height: 47px\" /></p>\n<p>\n	<img alt=\"\" src=\"http://121.50.181.129/shineglas/public/files/ckfiles/17af09e6869ee5946baa917e99969607.png\" style=\"width: 800px; height: 549px\" /></p>\n<p>\n	<img alt=\"\" src=\"http://121.50.181.129/shineglas/public/files/ckfiles/eed991f30c62ce798589e06df9c4e4c1.png\" style=\"width: 800px; height: 518px\" /><img alt=\"\" src=\"http://121.50.181.129/shineglas/public/files/ckfiles/430663b6eb3080b4e55c83699b79ef34.png\" style=\"width: 800px; height: 287px\" /></p>\n<div firebugversion=\"1.5.4\" id=\"_firebugConsole\" style=\"display: none\">\n	<img alt=\"\" src=\"http://121.50.181.129/shineglas/public/files/ckfiles/56f50328a5480616c91f1e650fcfcd05.jpg\" style=\"width: 802px; height: 516px\" /></div>\n',NULL,'33',NULL,'zhtw','2010-11-21 21:11:34','2011-02-15 04:39:21'),
	(42,'高溫網印玻璃',NULL,NULL,'51',NULL,'zhtw','2011-02-14 09:13:05','2011-02-14 09:13:05'),
	(43,'鏡玻璃',NULL,NULL,'52',NULL,'zhtw','2011-02-15 04:47:07','2011-02-15 04:47:07'),
	(44,'特殊功能玻璃',NULL,NULL,'53',NULL,'zhtw','2011-02-15 04:47:32','2011-02-15 04:47:32'),
	(45,'藝術玻璃',NULL,NULL,'54',NULL,'zhtw','2011-02-15 04:47:49','2011-02-15 04:47:49'),
	(46,'玻璃五金',NULL,NULL,'55',NULL,'zhtw','2011-02-15 06:35:26','2011-02-15 06:35:26'),
	(28,'專題報導',NULL,NULL,'34',NULL,'zhtw','2010-11-21 21:11:34','2010-11-21 21:11:34'),
	(29,'About Us',NULL,NULL,'33',NULL,'en','2010-11-21 21:11:34','2010-11-21 21:11:34'),
	(30,'Special report',NULL,NULL,'34',NULL,'en','2010-11-21 21:11:34','2010-11-21 21:11:34'),
	(31,'節能玻璃','<p>\n	LA LA LA LA LA LA LA LA LA LA</p>\n<p>\n	LA LA LA LA LA LA LA LA LA LA LA</p>\n<p>\n	LA LA LA LA LA LA LA</p>\n<div firebugversion=\"1.5.4\" id=\"_firebugConsole\" style=\"display: none;\">\n	&nbsp;</div>\n','<p>\n	OA OA OA OA OA OA OA OA OA OA OA OA OA OA OA OA OA OA</p>\n','35',NULL,'zhtw','2010-11-21 23:55:48','2010-11-22 05:46:29'),
	(32,'來自蘋果的報導','<p>\n	<span style=\"font-size: 14px;\"><strong>Multi-Touch 觸控板<br />\n	一點，一觸，ㄧ捲動，一見鍾情。</strong></span><br />\n	<br />\n	全新 MacBook Air 配備無按鍵設計的寬闊 Multi-Touch 觸控板，整塊板面都可供點按， Multi-Touch 觸控板可以讓你撥合，輕掃，旋轉來調整圖檔，放大文字或是滑過相簿。試試看用四個手指來做輕掃，用上下來操作 Expos&eacute; ，以及四指輕掃左或右來切換執行中的應用程式。或試試新功能，用三個手指拖移你的視窗，移動到另一個地方。</p>\n<p>\n	<img alt=\"\" src=\"http://192.168.1.131/~Dars/shineglas/public/files/ckfiles/98a0604834ae463ed0e081d0dca0c258.png\" style=\"width: 60px; height: 76px;\" /></p>\n<p>\n	<span style=\"font-size: 14px;\"><strong>FaceTime 鏡頭<br />\n	Hello，iPhone。還有你，iPod touch。</strong></span><br />\n	<br />\n	隱藏在餅乾一般厚的 MacBook Air 顯示器裡面是另一項科技上的成就－ FaceTime 鏡頭。它太薄了(甚至比 iPhone 4 的鏡頭還要薄，)你幾乎會忘記它的存在，但是它的功能卻是非常強大。使用 Mac 的 FaceTime 應用程式 Beta 版，你就能用 Wi-Fi 撥打 FaceTime 電話給 Mac，iPhone 4，或是全新 iPod Touch 的人。它的影像品質非常好，甚至在燈光幽暗的情況下也能對談。<br />\n	進一步了解 Mac 的 FaceTime</p>\n',NULL,'36',NULL,NULL,'2010-11-21 23:55:48','2010-11-22 08:21:15'),
	(33,'來自網路的第一手消息','<p>\n	<span style=\"color: rgb(0, 0, 255);\"><span style=\"font-size: 16px;\">鄉民表示...</span></span></p>\n<div firebugversion=\"1.5.4\" id=\"_firebugConsole\" style=\"display: none;\">\n	&nbsp;</div>\n',NULL,'37',NULL,'zhtw','2010-11-22 01:48:49','2010-11-22 01:49:14'),
	(34,'From Time.',NULL,NULL,'38',NULL,'en','2010-11-22 01:49:51','2010-11-22 01:49:51'),
	(35,'複層玻璃','<h4>\n	高解析度顯示器<br />\n	百萬級像素，百萬分纖細。</h4>\n<p>\n	從外型的設計到像素的細緻，全新 MacBook Air 的顯示器是工程上的成就與設計上的突破。它的尺寸僅僅只有 4.86 釐米 (0.19 吋) 厚，但是因為解析度非常高，你會感覺像是在看大螢幕。11 吋 MacBook Air 配備 16:9 比例寬螢幕，與比一般 13 吋筆記型電腦的解析度還高， 13 吋 MacBook Air 擁有相當於一般 15 吋筆記型電腦的解析度。</p>\n','<h4>\n	FaceTime 鏡頭<br />\n	Hello，iPhone。還有你，iPod touch。</h4>\n<p>\n	隱藏在餅乾一般厚的 MacBook Air 顯示器裡面是另一項科技上的成就－ FaceTime 鏡頭。它太薄了(甚至比 iPhone 4 的鏡頭還要薄，)你幾乎會忘記它的存在，但是它的功能卻是非常強大。使用 Mac 的 FaceTime 應用程式 Beta 版，你就能用 Wi-Fi 撥打 FaceTime 電話給 Mac，iPhone 4，或是全新 iPod Touch 的人。它的影像品質非常好，甚至在燈光幽暗的情況下也能對談。</p>\n','44',NULL,'zhtw','2010-11-22 05:37:49','2010-11-22 09:52:18'),
	(36,'膠合安全玻璃',NULL,NULL,'45',NULL,'zhtw','2010-11-22 05:38:05','2010-11-22 05:38:05'),
	(37,'氣密門窗1',NULL,NULL,'46',NULL,'zhtw','2010-11-22 05:47:27','2010-11-22 05:47:27'),
	(38,'氣密門窗2',NULL,NULL,'47',NULL,'zhtw','2010-11-22 05:47:39','2010-11-22 05:47:39'),
	(39,'桃園國際機場',NULL,NULL,'48',NULL,'zhtw','2010-11-22 08:14:08','2010-11-22 08:14:08'),
	(40,'松山機場',NULL,NULL,'49',NULL,'zhtw','2010-11-22 08:14:17','2010-11-22 08:14:17'),
	(41,'板橋高鐵站',NULL,NULL,'50',NULL,'zhtw','2010-11-22 08:14:26','2010-11-22 08:14:26');

/*!40000 ALTER TABLE `nodes` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table taxonomies
# ------------------------------------------------------------

DROP TABLE IF EXISTS `taxonomies`;

CREATE TABLE `taxonomies` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) DEFAULT NULL,
  `category` varchar(100) DEFAULT NULL,
  `bio` varchar(255) DEFAULT NULL,
  `parent` int(11) DEFAULT NULL,
  `weight` float DEFAULT '0',
  `lang` varchar(5) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=56 DEFAULT CHARSET=utf8;

LOCK TABLES `taxonomies` WRITE;
/*!40000 ALTER TABLE `taxonomies` DISABLE KEYS */;
INSERT INTO `taxonomies` (`id`,`name`,`category`,`bio`,`parent`,`weight`,`lang`)
VALUES
	(33,'關於我們','summary',NULL,NULL,0,NULL),
	(34,'專題報導','summary',NULL,NULL,0,NULL),
	(35,'節能玻璃','product',NULL,NULL,1,'zhtw'),
	(36,'來自蘋果的報導','case',NULL,NULL,0,'zhtw'),
	(37,'來自網路的第一手消息','case',NULL,NULL,0,'zhtw'),
	(38,'From Time.','case',NULL,NULL,0,'en'),
	(39,'公司動態','news',NULL,NULL,0,'zhtw'),
	(40,'產業動態','news',NULL,NULL,0,'zhtw'),
	(46,'氣密門窗1','product2',NULL,NULL,1,'zhtw'),
	(45,'膠合安全玻璃','product',NULL,NULL,0,'zhtw'),
	(44,'複層玻璃','product',NULL,NULL,2,'zhtw'),
	(47,'氣密門窗2','product2',NULL,NULL,0,'zhtw'),
	(48,'桃園國際機場','case2',NULL,NULL,1,'zhtw'),
	(49,'松山機場','case2',NULL,NULL,2,'zhtw'),
	(50,'板橋高鐵站','case2',NULL,NULL,0,'zhtw'),
	(51,'高溫網印玻璃','product',NULL,NULL,5,'zhtw'),
	(52,'鏡玻璃','product',NULL,NULL,3,'zhtw'),
	(53,'特殊功能玻璃','product',NULL,NULL,4,'zhtw'),
	(54,'藝術玻璃','product',NULL,NULL,6,'zhtw'),
	(55,'玻璃五金','product2',NULL,NULL,2,'zhtw');

/*!40000 ALTER TABLE `taxonomies` ENABLE KEYS */;
UNLOCK TABLES;





/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
