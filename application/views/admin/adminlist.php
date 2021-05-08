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
										<li class="breadcrumb-item active">List Admin</li>
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
									<div class="table-responsive">
										<table class="table table-hover">
											<thead class="thead-dark">
												<tr>
													<th scope="col">No.</th>
													<th scope="col">Nama Admin</th>
													<th scope="col">Email</th>
													<th scope="col">No Handphone</th>
													<th scope="col">Manajemen Admin</th>
												</tr>
											</thead>
											<tbody>
												<?php
												//				var_dump(@$kegiatan);
												foreach (@$alladmin as $value) { ?>
													<tr>
														<td><?php echo $value->iduser ?></td>
														<td><?php echo $value->nama_user ?></td>
														<td><b><?php echo $value->email ?></b><br>
														<td><b><?php echo $value->no_hp ?></b><br>
														<td>
															<a href="<?php echo base_url() ?>editadmin/<?php echo $value->iduser ?>" class=" btn btn-warning btn-sm btn-3d" data-toggle="tooltip" data-placement="top" style="margin:5px;" data-original-title="EDIT">
																<i class="bi bi-person-lines-fill"></i>

																<a href="<?php echo base_url() ?>editadmin/<?php echo $value->iduser ?>" class=" btn btn-warning btn-sm btn-3d" data-toggle="tooltip" data-placement="top" style="margin:5px;" data-original-title="EDIT">
																	<i class="bi bi-x-circle"></i>
														</td>

													</tr>
												<?php
													//					$total_dana+=$value->total;
												}
												?>
											</tbody>
										</table>
									</div>

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