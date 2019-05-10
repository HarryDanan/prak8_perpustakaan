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

						<form action="<?php base_url('admin/buku/add') ?>" method="post" enctype="multipart/form-data" >
							<div class="form-group">
								<label for="judul_buku">Judul Buku</label>
								<input class="form-control <?php echo form_error('judul_buku') ? 'is-invalid':'' ?>"
								 type="text" name="judul_buku" placeholder="Judul Buku" />
								<div class="invalid-feedback">
									<?php echo form_error('judul_buku') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="pengarang">Pengarang</label>
								<input class="form-control <?php echo form_error('pengarang') ? 'is-invalid':'' ?>"
								 type="text" name="pengarang" min="0" placeholder="Pengarang" />
								<div class="invalid-feedback">
									<?php echo form_error('pengarang') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="penerbit">Penerbit</label>
								<input class="form-control <?php echo form_error('penerbit') ? 'is-invalid':'' ?>"
								 type="text" name="penerbit" min="0" placeholder="Penerbit" />
								<div class="invalid-feedback">
									<?php echo form_error('penerbit') ?>
								</div>
							</div>
							<div class="form-group">
								<label for="tahun_penerbit">Tahun Terbit</label>
								<input class="form-control <?php echo form_error('tahun_penerbit') ? 'is-invalid':'' ?>"
								 type="number" name="tahun_penerbit" min="0" placeholder="Tahun Terbit" />
								<div class="invalid-feedback">
									<?php echo form_error('tahun_penerbit') ?>
								</div>
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