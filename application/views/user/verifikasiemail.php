<!DOCTYPE html>
<html lang="en">
<!-- Head -->
<?php $this->load->view('user/_partials/head.php'); ?>

<body>
	<div class="wrapper">
		<!-- Navbar -->
		<?php $this->load->view('user/_partials/navbar.php'); ?>
		<div class="content-wrapper">
			<section class="content container mb-5" style="margin-top: 100px;">
				<div class="row">
					<div class="col-12 col-sm-10 col-md-8 col-lg-6 mx-auto">
						<div class="card">
							<div class="card-header">
								<h3>
									<center> Menunggu Verifikasi Email</center>
								</h3>
							</div>
							<div class="card-body">
								<?php
									if($this->session->userdata('vmsg') !== NULL){
								?>
										<div class="alert <?php echo $this->session->userdata('vstatus') == 'success' ? 'alert-success' : 'alert-danger' ?>"><?php echo $this->session->userdata('vmsg') ?></div>
								<?php
										$this->session->unset_userdata(array('vstatus', 'vmsg'));
									}
								?>
								<form action="C_Register/verifyEmail" method="POST">
									<label for="verify-email">Masukkan kode token:</label>
									<input type="text" class="form-control" name="verify-email" id="verify-email" placeholder="Masukkan token di sini" required>
									<button class="btn btn-primary mt-3" type="submit" style="width: 100%">Submit</button>
								</form>
								<div class="text-center">
									<div class="mt-2">
										<a href="" class="link-primary">Kembali Ke Halaman Utama</a>
									</div>
									<div class="mt-4">
										<span>Email belum masuk ?</span>
										<a href="">Kirim ulang</a>
									</div>
								</div>
							</div>
						</div><!-- /card -->
					</div> <!-- /col -->
				</div> <!-- /row -->
			</section>

		</div>
		<!-- /container -->

	</div>

		<!-- Footer -->
	<?php $this->load->view('user/_partials/footer.php'); ?>
</body>

</html>
