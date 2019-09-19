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
          <h1 class="h3 mb-4 text-gray-800 font-weight-bold">Procurement | Details</h1>
          <?php foreach ($get as $d) { ?>

          <a class="btn btn-warning" href="<?= base_url('Procurement/pdf/'.$d->id)?>"> <i class="fa fa-file"></i> Export PDF </a> 

        <form action="<?= base_url('Procurement/details/'.$d->id);?>" method="post">

       <!-- no ticket -->
        <div class="form-group row">
          <label for="Ticket" class="col-sm-2 col-form-label">Ticket</label>
          <div class="col-sm-10">
            <input type="text" readonly class="form-control-plaintext" id="ticket" name="ticket" value="<?= $d->no_tiket?>">
          </div>
        </div>

			 <!-- cost center -->
				<div class="form-group row">
				<label for="costcenter" class="col-sm-2 col-form-label">Cost Center</label>
        <div class="col-sm-10">
        <input type="text" readonly class="form-control-plaintext" id="costcenter" name="costcenter" value="<?= $d->cost_center?>">
        </div>
        </div>

      <!-- requestor -->
        <div class="form-group row">
        <label for="requestor" class="col-sm-2 col-form-label">Requestor</label>
        <div class="col-sm-10">
        <input type="text" readonly class="form-control-plaintext" id="requestor" name="requestor" value="<?= $d->requestor?>">
        </div>
        </div>

      <!-- quantity -->
        <div class="form-group row">
        <label for="quantity" class="col-sm-2 col-form-label">Quantity</label>
        <div class="col-sm-10">
        <input type="text" readonly class="form-control-plaintext" id="quantity" name="quantity" value="<?= $d->quantity?>">
        </div>
        </div>

      <!-- item -->
        <div class="form-group row">
          <label for="item" class="col-sm-2 col-form-label">Item</label>
          <div class="col-sm-10">
            <input type="text" readonly class="form-control-plaintext" name="item" id="item" value="<?= $d->jenis.' | '.$d->merek?>">
          </div>
        </div>

      <!-- serial number -->
        <div class="form-group row">
        <label for="serialnumber" class="col-sm-2 col-form-label">Serial Number</label>
        <div class="col-sm-10">
        <input type="text" readonly class="form-control-plaintext" id="serialnumber" name="serialnumber" value="<?= $d->serial_number?>">
        </div>
        </div>

      <!-- asset number -->
        <div class="form-group row">
        <label for="assetnumber" class="col-sm-2 col-form-label">Asset Number</label>
        <div class="col-sm-10">
        <input type="text" readonly class="form-control-plaintext" id="assetnumber" name="assetnumber" value="<?= $d->asset_number?>">
        </div>
        </div>

      <!-- value price -->
        <div class="form-group row">
        <label for="valueprice" class="col-sm-2 col-form-label">Value Price</label>
        <div class="col-sm-10">
        <input type="text" readonly class="form-control-plaintext" id="valueprice" name="valueprice" value="<?= "Rp ".number_format($d->value_price,2,',','.');?>">
        </div>
        </div>

      <!-- payment method -->
        <div class="form-group row">
        <label for="paymentmethod" class="col-sm-2 col-form-label">Payment Method</label>
        <div class="col-sm-10">
        <input type="text" readonly class="form-control-plaintext" id="paymentmethod" name="paymentmethod" value="<?= $d->payment_method?>">
        </div>
        </div>

			<!-- status -->
        <div class="form-group row">
        <label for="status" class="col-sm-2 col-form-label">Status</label>
        <div class="col-sm-10">
        <input type="text" readonly class="form-control-plaintext" id="status" name="status" value="<?= $d->status?>">
        </div>
        </div>

      <!-- description -->
        <div class="form-group row">
        <label for="description" class="col-sm-2 col-form-label">Description</label>
        <div class="col-sm-10">
        <textarea readonly class="form-control-plaintext" id="description" rows="3" name="description"><?= $d->deskripsi?>
        </textarea>
        </div>
        </div> 
        
      <!-- button back-->
        <a href="<?= base_url('Procurement/index')?>" role="button">
        <button type="button" value="submit" class="btn btn-danger"> 
        Back
      </button>
      </a>

      </form>
      <?php } ?>

      <hr>
      
      </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

    <?php $this->load->view('partial/footer');?>
    <?php $this->load->view('partial/script');?>

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fas fa-angle-up"></i>
    </a>

</body></html>
