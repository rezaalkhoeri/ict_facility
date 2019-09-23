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
              <h6 class="m-0 font-weight-bold text-primary">Detail Procurement</h6>
            </div>
            <?php 
            foreach($get as $a){
              ?>
            <form action="<?= base_url('Procurement/update_item_action/'.$a->id)?>" method="post" name="my_form">
            <div class="card-body">
              <div class="form-group">
                <table class="table table-bordered table-hover tablesorter">
                  <thead>
                    <tr>
                      <th class="header">No. <i class="fa fa-sort"></i></th>
                      <th class="header">Type <i class="fa fa-sort"></i></th>
                      <th class="header">Brand <i class="fa fa-sort"></i></th>
                      <th class="header">Serial Number <i class="fa fa-sort"></i></th>
                      <th class="header">Asset Number <i class="fa fa-sort"></i></th>
                      <th class="header">Value Price <i class="fa fa-sort"></i></th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                      $no = 1;
                      foreach ($item_detail as $a){
                    ?>
                    <tr>
                      <td>
                      <?= $no++ ?> 
                      <input type="hidden" value="<?= $a->id_item ?>" class="form-control" id="id_item" name="id_item[]" required>
                      </td>
                      <td><?= $a->jenis ?></td>
                      <td><?= $a->merek ?></td>
                      <td>
                          <input type="text" class="form-control" id="serialnumber" name="serialnumber[]" required>
                      </td>
                      <td>
                          <input type="text" class="form-control" id="assetnumber" name="assetnumber[]" required>
                      </td>
                      <td><?= "Rp ".number_format($a->value_price,2,',','.'); ?></td>
                    </tr>
                    <?php } ?>
                  </tbody>
                </table>
              </div>
            </div>
            <div class="card-body">
              <div class="form-group">
                  <button type="submit" value="input" class="btn btn-primary"> Submit </button>
              </div>
            </div>
            </form>
          <?php }?>

          </div>

      </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <?php $this->load->view('partial/script'); ?>
      <?php $this->load->view('partial/footer'); ?>

    </div>
  </div>


</body>

</html>
