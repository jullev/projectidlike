<!DOCTYPE html>
<html lang="en">
<!-- Head -->
<?php $this->load->view("user/_partials/head.php"); ?>
<body>
<!-- Navbar -->
<?php $this->load->view("user/_partials/navbar") ?>
<div class="container mb-5" style="margin-top: 100px;">
	<div class="row">
		<!-- Sidebar -->
		<div class="col-sm-12 col-md-12 col-lg-3 mb-3">
			<?php $this->load->view("user/dashboard/sidebar") ?>
		</div>
		<!-- Main Content -->
		<div class="col-sm-12 col-md-12 col-lg-9">
            <?php
            var_dump(@$detailhit);
            foreach (@$detailhit as $value) { ?>
            ?>
            <div class="card">
                <div class="card-header">
                    <h3><i class="bi-badge-ad-fill mr-1"></i>&nbsp;Detail Laporan Pekerjaan Yang Sudah Selesai</h3>
                </div>
                <div class="card-body">
                    <div class="form-group row">
                        <label for="judul" class="col-md-3 col-form-label">Judul <sup
                                    style="color:tomato">*</sup></label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" id="judul" name="judul"
                                   placeholder="Judul Iklan" required value="<?php echo $value->judul_kerjaan ?>">

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
                                        echo $newDate; ?>" required>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="deskripsi" class="col-md-3 col-form-label">Deskripsi Kerjaan <sup
                                    style="color: tomato">*</sup></label>
                        <div class="col-md-9">
									<textarea class="form-control" name="contents" id="summernote" required disabled>
                                    <small><?php echo $value->deskripsi ?></small>
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
                                       echo $newDate; ?>"required>
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
                        <label for="deskripsi" class="col-md-3 col-form-label">Gambar Report <sup
                                    style="color: tomato">*</sup></label>
                        <div class="img-bordered">
                            <img src="/assets/assets/img/bg-showcase-3.jpg">
                        </div>
                    </div>


                            <div class="mt-4 text-right"><a href="#" class="btn btn-primary">Simpan</a></div>
                        </div>
                    </div>
                </div> <!-- Card-Body Main End -->
            </div> <!-- Card Main End -->
        </div> <!-- Col Main End -->
    </div> <!-- Row End -->
</div> <!-- Container End -->
<!-- Modal -->
    <div class="modal fade" id="delete" tabindex="-1" aria-labelledby="deleteLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="deleteLabel">Hapus Iklan</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Anda yakin ingin menghapus iklan ini?
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
