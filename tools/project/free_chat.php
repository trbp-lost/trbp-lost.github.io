<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form method="POST">
		<input type="text" pattern="[a-z]{1,100}" title="Biar kgk nggas, pakai huruf kecil Max huruf 100" name="sensor" />
		<input type="submit" name="submit" />
	</form>
</body>
</html>
<?php
if(isset($_POST['submit'])){
	function sensor($kalimat){
		include '../../conek/koneksi.php';
		$query = mysqli_query($koneksi, "SELECT * FROM katajelek");
		while ($res = mysqli_fetch_array($query)){
			// if ($_POST['sensor'] == $res['kata']) { //jika kata sama
			$kalimat = str_replace($res['kata'], $res['ganti'], $kalimat);
			// }
			if ($_POST['sensor'] == $res['kata']) {
				echo "<script>alert('keep your language');</script><embed src='https://media1.tenor.com/images/d71c38607336c2a4616889bbe01214ec/tenor.gif?itemid=13162067' scrolling='none'></embed> <br>";
				
			}
		}
		return $kalimat;
	}
	$kalimat = strtolower($_POST['sensor']);
	echo sensor($kalimat);
}
?>