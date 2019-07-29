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
					            <div class="form-group">
					                <label>Name</label>
					                <input type="text" name="karyawan_name" class="form-control" required>
					            </div>  
					            <div class="form-group">
					                <label>Position</label>
					                <input type="text" name="karyawan_position" class="form-control" required>
					            </div>
					            <div class="box-footer">
									<button type="submit" class="btn btn-success pull-right" id="adjis">Save</button>
					                <button type="reset" class="btn btn-warning">Reset</button>
					            </div>
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