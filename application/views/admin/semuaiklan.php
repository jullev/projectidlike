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
									<li class="breadcrumb-item active">List Semua Iklan</li>
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
							<h3><strong>Semua Iklan</strong></h3>
						</div>
						<div class="card-body">
							<div id="adsAll_wrapper">
								<table class="table table-striped" id="adsAll">
									<thead class="thead-dark">
									<tr>
										<th scope="col">No.</th>
										<th scope="col">Nama Pekerjaan</th>
										<th scope="col">Detail</th>
										<th scope="col">Tanggal Posting</th>
										<th scope="col">Deadline</th>
										<th scope="col">Harga</th>
										<th scope="col">Status</th>
										<th scope="col">Aksi</th>
									</tr>
									</thead>
									<tbody>
									<?php
									//				var_dump(@$kegiatan);
									foreach (@$dataIklan as $value) { ?>
										<tr>
											<td><?php echo $value->idkerjaan ?></td>
											<td><?php echo $value->judul_kerjaan ?></td>
											<td><b><?php echo $value->deskripsi ?></b><br>
											<td><b><?php echo $value->tanggal_submit ?></b><br>
											<td><b><?php echo $value->deadline ?></b><br>
											<td><b><?php echo $value->harga ?></b><br>
											<td><b><?php
													if($value->id_status=1){
														echo "<b>Pengajuan Baru</b>";
													}
													else if($value->id_status=2){
														echo "<b>Proses Review</b>";
													}
													else if($value->id_status=3){
														echo "<b>Sedang Dikerjakan</b>";
													}
													else if($value->id_status=4){
														echo "<b>Iklan Ditolak</b>";
													}else if($value->id_status=5){
														echo "<b>Iklan Selesai Dikerjakan</b>";
													}

													?></b><br>
											<td>
												<div class="d-flex">
													<a href="<?php echo base_url() ?>editiklan/<?php echo $value->idkerjaan ?>" class="btn btn-primary mr-1" data-tooltip="tooltip" data-placement="top" title="Edit Iklan">
														<i class="bi bi-pencil-square"></i>
													</a>
													<a href="<?php echo base_url() ?>" class=" btn btn-danger" data-tooltip="tooltip" data-placement="top" title="Hapus Iklan">
														<i class="bi bi-trash"></i>
													</a>
												</div>
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

	<!-- JS -->
	<script>
		$(function() {
            $("#adsAll").DataTable({
                "responsive": true,
                "lengthChange": false,
                "autoWidth": false,
                //"buttons": [ "excel", "pdf", "print"]
            }).buttons().container().appendTo('#adsAll_wrapper .col-md-6:eq(0)');
        });
	</script>
</body>

</html>
