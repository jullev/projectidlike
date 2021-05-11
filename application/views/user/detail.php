<!doctype html>
<html lang="en">
	<?php $this->load->view("user/_partials/head.php") ?>
	<!-- Font Awesome -->
	<body class="layout-fixed">
		<!-- Navbar -->
		<?php $this->load->view("user/_partials/navbar.php") ?>
		<main role="main" class="container" style="margin-top:70px; margin-bottom: 30px;">
			<div class="row">
				<div class="col-lg-9 mb-3">
					<span class="info-row" style="color: grey;">
						<br>
						<i class="fas fa-home"></i>
						&nbsp;/&nbsp;
						<span>Detail Iklan</span>
						&nbsp;/&nbsp;
						<span>JUDUL PEKERJAAN</span>
						<br>
						<br>
					</span>
					<div class="card">
						<div class="card-body bg-light">
							<h2 style="color: #4682b4;">JUDUL PEKERJAAN</h2>
							<hr>
							<span class="info-row" style="color: grey;">
								<i class="far fa-clock"></i>
								&nbsp;
								<span>1 tahun yang lalu</span>
								-&nbsp;
								<i class="fas fa-map-marker-alt"></i>
								&nbsp;
								<span>Jember</span>
								-&nbsp;
								<i class="fas fa-eye"></i>
								&nbsp;
								<span>500x dilihat</span>
							</span>
							<!-- Images -->
							<br>
							<br>
							<center>
							<img src="https://placeimg.com/640/480/any" alt="" style="width:95%">
							</center>
							<br>
							<br>
							<center>
							<div class="product-viewer-thumb-wrapper">
								<ul class="product-view-thumb m-3">
									<img src="https://placeimg.com/640/480/any" alt="" style="width:20%;">
									<img src="https://placeimg.com/640/480/any" alt="" style="width:20%;">
									<img src="https://placeimg.com/640/480/any" alt="" style="width:20%;">
									<img src="https://placeimg.com/640/480/any" alt="" style="width:20%;">
								</ul>
							</div>
							</center>
							<!-- Details -->
							<div id="detail" class="mt-4">
								<ul class="nav nav-tabs">
									<li class="nav-item">
										<a href="#detail" class="nav-link active">Detail Iklan</a>
									</li>
								</ul>
								<div class="tab-content p-4 " style="background-color:#fff">
									<div class="row">
										<div class="col-md-6">
											<i class="fas fa-map-marker-alt"></i>
											<span>Jakarta</span>
										</div>
										<div class="col-md-6 text-right">
											<span><strong>Harga:</strong> Rp 100.000.000</span>
										</div>
									</div>
									<hr>
									<div class="row">
										<div class="col-md-12">
											MAJENE.COM - Domain for Sale !! <br>
											Only USD 32.000 - Negotiable <br>
											Please visit http://majene.com <br>
											Buy now with Sedo escrow service. <br>
											Thank you!
										</div>
									</div>
									<!-- Icons -->
									<div class="row text-center mt-4">
										<!-- Kirim pesan -->
										<div class="col-md-4 col-sm-4">
											<a href="#">
												<i class="fas fa-envelope fa-2x" title="Kirim Email"></i>
											</a>
										</div>
										<!-- Simpan iklan -->
										<div class="col-md-4 col-sm-4">
											<a href="#">
												<i class="far fa-heart fa-2x" title="Simpan Iklan"></i>
											</a>
										</div>
										<!-- Laporkan penyalahgunaan -->
										<div class="col-md-4 col-sm-4">
											<a href="#">
												<i class="fas fa-info-circle fa-2x" title="Laporkan Penyalahgunaan"></i>
											</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- Column 2 -->
				<div class="col-lg-3">
					<div class="card">
						<ul class="list-group">
							<!-- Posted by -->
							<li class="list-group-item">
								<div class="row">
									<div class="col-sm-3">
										<img src="https://placeimg.com/300/300/people" alt="" style="width:50px">
									</div>
									<div class="col-sm-9">
										<div class="row">
											<div class="col-sm-12">Posted by:</div>
											<div class="col-sm-12">Anggito Suryo Baskoro</div>
										</div>
									</div>
								</div>
							</li>
							<li class="list-group-item">
								<div class="row">
									<div class="col-sm-6">
										<i class="fas fa-map-marker-alt"></i>
										<span>Lokasi</span>
									</div>
									<div class="col-sm-6 text-right">
										<a href="#">Jakarta</a>
									</div>
								</div>
							</li>
							<li class="list-group-item">
								<button class="btn btn-warning mb-1" style="width:100%;">
								<i class="far fa-hand-point-up"></i>
								<span>Hit</span>
								</button>
								<button class="btn btn-success" style="width:100%;">
								<i class="fas fa-phone"></i>
								<span>+628********</span>
								</button>
							</li>
						</ul>
					</div>
					<!-- Tip Keamanan Bagi Pembeli -->
					<div class="card mt-3">
						<div class="card-header">
							<h6>Tip Keamanan Bagi Pembeli</h6>
						</div>
						<div class="card-body">
							<div class="row">
								<div class="col-sm-12">
									<i class="fas fa-check-square"></i>
									<span>Temui penjual di tempat umum</span>
								</div>
								<div class="col-sm-12">
									<i class="fas fa-check-square"></i>
									<span>Periksa item sebelum Anda membeli</span>
								</div>
								<div class="col-sm-12">
									<i class="fas fa-check-square"></i>
									<span>Bayarlah hanya setelah menerima item tersebut</span>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</main>
		<!-- Footer -->
		<?php $this->load->view("user/_partials/footer.php") ?>
		<!-- Optional JavaScript; choose one of the two! -->
		<!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
		<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"
				integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns"
		crossorigin="anonymous"></script>
		<script src="<?php echo base_url('assets/assets/bootstrap/js/bootstrap.min.js') ?>"></script>
		<!-- Option 2: Separate Popper and Bootstrap JS -->
		<!--
		<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
		-->
	</body>
</html>