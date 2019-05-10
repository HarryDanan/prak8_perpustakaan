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

				<!-- Card  -->
				<div class="card mb-3">
					<div class="card-header">

						<a href="<?php echo site_url('admin/buku/') ?>"><i class="fas fa-arrow-left"></i>
							Back</a>
					</div>
					<div class="card-body">

						
						<form action="<?php base_url('admin/buku/edit') ?>" method="post" enctype="multipart/form-data">

							<input type="hidden" name="kd_registrasi" value="<?php echo $buku->kd_registrasi?>" />

							<div class="form-group">
								<label for="judul_buku">Judul Buku</label>
								<input class="form-control"
								 type="text" name="judul_buku" placeholder="<?php echo $buku->judul_buku ?>" />
								
							</div>

							<div class="form-group">
								<label for="pengarang">Pengarang</label>
								<input class="form-control "
								 type="text" name="pengarang" min="0" value="<?php echo $buku->pengarang?>" />
								
							</div>

							<div class="form-group">
								<label for="penerbit">Penerbit</label>
								<input class="form-control "
								 type="text" name="penerbit" min="0" value="<?php echo $buku->penerbit?>" />
								
							</div>

							<div class="form-group">
								<label for="tahun_penerbit">Tahun Terbit</label>
								<input class="form-control"
								 type="text" name="tahun_penerbit" min="0" value="<?php echo $buku->penerbit?>" />
								
							</div>


							<input class="btn btn-success" type="submit" name="btn" value="Save" />
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