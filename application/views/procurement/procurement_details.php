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
          <h1 class="h3 mb-4 text-gray-800 font-weight-bold">Procurement | Details</h1>
          <?php foreach ($get as $d) { ?>

        <form action="<?= base_url('Procurement/details/'.$d->id);?>" method="post">

       <!-- no ticket -->
				<div class="form-group">
				<label for="ticket">Ticket</label>
        <input type="text" class="form-control" id="ticket" name="ticket" value="<?= $d->no_tiket?>">
        </div>

			 <!-- cost center -->
				<div class="form-group">
				<label for="costcenter">Cost Center</label>
        <input type="text" class="form-control" id="costcenter" name="costcenter" value="<?= $d->cost_center?>">
        </div>

      <!-- requestor -->
        <div class="form-group">
        <label for="requestor">Requestor</label>
        <input type="text" class="form-control" id="requestor" name="requestor" value="<?= $d->requestor?>">
        </div>

      <!-- quantity -->
        <div class="form-group">
        <label for="quantity">Quantity</label>
        <input type="text" class="form-control" id="quantity" name="quantity" value="<?= $d->quantity?>">
        </div>

      <!-- item -->
        <div class="form-group">
        <label for="item">Item</label>
        <input type="text" class="form-control" id="item" name="item" value="<?= $d->jenis.' | '.$d->merek ?>">
        </div>

      <!-- serial number -->
        <div class="form-group">
        <label for="serialnumber">Serial Number</label>
        <input type="text" class="form-control" id="serialnumber" name="serialnumber" value="<?= $d->serial_number?>">
        </div>

      <!-- asset number -->
        <div class="form-group">
        <label for="assetnumber">Asset Number</label>
        <input type="text" class="form-control" id="assetnumber" name="assetnumber" value="<?= $d->asset_number?>">
        </div>

      <!-- value price -->
        <div class="form-group">
        <label for="valueprice">Value Price</label>
        <input type="text" class="form-control" id="valueprice" name="valueprice" value="<?= "Rp ".number_format($d->value_price,2,',','.');?>">
        </div>
       
      <!-- payment method -->
        <div class="form-group">
        <label for="paymentmethod">Payment Method</label>
        <input type="text" class="form-control" id="paymentmethod" name="paymentmethod" value="<?= $d->payment_method?>">
        </div>

			<!-- status -->
        <div class="form-group">
        <label for="status">Status</label>
        <input type="text" class="form-control" id="status" name="status" value="<?= $d->status?>">
        </div>

      <!-- description -->
        <div class="form-group">
        <label for="description">Description</label>
        <textarea class="form-control" id="description" rows="3" name="description"><?= $d->deskripsi?>
        </textarea>
        </div>
        
      <!-- button back-->
        <a href="<?= base_url('Procurement/index')?>" role="button">
        <button type="button" value="submit" class="btn btn-danger"> 
        Back
      </button>
      </a>

      </form>
      <?php } ?>

      <hr>
      
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