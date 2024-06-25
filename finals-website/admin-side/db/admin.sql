CREATE TABLE `admin` (
  `id` bigint(20) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `username` varchar(50) NULL DEFAULT NULL,
  `password` varchar(50) NULL DEFAULT NULL,
  `logintype` varchar(50) NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;