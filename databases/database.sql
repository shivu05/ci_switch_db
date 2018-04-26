--
-- Create schema db_logger
--
CREATE DATABASE IF NOT EXISTS test_db;

CREATE DATABASE IF NOT EXISTS db_logger;
USE db_logger;

--
-- Definition of table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`,`username`,`password`,`email`) VALUES 
 (1,'test_user','12345','user@mail.com');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
