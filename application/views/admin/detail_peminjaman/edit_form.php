<!DOCTYPE html>
<html lang="en">

<head>
	<?php $this->load->view("admin/_partials/head.php") ?>
</head>

<body id="page-top">

	<?php $this->load->view("admin/_partials/navbar.php") ?>
	<div id="wrapper">

		<?php $this->load->view("admin/_partials/sidebar5.php") ?>

		<div id="content-wrapper">

			<div class="container-fluid">

				<?php $this->load->view("admin/_partials/breadcrumb.php") ?>

				<?php if ($this->session->flashdata('success')): ?>
				<div class="alert alert-success" role="alert">
					<?php echo $this->session->flashdata('success'); ?>
				</div>
				<?php endif; ?>

				<!-- Card  -->
				<div class="card mb-3">
					<div class="card-header">

						<a href="<?php echo site_url('admin/detail_peminjaman/') ?>"><i class="fas fa-arrow-left"></i>
							Back</a>
					</div>
					<div class="card-body">

						
						<form action="<?php base_url('admin/detail_peminjaman/edit') ?>" method="post" enctype="multipart/form-data">


							<div class="form-group">
								<label for="kd_register">Kode Registrasi</label>
								<input type="text" name="kd_register" class="form-control">
							</div>
							<div class="form-group">
								<label for="kd_pinjam">Kode Pinjam</label>
								<input type="text" name="kd_pinjam" class="form-control">
							</div>
							<div class="form-group">
								<label for="tgl_pinjam">Tanggal Pinjam</label>
								<input type="date" name="tgl_pinjam" class="form-control">
							</div>
							<div class="form-group">
								<label for="tgl_kembali">Tanggal Kembali</label>
								<input type="date" name="tgl_kembali" class="form-control">
							</div>

							<input class="btn btn-success" type="submit" name="btn" value="Edit" />
						</form-->

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