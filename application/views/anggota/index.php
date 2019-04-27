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
		<h4>Data Anggota</h4>
		<hr>
		<a style="margin-left:120px;"class="btn btn-primary" href='<?php echo base_url("anggota/tambah"); ?>'>Tambah Data</a><br><br>
		<div class="container">
		<table border="1" cellpadding="7" class="table">
			<thead class="thead-dark">
				<tr>
					<th>Kode Anggota</th>
					<th>Nama</th>
					<th>Prodi</th>
					<th>Jenjang</th>
					<th>Alamat</th>
					<th colspan="2">Aksi</th>
				</tr>
			</thead>
	
		
		

			<?php
			if( ! empty($anggota)){ // Jika data siswa tidak sama dengan kosong, artinya jika data siswa ada
				foreach($anggota as $data){
					echo "<tr>
					<td>".$data->kd_anggota."</td>
					<td>".$data->nama."</td>
					<td>".$data->prodi."</td>
					<td>".$data->jenjang."</td>
					<td>".$data->alamat."</td>
					<td><a href='".base_url("anggota/ubah/".$data->kd_anggota)."'>Ubah</a></td>
					<td><a href='".base_url("anggota/hapus/".$data->kd_anggota)."'>Hapus</a></td>
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
