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
		<h4>Form Ubah Data Petugas</h4>
		<hr>
		<div style="color: red;"><?php echo validation_errors(); ?></div>
		<?php echo form_open("petugas/ubah/".$petugas->kd_petugas); ?>
			<table cellpadding="8">
				<tr>
					<td>Kode Petugas</td>
					<td><input type="text" name="input_kd_petugas" value="<?php echo set_value('input_kd_petugas', $petugas->kd_petugas); ?>" readonly></td>
				</tr>
				<tr>
					<td>Nama</td>
					<td><input type="text" name="input_nama_p" value="<?php echo set_value('input_nama_p', $petugas->nama); ?>"></td>
				</tr>
				<tr>
					<td>Alamat</td>
					<td><textarea name="input_alamat_p"><?php echo set_value('input_alamat_p', $petugas->alamat); ?></textarea></td>
				</tr>
			</table>
		<hr>
			<input class="btn btn-success"type="submit" name="submit" value="Ubah">
			<a class="btn btn-danger"href="<?php echo base_url(); ?>"><input type="button" value="Batal"></a>
		<?php echo form_close(); ?>
	</body>
</html>
