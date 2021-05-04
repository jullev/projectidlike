<aside class="main-sidebar sidebar-dark-primary elevation-3 " id="sidebar">
  <!-- Brand Logo -->
  <a href="<?php echo site_url('admin') ?>" class="brand-link">
    <img src="<?php echo base_url('assets/dist/img/AdminLTELogo.png') ?>" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
    <span class="brand-text font-weight-light"><strong>TEMANTUMBUH</strong></span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar nav">
    <!-- Sidebar Menu -->
    <div class="sidebar nav-collapse">
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="col text-left">
          <div class="info">
            <a href="#myadmin" role="button" aria-expanded="false" aria-controls="myAds" data-toggle="collapse">
              <i class="bi bi-person-lines-fill"></i>&nbsp;&nbsp;<strong>
                ADMINISTRATOR
              </strong><i class="bi bi-chevron-double-right"></i>
            </a>
          </div>
        </div>
      </div>
      <div class="collapse" id="myadmin">
        <div role="tabpanel" style="color:black !important">
          <!-- List group -->
          <div class="list-group" id="myList" role="tablist">
            <a class="list-group-item list-group-item-action text-dark" href="<?php echo site_url('tambahadmin') ?>" role="tab">Tambah Admin</a>
            <a class="list-group-item list-group-item-action text-dark" href="<?php echo site_url('adminlist') ?>" role="tab">List Admin</a>
            <a class="list-group-item list-group-item-action text-dark" href="<?php echo site_url('#') ?>" role="tab">Management User</a>
          </div>
        </div>
      </div>
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="col text-left">
          <div class="info">
            <a href="#myAds" role="button" aria-expanded="false" aria-controls="myAds" data-toggle="collapse">
              <i class="bi bi-chat-right-text-fill"></i>&nbsp;&nbsp;<strong>
                MANAGEMENT IKLAN
              </strong><i class="bi bi-chevron-double-right"></i>
            </a>
          </div>
        </div>
      </div>
      <div class="collapse" id="myAds">
        <div role="tabpanel" style="color:black">
          <!-- List group -->
          <div class="list-group" id="myList2" role="tablist">
            <a class="list-group-item list-group-item-action text-dark" href="#home" role="tab">Pengajuan</a>
            <a class="list-group-item list-group-item-action text-dark" href="#profile" role="tab">Disetujui</a>
            <a class="list-group-item list-group-item-action text-dark" href="#profile" role="tab">Dibatalkan</a>
            <a class="list-group-item list-group-item-action text-dark" href="#profile" role="tab">Riwayat</a>
          </div>
        </div>
      </div>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>