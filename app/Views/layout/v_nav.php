  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="<?= base_url(); ?>/template/index3.html" class="brand-link">
      <img src="<?= base_url(); ?>/template/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Interior Padang</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?= base_url(); ?>/template/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="<?= base_url('admin'); ?>" class="d-block"><?= session()->get('nama_user'); ?></a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          
          <li class="nav-item">
            <a href="<?= base_url(); ?>/admin/dashboard" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?= base_url(); ?>/admin/blog" class="nav-link">
              <i class="nav-icon fab fa-blogger"></i>
              <p>
                Blog
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?= base_url(); ?>/admin/berita" class="nav-link">
              <i class="nav-icon fab fa-blogger"></i>
              <p>
                Berita
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Testing
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?= base_url(); ?>/template/index.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Testing v1</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= base_url(); ?>/template/index2.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Testing v2</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= base_url(); ?>/template/index3.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Testing v3</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="<?= base_url(); ?>/template/widgets.html" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Widgets
                <span class="right badge badge-danger">New</span>
              </p>
            </a>
          </li>
          <li class="nav-header">EXAMPLES</li>
          <li class="nav-item">
            <a href="<?= base_url(); ?>/template/calendar.html" class="nav-link">
              <i class="nav-icon far fa-calendar-alt"></i>
              <p>
                Calendar
                <span class="badge badge-info right">2</span>
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?= base_url(); ?>/logout" class="nav-link btn btn-warning">
              <i class="nav-icon fas fa-sign-out"></i>
              <p>
                Logout
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>  
    <!-- /.sidebar -->
  </aside>
