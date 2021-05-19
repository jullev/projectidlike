<!DOCTYPE html>
<html>
<?php $this->load->view("admin/_partials/head.php") ?>

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

										<h3><?php echo $value->pengajuan_baru; ?></h3>

										<p>Permohonon Iklan</p>
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
										<h3>53</h3>

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
						<?php } ?>
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
										rangeDescription: 'Range: 2010 to 2017'
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
										pointStart: 2010
									}
								},

								series: [{
									name: 'User',
									data: [43934, 52503, 57177, 69658, 97031, 119931, 137133, 154175]
								}, {
									name: 'Jumlah Iklan',
									data: [24916, 24064, 29742, 29851, 32490, 30282, 38121, 40434]
								}, {
									name: 'HIT',
									data: [11744, 17722, 16005, 19771, 20185, 24377, 32147, 39387]
								}, {
									name: 'Star Point',
									data: [null, null, 7988, 12169, 15112, 22452, 34400, 34227]
								}, {
									name: 'Pengajuan',
									data: [12908, 5948, 8105, 11248, 8989, 11816, 18274, 18111]
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
				</div><!-- /.container-fluid -->
			</section>
			<!-- /.content -->
		</div>
	</div>
	<!-- /.content-wrapper -->
	<?php $this->load->view("admin/_partials/footer.php") ?>
</body>

</html>