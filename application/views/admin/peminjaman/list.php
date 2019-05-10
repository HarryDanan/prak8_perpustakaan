<!DOCTYPE html>
<html lang="en">

<head>
	<?php $this->load->view("admin/_partials/head.php") ?>
</head>

<body id="page-top">

	<?php $this->load->view("admin/_partials/navbar.php") ?>
	<div id="wrapper">

		<?php $this->load->view("admin/_partials/sidebar2.php") ?>

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
						<a href="<?php echo site_url('admin/peminjaman/add') ?>"><i class="fas fa-plus"></i> Add New</a>
					</div>
					<div class="card-body">

						<div class="table-responsive">
							<table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
								<thead>
									<tr>
										<th>Kode Peminjaman</th>
										<th>Kode Anggota</th>
										<th>Kode Petugas</th>
										
										<th>Action</th>
									</tr>
								</thead>
								<tbody>
									<?php foreach ($peminjaman as $peminjaman): ?>
									<tr>
										<td width="150">
											<?php echo $peminjaman->kd_pinjam ?>
										</td>
										<td>
											<?php echo $peminjaman->kd_anggota ?>
										</td>
										<td>
											<?php 
												echo $peminjaman->kd_petugas
											?>
										</td>
										
										<td width="250">
											<a href="<?php echo site_url('admin/peminjaman/edit/'.$peminjaman->kd_pinjam) ?>"
											 class="btn btn-small"><i class="fas fa-edit"></i> Edit</a>
											<a 
											 href="<?php echo site_url('admin/peminjaman/delete/').$peminjaman->kd_pinjam?>" class="btn btn-small text-danger"><i class="fas fa-trash"></i> Hapus</a>
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