<!DOCTYPE html>
<html>
<?php $this->load->view("admin/_partials/head.php") ?>

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
                                        <li class="breadcrumb-item active">Tambah User</li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <section class="content container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-header">
                                <span>
                                    <h3><strong>
                                            <center>Detail User</center>
                                        </strong></h3>
                                </span>
                            </div>
                            <div class="card-body p-5 bg-light">
                                <form>
                                    <!-- nama -->
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Nama Lengkap</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" id="namaadmin" placeholder="Tuliskan Nama Lengkap Anda" disabled>
                                        </div>
                                    </div>
                                    <!-- username -->
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Username</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" id="useradmin" placeholder="Username" disabled>
                                        </div>
                                    </div>
                                    <!-- email -->
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Email</label>
                                        <div class="col-sm-8">
                                            <input type="email" class="form-control" id="emailadmin" placeholder="Masukkan email anda" disabled>
                                        </div>
                                    </div>
                                    <!-- password -->
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Password</label>
                                        <div class="col-sm-8">
                                            <input type="password" class="form-control" id="passadmin" placeholder="password" disabled>
                                        </div>
                                    </div>
                                    <!-- Konfirm Password -->
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Konfirmasi Password</label>
                                        <div class="col-sm-8">
                                            <input type="password" class="form-control" id="passadmin" placeholder="konfirmasi password" disabled>
                                        </div>
                                    </div>
                                    <!-- tanggal lahir -->
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Tanggal Lahir</label>
                                        <div class="col-sm-8">
                                            <input type="date" class="form-control" id="lahir admin" name="lahiradmin" disabled>
                                        </div>
                                    </div>
                                    <!-- Jenis Kelamin -->
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Jenis Kelamin</label>
                                        <div class="col-sm-8">
                                            <select class="custom-select" id="gender" required disabled>
                                                <option selected>Jenis Kelamin</option>
                                                <option value="Laki - Laki">Laki - Laki</option>
                                                <option value="Perempuan">Perempuan</option>
                                            </select>
                                        </div>
                                    </div>
                                    <!-- Nomer Telepon -->
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Nomer Telepon</label>
                                        <div class="input-group col-sm-8">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">+62</span>
                                            </div>
                                            <input type="text" class="form-control" name="phone" placeholder="Nomor Telepon" required disabled>
                                        </div>
                                    </div>
                                    <!-- Alamat Lengkap -->
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Alamat Lengkap</label>
                                        <div class="input-group col-sm-8">
                                            <div class="input-group">
                                                <textarea class="form-control" name="alamat" id="alamat" cols="30" rows="5" placeholder="tuliskan alamat lengkap anda" disabled></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Foto Profile -->
                                    <div class="form-group row">
                                        <label for="deskripsi" class="col-sm-3 col-form-label">Foto Profil</label>
                                        <div class="input-group col-sm-8">
                                            <img src="<?php echo base_url('assets/assets/img/testimonials-2.jpg') ?>" class="img-thumbnail" style="width: 200px; " alt="...">
                                        </div>
                                    </div>
                                    <!-- button -->
                                    <div class="form-group row">
                                        <button type="button" class="btn btn-success btn-lg btn-block">Hubungi User</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>


            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
        <?php $this->load->view("admin/_partials/footer.php") ?>
</body>

</html>