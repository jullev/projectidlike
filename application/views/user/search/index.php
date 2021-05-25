<!DOCTYPE html>
<html lang="en">

<?php $this->load->view('user/_partials/head.php'); ?>

<style>
    .btn-light:not(#nameNavbar) {
		background: white;
		color: #868e96;
        border-color: #ced4da;
	}
    #kategoriCari {
        border-top-left-radius: .25rem;
        border-bottom-left-radius: .25rem;
    }
</style>
<body>
    
    <?php $this->load->view('user/_partials/navbar.php'); ?>

    <!-- Search -->
    <div class="container mb-3" style="margin-top: 100px;">
      <div class="row">
        <div class="col-md-10 col-lg-12 col-xl-12 mx-auto">
          <div class="search-bar">
            <form>
                <div class="input-group">
                    <div class="input-group-prepend"></div>
                        <select class="custom-select" id="kategoriCari">
                            <option selected>Semua Kategori</option>
                            <?php
								foreach ($kategori as $kat){
							?>
									<option value="<?php echo $kat->idkategori ?>"><?php echo $kat->nama_kategori ?></option>
							<?php
								}
							?>
                        </select>
                        <input class="form-control" type="text" placeholder="Apa ?" id="apaCari">
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
                        <button class="btn btn-primary text-left" type="button"><i class="bi-search mr-1"></i> Cari
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
                <div class="col-sm-0 col-md-4 col-lg-3">
                    <?php $this->load->view('user/search/sidebar'); ?>
                </div>
                <!-- End Sidebar -->
                <!-- Search Result -->
                <div class="col-md-8 col-lg-9 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="row listing-filter pb-3 mb-3">
                                <div class="col">
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
                            <?php $this->load->view('user/search/results'); ?>
                        </div>
                    </div>
                </div>
                <!-- End of Search Result -->
            </div> <!-- Row -->
        </div> <!-- Container -->
        <!-- End of Content -->

    </div> <!-- Main Container -->
    <?php $this->load->view('user/_partials/footer.php'); ?>
</body>
</html>
