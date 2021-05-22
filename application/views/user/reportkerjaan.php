<!DOCTYPE html>
<html lang="en">
<?php $this->load->view('user/_partials/head.php'); ?>
<?php
if (!$this->session->userdata("is_login") || ($this->session->userdata("is_login") == false)) {
	redirect('/');
}
?>

<body>
<?php $this->load->view('user/_partials/navbar.php'); ?>

<div class="container mb-5" style="margin-top: 100px;" id="tambahiklan-container">
	<div class="row">
		<!-- Col 1 - Sidebar -->
		<div class="col-12 col-md-5 col-lg-3 mb-3">
			<!-- Sidebar -->
			<?php $this->load->view("user/dashboard/sidebar") ?>
		</div>

		<!-- Col 2 - Main content -->
		<div class="col-12 col-md-7 col-lg-9">
			<div class="card">
				<div class="card-header">
					<h3><i class="bi bi-clipboard-check mr-1"></i> <strong>Lapor Kerjaan Selesai</strong></h3>
				</div>
				<div class="card-body">
					<!-- form tambah list -->
					<?php echo form_open("<?php echo site_url('reportkerjaan') ?>", array('enctype'=>'multipart/form-data')); ?>

						<!-- Tampilkan alert -->
						<div id="alert">
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
						<!-- Tampilkan alert end -->

						<?php
						$judul = @$dataIklan->judul_kerjaan;
						// var_dump($judul);
						foreach (@$dataIklan as $value) {
						?>
					
						<!-- Id Kerjaan -->
						<div class="form-group row">
							<label for="judul" class="col-md-3 col-form-label">Id Kerjaan <sup
										style="color:tomato">*</sup></label>
							<div class="col-md-9">
								<input type="text" class="form-control" id="idkerjaan" name="idkerjaan" disabled
									value="<?php echo $value->idkerjaan; ?>" >

							</div>
						</div>
						<!-- Id Kerjaan End -->

						<!-- Judul -->
						<div class="form-group row">
							<label for="judul" class="col-md-3 col-form-label">Judul <sup
									style="color:tomato">*</sup></label>
							<div class="col-md-9">
								<input type="text" class="form-control" id="judul" name="judul" disabled
									   value="<?php echo $value->judul_kerjaan; ?>" >

							</div>
						</div>
						<!-- Judul end -->

						<!-- Deskripsi -->
						<div class="form-group row">
							<label for="deskripsi" class="col-md-3 col-form-label">Deskripsi Hasil Pekerjaan <sup style="color: tomato">*</sup></label>
							<div class="col-md-9">
								<textarea class="form-control" name="contents" id="summernote" required></textarea>
							</div>
						</div>
						<!-- Deskripsi end -->

						<!-- Upload File -->
						<div class="form-group row align-items-center">
							<label for="uploadbukti" class="col-md-3 col-form-label">Upload Bukti Kerjaan</label>
							<div class="col-md-9">
								<div class="custom-file">
									<input type="file" class="custom-file-input" id="uploadBukti" name="uploadbukti">
									<label class="custom-file-label" for="uploadBukti">Choose file</label>
								</div>
							</div>
						</div>
						<!-- Upload File End -->

						<!-- Checkbox -->
						<div class="form-group row">
							<div class="col-12">
								<div class="custom-control custom-checkbox">
									<input type="checkbox" id="verify" value="1" name="verify" class="custom-control-input" required>
									<label class="custom-control-label" for="verify">
										<small><strong>Dengan ini saya menyatakan pekerjaan saya sudah selesai</strong></small>
										<br>
										<small>You will receive your authentication information by email.</small>
									</label>
								</div>
							</div>
						</div>
						<!-- Checkbox end -->

						<!-- Captcha -->
						<!--                            <div class="form-group row">-->
						<!--                                <div class="col-md-9">-->
						<!--                                    <div class="g-recaptcha" data-sitekey="6LfcdL4aAAAAAJhUJSD1sa-1dW8AsrIjQ7rj_zj9"></div>-->
						<!--                                </div>-->
						<!--                            </div>-->

						<!-- Tombol Submit -->
						<div class="form-group row">
							<div class="col-12">
								<button class="btn btn-block btn-primary" type="submit">Kirim</button>
							</div>
						</div>
						<!-- Tombol Submit end -->
						
					</form>
				<?php } ?>
				</div>
				</div>
			</div>
		</div>
</div>
<?php $this->load->view('user/_partials/footer.php'); ?>
</body>
<script>
	$(function () {
		// Summernote
		$('#summernote').summernote({
			height: 200
		});
	});

	const alert = document.getElementById('alert');
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
</html>
