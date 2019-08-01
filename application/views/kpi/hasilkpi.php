<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>
	HASIL KPI
	</title>
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
				Hasil KPI
			</h1>
			<ol class="breadcrumb">
				<li><a href="#"><i class="fa fa-bar-chart-o"></i> Hasil KPI</a></li>
				<li class="active">Hasil KPI</li>
			</ol>
		</section>

		<!-- Main content -->
		<section class="content">
			<div class="row">
				<div class="col-xs-12">
					<div class="box">
						<div class="box-body">
							<table id="hasil-kpi-table" class="table table-bordered table-striped">
								<thead>
									<tr>
										<th>#</th>
										<th>Name</th>
										<th>Position</th>
										<th>Total KPI Teknis Pekerjaan</th>
										<th>Total KPI Non Teknis Pekerjaan</th>
										<th>Total KPI Kepribadian</th>
										<th>Total KPI Keterampilan</th>
									</tr>
								</thead>
								<tbody>	
								</tbody>
							</table>
						</div>
						<!-- /.box-body -->
					</div>
					<!-- /.box -->
				</div>
				<!-- /.col -->
			</div>
			<!-- /.row -->
		</section>
		<!-- /.content -->
	</div>
	<!-- /.content-wrapper -->
	<!--footer-->
	<?php $this->load->view("main/footer.php");?>	
  	<div class="control-sidebar-bg"></div>
  

  </div>
  <?php $this->load->view("main/script.php") ?>
</body>
</html>