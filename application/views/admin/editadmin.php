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
                        <div id="alert_msg">
                            <?php
                            if ($this->session->flashdata('msg') !== null) {
                            ?>
                                <div class="alert alert-warning"><?php echo $this->session->flashdata('msg') ?></div>
                            <?php
                            }
                            ?>
                        </div>
                        <div class="card">
                            <div class="card-header">
                                <span>
                                    <h3><strong>
                                            <center>FORM EDIT ADMIN</center>
                                        </strong></h3>
                                </span>
                            </div>
                            <div class="card-body p-5 bg-light">
                                <form action="<?php echo site_url('updateadminproses') ?>" onsubmit=" return validation()" method="POST" id="admin_form">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Id Admin</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" name="id" id="idadmin" placeholder="Tuliskan id admin anda" disabled="tru" value="<?php echo @$detailuser[0]->iduser; ?>">
                                        </div>
                                    </div>
                                    <!-- nama -->
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Nama Lengkap</label>
                                        <div class="col-sm-8">
                                            <input type="text" name="name" class="form-control" id="namaadmin" placeholder="Tuliskan Nama Lengkap Anda" value="<?php echo @$detailuser[0]->nama_user; ?>">
                                        </div>
                                    </div>
                                    <!-- username -->
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Username</label>
                                        <div class="col-sm-8">
                                            <input type="text" name="username" class="form-control" id="useradmin" placeholder="Username" value="<?php echo @$detailuser[0]->username; ?>">
                                        </div>
                                    </div>
                                    <!-- email -->
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Email</label>
                                        <div class="col-sm-8">
                                            <input type="email" name="email" class="form-control" id="emailadmin" placeholder="Masukkan email anda" name="emailadmin" value="<?php echo @$detailuser[0]->email; ?>">
                                        </div>
                                    </div>
                                    <!-- password -->
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Password</label>
                                        <div class="col-sm-8">
                                            <input type="password" name="password_register" class="form-control" id="passadmin" placeholder="password">
                                        </div>
                                    </div>
                                    <!-- Konfirm Password -->
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Konfirmasi Password</label>
                                        <div class="col-sm-8">
                                            <input type="password" name="password_register_confirm" class="form-control" id="passadmin" placeholder="konfirmasi password">
                                        </div>
                                    </div>
                                    <!-- tanggal lahir -->
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Tanggal Lahir</label>
                                        <div class="col-sm-8">
                                            <input type="date" name="birthdate" class="form-control" id="lahir admin" name="lahiradmin" value="<?php echo @$detailuser[0]->tanggal_lahir; ?>">
                                        </div>
                                    </div>
                                    <!-- Jenis Kelamin -->
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Jenis Kelamin</label>
                                        <div class="col-sm-8">
                                            <select class="custom-select" name="gender" id="gender" required>
                                                <option value="#" <?php echo @$detailuser[0]->gender == '#' ? 'selected' : '' ?>>-- Jenis Kelamin --</option>
                                                <option value="L" <?php echo @$detailuser[0]->gender == 'L' ? 'selected' : '' ?>>Laki - Laki</option>
                                                <option value="P" <?php echo @$detailuser[0]->gender == 'P' ? 'selected' : '' ?>>Perempuan</option>
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
                                            <input type="text" class="form-control" name="phone" pattern="[0-9]{11}" placeholder="8xxxxxxxxxxx" required value="<?php echo substr(@$detailuser[0]->no_hp, 2); ?>">
                                        </div>
                                    </div>
                                    <!-- Alamat Lengkap -->
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Alamat Lengkap</label>
                                        <div class="input-group col-sm-8">
                                            <div class="input-group">
                                                <textarea class="form-control" name="alamat" id="alamat" cols="30" rows="5" placeholder="tuliskan alamat lengkap anda"><?php echo @$detailuser[0]->alamat; ?></textarea>
                                            </div>

                                        </div>
                                    </div>
                                    <!-- upload file -->
                                    <div class="form-group row">
                                        <label for="deskripsi" class="col-sm-3 col-form-label">Upload Foto Profil</label>
                                        <div class="input-group col-sm-8">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" name="avatar" id="avatar" accept="image/jpeg, image/png" aria-describedby="inputGroupFileAddon01">
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
    </div>
    <!-- confirm password -->
    <script>
        // Get id alert
        const alert = document.getElementById("alert_msg")

        // Form Validation for gender, password
        const validation = () => {
            const gender = document.forms["admin_form"]["gender"].value
            const pwd = document.forms["admin_form"]["password_register"].value
            const pwd_confirm = document.forms["admin_form"]["password_register_confirm"].value


            // Jenis Kelamin
            if (gender === "#") {
                alert.innerHTML = "<div class='alert alert-danger'>Mohon isi jenis kelamin anda</div>"
                return false
            }

            // Password
            if (pwd !== pwd_confirm) {
                alert.innerHTML = "<div class='alert alert-danger'>Password tidak valid, harap ulangi lagi!</div>"
                return false
            }


        }

        // Menghapus alert
        const removeAlert = () => {
            alert.innerHTML = ""
        }
    </script>
    <!-- /.content-wrapper -->
    <?php $this->load->view("admin/_partials/footer.php") ?>
</body>

</html>