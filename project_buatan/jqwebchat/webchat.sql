DROP TABLE `user`;

DROP TABLE `chat`;

CREATE TABLE `user` (
  `username` varchar(20) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `loginDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`username`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

INSERT INTO `user` (`username`, `email`, `loginDate`) VALUES
('bejiguy','beji','232323');

CREATE TABLE `chat` (
  `id` int(23) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) DEFAULT NULL,
  `chat` text,
  `chatTime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=31 DEFAULT CHARSET=latin1;