<!DOCTYPE html>
<html lang="en">

<?php $this->load->view('user/_partials/head.php'); ?>

<body>
    <?php $this->load->view('user/_partials/navbar.php'); ?>

    <div class="container mb-5" style="margin-top: 100px;">
        <div class="row">
            <!-- Sidebar -->
            <div class="col-sm-12 col-md-5 col-lg-3 mn-3">
                <?php $this->load->view("user/dashboard/sidebar") ?>
            </div>

            <!-- Main Content -->
            <div class="col-sm-12 col-md-7 col-lg-9">
                <div class="card">
                    <div class="card-header">
                        <h3><i class="bi-badge-ad"></i> Iklan Saya</h3>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12 col-lg-6">
                                <div class="form-group form-inline">
                                    <div class="form-check">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="pickall">
                                            <label for="pickall" class="custom-control-label">Pilih Semua</label>
                                        </div>
                                    </div>
                                    <button class="ml-2 btn btn-light"><i class="bi-trash"></i>Hapus</button>
                                </div>
                            </div>
                            <div class="col-md-12 col-lg-6 align-items-center">
                                <span class="ml-auto">Cari</span>
                                <div class="form-inline">
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                        </div>
                        <table class="table table-bordered mt-3">
                            <thead class="thead-light">
                                <tr>
                                    <th>No.</th>
                                    <th>Judul</th>
                                    <th>Foto</th>
                                    <th>Hitter</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div> <!-- Row End -->
    </div> <!-- Container End -->
</body>
</html>