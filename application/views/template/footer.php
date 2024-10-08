</div>
<!-- /.content-wrapper -->
<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
  <!-- Control sidebar content goes here -->
</aside>
<!-- /.control-sidebar -->

<!-- Main Footer -->
<footer class="main-footer">
  <!-- To the right -->
  <div class="float-right d-none d-sm-inline">
    Anything you want
  </div>
  <!-- Default to the left -->
   <?php 
   if (date('Y') == '2024') {
    $year = '';
   }else {
    $year = ' - '. date('Y');
   }
   ?>
  <strong>Copyright &copy; 2024 <?= $year ?></strong> IT Dept.
</footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="<?= base_url('assets/vendor') ?>/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?= base_url('assets/vendor') ?>/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="<?= base_url('assets/vendor') ?>/dist/js/adminlte.min.js"></script>

<script src="<?= base_url('assets/vendor') ?>/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?= base_url('assets/vendor') ?>/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="<?= base_url('assets/vendor') ?>/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="<?= base_url('assets/vendor') ?>/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="<?= base_url('assets/vendor') ?>/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="<?= base_url('assets/vendor') ?>/plugins/sweetalert2/sweetalert2.min.js"></script>

<!-- Select2 -->
<script src="<?= base_url('assets/vendor') ?>/plugins/select2/js/select2.full.min.js"></script>
<!-- Bootstrap Switch -->
<script src="<?= base_url('assets/vendor') ?>/plugins/bootstrap-switch/js/bootstrap-switch.min.js"></script>


<script>
  $(function() {
    $("#example1").DataTable({
      "responsive": true,
      "lengthChange": false,
      "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>

<script>
  var BASE_URL = "<?php echo base_url(); ?>";
</script>
<script>
  $(function () {
    $('.select2').select2()
  })
</script>

<script>
  $("input[data-bootstrap-switch]").each(function(){
  $(this).bootstrapSwitch('state', $(this).prop('checked'));
  })
</script>

<script>
  $('.form-check').on('click', function() {
    const modulId = $(this).data('modul');
    const roleId = $(this).data('role');

    $.ajax({
        url: BASE_URL + "setting/Modul/change_akses_modul",
        type: 'post',
        data: {
            modulId: modulId,
            roleId: roleId
        },
        success: function(data) {
            console.log(data.roleId);
            document.location.href = BASE_URL + "setting/Modul/akses_modul/" + roleId
        }
    })
});
</script>

<?php
if (isset($footer_js)) {
  foreach ($footer_js as $fjs) { ?>
    <script type="text/javascript" src="<?= base_url($fjs) ?>"></script>
<?php }
} ?>
</body>

</html>