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
				Rank &nbsp; <a href="" class="btn btn-warning"><i class="fa fa-print fa-2">&nbsp; Print</i></a>
			</h1>
			<ol class="breadcrumb">
				<li><a href="#"><i class="fa fa-line-chart"></i>Rank</a></li>
				<li class="active">Rank</li>
			</ol>
		</section>
	    <!-- Main content -->
	    <section class="content">
	      <div class="row">
	        <div class="col-md-6">
	          <!-- Line chart -->
	          <div class="box box-primary">
		            <div class="box-header with-border">
		              <i class="fa fa-line-chart"></i>

		              <h3 class="box-title">Adm PO</h3>

		              <div class="box-tools pull-right">
		                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
		                </button>
		                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
		              </div>
		            </div>
		            <div class="box-body">
		              <div id="admPo" class="chart-rank"></div>
		            </div>
		            <!-- /.box-body-->
	          </div>
	          <!-- /.box -->
	          <div class="box box-primary">
		            <div class="box-header with-border">
		              <i class="fa fa-line-chart"></i>

		              <h3 class="box-title">Adm REQ</h3>

		              <div class="box-tools pull-right">
		                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
		                </button>
		                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
		              </div>
		            </div>
		            <div class="box-body">
		              <div id="admReq" class="chart-rank"></div>
		            </div>
		            <!-- /.box-body-->
	          </div>
	          <!-- /.box -->
	          <div class="box box-primary">
		            <div class="box-header with-border">
		              <i class="fa fa-line-chart"></i>

		              <h3 class="box-title">DOCON</h3>

		              <div class="box-tools pull-right">
		                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
		                </button>
		                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
		              </div>
		            </div>
		            <div class="box-body">
		              <div id="docon" class="chart-rank"></div>
		            </div>
		            <!-- /.box-body-->
	          </div>
	          <!-- /.box -->
	          <div class="box box-primary">
		            <div class="box-header with-border">
		              <i class="fa fa-line-chart"></i>

		              <h3 class="box-title">DOCON EDOCS</h3>

		              <div class="box-tools pull-right">
		                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
		                </button>
		                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
		              </div>
		            </div>
		            <div class="box-body">
		              <div id="doconEdocs" class="chart-rank"></div>
		            </div>
		            <!-- /.box-body-->
	          </div>
	          <!-- /.box -->

	        </div>
	        <!-- /.col -->

	        <div class="col-md-6">
	          <!-- Bar chart -->
	          <div class="box box-primary">
		            <div class="box-header with-border">
		              <i class="fa fa-line-chart"></i>

		              <h3 class="box-title">VPC</h3>

		              <div class="box-tools pull-right">
		                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
		                </button>
		                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
		              </div>
		            </div>
		            <div class="box-body">
		              <div id="vpc" class="chart-rank"></div>
		            </div>
		            <!-- /.box-body-->
	          </div>
	          <!-- /.box -->
	          <div class="box box-primary">
		            <div class="box-header with-border">
		              <i class="fa fa-line-chart"></i>

		              <h3 class="box-title">VPC EDOCS</h3>

		              <div class="box-tools pull-right">
		                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
		                </button>
		                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
		              </div>
		            </div>
		            <div class="box-body">
		              <div id="vpcEdocs" class="chart-rank"></div>
		            </div>
		            <!-- /.box-body-->
	          </div>
	          <!-- /.box -->
	          <div class="box box-primary">
		            <div class="box-header with-border">
		              <i class="fa fa-line-chart"></i>

		              <h3 class="box-title">BUYER</h3>

		              <div class="box-tools pull-right">
		                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
		                </button>
		                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
		              </div>
		            </div>
		            <div class="box-body">
		              <div id="buyer" class="chart-rank"></div>
		            </div>
		            <!-- /.box-body-->
	          </div>
	          <!-- /.box -->
	          <div class="box box-primary">
		            <div class="box-header with-border">
		              <i class="fa fa-line-chart"></i>

		              <h3 class="box-title">TKDN</h3>

		              <div class="box-tools pull-right">
		                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
		                </button>
		                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
		              </div>
		            </div>
		            <div class="box-body">
		              <div id="tkdn" class="chart-rank"></div>
		            </div>
		            <!-- /.box-body-->
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