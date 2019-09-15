  <!-- Bootstrap core JavaScript-->
  <script src="<?= base_url('assets'); ?>/vendor/jquery/jquery.min.js"></script>
  <script src="<?= base_url('assets'); ?>/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="<?= base_url('assets'); ?>/vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="<?= base_url('assets'); ?>/js/sb-admin-2.min.js"></script>


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

    //tambah row
  $('#btntambah').click(function() {
    AddRow('1');
      });

    function AddRow(idx)
    {
     var newRow = '<tr id="row_' + idx + '" class="datarow">'
    + '<th class="fixed-side" scope="col"><textarea id="txtDesc_' + idx + '" data-item="description" class="form-control" rows="3">' + type + '</textarea></th>'
    + '<td style="vertical-align: middle"><input type="number"  min="1" class="form-control" onchange="CalcTotalandDiff(this)" data-item="qty" onkeyup="CalcTotalandDiff(this)" value="' + serialnumber + '" style="text-align: right" id="txtQty_' + idx + '" /></td>'

        newRow += '</tr>';
        row++;
        $("#tblData1 tbody").append(newRow);
        //return $('#tblUMKDetail tr:last');
    }
    </script>

    <!-- jQuery
    <script src="<?= base_url('assets'); ?>/vendor/datatables2/jquery/dist/jquery.min.js"></script>
    <script src="<?= base_url('assets'); ?>/vendor/datatables2/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="<?= base_url('assets'); ?>/vendor/datatables2/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
    <script src="<?= base_url('assets'); ?>/vendor/datatables2/datatables.net-buttons/js/dataTables.buttons.min.js"></script> --> -->
