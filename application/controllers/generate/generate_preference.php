<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class generate_preference extends CI_Controller{
 
  public function __construct()
  {
    parent::__construct();
    $this->load->model('m_generate_preference');
  }
 
  function index()
  {
    $data = [
   'title'   => "Generate's Preference",
   // 'css'    => [
            
  //       ],
   // 'js'     => [
  //           'adminlte/bower_components/chart.js/Chart'
  //       ],
        'karyawan_id' => $this->input->get('karyawan_id')
    ];
    $this->load->view('generate/generate_preference/index', $data);
  }

  function save_generate_preference()
  {
    $data                        = $this->input->post();
    $generate_preference_date    = date('Y-m-d', strtotime($data['generate_preference_date']));

    $get_generate_normalization  = $this->m_generate_preference->get_generate_normalization();

    foreach($get_generate_normalization->result() as $row){
      $generate_normalization_id                 = $row->generate_normalization_id;
      $generate_normalization_teknispekerjaan    = $row->generate_normalization_teknispekerjaan;
      $generate_normalization_nonteknispekerjaan = $row->generate_normalization_nonteknispekerjaan;
      $generate_normalization_kepribadian        = $row->generate_normalization_kepribadian;
      $generate_normalization_keterampilan       = $row->generate_normalization_keterampilan;
      $karyawan_id                               = $row->karyawan_id;


      $get_weight_criteria = $this->m_generate_preference->get_weight_criteria();

      foreach ($get_weight_criteria->result() as $row) {
        $weight_criteria_teknispekerjaan    = $row->weight_criteria_teknispekerjaan;
        $weight_criteria_nonteknispekerjaan = $row->weight_criteria_nonteknispekerjaan;
        $weight_criteria_kepribadian        = $row->weight_criteria_kepribadian;
        $weight_criteria_keterampilan       = $row->weight_criteria_keterampilan;
      }

      $generate_preference_teknispekerjaan     = $weight_criteria_teknispekerjaan * $generate_normalization_teknispekerjaan;

      $generate_preference_nonteknispekerjaan  = $weight_criteria_nonteknispekerjaan * $generate_normalization_nonteknispekerjaan;

      $generate_preference_kepribadian         = $weight_criteria_kepribadian * $generate_normalization_kepribadian;

      $generate_preference_keterampilan        = $weight_criteria_keterampilan * $generate_normalization_keterampilan;

      $total_preference                        = $generate_preference_teknispekerjaan + $generate_preference_nonteknispekerjaan + $generate_preference_kepribadian + $generate_preference_keterampilan;

      $insert = [
                      "generate_preference_teknispekerjaan"    => $generate_preference_teknispekerjaan,
                      "generate_preference_nonteknispekerjaan" => $generate_preference_nonteknispekerjaan,
                      "generate_preference_kepribadian"        => $generate_preference_kepribadian,
                      "generate_preference_keterampilan"       => $generate_preference_keterampilan,
                      "generate_preference_date"               => $generate_preference_date,
                      "total_preference"                       => $total_preference,
                      "generate_normalization_id"              => $generate_normalization_id,
                      "karyawan_id"                            => $karyawan_id
      ];

      $save_generate_preference = $this->m_generate_preference->insert_generate_preference($insert);
    }
    
    $hasil               = [];
    if ($save_generate_preference > 0) {
        $hasil['pesan']  = "Generate preference has been success";
        $hasil['status'] = 1;
    } else {
        $hasil['pesan']  = "Generate preference has been fail";
        $hasil['status'] = 0;
    }
    echo json_encode($hasil);
  }
 
}