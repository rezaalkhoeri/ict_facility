

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
          <h1 class="h3 mb-4 text-gray-800 font-weight-bold">Procurement</h1>

        <form action="<?= base_url('Procurement/tambah_aksi');?>" method="post">

        <!-- ticket -->
        <div id="ticket_feedback" class="form-group">
        <label for="ticket">Ticket</label>
        <input type="text" class="form-control" id="ticket" name="ticket" maxlength="15">
        </div>
 
			 <!-- item -->
				<div 
				class="form-group">
			 	<label for="item">Item</label>
			 	<select class="form-control" name="item" id="item">
				 			<option>Choose</option>
              <option>Handphone</option>
              <option>Handy Talk</option>
              <option>PC Desktop</option>
              <option>Printer</option>
              <option>Proyektor</option>
              <option>Laptop</option>
							</select>
			 <i class="form-control-feedback"></i>
			 <span class="text-warning" ></span>
			 </div>

			 <!-- cost center -->
				<div 
				class="form-group">
				<label for="costcenter">Cost Center</label>
				<select class="form-control" name="costcenter" id="costcenter">
				 			<option>Choose</option>
							</select>
			 <i class="form-control-feedback"></i>
			 <span class="text-warning" ></span>
			 </div>

      <!-- requestor -->
        <div class="form-group">
        <label for="requestor">Requestor</label>
        <input type="text" class="form-control" id="requestor" name="requestor">
        </div>

      <!-- serial number -->
        <div class="form-group">
        <label for="serialnumber">Serial Number</label>
        <input type="text" class="form-control" id="serialnumber" name="serialnumber">
        </div>

      <!-- value price -->
        <div class="form-group">
        <label for="valueprice">Value Price</label>
        <input type="text" class="form-control" id="valueprice" name="valueprice">
        </div>

      <!-- quantity -->
        <div class="form-group">
        <label for="quantity">Quantity</label>
        <input type="number" class="form-control" id="quantity" name="quantity">
        </div>

      <!-- description -->
       <div class="form-group">
        <label for="description">Description</label>
          <textarea class="form-control" id="description" rows="3" name="description">
          </textarea>
       </div>
       
       <!-- payment method -->
        <label for="quantity">Payment Method</label>
        <br>
       <div id="paymentmethod">
       <div class="custom-control custom-radio">
        <input onclick="ShowHideDiv()" type="radio" id="customRadio1" name="customRadio" class="custom-control-input">
          <label class="custom-control-label" for="customRadio1">SCM Purchase</label>
       </div>
      <div class="custom-control custom-radio">
        <input onclick="ShowHideDiv()" type="radio" id="customRadio2" name="customRadio" class="custom-control-input">
          <label class="custom-control-label" for="customRadio2">SCM Rent</label>
      </div>
      <div class="custom-control custom-radio">
        <input onclick="ShowHideDiv()" type="radio" id="customRadio3" name="customRadio" class="custom-control-input">
          <label class="custom-control-label" for="customRadio3">UMK Purchase</label>
      </div>
      <div class="custom-control custom-radio">
        <input onclick="ShowHideDiv()" type="radio" id="customRadio4" name="customRadio" class="custom-control-input">
          <label class="custom-control-label" for="customRadio4">UMK Rent</label>
      </div>
      <div class="custom-control custom-radio">
        <input onclick="ShowHideDiv()" type="radio" id="customRadio5" name="customRadio" class="custom-control-input">
          <label class="custom-control-label" for="customRadio5">Others</label>
      </div>
      <div id="dvtext" style="display: none">
        :
        <input type="text" id="txtBox" />
      </div>
      </div>
      <br>

			<!-- status -->
				<div 
				class="form-group">
				<label for="status">Status</label>
				<select class="form-control" name="status" id="status">
				 			<option>On Process</option>
				 			<option>Done</option>
							</select>
			 <i class="form-control-feedback"></i>
			 <span class="text-warning" ></span>
			 </div>

      <!-- button submit-->
        <a href="#" role="button">
        <button type="submit" value="input" class="btn btn-primary"> 
        Submit
      </button>
      </a>

      <!-- button next-->
        <a href="<?= base_url('user/distribution')?>" role="button">
        <button type="button" value="submit" class="btn btn-success"> 
        Next
      </button>
      </a>

      
      </form>

      <hr>
      <input class="form-control" id="posSearch" type="text" placeholder="Search here...">
      <br>
      <div class="panel-body">
			<table id="tblData1" class="table table-bordered">
    		<thead class="thead-dark">
          <tr>
            <th scope="col">Ticket</th>
            <th scope="col">Item</th>
            <th scope="col">Cost Center</th>
            <th scope="col">Requestor</th>                         
            <th scope="col">Serial Number</th>
            <th scope="col">Value Price</th>
            <th scope="col">Quantity</th>
            <th scope="col">Description</th>
            <th scope="col">Payment Method</th>
            <th scope="col">Status</th>
          </tr>
        </thead>
        <tbody id="posTable" >
        <?php 
        foreach ($get as $a) {
          # code...
          ?>

          <tr>
          <td scope="col"><?= $a->ticket?></td>
          <td scope="col"><?= $a->item?></td>
          <td scope="col"><?= $a->cost_center?></td>
          <td scope="col"><?= $a->requestor?></td>                         
          <td scope="col"><?= $a->serialnumber?></td>
          <td scope="col"><?= $a->valueprice?></td>
          <td scope="col"><?= $a->quantity?></td>
          <td scope="col"><?= $a->description?></td>
          <td scope="col"><?= $a->paymentmethod?></td>
          <td scope="col"><?= $a->status?></td>
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

<script>
function ShowHideDiv() {
        var chkYes = document.getElementById("customRadio5");
        var dvtext = document.getElementById("dvtext");
        dvtext.style.display = chkYes.checked ? "block" : "none";
    }
</script>