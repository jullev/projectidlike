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
									<li class="breadcrumb-item active">List Iklan Baru</li>
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
						<div class="card-body">
							<section class="content">
								<table class="table table">
									<thead class="thead-dark">
									<tr>
										<th scope="col">No.</th>
										<th scope="col">Nama Pekerjaan</th>
										<th scope="col">Detail</th>
										<th scope="col">Tanggal Posting</th>
										<th scope="col">Deadline</th>
										<th scope="col">Harga</th>
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
											<td>
												<a href="<?php echo base_url() ?>terimaiklan/<?php echo $value->idkerjaan ?>"
												   class=" btn btn-warning btn-sm btn-3d" data-toggle="tooltip"
												   data-placement="top" style="margin:5px;" data-original-title="EDIT">
													<i class="bi bi-person-lines-fill"></i>

													<a href="<?php echo base_url() ?>terimaiklan/<?php echo $value->idkerjaan ?>"
													   class=" btn btn-warning btn-sm btn-3d" data-toggle="tooltip"
													   data-placement="top" style="margin:5px;"
													   data-original-title="EDIT">
														<i class="bi bi-x-circle"></i>
											</td>

										</tr>
										<?php
//					$total_dana+=$value->total;
									}
									?>
									</tbody>
								</table>
							</section>
						</div>
						<!-- /.content -->
					</div>
				</div>
			</div>
		</section>
		<!-- /.content-wrapper -->
	</div>
	<?php $this->load->view("admin/_partials/footer.php") ?>
</body>

</html>
