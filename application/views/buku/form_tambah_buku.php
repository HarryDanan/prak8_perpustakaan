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
		<h4>Form Tambah Data Katalog Buku</h4>
		<hr>
		<div style="color: red;"><?php echo validation_errors(); ?></div>
		<?php echo form_open("buku/tambah"); ?>
			<table cellpadding="8" class="table">
				<tr>
					<td>Kode Buku</td>
					<td><input type="text" name="input_kd_register" value="<?php echo set_value('input_kd_register'); ?>"></td>
				</tr>
				<tr>
					<td>Judul Buku</td>
					<td><input type="text" name="input_judul_buku" value="<?php echo set_value('input_judul_buku'); ?>"></td>
				</tr>
				<tr>
					<td>Pengarang</td>
					<td><input type="text" name="input_pengarang" value="<?php echo set_value('input_pengarang'); ?>"></td>
				</tr>
				<tr>
					<td>Penerbit</td>
					<td><input type="text" name="input_penerbit" value="<?php echo set_value('input_penerbit'); ?>"></td>
				</tr>
				<tr>
					<td>Tahun Terbit</td>
					<td><input type="text" name="input_tahun_terbit" value="<?php echo set_value('input_tahun_terbit'); ?>"></td>
				</tr>
			</table>
				
			<hr>
			<input class="btn btn-success" type="submit" name="submit" value="Simpan">
			<a href="<?php echo base_url(); ?>"><input class="btn btn-danger" type="button" value="Batal"></a>
		<?php echo form_close(); ?>
	</body>
</html>
