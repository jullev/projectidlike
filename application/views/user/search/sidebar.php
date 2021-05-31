<div class="card mb-4">
    <!-- Tanggal Diposting -->
    <div class="card-header">
        <h5>Tanggal Diposting</h5>
    </div>
    <div class="card-body">
        <div class="custom-control custom-radio mb-3">
            <input type="radio" class="custom-control-input" name="waktu" value="24jam" id="tglpost1">
            <label class="custom-control-label" for="tglpost1">24 Jam</label>
        </div>
        <div class="custom-control custom-radio mb-3">
            <input type="radio" class="custom-control-input" name="waktu" value="3hari" id="tglpost2">
            <label class="custom-control-label" for="tglpost2">3 Hari</label>
        </div>
        <div class="custom-control custom-radio mb-3">
            <input type="radio" class="custom-control-input" name="waktu" value="7hari" id="tglpost3">
            <label class="custom-control-label" for="tglpost3">7 Hari</label>
        </div>
        <div class="custom-control custom-radio">
            <input type="radio" class="custom-control-input" name="waktu" value="8hari" id="tglpost4">
            <label class="custom-control-label" for="tglpost4">30 Hari</label>
        </div>
    </div>
    <!-- Tanggal Diposting End -->

    <!-- Kisaran Harga -->
    <div class="card-header">
        <h5>Kisaran Harga</h5>
    </div>
    <div class="card-body">
        <form action="C_Iklan/filterHarga">
            <div class="input-group mb-2" id="rangeprice">
                <div class="input-group-prepend">
                    <div class="input-group-text">Rp</div>
                </div>
                <input type="text" onkeypress="isInputNumber(event)" class="form-control" id="minprice" placeholder="Minimal">
            </div>
            <div class="input-group mb-2" id="rangeprice">
                <div class="input-group-prepend">
                    <div class="input-group-text">Rp</div>
                </div>
                <input type="text" onkeypress="isInputNumber(event)" class="form-control" id="maxprice" placeholder="Maximal">
            </div>
        </form>
    </div>
    <!-- Kisaran Harga End -->

    <!-- Kategori -->
    <div class="card-header">
        <h5>Kategori</h5>
    </div>
    <div class="card-body">
        <ul class="list-unstyled">
			<?php
				$i = 0;
				foreach($kategori as $kat){
			?>
					<li class="d-flex justify-content-between align-items-center mb-2">
						<div class="custom-control custom-radio">
							<input type="radio" name="kategori" id="<?php echo $kat->idkategori ?>" class="custom-control-input" value="<?php echo $kat->idkategori ?>">
							<label for="<?php echo $kat->idkategori ?>" class="custom-control-label"><?php echo $kat->nama_kategori ?></label>
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
        <ul class="list-unstyled" id="listDaerah">
            <li class="mb-2">
                <div class="custom-control custom-radio">
                    <input type="radio" id="daerah1" name="daerah" class="custom-control-input">
                    <label class="custom-control-label" for="daerah1">Jakarta</label>
                </div>
            </li>
            <li class="mb-2">
                <div class="custom-control custom-radio">
                    <input type="radio" id="daerah2" name="daerah" class="custom-control-input">
                    <label class="custom-control-label" for="daerah2">Surabaya</label>
                </div>
            </li>
            <li class="mb-2">
                <div class="custom-control custom-radio">
                    <input type="radio" id="daerah3" name="daerah" class="custom-control-input">
                    <label class="custom-control-label" for="daerah3">Bandung</label>
                </div>
            </li>
            <li class="mb-2">
                <div class="custom-control custom-radio">
                    <input type="radio" id="daerah4" name="daerah" class="custom-control-input">
                    <label class="custom-control-label" for="daerah4">Bekasi</label>
                </div>
            </li>
            <li class="mb-2">
                <div class="custom-control custom-radio">
                    <input type="radio" id="daerah5" name="daerah" class="custom-control-input">
                    <label class="custom-control-label" for="daerah5">Makassar</label>
                </div>
            </li>
            <li class="mb-2">
                <div class="custom-control custom-radio">
                    <input type="radio" id="daerah6" name="daerah" class="custom-control-input">
                    <label class="custom-control-label" for="daerah6">Palembang</label>
                </div>
            </li>
            <li class="mb-2">
                <div class="custom-control custom-radio">
                    <input type="radio" id="daerah7" name="daerah" class="custom-control-input">
                    <label class="custom-control-label" for="daerah7">Medan</label>
                </div>
            </li>
            <li>
                <div class="custom-control custom-radio">
                    <input type="radio" id="daerahAll" name="daerah" class="custom-control-input">
                    <label class="custom-control-label" for="daerahAll">
                        <select class="selectpicker form-control" name="kota" id="kota" data-live-search="true">
                            <option value="#">Kota Lainnya</option>
                            <?php
                            foreach ($kabupaten as $kab) {
                            ?>
                                <option value="<?php echo $kab->id_kabupaten ?>"><?php echo $kab->nama_kabupaten ?></option>
                            <?php
                            }
                            ?>
                        </select>
                    </label>
                </div>
            </li>
        </ul>
    </div>
    <!-- Lokasi End -->
    <div class="card-body border-top">
        <!-- Tombol Terapkan -->
        <button class="btn btn-primary btn-block">Terapkan</button>
        <!-- Tombol Terapkan End -->
    </div>
</div> <!-- ./card -->
