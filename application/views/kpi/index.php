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
				KPI'S CRITERIA
			</h1>
			<ol class="breadcrumb">
				<li><i class="fa fa-bar-chart-o"></i>&nbsp;KPI</li>
				<li class="active">KPI</li>
			</ol>
		</section>

		<!-- Main content -->
		<section class="content">
			<div class="row">
					<!-- left column -->
					<form role="form"></form>
					<input type="hidden" name="user_id" value="<?php echo $user_id; ?>">
					<div class="col-md-6">
						<!-- general form elements -->
						<div class="box box-primary">
							<div class="box-header with-border">
								<h3 class="box-title"><b>ASPEK TEKNIS PEKERJAAN</b></h3>
							</div>
							<!-- /.box-header -->
								<div class="box-body">
									<div class="form-group">
										<label>Efektivitas dan Efisiensi Kerja</label>
										<input type="number" class="form-control" name="efektivitas_teknis_pekerjaan" placeholder="Skor 0-16" title="Efektivitas dan Efisiensi Kerja">
									</div>
									<div class="form-group">
										<label>Ketepatan Waktu dalam Penyelesaian Tugas</label>
										<input type="number" class="form-control" name="ketepatan_teknis_pekerjaan" placeholder="Skor 0-16" title="Ketepatan Waktu dalam Penyelesaian Tugas">
									</div>
									<div class="form-group">
										<label>Kemampuan mencapai target / standar perusahaan</label>
										<input type="number" class="form-control" name="kemampuan_teknis_pekerjaan" placeholder="Skor 0-16" title="Kemampuan mencapai target / standar perusahaan">
									</div>
								</div>
						</div>
						<div class="box box-success">
							<div class="box-header with-border">
								<h3 class="box-title"><b>ASPEK NON TEKNIS</b></h3>
							</div>
							<!-- /.box-header -->
								<div class="box-body">
									<div class="form-group">
										<label>Tertib Administrasi</label>
										<input type="number" class="form-control" name="tertib_nonteknis_pekerjaan" placeholder="Skor 0-16" title="Tertib Administrasi">
									</div>
									<div class="form-group">
										<label>Inisiatif</label>
										<input type="number" class="form-control" name="inisiatif_nonteknis_pekerjaan" placeholder="Skor 0-16" title="Inisiatif">
									</div>
									<div class="form-group">
										<label>Kerja Sama dan Koordinasi Antar Bagian</label>
										<input type="number" class="form-control" name="kerjasama_nonteknis_pekerjaan" placeholder="Skor 0-16" title="Kerja Sama dan Koordinasi Antar Bagian">
									</div>
								</div>
						</div>
						<!-- /.box -->
					</div>
					<!--/.col (left) -->
					<!-- right column -->
					<div class="col-md-6">
					  	<div class="box box-warning">
							<div class="box-header with-border">
								<h3 class="box-title"><b>ASPEK KEPRIBADIAN</b></h3>
							</div>
							<!-- /.box-header -->
								<div class="box-body">
									<div class="form-group">
										<label>Perilaku</label>
										<input type="number" class="form-control" name="perilaku_kepribadian" placeholder="Skor 0-16" title="Perilaku">
									</div>
									<div class="form-group">
										<label>Kedisiplinan / Absensi</label>
										<input type="number" class="form-control" name="kedisiplinan_kepribadian" placeholder="Skor 0-16" title="Kedisiplinan / Absensi">
									</div>
									<div class="form-group">
										<label>Tanggung Jawab, Loyalitas, dan Keikutsertaan dalam kegiatan kantor</label>
										<input type="number" class="form-control" name="tanggung_kepribadian" placeholder="Skor 0-16" title="Tanggung Jawab, Loyalitas, dan Keikutsertaan dalam kegiatan kantor">
									</div>
									<div class="form-group">
										<label>Ketaatan dalam Pelaksanaan Perintah</label>
										<input type="number" class="form-control" name="ketaatan_kepribadian" placeholder="Skor 0-16" title="Ketaatan dalam Pelaksanaan Perintah">
									</div>
								</div>
						</div>
						<div class="box box-danger">
							<div class="box-header with-border">
								<h3 class="box-title"><b>ASPEK KETERAMPILAN</b></h3>
							</div>
							<!-- /.box-header -->
								<div class="box-body">
									<div class="form-group">
										<label>Bahasa Inggris (Pasif / Sedang / Lancar)</label>
										<input type="number" class="form-control" name="inggris_keterampilan" placeholder="Skor 0-16" title="Bahasa Inggris (Pasif / Sedang / Lancar)">
									</div>
									<div class="form-group">
										<label>Aplikasi Excel (Dasar / Menengah / Pasif)</label>
										<input type="number" class="form-control" name="excel_keterampilan" placeholder="Skor 0-16" title="Aplikasi Excel (Dasar / Menengah / Pasif)">
									</div>
									<div class="form-group">
										<label>Aplikasi Ms.Word (Dasar / Menengah / Mahir)</label>
										<input type="number" class="form-control" name="msword_keterampilan" placeholder="Skor 0-16" title="Aplikasi Ms.Word (Dasar / Menengah / Mahir)">
									</div>
									<div class="form-group">
										<label>Kemampuan Menyusun dokumen indeks berdasarkan jenis dokumen</label>
										<input type="number" class="form-control" name="indeks_keterampilan" placeholder="Skor 0-16" title="Kemampuan Menyusun dokumen indeks berdasarkan jenis dokumen">
									</div>
									<div class="form-group">
										<label>Kemampuan edit dokumen / scanning</label>
										<input type="number" class="form-control" name="dokumen_keterampilan" placeholder="Skor 0-16" title="Kemampuan edit dokumen / scanning">
									</div>
									<div class="form-group">
										<label>Pemahaman dokumen projek (RFQ / PO / Kontrak / Requisiotion MOM)</label>
										<input type="number" class="form-control" name="pemahaman_keterampilan" placeholder="Skor 0-16" title="Pemahaman dokumen projek (RFQ / PO / Kontrak / Requisiotion MOM)">
									</div>
								</div>
						</div>
					</div>
					<!--/.col (right) -->
					<div class="box-footer">
						<button type="submit" class="btn btn-success pull-right" id="button-save-kpi">Save</button>
		                <button type="reset" class="btn btn-warning" id="button-reset">Reset</button>
		            </div>
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