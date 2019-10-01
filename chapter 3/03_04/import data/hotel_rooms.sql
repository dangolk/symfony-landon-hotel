# ************************************************************
# Sequel Pro SQL dump
# Version 4541
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: 127.0.0.1 (MySQL 5.6.38)
# Database: symfony1
# Generation Time: 2019-07-03 17:51:09 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table hotel
# ------------------------------------------------------------

LOCK TABLES `hotel` WRITE;
/*!40000 ALTER TABLE `hotel` DISABLE KEYS */;

INSERT INTO `hotel` (`id`, `name`, `tag`, `description`, `price`)
VALUES
	(1,'Piccadilly','piccadilly','Designed to be our economy room, for those who will be spending more time seeing the sights, and less time hitting the hay. The Piccadilly room has a smaller footprint, but maintains the accommodations of some of our more deluxe rooms.',1000.00),
	(2,'Cambridge','cambridge','This room features a king bed, with a Comfort-Plus mattress, covered in 400-thread Egyptian cotton sheets. The Cambridge room is decorated in tasteful and warm muted tones, that are soothing on the eyes and senses.',800.00),
	(3,'Westminster','westminster','This room is available with a king or two double beds, and is furnished with our Premiere London collection – the softest and most luxurious bed and bath linens.',499.00),
	(4,'Oxford','oxford','Our Oxford suites are some of the prettiest and most romantic rooms around and are perfect for honeymoons. All of these feature canopy beds, lots of windows, and spare no modern comfort or convenience, including a TLX media system.',250.00),
	(5,'Victoria','victoria','Traveling with the family? Our spacious Victoria suites, with breathtaking views of the city, are the perfect choice. These corner rooms are furnished with a king or two double beds, and have a sofa with a comfortable pullout bed.',1500.00),
	(6,'Manchester','manchester','The Manchester Executive Suite, is popular with business travelers the world over. These two-room suites feature a king-size bed, living room with leather recliner, full-sized executive desk, and leather desk chair.',720.00);

/*!40000 ALTER TABLE `hotel` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
