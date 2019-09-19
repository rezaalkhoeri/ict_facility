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
          <!-- <h1 class="h3 mb-4 text-gray-800 font-weight-bold">Procurement</h1> -->

          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary"> Procurement </h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <div class="form-group">
                  <a href="<?= base_url('Procurement/index_input')?>" role="button">
                    <button class="btn btn-primary" data-toggle="modal" data-target="#largeModal">Create Request Order</button>
                  </a>
                </div>
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              		<thead>
                    <tr>
                      <th scope="col">Ticket</th>
                      <th scope="col">Description</th>
                      <th scope="col">Payment Method</th>
                      <th scope="col">Status</th>
                      <th scope="col">Date</th>
                      <th scope="col">Action</th>

                    </tr>
                  </thead>
                  <tbody id="posTable" >
                  <?php
                  foreach ($get as $a) {
                  ?>
                    <tr>
                    <td scope="col"><?= $a->no_tiket?></td>
                    <td scope="col"><?= $a->deskripsi?></td>
                    <td scope="col"><?= $a->payment_method?></td>
                    <td scope="col"><?= $a->status?></td>
                    <td scope="col"><?= $a->date?></td>
                    <?php
                      if ($this->session->userdata('role_id') == 2 || $this->session->userdata('role_id') == 3) {
                    ?>
                      <td scope="col">
                          <a href="<?= base_url('Procurement/details/'.$a->id) ?>"><span class="badge badge-primary"><i class="fas fa-info"></i>Details</span></a>
                          <a href="#"><span class="badge badge-success"><i class="fas fa-check-double"></i>Approve</span></a>
                      </td>
                    <?php } else { ?>
                      <td scope="col">
                          <a href="<?= base_url('Procurement/details/'.$a->id) ?>"><span class="badge badge-primary"><i class="fas fa-info"></i>Details</span></a>
                      </td>
                    <?php } ?>

                    </tr>
                  <?php } ?>

                  </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

      <?php $this->load->view('partial/script'); ?>
      <?php $this->load->view('partial/footer'); ?>

</body>
</html>
