  <!-- Bootstrap core JavaScript-->
  <script src="<?= base_url('assets'); ?>/vendor/jquery/jquery.min.js"></script>
  <script src="<?= base_url('assets'); ?>/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="<?= base_url('assets'); ?>/vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="<?= base_url('assets'); ?>/js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="<?= base_url('assets'); ?>/vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="<?= base_url('assets'); ?>/vendor/datatables/dataTables.bootstrap4.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="<?= base_url('assets'); ?>/js/demo/datatables-demo.js"></script>

<script>
    $(document).ready(function(){
      $("#posSearch").on("keyup", function() {
        var value = $(this).val().toLowerCase();
        $("#posTable tr").filter(function() {
          $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
        });
      });
    });

    $(document).ready(function() {
        var text_max = 15;
        // $('#ticket_feedback').html(text_max + ' characters remaining');

        $('#ticket').keyup(function() {
            var text_length = $('#ticket').val().length;
            // var text_remaining = text_max - text_length;

            // $('#ticket_feedback').html(text_remaining + ' characters remaining');
        });
    });

  </script>

  <script>


      function myFunction() {

        var getData = [
          <?php foreach ($type as $t) { ?>
            ["<?php echo '<option value='.$t->id.'>'. $t->jenis.' | '.$t->merek.'</option>'; ?>"],
          <?php } ?>
        ];

        var tr_s = "<tr id='row'>";
        // var tr_btn_s = "<tr class='button-row'>";
        var tr_e = "</tr>";
        var type = "<td scope='col' width='200px'><div class='form-group'><select class='form-control' name='type[]' id='type'>" + getData + " </option></select></div></td>";
        var serialnumber = "<td scope='col'><div class='form-group'><input type='text' class='form-control' id='serialnumber' name='serialnumber[]' required></div></td>";
        var assetnumber = "<td scope='col'><div class='form-group'><input type='text' class='form-control' id='serialnumber' name='assetnumber[]' required></div></td>";
        var valueprice = "<td scope='col'><div class='form-group'><input type='text' class='form-control' id='serialnumber' name='valueprice[]' required></div></td>";
        var condition = "<td scope='col'><div class='form-group'><textarea class='form-control' name='condition[]' id='condition'></textarea></div></td>"
        var action = "<td scope='col'><button onclick='removeRow()' type='button'  class='btn-delete btn btn-danger'><i class='fa fa-times'></i></button></td>"


        // ///removes row with add button///
        // $(".button-row").remove();
        ///adds row with inputs and last row with add button///
        $(".row-body").append(tr_s + type + serialnumber + assetnumber + valueprice + condition + action + tr_e );
        ///enables focus highlight on new rows///
        // inputhighlight();
        };
        //--/--/--/--/--/--/--/--/--/--/--/--/--/--/--/--/--/--/--/--/--/--/--/--/--/--/

        // Remove criterion
        function removeRow() {
          $("#row").remove();
        }

      </script>
