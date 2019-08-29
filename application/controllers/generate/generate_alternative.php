<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class generate_alternative extends CI_Controller{
 
  public function __construct()
  {
    parent::__construct();
    $this->load->model('m_generate_alternative');
    $this->load->model('m_weight_alternative');
    $this->load->model('m_kpi');
  }
 
  function index()
  {
    $data = [
   'title'   => "Generate's Alternative",
   // 'css'    => [
            
  //       ],
   // 'js'     => [
  //           'adminlte/bower_components/chart.js/Chart'
  //       ],
        'karyawan_id' => $this->input->get('karyawan_id')
    ];
    $this->load->view('generate/generate_alternative/index', $data);
  }

  function save_generate_alternative()
  {
    $data                      = $this->input->post();
    $generate_alternative_date = date('Y-m-d', strtotime($data['generate_alternative_date']));

    $get_kpi                   = $this->m_kpi->get_kpi();

    foreach($get_kpi->result() as $row){
      $kpi_id                  = $row->kpi_id;
      $kpi_teknis_pekerjaan    = $row->kpi_teknis_pekerjaan;
      $kpi_nonteknis_pekerjaan = $row->kpi_nonteknis_pekerjaan;
      $kpi_kepribadian         = $row->kpi_kepribadian;
      $kpi_keterampilan        = $row->kpi_keterampilan;
      $karyawan_id             = $row->karyawan_id;

      $result_generate_teknis_pekerjaan = $this->m_weight_alternative->get_generate_weight_alternative_teknis_pekerjaan($kpi_teknis_pekerjaan, $karyawan_id);
      foreach ($result_generate_teknis_pekerjaan->result() as $row) {
        $generate_alternative_teknispekerjaan = $row->weight_alternative_aspek_teknis_pekerjaan_score;
      }

      $result_generate_nonteknis_pekerjaan = $this->m_weight_alternative->get_generate_weight_alternative_nonteknis_pekerjaan($kpi_nonteknis_pekerjaan, $karyawan_id);
      foreach ($result_generate_nonteknis_pekerjaan->result() as $row) {
        $generate_alternative_nonteknispekerjaan = $row->weight_alternative_aspek_nonteknis_pekerjaan_score;
      }

      $result_generate_kepribadian = $this->m_weight_alternative->get_generate_weight_alternative_kepribadian($kpi_kepribadian, $karyawan_id);
      foreach ($result_generate_kepribadian->result() as $row) {
        $generate_alternative_kepribadian = $row->weight_alternative_aspek_kepribadian_score;
      }

      $result_generate_keterampilan = $this->m_weight_alternative->get_generate_weight_alternative_keterampilan($kpi_keterampilan, $karyawan_id);
      foreach ($result_generate_keterampilan->result() as $row) {
        $generate_alternative_keterampilan = $row->weight_alternative_aspek_keterampilan_score;
      }

      $insert = [
                      "generate_alternative_teknispekerjaan"    => $generate_alternative_teknispekerjaan,
                      "generate_alternative_nonteknispekerjaan" => $generate_alternative_nonteknispekerjaan,
                      "generate_alternative_kepribadian"        => $generate_alternative_kepribadian,
                      "generate_alternative_keterampilan"       => $generate_alternative_keterampilan,
                      "generate_alternative_date"               => $generate_alternative_date,
                      "kpi_id"                                  => $kpi_id,
                      "karyawan_id"                             => $karyawan_id
      ];

      $save_generate_alternative = $this->m_generate_alternative->insert_generate_alternative($insert);
    }
    
    $hasil               = [];
    if ($save_generate_alternative > 0) {
        $hasil['pesan']  = "Generate Alternative has been success";
        $hasil['status'] = 1;
    } else {
        $hasil['pesan']  = "Generate Alternative has been fail";
        $hasil['status'] = 0;
    }
    echo json_encode($hasil);
  }

  function check_done_kpi()
  { 
    $check = $this->m_generate_alternative->check_done_kpi();
    $hasil                      = [];
    if (count($check) > 0) {
        $hasil['pesan']         = "Cannot generate's alternative because some employee get KPI not yet";
        $hasil['status']        = 1;
    } else {
        $hasil['status']        = 0;
    }
    echo json_encode($hasil);
  }

  function check_generate_alternative()
  { 
    $previousDate = date('Y-m-d', strtotime('-6 month'));
    $today = date('Y-m-d');
    $check = $this->m_generate_alternative->check_generate_alternative($previousDate, $today);
    $hasil                      = [];
    if (count($check) > 0) {
        $hasil['pesan']         = "Cannot generate's alternative because you have been generate before";
        $hasil['status']        = 1;
    } else {
        $hasil['status']        = 0;
    }
    echo json_encode($hasil);
  }
 
}