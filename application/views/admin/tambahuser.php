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
                    <?php if ($this->session->flashdata('success')) : ?>
                        <div class="alert alert-success" role="alert">
                            <?php echo $this->session->flashdata('success'); ?>
                        </div>
                    <?php endif; ?>
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
                                            <center>FORM TAMBAH USER</center>
                                        </strong></h3>
                                </span>
                            </div>
                            <div class="card-body p-5 bg-light">
                                <form action="<?php base_url('admin/C_ManagementUser/add') ?>">
                                    <!-- nama -->
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Nama Lengkap</label>
                                        <div class="col-sm-8">
                                            <input type="text" name="nama_user" class="form-control <?php echo form_error('nama_user') ? 'is-invalid' : '' ?>" id="nama_user" placeholder="Tuliskan Nama Lengkap Anda">
                                        </div>
                                        <div class="invalid-feedback">
                                            <?php echo form_error('nama_user') ?>
                                        </div>
                                    </div>
                                    <!-- username -->
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Username</label>
                                        <div class="col-sm-8">
                                            <input type="text" name="username" class="form-control <?php echo form_error('username') ? 'is-invalid' : '' ?>" id="username" placeholder="Username">
                                        </div>
                                        <div class="invalid-feedback">
                                            <?php echo form_error('username') ?>
                                        </div>
                                    </div>
                                    <!-- email -->
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Email</label>
                                        <div class="col-sm-8">
                                            <input type="email" name="email" class="form-control <?php echo form_error('email') ? 'is-invalid' : '' ?>" id="email" placeholder="Masukkan email anda">
                                        </div>
                                        <div class="invalid-feedback">
                                            <?php echo form_error('email') ?>
                                        </div>
                                    </div>
                                    <!-- password -->
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Password</label>
                                        <div class="col-sm-8">
                                            <input type="password" name="password" class="form-control <?php echo form_error('password') ? 'is-invalid' : '' ?>" id="password" placeholder="password">
                                        </div>
                                        <div class="invalid-feedback">
                                            <?php echo form_error('password') ?>
                                        </div>
                                    </div>
                                    <!-- Konfirm Password -->
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Konfirmasi Password</label>
                                        <div class="col-sm-8">
                                            <input type="password" name="password2" class="form-control" id="password" placeholder="konfirmasi password">
                                        </div>

                                    </div>
                                    <!-- tanggal lahir -->
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Tanggal Lahir</label>
                                        <div class="col-sm-8">
                                            <input type="date" name="tanggal_lahir" class="form-control <?php echo form_error('password') ? 'is-invalid' : '' ?>" id="lahir admin" name="lahiradmin">
                                        </div>
                                        <div class="invalid-feedback">
                                            <?php echo form_error('tanggal_lahir') ?>
                                        </div>
                                    </div>
                                    <!-- Jenis Kelamin -->
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Jenis Kelamin</label>
                                        <div class="col-sm-8">
                                            <select class="custom-select form-control  <?php echo form_error('gender') ? 'is-invalid' : '' ?>" name="jenis_kelamin" id="gender" required>
                                                <option selected>Jenis Kelamin</option>
                                                <option value="L">Laki - Laki</option>
                                                <option value="P">Perempuan</option>
                                            </select>
                                        </div>
                                        <div class="invalid-feedback">
                                            <?php echo form_error('gender') ?>
                                        </div>
                                    </div>
                                    <!-- Nomer Telepon -->
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Nomer Telepon</label>
                                        <div class="input-group col-sm-8">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">+62</span>
                                            </div>
                                            <input type="text" name="no_hp" class="form-control <?php echo form_error('no_hp') ? 'is-invalid' : '' ?>" name="phone" placeholder="Nomor Telepon" required>
                                        </div>
                                    </div>
                                    <!-- Alamat Lengkap -->
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Alamat Lengkap</label>
                                        <div class="input-group col-sm-8">
                                            <div class="input-group">
                                                <textarea class="form-control <?php echo form_error('alamat') ? 'is-invalid' : '' ?>" name="alamat" id="alamat" cols="30" rows="5" placeholder="tuliskan alamat lengkap anda"></textarea>
                                            </div>
                                            <div class="invalid-feedback">
                                                <?php echo form_error('alamat') ?>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Foto Profile -->
                                    <div class="form-group row">
                                        <label for="deskripsi" class="col-sm-3 col-form-label">Upload Foto Profil</label>
                                        <div class="input-group col-sm-8">
                                            <div class="custom-file">
                                                <input type="file" name="foto_profil" class="custom-file-input <?php echo form_error('foto_profil') ? 'is-invalid' : '' ?>" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
                                                <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                                            </div>
                                            <div class="invalid-feedback">
                                                <?php echo form_error('foto_profil') ?>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- button -->
                                    <div class="form-group row">
                                        <div class="input-group offset-sm-10 col-sm-4">
                                            <input class="btn btn-success" type="submit" name="btn" value="Save" />
                                        </div>
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