<!DOCTYPE html>
<html>

<?php $this->load->view('user/_partials/head.php'); ?>

<body>

    <?php $this->load->view('user/_partials/navbar.php'); ?>

    <div class="container mb-5" style="margin-top: 100px;">
        <div class="row">
            <div class="col-sm-8">
                <div class="card">
                    <div class="card-header">
                        <h3><i class="bi-person-plus-fill mr-2"></i> Buat Akun</h3>
                    </div>
                    <!-- Form Daftar -->
                    <div class="card-body py-5 px-5">
                        <form action='C_Register/prosesTambah' onsubmit="return validation()" method="POST" id="register_form">
                            <div id="alert_msg">
                                <?php
                                if ($this->session->flashdata('msg') !== null) {
                                ?>
                                    <div class="alert alert-info"><?php echo $this->session->flashdata('msg') ?></div>
                                <?php
                                }
                                ?>
                            </div>
                            <!-- Nama -->
                            <div class="form-group row">
                                <label for="name" class="col-md-3 col-form-label">Nama <sup style="color: red;">*</sup></label>
                                <div class="col-md-8">
                                    <input type="text" id="name" name="name" class="form-control" placeholder="Nama Lengkap" value="<?php echo $this->session->flashdata('name') ?>" maxlength="45" onfocus="removeAlert()" required>
                                </div>
                            </div>
                            <!-- Username -->
                            <div class="form-group row">
                                <label for="username" class="col-md-3 col-form-label">Username <sup style="color: red;">*</sup></label>
                                <div class="col-md-8">
                                    <input type="text" id="username_register" name="username_register" class="form-control" placeholder="Username" value="<?php echo $this->session->flashdata('username_register') ?>" maxlength="45" onfocus="removeAlert()" required>
                                </div>
                            </div>
                            <!-- Email -->
                            <div class="form-group row">
                                <label for="email_register" class="col-md-3 col-form-label">Email <sup style="color: red;">*</sup></label>
                                <div class="col-md-8">
                                    <input type="email" id="email_register" name="email_register" class="form-control" aria-describedby="emailHelp" value="<?php echo $this->session->flashdata('email_register') ?>" placeholder="Email" maxlength="45" onfocus="removeAlert()" required>
                                </div>
                            </div>
                            <!-- Tanggal Lahir -->
                            <div class="form-group row">
                                <label for="birthdate" class="col-md-3 col-form-label">Tanggal Lahir <sup style="color: red;">*</sup></label>
                                <div class="col-md-8">
                                    <div class="input-group">
                                        <input type="date" class="form-control" id="birthdate" name="birthdate" value="<?php echo $this->session->flashdata('birthdate') ?>" onfocus="removeAlert()" required>
                                    </div>
                                </div>
                                <div class="col-md-1"></div>
                            </div>
                            <!-- Jenis Kelamin -->
                            <div class="form-group row">
                                <label for="gender" class="col-md-3 col-form-label">Jenis Kelamin <sup style="color: red;">*</sup></label>
                                <div class="col-md-8">
                                    <select class="custom-select" id="gender" name="gender" onfocus="removeAlert()" required>
                                        <option value="#" <?php echo $this->session->flashdata('gender') == '#' ? 'selected' : '' ?>>-- Jenis Kelamin --</option>
                                        <option value="L" <?php echo $this->session->flashdata('gender') == 'L' ? 'selected' : '' ?>>Laki - Laki</option>
                                        <option value="P" <?php echo $this->session->flashdata('gender') == 'P' ? 'selected' : '' ?>>Perempuan</option>
                                    </select>
                                </div>
                            </div>
                            <!-- No Hp -->
                            <div class="form-group row">
                                <label for="phone" class="col-md-3 col-form-label">Telepon <sup style="color: red;">*</sup></label>
                                <div class="input-group col-md-8">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">+62</span>
                                    </div>
                                    <input type="tel" class="form-control" pattern="[0-9]{13}" name="phone" id="phone" value="<?php echo $this->session->flashdata('phone') ?>" placeholder="8xxxxxxxxxx" maxlength="15" onfocus="removeAlert()" required>
                                </div>
                                <div class="col-md-1"></div>
                            </div>
                            <!-- Alamat -->
                            <div class="form-group row">
                                <label for="phone" class="col-md-3 col-form-label">Alamat <sup style="color: red;">*</sup></label>
                                <div class="input-group col-md-8">
                                    <textarea name="alamat" class="form-control" id="alamat" cols="50" rows="10" style="resize: none" placeholder="Alamat domisili" onfocus="removeAlert()" required><?php echo $this->session->flashdata('alamat') ?></textarea>
                                </div>
                            </div>
                            <!-- Password -->
                            <div class="form-group row">
                                <label for="password" class="col-md-3 col-form-label">Password <sup style="color: red;">*</sup></label>
                                <div class="col-md-8">
                                    <input type="password" id="password_register" name="password_register" class="form-control" placeholder="Password" maxlength="255" onfocus="removeAlert()" required>
                                    <input type="password" id="password_register_confirm" name="password_register_confirm" class="form-control mt-3" placeholder="Konfirmasi Password" maxlength="255" onfocus="removeAlert()" required>
                                </div>
                            </div>
                            <!-- Term -->
                            <div class="form-group row">
                                <div class="col-md-3"></div>
                                <div class="col-md-8 form-check">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="term" required>
                                        <label class="custom-control-label" for="term">Saya telah membaca dan menyetujui <a href="">Syarat dan Ketentuan</a></label>
                                    </div>
                                </div>
                                <div class="col-md-1"></div>
                            </div>
                            <!-- Button -->
                            <div class="form-group row">
                                <div class="col-md-3"></div>
                                <div class="col-md-8"><button type="submit" class="btn btn-primary btn-lg btn-block mt-3">Daftar</button></div>
                                <div class="col-md-1"></div>
                            </div>
                        </form>
                    </div>
                    <!-- End Form Daftar -->
                </div> <!-- Card -->
            </div> <!-- Grid for Daftar -->

            <!-- Register Sidebar -->
            <div class="col-sm-4 reg-sidebar">
                <div class="reg-sidebar-inner text-center">
                    <div class="reg-text-box p-3">
                        <i class="bi-images" style="color: #b19cd9; font-size: 2em;"></i>
                        <h4>Pasang Iklan Gratis</h4>
                        <p style="font-size: 14px;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis mollitia non odit distinctio a nam dignissimos placeat dolorum incidunt commodi, pariatur omnis. Nemo laborum explicabo assumenda iste nihil quasi vel?</p>
                    </div>
                    <div class="reg-text-box p-3">
                        <i class="bi-pencil-fill" style="color: cadetblue; font-size: 2em;"></i>
                        <h4>Buat dan Kelola Item</h4>
                        <p style="font-size: 14px;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit repudiandae molestiae, exercitationem praesentium, dolore maxime et quaerat, blanditiis dignissimos nisi dicta quidem minima? Harum ipsam optio molestiae? Laudantium, consequuntur dolore?</p>
                    </div>
                    <div class="reg-text-box p-3">
                        <i class="bi-heart-fill" style="color: pink; font-size: 2em;"></i>
                        <h4>Buat daftar iklan Favorit Anda.</h4>
                        <p style="font-size: 14px;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis rerum consequatur fuga obcaecati. Eius architecto corrupti, dolorem magni nobis ad veniam sint iure sunt est repellat perferendis sapiente sequi necessitatibus.</p>
                    </div>
                </div>
            </div>
        </div> <!-- Row -->
    </div> <!-- Container -->
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
</body>

<?php $this->load->view('user/_partials/footer.php'); ?>

</html>