<!DOCTYPE html>
<html lang="en">
<!-- Head -->
<?php $this->load->view('user/_partials/head.php'); ?>

<body>
	<!-- Navbar -->
	<?php $this->load->view('user/_partials/navbar.php'); ?>
	<div class="content container" style="margin-top: 100px; margin-bottom: 200px;">
		<div class="col-12 col-sm-12 col-md-9 col-lg-7 mx-auto">

			<div class="card ">
				<div class="card-header">
					<h3>Ubah Password</h3>
				</div>
				<div class="card-body">
					<div id="alert_msg">
						<?php
						if (isset($msg)) {
						?>
							<div class="alert alert-danger"><?php echo $msg ?></div>
						<?php
						}
						?>
					</div>
					<form action="C_Register/updatePassword" id="password_form" <?php echo $result == 'success' ? '' : 'hidden'  ?> method="POST" onsubmit="return validation()">

						<!--Form New Password-->
						<div class="form-group row">
							<label for="newpassword" class="col-lg-3 ">Password Baru<sup style="color: tomato">*</sup></label>
							<div class="col-lg-9">
								<input type="password" name="newpassword" id="newpassword" placeholder="Masukkan Password Baru Anda" class="form-control" <?php echo $result == 'success' ? 'required' : 'disabled'  ?>>
							</div>
						</div>
						<!--Form Validation Password-->
						<div class="form-group row">
							<label for="valpassword" class="col-lg-3 ">Konfirmasi Password Baru<sup style="color: tomato">*</sup></label>
							<div class="col-lg-9">
								<input type="password" name="valpassword" id="valpassword" placeholder="Masukkan Kembali Password Baru Anda" class="form-control" <?php echo $result == 'success' ? 'required' : 'disabled'  ?>>
							</div>
						</div>
						<div class="text-center">
							<button type="submit" class="btn btn-primary btn-block" <?php echo $result == 'success' ? '' : 'disabled'  ?>>Simpan</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	<!--footer-->
	<script>
		const alert = document.getElementById('alert_msg')
		const validation = () => {
			const pwd = document.forms["password_form"]["newpassword"].value
			const pwd_confirm = document.forms["password_form"]["valpassword"].value

			console.log(pwd)
			console.log(pwd_confirm)
			// Password
			return false
			// if (pwd !== pwd_confirm) {
			// 	alert.innerHTML = "<div class='alert alert-danger'>Password tidak valid, harap ulangi lagi!</div>"
			// 	return false
			// }

		}

		// Menghapus alert
		const removeAlert = () => {
			alert.innerHTML = ""
		}
	</script>

</body>
<?php $this->load->view('user/_partials/footer.php') ?>