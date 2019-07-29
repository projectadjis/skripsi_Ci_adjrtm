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
				Weight's Criteria &nbsp; <a class="btn btn-success" data-toggle='modal' data-target='#modalAdd' data-remote='false' data-backdrop='static'>ADD</a>
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
									<?php
										$no=0;
	                                    foreach ($weight_criteria->result() as $row) {
	                                    	$no++;
	                                        echo "<tr>";
	                                        echo "<td>" . $no . "</td>";
	                                        echo "<td>" . $row->weight_criteria_teknispekerjaan . "</td>";
	                                        echo "<td>" . $row->weight_criteria_nonteknispekerjaan . "</td>";
	                                        echo "<td>" . $row->weight_criteria_kepribadian . "</td>";
	                                        echo "<td>" . $row->weight_criteria_keterampilan . "</td>";

	                                        if ($row->weight_criteria_status == 1) {
		                                        echo "<td>
		                                        <a class='stop_record btn bg-maroon' data-weight-criteria-id='$row->weight_criteria_id'><i class='fa fa-stop'></i>&nbsp;Stop</a>
		                                        </td>";
	                                        } else {
	                                        	echo "<td>
		                                        <a class='use_record btn bg-olive' data-weight-criteria-id='$row->weight_criteria_id'><i class='fa fa-play'></i>&nbsp;Use</a>&nbsp;
		                                        <a class='delete_record btn btn-danger' data-weight-criteria-id='$row->weight_criteria_id'><i class='fa fa-trash'></i>&nbsp;Delete</a>
		                                        </td>";
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
	<?php $this->load->view("main/footer.php") ?>	
  	<div class="control-sidebar-bg"></div>
  	<!-- MODAL ADD -->
	<div class="modal fade" id="modalAdd" role="dialog" aria-labelledby="modaladdLabel" aria-hidden="true">
	    <div class="modal-dialog">
	        <div class="modal-content">
	            <div class="modal-header">
	            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	            <h4 class="modal-title" id="modaladdLabel">Add &nbsp;Weight Criteria </h4>
	            </div>
	            <div class="modal-body">
		            <div class="tab-content clearfix">
					    <div class="tab-pane active">
					            <div class="form-group">
					                <label>Aspek Teknis Pekerjaan (%)</label>
					                <input type="number" name="weight_criteria_teknispekerjaan" class="form-control number" min="0" oninput="this.value = this.value.replace(/[^0-9.]/g, ''); this.value = this.value.replace(/(\..*)\./g, '$1');" required>
					            </div>
					            <div class="form-group">
					                <label>Aspek Non Teknis Pekerjaan (%)</label>
					                <input type="number" name="weight_criteria_nonteknispekerjaan" class="form-control number" min="0" oninput="this.value = this.value.replace(/[^0-9.]/g, ''); this.value = this.value.replace(/(\..*)\./g, '$1');" required>
					            </div>
					            <div class="form-group">
					                <label>Aspek Kepribadian (%)</label>
					                <input type="number" name="weight_criteria_kepribadian" class="form-control number" min="0" oninput="this.value = this.value.replace(/[^0-9.]/g, ''); this.value = this.value.replace(/(\..*)\./g, '$1');" required>
					            </div>
					            <div class="form-group">
					                <label>Aspek Keterampilan (%)</label>
					                <input type="number" name="weight_criteria_keterampilan" class="form-control number" min="0" oninput="this.value = this.value.replace(/[^0-9.]/g, ''); this.value = this.value.replace(/(\..*)\./g, '$1');" required>
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
					        	    <input type="hidden" name="weight_criteria_id" id="weight_criteria_id" class="form-control">
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