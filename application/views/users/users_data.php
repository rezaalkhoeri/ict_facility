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
            <h6 class="m-0 font-weight-bold text-primary">User Data</h6>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <div class="form-group">
                <button class="btn btn-primary" data-toggle="modal" data-target="#largeModal">Add</button>
              </div>
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              		<thead>
                    <tr>
                      <th scope="col">Name</th>
                      <th scope="col">Email</th>
                      <th scope="col">Action</th>
                    </tr>
                  </thead>
                  <tbody id="posTable" >
                  <?php
                  foreach ($get as $a) {
                    # code...
                    ?>

                    <tr>
                    <td scope="col"><?= $a->name?></td>
                    <td scope="col"><?= $a->email?></td>
                    <td scope="col">
                        <a href="edit/<?php echo $a->id ?>"><span class="badge badge-primary">Edit</span></a>

                    </td>


                    </tr>

                  <?php }
                  ?>
                  </tbody>
              </table>
            </div>
          </div>
        </div>

        <!-- /.container-fluid -->

        </div>
      <!-- End of Main Content -->


      </div>

      <?php $this->load->view('partial/script');?>

      <?php $this->load->view('partial/footer'); ?>


    </div>
  </div>

</body>

</html>
