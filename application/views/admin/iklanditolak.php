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
                                        <li class="breadcrumb-item active">List Iklan Status Ditolak</li>
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
                        <?php
                        if (isset($status)) {
                            if ($status == "success") {
                        ?>
                                <div class="alert alert-success"><?php echo $msg ?><button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button></div>
                            <?php
                            } else {
                            ?>
                                <div class="alert alert-danger"><?php echo $msg ?><button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button></div>
                        <?php
                            }
                        }
                        ?>
                        <div class="card">
                            <div class="card-header">
                                <h3><strong>Iklan Ditolak</strong></h3>
                            </div>
                            <div class="card-body">
                                <div id="adsAccepted_wrapper">
                                    <table class="table table-striped" id="adsAccepted">
                                        <thead class="thead-dark">
                                            <tr>
                                                <th scope="col" class="align-top">No.</th>
                                                <th scope="col" class="align-top">Nama Pekerjaan</th>
                                                <th scope="col" class="align-top">Detail</th>
                                                <th scope="col" class="align-top">Tanggal Posting</th>
                                                <th scope="col" class="align-top">Deadline</th>
                                                <th scope="col" class="align-top">Harga</th>
                                                <th scope="col" class="align-top">Jumlah Hit</th>
                                                <th scope="col" class="align-top">Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            //var_dump(@$kegiatan);
                                            foreach (@$dataIklan as $value) { ?>
                                                <tr>
                                                    <td><?php echo $value->idkerjaan ?></td>
                                                    <td><?php echo $value->judul_kerjaan ?></td>
                                                    <td><b><?php echo $value->deskripsi ?></b><br>
                                                    <td><b><?php echo $value->tanggal_submit ?></b><br>
                                                    <td><b><?php echo $value->deadline ?></b><br>
                                                    <td><b><?php echo $value->harga ?></b><br>
                                                    <td><b><?php echo $value->hit ?></b><br>
                                                    <td class="d-flex">
                                                        <a type="button" class="btn btn-danger text-white" data-target="#deleteModal" role="button" data-tooltip="tooltip" data-toggle="modal" data-placement="bottom" title="Hapus" onclick="userdelete(<?php echo $value->idkerjaan ?>)">
                                                            <i class="bi bi-trash-fill"></i>
                                                        </a>
                                                    </td>

                                                </tr>
                                            <?php
                                                //$total_dana+=$value->total;
                                            }
                                            ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!-- /.content -->
                        </div>
                    </div>
                </div>
            </section>
            <!-- /.content-wrapper -->
        </div>

        <!-- modal delete -->
        <div class="modal fade" tabindex="-1" id="deleteModal">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Hapus Iklan</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p>Yakin kah anda ingin menghapus iklan ini?</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary" id="deleteButton">Delete</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Footer -->
        <?php $this->load->view("admin/_partials/footer.php") ?>
        <script>
            $(function() {
                $("#adsAccepted").DataTable({
                    "responsive": true,
                    "lengthChange": false,
                    "autoWidth": false,
                    //"buttons": [ "excel", "pdf", "print"]
                }).buttons().container().appendTo('#adsAccepted_wrapper .col-md-6:eq(0)');
            });

            const userdelete = (id) => {
                const delete_button = document.getElementById('deleteButton')
                delete_button.addEventListener('click', () => {
                    location.href = 'deleteiklan?id=' + id
                })
            }
        </script>
</body>

</html>