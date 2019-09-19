<!DOCTYPE html>
<html lang="en"><body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

          <!-- Begin Page Content -->
          <div class="container-fluid">

          <!-- Page Heading -->
          <?php foreach ($get as $d) { ?>


        <form action="#" method="post">

       <!-- no ticket -->
        <div class="form-group row">
          <label for="Ticket" class="col-sm-2 col-form-label">Ticket</label>
          <div class="col-sm-10">
            <span type="text" class="form-control-plaintext" id="ticket" name="ticket"><?= $d->no_tiket?></span>
          </div>
        </div>

			 <!-- cost center -->
        <div class="form-group row">
        <label for="costcenter" class="col-sm-2 col-form-label">Cost Center</label>
        <div class="col-sm-10">
        <span type="text" class="form-control-plaintext" id="costcenter" name="costcenter"><?= $d->cost_center?></span>
        </div>
        </div>

      <!-- requestor -->
        <div class="form-group row">
        <label for="requestor" class="col-sm-2 col-form-label">Requestor</label>
        <div class="col-sm-10">
        <span type="text" class="form-control-plaintext" id="requestor" name="requestor"><?= $d->requestor?></span>
        </div>
        </div>

      <!-- quantity -->
        <div class="form-group row">
        <label for="quantity" class="col-sm-2 col-form-label">Quantity</label>
        <div class="col-sm-10">
        <span type="text" class="form-control-plaintext" id="quantity" name="quantity" ><?= $d->quantity?></span>
        </div>
        </div>

      <!-- item -->
        <div class="form-group row">
          <label for="item" class="col-sm-2 col-form-label">Item</label>
          <div class="col-sm-10">
            <span type="text" class="form-control-plaintext" name="item" id="item"><?= $d->jenis.' | '.$d->merek?></span>
          </div>
        </div>

      <!-- serial number -->
        <div class="form-group row">
        <label for="serialnumber" class="col-sm-2 col-form-label">Serial Number</label>
        <div class="col-sm-10">
        <span type="text" class="form-control-plaintext" id="serialnumber" name="serialnumber"><?= $d->serial_number?></span>
        </div>
        </div>

      <!-- asset number -->
        <div class="form-group row">
        <label for="assetnumber" class="col-sm-2 col-form-label">Asset Number</label>
        <div class="col-sm-10">
        <span type="text" class="form-control-plaintext" id="assetnumber" name="assetnumber" ><?= $d->asset_number?></span>
        </div>
        </div>

      <!-- value price -->
        <div class="form-group row">
        <label for="valueprice" class="col-sm-2 col-form-label">Value Price</label>
        <div class="col-sm-10">
        <span type="text" class="form-control-plaintext" id="valueprice" name="valueprice" ><?= "Rp ".number_format($d->value_price,2,',','.');?></span>
        </div>
        </div>

      <!-- payment method -->
        <div class="form-group row">
        <label for="paymentmethod" class="col-sm-2 col-form-label">Payment Method</label>
        <div class="col-sm-10">
        <span type="text" class="form-control-plaintext" id="paymentmethod" name="paymentmethod"><?= $d->payment_method?></span>
        </div>
        </div>

	 <!-- status -->
        <div class="form-group row">
        <label for="status" class="col-sm-2 col-form-label">Status</label>
        <div class="col-sm-10">
        <span type="text" class="form-control-plaintext" id="status" name="status"><?= $d->status?></span>
        </div>
        </div>

      <!-- description -->
        <div class="form-group row">
        <label for="description" class="col-sm-2 col-form-label">Description</label>
        <div class="col-sm-10">
        <textarea class="form-control-plaintext" id="description" rows="3" name="description"><?= $d->deskripsi?>
        </textarea>
        </div>
        </div> 
        
      </form>
      <?php } ?>

      <hr>
      
      </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

</body></html>
