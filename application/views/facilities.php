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
          <h1 class="h3 mb-4 text-gray-800 font-weight-bold">Facilities/Asset Report</h1>

        <!-- table -->
      <input class="form-control" id="posSearch" type="text" placeholder="Search here...">
      <br>
      <div class="panel-body">
			<table id="tblData1" class="table table-bordered">
    		<thead class="thead-dark">
          <tr>
            <th scope="col">Cost Center</th>
            <th scope="col">Quantity</th>
            <th scope="col">Item</th>
            <th scope="col">Asset Number</th>
            <th scope="col">Condition</th>
            <th scope="col">Value Price</th>
            <th scope="col">Location</th>                         
          </tr>
        </thead>
        <tbody id="posTable">
        <?php
        foreach ($get as $a) {
        #code
        ?>

        <tr>
        <td scope="col"><?= $a->cost_center?></td>
        <td scope="col"><?= $a->quantity?></td>
        <td scope="col"><?= $a->item?></td>
        <td scope="col"><?= $a->assetnumber?></td>
        <td scope="col"><?= $a->condition?></td>
        <td scope="col"><?= $a->valueprice?></td>
        <td scope="col"><?= $a->location?></td>
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