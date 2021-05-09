<!doctype html>
<html lang="en">
  <!-- Head -->
  <?php $this->load->view("user/_partials/head") ?>
  <body>
    <!-- Navbar -->
    <?php $this->load->view("user/_partials/navbar") ?>
    
    <main class="container mb-5" style="margin-top: 100px;">
      <div class="row">
        <div class="col-sm-12 col-md-5 col-lg-3 mb-3">
          <!-- Sidebar -->
          <?php $this->load->view("user/dashboard/sidebar") ?>
        </div>

        <!-- Col 2 - Main content -->
        <div class="col-sm-12 col-md-7 col-lg-9">
          <!-- Ringkasan -->
          <div class="card mb-3">
            <div class="card-body">
              <div class="row align-items-center">
                <!-- Nama dan Foto -->
                <div class="col-md-10 col-lg-6 mx-md-auto mx-lg-0">
                  <img src="https://placeimg.com/50/50/people" alt="" class="rounded-circle mr-3">
                  <strong>Akhmad Nur Hidayatulloh</strong>
                </div>
                <div class="col-md-12 col-lg-6 mx-md-auto mx-lg-0 mt-3 mt-md-3 mt-lg-0 d-inline-flex">
                  <!-- Mail -->
                  <div class="card mr-2" style="max-width: 100px;max-height: 50px;">
                    <div class="row no-gutters align-items-center">
                      <div class="col-6 text-center px-2">
                        <i class="bi-envelope-fill" style="font-size: 2rem;"></i>
                      </div>
                      <div class="col-6">
                        <p class="card-text ml-1" style="font-size: 14px;font-weight:bold;line-height: 15px;">
                          <a href="#">0 <br> Mail</a>
                        </p>
                      </div>
                    </div>
                  </div>
                  <!-- Mail End -->
                  <!-- Visit -->
                  <div class="card mr-2" style="max-width: 100px;max-height: 50px;">
                    <div class="row no-gutters align-items-center">
                      <div class="col-6 text-center px-2">
                        <i class="bi-eye-fill" style="font-size: 2rem;"></i>
                      </div>
                      <div class="col-6">
                        <p class="card-text ml-1" style="font-size: 14px;font-weight:bold;line-height: 15px;">
                          <a href="#">0 <br> Visit</a>
                        </p>
                      </div>
                    </div>
                  </div>
                  <!-- Visit End -->
                  <!-- Iklan -->
                  <div class="card mr-2" style="max-width: 100px;max-height: 50px;">
                    <div class="row no-gutters align-items-center">
                      <div class="col-6 text-center px-2">
                        <i class="bi-badge-ad" style="font-size: 2rem;"></i>
                      </div>
                      <div class="col-6">
                        <p class="card-text ml-1" style="font-size: 14px;font-weight:bold;line-height: 15px;">
                          <a href="#">0 <br> Iklan</a>
                        </p>
                      </div>
                    </div>
                  </div>
                  <!-- Iklan End -->
                  <!-- Fav -->
                  <div class="card mr-2" style="max-width: 100px;max-height: 50px;">
                    <div class="row no-gutters align-items-center">
                      <div class="col-6 text-center px-2">
                        <i class="bi-heart-fill" style="font-size: 2rem;"></i>
                      </div>
                      <div class="col-6">
                        <p class="card-text ml-1" style="font-size: 12px;font-weight:bold;line-height: 15px;">
                          <a href="#">0 <br> Favorit</a>
                        </p>
                      </div>
                    </div>
                  </div>
                  <!-- Fav End -->
                </div>
              </div>
            </div>
          </div>
          <!-- Ringkasan End -->
          
          <!-- Account Management -->
          <div class="card">
            <div class="card-body p-3 bg-light">
              <!-- Avatar -->
              <div class="card mt-2">
                <a href="#avatarCollapse" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="avatarCollapse" class="list-group-item-action">
                  <div class="card-header">
                    Photo or Avatar
                  </div>
                </a>
                <div class="collapse show" id="avatarCollapse">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-md-12 text-center">
                        <div class="image">
                          <img src="<?php echo 'https://placeimg.com/50/50/people' ?>" alt="" style="width: 200px; padding: 5px; border: solid 1px #ddd">
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- Avatar End -->

              <!-- Account Details -->
              <div class="card mt-3">
                <a href="#accountCollapse" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="accountCollapse" class="list-group-item-action">
                  <div class="card-header">
                    Account Details
                  </div>
                </a>
                <div class="collapse show" id="accountCollapse">
                  <div class="card-body" style="padding: 45px;">
                    <form action="#" method="POST">
                      <div class="form-group row">
                        <label for="avatar" class="col-lg-3 col-form-label">Photo or Avatar</label>
                        <div class="col-lg-9">
                          <div class="custom-file">
                            <input type="file" name="avatar" id="avatar" class="custom-file-input">
                            <label for="avatar" class="custom-file-label">Photo or Avatar</label>
                          </div>
                        </div>
                      </div>
                      
                      <div class="form-group row">
                        <label for="nama" class="col-lg-3 col-form-label">Nama<sup style="color: tomato" >*</sup></label>
                        <div class="col-lg-9">
                          <input type="text" name="nama" id="nama" placeholder="Nama Lengkap" class="form-control" value="<?php echo 'Akhmad Nur Hidayatulloh' ?>" required>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="gender" class="col-lg-3 col-form-label">Jenis Kelamin<sup style="color: tomato" >*</sup></label>
                        <div class="col-lg-9">
                          <div class="form-check form-check-inline">
                            <input type="radio" name="gender" id="gender1" class="form-check-input" value="Laki-Laki" checked>
                            <label for="gender1" class="form-check-label">Laki-Laki</label>
                          </div>
                          <div class="form-check form-check-inline">
                            <input type="radio" name="gender" id="gender2" class="form-check-input" value="Perempuan">
                            <label for="gender2" class="form-check-label">Perempuan</label>
                          </div>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="email" class="col-lg-3 col-form-label">Email<sup style="color: tomato" >*</sup></label>
                        <div class="col-lg-9">
                          <input type="email" name="email" id="email" class="form-control" placeholder="Email" value="<?php echo 'aaa@gmail.com' ?>" required >
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="telp" class="col-lg-3 col-form-label">Telepon<sup style="color: tomato" >*</sup></label>
                        <div class="col-lg-9">
                          <input type="text" name="telp" id="telp" class="form-control" placeholder="Nomor Telepon" value="<?php echo '088888888' ?>" required>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-0 col-lg-8"></div>
                        <div class="col-md-12 col-lg-4">
                          <button type="submit" class="btn btn-primary btn-block">Perbarui</button>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
              <!-- Account Details End -->

              <!-- Pengaturan -->
              <div class="card mt-3">
                <a href="#settingCollapse" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="settingCollapse" class="list-group-item-action">
                  <div class="card-header">
                    Pengaturan
                  </div>
                </a>
                <div class="collapse show" id="settingCollapse">
                  <div class="card-body" style="padding: 45px;">
                    <form action="#" method="post">
                      <div class="form-group row">
                        <label for="pwd" class="col-lg-3 col-form-label">Password Baru<sup style="color: tomato" >*</sup></label>
                        <div class="col-lg-9">
                          <input type="password" name="pwd" id="pwd" class="form-control" placeholder="Password" required>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="pwdC" class="col-lg-3 col-form-label">Konfirmasi Password<sup style="color: tomato" >*</sup></label>
                        <div class="col-lg-9">
                          <input type="password" name="pwdC" id="pwdC" class="form-control" placeholder="Konfirmasi Password" required>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-0 col-lg-8"></div>
                        <div class="col-md-12 col-lg-4">
                          <button type="submit" class="btn btn-primary btn-block">Perbarui</button>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
              <!-- Pengaturan End -->

            </div> <!-- Card Body -->
          </div> <!-- Card -->
        </div> <!-- Col for Main Content -->
      </div> <!-- Row -->
    </main> <!-- Container -->


    <!-- Footer -->
    <?php $this->load->view('user/_partials/footer.php') ?>
  </body>
</html>