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
									<li class="breadcrumb-item active">List Iklan Status Selesai</li>
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
							<h3><strong>Iklan Selesai Dikerjakan</strong></h3>
						</div>
						<div class="card-body">
							<div id="adsAccepted_wrapper">
								<table class="table table-striped" id="adsAccepted">
									<thead class="thead-dark">
									<tr>
										<th scope="col" class="align-top">No.</th>
										<th scope="col" class="align-top">Nama Pekerjaan</th>
										<th scope="col" class="align-top">Detail</th>
										<th scope="col" class="align-top">Tanggal Selesai</th>
										<th scope="col" class="align-top">Nama Hitter</th>
										<th scope="col" class="align-top">Aksi</th>
									</tr>
									</thead>
									<tbody>
									<?php
//									var_dump(@$dataIklan);
									foreach (@$dataIklan as $value) { ?>
										<tr>
											<td><?php echo $value->idkerjaan ?></td>
											<td><?php echo $value->judul_kerjaan ?></td>
											<td><b><?php echo $value->deskripsi ?></b><br>
											<td><b><?php echo $value->tgl_selesai ?></b><br>
											<td><b><?php echo $value->nama_user ?></b><br>
											<td class="d-flex">
												<a href="<?php echo base_url() ?>reportiklanselesai/<?php echo $value->idkerjaan ?>"
												   class="btn btn-primary m-1" data-tooltip="tooltip"
												   data-placement="top" data-original-title="Detail Laporan">
													<i class="bi bi-file-earmark-medical"></i>
												</a>

												<a href=""
												   class="btn btn-danger m-1" data-tooltip="tooltip"
												   data-placement="top" data-original-title="Tolak">
													<i class="bi bi-x-circle"></i>
												</a>
											</td>

										</tr>
										<?php
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
