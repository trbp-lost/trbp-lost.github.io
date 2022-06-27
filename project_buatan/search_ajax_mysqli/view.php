<div class="table-responsive">
	<table class="table table-bordered">
		<tr>
			<th class="text-center">NO</th>
			<th class="text-center">FOTO</th>
			<th>NIS</th>
			<th>NAMA</th>
			<th>JENIS KELAMIN</th>
			<th>TELP</th>
			<th>ALAMAT</th>
		</tr>
		<?php
		// Include / load file koneksi.php
		include "koneksi.php";
		
		// Cek apakah variabel $keyword tersedia
		// Artinya cek apakah user telah mengklik tombol search atau belum
		// variabel $keyword ini berasal dari file search.php,
		// dimana isinya adalah apa yang diinput oleh user pada textbox pencarian
		if(isset($keyword)){ // Jika veriabel $keyword ada (user telah mengklik tombol search)
			$param = '%'.mysqli_real_escape_string($connect, $keyword).'%';
			
			// Buat query untuk menampilkan data siswa berdasarkan NIS / Nama / Jenis Kelamin / Telp / Alamat
			$sql = mysqli_query($connect, "SELECT * FROM siswa WHERE nis LIKE '".$param."' OR nama LIKE '".$param."' OR jenis_kelamin LIKE '".$param."' OR telp LIKE '".$param."' OR alamat LIKE '".$param."'");
		}else{ // Jika user belum mengklik tombol search
			// Buat query untuk menampilkan semua data siswa
			$sql = mysqli_query($connect, "SELECT * FROM siswa");
		}
		
		$no = 1; // Untuk penomoran tabel, di awal set dengan 1
		while($data = mysqli_fetch_array($sql)){ // Ambil semua data dari hasil eksekusi $sql
		?>
			<tr>
				<td class="align-middle text-center"><?php echo $no; ?></td>
				<td class="align-middle text-center">
					<img src="foto/<?php echo $data['foto']; ?>" width="80" height="80">
				</td>
				<td class="align-middle"><?php echo $data['nis']; ?></td>
				<td class="align-middle"><?php echo $data['nama']; ?></td>
				<td class="align-middle"><?php echo $data['jenis_kelamin']; ?></td>
				<td class="align-middle"><?php echo $data['telp']; ?></td>
				<td class="align-middle"><?php echo $data['alamat']; ?></td>
			</tr>
		<?php
			$no++; // Tambah 1 setiap kali looping
		}
		?>
	</table>
</div>
