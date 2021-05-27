<!DOCTYPE html>
<html lang="en">

<!-- Head -->
<?php $this->load->view('user/_partials/head.php'); ?>

<body>
    <div id="alert_msg">
        <?php
        if ($this->session->flashdata('msg') !== null) {
        ?>
            <div class="alert alert-success"><?php echo $this->session->flashdata('msg') ?></div>
        <?php
        }
        ?>
    </div>
    <div class="container mb-5" style="margin-top: 100px;">
        <div class="row">
            <div class="col-12 col-sm-10 col-md-8 col-lg-6 mx-auto">
                <div class="card">
                    <div class="card-header">
                        <h3>Lupa Password</h3>
                    </div>
                    <div class="card-body">
                        <form action="C_Register/forgotPassword" method="POST">
                            <div class="form-group">
                                <label for="emailuser">Email/Username</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="emailuser-addon">
                                            <i class="bi-person-fill"></i>
                                        </span>
                                    </div>
                                    <input type="text" name="reset" id="reset" placeholder="Masukkan Email atau Username" class="form-control" aria-describedby="emailuser-addon" required>
                                </div>
                            </div>
                            <div class="text-center">
                                <button class="btn btn-primary btn-block" type="submit">Kirim</button>
                            </div>
                        </form>
                        <div class="card-footer text-center">
                            <a href="<?php echo site_url('/') ?>"> Kembali ke Halaman Awal</a>
                        </div>
                    </div> <!-- /card -->
                </div> <!-- /col -->
            </div> <!-- /row -->
        </div> <!-- /container -->
        <script>
            const alert = document.getElementById("alert_msg")

            const removeAlert = () => {
                alert.innerHTML = ""
            }
        </script>
        <!-- Footer -->
        <?php $this->load->view('user/_partials/footer.php'); ?>
</body>

</html>