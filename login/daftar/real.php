<?php
include '../../conek/koneksi.php';

$cek=mysqli_num_rows(mysqli_query($koneksi, "SELECT username FROM daftar WHERE username='$_POST[username]'"));
if ($cek > 0){
  echo "<script>alert('Username sudah ada yang pakai. Ulangi lagi'); location.href='index.php'</script>";
}
else{

  if (isset($_POST['submit']))
  {
    $username  = $_POST['username'];
    $password  = $_POST['password'];
    $name      = $_POST['name'];
    $tgl       = $_POST['tgl'];
    $bln       = $_POST['bln'];
    $thn       = $_POST['thn'];
    $kelamin   = $_POST['kelamin'];
    $hp        = $_POST['hp'];
    $email     = $_POST['email'];

    $sql       = mysqli_query($koneksi,"INSERT INTO daftar(username, password, name, tgl, bln, thn, kelamin, hp, email) 
                 VALUES('$username', '$password' , '$name' , '$tgl' , '$bln' , '$thn' , '$kelamin' , '$hp' , '$email')");
    
    if ($sql == 1)
    {
      echo "<script>alert('Berhasil Memasukan Data'); location.href='index.php'</script>";
    }

  }
}
?>