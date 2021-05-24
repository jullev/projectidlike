<!DOCTYPE html>
<html lang="en">
<!-- Head -->
<?php $this->load->view('user/_partials/head.php'); ?>
<body>
<!-- Navbar -->
<?php $this->load->view('user/_partials/navbar.php'); ?>
<div class="container mb-5" style="margin-top: 100px;">
	<div class="row">
		<div class="col-12 col-sm-10 col-md-8 col-lg-6 mx-auto">
			<div class="card">
				<div class="card-header">
					<h3>Menunggu Verifikasi Email</h3>
				</div>
				<div class="card-body">
					<div class="text-center">
						<span>Link verifikasi akun dikirim ke email anda</span>
						<div class="mt-2">
							<a href="" class="btn btn-primary">Kembali Ke Halaman Utama</a>
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
</div> <!-- /container -->
<!-- Footer -->
<?php $this->load->view('user/_partials/footer.php'); ?>
</body>
</html>
