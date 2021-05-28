<!DOCTYPE html>
<html lang="en">

<!-- Head -->

<?php $this->load->view('user/_partials/head.php'); ?>

<body>

    <div class="wrapper">
        <?php $this->load->view("user/_partials/navbar") ?>
        <div id="alert_msg">
            <?php
            if ($this->session->flashdata('msg') !== null) {
            ?>
                <div class="alert alert-success"><?php echo $this->session->flashdata('msg') ?></div>
            <?php
            }
            ?>
        </div>
        <!-- wrapper content -->
        <div class="content-wrapper">
            <!-- container -->
            <div class="container" style="margin-top: 120px; margin-bottom: 200px">
                <!-- row -->
                <div class="row">
                    <!-- col -->
                    <div class="col-12 col-sm-10 col-md-8 col-lg-6 mx-auto">
                        <!-- card -->
                        <div class="card">
                            <div class="card-header">
                                <h3>
                                    <center>Lupa Password</center>
                                </h3>
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
                                        <div class="text-center">
                                            <button class="btn btn-primary btn-block mt-2" type="submit">Kirim</button>
                                            <a href="<?php echo site_url('/') ?>"> Kembali ke Halaman Awal</a>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <!-- /card -->
                        </div>
                        <!-- /col -->
                    </div>
                    <!-- /row -->
                </div>
                <!-- /container -->
            </div>
        </div>
    </div>
    <?php $this->load->view('user/_partials/footer.php'); ?>
    <script>
        const alert = document.getElementById("alert_msg")

        const removeAlert = () => {
            alert.innerHTML = ""
        }
    </script>
    <!-- Footer -->
</body>

</html>