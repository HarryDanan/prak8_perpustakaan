<html>
	<head>
		<title>Praktikum 8</title>
		<link rel="stylesheet" href="<?php echo base_url();?>/asset/css/bootstrap.min.css">
	</head>
	<body>
	<div>
		<ul class="nav">
			<li class="nav-item">
				<a class="nav-link active" href='<?php echo base_url("anggota"); ?>'>Anggota</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href='<?php echo base_url("buku"); ?>'>Buku</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href='<?php echo base_url("petugas"); ?>'>Petugas</a>
			</li>
		</ul>
	</div>
		<h4>Data Katalog Buku</h4>
		<hr>
		<a style="margin-left:120px;"class="btn btn-primary" href='<?php echo base_url("buku/tambah"); ?>'>Tambah Data</a><br><br>
		<div class="container">
		<table border="1" cellpadding="7" class="table">
		<thead class="thead-dark">
			<tr>
				<th>Kode Buku</th>
				<th>Judul Buku</th>
				<th>Pengarang</th>
				<th>Penerbit</th>
				<th>Tahun Terbit</th>
				<th colspan="2">Aksi</th>
			</tr>
		</thead>
			

			<?php
			if( ! empty($buku)){
				foreach($buku as $data){
					echo "<tr>
					<td>".$data->kd_register."</td>
					<td>".$data->judul_buku."</td>
					<td>".$data->pengarang."</td>
					<td>".$data->penerbit."</td>
					<td>".$data->tahun_terbit."</td>
					<td><a href='".base_url("buku/ubah/".$data->kd_register)."'>Ubah</a></td>
					<td><a href='".base_url("buku/hapus/".$data->kd_register)."'>Hapus</a></td>
					</tr>";
				}
			}else{ // Jika data siswa kosong
				echo "<tr><td align='center' colspan='7'>Data Tidak Ada</td></tr>";
			}
			?>
		</table>
		
		</div>
		
	</body>
</html>
