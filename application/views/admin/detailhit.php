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
									<li class="breadcrumb-item active">List Hitter </li>
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
							<h3>Hit: <strong>Judul Project</strong></h3>
						</div>
						<div class="card-body">
							<div id="detailHit_wrapper">
								<table class="table" id="detailHit">
									<thead class="thead-dark">
									<tr>
										<th scope="col">No.</th>
										<th scope="col">Judul Kerjaan</th>
										<th scope="col">Deadline</th>
										<th scope="col">Nama Hitter</th>
										<th scope="col">No Hp</th>
										<th scope="col">star point</th>
										<th scope="col">Status</th>
										<th scope="col">Aksi</th>
									</tr>
									</thead>
									<tbody>
									<?php
									//				var_dump(@$kegiatan);
									foreach (@$detailhit as $value) { ?>
										<tr>
											<td><?php echo $value->idhit ?></td>
											<td><?php echo $value->judul_kerjaan ?></td>
											<td><b><?php echo $value->deadline  ?></b><br>
											<td><b><?php echo $value->nama_user ?></b><br>
											<td><b><?php echo $value->no_hp ?></b><br>
											<td><b><?php

														if ($value->star_point > 1) {
															echo $value->star_point;
														} else {
															echo 0;
														}
														?></b><br>
											</td>
											<td>

												<?php
												if($value->id_status ==3)  {
													echo "<b>Iklan Sedang DIkerjakan</b>";
												} else if($value->id_status ==4){
													echo "<b> Iklan Ditolak </b>";
													}
												else{
													echo "<b> Iklan Ditawarkan </b>";
												}
												?>
											</td>
											<td class="d-flex">
												<a href="<?php echo base_url() ?>terimahitter/<?php echo $value->idhit  ?>"
												   class="m-1 btn btn-primary" data-tooltip="tooltip"
												   data-placement="top" data-original-title="Terima Hit">
													<i class="bi-check-circle"></i>
												</a>

												<a href="<?php echo base_url() ?>tolakhit/<?php echo $value->idhit  ?>"
													class="m-1 btn btn-danger" data-tooltip="tooltip"
													data-placement="top" data-original-title="Tolak Hit">
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

	<!-- footer -->
	<?php $this->load->view("admin/_partials/footer.php") ?>
	<script>
		$(function() {
            $("#detailHit").DataTable({
                "responsive": true,
                "lengthChange": false,
                "autoWidth": false,
                //"buttons": [ "excel", "pdf", "print"]
            }).buttons().container().appendTo('#detailHit_wrapper .col-md-6:eq(0)');
        });
	</script>
</body>

</html>
