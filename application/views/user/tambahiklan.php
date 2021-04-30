<!DOCTYPE html>
<html lang="en">
<?php $this->load->view('user/_partials/head.php'); ?>
<link rel="stylesheet" type="text/css" href="[style path]/simditor.css" />

<body>
    <?php $this->load->view('user/_partials/navbar.php'); ?>

    <div class="container mb-5" style="margin-top: 100px;">
        <div class="row">
            <div class="col-sm-8">
                <div class="card">
                    <div class="card-header">
                        <h3><i class="bi bi-files"></i> <strong>Buat Iklan</strong></h3>
                    </div>
                    <div class="card-body py-5 px-5">
                        <!-- form tambah list -->
                        <form action="C_TambahList/prosesTambah" method="Post">
                            <div class="form-group row">
                                <!-- kategori form -->
                                <label for="kategori" class="col-md-3 col-form-label">Kategori <sup style="color:tomato">*</sup></label>
                                <div class="col-md-8">
                                    <select class="custom-select" name="kategori">
                                        <option selected>Pilih Kategori</option>
                                        <option value="1">Cari Investor</option>
                                        <option value="2">Bisnis Dijual</option>
                                        <option value="3">Properti</option>
                                        <option value="4">Kendaraan</option>
                                        <option value="5">Produk</option>
                                        <option value="6">Jasa</option>
                                        <option value="7">Industri</option>
                                        <option value="8">Online</option>
                                        <option value="9">Makanan & Minuman</option>
                                        <option value="10">Busana</option>
                                        <option value="11">Hobi</option>
                                        <option value="12">Lowongan</option>
                                        <option value="13">Properti</option>

                                    </select>
                                </div>
                            </div>
                            <!-- Tipe form -->
                            <div class="form-group row">
                                <label for="tipe" class="col-md-3 col-form-label">Tipe <sup style="color:tomato">*</sup></label>
                                <div class="col-md-8 ">
                                    <div class="form-check form-check-inline pt-2">
                                        <input class="form-check-input" type="radio" name="private" id="private" value="private">
                                        <label class="form-check-label" for="private">Private</label>
                                    </div>
                                    <div class="form-check form-check-inline pt-2">
                                        <input class="form-check-input" type="radio" name="professional" id="private" value="professional">
                                        <label class="form-check-label" for="professional">Professional</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="judul" class="col-md-3 col-form-label">Judul <sup style="color:tomato">*</sup></label>
                                <div class="col-md-8">
                                    <input type="text" class="form-control" id="judul" name="judul" placeholder="Judul Iklan">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="deskripsi" class="col-md-3 col-form-label">Deskripsi <sup style="color: tomato">*</sup></label>
                                <div class="col-md-12">
                                    <div id="summernote">
                                        <textarea name="contents" id="summernote" rows="4" cols="70"></textarea>
                                    </div>
                                </div>
                                <small class="col-md-10">Deskripsikan apa yang membuat iklan anda menarik dan unik</small>
                            </div>
                            <div class="form-group row">
                                <label for="deskripsi" class="col-md-3 col-form-label">Upload Gambar</label>
                                <div class="col-md-8">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
                                        <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="price" class="col-md-3 col-form-label">Harga</label>
                                <div class="input-group mb-3 col-md-8">
                                    <div class="input-group-prepend ">
                                        <span class="input-group-text">RP</span>
                                    </div>
                                    <input type="text" class="form-control" placeholder="Contoh : 15000" name="negotiable">
                                </div>
                            </div>
                            <!-- Tangga Lahir -->
                            <div class="form-group row">
                                <label for="birthdate" class="col-md-3 col-form-label">Deadline <sup style="color: red;">*</sup></label>
                                <div class="col-md-8">
                                    <div class="input-group">
                                        <input type="date" class="form-control" id="deadline" name="deadline" required>
                                    </div>
                                </div>
                                <div class="col-md-1"></div>
                            </div>
                            <div class="form-group row">
                                <label for="kota" class="col-md-3 col-form-label">Kota <sup style="color: red;">*</sup></label>
                                <div class="col-md-8">
                                    <div class="control">
                                        <select class="custom-select" name="kota">
                                            <option value="" placeo>--Pilih Kota--</option>
                                            <?php
                                            foreach ($dt_kabupaten as $row) {
                                                echo "<option value='" . $row->id_kabupaten . "'>" . $row->nama_kabupaten . "</option>";
                                            }
                                            echo "
                                        </select>"
                                            ?>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="tag" class="col-md-3 col-form-label">Tag</label>
                                <div class="col-md-8">
                                    <input type="text" class="form-control" id="tag" placeholder="Masukkan Tag">
                                    <small class="col-md-8">masukkan Tag dipisah dengan koma</small>
                                </div>
                            </div>
                            <br>
                            <hr>
                            <div class="content-subheading">
                                <i class="bi bi-person-fill"></i>
                                <strong>Informasi Pemasang Iklan</strong>
                            </div>
                            <hr>
                            <br>
                            <div class="form-group row">
                                <label for="nama" class="col-md-3 col-form-label">Nama Anda<sup style="color:tomato">*</sup></label>
                                <div class="col-md-8">
                                    <input type="text" class="form-control" id="nama" placeholder="Judul Iklan">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="email" class="col-md-3 col-form-label">Email<sup style="color:tomato">*</sup></label>
                                <div class="input-group mb-3 col-md-8">
                                    <div class="input-group-prepend ">
                                        <span class="input-group-text"><i class="bi bi-envelope-fill"></i></span>
                                    </div>
                                    <input type="email" class="form-control" placeholder="Email">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="telp" class="col-md-3 col-form-label">Nomor Telepon</label>
                                <div class="input-group mb-3 col-md-8">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">+62</span>
                                    </div>
                                    <input type="text" class="form-control" placeholder="852333****" aria-describedby="telp-add">
                                    <div class="input-group-append"><span class="input-group-text">
                                            <input id="negotiable" name="negotiable" type="checkbox" value="1">&nbsp;<small>Sembunyikan</small></span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-8">
                                    <input type="checkbox" id="verify" value="1" name="verify">
                                    <small class="md-2"><strong>I want to register by submmiting this ad</strong></small>
                                    <br>
                                    <small>You will receive your authentication information by email.</small>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-8">
                                    <div class="g-recaptcha" data-sitekey="6LfcdL4aAAAAAJhUJSD1sa-1dW8AsrIjQ7rj_zj9"></div>
                                </div>
                            </div>
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
                        <p style="font-size: 14px;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis mollitia non odit distinctio a nam dignissimos placeat dolorum incidunt commodi, pariatur omnis. Nemo laborum explicabo assumenda iste nihil quasi vel?</p>
                    </div>
                    <div class="reg-text-box p-3">
                        <div class="card">
                            <div class="card-header">
                                <h6><strong>bagaimana menjual agar cepat laku?</strong></h6>
                            </div>
                            <div class="card-body text-left">
                                <ul>
                                    <li><small>Gunkan judul yang singkat dan deskripsi item tersebut</small></li>
                                    <li><small>Pastikan Anda mempostin di kategori yang tepat</small> </li>
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
<script src="[ckeditor-build-path]/ckeditor.js"></script>
<script src='https://www.google.com/recaptcha/api.js'></script>
<script>
    ClassicEditor
        .create(document.querySelector('#editor'))
        .then(editor => {
            console.log(editor);
        })
        .catch(error => {
            console.error(error);
        });
</script>

</html>