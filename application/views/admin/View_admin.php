<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
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
	<h1>Login berhasil !</h1>
	<h2>Admin : <?php echo $this->session->userdata("nama"); ?></h2>
	<a href="<?php echo base_url('login/logout'); ?>">Logout</a>
</body>
</html>