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
				User &nbsp; <a href="" class="btn btn-success" data-toggle='modal' data-target='#modalAdd' data-remote='false' data-backdrop='static'>ADD</a>&nbsp;
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
										<th>#</th>
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
	<div class="modal fade" id="modalAdd" role="dialog" aria-labelledby="modaladdLabel" aria-hidden="true">
	    <div class="modal-dialog">
	        <div class="modal-content">
	            <div class="modal-header">
	            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	            <h4 class="modal-title" id="modaladdLabel">Add &nbsp;<?php echo $title; ?> </h4>
	            </div>
	            <div class="modal-body">
		            <div class="tab-content clearfix">
					    <div class="tab-pane active">
					    		<input type="hidden" name="user_right">
					            <div class="form-group">
					                <label>Name</label>
					                <input type="text" name="user_name" class="form-control" title="User's Name" required>
					            </div>  
					            <div class="form-group">
					                <label>Position</label><br>
					                <select class="form-control select2" name="user_position" id="user_position" title="User's Position">
					                	<option value="">--Choose--</option>
						                 <?php 
							                 foreach($position->result() as $row){
							                 	echo "<option value='$row->position_id'>$row->position_name</option>";
							                 }
						                 ?>
					                </select>
					            </div>
					            <div class="box-footer">
									<button type="submit" class="btn btn-success pull-right" id="button-save">Save</button>
					                <button type="reset" class="btn btn-warning" id="button-reset">Reset</button>
					            </div>
					    </div>
					</div> 
	            </div>
	        </div>
	    </div>
	</div>
	<!-- END MODAL ADD -->

	<!-- MODAL UPDATE -->
	<div class="modal fade" id="modalUpdate" role="dialog" aria-labelledby="modaladdLabel" aria-hidden="true">
	    <div class="modal-dialog">
	        <div class="modal-content">
	            <div class="modal-header">
	            <button type="button" class="close" data-dismiss="modal" aria-label="Close" id="tutup1"><span aria-hidden="true">&times;</span></button>
	            <h4 class="modal-title" id="modaladdLabel">UPDATE &nbsp;<?php echo $title; ?> </h4>
	            </div>
	            <div class="modal-body">
	                 <div class="tab-content clearfix">
					      <div class="tab-pane active">
					                <div class="form-group">
					                    <label>Nama</label>
					                    <input type="hidden" name="user_id_edit" class="form-control">
					                    <input type="text" name="user_name_edit" class="form-control" required>
					                </div>  
					                <div class="form-group">
					                    <label>Position</label><br>
					                    <select class="form-control select2" name="user_position_edit">
						                    <option value="">--Choose--</option>
							                 <?php 
								                 foreach($position->result() as $row){
								                 	echo "<option value='$row->position_id'>$row->position_name</option>";
								                 }
							                 ?>
						                </select>
					                </div>
					            <input type="submit" name="submit" class="btn btn-warning" id="button-update" value="Update">
					      </div>
					</div>
	            </div>
	        </div>
	    </div>
	</div>

	<!-- MODAL DELETE -->
	<div class="modal fade" id="modalDelete" role="dialog" aria-labelledby="modaladdLabel" aria-hidden="true">
	    <div class="modal-dialog">
	        <div class="modal-content">
	            <div class="modal-header">
	            <button type="button" class="close" data-dismiss="modal" aria-label="Close" id="tutup2"><span aria-hidden="true">&times;</span></button>
	            <h4 class="modal-title" id="modaladdLabel">DELETE &nbsp;<?php echo $title; ?> </h4>
	            </div>
	            <div class="modal-body">
	                 <div class="tab-content clearfix">
					      <div class="tab-pane active">
					        	    <input type="hidden" name="user_id" id="user_id" class="form-control">
					                <strong>Anda yakin mau menghapus record ini?</strong>
					            <div class="modal-footer">
					 	             <button type="submit" id="button-delete" class="btn btn-danger">Hapus</button>
					 	        </div> 
					      </div>
					</div>
	            </div>
	        </div>
	    </div>
	</div>
	<!-- END MODAL DELETE -->
  </div>
  <?php $this->load->view("main/script.php") ?>
</body>
</html>