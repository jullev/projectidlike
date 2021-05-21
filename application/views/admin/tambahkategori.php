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
                                        <li class="breadcrumb-item">Master Administrator</li>
                                        <li class="breadcrumb-item">Pengaturan Kategori</li>
                                        <li class="breadcrumb-item active">Tambah Kategori</li>

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
                        <div class="card">
                            <div class="card-header text-center">
                                <h3><strong>Tambah Kategori</strong></h3>
                            </div>
                            <div class="card-body bg-light">
                                <a href="<?php echo site_url('setkategori') ?>" class="btn btn-info" style="color: white !important;"><i class="bi-chevron-left" role="button"></i> Kembali</a>
                                <div class="row">
                                    <div class="col 12 col-sm-10 col-lg-10 mt-4 mx-auto">
                                        <!-- nama -->
                                        <div class="form-group row">
                                            <label for="category" class="col-3 col-form-label">Nama Kategori</label>
                                            <div class="col-9">
                                                <input type="text" name="category" class="form-control" id="category"  placeholder="Nama Kategori" required>
                                            </div>
                                        </div>
                                        <!-- btn -->
                                        <button class="btn btn-primary btn-block">Tambahkan</button>
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

    <!-- Footer -->
    <?php $this->load->view("admin/_partials/footer.php") ?>
</body>

</html>