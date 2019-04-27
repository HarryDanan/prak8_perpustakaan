<html>
	<head>
		<title>Praktikum 8</title>
		<link rel="stylesheet" href="<?php echo base_url();?>/asset/css/bootstrap.css">
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
		<h4>Form Tambah Data Anggota</h4>
		<hr>
		<div style="color: red;"><?php echo validation_errors(); ?></div>
		<?php echo form_open("anggota/tambah"); ?>
		<div class="container" >
		<table cellpadding="8" class="table">
				<tr>
					<td>Kode Anggota</td>
					<td><input type="text" name="input_kd_anggota" value="<?php echo set_value('input_kd_anggota'); ?>"></td>
				</tr>
				<tr>
					<td>Nama</td>
					<td><input type="text" name="input_nama" value="<?php echo set_value('input_nama'); ?>"></td>
				</tr>
				<tr>
					<td>Prodi</td>
					<td><input type="text" name="input_prodi" value="<?php echo set_value('input_prodi'); ?>"></td>
				</tr>
				<tr>
					<td>Jenjang</td>
					<td><input type="text" name="input_jenjang" value="<?php echo set_value('input_jenjang'); ?>"></td>
				</tr>
				<tr>
					<td>Alamat</td>
					<td><textarea name="input_alamat"><?php echo set_value('input_alamat'); ?></textarea></td>
				</tr>
			</table>
				
			<hr>
			<input class="btn btn-success"type="submit" name="submit" value="Simpan">
			<a href="<?php echo base_url(); ?>"><input class="btn btn-danger" type="button" value="Batal"></a>
		</div>
			
		<?php echo form_close(); ?>
	</body>
</html>
