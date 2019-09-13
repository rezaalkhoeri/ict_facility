<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title><?= $title; ?></title>

  <!-- Custom fonts for this template-->
  <link href="<?= base_url('assets'); ?>/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="<?= base_url('assets'); ?>/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

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
        <a class="nav-link" href="<?= base_url('Requisition/index');?>">
        <i class="fas fa-fw fa-angle-double-right"></i>
          <span class="font-weight-bold">Requisition</span></a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="<?= base_url('servicedesk/procurement');?>">
        <i class="fas fa-fw fa-angle-double-right"></i>
          <span class="font-weight-bold">Procurement</span></a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="<?= base_url('servicedesk/distribution');?>">
        <i class="fas fa-fw fa-angle-double-right"></i>
          <span class="font-weight-bold">Distribution</span></a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="<?= base_url('servicedesk/facilities');?>">
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

    <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Logout?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Yes" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-danger" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-success" href="<?= base_url('auth/logout');?>">Yes</a>
        </div>
      </div>
    </div>
  </div>

