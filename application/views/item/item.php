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
              <h1 class="h3 mb-4 text-gray-800 font-weight-bold">Add Item (Admin)</h1>

              <!-- input -->
              <form action="<?= base_url('Item/tambah_aksi');?>" method="post" name="my_form">

              <!-- type -->
              <div id="ticket_feedback" class="form-group">
              <label for="type">Type</label>
              <input type="text" class="form-control" id="type" name="type" required>
              </div>

              <!-- brand -->
              <div class="form-group">
              <label for="brand">Brand</label>
              <input type="text" class="form-control" id="brand" name="brand" required>
              </div>

              <!-- stock -->
              <div id="ticket_feedback" class="form-group">
              <label for="stock">Stock</label>
              <input type="text" class="form-control" id="stock" name="stock" required>
              </div>

            <!-- button add-->
              <!-- <a href="#" role="button"> -->
              <button type="add" value="input" class="btn btn-primary">
              Add
              </button>
            </form>

            <hr>
            <input class="form-control" id="posSearch" type="text" placeholder="Search here...">
            <br>
              <div class="panel-body">
                <table id="tblData1" class="table table-bordered">
                  <thead class="thead-dark">
                    <tr>
                      <th scope="col">Type</th>
                      <th scope="col">Brand</th>
                      <th scope="col">Stock</th>
                      <th scope="col">Action</th>
                    </tr>
                  </thead>
                  <tbody id="posTable" >
                  <?php
                  foreach ($get as $a) {
                    # code...
                    ?>

                    <tr>
                    <td scope="col"><?= $a->jenis?></td>
                    <td scope="col"><?= $a->merek?></td>
                    <td scope="col"><?= $a->stok?></td>
                    <td scope="col">
                        <a href="#" data-toggle="modal" data-target="#edit<?php echo $a->id ?>"><span class="badge badge-primary">Edit</span></a>
                        <a href="hapus/<?php echo $a->id ?>"><span class="badge badge-danger">Delete</span></a>
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

      <?php
          $this->load->view('partial/script');
        ?>

    <?php $this->load->view('partial/footer'); ?>
