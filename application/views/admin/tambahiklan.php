<!DOCTYPE html>
<html lang="en">

<!-- Head -->
<?php $this->load->view('admin/_partials/head'); ?>

<body class="hold-transition sidebar-collapse sidebar-mini layout-fixed">
    <div class="wrapper">
        <!-- Navbar -->
        <?php $this->load->view('admin/_partials/navbar'); ?>

        <!-- Sidebar -->
        <?php $this->load->view('admin/_partials/sidebar'); ?>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <ol class="breadcrumb float-sm-left">
                                        <li class="breadcrumb-item"><a href="<?php echo site_url('admin') ?>">Home</a></li>
                                        <li class="breadcrumb-item active">Tambah Iklan</li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>

            <!-- Main Content -->
            <section class="content container">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <!-- card header -->
                            <div class="card-header">
                                <h3>
                                    <strong>
                                        Tambah Iklan
                                    </strong>
                                </h3>
                            </div>
                            <!-- card-header end -->
                            <!-- card-body -->
                            <div class="card-body">
                                <form action="<?php echo site_url('simpaniklan') ?>" method="POST" onsubmit="return validation()" onclick="removeAlert()" name="insert-iklan" enctype="multipart/form-data"">
                                <div id=" alert">
                                    <?php
                                    if (isset($status)) {
                                        if ($status == 'success') {
                                    ?>
                                            <div class="alert alert-success"><?php echo $msg ?></div>
                                        <?php
                                        } else {
                                        ?>
                                            <div class="alert alert-danger"><?php echo $msg ?></div>
                                    <?php
                                        }
                                    }
                                    ?>
                            </div>
                            <div class=" form-group">
                                <label for="judul">Judul</label>
                                <input type="text" name="judul" id="judul" class="form-control" required placeholder="tambahkan judul iklan">
                            </div>
                            <div class="form-group">
                                <label for="deskripsi" class="col-md-3 col-form-label">Deskripsi <sup style="color: tomato">*</sup></label>
                                <textarea class="form-control" name="contents" id="summernote" required>
                                        <small>Deskripsikan apa yang membuat iklan anda menarik dan unik.</small>
                                    </textarea>
                            </div>
                            <div class="form-group">
                                <label for="kategori">Kategori</label>
                                <select class="custom-select" name="kategori" id="kategori" required>
                                    <option value="#" selected>-- Pilih Kategori --</option>
                                    <?php
                                    foreach ($kategori as $kat) {
                                    ?>
                                        <option value="<?php echo $kat->idkategori ?>"><?php echo $kat->nama_kategori ?></option>
                                    <?php
                                    }
                                    ?>

                                </select>
                            </div>
                            <div class="form-group">
                                <label for="">Upload Gambar</label>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="img" name="img" aria-describedby="img" accept="image/jpeg, image/png">
                                    <label class="custom-file-label" for="img">-- Pilih Gambar --</label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="harga">Harga</label>
                                <div class="input-group">
                                    <div class="input-group-prepend ">
                                        <span class="input-group-text">Rp </span>
                                    </div>
                                    <input type="text" id="harga" onkeypress="isInputNumber(event)" class="form-control" placeholder="Contoh: 15000" name="harga" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="deadline">Deadline</label>
                                <div class="input-group">
                                    <input type="date" name="deadline" id="deadline" min="<?php echo date('Y-m-d') ?>" class="form-control" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="kota">Kota</label>
                                <select class="selectpicker form-control" name="kota" id="kota" data-live-search="true" required>
                                    <option value="#">-- Pilih Kota/Kabupaten --</option>
                                    <?php
                                    foreach ($kabupaten as $kab) {
                                    ?>
                                        <option value="<?php echo $kab->id_kabupaten ?>"><?php echo $kab->nama_kabupaten ?></option>
                                    <?php
                                    }
                                    ?>
                                </select>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <button class="btn btn-block btn-primary" type="submit">Tambah</button>
                                </div>
                            </div>
                            </form>
                        </div>
                        <!-- card-body end -->
                    </div>
                    <!-- card end -->
                </div>
                <!-- col end-->
        </div>
        <!-- row end -->
        </section>
        <!-- Main Content End -->
    </div>
    <!-- Content Wrapper End -->

    <!-- Footer -->
    <?php $this->load->view('admin/_partials/footer'); ?>
    </div>
    <!-- JS -->
    <script>
        const alert = document.getElementById('alert')
        const validation = () => {

            const kategori = document.forms['insert-iklan']['kategori'].value
            // Upload file skip dulu
            // const gambar = document.forms['insert-iklan']['gambar'].value
            const harga = document.forms['insert-iklan']['harga'].value
            const kota = document.forms['insert-iklan']['kota'].value

            if (kategori === "#") {
                alert.innerHTML = "<div class='alert alert-danger'>Kategori belum terisi.</div>"
                location.href = "#tambahiklan-container"
                return false
            } else if (isNaN(harga) || parseFloat(harga) < 0) {
                alert.innerHTML = "<div class='alert alert-danger'>Pastikan data harga sesuai dengan format.</div>"
                location.href = "#tambahiklan-container"
                return false
            } else if (kota === "#") {
                alert.innerHTML = "<div class='alert alert-danger'>Data kota belum terisi.</div>"
                location.href = "#tambahiklan-container"
                return false
            }
        }

        const removeAlert = () => {
            alert.innerHTML = "";
        }
    </script>

</body>

</html>