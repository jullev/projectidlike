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
					<div class="card">
						<div class="card-header">
							<h3><i class="bi-pencil-square mr-1"></i>&nbsp;Edit Iklan</h3>
						</div>
						<div class="card-body">
							<div class="form-group">
								<label for="judul" class="form-label">Judul</label>
									<input type="text" class="form-control" id="judul" name="judul"
									placeholder="Judul Iklan" required>
							</div>
							<div class="form-group">
								<label for="deskripsi" class="form-label">Deskripsi</label>
									<textarea class="form-control" name="contents" id="summernote" required>
									<small>Deskripsikan apa yang membuat iklan anda menarik dan unik.</small>
									</textarea>
							</div>
							<div class="form-group">
								<!-- kategori form -->
								<label for="kategori" class="form-label">Kategori</label>
								<select class="custom-select" name="kategori" id="kategori" required>
									<option value="#" selected>-- Pilih Kategori --</option>
									<?php
									foreach ($kategori as $kat) {
									?>
									<option value="<?php echo $kat->idkategori ?>"><?php echo $kat->nama_kategori ?></option>
									<?php
									}
									?>
								</select>
							</div>
							<div class="form-group">
								<label for="deskripsi" class="form-label">Upload Gambar</label>
								<div class="custom-file">
									<input type="file" class="custom-file-input" id="inputGroupFile01"
									aria-describedby="inputGroupFileAddon01">
									<label class="custom-file-label" for="inputGroupFile01">Choose file</label>
								</div>
							</div>
							<div class="form-group">
								<label for="price" class="form-label">Harga</label>
								<div class="input-group">
									<div class="input-group-prepend ">
										<span class="input-group-text">Rp </span>
									</div>
									<input type="text" class="form-control" placeholder="Contoh: 15000" name="harga"
									required>
								</div>
							</div>
							<!-- Tangga Lahir -->
							<div class="form-group">
								<label for="birthdate" class="form-label">Deadline </label>
								<div class="input-group">
									<input type="date" class="form-control" id="deadline" name="deadline"
									min="<?php echo date('Y-m-d') ?>" required>
								</div>
							</div>
							<div class="form-group">
								<label for="kota" class="form-label">Kota</label>
								<select class="selectpicker form-control" name="kota" id="kota" data-live-search="true"
									required>
									<option value="#">-- Pilih Kota/Kabupaten --</option>
									<?php
										foreach ($kabupaten as $kab) {
									?>
									<option value="<?php echo $kab->id_kabupaten ?>"><?php echo $kab->nama_kabupaten ?></option>
									<?php
									}
									?>
								</select>
							</div>
							<div class="card list-group-item-warning">
								<div class="card-body">
									<i class="bi-info-circle mr-1"></i> Setelah iklan diedit, admin akan memverifikasi kembali iklan anda.
								</div>
							</div>
							<div class="row mt-4">
								<div class="col-6"></div>
								<div class="col-6"><a href="#" class="btn btn-lg btn-block btn-primary">Simpan</a></div>
							</div>
						</div> <!-- Card-Body Main End -->
					</div> <!-- Card Main End -->
				</div> <!-- Col Main End -->
			</div> <!-- Row End -->
		</div> <!-- Container End -->

		<!-- Footer -->
		<?php $this->load->view("user/_partials/footer") ?>
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