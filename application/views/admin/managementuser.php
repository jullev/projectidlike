<!DOCTYPE html>
<html lang="en">
<?php $this->load->view("admin/_partials/head.php") ?>


<body class="hold-transition sidebar-collapse sidebar-mini layout-fixed">
    <?php $this->load->view("admin/_partials/navbar.php") ?>

    <?php $this->load->view("admin/_partials/sidebar.php") ?>
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-header">
                                <ol class="breadcrumb float-sm-left">
                                    <li class="breadcrumb-item"><a href="<?php echo site_url('admin') ?>">Home</a></li>
                                    <li class="breadcrumb-item active">Management User</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </div>
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-header ">
                            <span>
                                <h4><strong>MANAGEMENT USER</strong></h4>
                            </span>
                        </div>
                        <div class="card-body">
                            <table class="table">
                                <thead class="thead-dark text-center">
                                    <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">Nama Pengunggah</th>
                                        <th scope="col">Riwayat Unggah Iklan</th>
                                        <th scope="col">Detail User</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row" class="text-center">1</th>
                                        <td>Mark</td>
                                        <td class="text-center">12 Unggahan</td>
                                        <td>
                                            <center><button type="button" class="btn btn-primary"><i class="bi bi-person-lines-fill"></i></button></center>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php $this->load->view("admin/_partials/footer.php") ?>
</body>

</html>