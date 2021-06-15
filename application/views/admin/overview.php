<!DOCTYPE html>
<html>
<?php $this->load->view("admin/_partials/head.php"); ?>
<body class="hold-transition sidebar-collapse sidebar-mini layout-fixed">
	<div class="wrapper">

		<?php $this->load->view("admin/_partials/navbar.php") ?>

		<!-- Main Sidebar Container -->
		<?php $this->load->view("admin/_partials/sidebar.php") ?>
		<!-- Content Wrapper. Contains page content -->
		<div class="content-wrapper">
			<!-- Content Header (Page header) -->
			<div class="content-header">
				<div class="container-fluid">
					<div class="row mb-2">
						<div class="col-sm-6">
							<h1 class="m-0 text-dark">Dashboard</h1>
						</div><!-- /.col -->
						<div class="col-sm-6">
							<ol class="breadcrumb float-sm-right">
								<li class="breadcrumb-item"><a href="<?php echo site_url('admin') ?>">Home</a></li>
								<li class="breadcrumb-item active">Dashboard</li>
							</ol>
						</div><!-- /.col -->
					</div><!-- /.row -->
				</div><!-- /.container-fluid -->
			</div>
			<!-- /.content-header -->

			<!-- Main content -->
			<section class="content">
				<div class="container-fluid">
					<!-- Small boxes (Stat box) -->
					<?php
					//				var_dump(@$allcount);
					foreach (@$allcount as $value) { ?>
						<div class="row">
							<div class="col-lg-3 col-6">
								<!-- small box -->
								<div class="small-box bg-info">
									<div class="inner">

										<h3><?php echo $value->selesai; ?></h3>

										<p>Iklan Selesai</p>
									</div>
									<div class="icon">
										<i class="fas fa-ad"></i>
									</div>
									<a href="iklanbaru" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
								</div>
							</div>
							<!-- ./col -->

							<div class="col-lg-3 col-6">
								<!-- small box -->
								<div class="small-box bg-success">
									<div class="inner">
										<h3><?php
											echo $value->total_user;
											?></h3>

										<p>Jumlah User</p>
									</div>
									<div class="icon">
										<i class="fas fa-users"></i>
									</div>
									<a href="<?php echo site_url('userlist') ?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
								</div>
							</div>

							<!-- ./col -->
							<div class="col-lg-3 col-6">
								<!-- small box -->

								<div class="small-box bg-warning">
									<div class="inner">
										<h3><?php
											echo $value->total_kerjaan;
											?></h3>

										<p>Total Iklan</p>
									</div>
									<div class="icon">
										<i class="fab fa-adversal"></i>
									</div>
									<a href="<?php echo site_url('semuaiklan') ?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
								</div>
							</div>

							<!-- ./col -->
							<div class="col-lg-3 col-6">
								<!-- small box -->
								<div class="small-box bg-danger">
									<div class="inner">
										<h3><?php

											echo $value->total_hit; ?></h3>

										<p>Total Hit</p>
									</div>
									<div class="icon">
										<i class="fas fa-suitcase"></i>
									</div>
									<a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
								</div>
							</div>

							<!-- ./col -->
						</div>
						<!-- /.row -->
						<figure class="highcharts-figure">
							<div id="container"></div>
							<p class="highcharts-description">
								<center>
									Grafik Pemakaian TEMANTUMBUH Selama Ini
								</center>
							</p>
						</figure>
						<script>
							Highcharts.chart('container', {

								title: {
									text: 'TEMANTUMBUH'
								},

								subtitle: {
									text: 'Pemakaian TEMANTUMBUH'
								},

								yAxis: {
									title: {
										text: 'Number of Employees'
									}
								},

								xAxis: {
									accessibility: {
										rangeDescription: 'Range: 2021 to 2030'
									}
								},

								legend: {
									layout: 'vertical',
									align: 'right',
									verticalAlign: 'middle'
								},

								plotOptions: {
									series: {
										label: {
											connectorAllowed: false
										},
										pointStart: 2020
									}
								},

								series: [{
									name: 'User',
									data: [0, <?php
												echo $value->total_user;
												?>]
								}, {
									name: 'Jumlah Iklan',
									data: [0, <?php echo $value->total_kerjaan; ?>]
								}, {
									name: 'HIT',
									data: [0, <?php echo $value->total_hit; ?>]
								}, {
									name: 'Iklan Selesai',
									data: [0, <?php echo $value->selesai; ?>]
								}],

								responsive: {
									rules: [{
										condition: {
											maxWidth: 500
										},
										chartOptions: {
											legend: {
												layout: 'horizontal',
												align: 'center',
												verticalAlign: 'bottom'
											}
										}
									}]
								}

							});
						</script>
					<?php } ?>
				</div><!-- /.container-fluid -->
			</section>
			<!-- /.content -->
		</div>
	</div>
	<!-- /.content-wrapper -->
	<?php $this->load->view("admin/_partials/footer.php") ?>
</body>

</html>
