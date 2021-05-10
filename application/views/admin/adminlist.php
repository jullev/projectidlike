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
				</div>
			</div>
		<!-- /.content-header -->
		<!-- Main content -->
		<section class="content container">
			<div class="card">
				<div class="card-header">
					<h3><strong>Management Admin</strong></h3>
				</div>
				<div class="card-body">
					<div id="adminlist_wrapper">
						<div class="row">
							<div class="col-12">
								<table class="table table-striped dataTable dtr-inline" aria-describedby="adminlist_info" role="grid" id="adminlist">
									<thead class="thead-dark">
										<tr>
											<th scope="col">No.</th>
											<th scope="col">Nama</th>
											<th scope="col">Email</th>
											<th scope="col">No. Hp</th>
											<th scope="col">Action</th>
										</tr>
									</thead>
									<tbody>
										<?php
										foreach (@$alladmin as $value) { ?>
											<tr>
												<td><?php echo $value->iduser ?></td>
												<td><?php echo $value->nama_user ?></td>
												<td><?php echo $value->email ?>
												<td><?php echo $value->no_hp ?>
												<td>
													<a href="<?php echo base_url() ?>editadmin/<?php echo $value->iduser ?>" class=" btn btn-primary mr-2" data-toggle="tooltip" data-placement="bottom" title="Edit">
														<i class="bi bi-pencil-square"></i>

														<a href="<?php echo base_url() ?>editadmin/<?php echo $value->iduser ?>" class=" btn btn-danger" data-toggle="tooltip" data-placement="bottom" title="Hapus">
															<i class="bi bi-trash"></i>
												</td>

											</tr>
										<?php
										}
										?>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
				<!-- /.content -->
			</div>
		</section>
		</div>
		<!-- /.content-wrapper -->
	</div>
	<?php $this->load->view("admin/_partials/footer.php") ?>
	<script>
		$(function() {
			$("#adminlist").DataTable({
				"responsive": true,
				"lengthChange": false,
				"autoWidth": false,
				//"buttons": [ "excel", "pdf", "print"]
			}).buttons().container().appendTo('#adminlist_wrapper .col-md-6:eq(0)');
		});
	</script>
</body>

</html>