CREATE TABLE `users` (
  `id` bigint(20) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mnum` varchar(11) NOT NULL,
  `message` text NOT NULL,
  `timemodified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
