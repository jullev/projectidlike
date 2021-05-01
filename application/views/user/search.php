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
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                        <input class="form-control" type="text" placeholder="Apa ?">
                        <input class="form-control" type="text" placeholder="Dimana ?">
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

        <div class="container">
            <div class="row">
                <!-- Sidebar -->
                <div class="col-md-3">
                    <div class="card mb-4">
                        <div class="card-header has-arrow">qwertyu</div>
                        <div class="card-body">asdfg</div>
                        <div class="card-header">qwerty</div>
                        <div class="card-body">asdfg</div>
                    </div>
                </div>
                <!-- Content -->
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
                            <div class="row">
                                <div class="col-10 col-sm-6 col-md-6 col-lg-4 mx-auto">
                                    <div class="card mb-3">
                                        <img src="https://placeimg.com/640/480/any" alt="" class="card-img-top">
                                        <div class="card-body text-left">
                                            <h5 class="card-title">Ini Judul</h5>
                                            <p class="card-text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Animi, incidunt. Facilis ea animi perspiciatis pariatur numquam, voluptatibus dolorum alias? .</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-10 col-sm-6 col-md-6 col-lg-4 mx-auto">
                                    <div class="card mb-3">
                                        <img src="https://placeimg.com/640/480/any" alt="" class="card-img-top">
                                        <div class="card-body text-left">
                                            <h5 class="card-title">Ini Judul</h5>
                                            <p class="card-text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Animi, incidunt. Facilis ea animi perspiciatis pariatur numquam, voluptatibus dolorum alias? .</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-10 col-sm-6 col-md-6 col-lg-4 mx-auto">
                                    <div class="card mb-3">
                                        <img src="https://placeimg.com/640/480/any" alt="" class="card-img-top">
                                        <div class="card-body text-left">
                                            <h5 class="card-title">Ini Judul</h5>
                                            <p class="card-text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Animi, incidunt. Facilis ea animi perspiciatis pariatur numquam, voluptatibus dolorum alias? .</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-10 col-sm-6 col-md-6 col-lg-4 mx-auto">
                                    <div class="card mb-3">
                                        <img src="https://placeimg.com/640/480/any" alt="" class="card-img-top">
                                        <div class="card-body text-left">
                                            <h5 class="card-title">Ini Judul</h5>
                                            <p class="card-text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Animi, incidunt. Facilis ea animi perspiciatis pariatur numquam, voluptatibus dolorum alias? .</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End of Content -->
            </div>
        </div>
    </div>
    <?php $this->load->view('user/_partials/footer.php'); ?>
</body>
</html>