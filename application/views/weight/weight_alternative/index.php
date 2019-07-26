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
				Weight's Alternative
			</h1>
			<ol class="breadcrumb">
				<li><i class="fa fa-chain"></i>&nbsp;Weight's Alternative</li>
				<li class="active">Weight's Alternative</li>
			</ol>
		</section>

		<!-- Main content -->
		<section class="content">
			<div class="row">
					<!-- left column -->
					
					<div class="col-md-6">
						<!-- general form elements -->
						<div class="box box-primary">
							<div class="box-header with-border">
								<h3 class="box-title"><b>ASPEK TEKNIS PEKERJAAN&nbsp;<a class="btn btn-success" id="add-aspek-teknis-pekerjaan">ADD</a></b></h3>
							</div>
							<!-- /.box-header -->
								<table id="aspek-teknis-pekerjaan" class="table table-bordered table-striped">
									<thead>
										<tr>
											<th>No</th>
											<th>Range Down</th>
											<th>Range Up</th>
											<th>Score</th>
											<th>Action</th>
										</tr>
									</thead>
									<tbody>
										<!-- <tr>
											<td>1</td>
											<td>0</td>
											<td>16</td>
											<td>1</td>
											<td>
												<a class="btn btn-warning btn-sm" id="edit-aspek-teknis-pekerjaan"><i class="fa fa-pencil"></i>&nbsp;Edit</a>
												<a class="btn btn-danger btn-sm" id="delete-aspek-teknis-pekerjaan"><i class="fa fa-trash"></i>&nbsp;Delete</a>
												<a class="btn btn-info btn-sm" id="save-edit-aspek-teknis-pekerjaan" style="display: none"><i class="fa fa-save"></i>&nbsp;Add</a>
												<a class="btn bg-purple btn-sm" id="cancel-edit-aspek-teknis-pekerjaan" style="display: none"><i class="fa fa-close"></i>&nbsp;Cancel</a>
											</td>
										</tr> -->
									</tbody>
								</table>
						</div>
						<div class="box box-success">
							<div class="box-header with-border">
								<h3 class="box-title"><b>ASPEK NON TEKNIS&nbsp;<a class="btn btn-success" id="add-aspek-nonteknis-pekerjaan">ADD</a></b></h3>
							</div>
							<!-- /.box-header -->
								<table id="aspek-nonteknis-pekerjaan" class="table table-bordered table-striped">
									<thead>
										<tr>
											<th>No</th>
											<th>Range Down</th>
											<th>Range Up</th>
											<th>Score</th>
											<th>Action</th>
										</tr>
									</thead>
									<tbody>
										<!-- <tr>
											<td>1</td>
											<td>0</td>
											<td>16</td>
											<td>1</td>
											<td>
												<a class="btn btn-warning btn-sm" id="edit-aspek-nonteknis-pekerjaan"><i class="fa fa-pencil"></i>&nbsp;Edit</a>
												<a class="btn btn-danger btn-sm" id="delete-aspek-nonteknis-pekerjaan"><i class="fa fa-trash"></i>&nbsp;Delete</a>
												<a class="btn btn-info btn-sm" id="save-edit-aspek-nonteknis-pekerjaan" style="display: none"><i class="fa fa-save"></i>&nbsp;Add</a>
												<a class="btn bg-purple btn-sm" id="cancel-edit-aspek-nonteknis-pekerjaan" style="display: none"><i class="fa fa-close"></i>&nbsp;Cancel</a>
											</td>
										</tr> -->
									</tbody>
								</table>
						</div>
						<!-- /.box -->
					</div>
					<!--/.col (left) -->
					<!-- right column -->
					<div class="col-md-6">
					  	<div class="box box-warning">
							<div class="box-header with-border">
								<h3 class="box-title"><b>ASPEK KEPRIBADIAN&nbsp;<a class="btn btn-success" id="add-aspek-kepribadian">ADD</a></b></h3>
							</div>
							<!-- /.box-header -->
								<table id="aspek-kepribadian" class="table table-bordered table-striped">
									<thead>
										<tr>
											<th>No</th>
											<th>Range Down</th>
											<th>Range Up</th>
											<th>Score</th>
											<th>Action</th>
										</tr>
									</thead>
									<tbody>
										<!-- <tr>
											<td>1</td>
											<td>0</td>
											<td>16</td>
											<td>1</td>
											<td>
												<a class="btn btn-warning btn-sm" id="edit-aspek-kepribadian"><i class="fa fa-pencil"></i>&nbsp;Edit</a>
												<a class="btn btn-danger btn-sm" id="delete-aspek-kepribadian"><i class="fa fa-trash"></i>&nbsp;Delete</a>
												<a class="btn btn-info btn-sm" id="save-edit-aspek-kepribadian" style="display: none"><i class="fa fa-save"></i>&nbsp;Add</a>
												<a class="btn bg-purple btn-sm" id="cancel-edit-aspek-kepribadian" style="display: none"><i class="fa fa-close"></i>&nbsp;Cancel</a>
											</td>
										</tr> -->
									</tbody>
								</table>
						</div>
						<div class="box box-danger">
							<div class="box-header with-border">
								<h3 class="box-title"><b>ASPEK KETERAMPILAN&nbsp;<a class="btn btn-success" id="add-aspek-keterampilan">ADD</a></b></h3>
							</div>
							<!-- /.box-header -->
								<table id="aspek-keterampilan" class="table table-bordered table-striped">
									<thead>
										<tr>
											<th>No</th>
											<th>Range Down</th>
											<th>Range Up</th>
											<th>Score</th>
											<th>Action</th>
										</tr>
									</thead>
									<tbody>
										<!-- <tr>
											<td>1</td>
											<td>0</td>
											<td>16</td>
											<td>1</td>
											<td>
												<a class="btn btn-warning btn-sm" id="edit-aspek-keterampilan"><i class="fa fa-pencil"></i>&nbsp;Edit</a>
												<a class="btn btn-danger btn-sm" id="delete-aspek-keterampilan"><i class="fa fa-trash"></i>&nbsp;Delete</a>
												<a class="btn btn-info btn-sm" id="save-edit-aspek-keterampilan" style="display: none"><i class="fa fa-save"></i>&nbsp;Add</a>
												<a class="btn bg-purple btn-sm" id="cancel-edit-aspek-keterampilan" style="display: none"><i class="fa fa-close"></i>&nbsp;Cancel</a>
											</td>
										</tr> -->
									</tbody>
								</table>
						</div>
					</div>
					<!--/.col (right) -->
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