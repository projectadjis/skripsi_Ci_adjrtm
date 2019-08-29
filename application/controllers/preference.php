<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class preference extends CI_Controller{
 
  public function __construct()
  {
    parent::__construct();
    $this->load->model('m_preference');
  }
 
  function index()
  {
    $data = [
    'title'   => 'Preference',
    // 'css'    => [
            
  //       ],
    // 'js'     => [
  //           'adminlte/bower_components/chart.js/Chart'
  //       ],
      'karyawan_id' => $this->input->get('karyawan_id')
    ];
    $this->load->view('preference/index', $data);
  }

  function get_data_generate_preference()
  {
    $list = $this->m_preference->get_datatables();
    $data = [];
    $no = $_POST['start'];
    foreach ($list as $field) {
      $no++;
      $date_generate = date('d/m/y', strtotime($field->generate_preference_date));
      $row = [];
      $row[] = $no;
      $row[] = $field->karyawan_name;
      $row[] = $field->karyawan_position;
      $row[] = $field->generate_preference_teknispekerjaan;
      $row[] = $field->generate_preference_nonteknispekerjaan;
      $row[] = $field->generate_preference_kepribadian;
      $row[] = $field->generate_preference_keterampilan;
      $row[] = $field->total_preference;
      $row[] = $date_generate;
      $row[] = $field->weight_criteria_unique;

      $data[] = $row;
    }

    $output = [
      "draw" => $_POST['draw'],
      "recordsTotal" => $this->m_preference->count_all(),
      "recordsFiltered" => $this->m_preference->count_filtered(),
      "data" => $data,
    ];
    //output dalam format JSON
    echo json_encode($output);
  }
 
}