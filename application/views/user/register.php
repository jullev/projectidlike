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
                            <form action="C_Register/prosesTambah" method="POST">
                                <!-- Nama -->
                                <div class="form-group row">
                                    <label for="name" class="col-md-3 col-form-label">Nama <sup style="color: red;">*</sup></label>
                                    <div class="col-md-8">
                                        <input type="text" id="name" name="name" class="form-control" placeholder="Nama Lengkap" required>
                                    </div>
                                </div>
                                <!-- Username -->
                                <div class="form-group row">
                                    <label for="username" class="col-md-3 col-form-label">Username <sup style="color: red;">*</sup></label>
                                    <div class="col-md-8">
                                        <input type="text" id="username" name="username" class="form-control" placeholder="Username" required>
                                    </div>
                                </div>
                                <!-- Email -->
                                <div class="form-group row">
                                    <label for="email" class="col-md-3 col-form-label">Email <sup style="color: red;">*</sup></label>
                                    <div class="col-md-8">
                                        <input type="email" id="email" name="email" class="form-control" aria-describedby="emailHelp" placeholder="Email" required>
                                    </div>
                                </div>
                                <!-- Tangga Lahir -->
                                <div class="form-group row">
                                    <label for="birthdate" class="col-md-3 col-form-label">Tanggal Lahir <sup style="color: red;">*</sup></label>
                                    <div class="col-md-8">
                                        <div class="input-group">
                                            <input type="date" class="form-control" id="birthdate" name="birthdate" required>
                                        </div>
                                    </div>
                                    <div class="col-md-1"></div>
                                </div>
                                <!-- No Hp -->
                                <div class="form-group row">
                                    <label for="phone" class="col-md-3 col-form-label">Telepon <sup style="color: red;">*</sup></label>
                                    <div class="input-group col-md-8">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">+62</span>
                                        </div>
                                        <input type="text" class="form-control" name="phone" placeholder="Nomor Telepon" required>
                                    </div>
                                    <div class="col-md-1"></div>
                                </div>
                                <!-- Password -->
                                <div class="form-group row">
                                    <label for="password" class="col-md-3 col-form-label">Password <sup style="color: red;">*</sup></label>
                                    <div class="col-md-8">
                                        <input type="password" id="password" name="password" class="form-control" placeholder="Password" required>
                                        <input type="password" id="password_confirm" name="password_confirm" class="form-control mt-3" placeholder="Konfirmasi Password" required>
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
        
    </body>

    <?php $this->load->view('user/_partials/footer.php'); ?>
    <script >
        $('.datepicker').datepicker({
            format: 'mm/dd/yyyy',
            startDate: '-3d'
        });
    </script>
</html>