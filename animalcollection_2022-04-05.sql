# ************************************************************
# Sequel Ace SQL dump
# Version 20031
#
# https://sequel-ace.com/
# https://github.com/Sequel-Ace/Sequel-Ace
#
# Host: 127.0.0.1 (MySQL 5.5.5-10.7.3-MariaDB-1:10.7.3+maria~focal)
# Database: animalcollection
# Generation Time: 2022-04-05 14:47:51 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
SET NAMES utf8mb4;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE='NO_AUTO_VALUE_ON_ZERO', SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table animal_stats
# ------------------------------------------------------------

DROP TABLE IF EXISTS `animal_stats`;

CREATE TABLE `animal_stats` (
  `id` int(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(20) DEFAULT NULL,
  `status` varchar(20) DEFAULT NULL,
  `weight_kg` float unsigned DEFAULT NULL,
  `threat` varchar(40) DEFAULT NULL,
  `diet` varchar(20) DEFAULT NULL,
  `distribution` varchar(50) DEFAULT NULL,
  `image` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

LOCK TABLES `animal_stats` WRITE;
/*!40000 ALTER TABLE `animal_stats` DISABLE KEYS */;

INSERT INTO `animal_stats` (`id`, `name`, `status`, `weight_kg`, `threat`, `diet`, `distribution`, `image`)
VALUES
	(1,'Polar Bear','Vulnerable Species',600,'Climate Change','Carnivore','Arctic','https://www.yorkshirewildlifepark.com/media/utlhunpc/2021polar-bears-up-close-12-dr-ywp.jpg?center=0.49239932990010549%2C0.38649900727994707&mode=crop&heightRatio=1&width=320'),
	(2,'Lion','Vulnerable Species',190,'Hunting','Carnivore','Sub-Saharan Africa','https://www.yorkshirewildlifepark.com/media/ng3hfszb/ywp-lions-aerial-jpg.jpg?center=0.53635227523340434%2C0.61945731303772333&mode=crop&heightRatio=1&width=320'),
	(3,'Sea Lion','Least Concern',350,'Pollutants','Carnivore','West Coast USA','https://www.yorkshirewildlifepark.com/media/1mebzfbz/2021sea-lion-heads-up-1-dr-ywp.jpg?center=0.57459305252559156%2C0.68034414295168766&mode=crop&heightRatio=1&width=320'),
	(4,'Tiger','Endagered Species',320,'Poaching','Carnivore','E. Russia & NE China','https://www.yorkshirewildlifepark.com/media/cnlkgb1v/amur-tiger-cu.jpg?center=0.3872985653090365%2C0.49770525242223357&mode=crop&heightRatio=1&width=320'),
	(5,'Giraffe','Endagered Species',800,'Habitat Loss','Herbivore','East & Southern Africa','https://www.yorkshirewildlifepark.com/media/bjpdrxbz/giraffe-slider-1.jpg?center=0.20875484541930603%2C0.513567174056916&mode=crop&heightRatio=1&width=320'),
	(6,'Red Panda','Endagered Species',6,'Habitat Loss','Herbivore','Himalayan Forests','https://www.yorkshirewildlifepark.com/media/xybhsgx5/jamie-stewart-ywp-red-panda-s_-3.jpg?center=0.53469243808375333%2C0.44692676901741119&mode=crop&heightRatio=1&width=320'),
	(7,'Leopard','Critically Endagered',75,'Poaching','Carnivore','Temperate Forests','https://www.yorkshirewildlifepark.com/media/s1fbas2j/leopard-cr-george-cuevas.jpeg?center=0.17950216197265398%2C0.73064195896757111&mode=crop&heightRatio=1&width=320'),
	(8,'Rhino','Critically Endagered',1350,'Poaching','Herbivore','Kenya & Tanzania','https://www.yorkshirewildlifepark.com/media/snihlixv/august.jpg?center=0.50009452391455034%2C0.41466960169456329&mode=crop&heightRatio=1&width=320'),
	(9,'Warty Pig','Critically Endagered',185,'Habitat Loss','Omnivore','Panay & Negros Islands','https://www.yorkshirewildlifepark.com/media/qwgaisye/2020warty-pig-on-the-run-2-dr-ywp.jpg?center=0.48901623686723972%2C0.329083800781914&mode=crop&heightRatio=1&width=320'),
	(10,'Lemur','Endagered Species',2.2,'Habitat Loss','Herbivore','Madagascar','https://www.yorkshirewildlifepark.com/media/1kbaxgjo/lemur-in-tree-cr-david-roberts.jpg?anchor=center&mode=crop&heightRatio=1&width=320'),
	(11,'Giant Otter','Endagered Species ',31,'Habitat Loss','Carnivore','South America','https://www.yorkshirewildlifepark.com/media/cpclgytg/2019giant-otter-in-golden-light-1-dr-ywp.jpg?center=0.42663640876533582%2C0.33492544752253189&mode=crop&heightRatio=1&width=320'),
	(12,'Red Howler Monkey','Least Concern',9,'Poaching','Herbivore','South America','https://www.yorkshirewildlifepark.com/media/k1xdv1m0/2020howling-howler-1-dr-ywp.jpg?center=0.49766718506998447%2C0.47580678655978736&mode=crop&heightRatio=1&width=320'),
	(13,'Maned Wolf','Near Threatened ',24,'Habitat Loss','Omnivore','Open Grasslands','https://www.yorkshirewildlifepark.com/media/zdjlvoln/maned-wolf-1.jpg?center=0.619470124713036%2C0.31767041694242226&mode=crop&heightRatio=1&width=320'),
	(14,'Armadillo','Least Concern',6,'Habitat Loss','Omnivore','South America','https://www.yorkshirewildlifepark.com/media/iazfn4x4/catching-the-light-1-dr-ywp.jpg?anchor=center&mode=crop&heightRatio=1&width=320'),
	(15,'Meerkat','Least Concern',0.7,'Predation','Omnivore','Southern Africa','https://www.yorkshirewildlifepark.com/media/4kynm1pu/meerkat-cr-will-hempworth.jpg?center=0.43067546978161503%2C0.54714745217538518&mode=crop&heightRatio=1&width=320'),
	(16,'Giant Anteater','Vulnerable Species ',40,'Habitat Loss','Omnivore','South America','https://www.yorkshirewildlifepark.com/media/l5tjrqnf/giant-anteater-cr-ulli-j.jpg?center=0.41472265422498705%2C0.58506777035006552&mode=crop&heightRatio=1&width=320'),
	(17,'Wallaby','Least Concern',18,'Hunting','Herbivore','Australia','https://www.yorkshirewildlifepark.com/media/4pubcm00/wallaby-02.jpg?center=0.55772662933103578%2C0.49503639973527463&mode=crop&heightRatio=1&width=320'),
	(18,'Baboon','Vulnerable Species',25,'Habitat Loss','Omnivore','Western Africa','https://www.yorkshirewildlifepark.com/media/2byb3abv/baboon-cr-liam-tattersall.jpg?center=0.45888324873096448%2C0.41713165108291711&mode=crop&heightRatio=1&width=320'),
	(19,'Zebra','Endagered Species',450,'Habitat Loss','Herbivore','Kenya & Ethiopia','https://www.yorkshirewildlifepark.com/media/g10hfw0f/zebra.jpg?center=0.30878618588115797%2C0.39275382731833103&mode=crop&heightRatio=1&width=320'),
	(20,'Capybara','Least Concern',65,'Hunting','Herbivore','South America','https://www.yorkshirewildlifepark.com/media/bwifsgar/capybara.jpg?center=0.40790312300828552%2C0.61182218917627063&mode=crop&heightRatio=1&width=320');

/*!40000 ALTER TABLE `animal_stats` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
