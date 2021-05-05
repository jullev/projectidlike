<!DOCTYPE html>
<html>

<?php $this->load->view('user/_partials/head.php'); ?>

<body>

  <?php $this->load->view('user/_partials/navbar.php'); ?>

  <header class="text-center text-white masthead" style="background: url(&quot;<?php echo base_url('assets/assets/img/1-11.jpg')?>&quot;) top / cover;">
    <div class="d-inline-block overlay" style="background: rgb(55,100,146);"></div>
    <div class="container">
      <div class="row">
        <div class="col-xl-9 mx-auto">
          <h1 class=" text-center mb-0">
            PASANG-NEGO-BERES
          </h1>
          <h3 class="text-center">
            Mudah, Cepat, Efisien
          </h3>
        </div>
        <div class="col-md-10 col-lg-8 col-xl-8 mx-auto mt-2">
          <form>
            <div class="form-row card mx-auto rounded-pill">
              <div class="col">
                <div class="input-group ml-3 my-2">
                  <select class="custom-select mr-1" style="border-top: none !important;border-bottom: none !important;border-left: none !important;" id="inputGroupSelect01">
                    <option selected>Kategori</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                  </select>
                  <input class="form-control mr-1" style="border-top: none !important;border-bottom: none !important;border-left: none !important;" type="text" placeholder="Apa ?">
                  <input class="form-control mr-1" style="border: none !important;" type="text" placeholder="Dimana ?">
                  <button type="submit" class="btn btn-primary rounded-pill mr-4"><i class="bi-search"></i> Cari!</button>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </header>
  <div class="container">
    <section style="background: #e9ecef;margin: 10px;padding: 10px;border-style: none;border-radius: 5px;box-shadow: 0px 0px 0px rgb(27,30,33);">
      <div class="container-lg" style="margin: 10px;">
        <div class="row">
          <div class="col">
            <h1>Pilih kota atau daerah</h1>
          </div>
        </div>
        <div class="row">
          <div class="col">
            <div class="row">
              <div class="col">
                <form>
                  <div class="form-row">
                    <div class="col-md-3">
                      <ul class="list-unstyled">
                        <li>Jakarta</li>
                        <li>Bandung</li>
                        <li>Medan</li>
                        <li>Suarabaya</li>
                        <li>Bekasi</li>
                      </ul>
                    </div>
                    <div class="col-md-3">
                      <ul class="list-unstyled">
                        <li>Palembang</li>
                        <li>Makassar</li>
                        <li>Tanggerang</li>
                        <li>South Tanggerang</li>
                        <li>Semarang</li>
                      </ul>
                    </div>
                    <div class="col-md-3">
                      <ul class="list-unstyled">
                        <li>Depok</li>
                        <li>Batam</li>
                        <li>Padang</li>
                        <li>Denpasar</li>
                        <li>Kota Lainnya</li>
                      </ul>
                    </div>
                    <div class="col-md-3 col-xl-3" style="transform: translateX(164px);"><img src="<?php echo base_url('assets/assets/img/c12261c78e0a35b60cceb2315d3a277b.png')?>" width="300px" style="transform: translateX(-197px);"></div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
	  <div class="container" style="padding: 20px;">
		  <div class="card">
			  <div class="card-header">
				  <span style="font-weight: bold;">Iklan</span>
				  <span>Terbaru</span>
			  </div>
			  <div class="card-body">
				  <div class="row" style="padding-left: 10px; padding-right: 10px;">
					  <div class="card col-sm-3" style="width: 18rem; padding: 10px;">
						  <img class="card-img-top" src="assets/image/Inside-Out.jpg" alt="Card image cap">
						  <div class="card-body">
							  <h5 class="card-title">Card title</h5>
							  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
							  <a href="#" class="btn btn-primary">Go somewhere</a>
						  </div>
					  </div>
					  <div class="card col-sm-3" style="width: 18rem; padding: 10px;">
						  <img class="card-img-top" src="assets/image/Inside-Out.jpg" alt="Card image cap">
						  <div class="card-body">
							  <h5 class="card-title">Card title</h5>
							  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
							  <a href="#" class="btn btn-primary">Go somewhere</a>
						  </div>
					  </div>
					  <div class="card col-sm-3" style="width: 18rem; padding: 10px;">
						  <img class="card-img-top" src="assets/image/Inside-Out.jpg" alt="Card image cap">
						  <div class="card-body">
							  <h5 class="card-title">Card title</h5>
							  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
							  <a href="#" class="btn btn-primary">Go somewhere</a>
						  </div>
					  </div>
					  <div class="card col-sm-3" style="width: 18rem; padding: 10px;">
						  <img class="card-img-top" src="assets/image/Inside-Out.jpg" alt="Card image cap">
						  <div class="card-body">
							  <h5 class="card-title">Card title</h5>
							  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
							  <a href="#" class="btn btn-primary">Go somewhere</a>
						  </div>
					  </div>
				  </div>
			  </div>
		  </div>
	  </div>
  </div>
  <!-- footer -->
  <?php $this->load->view('user/_partials/footer.php'); ?>
  <!-- /footer -->
</body>

</html>
