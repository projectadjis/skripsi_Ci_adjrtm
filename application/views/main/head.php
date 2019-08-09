<!-- Tell the browser to be responsive to screen width -->
<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
<!-- Bootstrap 3.3.7 -->
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/adminlte/bower_components/bootstrap/dist/css/bootstrap.min.css">
<!-- Font Awesome -->
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/adminlte/bower_components/font-awesome/css/font-awesome.min.css">
<!-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous"> -->
<!-- Ionicons -->
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/adminlte/bower_components/Ionicons/css/ionicons.min.css">
<!-- Theme style -->
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/adminlte/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
  	folder instead of downloading all of them to reduce the load. -->
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/adminlte/dist/css/skins/_all-skins.min.css">
  	<!-- Morris chart -->
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/adminlte/bower_components/morris.js/morris.css">
  	<!-- jvectormap -->
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/adminlte/bower_components/jvectormap/jquery-jvectormap.css">
  	<!-- Date Picker -->
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/adminlte/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
  	<!-- Daterange picker -->
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/adminlte/bower_components/bootstrap-daterangepicker/daterangepicker.css">
<!-- bootstrap wysihtml5 - text editor -->
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/adminlte/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
<!-- main CSS-->
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/main.css">
<!-- Toastr -->
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/adminlte/bower_components/toastr/toastr.min.css">
<!-- Sweet Alert -->
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/adminlte/bower_components/bootstrap-sweetalert/dist/sweetalert.css">

  	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->

<!-- Google Font -->
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/css.css">
 <!-- DataTables -->
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/adminlte/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">

<!--SELECT 2 -->
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/adminlte/bower_components/select2/dist/css/select2.css">
<?php 
    if(! empty($css)){
      foreach($css as $file) {
       ?>
          <link href="<?php echo base_url(); ?>assets/css/<?php echo $file ?>.css" rel="stylesheet" />
        <?php
      }
    }
?>
<!-- ROUTE CSS -->
<link href="<?php echo base_url(); ?>assets/css/<?php echo currentRoute('class'); ?>.css" rel="stylesheet" />
