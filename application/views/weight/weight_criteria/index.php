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
	<!-- load headernya-->
    <?php $this->load->view("main/header.php") ?>
    <!--load main-sidebarnya-->
    <?php $this->load->view("main/main-sidebar.php") ?>
	<!-- Content Wrapper. Contains page content -->
	<div class="content-wrapper">
	<!-- Content Header (Page header) -->
		<section class="content-header">
			<h1>
				Weight's Criteria &nbsp; <a class="btn btn-success" id="add-weight-criteria">ADD</a>
			</h1>
			<ol class="breadcrumb">
				<li><a href="#"><i class="fa fa-chain"></i>Weight's Criteria</a></li>
				<li class="active">Weight's Criteria</li>
			</ol>
		</section>
		<!-- Main content -->
		<section class="content">
			<div class="row">
				<div class="col-xs-12">
					<div class="box">
						<div class="box-body">
							<table id="weight-criteria" class="table table-bordered table-striped">
								<thead>
									<tr>
										<th>No</th>
										<th>Aspek Teknis Pekerjaan (%)</th>
										<th>Aspek Non Teknis Pekerjaan (%)</th>
										<th>Aspek Kepribadian (%)</th>
										<th>Aspek Keterampilan (%)</th>
										<th>Action</th>
									</tr>
								</thead>
								<tbody align="center">
									<!-- <tr>
										<td>1</td>
										<td>40</td>
										<td>30</td>
										<td>20</td>
										<td>10</td>
										<td>
											<a href="#" class="btn bg-olive use"><i class="fa fa-play"></i>&nbsp;Use</a>&nbsp;
											<a href="#" class="btn bg-maroon stop" style="display: none;"><i class="fa fa-stop"></i>&nbsp;Stop</a>&nbsp;<a href="" class="btn btn-danger"><i class="fa fa-trash"></i>&nbsp;Delete</a>
										</td>
									</tr> -->
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
	<?php $this->load->view("main/footer.php") ?>	
  	<div class="control-sidebar-bg"></div>
  </div>
  <?php $this->load->view("main/script.php") ?>
</body>
</html>