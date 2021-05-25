<!-- <style>
    #listDaerah li div.custom-radio.custom-control input[type=radio] {
        visibility: hidden;
    }
    #listDaerah li div.custom-radio.custom-control input[type=radio]:checked label {
        color: #007bff !important;
    }
</style> -->

<div class="card mb-4">
    <!-- Tanggal Diposting -->
    <div class="card-header"><h5>Tanggal Diposting</h5></div>
    <div class="card-body">
        <div class="custom-control custom-radio mb-3">
            <input type="radio" class="custom-control-input" name="customRadio" id="tglpost1">
            <label class="custom-control-label" for="tglpost1">24 Jam</label>
        </div>
        <div class="custom-control custom-radio mb-3">
            <input type="radio" class="custom-control-input" name="customRadio" id="tglpost2">
            <label class="custom-control-label" for="tglpost2">3 Hari</label>
        </div>
        <div class="custom-control custom-radio mb-3">
            <input type="radio" class="custom-control-input" name="customRadio" id="tglpost3">
            <label class="custom-control-label" for="tglpost3">7 Hari</label>
        </div>
        <div class="custom-control custom-radio">
            <input type="radio" class="custom-control-input" name="customRadio" id="tglpost4">
            <label class="custom-control-label" for="tglpost4">30 Hari</label>
        </div>
    </div>
    <!-- Tanggal Diposting End -->

    <!-- Kisaran Harga -->
    <div class="card-header"><h5>Kisaran Harga</h5></div>
    <div class="card-body">
        <form action="">
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
            <button class="btn btn-primary btn-block">Submit</button>
        </form>
    </div>
    <!-- Kisaran Harga End -->

    <!-- Kategori -->
    <div class="card-header">
        <h5>Kategori</h5>
    </div>
    <div class="card-body">
        <ul class="list-unstyled">
            <li class="d-flex justify-content-between align-items-center mb-2">
                Cari Investor<span class="badge badge-light badge-pill">98</span>
            </li>
            <li class="d-flex justify-content-between align-items-center mb-2">
                Bisnis Dijual<span class="badge badge-light badge-pill">55</span>
            </li>
            <li class="d-flex justify-content-between align-items-center mb-2">
                Properti<span class="badge badge-light badge-pill">1</span>
            </li>
            <li class="d-flex justify-content-between align-items-center mb-2">
                Kendaraan<span class="badge badge-light badge-pill">10</span>
            </li>
            <li class="d-flex justify-content-between align-items-center mb-2">
                Produk<span class="badge badge-light badge-pill">9</span>
            </li>
            <li class="d-flex justify-content-between align-items-center mb-2">
                Jasa<span class="badge badge-light badge-pill">14</span>
            </li>
            <li class="d-flex justify-content-between align-items-center mb-2">
                Industri<span class="badge badge-light badge-pill">17</span>
            </li>
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
                    <input type="radio" id="daerah" name="daerah1" class="custom-control-input">
                    <label class="custom-control-label" for="daerah1">Jakarta</label>
                </div>
            </li>
            <li class="mb-2">
                <div class="custom-control custom-radio">
                    <input type="radio" id="daerah2" name="daerah" class="custom-control-input">
                    <label class="custom-control-label" for="daerah2">Surabaya</label>
                </div>
            </li>
            <li class="mb-2">Medan</li>
            <li class="mb-2">Bandung</li>
            <li class="mb-2">Bekasi</li>
            <li class="mb-2">Bandung</li>
            <li class="mb-2">Palembang</li>
        </ul>
    </div>
    <!-- Lokasi End -->
</div> <!-- ./card -->