<!DOCTYPE html>
<html lang="en">
<!-- Head -->
<?php $this->load->view('user/_partials/head.php'); ?>
<body>
<!-- Navbar -->
<?php $this->load->view('user/_partials/navbar.php'); ?>
<div class="container mb-5" style="margin-top: 100px;">
	<div class="card">
		<div class="card-header">
			<h3>Rubah Password</h3>
		</div>
		<div class="card-body">
			<!--Form New Password-->
			<div class="form-group row">
				<label for="newpassword" class="col-lg-3 col-form-label">Password Baru<sup style="color: tomato">*</sup></label>
				<div class="col-lg-9">
					<input type="text" name="newpassword" id="newpassword" placeholder="Masukkan Password Baru Anda"
						   class="form-control" required>
				</div>
			</div>
			<!--Form Validation Password-->
			<div class="form-group row">
				<label for="valpassword" class="col-lg-3 col-form-label">Konfirmasi Password Baru<sup
							style="color: tomato">*</sup></label>
				<div class="col-lg-9">
					<input type="text" name="valpassword" id="valpassword"
						   placeholder="Masukkan Kembali Password Baru Anda" class="form-control" required>
				</div>
			</div>
			<div class="row mt-4">
				<div class="col-md-11"></div>
				<a href="" class="btn btn-primary">Simpan</a>
			</div>
		</div>
	</div>
</div>
</div>
</div>
<!--footer-->
<?php $this->load->view('user/_partials/footer.php') ?>
