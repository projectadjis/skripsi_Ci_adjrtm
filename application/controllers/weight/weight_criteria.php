<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class weight_criteria extends CI_Controller{
 
  public function __construct()
  {
    parent::__construct();
    $this->load->model('m_weight_criteria');
  }
 
  function index()
  {
  	 $data = [
		'title'		     => 'Weight Criteria',
		// 'css'   	=> [
            
  //       ],
		// 'js' 		=> [
  //           'adminlte/bower_components/chart.js/Chart'
  //       ],
        'weight_criteria' => $this->m_weight_criteria->get_weight_criteria()
	];
	print_r($data['weight_criteria']); die();
    $this->load->view('weight/weight_criteria/index');
  }

  function get_weight_criteria()
  {
    return $this->m_weight_criteria->get_weight_criteria();
  }

  function save()
  {
    $data                = $this->input->post();
    $save                = $this->m_weight_criteria->insert_weight_criteria($data);
    $hasil               = [];
    if ($save > 0) {
        $hasil['pesan']  = "Data has been saved";
        $hasil['status'] = 1;
    } else {
        $hasil['pesan']  = "Database operation fail";
        $hasil['status'] = 0;
    }
    echo json_encode($hasil);
  }

  function delete()
  {
    $weight_criteria_id  = $this->input->post();
    $delete              = $this->m_weight_criteria->delete_weight_kriteria($weight_criteria_id);
    $hasil               = [];
    if ($delete > 0) {
        $hasil['pesan']  = "Data has been deleted";
        $hasil['status'] = 1;
    } else {
        $hasil['pesan']  = "Fail";
        $hasil['status'] = 0;
    }
    echo json_encode($hasil);
  }
 
}