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
          <h1 class="h3 mb-4 text-gray-800 font-weight-bold">Distribution | Details</h1>
          <?php foreach ($get as $d) { ?>

        <form action="<?= base_url('Distribution/details/'.$d->id);?>" method="post" style="align-content:center">

       <!-- receipt number -->
        <div class="form-group row">
          <label for="receiptnumber" class="col-sm-2 col-form-label">Receipt Number</label>
          <div class="col-sm-10">
            <input type="text" readonly class="form-control-plaintext" id="receiptnumber`" name="receiptnumber`" value="<?= $d->receipt_number?>">
          </div>
        </div>

	    <!-- cost center -->
        <div class="form-group row">
        <label for="costcenter" class="col-sm-2 col-form-label">Cost Center</label>
        <div class="col-sm-10">
        <input type="text" readonly class="form-control-plaintext" id="costcenter" name="costcenter" value="<?= $d->cost_center?>">
        </div>
        </div>

        <!-- requestor -->
        <div class="form-group row">
        <label for="requestor" class="col-sm-2 col-form-label">Requestor</label>
        <div class="col-sm-10">
        <input type="text" readonly class="form-control-plaintext" id="requestor" name="requestor" value="<?= $d->requestor?>">
        </div>
        </div>

        <!-- quantity -->
        <div class="form-group row">
        <label for="quantity" class="col-sm-2 col-form-label">Quantity</label>
        <div class="col-sm-10">
        <input type="text" readonly class="form-control-plaintext" id="quantity" name="quantity" value="<?= $d->quantity?>">
        </div>
        </div>

        <!-- item -->
        <div class="form-group row">
          <label for="item" class="col-sm-2 col-form-label">Item</label>
          <div class="col-sm-10">
            <input type="text" readonly class="form-control-plaintext" name="item" id="item" value="<?= $d->jenis.' | '.$d->merek?>">
          </div>
        </div>

        <!-- serial number -->
        <div class="form-group row">
        <label for="serialnumber" class="col-sm-2 col-form-label">Serial Number</label>
        <div class="col-sm-10">
        <input type="text" readonly class="form-control-plaintext" id="serialnumber" name="serialnumber" value="<?= $d->serial_number?>">
        </div>
        </div>

        <!-- asset number -->
        <div class="form-group row">
        <label for="assetnumber" class="col-sm-2 col-form-label">Asset Number</label>
        <div class="col-sm-10">
        <input type="text" readonly class="form-control-plaintext" id="assetnumber" name="assetnumber" value="<?= $d->asset_number?>">
        </div>
        </div>

        <!-- value price -->
        <div class="form-group row">
        <label for="valueprice" class="col-sm-2 col-form-label">Value Price</label>
        <div class="col-sm-10">
        <input type="text" readonly class="form-control-plaintext" id="valueprice" name="valueprice" value="<?= "Rp ".number_format($d->value_price,2,',','.');?>">
        </div>
        </div>

        <!-- payment method -->
        <div class="form-group row">
        <label for="paymentmethod" class="col-sm-2 col-form-label">Payment Method</label>
        <div class="col-sm-10">
        <input type="text" readonly class="form-control-plaintext" id="paymentmethod" name="paymentmethod" value="<?= $d->payment_method?>">
        </div>
        </div>

		<!-- status -->
        <div class="form-group row">
        <label for="status" class="col-sm-2 col-form-label">Status</label>
        <div class="col-sm-10">
        <input type="text" readonly class="form-control-plaintext" id="status" name="status" value="<?= $d->status?>">
        </div>
        </div>

      <!-- description -->
        <div class="form-group row">
        <label for="description" class="col-sm-2 col-form-label">Description</label>
        <div class="col-sm-10">
        <textarea readonly class="form-control-plaintext" id="description" rows="3" name="description"><?= $d->deskripsi?>
        </textarea>
        </div>
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