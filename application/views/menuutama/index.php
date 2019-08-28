<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title><?php echo $title ?></title>
	<?php $this->load->view("main/head.php") ?>
</head>
<body data-controller="<?php echo currentRoute('class'); ?>" data-method="<?php echo currentRoute('method'); ?>" class="hold-transition skin-blue sidebar-mini">
	<div class="wrapper">
	<!-- load headernya-->
    <?php $this->load->view("main/header.php") ?>
    <!--load main-sidebarnya-->
    <?php $this->load->view("main/main-sidebar.php") ?>
	<!-- Content Wrapper. Contains page content -->
	<div class="content-wrapper">
	    
	</div>
	<!-- /.content-wrapper -->
	<!--footer-->
	<?php $this->load->view("main/footer.php") ?>	
  	<div class="control-sidebar-bg"></div>
  </div>
  <?php $this->load->view("main/script.php") ?>
</body>
</html>