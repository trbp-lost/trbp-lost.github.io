CREATE TABLE `artikel` (
  `id` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL,
  `url` varchar(255) NOT NULL,
  `kata_kunci` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `artikel`
--

INSERT INTO `artikel` (`id`, `judul`, `deskripsi`, `url`, `kata_kunci`) VALUES
(1, 'Menampilkan Data MySQL dengan DataTables Server-side Processing (PHP, Bootstrap)', 'Tutorial bagaimana cara menampilkan data MySQL dengan DataTables Server-side processing dengan PHP dan Bootstrap', 'http://tutorialweb.net/menampilkan-data-mysql-dengan-datatables-server-side-processing-php-bootstrap/', 'menampilkan data mysql server side datatables php bootstrap'),
(2, 'Membuat Fasilitas Buku Tamu dengan PHP, MySQLi dan Bootstrap', 'Cara membuat buku tamu di website dengan bahasa pemrograman PHP dan database MySQL dan Bootstrap', 'http://tutorialweb.net/membuat-fasilitas-buku-tamu-dengan-php-mysqli-dan-bootstrap/', 'buku tamu/guestbook dengan php, mysql dan bootstrap'),
(3, '5 htaccess Trik Yang Harus Anda Ketahui', 'Trik terbaik dengan menggunakan htaccess', 'http://tutorialweb.net/5-htaccess-trik-yang-harus-anda-ketahui/', 'trik htaccess'),
(4, 'Membuat Halaman Dinamis Dengan PHP', 'Bagaimana membuat halaman dinamis dengan PHP', 'http://tutorialweb.net/membuat-halaman-dinamis-dengan-php/', 'halaman dinamis dengan php'),
(5, 'Membuat Coundown Timer Redirect dengan jQuery', 'Tutorial bagaimana cara membuat cound down timer dengan jQuery', 'http://tutorialweb.net/membuat-coundown-timer-redirect-dengan-jquery/', 'cound down timer jquery'),
(6, 'Simple & Pure CSS Dropdown Menu', 'Membuat dropdown menu dengan CSS murni yang sederhana', 'http://tutorialweb.net/simple-pure-css-dropdown-menu/', 'dropdown menu css'),
(7, 'Cara Installasi Joomla', 'Step by step instalasi CMS Joomla', 'http://tutorialweb.net/cara-installasi-joomla/', 'instalasi cms joomla');