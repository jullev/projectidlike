<!doctype html>
<html lang="en">
  <!-- Head -->
  <?php $this->load->view("user/_partials/head") ?>
  <body>
    <!-- Navbar -->
    <?php $this->load->view("user/_partials/navbar") ?>
    
    <main class="container mb-4" style="margin-top: 70px;">
      <div class="row">
        <div class="col-md-3 mb-3">
          <!-- Sidebar -->
          <?php $this->load->view("user/_partials/dashboard_sidebar") ?>
        </div>

        <!-- Col 2 - Main content -->
        <div class="col-md-9">
          <!-- Summary
          <div class="card">
            <div class="card-body p-3 bg-light">
              <div class="row">
                <div class="col-md-10">
                  <a href="">
                    <img src="https://placeimg.com/50/50/people" alt="" style="width: 65px; border: solid 2px #ddd; padding: 2px; vertical-align: middle">
                    <span style="font-size: 18px;" class="ml-1">Akhmad Nur Hidayatulloh</span>
                  </a>
                </div>
                <div class="col-md-2 text-right" style="display: inline-block">
                  <div id="col-left">
                    <i class="bi bi-badge-ad-fill" style="font-size: 3rem"></i>
                  </div>
                  <div id="col-right">
                  0
                    <em>Iklan</em>
                  </div>
                </div>
              </div>
            </div>
          </div> -->
          <!-- Account Management -->
          <div class="card">
            <div class="card-body p-3 bg-light">
              <h4>Halo, Akhmad Nur Hidayatulloh</h4>
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
                      <!-- <div class="form-group row">
                        <div class="col-md-9">
                          <input type="file" name="avatar" id="avatar" class="form-control">
                        </div>
                      </div> -->
                      <div class="form-group row">
                        <label for="avatar" class="col-sm-3 col-form-label">Photo or Avatar</label>
                        <div class="col-sm-9">
                          <div class="custom-file">
                            <input type="file" name="avatar" id="avatar" class="custom-file-input">
                            <label for="avatar" class="custom-file-label">Photo or Avatar</label>
                          </div>
                        </div>
                      </div>
                      
                      <div class="form-group row">
                        <label for="nama" class="col-sm-3 col-form-label">Nama<sup style="color: tomato" >*</sup></label>
                        <div class="col-sm-9">
                          <input type="text" name="nama" id="nama" placeholder="Nama Lengkap" class="form-control" value="<?php echo 'Akhmad Nur Hidayatulloh' ?>" required>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="gender" class="col-sm-3 col-form-label">Jenis Kelamin<sup style="color: tomato" >*</sup></label>
                        <div class="col-sm-9">
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
                        <label for="email" class="col-sm-3 col-form-label">Email<sup style="color: tomato" >*</sup></label>
                        <div class="col-sm-9">
                          <input type="email" name="email" id="email" class="form-control" placeholder="Email" value="<?php echo 'aaa@gmail.com' ?>" required >
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="telp" class="col-sm-3 col-form-label">Telepon<sup style="color: tomato" >*</sup></label>
                        <div class="col-sm-9">
                          <input type="text" name="telp" id="telp" class="form-control" placeholder="Nomor Telepon" value="<?php echo '088888888' ?>" required>
                        </div>
                      </div>
                      <div class="row pr-3">
                        <button type="submit" class="btn btn-primary offset-md-10 col">Perbarui</button>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
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
                        <label for="pwd" class="col-md-3 col-form-label">Password Baru<sup style="color: tomato" >*</sup></label>
                        <div class="col-md-9">
                          <input type="password" name="pwd" id="pwd" class="form-control" placeholder="Password" required>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="pwdC" class="col-md-3 col-form-label">Konfirmasi Password<sup style="color: tomato" >*</sup></label>
                        <div class="col-md-9">
                          <input type="password" name="pwdC" id="pwdC" class="form-control" placeholder="Konfirmasi Password" required>
                        </div>
                      </div>
                      <div class="row pr-3">
                        <button type="submit" class="btn btn-primary offset-md-10 col">Perbarui</button>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
    -->
    <!-- Footer -->
    <?php $this->load->view('user/_partials/footer.php') ?>
  </body>
</html>