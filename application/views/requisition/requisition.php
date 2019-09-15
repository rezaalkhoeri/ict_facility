<?php
mysqli_connect("localhost", "root", "", "ictfacility");


?>

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
        <h1 class="h3 mb-4 text-gray-800 font-weight-bold">Requisition</h1>
        
      <!-- button next-->
      <a href="<?= base_url('Requisition/index_input')?>" role="button">
        <button type="button" value="" class="btn btn-success"> 
        New Order
      </button>
      </a>      
      <hr>
      <input class="form-control" id="posSearch" type="text" placeholder="Search here...">
      <br>
      <div class="panel-body">
			<table id="tblData1" class="table table-bordered">
    		<thead class="thead-dark">
          <tr>
            <th scope="col">Ticket</th>
            <th scope="col">Item</th>
            <th scope="col">Asset Number</th>
            <th scope="col">Serial Number</th>                         
            <th scope="col">Cost Center</th>
            <th scope="col">Quantity</th>
            <th scope="col">Date</th>
            <th scope="col">Requestor</th>
            <th scope="col">Description</th>
            <th scope="col">Status</th>
            <th scope="col">Action</th>

          </tr>
        </thead>
        <tbody id="posTable" >
        <?php 
        foreach ($get as $a) {
          # code...
          ?>

          <tr>
          <td scope="col"><?= $a->no_tiket?></td>
          <td scope="col"><?= $a->jenis.'|'.$a->merek?></td>
          <td scope="col"><?= $a->asset_number?></td>
          <td scope="col"><?= $a->serial_number?></td>                         
          <td scope="col"><?= $a->cost_center?></td>
          <td scope="col"><?= $a->quantity?></td>
          <td scope="col"><?= $a->date?></td>
          <td scope="col"><?= $a->requestor?></td>
          <td scope="col"><?= $a->deskripsi?></td>
          <td scope="col"><?= $a->status?></td>
          
          <?php 
          if ($this->session->userdata('role_id') == 3) {   
            ?>          
          <td scope="col">
              <a href="edit/<?php echo $a->id ?>"><span class="badge badge-primary">Edit</span></a>
              <a href="hapus/<?php echo $a->id ?>"><span class="badge badge-danger">Delete</span></a>
              <a href="#"><span class="badge badge-success">Approve</span></a>
          </td>
          <?php
        } else {
          ?>
          <td scope="col">
              <a href="edit/<?php echo $a->id ?>"><span class="badge badge-primary">Edit</span></a>
              <a href="hapus/<?php echo $a->id ?>"><span class="badge badge-danger">Delete</span></a>
              
          </td>
          <?php
        } ?>
          </tr>

        <?php } 
        ?>

        </tbody>
      </table>
      </div>
      </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->


      

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

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