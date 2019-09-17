  <!-- Bootstrap core JavaScript-->
  <script src="<?= base_url('assets'); ?>/vendor/jquery/jquery.min.js"></script>
  <script src="<?= base_url('assets'); ?>/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="<?= base_url('assets'); ?>/vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="<?= base_url('assets'); ?>/js/sb-admin-2.min.js"></script>

  <!-- Page level plugins datatables -->
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
