<!DOCTYPE html>
<html lang="en">

<?php $this->load->view('user/_partials/head.php'); ?>

<style>
	.btn-light:not(#nameNavbar, #filterMobileBtn) {
		background: white;
		color: #868e96;
		border-color: #ced4da;
	}

	#kategoriCari {
		border-top-left-radius: .25rem;
		border-bottom-left-radius: .25rem;
	}
	@media (min-width: 992px) {
		#offCanvas {
			width: 30%;
		}
	}
	@media (min-width: 768px) and (max-width: 991px) {
		#offCanvas {
			width: 40%;
		}
	}
	@media (min-width: 576px) and (max-width: 767px) {
		#offCanvas {
			width: 70%;
		}
	}
	@media (min-width: 0px) and (max-width: 575px) {
		#offCanvas {
			width: 90%;
		}
	}
</style>
<body>

<?php $this->load->view('user/_partials/navbar.php'); ?>

<!-- Search -->
<div class="container mb-3" style="margin-top: 100px;">
	<div class="row">
		<div class="col-md-10 col-lg-12 col-xl-12 mx-auto">
			<div class="search-bar">
				<form action="<?php echo site_url('search') ?>" method="GET">
					<div class="input-group">
						<div class="input-group-prepend"></div>
						<select class="custom-select" id="kategoriCari" name="kategori_get">
							<option value="#">Semua Kategori</option>
							<?php
							foreach ($kategori as $kat) {
								?>
								<option value="<?php echo $kat->idkategori ?>"><?php echo $kat->nama_kategori ?></option>
								<?php
							}
							?>
						</select>
						<input class="form-control" type="text" placeholder="Apa ?" id="apaCari" name="konten_get">
						<select class="selectpicker form-control" name="kota_get" id="kota" data-live-search="true">
							<option value="#">Dimana?</option>
							<?php
							foreach ($kabupaten as $kab) {
								?>
								<option value="<?php echo $kab->id_kabupaten ?>"><?php echo $kab->nama_kabupaten ?></option>
								<?php
							}
							?>
						</select>
						<div class="input-group-append">
							<button class="btn btn-primary text-left" type="submit"><i class="bi-search mr-1"></i> Cari
							</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div> <!-- Row -->
</div> <!-- Container -->
<!-- Search End -->

<div class="main-container mb-5" style="height: auto !important; min-height: 0px !important;">
	<!-- Breadcrumb -->
	<div class="container">
		<nav aria-label="breadcrumb">
			<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="<?php echo site_url('/') ?>"><i class="bi-house-fill"></i></a></li>
				<li class="breadcrumb-item"><a href="">Search</a></li>
				<li class="breadcrumb-item active" aria-current="page">Data</li>
			</ol>
		</nav>
	</div>
	<!-- End Breadcrumb -->
	<!-- Content -->
	<div class="container">
		<div class="row">
			<!-- Search Result -->
			<div class="col-12 mb-4">
				<div class="card">
					<div class="card-body">
						<div class="row border-bottom pb-3 mb-3 align-items-center">
							<div class="col-12 col-md-9 col-lg-10">
								Semua iklan dalam
								<?php
								if (isset($kat_badge->nama_kategori)) {
									?>
									<span class="py-2 px-3 ml-2 badge badge-light">
                                        <span id="kategoriBadge"><?php echo $kat_badge->nama_kategori ?></span>
                                    </span>
									<?php
								}
								if (isset($kota_badge->nama_kabupaten)) {
									?>
									<span class="py-2 px-3 ml-1 badge badge-light">
                                        <span id="kotaBadge"><?php echo $kota_badge->nama_kabupaten ?></span>
                                    </span>
									<?php
								}
								if (isset($hargamin_badge) AND $hargamin_badge != '') {
									?>
									<span class="py-2 px-3 ml-1 badge badge-light">
                                        <span id="hargaminBadge">Min: <?php echo $hargamin_badge ?></span>
                                    </span>
									<?php
								}
								if (isset($hargamax_badge) AND $hargamax_badge != '') {
									?>
									<span class="py-2 px-3 ml-1 badge badge-light">
                                        <span id="hargamaxBadge">Max: <?php echo $hargamax_badge ?></span>
                                    </span>
									<?php
								}
								if (isset($startdate_badge) AND $startdate_badge != '') {
									?>
									<span class="py-2 px-3 ml-1 badge badge-light">
                                        <span id="hargamaxBadge">From: <?php echo $startdate_badge ?></span>
                                    </span>
									<?php
								}
								if (isset($enddate_badge) AND $enddate_badge != '') {
									?>
									<span class="py-2 px-3 ml-1 badge badge-light">
                                        <span id="hargamaxBadge">To: <?php echo $enddate_badge ?></span>
                                    </span>
									<?php
								}
								?>


							</div>
							<div class="col-12 col-md-3 col-lg-2 mt-2 mt-md-0 text-md-right">
								<div class="c-offcanvas-content-wrap">
									<a href="#offCanvas" class="btn btn-secondary" id="filterMobileBtn">
										<i class="bi-filter mr-1"></i>
										Filter
									</a>
								</div>
							</div>
						</div>
						<!-- View Hasil -->
						<?php
						if ($jmlIklan > 0) {
							$this->load->view('user/search/results');
						} else {
							$this->load->view('user/search/noresult');
						}

						?>
					</div>
				</div>
			</div>
			<!-- End of Search Result -->
		</div> <!-- Row -->
	</div> <!-- Container -->
	<!-- End of Content -->

</div> <!-- Main Container -->
<aside id="offCanvas">
	<?php $this->load->view('user/search/sidebar'); ?>
</aside>
<?php $this->load->view('user/_partials/footer.php'); ?>
<script>
	$('#offCanvas').offcanvas({
		modifiers: 'right, overlay',
		triggerButton: '#filterMobileBtn'
	});
</script>
</body>
</html>
