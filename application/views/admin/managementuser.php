<!DOCTYPE html>
<html lang="en">
<!-- header -->
<?php $this->load->view("admin/_partials/head.php") ?>


<body class="hold-transition sidebar-collapse sidebar-mini layout-fixed">
    <!-- navbar -->
    <?php $this->load->view("admin/_partials/navbar.php") ?>
    <!-- sidebar -->
    <?php $this->load->view("admin/_partials/sidebar.php") ?>
    <!-- card header content -->
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card shadow">
                            <!-- breadcrumb -->
                            <div class="card-header">
                                <ol class="breadcrumb float-sm-left">
                                    <li class="breadcrumb-item"><a href="<?php echo site_url('admin') ?>">Home</a></li>
                                    <li class="breadcrumb-item active">Management User</li>
                                </ol>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- container -->
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card shadow">
                        <!-- card header -->
                        <div class="card-header flex">
                            <span>
                                <h4><strong>MANAGEMENT USER</strong></h4>
                            </span>
                        </div>
                        <!-- card body -->
                        <div class="card-body">
                            <div class="col-sm-12">

                            </div>
                            <!-- table management user -->
                            <table class="table">
                                <thead class="thead-dark text-center">
                                    <tr>
                                        <th scope="col">No</th>
                                        <th scope="col left">Nama Pengunggah</th>
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
                        <!-- card footer -->
                        <div class="card-footer">
                            <div class="row">
                                <div class="col-sm-12 col-md-5">
                                    <div class="dataTables_info" id="dataTable" role="status" aria-live="polite">Showing 1 to 10 of 22 entries</div>
                                </div>
                                <div class="col-sm-12 col-md-7">
                                    <!-- pagination -->
                                    <ul class="pagination">
                                        <li class="page-item disabled">
                                            <span class="page-link">Previous</span>
                                        </li>
                                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                                        <li class="page-item active" aria-current="page">
                                            <span class="page-link">2</span>
                                        </li>
                                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                                        <li class="page-item">
                                            <a class="page-link" href="#">Next</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php $this->load->view("admin/_partials/footer.php") ?>
</body>

</html>