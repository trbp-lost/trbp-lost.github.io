<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="" method="POST">
		<textarea name="txt" cols="50" rows="3"></textarea>
		<br/>
		<input type="submit" value="submit"/>
	</form>
</body>
</html>
<?php
function sensor($kalimat)
{
	$kata = array(
		'anjing', 
		'binatang', 
		'kotor'
	);
	$sensor = array(
		'a****g',
		'b******g',
		'k***r'
	);
	$hasil = str_replace($kata, $sensor, $kalimat);
	return $hasil;
}
if (isset($_POST['txt']))
{
	$text = $_POST['txt'];
	echo 'sebelum : '.$text.'<br />';
	echo 'setelah : '.sensor($text);
}
?>