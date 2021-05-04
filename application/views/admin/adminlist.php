  <!DOCTYPE html>
  <html>
  <?php $this->load->view("admin/_partials/head.php") ?>
  <!-- <body class="hold-transition sidebar-mini layout-fixed"> Original code -->

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
                                    <li class="breadcrumb-item active">List Admin</li>
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
              <div class="card-body">
                <section class="content">
                <table class="table table">
                  <thead class="thead-dark">
                      <tr>
                        <th scope="col">No.</th>
                        <th scope="col">Nama Admin</th>
                        <th scope="col">Manajemen Admin</th>
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
                </section>
              </div>
              <!-- /.content -->
            </div>
          </div>
        </div>
      </section>
      <!-- /.content-wrapper -->
    </div>
      <?php $this->load->view("admin/_partials/footer.php") ?>
  </body>

  </html>
