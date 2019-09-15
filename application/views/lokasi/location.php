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
              <h1 class="h3 mb-4 text-gray-800 font-weight-bold">Add Location</h1>

              <!-- input -->
              <form action="<?= base_url('Location/tambah_aksi');?>" method="post" name="my_form">

              <!-- location -->
              <div id="ticket_feedback" class="form-group">
              <label for="location">Location</label>
              <input type="text" class="form-control" id="location" name="location" maxlength="15" required>
              </div>

              <!-- description -->
              <div class="form-group">
              <label for="description">Description</label>
              <textarea class="form-control" name="description" id="description" rows="3"></textarea>
              </div>

            <!-- button add-->
              <!-- <a href="#" role="button"> -->
              <button type="add" value="input" class="btn btn-primary">
              Add
              </button>
            <!-- </a> -->

            </form>

      <hr>
      <input class="form-control" id="posSearch" type="text" placeholder="Search here...">
      <br>

              <div class="panel-body">
                <table id="tblData1" class="table table-bordered">
                  <thead class="thead-dark">
                    <tr>
                      <th scope="col">Location</th>
                      <th scope="col">Description</th>
                      <th scope="col">Action</th>
                    </tr>
                  </thead>
                  <tbody id="posTable" >
                  <?php
                  foreach ($get as $a) {
                    # code...
                    ?>

                    <tr>
                    <td scope="col"><?= $a->nama_lokasi?></td>
                    <td scope="col"><?= $a->deskripsi?></td>
                    <td scope="col">
                        <a href="#" data-toggle="modal" data-target="#edit<?php echo $a->id ?>"><span class="badge badge-primary">Edit</span>
                        </a>
                    </td>


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

      <!-- Footer -->
      <?php
            $this->load->view('partial/footer');
        ?>
      <!-- End of Footer -->

      <!-- Footer -->
        <?php
          $this->load->view('partial/script');
        ?>
      <!-- End of Footer -->

      <!-- Footer -->

      <!-- End of Footer -->


    <?php
    foreach ($get as $d) { ?>
    <div class="modal fade" id="edit<?php echo $d->id ?>">
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
            <form action="<?= base_url('Location/update/'.$d->id);?>" method="post" name="my_form">

            <!-- location -->
            <div id="ticket_feedback" class="form-group">
            <label for="location">Location</label>
            <input type="text" class="form-control" id="location" name="location" maxlength="15" value="<?php echo $d->nama_lokasi ?>" required>
            </div>

            <!-- description -->
            <div class="form-group">
            <label for="description">Description</label>
            <textarea class="form-control" name="description" id="description" rows="3"><?php echo $d->deskripsi ?></textarea>
            </div>

            <!-- button add-->
            <button type="add" value="input" class="btn btn-primary">
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
