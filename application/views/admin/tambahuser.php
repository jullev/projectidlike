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
                        <div id="alert_msg">
                            <?php
                            if ($this->session->flashdata('msg') !== null) {
                            ?>
                                <div class="alert alert-warning"><?php echo $this->session->flashdata('msg') ?><button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button></div>
                            <?php
                            }
                            ?>
                        </div>
                        <div class="card">
                            <div class="card-header">
                                <span>
                                    <h3><strong>
                                            <center>FORM TAMBAH USER</center>
                                        </strong></h3>
                                </span>
                            </div>
                            <div class="card-body p-5 bg-light">
                                <form action="C_Register/prosesTambahUser" onsubmit=" return validation()" method="POST" id="register_form">

                                    <!-- nama -->
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Nama Lengkap</label>
                                        <div class="col-sm-8">
                                            <input type="text" name="name" class="form-control" id="name" value="<?php echo $this->session->flashdata('name') ?>" maxlength="45" onfocus="removeAlert()" placeholder="Tuliskan Nama Lengkap Anda" required>
                                        </div>
                                    </div>
                                    <!-- username -->
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Username</label>
                                        <div class="col-sm-8">
                                            <input type="text" name="username_register" class="form-control" id="username" value="<?php echo $this->session->flashdata('username') ?>" maxlength="45" onfocus="removeAlert()" placeholder="Username" required>
                                        </div>

                                    </div>
                                    <!-- email -->
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Email</label>
                                        <div class="col-sm-8">
                                            <input type="email" class="form-control" name="email_register" aria-describedby="emailHelp" value="<?php echo $this->session->flashdata('email_register') ?>" placeholder="Masukkan email anda" maxlength="45" onfocus="removeAlert()" required>
                                        </div>

                                    </div>
                                    <!-- password -->
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Password</label>
                                        <div class="col-sm-8">
                                            <input type="password" name="password_register" class="form-control" maxlength="255" onfocus="removeAlert()" id="password" placeholder="password" required>
                                        </div>

                                    </div>
                                    <!-- Konfirm Password -->
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Konfirmasi Password</label>
                                        <div class="col-sm-8">
                                            <input type="password" name="password_register_confirm" class="form-control" id="password" placeholder="konfirmasi password" maxlength="255" onfocus="removeAlert()" required>
                                        </div>

                                    </div>
                                    <!-- tanggal lahir -->
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Tanggal Lahir</label>
                                        <div class="col-sm-8">
                                            <input type="date" name="birthdate" class="form-control" id="lahir admin" name="lahiradmin">
                                        </div>

                                    </div>
                                    <!-- Jenis Kelamin -->
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Jenis Kelamin</label>
                                        <div class="col-sm-8">
                                            <select class="custom-select" id="gender" name="gender" onfocus="removeAlert()" required>
                                                <option value="#" <?php echo $this->session->flashdata('gender') == '#' ? 'selected' : '' ?>>-- Jenis Kelamin --</option>
                                                <option value="L" <?php echo $this->session->flashdata('gender') == 'L' ? 'selected' : '' ?>>Laki - Laki</option>
                                                <option value="P" <?php echo $this->session->flashdata('gender') == 'P' ? 'selected' : '' ?>>Perempuan</option>
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
                                            <input type="text" pattern="[0-9]{11}" name="phone" class="form-control" name="phone" placeholder="8xxxxxxxxxxxx" maxlength="15" value="<?php echo $this->session->flashdata('phone') ?>" required>
                                        </div>
                                    </div>
                                    <!-- Alamat Lengkap -->
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Alamat Lengkap</label>
                                        <div class="input-group col-sm-8">
                                            <div class="input-group">
                                                <textarea class="form-control" name="alamat" id="alamat" cols="30" rows="5" placeholder="tuliskan alamat lengkap anda"><?php echo $this->session->flashdata('alamat') ?></textarea>
                                            </div>

                                        </div>
                                    </div>
                                    <!-- Foto Profile -->
                                    <div class="form-group row">
                                        <label for="deskripsi" class="col-sm-3 col-form-label">Upload Foto Profil</label>
                                        <div class="input-group col-sm-8">
                                            <div class="custom-file">
                                                <input type="file" name="foto_profil" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
                                                <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                                            </div>

                                        </div>
                                    </div>
                                    <!-- button -->
                                    <div class="form-group row">
                                        <div class="input-group col-sm-12 ">
                                            <button type="submit" class="btn btn-primary btn-lg btn-block mt-3">Daftarkan</button>
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
        <script>
            // Get id alert
            const alert = document.getElementById("alert_msg")

            // Form Validation for gender, password
            const validation = () => {
                const gender = document.forms["register_form"]["gender"].value
                const pwd = document.forms["register_form"]["password_register"].value
                const pwd_confirm = document.forms["register_form"]["password_register_confirm"].value


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