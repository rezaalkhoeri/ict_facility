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

            <!-- Page Heading -->
            <h1 class="h3 mb-4 text-gray-800 font-weight-bold">List Item</h1>

            <input class="form-control" id="posSearch" type="text" placeholder="Search here...">
            <br>
            <!-- table view -->
            <div class="panel-body">
              <table id="tblData1" class="table table-bordered">
                <thead class="thead-dark">
                  <tr>
                    <th scope="col">Type</th>
                    <th scope="col">Serial Number</th>
                    <th scope="col">Asset Number</th>
                    <th scope="col">Value Price</th>
                    <th scope="col">Condtition</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody id="posTable" >
                <?php
                foreach ($get as $a) {
                  # code...
                  ?>

                  <tr>
                  <td scope="col"><?= $a->jenis.' | '.$a->merek?></td>
                  <td scope="col"><?= $a->serial_number?></td>
                  <td scope="col"><?= $a->asset_number?></td>
                  <td scope="col"><?= "Rp ".number_format($a->value_price,2,',','.');?></td>
                  <td scope="col"><?= $a->condition?></td>
                  <td scope="col">
                      <a href="#" data-toggle="modal" data-target="#edit<?= $a->id ?>"><span class="badge badge-primary">Edit</span></a>
                      <!-- <span href="hapus/<?php echo $a->id ?>"><span class="badge badge-danger">Delete</span></a> -->
                  </td>
                  </tr>
                <?php }
                ?>
                </tbody>
              </table>
            </div>

            <br>

            <h1 class="h3 mb-4 text-gray-800 font-weight-bold">Add Item</h1>
            <div class="panel-body">
             <!-- input -->
               <form action="<?= base_url('Additem/tambah_aksi');?>" method="post" name="my_form">
                <table id="inputTable" class="table table-bordered">
                  <thead id="arrHead" class="thead-dark">
                    <tr>
                      <th scope="col" width="200px">Type</th>
                      <th scope="col" width="200px">Serial Number</th>
                      <th scope="col" width="200px">Asset Number</th>
                      <th scope="col" width="200px">Value Price</th>
                      <th scope="col" width="200px">Condition</th>
                      <th scope="col">Action</th>
                    </tr>
                  </thead>
                  <tbody id="posTable" class="row-body" >
                    <tr id='row'>
                    <td scope="col" width="200px">
                        <!-- type -->
                        <div class="form-group">
                        <select class="form-control" name="type" id="type">
                              <?php foreach ($type as $t) { ?>
                              <option value=<?= $t->id?>><?= $t->jenis.' | '.$t->merek ?></option>
                              <?php }?>
                              </select>
                        <i class="form-control-feedback"></i>
                        <span class="text-warning" ></span>
                        </div>
                    </td>
                    <td scope="col">
                        <!-- serial number -->
                        <div class="form-group">
                        <input type="text" class="form-control" id="serialnumber" name="serialnumber" required>
                        </div>
                    </td>

                    <td scope="col">
                        <!-- asset number -->
                        <div id="ticket_feedback" class="form-group">
                        <input type="text" class="form-control" id="assetnumber" name="assetnumber" required>
                        </div>
                    </td>

                    <td scope="col">
                        <!-- value price -->
                        <div id="ticket_feedback" class="form-group">
                        <input type="text" class="form-control" id="valueprice" name="valueprice" required>
                        </div>
                    </td>

                    <td scope="col">
                        <!-- condition -->
                        <div class="form-group">
                        <textarea class="form-control" name="condition" id="condition" rows="3"></textarea>
                        </div>
                    </td>
                    <td scope="col">
                      <button onclick='removeRow()' type="button"  class="btn-delete btn btn-danger">
                      <i class="fa fa-times"></i>
                      </button>
                    </td>

                    </tr>
                  </tbody>
                </table>
                <!-- button add-->
                <button id="addRow" onclick="myFunction()" type="button"  class="btn btn-info">
                  Add Row
                </button>

                <button type="add" value="input" class="btn btn-primary" >
                Save
                </button>

              </form>
            </div>

        </div>

          <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <?php
          $this->load->view('partial/footer');
        ?>

      <?php
          $this->load->view('partial/script');
        ?>


  <!-- The Modal -->

    <?php
    foreach ($get as $a) { ?>
    <div class="modal fade" id="edit<?php echo $a->id ?>">
      <div class="modal-dialog">
      <div class="modal-content">

        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Edit Location</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>

        <!-- Modal body -->
        <div class="modal-body">
            <!-- input -->
            <form action="<?= base_url('Additem/update/'.$a->id);?>" method="post" name="my_form">

                        <!-- type -->
                        <div class="form-group">
                        <select class="form-control" name="type" id="type">
                              <?php foreach ($type as $t) { ?>
                              <option <?php if($t->id == $a->id_item){ echo "selected"; } ?> value=<?= $t->id ?> >
                                  <?= $t->jenis.' | '.$t->merek ?>
                              </option>

                              <?php }?>
                              </select>
                        <i class="form-control-feedback"></i>
                        <span class="text-warning" ></span>
                        </div>

                        <!-- serial number -->
                        <div class="form-group">
                        <input type="text" class="form-control" id="serialnumber" name="serialnumber" value="<?php echo $a->serial_number ?>" required>
                        </div>

                        <!-- asset number -->
                        <div id="ticket_feedback" class="form-group">
                        <input type="text" class="form-control" id="assetnumber" name="assetnumber" value="<?php echo $a->asset_number ?>" required>
                        </div>

                        <!-- value price -->
                        <div id="ticket_feedback" class="form-group">
                        <input type="text" class="form-control" id="valueprice" name="valueprice"
                        value="<?php echo $a->value_price ?>" required>
                        </div>

                        <!-- condition -->
                        <div class="form-group">
                        <textarea class="form-control" name="condition" id="condition" rows="3"><?php echo $a->condition ?></textarea>
                        </div>

            <!-- button add-->
            <button type="submit" value="input" class="btn btn-primary">
            Update
            </button>
            </form>

        </div>

        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>

      </div>
    </div>
  </div>
  <?php } ?>
   <!-- End The Modal -->

   </div>

  </div>

  <script>


      function myFunction() {

        <?php
          $getItem = array();

          foreach ($type as $t) {
            $getItem = $t->jenis;
          }

          $userArray = array(
              'Smith Watson', 'smith@example.com'
          );
        ?>


        var a = <?php echo json_encode($getItem); ?>

        var tr_s = "<tr id='row'>";
      	// var tr_btn_s = "<tr class='button-row'>";
      	var tr_e = "</tr>";
      	var type = "<td scope='col' width='200px'><div class='form-group'><select class='form-control' name='type' id='type'><option value='1'>" + a + " </option></select></div></td>";
        var serialnumber = "<td scope='col'><div class='form-group'><input type='text' class='form-control' id='serialnumber' name='serialnumber' required></div></td>";
        var assetnumber = "<td scope='col'><div class='form-group'><input type='text' class='form-control' id='serialnumber' name='serialnumber' required></div></td>";
        var valueprice = "<td scope='col'><div class='form-group'><input type='text' class='form-control' id='serialnumber' name='serialnumber' required></div></td>";
        var condition = "<td scope='col'><div class='form-group'><textarea class='form-control' name='condition' id='condition'></textarea></div></td>"
        var action = "<td scope='col'><button onclick='removeRow()' type='button'  class='btn-delete btn btn-danger'><i class='fa fa-times'></i></button></td>"


      	// ///removes row with add button///
      	// $(".button-row").remove();
      	///adds row with inputs and last row with add button///
      	$(".row-body").append(tr_s + type + serialnumber + assetnumber + valueprice + condition + action + tr_e );
      	///enables focus highlight on new rows///
      	// inputhighlight();
        };
        //--/--/--/--/--/--/--/--/--/--/--/--/--/--/--/--/--/--/--/--/--/--/--/--/--/--/

        // Remove criterion
        function removeRow() {
          $("#row").remove();
        }

      </script>

</body>

</html>
