# Sequel Pro dump
# Version 2492
# http://code.google.com/p/sequel-pro
#
# Host: 127.0.0.1 (MySQL 5.1.44)
# Database: shineglas
# Generation Time: 2011-01-28 13:19:59 +0800
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
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8 COMMENT='????';

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
	(14,'f_2529088_1.jpg','pix','product',35,NULL,'2010-11-22 07:08:29','2010-11-22 07:08:29'),
	(15,'f_2529089_1.jpg','pix','product',35,NULL,'2010-11-22 07:09:09','2010-11-22 07:09:09'),
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
	(26,'P1090570.JPG','pix','product',46,NULL,'2010-11-22 21:51:11','2010-11-22 21:51:11'),
	(27,'P1090569.JPG','pix','product',46,NULL,'2010-11-22 21:51:11','2010-11-22 21:51:11');

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
) ENGINE=MyISAM AUTO_INCREMENT=42 DEFAULT CHARSET=utf8 COMMENT='??????';

LOCK TABLES `nodes` WRITE;
/*!40000 ALTER TABLE `nodes` DISABLE KEYS */;
INSERT INTO `nodes` (`id`,`title`,`content`,`content2`,`type`,`parent`,`lang`,`created`,`modified`)
VALUES
	(27,'關於我們','<p>\n	<span style=\"color: rgb(0, 0, 255);\">76年12月</span><br />\n	&nbsp;&nbsp; &nbsp;董事長陳隆吉先生，集資創立祥義玻璃股份有限公司。<br />\n	<span style=\"color: rgb(0, 0, 255);\">78年01月</span><br />\n	&nbsp;&nbsp; &nbsp;設立千餘坪廠房於臺北縣五股工業區。<br />\n	<span style=\"color: rgb(0, 0, 255);\">78年05月</span><br />\n	&nbsp;&nbsp; &nbsp;設置水平強化爐，擴大週邊生產設備，提高產品品質，並大幅提升產量。<br />\n	<span style=\"color: rgb(0, 0, 255);\">81年06月</span><br />\n	&nbsp;&nbsp; &nbsp;正式成立品質管制課，並積極推動，建立良好的品管制度。<br />\n	<span style=\"color: rgb(0, 0, 255);\">82年06月</span><br />\n	&nbsp;&nbsp; &nbsp;榮獲經齊部中央標準局㊣字標記證書(台證字第5875號)<br />\n	<span style=\"color: rgb(0, 0, 255);\">84年01月</span><br />\n	&nbsp;&nbsp; &nbsp;成立全面品保委員，規劃公司各單位品管權責，落實品質機能。<br />\n	<span style=\"color: rgb(0, 0, 255);\">87年03月</span><br />\n	&nbsp;&nbsp; &nbsp;成立點支撐結構玻璃工程部門，承攬特殊五金結構玻璃案；代客規劃、設計、製圖、審圖，結構計算、金屬結構五金訂製，玻璃備料、加工、施工。<br />\n	<span style=\"color: rgb(0, 0, 255);\">90年07月</span><br />\n	&nbsp;&nbsp; &nbsp;設置玻璃印刷網印專用機，成立網印部門。<br />\n	<span style=\"color: rgb(0, 0, 255);\">91年10月</span><br />\n	&nbsp;&nbsp; &nbsp;設置複層玻璃生產線，成立複層部門。<br />\n	&nbsp;&nbsp; &nbsp;<img alt=\"\" src=\"http://192.168.1.131/~Dars/shineglas/public/files/ckfiles/4f0d9c73f13032860acf4d6267019239.jpg\" style=\"width: 141px; height: 119px; float: left; margin: 10px;\" /><br />\n	<strong>董事長陳隆吉先生</strong><br />\n	&nbsp; &nbsp;&nbsp;&nbsp;<br />\n	&nbsp;&nbsp; &nbsp;實實在在的經營‧誠誠懇懇的服務<br />\n	&nbsp;&nbsp; &nbsp;多年來本公司不斷加強內部控管及建立品質工程，並以快速服務及最佳品質方針，在玻璃加工領域為大多數客戶提供服務及口質優越的產品；不僅在同業間樹立良好典範，更客戶間建立口碑。<br />\n	羅馬不是一天造成的，祥義深信唯有提昇產品品質及良好的管理，才是企業永續經營的不二法門。在不斷的自我提昇及自我要求下，公司才能進步與革新，也才能在專業市場上屹立不搖。<br />\n	&nbsp; &nbsp;&nbsp;&nbsp;<br />\n	&nbsp;&nbsp; &nbsp;傳統工藝‧科技工法<br />\n	&nbsp;&nbsp; &nbsp;不斷的引進新的設備、技術，以更合理的價格，生產更優良的產品、並且提供建築用料上的多元選擇，不論是建築外觀上的運用，或是室內設計上的搭配，期能給予最完美的呈現。</p>\n<div firebugversion=\"1.5.4\" id=\"_firebugConsole\" style=\"display: none;\">\n	&nbsp;</div>\n',NULL,'33',NULL,'zhtw','2010-11-21 21:11:34','2010-11-22 09:46:22'),
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
) ENGINE=MyISAM AUTO_INCREMENT=51 DEFAULT CHARSET=utf8;

LOCK TABLES `taxonomies` WRITE;
/*!40000 ALTER TABLE `taxonomies` DISABLE KEYS */;
INSERT INTO `taxonomies` (`id`,`name`,`category`,`bio`,`parent`,`weight`,`lang`)
VALUES
	(33,'關於我們','summary',NULL,NULL,0,NULL),
	(34,'專題報導','summary',NULL,NULL,0,NULL),
	(35,'節能玻璃','product',NULL,NULL,0,'zhtw'),
	(36,'來自蘋果的報導','case',NULL,NULL,0,'zhtw'),
	(37,'來自網路的第一手消息','case',NULL,NULL,0,'zhtw'),
	(38,'From Time.','case',NULL,NULL,0,'en'),
	(39,'測試分類一','news',NULL,NULL,0,'zhtw'),
	(40,'測試分類二','news',NULL,NULL,0,'zhtw'),
	(46,'氣密門窗1','product2',NULL,NULL,0,'zhtw'),
	(45,'膠合安全玻璃','product',NULL,NULL,0,'zhtw'),
	(44,'複層玻璃','product',NULL,NULL,0,'zhtw'),
	(47,'氣密門窗2','product2',NULL,NULL,0,'zhtw'),
	(48,'桃園國際機場','case2',NULL,NULL,1,'zhtw'),
	(49,'松山機場','case2',NULL,NULL,2,'zhtw'),
	(50,'板橋高鐵站','case2',NULL,NULL,0,'zhtw');

/*!40000 ALTER TABLE `taxonomies` ENABLE KEYS */;
UNLOCK TABLES;





/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
