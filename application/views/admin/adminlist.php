  <!DOCTYPE html>
  <html>
  <?php $this->load->view("admin/_partials/head.php")?>
  <!-- <body class="hold-transition sidebar-mini layout-fixed"> Original code -->
  <body class="hold-transition sidebar-collapse sidebar-mini layout-fixed"> 
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
              <h1 class="m-0 text-dark">Daftar Admin</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Daftar Admin</li>
              </ol>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->

      <!-- Main content -->
      <section class="content">
        <table class="table table-striped">
           <thead>
              <tr>
                <th scope="col">no</th>
                <th scope="col">Nama Admin</th>
              </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">1</th>
              <td>Mark</td>
              <td>
                <a href="<?php echo site_url('editadmin'); ?>" class="btn btn-warning">Edit</a>
                <button type="button" class="btn btn-danger">Hapus</button>
              </td>
            </tr>
          </tbody>
        </table>
        <a href="<?php echo site_url('tambahadmin'); ?>" class="btn btn-primary">Tambah Admin</a>
      </section>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <?php $this->load->view("admin/_partials/footer.php")?>
  </body>
</html>
