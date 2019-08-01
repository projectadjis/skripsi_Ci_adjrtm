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
		<!-- Content Header (Page header) -->
		<section class="content-header">
			<h1>
				Generate's Normalization
			</h1>
			<ol class="breadcrumb">
				<li><i class="fa fa-bolt"></i>&nbsp;Generate's Normalization</li>
				<li class="active">Generate's Normalization</li>
			</ol>
		</section>

		<!-- Main content -->
		<section class="content">
			<div class="row">
				<div class="col-md-12">
					<div class="box box-primary">
			            <div class="box-body">
			              <!-- Date -->
			              <div class="form-group">
			                <label>Period:</label>

			                <div class="input-group date">
			                  <div class="input-group-addon">
			                    <i class="fa fa-calendar"></i>
			                  </div>
			                  <input type="text" name="generate_normalization_date" class="form-control pull-left datepicker" id="datepicker" style="width: 200px">
			                </div>
			                <!-- /.input group -->
			              </div>
			              <!-- /.form group -->
			            </div>
			            <!-- /.box-body -->
			            <div class="box-footer">
							<input type="submit" class="btn btn-success pull-left" id="button-save-generate-normalization" value="Process">
			            </div>
			        </div>
			    </div>
			</div>
				<!-- /.row -->
		</section>
		<!-- /.content -->
	</div>
	<!-- /.content-wrapper -->
	<!--footer-->
	<?php $this->load->view("main/footer.php") ?>	
  	<div class="control-sidebar-bg"></div>

  </div>
  <?php $this->load->view("main/script.php") ?>
</body>
</html>