<!DOCTYPE html>
<html lang="en">

<head>
	<?php $this->load->view("admin/_partials/head.php") ?>
</head>

<body id="page-top">

	<?php $this->load->view("admin/_partials/navbar.php") ?>
	<div id="wrapper">

		<?php $this->load->view("admin/_partials/sidebar.php") ?>

		<div id="content-wrapper">

			<div class="container-fluid">

				<?php $this->load->view("admin/_partials/breadcrumb.php") ?>

				<?php if ($this->session->flashdata('success')): ?>
				<div class="alert alert-success" role="alert">
					<?php echo $this->session->flashdata('success'); ?>
				</div>
				<?php endif; ?>

				<div class="card mb-3">
					<div class="card-header">
						<a href="<?php echo site_url('admin/buku/') ?>"><i class="fas fa-arrow-left"></i> Back</a>
					</div>
					<div class="card-body">
						<form action="<?php echo site_url('admin/buku/tambah')//base_url('admin/buku/tambah')echo site_url('admin/buku/tambah') ?>" method="post">
							<div class="form-group">
								<label for="judul_buku">Judul Buku</label>
								<input type="text" name="judul_buku" class="form-control" >
							</div>
							<div class="form-group">
								<label for="pengarang">Pengarang</label>
								<input type="text" name="pengarang" class="form-control">
							</div>
							<div class="form-group">
								<label for="penerbit">Penerbit</label>
								<input type="text" name="penerbit" class="form-control">
							</div>
							<div class="form-group">
								<label for="tahun_penerbit">Tahun Terbit</label>
								<input type="number" name="tahun_penerbit" class="form-control">
							</div>
							<input class="btn btn-success" type="submit" name="btn" value="Save" />
						</form>

						

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
