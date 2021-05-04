<aside class="main-sidebar sidebar-dark-primary elevation-4 " id="sidebar">
  <!-- Brand Logo -->
  <a href="<?php echo site_url('admin') ?>" class="brand-link">
    <img src="<?php echo base_url('assets/dist/img/AdminLTELogo.png') ?>" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
    <span class="brand-text font-weight-light"><strong>TEMANTUMBUH</strong></span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Sidebar Administrator -->
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon bi bi-person-lines-fill align-middle"></i>
              <p>
                Administrator
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo site_url('tambahadmin') ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Tambah Admin</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo site_url('adminlist') ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>List Admin</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo site_url('managementuser') ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Management User</p>
                </a>
              </li>
            </ul>
          </li>
          <!-- End Sidebar Administrator -->
          <!-- Sidebar Management Iklan -->
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon bi-chat-right-text-fill align-middle"></i>
              <p>
                Management Iklan
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo site_url('') ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Pengajuan</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo site_url('') ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Disetujui</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo site_url('') ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Dibatalkan</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo site_url('') ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Riwayat</p>
                </a>
              </li>
            </ul>
          </li>
          <!-- End Sidebar Management Iklan -->
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>