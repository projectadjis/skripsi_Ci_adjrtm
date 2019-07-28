<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>
	<?php 
		echo $title;
	?>		
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
				User &nbsp; <a href="" class="btn btn-success" data-toggle='modal' data-target='#modaladd' data-remote='false' data-backdrop='static'>ADD</a>&nbsp;
				<button class="btn btn-success adjis-toastr">COBA TOASTR</button>
			</h1>
			<ol class="breadcrumb">
				<li><a href="#"><i class="fa fa-user"></i> User</a></li>
				<li class="active">User</li>
			</ol>
		</section>

		<!-- Main content -->
		<section class="content">
			<div class="row">
				<div class="col-xs-12">
					<div class="box">
						<div class="box-body">
							<table id="user-table" class="table table-bordered table-striped">
								<thead>
									<tr>
										<th>No</th>
										<th>Name</th>
										<th>Position</th>
										<th>Status</th>
										<th>Action</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>1</td>
										<td>Trident</td>
										<td>Internet Explorer 4.0</td>
										<td><button type="button" class="btn bg-maroon" style="pointer-events: none;">Approved</button></td>
										<td><a href="" class="btn btn-success"><i class="fa fa-bar-chart-o"></i>&nbsp;KPI</a></td>
									</tr>
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
  	
	<!-- MODAL ADD -->
	<div class="modal fade" id="modaladd" role="dialog" aria-labelledby="modaladdLabel" aria-hidden="true">
	    <div class="modal-dialog">
	        <div class="modal-content">
	            <div class="modal-header">
	            <button type="button" class="close" data-dismiss="modal" aria-label="Close" id="tutup"><span aria-hidden="true">&times;</span></button>
	            <h4 class="modal-title" id="modaladdLabel">Add User</h4>
	            </div>
	            <div class="modal-body">
		            <div class="tab-content clearfix">
					    <div class="tab-pane active">
					        <form method="post" action="<?php echo base_url('Employee/save'); ?>">
					            <div class="form-group">
					                <label>Nik</label>
					                <input type="text" name="employee_nik" id="employee_nik" class="form-control" required>
					            </div>  
					            <div class="form-group">
					                <label>Name</label>
					                <input type="text" name="employee_nama" id="employee_nama" class="form-control" required>
					            </div>
					            </div>
					            <input type="submit" name="submit" id="submit" class="btn btn-success submit" value="Save" style="width: 100%;"> 
					        </form>
					    </div>
					</div> 
	            </div>
	        </div>
	    </div>
	</div>
	<!-- END MODAL ADD -->
  </div>
  <?php $this->load->view("main/script.php") ?>
</body>
</html>