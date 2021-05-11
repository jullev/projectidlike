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
                        <div class="card">
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
                    <div class="card">
                        <!-- card header -->
                        <div class="card-header">
                            <span>
                                <h3><strong>Management User</strong></h3>
                            </span>
                        </div>
                        <!-- card body -->
                        <div class="card-body">
                            <div id="usermanage_wrapper">
                                <div class="col-12">
                                    <!-- table management user -->
                                    <table class="table table-striped" id="usermanage">
                                        <thead class="thead-dark">
                                            <tr>
                                                <th scope="col">No.</th>
                                                <th scope="col">Nama</th>
                                                <th scope="col">Email</th>
                                                <th scope="col">No. Hp</th>
                                                <th scope="col">Star Point</th>
                                                <th scope="col">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $i = 1;
                                            foreach (@$alluser as $value) { ?>
                                                <tr>
                                                    <td><?php echo $i ?></td>
                                                    <td><?php echo $value->nama_user ?></td>
                                                    <td><?php echo $value->email ?></td>
                                                    <td><?php echo $value->no_hp ?></td>
                                                    <td>
                                                        <i class="bi-star-fill text-warning"></i>
                                                        <i class="bi-star-fill text-warning"></i>
                                                        <i class="bi-star-fill text-warning"></i>
                                                        <i class="bi-star-fill text-warning"></i>
                                                        <i class="bi-star-half text-warning"></i>
                                                    </td>
                                                    <td>
                                                        <a type="button" class="btn btn-primary" data-toggle="tooltip" data-placement="bottom" title="Lihat Detail" href="<?php echo site_url('admin/detailuser') . '?id=' . $value->iduser ?>">
                                                            <i class="bi bi-eye-fill"></i>
                                                        </a>
                                                        <a type="button" class="btn btn-danger" data-toggle="tooltip" data-placement="bottom" title="Hapus" href="<?php echo site_url('deleteuser') . '?id=' . $value->iduser ?>">
                                                            <i class="bi bi-trash-fill"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                            <?php
                                                $i += 1;
                                            } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php $this->load->view("admin/_partials/footer.php") ?>
    <script>
        $(function() {
            $("#usermanage").DataTable({
                "responsive": true,
                "lengthChange": false,
                "autoWidth": false,
                //"buttons": [ "excel", "pdf", "print"]
            }).buttons().container().appendTo('#usermanage_wrapper .col-md-6:eq(0)');
        });
    </script>
</body>

</html>