<!DOCTYPE html>
<html lang="en">
<?php $this->load->view('user/_partials/head.php'); ?>
<?php
if (!$this->session->userdata("is_login") || ($this->session->userdata("is_login") == false)) {
	redirect('/');
}
?>

<body>
    <?php $this->load->view('user/_partials/navbar.php'); ?>

    <div class="container mb-5" style="margin-top: 100px;" id="tambahiklan-container">
        <div class="row">
            <div class="col-sm-8">
                <div class="card">
                    <div class="card-header">
                        <h3><i class="bi bi-files"></i> <strong>Buat Iklan</strong></h3>
                    </div>
                    <div class="card-body py-5 px-5">
                        <!-- form tambah list -->
                        <form action="<?php echo site_url('simpaniklan') ?>" method="POST" onsubmit="return validation()" onclick="removeAlert()" name="insert-iklan">
							<!-- Tampilkan alert -->
							<div id="alert">
								<?php
									if(isset($status)){
										if($status == 'success'){
								?>
											<div class="alert alert-success"><?php echo $msg ?></div>
								<?php
										}else{
								?>
											<div class="alert alert-danger"><?php echo $msg ?></div>
								<?php
										}
									}
								?>
							</div>
                            <div class="form-group row">
                                <!-- kategori form -->
                                <label for="kategori" class="col-md-3 col-form-label">Kategori <sup style="color:tomato">*</sup></label>
                                <div class="col-md-9">
                                    <select class="custom-select" name="kategori" id="kategori" required>
                                        <option value="#" selected>-- Pilih Kategori --</option>
										<?php
											foreach ($kategori as $kat){
										?>
												<option value="<?php echo $kat->idkategori ?>"><?php echo $kat->nama_kategori ?></option>
										<?php
											}
										?>

                                    </select>
                                </div>
                            </div>
                            <!-- Tipe form -->
                            <div class="form-group row">
                                <label for="judul" class="col-md-3 col-form-label">Judul <sup style="color:tomato">*</sup></label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" id="judul" name="judul" placeholder="Judul Iklan" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="deskripsi" class="col-md-3 col-form-label">Deskripsi <sup style="color: tomato">*</sup></label>
                                <div class="col-md-9">
                                    <textarea class="form-control" name="contents" id="summernote" required>
                                        <small>Deskripsikan apa yang membuat iklan anda menarik dan unik.</small>
                                    </textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="deskripsi" class="col-md-3 col-form-label">Upload Gambar</label>
                                <div class="col-md-9">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
                                        <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="price" class="col-md-3 col-form-label">Harga</label>
                                <div class="input-group mb-3 col-md-9">
                                    <div class="input-group-prepend ">
                                        <span class="input-group-text">Rp </span>
                                    </div>
                                    <input type="text" class="form-control" placeholder="Contoh: 15000" name="harga" required>
                                </div>
                            </div>
                            <!-- Tangga Lahir -->
                            <div class="form-group row">
                                <label for="birthdate" class="col-md-3 col-form-label">Deadline <sup style="color: red;">*</sup></label>
                                <div class="col-md-9">
                                    <div class="input-group">
                                        <input type="date" class="form-control" id="deadline" name="deadline" min="<?php echo date('Y-m-d') ?>" required>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="kota" class="col-md-3 col-form-label">Kota <sup style="color: red;">*</sup></label>
                                <div class="col-md-9">
                                    <select class="selectpicker form-control" name="kota" id="kota" data-live-search="true" required>
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
                            </div>
<!--                            <div class="form-group row">-->
<!--                                <label for="tag" class="col-md-3 col-form-label">Tag</label>-->
<!--                                <div class="col-md-9">-->
<!--                                    <input type="text" class="form-control" id="tag" placeholder="Masukkan Tag">-->
<!--                                    <small class="col-md-9">masukkan Tag dipisah dengan koma</small>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                            <br>-->
<!--                            <hr>-->
<!--                            <div class="content-subheading">-->
<!--                                <i class="bi bi-person-fill"></i>-->
<!--                                <strong>Informasi Pemasang Iklan</strong>-->
<!--                            </div>-->
<!--                            <hr>-->
<!--                            <br>-->
<!--                            <div class="form-group row">-->
<!--                                <label for="nama" class="col-md-3 col-form-label">Nama Anda<sup style="color:tomato">*</sup></label>-->
<!--                                <div class="col-md-9">-->
<!--                                    <input type="text" class="form-control" id="nama" placeholder="Judul Iklan">-->
<!--                                </div>-->
<!--                            </div>-->
<!--                            <div class="form-group row">-->
<!--                                <label for="email" class="col-md-3 col-form-label">Email<sup style="color:tomato">*</sup></label>-->
<!--                                <div class="input-group mb-3 col-md-9">-->
<!--                                    <div class="input-group-prepend ">-->
<!--                                        <span class="input-group-text"><i class="bi bi-envelope-fill"></i></span>-->
<!--                                    </div>-->
<!--                                    <input type="email" class="form-control" placeholder="Email">-->
<!--                                </div>-->
<!--                            </div>-->
<!--                            <div class="form-group row">-->
<!--                                <label for="telp" class="col-md-3 col-form-label">Nomor Telepon</label>-->
<!--                                <div class="input-group mb-3 col-md-9">-->
<!--                                    <div class="input-group-prepend">-->
<!--                                        <span class="input-group-text">+62</span>-->
<!--                                    </div>-->
<!--                                    <input type="text" class="form-control" placeholder="852333****" aria-describedby="telp-add">-->
<!--                                </div>-->
<!--                            </div>-->
                            <div class="form-group row">
                                <div class="col-md-9">
                                    <input type="checkbox" id="verify" value="1" name="verify" required>
                                    <small class="md-2"><strong>I want to register by submmiting this ad</strong></small>
                                    <br>
                                    <small>You will receive your authentication information by email.</small>
                                </div>
                            </div>
								<!-- Captcha -->
<!--                            <div class="form-group row">-->
<!--                                <div class="col-md-9">-->
<!--                                    <div class="g-recaptcha" data-sitekey="6LfcdL4aAAAAAJhUJSD1sa-1dW8AsrIjQ7rj_zj9"></div>-->
<!--                                </div>-->
<!--                            </div>-->
                            <div class="form-group row">
                                <div class="col-md-12">
                                    <button class="btn btn-block btn-primary" type="submit">Lanjut</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- Register Sidebar -->
            <div class="col-sm-4 reg-sidebar">
                <div class="reg-sidebar-inner text-center">
                    <div class="reg-text-box p-3">
                        <i class="bi-images" style="color: #b19cd9; font-size: 2em;"></i>
                        <h6>Pasang Iklan Gratis</h6>
                        <p style="font-size: 14px;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis
                            mollitia non odit distinctio a nam dignissimos placeat dolorum incidunt commodi, pariatur omnis.
                            Nemo laborum explicabo assumenda iste nihil quasi vel?</p>
                    </div>
                    <div class="reg-text-box p-3">
                        <div class="card">
                            <div class="card-header">
                                <h6><strong>bagaimana menjual agar cepat laku?</strong></h6>
                            </div>
                            <div class="card-body text-left">
                                <ul>
                                    <li><small>Gunkan judul yang singkat dan deskripsi item tersebut</small></li>
                                    <li><small>Pastikan Anda mempostin di kategori yang tepat</small></li>
                                    <li><small>Tambahkan foto/gambar yang baik pada iklan Anda</small></li>
                                    <li><small>Berikan harga yang wajar</small></li>
                                    <li><small> Periksa item sebelum ditayangkan</small></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php $this->load->view('user/_partials/footer.php'); ?>
</body>
<script src='https://www.google.com/recaptcha/api.js'></script>
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

  	if(kategori === "#"){
		alert.innerHTML = "<div class='alert alert-danger'>Kategori belum terisi.</div>"
		location.href = "#tambahiklan-container"
		return false
	}else if(isNaN(harga) || parseFloat(harga) < 0){
		alert.innerHTML = "<div class='alert alert-danger'>Pastikan data harga sesuai dengan format.</div>"
		location.href = "#tambahiklan-container"
		return false
	}else if(kota === "#"){
		alert.innerHTML = "<div class='alert alert-danger'>Data kota belum terisi.</div>"
		location.href = "#tambahiklan-container"
		return false
	}
  }

  const removeAlert = () =>{
  	alert.innerHTML = "";
  }

</script>
</html>
