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
              <h6 class="m-0 font-weight-bold text-primary"> Requisition </h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <div class="form-group">
                  <a href="<?= base_url('Requisition/index_input')?>" role="button">
                    <button class="btn btn-primary" data-toggle="modal" data-target="#largeModal">Create Request Order</button>
                  </a>
                </div>
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              		<thead>
                    <tr>
                      <th scope="col">Ticket</th>
                      <th scope="col">Item</th>
                      <th scope="col">Asset Number</th>
                      <th scope="col">Serial Number</th>
                      <th scope="col">Cost Center</th>
                      <th scope="col">Quantity</th>
                      <th scope="col">Date</th>
                      <th scope="col">Requestor</th>
                      <th scope="col">Description</th>
                      <th scope="col">Status</th>
                      <th scope="col">Action</th>

                    </tr>
                  </thead>
                  <tbody id="posTable" >
                  <?php
                  foreach ($get as $a) {
                  ?>
                    <tr>
                    <td scope="col"><?= $a->no_tiket?></td>
                    <td scope="col"><?= $a->jenis.' | '.$a->merek?></td>
                    <td scope="col"><?= $a->asset_number?></td>
                    <td scope="col"><?= $a->serial_number?></td>
                    <td scope="col"><?= $a->cost_center?></td>
                    <td scope="col"><?= $a->quantity?></td>
                    <td scope="col"><?= $a->date?></td>
                    <td scope="col"><?= $a->requestor?></td>
                    <td scope="col"><?= $a->deskripsi?></td>
                    <td scope="col"><?= $a->status?></td>
                    <?php
                      if ($this->session->userdata('role_id') == 3) {
                    ?>
                      <td scope="col">
                          <a href="edit/<?php echo $a->id ?>"><span class="badge badge-primary">Edit</span></a>
                          <a href="hapus/<?php echo $a->id ?>"><span class="badge badge-danger">Delete</span></a>
                          <a href="#"><span class="badge badge-success">Approve</span></a>
                      </td>
                    <?php } else { ?>
                      <td scope="col">
                          <a href="edit/<?php echo $a->id ?>"><span class="badge badge-primary">Edit</span></a>
                          <a href="hapus/<?php echo $a->id ?>"><span class="badge badge-danger">Delete</span></a>
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
      <?php $this->load->view('partial/script'); ?>
      <?php $this->load->view('partial/footer'); ?>

</body>

</html>
