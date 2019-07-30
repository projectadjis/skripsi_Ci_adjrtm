<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class weight_alternative extends CI_Controller{
 
  public function __construct()
  {
    parent::__construct();
    $this->load->model('m_weight_alternative');
  }
 
  function index()
  {
  	 $data = [
		'title'		     => 'Weight Alternative',
		// 'css'   	=> [
            
  //       ],
		// 'js' 		=> [
  //           'adminlte/bower_components/chart.js/Chart'
  //       ],
        'weight_alternative_aspek_teknis_pekerjaan'    => $this->get_weight_alternative_aspek_teknis_pekerjaan(),
        'weight_alternative_aspek_nonteknis_pekerjaan' => $this->get_weight_alternative_aspek_nonteknis_pekerjaan(),
        'weight_alternative_aspek_kepribadian'         => $this->get_weight_alternative_aspek_kepribadian(),
        'weight_alternative_aspek_keterampilan'        => $this->get_weight_alternative_aspek_keterampilan()
	];
    $this->load->view('weight/weight_alternative/index', $data);
  }

  function save_teknis_pekerjaan()
  {
    $data                   = $this->input->post();
    $save_teknis_pekerjaan  = $this->m_weight_alternative->insert_teknis_pekerjaan($data);
    $hasil               = [];
    if ($save_teknis_pekerjaan > 0) {
        $hasil['pesan']  = "Weight's Alternative has been saved";
        $hasil['status'] = 1;
    } else {
        $hasil['pesan']  = "Database operation fail";
        $hasil['status'] = 0;
    }
    echo json_encode($hasil);
  }

  function save_nonteknis_pekerjaan()
  {
    $data                      = $this->input->post();
    $save_nonteknis_pekerjaan  = $this->m_weight_alternative->insert_nonteknis_pekerjaan($data);
    $hasil               	   = [];
    if ($save_nonteknis_pekerjaan > 0) {
        $hasil['pesan']        = "Weight's Alternative has been saved";
        $hasil['status']       = 1;
    } else {
        $hasil['pesan']        = "Database operation fail";
        $hasil['status']       = 0;
    }
    echo json_encode($hasil);
  }

  function save_kepribadian()
  {
    $data                      = $this->input->post();
    $save_kepribadian          = $this->m_weight_alternative->insert_kepribadian($data);
    $hasil               	   = [];
    if ($save_kepribadian > 0) {
        $hasil['pesan']        = "Weight's Alternative has been saved";
        $hasil['status']       = 1;
    } else {
        $hasil['pesan']        = "Database operation fail";
        $hasil['status']       = 0;
    }
    echo json_encode($hasil);
  }

  function save_keterampilan()
  {
    $data                      = $this->input->post();
    $save_keterampilan          = $this->m_weight_alternative->insert_keterampilan($data);
    $hasil               	   = [];
    if ($save_keterampilan > 0) {
        $hasil['pesan']        = "Weight's Alternative has been saved";
        $hasil['status']       = 1;
    } else {
        $hasil['pesan']        = "Database operation fail";
        $hasil['status']       = 0;
    }
    echo json_encode($hasil);
  }

  function get_weight_alternative_aspek_teknis_pekerjaan()
  {
    return $this->m_weight_alternative->get_weight_alternative_aspek_teknis_pekerjaan();
  }

  function get_weight_alternative_aspek_nonteknis_pekerjaan()
  {
    return $this->m_weight_alternative->get_weight_alternative_aspek_nonteknis_pekerjaan();
  }

  function get_weight_alternative_aspek_kepribadian()
  {
    return $this->m_weight_alternative->get_weight_alternative_aspek_kepribadian();
  }

  function get_weight_alternative_aspek_keterampilan()
  {
    return $this->m_weight_alternative->get_weight_alternative_aspek_keterampilan();
  }

  function delete_teknis_pekerjaan()
  {
    $weight_alternative_aspek_teknis_pekerjaan_id  = $this->input->post();
    $delete_teknis_pekerjaan = $this->m_weight_alternative->delete_teknis_pekerjaan($weight_alternative_aspek_teknis_pekerjaan_id);
    $hasil               = [];
    if ($delete_teknis_pekerjaan > 0) {
        $hasil['pesan']  = "Alternative's Record has been deleted";
        $hasil['status'] = 1;
    } else {
        $hasil['pesan']  = "Fail";
        $hasil['status'] = 0;
    }
    echo json_encode($hasil);
  }

  function delete_nonteknis_pekerjaan()
  {
    $weight_alternative_aspek_nonteknis_pekerjaan_id  = $this->input->post();
    $delete_nonteknis_pekerjaan = $this->m_weight_alternative->delete_nonteknis_pekerjaan($weight_alternative_aspek_nonteknis_pekerjaan_id);
    $hasil               = [];
    if ($delete_nonteknis_pekerjaan > 0) {
        $hasil['pesan']  = "Alternative's Record has been deleted";
        $hasil['status'] = 1;
    } else {
        $hasil['pesan']  = "Fail";
        $hasil['status'] = 0;
    }
    echo json_encode($hasil);
  }

  function delete_kepribadian()
  {
    $weight_alternative_aspek_kepribadian_id  = $this->input->post();
    $delete_kepribadian = $this->m_weight_alternative->delete_kepribadian($weight_alternative_aspek_kepribadian_id);
    $hasil               = [];
    if ($delete_kepribadian > 0) {
        $hasil['pesan']  = "Alternative's Record has been deleted";
        $hasil['status'] = 1;
    } else {
        $hasil['pesan']  = "Fail";
        $hasil['status'] = 0;
    }
    echo json_encode($hasil);
  }

  function delete_keterampilan()
  {
    $weight_alternative_aspek_keterampilan_id  = $this->input->post();
    $delete_keterampilan = $this->m_weight_alternative->delete_keterampilan($weight_alternative_aspek_keterampilan_id);
    $hasil               = [];
    if ($delete_keterampilan > 0) {
        $hasil['pesan']  = "Alternative's Record has been deleted";
        $hasil['status'] = 1;
    } else {
        $hasil['pesan']  = "Fail";
        $hasil['status'] = 0;
    }
    echo json_encode($hasil);
  }
 
}