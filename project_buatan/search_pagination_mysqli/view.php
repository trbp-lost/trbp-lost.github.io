<div class="table-responsive">
	<table class="table table-bordered">
		<tr>
			<th>NIS</th>
			<th>NAMA</th>
			<th>JENIS KELAMIN</th>
			<th>TELP</th>
			<th>ALAMAT</th>
		</tr>
		<?php
		// Include / load file koneksi.php
		include "koneksi.php";
		
		// Cek apakah terdapat data page pada URL
		$page = (isset($_POST['page']))? $_POST['page'] : 1;

		$limit = 5; // Jumlah data per halamannya

		// Untuk menentukan dari data ke berapa yang akan ditampilkan pada tabel yang ada di database
		$limit_start = ($page - 1) * $limit;
		
		// Cek apakah variabel data search tersedia
		// Artinya cek apakah user telah mengklik tombol search atau belum
		if(isset($_POST['search']) && $_POST['search'] == true){ // Jika ada data search yg dikirim (user telah mengklik tombol search) dan search sama dengan true
			// variabel $keyword ini berasal dari file search.php,
			// dimana isinya adalah apa yang diinput oleh user pada textbox pencarian
			$param = '%'.mysqli_real_escape_string($connect, $keyword).'%';
			
			// Buat query untuk menampilkan data siswa berdasarkan NIS / Nama / Jenis Kelamin / Telp / Alamat
			// dan sesuai limit yang ditentukan
			$sql = mysqli_query($connect, "SELECT * FROM siswa WHERE nis LIKE '".$param."' OR nama LIKE '".$param."' OR jenis_kelamin LIKE '".$param."' OR telp LIKE '".$param."' OR alamat LIKE '".$param."' LIMIT ".$limit_start.",".$limit);
			
			// Buat query untuk menghitung semua jumlah data
			// dengan keyword yang telah di input
			$sql2 = mysqli_query($connect, "SELECT COUNT(*) AS jumlah FROM siswa WHERE nis LIKE '".$param."' OR nama LIKE '".$param."' OR jenis_kelamin LIKE '".$param."' OR telp LIKE '".$param."' OR alamat LIKE '".$param."'");
			$get_jumlah = mysqli_fetch_array($sql2);
		}else{ // Jika user belum mengklik tombol search (PROSES TANPA AJAX)
			// Buat query untuk menampilkan semua data siswa
			$sql = mysqli_query($connect, "SELECT * FROM siswa LIMIT ".$limit_start.",".$limit);
			
			// Buat query untuk menghitung semua jumlah data
			$sql2 = mysqli_query($connect, "SELECT COUNT(*) AS jumlah FROM siswa");
			$get_jumlah = mysqli_fetch_array($sql2);
		}

		while($data = mysqli_fetch_array($sql)){ // Ambil semua data dari hasil eksekusi $sql
		?>
			<tr>
				<td class="align-middle"><?php echo $data['nis']; ?></td>
				<td class="align-middle"><?php echo $data['nama']; ?></td>
				<td class="align-middle"><?php echo $data['jenis_kelamin']; ?></td>
				<td class="align-middle"><?php echo $data['telp']; ?></td>
				<td class="align-middle"><?php echo $data['alamat']; ?></td>
			</tr>
		<?php
		}
		?>
	</table>
</div>

<?php
$count = mysqli_num_rows($sql);

if($count > 0){ // Jika datanya ada, tampilkan paginationnya
    ?>
    <!--
    -- Buat Paginationnya
    -- Dengan bootstrap, kita jadi dimudahkan untuk membuat tombol-tombol pagination dengan design yang bagus tentunya
    -->
    <ul class="pagination">
    	<!-- LINK FIRST AND PREV -->
    	<?php
    	if($page == 1){ // Jika page adalah page ke 1, maka disable link PREV
    	?>
    		<li class="disabled"><a href="#">First</a></li>
    		<li class="disabled"><a href="#">&laquo;</a></li>
    	<?php
    	}else{ // Jika page bukan page ke 1
    		$link_prev = ($page > 1)? $page - 1 : 1;
    	?>
    		<li><a href="javascript:void(0);" onclick="searchWithPagination(1, false)">First</a></li>
    		<li><a href="javascript:void(0);" onclick="searchWithPagination(<?php echo $link_prev; ?>, false)">&laquo;</a></li>
    	<?php
    	}
    	?>
    	
    	<!-- LINK NUMBER -->
    	<?php
    	$jumlah_page = ceil($get_jumlah['jumlah'] / $limit); // Hitung jumlah halamannya
    	$jumlah_number = 3; // Tentukan jumlah link number sebelum dan sesudah page yang aktif
    	$start_number = ($page > $jumlah_number)? $page - $jumlah_number : 1; // Untuk awal link number
    	$end_number = ($page < ($jumlah_page - $jumlah_number))? $page + $jumlah_number : $jumlah_page; // Untuk akhir link number
    	
    	for($i = $start_number; $i <= $end_number; $i++){
    		$link_active = ($page == $i)? ' class="active"' : '';
    	?>
    		<li<?php echo $link_active; ?>><a href="javascript:void(0);" onclick="searchWithPagination(<?php echo $i; ?>, false)"><?php echo $i; ?></a></li>
    	<?php
    	}
    	?>
    	
    	<!-- LINK NEXT AND LAST -->
    	<?php
    	// Jika page sama dengan jumlah page, maka disable link NEXT nya
    	// Artinya page tersebut adalah page terakhir 
    	if($page == $jumlah_page){ // Jika page terakhir
    	?>
    		<li class="disabled"><a href="#">&raquo;</a></li>
    		<li class="disabled"><a href="#">Last</a></li>
    	<?php
    	}else{ // Jika Bukan page terakhir
    		$link_next = ($page < $jumlah_page)? $page + 1 : $jumlah_page;
    	?>
    		<li><a href="javascript:void(0);" onclick="searchWithPagination(<?php echo $link_next; ?>, false)">&raquo;</a></li>
    		<li><a href="javascript:void(0);" onclick="searchWithPagination(<?php echo $jumlah_page; ?>, false)">Last</a></li>
    	<?php
    	}
    	?>
    </ul>
    <?php    
}
?>
