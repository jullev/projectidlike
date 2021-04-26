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
        <div class="col-md-10 col-lg-8 col-xl-7 mx-auto">
          <form>
            <div class="form-row">
              <div class="col">
                <div class="input-group">
                  <div class="input-group-prepend"></div><input class="form-control" type="text" placeholder="Apa ?"><input class="form-control" type="text" placeholder="Dimana ?">
                  <div class="input-group-append"><button class="btn btn-primary text-left" type="button">Go!<i class="fa fa-search float-left d-xl-flex justify-content-xl-center align-items-xl-center"
                        style="transform: translate(-2px) translateX(-2px) translateY(3px);"></i></button></div>
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
  </div>
  
  <?php $this->load->view('user/_partials/footer.php'); ?>

</body>

</html>
