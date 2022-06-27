<?php
//silahkan rubah detail koneksi di bawah ini sesuai dengan server sobat
/*Ket:
*"localhost"     = itu lokalhostnya
*"root"          = nama user database
*""              = password database
*"bejiguysearch" = nama database
*/
$koneksi = new mysqli("localhost", "root", "", "bejiguysearch");
if ($koneksi->connect_errno) {
    echo "Gagal melakukan koneksi ke database: " . $koneksi->connect_error;
}
?>