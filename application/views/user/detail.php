<!DOCTYPE html>
<html lang="en">

<!-- Head -->
<?php $this->load->view('user/_partials/head.php'); ?>
<style>
	.nav {
		flex-wrap: nowrap;
	}
	.nav-link {
		border: solid 2px transparent;
	}
	.nav-pills .nav-link.active {
		background: transparent;
		border: solid 2px #ddd;
	}
</style>
<body>

	<!-- Navbar -->
	<?php $this->load->view('user/_partials/navbar.php'); ?>

	<!-- Container -->
	<div class="container mb-5" style="margin-top: 100px;">
		<!-- Row -->
		<div class="row">
			<!-- Breadcrumb -->
			<div class="col-md-12 col-lg-9 pr-lg-2 mb-2 mb-lg-0">
				<nav aria-label="breadcrumb">
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="#"><i class="bi-house-fill"></i></a></li>
						<li class="breadcrumb-item"><a href="#">Kategori</a></li>
						<li class="breadcrumb-item active" aria-current="page"><?php echo $dataIklan[0]->judul_kerjaan ?></li>
					</ol>
				</nav>
			</div>
			<div class="col-md-12 col-lg-3 pl-lg-2"></div>
			<!-- Breadcrumb End -->

			<!-- Main Content -->
			<div class="col-md-12 col-lg-9 pr-lg-2 mb-3 mb-lg-0">
				<div class="card">
					<div class="card-body bg-light">
						<?php
//						var_dump(@$dataIklan);
						foreach (@$dataIklan as $value) { ?>
						<h3><?php echo $value->judul_kerjaan; ?></h3>
						<hr>
						<span class="text-muted small">
							<i class="bi-clock mr-1"></i> <?php echo $value->tanggal_submit ?>
							- <i class="bi-grid mx-1"></i> <?php echo $value->nama_kategori ?>
							- <i class="bi-geo-alt mx-1"></i> <?php echo $value->nama_kabupaten; ?>
<!--							- <i class="bi-eye mx-1"></i> 50x dilihat-->
						</span>
						<!-- Image -->
						<center>
							<div id="detImg" class="carousel slide my-4" data-ride="carousel" data-interval="false">
								<ol class="carousel-indicators">
									<li data-target="#detImg" data-slide-to="0" class="active"></li>
									<li data-target="#detImg" data-slide-to="1"></li>
									<li data-target="#detImg" data-slide-to="2"></li>
								</ol>
								<div class="carousel-inner">
									<div class="carousel-item active">
									<img src="<?php echo base_url('assets/image/iklan/').$value->gambar_kerjaan ?>" class="d-block w-100" alt="Gambar <?php echo $value->judul_kerjaan; ?> 1">
									</div>
									<div class="carousel-item">
									<img src="<?php echo base_url('assets/image/detail2.jpg') ?>" class="d-block w-100" alt="Gambar <?php echo $value->judul_kerjaan; ?> 2">
									</div>
									<div class="carousel-item">
									<img src="<?php echo base_url('assets/image/detail3.jpg') ?>" class="d-block w-100" alt="Gambar <?php echo $value->judul_kerjaan; ?> 3">
									</div>
								</div>
								<a class="carousel-control-prev" href="#detImg" role="button" data-slide="prev">
									<span class="carousel-control-prev-icon" aria-hidden="true"></span>
									<span class="sr-only">Previous</span>
								</a>
								<a class="carousel-control-next" href="#detImg" role="button" data-slide="next">
									<span class="carousel-control-next-icon" aria-hidden="true"></span>
									<span class="sr-only">Next</span>
								</a>
							</div>
						</center>
						<!-- Image End -->
						<!-- Detail -->
						<ul class="nav nav-tabs">
							<li class="nav-item">
								<span class="nav-link active" id="detailIklan"><strong>Detail Iklan</strong></span>
							</li>
						</ul>
						<div class="tab-content bg-white p-3" style="border: 1px solid #dee2e6; border-top: none;">
							<div class="row" style="font-size: 120%;">
								<div class="col-12 col-lg-6 text-lg-left text-left">
									<i class="bi-geo-alt-fill mr-2"></i>
									<strong>Lokasi: </strong><a href=""><?php echo $value->nama_kabupaten; ?></a>
								</div>
								<div class="col-12 col-lg-6 text-lg-right text-left mt-2 mt-lg-0">
									<i class="bi-tag-fill mr-2"></i>
									<strong>Penawaran: </strong>Rp <?php echo number_format($value->harga,2, ',', '.'); ?>
								</div>
							</div>
							<hr>
							<?php echo $value->deskripsi; ?>
							<!-- Tombol -->
							<div class="row text-center mt-5 mb-2">
								<!-- Tombol Whatsapp -->
								<div class="col-sm-12 col-md-4">
									<a href="https://wa.me/<?php echo $value->no_hp ?>"  class="btn btn-outline-success btn-lg"><i class="bi-whatsapp mr-1"></i> WhatsApp</a>
								</div>
								<!-- Tombol Whatsapp End -->
								<!-- Tombol Hit -->
								<div class="col-sm-12 col-md-4 mt-3 mt-md-0">
									<?php //var_dump(@$cekhit);
									if(!@$cekhit){
									?>
									<button class="btn btn-outline-warning btn-lg" id="btnHit2" onmouseover="login_check_hit('btnHit2',<?php echo $this->session->userdata('is_login') ?> )">
										<i class="bi-hand-index-thumb-fill mr-1"></i> Hit
									</button>
									<?php
									}
									else {
										?>
										<span class="btn list-group-item-success btn-lg" style="pointer-events: none;">
											<i class="bi-check-circle mr-1"></i> Sudah Anda Hit
										</span>
									<?php	}
									?>
								</div>
								<!-- Tombol Hit End -->
								<div class="col-sm-12 col-md-4 mt-3 mt-md-0">
									<button class="btn btn-outline-info btn-lg"><i class="bi-info-circle-fill mr-1"></i> Laporkan Iklan</button>
								</div>
							</div>
						</div>
					</div>
				</div>
				<?php } ?>
			</div>
			<!-- Main Content End -->

			<!-- Sidebar -->
			<div class="col-md-12 col-lg-3 pl-lg-2">
				<div class="card">
					<div class="card-body py-2 px-0">
						<ul class="list-group list-group-flush">
							<!-- Posted by -->
							<li class="list-group-item">
								<div class="row">
									<div class="col-lg-4 col-md-2 col-3">
										<img src="<?php echo base_url('assets/image/users/').$value->foto_profil ?>" alt="Anggito Suryo" title="Anggito Suryo" class="w-100" style="max-width: 70px; max-height: 70px;">
									</div>
									<div class="col-lg-8 col-md-10 col-9 pl-0">
										<div class="row">
											<div class="col-12 text-muted small">Posted by</div>
											<div class="col-12"><?php echo $value->nama_user; ?></div>
										</div>
									</div>
								</div>
							</li>
							<!-- Posted by End -->
							<!-- Lokasi & Penawaran -->
							<li class="list-group-item small">
								<div class="row px-2">
									<!-- Lokasi -->
									<div class="col-1 p-0">
										<i class="bi-geo-alt-fill mr-2"></i>
									</div>
									<div class="col-5 p-0">
										<span class="text-muted">Lokasi</span>
									</div>
									<div class="col-6 p-0 text-right mb-2">
										<a href="#"><?php echo $value->nama_kabupaten; ?></a>
									</div>
									<!-- Penawaran -->
									<div class="col-1 p-0">
										<i class="bi-tag-fill mr-2"></i>
									</div>
									<div class="col-5 p-0">
										<span class="text-muted">Penawaran</span>
									</div>
									<div class="col-6 p-0 text-right">
										Rp <?php echo number_format($value->harga,2, ',', '.'); ?>
									</div>
								</div>
							</li>
							<!-- Lokasi & Penawaran End -->
							<!-- Button -->
							<li class="list-group-item">
								<!-- Hit Button -->
								<?php //var_dump(@$cekhit);
								if(!@$cekhit){
								?>
									<button class="btn btn-warning btn-block" id="btnHit"  onmouseover="login_check_hit('btnHit',<?php echo $this->session->userdata('is_login') ?> )">
										<i class="bi-hand-index-thumb-fill mr-1"></i> Hit
									</button>
								<?php
								}
								else{
									?>
									<span class="btn list-group-item-success btn-block" style="pointer-events: none;">
										<i class="bi-check-circle mr-1"></i> Sudah Anda Hit
									</span>
								<?php	}
								?>
								<!-- Hit Button End -->
								<!-- Whatsapp Button -->
								<a href="https://wa.me/<?php echo $value->no_hp ?>" class="btn btn-success btn-block"><i class="bi-whatsapp mr-1"></i> WhatsApp</a>
								<!-- Whatsapp Button End -->
							</li>
							<!-- Button End -->
						</ul> <!-- UL End -->
					</div> <!-- Card Body End -->
				</div> <!-- Card End -->
			</div>
			<!-- Sidebar End -->

		</div> <!-- Row End -->
	</div> <!-- Container End -->

	<!-- Footer -->
	<?php $this->load->view('user/_partials/footer.php'); ?>
	<script>
		const login_check_hit = (btn, status) => {
			const is_login = status
			const btn_hit = document.getElementById(btn)
			if(is_login === undefined || is_login === null){
				btn_hit.dataset.target = '#signIn'
				btn_hit.dataset.toggle = 'modal'
			}else{
				btn_hit.addEventListener('click', () => {
					location.href = '<?php echo site_url('hitiklan/').$value->idkerjaan; ?>'
				})
			}
		}
	</script>
</body>

</html>
