<?php
include 'koneksi.php';

if(isset($_POST['submit'])){
	$kata_kunci = $koneksi->real_escape_string(htmlentities(trim($_POST['kata_kunci'])));
	if(strlen($kata_kunci)<3){
		echo '<p>Kata kunci terlalu pendek.</p>
		<br><center><img width="25%" src="https://image.flaticon.com/icons/svg/128/128469.svg" /></center>';
	}else{
		$where = "";
		$kata_kunci_split = preg_split('/[\s]+/', $kata_kunci);
		$total_kata_kunci = count($kata_kunci_split);
		foreach($kata_kunci_split as $key=>$kunci){
			$where .= "kata_kunci LIKE '%$kunci%'";
			if($key != ($total_kata_kunci - 1)){
				$where .= " OR ";
			}
		}
		$results = $koneksi->query("SELECT judul, url, foto, kata_kunci FROM lagu WHERE $where");
		$num = $results->num_rows;
		if($num == 0){
			echo '<br><br><p>Pencarian dengan kata kunci <b>'.$kata_kunci.'</b> tidak ada hasil.</p>
			<br><center><img size="100%" src="https://pbs.twimg.com/profile_images/1077797757094526976/XVXQdz8i_400x400.jpg" /></center>';
		}else{
			echo '<br><br><p>Pencarian dari kata kunci <b>'.$kata_kunci.'</b> mendapatkan '.$num.' hasil:</p>';
			$no = 1;
			while($row = $results->fetch_assoc()){

				?>

					<table width="100%" border="0">
						<tr>
							<td rowspan="2" width="5%" align="center"><?php echo $no; ?>.</td>
							<td width="15%" rowspan="2">
								<img src="<?php echo $row['foto']; ?>" width="100%" />
							</td>
							<td width="80%">
								<h1><?php echo $row['judul']; ?></h1>
							</td>
						</tr>
						<tr>
							<td>
								<audio controls src="<?php echo $row['url']; ?>"></audio>
							</td>
						</tr>

						<?php
			$no++; // Tambah 1 setiap kali looping
		}
	}
}
}
?>
</table>
</div>