<div class="card">
	<form action="<?php echo site_url('search?f=true') ?>" method="GET">

		<!-- Tanggal Diposting -->
		<div class="card-header">
			<h5>Tanggal Diposting</h5>
		</div>
		<div class="card-body">
			<div class="form-group">
				<label for="startDate">Mulai</label>
				<input type="date" name="start_date" id="startDate" class="form-control">
			</div>
			<label for="endDate">Sampai</label>
			<div class="form-group">
				<input type="date" name="end_date" id="endDate" class="form-control">
			</div>
		</div>
		<!-- Tanggal Diposting End -->

		<!-- Kisaran Harga -->
		<div class="card-header">
			<h5>Kisaran Harga</h5>
		</div>
		<div class="card-body">
			<div class="input-group mb-2" id="rangeprice">
				<div class="input-group-prepend">
					<div class="input-group-text">Rp</div>
				</div>
				<input type="number" min="0" onkeypress="isInputNumber(event)" class="form-control" id="minprice"
					   placeholder="Minimal" name="harga_min">
			</div>
			<div class="input-group mb-2" id="rangeprice">
				<div class="input-group-prepend">
					<div class="input-group-text">Rp</div>
				</div>
				<input type="number" min="0" onkeypress="isInputNumber(event)" class="form-control" id="maxprice" name="harga_max"
					   placeholder="Maximal"></div>
		</div>
		<!-- Kisaran Harga End -->

		<!-- Kategori -->
		<div class="card-header">
			<h5>Kategori</h5>
		</div>
		<div class="card-body">
			<ul class="list-group">
				<?php
				$i = 0;
				foreach ($kategori as $kat) {
					?>
					<li class="d-flex justify-content-between align-items-center list-group-item">
						<div class="form-check">
							<input type="radio" name="kategori_get" id="<?php echo $kat->idkategori ?>"
								   class="form-check-input" value="<?php echo $kat->idkategori ?>">
							<label for="<?php echo $kat->idkategori ?>"
								   class="form-check-label"><?php echo $kat->nama_kategori ?></label>
						</div>
						<span class="badge badge-light badge-pill"><?php echo $kategori_jml[$i]->jml ?></span>
					</li>
					<?php
					$i += 1;
				}
				?>
			</ul>
		</div>
		<!-- Kategori End -->

		<!-- Lokasi -->
		<div class="card-header">
			<h5>Lokasi</h5>
		</div>
		<div class="card-body">
			<select class="selectpicker form-control" name="kota_get" id="kota_get" data-live-search="true">
				<option value="#">Kota/Kabupaten</option>
				<?php
				foreach ($kabupaten as $kab) {
					?>
					<option value="<?php echo $kab->id_kabupaten ?>"><?php echo $kab->nama_kabupaten ?></option>
					<?php
				}
				?>
			</select>
		</div>
		<!-- Lokasi End -->
		<div class="card-body border-top">
			<!-- Tombol Terapkan -->
			<button class="btn btn-primary btn-block" type="submit">Terapkan</button>
			<!-- Tombol Terapkan End -->
		</div>
	</form>
</div> <!-- ./card -->
