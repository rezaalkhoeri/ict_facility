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
              <h6 class="m-0 font-weight-bold text-primary">Procurement - Order</h6>
            </div>
            <div class="card-body">

                <form action="<?= base_url('Procurement/tambah_aksi');?>" method="post" name="my_form">

                <!-- ticket -->
                <div class="form-group">
                  <label for="ticket">Ticket</label>
                  <input type="text" class="form-control" id="ticket" name="ticket" maxlength="15" required>
                </div>

                <div class="form-group">
                  <label for="ticket">Input Item</label>
                <div class="card mb-4 py-3 border-left-success">
                  <div class="card-body">
                <!-- inputan table -->
                    <div class="table-responsive">
                      <table class="table table-bordered" id="inputTable" width="100%" cellspacing="0">
                        <thead id="arrHead" class="thead-dark">
                          <tr>
                            <th scope="col" width="300px">Type</th>
                            <th scope="col" width="300px">Brand</th>
                            <th scope="col" width="300px">Value Price</th>
                            <th scope="col" width="100px">Action</th>
                          </tr>
                        </thead>
                        <tbody id="inputTable" class="row-body" >
                          <tr id='row'>

                          <td scope="col">
                          <!-- type -->
                              <div class="form-group">
                              <input type="text" class="form-control" id="type" name="type[]" required>
                              </div>
                          </td>

                          <td scope="col">
                              <!-- brand -->
                              <div class="form-group">
                              <input type="text" class="form-control" id="brand" name="brand[]" required>
                              </div>
                          </td>

                          <td scope="col">
                              <!-- value price -->
                              <div class="form-group">
                              <input type="text" class="form-control" id="valueprice" name="valueprice[]" required>
                              </div>
                          </td>

                          <td scope="col">
                            <button onclick='removeRow(this.parentNode.parentNode.rowIndex)' type="button" class="btn-delete btn btn-danger">
                            <i class="fa fa-times"></i>
                            </button>
                          </td>

                          </tr>
                        </tbody>
                      </table>
                    </div>
                    <div class="form-group">
                      <button id="addRow" onclick="myFunction()" type="button"  class="btn btn-info">Add Row</button>
                    </div>
                  </div>
                </div>
              </div>

                <!-- payment method -->
                <div class="form-group">
                  <label for="paymentmethod">Payment Method</label>
                  <select class="form-control" name="paymentmethod" id="paymentmethod">
        				 			<option>SCM | Buy</option>
        				 			<option>SCM | Rent</option>
        				 			<option>UMK | Buy</option>
        				 			<option>UMK | Rent</option>
        							</select>
                  <i class="form-control-feedback"></i>
                  <span class="text-warning" ></span>
        			  </div>

               <!--date-->
        			 <div
        			 class="form-group">
        			 <label for="date">Date</label><br/>
        			 <input type="date" name="date" id="actualDate">
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
               <a href="<?= base_url('Procurement/index')?>" role="button">
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


      <script>

          function myFunction() {

            var tr_s = "<tr id='row'>";
            var tr_e = "</tr>";
            var type = "<td scope='col' width='200px'><div class='form-group'><input type='text' class='form-control' id='type' name='type[]' required></div></td>";
            var brand = "<td scope='col'><div class='form-group'><input type='text' class='form-control' id='brand' name='brand[]' required></div></td>";
            var valueprice = "<td scope='col'><div class='form-group'><input type='text' class='form-control' id='serialnumber' name='valueprice[]' required></div></td>";
            var action = "<td scope='col'><button onclick='removeRow(this.parentNode.parentNode.rowIndex)' type='button'  class='btn-delete btn btn-danger'><i class='fa fa-times'></i></button></td>"

            $(".row-body").append(tr_s + type + brand + valueprice + action + tr_e );

            };

            function removeRow(i){
                document.getElementById('inputTable').deleteRow(i)
            }

          </script>

    </div>
  </div>


</body>

</html>
