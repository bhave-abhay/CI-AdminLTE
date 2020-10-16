<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="<?=base_url();?>/index3.html" class="brand-link">
    <i class="nav-icon fas fa-tachometer-alt fa-4"></i>
    <span class="brand-text font-weight-light">Vehicle Manager</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="<?=base_url();?>/<?=$user['profile_image']?>" class="img-circle elevation-2" alt="User Image">
      </div>
      <div class="info">
        <a href="<?=base_url();?>/#" class="d-block"><?=$user['name']?></a>
      </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
             with font-awesome or any other icon font library -->
        <li class="nav-item has-treeview menu-open">
          <a href="<?=base_url();?>/#" class="nav-link">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>
              Menu 1
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="<?=base_url();?>/menu-1-1" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Menu 1.1</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?=base_url();?>/menu-1-2" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Menu 1.2</p>
              </a>
            </li>
          </ul>
        </li>
        <li class="nav-item has-treeview">
          <a href="<?=base_url();?>/#" class="nav-link">
            <i class="nav-icon fas fa-copy"></i>
            <p>
                Menu 2
              <i class="fas fa-angle-left right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="<?=base_url();?>/pages/layout/top-nav.html" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Menu 2.1</p>
              </a>
            </li>
          </ul>
        </li>
      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>
