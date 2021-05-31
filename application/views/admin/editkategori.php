<!DOCTYPE html>
<html>
<?php $this->load->view("admin/_partials/head.php") ?>
<!-- <body class="hold-transition sidebar-mini layout-fixed"> Original code -->

<body class="hold-transition sidebar-collapse sidebar-mini layout-fixed">
    <div class="wrapper">

        <?php $this->load->view("admin/_partials/navbar.php") ?>

        <!-- Main Sidebar Container -->
        <?php $this->load->view("admin/_partials/sidebar.php") ?>

        <!-- Content Wrapper. Contains page content -->

        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card">
                                <div class="card-header">
                                    <ol class="breadcrumb float-sm-left">
                                        <li class="breadcrumb-item"><a href="<?php echo site_url('admin') ?>">Home</a></li>
                                        <li class="breadcrumb-item"><a href="<?php echo site_url('setkategori') ?>">Pengaturan Kategori</a></li>
                                        <li class="breadcrumb-item active">Edit Kategori</li>

                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.content-header -->
            <!-- Card -->
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div id="alert_msg">
                            <?php
                            if ($this->session->userdata('msg') !== null) {
                            ?>
                                <div class="alert alert-warning"><?php echo $this->session->userdata('msg') ?><button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button></div>
                            <?php
                            }
                            $this->session->unset_userdata('msg');
                            ?>
                        </div>
                        <div class="card">
                            <div class="card-header text-center">
                                <h3><strong>Tambah Kategori</strong></h3>
                            </div>
                            <div class="card-body bg-light">
                                <a href="<?php echo site_url('setkategori') ?>" class="btn btn-info" style="color: white !important;"><i class="bi-chevron-left" role="button"></i> Kembali</a>
                                <div class="row">
                                    <div class="col 12 col-sm-10 col-lg-10 mt-4 mx-auto">
                                        <!-- nama -->
                                        <form action="<?php echo site_url('kategoriupdate') ?>" onsubmit=" return validation()" method="POST" id="kategori_form">
                                            <div class="form-group row">
                                                <label for="category" class="col-3 col-form-label">Id Kategori</label>
                                                <div class="col-9">
                                                    <input type="text" name="id" id="id" class="form-control" value="<?php echo @$editKatgor->idkategori; ?>" placeholder="Nama Kategori" disabled>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="category" class="col-3 col-form-label">Nama Kategori</label>
                                                <div class="col-9">
                                                    <input type="text" name="category" class="form-control" id="category" value="<?php echo @$editKatgor->nama_kategori; ?>" placeholder="Nama Kategori" required>
                                                </div>
                                            </div>
                                            <!-- btn -->
                                            <button type="submit" class="btn btn-primary btn-block">Ubah</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div> <!-- /.card -->
                    </div> <!-- /.col -->
                </div> <!-- /.row -->
            </div> <!-- /.container -->
        </div>
        <!-- /.content-wrapper -->
    </div>
    <!-- validation -->
    <script>
        // Get id alert
        const alert = document.getElementById("alert_msg")

        // Form Validation for gender, password
        const validation = () => {
            const katgor = document.forms["kategori_form"]["category"].value

            if (katgor === "#") {
                alert.innerHTML = "<div class='alert alert-danger'>Mohon isi nama kategori</div>"
                return false
            }

        }

        // Menghapus alert
        const removeAlert = () => {
            alert.innerHTML = ""
        }
    </script>

    <!-- Footer -->
    <?php $this->load->view("admin/_partials/footer.php") ?>
</body>

</html>
