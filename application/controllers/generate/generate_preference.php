<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class generate_preference extends CI_Controller{
 
  public function __construct()
  {
    parent::__construct();
    $this->load->model('m_generate_normalization');
    //$this->load->model('m_generate_preference');
  }
 
  function index()
  {
    $this->load->view('generate/generate_preference/index');
  }

  function save_generate_preference()
  {
    $data                        = $this->input->post();
    $generate_preference_date    = date('Y-m-d', strtotime($data['generate_preference_date']));

    $get_generate_normalization  = $this->m_generate_normalization->get_generate_normalization();

    foreach($get_generate_normalization->result() as $row){
      $generate_normalization_id                 = $row->generate_normalization_id;
      $generate_normalization_teknispekerjaan    = $row->generate_normalization_teknispekerjaan;
      $generate_normalization_nonteknispekerjaan = $row->generate_normalization_nonteknispekerjaan;
      $generate_normalization_kepribadian        = $row->generate_normalization_kepribadian;
      $generate_normalization_keterampilan       = $row->generate_normalization_keterampilan;
      $karyawan_id                             = $row->karyawan_id;

      $max_generate_alternative_teknis_pekerjaan = $this->m_generate_alternative->max_generate_alternative_teknis_pekerjaan();

      foreach ($max_generate_alternative_teknis_pekerjaan->result() as $row) {
        $max_alternative_teknispekerjaan = $row->teknispekerjaan;
      }

      

      $preference_teknis_pekerjaan    = $generate_alternative_teknispekerjaan / $max_alternative_teknispekerjaan;
      $preference_nonteknis_pekerjaan = $generate_alternative_nonteknispekerjaan / $max_alternative_nonteknispekerjaan;
      $preference_kepribadian         = $generate_alternative_kepribadian / $max_alternative_kepribadian;
      $preference_keterampilan        = $generate_alternative_keterampilan / $max_alternative_keterampilan;
      

      $insert = [
                      "generate_preference_teknispekerjaan"    => $preference_teknis_pekerjaan,
                      "generate_preference_nonteknispekerjaan" => $preference_nonteknis_pekerjaan,
                      "generate_preference_kepribadian"        => $preference_kepribadian,
                      "generate_preference_keterampilan"       => $preference_keterampilan,
                      "generate_preference_date"               => $generate_preference_date,
                      "generate_alternative_id"                   => $generate_alternative_id,
                      "karyawan_id"                               => $karyawan_id
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