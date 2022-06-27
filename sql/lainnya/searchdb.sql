--KASIH nama di bejiguysearch terus klik  taruh di mysql--

CREATE TABLE `search` (
  `judul` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL,
  `url` varchar(255) NOT NULL,
  `kata_kunci` varchar(255) NOT NULL,
  `foto` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `search` (`judul`, `deskripsi`, `url`, `kata_kunci` ,`foto`) VALUES
('Home', 'home', 'https://bejiguy.000webhostapp.com/home.html', 'kembali', 'https://image.flaticon.com/icons/png/128/69/69524.png'),
('Download', 'download', 'https://bejiguy.000webhostapp.com/download.html', 'unduh', 'https://image.flaticon.com/icons/png/128/608/608258.png');



UPDATE `search` SET `judul`='Home',`deskripsi`='home',`url`='https://bejiguy.000webhostapp.com/home.html',`kata_kunci`='kembali',`foto`='dw.jpg' WHERE 1