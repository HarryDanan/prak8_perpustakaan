<!DOCTYPE html>
<html lang="en">

<head>
	<?php $this->load->view("admin/_partials/head.php") ?>
</head>

<body id="page-top">

	<?php $this->load->view("admin/_partials/navbar.php") ?>
	<div id="wrapper">

		<?php $this->load->view("admin/_partials/sidebar3.php") ?>

		<div id="content-wrapper">

			<div class="container-fluid">

				<?php $this->load->view("admin/_partials/breadcrumb.php") ?>
				<!-- Card  -->
				<div class="card mb-3">
					<div class="card-header">

						<a href="<?php echo site_url('admin/anggota/') ?>"><i class="fas fa-arrow-left"></i>
							Back</a>
					</div>
					<div class="card-body">

						
						<form action="<?php base_url('admin/anggota/edit') ?>" method="post" enctype="multipart/form-data">

							<input type="hidden" name="kd_anggota" value="<?php echo $anggota->kd_anggota?>" />

							<div class="form-group">
								<label for="nama">Nama</label>
								<input type="text" name="nama" class="form-control">
							</div>
							<div class="form-group">
								<label for="prodi">Program Studi</label>
								<input type="text" name="prodi" class="form-control">
							</div>
							<div class="form-group">
								<label for="jenjang">Jenjang</label>
								<input type="text" name="jenjang" class="form-control">
							</div>
							<div class="form-group">
								<label for="alamat">Alamat</label>
								<input type="text" name="alamat" class="form-control">
							</div>

							<input class="btn btn-success" type="submit" name="btn" value="Edit" />
						</form>

					</div>

					<div class="card-footer small text-muted">
						* required fields
					</div>


				</div>
				<!-- /.container-fluid -->

				<!-- Sticky Footer -->
				<?php $this->load->view("admin/_partials/footer.php") ?>

			</div>
			<!-- /.content-wrapper -->

		</div>
		<!-- /#wrapper -->

		<?php $this->load->view("admin/_partials/scrolltop.php") ?>

		<?php $this->load->view("admin/_partials/js.php") ?>

</body>

</html>