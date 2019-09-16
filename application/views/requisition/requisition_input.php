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
        <h1 class="h3 mb-4 text-gray-800 font-weight-bold">Create Request Order</h1>

        <!-- search -->
        <form action="<?= base_url('Requisition/tambah_aksi');?>" method="post" name="my_form">

        <!-- ticket -->
        <div id="ticket_feedback" class="form-group">
        <label for="ticket">Ticket</label>
        <input type="text" class="form-control" id="ticket" name="ticket" maxlength="15" required>
        </div>

			 <!-- item -->
				<div
				class="form-group">
			 	<label for="item">Item</label>
			 	<select class="form-control" name="item" id="item">
				 			<option>Choose</option>
              <option>Handphone</option>
              <option>Handy Talk</option>
              <option>PC Desktop</option>
              <option>Printer</option>
              <option>Proyektor</option>
              <option>Laptop</option>
							</select>
			 <i class="form-control-feedback"></i>
			 <span class="text-warning" ></span>
			 </div>


			 <!-- cost center -->
				<div
				class="form-group">
				<label for="costcenter">Cost Center</label>
				<select class="form-control" name="costcenter" id="costcenter">
				 			<option>Choose</option>
				 			<option>sample 1</option>
				 			<option>sample 2</option>
							</select>
			 <i class="form-control-feedback"></i>
			 <span class="text-warning" ></span>
			 </div>

      <!-- requestor -->
        <div class="form-group">
        <label for="requestor">Requestor</label>
        <input type="text" class="form-control" name="requestor" id="requestor" required>
        </div>


       <!--date-->
			 <div
			 class="form-group">
			 <label for="date">Date</label><br/>
			 <input type="date" name="date" id="date">
			 <span class="text-warning"></span>
			 </div>

			<!-- status -->
				<div
				class="form-group">
				<label for="status">Status</label>
				<select class="form-control" name="status" id="status">
              <option>Choose</option>
				 			<option>Accept</option>
				 			<option>Decline</option>
							</select>
			 <i class="form-control-feedback"></i>
			 <span class="text-warning" ></span>
			 </div>

      <!-- description -->
       <div class="form-group">
        <label for="description">Description</label>
          <textarea class="form-control" name="description" id="description" rows="3"></textarea>
       </div>

      <!-- Quantity -->
        <div class="form-group">
        <label for="quantity">Quantity</label>
        <input type="number" class="form-control" name="quantity" id="quantity" required>
        </div>

      <!-- button submit-->
        <!-- <a href="#" role="button"> -->
        <button type="submit" value="input" class="btn btn-primary">
        Submit
      </button>
      <!-- </a> -->

      <!-- button next-->
        <a href="<?= base_url('Requisition/index')?>" role="button">
        <button type="button" value="" class="btn btn-danger">
        Cancel
      </button>
      </a>
    </form>

      <hr>

      </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <?php $this->load->view('partial/script'); ?>
      <?php $this->load->view('partial/footer'); ?>

</body>

</html>
