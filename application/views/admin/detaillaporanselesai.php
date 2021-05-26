<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html" xmlns="http://www.w3.org/1999/html">
<!-- Head -->
<?php $this->load->view("admin/_partials/head.php") ?>
<!-- <body class="hold-transition sidebar-mini layout-fixed"> Original code -->

<body class="hold-transition sidebar-collapse sidebar-mini layout-fixed">
<div class="wrapper">

	<?php $this->load->view("admin/_partials/navbar.php") ?>

	<!-- Main Sidebar Container -->
	<?php $this->load->view("admin/_partials/sidebar.php") ?>
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
									<li class="breadcrumb-item active">Detail Laporan Selesai Dikerjakan</li>
								</ol>
							</div>
						</div>
					</div>
				</div>
			</div><!-- /.container-fluid -->
		</div>

	<!-- Content Wrapper. Contains page content -->
		<!-- Main Content -->
		<section class="content container">
			<div class="row">
		<div class="col-sm-12 col-md-12 col-lg-9">
            <?php
//            var_dump(@$detailhit);
            foreach (@$detailhit as $value) { ?>

			<form action="<?php echo site_url('starpoint') ?>" method="post">
            <div class="card">
                <div class="card-header">
                    <h3><i class="bi-badge-ad-fill mr-1"></i>&nbsp;Detail Laporan Pekerjaan Yang Sudah Selesai</h3>
                </div>
                <div class="card-body">
                    <div class="form-group row">
                        <label for="judul" class="col-md-3 col-form-label">Judul <sup
                                    style="color:tomato">*</sup></label>
                        <div class="col-md-9">
							<input type="hidden" class="form-control" id="idkerjaan" name="idkerjaan"
								   placeholder="Judul Iklan" required value="<?php echo $value->idkerjaan ?>">
                            <input type="text" class="form-control" id="judul" name="judul"
                                   placeholder="Judul Iklan" required value="<?php echo $value->judul_kerjaan ?>" disabled>

                        </div>
                    </div>
                    <!-- Tangga Lahir -->
                    <div class="form-group row">
                        <label for="birthdate" class="col-md-3 col-form-label">Deadline <sup
                                    style="color: red;">*</sup></label>
                        <div class="col-md-9">
                            <div class="input-group">
                                <input type="text" class="form-control" id="deadline" name="deadline"
                                        value="<?php
                                        $newDate = date('Y-m-d H:i:s', strtotime($value->deadline));
                                        echo $newDate; ?>" disabled>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="deskripsi" class="col-md-3 col-form-label">Deskripsi Kerjaan <sup
                                    style="color: tomato">*</sup></label>
                        <div class="col-md-9">
									<textarea class="form-control" name="contents" id="summernote" required disabled>
                                    <?php echo $value->deskripsi ?>
									</textarea>
                        </div>
                    </div>
                    <!-- Tangga Lahir -->
                    <div class="form-group row">
                        <label for="birthdate" class="col-md-3 col-form-label">Kerjaan Selesai Pada <sup
                                    style="color: red;">*</sup></label>
                        <div class="col-md-9">
                            <div class="input-group">
                                <input type="text" class="form-control" id="deadline" name="deadline"
                                       value="<?php
                                       $newDate = date('Y-m-d H:i:s', strtotime($value->tgl_selesai));
                                       echo $newDate; ?>"disabled>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="deskripsi" class="col-md-3 col-form-label">Detail Report <sup
                                    style="color: tomato">*</sup></label>
                        <div class="col-md-9">
									<textarea class="form-control" name="contents" id="detail" required disabled>
                                    <?php echo $value->detail ?>
									</textarea>
                        </div>
                    </div>
						<div class="form-group row">
							<label for="judul" class="col-md-3 col-form-label">Dikerjakan Oleh <sup
										style="color:tomato">*</sup></label>
							<div class="col-md-9">
								<input type="hidden" class="form-control" id="iduser" name="iduser"
									   placeholder="Judul Iklan" required value="<?php echo $value->iduser ?>">
								<input type="text" class="form-control" id="judul" name="judul"
									   placeholder="Judul Iklan" required value="<?php echo $value->nama_user ?>" disabled>

							</div>
						</div>
					<div class="form-group row">
                        <label for="deskripsi" class="col-md-3 col-form-label">Gambar Report <sup
                                    style="color: tomato">*</sup></label>
                        <div class="img-bordered">
                            <img src="/assets/assets/img/bg-showcase-3.jpg">
                        </div>
                    </div>
					<div class="form-group row">
						<label for="judul" class="col-md-3 col-form-label">Masukkan Star point <sup
									style="color:tomato">*</sup></label>
						<div class="col-md-9">
							<input type="text" class="form-control" id="penilaian" name="penilaian"
								   placeholder="Masukkan Nilai terhadap hasil kerjaan" required >

						</div>
					</div>
					<div class="form-group row">
						<label for="deskripsi" class="col-md-3 col-form-label">Review Kerjaan <sup
									style="color: tomato">*</sup></label>
						<div class="col-md-9">
									<textarea class="form-control" name="review" id="review" required placeholder="Masukkan hasil review anda terkait pekerjaan yang dilakukan oleh hitter">

									</textarea>
						</div>
					</div>
					<button type="submit" class="btn btn-success mb-2" data-toggle="modal" data-target="#addModal">SIMPAN</button>
                        </div>
                    </div>
                </div> <!-- Card-Body Main End -->
            </div>
		</form><!-- Card Main End -->
        </div> <!-- Col Main End -->
    </div> <!-- Row End -->
</div> <!-- Container End -->
</body>
</section>
<!-- Modal -->
    <div class="modal fade" id="delete" tabindex="-1" aria-labelledby="deleteLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="deleteLabel">Simpan hasil penilaian</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Anda yakin ingin menyimpan data ini?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary">Iya</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tidak</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer -->
<?php
}
$this->load->view("user/_partials/footer") ?>
<script src='https://www.google.com/recaptcha/api.js'></script>
<script>
	$(function () {
		// Summernote
		$('#summernote').summernote({
			height: 200
		});
	})
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
