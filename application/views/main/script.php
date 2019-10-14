<!-- ./wrapper -->

  <!-- jQuery 3 -->
  <script src="<?php echo base_url(); ?>assets/adminlte/bower_components/jquery/dist/jquery.min.js"></script>
  <!-- jQuery UI 1.11.4 -->
  <script src="<?php echo base_url(); ?>assets/adminlte/bower_components/jquery-ui/jquery-ui.min.js"></script>
  <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
  <script>
  	$.widget.bridge('uibutton', $.ui.button);
  </script>
  <!-- Bootstrap 3.3.7 -->
  <script src="<?php echo base_url(); ?>assets/adminlte/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
  <!-- Morris.js charts -->
  <script src="<?php echo base_url(); ?>assets/adminlte/bower_components/raphael/raphael.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/adminlte/bower_components/morris.js/morris.min.js"></script>

  <!-- jQuery Knob Chart -->
  <script src="<?php echo base_url(); ?>assets/adminlte/bower_components/jquery-knob/dist/jquery.knob.min.js"></script>
  <!-- daterangepicker -->
  <script src="<?php echo base_url(); ?>assets/adminlte/bower_components/moment/min/moment.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/adminlte/bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
  <!-- datepicker -->
  <script src="<?php echo base_url(); ?>assets/adminlte/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
  <!-- Bootstrap WYSIHTML5 -->
  <script src="<?php echo base_url(); ?>assets/adminlte/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
  <!-- Slimscroll -->
  <script src="<?php echo base_url(); ?>assets/adminlte/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
  <!-- FastClick -->
  <script src="<?php echo base_url(); ?>assets/adminlte/bower_components/fastclick/lib/fastclick.js"></script>
  <!-- AdminLTE App -->
  <script src="<?php echo base_url(); ?>assets/adminlte/dist/js/adminlte.min.js"></script>
  <!-- DataTables -->
  <script src="<?php echo base_url(); ?>assets/adminlte/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/adminlte/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
  <!-- Toastr -->
  <script src="<?php echo base_url(); ?>assets/adminlte/bower_components/toastr/toastr.min.js"></script>
  <!-- SELECT2 -->
  <script src="<?php echo base_url(); ?>assets/adminlte/bower_components/select2/dist/js/select2.full.min.js"></script>
  <!-- SWEET ALERT -->
  <script src="<?php echo base_url(); ?>assets/adminlte/bower_components/bootstrap-sweetalert/dist/sweetalert.min.js"></script>
  <?php 
      if(! empty($js)){
        foreach($js as $file) {
         ?>
            <script src="<?php echo base_url(); ?>assets/<?php echo $file ?>.js" type="text/javascript"></script>
          <?php
        }
      }
  ?>
  <!-- Libs-->
  <script src="<?php echo base_url(); ?>assets/js/libs.js"></script>
  <!-- Exec-->
  <script src="<?php echo base_url(); ?>assets/js/exec.js"></script>
  <!-- Route JS-->
  <script src="<?php echo base_url(); ?>assets/js/<?php echo currentRoute('class') ?>.js" type="text/javascript"></script>