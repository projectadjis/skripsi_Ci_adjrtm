<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>AdminLTE 2 | Dashboard</title>
	<?php $this->load->view("main/head.php") ?>
</head>
<body data-controller="<?php echo currentRoute('class'); ?>" data-method="<?php echo currentRoute('method'); ?>" class="hold-transition skin-blue sidebar-mini">
	<div class="wrapper">
    <?php $this->load->view("main/header.php") ?>
    <?php $this->load->view("main/main-sidebar.php") ?>
    <?php $this->load->view("main/conten-wrapper.php") ?>
    <?php $this->load->view("main/footer.php") ?>
		
		
  	<div class="control-sidebar-bg"></div>
  </div>
  <?php $this->load->view("main/script.php") ?>
</body>
</html>