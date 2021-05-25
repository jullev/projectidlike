<!DOCTYPE html>
<html lang="en">

<?php $this->load->view('user/_partials/head.php'); ?>
<body>
    
    <?php $this->load->view('user/_partials/navbar.php'); ?>

    <div class="container mb-3" style="margin-top: 100px;">
      <div class="row">
        <div class="col-md-10 col-lg-12 col-xl-12 mx-auto">
          <div class="search-bar">
            <form>
                <div class="input-group">
                    <div class="input-group-prepend"></div>
                        <select class="custom-select" id="inputGroupSelect01">
                            <option selected>Semua Kategori</option>
                            <?php
								foreach ($kategori as $kat){
							?>
									<option value="<?php echo $kat->idkategori ?>"><?php echo $kat->nama_kategori ?></option>
							<?php
								}
							?>
                        </select>
                        <input class="form-control" type="text" placeholder="Apa ?">
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
                        <button class="btn btn-primary text-left" type="button">Go!
                            <i class="fa fa-search float-left d-xl-flex justify-content-xl-center align-items-xl-center" style="transform: translate(-2px) translateX(-2px) translateY(3px);"></i>
                        </button>
                    </div>
                </div>
            </form>
          </div>
        </div>
      </div> <!-- Row -->
    </div> <!-- Container -->

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
                <div class="col-md-3">
                    <?php $this->load->view('user/search/sidebar'); ?>
                </div>
                <!-- End Sidebar -->
                <!-- Search Result -->
                <div class="col-md-9">
                    <div class="card text-center">
                        <div class="card-header">
                            <ul class="nav nav-tabs card-header-tabs">
                                <li class="nav-item">
                                    <a class="nav-link active" href="#">Semua Iklan <span class="badge badge-info">22</span></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Private <span class="badge badge-info-light">4</span></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Professional <span class="badge badge-info-light">0</span></a>
                                </li>
                            </ul>
                        </div>
                        <div class="card-body">
                            <div class="row listing-filter pb-3 mb-3">
                                <div class="float-sm-left col-sm-6 text-left">
                                    Semua iklan dalam 
                                </div>
                                <div class="float-sm-right col-sm-6 text-right">
                                    <i class="bi-grid"></i>
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
