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

  function hasil_kpi()
  {
    $data = [
    //'title'   => 'Position',
    // 'css'    => [
            
  //       ],
    // 'js'     => [
  //           'adminlte/bower_components/chart.js/Chart'
  //       ],
        //'hasil_kpi' => $this->get_data_kpi()
  ];
    $this->load->view('kpi/hasilkpi');
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

  function get_data_kpi()
  {
    $list = $this->m_kpi->get_datatables();
    $data = [];
    $no = $_POST['start'];
    foreach ($list as $field) {
      $no++;
      $row = [];
      $row[] = $no;
      $row[] = $field->karyawan_name;
      $row[] = $field->karyawan_position;
      $row[] = $field->kpi_teknis_pekerjaan;
      $row[] = $field->kpi_nonteknis_pekerjaan;
      $row[] = $field->kpi_kepribadian;
      $row[] = $field->kpi_keterampilan;

      $data[] = $row;
    }

    $output = [
      "draw" => $_POST['draw'],
      "recordsTotal" => $this->m_kpi->count_all(),
      "recordsFiltered" => $this->m_kpi->count_filtered(),
      "data" => $data,
    ];
    //output dalam format JSON
    echo json_encode($output);
  }
 
}