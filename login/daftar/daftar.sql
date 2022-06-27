CREATE TABLE `daftar` (
  `username`  varchar(100) NOT NULL,
  `password`  varchar(50) NOT NULL,
  `name`      varchar(50)  NOT NULL,
  `tgl`       varchar(5)   NOT NULL,
  `bln`       varchar(12)  NOT NULL,
  `thn`       varchar(6)   NOT NULL,
  `kelamin`   varchar(6)   NOT NULL,
  `hp`        varchar(15)  NOT NULL,
  `email`     varchar(50)  NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
