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
				Position &nbsp; <a class="btn btn-success" data-toggle='modal' data-target='#modalAdd' data-remote='false' data-backdrop='static'>ADD</a>&nbsp;
			</h1>
			<ol class="breadcrumb">
				<li><i class="fa fa-deaf"></i>&nbsp;Position</li>
				<li class="active">Position</li>
			</ol>
		</section>

		<!-- Main content -->
		<section class="content">
			<div class="row">
				<div class="col-xs-12">
					<div class="box">
						<div class="box-body">
							<table id="position-table" class="table table-bordered table-striped">
								<thead>
									<tr>
										<th>#</th>
										<th>Position</th>
										<th>Action</th>
									</tr>
								</thead>
								<tbody>
									<?php
										$no=0;
	                                    foreach ($position->result() as $row) {
	                                    	$no++;
	                                        echo "<tr>";
	                                        echo "<td>" . $no . "</td>";
	                                        echo "<td>" . $row->position_name . "</td>";
	                                        echo "<td><a class='delete_record btn btn-danger' data-position-id='$row->position_id'><i class='fa fa-trash'></i>&nbsp;Delete</a></td>";

	                                        echo "</tr>";
	                                    }
                                    ?>
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

  	<!-- MODAL ADD -->
	<div class="modal fade" id="modalAdd" role="dialog" aria-labelledby="modaladdLabel" aria-hidden="true">
	    <div class="modal-dialog">
	        <div class="modal-content">
	            <div class="modal-header">
	            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	            <h4 class="modal-title" id="modaladdLabel">Add &nbsp;Position </h4>
	            </div>
	            <div class="modal-body">
		            <div class="tab-content clearfix">
					    <div class="tab-pane active">
					            <div class="form-group">
					                <label>Position</label>
					                <input type="text" name="position_name" class="form-control" required>
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
					        	    <input type="hidden" name="position_id" id="position_id" class="form-control">
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