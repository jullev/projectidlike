<!DOCTYPE html>
<html>
<?php $this->load->view("admin/_partials/head.php") ?>
<!-- <body class="hold-transition sidebar-mini layout-fixed"> Original code -->

<body class="hold-transition sidebar-collapse sidebar-mini layout-fixed">
	<div class="wrapper">

		<?php $this->load->view("admin/_partials/navbar.php") ?>

		<!-- Main Sidebar Container -->
		<?php $this->load->view("admin/_partials/sidebar.php") ?>

		<!-- Content Wrapper. Contains page content -->

		<div class="content-wrapper">
			<!-- Content Header (Page header) -->
			<div class="content-header">
				<div class="container">
					<div class="row">
						<div class="col-sm-12">
							<div class="card">
								<div class="card-header">
									<ol class="breadcrumb float-sm-left">
										<li class="breadcrumb-item"><a href="<?php echo site_url('admin') ?>">Home</a></li>
										<li class="breadcrumb-item active">List Iklan Status DIsetujui</li>
									</ol>
								</div>
							</div>
						</div>
					</div>
				</div><!-- /.container-fluid -->
			</div>
			<!-- /.content-header -->
			<!-- Main content -->
			<section class="content container">
				<div class="row">
					<div class="col-sm-12">
						<div class="card">
							<div class="card-header">
								<h3><strong>Iklan Disetujui</strong></h3>
							</div>
							<div class="card-body">
								<div id="adsAccepted_wrapper">
									<table class="table table-striped" id="adsAccepted">
										<thead class="thead-dark">
											<tr>
												<th scope="col" class="align-top">No.</th>
												<th scope="col" class="align-top">Nama Pekerjaan</th>
												<th scope="col" class="align-top">Detail</th>
												<th scope="col" class="align-top">Tanggal Posting</th>
												<th scope="col" class="align-top">Deadline</th>
												<th scope="col" class="align-top">Harga</th>
												<th scope="col" class="align-top">Jumlah Hit</th>
												<th scope="col" class="align-top">Aksi</th>
											</tr>
										</thead>
										<tbody>
											<?php
											$i = 1;
											//var_dump(@$kegiatan);
											foreach (@$dataIklan as $value) { ?>
												<tr>
													<td><?php echo $i ?></td>
													<td><?php echo $value->judul_kerjaan ?></td>
													<td><b><?php echo $value->deskripsi ?></b><br>
													<td><b><?php echo $value->tanggal_submit ?></b><br>
													<td><b><?php echo $value->deadline ?></b><br>
													<td><b><?php echo $value->harga ?></b><br>
													<td><b><?php echo $value->hit ?></b><br>
													<td class="d-flex">
														<a href="<?php echo base_url() ?>hit/<?php echo $value->idkerjaan ?>" class="btn btn-primary m-1" data-tooltip="tooltip" data-placement="top" data-original-title="Detail Hit">
															<i class="bi bi-file-earmark-medical"></i>
														</a>

														<a href="<?php echo base_url() ?>terimaiklan/<?php echo $value->idkerjaan ?>" class="btn btn-danger m-1" data-tooltip="tooltip" data-placement="top" data-original-title="Tolak">
															<i class="bi bi-x-circle"></i>
														</a>
													</td>

												</tr>
											<?php
												$i += 1;
												//$total_dana+=$value->total;
											}
											?>
										</tbody>
									</table>
								</div>
							</div>
							<!-- /.content -->
						</div>
					</div>
				</div>
			</section>
			<!-- /.content-wrapper -->
		</div>

		<!-- Footer -->
		<?php $this->load->view("admin/_partials/footer.php") ?>
		<script>
			$(function() {
				$("#adsAccepted").DataTable({
					"responsive": true,
					"lengthChange": false,
					"autoWidth": false,
					//"buttons": [ "excel", "pdf", "print"]
				}).buttons().container().appendTo('#adsAccepted_wrapper .col-md-6:eq(0)');
			});
		</script>
</body>

</html>