<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class alternative extends CI_Controller{
 
  public function __construct()
  {
    parent::__construct();
    $this->load->model('m_alternative');
  }
 
  function index()
  {
  	$data = [
		'title'		=> 'Alternative',
		// 'css'   	=> [
            
  //       ],
		// 'js' 		=> [
  //           'adminlte/bower_components/chart.js/Chart'
  //       ],
        'karyawan_id' => $this->input->get('karyawan_id')
	  ];
    $this->load->view('alternative/index', $data);
  }

  function get_data_generate_alternative()
  {
    $list = $this->m_alternative->get_datatables();
    $data = [];
    $no = $_POST['start'];
    foreach ($list as $field) {
      $no++;
      $date_generate = date('d/m/y', strtotime($field->generate_alternative_date));
      $row = [];
      $row[] = $no;
      $row[] = $field->user_name;
      $row[] = $field->position_name;
      $row[] = $field->generate_alternative_teknispekerjaan;
      $row[] = $field->generate_alternative_nonteknispekerjaan;
      $row[] = $field->generate_alternative_kepribadian;
      $row[] = $field->generate_alternative_keterampilan;
      $row[] = $date_generate;

      $data[] = $row;
    }

    $output = [
      "draw" => $_POST['draw'],
      "recordsTotal" => $this->m_alternative->count_all(),
      "recordsFiltered" => $this->m_alternative->count_filtered(),
      "data" => $data,
    ];
    //output dalam format JSON
    echo json_encode($output);
  }
 
}