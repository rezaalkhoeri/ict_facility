<!DOCTYPE html>
<html lang="en">

<?php
$this->load->view('partial/head');
?>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <?php
        $this->load->view('partial/sidebar');
    ?>

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <?php
          $this->load->view('partial/topbar');
        ?>

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Distribution - Order</h6>
            </div>
            <div class="card-body">

                <form action="<?= base_url('Distribution/tambah_aksi');?>" method="post" name="my_form">

                <!-- receipt number -->
                <div class="form-group">
                  <label for="receiptnumber">Receipt number</label>
                  <input type="text" class="form-control" id="receiptnumber" name="receiptnumber" disabled>
                </div>

                <!-- ticket -->
                <div class="form-group">
                  <label for="ticket">Ticket</label>

                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <button class="btn btn-outline-secondary" type="button" id="button-addon1">Select</button>
                  </div>
                  <input type="text" class="form-control" placeholder="" aria-label="Example text with button addon" aria-describedby="button-addon1">
                </div>
                </div>

              <!-- recepient -->
                <div class="form-group">
                <label for="recepient">Recepient</label>
                <input type="text" class="form-control" name="recepient" id="recepient" required>
                </div>

              <!-- giver -->
                <div class="form-group">
                <label for="giver">Giver</label>
                <input type="text" class="form-control" name="giver" id="giver" required>
                </div>

              <!-- location -->
                <div class="form-group">
                <label for="location">Location</label>
                <input type="text" class="form-control" name="location" id="location" required>
                </div>

               <!--date-->
        			 <div class="form-group">
        			 <label for="date">Date</label><br/>
        			 <input type="date" name="date" id="actualDate">
        			 <span class="text-warning"></span>
        			 </div>

               <!--status-->
        			 <div class="form-group">
        			 <label for="status">Status</label><br/>
        			 <input type="status" name="status" id="status">
        			 <span class="text-warning"></span>
        			 </div>

              <!-- description -->
               <div class="form-group">
                <label for="description">Description</label>
                  <textarea class="form-control" name="description" id="description" rows="3"></textarea>
               </div>

              <!-- button submit-->
              <div class="form-group">
               <button type="submit" value="input" class="btn btn-primary"> Save </button>
               <button type="reset" value="input" class="btn btn-warning"> Clear </button>
               <a href="<?= base_url('Requisition/index')?>" role="button">
                  <button type="button" value="" class="btn btn-danger">Cancel</button>
                </a>
              </div>

            </form>

          </div>
        </div>

      </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <?php $this->load->view('partial/script'); ?>
      <?php $this->load->view('partial/footer'); ?>

      <script type="text/javascript">
        window.updateCount = function() {
          var x = $(".z:checked").length;
          document.getElementById("y").value = x;
        };

        $( "selector" ).datepicker({
            dateFormat: "yyyy-mm-dd"
        })

      </script>

    </div>
  </div>


</body>

</html>
