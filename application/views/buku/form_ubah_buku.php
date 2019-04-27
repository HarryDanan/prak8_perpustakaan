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
		<h4>Form Ubah Data Katalog Buku</h4>
		<hr>
		<div style="color: red;"><?php echo validation_errors(); ?></div>
		<?php echo form_open("buku/ubah/".$buku->kd_register); ?>
			<table cellpadding="8" class="table">
				<tr>
					<td>Kode Buku</td>
					<td><input type="text" name="input_kd_register" value="<?php echo set_value('input_kd_register', $buku->kd_register); ?>" readonly></td>
				</tr>
				<tr>
					<td>Judul Buku</td>
					<td><input type="text" name="input_judul_buku" value="<?php echo set_value('input_judul_buku', $buku->judul_buku); ?>"></td>
				</tr>
				<tr>
					<td>Pengarang</td>
					<td><input type="text" name="input_pengarang" value="<?php echo set_value('input_pengarang', $buku->pengarang); ?>"></td>
				</tr>
				<tr>
					<td>Penerbit</td>
					<td><input type="text" name="input_penerbit" value="<?php echo set_value('input_penerbit', $buku->penerbit); ?>"></td>
				</tr>
				<tr>
					<td>Tahun Penerbit</td>
					<td><input type="text" name="input_tahun_penerbit" value="<?php echo set_value('input_tahun_penerbit', $buku->tahun_penerbit); ?>"></td>
				</tr>
			</table>
				
			<hr>
			<input class="btn btn-success"type="submit" name="submit" value="Ubah">
			<a href="<?php echo base_url(); ?>"><input class="btn btn-danger" type="button" value="Batal"></a>
		<?php echo form_close(); ?>
	</body>
</html>
