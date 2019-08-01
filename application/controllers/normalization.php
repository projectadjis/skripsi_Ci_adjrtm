<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class normalization extends CI_Controller{
 
  public function __construct()
  {
    parent::__construct();
    $this->load->model('m_normalization');
  }
 
  function index()
  {
    $data = [
    'title'   => 'Normalization',
    // 'css'    => [
            
  //       ],
    // 'js'     => [
  //           'adminlte/bower_components/chart.js/Chart'
  //       ],
        'karyawan_id' => $this->input->get('karyawan_id')
    ];
    $this->load->view('normalization/index', $data);
  }

  function get_data_generate_normalization()
  {
    $list = $this->m_normalization->get_datatables();
    $data = [];
    $no = $_POST['start'];
    foreach ($list as $field) {
      $no++;
      $date_generate = date('d/m/y', strtotime($field->generate_normalization_date));
      $row = [];
      $row[] = $no;
      $row[] = $field->karyawan_name;
      $row[] = $field->karyawan_position;
      $row[] = $field->generate_normalization_teknispekerjaan;
      $row[] = $field->generate_normalization_nonteknispekerjaan;
      $row[] = $field->generate_normalization_kepribadian;
      $row[] = $field->generate_normalization_keterampilan;
      $row[] = $date_generate;

      $data[] = $row;
    }

    $output = [
      "draw" => $_POST['draw'],
      "recordsTotal" => $this->m_normalization->count_all(),
      "recordsFiltered" => $this->m_normalization->count_filtered(),
      "data" => $data,
    ];
    //output dalam format JSON
    echo json_encode($output);
  }
 
}