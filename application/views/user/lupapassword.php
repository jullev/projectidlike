<!DOCTYPE html>
<html lang="en">

<!-- Head -->
<?php $this->load->view('user/_partials/head.php'); ?>

<body>
    <!-- Navbar -->
    <?php $this->load->view('user/_partials/navbar.php'); ?>

    <div class="container mb-5" style="margin-top: 100px;">
        <div class="row">
            <div class="col-12 col-sm-10 col-md-8 col-lg-6 mx-auto">
                <div class="card">
                    <div class="card-header">
                        <h3>Lupa Password</h3>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="emailuser">Email/Username</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="emailuser-addon">
                                        <i class="bi-person-fill"></i>
                                    </span>
                                </div>
                                <input type="text" name="emailuser" id="emailuser" placeholder="Masukkan Email atau Username" class="form-control" aria-describedby="emailuser-addon">
                            </div>
                        </div>
                        <div class="text-center">
                            <button class="btn btn-primary btn-block">Kirim</button>
                        </div>
                    </div>
                    <div class="card-footer text-center">
                        <a href="<?php echo site_url('/') ?>"> Kembali ke Halaman Awal</a>
                    </div>
                </div> <!-- /card -->
            </div> <!-- /col -->
        </div> <!-- /row -->
    </div> <!-- /container -->

    <!-- Footer -->
    <?php $this->load->view('user/_partials/footer.php'); ?>
</body>
</html>