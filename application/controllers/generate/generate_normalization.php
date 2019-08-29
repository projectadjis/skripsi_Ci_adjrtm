<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class generate_normalization extends CI_Controller{
 
  public function __construct()
  {
    parent::__construct();
    $this->load->model('m_generate_alternative');
    $this->load->model('m_generate_normalization');
  }
 
  function index()
  {
    $data = [
   'title'   => "Generate's Normalization",
   // 'css'    => [
            
  //       ],
   // 'js'     => [
  //           'adminlte/bower_components/chart.js/Chart'
  //       ],
        'karyawan_id' => $this->input->get('karyawan_id')
    ];
    $this->load->view('generate/generate_normalization/index', $data);
  }

  function save_generate_normalization()
  {
    $data                        = $this->input->post();
    $generate_normalization_date = date('Y-m-d', strtotime($data['generate_normalization_date']));

    $get_generate_alternative    = $this->m_generate_alternative->get_generate_alternative();

    foreach($get_generate_alternative->result() as $row){
      $generate_alternative_id                 = $row->generate_alternative_id;
      $generate_alternative_teknispekerjaan    = $row->generate_alternative_teknispekerjaan;
      $generate_alternative_nonteknispekerjaan = $row->generate_alternative_nonteknispekerjaan;
      $generate_alternative_kepribadian        = $row->generate_alternative_kepribadian;
      $generate_alternative_keterampilan       = $row->generate_alternative_keterampilan;
      $karyawan_id                             = $row->karyawan_id;

      $max_generate_alternative_teknis_pekerjaan = $this->m_generate_alternative->max_generate_alternative_teknis_pekerjaan();

      foreach ($max_generate_alternative_teknis_pekerjaan->result() as $row) {
        $max_alternative_teknispekerjaan = $row->teknispekerjaan;
      }

      $max_generate_alternative_nonteknis_pekerjaan = $this->m_generate_alternative->max_generate_alternative_nonteknis_pekerjaan();

      foreach ($max_generate_alternative_nonteknis_pekerjaan->result() as $row) {
        $max_alternative_nonteknispekerjaan = $row->nonteknispekerjaan;
      }

      $max_generate_alternative_kepribadian = $this->m_generate_alternative->max_generate_alternative_kepribadian();

      foreach ($max_generate_alternative_kepribadian->result() as $row) {
        $max_alternative_kepribadian = $row->kepribadian;
      }

      $max_generate_alternative_keterampilan = $this->m_generate_alternative->max_generate_alternative_keterampilan();

      foreach ($max_generate_alternative_keterampilan->result() as $row) {
        $max_alternative_keterampilan = $row->keterampilan;
      }

      $normalization_teknis_pekerjaan    = $generate_alternative_teknispekerjaan / $max_alternative_teknispekerjaan;
      $normalization_nonteknis_pekerjaan = $generate_alternative_nonteknispekerjaan / $max_alternative_nonteknispekerjaan;
      $normalization_kepribadian         = $generate_alternative_kepribadian / $max_alternative_kepribadian;
      $normalization_keterampilan        = $generate_alternative_keterampilan / $max_alternative_keterampilan;
      

      $insert = [
                      "generate_normalization_teknispekerjaan"    => $normalization_teknis_pekerjaan,
                      "generate_normalization_nonteknispekerjaan" => $normalization_nonteknis_pekerjaan,
                      "generate_normalization_kepribadian"        => $normalization_kepribadian,
                      "generate_normalization_keterampilan"       => $normalization_keterampilan,
                      "generate_normalization_date"               => $generate_normalization_date,
                      "generate_alternative_id"                   => $generate_alternative_id,
                      "karyawan_id"                               => $karyawan_id
      ];

      $save_generate_normalization = $this->m_generate_normalization->insert_generate_normalization($insert);
    }
    
    $hasil               = [];
    if ($save_generate_normalization > 0) {
        $hasil['pesan']  = "Generate Normalization has been success";
        $hasil['status'] = 1;
    } else {
        $hasil['pesan']  = "Generate Normalization has been fail";
        $hasil['status'] = 0;
    }
    echo json_encode($hasil);
  }

  function check_generate_normalization()
  { 
    $previousDate               = date('Y-m-d', strtotime('-6 month'));
    $today                      = date('Y-m-d');
    $check                      = $this->m_generate_normalization->check_generate_normalization($previousDate, $today);
    $checkGenerateAlternatif    = $this->m_generate_alternative->get_generate_alternative();
    $hasil                      = [];
    if (count($check) > 0) {
        $hasil['pesan']         = "Cannot generate's normalization because you have been generate before";
        $hasil['status']        = 1;
    } elseif (count($checkGenerateAlternatif->result()) < 1) {
        $hasil['pesan']         = "Cannot generate's normalization because you don't have generate's alternatife before";
        $hasil['status']        = 2;
    } else {
        $hasil['status']        = 0;
    }

    echo json_encode($hasil);
  }
 
}