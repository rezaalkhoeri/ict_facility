<?php
mysqli_connect("localhost", "root", "", "ictfacility");


?>

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
        <i class="fas fa-info-circle"></i>
        </div>
        <div class="sidebar-brand-text mx-3">ICT Facility</div>
        </a>
      
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
      <div class="sidebar-brand-icon">
        <img class="img-responsive animated--grow-in" src="<?= base_url('assets/img/icons8-male-user-52.png');?>">
      </div>
      </a>
        
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
      <div class="sidebar-brand-icon">
      <span class="mr-2 d-none d-lg-inline text-white-600 small">Hello, <?= $this->session->userdata('name');?></span>
      </div>
      </a>

      <div style="margin-top: -100px;">
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#" data-toggle="modal" data-target="#logoutModal">
      <div class="sidebar-brand-icon" data-target="#logoutModal">
      <button type="submit" class="btn btn-danger btn-user btn-block" > 
        Logout
      </button>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider">
      
      <!-- Nav Item - Dashboard -->
      <li class="nav-item">
        <a class="nav-link" href="#">
        <i class="fas fa-angle-double-right"></i>
          <span>Requisition</span></a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="<?= base_url('user/procurement');?>">
        <i class="fas fa-angle-double-right"></i>
          <span>Procurement</span></a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="<?= base_url('user/distribution');?>">
        <i class="fas fa-angle-double-right"></i>
          <span>Distribution</span></a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="<?= base_url('user/facilities');?>">
        <i class="fas fa-angle-double-right"></i>
          <span>Facilities/Asset Report</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-block">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>

   
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

            <!-- <div class="topbar-divider d-none d-sm-block"></div> -->

                <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                <img class="img-responsive animated--grow-in" width="240px" height="70px" src="<?= base_url('assets/img/pdsibaru.jpg');?>">
                </div>
              </a>
              
            </li>

          </ul>

        </nav>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-4 text-gray-800">Edit Form Requisition</h1>

		<?php  
		foreach($requisition as $d ) {
			# code...
		?>

        <!-- search -->
        <form action="<?= base_url('Requisition/update/');?><?php echo $d->id ?>" method="post" name="my_form">

        <!-- ticket -->
        <div id="ticket_feedback" class="form-group">
        <label for="ticket">Ticket</label>
        <input type="text" value="<?php echo $d->ticket ?>" class="form-control" id="ticket" name="ticket" maxlength="15">
        </div>
 
			 <!-- item -->
				<div 
				class="form-group">
			 	<label for="item">Item</label>
			 	<select class="form-control" name="item" id="item">
				 			<option >Choose</option>
              <option <?php if($d->item == "Handphone"){echo "selected";}?>>Handphone</option>
              <option <?php if($d->item == "Handy Talk"){echo "selected";}?>>Handy Talk</option>
              <option <?php if($d->item == "PC Desktop"){echo "selected";}?>>PC Desktop</option>
              <option <?php if($d->item == "Printer"){echo "selected";}?>>Printer</option>
              <option <?php if($d->item == "Proyektor"){echo "selected";}?>>Proyektor</option>
              <option <?php if($d->item == "Laptop"){echo "selected";}?>>Laptop</option>
							</select>
			 <i class="form-control-feedback"></i>
			 <span class="text-warning" ></span>
			 </div>


			 <!-- cost center -->
				<div 
				class="form-group">
				<label for="costcenter">Cost Center</label>
				<select class="form-control" name="costcenter" id="costcenter" value="<?php echo $d->costcenter ?>">
				 			<option>Choose</option>
							</select>
			 <i class="form-control-feedback"></i>
			 <span class="text-warning" ></span>
			 </div>

      <!-- requestor -->
        <div class="form-group">
        <label for="requestor">Requestor</label>
        <input type="text" class="form-control" name="requestor" id="requestor" value="<?php echo $d->requestor ?>">
        </div>


       <!--date-->
			 <div 
			 class="form-group">
			 <label for="date">Date</label><br/>
			 <input type="date" name="date" id="date" value="<?php echo $d->date ?>">
			 <span class="text-warning"></span>
			 </div>

			<!-- status -->
				<div 
				class="form-group">
				<label for="status">Status</label>
				<select class="form-control" name="status" id="status">
              <option >Choose</option>
				 			<option <?php if($d->status == "Accept"){echo "selected";}?>>Accept</option>
				 			<option <?php if($d->status == "Decline"){echo "selected";}?>>Decline</option>
							</select>
			 <i class="form-control-feedback"></i>
			 <span class="text-warning" ></span>
			 </div>

      <!-- description -->
       <div class="form-group">
        <label for="description">Description</label>
          <textarea class="form-control" name="description" id="description" rows="3"><?php echo $d->description ?></textarea>
       </div>
      
      <!-- Quantity -->
        <div class="form-group">
        <label for="quantity">Quantity</label>
        <input type="text" class="form-control" name="quantity" id="quantity" value="<?php echo $d->quantity ?>">
        </div>

      <!-- button submit-->
        <!-- <a href="#" role="button"> -->
        <button type="submit" value="input" class="btn btn-primary"> 
        Update
      </button>
      <!-- </a> -->

      <!-- button back -->
      <a href="<?= base_url('Requisition/index')?>" role="button">
        <button type="button" value="" class="btn btn-success"> 
        Back
      </button>
      </a>

</form>
      
	<?php } ?>
      
      </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

<!-- Footer -->
<footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; ICT 2019</span>
          </div>
        </div>
      </footer>
<!-- End of Footer -->

      

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

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
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="<?= base_url('auth');?>">Yes</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="<?= base_url('assets'); ?>/vendor/jquery/jquery.min.js"></script>
  <script src="<?= base_url('assets'); ?>/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="<?= base_url('assets'); ?>/vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="<?= base_url('assets'); ?>/js/sb-admin-2.min.js"></script>

</body>

</html>


<script>
$(document).ready(function(){
  $("#posSearch").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#posTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>

<script>
$(document).ready(function() {
    var text_max = 15;
    // $('#ticket_feedback').html(text_max + ' characters remaining');

    $('#ticket').keyup(function() {
        var text_length = $('#ticket').val().length;
        // var text_remaining = text_max - text_length;

        // $('#ticket_feedback').html(text_remaining + ' characters remaining');
    });
});
</script>

<!-- <script>
fungsi buat nampilin table
$(document).ready(function () {
  theTable = $('#tblData1').DataTable({
  	columnDefs: 
					[
            { data: "No", targets: 0 },
            { data: "ana_nm", targets: 1 },
            { data: "project_code_Lv1", targets: 2 },
            { data: "project_nm", targets: 3 },
            { data: "rnr_nm", targets: 4 },
            { data: "sumur_nm", targets: 5 },
            { data: "wbs_code_lv5", targets: 6 },
						// ini buat buttonnya
						{ render: function (data, type, row) 
								{
                    console.log('test');
                    console.log(row);
                    return '<button onclick="viewReport(this);" type="button" title="View Details" class="btn-xs btn btn-primary" data-idreq="' + row.IdReq + '"  data-ReqDescription="' + row.ReqDescription + '"  data-CreatedDate="' + row.CreatedDate + '" data-DueDate="' + row.DueDate + '" data-IsWBS="' + row.IsWBS + '" data-CostCenter="' + row.CostCenter + '" data-WBS_Lv1="' + row.WBS_Lv1 + '" data-WBS_Lv2="' + row.WBS_Lv2 + '" data-WBS_Lv3="' + row.WBS_Lv3 + '" data-WBS_Lv4="' + row.WBS_Lv4 + '" data-WBS_Lv5="' + row.WBS_Lv5 + '"><span class="fa fa-pencil-square-o"></span></button>'
                }, targets: 7, className: 'dt-center'

						}
						
					]
			});
		}); -->