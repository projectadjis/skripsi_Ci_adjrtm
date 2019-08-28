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
				REPORT
			</h1>
			<ol class="breadcrumb">
				<li><i class="fa fa-book"></i>&nbsp;REPORT</li>
				<li class="active">REPORT</li>
			</ol>
		</section>

		<!-- Main content -->
		<section class="content">
			<div class="row">
				<div class="col-md-12">
					<div class="box box-primary">
			            <div class="box-body">
			              <!-- Date -->
			              <div class="form-group">
			                <label>Select Position:</label><br>
				                <select class="form-control select2" name="report_position" title="Select's Position">
				                	<option value="">--Choose--</option>
					                 <?php 
						                foreach($position->result() as $row){
						                 	echo "<option value='$row->position_name'>$row->position_name</option>";
						                }
					                 ?>
				                </select>
			                <!-- /.input group -->
			              </div>
			              <div class="box-footer">
								<input type="submit" class="btn btn-success pull-left" id="button-report" value="Process">
				          </div>
			              <!-- /.form group -->
			            </div>
			            <!-- /.box-body -->
			        </div>
			    </div>
				<div class="col-xs-12 value_report">
					<div class="box">
						<div class="box-header with-border">
							<button class="btn btn-success btn-md"><i class="fa fa-cloud-download"></i>&nbsp;Excel</button>
						</div>
						<div class="box-body">
							<table id="report-table" class="table table-bordered table-striped">
								<thead>
									<tr>
										<th>#</th>
										<th>Name</th>
										<th>Preference Aspek Teknis Pekerjaan</th>
										<th>Preference Aspek Non Teknis Pekerjaan</th>
										<th>Preference Aspek Kepribadian</th>
										<th>Preference Aspek Keterampilan</th>
										<th>Total Preference</th>
										<th>Date Generate</th>
										<th>Kode Unique</th>
									</tr>
								</thead>
								<tbody>
									<?php
										$no=0;
	                                    foreach ($get_data_report->result() as $row) {
	                                    	$no++;
	                                    	$date_generate = date('d/m/y', strtotime($row->generate_preference_date));
	                                        echo "<tr>";
	                                        echo "<td>" . $no . "</td>";
	                                        echo "<td>" . $row->karyawan_name . "</td>";
	                                        echo "<td>" . $row->generate_preference_teknispekerjaan . "</td>";
	                                        echo "<td>" . $row->generate_preference_nonteknispekerjaan . "</td>";
	                                        echo "<td>" . $row->generate_preference_kepribadian . "</td>";
	                                        echo "<td>" . $row->generate_preference_keterampilan . "</td>";
	                                        echo "<td>" . $row->total_preference . "</td>";
	                                        echo "<td>" . $date_generate . "</td>";
	                                        echo "<td>" . $row->weight_criteria_unique . "</td>";
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
  </div>
  <?php $this->load->view("main/script.php") ?>
</body>
</html>