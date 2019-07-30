<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class kpi extends CI_Controller{
 
  public function __construct()
  {
    parent::__construct();
    $this->load->model('m_kpi');
  }
 
  function index()
  {
  	$data = [
		'title'		=> 'Position',
		// 'css'   	=> [
            
  //       ],
		// 'js' 		=> [
  //           'adminlte/bower_components/chart.js/Chart'
  //       ],
        'karyawan_id' => $this->input->get('karyawan_id')
	];
    $this->load->view('kpi/index', $data);
  }

  function save_kpi()
  {
    $data                       = $this->input->post();
    $karyawan_id['karyawan_id'] = $data['karyawan_id'];
    $update_status              = [
    	'karyawan_status' => 1
    ];
    $save_kpi                   = $this->m_kpi->insert_kpi($data);
    $update                     = $this->m_kpi->update_status_karyawan($karyawan_id, $update_status);
    $hasil                      = [];
    if ($save_kpi > 0) {
        $hasil['pesan']         = "Data KPI has been saved";
        $hasil['status']        = 1;
    } else {
        $hasil['pesan']         = "Database operation fail";
        $hasil['status']        = 0;
    }
    echo json_encode($hasil);
  }
 
}