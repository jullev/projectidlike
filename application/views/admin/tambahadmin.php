<!DOCTYPE html>
<html>
<?php $this->load->view("admin/_partials/head.php")?>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <?php $this->load->view("admin/_partials/navbar.php")?>

  <!-- Main Sidebar Container -->
  <?php $this->load->view("admin/_partials/sidebar.php")?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Tambah Admin</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Tambah Admin</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
    <form>
        <!-- nama -->
        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Nama Lengkap</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="tambahadmin" placeholder="Nama">
                </div>
        </div>
        <!-- username -->
        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Username</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="useradmin" placeholder="Username">
                </div>
        </div>
        <!-- password -->
        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Password</label>
                <div class="col-sm-8">
                    <input type="password" class="form-control" id="passadmin" placeholder="password">
                </div>
        </div>
        <!-- Konfirm Password -->
        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Konfirmasi Password</label>
            <div class="col-sm-8">
                <input type="password" class="form-control" id="passadmin" placeholder="konfirmasi password">
            </div>
        </div>
        <!-- tanggal lahir -->
        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Tanggal Lahir</label>
            <div class="col-sm-8">
                <input type="date" class="form-control" id="lahir admin" name="lahiradmin">
            </div>
        </div>
        <!-- Jenis Kelamin -->
        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Tanggal Lahir</label>
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
            <label class="col-sm-2 col-form-label">Nomer Telepon</label>
            <div class="col-sm-8">
                <div class="input-group-prepend">
                    <span class="input-group-text">+62</span>
                    <input type="text" class="form-control" name="phone" placeholder="Nomor Telepon" required>
                </div>
            </div>
        </div>
        
        <button type="button" class="btn btn-primary">Submit</button>
    </form>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <?php $this->load->view("admin/_partials/footer.php")?>
</body>
</html>
