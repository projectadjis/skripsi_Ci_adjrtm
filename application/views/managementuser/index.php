<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>
	<?php echo $title ; ?>
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
				Management User
			</h1>
			<ol class="breadcrumb">
				<li><a href="#"><i class="fa fa-user"></i> Management User</a></li>
				<li class="active">Management User</li>
			</ol>
		</section>

		<!-- Main content -->
		<section class="content">
			<div class="row">
				<div class="col-xs-12">
					<div class="box">
						<div class="box-body">
							<table id="managementuser-table" class="table table-bordered table-striped">
								<thead>
									<tr>
										<th>#</th>
										<th>Name</th>
										<th>Position</th>
										<th>Action</th>
									</tr>
								</thead>
								<tbody>
								<?php
									$no=0;
                                    foreach ($leadKaryawan->result() as $row) {
                                    	$no++;
                                        echo "<tr>";

                                        echo "<td>" . $no . "</td>";
                                        echo "<td>" . $row->karyawan_name . "</td>";
                                        echo "<td>" . $row->karyawan_position . "</td>";
                                        
                                        if ($row->karyawan_access == 1){
										   echo "<td><a class='right_record btn bg-maroon' data-karyawan-id='$row->karyawan_id' style = 'pointer-events : none;'><i class='fa fa-gear'></i>&nbsp;Set</a></td>";
                                        } else {
                                        	echo "<td><a class='right_record btn bg-maroon' data-karyawan-id='$row->karyawan_id'><i class='fa fa-gear'></i>&nbsp;Set</a></td>";
                                    	}

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
	<?php $this->load->view("main/footer.php");?>	
  	<div class="control-sidebar-bg"></div>

	<!-- MODAL RIGHT -->
	<div class="modal fade" id="modalRight" role="dialog" aria-labelledby="modaladdLabel" aria-hidden="true">
	    <div class="modal-dialog">
	        <div class="modal-content">
	            <div class="modal-header">
	            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	            <h4 class="modal-title" id="modalRightLabel">Set Right &nbsp;<?php echo $title; ?> </h4>
	            </div>
	            <div class="modal-body">
	                 <div class="tab-content clearfix">
					      <div class="tab-pane active">
					        	    <input type="hidden" name="karyawan_id" id="karyawan_id" class="form-control">
					            <div class="form-group">
					                <label>Username</label>
					                <input type="text" name="managementuser_username" class="form-control" title="Management Username" required>
					            </div> 
					            <div class="form-group">
					                <label>Password</label>
					                <input type="text" name="managementuser_password" class="form-control" title="Management Password" required>
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
	<!-- END MODAL RIGHT -->
  </div>
  <?php $this->load->view("main/script.php") ?>
</body>
</html>