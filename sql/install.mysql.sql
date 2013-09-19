--
-- Table structure for table `#__redcomponent_demo`
--

CREATE TABLE IF NOT EXISTS `#__demo` (
  `id` BIGINT(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(70) NOT NULL,
  `username` varchar(70) NOT NULL,
  `email` varchar(70) NOT NULL,
  `password` varchar(100) NOT NULL,
  `registerDate` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  UNIQUE KEY (`username`)
) DEFAULT CHARSET=utf8;