    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-success sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= base_url('user');?>">
        <div class="sidebar-brand-icon rotate-n-15">
        <i class="fas fa-fw fa-info-circle"></i>
        </div>
        <div class="sidebar-brand-text mx-3 text-monospace">ICT Facility</div>
        </a>
      
      <a class="sidebar-brand d-flex align-items-center justify-content-center">
      <div class="sidebar-brand-icon">
        <img class="img-responsive animated--grow-in" src="<?= base_url('assets/img/icons8-male-user-52.png');?>">
      </div>
      </a>
        
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
      <div class="sidebar-brand-icon">
      <span class="mr-2 d-none d-lg-inline text-white-600 small font-weight-bold">Hello, <?= $this->session->userdata('name');?></span>
      </div>
      </a>

  <br>
  
      <div style="margin-top: -100px;">
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#" data-toggle="modal" data-target="#logoutModal">
        <div class="sidebar-brand-icon" data-target="#logoutModal">
          <button type="submit" class="btn btn-danger btn-user btn-block font-weight-bold" > 
            Logout
          </button>
        </a>

      <!-- Divider -->
      <hr class="sidebar-divider">
      
      <!-- Nav Item - Dashboard -->
      <li class="nav-item">
        <a class="nav-link" href="<?= base_url('Item/index');?>">
        <i class="fas fa-fw fa-angle-double-right"></i>
          <span class="font-weight-bold">Item Management</span></a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="<?= base_url('Additem/index');?>">
        <i class="fas fa-fw fa-angle-double-right"></i>
          <span class="font-weight-bold">Item</span></a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="<?= base_url('Users/index');?>">
        <i class="fas fa-fw fa-angle-double-right"></i>
          <span class="font-weight-bold">User Management</span></a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="<?= base_url('Location/index');?>">
        <i class="fas fa-fw fa-angle-double-right"></i>
          <span class="font-weight-bold">Location</span></a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="<?= base_url('Requisition/index');?>">
        <i class="fas fa-fw fa-angle-double-right"></i>
          <span class="font-weight-bold">Requisition</span></a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="<?= base_url('Procurement/index');?>">
        <i class="fas fa-fw fa-angle-double-right"></i>
          <span class="font-weight-bold">Procurement</span></a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="<?= base_url('Distribution/index');?>">
        <i class="fas fa-fw fa-angle-double-right"></i>
          <span class="font-weight-bold">Distribution</span></a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="<?= base_url('Facilities/index');?>">
        <i class="fas fa-fw fa-angle-double-right"></i>
          <span class="font-weight-bold">Facilities/Asset Report</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-block">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
   
    <!-- End of Sidebar -->