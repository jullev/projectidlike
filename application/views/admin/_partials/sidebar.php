<aside class="main-sidebar sidebar-dark-primary elevation-4" id="sidebar">
  <!-- Brand Logo -->
  <a href="index3.html" class="brand-link">
    <img src="<?php echo base_url('assets/dist/img/AdminLTELogo.png') ?>" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
    <span class="brand-text font-weight-light">AdminLTE 3</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar nav">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="<?php echo base_url('assets/dist/img/user2-160x160.jpg') ?>" class="img-circle elevation-2" alt="User Image">
      </div>
      <div class="info">
        <a href="#" class="d-block">Alexander Pierce</a>
      </div>
    </div>

    <!-- Sidebar Menu -->
    <div class="sidebar nav-collapse">
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="col text-left">
          <div class="info">
            <a href="<?php echo site_url('admin') ?>" role="button" aria-expanded="false" aria-controls="myAds">
              <i class="bi bi-speedometer2"></i>&nbsp;&nbsp;<strong>
                DASHBOARD
              </strong><i class="bi bi-chevron-double-right"></i>
            </a>
          </div>
        </div>
      </div>
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
        <div role="tabpanel" style="color:black">
          <!-- List group -->
          <div class="list-group" id="myList" role="tablist">
            <a class="list-group-item list-group-item-action" href="<?php echo site_url('tambahadmin') ?>" role="tab">Tambah Admin</a>
            <a class="list-group-item list-group-item-action" href="<?php echo site_url('adminlist') ?>" role="tab">List Admin</a>
          </div>
        </div>
      </div>
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="col text-left">
          <div class="info">
            <a href="#myAds" role="button" aria-expanded="false" aria-controls="myAds" data-toggle="collapse">
              <i class="bi bi-chat-right-text-fill"></i>&nbsp;&nbsp;<strong>
                LIST IZIN IKLAN
              </strong><i class="bi bi-chevron-double-right"></i>
            </a>
          </div>
        </div>
      </div>
      <div class="collapse" id="myAds">
        <div role="tabpanel" style="color:black">
          <!-- List group -->
          <div class="list-group" id="myList2" role="tablist">
            <a class="list-group-item list-group-item-action" href="#home" role="tab">Pengajuan</a>
            <a class="list-group-item list-group-item-action" href="#profile" role="tab">Disetujui</a>
            <a class="list-group-item list-group-item-action" href="#profile" role="tab">Dibatalkan</a>
            <a class="list-group-item list-group-item-action" href="#profile" role="tab">Riwayat</a>
          </div>
        </div>
      </div>

      <!-- <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
      <!-- <li class="nav-item has-treeview menu-open">
          <a href="#" class="nav-link active">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>
              Dashboard
            </p>
          </a>
        </li>
        <li class="nav-item has-treeview menu-open">
          <a href="#" class="nav-link">
            <i class="nav-icon bi bi-people-fill"></i>
            <p>
              Admin
            </p>
          </a>
        </li>
      </ul>
    </nav> -->
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>