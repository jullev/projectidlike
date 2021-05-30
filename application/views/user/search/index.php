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

    @media (max-width: 576px) {
        #sidebarFilter {
            display: none;
        }
    }
    @media (min-width: 768px) {
        #filterMobile {
            display: none !important;
        }
        #filterMobileModal {
            display: none;
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
            <form action="<?php echo site_url('search') ?>" method="POST">
                <div class="input-group">
                    <div class="input-group-prepend"></div>
                        <select class="custom-select" id="kategoriCari"  name="kategori">
                            <option value="#">Semua Kategori</option>
                            <?php
								foreach ($kategori as $kat){
							?>
									<option value="<?php echo $kat->idkategori ?>"><?php echo $kat->nama_kategori ?></option>
							<?php
								}
							?>
                        </select>
                        <input class="form-control" type="text" placeholder="Apa ?" id="apaCari" name="konten">
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
                    <li class="breadcrumb-item"><a href="#"><i class="bi-house-fill"></i></a></li>
                    <li class="breadcrumb-item"><a href="#">Library</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Data</li>
                </ol>
            </nav>
        </div>
        <!-- End Breadcrumb -->
        <!-- Content -->
        <div class="container">
            <div class="row">
                <!-- Sidebar -->
                <div class="col-md-4 col-lg-3" id="sidebarFilter">
                    <?php $this->load->view('user/search/sidebar'); ?>
                </div>
                <!-- End Sidebar -->
                <!-- Search Result -->
                <div class="col-md-8 col-lg-9 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12 pb-3" id="filterMobile">
                                    <button class="btn btn-secondary" id="filterMobileBtn" data-target="#filterMobileModal" data-toggle="modal">
                                        <i class="bi-filter mr-1"></i>
                                        Filter
                                    </button>
                                </div>
                                <div class="col-12 border-bottom pb-3 mb-3">
                                    Semua iklan dalam 
                                    <span class="py-2 px-3 ml-2 badge badge-light">
                                        <span id="kategoriBadge">Kategori </span><a href=""><i class="ml-2 bi-x"></i></a>
                                    </span>
                                    <span class="py-2 px-3 ml-1 badge badge-light">
                                        <span id="kotaBadge">Kota </span><a href=""><i class="ml-2 bi-x"></i></a>
                                    </span>
                                </div>
                            </div>
                            <!-- View Hasil -->
                            <?php
								if($jmlIklan > 0){
									$this->load->view('user/search/results');
								}else{
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

    <!-- Modal Filter for Mobile -->
    <div class="modal fade" id="filterMobileModal" tabindex="-1" aria-labelledby="filterMobileModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="filterMobileModalLabel"><i class="bi-filter mr-1"></i> Filter</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body align-items-center">
                    <div class="row align-items-center mb-1">
                        <div class="col-3 text-muted"><small>Tanggal Diposting</small></div>
                        <div class="col-9">
                            <select class="custom-select">
                                <option selected>Pilih Waktu</option>
                                <option value="daily">24 Jam</option>
                                <option value="threeday">3 Hari</option>
                                <option value="weekly">7 Hari</option>
                                <option value="monthly">30 Hari</option>
                            </select>
                        </div>
                    </div>
                    <div class="row align-items-center mb-1">
                        <div class="col-3 text-muted"><small>Kategori</small></div>
                        <div class="col-9">
                            <select class="custom-select">
                                <option selected>Pilih Kategori</option>
                                <option value="kategori1">Cari Investor</option>
                            </select>
                        </div>
                    </div>
                    <div class="row align-items-center mb-1">
                        <div class="col-3 text-muted"><small>Harga Kisaran</small></div>
                        <div class="col-9">
                            <div class="row">
                                <div class="col-6">
                                    <input type="text" name="minprice" id="minprice" class="form-control" placeholder="Minimal">
                                </div>
                                <div class="col-6">
                                    <input type="text" name="minprice" id="minprice" class="form-control" placeholder="Maximal">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row align-items-center mb-1">
                        <div class="col-3 text-muted"><small>Lokasi</small></div>
                        <div class="col-9">
                            <select class="selectpicker form-control" name="kota" id="kota" data-live-search="true">
                                <option value="#">Pilih Kota</option>
                                <?php
                                foreach ($kabupaten as $kab) {
                                    ?>
                                    <option value="<?php echo $kab->id_kabupaten ?>"><?php echo $kab->nama_kabupaten ?></option>
                                    <?php
                                }
                                ?>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                    <button type="button" class="btn btn-primary">Terapkan</button>
                </div>
            </div>
        </div>
    </div>
    <?php $this->load->view('user/_partials/footer.php'); ?>
</body>
</html>
