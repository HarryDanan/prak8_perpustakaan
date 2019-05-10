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
					<?php if ($this->session->flashdata('message')): ?>
					<div class="alert alert-success" role="alert">
						<?php echo $this->session->flashdata('message');?>
					</div>
					<?php endif; ?>

				<!-- DataTables -->
				<div class="card mb-3">
					<div class="card-header">
						<a href="<?php echo site_url('admin/buku/add') ?>"><i class="fas fa-plus"></i> Add New</a>
					</div>
					<div class="card-body">

						<div class="table-responsive">
							<table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
								<thead>
									<tr>
										<th>Kode Registrasi</th>
										<th>Judul Buku</th>
										<th>Pengarang</th>
										<th>Penerbit</th>
										<th>Tahun Terbit</th>
										<th>Action</th>
									</tr>
								</thead>
								<tbody>
									<?php foreach ($buku as $buku): ?>
									<tr>
										<td width="150">
											<?php echo $buku->kd_registrasi ?>
										</td>
										<td>
											<?php echo $buku->judul_buku ?>
										</td>
										<td>
											<?php 
												echo $buku->pengarang
											?>
										</td>
										<td>
											<?php 
												echo $buku->penerbit
											?>
										</td>

										<td>
											<?php 
												echo $buku->tahun_penerbit
											?>
										</td>
										
										<td width="250">
											<a href="<?php echo site_url('admin/buku/edit/'.$buku->kd_registrasi) ?>"
											 class="btn btn-small"><i class="fas fa-edit"></i> Edit</a>
											<a 
											 href="<?php echo site_url('admin/buku/delete/').$buku->kd_registrasi?>" class="btn btn-small text-danger"><i class="fas fa-trash"></i> Hapus</a>
										</td>
									</tr>
									<?php endforeach; ?>

								</tbody>
							</table>
						</div>
					</div>
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
	<?php $this->load->view("admin/_partials/modal.php") ?>

	<?php $this->load->view("admin/_partials/js.php") ?>

	
</body>

</html>