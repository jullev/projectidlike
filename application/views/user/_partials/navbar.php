<nav class="navbar navbar-light navbar-expand-sm fixed-top bg-white text-monospace shadow-sm navigation-clean">
	<div class="container">
		<!-- Nama Website -->
		<a class="navbar-brand" href="<?php echo site_url('/') ?>">Brand</a>
		<!-- Collapse Button -->
		<button data-toggle="collapse" class="navbar-toggler mb-2" data-target="#navcol-1">
			<span class="navbar-toggler-icon"></span>
		</button>
		<!-- Masuk, Daftar, Akun, Tambah Iklan -->
		<div class="collapse navbar-collapse" id="navcol-1">


			<?php
			if (($this->session->userdata("is_login") !== null) && ($this->session->userdata('is_login') == true)) {
			?>
				<!-- Untuk yang sudah login -->
				<!-- Akun -->
				<div class="btn-group ml-auto">
					<button type="button" class="btn btn-light dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						<i class="bi-person-fill mr-1"></i><?php echo $this->session->userdata("nama") ?>
					</button>
					<div class="dropdown-menu">
						<a class="dropdown-item" href="<?php echo site_url('dashboard');
														?>"><i class="bi-house mr-1"></i>
							Dashboard</a>
						<a class="dropdown-item" href="#"><i class="bi-badge-ad mr-1"></i> Iklan Saya</a>
						<div class="dropdown-divider"></div>
						<a class="dropdown-item" href="<?php echo site_url('logout') ?>"><i class="bi-box-arrow-right mr-1"></i> Logout</a>
					</div>
				</div>
			<?php
			} else {
			?>
				<!-- Untuk yang belum login -->
				<!-- Tombol Masuk -->
				<button class="btn btn-outline-primary ml-auto" data-target='#signIn' data-toggle="modal">
					<i class="bi-person"></i> Masuk
				</button>
				<!-- Tombol Daftar -->
				<a href="<?php echo site_url('register') ?>" class="btn btn-outline-primary ml-3" role="button">
					<i class="bi-person-plus"></i> Daftar
				</a>
			<?php
			}
			?>


			<!-- Tombol Tambah Iklan -->
			<a href="<?php echo site_url('tambahiklan') ?>" class="btn btn-warning ml-3" role="button">
				<i class="bi bi-plus-circle"></i></i> Buat Iklan
			</a>
		</div>

	</div>
</nav>

<!-- Modal for Masuk -->
<div class="modal fade" id="signIn" tabindex="-1" aria-labelledby="signInLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header pb-0" style="border-bottom: none;">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<h3 class="modal-title mb-4" id="signInLabel">
					<i class="bi-box-arrow-in-right mr-2" style="color: black;"></i> Masuk
				</h3>
				<form action="<?php echo site_url('login') ?>" method="POST">
					<!-- Username -->
					<div class="form-group mb-3">
						<label for="username">Username</label>
						<div class="input-group">
							<div class="input-group-prepend">
								<span class="input-group-text" id="username-addon">
									<i class="bi-person-fill"></i>
								</span>
							</div>
							<input type="text" class="form-control" id="username" name="username" placeholder="Username" aria-describedby="username-addon">
						</div>
					</div>
					<!-- Password -->
					<div class="form-group mb-3">
						<label for="password">Password</label>
						<div class="input-group">
							<div class="input-group-prepend">
								<span class="input-group-text" id="password-addon">
									<i class="bi-key-fill"></i>
								</span>
							</div>
							<input type="password" class="form-control" id="password" name="password" placeholder="Password" aria-describedby="password-addon">
						</div>
					</div>
					<!-- Tetap Login -->
					<div class="form-group form-check pl-0">
						<div class="custom-control custom-checkbox">
							<input type="checkbox" class="custom-control-input" id="rememberme">
							<label class="custom-control-label" for="rememberme">Tetap Masuk</label>
						</div>
					</div>
					<!-- Lupa Pass -->
					<a href="">Lupa Password?</a>
					<!-- Button Masuk -->
					<center>
						<button type="submit" class="btn btn-primary btn-lg mt-3">Masuk</button>
					</center>
				</form>
			</div>
			<div class="modal-footer py-4" style="border-top: none;justify-content:center">
				Belum Punya Akun? <a href="">Daftar</a>
			</div>
		</div><!-- Modal Content -->
	</div><!-- Modal Dialog -->
</div><!-- Modal -->
<!-- End Modal -->