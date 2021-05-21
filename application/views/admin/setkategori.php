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
                                        <li class="breadcrumb-item">Master Administrator</li>
                                        <li class="breadcrumb-item active">Pengaturan Kategori</li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.content-header -->
            <!-- Main content -->
            <section class="content container">
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
                        <h3><strong>Pengaturan Kategori</strong></h3>
                    </div>
                    <div class="card-body">
                        <a href="<?php echo site_url('tambahkategori') ?>" class="btn btn-primary"><i class="bi-plus"></i> Tambah Kategori</a>
                        <div id="adminlist_wrapper">
                            <div class="row">
                                <div class="col-12">
                                    <table class="table table-striped dataTable dtr-inline" aria-describedby="adminlist_info" role="grid" id="adminlist">
                                        <thead class="thead-dark">
                                            <tr>
                                                <th scope="col" width="10%">No.</th>
                                                <th scope="col">Nama Kategori</th>
                                                <th scope="col" width="15%">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $i = 1;
                                            foreach (@$allkat as $value) { ?>
                                                <tr>
                                                    <td><?php echo $i ?></td>
                                                    <td><?php echo $value->nama_kategori ?></td>
                                                    <td>
                                                        <a type="button" class="btn btn-primary" data-tooltip="tooltip" data-placement="bottom" title="Lihat Detail" href="<?php echo site_url('kategoriedit') . '?id=' . $value->idkategori ?>">
                                                            <i class="bi bi-pencil-square"></i>
                                                        </a>
                                                        <a type="button" class="btn btn-danger text-white" data-target="#deleteModal" role="button" data-tooltip="tooltip" data-toggle="modal" data-placement="bottom" title="Hapus" onclick="katdelete(<?php echo $value->idkategori ?>)">
                                                            <i class="bi bi-trash-fill"></i>
                                                        </a>
                                                    </td>

                                                </tr>
                                            <?php
                                                $i += 1;
                                            }
                                            ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.content -->
                </div>
            </section>
        </div>
        <!-- /.content-wrapper -->
    </div>
    <!-- modal delete -->
    <div class="modal fade" tabindex="-1" id="deleteModal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Hapus Kategori</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>Apakah anda yakin ingin menghapus (kategori)?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-danger" id="deleteButton">Delete</button>
                </div>
            </div>
        </div>
    </div>
    <?php $this->load->view("admin/_partials/footer.php") ?>
    <script>
        $(function() {
            $("#adminlist").DataTable({
                "responsive": true,
                "lengthChange": false,
                "autoWidth": false,
                //"buttons": [ "excel", "pdf", "print"]
            }).buttons().container().appendTo('#adminlist_wrapper .col-md-6:eq(0)');
        });

        const katdelete = (id) => {
            const delete_button = document.getElementById('deleteButton')
            delete_button.addEventListener('click', () => {
                location.href = 'deletekategori?id=' + id
            })
        }
    </script>
</body>

</html>