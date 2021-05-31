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
                <!-- Search Result -->
                <div class="col-12 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="row border-bottom pb-3 mb-3 align-items-center">
                                <div class="col-12 col-md-9 col-lg-10">
                                    Semua iklan dalam 
                                    <span class="py-2 px-3 ml-2 badge badge-light">
                                        <span id="kategoriBadge">Kategori </span><a href=""><i class="ml-2 bi-x"></i></a>
                                    </span>
                                    <span class="py-2 px-3 ml-1 badge badge-light">
                                        <span id="kotaBadge">Kota </span><a href=""><i class="ml-2 bi-x"></i></a>
                                    </span>
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

            <!-- Pagination -->
            <div class="d-flex justify-content-center align-items-center">
                <nav aria-label="Search results pages">
                    <ul class="pagination">
                        <li class="page-item disabled">
                            <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                        </li>
                        <li class="page-item active" aria-current="page">
                            <a class="page-link" href="#">1</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="#">2</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="#">3</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="#">Next</a>
                        </li>
                    </ul>
                </nav>
            </div>
            <!-- Pagination end -->

        </div> <!-- Container -->
        <!-- End of Content -->

    </div> <!-- Main Container -->
    <aside id="offCanvas">
        <?php $this->load->view('user/search/sidebar'); ?>
    </aside>
    <?php $this->load->view('user/_partials/footer.php'); ?>
    <script>
        $('#offCanvas').offcanvas({
            modifiers: 'left, overlay', 
            triggerButton: '#filterMobileBtn' 
        });
    </script>
</body>
</html>
