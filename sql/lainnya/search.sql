CREATE TABLE `artikel` (
  `id` int(100) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL,
  `url` varchar(255) NOT NULL,
  `kata_kunci` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `artikel` (`id`, `judul`, `deskripsi`, `url`, `kata_kunci`) VALUES
('1', 'Macromedia Dreamweaver 8', 'Aplikasi buat website tanpa perlu punya skill coding cukup dengan klik-klik dan mempunyai istilah What you see is What you get', 'https://bejiguy.000webhostapp.com/download/software/dreamweaver.html', 'dreamweaver'),
('2', 'CorelDraw x7', 'Aplikasi buat logo atau gambar dengan mudah dan aplikasi yang gampang digunakan juga memiliki Interface yang bagus', 'https://bejiguy.000webhostapp.com/download/software/coreldraw_x7.html', 'coreldraw'),
('3', 'Photoshop cs4', 'Aplikasi buat logo atau gambar dengan size yang kecil sekitar 70 MB sehingga bisa dipaki untuk laptop kalian yang potato', 'https://bejiguy.000webhostapp.com/download/software/photoshop_cs4.html', 'photoshop');
