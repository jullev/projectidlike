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
                                        <li class="breadcrumb-item active">Edit Admin</li>
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
                                            <center>FORM EDIT ADMIN</center>
                                        </strong></h3>
                                </span>
                            </div>
                            <div class="card-body p-5 bg-light">
								<form action="updateadmin" method="POST">
									<div class="form-group row">
										<label class="col-sm-3 col-form-label">Id Admin</label>
										<div class="col-sm-8">
											<input type="text" class="form-control" id="idadmin" placeholder="Tuliskan id admin anda" disabled="tru"
												   value="<?php
												   echo @$detailuser[0]->iduser;
												   ?>">
										</div>
									</div>
                                    <!-- nama -->
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Nama Lengkap</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" id="namaadmin" placeholder="Tuliskan Nama Lengkap Anda"
											value="<?php
											echo @$detailuser[0]->nama_user;
											?>">
                                        </div>
                                    </div>
                                    <!-- username -->
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Username</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" id="useradmin" placeholder="Username"
												   value="<?php
												   echo @$detailuser[0]->username;
												   ?>"
											>
                                        </div>
                                    </div>
                                    <!-- email -->
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Email</label>
                                        <div class="col-sm-8">
                                            <input type="email" class="form-control" id="emailadmin" placeholder="Masukkan email anda" name="emailadmin"
												   value="<?php
												   echo @$detailuser[0]->email;
												   ?>"
											>
                                        </div>
                                    </div>
                                    <!-- password -->
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Password</label>
                                        <div class="col-sm-8">
                                            <input type="password" class="form-control" id="passadmin" placeholder="password">
                                        </div>
                                    </div>
                                    <!-- Konfirm Password -->
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Konfirmasi Password</label>
                                        <div class="col-sm-8">
                                            <input type="password" class="form-control" id="passadmin" placeholder="konfirmasi password">
                                        </div>
                                    </div>
                                    <!-- tanggal lahir -->
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Tanggal Lahir</label>
                                        <div class="col-sm-8">
                                            <input type="date" class="form-control" id="lahir admin" name="lahiradmin"
												   value="<?php
												   echo @$detailuser[0]->tanggal_lahir;
												   ?>"
											>
                                        </div>
                                    </div>
                                    <!-- Jenis Kelamin -->
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Jenis Kelamin</label>
                                        <div class="col-sm-8">
                                            <select class="custom-select" id="gender" required>
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
                                            <input type="text" class="form-control" name="phone" placeholder="Nomor Telepon" required
												   value="<?php
												   echo @$detailuser[0]->no_hp;
												   ?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="deskripsi" class="col-sm-3 col-form-label">Upload Foto Profil</label>
                                        <div class="input-group col-sm-8">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
                                                <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- button -->
                                    <div class="form-group row">
                                        <div class="input-group offset-sm-10 col-sm-4">
                                            <button type="submit" class="btn btn-primary">Simpan</button>
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
