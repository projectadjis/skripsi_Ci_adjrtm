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
								<h3 class="box-title"><b>ASPEK TEKNIS PEKERJAAN&nbsp;<a class="btn btn-success" data-toggle='modal' data-target='#modalAddTeknisPekerjaan' data-remote='false' data-backdrop='static'>ADD</a></b></h3>
							</div>
							<!-- /.box-header -->
								<table id="aspek-teknis-pekerjaan-table" class="table table-bordered table-striped">
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
										<?php
											$no=0;
		                                    foreach ($weight_alternative_aspek_teknis_pekerjaan->result() as $row) {
		                                    	$no++;
		                                        echo "<tr>";
		                                        echo "<td>" . $no . "</td>";
		                                        echo "<td>" . $row->weight_alternative_aspek_teknis_pekerjaan_rangedown . "</td>";
		                                        echo "<td>" . $row->weight_alternative_aspek_teknis_pekerjaan_rangeup . "</td>";
		                                        echo "<td>" . $row->weight_alternative_aspek_teknis_pekerjaan_score . "</td>";
		                                        echo "<td>
			                                        <a class='delete_record_weight_alternative_aspek_teknis_pekerjaan btn btn-danger' data-weight-alternative-aspek-teknis-pekerjaan-id='$row->weight_alternative_aspek_teknis_pekerjaan_id'><i class='fa fa-trash'></i>&nbsp;Delete</a>
			                                        </td>";

		                                        echo "</tr>";
		                                    }
	                                    ?>
									</tbody>
								</table>
						</div>
						<div class="box box-success">
							<div class="box-header with-border">
								<h3 class="box-title"><b>ASPEK NON TEKNIS&nbsp;<a class="btn btn-success" data-toggle='modal' data-target='#modalAddNonTeknisPekerjaan' data-remote='false' data-backdrop='static'>ADD</a></b></h3>
							</div>
							<!-- /.box-header -->
								<table id="aspek-nonteknis-pekerjaan-table" class="table table-bordered table-striped">
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
										<?php
											$no=0;
		                                    foreach ($weight_alternative_aspek_nonteknis_pekerjaan->result() as $row) {
		                                    	$no++;
		                                        echo "<tr>";
		                                        echo "<td>" . $no . "</td>";
		                                        echo "<td>" . $row->weight_alternative_aspek_nonteknis_pekerjaan_rangedown . "</td>";
		                                        echo "<td>" . $row->weight_alternative_aspek_nonteknis_pekerjaan_rangeup . "</td>";
		                                        echo "<td>" . $row->weight_alternative_aspek_nonteknis_pekerjaan_score . "</td>";
		                                        echo "<td>
			                                        <a class='delete_record_weight_alternative_aspek_nonteknis_pekerjaan btn btn-danger' data-weight-alternative-aspek-nonteknis-pekerjaan-id='$row->weight_alternative_aspek_nonteknis_pekerjaan_id'><i class='fa fa-trash'></i>&nbsp;Delete</a>
			                                        </td>";

		                                        echo "</tr>";
		                                    }
	                                    ?>
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
								<h3 class="box-title"><b>ASPEK KEPRIBADIAN&nbsp;<a class="btn btn-success" data-toggle='modal' data-target='#modalAddKepribadian' data-remote='false' data-backdrop='static'>ADD</a></b></h3>
							</div>
							<!-- /.box-header -->
								<table id="aspek-kepribadian-table" class="table table-bordered table-striped">
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
										<?php
											$no=0;
		                                    foreach ($weight_alternative_aspek_kepribadian->result() as $row) {
		                                    	$no++;
		                                        echo "<tr>";
		                                        echo "<td>" . $no . "</td>";
		                                        echo "<td>" . $row->weight_alternative_aspek_kepribadian_rangedown . "</td>";
		                                        echo "<td>" . $row->weight_alternative_aspek_kepribadian_rangeup . "</td>";
		                                        echo "<td>" . $row->weight_alternative_aspek_kepribadian_score . "</td>";
		                                        echo "<td>
			                                        <a class='delete_record_weight_alternative_aspek_kepribadian btn btn-danger' data-weight-alternative-aspek-kepribadian-id='$row->weight_alternative_aspek_kepribadian_id'><i class='fa fa-trash'></i>&nbsp;Delete</a>
			                                        </td>";

		                                        echo "</tr>";
		                                    }
	                                    ?>
									</tbody>
								</table>
						</div>
						<div class="box box-danger">
							<div class="box-header with-border">
								<h3 class="box-title"><b>ASPEK KETERAMPILAN&nbsp;<a class="btn btn-success" data-toggle='modal' data-target='#modalAddKeterampilan' data-remote='false' data-backdrop='static'>ADD</a></b></h3>
							</div>
							<!-- /.box-header -->
								<table id="aspek-keterampilan-table" class="table table-bordered table-striped">
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
										<?php
											$no=0;
		                                    foreach ($weight_alternative_aspek_keterampilan->result() as $row) {
		                                    	$no++;
		                                        echo "<tr>";
		                                        echo "<td>" . $no . "</td>";
		                                        echo "<td>" . $row->weight_alternative_aspek_keterampilan_rangedown . "</td>";
		                                        echo "<td>" . $row->weight_alternative_aspek_keterampilan_rangeup . "</td>";
		                                        echo "<td>" . $row->weight_alternative_aspek_keterampilan_score . "</td>";
		                                        echo "<td>
			                                        <a class='delete_record_weight_alternative_aspek_keterampilan btn btn-danger' data-weight-alternative-aspek-keterampilan-id='$row->weight_alternative_aspek_keterampilan_id'><i class='fa fa-trash'></i>&nbsp;Delete</a>
			                                        </td>";

		                                        echo "</tr>";
		                                    }
	                                    ?>
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

  	<!-- MODAL ADD ASPEK TEKNIS PEKERJAAN -->
	<div class="modal fade" id="modalAddTeknisPekerjaan" role="dialog" aria-labelledby="modaladdLabel" aria-hidden="true">
	    <div class="modal-dialog">
	        <div class="modal-content">
	            <div class="modal-header">
	            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	            <h4 class="modal-title" id="modaladdLabel">Add Weight's Alternative Aspek Teknis Pekerjaan </h4>
	            </div>
	            <div class="modal-body">
		            <div class="tab-content clearfix">
					    <div class="tab-pane active">
					            <div class="form-group">
					                <label>Range Down</label>
					                <input type="number" name="weight_alternative_aspek_teknis_pekerjaan_rangedown" class="form-control" min="0" oninput="this.value = this.value.replace(/[^0-9.]/g, ''); this.value = this.value.replace(/(\..*)\./g, '$1');" required>
					            </div> 
					            <div class="form-group">
					                <label>Range Up</label>
					                <input type="number" name="weight_alternative_aspek_teknis_pekerjaan_rangeup" class="form-control" min="0" oninput="this.value = this.value.replace(/[^0-9.]/g, ''); this.value = this.value.replace(/(\..*)\./g, '$1');" required>
					            </div>
					            <div class="form-group">
					                <label>Score</label>
					                <input type="number" name="weight_alternative_aspek_teknis_pekerjaan_score" class="form-control" min="0" oninput="this.value = this.value.replace(/[^0-9.]/g, ''); this.value = this.value.replace(/(\..*)\./g, '$1');" required>
					            </div>      
					            <div class="box-footer">
									<button type="submit" class="btn btn-success pull-right" id="button-save-teknispekerjaan">Save</button>
					                <button type="reset" class="btn btn-warning" id="button-reset-teknispekerjaan">Reset</button>
					            </div>
					    </div>
					</div> 
	            </div>
	        </div>
	    </div>
	</div>
	<!-- END MODAL ADD ASPEK TEKNIS PEKERJAAN -->

	<!-- MODAL ADD ASPEK NON TEKNIS PEKERJAAN -->
	<div class="modal fade" id="modalAddNonTeknisPekerjaan" role="dialog" aria-labelledby="modaladdLabel" aria-hidden="true">
	    <div class="modal-dialog">
	        <div class="modal-content">
	            <div class="modal-header">
	            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	            <h4 class="modal-title" id="modaladdLabel">Add Weight's Alternative Aspek Non Teknis Pekerjaan </h4>
	            </div>
	            <div class="modal-body">
		            <div class="tab-content clearfix">
					    <div class="tab-pane active">
					            <div class="form-group">
					                <label>Range Down</label>
					                <input type="number" min="0" name="weight_alternative_aspek_nonteknis_pekerjaan_rangedown" class="form-control" oninput="this.value = this.value.replace(/[^0-9.]/g, ''); this.value = this.value.replace(/(\..*)\./g, '$1');" required>
					            </div> 
					            <div class="form-group">
					                <label>Range Up</label>
					                <input type="number" min="0" name="weight_alternative_aspek_nonteknis_pekerjaan_rangeup" class="form-control" oninput="this.value = this.value.replace(/[^0-9.]/g, ''); this.value = this.value.replace(/(\..*)\./g, '$1');" required>
					            </div>
					            <div class="form-group">
					                <label>Score</label>
					                <input type="number" min="0" name="weight_alternative_aspek_nonteknis_pekerjaan_score" class="form-control" oninput="this.value = this.value.replace(/[^0-9.]/g, ''); this.value = this.value.replace(/(\..*)\./g, '$1');" required>
					            </div>      
					            <div class="box-footer">
									<button type="submit" class="btn btn-success pull-right" id="button-save-nonteknispekerjaan">Save</button>
					                <button type="reset" class="btn btn-warning" id="button-reset-nonteknispekerjaan">Reset</button>
					            </div>
					    </div>
					</div> 
	            </div>
	        </div>
	    </div>
	</div>
	<!-- END MODAL ADD ASPEK NON TEKNIS PEKERJAAN -->

	<!-- MODAL ADD ASPEK KEPRIBADIAN -->
	<div class="modal fade" id="modalAddKepribadian" role="dialog" aria-labelledby="modaladdLabel" aria-hidden="true">
	    <div class="modal-dialog">
	        <div class="modal-content">
	            <div class="modal-header">
	            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	            <h4 class="modal-title" id="modaladdLabel">Add Weight's Alternative Aspek Kepribadian </h4>
	            </div>
	            <div class="modal-body">
		            <div class="tab-content clearfix">
					    <div class="tab-pane active">
					            <div class="form-group">
					                <label>Range Down</label>
					                <input type="number" name="weight_alternative_aspek_kepribadian_rangedown" class="form-control" min="0" oninput="this.value = this.value.replace(/[^0-9.]/g, ''); this.value = this.value.replace(/(\..*)\./g, '$1');" required>
					            </div> 
					            <div class="form-group">
					                <label>Range Up</label>
					                <input type="number" name="weight_alternative_aspek_kepribadian_rangeup" class="form-control" min="0" oninput="this.value = this.value.replace(/[^0-9.]/g, ''); this.value = this.value.replace(/(\..*)\./g, '$1');" required>
					            </div>
					            <div class="form-group">
					                <label>Score</label>
					                <input type="number" name="weight_alternative_aspek_kepribadian_score" class="form-control" min="0" oninput="this.value = this.value.replace(/[^0-9.]/g, ''); this.value = this.value.replace(/(\..*)\./g, '$1');" required>
					            </div>      
					            <div class="box-footer">
									<button type="submit" class="btn btn-success pull-right" id="button-save-kepribadian">Save</button>
					                <button type="reset" class="btn btn-warning" id="button-reset-kepribadian">Reset</button>
					            </div>
					    </div>
					</div> 
	            </div>
	        </div>
	    </div>
	</div>
	<!-- END MODAL ADD ASPEK KEPRIBADIAN -->

	<!-- MODAL ADD ASPEK KETERAMPILAN -->
	<div class="modal fade" id="modalAddKeterampilan" role="dialog" aria-labelledby="modaladdLabel" aria-hidden="true">
	    <div class="modal-dialog">
	        <div class="modal-content">
	            <div class="modal-header">
	            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	            <h4 class="modal-title" id="modaladdLabel">Add Weight's Alternative Aspek Keterampilan </h4>
	            </div>
	            <div class="modal-body">
		            <div class="tab-content clearfix">
					    <div class="tab-pane active">
					            <div class="form-group">
					                <label>Range Down</label>
					                <input type="number" name="weight_alternative_aspek_keterampilan_rangedown" class="form-control" min="0" oninput="this.value = this.value.replace(/[^0-9.]/g, ''); this.value = this.value.replace(/(\..*)\./g, '$1');" required>
					            </div> 
					            <div class="form-group">
					                <label>Range Up</label>
					                <input type="number" name="weight_alternative_aspek_keterampilan_rangeup" class="form-control" min="0" oninput="this.value = this.value.replace(/[^0-9.]/g, ''); this.value = this.value.replace(/(\..*)\./g, '$1');" required>
					            </div>
					            <div class="form-group">
					                <label>Score</label>
					                <input type="number" name="weight_alternative_aspek_keterampilan_score" class="form-control" min="0" oninput="this.value = this.value.replace(/[^0-9.]/g, ''); this.value = this.value.replace(/(\..*)\./g, '$1');" required>
					            </div>      
					            <div class="box-footer">
									<button type="submit" class="btn btn-success pull-right" id="button-save-keterampilan">Save</button>
					                <button type="reset" class="btn btn-warning" id="button-reset-keterampilan">Reset</button>
					            </div>
					    </div>
					</div> 
	            </div>
	        </div>
	    </div>
	</div>
	<!-- END MODAL ADD ASPEK KETERAMPILAN -->

	<!-- MODAL DELETE ASPEK TEKNIS PEKERJAAN -->
	<div class="modal fade" id="modalDeleteAspekTeknisPekerjaan" role="dialog" aria-labelledby="modaladdLabel" aria-hidden="true">
	    <div class="modal-dialog">
	        <div class="modal-content">
	            <div class="modal-header">
	            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	            <h4 class="modal-title" id="modaladdLabel">DELETE ASPEK TEKNIS PEKERJAAN</h4>
	            </div>
	            <div class="modal-body">
	                 <div class="tab-content clearfix">
					      <div class="tab-pane active">
					        	    <input type="hidden" name="weight_alternative_aspek_teknis_pekerjaan_id" id="weight_alternative_aspek_teknis_pekerjaan_id" class="form-control">
					                <strong>Anda yakin mau menghapus record ini?</strong>
					            <div class="modal-footer">
					 	             <button type="submit" id="button-delete-aspek-teknis-pekerjaan" class="btn btn-danger">Hapus</button>
					 	        </div> 
					      </div>
					</div>
	            </div>
	        </div>
	    </div>
	</div>
	<!-- END MODAL DELETE ASPEK TEKNIS PEKERJAAN -->

	<!-- MODAL DELETE ASPEK NON TEKNIS PEKERJAAN -->
	<div class="modal fade" id="modalDeleteAspekNonTeknisPekerjaan" role="dialog" aria-labelledby="modaladdLabel" aria-hidden="true">
	    <div class="modal-dialog">
	        <div class="modal-content">
	            <div class="modal-header">
	            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	            <h4 class="modal-title" id="modaladdLabel">DELETE ASPEK NON TEKNIS PEKERJAAN</h4>
	            </div>
	            <div class="modal-body">
	                 <div class="tab-content clearfix">
					      <div class="tab-pane active">
					        	    <input type="hidden" name="weight_alternative_aspek_nonteknis_pekerjaan_id" id="weight_alternative_aspek_nonteknis_pekerjaan_id" class="form-control">
					                <strong>Anda yakin mau menghapus record ini?</strong>
					            <div class="modal-footer">
					 	             <button type="submit" id="button-delete-aspek-nonteknis-pekerjaan" class="btn btn-danger">Hapus</button>
					 	        </div> 
					      </div>
					</div>
	            </div>
	        </div>
	    </div>
	</div>
	<!-- END MODAL DELETE ASPEK NON TEKNIS PEKERJAAN -->

	<!-- MODAL DELETE ASPEK KEPRIBADIAN -->
	<div class="modal fade" id="modalDeleteAspekKepribadian" role="dialog" aria-labelledby="modaladdLabel" aria-hidden="true">
	    <div class="modal-dialog">
	        <div class="modal-content">
	            <div class="modal-header">
	            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	            <h4 class="modal-title" id="modaladdLabel">DELETE ASPEK KEPRIBADIAN</h4>
	            </div>
	            <div class="modal-body">
	                 <div class="tab-content clearfix">
					      <div class="tab-pane active">
					        	    <input type="hidden" name="weight_alternative_aspek_kepribadian_id" id="weight_alternative_aspek_kepribadian_id" class="form-control">
					                <strong>Anda yakin mau menghapus record ini?</strong>
					            <div class="modal-footer">
					 	             <button type="submit" id="button-delete-aspek-kepribadian" class="btn btn-danger">Hapus</button>
					 	        </div> 
					      </div>
					</div>
	            </div>
	        </div>
	    </div>
	</div>
	<!-- END MODAL DELETE ASPEK TEKNIS PEKERJAAN -->

	<!-- MODAL DELETE ASPEK KETERAMPILAN -->
	<div class="modal fade" id="modalDeleteAspekKeterampilan" role="dialog" aria-labelledby="modaladdLabel" aria-hidden="true">
	    <div class="modal-dialog">
	        <div class="modal-content">
	            <div class="modal-header">
	            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	            <h4 class="modal-title" id="modaladdLabel">DELETE ASPEK KETERAMPILAN</h4>
	            </div>
	            <div class="modal-body">
	                 <div class="tab-content clearfix">
					      <div class="tab-pane active">
					        	    <input type="hidden" name="weight_alternative_aspek_keterampilan_id" id="weight_alternative_aspek_keterampilan_id" class="form-control">
					                <strong>Anda yakin mau menghapus record ini?</strong>
					            <div class="modal-footer">
					 	             <button type="submit" id="button-delete-aspek-keterampilan" class="btn btn-danger">Hapus</button>
					 	        </div> 
					      </div>
					</div>
	            </div>
	        </div>
	    </div>
	</div>
	<!-- END MODAL DELETE ASPEK KETERAMPILAN -->

  </div>
  <?php $this->load->view("main/script.php") ?>
</body>
</html>