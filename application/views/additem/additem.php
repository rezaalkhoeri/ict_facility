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
                <table id="tblData1" class="table table-bordered">
                  <thead class="thead-dark">
                    <tr>
                      <th scope="col">Type</th>
                      <th scope="col">Serial Number</th>
                      <th scope="col">Asset Number</th>
                      <th scope="col">Value Price</th>
                      <th scope="col">Condition</th>
                    </tr>
                  </thead>
                  <tbody id="posTable" >
                    <tr>
                    <td scope="col">
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
                    
                    </tr>
                  </tbody>
                </table>
                <!-- button add-->
                <button type="add" value="input" class="btn btn-primary" style="float:right;"> 
                Add
                </button>

              </form>
            </div>
            <button id="btntambah" type="button"  class="btn btn-primary" style="float:right;"> 
            Tambah
            </button>

              
 


<!-- <script>
// fungsi buat nampilin table
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
		});
    </script> -->


        <form method="GET" id="my_form"></form>


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
  

</body>

</html>

