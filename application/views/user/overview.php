<!DOCTYPE html>
<html>

<!-- Head -->
<?php $this->load->view('user/_partials/head.php'); ?>
<!-- Style -->
<style>
	@media (max-width: 576px) {
		.rounded-search {
			border-radius: 1rem;
		}

		.form-row > .form-group > .input-group > .custom-select {
			border-radius: 0px !important;
			border-top: none;
			border-left: none;
			border-right: none;
		}

		.form-row > .form-group > .input-group > .form-control {
			border-radius: 0px !important;
			border-top: none;
			border-left: none;
			border-right: none;
		}

		.form-row > .form-group > .input-group > .form-control:focus {
			box-shadow: none;
		}
	}

	@media (min-width: 576px) {
		.rounded-search {
			border-radius: 1rem;
		}

		.form-row > .form-group > .input-group > .custom-select {
			border-radius: 0px !important;
			border-top: none;
			border-left: none;
			border-right: none;
		}

		.form-row > .form-group > .input-group > .form-control {
			border-radius: 0px !important;
			border-top: none;
			border-left: none;
			border-right: none;
		}

		.form-row > .form-group > .input-group > .form-control:focus {
			box-shadow: none;
		}
	}

	@media (min-width: 768px) {
		.rounded-search {
			border-radius: 1rem;
		}

		.form-row > .form-group > .input-group > .custom-select {
			border-radius: 0px !important;
			border-top: none;
			border-left: none;
			border-right: none;
		}

		.form-row > .form-group > .input-group > .form-control {
			border-radius: 0px !important;
			border-top: none;
			border-left: none;
			border-right: none;
		}

		.form-row > .form-group > .input-group > .form-control:focus {
			box-shadow: none;
		}
	}

	@media (min-width: 992px) {
		.rounded-search {
			border-radius: 50rem;
		}

		.form-row > .form-group > .input-group > .custom-select {
			border-radius: 0px !important;
			border-top: none;
			border-bottom: none;
			border-right: none;
			border-left: none;
		}

		.form-row > .form-group > .input-group > .custom-select:focus {
			box-shadow: none;
			background-color: #f8f9fa;
		}

		.form-row > .form-group > .input-group > .form-control {
			border-radius: 0px !important;
			border-top: none;
			border-bottom: none;
			border-right:  1px solid #dee2e6 !important;
			border-left: 1px solid #dee2e6 !important;
		}

		.form-row > .form-group > .input-group > .form-control:focus {
			box-shadow: none;
		}
	}
	.btn-light {
		background: white;
		border: none;
		color: #495057;
	}

	#cardHover {
		transition: 0.2s all;
		overflow: hidden;
	}

	#cardHover:hover {
		box-shadow: 0 8px 50px rgba(0, 0, 0, 0.2);
		transform: scale(1.05);
	}

	.img-zoom {
		overflow: hidden;
	}

	.img-zoom img {
		transition: all ease 0.75s;
	}

	.img-zoom:hover img {
		transform: scale(1.25);
	}

</style>

<body>

<!-- Navbar -->
<?php $this->load->view('user/_partials/navbar.php'); ?>

<!-- Header -->
<header class="text-center text-white masthead"
		style="background: url(&quot;<?php echo base_url('assets/assets/img/1-11.jpg') ?>&quot;) top / cover;">
	<div class="d-inline-block overlay" style="background: rgb(55, 100, 146);"></div>
	<div class="container">
		<!-- Pasang nego beres -->
		<div class="row">
			<div class="col-9 mx-auto">
				<h1 class="text-center">PASANG-NEGO-BERES</h1>
				<h3 class="text-center">Mudah, Cepat, Efisien</h3>
			</div>
		</div>
		<!-- Pasang nego beres end -->
		<!-- Search -->
		<div class="col-12 col-sm-12 col-md-11 col-lg-10 mx-auto mt-2">
			<div class="card rounded-search mx-auto shadow-sm">
				<form action="<?php echo site_url('search-process') ?>" method="POST">
					<div class="form-row align-items-center mx-2 my-3 my-lg-0 mx-lg-2">
						<div class="col-lg-4 d-flex form-group align-items-center mb-3 my-lg-3">
							<div class="input-group">
								<select name="kategori" id="kategori" class="custom-select">
									<option value="#" selected>Kategori</option>
									<?php
									foreach ($kategori as $kat) {
										?>
										<option value="<?php echo $kat->idkategori ?>"><?php echo $kat->nama_kategori ?></option>
										<?php
									}
									?>
								</select>
							</div>
						</div>
						<div class="col-lg-3 d-flex align-items-center form-group mb-3 my-lg-3">
							<div class="input-group">
								<input type="text" placeholder="Apa?" class="form-control">
							</div>
						</div>
						<div class="col-lg-3 d-flex align-items-center form-group my-lg-3" id="kotaSearch">
							<select class="selectpicker form-control" name="kota" id="kota" data-live-search="true">
								<option value="#">Dimana?</option>
								<?php
								foreach ($kabupaten as $kab) {
									?>
									<option value="<?php echo $kab->id_kabupaten ?>"><?php echo $kab->nama_kabupaten ?></option>
									<?php
								}
								?>
							</select>
						</div>
						<div class="col-lg-2">
							<button class="btn btn-primary btn-block rounded-pill py-lg-3" type="submit"><i
										class="bi-search mr-1"></i> Search
							</button>
						</div>
					</div>
				</form>
			</div>
		</div>
		<!-- Search End -->
	</div>
</header>
<!-- Header End -->

<!-- Pilih Daerah -->
<div class="container my-3">
	<div class="card p-3 bg-light">
		<div class="card-body">
			<h1 class="mb-3">Pilih Kota atau Daerah</h1>
			<div class="row">
				<div class="col">
					<form>
						<div class="form-row">
							<div class="col-md-3">
								<ul class="list-unstyled">
									<li><a href="">Jakarta</a></li>
									<li><a href="">Bandung</a></li>
									<li><a href="">Medan</a></li>
									<li><a href="">Surabaya</a></li>
									<li><a href="">Bekasi</a></li>
								</ul>
							</div>
							<div class="col-md-3">
								<ul class="list-unstyled">
									<li><a href="">Palembang</a></li>
									<li><a href="">Makassar</a></li>
									<li><a href="">Tangerang</a></li>
									<li><a href="">Tangerang Selatan</a></li>
									<li><a href="">Semarang</a></li>
								</ul>
							</div>
							<div class="col-md-3">
								<ul class="list-unstyled">
									<li><a href="">Depok</a></li>
									<li><a href="">Batam</a></li>
									<li><a href="">Padang</a></li>
									<li><a href="">Denpasar</a></li>
									<li><a href="" data-toggle="modal" data-target="#moreCity">Kota Lainnya</a></li>
								</ul>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div> <!-- /container -->
<!-- Pilih Daerah End -->

<!-- Iklan Terbaru -->
<div class="container mb-5">
	<div class="card">
		<div class="card-header">
			<span style="font-weight: bold;">Iklan</span>
			<span>Terbaru</span>
		</div>
		<div class="card-body">
			<div class="row">
				<?php
				//var_dump(@$dataIklan);
				foreach (@$dataIklan as $value) {
					?>
					<div class="col-lg-3 col-md-6 col-sm-10 px-2 mb-3">
						<div class="card" id="cardHover">
							<div class="img-zoom">
								<img class="card-img-top" src="assets/image/iklan/<?php echo $value->gambar_kerjaan ?>"
									 alt="<?php echo $value->judul_kerjaan; ?>"
									 title="<?php echo $value->judul_kerjaan; ?>">
							</div>
							<div class="card-body" style="height: 16rem;overflow: hidden;">
								<h5 class="card-title text-capitalize">
									<a href="<?php echo base_url() ?>detail/<?php echo $value->idkerjaan; ?>"><?php echo $value->judul_kerjaan; ?></a>
								</h5>
								<p class="card-text">
								  <span class="text-muted small">
									<i class="bi-clock mr-1"></i> <?php echo $value->tanggal_submit ?>
									- <i class="bi-grid ml-1 mr-1"></i> <?php echo $value->nama_kategori ?>
									- <i class="bi-geo-alt ml-1 mr-1"></i> <?php echo $value->nama_kabupaten ?>
								  </span>
                  <div class="text-right">
                    <h5>Rp <?php echo number_format($value->harga,2, ',', '.'); ?></h5>
                  </div>
                </p>
              </div>
            </div>
          </div>
          <?php
          }
          ?>
        </div>
      </div> <!-- /Card Body -->
    </div> <!-- /Card -->
  </div> <!-- /Container -->
  <!-- Iklan Terbaru End -->

  <!-- Modal Kota Lainnya -->
  <div class="modal fade" id="moreCity" tabindex="-1" aria-labelledby="moreCityLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="moreCityLabel">Pilih Daerah Lainnya</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="form-group row">
							<div class="col-9 pr-1">
								<select class="selectpicker form-control" name="kota" id="kota" data-live-search="true"
										required>
									<option value="#">-- Pilih Kota/Kabupaten --</option>
									<?php
									foreach ($kabupaten as $kab) {
										?>
										<option value="<?php echo $kab->id_kabupaten ?>"><?php echo $kab->nama_kabupaten ?></option>
										<?php
									}
									?>
								</select>
							</div>
              <div class="col-3 pl-1">
                  <button class="btn btn-block btn-primary">Submit</button>
              </div>
			</div>
        </div>
      </div>
    </div>
  </div>
  <!-- Modal Kota Lainnya End -->

  <!-- footer -->
  <?php $this->load->view('user/_partials/footer.php'); ?>
  <!-- /footer -->
</body>

</html>
