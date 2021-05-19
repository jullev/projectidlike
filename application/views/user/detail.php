<!DOCTYPE html>
<html lang="en">

<!-- Head -->
<?php $this->load->view('user/_partials/head.php'); ?>

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
						<li class="breadcrumb-item active" aria-current="page">Judul</li>
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
						var_dump(@$dataIklan);
						foreach (@$dataIklan as $value) { ?>
						<h3><?php echo $value->judul_kerjaan; ?></h3>
						<hr>
						<span class="text-muted small">
							<i class="bi-clock mr-1"></i> 1 Minggu yang lalu
							- <i class="bi-grid mx-1"></i> Kategori
							- <i class="bi-geo-alt mx-1"></i> <?php echo $value->nama_kabupaten; ?>
							- <i class="bi-eye mx-1"></i> 50x dilihat
						</span>
						<div class="mt-2">
							<button id="previmg" class="previmg btn btn-primary"><i class="bi-arrow-left"></i> Prev</button>
							<button id="nextimg" class="nextimg btn btn-primary">Next <i class="bi-arrow-right"></i></button>
						</div>
						<center>
							<div class="tab-content" id="pills-tabContent">
								<div class="tab-pane fade show active" id="pills-1" role="tabpanel" aria-labelledby="pills-1-tab">
									<img src="https://placeimg.com/640/480/arch" alt="Ini Judul" title="Ini Judul" class="mt-3 mb-3 w-100">
								</div>
								<div class="tab-pane fade" id="pills-2" role="tabpanel" aria-labelledby="pills-2-tab">
									<img src="https://placeimg.com/640/480/people" alt="Ini Judul" title="Ini Judul" class="mt-3 mb-3 w-100">
								</div>
								<div class="tab-pane fade" id="pills-3" role="tabpanel" aria-labelledby="pills-3-tab">
									<img src="https://placeimg.com/640/480/tech" alt="Ini Judul" title="Ini Judul" class="mt-3 mb-3 w-100">
								</div>
								<div class="tab-pane fade" id="pills-4" role="tabpanel" aria-labelledby="pills-4-tab">
									<img src="https://placeimg.com/640/480/animals" alt="Ini Judul" title="Ini Judul" class="mt-3 mb-3 w-100">
								</div>
							</div>
							
							<ul class="nav nav-pills mt-3" id="pills-tab" role="tablist">
								<li class="nav-item" role="presentation">
									<a class="nav-link active" id="pills-1-tab" data-toggle="pill" href="#pills-1" role="tab" aria-controls="pills-1" aria-selected="true">
										<img src="https://placeimg.com/640/480/arch" alt="Ini foto 1" title="ini foto 1" style="width: 15%;">
									</a>
								</li>
								<li class="nav-item" role="presentation">
									<a class="nav-link" id="pills-2-tab" data-toggle="pill" href="#pills-2" role="tab" aria-controls="pills-2" aria-selected="false">
										<img src="https://placeimg.com/640/480/people" alt="Ini foto 2" title="ini foto 2" style="width: 15%;">
									</a>
								</li>
								<li class="nav-item" role="presentation">
									<a class="nav-link" id="pills-3-tab" data-toggle="pill" href="#pills-3" role="tab" aria-controls="pills-3" aria-selected="false">
										<img src="https://placeimg.com/640/480/tech" alt="Ini foto 3" title="ini foto 3" style="width: 15%;">
									</a>
								</li>
								<li class="nav-item" role="presentation">
									<a class="nav-link" id="pills-4-tab" data-toggle="pill" href="#pills-4" role="tab" aria-controls="pills-4" aria-selected="false">
										<img src="https://placeimg.com/640/480/animals" alt="Ini foto 4" title="ini foto 4" style="width: 15%;">
									</a>
								</li>
							</ul>
						</center>
						<!-- Detail -->
						<ul class="nav nav-tabs">
							<li class="nav-item">
								<span class="nav-link active"><strong>Detail Iklan</strong></span>
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
									<strong>Penawaran: </strong>Rp. <?php echo number_format($value->harga,2); ?>
								</div>
							</div>
							<hr>
							<?php echo $value->deskripsi; ?>
							<!-- Tombol -->
							<div class="row text-center mt-5 mb-2">
								<!-- Tombol Whatsapp -->
								<div class="col-sm-12 col-md-4">
									<button class="btn btn-outline-success btn-lg"><i class="bi-whatsapp mr-1"></i> WhatsApp</button>
								</div>
								<!-- Tombol Whatsapp End -->
								<!-- Tombol Hit -->
								<div class="col-sm-12 col-md-4 mt-3 mt-md-0">
									<?php //var_dump(@$cekhit);
									if(!@$cekhit){
									?>
									<button class="btn btn-outline-warning btn-lg">
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
										<img src="https://placeimg.com/300/300/people" alt="Anggito Suryo" title="Anggito Suryo" class="w-100" style="max-width: 70px;">
									</div>
									<div class="col-lg-8 col-md-10 col-9 pl-0">
										<div class="row">
											<div class="col-12 text-muted small">Posted by</div>
											<div class="col-12">Anggito Suryo Baskoro Kuncoro Santoso</div>
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
										Rp. <?php echo number_format($value->harga,2); ?>
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
									<button class="btn btn-warning btn-block" onclick="window.location='<?php echo site_url("hitiklan/$value->idkerjaan");?>'">
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
								<button class="btn btn-success btn-block"><i class="bi-whatsapp mr-1"></i> WhatsApp</button>
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
	<!-- JS -->
	<script>
		function btnNextPrev(){
            var i, items = $('.nav-link'), pane = $('.tab-pane');
            // next
            $('.nextimg').on('click', function(){
                for(i = 0; i < items.length; i++){
                    if($(items[i]).hasClass('active') == true){
                        break;
                    }
                }
                if(i < items.length - 1){
                    // for tab
                    $(items[i]).removeClass('active');
                    $(items[i+1]).addClass('active');
                    // for pane
                    $(pane[i]).removeClass('show active');
                    $(pane[i+1]).addClass('show active');
                }

            });
            // Prev
            $('.previmg').on('click', function(){
                for(i = 0; i < items.length; i++){
                    if($(items[i]).hasClass('active') == true){
                        break;
                    }
                }
                if(i != 0){
                    // for tab
                    $(items[i]).removeClass('active');
                    $(items[i-1]).addClass('active');
                    // for pane
                    $(pane[i]).removeClass('show active');
                    $(pane[i-1]).addClass('show active');
                }
            });
			console.log(items);
        }
        btnNextPrev();
	</script>
</body>
</html>
