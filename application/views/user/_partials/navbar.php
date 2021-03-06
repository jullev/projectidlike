<script>
	const status = '<?php echo $this->session->userdata('status') != null ? $this->session->userdata('status') : 'success' ?>'
	const msg = '<?php echo $this->session->userdata('email_msg') != null ? $this->session->userdata('email_msg') : '' ?>'
	$(window).on('load', function() {
		if (status == 'error' || msg != '') {
			$('#signIn').modal('show');
		}
	});
</script>
<nav class="navbar navbar-light navbar-expand-sm fixed-top bg-white shadow-sm navigation-clean" onload="alert(<?php echo $this->session->userdata('status') ?>)">
	<div class="container">
		<!-- Nama Website -->
		<a class="navbar-brand" href="<?php echo site_url('/') ?>"><?php echo SITE_NAME ?></a>
		<!-- Collapse Button -->
		<button data-toggle="collapse" class="navbar-toggler mb-2" data-target="#navcol-1">
			<span class="navbar-toggler-icon"></span>
		</button>
		<!-- Masuk, Daftar, Akun, Tambah Iklan -->
		<div class="collapse navbar-collapse py-2 py-md-0 justify-content-center justify-content-md-start" id="navcol-1">


			<?php
			if (($this->session->userdata("is_login") !== null) && ($this->session->userdata('is_login') == true)) {
			?>
				<!-- Untuk yang sudah login -->
				<!-- Akun -->
				<div class="btn-group ml-auto">
					<button type="button" class="btn btn-light dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" id="nameNavbar">
						<i class="bi-person-fill mr-1"></i><?php echo $this->session->userdata("nama") ?>
					</button>
					<div class="dropdown-menu">
						<a class="dropdown-item" href="<?php echo site_url('dashboard'); ?>"><i class="bi-house mr-1"></i> Dashboard</a>
						<!-- <a class="dropdown-item" href="<?php echo site_url('iklansaya'); ?>"><i
									class="bi-badge-ad mr-1"></i> Iklan Saya</a> -->
						<a class="dropdown-item" href="<?php echo site_url('hitproject'); ?>"><i class="bi-hand-index-thumb mr-1"></i> Hit Project</a>
						<div class="dropdown-divider"></div>
						<a class="dropdown-item" href="<?php echo site_url('logout') ?>"><i class="bi-box-arrow-right mr-1"></i> Logout</a>
					</div>
				</div>
			<?php
			} else {
			?>
				<!-- Untuk yang belum login -->
				<!-- Tombol Masuk -->
				<button class="btn btn-outline-primary ml-md-auto" data-target='#signIn' data-toggle="modal">
					<i class="bi-person"></i> Masuk
				</button>
				<!-- Tombol Daftar -->
				<a href="<?php echo site_url('register') ?>" class="btn btn-outline-primary ml-2 ml-sm-3" role="button">
					<i class="bi-person-plus"></i> Daftar
				</a>
			<?php
			}
			?>
			<!-- Tombol Tambah Iklan -->
			<!-- <button class="btn btn-warning ml-2 ml-sm-3" id="btnTambahIklan"
					onmouseover="login_check(<?php echo $this->session->userdata('is_login') ?>)">
				<i class="bi bi-plus-circle"></i></i> Buat Iklan
			</button> -->
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
					<div id="alert">
						<?php
						if ($this->session->userdata('status') !== null) {
						?>
							<div class="alert alert-danger"><?php echo $this->session->userdata('msg'); ?></div>
						<?php
							$this->session->unset_userdata(array('status', 'msg'));
						}

						if ($this->session->userdata('email_msg') !== null) {
						?>
							<div class="alert alert-success"><?php echo $this->session->userdata('email_msg'); ?></div>
						<?php
							$this->session->unset_userdata('email_msg');
						}

						?>
					</div>
					<!-- Username -->
					<div class="form-group mb-3">
						<label for="username">Username/Email</label>
						<div class="input-group">
							<div class="input-group-prepend">
								<span class="input-group-text" id="username-addon">
									<i class="bi-person-fill"></i>
								</span>
							</div>
							<input type="text" class="form-control" id="username" name="username" placeholder="Username" aria-describedby="username-addon" onfocus="removeAlert()">
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
							<input type="password" class="form-control" id="password" name="password" placeholder="Password" aria-describedby="password-addon" onfocus="removeAlert()">
						</div>
					</div>
					<!-- Show Password -->
					<div class="form-group form-check pl-0">
						<div class="custom-control custom-checkbox">
							<input type="checkbox" class="custom-control-input" id="show" onclick="showPassword()">
							<label class="custom-control-label" for="show">Show password</label>
						</div>
					</div>
					<!-- Lupa Pass -->
					<a href="<?php echo site_url('lupa-password'); ?>">Lupa Password?</a>
					<!-- Button Masuk -->
					<center>
						<button type="submit" class="btn btn-primary btn-lg mt-3">Masuk</button>
					</center>
				</form>
			</div>
			<div class="modal-footer py-4" style="border-top: none;justify-content:center">
				Belum Punya Akun? <a href="<?php echo site_url('register') ?>">Daftar</a>
			</div>
		</div><!-- Modal Content -->
	</div><!-- Modal Dialog -->
</div><!-- Modal -->
<!-- End Modal -->
<script>
	const login_check = (status) => {
		const is_login = status
		const btn_tambahiklan = document.getElementById('btnTambahIklan')

		if (is_login === undefined || is_login === null) {
			btn_tambahiklan.dataset.target = '#signIn'
			btn_tambahiklan.dataset.toggle = 'modal'
		} else {
			btn_tambahiklan.addEventListener('click', () => {
				location.href = "<?php echo site_url('tambahiklan') ?>"
			})
		}
	}

	const removeAlert = () => {
		document.getElementById('alert').innerHTML = "";
	}
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
	const showPassword = () => {
		const checkbox = document.getElementById('show')
		const pwd = document.getElementById('password')
		if (checkbox.checked == true) {
			pwd.setAttribute('type', 'text')
		} else {
			pwd.setAttribute('type', 'password')
		}
	}
</script>
